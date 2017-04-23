<?php
session_start();
require_once './views/header.php';

?>

<!-- ================================================ -->
<?php

if (isset($_SESSION['productadded'])){
	$product_added=$_SESSION['productadded'];
	unset ($_SESSION['productadded']);
	echo "<div style=font-weight:bold; font-size:20px;><b>$product_added</b></div>";
}
	
$login="";

if (isset($_SESSION['login'])){
	$login=$_SESSION['login'];
}

if ($login=="login"){  ?>
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
<header class="w3-panel w3-center w3-opacity" style="padding:128px 16px">
 
  <div class="container">
  <a href="index.php" style="color:white">Home</a>
    <div class="dropdown">
    <button class="dropbtn">Users</button>
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

</header>

<form action="productProcess.php" method="post" enctype="multipart/form-data">
    
      
    
    Product Name
    <input type="text" name="productName" value="" placeholder="Product Name" required><br><br><br>
    
    
    
  
    Product Price
    <input type="number" name="productPrice" value="" placeholder="Product Price" required><br><br><br>
    
    
    
  
    Product Code
    <input type="text" name="productCode" value="" placeholder="Product Code" required><br><br><br>
    
    
    
  
    Product In Stock
    <select name="productInStock">
    	<option value="No">In Stock</option>
    	<option value="Yes">Available</option>
       	<option value="No">Not Available</option>
     
    
    </select>
    <br><br><br>
    

  Product Discount
       <input type="number" name="productDiscount" value="" placeholder="Product Discount" required><br><br><br>
    
       
   Product Sizes
    
        
        
  <input type="text" name="productSizes" value="" placeholder="Product Sizes" required><br><br><br>
    
    
    
      Product Details
    
        
      
    <input type="text" name="productDetails" value="" placeholder="Product Details" required><br><br><br>
    
    </b>
    
    <input type="file" name="file" id="image" required ><br>
    
    <input type="submit" name="submit" value="submit">
    
</form>
<!-- ================================================ -->



<?php

}
else{
	
	header ("Location: login.php");}
require_once './views/footer.php';
?>
