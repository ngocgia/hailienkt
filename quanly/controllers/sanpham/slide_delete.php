<?php
require_once("models/sanpham.php");
$db = new sanpham;

$id = $_GET['id'];
$str = $_GET['str'];
$row = $db->get_row_san_pham($id);

$cha = $row['image_slide'];
$array = explode(';',$cha);
$n = count($array);
$j = 0;
for($i=0;$i<$n;$i++){
	if($array[$i]!==$str){
		$tam[$j]= $array[$i];
		$j++;
	}
}
if(isset($tam) && count($tam)>0){
	$cha = implode(';',$tam);
}else{
	$cha = '';
}

$db->updateImage($id,$cha);

if(strlen($str)>0){
	$delImage = '../images/sanpham/'.$str;
	unlink($delImage);
}

echo '<script type="text/javascript">window.location ="?'.$_SESSION['urlctkt'].'"; </script>';
unset($db);
