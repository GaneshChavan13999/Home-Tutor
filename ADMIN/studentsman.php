<?php
session_start();
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
  padding: 23px;
  font-size:20px;
}
.h1{
text-align:center;
}
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
</style>
</head>
<body>
<h1>STUDENT'S  DATA</h1>
<br>
<table align="center" border="1">
<tr>
<th>SR.No.</th>
<th>Student Name</th>
<th>Student Username</th>
<th>Class</th>
<th>Subject</th>
<th>Total TUTORS</th>
<th>Register Date</th>
</tr>
<?php
    $count=1;
    $con=mysqli_connect("localhost","root","","student");
    $sql="SELECT * FROM stud_details ";
    $result=$con->query($sql);
    while($row=$result->fetch_assoc())
    {
        echo'<tr>';
        echo '<td align="center"><b>'.$count.'</b></td>';
        echo'<td align="center"><b>'.$row["sname"].'</b></td>';
        echo '<td align="center"><b>'.$row["username"].'</b></td>';
        echo '<td align="center"><b>'.$row["class"].'</b></td>';
        echo '<td align="center"><b>'.$row["subject"].'</b></td>';
        $con1=mysqli_connect("localhost","root","","admin");
        $sql1="SELECT s_username,COUNT(*) As c FROM orders where s_username='".$row["username"]."' GROUP BY s_username;";
        // $result1=mysqli_query($con1,$sql1);
        $result1=$con1->query($sql1);
        $row_cnt= $result1->num_rows;
        
        if($row_cnt > 0){
        while($row1=$result1->fetch_assoc())
        {
            echo '<td align="center"><b>'.$row1["c"].'</b></td>';   
        }}else{
            echo '<td align="center"><b>0</b></td>';
        }
        echo '<td align="center"><b>'.$row["joindate"].'</b></td>';
        echo'</tr>';
        $count++;
    }
?>
</table></body></html>