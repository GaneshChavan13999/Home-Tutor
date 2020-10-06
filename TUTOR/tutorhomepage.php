<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Home Tution</title>
<link rel="stylesheet" type="text/css" href="sty.css">
<link rel="stylesheet" type="text/css" href="global.css">

<script src="logout.js"></script>
<script src="studentreg.js"></script>
<script src="jquery-1.7.1.min.js"></script>
<script src="animation.js"></script>

</head>
<body>
<header>
<div class ="main">
<ul>
<li><a href="tutorhomepage.php">HOME</a></li>
<li><a href="about.php">ABOUT US</a></li>
<li><a href="feed.php">NEWSFEED</a></li>
<a href="login.php"><button onclick="onlogin()" class="login"><?php echo $ad_user; ?>LOG IN</button></a>
</ul>
</div>
<div class="title">
<h1>HOME TUTOR's</h1> 
<a href="tutorreg.php" class="button btn1"><b>REGISTER</b></a>
</div>
</header>
</body>
</html>