<?php
require_once("models/doitac.php");
$db = new doitac;

$id = $_GET['id'];
$db->refresh_row_doi_tac($id);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
