<?php
require_once("models/thongtin.php");
$db = new thongtin;

if(isset($_POST['edit-bt'])==true){
	$ads = trim($_POST["ads"]);
	$flag=1; $error = "";
	
	$error = 'Sữa Thành Công!';
	if(strlen($ads)>0){
		$db->update_thong_tin('ads',$ads);
	}
}
$ads = $db->get_thong_tin('ads');

require_once("views/thongtin/quang_cao.php");
unset($db);

