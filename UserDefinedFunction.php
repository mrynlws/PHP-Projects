<!DOCTYPE html>
<html>
<head>
<title> User Defined Function </title>
<style> 

* {
	font-family: arial,sans-serif;
	text-align: center;
}

.center {
  margin-left: auto;
  margin-right: auto;
}

table {
    border: 1px solid black;
    width: 45%;
}

td, th {
    border: 1px solid black;
    padding: 5px;
	text-align: center;
	height: 50px;
}
</style>
</head>

<body bgcolor="#FFF8DC">
   
<?php
	echo "<br><br>";
	echo "<h1>SUM, DIFFERENCE, PRODUCT, AND QUOTIENT</h1>";
	function myFunction($x, $y, $z) {
		$sum = $x + $y + $z;
		$difference = (($x - $y) - $z);
		$product = (($x * $y) * $z);
		$quotient = (($x / $y) / $z);
		
		echo "<table class='center'>";
		echo "<td colspan=2 bgcolor='#FFFF99'><h2>My Parameter Values: 25, 13, 6</h2></td>";
		echo "<tr>";
		echo "<td>Addition</td>";
		echo "<td>$sum</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Subtraction</td>";
		echo "<td>$difference</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Multiplication</td>";
		echo "<td>$product</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Division</td>";
		echo "<td>$quotient</td>";
		echo "</tr>";
		echo "</table>";
		echo "<br><br>";
	}

	myFunction(25,13,6); 
	echo "<br><br>";
?>
</body>
</html>
