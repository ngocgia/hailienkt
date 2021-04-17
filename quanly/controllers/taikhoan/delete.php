<?php
$db = new Account;

$id = $_GET['id'];
$db->delete_tai_khoan($id);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
