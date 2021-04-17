<?php
require_once("models/nhaphang.php");
$db = new nhaphang;

$id = $_GET['id'];
$active = $_GET['active'];
$db->active_row_nhap_hang_ghi_no($id,$active);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
