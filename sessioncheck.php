<?php
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
					$_SESSION['firstname'] = $loginrecord['firstname'];
					$_SESSION['surname']   = $loginrecord['surname'];
				}else print "Wrong Username or Password";
				
			}else print "Wrong username";


	}
?>