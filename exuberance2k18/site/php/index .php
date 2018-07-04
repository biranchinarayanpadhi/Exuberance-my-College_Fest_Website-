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
	<title>go for payment</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>PROFILE</h2>
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
    	<p><H4>WELCOME TO YOUR PAYMENT PAGE <BR></H4> <strong><CENTER>YOUR EMAIL:<?php echo $_SESSION['email']; ?></CENTER><br>
      </strong></p>
    <?php endif ?>
    <br>
    <CENTER><p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p></CENTER>
    <center><a href="https://www.instamojo.com/@E_X_U_B_E_R_A_N_C_E/l0febeafe37784282921cdac7ecbf4bfe/" rel="im-checkout" data-behaviour="link" data-style="flat" data-text="PAY NOW!!!"></a>
<script src="https://js.instamojo.com/v1/button.js"></script></center>
NOTE:-IF YOU ALREADY PAID FOR RGISTRATION DON'T GO FOR PAYNOW.FOR ANY QUERIES CONTACT AT 7978133964.

		
</body>
</html>