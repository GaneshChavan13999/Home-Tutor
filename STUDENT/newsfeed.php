<?php
session_start();
?>
<html>
<head>
<title> News Feed </title>

<link rel="stylesheet" type="text/css" href="newsfields.css">
<link rel="stylesheet" type="text/css" href="global.css" />
<style>
body{
  background-image: url("source_background/bckground3.jpg");
background-size: cover;
background-attachment: fixed;
}
h6{
	color:orange;
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

<body>
<header>

<div class="main">
<ul>
<li><a href="homepagelogin.php">HOME</a></li>
<li><a href="about.php">ABOUT US</a></li>
<li><a href="feed.php">POST FEED's</a></li>
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
</div>
<div class="header">&nbsp;&nbsp;HOME TUTOR's </a></div>


<div >
<h1>NEWSFEED's</h1></div>
<table ><tr>

<?php
	//include("connection-path/connection.php");
$count=0;
//$db=mysqli_select_db($con,"tutor");
$con=mysqli_connect("localhost","root","","tutor");
$sql="select * from post";
$result=$con->query($sql);
while($row=$result->fetch_assoc())
{
echo "<td><div class='content'>";
echo"<h6><b>USERNAME:</b></h6>";echo "<p><h4>".$row["tusername"]."</h4></p>";
echo'<br>';
echo"<h6><b>TITLE:</b></h6>";echo "<h4>".$row["title"]."</h4>";
echo'<br>';
echo"<h6><b>DESCRIPTION:</b></h6>";echo "<p><h4>".$row["descr"]."</h4></p>";
echo'<br>';
echo" </div> </td>";
$count++;
if($count%3==0)
	{
		echo"</tr><tr>";
	}
}
?></tr></table>
</div>
</body>
</html>
