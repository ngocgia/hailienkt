<?php
session_start();
require_once("../../models/database.php");
require_once("../../class/function.php");
require_once("../../models/nhaphang.php");
$db = new nhaphang;

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
			$row_kh = $db->get_row_doi_tac_phone($phone);
			if(isset($row_kh['id']) && $row_kh['id']>0){
				$_SESSION['id_dt'] = $row_kh['id'];
			}else{
				$flag = 0;
				$error='Đối tác chưa đăng ký!';
			}
		}
		break;
}

require_once("../../views/nhaphang/ajax_iddt.php");
unset($db);
