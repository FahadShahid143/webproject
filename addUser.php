<?php
require_once './views/header.php';
session_start();

$login="";

if (isset($_SESSION['login'])){
	$login=$_SESSION['login'];
}
if ($login=="login"){
include("./requires/connection.php");
if (isset($_POST['submit']))
{
	
	$_SESSION['userName'] = $_POST['user'];
	$_SESSION['userPassword'] = $_POST['pass'];
	
	header ("Location: addUserProcess.php");
}
	/*if ($id == "localhost" && $pas == "password")
	{
		$done="1";
	echo "Loged in"; 
	if ($done=="1")
{
    header("Location: viewProducts.php");
    exit;
}
	}
   else
{
	echo "wrong input";
	}
}
*/
?>

<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><style>
*{
	position:static;
	}
.container {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.container a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.container a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	color:white;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}


body,h1 {font-family: "Raleway", Arial, sans-serif}
h1 {letter-spacing: 6px}
.w3-row-padding img {margin-bottom: 12px}

</style>
</head>

<body>
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<header class="w3-panel w3-center w3-opacity" style="padding:28px 16px">
  
  <div class="container">
  <a href="welcomepage.php" style="color:white">Home</a>
    <div class="dropdown">
    <button class="dropbtn">Users</button>
    <div class="dropdown-content">
      <a href="addUser.php" style="color:#220606">New user</a>
      <a href="viewUsers.php" style="color:#220606">User info</a>
      
    </div>
  </div>
   <div class="dropdown">
    <button class="dropbtn">Products</button>
    <div class="dropdown-content">
      <a href="addProduct.php" style="color:#220606">New Product</a>
      <a href="viewProducts.php" style="color:#220606">Products info</a>
      
    </div>
  </div> 
  <a href="logout.php" style="color:white">Logout</a>
</div>
</div>
</header>
</div>
<form action="addUser.php" method="post">
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
}
else{
	header("Location: login.php");
	}
require_once './views/footer.php';
?>