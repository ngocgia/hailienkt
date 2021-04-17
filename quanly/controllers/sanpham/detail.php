<?php
require_once("models/sanpham.php");
$db = new sanpham;

$id = $_GET['id'];
$row = $db->get_row_san_pham($id);
$arr = explode(".",$row['id_type']);
$ten = '';
if((int)$arr[0]>0){
	$row_1 = $db->get_row_san_pham_type_1((int)$arr[0]);
	$ten .= $row_1['name'];
}
if(isset($arr[1]) && (int)$arr[1]>0){
	$row_2 = $db->get_row_san_pham_type_2((int)$arr[1]);
	$ten .= ' -> '.$row_2['name'];
}

$row_xuat = $db->count_xuat_hang_detail($id);
$row_nhap = $db->count_nhap_hang_detail($id);

require_once("views/sanpham/detail.php");
unset($db);

