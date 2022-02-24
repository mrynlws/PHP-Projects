<!DOCTYPE html>
<html>
<head>
<title> Multiplication Table </title>
<style>
table {
    border: none;
	border-spacing: 0;

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

nav {
	background-color: #FF69B4;
	opacity: 0.7;
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
	background-color: #D7418C;
	transition: 0.5s;
}
</style>
</head>

<body bgcolor="#FFEFD5">
<nav>
	<a href="http://localhost/RegForm2.php">Student Registration Form</a>
	<a href="http://localhost/MultiplicationTable.php">Multiplication Table</a>
	<a href="http://localhost/Fibonacci2.php">Fibonacci Sequence</a>
	<a href="http://localhost/Factorial.php">Factorial</a>
</nav>

<h1 class="title">MULTIPLICATION TABLE</h1>

<?php
	$color = 0;
	echo "<center> <table>";
	for ($row=0; $row <= 10; $row++) { 
		echo "<tr>";
		
			for ($col=0; $col <= 10; $col++) { 
				$product = $col * $row;
				
				if($color %2==0) {
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