<!DOCTYPE html>
<html>
<head>
<title> Array Alphabetical </title>
<style> 
	* {
		font-family: arial,sans-serif;
		text-align: center;
	}

	.center {
	  margin-left: auto;
	  margin-right: auto;
	}

	table {
		border: 1px solid black;
		width: 80%;
	}

	td, th {
		border: 1px solid black;
		padding: 5px;
		text-align: center;
	}
</style>
</head>

<body bgcolor="#FFF8DC">
   
<?php
	echo "<br><br>";
	echo "<h1>ACM OFFICERS</h1>";
	$info = array( array(10, "Name"=>"Yannie Buama", '<center><img src="yannie.jpg" width="100" height="100">', 21, "09-07-2000", "0918 278 6738"),
				   array(3, "Name"=>"Dana Huang", '<center><img src="dana.jpg" width="100" height="100">', 22, "09-29-1999", "0907 874 6532"),
				   array(4, "Name"=>"Darla David", '<center><img src="darla.jpg" width="100" height="100">', 19, "11-14-2001", "0906 784 5732"),
				   array(9, "Name"=>"Miciella Decano", '<center><img src="mici.jpg" width="100" height="100">', 20, "05-13-2001", "0923 745 6443"), 
				   array(5, "Name"=>"Erin Cordero", '<center><img src="erin.jpg" width="100" height="100">', 21, "06-12-2000", "0914 756 4588"),
				   array(8, "Name"=>"Mariel Tibio", '<center><img src="yel.jpg" width="100" height="100">', 20, "02-20-2001", "0909 576 4432"),
				   array(1, "Name"=>"Austin Marbella", '<center><img src="austin.jpg" width="100" height="100">', 19, "03-25-2002", "0973 457 8321"),
				   array(2, "Name"=>"Carlos Limpiada", '<center><img src="carlos.jpg" width="100" height="100">', 22, "09-26-1999", "0968 675 4576"),
				   array(7, "Name"=>"Kyle Jasper", '<center><img src="jasper.jpg" width="100" height="100">', 21, "07-15-2000", "0955 431 6939"),
				   array(6, "Name"=>"Junel Capawing", '<center><img src="junel.jpg" width="100" height="100">', 20, "08-11-2001", "0934 652 7864") 
				 ); 
				 
	$columns = array_column($info, 'Name');
	array_multisort($columns, SORT_ASC, $info);
		 
	echo "<table class='center'><tr><th>No.</th><th>Name</th><th>Image</th><th>Age</th><th>Birthday</th><th>Contact Number</th></tr>";
		foreach ($info as $row) {
			echo "<tr>";
			foreach ($row as $data) {
				echo "<td>{$data}</td>";
			}
			echo "</tr>";
		}
	echo "</table>";
	echo "<br><br>";
?>
</body>
</html>
