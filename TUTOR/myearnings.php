<h1>MY EARNINGS</h1>
<?php
session_start();
 if(isset($_SESSION["username"])){ 
    $con1=mysqli_connect("localhost","root","","admin");
    $sql1="SELECT * from `salary` where `t_username`='".$_SESSION["username"]."'";
    $result1= mysqli_query($con1, $sql1);
    while($row1 = mysqli_fetch_assoc($result1)){
        echo '<h2>You have earned (till now amount you earned from HOME TUTORS):<b>RS.'.$row1["paid_amount"].'</b><br></h2>';
    }
 ?>
 <html>
<head>
<title>STUDENTS MANAGEMENT</title>
<style>
body {
background-image: url("source_background/bckground2.jpg");
background-size: cover;
color : white;
background-attachment: fixed;
}
table{
border:1px;	
table-size:100%;
table-align:centre;
}
th, td {
  padding: 27px;
  font-size:20px;
}
.h1{
text-align:center;
}
</style>
</head>
<body>
<br>
 <table align="center" border="1">
<tr>
<th>Sr. No.</th>
<th>Transaction ID</th>
<th>Amount(in RS.)</th>
<th>Date And Time</th>
</tr>
<?php
$c=1;
$con=mysqli_connect("localhost","root","","tutor");
$sql="SELECT * from `payments` where `t_username`='".$_SESSION["username"]."'";
$result= mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)){
    echo'<tr>';
    echo'<td align="center"><b>'.$c.'</b></td>';
    echo'<td align="center"><b>AT'.$row["tid"].'</b></td>';
    echo'<td align="center"><b>'.$row["amt"].'</b></td>';
    echo'<td align="center"><b>'.$row["date"].'</b></td>';
    echo'</tr>';
    $c++;
 }?>
</table>
<?php }
else{
    echo"PLEASE LOG IN FIRST!";
}
?></body></html>