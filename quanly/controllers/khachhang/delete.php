<?php
require_once("models/khachhang.php");
$db = new khachhang;

$id = $_GET['id'];
$db->delete_row_khach_hang($id);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
