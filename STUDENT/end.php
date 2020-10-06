<html>
<head>
<title>FEEDBACK</title>
<link rel="stylesheet" type="text/css" href="submit.css"/>;

<style>
body{

}
.container{
	font-size:30px;
	height:350px;
	width:740px;
	text-align:center;
	margin-top:140px;
	margin-left:300px;
}
.btn{
	margin-left:10px;
	margin-top:80px;
}
.btn1{
	margin-left:160px;
	margin-top:-20px;
}

</style>
</head>
<body>
<?php
    session_start();
    echo'<div class="container" id="end"><br><b>Do you want to end learning <br> from this teacher ?</b><br>';
    echo '<div>'; 
    echo'<a href="http://localhost/HOME/STUDENT/end.php?tusername='.$_GET["tusername"].'&a=1"><input type="button" class="btn" value="YES" ></a>';
    //echo '</div>';
   // echo '<div>'; 
    echo'<b><a href="http://localhost/HOME/STUDENT/myapplications.php"><input type="button" class="btn1" value="NO"></a></b>';
    echo '</div></div>';
    if(isset($_GET["a"])==1)
    {
        $con=mysqli_connect("localhost","root","","tutor");
        $sql="UPDATE applications SET end = 1 where t_username='".$_GET["tusername"]."' AND s_username='".$_SESSION["username"]."'";
        $result = mysqli_query($con, $sql);
        if(mysqli_affected_rows($con)> 0){
			echo'<script> document.getElementById("end").style.display="none"; </script>';
		
            echo'<br><div class="container"><b>Do you want to give feedback <br> about this teacher ?<br>(This will help teachers to improve. So we recommennd you to give feedback .)</b><br>';
            echo '<div>'; 
            echo'<a href="http://localhost/HOME/STUDENT/feedback.php?t='.$_GET["tusername"].'"><input type="button"  class="btn" value="YES" ></a>';
            //echo '</div>';
            //echo '<div class="btn1">'; 
            echo'<a href="http://localhost/HOME/STUDENT/myapplications.php"><input type="button"  class="btn1" value="NO"></a>';
            echo '</div></div>';
            // header("Location: http://localhost/adu/project/feedback.php?t=".$_GET["tusername"]."");
        }
        else{
            echo"not";
        }
    }
?></body></html>