<?php
session_start();
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
        <div class="subText">For Him</div>
    </div>
<?php
require "menu.php";
?>
	<div id="infBar">Welcome to the site</div>
    <div id="pageContent">
    
    <div class="articleTitle">Our site offers:</div>
        
        
      <div class="articleContent">
      <br/>
      
       <p><font color=#6A0020>Deals - </font></a>Shop offers from your local businesses.<b> Unbelievable prices!</b></br/>
          <p><font color=#6A0020>Daily Deals - </font></a>Time limited offers with huge discount.<b> You can miss out!</b><br/>
          	<p><font color=#6A0020>Coupon Codes</font></a> If you want get things cheap <b> Present this at the check out!</b>
      



          <p>All discount codes and deals only available in partnership with local business participants.</p>
	</div>


    </div>

</div>
    <div id="footer"><a href="http://www.mthq.net">website design</a> by <a href="http://www.tomasz.sutor@gmail.com">Tomasz Sutor</a> | <a href="http://www.wit.ie">designed for WIT</a></div>
        
</body>
</html>
