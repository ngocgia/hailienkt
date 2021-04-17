<?php
require_once("models/dichvu.php");
$db = new dichvu;

$id = $_GET['id'];
$row = $db->get_row_dich_vu($id);

require_once("views/dichvu/detail.php");
unset($db);

