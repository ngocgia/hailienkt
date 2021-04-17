<?php
require_once("models/logo.php");
$db = new website;

$id = $_GET['id'];
$db->delete_row_website($id);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
