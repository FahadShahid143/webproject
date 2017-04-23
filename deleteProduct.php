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
	$dbselect = "DELETE FROM products WHERE productID= '".$id."';";
	
	$res= mysqli_query($connection, $dbselect) or die ('Error');
	
	header("Location: viewProducts.php?status=yes");
	
}

}
?>
<?php
require_once './views/footer.php';
?>
