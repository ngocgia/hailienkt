<?php
require_once("models/nhanvien.php");
$db = new NhanVien;

$id = $_GET['id'];
$db->delete_nhan_vien($id);

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
?>
