<?php
	error_reporting(0);
	session_start();
	
	if(isset($_POST['submit'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$rem = $_POST['remember'];
 		if($user == $_SESSION['username'] && $pass == $_SESSION['password']){
 			if(isset($_POST['remember'])) { 
				setcookie('user', $user, time()+60*60*7);
				setcookie('pass', $pass, time()+60*60*7);
				$_SESSION['user'] = $user;
				header("location: homepageA.php");
			} elseif (is_null($_POST['remember'])){
				$_SESSION['user'] = $user;
				header("location: homepageA.php");
			}
		} else {
			echo "<h1><center>Username or Password is Invalid.</h1><br><br>";
		}
	} else {
		#header("location: homepageA.php");
	}
	
	/*if(isset($_POST['submit'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$rem = $_POST['remember'];
		
		if(!empty($_POST["remember"])) {
			setcookie ("username",$_POST["username"],time()+ 3600);
			setcookie ("password",$_POST["password"],time()+ 3600);
			echo "Cookies Set Successfuly";
			header("location: homepageA.php");
		} else {
			setcookie("username","");
			setcookie("password","");
			echo "Cookies Not Set";
		}
	} else {
		  echo "<h1><center>Username or Password is Invalid.</h1><br><br>";
	}*/

?>
<html>
<head>
	<title>
		Login
	</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<style>
        body{
						 background-image: url('bgA.jpg');
             background-repeat: no-repeat;
             background-size: cover;
						 text-align: center;
						 margin: 100px;
        }#h1{
        	  font-family: arial;
            font-size: 50px;
            text-align: center;
        }#forms{
            font-family: arial;
            font-size: 30px;
            text-align: center;
        }#user,#password,#rem,#sub{
        	  font-family: arial;
            font-size: 20px;
            text-align: center;
       }.form-control{
					  width: 400px !important;
			 }input[type=text], input[type=password]{
					  width: 30%;
					  padding: 10px;
					  border-radius: 4px;
					  box-sizing: border-box;
					  border: 3px solid #ccc;
					  height: 40px;
					  margin: auto;
			 }input[type=checkbox]{
				    transform: scale(2);
			 }.login-left{
					  background: rgba(300, 300, 300, 0.5);
					  padding: 90px;
					  width: 800px;
					  margin: auto;
			 }input[type=submit]{
					  background-color: #FF8C00 !important;
					  border: none !important;
					  padding: 5px !important;
					  width: 100px !important;
					  border-radius: 4px !important;
					  color: white;
		 	}
	</style>
</head>
<body>
	<div class="col-md-6 login-left">
	<h1 id ="h1"> Login </h1>
	 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="forms"><br>
		Username
    <br>
    <input type="text" class="form-control" name="user" placeholder="Username" id="user" value="<?php if(isset($_COOKIE["user"])) { echo $_COOKIE["user"]; }?>" required>
    <br>

    Password
    <br>
    <input type="password" class="form-control" name="pass" placeholder="Password" id="password" value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; }?>" required>
    <br>

    <br>
    Remember Me
    <input type="checkbox" name="remember" value="Remember Me" id= "rem"><br><br>
    <input type="submit" name="submit" value="Submit" id="sub">
</form>
		<br><center><h2><a href="regA.php"> Register Here </a></h2>
</div>
</body>
</html>
