<!DOCTYPE html>
<html>
    <head>
	<style>
		body {
			 background-color: #FFDAB9;
			 font-family: arial;
		}
		table, th, td {
			border: 1px solid black;
			background-color: #FFFFCC;
		}
		
		th, td {
			padding: 10px;
			font-weight: bold;
			font-size: 20px;
			text-align: center;
		} 

		.center {
			margin-left: auto; 
			margin-right: auto;
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
		</nav>

        <table class="center">
			<br><br>
            <th colspan="7" style="background-color:#FFFF99"><?php echo "SEPTEMBER"?></th>
            <?php
			$day = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);
            $ctr = 0;
			
            echo "<tr style='center'><td>MONDAY</td><td>TUESDAY</td><td>WEDNESDAY</td><td>THURSDAY</td>
				 <td>FRIDAY</td><td>SATURDAY</td><td>SUNDAY</td></tr>";

            foreach($day as $value){
                if($value == 7){
                    echo "<td style='background-color:red'>$value</td>";
                }
                else{
                    echo "<td>$value</td>";
                }
                
                $ctr++;
                if($ctr==7){
                    echo "</tr><tr>";
                    $ctr = 0;
                }
            }
            ?>
        </table>
    </body>
</html>