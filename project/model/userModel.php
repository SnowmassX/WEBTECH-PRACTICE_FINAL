<?php

require_once('db.php');

function addUser($user){

    $con = getConnection();

    $sql = "INSERT INTO users(id,name,email,password,gender,education,image,created_at)
    VALUES(
        '',
        '{$user['name']}',
        '{$user['email']}',
        '{$user['password']}',
        '{$user['gender']}',
        '{$user['education']}',
        '{$user['image']}',
        '{$user['time']}'
    )";

    $result = mysqli_query($con, $sql);

    if($result){
        return true;
    }
    else{
        die(mysqli_error($con));
    }
}
function login($user){
    $con = getConnection();
    $sql = "select * from users where email='{$user['email']}' and password='{$user['password']}'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) == 1){
        return true && mysqli_fetch_assoc($result);
    }
    else{
        return false;
    }
}
function getUserByEmail($email){
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($con, $sql);
    // Fetch the data as an array before returning
    return mysqli_fetch_assoc($result); 
}

function deleteUser(){

}

function updateUser(){

}
