<?php

session_start();
require_once './views/header.php';

?>
<?php
$login="";

if (isset($_SESSION['login'])){
	$login=$_SESSION['login'];
}
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

</html>
<html>
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
</body>

</html>


<!-- ================================================ -->
<?php
include("./requires/connection.php");
$query = "SELECT * FROM products";
$result = mysqli_query($connection,$query);
if (!$result)
{
    die ("Error");
}
echo "<table>";
echo "<tr><th>Product ID</th><th>Product Name</th><th>Product Price</th>"
. "<th>Product Code</th><th>Product In Stock</th>"
        . "<th>Product Discount</th><th>Product Sizes</th><th>Product Details</th><th>Product Image</th><th>Edit</th><th>Delete</th></tr>";

while ($row = mysqli_fetch_array($result)){
	
	
	
    
    echo "<tr><td>";
    echo $row['productID'];
    echo "</td>";
    
    echo "<td>";
    echo $row['productName'];
    echo "</td>";
    
    echo "<td>";
    echo $row['productPrice'];
    echo "</td>";
    
    echo "<td>";
    echo $row['productCode'];
    echo "</td>";
    
    echo "<td>";
    echo $row['productInStock'];
    echo "</td>";
    
    echo "<td>";
    echo $row['productDiscount'];
    echo "</td>";
    
    echo "<td>";
    echo $row['productSizes'];
    echo "</td>";
    
    echo "<td>";
    echo $row['productDetails'];
    echo "</td>";
	
	echo "<td>";
	//$s=$row['imageAddress'];
    //echo $row['imageAddress'];
//	echo "<img src='images/ ".$row['imageAddress']."' />";
	echo "<img src = 'images/".$row['imageAddress']."' width=50 height=50 >";
	 echo "</td>";
    
    echo "<td>";
    echo '<a href="editProduct.php?id=' . $row['productID'] . '">Edit</a></td>';
    
    echo "<td>";
    echo '<a href="deleteProduct.php?id=' . $row['productID'] . '">Delete</a></td>';
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
else{
	header("Location: login.php");
	}

require_once './views/footer.php';
?>
