<?php
require_once("models/youtube.php");
$db = new youtube;
$orderby = '';

if(isset($_POST['delete-bt'])==true){	
	$array_id = $_POST["array_id"];
	$n = count($array_id);
	for($i=0;$i<$n;$i++){
		$db->delete_row_youtube($array_id[$i]);
	}
	check('Xoá thành công!');
}

if(isset($_GET['active'])){
	$active = (int)$_GET['active'];
}else{
	$active = 1;
}

if(isset($_GET['order_id'])){
	$order_id = $_GET['order_id'];
	if($order_id==1){
		$orderby = 'id ASC';
	}else{
		$orderby = 'id DESC';
	}
}
if(isset($_GET['order_tt'])){
	$order_tt = $_GET['order_tt'];
	if($order_tt==1){
		$orderby = 'tt ASC';
	}else{
		$orderby = 'tt DESC';
	}
}

if(strlen($orderby)==0){
	$orderby = 'tt ASC';
}
$array = $db->get_list_youtube($active,$orderby);

require_once("views/youtube/list.php");
unset($db);
