<!DOCTYPE html>
<html>
<head>
<title> Multiplication Table </title>
<style>

table {
    border: 3px solid black;
}

h1 {
	margin-top: 50px;
	text-align: center;
	font-family: Arial;
	font-weight: bold;
}

td {
     text-align: center;
	 font-family: Arial;
	 font-weight: bold;
	 border: 2px;
	 padding: 5px;
	 font-size: 25px;
	 height: 40px;
	 width: 40px;
}

.one {
	background-color: #B0E0E6;

}

.two {
	background-color: #FFB6C1;
}

</style>
</head>

<h1 class="title">MULTIPLICATION TABLE</h1>

<body style="background-color: #FFEFE7">

<?php
	$color = 0;
	echo "<center><table>";
	for ($row=0; $row <= 10; $row++) { 
		echo "<tr>";
		
			for ($col=0; $col <= 10; $col++) { 
				$product = $col * $row;
				
				if($color %2==0) 
				{
					echo "<td class='one'>".$product." </td>";
				}					
				else {
					echo "<td class='two'>".$product."</td>";
				}
				
				$color++;
			}
					
	  	echo "</tr>";
	}
	
	echo "</table>";
?>

<br><br>
</body>
</html>