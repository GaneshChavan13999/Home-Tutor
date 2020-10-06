<?php
session_start();
$c="0";
 if(isset($_POST["submit"])){
	try{
		
	$con=mysqli_connect("localhost","root","","admin");                  
    $sql="INSERT INTO `subjects`(`subject`,`class`) VALUES ('".$_POST["subject"]."','".$_POST["class"]."')";
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

<title> POST Feed </title>
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
	margin-top:120px;
	height:300px;
	width:500px;
}
input[type="submit"]{
	width:300px;
	text-align:center;
}
</style>
<script>
function validateForm(){
    try{
	var i;
	var cols=document.getElementsByClassName('e');
	for(i=0;i<cols.length; i++){
		cols[i].style.display='none';
	}
	var subject1=document.getElementById("subject").value;
    var class1= document.getElementById("class").value;
	if(subject1!="" && class1!=""){
		return true;
	}
	if(subject1==""){
		document.getElementById("error2").style.display="block";
	}
    if(class1==""){
		document.getElementById("error1").style.display="block";
	}
    return false;}catch(e){
        document.getElementById("error1").innerHTML = err.message;
    }
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
<h2><b>ADD CLASS & SUBJECT</b></h2>
<br>
<form method="POST" onsubmit="return validateForm()">
<?php 
    if($c=="Y"){ echo"subject added"; }else if($c=="N"){ echo"subject Not Added"; }
?>
<p><h4> CLASS : </h4></p>
<p name="error1" id="error1" class="e">Please select class!</p><br>
<select id="class" name="class">
<?php 
$con1=mysqli_connect("localhost","root","","admin");                  
$sql1="SELECT * from classes";
$result1 = mysqli_query($con1, $sql1); 
while($row1 = mysqli_fetch_assoc($result1))
		{
			echo'<option value="'.$row1["class"].'">'.$row1["class"].'</option>';         
		}
?>
</select><br>
<BR>
<p><h4> SUBJECT : </h4></p>
<p name="error1" id="error2" class="e"><b>Please enter subject!</b></p>
<input type="text" id="subject" name="subject" placeholder="subject" ><br>
<input type="submit" value="ADD SUBJECT"  onclick="submit()" class="button" name="submit" ></div></form></body></html>

</form></body></html>
