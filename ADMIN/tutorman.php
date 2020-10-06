<?php
session_start();
?>
<html>
<head>
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
  padding: 23px;
  font-size:20px;
}
.h1{
text-align:center;
}
</style>
</head>
<body>
<h1>TUTOR'S  DATA</h1>
<br>
<table align="center" border="1">
<tr>
<th>Sr.No.</th>
<th>Tutor Name</th>
<th>Tutor Username</th>
<th>Class</th>
<th>Subject</th>
<th>Total Students</th>
<th>Total Income</th>
<th>Payment done</th>
<th>Payment Balance</th>
<th>Pay</th>
</tr>
<?php
    $count=1;
    $con=mysqli_connect("localhost","root","","tutor");
    $sql="SELECT * FROM admin.salary INNER JOIN tutor.tutor_details ON admin.salary.`t_username` = tutor.tutor_details.username";
    $result=$con->query($sql);
    while($row=$result->fetch_assoc())
    {   
		echo'<tr>';
            echo '<td>'.$count.'</td>';
            echo'<td>'.$row["name"].'</td>';
            echo '<td>'.$row["username"].'</td>';
            echo '<td>'.$row["class"].'</td>';
            echo '<td>'.$row["subject"].'</td>';
		$con1=mysqli_connect("localhost","root","","admin");
        $sql1="SELECT tusername,COUNT(*) As c FROM orders where tusername='".$row["username"]."' GROUP BY tusername;";
        $result1=$con1->query($sql1);
		$row_cnt= $result1->num_rows;
		if($row_cnt>0){
        while($row1=$result1->fetch_assoc())
        {
            $tsalary= $row1["c"]*(int)$row["fees"];
            $bamt=$tsalary-(int)$row["paid_amount"];
            
            echo '<td>'.$row1["c"].'</td>';
            echo '<td>'.$tsalary.'</td>';
            echo '<td>'.$row["paid_amount"].'</td>';
            echo '<td>'.$bamt.'</td>';
            if($bamt >0){
                echo '<td><a href="paytutor.php?m='.$bamt.'&t='.$row["username"].'">Pay</a></td>';}else{  echo '<td>-</td>';}
           
        }}else{
			echo '<td>0</td>';
			echo '<td>0</td>';
			echo '<td>0</td>';
			echo '<td>0</td>';
			echo '<td>-</td>';
		} echo'</tr>';
        $count++;
    }
?>
</table></body></html>