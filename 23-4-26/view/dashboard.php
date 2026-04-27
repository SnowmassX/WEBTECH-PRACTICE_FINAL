<?php
    session_start();
    if(!isset($_SESSION['current_user'])){
        header("location: login.html");
        exit();
    }
    $user = $_SESSION['current_user'];
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <a href="logout.php">logout</a>
    <a href="home.html">logout</a>
    
    <header>
        
        <a href="profile.php">View Profile</a> |
        <a href="edit_profile.php">Edit Profile</a> |
        <a href="products.php">Products</a> |
        <a href="change_password.php">Change Password</a>
    </header>
    <div>
        welcome home <?= $user['username'] ?>
    </div>
    <footer>

    </footer>
</body>

</html>
