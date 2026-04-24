<?php
    session_start();

    if(isset($_POST['submit'])){
        if(!isset($_SESSION['users'])){
            echo "no user registered";
             exit();
        }
       
    
        $_SESSION['status'] = false;
        foreach($_SESSION['users'] as $u){
            if($u['email'] == $_POST['email'] && $u['password'] == $_POST['password']){
                $_SESSION['current_user'] = $u;
                $_SESSION['status'] = true;
                header("location: ../view/dashboard.php");
                exit();
            }
        }
        if(!$_SESSION['status']){
            echo "Invalid Login!";
        }
    }
?>