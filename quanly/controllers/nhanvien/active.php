<?php
require_once("models/nhanvien.php");
$db = new NhanVien;

$id = $_GET['id'];
$active = $_GET['active'];
$db->active_nhan_vien($id,$active);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
