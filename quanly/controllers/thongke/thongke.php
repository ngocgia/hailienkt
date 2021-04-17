<?php
require_once("models/thongke.php");
$db = new thongke;

if(isset($_POST['search-bt'])==true){
	$year = trim($_POST["code_year"]);
}else{
	$year = (int)date('Y');
}
$year = $year;

require_once("views/thongke/thongke.php");
unset($db);
