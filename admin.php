<?php
require_once "db.php";

//--wchich record to be modified
$confirm = $_POST['change'];
 

if(!isset($_GET['add'])){
	$_GET['add'] = 0;
}else{ 
	$add = $_GET['add'];
}

if (isset($_GET['id'])){
	$nr = $_GET['id'];
	$nr = trim(strip_tags($nr));
	$nr = mysql_escape_string($nr);
echo $nr;
	if ($nr == '') {
		unset($nr);
	}
}
	
if (isset($_GET['del'])){
	$del = $_GET['del'];
	$del = trim(strip_tags($del));
	$del = mysql_escape_string($del);
echo $del;
	if ($del == ''){
		unset($del);
	}
}
//--deleting record
if (isset($del) ){

    $array = $_GET['check'];
	echo ' Value: '.$array;
	
	$sql = 'DELETE FROM deals WHERE deal_id = "'.$array.'"';
	
		echo 'SQL delete: '.$sql;
		if (!mysql_query($sql,$dbc)){
			die('Error: ' . mysql_error());
		}
		echo '<br><hr>DONE!';
}
//--adding record
if (isset($add) && (trim($add) != "")){
		$sql = "insert into deals (deal_name, 	merchant_id, 	deal_price, 	cat_id)
				VALUES
				('$_GET[deal_name]', '$_GET[merchant_id]','$_GET[deal_price]', '$_GET[cat_id]')";
			//	echo $sql;
				if (!mysql_query($sql,$dbc)){
					die('Error: ' . mysql_error());
				}
		echo '<br><hr>ADDED!';
}  

//--modifing entry
	if (isset($nr) && (trim($nr) != "")){
		$sql = 'SELECT * FROM deals where deal_id = '.$nr;
		//echo $sql;
		$result = mysql_query($sql);
		while ($row = mysql_fetch_array($result)){
?>	
				<fieldset>
				<legend><?php echo 'Working on : '.$row['deal_id']?></legend>
				<form action="userpage.php" method="POST">
			
					
<?php       		
	echo '<table border="1" BORDERCOLOR="#6A0020" cellpadding="5" cellspacing="0" width="500"><tr><td>name</td><td>merchant</td><td>price</td><td>cat id</td></tr>';
	echo '<br><td><textarea name="deal_name" cols="8" rows="1" >'.$row['deal_name'].'</textarea></td>
			<td><textarea name="merchant_id" cols="8" rows="1" >'.$row['merchant_id'].'</textarea></td>
			<td><textarea name="deal_price" cols="8" rows="1" >'.$row['deal_price'].'</textarea></td>
			<td><textarea name="cat_id" cols="8" rows="1" >'.$row['cat_id'].'</textarea></td>';

			echo '</table>';
			echo '<input type="submit"  name ="change" value="'.$nr.'">	
			</form>
			</fieldset>';
			}
	}

if (isset($confirm) && (trim($confirm) != "")){
		$sql = 'update deals set deal_name = "'.$_POST['deal_name'].'" , merchant_id = "'.$_POST['merchant_id'].'" ,deal_price = "'.$_POST['deal_price'].'",cat_id = "'.$_POST['cat_id'].'" where deal_id ='.$confirm ;
		//echo $sql;
		if (!mysql_query($sql,$dbc))
			{
				die('Error: ' . mysql_error());
			}
		echo '<br><hr>DONE!';
}
		

	

if($_SESSION['acc_type']=='2'){
	echo '<form action="userpage.php" method="GET">';
	echo '<table border="1" BORDERCOLOR="#6A0020" cellpadding="5" cellspacing="0" width="500"><tr><td>name</td><td>merchant</td><td>price</td><td>cat id</td></tr>';
	echo '<br><td><textarea name="deal_name" cols="8" rows="1" ></textarea></td>
		<td><textarea name="merchant_id" cols="8" rows="1" ></textarea></td>
		<td><textarea name="deal_price" cols="8" rows="1" ></textarea></td>
		<td><textarea name="cat_id" cols="8" rows="1" ></textarea></td>';

		echo '</table>';
		echo '<input type="submit"  name ="add" value="add">		';
		echo '</form>';
		
if(!isset($_REQUEST['page'])){
   $_REQUEST['page'] = 0;
}
 
	$perPage = 9;
 
 
if (is_numeric($_REQUEST['page'])) {
	$page = (int) $_REQUEST['page'];
		if ($page < 1) {
		$page = 1;
		}
} 
else{
	$page = 1;
}
$start = ($page - 1) * $perPage;
$query = 'SELECT * FROM deals'. " LIMIT $start, $perPage"; 
$result = mysql_query($query);
	echo '<form action="userpage.php" method="GET">';
	echo '<br /><table border="1" BORDERCOLOR="#6A0020" cellpadding="5" cellspacing="0" width="500">
		<tr><td align="left" valign="top" width="100" height="10">deal</td>
		<td align="left" valign="top" width="100" height="10">deal</td>
		<td align="left" valign="top" width="100" height="10">deal</td>
		
		</tr><tr>';
		
$count = 0;
while ($record = mysql_fetch_array($result)) {

if ($count == 3){echo '</tr><tr>';
	$count=0;
}
				echo '<td align="left" valign="top" width="100" height="100"><a href=userpage.php?id='.$record['deal_id'].'>'.$record['deal_id'].'</a><br />
				<a href=userpage.php?id='.$record['deal_id'].'>deal: '.$record['deal_name'].'</a><br />
				<a href=userpage.php?id='.$record['deal_id'].'>price: '.$record['deal_price'].'</a><br />
				<a href=userpage.php?id='.$record['deal_id'].'>merchant: '.$record['merchant_id'].'</a><br />
				<a href=userpage.php?id='.$record['deal_id'].'>cat id: '.$record['cat_id'].'</a><br />
				<input type="checkbox" name=check value="'.$record['deal_id'].'" value="true"/>
				</td>';
				$count++;
}
		echo '</table>';
		echo '<input type="submit"  name ="del" value="delete">	';
		echo '</form>';

$prev = $page - 1;
$next = $page + 1;
$prevLink = $_SERVER['PHP_SELF'] . '?page=' . $prev;
$nextLink = $_SERVER['PHP_SELF'] . '?page=' . $next;

echo "<p align='center'><a href='".$prevLink."'>Previous Page</a> | <a href='".$nextLink."'>Next Page</a></p>";
}
?>