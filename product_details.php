<?php
require_once './views/header.php';

?>


<?php
if (isset($_GET)){
	include("./requires/connection.php");

	$id = $_GET['id'];
	}
	
	$query = "SELECT * FROM products where productID='$id'";
$result = mysqli_query($connection,$query);
if (!$result)
{
    die ("Error");
}
echo "<div id='product_detail'>";
echo "<div id='product_left'>";
while ($row = mysqli_fetch_array($result)){
	
	echo "<img src=\"images/".$row['imageAddress']."\"width=300 height=300 /></div>";
	
	echo "<div><b>Product Details:</b>$row[productDetails]<br><br>
				<b>Product Name:</b>$row[productName]<br><br>
            	<b>Product Code:</b>$row[productCode]<br><br>
            	<b>Product in Stock:</b>$row[productInStock]<br><br>
            	<b>Product Discount:</b>$row[productDiscount]<br><br>
            	<b>Available Sizes:</b>$row[productSizes]<br></div>";
?>
<!--
<div id="product_detail">
      		<div id="product_left">
            		<img src="images/FEATURED 1.png">
            </div>
            
            <div id="product_right">
             <h1>About Sophia Collection</h1>
            <ul>
            <li><h2><strong>Debuting the sophia royal collection:</strong></h2></li>
            	<b>Product Details:</b>PKR 2500<br>
            	<b>Product Code:</b>00112233<br>
            	<b>Product in Stock:</b>Yes<br>
            	<b>Product Discount:</b>20%<br>
            	<b>Available Sizes:</b>Small,Medium,Large<br>
            
            </div>
      
      </ul>
       </div>


-->
</div>
</div>
<?php
}
require_once './views/footer.php';

?>
