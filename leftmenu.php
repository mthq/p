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
	$query	= "SELECT * FROM category";
	$queryresult	= mysql_query($query);
	echo '<form action="dealpage.php" method="GET">';
	while($record=mysql_fetch_array($queryresult))
	{
		echo '<li><a href=dealpage.php?cat_id='.$record['cat_id'].'>'.$record['cat_name'].'</a></li>';
	}echo '</form>';
	
}
?>
