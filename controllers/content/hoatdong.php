<?php

$row_sum = $db->count_list_hoat_dong();
$sum = $row_sum['TotalID'];
$limit = 20;
$pages = (($sum%$limit)==0)?$sum/$limit:floor($sum/$limit)+1;
$start = ($num-1)*$limit;
$array = $db->get_list_hoat_dong($start,$limit);

$link_call = "views/content/hoatdong.php";
