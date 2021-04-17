<?php
$db = new Account;

if(isset($_POST['edit-bt'])==true){
	$id = trim($_POST["id"]);
	$password = trim($_POST["password"]);
	$name = trim($_POST["name"]);
	$phone = trim($_POST["phone"]);
	$email = trim($_POST["email"]);
	
	$flag=1; $error = "";
	if(strlen($password)>0){
		if(!ktchuoi($password,6,32)){$flag = 0;$error='Mật khẩu từ 6 đến 32 ký tự!';}
	
		if(!ktpass($password)){
			$flag = 0;
			$error = "Mật khẩu mới không hợp lệ!";
		}
	}
	if(!ktchuoi($name,1,100)){$flag = 0;$error='Họ Tên chưa chính xác!';}
	if(!ktchuoi($email,1,100)){$flag = 0;$error='Email chưa chính xác!';}
	if(!ktemail($email)){$flag = 0;$error='Email không chính xác!';}
	if(!ktchuoi($phone,1,15)){$flag = 0;$error='Phone chưa chính xác!';}
	if(!ktphone($phone)){$flag = 0;$error='Phone không chính xác!';}
		
	if($flag){		
		$db->update_tai_khoan($id,$password,$name,$email,$phone);
		$error = 'Sữa thành công!';
	}
}else{
	$id = $_GET['id'];
}

$row = $db->get_tai_khoan($id);
require_once("views/taikhoan/edit.php");

unset($db);

