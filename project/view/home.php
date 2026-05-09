<?php
session_start();
if(isset($_SESSION['email'])){
    
    $email = $_SESSION['email'];
    echo $email."  hello";
}
else{
    echo "no login yet";
}
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <header>
        <section>
            <h2>Amar Bazar</h2>
        </section>
        <section>
            <form action="" method="get">
                <input type="text" name="search">
            </form>
        </section>
        <nav>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
            <a href=".php">Cart</a>
            <a href="../controller/logout.php">logout</a>
            <a href="profile.php" >Profile</a>
        </nav>
        <br><br>
    </header>
    <main>
        <section>
            Pant <br>
            price: 50$ <br>
            Available: 300
            <button>Add to Cart</button>
        </section><br>
        <section>
            Shirt <br>
            price: 50$ <br>
            Available: 300
            <button>Add to Cart</button>
        </section><br>
        <section>
            Shoe <br>
            price: 50$ <br>
            Available: 300
            <button>Add to Cart</button>
        </section>
    </main>
    <footer>
        
    </footer>
</body>
</html>