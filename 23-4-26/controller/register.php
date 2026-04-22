<?php
    session_start();
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $username = $_POST['username'];
        $gender = $_POST['gender'];
        if($email == "" || $password =="" || $username == "" || $gender == ""){
            echo "all fields are required";
        }
        elseif($email == $password){
            echo "email and password cant be same";
        }
        else{
            $user = [
                "email"=>$email,
                "password"=>$password,
                "username"=>$username,
                "gender"=>$gender
            ];
            $_SESSION['users'] = $user;
            header('location: login.html');
        }
    }
?>