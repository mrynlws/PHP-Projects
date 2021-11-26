<!DOCTYPE html>
<?php
        session_start();
        error_reporting(0);
?>

<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
        	<!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">

        <title>Login</title>
        
        <style>
        body {
            background: #ecf3f5;
            font-family: 'Montserrat';
        }

        .register-photo {
            margin-top: 250px;
        }

        .register-photo .image-holder {
            display: table-cell;
            width: 50%;
            background: url("images/bckgrnd.png");
            background-size: cover;
        }

        .register-photo .form-container {
            display: table;
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
        }

        .register-photo form {
            display: table-cell;
            width: 400px;
            background-color: #ffffff;
            padding: 40px 60px;
            color: #505e6c
        }

        @media (max-width:991px) {
            .register-photo form {
                padding: 40px
            }
        }

        .register-photo form h2 {
            font-size: 24px;
            line-height: 1.5;
            margin-bottom: 20px
        }

        .register-photo form .form-control {
            background: transparent;
            border: none;
            border-bottom: 1px solid #dfe7f1;
            border-radius: 0;
            box-shadow: none;
            outline: none;
            color: inherit;
            text-indent: 0px;
        }

        .register-photo form .form-check {
            font-size: 13px;
            line-height: 20px
        }

        .register-photo form .btn-primary,
        .register-photo form .btn-success {
            background: #009bd4;
            border: none;
            border-radius: 4px;
            padding: 11px;
            box-shadow: none;
            margin-top: 35px;
            text-shadow: none;
            outline: none !important
        }

        .register-photo form .btn-primary:hover,
        .register-photo form .btn-primary:active {
            background: blue;
        }

        .register-photo form .btn-primary:active {
            transform: translateY(1px);
            background: blue;
        }

        .register-photo form .already {
            display: block;
            text-align: center;
            font-size: 12px;
            color: #009bd4;
            opacity: 0.9;
            text-decoration: none
        }
        </style>
    </head>
    <body >
        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'phpfinals');
            if($conn->connect_error){
            echo "$conn->connect_error";
            die("Connection Failed : ".$conn->connect_error);
            }

            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && isset($_SESSION['username'])){
                $level = mysqli_query($conn, "select accesslevel as lvl from records where username='".$_SESSION['username']."'");
                while($record = mysqli_fetch_array($level)){
                    if($record['lvl'] == "admin"){
                        echo "Hello";
                        header("location: empty.php");
                    }
                    else{
                        echo "Hi";
                        header("location: empty.php");
                    }
                }
            }
        ?>

        <div class="register-photo">
        <div class="form-container">
        <div class="image-holder"></div>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <h2 class="text-center"><strong>Login</strong> your account.</h2>
        <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Student Number"></div>
        <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
        <div class="form-group"><button class="btn btn-success btn-block" type="submit" name="submit" value="Submit">Sign In</button></div>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $username = $_POST['username'];
                $password = $_POST['password'];

                echo "<hr>";
                
                $p_un = mysqli_real_escape_string($conn, $username);
                $p_pw = mysqli_real_escape_string($conn, $password);
                $sql = mysqli_query($conn, "select count(*) as usercnt from records where username='".$p_un."' and password='".$p_pw."'");
                $data = mysqli_fetch_array($sql);

                $count = $data['usercnt'];
                if($count > 0){
                    $level = mysqli_query($conn, "select accesslevel as lvl from records where username='".$p_un."'"); 
                    while($record = mysqli_fetch_array($level)){
                        $_SESSION['username'] = $p_un;
                        $_SESSION['loggedin'] = true;
                        if($record['lvl'] == "admin"){
                            echo "Hello";
                            header("location: logout.php");
                        }
                        else{
                            echo "Hi";
                            header("location: logout.php");
                        }
                    }
                }
            }
        ?>
        </form>
    </div>
</div>
</form>

    </body>
</html>