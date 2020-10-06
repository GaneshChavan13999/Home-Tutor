<?php
session_start();
if(isset($_POST["submit"])){
try{
	
$con=mysqli_connect("localhost","root","","tutor");
$sql="INSERT into bank(`t_username`,`name`,`accno`,`cno`,`ifsc`) values(
'".$_SESSION["username"]."',
'".$_POST["name"]."',
'".$_POST["accno"]."',
'".$_POST["cno"]."',
'".$_POST["ifsc"]."')";

$result=$con->query($sql);
}
catch(Exception $e){
	echo'Message:' .$e->getMessage();
}
if($result)
{
	echo"data entered";
}
else{
echo'<p color="red">You already saved your bank details.</p>';
}
}
?>
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
<title> BANK DETAILS </title>
<link rel="stylesheet" type="text/css" href="feed.css" />
<link rel="stylesheet" type="text/css" href="global.css" />
<link rel="stylesheet" type="text/css"  href="bank.css" />

<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<style>
button[type=reset],button[type=submit]
{
border:none;
width: 140px;
background: white;
color: black;
font-size: 16px;
line-height: 25px;
padding: 10px 0px;
border-radius: 15px;
cursor: pointer;
}
button[type=reset]:hover
{
color:white;
background: black;
}
button[type=submit]:hover
{
color:white;
background: black;
}
.e{
    color:red;
    display:none;
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

.wrap{
	width:800px;
	margin-top:45px;
}
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
<div class="header">&nbsp;&nbsp;<a href="homepagelogin.php">HOME TUTOR's </a></div>

</div>
<script>
function validateForm(){
	var i;
	var cols=document.getElementsByClassName('e');
	for(i=0;i<cols.length; i++){
		cols[i].style.display='none';
	}
	
	var name=document.forms["bank"]["name"].value;
	var accno=document.forms["bank"]["accno"].value;
	var cno=document.forms["bank"]["cno"].value;
    var ifsc=document.forms["bank"]["ifsc"].value;
	
	if(name==""&& accno==""&& cno==""&& ifsc==""){
		document.getElementById("error1").style.display="block";
		return false;
	}
	if(name!="" && accno!=""&& cno!="" && ifsc!=""){
        if(accno==cno){
		    return true;
	    }else{
            document.getElementById("error2").style.display="block";
	    	return false;
        }
    }
	
	if(name==""){
		document.getElementById("error3").style.display="block";
	}
	if(accno=="")
	{
		document.getElementById("error4").style.display="block";
	}
    if(cno=="")
	{
		document.getElementById("error5").style.display="block";
	}
    if(ifsc=="")
	{
		document.getElementById("error6").style.display="block";
	}
     return false;
}

</script>
<div class="wrap">
<h2><b>ENTER YOUR BANK DETAILS</b></H2>
<br>
<form method="post" name="bank" onsubmit="return validateForm()" >
<p name="error1" id="error1" class="e">Please fill Bank details form.</p>
<p name="error2" id="error2" class="e">Account number and confirm account number mismatch.</p>
<p name="error3" id="error3" class="e">Please enter name.</p>
<p name="error4" id="error4" class="e">Please enter Account number.</p>
<p name="error5" id="error5" class="e">Please enter confirm account number.</p>
<p name="error6" id="error6" class="e">Please enter IFSC Code.</p>
<div class="container">
<p><b>Account Holder Name.</b></p>
<input type="text" name="name"><br>
<p><b>Account No.</b></p>
<input type="text" name="accno"><br>
<p><b> Confirm Account No.</b></p>
<input type="text" name="cno"><br>
<p><b>IFSC Code.</b></p>
<input type="text" name="ifsc"><br>
<button type="reset" value="Reset" >RESET</button>&nbsp;&nbsp;&nbsp;
<button type="submit" name="submit" value="submit" >SUBMIT</button> 
 
</div>
</form>
</body>
</html>
