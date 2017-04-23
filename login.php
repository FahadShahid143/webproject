<?php
require_once './views/header.php';
session_start();

include("./requires/connection.php");


if (isset($_SESSION['msg']))
{
	echo $_SESSION['msg'];
	unset ($_SESSION['msg']);
}

if (isset($_POST['submit']))
{
	
	$_SESSION['userName'] = $_POST['user'];
	$_SESSION['userPassword'] = $_POST['pass'];
	
	header ("Location: loginProcess.php");
}
	
?>

<!doctype html>
<html>
<head>
<title>Login Page</title>
</head>

<body>
<form action="login.php" method="post">
<table width="100%" cellpadding="0" cellspacing="0" height="50%">
    <tbody>
      <tr>
        <td align="center"><h3>Please Enter User Name and Password</h3></td>
      </tr>
      
      <tr>
        <td colspan="8" align="center"></td>
      </tr>
      <tr>
        <td width="100%" align="center"><table align="center" border="0">
            <tbody>
              <tr>
                <td width="0" rowspan="7"></td>
              </tr>
              <tr>
                <td colspan="4"><div></div></td>
              </tr>
              <tr>
                <td width="70">&nbsp;</td>
                <td></td>
                <td width="0"></td>
                <td width="224"></td>
              </tr>

<label for="user">User name</label>
  <div align="centre"> 
  <input type="text" name ="user" id="user" required/><br/>
  </div>
  
  <label for="pass">Password</label>
  <div align="centre"> 
  <input type="password" name="pass" id="pass" required/><br/>
  </div>
  
  
  
  
 <tr>
        <td colspan="4" align="center"><input type="submit" name="submit" value="Submit"/>
</form>
          

     </table>

</form>
</body>
</html>
<?php
require_once './views/footer.php';
?>