<?php
require_once("models/khachhang.php");
$db = new khachhang;

$id = $_GET['id'];
$active = $_GET['active'];
$db->active_row_khach_hang($id,$active);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
