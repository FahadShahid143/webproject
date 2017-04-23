<?php
require_once './views/header.php';
require("./requires/connection.php");
?>

<?php
if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$dbselect = "SELECT * FROM users WHERE userID= '".$id."';";
	
	$res= mysqli_query($connection, $dbselect) or die ('Error');
	
	
	
while($row = mysqli_fetch_array($res))
{ 

?>
<!-- ================================================ -->
<form action="editUserProcess.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="userID" id="userID" value="<?php echo $row['userID'];?>" />
    
      User ID
    <input type="number" name="userID" id="userID" value="<?php echo $row['userID'];?>" placeholder="User ID" disabled><br><br><br>
    
    
    
    Product Name
    <input type="text" name="userName" id="userName" value="<?php echo $row['userName'];?>" placeholder="User Name" required><br><br><br>
    
    
    
  
    User Password
    <input type="password" name="userPassword" id="userPassword" value="<?php echo $row['userPassword'];?>" placeholder="User Password" required><br><br><br>
    
    
    
  
    
    
    <input type="submit" name="submit" value ="submit">
</form>
<!-- ================================================ -->
<?php
}
}


?>
<?php
require_once './views/footer.php';
?>
