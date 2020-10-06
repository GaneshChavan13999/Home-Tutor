<?php
try{
$con=mysqli_connect("localhost","root","","student");
//$jdate= date("Y-m-d"); 
$otp=rand(100000,999999);

$sql="insert into stud_details(`sname`,`sdob`,`sgender`,`scontact`,`semail`,`saddress`,`spin`,`state`,`city`,`country`,`class`,`subject`,`marks`,`sscmarks`,`username`,`password`,`otp`)values(
'".$_POST["sname"]."',
'".$_POST["sdob"]."',
'".$_POST["sgender"]."',
'".$_POST["scontact"]."',
'".$_POST["semail"]."',
'".$_POST["saddress"]."',
'".$_POST["spin"]."',
'".$_POST["state"]."',
'".$_POST["city"]."',
 '".$_POST["country"]."',
 '".$_POST["class"]."',
 '".$_POST["subject"]."',
 '".$_POST["marks"]."',
 '".$_POST["sscmarks"]."',
 '".$_POST["username"]."',
 '".$_POST["password"]."',
'".$otp.
 "')";
echo"hee";
$sql1="insert into stud_login values('".$_POST["username"]."',
 '".$_POST["password"].
 "')";
echo"hi";
$result=$con->query($sql);
$result1=$con->query($sql1);
 echo "hello";
}
catch(Exception $e) {
	echo 'Message: ' .$e->getMessage();
  }

if($result && $result1)
{
	header("Location:http://localhost/HOME/STUDENT/se.php?username=".$_POST["username"]);
	exit();
	echo "succesfull";
}
else{
    echo"not";
}

?>