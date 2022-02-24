<?php
error_reporting(0);

//Check connection
$conn = new mysqli("localhost", "root", "", "multi_login");

if ($conn->connect_error) {
	
  die("Connection failed: " . $conn->connect_error);
}
if($_POST["submitReset"]){
	$sql1 = "SELECT password from users where username = ?";
	$stmt1= $conn->prepare($sql1);
	$stmt1->bind_param("s" ,$_SESSION["user"]["username"]);
	$stmt1->execute();									
	$result1 = $stmt1->get_result();
	$row = mysqli_fetch_row($result1);
	$stmt1->close();
								
	$oldPass = $row[0];
	$currentPass = $_POST["current_pass"]; 
	$newPass = $_POST["new_password"];
	$confirmPass = $_POST["confirm_password"];
								
	if($oldPass == $currentPass){
		if($newPass == $confirmPass){
			$stmt2 = $conn->prepare("UPDATE users SET password = ? where username = ?");
			$stmt2->bind_param("ss", $newPass, $_SESSION["user"]["username"]);
			$stmt2->execute();
			$stmt2->close();
			$conn->close();
										
			$_SESSION = array();
			// Destroy the session.
			//session_destroy();						 
			// Redirect to login page
			//header("location: login.php");
		}
		else if($newPass != $confirmPass){
			echo "<script type='text/javascript'>alert('New Passwords do not match. Try again.');</script>";
		}
		else if (empty($newPass) || empty($confirmPass)){
			echo " ";
		}	
	}
	else if($oldPass != $currentPass){
		echo "<script type='text/javascript'>alert('Invalid current password. Try again.');</script>";
	}
	elseif(empty($oldPass) || empty($currentPass)){
		echo " ";
	}					
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        
        .wrapper {
            width: 700px;
            padding: 20px;
                margin: auto;
        }
		 p {
            width: 360px;
            padding: 20px;
                margin: auto;
        }
		h2 {
            width: 360px;
            padding: 20px;
                margin: auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Current Password</label>
                <input type="password" name="current_pass"class="form-control" required>
                <span class="invalid-feedback"><?php echo $password_validation_err; ?></span>
            </div>
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control" required>
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <?php   ?>
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" required>
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit" name="submitReset" >
            </div>
        </form>
    </div>
</body>

</html>