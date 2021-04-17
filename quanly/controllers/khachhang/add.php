<?php
require_once("models/khachhang.php");
$db = new khachhang;

if(isset($_POST['add-bt'])==true){	
    $name = $_SESSION['name'] = trim($_POST["name"]);
	$phone = $_SESSION['phone'] = trim($_POST["phone"]);
	$email = $_SESSION['email'] = trim($_POST["email"]);
	$birthday = $_SESSION['birthday'] = trim($_POST["birthday"]);
	$address = $_SESSION['address'] = trim($_POST["address"]);
	$dayup = date("Y-m-d H:i:s");
	$daycrea = date("Y-m-d");
	$active = 1;
    $flag=1; $error = "";
    if(!ktchuoi($name,1,200)){$flag = 0;$error='Lỗi nhập tên!';}
	if(!ktchuoi($phone,10,10)){$flag = 0;$error='Lỗi nhập điện thoại!';}
	if(!ktphone($phone)){$flag = 0;$error='Lỗi nhập điện thoại!';}
	
	if($db->check_phone_khach_hang($phone)){
		$flag = 0;
		$error='Số điện thoại này đã có!';
	}
	
    if($flag){
		$key_search = strtolower(chuyenChuoi($name.' '.$phone.' '.$email.' '.$address));
        $db->create_row_khach_hang($name,$phone,$email,$birthday,$address,$key_search,$daycrea,$dayup,$active);
        $error = 'Tạo Thành Công!';
    }
}

require_once("views/khachhang/add.php");
unset($db);
