<form name='login' action = 'index.php' method = 'post' name='loginform'>
<input type	= 'hidden' name = 'option' value = 'login'>
<input type = 'text' name = 'username'>
<input type = 'password' name = 'password'><br>
<input type = 'submit' value='Log In' name='login'>
<input type = 'submit' value='Sign Up' name='register' onclick='return redirect()'>
</form>