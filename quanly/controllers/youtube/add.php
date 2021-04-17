<?php
require_once("models/youtube.php");
$db = new youtube;

if(isset($_POST['add-bt'])==true){	
    $name = trim($_POST["name"]);
	$link_go = trim($_POST["link_go"]);
    $tt = (int)trim($_POST["tt"]);
    $flag=1; $error = "";
	$active = 1;

    if($flag){
        $db->create_row_youtube($name,$link_go,$tt,$active);
        $error = 'Tạo Thành Công!';
    }
}

require_once("views/youtube/add.php");
unset($db);
