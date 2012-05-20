   <div id="sign" align="right">
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
    </div>