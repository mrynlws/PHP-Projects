<html>
<head>
	<title>
		Login
	</title>
	<style>
        body{
						 background-image: url('bgA.jpg');
             background-repeat: no-repeat;
             background-size: cover;
             font-family: arial;
             font-size: 40px;
						 text-align: center;
						 margin: 100px;
        }#h1{
	       		font-family: arial;
	       		font-size: 60px;
	       		text-align: center;
        }.login-left{
 					  background: rgba(300, 300, 300, 0.5);
 					  padding: 90px;
 					  width: 800px;
 					  margin: auto;
				}
	</style>
</head>
<body>
	<div class="col-md-6 login-left">
	<h1 id ="h1"> ---Home Page--- </h1>
    <?php
			error_reporting(0);
			session_start();

			if(!isset($_SESSION['user'])){
				header("location: loginA.php");
			}

			echo "Welcome ". $_SESSION['user']. "!!!";
			echo '<br> <br>';
			echo '<a href="logoutA.php"> Logout </a>'
	?>
	</div>
</form>
</body>
</html>
