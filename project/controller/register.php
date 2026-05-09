<?php

require_once('../model/userModel.php');

if(isset($_POST['submit'])){

    $education = implode(",", $_POST['education']);

    $imageName = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmpName, "../assets/upload/" . $imageName);
    $now = new DateTime();
    
    $user = [
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "password" => $_POST['password'],
        "gender" => $_POST['gender'],
        "education" => $education,
        "image" => $imageName,
        "time" => $now->format('Y-m-d H:i:s')
    ];

    $status = addUser($user);

    if($status){
        echo "Success";
    }
}
?>