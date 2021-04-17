<?php
require_once("models/khachhang.php");
$db = new khachhang;

$id = $_GET['id'];
$row = $db->get_row_khach_hang($id);

$row_xuat = $db->count_xuat_hang_detail($id);
$array = $db->get_list_xuat_hang_detail($id);

require_once("views/khachhang/xuat.php");
unset($db);

