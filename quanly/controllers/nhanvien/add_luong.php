<?php
require_once("models/nhanvien.php");
$db = new NhanVien;

if(isset($_POST['add-bt'])==true){
	$luong = trim($_POST["luong"]);
	$luong_thuc = trim($_POST["luong_thuc"]);
	$info = trim($_POST["info"]);
	$code_month = trim($_POST["code_month"]);
	$code_year = trim($_POST["code_year"]);
	$id = trim($_POST["id"]);
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$daycrea = date("Y-m-d");
	$flag=1; $error = "";
	
	if(strlen($code_month)==1){
		$code_time = $code_year.'0'.$code_month;
	}else{
		$code_time = $code_year.$code_month;
	}
	
	if($flag){
		$db->create_luong_nhan_vien($id,$luong,$luong_thuc,$info,$code_time,$daycrea);
		$error = 'Tạo Thành Công!';
	}
}else{
	$id = $_GET['id'];
}
$row = $db->get_nhan_vien($id);

require_once("views/nhanvien/add_luong.php");
unset($db);

