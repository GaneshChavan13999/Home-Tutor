<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tutor Registration</title>
		
<link rel="stylesheet" type="text/css" href="global.css" />
<link rel="stylesheet" type="text/css" href="background2.css" />
<link rel="stylesheet" type="text/css" href="tutorreg.css" />
	 
	 
	 <style>
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
        var name = document.forms["register"]["name"].value;
        var dob = document.forms["register"]["dob"].value;
        var gender = document.forms["register"]["gender"].value;
        var contact = document.forms["register"]["contact"].value;
        var email = document.forms["register"]["email"].value;
		var klang = document.forms["register"]["klang"].value;
        var address = document.forms["register"]["address"].value;
        var pin = document.forms["register"]["pin"].value;
        var state = document.forms["register"]["state"].value;
        var city = document.forms["register"]["city"].value;
        var country = document.forms["register"]["country"].value;
		var education = document.forms["register"]["education"].value;
		var exp = document.forms["register"]["exp"].value;
        var class1 = document.forms["register"]["class"].value;
        var subject = document.forms["register"]["subject"].value;
        var username = document.forms["register"]["username"].value;
        var password = document.forms["register"]["password"].value;
		var location = document.forms["register"]["location"].value;
		var fees = document.forms["register"]["fees"].value;
        if (name == "" && dob == "" && gender == "" && contact == "" && email == "" && klang == "" && address == "" && pin == "" && state == "0" && city == "" 
        && country == "0" && education == "" && exp == "" && class1 == "0" && subject == "0" && username == "" && password == "" && location == "" && fees == "") {
            // console.log("Hello world!");
            document.getElementById("error").style.display = "block";
            
            return false;
        }
        if (name !== "" && dob !== "" && gender !== "" && contact !== "" && email !== "" && klang !== "" && address !== "" && pin !== "" && state !== "0" && city !== "" 
        && country !== "0" && education !== "" && exp !== "" && class1 !== "0" && subject !== "0"&& username !== "" && password !== "" && location !== "" && fees !== ""){
            return true;
        }
          if (name == "" ){
            document.getElementById("error1").style.display = "block";
            
        }  if (dob == "" ){
            document.getElementById("error2").style.display = "block";
            
        }  if (gender == "" ){
            document.getElementById("error3").style.display = "block";
            
        }  if (contact == "" ){
            document.getElementById("error4").style.display = "block";
            
        }  if (email == "" ){
            document.getElementById("error5").style.display = "block";
			
		}  if (klang == "" ){
            document.getElementById("error6").style.display = "block";
            
        }  if (address == "" ){
            document.getElementById("error7").style.display = "block";
            
        }  if (pin == "" ){
            document.getElementById("error8").style.display = "block";
            
        }  if (state == "0" ){
            document.getElementById("error9").style.display = "block";
            
        }  if (city == "" ){
            document.getElementById("error10").style.display = "block";
            
        }  if (country == "0" ){
            document.getElementById("error11").style.display = "block";
        
		}  if (education == "" ){
            document.getElementById("error12").style.display = "block";
        
		}  if (exp == "" ){
            document.getElementById("error13").style.display = "block";
            
        }  if (class1 == "0" ){
            document.getElementById("error14").style.display = "block";
            
        }  if (subject == "0" ){
            document.getElementById("error15").style.display = "block";
            
        }  if (username == "" ){
            document.getElementById("error16").style.display = "block";
            
        }  if (password == "" ){
            document.getElementById("error17").style.display = "block";
			
	    }  if (location == "" ){
            document.getElementById("error18").style.display = "block";
            
        }  if (fees == "" ){
            document.getElementById("error19").style.display = "block";
                
        }
        return false;     
        }
    </script>  
	
<script src="logout.js"></script>
<script src="employeereg.js"></script>
<script src="jquery-1.7.1.min.js"></script>
<script src="navigation.js"></script>
<script src="animation.js"></script>     
</head>
    
<body>
<header>
<div class="main">
<ul>
<li><a href="tutorhomepage.php">HOME</a></li>
<a href="logout.php"><button class="logout">LOGIN</button></a>



</ul>
</div>

<div class="header">&nbsp;&nbsp;HOME TUTOR's 
</div>

