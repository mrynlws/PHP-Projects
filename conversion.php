<!DOCTYPE html>
<html>
<head>
<title> Conversion </title>
<style>
div {
	padding-top: 60px;
	padding-bottom: 60px;
	background-color: Black;
}

table, th, td {
    border: 1px solid black;
}
th, td {
    padding: 10px;

} 

table.center {
	margin-left: auto; 
	margin-right: auto;
}

h1, h2 {
	text-align: center;
	font-family: Arial;
	font-weight: bold;
}

.title {
	color: White;
}

td {
     text-align: center;
}
</style>
</head>

<div>
<h1 class="title">MEASURE CONVERSION CHART - LENGTHS (UK)</h1>
</div>
<br><br>

<body style="background-color: #FFEFE7">
<?php
//table1 variables
//echo "</h1><br>";
$cnvrt = 1;
$cm_mm = 10;
$dm_cm = 10;
$m_cm = 100;
$km_m = 1000;
$cm_mm_ans = $cnvrt * $cm_mm;
$dm_cm_ans = $cnvrt * $dm_cm;
$m_cm_ans = $cnvrt * $m_cm;
$km_m_ans = $cnvrt * $km_m;

//table2  variables
$ft_in = 12;
$yd_ft = 3;
$ch_yd = 22;
$fur_yd = 220;
$mi_yd = 1760;
$ft_in_ans = $cnvrt * $ft_in;
$yd_ft_ans = $cnvrt * $yd_ft;
$ch_yd_ans = $cnvrt * $ch_yd;
$fur_yd_ans = $cnvrt * $fur_yd;
$mi_yd_ans = $cnvrt * $mi_yd;

//table3  variables
$mm_in = 0.03937;
$cm_in = 0.39370;
$m_in = 39.37008;
$m_ft = 3.28084;
$m_yd = 1.09361;
$km_yd = 1093.6133;
$km_mi = 0.62137;
$mm_in_ans = $cnvrt * $mm_in;
$cm_in_ans = $cnvrt * $cm_in;
$m_in_ans = $cnvrt * $m_in;
$m_ft_ans = $cnvrt * $m_ft;
$m_yd_ans = $cnvrt * $m_yd;
$km_yd_ans = $cnvrt * $km_yd;
$km_mi_ans = $cnvrt * $km_mi;

//table4  variables
$in_cm = 2.54;
$ft_cm = 30.48;
$yd_cm = 91.44;
$yd_m = 0.9144;
$mi_m = 1609.344;
$mi_km = 1.609344;
$in_cm_ans = $cnvrt * $in_cm;
$ft_cm_ans = $cnvrt * $ft_cm;
$yd_cm_ans = $cnvrt * $yd_cm;
$yd_m_ans = $cnvrt * $yd_m;
$mi_m_ans = $cnvrt * $mi_m;
$mi_km_ans = $cnvrt * $mi_km;
?>

<table class="center">
	  <td colspan=6 bgcolor="#FFDDCD"><h2>METRIC CONVERSIONS</h2></td>
    <tr>
        <td><?php echo "1 centimetre" ?> </td>
        <td><?php echo "=" ?></td>
		<td><?php echo $cm_mm . " millimetres"?></td>
        <td><?php echo "1 cm" ?> </td>
		<td><?php echo "=" ?></td>
		<td><?php echo $cm_mm_ans . " mm"?></td>
    </tr>
	<tr>
        <td><?php echo "1 decimetre"?></td>
        <td><?php echo "="?></td>
		<td><?php echo $dm_cm . " centimetres"?></td>
        <td><?php echo "1 dm"?></td>
		<td><?php echo "=" ?></td>
		<td><?php echo $dm_cm_ans . " cm"?></td>
    </tr>
	<tr>
        <td><?php echo "1 metre"?> </td>
        <td><?php echo "="?></td>
		<td><?php echo $m_cm . " centimetres"?></td>
        <td><?php echo "1 m"?> </td>
		<td><?php echo "="?></td>
		<td><?php echo $m_cm_ans . " cm"?></td>
    </tr>
	<tr>
        <td><?php echo "1 kilometre"?></td>
        <td><?php echo "="?></td>
		<td><?php echo $km_m . " metres"?></td>
        <td><?php echo "1 km"?></td>
		<td><?php echo "="?></td>
		<td><?php echo $km_m_ans . " m"?></td>
    </tr>
</table>

<br><br>
<hr size='5' color='Black'><br>

<table class="center">
	  <td colspan=6 bgcolor="#FFDDCD"><h2>IMPERIAL CONVERSIONS</h2></td>
    <tr>
        <td><?php echo "1 foot" ?> </td>
        <td><?php echo "=" ?></td>
		<td><?php echo $ft_in . " inches"?></td>
        <td><?php echo "1 ft" ?> </td>
		<td><?php echo "=" ?></td>
		<td><?php echo $ft_in_ans . " in"?></td>
    </tr>
	<tr>
        <td><?php echo "1 yard"?></td>
        <td><?php echo "="?></td>
		<td><?php echo $yd_ft . " feet"?></td>
        <td><?php echo "1 yd"?></td>
		<td><?php echo "=" ?></td>
		<td><?php echo $yd_ft_ans . " ft"?></td>
    </tr>
	<tr>
        <td><?php echo "1 chain"?> </td>
        <td><?php echo "="?></td>
		<td><?php echo $ch_yd . " yards"?></td>
        <td><?php echo "1 ch"?> </td>
		<td><?php echo "="?></td>
		<td><?php echo $ch_yd_ans . " yd"?></td>
    </tr>
	<tr>
        <td><?php echo "1 furlong"?></td>
        <td><?php echo "="?></td>
		<td><?php echo $fur_yd . " yards (or 10 chains)"?></td>
        <td><?php echo "1 fur"?></td>
		<td><?php echo "="?></td>
		<td><?php echo $fur_yd_ans . " yd" . " (or 10 ch)"?></td>
    </tr>
	<tr>
        <td><?php echo "1 mile"?></td>
        <td><?php echo "="?></td>
		<td><?php echo $mi_yd . " yards (or 8 furlongs)"?></td>
        <td><?php echo "1 mi"?></td>
		<td><?php echo "="?></td>
		<td><?php echo $mi_yd_ans . " yd" . " (or 8 fur)"?></td>
    </tr>
