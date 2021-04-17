<?php
require_once("models/sanpham.php");
$db = new sanpham;

$id = $_GET['id'];
$active = $_GET['active'];
$db->active_row_san_pham($id,$active);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
