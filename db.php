<?php
/******************************************************
* db.php
* connection configuration
******************************************************/
 	$mysql_server = "localhost";
    // admin
    $mysql_admin = "root";
    // password
    $mysql_pass = "";
    // databse
    $mysql_db = "project";
    // connection name
     @mysql_connect($mysql_server, $mysql_admin, $mysql_pass)
    or die('No connection with MySQL.');
    // connection
    @mysql_select_db($mysql_db)
    or die('Error connecting with database');
	$dbc = @mysql_connect($mysql_server, $mysql_admin, $mysql_pass);
?> 

