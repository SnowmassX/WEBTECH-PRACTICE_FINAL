<?php
    session_start();
    require_once('../model/userModel.php');
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password =$_POST['password'];

        $user=[
            "email" =>$email,
            "password"=> $password
        ];

        $status = login($user);
        if($status){
            $_SESSION['email']=$email;
            
            $userData = getUserByEmail($email); 
            $_SESSION['user'] = $userData; 
            if($userData['role'] == "Admin"){
                header('location: ../view/admin/dashboard.php');
                exit();
            }
            header('location: ../view/home.php');
        }
    }
?>