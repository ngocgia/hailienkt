<?php
require_once("models/khachhang.php");
$db = new khachhang;

$id = $_GET['id'];
$row = $db->get_row_khach_hang($id);

$row_xuat = $db->count_xuat_hang_detail($id);

require_once("views/khachhang/detail.php");
unset($db);

