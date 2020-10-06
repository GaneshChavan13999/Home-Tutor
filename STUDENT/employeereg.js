function onback()
{
    window.open("usermanag.php","_self");
}
           
function valid()
{
    var empname=document.form1.empname.value;
    var dob=document.form1.dob.value;
    var contact=document.form1.contact.value;
    var email=document.form1.email.value;
    var klang=document.form1.klang.value;           
    var address=document.form1.address.value;
    var pin=document.form1.pin.value;
    var state=document.form1.state.value;
    var city=document.form1.city.value;
    var country=document.form1.country.value;
    var sub=document.form1.sub.value;
    var user=document.form1.username.value;
    var pwd=document.form1.pswd.value;
    var jdate=document.form1.jdate.value;
    var salary=document.form1.salary.value;
 
               
    if(empname.length=="")
    {
        alert("Enter Employee Name");
		document.form1.empname.focus();
		return false;
    }
	if(!isNaN(empname))
    {
        alert("Enter Employee Name Alphbates Only");
		document.form1.empname.focus();
		return false;
    }
    if(dob.length=="")
    {
        alert("Enter Birth Date");
		document.form1.dob.focus();
		return false;
    }
	if(isNaN(contact))
    {
        alert("Enter Valid Contact Number");
		document.form1.contact.focus();
		return false;
    }
    if(contact.length=="")
    {
        alert("Enter Contact Number");
		document.form1.contact.focus();
		return false;
    }
    if(contact.length!=10)
    {
        alert("Enter 10 Digit Contact Number");
		document.form1.contact.focus();
		return false;
    }  
	if(!email.match(/(.+)@(.+){2,}\.(.+){2,}/))
    {
        alert("Enter Email Address");
		document.form1.email.focus();
		return false;
	}
    if(klang.length=="")
    {
        alert("Enter Known Languages");
		document.form1.klang.focus();
		return false;
    }
	if(!isNaN(klang))
    {
        alert("Enter Known Languages As Aplabates Only");
		document.form1.klang.focus();
		return false;
    }
    if(address.length=="")
    {
        alert("Enter Address");
		document.form1.address.focus();
		return false;
    }
    if(pin.length!=6)
    {
        alert("Enter 6 Digit Pincode");
		document.form1.pin.focus()
		return false;
    }
	if(isNaN(pin))
    {
        alert("Enter 6 Digit Pincode As Number");
		document.form1.pin.focus()
		return false;
    }
    if(city.length=="")
    {
        alert("Enter City");
		document.form1.city.focus();
		return false;
    }
	if(!isNaN(city))
    {
        alert("Enter City Name Alphbates Only");
		document.form1.city.focus();
		return false;
    }
    if(sub.length=="")
    {
        alert("Enter Teching Subject");
		document.form1.sub.focus();
		return false;
    }
    if(user.length=="")
    {
        alert("Enter Username");
		document.form1.username.focus();
		return false;
    }
    if(pwd.length=="")
    {
        alert("Enter Password");
		document.form1.pswd.focus();
		return false;
    }
    if(jdate.length=="")
    {
        alert("Select JoinDate");
		document.form1.jdate.focus();
		return false;
    }
    if(salary.length=="")
    {
        alert("Enter Salary");
		document.form1.salary.focus();
		return false;
    }
	if(salary<1000)
    {
        alert("Enter Amount More Than 1000");
		document.form1.salary.focus();
		return false;
    }
	if(salary>60000)
    {
        alert("Enter Amount Less Than 60000");
		document.form1.salary.focus();
		return false;
    }
	document.form1.submit();
	return true();

}


//employeeregproc.php
function onbackemp()
{
    window.open("employeereg.php","_self");
}