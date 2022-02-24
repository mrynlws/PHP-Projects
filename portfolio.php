<!DOCTYPE html>
<html>
<head>
<style>
div {
	padding-top: 60px;
	padding-bottom: 60px;
	background-color: Black;
}

img {
	width: 250px;
	height: 250px;
	display: block;
	margin-left: auto;
	margin-right: auto;
}

h1 {
	text-align: center;
	font-family: Arial;
	color: White;
	letter-spacing: 3px;
}

h2 {
	text-align: center;
	font-family: Arial;
	color: Black;
	letter-spacing: 5px;
}

h3 {
	text-align: center;
	font-family: Arial;
	color: #F5E1FD;
	letter-spacing: 5px;
}

p {
	text-align: center;
	font-family: Arial;
	letter-spacing: 3px;
	margin-right: 250px;
	margin-left: 250px;
}
</style>
</head>

<body style="background-color: White">
<div>
<img src="profile.jpg">
<h1> MARIANNE LOUISE BUAMA </h1>
<h3> Computer Science || Software Engineering </h3>
</div>

<?php
//personal info
$name = "<strong>Marianne Louise Buama</strong>";
$number = "0918-278-6738";
$email = "ianneab07@gmail.com";
$linkedin = "https://www.linkedin.com/in/marianne-louise-buama-10674a212/";

echo "<br>";
echo "<h2><b>ABOUT ME</h2></b>
<p>My name is " . $name . ", " .
"an aspiring Software Engineer. People are used to call me Yannie. I am currently 
in my 3rd Year of college taking BS Computer Science with specialization in Software 
Engineering at FEU Alabang. As a kid, I already had a great passion for technology, 
the reason why I decided to take a technology related track and program. I have an excellent 
leadership experience and a consistent honor student as well. I am very determined to improve 
my programming skills and create useful projects to help the community.</p><br>";
echo "<hr size='5' color='Black'><br>";

echo "<h2><b>SOFT SKILLS</h2></b>
<p>Collaboration, Adaptability, Time Management, Problem Solving, Communication,<br>
Integrity, Leadership, Creativity, Multitasking, Critical Thinking, Empathy, Dependability</p><br><br>
<h2><b>HARD SKILLS</h2></b>
<p>Typing Speed, Programming Languages (C++, C#, Java, SQL, Python), <br>
Adobe Creative Suite (Photoshop, Illustrator, Animate, Lightroom)</p><br>";
echo "<hr size='5' color='Black'><br>";

echo "<h2><b>EDUCATION</h2></b><br>
<p><b>FEU Alabang</b><br>
2019 – Present <br> College</b><br><br><br>
<b>Adamson University</b><br>
2017-2019 <br> Senior High School</b><br><br><br>
<b>San Roque Catholic School</b><br>
2013-2017 <br> Junior High School </p></b><br>";
echo "<hr size='5' color='Black'><br>";

echo "<h2><b>EXPERIENCE</h2></b><br>
<p><b>Vice President External</b><br>
Google Developer Student Clubs FEU Alabang <br>
August 2021 - Present<br><br><br>
<b>Auditor</b><br>
Association for Computing Machinery FEU Alabang <br>
July 2020 - July 2021<br><br><br>
<b>Program Strategist/Reporter</b><br>
Algo Filipino <br>
December 2020 - May 2021</p><br>";
echo "<hr size='5' color='Black'></p><br>";

echo "<h2><b>LICENSES & CERTIFICATIONS</h2></b><br>
<p><b>MICROSOFT:</b><br><br>
MTA: Introduction to Programming Using Java<br><br><br>
<b>SPARTA:</b><br><br>
Getting Grounded on Analytics<br><br>
Data Management Fundamentals<br><br>
Data-Driven Policy Analysis<br><br>
Analytics Applications in Operations</p><br>";
echo "<hr size='5' color='Black'><br>";

echo "<h2><b>AWARDS</h2></b>
<p>Top-Performing Student in Computer Science SY2020-2021<br><br>
Active Student Leader SY2020-2021<br><br>
Top-Performing Student in Computer Science SY2019-2020<br><br>
Best Research Paper in STEM Technology SY2018-2019<br><br>
With Honors SY2018-2019<br><br>
With Honors SY2017-2018</p><br>";
echo "<hr size='5' color='Black'><br>";

echo "<h2><b>CONTACT ME</h2></b>
<p><b>Contact no:</b> $number <br><br>
<b>Email:</b> $email <br><br>
<b>Linkedin:</b> $linkedin</p><br>";
?>
</body>
</html>


