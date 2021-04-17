<?php
$idsp = $_GET['idsp'];
$row_sp = $db->get_row_san_pham($idsp);

$title = $row_sp['name'];
$descrip = $row_sp['short_info'];
$keyword = $row_sp['name'];

$array_spk = $db->get_list_san_pham_khac($row_sp['id'],$row_sp['id_type'],0,8);

$link_call = "views/content/sanpham_detail.php";
