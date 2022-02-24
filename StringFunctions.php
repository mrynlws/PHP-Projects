<!DOCTYPE html>  
<html>  
<head>
    <meta charset="utf-8">
    <title>String Functions</title>  
    <style> 
		body {
			font-family: arial;
			background-color: #FFDAB9;
		}
		
		table {
			border: 1px solid black;
			background-color: #FAFAD2;
			width: 80%;
			font-family: arial;
		}

		th, td {
			border: 1px solid black;
			padding: 5px;
			text-align: center;
		}
		
		th {
			background-color: #FFFF99;
		}

        p
        {
            font-family: Montserrat, sans-serif;
            font-size: 16px;
			font-weight: bold;
			text-align: center;
        }
		
		nav {
			background-color: #ff8080;
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
			background-color: #ff6666;
			transition: 0.5s;
		}
		
		input[type=submit] {
			width: 7%;
			font-weight: Bold;
			background-color: #ff8080; 
			color: white;
			padding: 10px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #ff6666;
			transition: 0.5s;
		}
		
		input[type=text] {
			width: 16%;
			padding: 10px;
			border: 3px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			height: 35px;
		}
    </style>  
</head>

<body>
	<nav>
		<a href="MonthArray.php">Month</a>
		<a href="FruitArray.php">Fruit</a>
		<a href="ShapesVolume2.php">Volume</a>
		<a href="Resume.php">Resume</a>
		<a href="StringFunctions.php">String Function</a>
	</nav>
	<br>
	
	<center><h1>STRING FUNCTIONS</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <p>STRING: <input type="text" name="string" placeholder="Enter a string here..."> 
			   <input type="submit"> 
	</p>
	
    <?php
		error_reporting(0);
		
		$string = $_POST['string'];
		
		if ($_POST["string"]) {
			echo "<p>YOU HAVE ENTERED A STRING</p>";
		}
		
		if ($_POST["string"] == NULL) {
			echo "<p>PLEASE ENTER A STRING</p>";
		}
		
		echo"<br>";
        echo "<table><th>No.</th><th>Description</th><th>Output</th>";
        
        //1
        echo "<tr><td>1.</td><td>Original value of \$string</td><td>*".htmlspecialchars($string)."*</td></tr>";

        //2
        echo "<tr><td>2.</td><td>Number of characters</td><td>*".strlen($string)."*</td></tr>";
        
        //3
        echo "<tr><td>3.</td><td>Number of words</td><td>*".str_word_count($string)."*</td></tr>";
        echo "<tr><td colspan=3 height=15px></td></tr>";

        //4
        echo "<tr><td>4.</td><td>First character to uppercase</td><td>*".ucfirst(htmlspecialchars($string))."*</td></tr>";

        //5
        echo "<tr><td>5.</td><td>First character of each word to uppercase</td><td>*".ucwords(htmlspecialchars($string))."*</td></tr>";

        //6
        echo "<tr><td>6.</td><td>To lowercase</td><td>*".strtolower(htmlspecialchars($string))."*</td></tr>";

        //7
        echo "<tr><td>7.</td><td>To uppercase</td><td>*".strtoupper(htmlspecialchars($string))."*</td></tr>";
        echo "<tr><td colspan=3 height=15px></td></tr>";

        //8
        echo "<tr><td>8.</td><td>Without leading spaces</td><td>*".ltrim(htmlspecialchars($string))."*</td></tr>";

        //9
        echo "<tr><td>9.</td><td>Without trailing spaces</td><td>*".rtrim(htmlspecialchars($string))."*</td></tr>";

        //10
        echo "<tr><td>10.</td><td>Without leading and trailing spaces</td><td>*".trim(htmlspecialchars($string))."*</td></tr>";
        echo "<tr><td colspan=3 height=15px></td></tr>";

        //11
        echo "<tr><td>11.</td><td>MD5 value of \$string</td><td>*".md5($string)."*</td></tr>";

        //12
        echo "<tr><td>12.</td><td>Base64 value of \$string</td><td>*".base64_encode($string)."*</td></tr>";
		echo "<tr><td colspan=3 height=15px></td></tr>";

        //13
        echo "<tr><td>13.</td><td>First 16 characters</td><td>*".substr($string, 0, 16)."*</td></tr>";

        //14
        echo "<tr><td>14.</td><td>Last 4 characters</td><td>*".substr($string, -4)."*</td></tr>";

        //15
        echo "<tr><td>15.</td><td>4 characters starting from the 20'th Position</td><td>*".substr($string, 20, 4)."*</td></tr>";
		echo "<tr><td colspan=3 height=15px></td></tr>";
        
        //16
        echo "<tr><td>16.</td><td>Position of the word \"guide\"</td><td>*",var_dump(strpos($string, "guide")),"*</td></tr>";

        //17
        echo "<tr><td>17.</td><td>Position of the word \"UE\"</td><td>*",var_dump(strpos($string, 'UE')),"*</td></tr>";
		echo "<tr><td colspan=3 height=15px></td></tr>";

        //18
        echo "<tr><td>18.</td><td>\"HTML\" word in uppercase</td><td>*".str_replace("html", "HTML", htmlspecialchars($string))."*</td></tr>";

        //19
        echo "<tr><td>19.</td><td>\"".htmlspecialchars("<INPUT>")."\" word in uppercase</td><td>*".str_replace("input", "INPUT", htmlspecialchars($string))."*</td></tr>";
		echo "<tr><td colspan=3 height=15px></td></tr>";
		
        //20
        echo "<tr><td>20.</td><td>Strings converted to array</td><td>";
        $stringArray = explode(" ", trim(htmlspecialchars($string)));
        foreach ($stringArray as $val){
            echo "*".$val."*<br>";
        }
        echo "</td></tr>";
        echo "</table>";
    ?>
	<br><br>
    </body>
</html>