<?php
	session_start(); 
	if(isset($_POST["submit"])){
	try{
		
	$con=mysqli_connect("localhost","root","","tutor");                  
	$sql="SELECT * from tutor_login where username='".$_POST["username"]."' AND password='".$_POST["password"]."'";
	$sql1="SELECT * from tutor_details where username='".$_POST["username"]."' AND password='".$_POST["password"]."'"; 
	//$result=$con->query($sql);}
	$result = mysqli_query($con, $sql);  
	$result1 = mysqli_query($con, $sql1);  
	// $row_cnt = ;
	}catch(Exception $e) {
		// $found="N";
		echo 'Message: ' .$e->getMessage();
	}
	if(mysqli_num_rows($result) > 0)
	{while($row = mysqli_fetch_assoc($result1))
		{
			$_SESSION["username"] = $row["username"];
			$_SESSION["name"] = $row["name"];
			$_SESSION["email"] = $row["email"];
			$_SESSION["tutor"] ="Y";
			$_SESSION["student"] ="N";

		}
		header("Location:http://localhost/HOME/TUTOR/congo.php");
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
<h1 align="center">LOGIN HERE</h1>
<br>
<form method="post" name="register" onsubmit="return validateForm()">
<?php
if (isset($found)){
echo'<p style="color:red;"><b>Please Enter Correct Username and password </b></p>';
}
?>
<p name="error" id="error" class="e">Please enter your login details!</p>

<p name="error1" id="error1" class="e">Please enter your username!</p><input type="text" name="username" placeholder="Username" required><br>
<p name="error2" id="error2" class="e"> Please enter your password!</p><input type="password" name="password" placeholder="Enter Password" required><br>
<br>
<br><div id="container">

<button type="submit" name="submit" value="submit" >LOG IN</button> &nbsp;
<button type="reset" value="Reset" >RESET</button> 
<br>
<br>
<br>
<a href="forget.php" style="margin-right:0px;
font-size:15px; font-family: Tahoma, Geneva, sans-serif;"><b>Forgot password</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
||
&nbsp;&nbsp;&nbsp;&nbsp;<a href="tutorreg.php" style="margin-right:0px;
font-size:15px; font-family: Tahoma, Geneva, sans-serif;"><b>Register</b></a>
</div>
</form>
</div>
</body>
</html>
