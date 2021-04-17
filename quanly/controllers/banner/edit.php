<?php
require_once("models/banner.php");
$db = new banner;

if(isset($_POST['edit-bt'])==true){
	$id = trim($_POST["id"]);
	$name = trim($_POST["name"]);
	$image = trim($_POST["image"]);
	$link_go = trim($_POST["link_go"]);
	$tt = (int)trim($_POST["tt"]);
	$flag=1; $error = "";
	
	if($flag){
		$db->update_row_banner($id,$name,$image,$link_go,$tt);
		$error = 'Sữa Thành Công!';
	}
}else{
	$id = $_GET['id'];
}
$row = $db->get_row_banner($id);

require_once("views/banner/edit.php");
unset($db);