</table>

<br><br>
<hr size='5' color='Black'><br>

<table class="center">
	  <td colspan=6 bgcolor="#FFDDCD"><h2>METRIC -> IMPERIAL CONVERSIONS</h2></td>
    <tr>
        <td><?php echo "1 millimetre" ?> </td>
        <td><?php echo "=" ?></td>
		<td><?php echo $mm_in . " inches"?></td>
        <td><?php echo "1 mm" ?> </td>
		<td><?php echo "=" ?></td>
		<td><?php echo $mm_in_ans . " in"?></td>
    </tr>
	<tr>
        <td><?php echo "1 centimetre"?></td>
        <td><?php echo "="?></td>
		<td><?php echo $cm_in . " inches"?></td>
        <td><?php echo "1 cm"?></td>
		<td><?php echo "=" ?></td>
		<td><?php echo $cm_in_ans . " in"?></td>
    </tr>
	<tr>
        <td><?php echo "1 metre"?> </td>
        <td><?php echo "="?></td>
		<td><?php echo $m_in . " inches"?></td>
        <td><?php echo "1 m"?> </td>
		<td><?php echo "="?></td>
		<td><?php echo $m_in_ans . " in"?></td>
    </tr>
	<tr>
        <td><?php echo "1 metre"?> </td>
        <td><?php echo "="?></td>
		<td><?php echo $m_ft . " feet"?></td>
        <td><?php echo "1 m"?> </td>
		<td><?php echo "="?></td>
		<td><?php echo $m_ft_ans . " ft"?></td>
    </tr>
	<tr>
        <td><?php echo "1 metre"?> </td>
        <td><?php echo "="?></td>
		<td><?php echo $m_yd . " yards"?></td>
        <td><?php echo "1 m"?> </td>
		<td><?php echo "="?></td>
		<td><?php echo $m_yd_ans . " yd"?></td>
    </tr>
	<tr>
        <td><?php echo "1 kilometre"?> </td>
        <td><?php echo "="?></td>
		<td><?php echo $km_yd . " yards"?></td>
        <td><?php echo "1 km"?> </td>
		<td><?php echo "="?></td>
		<td><?php echo $km_yd_ans . " yd"?></td>
    </tr>
	<tr>
        <td><?php echo "1 kilometre"?> </td>
        <td><?php echo "="?></td>
		<td><?php echo $km_mi . " miles"?></td>
        <td><?php echo "1 km"?> </td>
		<td><?php echo "="?></td>
		<td><?php echo $km_mi_ans . " mi"?></td>
    </tr>
</table>

<br><br>
<hr size='5' color='Black'><br>

<table class="center">
	  <td colspan=6 bgcolor="#FFDDCD"><h2>IMPERIAL -> METRIC CONVERSIONS</h2></td>
    <tr>
        <td><?php echo "1 inch" ?> </td>
        <td><?php echo "=" ?></td>
		<td><?php echo $in_cm . " centimetres"?></td>
        <td><?php echo "1 in" ?> </td>
		<td><?php echo "=" ?></td>
		<td><?php echo $in_cm_ans . " cm"?></td>
    </tr>
    <tr>
        <td><?php echo "1 foot" ?> </td>
        <td><?php echo "=" ?></td>
		<td><?php echo $ft_cm . " centimetres"?></td>
        <td><?php echo "1 ft" ?> </td>
		<td><?php echo "=" ?></td>
		<td><?php echo $ft_cm_ans . " cm"?></td>
    </tr>
    <tr>
        <td><?php echo "1 yard" ?> </td>
        <td><?php echo "=" ?></td>
		<td><?php echo $yd_cm . " centimetres"?></td>
        <td><?php echo "1 yd" ?> </td>
		<td><?php echo "=" ?></td>
		<td><?php echo $yd_cm_ans . " cm"?></td>
    </tr>
    <tr>
        <td><?php echo "1 yard" ?> </td>
        <td><?php echo "=" ?></td>
		<td><?php echo $yd_m . " metres"?></td>
        <td><?php echo "1 yd" ?> </td>
		<td><?php echo "=" ?></td>
		<td><?php echo $yd_m_ans . " m"?></td>
    </tr>
    <tr>
        <td><?php echo "1 mile" ?> </td>
        <td><?php echo "=" ?></td>
		<td><?php echo $mi_m . " metres"?></td>
        <td><?php echo "1 mi" ?> </td>
		<td><?php echo "=" ?></td>
		<td><?php echo $mi_m_ans . " m"?></td>
    </tr>
    <tr>
        <td><?php echo "1 mile" ?> </td>
        <td><?php echo "=" ?></td>
		<td><?php echo $mi_km . " kilometres"?></td>
        <td><?php echo "1 mi" ?> </td>
		<td><?php echo "=" ?></td>
		<td><?php echo $mi_km_ans . " km"?></td>
    </tr>
</table>
<br><br>
</body>
</html>