<?php
require_once("models/thongtin.php");
$db = new thongtin;

if(isset($_POST['edit-bt'])==true){
	$baoduong = trim($_POST["baoduong"]);
	$flag=1; $error = "";
	
	$error = 'Sữa Thành Công!';
	if(strlen($baoduong)>0){
		$db->update_thong_tin('baoduong',$baoduong);
	}
}
$baoduong = $db->get_thong_tin('baoduong');

require_once("views/thongtin/bao_duong.php");
unset($db);

