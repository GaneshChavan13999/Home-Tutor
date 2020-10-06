<?php
session_start();
?>
<title> MY NOTES </title>
<link rel="stylesheet" type="text/css" href="newsfields.css">
<link rel="stylesheet" type="text/css" href="global.css" />
<link rel="stylesheet" type="text/css" href="mynotes.css" />
<html>
<style>
background-image: url("source_background/bckground3.jpg");
background-size: cover;
color:white;
background-attachment: fixed;
.white{
color:white;
}
h6{
	color:orange;
}
h5{
	color:blue;
}
.content{
	height:350px;
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
  `
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

<table>
<?php
session_start();
if($_SESSION["student"]=="Y"){
    $count=0;
    $con=mysqli_connect("localhost","root","","tutor");
    $sql="SELECT * from post_notes where u_tutor='".$_SESSION["username"]."'";
    $result = mysqli_query($con, $sql);  
$con1=mysqli_connect("localhost","root","","admin");
    $sql1="SELECT * from orders where name='".$_SESSION["name"]."'";
	$result1 = mysqli_query($con1, $sql1);
	if(mysqli_num_rows($result1) > 0){
    while($row1 = mysqli_fetch_assoc($result1))
		{
				$count=0;
				$con=mysqli_connect("localhost","root","","tutor");
				$sql="SELECT * from post_notes where u_tutor='".$row1["tusername"]."'";
				$result = mysqli_query($con, $sql);  
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_assoc($result))
					{
						echo "<tr><td><div class='content'>";
				
			
				echo "<h6>".'<p><u>TITLE:</u></p>'."</h6>";
				echo"<h4>".$row["title"]."</h4>";
				echo "<br>";
				echo "<h6>".'<p><u>DESCRIPTION:</u></p>'."</h6>";
				echo"<h4>".$row["description"]."</h4>";
				echo" <br>";

				$filename=explode(".",$row["filename"]);
				if (strpos("jpeg,png,jpg,pjpeg", $filename[1]) !== false) {
				echo '<h6>'.'<p><u>FILE:</u></p>'.'</h6><br>';
				echo'<h5>'.'<img height="150" width="250" src="../TUTOR/uploads/'.$row["filename"].'">
				<br><br>
				<a href="../TUTOR/uploads/'.$row["filename"].'" download>Download Image</a></h5>';
				}
				else if(strpos("mp4,avi,mov,3gp,mpeg", $filename[1]) !== false){
					echo '<h5>'.'<p><u>
				<video width="300" height="200" controls><source src="../TUTOR/uploads/'.$row["filename"].'" type="video/'.$filename[1].'"></video>
				<br><a href="../TUTOR/uploads/'.$row["filename"].'" download>DOWNLOAD VIDEO</a></h5>';
				}
				else{
					echo '<h5>'.'<p><u>DOWNLOAD NOTES:</u></p><a href="../TUTOR/uploads/'.$row["filename"].'" download>Download Document</a></h5>';
				}
				echo" </div> </td></tr>";
				$count++;
				if($count%3==0)
			{
				echo"</tr><tr>";
			}
				}
				}
else{
	echo"Your tutor have not yet uplaoded any notes yet!";
}
			     
		}}
		else{
			echo"HELLO NOT";
			}
			//$found="N";echo'<td>You Have not applied to any tutor yet .:)</td>';
}
else{
	echo'<td class="white">Please Login First Go to Home page!! 
	<a href="homepage.php">HOME</a> .:)</td>';
}
?></tr></table>
</body></html>