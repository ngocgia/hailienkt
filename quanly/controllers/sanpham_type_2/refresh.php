<?php
require_once("models/sanpham.php");
$db = new sanpham;

$id = $_GET['id'];
$db->refresh_row_san_pham_type_2($id);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
