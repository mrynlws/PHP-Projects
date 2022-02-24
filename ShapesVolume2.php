<html>
<head>
	<meta charset="utf-8">
	<title>Volume of Shapes</title>
	<style type="text/css">
		body {
			font-family: arial;
			background-color: #FFDAB9;
		}
		
		table, th, td {
			border: 1px solid black;
			background-color: #FFFFCC;
		}
		
		th, td {
			padding: 10px;
			font-weight: bold;
			font-size: 20px;
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
<body>
	<nav>
		<a href="MonthArray.php">Month</a>
		<a href="FruitArray.php">Fruit</a>
		<a href="ShapesVolume2.php">Volume</a>
		<a href="Resume.php">Resume</a>
		<a href="StringFunctions.php">String Function</a>
	</nav>
	<br><br>
	
	<?php
		function cube($side){
			return $side * $side * $side;
		}
		
		function rrprism($width, $height, $length){
			return $width * $height * $length;
		}
		
		function prism($area, $height){
			return $area * $height;
		}
		
		function cylinder($radius, $height){
			return pi() * ($radius * $radius) *  $height;
		}
		
		function pyramid($length, $width, $height){
			return ($length * $width * $height) / 3;
		}
		
		function cone($radius, $height){
			return pi() * ($radius * $radius) * ($height / 3);
		}
		
		function sphere($radius){
			return (4/3) * pi() * ($radius * $radius * $radius);
		}
	?>
	<center>
	<table>
		<td colspan="4" style="background-color:#FFFF99">Volume of Shapes</td>
		<tr><td width="200">Shape</td> 
			<td width="200">Values</td> 
			<td width="200">Formula</td> 
			<td width="200">Answer</td> 
		</tr>
		<tr><td height="50">Cube</td> 
		    <td>s = 5</td> 
			<td>v = s<sup>3</sup></td> 
			<td>
				<?php
					$side = 5;
					echo cube($side);
				?>
			</td>
		</tr>
		<tr><td height="50">Right Rectangular Prism</td>
		    <td>w = 4<br>
				h = 6<br>
				l = 10<br>
		    </td> 
			<td>v = w * h * l</td> 
			<td>
				<?php	
					$width = 4;
					$height = 6;
					$length = 10;
					echo rrprism($width, $height, $length);
				?>
			</td> 
		</tr>
		<tr><td height="50">Prism</td> 
			<td>B = 25<br>
				h = 9<br>
			</td> 
			<td>v = B * h</td> 
			<td>
				<?php
					$area = 25;
					$height = 9;
					echo prism($area, $height);
				?>
			</td> 
		</tr>
		<tr><td height="50">Cylinder</td> 
			<td>r = 8<br>
				h = 15<br>
			</td> 
			<td>v = πr<sup>2</sup>h</td> 
			<td>
				<?php
					$radius = 8;
					$height = 15;
					echo number_format(cylinder($radius, $height), 2, '.', '');
				?>
			</td> 
		</tr>
		<tr><td height="50">Pyramid</td> 
			<td>l = 8.2<br>
				w = 6.5<br>
				h = 12<br>
			</td> 
			<td>v = (l * w * h) / 3</td> 
			<td>
				<?php
					$length = 8.2;
					$width = 6.5;
					$height = 12;
					echo number_format(pyramid($length, $width, $height), 2, '.', '');
				?>
			</td> 
		</tr>
		<tr><td height="50">Cone</td> 
			<td>r = 18<br>
				h = 7<br>
			</td> 
			<td>v = πr<sup>2</sup> * (h / 3)</td> 
			<td>
				<?php
					$radius = 18;
					$height = 7;
					echo number_format(cone($radius, $height), 2, '.', '');
				?>
			</td>
		<tr><td height="50">Sphere</td> 
			<td>r = 5</td> 
			<td>v = (4 / 3) * πr<sup>3</sup></td> 
			<td>
				<?php
					$radius = 5;
					echo number_format(sphere($radius), 2, '.', '');
				?>
			</td> 
		</tr>
	</table>
	<br><br>
</body>
</head>
</html>