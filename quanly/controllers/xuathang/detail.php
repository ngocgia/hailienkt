<?php
require_once("models/xuathang.php");
$db = new xuathang;

$id = $_GET['id'];

$row = $db->get_row_xuat_hang($id);
$row_user = $db->get_row_user_id($row['id_user']);
$row_kh = $db->get_row_khach_hang($row['id_kh']);
$array = $db->get_list_xuat_hang_chi_tiet($id);

require_once("views/xuathang/detail.php");
unset($db);

