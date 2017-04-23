<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
   <style>

*{
	position:static;
	}
.container {
    overflow: hidden;
    background-color: #8C8A8A;
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
<header class="w3-panel w3-center w3-opacity" style="padding:128px 16px">
 
  
  <div class="container">
  <a href="welcomepage.php" style="color:white;">Home</a>
    <div class="dropdown">
    <button class="dropbtn" style="margin-top:3px; color:white;">Users</button>
    <div class="dropdown-content">
      <a href="addUser.php" style="color:#220606;">New user</a>
      <a href="viewUsers.php" style="color:#220606">User info</a>
      
    </div>
  </div>
   <div class="dropdown">
    <button class="dropbtn"  style="margin-top:3px; color:white;">Products</button>
    <div class="dropdown-content">
      <a href="addProduct.php" style="color:#220606">New Product</a>
      <a href="viewProducts.php" style="color:#220606">Products info</a>
      
    </div>
  </div> 
  <a href="logout.php" style="color:white">Logout</a>
</div>
</header>
<br><br><br>
</body>
</html>