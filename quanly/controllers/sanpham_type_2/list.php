<?php
require_once("models/sanpham.php");
$db = new sanpham;
$orderby = '';

if(isset($_POST['delete-bt'])==true){	
	$array_id = $_POST["array_id"];
	$n = count($array_id);
	for($i=0;$i<$n;$i++){
		$db->delete_row_san_pham_type_2($array_id[$i]);
	}
	check('Xoá thành công!');
}

if(isset($_GET['active'])){
	$active = (int)$_GET['active'];
}else{
	$active = 1;
}

//Bo loc
if(isset($_GET['order_id'])){
	$order_id = $_GET['order_id'];
	if($order_id){
		$orderby = 'id ASC';
	}else{
		$orderby = 'id DESC';
	}
}
if(isset($_GET['order_id_1'])){
	$order_id_1 = $_GET['order_id_1'];
	if($order_id_1){
		$orderby = 'id_1 ASC';
	}else{
		$orderby = 'id_1 DESC';
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
if(strlen($orderby)==0){
	$orderby = 'dayup DESC';
}
$array = $db->get_list_san_pham_type_2($active,$orderby);

require_once("views/sanpham_type_2/list.php");
unset($db);
