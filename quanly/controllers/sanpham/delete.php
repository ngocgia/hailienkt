<?php
require_once("models/sanpham.php");
$db = new sanpham;

$id = $_GET['id'];
$db->delete_row_san_pham($id);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
