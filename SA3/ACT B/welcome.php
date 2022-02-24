<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ 
            background-image: url('bg.png');
             background-repeat: no-repeat;
             background-size: cover; 
            font: 14px sans-serif;  
        }
		.my-5 {
            
            padding: 20px;
			text-align: center;
        }
		
		p {
            text-align: center;
            padding: 20px;
			margin: auto;
        }
    </style>
</head>
<body>

    <br>
    <h1 class="my-5"> Welcome <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</h1>
    <p> <b>Name:</b> <?php echo  htmlspecialchars($_SESSION["fname"]." ".$_SESSION["mname"]." ".$_SESSION["lname"]); ?> <br><br>
        <b>Birthday:</b> <?php echo  htmlspecialchars($_SESSION["bday"]); ?> <br> <br>
        <b>Contact Details</b> <br> <br>
        <b>Email:</b> <?php echo htmlspecialchars($_SESSION["email"]); ?> <br> <br>
        <b>Contact:</b> <?php echo htmlspecialchars($_SESSION["contact"]); ?>
         <br> <br>
    </p>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
</body>
</html>