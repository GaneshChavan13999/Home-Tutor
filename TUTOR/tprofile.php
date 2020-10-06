<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
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
<title>Profile Page</title>
<link rel="stylesheet" type="text/css" href="tutorprofile.css"/>
</head>
<body>
<header>
<div class="main">
<ul>

<li class="active"><a href="homepagelogin.php">HOME</a></li>
<li><a href="about.php">ABOUT</a></li>
<li><a href="newsfeed.php">NEWFEEDS</a></li>
<li><a href="contact.php">CONTACT US</a></li>
<li><div class="dropdown">
  <button class="dropbtn"><?php echo $_SESSION["name"];?></button>
  <div class="dropdown-content">
    <a href="tprofile.php">MY PROFILE</a>
    <a href="tutor_applications.php">MY APPLICATIONS</a>
    <a href="u.php">UPLOAD NOTES</a>
    <a href="mynotes.php">MY NOTES</a>
    <a href="edit.php">EDIT</a>
    <a href="mybank.php">MY BANK</a>
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
<img src="source_icon/employee.png"/>
</div>
</div>
<div class="lower-container"/>
<div>
<?php
session_start();

$con=mysqli_connect("localhost","root","","tutor");
$sql="select * from tutor_details  where username='".$_SESSION["username"]."'";
$result=$con->query($sql);
while($row=$result->fetch_assoc())
{   
$con1=mysqli_connect("localhost","root","","tutor");
$sql1="select * from applications  where t_name='".$row["name"]."' AND s_name='".$_SESSION["name"]."'";
$result1=$con1->query($sql1);

echo'<fieldset class="fieldset1">';
 echo "<div class='name'>";
	echo'<b>';
	echo "NAME";
	echo"<h2>".$row["name"].",".$row["location"]."</h2>";
	echo"</div>";
	echo"</fieldset>";
	echo'<br>';

	echo"<br>";
	echo '<fieldset class="fieldset">';
	echo "<div class='edu'>";

	echo'</b>';
	echo '<h2>'."TeachingSubject:".$row["subject"].'</h2>';
	//echo  "<h2>".$row["subject"]."</h2>";
	echo '<h2>'."Qualification:".$row["education"].'</h2>';
	//echo  "<h2>".$row["education"]."</h2>";
	echo'</div>';
	echo'</fieldset>';
	echo'<br>';
	echo"<br>";
	 echo '<fieldset class="fieldset">';
	echo "<div class='fees'>";
	echo'<b>';
	//echo "Fees&Contact";
	echo'<br>';
	echo'</b>';


	echo '<h2 >'."Fees:".$row["fees"]. "Rps".'</h2>';
	//echo'Contact no:-';
	echo  '<h2>'."ContactNO:".$row["contact"].'</h2>';
	echo"</div>";
	echo'</fieldset>';
	echo'<br>';
	echo "<div>";
	echo"<br>";
	echo'<td><a href="edit.php" class="btn">EDIT</a></td>';

}

//echo '<td><b><a href="pay.php?id='.$_GET["id"].'">EDIT</b></a></td>';
//echo"</td>";


?>
</div>
</div>
</body>
</html>