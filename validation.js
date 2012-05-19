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

//--Sign Up Validation
function validate_signup(){
var sign_f=document.forms["myform"]["firstname"].value;
var sign_s=document.forms["myform"]["surname"].value;
var sign_u=document.forms["myform"]["username"].value;
var sign_e=document.forms["myform"]["email"].value;
var sign_p=document.forms["myform"]["password"].value;

//--Firstname
if (sign_f==null || sign_f==""){
	alert("Please provide your First Name");
	document.forms["login"]["username"].focus();
	return false;
	}
//--Surname
else if (sign_s==null || sign_s==""){
	alert("Please provide your Surname");
	document.forms["login"]["username"].focus();
	return false;
	}
}