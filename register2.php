<?php
mysql_connect("localhost", "root", "") or die("Could not connect : " . mysql_error());
mysql_select_db("project") or die("Could not select database"); 


if( isset($_GET['register'] )){
$regquery = "insert into users values(NULL, '$_GET[firstname]', '$_GET[surname]', 1, '$_GET[username]', '$_GET[password]' ) "; 
mysql_query($regquery) or die("Query Error ".mysql_error());
header("Location: http://localhost/Project/register2.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Waterford Deals</title>
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
    <div id="sign" align="right">
	<?php
    include('loginform.php');
    ?>
    </div>
   	  <div class="title" align="center">Waterford Deals</div>
        <div class="subText">Discounted goods at you local marketplace</div>
    </div>
<?php
require "menu.php";
?>
    <div id="infBar">Welcome to the site</div>
    <div id="pageContent">
    
    <div class="articleTitle">Thank You for registration!!!</div>
        
       
        <p>We have the most up to date deals and best prices from around your house. Just have a look then head of to the shop and get your item with 20% discount with our coupon code.</p><br/>
       
	</div>
 <strong>Offer is valid until 25th December 2011</strong>

    </div>

</div>
    <div id="footer"><a href="http://www.mthq.net">website design</a> by <a href="mailto:tomasz.sutor@gmail.com">Tomasz Sutor</a> | <a href="http://www.wit.ie">designed for WIT</a></div>
        
</body>
</html>
