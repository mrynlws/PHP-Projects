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
	<h1>DOG INFORMATION</h1>
	<div>
	<br><br>
	<form method="post" action="DogRegister.php">
	  <b>Name</b><br><input type="text" name="name" placeholder="Enter name..."><br><br>
	  <b>Breed</b><br><input type="text" name="breed" placeholder="Enter  breed..."><br><br>
	  <b>Age</b><br><input type="text" name="age" placeholder="Enter age..."><br><br>
	  <b>Address</b><br><input class="txtadd" name="address" placeholder="Enter address..."><br><br>
	  <b>Color</b><br><input type="text" name="color" placeholder="Enter color..."><br><br>
	  <b>Height</b><br><input type="text" name="height" placeholder="Enter height..."><br><br>
	  <b>Weight</b><br><input type="text" name="weight" placeholder="Enter weight..."><br><br>
	  <input type="submit" value="SAVE"><br><br>
	</form>

	<?php
		if ($_POST) {
			// collect value of input field
			$name = $_POST['name'];
			$breed = $_POST['breed'];
			$age = $_POST['age'];
			$address = $_POST['address'];
			$color = $_POST['color'];
			$height = $_POST['height'];
			$weight = $_POST['weight'];
			
			//hostname, username, password, DB name:
			$conn = new mysqli('localhost', 'root', '', 'DogDB');
			
			if ($conn->connect_error){
				die('Connection Failed: ' . $conn->connect_error);
			} else {
					$stmt = $conn->prepare('insert into dog(name, breed, age, address, color, height, weight) 
					values(?, ?, ?, ?, ?, ?, ?)');
					
					$stmt->bind_param('sssssss', $name,  $breed, $age, $address, $color, $height, $weight);
					$stmt->execute();
				echo "The information was saved successfully!";
				$stmt->close();
				$conn->close();
			}
		}
	?>
	</div>
	<br><br>
</body>
</html>