<?php
require_once("models/doitac.php");
$db = new doitac;

if(isset($_POST['edit-bt'])==true){
	$name = trim($_POST["name"]);
    $phone = trim($_POST["phone"]);
	$email = trim($_POST["email"]);
	$birthday = trim($_POST["birthday"]);
	$address = trim($_POST["address"]);
	$dayup = date("Y-m-d H:i:s");
	$id = trim($_POST["id"]);
	
	$flag=1; $error = "";
	if(!ktchuoi($name,1,200)){$flag = 0;$error='Lỗi nhập tên!';}
	if(!ktchuoi($phone,10,10)){$flag = 0;$error='Lỗi nhập điện thoại!';}
	if(!ktphone($phone)){$flag = 0;$error='Lỗi nhập điện thoại!';}
	
	if($db->check_phone_doi_tac($phone,$id)){
		$flag = 0;
		$error='Số điện thoại này đã có!';
	}
	
	if($flag){
		$key_search = strtolower(chuyenChuoi($name.' '.$phone.' '.$email.' '.$address));
		$db->update_row_doi_tac($id,$name,$phone,$email,$birthday,$address,$key_search,$dayup);
		$error = 'Sữa Thành Công!';
	}
}else{
	$id = $_GET['id'];
}
$row = $db->get_row_doi_tac($id);

require_once("views/doitac/edit.php");
unset($db);

