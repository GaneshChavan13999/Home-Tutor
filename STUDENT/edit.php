<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>UPDATE INFORMATION</title>
		
<link rel="stylesheet" type="text/css" href="global.css" />
<link rel="stylesheet" type="text/css" href="background2.css" />
<link rel="stylesheet" type="text/css" href="studreg.css" />

<script src="logout.js"></script>
<script src="studentreg.js"></script>
<script src="jquery-1.7.1.min.js"></script>
<script src="navigation.js"></script>
<script src="animation.js"></script>   

<style>
/* Dropdown Button */
.dropbtn {
	
background-color:red;
  color: white;
  padding: 16px;
  font-size: 18px;
  border: none;
  border-radius:05px;
  margin-right:15px;
  margin-top:-30px;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>  
</head>
    
<body>
<header>
<div class="main">
<ul>
<li><a href="homepagelogin.php">HOME</a></li>
<li><div class="dropdown">
<button class="dropbtn"><?php echo $_SESSION["name"];?></button>
<div class="dropdown-content">
    <a href="sprofile.php">MY PROFILE</a>
    <a href="myapplications.php">MY APPLICATIONS</a>
    <a href="edit.php">EDIT</a>
    <a href="mynotes2.php">MY NOTES</a>
    <a href="logout.php">LOGOUT</a>
    
  </div>
</div>

</li>

</ul>
</div>

<div class="header">&nbsp;&nbsp;HOME TUTOR's 
</div>

<div class="body">
<div class="block1">
<p class="head1">UPDATE INFORMATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><hr>


<form  method="post" name="register" action="edit1.php">
<fieldset class="fieldset">
<legend class="legend1"><b>Personal Details</b></legend>

<div class="span1">Student Name:<input class="inp1" type="pattern="[A-Za-z]{}"" name="sname" /></div>
<div class="span4">Contact:<input class="inp3" type="number" "minlength=10" "maxlength=10" name="scontact" /></div>
</fieldset>
        
<fieldset class="fieldset">
<legend><b>Residental Details</b></legend>
<BR><BR><BR>
<div class="span7">Address:</p><textarea class="textarea" name="saddress"></textarea></div>
            
<div class="span8">Pincode:<input class="inp3" type="number" name="spin"></div>
            
<div class="span9">State:<select class="inp5" name="state">
<option value="0">Select</option>
<option value="maharastra">Maharastra</option>
<option value="goa">Goa</option>
<option value="up">U.P.</option>
<option value="bihar">Bihar</option>
<option value="assam">Assam</option>
<option value="kerela">Kerela</option>
<option value="gujarat">Gujarat</option>
<option value="karanataka">Karnataka</option>
</select>
</div>
            
<div class="span10">City:<input class="inp6" type="text" name="city"></div>
<div class="span11">Country:<select class="inp11" name="country">
<option selected value="india">India</option>
</select></div>
</fieldset>
        
<fieldset class="fieldset">
<legend><b>Admission Details</b></legend>

<div class="span12">Admission Stream <select class="inp9" name="class">	
<option value="0">Select</option>
<option value="science">SCIENCE</option>
<option value="commerce">COMMERCE</option>
<option value="arts">ARTS</option>
<option value="vocationals">VOCATIONAL SCIENCE</option></select></div>
			
 <div class="span13">Admission For:
<select class="inp10" name="subject">
<option value="0">Select</option>
<option value="Maths">MATHS</option>
<option value="Physics">PHYSICS</option>
<option value="Chemistry">CHEMISTRY</option>
<option value="English">ENGLISH</option>
<option value="Sociology">SOCIOLOGY</option>
<option value="Accounts">ACCOUNTS</option>
<option value="Hindi">HINDI</option>
<option value="Physcology">PHYSCOLOGY</option>
<option value="Computer SCIENCE">COMPUTER SCIENCE</option>
</div>

</select>
</div>
</fieldset>
<fieldset class="fieldset">
<legend><b>Student Details</b></legend>

<div class="span14">Username:&nbsp;&nbsp;&nbsp;&nbsp;<input class="inp10" type="text" name="username" /></div>
<div class="span15">Password:<input class="inp12" type="password" name="password" /></div><br>
</fieldset>
  <br>
  <div class="b">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<button type="submit">SUBMIT</button>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="reset">RESET</button>
		   <br>
		   <br>
</form>
</div>
</div></body>
</html>
