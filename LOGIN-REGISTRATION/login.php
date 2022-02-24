<?php
	// Start the session
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<link rel="stylesheet" type="text/css" href="regstyle2.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>	
<nav>
<a href="registration.php"> Don't have an account? Sign up now. </a>
</nav>
	<div class="container"> 
		<div class="row login-box">
			<div class="col-md-6 login-left">
				<h2> Login Here </h2>
				<form action="validation.php" method="post"><br>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" required><br>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required>
				</div><br><br>
				<center><button type="submit" class="btn btn-primary"> Login </button>
				</form>
			</div>	
		</div>  
	</div>
</body>
</html>

