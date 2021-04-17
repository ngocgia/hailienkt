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
		$con = strtolower(chuyenChuoi($key));
		$array_san_pham = $db->get_list_san_pham(1,$con,'dayup DESC');
		break;
}

require_once("../../views/nhaphang/ajax_sanpham.php");
unset($db);
