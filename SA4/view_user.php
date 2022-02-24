<!DOCTYPE html>
<html>
<head>
<title> view user </title>

</head>
<style> 
table, th, td {
  border: 1px solid black;
  
}
body {
	background-color: #B2E3F5;
	text-align: center;
	margin: 100px;
	font-size: 30px;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
</style>
<body>
<?php

$db = mysqli_connect('localhost', 'root', '', 'multi_login'); 
//mysql_select_db('multi_login');//name of database

$query = "SELECT * FROM users"; 
$result = mysqli_query($db,$query);

echo "<table class = 'center'>"; //start a table tag in the HTML
$id = 1;

echo "<h1> VIEW RECORDS </h1>";
echo "<tr><th> ID </th> <th> EMAIL </th> <th> USERNAME </th> <th> PASSWORD </th> <th> USER LEVEL </th> <th> STATUS </th></tr>";
while($row = mysqli_fetch_array($result)){ 
  //Creates a loop to loop through results

echo "<tr><td>" . $id . "</td><td>" . $row['email'] . "</td><td>". $row['username'] . "</td><td>". $row['password'].
"</td><td>". $row['user_type'] ."</td><td>". $row['status']."</td></tr>";  
$id +=1;
} 

echo "</table>"; //Close the table in HTML

mysqli_close($db); //Make sure to close out the database connection



?>
<BR><BR>
<a href="admin.php" class="btn btn-danger ml-3">BACK</a>
</body>
</html>