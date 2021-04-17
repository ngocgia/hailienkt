<?php
require_once("models/nhaphang.php");
$db = new nhaphang;

if(isset($_POST['edit-bt'])==true){
	$tratruoc = trim($_POST["tratruoc"]);
	$id = trim($_POST["id"]);
	
	$flag=1; $error = "";
	
	if($flag){
		$db->update_row_nhap_hang_ghi_no($id,$tratruoc);
		$error = 'Sữa Thành Công!';
	}
}else{
	$id = $_GET['id'];
}
$row = $db->get_row_nhap_hang($id);

require_once("views/nhaphang/edit.php");
unset($db);

