<?php
require_once("models/hoatdong.php");
$db = new hoatdong;

$id = $_GET['id'];
$row = $db->get_row_hoat_dong($id);

require_once("views/hoatdong/detail.php");
unset($db);

