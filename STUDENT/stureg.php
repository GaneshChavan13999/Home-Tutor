<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Student Registration</title>
		
<link rel="stylesheet" type="text/css" href="global.css" />
<link rel="stylesheet" type="text/css" href="background2.css" />
<link rel="stylesheet" type="text/css" href="studreg.css" />


     <style>
body{
background-attachment: fixed;
background-repeat:no repeat;
}
     .e{
         color:red;
         display:none;

     }
     </style>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 <script>
        function validateForm() {
            var i;
            var cols = document.getElementsByClassName('e');
            for(i = 0; i < cols.length; i++) {
                cols[i].style.display = 'none';
            }
        var sname = document.forms["register"]["sname"].value;
        var sdob = document.forms["register"]["sdob"].value;
        var sgender = document.forms["register"]["sgender"].value;
        var scontact = document.forms["register"]["scontact"].value;
        var semail = document.forms["register"]["semail"].value;
        var saddress = document.forms["register"]["saddress"].value;
        var spin = document.forms["register"]["spin"].value;
        var state = document.forms["register"]["state"].value;
        var city = document.forms["register"]["city"].value;
        var country = document.forms["register"]["country"].value;
        var class1 = document.forms["register"]["class"].value;
        var subject = document.forms["register"]["subject"].value;
        var marks = document.forms["register"]["marks"].value;
        var sscmarks = document.forms["register"]["sscmarks"].value;
        var username = document.forms["register"]["username"].value;
        var password = document.forms["register"]["password"].value;
        if (sname == "" && sdob == "" && sgender == "" && scontact == "" && semail == "" && saddress == "" && spin == "" && state == "0" && city == "" 
        && country == "0" && class1 == "0" && subject == "0"&& marks == ""&& sscmarks == ""&& username == ""&& password == "") {
            // console.log("Hello world!");
            document.getElementById("error").style.display = "block";
            
            return false;
        }
        if (sname != "" && sdob != "" && sgender != "" && scontact != "" && semail != "" && saddress != "" && spin != "" && state != "0" && city != "" 
        && country != "0" && class1 != "0" && subject != "0"&& marks != ""&& sscmarks != ""&& username != ""&& password != ""){
            return true;
        }
          if (sname == "" ){
            document.getElementById("error1").style.display = "block";
            
        }  if (sdob == "" ){
            document.getElementById("error2").style.display = "block";
            
        }  if (sgender == "" ){
            document.getElementById("error3").style.display = "block";
            
        }  if (scontact == "" ){
            document.getElementById("error4").style.display = "block";
            
        }  if (semail == "" ){
            document.getElementById("error5").style.display = "block";
            
        }  if (saddress == "" ){
            document.getElementById("error6").style.display = "block";
            
        }  if (spin == "" ){
            document.getElementById("error7").style.display = "block";
            
        }  if (state == "0" ){
            document.getElementById("error8").style.display = "block";
            
        }  if (city == "" ){
            document.getElementById("error9").style.display = "block";
            
        }  if (country == "0" ){
            document.getElementById("error10").style.display = "block";
            
        }  if (class1 == "0" ){
            document.getElementById("error11").style.display = "block";
            
        }  if (subject == "0" ){
            document.getElementById("error12").style.display = "block";
            
        }  if (marks == "" ){
            document.getElementById("error13").style.display = "block";
            
        }  if (sscmarks == "" ){
            document.getElementById("error14").style.display = "block";
            
        }  if (username == "" ){
            document.getElementById("error15").style.display = "block";
            
        }  if (password == "" ){
            document.getElementById("error16").style.display = "block";
            
        }
        return false;     
        }
    </script>  
	
	
<script src="logout.js"></script>
<script src="studentreg.js"></script>
<script src="jquery-1.7.1.min.js"></script>
<script src="navigation.js"></script>
<script src="animation.js"></script>     
</head>
    
<body>
<header>
<div class="main">
<ul>
<li><a href="studhomepage.php">HOME</a></li>
<a href="login.php"><button onclick="onlogout()" class="logout"><?php echo $ad_user; ?>LOGOUT</button></a>


</ul>
</div>

<div class="header">&nbsp;&nbsp;HOME TUTOR's 
</div>

<div class="body">
<div class="block1">
<p class="head1">Student Registration</p><hr>
<p name="error" id="error" class="e">All the fields must be filled.</p>


<form  method="post" name="register" onsubmit="return validateForm()" action="stureg1.php">
<fieldset class="fieldset">
<legend class="legend1"><b>Personal Details</b></legend>

