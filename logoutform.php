<form name='logout' action = '' method = 'post'>
<input type = 'button' value='Account' name='account' onclick="location.href='account.php'">
<input type = 'submit' name='logout' value='Log Out'>
</form>
<?php 
if (isset($_POST['logout'])){
session_start();
session_destroy();
$_SESSION['loggedin']  = null;
}