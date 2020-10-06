<?php
session_start();
$c="0";
 if(isset($_POST["submit"])){
	try{
		
	$con=mysqli_connect("localhost","root","","admin");                  
    $sql="INSERT INTO `classes`( `class`) VALUES ('".$_POST["class"]."')";
	$result = mysqli_query($con, $sql);  
	}catch(Exception $e) {
		// $found="N";
		echo 'Message: ' .$e->getMessage();
    }
    if($result){
        $c="Y";
    }
    else{
        $c="N";
    }
}
?>
<!Doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title> ADD CLASS </title>
<link rel="stylesheet" type="text/css" href="feed.css" />
<link rel="stylesheet" type="text/css" href="global.css" />
<style>
body{
overflow:hidden;
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
<style>
.e{
	color:red;
	display:none;
}
.wrap{
	margin-top:170px;
	height:200px;
	width:500px;
}
input[type=submit]{
	width:300px;
	text-align:center;
}
</style>
<script>
function validateForm(){
	var i;
	var cols=document.getElementsByClassName('e');
	for(i=0;i<cols.length; i++){
		cols[i].style.display='none';
	}
	var class1=document.getElementById("class").value;
	if(class1!=""){
		return true;
	}
	else if(class1==""){
		document.getElementById("error1").style.display="block";
            return false;
	}
    return false;
}
</script>
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

<div class="header">&nbsp;&nbsp;<a href="homepagelogin.php">HOME TUTOR's </a></div>
</div>
<div class="wrap">
<h2><b>ADD CLASS</b></h2>
<br>
<form method="POST" onsubmit="return validateForm()">
<?php 
    if($c=="Y"){ echo"Class added"; }else if($c=="N"){ echo"Class Not Added"; }
?>
<p><b><h4> CLASS : </h4></b></p>
<p name="error1" id="error1" class="e">Please enter Class!</p><input type="text" id="class" name="class" placeholder="CLASS" ><br>
<input type="submit" value="ADD CLASS"  onclick="submit()" class="button" name="ADD CLASS" ></div></form></body></html>
