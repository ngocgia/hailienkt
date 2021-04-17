<?php
require_once("models/nhanvien.php");
$db = new NhanVien;

if(isset($_POST['delete-bt'])==true){	
	$arrid = $_POST["arrid"];
	$n = count($arrid);
	for($i=0;$i<$n;$i++){
		$db->delete_luong_nhan_vien($arrid[$i]);
	}
}


$id = $_GET['id'];
$row = $db->get_nhan_vien($id);

$array = $db->get_list_luong_nhan_vien($id);

require_once("views/nhanvien/detail.php");
unset($db);
