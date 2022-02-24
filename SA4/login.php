<?php 
error_reporting(0);
include('functions.php') 


?>
<!DOCTYPE html>
<html>
<head>
	<title>	LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" required>
		</div>
		<br>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" required>
		</div>
		<br>
		<div class="input-group"> 
			<button type="submit" class="btn" name="login_btn">LOGIN</button>
			<a href="register.php" class="btn btn-warning">ADD RECORD HERE!</a>

		</div>
		
		
	</form>
</body>
</html>

<?php
$conn = new mysqli("localhost", "root", "", "multi_login");
//Check connection
if ($conn->connect_error) {
	
  die("Connection failed: " . $conn->connect_error);
}
?>