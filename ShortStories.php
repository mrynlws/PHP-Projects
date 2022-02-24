<!DOCTYPE html>  
<html>  
<head>
	<title>Short Stories</title>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="ShortStoriesStyle.css">
</head>
<body background="bg.jpg">
    <?php
        echo"<table align='center' cellpadding = '10' bordercolor = 'black'>";
        echo "<tr><td colspan ='6'><h1>FIVE SHORT STORIES</h1></td></tr>";

        echo "<tr><td>";include 'story1.inc'; echo "</td>";
        echo "<td>";include 'story2.inc'; echo "</td>";
        echo "<td>";include 'story3.inc'; echo "</td>";
        echo "<td>";require 'story4.inc'; echo "</td>";
        echo "<td>";require 'story5.inc'; echo "</td>";
        echo "</tr></table>";
    ?>
</body>
</html>
