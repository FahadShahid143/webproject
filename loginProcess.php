<?php
session_start();
require("./requires/connection.php");

if (isset($_SESSION['userName'])){
	$userName = $_SESSION['userName'];
	$userPassword = md5($_SESSION['userPassword']);
	
	
	
	
	$query = "SELECT * FROM users";
$result = mysqli_query($connection,$query);
if (!$result)
{
    die ("Error");
}
$temp=0;
while ($row = mysqli_fetch_array($result)){
	
	if($row['userName'] == $userName &&  $row['userPassword'] == $userPassword){
	
	$temp=1;
	$_SESSION['login']="login";
	header("Location: welcomepage.php");
		
		
	}
	
}
if ($temp==0){
	$_SESSION['msg']="Wrong User Name or Password";
					header("Location: login.php");
	}

		

	



}

?>