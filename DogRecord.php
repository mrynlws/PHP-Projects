<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
	* {
		font-weight: 500;
		font-family: arial;
	}
	body {
		background-color: #FFFFE0;
		margin: 100px;
		margin-top: 50px;
	}
	.wrapper {
		display: grid;
		column-gap: 5px;
		width: 500px;
		padding-left: 25em;
	}
	span {
		font-weight: 700;
	}
	.wrapper>div {
		padding-left: 2em;
		border: solid;
		border-color: black;
		border-radius: 5px;
		border-width: 2px;
	}

</style>
</head>
<body>
<h1><center>DOG RECORDS</h1>
<div class="wrapper">
<?php
	//hostname, username, password, DB name:
	$conn = new mysqli('localhost', 'root', '', 'DogDB');

	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	} else {
		$dogctr = 1;
		$selectquery = mysqli_query($conn, "SELECT * FROM DogDB.dog;");
		
		if (mysqli_num_rows($selectquery) > 0) {
			while ($row = mysqli_fetch_assoc($selectquery)) {
				echo '<div>';
				echo "<br><span>Dog #</span>" . $dogctr . "<br><br><span>Name:</span> " . 
				$row['name'] . "<br><span>Breed:</span> " . 
				$row['breed']. "<br><span>Age:</span> " . 
				$row['age'] . "yrs old<br><span>Address:</span> " .
				$row['address'] . "<br><span>Color:</span> " . 
				$row['color'] . "<br><span>Height:</span> " .
				$row['height'] . "<br><span>Weight:</span> " . 
				$row['weight'];
				echo '<br><br>';
				$dogctr += 1;
				echo '</div>';
				echo '<br>';
			}
		} else {
			echo "No data is found in the selected table";
		}
	}
?>
</div>
</body>
</html>