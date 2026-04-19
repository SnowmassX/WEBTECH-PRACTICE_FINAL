<?php
    if(isset($_POST['submit'])){
        $file = $_FILES['file']['name'];
        $src = $_FILES['file']['tmp_name'];
        $des = 'Uploads/'.$file;
    }
    if(move_uploaded_file($src, $des)){
        echo "success";
    }
    else{
        echo "fail";
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?php echo $des?>" alt="" width="400"> 
</body>
</html>