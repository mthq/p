<?php
session_start();


include "db.php";//--Database connection


include "head.php";//---Head
?>
<body>
<div id="page"> 
    <div id="header">
<?php
include "login.php";//--Login Form
?>
    	<div class="title">Waterford Deals</div>
        <div class="subText">Limited time offer!</div>
    </div>
<?php
require "menu.php";//--Menu Bar
?>
	<div id="infBar">Welcome to the site.</div>
    <div id="pageContent">
    <div class="articleMenu">
	<ul id="menuList">
<?php
include('leftmenu.php');//--Left Menu
?>
	</ul>
	</div>
	
	<div class="articleBox"><!-- Right Content -->
    	<div class="articleTitle"><center>Daily Deals</center></div>
      		<div class="articleContent">
      
        <?php
		if(!isset($_SESSION['loggedin'])){
      
        echo '<p><center>To see great daily and limited offers please log in</center></p>';
        }
		else{
		include "dealtable.php";
		}
		?>
    
<!--
<table border="1" BORDERCOLOR="#6A0020" cellpadding="5" cellspacing="0" width="500">
	<tr>
		<td align="left" valign="top" width="100" height="100">
			<a href="http://www.toys.ie/Games--Puzzles-!WCAT09-cat.aspx" target="_blank">
			<img src="toy1.jpg" width="100" height="100"/>
		</td>
	
		<td align="left" valign="top" width="100" height="100">
			<a href="http://www.toys.ie/Soft-Toys-!WCAT63-cat.aspx" target="_blank">
			<img src="toy2.jpg" width="100" height="100"/>
		</td>
	
		<td align="left" valign="top" width="100" height="100">
			<a href="http://www.toys.ie/Search/Shop_Product_List.aspx?Profile=Euro&query=cars" target="_blank">
			<img src="toy3.jpg" width="100" 		height="100"/>
		</td>
	</tr>
</table>
-->
				
				 <strong><br/><center>Summer Offer is NOW ON!!!</center></strong>
			</div>   
		</div>
	</div>
</div>
    <div id="footer"><a href="http://www.mthq.net">website design</a> by <a href="http://www.tomasz.sutor@gmail.com">Tomasz Sutor</a> | <a href="http://www.wit.ie">designed for WIT</a></div>
    
</body>
</html>
