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
    $count=0;
    $con=mysqli_connect("localhost","root","","tutor");
    $sql="SELECT * from feedback WHERE u_tutor='".$_SESSION["username"]."'";
    $result = mysqli_query($con, $sql);  
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<td><div class='content'>";
    

    echo "<h6>".'<p><u>TUTOR USERNAME:</u></p>'."</h6>";
    echo"<h4>".$row["u_tutor"]."</h4>";
    echo "<br>";
	echo "<h6>".'<p><u>STUDENT USERNAME:</u></p>'."</h6>";
    echo"<h4>".$row["u_student"]."</h4>";
    echo "<br>";
    echo "<h6>".'<p><u>RATING:</u></p>'."</h6>";
    echo"<h4>".$row["rating"]."</h4>";
    echo" <br>";
	echo "<h6>".'<p><u>REVIEW:</u></p>'."</h6>";
    echo"<h4>".$row["review"]."</h4>";
    echo" <br>";


    echo" </div> </td>";
    $count++;
    if($count%3==0)
{
    echo"</tr><tr>";
}
    }
    }
else{
	echo"Your tutor have not yet uploaded any notes yet!";
}
?></table>
</body></html>