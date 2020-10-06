<?php
if(!empty($_POST["class"])){
    $con=mysqli_connect("localhost","root","","admin");   
    //Fetch all subject data
    $query1 = $con->query("SELECT * FROM subjects WHERE class = '".$_POST['class']."' ORDER BY subject ASC");
    
    //Count total number of rows
    $rowCount1 = $query1->num_rows;
    
    //subject option list
    if($rowCount1 > 0){
        echo '<option value="">Select subject</option>';
        while($row1 = $query1->fetch_assoc()){ 
            echo '<option value="'.$row1['subject'].'">'.$row1['subject'].'</option>';
        }
    }else{
        echo '<option value="">Subjects not available</option>';
    }
}



    
?>