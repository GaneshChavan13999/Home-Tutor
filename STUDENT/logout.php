<?php
session_start();
?>
<script> 
function onlogout()
 {		
		var opt=confirm("Do You Want To Logout??");
		if(opt==true)
		{
			<?php session_destroy();
			?>
			//window.open("login.php","_self"); 
window.location.replace("http://localhost/HOME/STUDENT/login.php");
		}
}
onlogout();
</script>		  