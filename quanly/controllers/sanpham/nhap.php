<?php
require_once("models/sanpham.php");
$db = new sanpham;

$id = $_GET['id'];
$row = $db->get_row_san_pham($id);

$row_nhap = $db->count_nhap_hang_detail($id);
$array = $db->get_list_nhap_hang_detail($id);

require_once("views/sanpham/nhap.php");
unset($db);

