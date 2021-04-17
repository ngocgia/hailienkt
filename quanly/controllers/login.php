<?php 
if(isset($_POST['login'])){
	$db = new Account;
	$flag = 1;$error = '';
	
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$dayup=date("Y-m-d H:i:s");
	
	// $mxn = trim($_POST["mxn"]);	
	// if(!ktmxn($mxn)){$flag = 0;$error='** Mã xác nhận không đúng!';}
	
	if(isset($_POST['username'])){$username = trim($_POST['username']);}
		else {$username = NULL;}

	if(isset($_POST['password'])){$password = trim($_POST['password']);}
		else {$password = NULL;}
	
	if($flag==1){
		if($db->check_acc($username,$password,$dayup)){		
			$_SESSION['userctkt'] = $username;
			$_SESSION['passctkt'] = $password;
			if(isset($_SESSION['urlctkt'])){
				$url = '?'.$_SESSION['urlctkt'];
			}else{
				$url = '';
			}
			echo '<script type="text/javascript">window.location ="index.php'.$url.'"; </script>';
		}else{
			$error = $db->error;
		}
	}
	
	unset($db);
}

if(isset($_POST['gbpw'])){
	// xu ly lay lai mat khau
	$db = new Account;
	$mxn = trim($_POST["mxn1"]);
	$flag = 1;
	if(!ktmxn1($mxn)){$flag = 0;$error='** Mã xác nhận không đúng!';}	
	$username = strtolower(trim($_POST["username1"]));
	$email = strtolower(trim($_POST["email"]));
	$acc = $db->get_acc($username);
	if($acc['email']!=$email){$flag = 0;$error='Thông tin không chính xác!';}
	if($flag){
		$password = uniqid();
		$db->change_pass($username,$password);
		
		//Gui Email	
		require 'class/lib/class.phpmailer.php';
		require 'class/lib/PHPMailerAutoload.php';
		$mail = new PHPMailer;

		$mail->Host = 'localhost';
		$mail->SMTPAuth = true; 
		$mail->Username = 'support@tk-kt.vn';
		$mail->Password = 'Fa12~8tk@';
		$mail->SMTPSecure = 'tls';
		//$mail->Port = 25;
		
		$mail->setFrom('support@tk-kt.vn', 'TK-KT Suport');
		$mail->addAddress($email, 'TK-KT Suport');     // Add a recipient
		
		$mail->CharSet = "utf-8";
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'Lấy lại mật khẩu tài khoản:';
		$mail->Body    = '<h1>Hi!</h1><br/><p>Tài khoản: '.$username.'</p><p>Mật khẩu mới: <b>'.$password.'</b></p><br/><p>Thanks,</p>';
		//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		$mail->send();
		
		$error='Đã gửi mật khẩu mới tới mail của bạn!';
	}
	
	unset($db);
}

require_once("views/login.php");

