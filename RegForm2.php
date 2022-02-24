<!DOCTYPE html>
<html>

<head>
<title> Student Registration Form </title>
<style> 
	
input[type=text] {
    width: 30%;
    padding: 10px;
    border-radius: 4px;
    box-sizing: border-box;
	border: 3px solid #ccc;
	height: 10px;
}

input[type=number] {
    width: 16%;
    padding: 10px;
    border: 3px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    height: 10px;
}

input[type=submit], input[type=reset] {
    width: 30%;
	font-weight: Bold;
    background-color: Black;
    color: white;
    padding: 10px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover , input[type=reset]:hover {
    background-color: Grey;
	transition: 0.5s;
}

div { 
    border-radius: 5px;
    background-color: #FFEFD5; 
    padding: 10px;
    margin: auto;
    width: 55%;
}

.inner {
	width: 75%;
}
	
.header { 
        text-align: center;
		font-family: Arial;
		background-color: Black;
        font-size: 30px;
        font-weight: Bold;
		color: White;
}

p {
	font-family: Arial;
	style="text-align: left";
}
	
h1 {
	text-align:center;
	font-family: Arial;
	font-size:40px;
	font-weight: bold">
}

body {
	text-align: center;	
	font-family: Arial;
}

nav {
	background-color: #FF69B4;
	opacity: 0.7;
	display: flex;
	flex-direction: row;
	justify-content: flex-end;
}

a {
	font-family: "arial";
	font-weight: bolder;
	color: white;
	padding: 15px 20px;
	text-decoration: none;
}

a:hover {
	background-color: #D7418C;
	transition: 0.5s;
}
</style>
</head>

<body bgcolor="Pink">

<nav>
	<a href="http://localhost/RegForm2.php">Student Registration Form</a>
	<a href="http://localhost/MultiplicationTable.php">Multiplication Table</a>
	<a href="http://localhost/Fibonacci2.php">Fibonacci Sequence</a>
	<a href="http://localhost/Factorial.php">Factorial</a>
</nav>
<br><br>

<div>
    <h1>STUDENT REGISTRATION FORM</h1>
	<form action="RegForm2.php" method="post">
	
    <p class="header"> STUDENT INFORMATION</p>
	<div class="inner">
        <p>Full Name</p> 
        <input type="text" name="sfirstname" placeholder="First Name">
        <input type="text" name="smiddlename" placeholder="Middle Name">
        <input type="text" name="slastname" placeholder="Last Name">
		
		<p>Age</p>
        <input type="number" name="sage" placeholder="Age">
		
        <p>Phone Number</p>
		<input type="text" name="snum" placeholder="Phone Number">
		
		<p>Address</p>
		<input style="width:100%" type="text" name="sadd" placeholder="Address">
		
		<p>Email</p>
		<input style="width:80%" type="text" name="semail" placeholder="Email">
			
        <p>Date of birth</p>
        <input type="number" name="mm" placeholder="MM">
        <input type="number" name="dd" placeholder="DD"> 
        <input type="number" name="yy" placeholder="YY"> 

		<p>Gender</p>
        <input type="checkbox" name="gender1" value="Male">
        <label for="gender1">Male</label> 
        <input type="checkbox" name="gender2" value="Female">
        <label for="gender2">Female</label>
		
		<p>Religion</p>
		<input style="width:80%" type="text" name="sreligion" placeholder="Religion">
            
		<br><br><br>
        <p>If the student has other siblings in this school, please list them:</p>
        <input type="text" name="siblings" placeholder="Siblings Name">
    </div>
	
	<p class="header">PARENT INFORMATION</p>
	<div class="inner">
		<p><b>Father's Information</b></p> 
		<p>Full name</p>
		<input type="text" name="dfirstname" placeholder="First Name">
		<input type="text" name="dmiddlename" placeholder="Middle Name">
		<input type="text" name="dlastname" placeholder="Last Name">
			
		<p>Phone Number</p>
		<input type="text" name="dadnum" placeholder="Phone Number">
			
		<p>Address</p>
		<input style="width:100%" type="text" name="dadadd" placeholder="Address">
			
		<p><b>Mother's Information</b></p> 
		<p>Full name</p>
		<input type="text" name="mfirstname" placeholder="First Name">
		<input type="text" name="mmiddlename" placeholder="Middle Name">
		<input type="text" name="mlastname" placeholder="Last Name">
			
		<p>Phone Number</p>
		<input type="text" name="momnum" placeholder="Phone Number">
			
		<p>Address</p>
		<input style="width:100%" type="text" name="momadd" placeholder="Address">
		<br>
	</div>
		
	<p class="header">CITIZENSHIP INFORMATION</p>
	<div class="inner">
		<p>Birth Country</p>
		<input type="text" name="birth" placeholder="Birth Country">
		<input type="text" name="province" placeholder="Province of Birth">
			
		<p>Country of Citizenship</p>
		<input type="text" name="citizenship" placeholder="Contry of Citizenship">
	</div>
	
	<p class="header">PROGRAM INFORMATION</p>
	<div class="inner">
		<p>Program/Course</p>
		<input style="width:70%" type="text" name="course" placeholder="Program/Course">
			
		<p>Year Level</p>
		<input type="text" name="yearlvl" placeholder="Year Level">
			
		<p>Are you a Transferee?</p>
		<input type="checkbox" name="transfer1" value="Yes">
        <label for="yes">Yes, I am</label> 
        <input type="checkbox" name="transfer2" value="No">
        <label for="yes">No, I am not</label>
		<br><br><br>
		
		<input type="reset">
		<input type=submit name="s" value="Submit">
		<br>
	</div>
	</form>	
</div>
<br><br>

<?php
if (isset($_POST["s"])) {
	//student
	$sFname=$_POST["sfirstname"]; 
    $sMname=$_POST["smiddlename"]; 
	$sLname = $_POST["slastname"];
	$sNum = $_POST["snum"];
	$sAdd = $_POST["sadd"];
	$sEmail = $_POST["semail"];
	$sBmonth = $_POST["mm"];
	$sBday = $_POST["dd"];
	$sByear = $_POST["yy"];
	if (isset($_POST['gender1'])) {
		$sGender1 = $_POST["gender1"];
		$sGender2 = "";
	} else if (isset($_POST['gender2'])) {
		$sGender2 = $_POST["gender2"];
		$sGender1 = "";
	} else {
		$sGender2 = "";
		$sGender1 = "";
	}
	$sReligion = $_POST["sadd"];
	$sSiblings = $_POST["sadd"];
	
	//parent	
	$fFname=$_POST["dfirstname"];
	$fMname=$_POST["dmiddlename"];
	$fLname=$_POST["dlastname"];
	$dNum=$_POST["dadnum"];
	$dAdd=$_POST["dadadd"];
	$mFname=$_POST["mfirstname"];
	$mMname=$_POST["mmiddlename"];
	$mLname=$_POST["mlastname"]; 
	$mNum=$_POST["momnum"]; 
	$mAdd=$_POST["momadd"];

	//citizenship
	$country = $_POST["birth"]; 
	$province = $_POST["province"]; 
	$cCitizenship = $_POST["citizenship"]; 
	
	//program
	$sCourse=$_POST["course"];  		
	$sYearlvl=$_POST["yearlvl"];  
	if (isset($_POST['gender1'])) {
		$sTransfer1 = $_POST["transfer1"];
		$sTransfer2 = "";
	} else if (isset($_POST['gender2'])){
		$sTransfer2 = $_POST["transfer2"];
		$sTransfer1 = "";
	} else {
		$sTransfer2 = "";
		$sTransfer1 = "";
	}
	
	echo "<h1> YOU ARE NOW REGISTERED </h1>";
	echo "<h2>" . strtoupper("Personal Information") . "</h2>";
	echo "<b>Name: </b>" . ucwords($sFname) . ucwords($sMname) . ucwords($sLname) . "<br><br>";
	echo "<b>Number: </b>" . $sNum . "<br><br>";
	echo "<b>Address: </b>" . ucwords($sAdd) . "<br><br>";
	echo "<b>Email: </b>" . $sEmail . "<br><br>";
	echo "<b>Birth Date: </b>" . $sBmonth . " - " . $sBday . " - " . $sByear . "<br><br>";
	echo "<b>Gender: </b>" . $sGender1 . $sGender2 . "<br><br>";
	echo "<b>Religion: </b>" . ucwords($sReligion) . "<br><br>";
	echo "<b>Siblings studying in this school: </b>" . $sSiblings . "<br><br><br>";
	
	echo "<h2>" . strtoupper("Parent Information") . "</h2>";
	echo "<b>Father's Name: </b>" . ucwords($fFname) . ucwords($fMname) . ucwords($fLname) . "<br><br>";
	echo "<b>Number: </b>" . $dNum . "<br><br>";
	echo "<b>Address: </b>" . ucwords($dAdd) . "<br><br>";
	echo "<b>Mother's Name: </b>" . ucwords($mFname) . ucwords($mMname) . ucwords($mLname) . "<br><br>";
	echo "<b>Number: </b>" . $mNum . "<br><br>";
	echo "<b>Address: </b>" . ucwords($mAdd) . "<br><br><br>";
	
	echo "<h2>" . strtoupper("Citizenship Information") . "</h2>";
	echo "<b>Birth Country: </b>" . ucwords($country) . ucwords($province) . "<br><br>"; 
	echo "<b>Country of Citizenship: </b>" . ucwords($cCitizenship) . "<br><br><br>"; 
	
	echo "<h2>" . strtoupper("Program Information") . "</h2>";
	echo "<b>Program/Course: </b>" . ucwords($sCourse) . "<br><br>"; 
	echo "<b>Year Level: </b>" . $sYearlvl . "<br><br>"; 
	echo "<b>Transfer Student? </b>" . $sTransfer1 . $sTransfer2 . "<br><br><br>";
}	
?>
<br><br>
</body>
</html>
