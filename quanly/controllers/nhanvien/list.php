<?php
require_once("models/nhanvien.php");
$db = new NhanVien;

if(isset($_POST['delete-bt'])==true){	
	$arrid = $_POST["arrid"];
	$n = count($arrid);
	for($i=0;$i<$n;$i++){
		$db->delete_nhan_vien($arrid[$i]);
	}
}

if(isset($_GET['num'])==true){
	$num = $_GET['num'];
}else{
	$num = 1;
}

if(isset($_GET['active'])==true){
	$active = $_GET["active"];
}else{
	$active = '';
}

if(isset($_POST['search-bt'])==true){
	$search = $_POST["search"];
}else{
	$search = '';
}

if(strlen($search)>0){
	$array = $db->get_list_nhan_vien($active,0,0);
	$sum = 0;
}else{
	$row_sum = $db->count_list_nhan_vien($active);
	$sum = $row_sum['TotalID'];
	$limit = 14;
	$pages = (($sum%$limit)==0)?$sum/$limit:floor($sum/$limit)+1;
	$start = ($num-1)*$limit;
	$array = $db->get_list_nhan_vien($active,$start,$limit);
}

require_once("views/nhanvien/list.php");
unset($db);
