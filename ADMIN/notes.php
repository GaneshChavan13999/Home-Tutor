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
	height:430px;
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
<li><a href="newsfeed.php">NEWSFEED</a></li>
<li><a href="feedback.php">FEEDBACK</a></li>
<li><a href="addclass.php">ADD CLASS</a></li>
<li><a href="addsubject.php">ADD SUBJECT</a></li>
<li><div class="dropdown">
  <button class="dropbtn"><?php echo $_SESSION["name"];?></button>
  <div class="dropdown-content">
    <a href="addadmin.php">ADD ADMIN</a>
    <a href="studentsman.php">STUDENT<br>MANAGEMENT</a>
    <a href="tutorman.php">TUTOR <br> MANAGEMENT</a>
    <a href="notes.php">MY NOTES</a>
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
    $count=0;
    $con=mysqli_connect("localhost","root","","tutor");
    $sql="SELECT * from post_notes inner join tutor_details where post_notes.u_tutor=tutor_details.username";
    $result = mysqli_query($con, $sql);  
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<td><div class='content'>";
    
    echo "<h6>".'<p><u>TUTOR NAME:</u></p>'."</h6>";
    echo"<h4>".$row["name"]."</h4>";
    echo "<br>";
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
    <a href="../TUTOR/uploads/'.$row["filename"].'" download><h5>Download Image</h5></a></h5>';
    }
    else if(strpos("mp4,avi,mov,3gp,mpeg", $filename[1]) !== false){
        echo '<h5>'.'<p><u>
    <video width="300" height="200" controls><source src="../TUTOR/uploads/'.$row["filename"].'" type="video/'.$filename[1].'"></video>
    <br><a href="../TUTOR/uploads/'.$row["filename"].'" download><h5>DOWNLOAD VIDEO</h5></a></h5>';
    }
    else{
        echo '<h2>'.'<p><u><h5>DOWNLOAD NOTES:</h5></u></p><a href="../TUTOR/uploads/'.$row["filename"].'" download>Download Document</a></h2>';
    }
    echo" </div> </td>";
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
?></table>
</body></html>