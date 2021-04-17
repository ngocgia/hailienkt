<?php
session_start();
require_once("../../models/database.php");
require_once("../../class/function.php");
require_once("../../models/xuathang.php");
$db = new xuathang;

$act = $_GET['act'];
switch($act){
	case 'search_key':
		$key = $_GET['key'];
		$key = preg_replace('/\./',' ', $key);
		$phone = strtolower(chuyenChuoi($key));
		$flag = 1;
		if(!ktchuoi($phone,10,10)){$flag = 0;$error='Chưa đủ 10 số!';}
		if(!ktphone($phone)){$flag = 0;$error='Không đúng!';}
		if($flag){
			$row_kh = $db->get_row_khach_hang_phone($phone);
			if(isset($row_kh['id']) && $row_kh['id']>0){
				$_SESSION['id_kh'] = $row_kh['id'];
			}else{
				$flag = 0;
				$error = 'Khách hàng chưa đăng ký!';
			}
		}
		break;
	case 'xoakh':
		$flag = 0;
		$error = 'Vui lòng nhập chính xác số điện thoại';
		unset($_SESSION['id_kh']);
		break;
}

require_once("../../views/xuathang/ajax_khachhang.php");
unset($db);
