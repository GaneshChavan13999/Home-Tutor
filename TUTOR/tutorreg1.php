<?php
try{
$con=mysqli_connect("localhost","root","","tutor");
//$jdate= date("Y-m-d"); 
$otp=rand(100000,999999);


$sql="insert into tutor_details(`name`,`dob`,`gender`,`contact`,`email`,`klang`,`address`,`pin`,`state`,`city`,`country`,`education`,`exp`,`class`,`subject`,`username`,`password`,`location`,`fees`,`otp`)values
(
'".$_POST["name"]."',
'".$_POST["dob"]."',
'".$_POST["gender"]."',
'".$_POST["contact"]."',
'".$_POST["email"]."',
'".$_POST["klang"]."',
'".$_POST["address"]."',
'".$_POST["pin"]."',
'".$_POST["state"]."',
 '".$_POST["city"]."',
 '".$_POST["country"]."',
 '".$_POST["education"]."',
'".$_POST["exp"]."',
 '".$_POST["class"]."',
 '".$_POST["subject"]."',
 '".$_POST["username"]."',
 '".$_POST["password"]."',
'".$_POST["location"]."',
 '".$_POST["fees"]."',
 '".$otp.
 "')";
echo"hee";
$sql1="insert into tutor_login values('".$_POST["username"]."',
 '".$_POST["password"].
 "')";
 echo"hii";
$result=$con->query($sql);
$result1=$con->query($sql1);
 echo"hello";
}
catch(Exception $e) {
 	echo 'Message: ' .$e->getMessage();
  }

if($result && $result1)
{
	header("Location:http://localhost/HOME/TUTOR/se.php?username=".$_POST["username"]);
	exit();
	echo "succesfull";

}
else{
    echo"not";
}

?>