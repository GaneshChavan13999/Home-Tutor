<?php
session_start();
?>
<html>
<head>
<title> MY NOTES </title>
<link rel="stylesheet" type="text/css" href="newsfields.css">
<link rel="stylesheet" type="text/css" href="global.css" />
<style>
.a{
	color:blue;
	font-size:40px;	
}
.b{
	font-size:30px;
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
</ul>
</div>
<div class="header">&nbsp;&nbsp;HOME TUTOR's </a></div>

<table>
<tr>
<?php
session_start();
if($_SESSION["tutor"]=="Y"){
    $count=0;
    $con=mysqli_connect("localhost","root","","tutor");
    $sql="SELECT * from post_notes where u_tutor='".$_SESSION["username"]."'";
    $result = mysqli_query($con, $sql);  
    if(mysqli_num_rows($result) > 0)
	{while($row = mysqli_fetch_assoc($result))
		{
			echo "<td><div class='content'>";
	
   
	echo "<h6>".'<p><u>TITLE:</u></p>'."</h6>";
				echo"<h4>".$row["title"]."</h4>";
				echo "<br>";
				echo "<h6>".'<p><u>DESCRIPTION:</u></p>'."</h6>";
				echo"<h4>".$row["description"]."</h4>";
				echo" <br>";

	$filename=explode(".",$row["filename"]);
	if(strpos("jpeg,png,jpg,pjpeg", $filename[1]) !== false) {
	echo '<h6>'.'<p><u>FILE:</u></p>'.'</h6><br>';
	echo'<h5>'.'<img height="150" width="250" src="uploads/'.$row["filename"].'">
				<br><br>
				<a href="uploads/'.$row["filename"].'" download><h5>Download Image</h5></a></h5>';
			}
	else if(strpos("mp4,avi,mov,3gp,mpeg", $filename[1]) !== false){
		echo '<video width="300" height="200" controls>
	<source src="uploads/'.$row["filename"].'" type="video/'.$filename[1].'">
	</video><br><a href="uploads/'.$row["filename"].'" download><h5>Download video</h5></a>';
	}
	else{
		echo '<h2>'.'<p><u><h5>Download Notes:</h5></u></p><a href="uploads/'.$row["filename"].'" download>Download Document</a></h2>';
	}
	echo" </div></td>";
	$count++;
	if($count%3==0)
	{
	echo"</tr><tr>";
	}
	}
	}
	else
	{ 
		$found="N";echo'<td>You Have not Uploaded yet any notes for your students please upload.:)</td>';
	}
}
else if(isset($_SESSION["student"])=="Y"){
	$con1=mysqli_connect("localhost","root","","admin");
    $sql1="SELECT * from orders where name='".$_SESSION["name"]."'";
	$result1 = mysqli_query($con1, $sql1);
	if(mysqli_num_rows($result1) > 0){
    while($row1 = mysqli_fetch_assoc($result1))
		{
            if(date('j F, Y')<date('j F, Y', strtotime($row1["created"]. ' + 1 month') )){
				$count=0;
				$con=mysqli_connect("localhost","root","","tutor");
				$sql="SELECT * from post_notes where u_tutor='".$row1["t_username"]."'";
				$result = mysqli_query($con, $sql);  
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_assoc($result))
					{
						echo "<tr><td><div class='content'>";
				
			
				echo "<h2>".'<p><u>Title:-</u></p>'.$row["title"]."</h2>";
				echo "<br>";
				echo "<h2>".'<p><u>Description:-</u></p>'.$row["description"]."</h2>";
				echo" <br>";

				$filename=explode(".",$row["filename"]);
				if (strpos("jpeg,png,jpg,pjpeg", $filename[1]) !== false) {
				echo '<h2>'.'<p><u>Image :-</u></p>
				<img height="200" width="200" src="uploads/'.$row["filename"].'"><br>
				<a href="uploads/'.$row["filename"].'" download>Download Image</a></h2>';
				}
				else if(strpos("mp4,avi,mov,3gp,mpeg", $filename[1]) !== false){
					echo '<video width="300" height="200" controls>
				<source src="uploads/'.$row["filename"].'" type="video/'.$filename[1].'">
				</video><br><a href="uploads/'.$row["filename"].'" download>Download video</a>';
				}
				else{
					echo '<h2>'.'<p><u>Download Notes:-</u></p><a href="uploads/'.$row["filename"].'" download>Download Document</a></h2>';
				}
				echo" </div> </td></tr>";
				
				}
				}
				
			}          
		}}else
		{ 
			$found="N";
			echo'<td>You Have not applied to any tutor yet!!</td>';
		}
}
else{
	echo'<td class="b"><b>Please Login First Go to Home page! :  <a class="a" href="homepage.php"><b>Home</b></a></b></td>';
}
?>
</tr></table>
</body>
</html>