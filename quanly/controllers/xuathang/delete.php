<?php
require_once("models/xuathang.php");
$db = new xuathang;

$id = $_GET['id'];
$db->delete_row_xuat_hang($id);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';

unset($db);
?>
