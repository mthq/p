<?php
session_start();


include "db.php";



if (isset($_GET['cat_id'])) {
	$cat_id = $_GET['cat_id'];
	$cat_id = trim(strip_tags($cat_id));
	$cat_id = mysql_escape_string($cat_id);
//	echo $cat_id;
	if ($cat_id == '') {
		unset($cat_id);
	}
	
	
}	if( isset($_POST[login])){

		$loginquery = "select user_id, firstname, surname, username, password, acc_type, email from users where username = '".$_POST['username']."'";
		$loginresult = mysql_query($loginquery) or die("Query Error ".mysql_error());
		$loginrecord = mysql_fetch_array($loginresult, MYSQL_ASSOC);				
		
		if($loginrecord['username'] != Null){
				
				if($loginrecord['password'] == $_POST['password']){
					// print "Welcome this is first run Back! $loginrecord[username]";
					$_SESSION['loggedin']  = "yes";
					$_SESSION['user_name'] = $loginrecord['username'];
					$_SESSION['acc_type']  = $loginrecord['acc_type'];
					$_SESSION['firstname'] = $loginrecord['firstname'];
					$_SESSION['surname']   = $loginrecord['surname'];
					$_SESSION['email']     = $loginrecord['email'];
					$_SESSION['userid']    = $loginrecord['user_id'];
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
    <div id="sign" align="right"><!---------------LOGIN BOX--------------->
     <?php
	if($_SESSION['loggedin']=='yes'){
		echo '<font color="6a0020>">Welcome back! '.$_SESSION['firstname'].' '.$_SESSION['surname'].'</font>';
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
	</div>	<div class="articleBox">
		<div class="articleTitle"><center>Deals</center></div><!---------------PAGE TITLE--------------->
        	<div class="articleContent">
        	<?php
				if($_SESSION['acc_type']==1){
			?>    
        <p><center>We offer Coupon Codes with 20% discount for local shops.</center></p>
			<?php
			}
				include "dealpage.php";
			?>
		</div>
		<strong><br/><!-- <center -->Summer Offer is NOW ON!!!<!-- </center> --></strong>
	</div>
    </div>
</div><!---------------TITLE--------------->
    <div id="footer"><a href="http://www.mthq.net">website design</a> by <a href="mailto:tomasz.sutor@gmail.com">Tomasz Sutor</a> | 
    <a href="http://www.wit.ie">designed for WIT</a></div>
        
</body>
</html>
