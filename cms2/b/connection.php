<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cms2";

$conn = mysqli_connect($dbhost , $dbuser , $dbpass , $dbname);

if(!isset($conn)){
    echo die("Database connection failed");
}
?>