<?php
require_once("models/tieuchi.php");
$db = new tieuchi;

$id = $_GET['id'];
$active = $_GET['active'];
$db->active_row_tieu_chi($id,$active);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
