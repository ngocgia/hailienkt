<?php
require_once("models/chiphi.php");
$db = new ChiPhi;

$id = $_GET['id'];
$db->delete_chi_phi($id);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
