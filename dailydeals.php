<?php
session_start();


include "db.php";

if( isset($_POST['login']) ){

		$loginquery = "select username, password from users where username = '".$_POST['username']."'";
		$loginresult = mysql_query($loginquery) or die("Query Error ".mysql_error());
		$loginrecord = mysql_fetch_array($loginresult, MYSQL_ASSOC);

			if($loginrecord['username'] != Null){
				if($loginrecord['password'] == $_POST['password']){
					
					$_SESSION['loggedin'] = "yes";
					$_SESSION['user_name'] = $loginrecord['username'];
					$_SESSION['acc_type'] = $loginrecord['acc_type'];
				
				}else print "Wrong Username or Password";
				
			}else print "Wrong username";


	}

include "head.php";//---head
?>
<body>
<div id="page"> 
    <div id="header">
    <?php
    include "login.php";
    ?>
    	<div class="title">Waterford Deals</div>
        <div class="subText">For Kids</div>
    </div>
<?php
require "menu.php";
?>
	<div id="infBar">Welcome to the site</div>
    <div id="pageContent">
    
	<div class="articleMenu">
	<ul id="menuTitle">
		<?php
		include('leftmenu.php');
		?>
	</ul>
	</div>
	
	<div class="articleBox">
	
	
    <div class="articleTitle">Gifts for toddlers</div>
        
        
      <div class="articleContent">
      
          <a href="http://www.toys.ie/"><font color=#6A0020>SMYTHS</font></a> coupon <b>WB4T3B</b>
      <p>Gifts from the biggest toys retailer in Ireland:</p>    
      </div>
    
    <table border="1" BORDERCOLOR="#6A0020" cellpadding="5" cellspacing="0" width="500">
	<tr><td align="left" valign="top" width="100" height="100">
<a href="http://www.toys.ie/Games--Puzzles-!WCAT09-cat.aspx" target="_blank"><img src="toy1.jpg" width="100" height="100"/>


	</td><td align="left" valign="top" width="100" height="100">

<a href="http://www.toys.ie/Soft-Toys-!WCAT63-cat.aspx" target="_blank"><img src="toy2.jpg" width="100" height="100"/>
BLA

	</td><td align="left" valign="top" width="100" height="100">

<a href="http://www.toys.ie/Search/Shop_Product_List.aspx?Profile=Euro&query=cars" target="_blank"><img src="toy3.jpg" width="100" height="100"/>

	</td></table>

 <div class="articleTitle">Gifts for infants</div>
        
        
      <div class="articleContent">
      
          <a href="www.mothercare.ie"></a>

	</td></tr></table>
	<br>
	<div id="tbl">
    <div id="cell">
     Remember offer valid until <b>25th December 2011</b>
    </div>
    </div>
       </div>   
     </div>
     </div>

</div>
    <div id="footer"><a href="http://www.mthq.net">website design</a> by <a href="http://www.tomasz.sutor@gmail.com">Tomasz Sutor</a> | <a href="http://www.wit.ie">designed for WIT</a></div>
    
</body>
</html>
