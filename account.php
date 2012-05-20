<?php
session_start();
include "db.php";


if (isset($_POST['updatename'])){
	
	$query = "Update users SET firstname = '".$_POST['firstname']."' WHERE user_id = '".$_SESSION['userid']."'";
	$result = mysql_query($query) or die("Query Error ".mysql_error());
}
if (isset($_POST['updatesurname'])){
	
	$query = "Update users SET surname = '".$_POST['surname']."' WHERE user_id = '".$_SESSION['userid']."'";
	$result = mysql_query($query) or die("Query Error ".mysql_error());
}
if (isset($_POST['updateemail'])){
	
	$query = "Update users SET email = '".$_POST['email']."' WHERE user_id = '".$_SESSION['userid']."'";
	$result = mysql_query($query) or die("Query Error ".mysql_error());
}



$query = "SELECT firstname, surname, email FROM users WHERE user_id = '".$_SESSION['userid']."'";
$result = mysql_query($query) or die("Query Error ".mysql_error());
$record = mysql_fetch_array($result, MYSQL_ASSOC);
?>

<table>
<tr><td>Firstname<td><td><?php echo $record['firstname'];?></td>
<form name='updatename' action = '' method = 'post'>
<td><input type = 'text' name = 'firstname'></td></td>
<td><input type = 'submit' value='Update' name='updatename'></td>
</form></tr>


<tr><td>Surname<td><td><?php echo $record['surname'];?></td>
<form name='updatesurname' action = '' method = 'post'>
<td><input type = 'text' name = 'surname'></td></td>
<td><input type = 'submit' value='Update' name='updatesurname'></td>
</form></tr>

<tr><td>Email<td><td><?php echo $record['email'];?></td>
<form name='updateemail' action = '' method = 'post'>
<td><input type = 'text' name = 'email'></td></td>
<td><input type = 'submit' value='Update' name='updateemail'></td>
</form></tr>

</table>

