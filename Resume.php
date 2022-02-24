<!DOCTYPE html>  
<html>  
<head>
	<meta charset="utf-8">
	<title>Resume</title>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="ResumeStyle.css">
</head>
<body>
	<nav>
		<a href="MonthArray.php">Month</a>
		<a href="FruitArray.php">Fruit</a>
		<a href="ShapesVolume2.php">Volume</a>
		<a href="Resume.php">Resume</a>
		<a href="StringFunctions.php">String Function</a>
	</nav>
	<br><br>
	
    <?php	
        echo"<table align='center' cellpadding = '5' bordercolor = 'black'>";
        echo "<tr><td colspan ='6' style='background-color:#FFFF99'><h1>MARIANNE LOUISE BUAMA</h1></td></tr>";
		echo "<tr><td colspan ='2' padding ><center><img src='profile.jpg' width='5' height='5'></td>";
	    echo "<td colspan ='4'>"; include 'PersInfo.php'; echo "</td></tr>";
        echo "<tr><td colspan ='6'>"; include 'CareerObjective.php'; echo "</td></tr>";
        echo "<tr><td colspan ='6'>"; include 'EducAttainment.php'; echo "</td><tr>";
        echo "<tr><td colspan ='6'>"; require 'Skills.php'; echo "</td></tr>";
        echo "<tr><td colspan ='6'>"; require 'Affiliations.php'; echo "</td></tr>";
		echo "<tr><td colspan ='6'>"; require 'WorkExperience.php'; echo "</td></tr>";
        echo "</tr></table><br><br>";
    ?>
</body>
</html>
