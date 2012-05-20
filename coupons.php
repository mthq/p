<?php
session_start();

include("/Applications/XAMPP/xamppfiles/htdocs/Project/db.php");
include "sessioncheck.php";

$dealquery = "select * from deals";
$dealres = mysql_query($dealquery);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Christmas gifts</title>
	<meta name="description" content="Christmas Shoppong coupons" />
	<meta name="keywords" content="HTML,CSS" />
	<meta name="author" content="Tomasz Sutor" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">

</style></head>
<body>
<div id="page"> 
    <div id="header">
<?php
include "login.php";
?>
    	<div class="title">Waterford Deals</div>
        <div class="subText">For Her</div>
    </div>
<?php
require "menu.php";
?>
	<div id="infBar">Welcome to the site</div>
    <div id="pageContent">
    
    <div class="articleTitle">Spoil your self or your beloved one!</div>
        
        
      <div class="articleContent">
      
          <p>Use our Christmas coupons code in one of the shops below:</p><br>
          
<?php

while($dealrecord = mysql_fetch_array($dealres, MYSQL_ASSOC)){
print "$dealrecord[deal_id] <p/>";
}

?>
          
<table border="1" bordercolor="#6A0020" style="background-color:#DEBB73" width="600" cellpadding="5" cellspacing="3">
	<tr>
		<td>
			<dl>
<dt><a href="http://www.goldenpages.ie/mulligans-pharmacy-waterford/14/"><font color=#6A0020>Mulligans Pharmacy</font></a></dt>
				<dd>coupon <b>AC4T2B</b></dd>
			</dl>
		</td>
		<td>
			<dl>
<dt><a href="http://www.goldenpages.ie/boots-retail-irl-ltd-waterford/1/"><font color=#6A0020>Boots</font></a></dt>
				<dd>coupon <b>9ELQ7k</b></dd>
			</dl></td>
		<td>
			<dl>
<dt><a href="http://www.goldenpages.ie/wacky-shoes-waterford/1/"><font color=#6A0020>Wacky Shoes</font></a></dt>
				<dd>coupon <b>nnJ99v</b></dd>
			</dl>
			</td>
		<td>
		<dl>
<dt><a href="http://www.goldenpages.ie/carolines-beauty-salon-waterford/1/"><font color=#6A0020>Carolines Beauty Salon</font></a></dt>
				<dd>coupon <b>J6dz3u</b></dd>
		</dl>
		</td>
	</tr>
</table>


        <br><p>All shops are offering gift vouchers and exclusive Christmas packages. Go on try it! Remember with one of the codes you have 20% discount and the offer is valid until 25th December 2011</p>
	</div>


    </div>

</div>
    <div id="footer"><a href="http://www.mthq.net">website design</a> by <a href="http://www.tomasz.sutor@gmail.com">Tomasz Sutor</a> | <a href="http://www.wit.ie">designed for WIT</a></div>
        
</body>
</html>
