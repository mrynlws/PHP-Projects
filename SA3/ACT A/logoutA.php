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
	<h1 id ="h1"> ---Logout--- </h1>
    <?php
	session_start();
	session_destroy();
	echo "You successfully logout. <br><br> Click here login or to register<br>";
	echo '<a href="regA.php"> Register </a> <br>';
	echo '<a href="loginA.php"> Login </a>';
	?>
 </div>
</body>
</html>
