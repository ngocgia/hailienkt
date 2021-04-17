<?php
require_once("models/youtube.php");
$db = new youtube;

if(isset($_POST['edit-bt'])==true){
	$id = trim($_POST["id"]);
	$name = trim($_POST["name"]);
	$link_go = trim($_POST["link_go"]);
	$tt = (int)trim($_POST["tt"]);
	$flag=1; $error = "";
	
	if($flag){
		$db->update_row_youtube($id,$name,$link_go,$tt);
		$error = 'Sữa Thành Công!';
	}
}else{
	$id = $_GET['id'];
}
$row = $db->get_row_youtube($id);

require_once("views/youtube/edit.php");
unset($db);

