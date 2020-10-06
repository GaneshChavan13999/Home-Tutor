<?php
session_start();
$con=mysqli_connect("localhost","root","","tutor");
$sql="UPDATE applications SET action=2 where t_username='".$_SESSION["username"]."' AND s_username='".$_GET["username"]."'";
$result=$con->query($sql);
if(mysqli_affected_rows($con)>0){
	header("LOCATION:htt://localhost/HOME/TUTOR/tutor_applications.php");
}else{
	header("LOCATION:htt://localhost/HOME/TUTOR/tutor_applications.php");
}
?>