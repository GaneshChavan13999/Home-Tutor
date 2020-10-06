<?php

if(isset($_GET["m"])&&isset($_GET["t"])){
$con=mysqli_connect("localhost","root","","admin");
$con1=mysqli_connect("localhost","root","","tutor");
$con2=mysqli_connect("localhost","root","","tutor");
$date=date("Y-m-d H:i:s");
$sql="UPDATE `salary` SET `paid_amount`=`paid_amount`+".$_GET["m"]." WHERE `t_username`='".$_GET["t"]."'";
$sql1="INSERT into `payments`(`t_username`, `amt`, `date`) VALUES('".$_GET["t"]."',".$_GET["m"].",'".$date."')";
$sql2="SELECT * FROM `tutor_details` INNER JOIN `bank` WHERE `tutor_details`.`username`=`bank`.`t_username` AND `username`='".$_GET["t"]."'";
$result2= mysqli_query($con1, $sql2);
while($row = mysqli_fetch_assoc($result2)){
    $result= mysqli_query($con, $sql);
    if(mysqli_affected_rows($con)> 0){
    $result1= mysqli_query($con2, $sql1);
    if($result1){
        
            require 'PHPMailerAutoload.php';
            require 'credential.php';
            // if(isset($_POST["send"]))
            // {
            $mail = new PHPMailer;

            // $mail->SMTPDebug = 4;                            

            $mail->isSMTP();                                 
            $mail->Host = 'smtp.gmail.com';  
            $mail->SMTPAuth = true;          
            $mail->Username = EMAIL;         
            $mail->Password = PASS;          
            $mail->SMTPSecure = 'tls';       
            $mail->Port = 587;               
            $mail->setFrom(EMAIL, 'G C');
            $mail->addAddress($row["email"]);     
            $mail->isHTML(true);                    
            $mail->smtpConnect(
                array(
                    "ssl" => array(
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                        "allow_self_signed" => true
                    )
                )
            );
            $mail->Subject = "PAYMENT";
            $mail->Body    = "Here is your bank details and payment details.<br> Account Number:".$row["accno"]."<br> IFSC Code:".$row["ifsc"]."<br> Amount :".$_GET["m"]."<br> congratulations You have got your salary. <br> Regards,<br> admin <br> Home Tutor";
            $mail->AltBody = "Here is your bank details and payment details.<br> Account Number:".$row["accno"]."<br> IFSC Code:".$row["ifsc"]."<br> Amount :".$_GET["m"]."<br> congratulations You have got your salary. <br> Regards,<br> admin <br> Home Tutor";

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
                header("Location: http://localhost/HOME/ADMIN/tutorman.php");
            }
        
    }else{
        echo"not ";
    }
}else{
    header("Location: http://localhost/HOME/ADMIN/tutorman.php");
}
} echo"ABCD"; }
else"hello not";
?>