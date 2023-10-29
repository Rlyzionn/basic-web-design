<?php
// Start a new session or resume the existing session
session_start();

// Check if the user is not logged in, and if not, redirect them to the login page
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Get the logged-in user's username from the session
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$address = $_SESSION['address'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>User Details</h2>
        <p>Welcome, <?php echo $username?>!</p>
        <p>Email to Contact: <?php echo $email?></p>
        <p>Your Adress: <?php echo $address?></p>
    </div>

    <div class="button-container">
            <a href="home.php"><button>Back</button></a>
        </div>
</body>
</html>
