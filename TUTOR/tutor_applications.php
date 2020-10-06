<html>
<head>
<style>
body {
  background-image: url("source_background/bckground6.jpg");
background-size: cover;
color : black;
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
</head>
<body>
<h2> <?php echo 'Tutor&nbsp';echo $_SESSION["name"];?>'s Applications</h2>
<table align="center" width="700px"border=1 id="tutors_pre" name="tutors_pre">
<tr>
<th>Student Name</th>
<th>Accept</th>
<th>Reject</th>
</tr>
<?php
session_start();
$con=mysqli_connect("localhost","root","","tutor");
$sql="select * from applications where t_username='".$_SESSION["username"]."'AND action=0";
$result=$con->query($sql);
while($row=$result->fetch_assoc())
{
    echo'<tr>';
    echo '<td><a href="studentprofile.php?username='.$row["s_username"].'">'.$row["s_name"].'</a></td>';
    echo '<td><a href="accept.php?username='.$row["s_username"].'">Accept</a></td>';
    echo '<td><a href="reject.php?username='.$row["s_username"].'">Reject</a></td></tr>';
}
?>
</table></body></html>