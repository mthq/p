<?php
mysql_connect("127.0.0.1", "root", "") or die("Could not connect : ".mysql_error());
mysql_select_db("project") or die("Could not select database"); 
?>