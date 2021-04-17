<?php
//Xử lý chuổi có dấu về không dấu
function chuyenChuoi($str) {
// In thường
     $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
     $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
     $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
     $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
     $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
     $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
     $str = preg_replace("/(đ)/", 'd', $str);	 
     $str = preg_replace("/(\'|\*|\`)/", '', $str);
// In đậm
     $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
     $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
     $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
     $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
     $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
     $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
     $str = preg_replace("/(Đ)/", 'D', $str);
     return $str; // Trả về chuỗi đã chuyển
}

//Xử lý chuổi thành URL
function taoURL($str,$id){
// In thường
     $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
     $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
     $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
     $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
     $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
     $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
     $str = preg_replace("/(đ)/", 'd', $str);	 
     $str = preg_replace("/(\'|\*|\`|,|\.)/", '', $str);
// In đậm
     $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
     $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
     $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
     $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
     $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
     $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
     $str = preg_replace("/(Đ)/", 'D', $str);
	 $str = preg_replace('/[^a-zA-Z0-9\_ ]/','',$str);
// Thay dấu -
	 $str = strtolower($str);
	 $str = str_replace('  ','-',$str);
	 $str = str_replace(' ','-',$str);
	 $str = $id.'-'.$str.'.html';
     return $str; // Trả về chuỗi đã chuyển
}

// Xâu chuỗi dạng 'chuỗi ...'
function gioihanchu($str,$sl){
	$tam = chuyenChuoi($str);
	$n = strlen($tam);
	$dem=0;
	if($n<$sl){
		return $str;
	}else{
		$kq="";
		$sl=$sl-3;
		for($i=0;$i<$sl;$i++){
			$kq.= $tam[$i];
		}
		$arr = explode(" ",$kq);
		$dem = count($arr);
		if($kq[$sl-3]==' '){
			$dem=$dem-2;
		}else{
			$dem=$dem-1;
		}
	}
	$arr = explode(" ",$str);
	$kq = "";
	for($i=0;$i<$dem;$i++){
		$kq.= $arr[$i].' ';
	}
	$kq.= '...';
	return $kq;
}

//Kiểm tra MXN
function ktmxn($mxn){
	if(strtolower($mxn)==strtolower($_SESSION['mxn'])){
		return TRUE;
	}else{
		return FALSE;
	}
}

