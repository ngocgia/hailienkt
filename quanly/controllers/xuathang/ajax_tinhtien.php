<?php
session_start();
require_once("../../class/function.php");
$_SESSION['get_money'] = $_GET['get_money'];
$tong = ($_SESSION['total']*(100-$_SESSION['sale_percent'])/100) - $_SESSION['sale_money'];

require_once("../../views/xuathang/ajax_tinhtien.php");
