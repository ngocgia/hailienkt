<?php
$db = new Account;

if(isset($_POST['add-bt'])==true){
	$username = $_SESSION['username'] = strtolower(trim($_POST["username"]));
	$password = trim($_POST["password"]);
	$name = $_SESSION['name'] = trim($_POST["name"]);
	$id_type = $_SESSION['id_type'] = trim($_POST["id_type"]);
	$email = $_SESSION['email'] = trim($_POST["email"]);
	$phone = $_SESSION['phone'] = trim($_POST["phone"]);
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$daycrea = date("Y-m-d");
	$active = 1;
	
	$flag=1; $error = "";
	if(strlen($password)>0){
		if(!ktchuoi($password,6,32)){$flag = 0;$error='Mật khẩu từ 6 đến 32 ký tự!';}
	
		if(!ktpass($password)){
			$flag = 0;
			$error = "Mật khẩu mới không hợp lệ!";
		}
	}else{
		$flag = 0;
		$error = "Bạn chưa nhập Mật khẩu!";
	}
	if(strlen($username)>0){
		if(!ktchuoi($username,6,32)){$flag = 0;$error='Tài khoản từ 6 đến 32 ký tự!';}
	
		if(!ktuser($username)){
			$flag = 0;
			$error = "Tài khoản mới không hợp lệ!";
		}
	}else{
		$flag = 0;
		$error = "Bạn chưa nhập Tài khoản!";
	}
	if(!ktchuoi($name,1,100)){$flag = 0;$error='Họ Tên chưa chính xác!';}
	if(!ktchuoi($email,1,100)){$flag = 0;$error='Email chưa chính xác!';}
	if(!ktemail($email)){$flag = 0;$error='Email không chính xác!';}
	if(!ktchuoi($phone,1,15)){$flag = 0;$error='Phone chưa chính xác!';}
	if(!ktphone($phone)){$flag = 0;$error='Phone không chính xác!';}
	
	if($db->check_username_tai_khoan($username)){
		$flag=0;
		$error = "Tài khoản này đã tồn tại!";
	}
	
	if($flag){
		$db->create_tai_khoan($username,$password,$id_type,$name,$email,$phone,$daycrea,$active);
		$error = 'Tạo thành công!';
		unset($_SESSION['username']);
		unset($_SESSION['name']);
		unset($_SESSION['email']);
		unset($_SESSION['phone']);
		unset($_SESSION['id_type']);
	}
}
require_once("views/taikhoan/add.php");
unset($db);

