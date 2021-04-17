<?php
require_once("models/hoatdong.php");
$db = new hoatdong;

if(isset($_POST['delete-bt'])==true){	
	$arrid = $_POST["arrid"];
	$n = count($arrid);
	for($i=0;$i<$n;$i++){
		$db->delete_row_hoat_dong($arrid[$i]);
	}
}

// Bo loc
$orderby = '';
if(isset($_GET['order_type'])){
	$order_type = $_GET['order_type'];
	if($order_type==1){
		$orderby = 'id_type ASC';
	}else{
		$orderby = 'id_type DESC';
	}
}
if(isset($_GET['order_price'])){
	$order_price = $_GET['order_price'];
	if($order_price==1){
		$orderby = 'price ASC';
	}else{
		$orderby = 'price DESC';
	}
}
if(isset($_GET['order_name'])){
	$order_name = $_GET['order_name'];
	if($order_name==1){
		$orderby = 'name ASC';
	}else{
		$orderby = 'name DESC';
	}
}
if(isset($_GET['order_id'])){
	$order_id = $_GET['order_id'];
	if($order_id==1){
		$orderby = 'id ASC';
	}else{
		$orderby = 'id DESC';
	}
}
if(isset($_GET['order_dayup'])){
	$order_dayup = $_GET['order_dayup'];
	if($order_dayup==1){
		$orderby = 'dayup ASC';
	}else{
		$orderby = 'dayup DESC';
	}
}
if(strlen($orderby)==0){
	$orderby = 'dayup DESC';
}

// Dieu kien
if(isset($_GET['active'])){
	$active = (int)$_GET['active'];
}else{
	$active = 1;
}
if(isset($_GET['id_type'])==true){
	$id_type = $_GET["id_type"];
}else{
	$id_type = '';
}
if(isset($_GET['search'])==true){
	$search = $_GET["search"];
}else{
	$search = '';
}
if(isset($_GET['num'])==true){
	$num = $_GET['num'];
}else{
	$num = 1;
}

if(isset($_POST['search-bt'])==true){
	$search = $_POST["search"];
	$search = strtolower(chuyenChuoi($search));
}

$sum = $db->count_list_hoat_dong($active,$id_type,$search);
$limit = 20;
$pages = (($sum%$limit)==0)?$sum/$limit:floor($sum/$limit)+1;
$start = ($num-1)*$limit;
$array = $db->get_list_hoat_dong($active,$id_type,$search,$orderby,$start,$limit);

$rel = '';
if(strlen($id_type)>0){$rel .= '&id_type='.$id_type;}

require_once("views/hoatdong/list.php");
unset($db);
