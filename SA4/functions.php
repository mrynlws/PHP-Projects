<?php 
session_start();
error_reporting(0);
// connect to database
//DATABASE NAME = multi_login
$db = mysqli_connect('localhost', 'root', '', 'multi_login');

// variable declaration
$firstname = "";
$middlename   = "";
$lastname = "";
$username    = "";
$birthday = "";
$email    = "";
$contact    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $firstname, $middlename, $lastname, $username, $birthday, $email, $contact;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$firstname    =  e($_POST['firstname']);
	$middlename    =  e($_POST['middlename']);
	$lastname    =  e($_POST['lastname']);
	$username    =  e($_POST['username']);
	$birthday    =  e($_POST['birthday']);
	$email       =  e($_POST['email']);
	$contact    =  e($_POST['contact']);
	$password  =  e($_POST['password']);
	$c_password  =  e($_POST['c_password']);
	$status  =  e($_POST['status']);
	
	//password validation
	if($password != $c_password){
		array_push($errors, "Passwords do not match.");
	}
	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password)) { 
		array_push($errors, "Password is required"); 
	}
	

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = $password;//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO users (firstname, middlename, lastname, username, birthday, contact, email, user_type, password, status) 
					  VALUES('$firstname', '$middlename', '$lastname', '$username', '$birthday', '$contact', '$email', '$user_type', '$password', '$status')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: admin.php');//admin page
		}
		else{
			$query = "INSERT INTO users (firstname, middlename, lastname, username, birthday, contact, email, user_type, password, status) 
					  VALUES('$firstname', '$middlename', '$lastname', '$username', '$birthday', '$contact', '$email', '$user_type', '$password', '$status')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: user.php');//user account				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}

// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$sql1 = "SELECT status from users where username = ?";
		$stmt1= $db->prepare($sql1);
		$stmt1->bind_param("s" ,$_POST["username"]);
		$stmt1->execute();									
		$result1 = $stmt1->get_result();
		$row = mysqli_fetch_row($result1);
		$stmt1->close();
									
		$status = $row[0];
		
		if($status == "disable" || $status == "Disable"){
			array_push($errors, "This account is disabled. Please contact the administrator.");
		}
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = $password;

		$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: admin.php');	//admin	  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: user.php'); //user
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}

function isAdmin() {
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}
	else{
		return false;
	}
}