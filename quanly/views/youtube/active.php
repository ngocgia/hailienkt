<?php
require_once("models/youtube.php");
$db = new youtube;

$id = $_GET['id'];
$active = $_GET['active'];
$db->active_row_youtube($id,$active);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
