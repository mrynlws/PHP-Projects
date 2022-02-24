<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Record</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="header">
	<h2>ADD RECORD</h2>
</div>
<form method="post" action="register.php">
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
		<label>User level</label>
		<input type="user_type" name="user_type" placeholder= "admin/user">
	</div>
	<div class="input-group">
		<label>Status</label>
		<input type="text" name="status" placeholder= "active/disable">
	</div><br>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Save</button>
	</div><br>
	<p>
		<a href="admin.php">BACK </a>
	</p>
</form><br><br>
</body>
</html>