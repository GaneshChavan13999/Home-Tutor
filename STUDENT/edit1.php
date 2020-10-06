<?php
session_start();
try{
    $con=mysqli_connect("localhost","root","","student");
    //$jdate= date("Y-m-d"); 
    
    $sql="UPDATE stud_details SET `sname`='".$_POST["sname"]."',`scontact`='".$_POST["scontact"]."',`saddress`='".$_POST["saddress"]."',`spin`='".$_POST["spin"]."',
	`state`='".$_POST["state"]."',`city`='".$_POST["city"]."',`class`='".$_POST["class"]."',`subject`='".$_POST["subject"]."' WHERE username='".$_SESSION["username"]."'";
    $result=$con->query($sql);
    if(mysqli_affected_rows($con)> 0){
        echo'<script> alert("Details updated");</script>';
        header("Location:http://localhost/HOME/STUDENT/edit.php");
        exit();
    }else{
		echo'NOT';
}}
    catch(Exception $e) {
         echo 'Message: ' .$e->getMessage();
      }
?>