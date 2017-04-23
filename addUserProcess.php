<?php
session_start();
require("./requires/connection.php");

if (isset($_SESSION['userName'])){
	$userName = $_SESSION['userName'];
	$userPassword =md5($_SESSION['userPassword']);
	}
	
	
	$sqlinsert = "insert into users (userID,userName,userPassword)  values (NULL,'$userName','$userPassword')";



$result = mysqli_query($connection,$sqlinsert);
 
if(!$result)
{
  die('Could not enter data: ' . mysql_error());
}
 
	header("Location: viewUsers.php");





?>