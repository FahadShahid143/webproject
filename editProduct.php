<?php
require_once './views/header.php';
require("./requires/connection.php");
session_start();
?>

<?php


$login="";

if (isset($_SESSION['login'])){
	$login=$_SESSION['login'];
}
	
if ($login=="login"){
if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$dbselect = "SELECT * FROM products WHERE productID= '".$id."';";
	
	$res= mysqli_query($connection, $dbselect) or die ('Error');
	
	
	
while($row = mysqli_fetch_array($res))
{ 
$options=$row['productInStock'];
?>
<!-- ================================================ -->
<form action="editProductProcess.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="productID" id="productID" value="<?php echo $row['productID'];?>" />
    
      Product ID
    <input type="number" name="productID" id="productID" value="<?php echo $row['productID'];?>" placeholder="Product ID" disabled><br><br><br>
    
    
    
    Product Name
    <input type="text" name="productName" id="productName" value="<?php echo $row['productName'];?>" placeholder="Product Name" required><br><br><br>
    
    
    
  
    Product Price
    <input type="number" name="productPrice" id="productPrice" value="<?php echo $row['productPrice'];?>" placeholder="Product Price" required><br><br><br>
    
    
    
  
    Product Code
    <input type="text" name="productCode" id="productCode" value="<?php echo $row['productCode'];?>" placeholder="Product Code" required><br><br><br>
    
    
    Product In Stock
    <select name="productInStock">
    	<option value="-1">In Stock</option>
    	<option value="Yes" <?php if($options=="Yes") echo 'selected="selected"'; ?> >Available</option>
<option value="No" <?php if($options=="No") echo 'selected="selected"'; ?> >Not Available</option>
     
    
    </select>
    <br><br><br>
  
   
  Product Discount
       <input type="number" name="productDiscount" id="productDiscount" value="<?php echo $row['productDiscount'];?>" placeholder="Product Discount" required><br><br><br>
    
       
   Product Sizes
  
  <input type="text" name="productSizes" id="productSizes" value="<?php echo $row['productSizes'];?>" placeholder="Product Sizes" required><br><br><br>
    
    
    
      Product Details
     
    <input type="text" name="productDetails" id="productDetails" value="<?php echo $row['productDetails'];?>" placeholder="Product Details" required><br><br><br>
    
    </b>
    
  <?php echo "<img src = 'images/".$row['imageAddress']."' width=50 height=50 >";?>

    <input type="file" name="file" id="image"><br>
    
    <input type="submit" name="submit" value ="submit">
</form>
<!-- ================================================ -->
<?php
}
}

}
else{
	header ("Location: login.php");
	}
?>
<?php
require_once './views/footer.php';
?>
