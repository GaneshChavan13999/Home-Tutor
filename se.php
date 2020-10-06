<?php
//$emails="mayurchavan171201@gmail.com";
if(!empty($_GET["username"])) {
//	if(!empty($emails)){
    $con=mysqli_connect("localhost","root","","student");
    $sql= "SELECT * FROM stud_details WHERE username='" .$_GET["username"] . "'";
    $result=$con->query($sql);
	while($row=$result->fetch_assoc()){
        require 'PHPMailerAutoload.php';
        require 'credential.php';
        // if(isset($_POST["send"]))
        // {
        $mail = new PHPMailer;

        $mail->SMTPDebug = 4;                            

        $mail->isSMTP();                                 
        $mail->Host = 'smtp.gmail.com';  
        $mail->SMTPAuth = true;          
        $mail->Username = "shrutikulaye24@gmail.com";         
        $mail->Password = "shrush@24";          
        $mail->SMTPSecure = 'tls';       
        $mail->Port = 587;               
        $mail->setFrom(EMAIL, 'G C');
        $mail->addAddress($row["semail"]);     
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
        $mail->Subject = "OTP to verify email address";
        $mail->Body    = "Welcome to our website please verifyyour emailthis is your OTP:-".$row["otp"];
        $mail->AltBody = "Welcome to our website please verifyyour emailthis is your OTP:-".$row["otp"];

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
        
    
?><html><body>
<form action="verify.php" method="POST">
<div class="tableheader">Enter OTP</div>
<?PHP echo '
    <p><p>
        <label><b>Tutor Name</b></label>
        <input type="text" name="email" id="email" value="'.$row["semail"].'" readonly/>';	}}?>
		<div class="tablerow">
			<input type="text" name="otp" placeholder="One Time Password" class="login-input" required>
		</div>
		<div class="tableheader"><input type="submit" name="submit_otp" value="Submit" class="btnSubmit"></div>
</form>
</body>
</html>