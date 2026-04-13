<?php
    $name = $_FILES['file']['name'];
    $src = $_FILES['file']['tmp_name'];
    $des = 'upload/'.$name;
    if(move_uploaded_file($src, $des)){
        echo "success";
    }
    else{
        echo "error";
    }
?>