<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>ADD USER</title>
	<link rel="stylesheet" href="style.css">
</head>
<style>
body{
	margin: 50px;
}
select
{
    width:740px !important;
	height: 47px !important;
	border-radius: 5px;
	font-size: 16px;
	padding: 5px;
}
</style>
<body>
<div class="header">
	<h2>ADD USER</h2>
</div>
<form method="post" action="register.php">
	<?php echo display_error(); ?>
	<br>
	<div class="input-group">
		<label>First Name</label>
		<input type="text" name="firstname" required value="<?php echo $firstname; ?>">
	</div><br>
	<div class="input-group">
		<label>Middle Name</label>
		<input type="text" name="middlename" value="<?php echo $middlename; ?>" required>
	</div><br>
	<div class="input-group">
		<label>Last Name</label>
		<input type="text" name="lastname" value="<?php echo $lastname; ?>" required>
	</div><br>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>" required>
	</div><br>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password" required>
	</div><br>
	<div class="input-group">
		<label>Confirm Password</label>
		<input type="password" name="c_password" required>
	</div><br>
	<div class="input-group">
		<label>Birthday</label>
		<input type="text" name="birthday" value="<?php echo $birthday; ?>" required>
	</div><br>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>" required>
	</div><br>
	<div class="input-group">
		<label>Contact Number</label>
		<input type="text" name="contact" value="<?php echo $contact; ?>" required>
	</div><br><br>
		<label>User level</label>
		<select id="user_type" name="user_type" class="form-select">
		  <option value="admin">admin</option>
		  <option value="user">user</option>
		</select><br><br><br>
		<label>Status</label>
		<select id="status" name="status" class="form-select">
		  <option value="active">active</option>
		  <option value="disable">disable</option>
		</select><br>
	<br>
	<div class="input-group"> <br>
		<button type="submit" class="btn" name="register_btn">SAVE</button>
		<a href="admin.php" class="btn btn-warning"> BACK </a>
	</div>
</form>
</body>
</html>