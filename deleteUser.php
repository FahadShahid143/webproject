<?php
require_once './views/header.php';
require("./requires/connection.php");
?>

<?php
if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$dbselect = "DELETE FROM users WHERE userID= '".$id."';";
	
	$res= mysqli_query($connection, $dbselect) or die ('Error');
	
	header("Location: viewUsers.php?status=yes");
	
}


?>
<?php
require_once './views/footer.php';
?>
