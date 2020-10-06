<?php
$npassword=$_POST["Password"];
$username=$_POST["Username"];
$con=mysqli_connect("localhost","root","","tutor");                  
$sql="UPDATE `tutor_details` SET `password`='".$npassword."' WHERE `username`='".$username."'";
$sql1="UPDATE `tutor_login` SET `password`='".$npassword."' WHERE `username`='".$username."'";
//$result=$con->query($sql);}
$result = mysqli_query($con, $sql);
$result1 = mysqli_query($con, $sql1);
if($result && $result1){
    header("Location: http://localhost/HOME/TUTOR/login.php");
}else{
    header("Location: http://localhost/HOME/TUTOR/Forget.php");
}
?>