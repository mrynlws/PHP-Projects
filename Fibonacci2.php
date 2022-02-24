<!DOCTYPE html>
<html>
<head>
<title> Fibonacci Sequence</title>
<style>
body {
	font-family: Arial;
	text-align: center;
}

p {
	font-weight: Light;
	font-size: 20px;
}

p2 {
	font-weight: Bold;
	font-size: 30px;
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

input[type=number] {
    width: 16%;
    padding: 10px;
    border: 3px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    height: 35px;
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
    <br>

    <h1>FIBONACCI SEQUENCE</h1>
	
    <form action="Fibonacci2.php" method="post">
        <p>Enter a Number:</p><br>
        <input type="number" name="n" id="number" placeholder="Enter a number here...">
        <input type="submit" name="s" value="See Result">
    </form>
    <br>

    <?php 
        if($_POST){
            $n = $_POST['n'];  
			$ctr = 0;
            $n1 = 0;
            $n2 = 1;
            
			
            while ($ctr < $n){
                echo "<p>" . $n1 . " </p>";
			
                $n3 = $n1 + $n2;
                $n1 = $n2;
                $n2 = $n3;
                $ctr = $ctr + 1;
            } 
			echo "===============================<br><br>";
			echo "<p2>F". "<sub> $n </sub>" . " = " . $n1 . "</p2><br><br>";  
        }    
	?>
</body>
</html>