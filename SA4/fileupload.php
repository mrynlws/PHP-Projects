<html>
<head>
<title>File Upload</title>
</head>
<body>

<form action="admin.php" enctype="multipart/form-data" method="post">
Select image :
<input type="file" name="file"><br/> <br>
<input type="submit" value="Upload" name="Submit1"> <br/>

</form>
<?php
if(isset($_POST['Submit1']))
{ 
$filepath = "images/" . $_FILES["file"]["name"];

if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
{
echo "<Succesfully uploaded!>";
echo "<center> <img src=".$filepath." height=200 width=200 /> </center>";
} 
else 
{
echo "Error !!";
}
} 
?>

</body>
</html>