<?php
session_start();
require_once './views/header.php';
include("./requires/connection.php");

if (isset($_GET['id'])){
	var_dump($_GET['add']);
	die;
	}

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
	//var_dump($name2);
	//die;
    if(isset($name)){
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
}

//$folder="images/";
//$newadd=$_POST['productName'].$_FILES["image"]["name"];


//$path=$folder.$newadd;
//move_uploaded_file($_FILES["image"]["tmp_name"], $path);


$sqlinsert = "insert into products (productID,productName,productPrice,productCode,productInStock,ProductDiscount,ProductSizes,ProductDetails,imageAddress)  values (NULL,'$productName','$productPrice','$productCode','$productInStock', '$productDiscount','$productSizes', '$productDetails','$newadd')";



$result = mysqli_query($connection,$sqlinsert);
 
if(!$result)
{
  die('Could not enter data: ' . mysql_error());
}

	$_SESSION['add']="add"; 
	$_SESSION['productadded']="1 Product added";
	header("Location: addProduct.php?id=yes");









?>
<!-- ================================================ -->

<?php
require_once './views/sponsors.php';
require_once './views/footer.php';
?>
