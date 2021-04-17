<?php
session_start();
require_once("../../models/database.php");
require_once("../../class/function.php");
require_once("../../models/nhaphang.php");

$db = new nhaphang;
$act = $_GET['act'];
switch($act){
	case 'xoa':
		$idtd = $_GET['idtd'];
		deleteGio_nhap($idtd);
		break;
	case 'tang':
		$idtd = $_GET['idtd'];
		$row_td = $db->get_row_san_pham($idtd);
		$gia = $row_td['price'];
		tangGio_nhap($idtd,$gia);
		break;
	case 'giam':
		$idtd = $_GET['idtd'];
		giamGio_nhap($idtd);
		break;
}

require_once("../../views/nhaphang/ajax_gio.php");

unset($db);
