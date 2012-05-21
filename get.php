<?php
mysql_connect("localhost","root","") or die ("Query Error ".mysql_error());
mysql_select_db("project") or die ("Query Error ".mysql_error());

$id = addslashes $_REQUEST['id'];

$image = mysql_query ("SELECT * FROM store WHERE id=$id");
$image = mysql_fetch_assoc($image);
$image = $image['image'];

header("Content-type: image/jpeg");

?>