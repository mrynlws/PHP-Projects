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
<a href="login.php"> Login again. </a>
</nav>

<?php 
	error_reporting(0);
	session_start();

	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con, 'user');

	$username = $_POST['username'];
	$password = $_POST['password'];
	//$hashed_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

	$s = "select * from user_account where username='$username' && password='$password'";

	//perform a query on database
	$result = mysqli_query($con, $s);

	//count how many user with the input username 
	$num = mysqli_num_rows($result);

	//if there is 1 row returned, then it is already taken
	if($num == 1){
		// Store data in session variables to output 
		$_SESSION['fname'] = $_POST['fname'];
		$_SESSION['mname'] = $_POST['mname'];
		$_SESSION['lname'] = $_POST['lname'];
		$_SESSION['username'] = $_POST['username']; 
		$_SESSION['bday'] = $_POST['bday'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['contact'] = $_POST['contact'];
		header('location:home.php');
	} else {
		echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
		echo "<p>Incorrect username or password.</p>";
	}
?>
</body>
</html>
