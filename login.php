   <div id="sign" align="right">
     <?php
	if($_SESSION['loggedin']=='yes'){
		echo 'Welcome back! '.$_SESSION['firstname'].$_SESSION['surname'];
		include('logoutform.php');
	}
	else{
		if(!isset($_SESSION['loggedin'])){
			include('loginform.php');
		}
		
	}
    ?>
    </div>