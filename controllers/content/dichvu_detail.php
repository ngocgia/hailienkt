<?php
$iddv = $_GET['iddv'];
$db->race_row_dich_vu($iddv);
$row_dv = $db->get_row_dich_vu($iddv);

$title = $row_dv['name'];
$descrip = $row_dv['short_info'];
$keyword = $row_dv['name'];

$array_dvk = $db->get_list_dich_vu_khac($row_dv['id'],0,10);

$link_call = "views/content/dichvu_detail.php";
