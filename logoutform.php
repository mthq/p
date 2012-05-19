<form name='logout' action = '' method = 'post'>
<input type = 'submit' name='logout' value='Log Out'>
</form>
<?php 
//echo "first";
if (isset($_POST['logout'])){
//echo "second";
session_start();
session_destroy();
//$_SESSION['loggedin'] = FALSE;
header;
}