<div class="body">
<div class="block1">
<p class="head1">Tutor Registration</p><hr>
<p name="error" id="error" class="e">All the fields must be filled.</p>       

<form method="post" name="register" onsubmit="return validateForm()" action="tutorreg1.php">

<fieldset class="fieldset">
<legend class="legend1"><b>Personal Details</b></legend>

<div class="span1"><p name="error1" id="error1" class="e">Please enter your Name!</p>Tutor Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="inp1" type="text" name="name" /></div>

<div class="span2"><p name="error2" id="error2" class="e">Please enter your Birth Date!</p>Birth Date:<input  min="1980-01-01"  max="2012-01-02" id="bday" type="date" name="dob" /></div>
            
<div class="span3"><p name="error3" id="error3" class="e">Please select your Gender!</p>Gender:
<input class="inp2" type="radio" name="gender" value="Male" checked>Male
<input class="inp2" type="radio" name="gender" value="Female">Female
<input class="inp2" type="radio" name="gender" value="Others">Others</div>
            
<div class="span4"><p name="error4" id="error4" class="e">Please enter your Contact Number!</p>Contact:<input class="inp3" type="tel" name="contact" /></div>
            
<div class="span5"><p name="error5" id="error5" class="e">Please enter your email it should contain “@”!</p>Email:<input id="email" type="email" name="email" /></div>
            
<div class="span6"><p name="error6" id="error6" class="e">Please enter Known Language!</p>Known Language:<input class="inp4" type="text" name="klang" />
</fieldset>
        
<fieldset class="fieldset">
<legend><b>Residental Details</b></legend>
            
<div class="span7"><p class="address"><p name="error7" id="error7" class="e">Please enter your full <br> Address.</p>Address:</p><textarea class="textarea" name="address"></textarea></div>
            
<div class="span8"><p name="error8" id="error8" class="e">Please enter your pin code.</p>Pincode:<input class="inp3" type="number" name="pin" /></div>
            
<div class="span9"><p name="error9" id="error9" class="e">Please select your state.</p>State:<select class="inp5" name="state">
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
            
<div class="span10"><p name="error10" id="error10" class="e">Please enter your City .</p>City:<input class="inp6" type="text" name="city" /></div>
<p name="error11" id="error11" class="e">Please select your Country.</p>
<div class="span11"><p name="error11" id="error11" class="e">Please enter your Country!.</p>Country:<select class="inp11" name="country"/>
<option selected value="india">India</option>
</select></div>
</fieldset>
        
<fieldset class="fieldset">
<legend><b>Educational Details</b></legend>

<div class="span12"><p name="error12" id="error12" class="e">Please enter your Details!</p>Qualification:<input  name="education" class="inp8" type="radio"value="SSC" />BSC 
<input name="education" type="radio" class="inp8" value="HSC"/>MSC
<input name="education" type="radio" class="inp8" value="Bsc"/>B.ED
<input name="education" type="radio" class="inp8" value="MSc"/>MSC</div>
<div class="span13"><p name="error13" id="error13" class="e">Please enter your experience.</p>Experience:<input class="inp9" type="text" name="exp" /></div>

<div class="span14"><p name="error14" id="error14" class="e">Please select your Class.</p>CLASS:<select class="inp9" id="class" name="class"/>	
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
			
<div class="span15"><p name="error15" id="error15" class="e">Please select your Teaching Subject.</p>Teaching Subject:<select class="inp9" id="subject" name="subject"/>
<option value="0">Select</option>
</select>
</div>
<br>
</fieldset>
            
<fieldset class="fieldset">
<legend><b>Tutor Details</b></legend>

<div class="span16"><p name="error16" id="error16" class="e">Please enter your Username!</p>Username:<input class="inp11" type="text" name="username" /></div>
<div class="span17"><p name="error17" id="error17" class="e">Please enter your Password!</p>Password:<input class="inp10" type="password" name="password" /></div>
<br>
<div class="span18"><p name="error18" id="error18" class="e">Please enter your Location!</p>Location:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="inp11" type="text" name="location" />
<br>
<br>
<div class="span19"><p name="error19" id="error19" class="e">Please enter your Amount you want to charge!</p>Fees:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="inp11" type="text" name="fees" />
</div>
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
</div>
    </body>
</html>
