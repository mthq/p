<?php
if($_SESSION['acc_type']==2){
	echo '<li style="list-style-type:none;"><b>User</b></li>';
	echo '<li><a href="#">View</a></li>';
	echo '<li><a href="#">Edit</a></li>';
	echo '<li><a href="#">Add</a></li>';
	echo '<li style="list-style-type:none;"><b>Deal</b></li>';
	echo '<li><a href="#">View</a></li>';
	echo '<li><a href="#">Edit</a></li>';
	echo '<li><a href="#">Add</a></li>';
	}
else{
	$SQL	= "SELECT * FROM category";
	$query	= mysql_query($SQL);
	while($record=mysql_fetch_array($query))
	{
		echo '<li><a href="#">'.$record['cat_name'].'</a></li>';
	}
	
}
?>
