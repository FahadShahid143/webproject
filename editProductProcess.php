<?php
require_once './views/header.php';
require("./requires/connection.php");
session_start();
?>
<!-- ================================================ -->

<?php
$productID = $_POST['productID'];

$productName = $_POST['productName'];
$productPrice = $_POST['productPrice'];
$productCode = $_POST['productCode'];
$productInStock = $_POST['productInStock'];
$productDiscount = $_POST['productDiscount'];
$productSizes = $_POST['productSizes'];
$productDetails = $_POST['productDetails'];

$newadd="";
	if(isset($_POST['submit'])){
    $name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];
	$name2=$productName.$name;  
	
	    if(!empty($name)){      
            $location = 'images/';
				
            if(move_uploaded_file($temp_name, $location.$name2)){
                echo 'File uploaded successfully';
				$newadd=$productName.$_FILES['file']['name'];
			
			}
        }       
    }  else {
        echo 'You should select a file to upload !!';
    }



if ($name!='')
{
	$sqlinsert = "UPDATE products SET productName='$productName',productPrice='$productPrice',productCode='$productCode',productInStock='$productInStock',productDiscount='$productDiscount',productSizes='$productSizes',productDetails='$productDetails',imageAddress='$name2' where productId='$productID'";
	}
	
	else{
$sqlinsert = "UPDATE products SET productName='$productName',productPrice='$productPrice',productCode='$productCode',productInStock='$productInStock',productDiscount='$productDiscount',productSizes='$productSizes',productDetails='$productDetails' where productId='$productID'";
	}

$result = mysqli_query($connection,$sqlinsert);
 
if(!$result)
{
  die('Could not enter data: ' . mysql_error());
}
 	$_SESSION['login']="login";
	

	header("Location: viewProducts.php?status=yes");







?>
<!-- ================================================ -->

<?php
require_once './views/sponsors.php';
require_once './views/footer.php';
?>
