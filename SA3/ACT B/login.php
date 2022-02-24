<?php
    // Initialize the session
    session_start();

    // Check if the user is already logged in, if yes then redirect him to welcome page
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: welcome.php");
        exit;
    }

    // Include config file
    require_once "config.php";

    // Define variables and initialize with empty values
    $username = $password = '';

    // Processing form data when form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input_user = $_POST['username'];
        $input_pass = $_POST['password'];

        if (!$_POST['username'] or !$_POST['password']) {
            // Do nothing
        } else {
            $sql = "SELECT username, fname, mname, lname, bday, email, contact, password FROM user1 where username='$input_user'";
            $result = $link->query($sql);

            if ($result->num_rows > 0) {
               // echo "Success";
                while($row = $result->fetch_assoc()) {
                    $db_user    = $row['username'];
                    $db_fname   = $row['fname'];
                    $db_mname   = $row['mname'];
                    $db_lname   = $row['lname'];
                    $db_bday    = $row['bday'];
                    $db_email   = $row['email'];
                    $db_contact = $row['contact'];
                    $db_pass    = $row['password'];
                }

                if ($db_pass != $input_pass) {
                    $login_err = "Invalid password.";
                } else {
                    // Password is correct, so start a new session
                    session_start();

                    // Store data in session variables
                    $_SESSION["loggedin"] = true;

                    // $_SESSION["id"] = $id; error because ther is no ID column in the database
                    $_SESSION["username"] = $db_user;
                    $_SESSION["fname"]    = $db_fname;
                    $_SESSION["mname"]    = $db_mname;
                    $_SESSION["lname"]    = $db_lname;
                    $_SESSION["bday"]     = $db_bday;
                    $_SESSION["email"]    = $db_email;
                    $_SESSION["contact"]  = $db_contact;
                    
                    // Close database connection
                    mysqli_close($link);

                    // Redirect user to welcome page
                    header("location: welcome.php");
                }
            } else {
                $login_err = "Invalid username or password.";
                mysqli_close($link);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body{
                background-image: url('bg.png');
                background-repeat: no-repeat;
                background-size: cover;
                font: 14px sans-serif;
                margin: 50px;
            }
            .wrapper{
                width: 360px;
                padding: 20px;
                margin: auto;
            }
            label{
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <h2>Login</h2>
            <p>Please fill in your credentials to login.</p>

            <?php
                if(!empty($login_err)){
                    echo '<div class="alert alert-danger">' . $login_err . '</div>';
                }
            ?>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <span class="invalid-feedback">Please enter username</span>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback">Please enter password</span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Login">
                </div>
                <p>Don't have an account? <b><a href="register.php">Sign up now</a></b>.</p>
            </form>
        </div>
    </body>
</html>
