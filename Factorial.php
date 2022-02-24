<!DOCTYPE html>
<html>
<head>
<title> Factorial </title>
<style>
body {
	font-family: Arial;
	text-align: center;
}

input[type=number] {
    width: 16%;
    padding: 10px;
    border: 3px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    height: 35px;
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

input[type=submit]:hover {
    background-color: #D7418C;
	transition: 0.5s;
}

p {
	font-size: 20px;
}

p2 {
	font-weight: Light;
	font-size: 40px;
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
<body bgcolor="Pink">
<nav>
	<a href="http://localhost/RegForm2.php">Student Registration Form</a>
	<a href="http://localhost/MultiplicationTable.php">Multiplication Table</a>
	<a href="http://localhost/Fibonacci2.php">Fibonacci Sequence</a>
	<a href="http://localhost/Factorial.php">Factorial</a>
</nav>
    <br><br>
	
	<h1>FACTORIAL</h1><br>
	
	<p>Formula</p>
	<p> n! = n x (n-1) x ... x 1 </p><br>
	
    <form action="Factorial.php" method="post">
        <p>Enter a Number:</p><br>
        <input type="number" name="n" id="number" placeholder="Enter a number here...">
        <input type="submit" name="s" value="See Result">
    </form>
    <br><br>
	
<?php
	if($_POST){
        $num = $_POST['n'];  
		$factorial = 1;
		
		for($x=$num; $x>=1; $x--){
			echo "<p2>" . $num . " . ";
			$num--;
		} echo " = ";
		
		$num = $_POST['n'];  
		
		for($x=$num; $x>=1; $x--){	
			$factorial = $factorial * $x;
		}
	
		echo "<p2>" . $num . "! = " . $factorial . "<br>"; 
		echo "<p>The factorial of " . $num . " is " . $factorial;
	}
?>
</body>
</html>