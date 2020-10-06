<html>
<head>
<style>
body {
  background-image: url("source_background/bckground3.jpg");
background-size: cover;
color : white;
background-attachment: fixed;
	overflow:hidden;
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
</style>
<body>
<h2> <?php echo 'Student&nbsp'; echo $_SESSION["name"];?>'s Applications</h2>
<table align="center" width="700px" border=1 id="tutors_pre" name="tutors_pre">
<tr>
<th>Tutor Name</th>
<th>STATUS</th>
<th>ACTION</th>
</tr>
<?php
session_start();
$con=mysqli_connect("localhost","root","","tutor");
$sql="select * from applications where s_username='".$_SESSION["username"]."'";
$result=$con->query($sql);
while($row=$result->fetch_assoc())
{
    echo'<tr>';
    echo '<td align="center"><a href="tutorprofile.php?username='.$row["t_username"].'">'.$row["t_name"].'</a></td>';
    if($row["action"]==1 && $row["end"]==0){
	echo '<td align="center"><b>APPLICATION Accepted!</b></td>';
	echo '<td><a href="http://localhost/HOME/STUDENT/end.php?tusername='.$row["t_username"].'">End</a><b>';
	}elseif($row["action"]==2){
    echo '<td align="center" colspan="2"><b>APPLICATION Rejected!</b></td>';
	}else{
	echo '<td align="center" colspan="2">TUTOR NOT RESPONDED YET!</td>';
	}
	echo'</tr>';
}
?>
</table></body></html>