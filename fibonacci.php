<!DOCTYPE html>
<html>
<title> Fibonacci </title>
<head>
<style>

body {
	font-family: Arial;
	text-align: center;
}

p {
	text-align: center;
	font-weight: Bold;
	font-size: 20px;
}

p2 {
	font-weight: Bold;
	font-size: 30px;
}

.container {
    display: grid;
    grid-template-columns: auto auto auto  auto auto;
    background-color: #FF69B4	;
    padding: 10px;
    width: 60%;
    margin: auto;
}

.box {
    background-color: rgba(255, 255, 255, 0.8); 
    border: 1px solid rgba(0, 0, 0, 0.8);
    padding: 20px;
    font-size: 30px;
    width: 100px;
    text-align: center;
	margin: auto;
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
	background-color: #FFB6C1;
	transition: 0.5s;
}
</style>
</head>

<body bgcolor="Pink">
<nav>
	<a href="#">Student Registration Form</a>
	<a href="http://localhost/MultiplicationTable.php">Multiplication Table</a>
</nav>
    <br>

    <h1>FIBONACCI SEQUENCE</h1>
	
    <form action="fibonacci.php" method="post">
        <p>Enter a Number:</p><br>
        <input type="number" name="n" id="number" placeholder="Enter a number here">
        <input type="submit" name="s" value="See Result">
    </form>
    <br>
	<div class="container"> 

    <?php 
        if($_POST){
            $n = $_POST['n'];  
            $n1 = 0;
            $n2 = 1;
            $ctr = 0;
			
            while ($ctr < $n){
                echo "<div class='box'>". $n1 . "</div><br>";
				
   
                $n3 = $n2 + $n1;
                $n1 = $n2;
                $n2 = $n3;
                $ctr = $ctr + 1;
            } 
			echo " </div><br>";
			echo "<p2>F". "<sub> $n </sub>" . " = " . $n1 . "</p2><br><br>";  
        }    
	?>
</body>
</html>