<?php
require_once("models/chiphi.php");
$db = new ChiPhi;

if(isset($_POST['edit-bt'])==true){
	$name = trim($_POST["name"]);
	$chiphi = trim($_POST["chiphi"]);
	$info = trim($_POST["info"]);
	$code_month = trim($_POST["code_month"]);
	$code_year = trim($_POST["code_year"]);
	$id = trim($_POST["id"]);
	$flag=1; $error = "";
	
	if(strlen($code_month)==1){
		$code_time = $code_year.'0'.$code_month;
	}else{
		$code_time = $code_year.$code_month;
	}
	
	if($flag){
		$db->update_chi_phi($id,$name,$chiphi,$info,$code_time);
		$error = 'Sữa Thành Công!';
	}
}else{
	$id = $_GET['id'];
}

$row = $db->get_chi_phi($id);

require_once("views/chiphi/edit.php");
unset($db);

