<!DOCTYPE html>  
<html>  
<head>
    <meta charset="utf-8">
    <title>String Function</title>
    <style>  
		body {
			margin: 50px;
			background-color: #FFFDD0;
		}
		
        table {  
            width: 80%;
			height: 50%;	
			font-family: Arial; 
            text-align: center;
			font-weight: bold;
        }
		
		th {
			font-size: 14pt; 
		}

        td {  
			font-size: 12pt; 
			border: 1px solid black;
        }
    </style>  
</head>
<body>
    <?php
        $name = array (
            "adri", "lloyd", "anne ", "marvin", "kylie",
            "nikka", "jam", "john", "maribel", "trisha",
            "lei", "jay", "jake", "riguel", "roscoe",
            "zamiel", "kaius", "kalix", "amber", "marem"
        );

        function stringFunc($name) {

            echo"<table align='center' cellpadding = '10' bordercolor = 'black'>";
            echo "<tr><th colspan = '6'>List of Names</th></tr>";
            echo '<tr>
				  <td> Name </td><td>Number of Characters</td>
				  <td>Uppercase First Character</td>
                  <td>Replace Vowels with @</td>
				  <td>Check Position of Character "a"</td>
				  <td>Reverse Name</td></tr>';

            foreach($name as $value) {
                echo "<tr><td>" . $value . "</td>";
                echo "<td>" . strlen($value) . "</td>";
                echo "<td>" . ucfirst($value) . "</td>";
                echo "<td>" . str_replace(str_split('aeiou'), "@", $value) . "</td>";
                echo "<td>";
                
                if (strpos($value, "a") !== false) {
                    echo strpos($value, "a");
                }
                else {
                    echo 'Character "a" is not found.';
                }

                echo "</td>";
                echo "<td>" . strrev($value) . "</td>";
                echo "</tr>";
            }
        }
        stringFunc($name);
    ?>
</body>
</html>
