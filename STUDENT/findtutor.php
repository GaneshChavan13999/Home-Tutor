<?php

$conn=mysqli_connect("localhost","root","","tutor");
	if(!empty($_POST["subjects"])&& !empty($_POST["classes"])){
    //Fetch all city data
    $query1 = $conn->query("SELECT * FROM tutor_details WHERE subject = '".$_POST['subjects']."' AND class = '".$_POST['classes']."'");
    
    //Count total number of rows
    $rowCount1 = $query1->num_rows;
    if($rowCount1>0){
        $count=1;
        while($row1 = $query1->fetch_assoc()){ 
        echo  "<tr><td>".$count."</td>";
        echo  "<td>".$row["name"]."</td>";
        echo "<td>".$row["subject"]."</td>";
        echo "<td>".$row["class"]."</td>";
		echo '<td><a href="tutorprofile.php?id='.$row["id"].'">APPLY</a></td>';
		echo"</td>";
        echo"</tr>";
        $count++;
        // if($count%3==0)
        // {
        //     echo"</tr><tr>";
        // }
    }
    }
    else{
        echo"<h1>NO Tutor Found</h1>";
    }
	}
else{

if(!empty($_POST["subjects"])){
    //Fetch all city data
    $query1 = $conn->query("SELECT * FROM tutor_details WHERE subject = '".$_POST['subjects']."'");
    
    //Count total number of rows
    $rowCount1 = $query1->num_rows;
    if($rowCount1>0){
        $count=1;
        echo"<tr>
        <th>SR NO.</th>
        <th>Tutor Name</th>
        <th>Subject</th>
        <th>Class</th>
		<th>Action</th>
        </tr>";
        while($row1 = $query1->fetch_assoc()){ 
        echo  "<tr><td>".$count."</td>";
        echo  "<td width='10px'>".$row1["name"]."</td>";
        echo "<td width='10px'>".$row1["subject"]."</td>";
        echo "<td width='10px'>".$row1["class"]."</td>";
		echo '<td><a href="tutorprofile.php?id='.$row1["id"].'">APPLY</a></td>';
		echo"</td>";
        echo"</tr>";
        $count++;
        // if($count%3==0)
        // {
        //     echo"</tr><tr>";
        // }
    }
    }
    else{
        echo"<h1>NO Tutor Found</h1>";
    }
}

if(!empty($_POST["classes"])){
    //Fetch all city data
    $query1 = $conn->query("SELECT * FROM tutor_details WHERE class = '".$_POST['classes']."'");
    
    //Count total number of rows
    $rowCount1 = $query1->num_rows;
    if($rowCount1>0){
        $count=1;
        echo"<tr>
        <th>SR NO.</th>
        <th>Tutor Name</th>
        <th>Subject</th>
        <th>Class</th>
		<th>Action</th>
        </tr>";
        while($row2 = $query1->fetch_assoc()){ 
        echo  "<tr><td>".$count."</td>";
        echo  "<td>".$row2["name"]."</td>";
        echo "<td>".$row2["subject"]."</td>";
        echo "<td>".$row2["class"]."</td>";
		echo '<td><a href="tutorprofile.php?id='.$row2["id"].'">APPLY</a></td>';
		echo"</td>";
        echo"</tr>";
        $count++;
        // if($count%3==0)
        // {
        //     echo"</tr><tr>";
        // }
    }
    }
    else{
        echo"<h1>NO Tutor Found</h1>";
    }
}
}

?>