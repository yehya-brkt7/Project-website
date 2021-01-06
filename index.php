<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style> 
body {
  background-image: url("images/back.jpg");
  background-repeat: no-repeat;
  background-position: 0 0;
    background-size: cover;
}
</style>	
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome to the website <?php echo $_SESSION['username']; ?>. Before getting started, it's our duty to inform you that this is an 
		e-commerce website made to sell products. Please be cautious. To proceed, 
		click the home page button below<strong></strong></p>
		<a class="homebtn" target="_self" href="home.html">Home Page</a>
		
    	<p> <a href="index.php?logout='1'" style="color: black;">logout</a> </p>
		
    <?php endif ?>
</div>
		
</body>
</html>