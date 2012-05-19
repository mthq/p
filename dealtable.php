<?php
$sql = 'SELECT * FROM deals';
$result = mysql_query($sql);

  	echo '<br/><br/><table border="1" BORDERCOLOR="#6A0020" cellpadding="5" cellspacing="0" width="500">';
     		$i = 0;
 			 while ($row = mysql_fetch_array($result)){ 
 			 if ($i == 3){
  			 echo '</tr><tr>';
       		$i=0;
       		}
    echo '<td align="left" valign="top" width="100" height="100"><a href=index.php?id='.$row['deal_id'].'>'.$row['deal_id'].'</a><br />
    <a href=index.php?id='.$row['deal_id'].'>'.$row['deal_name'].'</a><br />
    <a href=index.php?id='.$row['deal_id'].'>'.$row['deal_price'].'</a>
    </td>';
     $i++;
   }
  echo '</table>';
		?>