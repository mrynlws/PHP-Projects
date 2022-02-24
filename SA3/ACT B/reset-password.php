<?php
// Initialize the session
session_start();

// Check if the user is logged in, otherwise redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
$password_validation_err = "";

$_SESSION["username"];
$dbh = new mysqli("localhost", "root", "", "user1");
$result = $dbh->query("Select * FROM user1 WHERE username='" . $_SESSION["username"] . "'");
//echo $result;


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
        }
    }



    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('bg.png');
             background-repeat: no-repeat;
             background-size: cover; 
            font: 14px sans-serif;
        }

        .wrapper {
            width: 360px;
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
                <input type="password" name="current_pass"class="form-control <?php echo (!empty($password_validation_err)) ? 'is-invalid' : ''; ?>"  required="">
                <span class="invalid-feedback"><?php echo $password_validation_err; ?></span>
            </div>
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <?php   ?>
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link ml-2" href="welcome.php">Cancel</a>
            </div>
        </form>
    </div>
</body>

</html>