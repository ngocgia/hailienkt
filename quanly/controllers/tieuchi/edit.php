<?php
require_once("models/tieuchi.php");
$db = new tieuchi;

if(isset($_POST['edit-bt'])==true){
	$id = trim($_POST["id"]);
	$name = trim($_POST["name"]);
	$image = trim($_POST["image"]);
	$short_info = trim($_POST["short_info"]);
	$tt = (int)trim($_POST["tt"]);
	$flag=1; $error = "";
	
	if($flag){
		$db->update_row_tieu_chi($id,$name,$image,$short_info,$tt);
		$error = 'Sữa Thành Công!';
	}
}else{
	$id = $_GET['id'];
}
$row = $db->get_row_tieu_chi($id);

require_once("views/tieuchi/edit.php");
unset($db);

