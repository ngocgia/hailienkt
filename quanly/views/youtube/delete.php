<?php
require_once("models/youtube.php");
$db = new youtube;

$id = $_GET['id'];
$db->delete_row_youtube($id);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
