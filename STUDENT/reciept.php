
<?php
session_start();
?>
<html>
<head>
<title>Fees RECEIPT</title>
<link rel="stylesheet" type="text/css" href="reciept.css"/>
<style>
</style>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","admin");
$sql="select * from orders where txn_id='".$_GET["id"]."'";
$result=$con->query($sql);

while($row=$result->fetch_assoc())
{
	$con1=mysqli_connect("localhost","root","","tutor");
 $sql1="select * from tutor_details where username='".$row["tusername"]."'";
 $result1=$con1->query($sql1);
 
while($row1=$result1->fetch_assoc())
{
echo'<div class="container">';	
echo'<table border=2px>
<tr>
<th colspan="2"><h1>Payment Receipt</h1></th>
</tr>

<tr>
<td><h3><b>Tutor Name:-</b></h3></td>';
echo"<td><h3><b>".$row["tname"]."</h3></b></td>";
echo'
<tr>

<tr>
<td><h3><b>Tutor Subject:-</b></h3></td>';
echo"<td><h3><b>".$row1["subject"]."</h3></b></td>";
echo'
<tr>


<tr> 
<td><h3><b>Student Name:-</b></h3></td>';
echo "<td><h3><b>".$row["name"]."</b></h3></td>";
 echo'</tr>


<tr>
<td><h3><b>Total Fees:-</td></b></h3>';
echo"<td><h3><b>".$row["tfees"]."</b></h3></td>";
echo'
</tr>

<tr>
<td><h3><b>Paid Fees:-</td></b></h3>';
echo"<td><h3><b>".$row["paid_amount"]."</b></h3></td>";
echo'
<tr>

<tr>
<td><h3><b>Paid Date:-</b></h3></td>';
echo"<td><h3><b>".$row["modified"]."</b></h3></td>";
echo'
<tr>


</table>';

}}


echo"</div></b>";
echo'<button onclick="display()">Click to print</button>';
?>
<script>
function display()
{
	window.print();
}
</script>
</body>
</html>
