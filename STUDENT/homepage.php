<html>
<head>
<title>Home Tutor's</title>
<link rel="stylesheet" type="text/css" href="sty.css">
<link rel="stylesheet" type="text/css" href="global.css">
<style>
body{
background-attachment: fixed;
background-repeat:no repeat;
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
</head>
<body>
<header>
<div class="title">
<h4>WELCOME To,</h4> 
<h3>HOME TUTOR's</h3> 
<div class="dropdown">
<button class="button btn1"><b>Log In As</b></button>
<div class="dropdown-content">
<a href="#"> ADMIN</a>
<a href="login.php"> TUTOR</a>
<a href="login.php">STUDENT</a>
</div>
</div>&nbsp;&nbsp;&nbsp;&nbsp;
<div class="dropdown">
<button class="button btn2"><b>Register As</b></button>
<div class="dropdown-content">

<a href="tutorreg.php">TUTOR</a>
<a href="stureg.php">STUDENT</a>
</div>
</div>
</header>
</body>
</html>