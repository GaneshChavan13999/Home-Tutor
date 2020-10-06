<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Tution</title>
<link rel="stylesheet" type="text/css" href="sty.css">
<link rel="stylesheet" type="text/css" href="post.css">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">
if (typeof jQuery == 'undefined')
    document.write(unescape("%3Cscript src='/path/jquery' type='text/javascript'%3E%3C/script%3E"));
</script>
<style>
body{
	color : white;
	overflow:hidden;
	background-attachment: fixed;
background-repeat:no repeat;
}
.form h4, .form h4 select{
    display: inline;
}
#tutors_pre{
    display:block;
}
#tutors{
    display:none;
}
table{
border:2px;	
table-size:100%;
}
th, td {
  padding: 10px;
}
table{
border:2px;	
table-size:100%;
table-align:centre;
}
th, td {
  padding: 15px;
  font-size:25px;
}
.box{
    display: none;
}
</style>
<style>
/* Dropdown Button */
.dropbtn {
  background-color:red;
  color: white;
  padding: 16px;
  font-size: 18px;
  border: none;
  border-radius:05px;
  margin-right:15px;
  margin-top:-10px;
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
  min-width: 160px;
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
<script>
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});                        
</script>
<script>
 $(document).ready(function(){
 
    $('#subjects').on('change',function(){
        document.getElementById("tutors_pre").style.display = "none";
        document.getElementById("tutors").style.display = "block";
        var categoryID = $(this).val();
        if(categoryID){
            $.ajax({
                type:'POST',
                url:'findtutor.php',
                data:'subjects='+categoryID,
                success:function(html){
                    $('#tutors').html(html);
                }
            }); 
        }
    });
    $('#classes').on('change',function(){
        document.getElementById("tutors_pre").style.display = "none";
        document.getElementById("tutors").style.display = "block";
        var categoryID1 = $(this).val();
        if(categoryID1){
            $.ajax({
                type:'POST',
                url:'findtutor.php',
                data:'classes='+categoryID1,
                success:function(html){
                    $('#tutors').html(html);
                }
            }); 
        }
    });
    });                          
</script>

<header>
<div class ="main">
<ul>
<li><a href="homepagelogin.php">HOME</a></li>
<li><a href="feed.php">NEWSFEED</a></li>
<li><a href="about.php">ABOUT US</a></li>
<li><a href="contact.php">CONTACT US</a></li>
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
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<br><br><br><br><br>
<div class="loginbox">

<h1>FIND TUTOR BY</h1> 
<br>
<b>
<input type="radio" name="selectway" id="selectway" value="cla">&nbsp;CLASS
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="selectway" id="selectway" value="sub">&nbsp;SUBJECT</b>
<div class="cla box"><h4><b>Classes</b></h4>
<select id="classes" name="classes" >
<option value="s">Select class</option>
<?php
    $con=mysqli_connect("localhost","root","","admin");
    $sql="select *  from classes ";
    $result=$con->query($sql);
    while($row=$result->fetch_assoc())
    {
        echo  "<option value=".$row['class'].">".$row['class']."</option>";
    }	
    mysqli_close($con);
?>
</select></div>
<div class="sub box">
<h4><b>Subjects</b></h4>
<select id="subjects" name="subjects" >
<option value="s">Select subject</option>
<?php
    $con1=mysqli_connect("localhost","root","","admin");
    $sql="select *  from subjects ";
    $result=$con1->query($sql);
    while($row=$result->fetch_assoc())
    {
        echo  "<option value=".$row['subject'].">".$row['subject']."</option>";
    }	
    mysqli_close($con1);
?>
</select></div>
<!-- <Button name="Submit" value="Find">Find</Button> </form> -->
</div><div>
<br><br>

<table align="center" border=2 id="tutors_pre" name="tutors_pre">
<tr>
<th align="center">SR NO.</th>
<th align="center">Tutor Name</th>
<th align="center">Subject</th>
<th align="center">Class</th>
<th align="center">Action</th>
</tr>
<?php
    $con2=mysqli_connect("localhost","root","","tutor");
    $sql="select *  from tutor_details ";
    $result=$con2->query($sql);
    $count1=1;
    while($row=$result->fetch_assoc())
    {
        echo  "<tr><td>".$count1."</td>";
        echo  "<td>".$row["name"]."</td>";
        echo "<td>".$row["subject"]."</td>";
        echo "<td>".$row["class"]."</td>";
		echo '<td><a href="tutorprofile.php?username='.$row["username"].'">APPLY</a></td>';
		echo"</td>";
        echo"</tr>";
        $count1++;
    }	
    mysqli_close($con2);
?>
</table>
<table align="center" border=1 id="tutors" name="tutors">
<tr>
<th align="center">SR NO.</th>
<th align="center">Tutor Name</th>
<th align="center">Subject</th>
<th align="center">Class</th>
</tr>
</table>
</div>
</header>
</body>

</html>
<?php

?>