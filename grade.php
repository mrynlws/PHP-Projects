<!DOCTYPE html>
<html>
<head>
<title> Grade </title>
<style>
body {
	margin-top: 50px;
	font-family: Arial;
}

h1 {
	text-align: center;
}

img {
	width: 200px;
	height: 200px;
	display: block;
	margin-left: auto;
	margin-right: auto;
}

input[type="number"] {
	display: block;
	margin : 0 auto;
	height: 80px; 
	width: 80px;
	background-color: #FFEFE7;
 }
input[type="text"] {
	display: block;
	margin : 0 auto;
	height: 40px; 
	width: 600px;
	background-color: #FFEFE7;
 }
input[type="submit"] {
	display: block;
	margin : 0 auto;
	height: 40px; 
	width: 100px;
}
</style>
</head>

<body style="background-color: #FFDDCD">
<form action="grade.php" method="post">
<h1> ENTER YOUR NAME:</h1><br>
<input type="text" name="tbUser">
<br>
<h1> ENTER YOUR GRADE:</h1><br>
<input type="number" name="tbGrade">
<br><br>
<center><input <input type=submit name="s" value="See Result">
<br>
<img src="unknown.jpg">

<?php
if(isset($_POST['s'])) //checking whether the input element is set or not
{
    $user=$_POST['tbUser']; //accessing value from 1st text box
    $grade=$_POST['tbGrade']; //accessing value from 2nd text field
    
    if($grade >= 93 && $grade <= 100)
        $rank = "A";
    if($grade >= 90 && $grade <= 92)
        $rank = "A-";
	
    if($grade >= 87 && $grade <= 89)
        $rank = "B+";
    if($grade >= 83 && $grade <= 86)
        $rank = "B";
    if($grade >= 80 && $grade <= 82)
        $rank = "B-";
	
	if($grade >= 77 && $grade <= 79)
        $rank = "C+";
    if($grade >= 73 && $grade <= 76)
        $rank = "C";
    if($grade >= 70 && $grade <= 72)
        $rank = "C-";
	
	if($grade >= 67 && $grade <= 69)
        $rank = "D+";
    if($grade >= 63 && $grade <= 66)
        $rank = "D";
    if($grade >= 60 && $grade <= 62)
        $rank = "D-";
	
	if($grade < 60)
		$rank = "F";

    echo "<br>";
    echo "<b>Name: </b>" . $user . "<br>"; //name
	echo "<b>Grade: </b>" . $grade . "<br>"; //grade
	echo "<b>Rank: </b>" . $rank . "<br><br>"; //rank
}
?>
</form>
</body>
</html>