<?php
session_start();
require_once("../../models/database.php");
require_once("../../class/function.php");
require_once("../../models/xuathang.php");

$db = new xuathang;
$act = $_GET['act'];
switch($act){
	case 'xoa':
		$idtd = $_GET['idtd'];
		deleteGio($idtd);
		break;
	case 'tang':
		$idtd = $_GET['idtd'];
		$row_td = $db->get_row_san_pham($idtd);
		if($row_td['sale']>0){
			$gia = $row_td['price']*(100-$row_td['sale'])/100;
		}else{
			$gia = $row_td['price'];
		}
		tangGio($idtd,$gia);
		break;
	case 'giam':
		$idtd = $_GET['idtd'];
		giamGio($idtd);
		break;
}

require_once("../../views/xuathang/ajax_gio.php");

unset($db);
