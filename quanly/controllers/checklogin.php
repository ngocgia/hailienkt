<?php 
	$tk = new Account;
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$dayup=date("Y-m-d H:i:s");
	if(isset($_SESSION['timectkt']) && (strtotime($dayup)-strtotime($_SESSION['timectkt']))>3600){
		unset($_SESSION['userctkt']);
		unset($_SESSION['passctkt']);
		unset($_SESSION['timectkt']);
		echo '<script type="text/javascript">alert("Please login again!");window.location ="index.php"; </script>';
	}
	
	$username = $_SESSION['userctkt'];
	$password = $_SESSION['passctkt'];
	if($tk->check_acc($username,$password,$dayup)==FALSE){
		unset($_SESSION['userctkt']); unset($_SESSION['passctkt']);
		echo '<script type="text/javascript">alert("'.$tk->error.'");window.location ="index.php"; </script>';
	}
	unset($tk);