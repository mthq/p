<?php
session_start();


include "db.php";

	if( isset($_POST[login]) ){

		$loginquery = "select firstname, surname username, password, acc_type from users where username = '".$_POST['username']."'";
		$loginresult = mysql_query($loginquery) or die("Query Error ".mysql_error());
		$loginrecord = mysql_fetch_array($loginresult, MYSQL_ASSOC);				
		
		if($loginrecord['username'] != Null){
				
				if($loginrecord['password'] == $_POST['password']){
					// print "Welcome this is first run Back! $loginrecord[username]";
					$_SESSION['loggedin']  = "yes";
					$_SESSION['user_name'] = $loginrecord['username'];
					$_SESSION['acc_type']  = $loginrecord['acc_type'];
					$_SESSION['furstname'] = $loginrecord['firstname'];
					$_SESSION['surname']   = $loginrecord['surname'];
				}else print "Wrong Username or Password";
				
			}else print "Wrong username";


	}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Waterford Deals</title>
	<meta name="description" content="Christmas Shoppong coupons" />
	<meta name="keywords" content="HTML,CSS" />
	<meta name="author" content="Tomasz Sutor" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script language="javascript" src="validation.js"></script>
<style type="text/css">
</style></head>
<body>
<div id="page"> 
    <div id="header"><!---------------HEADER--------------->
    <div id="sign" align="right">
     <?php
	if($_SESSION['loggedin']=='yes'){
		echo 'Welcome back! '.$_SESSION['user_name'];
		include('logoutform.php');
	}
	else{
		if(!isset($_SESSION['loggedin'])){
			include('loginform.php');
		}
		
	}
    ?>
    </div><!---------------TITLE--------------->
<div class="title">Waterford Deals</div>
        <div class="subText">Discounted goods at you local marketplace</div>
   	 </div>
 			<div id="bar"><!--MENU-->
     	 	  <div class="menuLink"><a href="index.php">Deals</a></div>
   	    		 <div class="menuLink"><a href="dailydeals.php">Daily Deals</a></div>
     			   <div class="menuLink"><a href="coupons.php">Coupons</a></div>
      				  <div class="menuLink"><a href="howitworks.php">How?</a></div>
     					   <div class="menuLink"><a href="contact.php">Contact</a></div>
     </div>
    <div id="infBar">welcome to the site</div>
    <div id="pageContent"><!---------------PAGE--------------->
    
	<div class="articleMenu">
	<ul id="menuList">
		<?php
		include('leftmenu.php');
		?>
	</ul>
	</div>
	
	<div class="articleBox">
		
		<div class="articleTitle"><center>Deals</center></div><!---------------PAGE TITLE--------------->
        <?php
		if($_SESSION['acc_type']==1)
		{
		?>
		<div class="articleContent"><!---------------PAGE CONTENT--------------->
      
        <p>We offer Coupon Codes for your Christmas shopping with 20% discount at local shops.</p><br />
        <p>This site list all local merchants and sellers from Waterford participating in this program. 
        If you wish to join us please visit <a href="contact.php#Contact"><strong>Contact</strong></a> tab.</p><br />
        <p>We are here to help you with your Christmas Shopping and we advertise only Waterford shops. If you looking for a gift idea for you Children, Brother or Sister you are in right place. All items can be picked up locally.  </p><br />
        <p>We have the most up to date deals and best prices from around your house. Just have a look then head of to the shop and get your item with 20% discount with our coupon code.</p><br/>
		</div>
		<?php
		}
		include "dealtable.php";
		?>
	</div>
 <strong><br/>Summer Offer is NOW ON!!!</strong>

    </div>

</div><!---------------TITLE--------------->
    <div id="footer"><a href="http://www.mthq.net">website design</a> by <a href="mailto:tomasz.sutor@gmail.com">Tomasz Sutor</a> | <a href="http://www.wit.ie">designed for WIT</a></div>
        
</body>
</html>
