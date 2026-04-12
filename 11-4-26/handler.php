<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];
    $gender = $_POST['gender'] ?? "";
    $dob = $_POST['dob'];
    $bg = $_POST['bg'];
    $degrees = $_POST['degree'] ?? [];

    // Validation
    
        echo "<b>Output:</b><br>";
        echo $name . "<br>";
        echo $email . "<br>";
        echo $password . "<br>";
        echo $number . "<br>";
        echo $gender . "<br>";
        echo $dob . "<br>";
        echo $bg . "<br>";

        foreach ($degrees as $d) {
            echo $d . " ";
        }
    
}
?>