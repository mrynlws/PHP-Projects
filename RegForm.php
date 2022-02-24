<?php

$fname = ucfirst("mariel");
$mname = ucfirst("g");
$lname = ucfirst("tibio");
$age = "20";
$birth = array("03","05","2001");
$gender = array("male","female");
$father = array(ucfirst("alfi"),ucfirst("fallaria"),ucfirst("tibio"),"11","20","1965");
$mother = array(ucfirst("perina"),ucfirst("gabilo"),ucfirst("tibio"),"12","13","1964");
$prevschool = array("Las Pinas City","2017","Elizabeth Seton School","12");
$citizenship = array("Philippines","Philippines");

?>

<!DOCTYPE html>
<html>

<head>

    <style> 
	
    input[type=text],
    select {
        width: 30%;
        padding: 12px 20px;
        border: 3px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=number],
    select {
        width: 16%;
        padding: 12px 20px;

        border: 3px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 16px;
    }

     input[type=submit] {
        width: 20%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #138D75;
    }

    div { 
        border-radius: 5px;
        background-color: #D0ECE7;
        padding: 20px;
        margin: auto;
        width: 70%;
    }

    .inner {
        margin: auto;

    }
	
    .backtext { 
        text-align: center;
		background-color: #45B39D;
        color: white;
        font-size: 30px;
        font-weight: bold;
    }
    </style>
</head>
<body>

</body>

<div>
    <p style="width: 100%;text-align:center;font-size:50px;color: #2E4053; font-weight: bold">STUDENT REGISTRATION FORM</p>
    <form action="/action_page.php">
	
        <p class="backtext"> STUDENT INFORMATION</p>

        <div class="inner">
		<!-- personal info -->
            <p style="text-align: left;">Full name</p> 
			<!-- input type for txtbox contents  -->
            <input type="text" id="fname" name="firstname" placeholder="First Name" value="<?php echo $fname;?>"> <!-- firstname-->
            <input type="text" id="mname" name="middlename" placeholder="Middle Name" value="<?php echo $mname;?>"> <!-- middlename-->
            <input type="text" id="lname" name="lastname" placeholder="Last Name" value="<?php echo $lname;?>"> <!-- lastname-->
			<br>
			<p style="text-align: left;">Age</p>
            <input type="number" id="age" name="age" placeholder="Age" style="width: 120px;" value="<?php echo $age;?>"> <!-- age -->
            
			<br>
            <p style="text-align: left;">Date of birth</p>
            <input type="number" id="month" name="mm" placeholder="MM" value="<?php echo $birth[0];?>"> <!-- month -->
            <input type="number" id="day" name="dd" placeholder="DD" value="<?php echo $birth[1];?>"> <!-- date -->
            <input style="width: 100px;"type="number" id="year" name="yy" placeholder="YY" value="<?php echo $birth[2];?>"> <!-- year -->

            <br><br>
			<p style="text-align: left;">Gender</p>
            <input type="checkbox" id="gender1" name="gender1" value="Male">
            <label for="gender1">Male</label> <!-- gender: male -->
            <input type="checkbox" id="gender2" name="gender2" value="Female">
            <label for="gender2">Female</label> <!-- gender: female -->
            
			<br><br><br>
            <label for="siblings">If the student has other siblings in this school, please list them:</label>
            <input style="width:100%;" type="text" id="siblings" name="siblings" placeholder="Siblings name"> <!-- siblings -->

        </div>

        <p class="backtext">PARENT INFORMATION</p>
        <div class="inner">
		<!-- fathers info -->
            <p class="backtext">Father's Information</p> 
            <p style="text-align: left;">Full name</p>
            <input type="text" id="fname" name="firstname" placeholder="First Name" value="<?php echo $father[0];?>">
            <input type="text" id="mname" name="middlename" placeholder="Middle Name" value="<?php echo $father[1];?>">
            <input type="text" id="lname" name="lastname" placeholder="Last Name" value="<?php echo $father[2];?>">
            <p style="text-align: left;">Date of birth</p>
            <input type="number" id="month" name="mm" placeholder="MM" value="<?php echo $father[3];?>">
            <input type="number" id="day" name="dd" placeholder="DD" value="<?php echo $father[4];?>">
            <input style="width: 100px;"type="number" id="year" name="yy" placeholder="YY" value="<?php echo $father[5];?>">
        </div>
		
        <div class="inner">
		<!-- mothers info -->
            <p class="backtext">Mother's Information</p> 
            <p style="text-align: left;">Full name</p>
            <input type="text" id="fname" name="firstname" placeholder="First Name" value="<?php echo $mother[0];?>">
            <input type="text" id="mname" name="middlename" placeholder="Middle Name" value="<?php echo $mother[1];?>">
            <input type="text" id="lname" name="lastname" placeholder="Last Name" value="<?php echo $mother[2];?>">
            <p style="text-align: left;">Data of birth</p>
            <input type="number" id="month" name="mm" placeholder="MM" value="<?php echo $mother[3];?>">
            <input type="number" id="day" name="dd" placeholder="DD" value="<?php echo $mother[4];?>">
            <input style="width: 100px;" type="number" id="year" name="yy" placeholder="YY" value="<?php echo $mother[5];?>">
            <br>
        </div>
		
		<!-- school info -->
        <p class="backtext"><b>PREVIOUS SCHOOL INFORMATION</b></p> 
        <p>Previous School Municipality / Last attended</p>
        <input style="width:65%;" type="text" id="pschool" name="prevschool"
            placeholder="Name of Previous School Municipality" value="<?php echo $prevschool[0];?>">
        <input style="width:30%;" type="text" id="lattend" name="lastattend" placeholder="Last Date Attended" value="<?php echo $prevschool[1];?>" >
        
		<p>name of Previous School / Grade at previous School</p>
        <input style="width:55%;" type="text" id="lattend" name="lastattend" placeholder="Name of Previous School" value="<?php echo $prevschool[2];?>" >
        <input style="width:30%;" type="text" id="lattend" name="lastattend" placeholder="Grade at Previous School " value="<?php echo $prevschool[3];?>">

		<!-- health info -->
        <p class="backtext"><b>HEALTH INFORMATION</b></p>
        <label for="medical">Medical Condition (Include information on special equipment or medication, if required)</label>
        <input style="width:100%;" type="text" id="medical" name="medical" placeholder="Medical Condition" >
        <br><br>
		
        <label for="">Does student require an epi-pen?</label> <!-- checkbox option -->
        <input type="checkbox" id="yes" name="yes" value="Yes">
        <label for="yes">Yes</label>
        <input type="checkbox" id="no" name="no" value="no">
        <label for="no">no</label>

		<!-- citizenship info -->
        <p class="backtext"><b>CITIZENSHIP INFORMATION</b></p>
        <p>Birth Country</p>
        
        <input style="width:40%;" type="text" id="birthc" name="birthc" placeholder="Birth Country" value="<?php echo $citizenship[0];?>">
        <input style="width:50%;" type="text" id="canada" name="canada" placeholder="(Enter Province of Birth)">
        <br>
        <br>
        <p>Country of Citizenship</p>
        <input style="width:100%;" type="text" id="citizenship" name="citizenship" placeholder="Contry of Citizenship" value="<?php echo $citizenship[1];?>">

    </form>
</div>

</html>
