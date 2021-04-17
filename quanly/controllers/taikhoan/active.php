<?php
$db = new Account;

$id = (int)$_GET['id'];
$active = (int)$_GET['active'];
$db->active_tai_khoan($id,$active);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
