<?php
session_start();
require_once './views/header.php';

include("./requires/connection.php");
$login="";

if (isset($_SESSION['login'])){
	$login=$_SESSION['login'];
	$_SESSION['loggedin']=$login;}
	
if ($login=="login"){
	?>
<html>
    <head>
        
        <style>
h1{
	text-align: center;	
}

table{
	border:2px solid black;
	background-color: light blue;
	margin:0 auto;
}
th{
	border-bottom:5px solid black;
}
td{
	border-bottom: 2px solid blue;
}
*{
	position:static;
	}
.container {
    overflow: hidden;
    background-color: #8C8A8A;
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
</head>   
  <body>
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<header class="w3-panel w3-center w3-opacity" style="padding:128px 16px">
 
  
  <div class="container">
  <a href="welcomepage.php" style="color:white;">Home</a>
    <div class="dropdown">
    <button class="dropbtn" style="margin-top:3px; color:white;">Users</button>
    <div class="dropdown-content">
      <a href="addUser.php" style="color:#220606;">New user</a>
      <a href="viewUsers.php" style="color:#220606">User info</a>
      
    </div>
  </div>
   <div class="dropdown">
    <button class="dropbtn"  style="margin-top:3px; color:white;">Products</button>
    <div class="dropdown-content">
      <a href="addProduct.php" style="color:#220606">New Product</a>
      <a href="viewProducts.php" style="color:#220606">Products info</a>
      
    </div>
  </div> 
  <a href="logout.php" style="color:white">Logout</a>
</div>
</header>
<br><br><br>
  </body>  
</html>

<!-- ================================================ -->
<?php
$query = "SELECT * FROM users";
$result = mysqli_query($connection,$query);
if (!$result)
{
    die ("Error");
}
echo "<table>";
echo "<tr><th>User ID</th><th>User Name</th><th>User Password</th><th>Edit</th><th>Delete</th></tr>";

while ($row = mysqli_fetch_array($result)){
	
	
	
    
    echo "<tr><td>";
    echo $row['userID'];
    echo "</td>";
    
    echo "<td>";
    echo $row['userName'];
    echo "</td>";
    
    echo "<td>";
    echo $row['userPassword'];
    echo "</td>";
   
    
    echo "<td>";
    echo '<a href="editUser.php?id=' . $row['userID'] . '">Edit</a></td>';
    
    echo "<td>";
    echo '<a href="deleteUser.php?id=' . $row['userID'] . '">Delete</a></td>';
}
echo "</table>";
echo "<br><br>";
?>
<html>
<body>
	<a href="logout.php"><center><input type="button" value="logout"> </center></a><br><br><br>
</body>

</html>
<!-- ================================================ -->

<?php

}
else {
	header ("Location: login.php");}
?>
<?php
require_once './views/footer.php';
?>
