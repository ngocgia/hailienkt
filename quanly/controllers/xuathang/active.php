<?php
require_once("models/xuathang.php");
$db = new xuathang;

$id = $_GET['id'];
$active = $_GET['active'];
$db->active_row_xuat_hang_ghi_no($id,$active);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
