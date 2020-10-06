<?php
session_start(); 
if(isset($_POST["submit"])){
$npassword=$_POST["Password"];
$username=$_POST["Username"];
$con=mysqli_connect("localhost","root","","student");                  
$sql="UPDATE `stud_details` SET `password`='".$npassword."' WHERE `username`='".$username."'";
$sql1="UPDATE `stud_login` SET `password`='".$npassword."' WHERE `username`='".$username."'";
//$result=$con->query($sql);}
$result = mysqli_query($con, $sql);
// 
if(mysqli_affected_rows($con)> 0){
    $result1 = mysqli_query($con, $sql1);
    if(mysqli_affected_rows($con)> 0){
        session_destroy();
        header("Location: http://localhost/HOME/STUDENT/login.php");
    }
    else{
        $wrong="n";
    }

}else{    $wrong="n";
}}
?>

<html>
<head>
<title>Forward Password</title>
<link rel="stylesheet" type="text/css" href="forget.css">
<link rel="stylesheet" type="text/css" href="about.css">
<style>
.e{
	color:red;
	display:none;
}
</style>
<script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
</script>
<script src="forgot.js"></script>
</head>

<body>
<script>
function validateForm(){
	var i;
	var cols=document.getElementsByClassName('e');
	for(i=0;i<cols.length; i++){
		cols[i].style.display='none';
	}
	
	var username=document.forms["myForm"]["Username"].value;
	var password=document.forms["myForm"]["Password"].value;
    var cpassword=document.forms["myForm"]["CPassword"].value;	
	if(username==""&& password=="" && cpassword==""){
		document.getElementById("error0").style.display="block";
		return false;
	}
	if(username!=""&&password!="" && cpassword!=""){
        if(password == cpassword){

            return true;
        }
		else{
            document.getElementById("error").style.display="block";
            document.getElementById("Password").value = "";
            document.getElementById("CPassword").value = "";
            return false;
        }
	}
	
	if(username==""){
		document.getElementById("error1").style.display="block";
	}
	if(password=="")
	{
		document.getElementById("error2").style.display="block";
	}
    if(cpassword=="")
	{
		document.getElementById("error3").style.display="block";
	}
     return false;
}
</script>

<div class="loginbox">
<img src="source_icon/login.png" class="logo">
<h1 align="center">Forget Password</h1>
<form onsubmit="return validateForm()" method="POST" id="myForm" name="myForm">
<?php 
	if(isset($wrong)){
        echo'<span id="message" style="color:red;">Incorrect Username or Password</span><br>';}
?>
<p name="error0" id="error0" class="e">Please enter all details !</p>
<p name="error" id="error" class="e">Password and confirm password is not matching!</p>
<p name="error1" id="error1" class="e">Please enter your username!</p>
<input type="text" id="Username" name="Username" placeholder="Username" /><br>
<br>
<input type="password" name="Password" id="Password" placeholder="Enter New Password"><br>
<br>
<input type="password" name="CPassword" id="CPassword" placeholder="Confirm Password"><br>
<br>
<br>
<button type="reset" value="reset" >Reset</button> &nbsp; 
<button type="submit" name="submit" value="submit" id="submitBtn">OK</button><br>
<br>
</form>
</div>
</body>
</html>
