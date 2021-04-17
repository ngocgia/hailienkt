<?php
require_once("models/logo.php");
$db = new website;

$id = $_GET['id'];
$active = $_GET['active'];
$db->active_row_website($id,$active);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
