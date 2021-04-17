<?php
require_once("../models/database.php");
require_once("../models/donhang.php");
require_once("../class/function.php");
$db = new DonHang;

$row = $db->count_thong_bao();

echo $row['TotalID'];

unset($db);
?>