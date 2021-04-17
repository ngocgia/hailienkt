<?php
require_once("models/xuathang.php");
$db = new xuathang;

if(isset($_POST['edit-bt'])==true){
	$tratruoc = trim($_POST["tratruoc"]);
	$id = trim($_POST["id"]);
	
	$flag=1; $error = "";
	
	if($flag){
		$db->update_row_xuat_hang_ghi_no($id,$tratruoc);
		$error = 'Sữa Thành Công!';
	}
}else{
	$id = $_GET['id'];
}
$row = $db->get_row_xuat_hang($id);

require_once("views/xuathang/edit.php");
unset($db);

