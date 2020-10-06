<?php
session_start();
try{
$con=mysqli_connect("localhost","root","","student");                  
$sql="SELECT * from stud_login where username='".$_POST["username"]."' AND password='".$_POST["password"]."'";
$sql1="SELECT * from stud_details where username='".$_POST["username"]."' AND password='".$_POST["password"]."'";
 
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
	$_SESSION["name"]=$row["sname"];
	$_SESSION["email"]=$row["semail"];}
	header("Location:http://localhost/HOME/STUDENT/congo.php");
	exit();
	echo"success";
}
else
{ 
header("Location:http://localhost/HOME/STUDENT/login.php");
	exit();
}
?>