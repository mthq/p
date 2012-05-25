<?php

require_once "db.php";




if(!isset($_REQUEST['page'])){
   $_REQUEST['page'] = 0;
}
 
 $perPage = 9;

 
if (is_numeric($_REQUEST['page'])){
	$page = (int) $_REQUEST['page'];
	if ($page < 1){
		$page = 1;
	}
}else{
	$page = 1;
}

$start = ($page - 1) * $perPage;


if (isset($cat_id) && (trim($cat_id) != "")){
	$query = 'SELECT * FROM deals'. " WHERE cat_id = '$cat_id' LIMIT $start, $perPage" ;	
}else{
	$query = 'SELECT * FROM deals'. " LIMIT $start, $perPage"; 
	//$query = 'SELECT deals.deal_id, deals.deal_name, deals.deal_price, merchants.mer_name FROM deals INNER JOIN merchants ON deals.merchant_id=merchants.merchant_id'. " LIMIT $start, $perPage"; 
	//echo $query;
	}

$result = mysql_query($query);
	
echo '<form action="dealpage.php" method="GET">';
echo '<br /><table border="1" BORDERCOLOR="#6A0020" cellpadding="5" cellspacing="0" width="500">

		</tr><tr>';
		
$i = 0;
while ($record = mysql_fetch_array($result)){

	if ($i == 3){
	echo'</tr><tr>';
	$i=0;
	}
	echo '<td align="center" valign="top" width="100" height="100">
	<img src=images/'.$record['deal_id'].'.png><br />
	deal: '.$record['deal_name'].'<br />
	price: '.$record['deal_price'].'<br />
	merchant: '.$record['merchant_id'].'<br />
	
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