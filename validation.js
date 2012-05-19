var alphanumeric = /^[0-9a-zA-Z]+$/;
var numeric = /^[0-9]+$/;
var alpha = /^[a-zA-Z]+$/;
var phonenumber = /^[0-9 \-()]+$/;
var emailaddress = /^([0-9a-zA-Z_\.\-])+\@(([0-9a-zA-Z\-])+\.)+([0-9a-zA-Z]{2,4})+$/;

//--Login Validation
function validate_login(){
var login_n=document.forms["login"]["username"].value;
var login_p=document.forms["login"]["password"].value;

if (login_n==null || login_n==""){//--Username
	alert("Please enter Username");
	document.forms["login"]["username"].focus();
	return false;
	}
else if (login_p==null || login_p==""){//--Password
	alert("Please enter your password");
	return false;
	}	
}
