<?php
require_once("models/sanpham.php");
$db = new sanpham;

if(isset($_POST['add-bt'])==true){	
    $name = trim($_POST["name"]);
    $id_out = 0;
    $flag=1; $error = "";
	$active = 1;
	$dayup = date("Y-m-d H:i:s");
    if(!ktchuoi($name,1,200)){$flag = 0;$error='Lỗi nhập tên loại!';}

    if($flag){
        $db->create_row_san_pham_type_1($name,$dayup,$active,$id_out);
        $error = 'Tạo Thành Công!';
    }
}

require_once("views/sanpham_type_1/add.php");
unset($db);
