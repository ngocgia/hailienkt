<?php
require_once("models/chiphi.php");
$db = new ChiPhi;

if(isset($_POST['delete-bt'])==true){	
	$arrid = $_POST["arrid"];
	$n = count($arrid);
	for($i=0;$i<$n;$i++){
		$db->delete_chi_phi($arrid[$i]);
	}
}

if(isset($_POST['search-bt'])==true){
	$code_month = trim($_POST["code_month"]);
	$code_year = trim($_POST["code_year"]);
}else{
	if(isset($_GET['code_time'])==true){
		$code_time = $_GET['code_time'];
		$code_month = (int)($code_time[4].$code_time[5]);
		$code_year = (int)($code_time[0].$code_time[1].$code_time[2].$code_time[3]);
	}else{
		$code_month = (int)date('m');
		$code_year = (int)date('Y');
	}
}

if(strlen($code_month)==1){
	$code_time = $code_year.'0'.$code_month;
}else{
	$code_time = $code_year.$code_month;
}

$array = $db->get_list_chi_phi($code_time);
$chiphi_sum = $db->sum_chi_phi($code_time);

$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'].'&code_time='.$code_time;

require_once("views/chiphi/list.php");
unset($db);