// Lấy IP
function getIP(){  
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //check ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //to check ip is pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

//Kiểm tra chuoi tai khoan
function ktuser($str){
	$pattern = '/^[a-zA-Z0-9][a-zA-Z0-9\.]+[a-zA-Z0-9]$/';
	if(preg_match($pattern,$str)){
		return TRUE;
	}else{
		return FALSE;
	}
}

//Kiểm tra chuoi tai khoan
function ktpass($str){
	$pattern = '/^[a-zA-Z0-9]{1}([\w_\.!@#$%^&*()]+)$/';
	if(preg_match($pattern,$str)){
		return TRUE;
	}else{
		return FALSE;
	}
}

//Kiểm tra ngày tháng hợp lệ
function ktngaythang($str){
	$arr = explode("/",$str);
	$month = (int)$arr[1];
	$day = (int)$arr[0];
	$year = (int)$arr[2];
	if(checkdate($month,$day,$year)){
		return TRUE;
	}else{
		return FALSE;
	}
}
//Chuyển định dạng ngày tháng năm-tháng-ngày
function chuyenNT($str){
	$arr = explode("/",$str);
	$month = $arr[1];
	$day = $arr[0];
	$year = $arr[2];
	return $year.'-'.$month.'-'.$day;
}
//Chuyển định dạng ngày tháng năm/tháng/ngày
function chuyenTN($str){
	$arr = explode("-",$str);
	$month = $arr[1];
	$day = $arr[2];
	$year = $arr[0];
	return $day.'/'.$month.'/'.$year;
}
//Kiểm tra phone
function ktphone($str){
	$pattern = '/^[0-9-+]+$/';
	if(preg_match($pattern,$str)){
		return TRUE;
	}else{
		return FALSE;
	}
}

//Kiểm tra chuoi Email
function ktemail($str){
	//$pattern = "/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]+$/";
	if(filter_var($str,FILTER_VALIDATE_EMAIL)){
		return TRUE;
	}else{
		return FALSE;
	}
}

//Kiếm tra giới hạn số lượng ký tự chuỗi
function ktchuoi($str,$min=0,$max=0){
	$sl = strlen($str);
	if($max==0){
		if($sl>=$min){
			return TRUE;
		}else{
			return FALSE;
		}
	}else{
		if($sl>=$min && $sl<=$max){
			return TRUE;
		}else{
			return FALSE;
		}
	
	}
}

//Hàm test
function check($a){
	echo '<script type="text/javascript">alert("'.$a.'");</script>';
}

// Hiện thị giá cả
function gia($num,$s=".",$t="VNĐ"){
	if($num==0){
		$str = 'Liên hệ';
	}else{
		$str = number_format($num,0,'',$s);
		$str .= " ".$t;
	}
	return $str;
}

// Hiện thị tiền
function httien($num,$s=".",$t="VNĐ"){
	if($num==0){
		$str = '0 '.$t;
	}else{
		$str = number_format($num,0,'',$s);
		$str .= " ".$t;
	}
	return $str;
}

function ngaythang($str){
	$tam = explode(" ",$str);
	$arr = explode("-",$tam[0]);
	$kq = $arr[2]."-".$arr[1]."-".$arr[0];
	return $kq;
}

function ngaygio($str){
	$tam = explode(" ",$str);
	$arr = explode("-",$tam[0]);
	$kq = $arr[2]."-".$arr[1]."-".$arr[0];
	$kq = $tam[1].' '.$kq;
	return $kq;
}

function editorArea($id){
	echo"<script type='text/javascript'>
			config={};
			config.language='vi';
			config.width = 450;
			config.height = 120;
			config.toolbarGroups = [
				{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
				{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
				{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
				{ name: 'forms', groups: [ 'forms' ] },
				{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
				{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
				{ name: 'links', groups: [ 'links' ] },
				{ name: 'insert', groups: [ 'insert' ] },
				{ name: 'styles', groups: [ 'styles' ] },
				{ name: 'colors', groups: [ 'colors' ] },
				{ name: 'tools', groups: [ 'tools' ] },
				{ name: 'others', groups: [ 'others' ] },
				{ name: 'about', groups: [ 'about' ] }
			];

			config.removeButtons = 'Templates,Save,Source,NewPage,Preview,Print,Cut,Undo,Redo,Copy,Paste,PasteText,PasteFromWord,Find,SelectAll,Scayt,Replace,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Underline,Strike,Subscript,Superscript,RemoveFormat,Blockquote,CreateDiv,JustifyRight,JustifyBlock,BidiLtr,BidiRtl,Language,Anchor,Unlink,Link,About,Maximize,ShowBlocks,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Styles,Font,Format,Image';
			CKEDITOR.replace('".$id."',config);
		</script>";
}

function editorAreaFull($id){
	echo"<script type='text/javascript'>
			config={};
			config.language='vi';
			config.toolbarGroups = [
				{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
				{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
				{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
				{ name: 'forms', groups: [ 'forms' ] },
				'/',
				{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
				{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
				{ name: 'links', groups: [ 'links' ] },
				{ name: 'insert', groups: [ 'insert' ] },
				'/',
				{ name: 'styles', groups: [ 'styles' ] },
				{ name: 'colors', groups: [ 'colors' ] },
				{ name: 'tools', groups: [ 'tools' ] },
				{ name: 'others', groups: [ 'others' ] },
				{ name: 'about', groups: [ 'about' ] }
			];

			CKEDITOR.replace('".$id."',config);
		</script>";
}

function khtr($name){
	$n = strlen($name);
	$kq = '';
	for($i=0;$i<$n;$i++){
		if($name[$i]!=' '){$kq .= $name[$i];}
	}
	return $kq;
}
function xlID($id){
	$n = strlen($id);
	$n = 5 - $n;
	$kq = '';
	for($i=0;$i<$n;$i++){
		$kq .= '0';
	}
	$kq .= $id;
	return $kq;
}

// Mã hóa pass
function enPass($pass,$key_len){
	$pass = md5($pass.$key_len);
    $key = pack("H*",substr(sha1($key_len).md5($key_len),0,64));
	$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
	$ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key,$pass, MCRYPT_MODE_CBC, $iv);
	$ciphertext = $iv . $ciphertext;
	$ciphertext_base64 = base64_encode($ciphertext);
	return $ciphertext_base64;
}
// Giải mã pass
function unPass($pass,$key_len){
	$key = pack("H*",substr(sha1($key_len).md5($key_len),0,64));
    $ciphertext_dec = base64_decode($pass);
	$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC);
	$iv_dec = substr($ciphertext_dec, 0, $iv_size);
	$ciphertext_dec = substr($ciphertext_dec, $iv_size);
	$plaintext_dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $ciphertext_dec, MCRYPT_MODE_CBC, $iv_dec);
	return $plaintext_dec;
}

function getLink() {
    $pageURL = 'http';
 
    if (!empty($_SERVER['HTTPS'])) {
      if ($_SERVER['HTTPS'] == 'on') {
        $pageURL .= "s";
      }
    }
 
    $pageURL .= "://";
 
    if ($_SERVER["SERVER_PORT"] != "80") {
      $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
      $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
 
    return $pageURL;
}

//Hien thi anh theo kich thuoc quy dinh
function imgresize($arr,$w,$h){
	if($arr[0]<$w && $arr[1]<$h){
		return $arr;
	}else{
		$arr1=$arr;
		$tam2=$arr1[1]-$h;
		$tam1=$arr1[0]-$w;
		if($tam1<$tam2){
			$arr1[0]=(int)($arr1[0]*(1-$tam2/$arr1[1]));
			$arr1[1]=$h;
		}else{
			$arr1[1]=(int)($arr1[1]*(1-$tam1/$arr1[0]));
			$arr1[0]=$w;
		}
		return $arr1;
	}
}
