<html>
<head>
<title>Personal Information Webpage (GET)</title>
<style type="text/css">
	body {
		font-family: arial;
		background-color: #FFFFE0;
	}

	div {
		width: 500px;
		border: 3px solid black;
		padding: 50px;
		margin: auto;
		background-color: #F6FFE1;
	}

	i {
		color: red;
	}

	h1 {
		text-align: center;
	}

	.txtadd {
		width: 80%;
		padding: 10px;
		border: 3px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		height: 20px;
	}

	input[type=submit] {
		width: 15%;
		font-weight: Bold;
		background-color: black; 
		color: white;
		padding: 10px;
		margin: 8px 0;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}

	input[type=submit]:hover {
		background-color: gray;
		transition: 0.3s;
	}
			
	input[type=text] {
		width: 50%;
		padding: 10px;
		border: 3px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		height: 20px;
	}
</style>
</head>

<body>
	<br><br>
	<h1>PERSONAL INFORMATION WEBPAGE<br>USING GET</h1>
	<div>
	<br><br>
	<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  <b>First Name: </b><input type="text" name="fname" placeholder="Enter first name here..."><br><br>
	  <b>Middle Name: </b><input type="text" name="mname" placeholder="Enter middle name here..."><br><br>
	  <b>Last Name: </b><input type="text" name="lname" placeholder="Enter last name here..."><br><br>
	  <b>Date of Birth: </b><input type="text" name="bday" placeholder="Enter birth date here..."><br><br>
	  <b>Address: </b><input class="txtadd" name="address" placeholder="Enter address here..."><br><br>
	  <input type="submit"><br><br>
	</form>

	<?php
		if ($_GET) {
		  // collect value of input field
		  $fname = $_GET['fname'];
		  $mname = $_GET['mname'];
		  $lname = $_GET['lname'];
		  $bday = $_GET['bday'];
		  $address = $_GET['address'];
		  
		  if (empty($fname)) {
			echo "<b>First Name: </b><i>[Please enter your First Name]</i>";
		  } else {
			echo "<b>First Name: </b>".$fname;
		  } echo "<br><br>";
		  if (empty($mname)) {
			echo "<b>Middle Name: </b><i>[Please enter your Middle Name]</i>";
		  } else {
			echo "<b>Middle Name: </b>".$mname;
		  } echo "<br><br>";
		  if (empty($lname)) {
			echo "<b>Last Name: </b><i>[Please enter your Last Name]</i>";
		  } else {
			echo "<b>Last Name: </b>".$lname;
		  } echo "<br><br>";
		  if (empty($bday)) {
			echo "<b>Date of Birth: </b><i>[Please enter your Birth Date]</i>";
		  } else {
			echo "<b>Date of Birth: </b>".$bday;
		  } echo "<br><br>";
		  if (empty($address)) {
			echo "<b>Address: </b><i>[Please enter your Address]</i>";
		  } else {
			echo "<b>Address: </b>".$address;
		  } echo "<br><br>";
		}
	?>
	</div>
	<br><br>
</body>
</html>