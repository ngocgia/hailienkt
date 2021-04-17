<?php
require_once("models/doitac.php");
$db = new doitac;

$id = $_GET['id'];
$active = $_GET['active'];
$db->active_row_doi_tac($id,$active);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
