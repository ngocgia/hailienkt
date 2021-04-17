<?php
require_once("models/nhanvien.php");
$db = new NhanVien;

if(isset($_POST['edit-bt'])==true){
	$luong = trim($_POST["luong"]);
	$luong_thuc = trim($_POST["luong_thuc"]);
	$info = trim($_POST["info"]);
	$code_month = trim($_POST["code_month"]);
	$code_year = trim($_POST["code_year"]);
	$id = trim($_POST["id"]);
	$flag=1; $error = "";
	
	if(strlen($code_month)==1){
		$code_time = $code_year.'0'.$code_month;
	}else{
		$code_time = $code_year.$code_month;
	}
	
	if($flag){
		$db->update_luong_nhan_vien($id,$luong,$luong_thuc,$info,$code_time);
		$error = 'Sữa Thành Công!';
	}
}else{
	$id = $_GET['id'];
}

$row = $db->get_luong_nhan_vien($id);

require_once("views/nhanvien/edit_luong.php");
unset($db);

