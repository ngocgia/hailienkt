<?php
require_once("models/logo.php");
$db = new website;

if(isset($_POST['add-bt'])==true){	
    $name = trim($_POST["name"]);
	$image = trim($_POST["image"]);
	$link_go = trim($_POST["link_go"]);
    $tt = (int)trim($_POST["tt"]);
    $flag=1; $error = "";
	$active = 1;

    if($flag){
        $db->create_row_website($name,$image,$link_go,$tt,$active);
        $error = 'Tạo Thành Công!';
    }
}

require_once("views/logo/add.php");
unset($db);
