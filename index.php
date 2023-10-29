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
            <a href="https://www.instagram.com/rlyzion/"><button>Contact Us</button></a>
            <a href="https://github.com/rlyzionn"><button>About Us</button></a>
            <?php
            // Check if the user is logged in, and show the appropriate button
            
            if (isset($_SESSION['username'])) {
                echo '<a href="home.php"><button>My Account</button></a>';
            } else {
                echo '<a href="login.php"><button>Login</button></a>';
            }
            ?>
        </div>
    </div>
</body>
</html>
