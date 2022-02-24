<!DOCTYPE html>  
<html>  
<head>
<title>5 Favorite Colors</title>  
<style type="text/css"> 
    body {
		background-color: #FFEFD5; 
	}
	
	h1
    {
        font-family: Montserrat, sans-serif;
        font-weight: bold;
        text-align: center;
    }

	table {
		border: 1px solid black;
		background-color: #FAFAD2;
		width: 40%;
		font-family: arial;
	}

	th, td {
		border: 1px solid black;
		padding: 10px;
		text-align: center;
		font-weight: bold;
	}
		
	th {
		background-color: #FFFF99;
	}
	
	input[type=text] {
		width: 50%;
		padding: 10px;
		border: 3px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		background-color: #FFFF99;
		height: 20px;
	}
	
	button[type=submit] {
		width: 20%;
		font-weight: Bold;
		background-color: black; 
		color: white;
		padding: 10px;
		margin: 8px 0;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}

	button[type=submit]:hover {
		background-color: gray;
		transition: 0.3s;
	}
</style>  
</head>

<body>
    <br><h1>Five Favorite Colors</h1><br>
    <?php
        session_start();

        echo "<table align='center'> <form method='post' action='ResultColors.php'>";
        echo "<tr><th colspan='2' align='center'> Enter your favorite colors</th></tr>";
        echo "<tr><td>Favorite color 1: </td>
				  <td><input type='text' name='color1'></td>
			  </tr>";
        echo "<tr><td>Favorite color 2: </td>
				  <td><input type='text' name='color2'></td>
	          </tr>";
        echo "<tr><td>Favorite color 3: </td>
				  <td><input type='text' name='color3'></td>
			  </tr>";
        echo "<tr><td>Favorite color 4: </td>
			      <td><input type='text' name='color4'></td>
			  </tr>";
        echo "<tr><td>Favorite color 5: </td>
			      <td><input type='text' name='color5'></td>
		      </tr>";
        echo "<tr><td colspan='2' align='center'><button type='submit'>send colors</button></td></tr>";
        echo "</form></table>";
    ?>
</body>
</html>