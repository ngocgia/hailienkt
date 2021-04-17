<?php
require_once("models/xuathang.php");
$db = new xuathang;

if(isset($_POST['search-bt'])==true){
	$start_time = chuyenNT(trim($_POST["start_time"]));
	$end_time = chuyenNT(trim($_POST["end_time"]));
}else{
	$start_time = date("Y-m-d");
	$end_time = date("Y-m-d");
}

$row_sum = $db->count_xuat_hang($start_time,$end_time);
$array = $db->get_list_xuat_hang($start_time,$end_time);

$_SESSION['urlctkt'] = 'act=xuat_hang_list&start_time='.$start_time.'&end_time='.$end_time;

require_once("views/xuathang/list.php");
unset($db);
