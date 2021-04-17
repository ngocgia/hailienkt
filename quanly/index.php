<?php
session_start();
require_once('models/database.php');
require_once("class/function.php");
require_once("models/account.php");
require_once('models/thongtin.php');
echo '<meta charset="utf-8">';
if(!isset($_SESSION['userctkt'])||!isset($_SESSION['passctkt'])){
	require_once("controllers/login.php");
	exit;
}else{
	require_once("controllers/main.php");
	exit;
}