<?php 
error_reporting(0);
include('functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location:login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location:login.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
	body {
		margin: 50px !important;
	}
	.header {
		background: #003366;
	}
	
	button[name=register_btn] {
	background: #003366;
	}
	
	p {
	text-align: center;
    margin: auto;
     }
	 
	h2 {
	text-align: center;
    margin: auto;
	
     }
	 
	 h1 {
	text-align: center;
    margin: auto;
	
     }
	 
	
	
	</style>
</head>
<body>
	<div class="header">
		<h2>ADMIN ACCOUNT</h2>
		<!--if ADMIN he/she is directed to admin.php page -->
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<br><br><br><br>
		
		<!--upload -->
		<?php include 'fileupload.php';?>
			<center>
		<br>
			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong> <h1>WELCOME!! </h1> <br> <p> Name: <?php echo $_SESSION['user']['firstname']; ?>
							<?php echo $_SESSION['user']['middlename']; ?> 
							<?php echo $_SESSION['user']['lastname']; ?> <br>
							Username: <?php echo $_SESSION['user']['username']; ?> <br>
							Userlevel: <?php echo  $_SESSION['user']['user_type']; ?> <br>
							Birthday: <?php echo $_SESSION['user']['birthday']; ?> <br>
							Contact Details: <br>
							Contact: <?php echo $_SESSION['user']['contact']; ?> <br>
							Email: <?php echo $_SESSION['user']['email']; ?> <br>
							</p>
					</strong>
					
				<?php endif ?>
				<br><br>
				<!-- allows admin to add record and view record -->
				
				<a href="register.php" class="btn btn-warning">ADD RECORD</a>
				<a href="view_user.php" class="btn btn-warning">VIEW RECORD</a>
				
		<br><br>
		<?php include 'reset-password.php';?><br>
		<a href="logout.php" class="btn btn-danger ml-3">SIGN OUT</a>
		</div><br><br>
</body>
</html>