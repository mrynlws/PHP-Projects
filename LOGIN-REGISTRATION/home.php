<?php
	session_start();
	error_reporting(0);
	if(!isset($_SESSION['username'])) {
		header('location:login.php');
	}
?>

<html>
<head>
<title> Home Page </title>
	<link rel="stylesheet" type="text/css" href="regstyle2.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<nav>
<a href="logout.php"> LOGOUT </a>
</nav>

<div class="container">
<h1>WELCOME <?php echo $_SESSION['username']; ?> </h1> 
</div>
		<?php
			echo "Name: " . $_SESSION['fname'] . " " . $_SESSION['mname'] . $_SESSION['lname'] . "<br>" .
			     "Birthday: " . $_SESSION['bday']. "<br>" . 
			     "Contact Details" . "<br>" .
			     "Email: " . $row['email'] . "<br>" . 
			     "Contact No: " . $_SESSION['contact'];
			echo $_SESSION['password'];
			
			
		?>
</body>
</html>