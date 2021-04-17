<?php
require_once("models/banner.php");
$db = new banner;

$id = $_GET['id'];
$db->delete_row_banner($id);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
