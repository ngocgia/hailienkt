<?php
require_once("models/logo.php");
$db = new website;

if(isset($_POST['edit-bt'])==true){
	$id = trim($_POST["id"]);
	$name = trim($_POST["name"]);
	$image = trim($_POST["image"]);
	$link_go = trim($_POST["link_go"]);
	$tt = (int)trim($_POST["tt"]);
	$flag=1; $error = "";
	
	if($flag){
		$db->update_row_website($id,$name,$image,$link_go,$tt);
		$error = 'Sữa Thành Công!';
	}
}else{
	$id = $_GET['id'];
}
$row = $db->get_row_website($id);

require_once("views/logo/edit.php");
unset($db);

