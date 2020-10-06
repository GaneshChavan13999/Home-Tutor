<?php
$npassword=$_POST["Password"];
$username=$_POST["Username"];
$con=mysqli_connect("localhost","root","","student");                  
$sql="UPDATE `stud_details` SET `password`='".$npassword."' WHERE `username`='".$username."'";
$sql1="UPDATE `stud_login` SET `password`='".$npassword."' WHERE `username`='".$username."'";
//$result=$con->query($sql);}
$result = mysqli_query($con, $sql);
$result1 = mysqli_query($con, $sql1);
if($result && $result1){
    header("Location: http://localhost/HOME/STUDENT/login.php");
}else{
    header("Location: http://localhost/HOME/STUDENT/Forget.php");
}
?>