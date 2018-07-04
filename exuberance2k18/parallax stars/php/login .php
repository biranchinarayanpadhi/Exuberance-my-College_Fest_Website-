<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login/exuberance2k18</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Email</label>
  		<input type="text" name="email" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<center><p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p></center>
  </form>
</body>
</html>