<!DOCTYPE html>  
<html>  
<head>
<title>Result Colors</title>
<style> 
    p, h1 {
        font-family: arial;
        text-align: center;
    }
	
	h3 {
		font-family: arial;
        text-align: center;
		color: red;
	}
	
	body {
		background-color: #FFFFE0;
	}
</style>  
</head>

<body>
	<br><h1>Five Favorite Colors</h1>
    <?php
		session_start();
		
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
            error_reporting(0);  

            $color1 = $_POST["color1"];
            $color2 = $_POST["color2"];
            $color3 = $_POST["color3"];
            $color4 = $_POST["color4"];
            $color5 = $_POST["color5"];
            
			//set session variables
            $_SESSION['clr1'] = $color1;
            $_SESSION['clr2'] = $color2;
            $_SESSION['clr3'] = $color3;
            $_SESSION['clr4'] = $color4;
            $_SESSION['clr5'] = $color5;
        
			echo "<p><b>My Favorite Color 1: </b>".$_SESSION['clr1']."<br></p>";
			echo "<p><b>My Favorite Color 2: </b>".$_SESSION['clr2']."<br></p>";
			echo "<p><b>My Favorite Color 3: </b>".$_SESSION['clr3']."<br></p>";
			echo "<p><b>My Favorite Color 4: </b>".$_SESSION['clr4']."<br></p>";
			echo "<p><b>My Favorite Color 5: </b>".$_SESSION['clr5']."<br><br></p>"; 
		  
		    if (empty($color1))
            {
				echo "<h3>PLEASE INPUT COLOR 1</h3>";
            }
			if (empty($color2))
            {
				echo "<h3>PLEASE INPUT COLOR 2</h3>";
            }
			if (empty($color3))
            {
				echo "<h3>PLEASE INPUT COLOR 3</h3>";
            }
			if (empty($color4))
            {
				echo "<h3>PLEASE INPUT COLOR 4</h3>";
            }
			if (empty($color5))
            {
				echo "<h3>PLEASE INPUT COLOR 5</h3>";
            }
        } 
    ?>
</body>
</html>
