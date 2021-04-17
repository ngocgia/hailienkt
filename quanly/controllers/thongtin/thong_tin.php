<?php
require_once("models/thongtin.php");
$db = new thongtin;

if(isset($_POST['edit-bt'])==true){
	$name = trim($_POST["name"]);
	$address = trim($_POST["address"]);
	$phone = trim($_POST["phone"]);
	$email = trim($_POST["email"]);
	$phone1 = trim($_POST["phone1"]);
	$facebook = trim($_POST["facebook"]);
	$zalo = trim($_POST["zalo"]);
	$youtube = trim($_POST["youtube"]);
	$website = trim($_POST["website"]);
	$mst = trim($_POST["mst"]);
	$giamdoc = trim($_POST["giamdoc"]);
	$flag=1; $error = "";
	
	$error = 'Sửa Thành Công!';
	if(strlen($name)>0){
		$db->update_thong_tin('name',$name);
	}else{
		$error = 'Bạn chưa nhập tên!';
	}
	if(strlen($address)>0){
		$db->update_thong_tin('address',$address);
	}else{
		$error = 'Bạn chưa nhập địa chỉ!';
	}
	if(strlen($phone)>0){
		$db->update_thong_tin('phone',$phone);
	}else{
		$error = 'Bạn chưa nhập số điện thoại!';
	}
	if(strlen($phone1)>0){
		$db->update_thong_tin('phone1',$phone1);
	}else{
		$error = 'Bạn chưa nhập số điện thoại!';
	}
	if(strlen($email)>0){
		$db->update_thong_tin('email',$email);
	}else{
		$error = 'Bạn chưa nhập số điện thoại!';
	}
	if(strlen($zalo)>0){
		$db->update_thong_tin('zalo',$zalo);
	}
	if(strlen($youtube)>0){
		$db->update_thong_tin('youtube',$youtube);
	}
	if(strlen($website)>0){
		$db->update_thong_tin('website',$website);
	}
	if(strlen($facebook)>0){
		$db->update_thong_tin('facebook',$facebook);
	}
	if(strlen($mst)>0){
		$db->update_thong_tin('mst',$mst);
	}
	if(strlen($giamdoc)>0){
		$db->update_thong_tin('giamdoc',$giamdoc);
	}
}
$name = $db->get_thong_tin('name');
$address = $db->get_thong_tin('address');
$phone = $db->get_thong_tin('phone');
$email = $db->get_thong_tin('email');
$phone1 = $db->get_thong_tin('phone1');
$facebook = $db->get_thong_tin('facebook');
$zalo = $db->get_thong_tin('zalo');
$youtube = $db->get_thong_tin('youtube');
$website = $db->get_thong_tin('website');
$mst= $db->get_thong_tin('mst');
$giamdoc=$db->get_thong_tin('giamdoc');

require_once("views/thongtin/thong_tin.php");
unset($db);

