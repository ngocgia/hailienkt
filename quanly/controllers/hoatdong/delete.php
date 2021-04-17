<?php
require_once("models/hoatdong.php");
$db = new hoatdong;

$id = $_GET['id'];
$db->delete_row_hoat_dong($id);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
