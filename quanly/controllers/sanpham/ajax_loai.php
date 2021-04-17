<?php
session_start();
require_once("../../models/database.php");
require_once("../../class/function.php");
require_once("../../models/sanpham.php");
$db = new sanpham;

$id_1 = $_GET['id_1'];

require_once("../../views/sanpham/ajax_loai.php");

unset($db);
