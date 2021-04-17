<?php
require_once("models/dichvu.php");
$db = new dichvu;

$id = $_GET['id'];
$db->delete_row_dich_vu($id);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
