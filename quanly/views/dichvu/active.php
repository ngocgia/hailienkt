<?php
require_once("models/dichvu.php");
$db = new dichvu;

$id = $_GET['id'];
$active = $_GET['active'];
$db->active_row_dich_vu($id,$active);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
