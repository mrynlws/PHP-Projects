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
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
	body {
		margin: 50px;
		background-color: #FFFFE0;
	}
	.header {
		background: #003366;
		background: black;
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
	 
	upload {
		text-align: center;
		margin: auto;
		padding: 20px;
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
		<center>
		<div class="upload">
			<input type = "file" name="f1">
		</div>
			
		<br>
			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					 <h1><b>WELCOME!!</b></h1> <br> 
						 <p><b>Username:</b> <?php echo $_SESSION['user']['username']; ?> <br>
							<b>Userlevel:</b> <?php echo  $_SESSION['user']['user_type']; ?> <br>
							<b>Email:</b> <?php echo $_SESSION['user']['email']; ?> 
						</p>
					
					
				<?php endif ?>
				<br><br>
				<!-- allows admin to add record and view record -->
				
				<a href="create_user.php" class="btn btn-warning">ADD RECORD</a>
				<a href="view_user.php" class="btn btn-warning">VIEW RECORD</a>
				
				<br><br>
				
		<!--RESET-->
		<br><br>
        <h2>Reset Password</h2> <br>
        <p>Please fill out this form to reset your password.</p> <br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<div class="form-group">
                <label>Current Password</label>
                <input type="password" name="current_pass"class="form-control "<?php echo (!empty($password_validation_err)) ? 'is-invalid' : ''; ?>"  required>
                <span class="invalid-feedback"><?php echo $password_validation_err; ?></span>
            </div>
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control "<?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>" required>
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <?php   ?>
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control "<?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" required>
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link ml-2" href="welcome.php">Cancel</a>
            </div>
        </form>			
		<br><br>
		<a href="logout.php" class="btn btn-danger ml-3">SIGN OUT</a>
	</div><br>
	
<?php	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = $_SESSION['user']['username'];
	$password = $_POST['new_password'];
	$conn = new mysqli("localhost", "root", "", "multi_login");
	
// Check connection
if ($conn->connect_error) {
	
  die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE users SET password='".$password."' WHERE username='".$username."'";
if ($conn->query($sql) === TRUE) {
  echo "<h1>Record updated successfully!</h1>";
} else {
  echo "Error updating record from conn: " . $conn->error;
}

$conn->close();
	
}

require_once "config.php";

// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
$password_validation_err = "";

$_SESSION["username"];
$dbh = new mysqli("localhost", "root", "", "multi_login");
$result = $dbh->query("Select * FROM users WHERE username='" . $_SESSION["username"] . "'");

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    while ($row = $result->fetch_assoc()) {

        if ($_POST["current_pass"] == $row["password"]) {
	
            // Validate new password
            if (empty(trim($_POST["new_password"]))) {
                $new_password_err = "Please enter the new password.";
            } elseif (strlen(trim($_POST["new_password"])) < 6) {
                $new_password_err = "Password must have atleast 6 characters.";
            } else {
                $new_password = trim($_POST["new_password"]);
            }

            // Validate confirm password
            if (empty(trim($_POST["confirm_password"]))) {
                $confirm_password_err = "Please confirm the password.";
            } else {
                $confirm_password = trim($_POST["confirm_password"]);
                if (empty($new_password_err) && ($new_password != $confirm_password)) {
                    $confirm_password_err = "New password and Re-Enter new password should be the same.";
                }
            }

            // Check input errors before updating the database
            if (empty($new_password_err) && empty($confirm_password_err)) {
                // Prepare an update statement
                $sql = "UPDATE user1 SET password = ? WHERE username = ?";

                if ($stmt = mysqli_prepare($link, $sql)) {
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "ss", $param_password, $param_username);

                    // Set parameters
                    $param_password = $new_password;
                    $param_username = $_SESSION["username"];

                    // Attempt to execute the prepared statement
                    if (mysqli_stmt_execute($stmt)) {
                        // Password updated successfully. Destroy the session, and redirect to login page
                        session_destroy();
                        header("location: login.php");
                        exit();
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Close statement
                    mysqli_stmt_close($stmt);
                }
            }
        } else {
            $password_validation_err = "Current password is not the same with the old password";
	}}
}
    // Close connection
    mysqli_close($link);
?>
</body>
</html>