<?php
$user = new Account;

if(isset($_POST['edit-bt'])==true){
	$flag=1; $error = "";
	
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$phone = trim($_POST["phone"]);
	if(!ktemail($email)){$flag = 0;$error='Email không chính xác!';}
	if(!ktphone($phone)){$flag = 0;$error='Phone không chính xác!';}
	
	$old_password = trim($_POST["old_password"]);
	$new_password = trim($_POST["new_password"]);
	$renew_password = trim($_POST["renew_password"]);	
	$username = $_SESSION['userctkt'];		
	
	if(strlen($new_password)>0){
		if($new_password!=$renew_password){
			$flag = 0;
			$error = "Mật khẩu mới không khớp nhau!";
		}else{
			if(!ktpass($new_password)){$flag = 0;$error='Mật khẩu mới không hợp lệ!';}
			if (!$user->check_change_pass($username,$old_password)){$flag=0;$error = "Mật khẩu cũ không chính xác!";}
		}
	}
	
	if($flag){
		$user->update_acc($username,$name,$email,$phone,$old_password,$new_password);
		$error = 'Thay đổi thành công!';
	}
}
$username = $_SESSION['userctkt'];
$row = $user->get_acc($username);

require_once("views/taikhoan/thongtintaikhoan.php");
unset($user);

