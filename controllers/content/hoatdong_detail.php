<?php
$idhd = $_GET['idhd'];
$db->race_row_hoat_dong($idhd);
$row_hd = $db->get_row_hoat_dong($idhd);

$title = $row_hd['name'];
$descrip = $row_hd['short_info'];
$keyword = $row_hd['name'];

$array_hdk = $db->get_list_hoat_dong_khac($row_hd['id'],0,10);

$link_call = "views/content/hoatdong_detail.php";
