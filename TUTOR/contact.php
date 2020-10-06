<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Contact US</title>

<link rel="stylesheet" type="text/css" href="global.css" />
<link rel="stylesheet" type="text/css" href="contact1.css" />
<link rel="stylesheet" type="text/css" href="navigation.css" />


<script src="logout.js"></script>
<script src="navigation.js"></script>
<script src="jquery-1.7.1.min.js"></script>
<script src="animation.js"></script>
<script src="navigation.js"></script>

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
  margin-top:-10px;
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
<div class="main">
<ul>
<li><a href="homepagelogin.php">HOME</a></li>
<li><a href="about.php">ABOUT US</a></li>
<li><a href="newsfeed.php">NEWSFEED</a></li>
<li><a href="feedback.php">FEEDBACK</a></li>
<li><a href="contact.php">CONTACT</a></li>
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

<div class="header"> &nbsp;&nbsp; HOME TUTOR's </div>

<div class="body">	
<div class="block">

<p class="head">Contact us</p><br><hr>
<br>
<br>
<div class="block2">

<p>For any Query Please Mail on :
<br> <b class="hed1">hometutors@gmail.com</b></p>
<br>
<p>Contact No : <b class="hed1">8286140114</b></p>
</div>
</div>  
</div>
</body>
</html>