<div class="span1"><p name="error1" id="error1" class="e">Please enter your Name!</p>Student Name:<input class="inp1" type="pattern="[A-Za-z]{}"" name="sname" /></div>

<div class="span2"><p name="error2" id="error2" class="e">Please enter your Birth Date!</p>Birth Date:<input  min="1995-01-01"  max="2020-01-02" id="bday" type="date" name="sdob" /></div>
            
<div class="span3"><p name="error3" id="error3" class="e">Please select your Gender!</p>Gender:
<input class="inp2" type="radio" name="sgender" value="Male" checked>Male
<input class="inp2" type="radio" name="sgender" value="Female">Female
<input class="inp2" type="radio" name="sgender" value="Others">Others</div>
            
<div class="span4"><p name="error4" id="error4" class="e">Please enter your Contact Number!</p>Contact:<input class="inp3" type="number" "minlength=10" "maxlength=10" name="scontact" /></div>
            
<div class="span5"><p name="error5" id="error5" class="e">Please enter your email it should contain “@”!</p>Email:<input id="email" type="email" name="semail" /></div>
</fieldset>
        
<fieldset class="fieldset">
<legend><b>Residental Details</b></legend>
<p class="address"><p name="error6" id="error6" class="e">Please enter your full Address.</p>
<div class="span7">Address:</p><textarea class="textarea" name="saddress"></textarea></div>
            
<div class="span8"><p name="error7" id="error7" class="e">Please enter your pin code.</p>Pincode:<input class="inp3" type="number" name="spin"></div>
            
<div class="span9"><p name="error8" id="error8" class="e">Please select your state.</p>State:<select class="inp5" name="state">
<option value="0">Select</option>
<option value="maharastra">Maharastra</option>
<option value="goa">Goa</option>
<option value="up">U.P.</option>
<option value="bihar">Bihar</option>
<option value="assam">Assam</option>
<option value="kerela">Kerela</option>
<option value="gujarat">Gujarat</option>
<option value="karanataka">Karnataka</option>
</select>
</div>
            
<div class="span10"><p name="error9" id="error9" class="e">Please enter your City .</p>City:<input class="inp6" type="text" name="city"></div>
<p name="error10" id="error10" class="e">Please select your Country.</p>
<div class="span11">Country:<select class="inp11" name="country">
<option selected value="india">India</option>
</select></div>
</fieldset>
        
<fieldset class="fieldset">
<legend><b>Admission Details</b></legend>

<div class="span12"><p name="error11" id="error11" class="e">Please select your Class.</p>Admission Stream <select class="inp9" id="class" name="class">	
<option value="0">Select</option>
<?php
            $con1=mysqli_connect("localhost","root","","admin");                  
            $sql1="SELECT * from classes";
            $result1 = mysqli_query($con1, $sql1); 
            while($row1 = mysqli_fetch_assoc($result1))
                    {
                        echo'<option value="'.$row1["class"].'">'.$row1["class"].'</option>';         
                    }
            ?>
</select></div>
			
 <div class="span13"><p name="error12" id="error12" class="e">Please select your Subject.</p>Admission For:
<select class="inp10" name="subject" id="subject">
<option value="0">Select</option>
</div>
</select>
</div>
<div class="span14"><p name="error13" id="error13" class="e">Please enter your Marks.</p>IX<sup>Th</sup> Marks:<input type="text" class="inp8" name="marks" /> </div>

<div class="span15"><p name="error14" id="error14" class="e">Please enter your SSC Marks.</p>X<sup>Th</sup> Marks:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sscmarks" class="inp9" /></div></fieldset>

<fieldset class="fieldset">
<legend><b>Student Details</b></legend>

<div class="span14"><p name="error15" id="error15" class="e">Please enter your Username!</p>Username:&nbsp;&nbsp;&nbsp;&nbsp;<input class="inp10" type="text" name="username" /></div>
<div class="span15"><p name="error16" id="error16" class="e">Please enter your Password!</p>Password:<input class="inp12" type="password" name="password" /></div><br>
</fieldset>
  <br>
  <div class="b">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<button type="submit">SUBMIT</button>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="reset">RESET</button>
		   <br>
		   <br>
</form>
<script>
    $(document).ready(function(){
 
    $('#class').on('change',function(){
        var classid = $(this).val();
        if(classid){
            $.ajax({
                type:'POST',
                url:'subject.php',
                data:'class='+classid,
                success:function(html){
                    $('#subject').html(html);
                }
            }); 
        }else{
            $('#subject').html('<option value="0">Select class first</option>'); 
        }
    });
                                    
    });                          
</script>
</div>
</div></body>
</html>
