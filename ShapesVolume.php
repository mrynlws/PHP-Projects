<?php error_reporting (0); 
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Volume of Shapes</title>
	<style type="text/css">
	body {
		font-family: arial;
	}
	
	td {
		border: 1px solid black;
		text-align: center;
		padding: 5px;
	}
	
	p {
		text-align: center;
		font-weight: bold;
	}
	
	input[type=number] {
		width: 9%;
		padding: 10px;
		border: 3px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		height: 5px;
	}
	
	input[type=submit] {
		width: 7%;
		font-weight: Bold;
		background-color: #FF69B4;
		color: white;
		padding: 10px;
		margin: 8px 0;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}
	</style>
<body>
	<br><br>
	<form action="ShapesVolume.php" method="post">
        <p>Side: <input type="number" name="s" id="number" placeholder="Enter side...">
		   Width: <input type="number" name="w" id="number" placeholder="Enter width...">
		   Length: <input type="number" name="l" id="number" placeholder="Enter length...">
		   Height: <input type="number" name="h" id="number" placeholder="Enter height...">
		   Area: <input type="number" name="B" id="number" placeholder="Enter area...">
		   Radius: <input type="number" name="r" id="number" placeholder="Enter radius...">
		</p>
        <center><input type="submit" name="sub" value="See Result">
    </form>
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
			return 3.14 * ($radius * $radius) *  $height;
		}
		
		function pyramid($length, $width, $height){
			return ($length * $width * $height) / 3;
		}
		
		function cone($radius, $height){
			return 3.14 * ($radius * $radius) * ($height / 3);
		}
		
		function sphere($radius){
			return (4/3) * 3.14 * ($radius * $radius * $radius);
		}
	?>
	<center>
	<table>
		<td colspan="4"> Volume of Shapes </td>
		<tr><td width="200">Shape</td> 
			<td width="200">Values</td> 
			<td width="200">Formula</td> 
			<td width="200">Answer</td> 
		</tr>
		<tr><td height="50">Cube</td> 
		    <td>
				<?php
					if($_POST){
						$side = $_POST['s'];  
						echo "s = " . $side;
					}
				?>
			</td> 
			<td>v = s<sup>3</sup></td> 
			<td>
				<?php
					if($_POST){
						$side = $_POST['s'];  
						echo cube($side);
					}
					if($_POST['s'] == NULL) 
						echo "NO INPUT";
				?>
			</td>
		</tr>
		<tr><td height="50">Right Rectangular Prism</td>
		    <td>
				<?php
					if($_POST){
						$width = $_POST['w'];  
						$height = $_POST['h'];
						$length = $_POST['l']; 
						echo "w = " . $width . "<br>";
						echo "h = " . $height . "<br>";
						echo "l = " . $length . "<br>";
					}
				?>
		    </td> 
			<td>v = w * h * l</td> 
			<td>
				<?php	
					error_reporting (E_ALL ^ E_NOTICE);
					if($_POST){
						$width = $_POST['w'];  
						$height = $_POST['h'];
						$length = $_POST['l']; 
						echo rrprism($width, $height, $length);
					}

					if($_POST['w'] == NULL) 
						echo "INCOMPLETE INPUT";
					elseif($_POST['h'] == NULL) 
						echo "INCOMPLETE INPUT";
					if($_POST['l'] == NULL) 
						echo "INCOMPLETE INPUT";
					else "NO INPUT";
				?>
			</td> 
		</tr>
		<tr><td height="50">Prism</td> 
			<td>Base area = 5<br></td> 
			<td>v = B * h</td> 
			<td>
				<?php
					$BA = 5;
					$Height = 5;
						echo prism($BA, $Height);
				?>
			</td> 
		</tr>
		<tr><td height="50">Cylinder</td> 
			<td>Radius = 5<br>
				Height = 5<br>
			</td> 
			<td>v = πr<sup>2</sup>h</td> 
			<td>
				<?php
					$Radius = 5;
					$Height = 5;
						echo cylinder($Radius, $Height);
				?>
			</td> 
		</tr>
		<tr><td height="50">Pyramid</td> 
			<td>Length = 5 <br>
				Width = 5 <br>
				Height = 5<br>
			</td> 
			<td>v = (l * w * h) / 3</td> 
			<td>
				<?php
					$Length = 5;
						$Width = 5;
						$PHeight = 5;
							echo pyramid($Length, $Width, $PHeight);
				?>
			</td> 
		</tr>
		<tr><td height="50">Cone</td> 
			<td>Radius = 5 <br>
				Height = 5
			</td> 
			<td>v = πr<sup>2</sup> * (h / 3)</td> 
			<td>
				<?php
					$Radius = 5;
					$Height = 5;
						echo cone($Radius, $Height);
				?>
			</td>
		<tr><td height="50">Sphere</td> 
			<td>Radius = 5</td> 
			<td>v = (4 / 3) * πr<sup>3</sup></td> 
			<td>
				<?php
					$Radius = 5;
						echo sphere($Radius);
				?>
			</td> 
		</tr>
	</table>
</body>
</head>
</html>