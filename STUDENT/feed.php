<?php
session_start();
?><!Doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title> POST Feed </title>
<link rel="stylesheet" type="text/css" href="feed.css" />
<link rel="stylesheet" type="text/css" href="global.css" />
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
<div class="main">
<ul>
<li><a href="newsfeed.php">Go To NEWSFEED</a></li>
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
</ul>

<div class="header">&nbsp;&nbsp;<a href="homepagelogin.php">HOME TUTOR's </a></div>

</div>
<div class="wrap">
<h2><b>POST Feed's</b></h2>
<form method="post" action="post1.php">

<h4><b>Name</b></h4><input type="text"  placeholder="Name" name="name" value="">
<br>

<h4> <b> Title </b> </h4>
<input type="text" placeholder="Title" class="title" name="title"  required><br>
<br>

<h4> <b> POST Description </b> </h4><br>
<textarea name="descr" rows="10" cols="30"></textarea>

<a href="newsfeed.php"><input type="button" value="SUBMIT" onclick="submit()" class="button" name="sub" /></a>
</div>
</form>
</header>
</body>
</html>