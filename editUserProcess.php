<?php
require_once './views/header.php';
require("./requires/connection.php");
?>
<!-- ================================================ -->

<?php
$userID = $_POST['userID'];

$userName = $_POST['userName'];
$userPassword = $_POST['userPassword'];

$sqlinsert = "UPDATE users SET userName='$userName',userPassword='$userPassword' where userId='$userID'";


$result = mysqli_query($connection,$sqlinsert);
 
if(!$result)
{
  die('Could not enter data: ' . mysql_error());
}
 
	header("Location: viewUsers.php?status=yes");







?>
<!-- ================================================ -->

<?php
require_once './views/sponsors.php';
require_once './views/footer.php';
?>
