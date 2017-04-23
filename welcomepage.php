<?php
session_start();
require_once './views/header.php';
if (isset($_SESSION['login'])){
	if ($_SESSION['login']=="login"){
?>

<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*{
	position:static;
	}
	#full-page a{
		color:#E76AEF;
		}
		#header-bottom-menu a {
    font-family: Franklin Gothic Demi;
    color: #787070;
    font-style: oblique;
    font-size: 22px;
    font-weight: bolder;
    padding-bottom: 10px;
}
#footer a {
    color: #B09798;
}
.container {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.container a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.container a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	color:white;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}


body,h1 {font-family: "Raleway", Arial, sans-serif}
h1 {letter-spacing: 6px}
.w3-row-padding img {margin-bottom: 12px}
</style>
<body>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<header class="w3-panel w3-center w3-opacity" style="padding:100px 16px">
  <h1 class="w3-xlarge" style="text-align:center">Welcome</h1>
  <h1  style="text-align:center">Admin</h1>
  
  <div class="container">
  <a href="index.php" style="color:white">Home</a>
    <div class="dropdown">
    <button class="dropbtn" style="padding-bottom:10px;">Users</button>
    <div class="dropdown-content">
      <a href="addUser.php" style="color:#220606">New user</a>
      <a href="viewUsers.php" style="color:#220606">User info</a>
      
    </div>
  </div>
   <div class="dropdown">
    <button class="dropbtn">Products</button>
    <div class="dropdown-content">
      <a href="addProduct.php" style="color:#220606">New Product</a>
      <a href="viewProducts.php" style="color:#220606">Products info</a>
      
    </div>
  </div> 
  <a href="logout.php" style="color:white">Logout</a>
</div>
<br><br><br>
<a href="logout.php"><center><input type="button" value="logout"> </center></a><br><br><br>

</header>


<?php
}
	}
	else{
		header ("Location: login.php");
		}
?>

<?php

require_once './views/footer.php';
?>
