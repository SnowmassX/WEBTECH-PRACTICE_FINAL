<?php
    $host = "127.0.0.1";
    $dbuser = "root"; 
    $dbname = "lab-5";
    $dbpassword = "";

    function getConnection(){
        global $host, $dbuser;
        $con = mysqli_connect($host, $dbuser, $GLOBALS['dbpass'], $GLOBALS['dbname']);
        return $con;
    }
?>