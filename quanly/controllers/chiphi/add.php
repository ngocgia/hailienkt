<?php
require_once("models/chiphi.php");
$db = new ChiPhi;

if(isset($_POST['add-bt'])==true){
	$name = trim($_POST["name"]);
	$chiphi = trim($_POST["chiphi"]);
	$info = trim($_POST["info"]);
	$code_month = trim($_POST["code_month"]);
	$code_year = trim($_POST["code_year"]);
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$daycrea = date("Y-m-d");
	$flag=1; $error = "";
	
	if(strlen($code_month)==1){
		$code_time = $code_year.'0'.$code_month;
	}else{
		$code_time = $code_year.$code_month;
	}
	
	if($flag){
		$db->create_chi_phi($name,$chiphi,$info,$code_time,$daycrea);
		$error = 'Tạo Thành Công!';
	}
}

require_once("views/chiphi/add.php");
unset($db);

