<?php

$row_sum = $db->count_list_san_pham($type);
$sum = $row_sum['TotalID'];
$limit = 28;
$pages = (($sum%$limit)==0)?$sum/$limit:floor($sum/$limit)+1;
$start = ($num-1)*$limit;
$array = $db->get_list_san_pham($type,$start,$limit);

$link_call = "views/content/sanpham.php";
