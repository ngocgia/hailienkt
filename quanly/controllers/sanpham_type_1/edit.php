<?php
require_once("models/sanpham.php");
$db = new sanpham;

if(isset($_POST['edit-bt'])==true){
	$name = trim($_POST["name"]);
	$id = trim($_POST["id"]);
	$id_out = 0;
	$flag=1; $error = "";
	if(!ktchuoi($name,1,200)){$flag = 0;$error='Lỗi nhập tên!';}
	
	if($flag){
		$db->update_row_san_pham_type_1($id,$name,$id_out);
		$error = 'Sữa Thành Công!';
	}
}else{
	$id = $_GET['id'];
}
$row = $db->get_row_san_pham_type_1($id);

require_once("views/sanpham_type_1/edit.php");
unset($db);

