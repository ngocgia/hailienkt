<?php
require_once("models/doitac.php");
$db = new doitac;

$id = $_GET['id'];
$row = $db->get_row_doi_tac($id);

$row_nhap = $db->count_nhap_hang_detail($id);

require_once("views/doitac/detail.php");
unset($db);

