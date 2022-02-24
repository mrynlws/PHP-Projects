<!DOCTYPE html>
<html>
<head>
<title>Two-Digit Decimal Combination</title>
<style>
body {
	margin: 250px;
}

</style>
</head>

<body style="background-color: #FFDDCD">
<?php
echo "<center><h1>All the Potential Combinations of a Two-Digit Decimal Combination</h1><br>";

for($i=0; $i< 10; $i++)
 { 
   for($j=0; $j < 10; $j++)
      {
	     echo $i . $j . ", "; 
      }
 }
 echo "<br>"; 
?>
</body>
</html>