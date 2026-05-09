<?php 
    session_start();
    // Check if the session user data exists
    if(isset($_SESSION['user'])){ 
        $user = $_SESSION['user']; 
?>
    <h1>User Profile</h1>
    <p><b>Name:</b> <?php echo $user['name']; ?></p>
    <p><b>Email:</b> <?php echo $user['email']; ?></p>
    <p><b>Gender:</b> <?php echo $user['gender']; ?></p>
    <p><b>Education:</b> <?php echo $user['education']; ?></p>
    <img src="../assets/upload/<?php echo $user['image']; ?>" width="150">

<?php } else { ?>
    <p>No user found. Please <a href="login.php">login</a>.</p>
<?php } ?>
