<?php
require_once("models/thongtin.php");
$db = new thongtin;

if(isset($_POST['edit-bt'])==true){
	$the_descrip = trim($_POST["the_descrip"]);
	$flag=1; $error = "";
	
	$error = 'Sữa Thành Công!';
	if(strlen($the_descrip)>0){
		$db->update_thong_tin('the_descrip',$the_descrip);
	}
}
$the_descrip = $db->get_thong_tin('the_descrip');

require_once("views/thongtin/the_descrip.php");
unset($db);

