<?php
    $con=mysqli_connect("localhost","root","","student");
    $sql= "SELECT * FROM stud_details WHERE semail='" .$_POST["email"] . "'";
    $result=$con->query($sql);
	while($row=$result->fetch_assoc()){
        if($row["otp"]==$_POST["otp"]){
            header("Location:http://localhost/HOME/STUDENT/login.php");
        }
        else{
            echo"<H1>Email not Verified</H1>";
        }}
?>