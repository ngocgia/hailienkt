<?php
require_once("models/banner.php");
$db = new banner;

if(isset($_POST['add-bt'])==true){	
    $name = trim($_POST["name"]);
	$image = trim($_POST["image"]);
	$link_go = trim($_POST["link_go"]);
    $tt = (int)trim($_POST["tt"]);
    $flag=1; $error = "";
	$active = 1;

    if($flag){
        $db->create_row_banner($name,$image,$link_go,$tt,$active);
        $error = 'Tạo Thành Công!';
    }
}

require_once("views/banner/add.php");
unset($db);
