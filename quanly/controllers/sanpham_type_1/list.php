<?php
require_once("models/sanpham.php");
$db = new sanpham;
$orderby = '';

if(isset($_POST['delete-bt'])==true){	
	$array_id = $_POST["array_id"];
	$n = count($array_id);
	for($i=0;$i<$n;$i++){
		$db->delete_row_san_pham_type_1($array_id[$i]);
	}
	check('Xoá thành công!');
}

if(isset($_GET['active'])){
	$active = (int)$_GET['active'];
}else{
	$active = 1;
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
	$orderby = 'dayup ASC';
}
$array = $db->get_list_san_pham_type_1($active,$orderby);

require_once("views/sanpham_type_1/list.php");
unset($db);
