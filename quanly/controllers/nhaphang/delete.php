<?php
require_once("models/nhaphang.php");
$db = new nhaphang;

$id = $_GET['id'];
$db->delete_row_nhap_hang($id);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';

unset($db);
?>
