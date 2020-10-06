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
<link rel="stylesheet" type="text/css" href="tutorreg.css" />
	 
<style>
body{
background-attachment: fixed;
background-repeat:no repeat;
}
.e{
    color:red;
    display:none;
}
/* Dropdown Button */
.dropbtn {
  background-color:red;
  color: white;
  padding: 16px;
  font-size: 18px;
  border: none;
  border-radius:05px;
  margin-right:15px;
  margin-top:-22px;
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
        
<script src="logout.js"></script>
<script src="employeereg.js"></script>
<script src="jquery-1.7.1.min.js"></script>
<script src="navigation.js"></script>
<script src="animation.js"></script>     
</head>
    
<body>
<header>
<div class="main">
<ul>
<li><a href="homepagelogin.php">HOME</a></li>
<li><a href="feedback.php">FEEDBACK</a></li>
<li><div class="dropdown">
<button class="dropbtn"><?php echo $_SESSION["name"];?></button>
<div class="dropdown-content">
    <a href="tprofile.php">MY PROFILE</a>
    <a href="tutor_applications.php">MY APPLICATIONS</a>
    <a href="u.php">UPLOAD NOTES</a>
    <a href="mynotes.php">MY NOTES</a>
    <a href="edit.php">EDIT</a>
    <a href="myearnings.php">MY EARNINGS</a>
    <a href="mybank.php">MY BANK</a>
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
<p class="head1">UPDATE INFORMATION</p><hr>      

<form method="post" name="register" action="edit1.php">

<fieldset class="fieldset">
<legend class="legend1"><b>Personal Details</b></legend>

<div class="span1">Tutor Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="inp1" type="text" name="name" /></div> 
<div class="span2">Contact:<input class="inp3" type="tel" name="contact" /></div>            
<div class="span3">Known Language:<input class="inp4" type="text" name="klang" />
</fieldset>
        
<fieldset class="fieldset">
<legend><b>Residental Details</b></legend>
            <BR><BR><BR><BR>
<div class="span7">Address:</p><textarea class="textarea" name="address"></textarea></div>
            
<div class="span8">Pincode:<input class="inp3" type="number" name="pin" /></div>
            
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
            
<div class="span10">City:<input class="inp6" type="text" name="city" /></div>
<div class="span11">Country:<select class="inp11" name="country"/>
<option selected value="india">India</option>
</select></div>
</fieldset>
        
<fieldset class="fieldset">
<legend><b>Educational Details</b></legend>

<div class="span12">Qualification:<input  name="education" class="inp8" type="radio"value="BSC" />BSC 
<input name="education" type="radio" class="inp8" value="HSC"/>MSC
<input name="education" type="radio" class="inp8" value="B.ED"/>B.ED
<input name="education" type="radio" class="inp8" value="MSc"/>MSC</div>
<div class="span13">Experience:<input class="inp9" type="text" name="exp" /></div>

<div class="span14">CLASS:<select class="inp9" name="class"/>	
<option value="0">Select</option>
<option value="science">SCIENCE</option>
<option value="commerce">COMMERCE</option>
<option value="arts" >ARTS</option>
<option value="vocationals">VOCATIONAL SCIENCE</option></select></div>
			
<div class="span15">Teaching Subject:<select class="inp9" name="subject"/>
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

</select>
</div>
<br>
</fieldset>
            
<fieldset class="fieldset">
<legend><b>Tutor Details</b></legend>

<br>
<div class="span18">Location:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="inp11" type="text" name="location" />
<br>
<br>
<div class="span19">Fees:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="inp11" type="text" name="fees" />
</div>
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
</div>
    </body>
</html>
