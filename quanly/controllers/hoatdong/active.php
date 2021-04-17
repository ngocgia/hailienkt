<?php
require_once("models/hoatdong.php");
$db = new hoatdong;

$id = $_GET['id'];
$active = $_GET['active'];
$db->active_row_hoat_dong($id,$active);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
