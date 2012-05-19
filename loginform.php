<form name='login' action = 'index.php' method = 'post' name='loginform' onsubmit="return validate_login()">
<input type	= 'hidden' name = 'option' value = 'login'>
<input type = 'text' name = 'username'>
<input type = 'password' name = 'password'><br>
<input type = 'submit' value='Log In' name='login'>
<input type = 'button' value='Sign Up' name='register' onclick="location.href='register.php'">
</form>

