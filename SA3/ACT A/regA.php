<?php session_start(); ?>
<html>
<head>
    <script>
         function validate(){

                var a = document.getElementById("password").value;
                var b = document.getElementById("confirm_password").value;
                if (a!=b) {
                   alert("passowrd and confirm password are not the same");
                   return false;
                }
        }
    </script>
    <title> Registration </title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        body{
             background-image: url('bgA.jpg');
             background-repeat: no-repeat;
             background-size: cover;
             text-align: center;
             margin: 50px;
             font-family: arial;
        }#fn,#mn,#ln,#user,#password,#confirm_password, #bday, #e, #num, #submit{
            font-family: arial;
            font-size: 20px;
        }#h1{
            text-align: center;
            font-family: arial;
            font-size: 40px;
        }#forms{
            text-align: center;
            font-family: arial;
            font-size: 30px;
        }#para{
            font-family: arial;
            font-size: 25px;
        }.form-control{
            width: 400px !important;
        }input[type=text]{
            width: 30%;
            padding: 10px;
            border-radius: 4px;
            box-sizing: border-box;
      	    border: 3px solid #ccc;
      	    height: 40px;
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
        <h1 id = "h1"> My Personal Information </h1><br>
        <form action = "<?php echo $_SERVER['PHP_SELF'] ?>" onSubmit="return validate();" method="post" id = "forms">
            First Name:
            <br>
            <center><input type="text" class="form-control" name="firstname" placeholder="First Name" id="fn" required>
            <br>
            Middle Name:
            <br>
            <input type="text" class="form-control" name="middlename" placeholder="Middle Name" id="mn" required>
            <br>
            Last Name:
            <br>
            <input type="text" class="form-control" name="lastname" placeholder="Last Name" id="ln" required>
            <br>
            Username:
            <br>
            <input type="text" class="form-control" name="username" placeholder="Username" id="user" required>
            <br>
            Password:
            <br>
            <input type="password" class="form-control" name="password" placeholder="Password" id="password" required>
            <br>
            Confirm Password:
            <br>
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" id="confirm_password" required>
            <br>
            Birthday:
            <br>
            <input type="text" class="form-control" name="bday" placeholder="mm/dd/yyyy" id="bday" required>
            <br>
            Email:
            <br>
            <input type="text" class="form-control" name="email" placeholder="Email" id="e" required>
            <br>
            Contact Number:
            <br>
            <input type="text" class="form-control" name="number" placeholder="Contact Number" id="num" required>
            <br>
            <input type="submit" name="register" value="SUBMIT" id ="submit" required><br>

            <br><h2><a href="loginA.php"> Login Here </a></h2>
        </form>
    </div>
    <div>
        <p id = 'para'>
            <?php
                if(isset($_POST['register'])){
                    echo "<br>";
                    echo "<b>Firstname:</b> ", $_POST['firstname'];
                    echo "<br>";
                    echo "<b>Middle Name:</b> ", $_POST['middlename'];
                    echo "<br>";
                    echo "<b>Lastname:</b> ", $_POST['lastname'];
                    echo "<br>";
                    echo "<b>Username:</b> ", $_POST['username'];
                    echo "<br>";
                    echo "<b>Password:</b> ", $_POST['password'];
                    echo "<br>";
                    echo "<b>Birthday:</b> ", $_POST['bday'];
                    echo "<br>";
                    echo "<b>Email:</b> ", $_POST['email'];
                    echo "<br>";
                    echo "<b>Contact Number:</b> ", $_POST['number'];
                    echo "<br>";

                    //session_start();
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $_SESSION['username']= $username;
                    $_SESSION['password']= $password;
                }
            ?>
        </p>
    </div>
</body>
</html>
