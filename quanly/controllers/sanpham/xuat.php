<?php
require_once("models/sanpham.php");
$db = new sanpham;

$id = $_GET['id'];
$row = $db->get_row_san_pham($id);

$row_xuat = $db->count_xuat_hang_detail($id);
$array = $db->get_list_xuat_hang_detail($id);

require_once("views/sanpham/xuat.php");
unset($db);

