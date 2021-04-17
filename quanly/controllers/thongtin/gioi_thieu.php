<?php
require_once("models/thongtin.php");
$db = new thongtin;

if(isset($_POST['edit-bt'])==true){
	$gioithieu = trim($_POST["gioithieu"]);
	$flag=1; $error = "";
	
	$error = 'Sữa Thành Công!';
	if(strlen($gioithieu)>0){
		$db->update_thong_tin('gioithieu',$gioithieu);
	}
}
$gioithieu = $db->get_thong_tin('gioithieu');

require_once("views/thongtin/gioi_thieu.php");
unset($db);

