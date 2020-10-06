<?php
	
$count=3;
//$db=mysqli_select_db($con,"Tutor");

$con=mysqli_connect("localhost","root","","tutor");
$sql="INSERT into post values('".$_POST["tusername"]."','".$_POST["title"]."','".$_POST["descr"]."')";
$result=$con->query($sql);
if($result)
{
	echo "succesfull";



}
else{
    echo"not";
}
?>