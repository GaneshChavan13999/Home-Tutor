<?php
session_start();
?>
<!Doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Feedback</title>
<link rel="stylesheet" type="text/css" href="feed.css" />
<link rel="stylesheet" type="text/css" href="global.css" />
<link rel="stylesheet" type="text/css" href="submit.css"/>;


<style>
.e{
    color:red;
    display:none;
}
body{
background-attachment: fixed;
background-repeat:no repeat;
overflow:hidden;
}
.wrap{
	margin-top:40px;
}
.header{
	margin-top:-19px
}
.btn{
	color:white;
}
/* Dropdown Button */
.dropbtn {
  background-color:red;
  color: white;
  padding: 16px;
  font-size: 18px;
  border: none;
  border-radius:05px;
  margin-right:30px;
  margin-top:-10px;
  overflow:hidden;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 120px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body>
<header>
<div class="main">
<ul>
<li><div class="dropdown">
  <button class="dropbtn"><?php echo $_SESSION["name"];?></button>
  <div class="dropdown-content">
    <a href="sprofile.php">MY PROFILE</a>
    <a href="myapplications.php">MY APPLICATIONS</a>
    <a href="edit.php">EDIT</a>
    <a href="mynotes2.php">MY NOTES</a>
    <a href="logout.php">LOGOUT</a>
    
  </div>
</div>

</li>

</ul>
</div>
</ul>

<div class="header">&nbsp;&nbsp;<a href="homepagelogin.php">HOME TUTOR's </a></div>

</div>
<script>
function validateForm(){
	var i,rating="";
	var cols=document.getElementsByClassName('e');
	for(i=0;i<cols.length; i++){
		cols[i].style.display='none';
	}
	var ele = document.getElementsByName('rating'); 
	for(i = 0; i < ele.length; i++) { 
                if(ele[i].checked) {
                rating=ele[i].value; }
            } 
	var ututor=document.getElementById("ututor").value;
	var area = document.getElementById ("feedback");
    var feedback=area.value.trim();
	if(rating==""&& feedback==""&& ututor==""){
		document.getElementById("error1").style.display="block";
		return false;
	}
	if(rating!=""&&feedback!=""){
		return true;
	}
	if(feedback =="")
	{
		document.getElementById("error3").style.display="block";
	}
	if(rating==""){
		document.getElementById("error2").style.display="block";
	}
	
     return false;
} 
     

</script>
<div class="wrap" id="register1">
<form method="POST" name="register" id="register" onsubmit="return validateForm()" >
<h2><b>GIVE FEEDBACK's</b></h2>
<br>
<p name="error1" id="error1" class="e">Please fill feedback form.</p>
<p name="error2" id="error2" class="e">Please Give rating to tutor.</p>
<p name="error3" id="error3" class="e">Please give review.</p>
<h4><b>Tutor's Username:</b></h4> <input type="text" name="ututor" id="ututor" readonly value="<?php echo $_GET['t'] ?>" ><br><br>
<h4><b>Rating you will give to tutor:</b></h4><br>
<label><input type="radio" name="rating" id="rating" value="1" />&nbsp;1</label> &nbsp; &nbsp;
<label><input type="radio" name="rating" id="rating" value="2" />&nbsp;2</label> &nbsp; &nbsp;
<label><input type="radio" name="rating" id="rating" value="3" />&nbsp;3</label> &nbsp; &nbsp;
<label><input type="radio" name="rating" id="rating" value="4" />&nbsp;4</label> &nbsp; &nbsp;
<label><input type="radio" name="rating" id="rating" value="5" />&nbsp;5</label>
<br><BR>
<h4><b>Feedback:</b></h4><BR>
<textarea rows="4" cols="40" id="feedback" name="feedback">     
</textarea>   <br><BR>
<input type="submit" onclick="submit()" class="button" name="submit" value="Submit" />  
</div>
</form></body></html>
<?php
if(isset($_POST["submit"])){
    $con=mysqli_connect("localhost","root","","tutor");
    $sql="INSERT INTO `feedback`(`u_tutor`, `u_student`, `rating`, `review`) VALUES(
     '".$_POST["ututor"]."',
     '".$_SESSION["username"]."',
    '".$_POST["rating"]."',
     '".$_POST["feedback"]."')";
    // echo"hee";
    $result=$con->query($sql);
    
  

    if($result)
    {
		echo'<script> document.getElementById("register1").style.display="none"; </script>';
        echo'<div class="wrap" style="margin-top:200px;"><b>Thank you for your feedback this will help us to improve.</b><br><br>';
        echo '<div>'; 
        echo'<a href="http://localhost/HOME/STUDENT/homepagelogin.php"><input type="button"  class="btn" value="OK" ></a>';
        echo '</div></div>';
    }
}
?>