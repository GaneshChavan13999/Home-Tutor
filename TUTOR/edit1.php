<?php
session_start();
try{
    $con=mysqli_connect("localhost","root","","tutor");
    //$jdate= date("Y-m-d"); 
    
    $sql="UPDATE tutor_details SET `name`='".$_POST["name"]."',`contact`='".$_POST["contact"]."',`klang`='".$_POST["klang"]."',`address`='".$_POST["address"]."',
	`pin`='".$_POST["pin"]."',`state`='".$_POST["state"]."',`city`='".$_POST["city"]."',`country`='".$_POST["country"]."',`education`='".$_POST["education"]."',
	`exp`='".$_POST["exp"]."',`class`='".$_POST["class"]."',`subject`='".$_POST["subject"]."',`location`='".$_POST["location"]."',`fees`='".$_POST["fees"]."'
	WHERE `username`='".$_SESSION["username"]."'";
    $result=$con->query($sql);
    if(mysqli_affected_rows($con)> 0){
        echo'<script> alert("Details updated");</script>';
        header("Location:http://localhost/HOME/TUTOR/edit.php");
        exit();
    }else{
		echo'NOT';
	}
    }
    catch(Exception $e) {
         echo 'Message: ' .$e->getMessage();
      }
?>