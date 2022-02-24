<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Add Record</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<style>
		.header {
			background: #003366;
			background: black;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>ADMIN - CREATE USER</h2>
	</div>
	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		
		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>
		
		<div class="input-group">
			<label>Status</label>
			<input type="text" name="status" placeholder= "active/disable">
		</div>
		
		<div class="input-group"><br>
			<button type="submit" class="btn" name="register_btn"> SAVE</button>
		</div>
	</form>
</body>
</html>