<!DOCTYPE html>
<html>
<head>
<title> Fruit Array </title>
<style type="text/css"> 
	body {
		font-family: arial,sans-serif;
		text-align: center;
		background-color: #FFDAB9;
	}

	.center {
	  margin-left: auto;
	  margin-right: auto;
	}

	table {
		border: 1px solid black;
		background-color: #FAFAD2;
		width: 80%;
	}

	th, td {
		border: 1px solid black;
		padding: 5px;
		text-align: center;
	}
	
	nav {
		background-color: #ff8080;
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
		background-color: #ff6666;
		transition: 0.5s;
	}
</style>
</head>

<body> 
	<nav>
		<a href="MonthArray.php">Month</a>
		<a href="FruitArray.php">Fruit</a>
		<a href="ShapesVolume2.php">Volume</a>
		<a href="Resume.php">Resume</a>
		<a href="StringFunctions.php">String Function</a>
	</nav>
   
<?php
	echo "<br><br>";
	$fruit = array( array('<center><img src="guava.jpg" width="100" height="100">', "Name"=>"Guava", "Green with slightly bumpy skin often ripening to a yellow or almost maroon color.", "Guava fruits are amazingly rich in antioxidants, vitamin C, potassium, and fiber."),
				   array('<center><img src="apple.jpg" width="100" height="100">', "Name"=>"Apple", "Roundish in diameter with a shade of red, green, or yellow.", "A standard-size apple tree starts bearing fruit 8-10 years after it is planted."),
				   array('<center><img src="jackfruit.jpg" width="100" height="100">', "Name"=>"Jackfruit", "A spikey, green-colored fruit native to India and some parts of Southeast Asia.", "Jackfruit cannot survive on cold climate and young trees may die at temperatures below 0 °C (32° F)."),
				   array('<center><img src="lemon.jpg" width="100" height="100">', "Name"=>"Lemon", "Round and slightly elongated fruit with an intense bright yellow colour when it is totaly ripe", "Lemons are a hybrid between a sour orange and a citron."), 
				   array('<center><img src="pineapple.jpg" width="100" height="100">', "Name"=>"Pineapple", "The exterior changes from a green-gray to yellow as it ripens.", "Only one pineapple is produced by a single plant in a single season."),
				   array('<center><img src="banana.jpg" width="100" height="100">', "Name"=>"Banana", "A curved, yellow fruit with a thick skin and soft sweet flesh.", "Bananas float in water because they are less dense in comparison."),
				   array('<center><img src="strawberry.jpg" width="100" height="100">', "Name"=>"Strawberry", "A soft, sweet, and bright red berries.", "Strawberries are the first fruit to ripen in the spring."),
				   array('<center><img src="blueberry.jpg" width="100" height="100">', "Name"=>"Blueberry", "Has a blue/purple skin, and the flesh is usually light green, light yellow, or white.", "Blueberries were called “star fruits” by North American indigenous peoples because of the five-pointed star shape that is formed at the blossom end of the berry."),
				   array('<center><img src="watermelon.jpg" width="100" height="100">', "Name"=>"Watermelon", "Has an oval or spherical shape and a dark green and smooth rind.", "Watermelon is an ideal health food, because it doesn't contain any fat or cholesterol."),
				   array('<center><img src="orange.jpg" width="100" height="100">', "Name"=>"Orange", "Round orange-coloured fruit.", "Oranges are the largest citrus fruit in the world.") 
				 ); 
				 
	$columns = array_column($fruit, 'Name');
	array_multisort($columns, SORT_ASC, $fruit);
	 
	echo "<table class='center'>";
	echo "<th colspan=4 style='background-color: #FFFF99'><h2>My Fruits</h2></th>";	
	echo "<tr><th>Image</th><th>Name</th><th>Description</th><th>Facts</th></tr>";
		foreach ($fruit as $row) {
			echo "<tr>";
			foreach ($row as $data) {
				echo "<td>{$data}</td>";
			}
			echo "</tr>";
		}
	echo "</table>";
	echo "<br><br>";
?>
</body>
</html>


