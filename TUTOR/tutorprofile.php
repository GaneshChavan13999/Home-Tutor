<!DOCTYPE html>
<html>
<head>
<title>Profile Page</title>
<link rel="stylesheet" type="text/css" href="tutorprofile.css"/>
</head>
<body>

<ul>
<li class="active"><a href="homepagelogin.php">HOME</a></li>
<li><a href="newsfields.php">NEWFEEDS</a></li>
<li><a href="about.php">ABOUT</a></li>
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

</ul>
<div class="card-container">


<div class="upper-container">
<div class="image-container">
<img src="source_icon/employee.png"/>
</div>
</div>
<div class="lower-container"/>
<div>
<?php
$con=mysqli_connect("localhost","root","","tutor");
$sql="select * from tutor_details  where id='".$_GET["id"]."'";
$result=$con->query($sql);
while($row=$result->fetch_assoc())
{    
echo'<fieldset class="fieldset1">';
 echo "<div class='name'>";
	echo'<b>';
	echo "NAME";
	echo"<h2>".$row["name"].",".$row["location"]."</h2>";
	echo"</div>";
	echo"</fieldset>";
	echo'<br>';

	echo"<br>";
	echo'<fieldset class="fieldset">';
	echo "<div class='details'>";
	echo'<b>';
	echo"DESCRIPTION";
	echo'</b>';

	echo "<p style='width:250px;'>".$row["descr"]."</p>";
	echo'</b>';
	echo "</div>";
	echo'</fieldset>';
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


	echo '<h2 >'."Fees:-".$row["fees"]. "Rps".'</h2>';
	//echo'Contact no:-';
	echo  '<h2>'."ContactNO:-".$row["contact"].'</h2>';
	echo"</div>";
	echo'</fieldset>';
	echo'<br>';
	echo "<div>";
	echo"<br>";
 	echo'<a href="pay.php?id='.$_GET["id"].'" class="btn"> Apply</a>';
	echo "</div>";

//echo '<td><b><a href="pay.php?id='.$_GET["id"].'">Apply</b></a></td>';
//echo"</td>";
}
?>
</div>
</div>
</body>
</html>