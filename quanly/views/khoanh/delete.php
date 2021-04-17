<?php
require_once("models/khoanh.php");
$db = new KhoAnh;

$id = $_GET['id'];
$db->deleteHA($id);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
