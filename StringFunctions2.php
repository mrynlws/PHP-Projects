<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>String Functions 2</title>
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
    </style>
</head>

<body>
	<nav>
		<a href="MonthArray.php">Month</a>
		<a href="FruitArray.php">Fruit</a>
		<a href="ShapesVolume2.php">Volume</a>
		<a href="Resume.php">Resume</a>
		<a href="StringFunctions.php">String Function</a>
		<a href="StringFunctions2.php">String Function 2</a>
	</nav>
	<br>
	<center><h1>STRING FUNCTIONS</h1>
	
    <?php
  $string = " an online guide to html form <input> tag ";
  echo "<table border='1' id='customers' align='center'>
        <tr>
            <th width='10px'>No.</th>

            <th width='300px'>Description</th>

            <th width='400px'>Output</th>

        </tr>";

  //1
  echo "<tr>";
  echo "<td>" . "1." . "</td>";
  echo "<td>" . "Original value of \$string" . "</td>";
  echo "<td>*" . htmlentities($string,ENT_QUOTES) . "*</td>";
  echo "</tr>";

  //2
  echo "<tr>";
  echo "<td>" . "2." . "</td>";
  echo "<td>" . "Number of characters" . "</td>";
  echo "<td>*". strlen($string) . "*</td>";
  echo "</tr>";

  //3
  echo "<tr>";
  echo "<td>" . "3." . "</td>";
  echo "<td>" . "Number of words" . "</td>";
  echo "<td>*" . str_word_count($string) . "*</td>";
  echo "</tr>";

  //space
  echo "<tr><td colspan='3' height = '18px'>" . "" . "</td></tr>";

  //4
  echo "<tr>";
  echo "<td>" . "4." . "</td>";
  echo "<td>" . "First character to uppercase" . "</td>";
  echo "<td>*" . htmlentities(ucfirst($string)) . "*</td>";
  echo "</tr>";

  //5
  echo "<tr>";
  echo "<td>" . "5." . "</td>";
  echo "<td>" . "First character of each word to uppercase" . "</td>";
  echo "<td>*" . htmlentities(ucwords($string)) . "*</td>";
  echo "</tr>";

  //6
  echo "<tr>";
  echo "<td>" . "6." . "</td>";
  echo "<td>" . "To lowercase" . "</td>";
  echo "<td>*" . htmlentities(strtolower($string)) . "*</td>";
  echo "</tr>";

  //7
  echo "<tr>";
  echo "<td>" . "7." . "</td>";
  echo "<td>" . "To uppercase" . "</td>";
  echo "<td>*" . htmlentities(strtoupper($string))  . "*</td>";
  echo "</tr>";

  //space
  echo "<tr><td colspan='3' height = '18px'>" . "" . "</td></tr>";

  //8
  echo "<tr>";
  echo "<td>" . "8." . "</td>";
  echo "<td>" . "Without leading spaces" . "</td>";
  echo "<td>*". htmlentities(ltrim($string)). "*</td>";
  echo "</tr>";

  //9
  echo "<tr>";
  echo "<td>" . "9." . "</td>";
  echo "<td>" . "Without trailing spaces" . "</td>";
  echo "<td>*" . htmlentities(rtrim($string)) . "*</td>";
  echo "</tr>";

  //10
  echo "<tr>";
  echo "<td>" . "10." . "</td>";
  echo "<td>" . "Without leading and trailing spaces" . "</td>";
  echo "<td>*" .  htmlentities(trim($string)) . "*</td>";
  echo "</tr>";

  //space
  echo "<tr><td colspan='3' height = '18px'>" . "" . "</td></tr>";

  //11
  echo "<tr>";
  echo "<td>" . "11." . "</td>";
  echo "<td>" . "MD5 value of \$string" . "</td>";
  echo "<td>*" . md5($string) . "*</td>";
  echo "</tr>";

  //12
  echo "<tr>";
  echo "<td>" . "12." . "</td>";
  echo "<td>" . "Base64 value of \$string" . "</td>";
  echo "<td>*" . base64_encode($string) . "*</td>";
  echo "</tr>";

  //space
  echo "<tr><td colspan='3' height = '18px'>" . "" . "</td></tr>";

  //13
  echo "<tr>";
  echo "<td>" . "13." . "</td>";
  echo "<td>" . "First 16 characters" . "</td>";
  echo "<td>*",substr($string,0,16),"*</td>";
  echo "</tr>";

  //14
  echo "<tr>";
  echo "<td>" . "14." . "</td>";
  echo "<td>" . "Last 4 characters" . "</td>";
  echo "<td>*",substr($string,38, 4),"*</td>";
  echo "</tr>";

  //15
  echo "<tr>";
  echo "<td>" . "15." . "</td>";
  echo "<td>" . "4 characters starting from the 20'th Position" . "</td>";
  echo "<td>*",substr($string,20, 4),"*</td>";
  echo "</tr>";

  //space
  echo "<tr><td colspan='3' height = '18px'>" . "" . "</td></tr>";

  //16
  echo "<tr>";
  echo "<td>" . "16." . "</td>";
  echo "<td>" . 'Position of the word "guide"' . "</td>";
  echo "<td>" . "int(". strpos($string,"guide") . ")" . "</td>";
  echo "</tr>";

  //17
  echo "<tr>";
  echo "<td>" . "17." . "</td>";
  echo "<td>" . 'Position of the word "UE"' . "</td>";
  echo "<td>" ."int(".strpos($string,"UE"). ")</td>";
  echo "</tr>";

  //space
  echo "<tr><td colspan='3' height = '18px'>" . "" . "</td></tr>";

  //18
  echo "<tr>";
  echo "<td>" . "18." . "</td>";
  echo "<td>" . '"HTML" word in uppercase' . "</td>";
  echo "<td>" . "Output" . "</td>";
  echo "</tr>";

  //19
  echo "<tr>";
  echo "<td>" . "19." . "</td>";
  echo "<td>" . "< INPUT" . "> word in uppercase" . "</td>";
  echo "<td>" . "Output" . "</td>";
  echo "</tr>";

  //space
  echo "<tr><td colspan='3' height = '18px'>" . "" . "</td></tr>";

  //20
  echo "<tr>";
  echo "<td>" . "20." . "</td>";

  echo "<td>" . "Strings converted to array" . "</td>";
  echo "<td>" ;
  $stringArray = explode(" ",trim(htmlentities($string,ENT_QUOTES)));
  foreach($stringArray as $val)
      echo "*".$val."*<br>";
  echo "</td>";
  echo "</tr>";

  echo "</table>";
  ?>
  <br><br>
</body>
</html>