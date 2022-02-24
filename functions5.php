<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP STRING functions</title>

    <style>
    table {
        border-style: solid;
        border-width: 2px;
        border-color: black;
    }

    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 80%;
    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #2d3436;
        color: white;
    }
    </style>
</head>

<body>
    <?php
  $string = " an online guide to html form <input> tag ";
  echo "<table border='1' id='customers'>

        <tr><th colspan='7' width='500px'>String Functions</th></tr>
        <tr>
            <th width='10px'>No.</th>

            <th width='300px'>Description</th>

            <th width='400px'>Output</th>

        </tr>";

  //1
  echo "<tr>";

  echo "<td>" . "1" . "</td>";

  echo "<td>" . "Original value of String" . "</td>";

  echo "<td>*" . htmlentities($string,ENT_QUOTES) . "*</td>";

  echo "</tr>";

  //2
  echo "<tr>";

  echo "<td>" . "2" . "</td>";

  echo "<td>" . "Number of Characters" . "</td>";

  echo "<td>*". strlen($string) . "*</td>";

  echo "</tr>";

  //3
  echo "<tr>";

  echo "<td>" . "3" . "</td>";

  echo "<td>" . "Number of words" . "</td>";

  echo "<td>*" . str_word_count($string) . "*</td>";

  echo "</tr>";

  //space
  echo "<tr>";
  echo "<td colspan='3' height = '18px'>" . "" . "</td>";
  echo "</tr>";

  //4
  echo "<tr>";

  echo "<td>" . "4" . "</td>";

  echo "<td>" . "First Character to uppercase" . "</td>";

  echo "<td>*" . htmlentities(ucfirst($string)) . "*</td>";

  echo "</tr>";

  //5
  echo "<tr>";

  echo "<td>" . "5" . "</td>";

  echo "<td>" . "First character of each word to uppercase" . "</td>";

  echo "<td>*" . htmlentities(ucwords($string)) . "*</td>";

  echo "</tr>";

  //6
  echo "<tr>";

  echo "<td>" . "6" . "</td>";

  echo "<td>" . "To lowercase" . "</td>";

  echo "<td>*" . htmlentities(strtolower($string)) . "*</td>";

  echo "</tr>";

  //7
  echo "<tr>";

  echo "<td>" . "7" . "</td>";

  echo "<td>" . "To uppercase" . "</td>";

  echo "<td>*" . htmlentities(strtoupper($string))  . "*</td>";

  echo "</tr>";

  //space
  echo "<tr>";
  echo "<td colspan='3' height = '18px'>" . "" . "</td>";
  echo "</tr>";

  //8
  echo "<tr>";

  echo "<td>" . "8" . "</td>";

  echo "<td>" . "Without leaving spaces" . "</td>";

  echo "<td>*". htmlentities(ltrim($string)). "*</td>";

  echo "</tr>";

  //9
  echo "<tr>";

  echo "<td>" . "9" . "</td>";

  echo "<td>" . "Without trailing spaces" . "</td>";

  echo "<td>*" . htmlentities(rtrim($string)) . "*</td>";

  echo "</tr>";

  //10
  echo "<tr>";

  echo "<td>" . "10" . "</td>";

  echo "<td>" . "Without leading and trailing spaces" . "</td>";

  echo "<td>*" .  htmlentities(trim($string)) . "*</td>";

  echo "</tr>";

  //space
  echo "<tr>";
  echo "<td colspan='3' height = '18px'>" . "" . "</td>";
  echo "</tr>";

  //11
  echo "<tr>";

  echo "<td>" . "11" . "</td>";

  echo "<td>" . "MD5 value of $ string" . "</td>";

  echo "<td>*" . md5($string) . "*</td>";

  echo "</tr>";

  //12
  echo "<tr>";

  echo "<td>" . "12" . "</td>";

  echo "<td>" . "Base64 value of $ string" . "</td>";

  echo "<td>*" . base64_encode($string) . "*</td>";

  echo "</tr>";

  //space
  echo "<tr>";
  echo "<td colspan='3' height = '18px'>" . "" . "</td>";
  echo "</tr>";

  //13
  echo "<tr>";

  echo "<td>" . "13" . "</td>";

  echo "<td>" . "First 16 characters" . "</td>";

  echo "<td>*",substr($string,0,16),"*</td>";

  echo "</tr>";

  //14
  echo "<tr>";

  echo "<td>" . "14" . "</td>";

  echo "<td>" . "Last 4 characters" . "</td>";

  echo "<td>*",substr($string,38, 4),"*</td>";

  echo "</tr>";

  //15
  echo "<tr>";

  echo "<td>" . "15" . "</td>";

  echo "<td>" . "4 characters starting from the 20th Position" . "</td>";

  echo "<td>*",substr($string,20, 4),"*</td>";

  echo "</tr>";

  //space
  echo "<tr>";
  echo "<td colspan='3' height = '18px'>" . "" . "</td>";
  echo "</tr>";

  //16
  echo "<tr>";

  echo "<td>" . "16" . "</td>";

  echo "<td>" . "Position of the word 'guide'" . "</td>";

  echo "<td>" . "int(". strpos($string,"guide") . ")" . "</td>";

  echo "</tr>";

  //17
  echo "<tr>";

  echo "<td>" . "17" . "</td>";

  echo "<td>" . "Position of the word 'UE'" . "</td>";

  echo "<td>" ."int(".strpos($string,"UE"). ")</td>";

  echo "</tr>";

  //space
  echo "<tr>";
  echo "<td colspan='3' height = '18px'>" . "" . "</td>";
  echo "</tr>";

  //18
  echo "<tr>";

  echo "<td>" . "18" . "</td>";

  echo "<td>" . "'HTML' word in uppercase" . "</td>";

  echo "<td>" . "Output" . "</td>";

  echo "</tr>";

  //19
  echo "<tr>";

  echo "<td>" . "19" . "</td>";

  echo "<td>" . "'INPUT' word in uppercase" . "</td>";

  echo "<td>" . "Output" . "</td>";

  echo "</tr>";

  //space
  echo "<tr>";
  echo "<td colspan='3' height = '18px'>" . "" . "</td>";
  echo "</tr>";

  //20
  echo "<tr>";

  echo "<td>" . "20" . "</td>";

  echo "<td>" . "Strings converted to array" . "</td>";

  echo "<td>" ;
  $toarr = explode(" ",htmlentities($string,ENT_QUOTES));
  foreach($toarr as $val)
      echo "*".$val."*<br>";
  echo "</td>";

  echo "</tr>";


  echo "</table>";

  ?>
</body>

</html>