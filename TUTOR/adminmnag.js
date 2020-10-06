           
function valid()
{
    var oldpwd=window.form1.opwd.value;
    var newpwd=window.form1.npwd.value;
    var rtypwd=window.form1.rtpwd.value;
	var user=window.form1.un.value;
	if(user.length<=0)
	{
	alert("Please Enter Username");
    }
    else if(oldpwd.length<=0){
		alert("Please Enter Old Password");
    }
    else if(newpwd.length<=0){
        alert("Please Enter New Password");
    }
    else if(cfmpwd.length<=0){
        alert("Please Enter Confirm Password");
    }
    else if(oldpwd==newpwd){
        alert("Old Password Is Same As New Password");
    }
    else if(cfmpwd!=newpwd)
    {
        alert("Please enter Confirm password same as New password");
    }
    else{
        document.form1.submit();
    }
}

//adminproc.jsp

function procback()
{
    window.open("adminmnag.php","_self");  
}