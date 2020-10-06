<html>
<head>
<title> MY NOTES </title>
<link rel="stylesheet" type="text/css" href="newsfields.css">
<link rel="stylesheet" type="text/css" href="global.css" />
</head>
<body><table>
<?php
session_start();
if($_SESSION["student"]=="Y"){
    $count=0;
    $con=mysqli_connect("localhost","root","","tutor");
    $sql="SELECT * from post_notes where u_tutor='".$_SESSION["username"]."'";
    $result = mysqli_query($con, $sql);  
    if(mysqli_num_rows($result) > 0)
	{while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td><div class='content'>";
	
   
	echo "<h2>".'<p><u>Title:-</u></p>'.$row["title"]."</h2>";
	echo "<br>";
	echo "<h2>".'<p><u>Description:-</u></p>'.$row["description"]."</h2>";
	echo" <br>";

	$filename=explode(".",$row["filename"]);
	if(strpos("jpeg,png,jpg,pjpeg", $filename[1]) !== false) {
	echo '<h2>'.'<p><u>Image :-</u></p>
	<img height="200" width="200" src="uploads/'.$row["filename"].'"><br>
	<a href="uploads/'.$row["filename"].'" download>Download Image</a></h2>';
	}
	else if(strpos("mp4,avi,mov,3gp,mpeg", $filename[1]) !== false){
		echo '<video width="300" height="200" controls>
	<source src="uploads/'.$row["filename"].'" type="video/'.$filename[1].'">
	</video><br><a href="uploads/'.$row["filename"].'" download>Download video</a>';
	}
	else{
		echo '<h2>'.'<p><u>Download Notes:-</u></p><a href="uploads/'.$row["filename"].'" download>Download Document</a></h2>';
	}
	echo" </div> </td></tr>";
	// $count++;
	// if($count%3==0)
	// {
	// 	echo"</tr><tr>";
	// }
	}
	}
	else
	{ 
		$found="N";echo'<td>You Have not Uploaded yet any notes for your students please upload.:)</td>';
	}
}
else if(isset($_SESSION["student"])=="Y"){
	$con1=mysqli_connect("localhost","root","","admin");
    $sql1="SELECT * from orders where name='".$_SESSION["name"]."'";
	$result1 = mysqli_query($con1, $sql1);
	if(mysqli_num_rows($result1) > 0){
    while($row1 = mysqli_fetch_assoc($result1))
		{
            if(date('j F, Y')<date('j F, Y', strtotime($row1["created"]. ' + 1 month') )){
				$count=0;
				$con=mysqli_connect("localhost","root","","tutor");
				$sql="SELECT * from post_notes where u_tutor='".$row1["t_username"]."'";
				$result = mysqli_query($con, $sql);  
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_assoc($result))
					{
						echo "<tr><td><div class='content'>";
				
			
				echo "<h2>".'<p><u>Title:-</u></p>'.$row["title"]."</h2>";
				echo "<br>";
				echo "<h2>".'<p><u>Description:-</u></p>'.$row["description"]."</h2>";
				echo" <br>";

				$filename=explode(".",$row["filename"]);
				if (strpos("jpeg,png,jpg,pjpeg", $filename[1]) !== false) {
				echo '<h2>'.'<p><u>Image :-</u></p>
				<img height="200" width="200" src="uploads/'.$row["filename"].'"><br>
				<a href="uploads/'.$row["filename"].'" download>Download Image</a></h2>';
				}
				else if(strpos("mp4,avi,mov,3gp,mpeg", $filename[1]) !== false){
					echo '<video width="300" height="200" controls>
				<source src="uploads/'.$row["filename"].'" type="video/'.$filename[1].'">
				</video><br><a href="uploads/'.$row["filename"].'" download>Download video</a>';
				}
				else{
					echo '<h2>'.'<p><u>Download Notes:-</u></p><a href="uploads/'.$row["filename"].'" download>Download Document</a></h2>';
				}
				echo" </div> </td></tr>";
				
				}
				}
				
			}          
		}}else
		{ 
			$found="N";echo'<td>You Have not applied to any tutor yet .:)</td>';
		}
}
else{
	echo'<td>Please Login First Go to Home page <a href="studhomepage.php">Home</a> .:)</td>';
}
?></table>