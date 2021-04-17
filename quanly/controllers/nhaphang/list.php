<?php
require_once("models/nhaphang.php");
$db = new nhaphang;

if(isset($_POST['search-bt'])==true){
	$start_time = chuyenNT(trim($_POST["start_time"]));
	$end_time = chuyenNT(trim($_POST["end_time"]));
}else{
	$start_time = date("Y").'-'.date("m").'-'.date("d");
	$end_time = date("Y-m-d");
}

$row_sum = $db->count_nhap_hang($start_time,$end_time);
$array = $db->get_list_nhap_hang($start_time,$end_time);

$_SESSION['urlctkt'] = 'act=nhap_hang_list&start_time='.$start_time.'&end_time='.$end_time;

require_once("views/nhaphang/list.php");
unset($db);
