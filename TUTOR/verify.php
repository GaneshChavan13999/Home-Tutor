<?php
    $con=mysqli_connect("localhost","root","","tutor");
    $sql= "SELECT * FROM tutor_details WHERE email='" .$_POST["email"] . "'";
    $result=$con->query($sql);
	while($row=$result->fetch_assoc()){
        if($row["otp"]==$_POST["otp"]){
            header("Location:http://localhost/HOME/TUTOR/login.php");
        }
        else{
            echo"<H1>Email not Verified</H1>";
        }}
?>