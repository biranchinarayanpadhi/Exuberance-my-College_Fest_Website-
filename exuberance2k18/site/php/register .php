<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration/exuberance2k18</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
    <div class="input-group">
      <label>ContactNo</label>
      <input type="text" name="contactno" value="<?php echo $contactno; ?>">
    </div>
    <div class="input-group">
      <label>Branch</label>
      <input type="text" name="Branch"  placeholder="e.g. CSE ME AE etc." value="<?php echo $branch; ?>">
      </div>
    <div class="input-group">
      <label>College Name</label>
      <input type="text" name="collegename" value="<?php echo $collegename; ?>">
    </div>
      <label>Gender</label>
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="female">Female
  
   	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<center><p>
  		Already a member? <a href="login.php">Log in</a>
  	</p></center>
  </form>
</body>
</html>