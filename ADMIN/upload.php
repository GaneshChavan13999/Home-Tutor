<?php
session_start();
$filename   = "".$_SESSION["username"]."_".time(); 
$extension  = pathinfo( $_FILES["file"]["name"], PATHINFO_EXTENSION ); 
$basename   = $filename . '.' . $extension; 

$source       = $_FILES["file"]["tmp_name"];
$destination  = "uploads/" . $basename;

/* move the file */
if(move_uploaded_file( $source, $destination) ){
    try{
        $con=mysqli_connect("localhost","root","","tutor");
        $sql="INSERT INTO `post_notes`(`title`, `description`, `filename`, `u_tutor`) VALUES(
         '".$_POST["title"]."',
         '".$_POST["descr"]."',
        '".$basename."',
         '".$_SESSION["username"]."')";
        // echo"hee";
        $result=$con->query($sql);
        
      
        if($result)
        {
            header("Location: u.php");
            exit();
            echo "succesfull";
        
        }
        else{
            echo'not';
        } } catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
         }
       
}


?>