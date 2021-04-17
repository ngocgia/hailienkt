<?php
$db = new Xuat;

if (!isset($_GET['act'])){
	$act = "default";
}else{
	$act = $_GET['act'];
}
if(isset($_GET['type'])==true){
	$type = $_GET['type'];
	$str = explode(".",$type);
	$type = '';
	if((int)$str[0]>0){
		$type .= (int)$str[0];
	}else{
		$type .= '%';
	}
	if(isset($str[1]) && (int)$str[1]>0){
		$type .= '.'.(int)$str[1];
	}else{
		$type .= '.%';
	}
}else{
	$type = '%.%';
}
if(isset($_GET['num'])==true){
	$num = $_GET['num'];
}else{
	$num = 1;
}

$name = $db->get_thong_tin('name');
$address = $db->get_thong_tin('address');
$phone = $db->get_thong_tin('phone');
$phone1 = $db->get_thong_tin('phone1');
$facebook = $db->get_thong_tin('facebook');
$zalo = $db->get_thong_tin('zalo');
$website = $db->get_thong_tin('website');
$email = $db->get_thong_tin('email');
$address1 = $db->get_thong_tin('address1');
$phone1 = $db->get_thong_tin('phone1');
$ads = $db->get_thong_tin('ads');
$youtube = $db->get_thong_tin('youtube');

$title = $db->get_thong_tin('the_title');$title = $title['info'];
$descrip = $db->get_thong_tin('the_keyword');$descrip = $descrip['info'];
$keyword = $db->get_thong_tin('the_descrip');$keyword = $keyword['info'];

$array_yt = $db->get_list_youtube(1,'tt');
$array_bn = $db->get_list_banner(1,'tt');
$array_lg = $db->get_list_logo(1,'tt');
$array_tc = $db->get_list_tieu_chi('tt');
$array_san_pham_type = $db->get_list_san_pham_type(1,'dayup DESC');
$array_hdm = $db->get_list_hoat_dong(0,5);
$db->count_views();

switch($act){ 
	case "sanpham":
		require_once("controllers/content/sanpham.php");
		break;
	case "sanpham_detail":
		require_once("controllers/content/sanpham_detail.php");
		break;

	case "hoatdong":
		require_once("controllers/content/hoatdong.php");
		break;
	case "hoatdong_detail":		
		require_once("controllers/content/hoatdong_detail.php");
		break;
	case "dichvu":
		require_once("controllers/content/dichvu.php");
		break;
	case "dichvu_detail":		
		require_once("controllers/content/dichvu_detail.php");
		break;
	
	case "video":
		require_once("controllers/content/video.php");
		break;
	case "gioithieu":
		require_once("controllers/content/gioithieu.php");
		break;
	case "baoduong":
		require_once("controllers/content/baoduong.php");
		break;
	case "baoduong":
		require_once("controllers/content/baoduong.php");
		break;
	case "lienhe":
		require_once("controllers/content/lienhe.php");				
		break;
	case "chinhsach":
		require_once("controllers/content/chinhsach.php");				
		break;	
	// Trang chu
	case "trangchu":
		require_once("controllers/content/trangchu.php");						
		break;						
	default:
		require_once("controllers/content/trangchu.php");								
		break;
}

require_once("views/main.php");
unset($db);


