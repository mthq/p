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

//-------Firstname
if (sign_f==null || sign_f==""){
	alert("Please provide your First Name");
	document.forms["myform"]["username"].focus();
	return false;
	}
//-------Surname
else if (sign_s==null || sign_s==""){
	alert("Please provide your Surname");
	document.forms["myform"]["surname"].focus();
	return false;
	}
//--------Username
else if (sign_u==null || sign_u==""){
	alert("Please provide Username");
	document.forms["myform"]["username"].focus();
	return false;
	}
else if (sign_u.length <4 || sign_u.length > 10){
	alert("Username must be between 4 and 10 charchters in length");
	document.forms["myform"]["username"].focus();
	return false;
	}
//-------Email	
else if(sign_e==null || sign_e==""){
	alert("Please enter email address");
	document.forms["myform"]["email"].focus();
	return false;
	}		
else if(sign_e.length >30){
	alert("Email cannot be longer than 30 charchters");
	document.forms["myform"]["email"].focus();
	return false;
	}
else if(!sign_e.match(emailaddress)){
	alert("Not a valid email address");
	document.forms["myform"]["email"].focus();
	return false;
	}
//-------Password
else if (sign_p==null || sign_p==""){
	alert("Please enter password");
	document.forms["myform"]["password"].focus();
	return false;
	}
else if (sign_p.length <4 || sign_p.length > 10){
	alert("Password must be between 4 and 10 charchters in length");
	document.forms["myform"]["password"].focus();
	return false;
	}
}