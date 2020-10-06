<?php
	session_start(); 
	if(isset($_POST["submit"])){
	try{
		
	$con=mysqli_connect("localhost","root","","admin");                  
	$sql="INSERT into admin_login where username='".$_POST["username"]."' AND password='".$_POST["password"]."'";
	//$result=$con->query($sql);}
	$result = mysqli_query($con, $sql);  
 
	// $row_cnt = ;
	}catch(Exception $e) {
		echo 'Message: ' .$e->getMessage();
	}
	if(mysqli_num_rows($result) > 0)
	{
		header("Location:http://localhost/HOME/ADMIN/homepagelogin.php");
		exit();
		echo"success";
	}
	else
	{ 
		$found="N";
	}}
?>
<html>
<head>
<title>Login Form Design</title>
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.e{
	color:red;
	display:none;
}
button[type=submit]
{
border:none;
width: 280px;
background: white;
color: black;
font-size: 16px;
line-height: 25px;
padding: 10px 0px;
border-radius: 15px;
cursor: pointer;
}
</style>
<script>
function validateForm(){
	var i;
	var cols=document.getElementsByClassName('e');
	for(i=0;i<cols.length; i++){
		cols[i].style.display='none';
	}
	
	var username=document.forms["register"]["username"].value;
	var password=document.forms["register"]["password"].value;
	
	
	if(username==""&& password==""){
		document.getElementById("error").style.display="block";
		return false;
	}
	if(username!=""&&password!=""){
		return true;
	}
	
	if(username==""){
		document.getElementById("error1").style.display="block";
	}
	if(password=="")
	{
		document.getElementById("error2").style.display="block";
	}
     return false
}
</script>
</head>
<body>
<div class="loginbox">
<img src="source_icon/login.png" class="logo">
<h1 align="center">ADD ADMINISTRATOR</h1>
<br>
<form method="post" name="register" onsubmit="return validateForm()">
<?php
if (isset($found)){
echo'<p style="color:red;"><b>Please Enter Correct Username and password </b></p>';
}
?>
<p name="error" id="error" class="e"><b>Please enter your the details!</b></p>

<p name="error1" id="error1" class="e"><b>Please enter your username!</b></p><input type="text" name="username" placeholder="Username"><br>
<p name="error2" id="error2" class="e"><b> Please enter your password!</b></p><input type="password" name="password" placeholder="Enter Password"><br>
<br>
<br>
<div id="container">

<button type="submit" name="submit" value="submit"><b>SAVE</b></button> &nbsp;
</div>
</form>
</div>
</body>
</html>
