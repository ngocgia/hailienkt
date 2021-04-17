<?php
require_once("models/banner.php");
$db = new banner;

$id = $_GET['id'];
$active = $_GET['active'];
$db->active_row_banner($id,$active);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
