<?php
session_start();
try{
$con=mysqli_connect("localhost","root","","tutor");                  
$sql="SELECT * from tutor_login where username='".$_POST["username"]."' AND password='".$_POST["password"]."'";
$sql1="SELECT * from tutor_details where username='".$_POST["username"]."' AND password='".$_POST["password"]."'";
 
//$result=$con->query($sql);}
$result = mysqli_query($con, $sql);  
$result1 = mysqli_query($con, $sql1);  

// $row_cnt = ;
}catch(Exception $e) {
	echo 'Message: ' .$e->getMessage();
  }
if(mysqli_num_rows($result) > 0)
{
	while($row= mysqli_fetch_assoc($result1)){
	$_SESSION["username"]=$row["username"];
	$_SESSION["name"]=$row["name"];
	$_SESSION["email"]=$row["email"];}
	header("Location:http://localhost/HOME/TUTOR/congo.php");
	exit();
	echo"success";
}
else
{ 
header("Location:http://localhost/HOME/TUTOR/login.php");
	exit();
}
?>