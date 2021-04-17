<?php
require_once("models/thongtin.php");
$db = new thongtin;

if(isset($_POST['edit-bt'])==true){
	$the_title = trim($_POST["the_title"]);
	$flag=1; $error = "";
	
	$error = 'Sữa Thành Công!';
	if(strlen($the_title)>0){
		$db->update_thong_tin('the_title',$the_title);
	}
}
$the_title = $db->get_thong_tin('the_title');

require_once("views/thongtin/the_title.php");
unset($db);

