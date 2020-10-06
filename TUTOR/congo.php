<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset charset=utf-8" />
<title> Login Form </title>
<link type ="text/css" rel="stylesheet" href="style.css"/>
<link type ="text/css" rel="stylesheet" href="congo.css"/>
</head>
<body>
<div class="cong">
<form>
<?php
echo '<p style=color:white>'.$_SESSION["name"].'</p>';
?>
<h2 style="color:white"> Congratulations you Log IN succesfully!! </h2> <br>
<a href="homepagelogin.php"><input type="button" value="OK"></a><br>
<br>
</form>
</div>
</body>
</html>