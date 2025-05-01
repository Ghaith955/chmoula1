<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Chmoula</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">Chmoula</div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section class="dashboard">
        <h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
        <p>Explore our delicious Tunisian dishes.</p>
    </section>

    <footer>
        <p>&copy; 2023 Chmoula. All rights reserved.</p>
    </footer>
</body>
</html>