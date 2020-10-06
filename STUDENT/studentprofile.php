<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
body{
background-attachment: fixed;
background-repeat:no repeat;
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
<title>Profile Page</title>
<link rel="stylesheet" type="text/css" href="tutorprofile.css"/>
<body>
<header>
<div class="main">
<ul>

<li class="active"><a href="homepagelogin.php">HOME</a></li>
<li><a href="about.php">ABOUT US</a></li>
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

</ul>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="header">&nbsp;&nbsp;HOME TUTOR's </a></div>


<div class="card-container">


<div class="upper-container">
<div class="image-container">
<img src="source_icon/student.png"/>
</div>
</div>
<div class="lower-container"/>
<div>
<?php
session_start();

$con=mysqli_connect("localhost","root","","student");
$sql="select * from stud_details where username='".$_GET["username"]."'";
$result=$con->query($sql);
while($row=$result->fetch_assoc())
{   
echo'<fieldset class="fieldset1">';
 echo "<div class='name'>";
	echo'<b>';
	echo "NAME";
	echo"<h2>".$row["sname"].",".$row["saddress"]."</h2>";
	echo"</div>";
	echo"</fieldset>";
	echo'<br>';

	echo"<br>";
	echo'<fieldset class="fieldset">';
	echo "<div class='details'>";
	echo'<b>';
	echo"DETAILS";
	echo'</b>';


	echo '<h2>'."CLASS:".$row["class"].'</h2>';
	echo '<h2>'."SUBJECT:".$row["subject"].'</h2>';
	echo'</div>';
	echo'</fieldset>';
	echo'<br>';
	
	echo"<br>";
	echo '<fieldset class="fieldset">';
	echo "<div class='fees'>";
	echo'<b>';
	echo'<br>';
	echo'</b>';
	echo  '<h2>'."ContactNO:".$row["scontact"].'</h2>';
	echo '<h2>'."EmailID:".$row["semail"].'</h2>';

	echo"</div>";
	echo'</fieldset>';
	echo'<br>';
	echo"</div>";
	echo"<br>";


	
}
?>
</div>
</div>
</body>
</html>