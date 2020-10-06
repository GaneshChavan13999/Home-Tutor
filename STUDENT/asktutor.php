<?php
session_start();
$con1=mysqli_connect("localhost","root","","tutor");
$sql1="insert into applications (`t_name`,`s_name`,`action`,`t_username`,`s_username`) values('".$_GET["tname"]."','".$_SESSION["name"]."',0,'".$_GET["tusername"]."','".$_SESSION["username"]."')";
$result1=$con1->query($sql1);
if($result1){
	echo'Applied succesfully!';
	header("Location:http://localhost/HOME/STUDENT/searchtutor.php");
	
}else{
		echo'Not Applied!';
		echo'</p>';
		
		
}

?>
