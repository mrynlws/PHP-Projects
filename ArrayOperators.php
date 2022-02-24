<!DOCTYPE html>
<html>
<head>
<title> Array Operators </title>
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
	$a = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);

	$sum = $a[0] + $a[1] + $a[2] + $a[3] + $a[4] + $a[5] + $a[6] + $a[7] + $a[8] + $a[9];
	$difference = ((((((((($a[0] - $a[1]) - $a[2]) - $a[3]) - $a[4]) - $a[5]) - $a[6]) - $a[7]) - $a[8]) - $a[9]);
	$product = ((((((((($a[0] * $a[1]) * $a[2]) * $a[3]) * $a[4]) * $a[5]) * $a[6]) * $a[7]) * $a[8]) * $a[9]);
	$quotient = ((((((((($a[0] / $a[1]) / $a[2]) / $a[3]) / $a[4]) / $a[5]) / $a[6]) / $a[7]) / $a[8]) / $a[9]);
 
	echo "<table class='center'>";
	echo "<td colspan=2 bgcolor='#FFFF99'><h2>Array List: 2, 4, 6, 8, 10, 12, 14, 16, 18, 20</h2></td>";
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
?>
</body>
</html>
