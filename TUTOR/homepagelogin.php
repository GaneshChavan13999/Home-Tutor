<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> Home Page </title>
<link rel="stylesheet" type="text/css" href="homepagelogin.css">
<link rel="stylesheet" type="text/css" href="global.css">

<script src="logout.js"></script>
<script src="studentreg.js"></script>
<script src="jquery-1.7.1.min.js"></script>
<script src="animation.js"></script>
<style>
body{
	overflow:hidden;
background-attachment: fixed;
background-repeat:no repeat;
}
.title h1{
	font-size:80px;
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
  margin-top:-10px;
  overflow:hidden;
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
<div class ="main">
<ul>
<li class="active"><a href="homepagelogin.php">HOME</a></li>
<li><a href="about.php">ABOUT US</a></li>
<li><a href="newsfeed.php">NEWFEEDS</a></li>
<li><a href="feedback.php">FEEDBACK</a></li>
<li><a href="contact.php">CONTACT US</a></li>
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
<div class="title">
<h1>HOME TUTOR's</h1> 
</div>
</header>
</body>
</html>