<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbweb";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (!$connection){
    die ("Connection Failed" . mysqli_error());
}

$mydatabae = mysqli_select_db($connection, $dbname);
if (!$mydatabae){
    die("Database Selection failed".mysqli_error());
}

?>
