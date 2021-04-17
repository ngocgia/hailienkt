<?php
require_once("models/thongtin.php");
$db = new thongtin;

if(isset($_POST['edit-bt'])==true){
	$the_keyword = trim($_POST["the_keyword"]);
	$flag=1; $error = "";
	
	$error = 'Sữa Thành Công!';
	if(strlen($the_keyword)>0){
		$db->update_thong_tin('the_keyword',$the_keyword);
	}
}
$the_keyword = $db->get_thong_tin('the_keyword');

require_once("views/thongtin/the_keyword.php");
unset($db);

