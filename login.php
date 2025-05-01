<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate credentials (dummy check for example)
    if ($email === "user@example.com" && $password === "password") {
        $_SESSION['user'] = $email;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid credentials!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Chmoula</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">Chmoula</div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <section class="login-form">
        <h2>Login</h2>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form action="login.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2023 Chmoula. All rights reserved.</p>
    </footer>
</body>
</html>