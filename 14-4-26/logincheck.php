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
                setcookie('status', 'true', time()+5000, '/');
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