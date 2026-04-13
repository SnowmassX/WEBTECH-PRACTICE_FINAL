<?php
    session_start();
    if(isset($_REQUEST['submit'])){
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        if($email == "" || $password == ""){
            echo "null";
        }
        else{
            if($email == $password){
                $_SESSION['status'] = true;
                header('location: home.php');
            }
            else{
                echo "invalid user";
            }
        }
    }
    else{
        header('location: index.html');
    }
?>