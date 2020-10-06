<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
<title>About US</title>
		
<link rel="stylesheet" type="text/css" href="global.css" />
<link rel="stylesheet" type="text/css" href="about.css" />

       
<script src="logout.js"></script>
<script src="jquery-1.7.1.min.js"></script>
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
</head>

<body>
<header>
<div class="main">
<ul>

<li class="active"><a href="homepagelogin.php">HOME</a></li>
<li><a href="about.php">ABOUT</a></li>
<li><a href="newsfeed.php">NEWFEEDS</a></li>
<li><a href="searchtutor.php">SEARCH TUTOR</a></li>
<li><a href="contact.php">CONTACT US</a></li>
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

</li>
</ul>
</div>

<div class="header">&nbsp;&nbsp;HOME TUTOR's </div>
<div class="body">	
<div class="block">

			
<p class="head">About Product</p>
<br>
<hr>
<br>
<div class="block2">
<p><b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We all know that Education has now become one of our basic necessities of our life.
Basically speaking this education should be in all means and here we are providing it by the means of our website which is totally " User Friendly " which makes the user to work with it more efficiently. </b></p>
<br>
<p><b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;At <i> HOME TUTOR's</i> we offer exceptional quality tutoring services for a ide variety of subjects cover all keystages and follow the national curriculum. We offer a wide range of compulsory academic subjects such as " Maths" , "Physics" , "Chemsitry" for science stream students whereas "Accounts" , "Maths" , "Economics" , " English" and many more. Each subject will be offered in accordance with the specific examination board and specification.</b></p>
<br>
<p><b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This system seeks to provide the students with a way in which they can better solve their own queries by going through the same topic until it is understood well. The system differs from most tutors who are primarily concerned with answering the students immediate questions and not concerned with providing the students with the basic problem solving skills for future applications.</b></p>
</div> 
</div> 
</div>
</header>	   
    </body>
</html>
