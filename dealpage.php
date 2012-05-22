<?php
if(!isset($_REQUEST['page']))
{
   $_REQUEST['page'] = 0;
}
 
 $perPage = 9;
 
 
if (is_numeric($_REQUEST['page'])){
	$page = (int) $_REQUEST['page'];
	if ($page < 1){
		$page = 1;
	}
} else {
$page = 1;
}

$start = ($page - 1) * $perPage;
$query = 'SELECT * FROM deals'. " LIMIT $start, $perPage"; 
$result = mysql_query($query);
echo '<form action="index.php" method="GET">';
echo '<br /><table border="1" BORDERCOLOR="#6A0020" cellpadding="5" cellspacing="0" width="500">

		</tr><tr>';
		
$i = 0;
while ($record = mysql_fetch_array($result)) {

	if ($i == 3){
	echo'</tr><tr>';
	$i=0;
	}
	echo '<td align="left" valign="top" width="100" height="100"><img src=/p/image/'.$row['deal_id'].'.png><a href=index.php?id='.$row['deal_id'].'>'.$row['deal_id'].'</a><br />
	<a href=index.php?id='.$record['deal_id'].'>deal: '.$record['deal_name'].'</a><br />
	<a href=index.php?id='.$record['deal_id'].'>price: '.$record['deal_price'].'</a><br />
	<a href=index.php?id='.$record['deal_id'].'>merchant: '.$record['merchant_id'].'</a><br />
	<a href=index.php?id='.$record['deal_id'].'>cat id: '.$record['cat_id'].'</a><br />
	</td>';
	$i++;
}
		echo '</table>';
		echo '</form>';


$prev = $page - 1;
$next = $page + 1;
$prevLink = $_SERVER['PHP_SELF'] . '?page=' . $prev;
$nextLink = $_SERVER['PHP_SELF'] . '?page=' . $next;

echo "<p align='center'><a href='".$prevLink."'>Previous Page</a> | <a href='".$nextLink."'>Next Page</a></p>"

?>