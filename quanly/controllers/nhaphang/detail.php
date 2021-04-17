<?php
require_once("models/nhaphang.php");
$db = new nhaphang;

$id = $_GET['id'];

$row = $db->get_row_nhap_hang($id);
$row_user = $db->get_row_user_id($row['id_user']);
$row_kh = $db->get_row_doi_tac($row['id_dt']);
$array = $db->get_list_nhap_hang_chi_tiet($id);

require_once("views/nhaphang/detail.php");
unset($db);

