<!DOCTYPE html>
<html>
<head>
	<title> Registration </title>
	<link rel="stylesheet" type="text/css" href="regstyle2.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>	
<nav>
<a href="login.php"> Already have an account? Login here. </a>
</nav>
	<div class="container">
		<div class="row login-box">
			<div class="col-md-6 login-left">
				<h2> Register Here </h2>
				<form action="registration.php" method="post"><br>
				<div class="form-group">
					<label>First Name</label>
					<input type="text" name="fname" class="form-control" required><br>
				</div>
				<div class="form-group">
					<label>Middle Name</label>
					<input type="text" name="mname" class="form-control" required><br>
				</div>
				<div class="form-group">
					<label>Last Name</label>
					<input type="text" name="lname" class="form-control" required><br>
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" required><br>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required>
				</div><br>
				<div class="form-group">
					<label>Confirm Password</label>
					<input type="password" name="confirm_password" class="form-control" required><br>
				</div>
				<div class="form-group">
					<label>Birthday</label>
					<input type="text" name="bday" class="form-control" required><br>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control" required><br>
				</div>
				<div class="form-group">
					<label>Contact Number</label>
					<input type="text" name="contact" class="form-control" required><br>
				</div>
				<br><br>
				<center><button name="s" type="submit" class="btn btn-primary"> Register </button>
				</form>
			<div>
		</div>
		<br>
		<?php 
			error_reporting(0);
			session_start();

			$con = mysqli_connect('localhost', 'root', '');
			mysqli_select_db($con, 'user');

			if(isset($_POST['s'])){
				$fname = $_POST['fname'];
				$mname = $_POST['mname'];
				$lname = $_POST['lname'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				$confirm_password = $_POST['confirm_password'];
				$bday = $_POST['bday'];
				$email = $_POST['email'];
				$contact = $_POST['contact'];

				$s = "select * from user_account where username='$username'";

				//perform a query on database
				$result = mysqli_query($con, $s);

				//count how many user with the input username 
				$num = mysqli_num_rows($result);
				
				//input passwords are the same
				if($password == $confirm_password){
					//if there is 1 row returned, then it is already taken
					if($num == 1) {
						echo "<h2>Username is already taken.</h2>";
					} else {
						//$hashed_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
						$reg = "insert into user_account(fname, mname, lname, username, password, bday, email, contact) values('$fname', '$mname', '$lname', '$username', '$password', '$bday', '$email', '$contact')";
						mysqli_query($con, $reg);
						echo "<br><h2>Registration Successful!</h2>";
					}	
				} else {
					//input passwords are not the same
					echo "<h2>Password and Confirm Password are not the same</h2>";
				}
			}   
		?>
	</div>
</body>

</html>

