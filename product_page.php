
<?php
require_once './views/header.php';
?>

<?php
include("./requires/connection.php");
$query = "SELECT * FROM products";
$result = mysqli_query($connection,$query);
if (!$result)
{
    die ("Error");
}

?>


      <br><br><br>
      
     <div id="summer-collection">
             <img src="images/diamong-icon.png">Products Collection
              <img src="images/diamong-icon.png">
          </div>
          
          
          <div id="summer-products">
<?php
$temp=0;	
echo "<div>";
while($row=mysqli_fetch_array($result))
{
if ($row['productInStock']!="Yes"){
	continue;
	}
$temp++;

 echo "<a href='product_details.php?id=$row[productID]'><img src=\"images/".$row['imageAddress']."\"width=300 height=300 /></a>";
 echo ("    ");
 
if ($temp==4){
	echo "</div>";
}
}



 ?>
<!--
                <div id="summer-products-row1">
                

                       <a href="product_details.php"><img src="images/FEATURED 1.png"></a> 
                       <a href="#"><img src="images/FEATURED 1 copy.png"></a>
                 </div>
                 
                 <div id="summer-products-row2">
                       <a href="product_details.php"><img src="images/FEATURED 2.png"></a>
                       <a href="product_details.php"><img src="images/FEATURED 2 copy.png"></a>
                 </div>
                 
                 <div id="summer-products-row3">
                       <a href="product_details.php"><img src="images/FEATURED 3.png"></a>
                       <a href="product_details.php"><img src="images/FEATURED 3 copy.png"></a>
                 </div>
                 
                 <div id="summer-products-row4">
                       <a href="product_details.php"><img src="images/FEATURED 4.png"></a>
                       <a href="product_details.php"><img src="images/FEATURED 4 copy.png"></a>
               
                 </div>
                 
          </div> -->
          <div>
          <br><br><br>
          </div>
      <?php

require_once './views/sponsors.php';
require_once './views/footer.php';
?>