<?php
require_once("models/tieuchi.php");
$db = new tieuchi;

$id = $_GET['id'];
$db->delete_row_tieu_chi($id);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
