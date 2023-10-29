<?php
// Start a new session or resume the existing session
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
}

// Handle the logout action
if (isset($_GET['logout'])) {
    // Clear the session data and destroy the session
    session_unset();
    session_destroy();
    header('Location: login.php'); // Redirect back to the home page
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="text-header">
            <h2>Maaz's Estore</h2>
            <p>Welcome to the finest Estore, Join us today to get free Newsletters</p>
        </div>

        <div class="button-container">
        <?php
            if ($isLoggedIn) {
                // Display "My Account" button and "Logout" button
                echo '<a href="userdetails.php"><button>My Details</button></a>';
                echo '<a href="?logout=true"><button>Logout</button></a>';
            } else {
                // Display "Login" button
                echo '<a href="login.php"><button>Login</button></a>';
            }
            ?>
            <a href="itemslist.php"><button>Explore items</button></a>
        </div>

    
    </div>
</body>
</html>
