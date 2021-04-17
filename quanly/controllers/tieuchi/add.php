<?php
require_once("models/tieuchi.php");
$db = new tieuchi;

if(isset($_POST['add-bt'])==true){	
    $name = trim($_POST["name"]);
	$image = trim($_POST["image"]);
	$short_info = trim($_POST["short_info"]);
    $tt = (int)trim($_POST["tt"]);
    $flag=1; $error = "";
	$active = 1;

    if($flag){
        $db->create_row_tieu_chi($name,$image,$short_info,$tt,$active);
        $error = 'Tạo Thành Công!';
    }
}

require_once("views/tieuchi/add.php");
unset($db);
