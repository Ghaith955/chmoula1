// Example: Form Validation for Login and Signup
document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.querySelector('.login-form form');
    const signupForm = document.querySelector('.signup-form form');

    if (loginForm) {
        loginForm.addEventListener('submit', function (e) {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (!email || !password) {
                e.preventDefault();
                alert('Please fill in all fields.');
            }
        });
    }

    if (signupForm) {
        signupForm.addEventListener('submit', function (e) {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (!email || !password) {
                e.preventDefault();
                alert('Please fill in all fields.');
            } else if (password.length < 6) {
                e.preventDefault();
                alert('Password must be at least 6 characters long.');
            }
        });
    }
});

// Example: Smooth Scrolling for Anchor Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Example: Toggle Mobile Menu (if you add a mobile-responsive design)
const mobileMenuButton = document.querySelector('.mobile-menu-button');
const navMenu = document.querySelector('nav ul');

if (mobileMenuButton && navMenu) {
    mobileMenuButton.addEventListener('click', function () {
        navMenu.classList.toggle('active');
    });
}
// Smooth Scrolling for Anchor Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});