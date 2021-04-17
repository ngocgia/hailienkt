<?php
// Xâu chuỗi dạng 'chuỗi ...'
function gioihanchu($str,$sl){
	$arr = explode(" ",$str);
	$n = count($arr);
	$kq = "";
	if ($n>$sl){	
		for($i=0;$i<$sl;$i++){
			$kq.= $arr[$i].' ';
		}
		$kq.= '...';
	}else{
		for($i=0;$i<$n;$i++){
			$kq.= $arr[$i].' ';
		}
	}
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
	$arr = explode("-",$str);
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
	return $day.'-'.$month.'-'.$year;
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
function htgio($str){
	$tam = explode(" ",$str);	
	$kq = $tam[1];
	return $kq;
}

function editorArea($id){
	echo"<script type='text/javascript'>
			config={};
			config.language='vi';
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
	$output = false;
	$encrypt_method = "AES-256-CBC";
	$secret_key = $key_len;
	$secret_iv = 'TK-KT'.$secret_key;
	$key = hash('sha256', $secret_key);
	$iv = substr(hash('sha256', $secret_iv), 0, 16);
	$output = openssl_encrypt($pass, $encrypt_method, $key, 0, $iv);
    $output = base64_encode($output);
	return $output;
}
// Giải mã pass
function unPass($pass,$key_len){
	$output = false;
	$encrypt_method = "AES-256-CBC";
	$secret_key = $key_len;
	$secret_iv = 'TK-KT'.$secret_key;
	$key = hash('sha256', $secret_key);
	$iv = substr(hash('sha256', $secret_iv), 0, 16);
	$output = openssl_decrypt(base64_decode($pass), $encrypt_method, $key, 0, $iv);
	return $output;
}

// Resize image
function imgresize($arr,$w,$h){
	if($arr[0]<$w && $arr[1]<$h){
		return $arr;
	}else{		
		$arr1=$arr;
		$tam2=$arr1[1]-$h;
		$tam1=$arr1[0]-$w;
		if($arr[0]>$w && $arr[1]>$h){
			if(($tam1/$w)<($tam2/$h)){
				$arr1[0]=(int)($arr1[0]*(1-$tam2/$arr1[1]));
				$arr1[1]=$h;
			}else{
				$arr1[1]=(int)($arr1[1]*(1-$tam1/$arr1[0]));
				$arr1[0]=$w;
			}
		}else{
			if($arr[0]>$w && $arr[1]<$h){
				$arr1[1]=(int)($arr1[1]*(1-$tam1/$arr1[0]));
				$arr1[0]=$w;
			}else{
				$arr1[0]=(int)($arr1[0]*(1-$tam2/$arr1[1]));
				$arr1[1]=$h;		
			}
		}
		return $arr1;
	}
}
//Kiem tra nam nhuan
function remainderDivision($a, $b){
	$t = $a / $b;
	return $t - intval($t);
}
 
function isLeapYear($year){	
	if(remainderDivision($year, 400)==0 || (remainderDivision($year, 4)==0 && remainderDivision($year, 100)!=0))
		return true;
	return false;
}
function ngayTV($ngay){
	switch($ngay){
		case 'Monday':
			return 'Thứ hai';
			break;
		case 'Tuesday':
			return 'Thứ ba';
			break;
		case 'Wednesday':
			return 'Thứ tư';
			break;
		case 'Thursday':
			return 'Thứ năm';
			break;
		case 'Friday':
			return 'Thứ sáu';
			break;
		case 'Saturday':
			return 'Thứ bảy';
			break;
		case 'Sunday':
			return 'Chủ Nhật';
			break;
	}
}
function deleteGio($idtd){
	$n = @count($_SESSION['cart']);
	$j=0;
	for($i=0;$i<$n;$i++){
		if($idtd!=$_SESSION['cart'][$i]){
			$cart[$j] = $_SESSION['cart'][$i];
			$soluong[$j] = $_SESSION['soluong'][$i];
			$gia[$j] = $_SESSION['gia'][$i];
			$j++;
		}
	}
	if(isset($cart)){
		$_SESSION['cart'] = $cart;
	}else{
		unset($_SESSION['cart']);
	}
	if(isset($soluong)){
		$_SESSION['soluong'] = $soluong;
	}else{
		unset($_SESSION['soluong']);
	}
	if(isset($gia)){
		$_SESSION['gia'] = $gia;
	}else{
		unset($_SESSION['gia']);
	}
}
function tangGio($idtd,$gia){
	$cart = @$_SESSION['cart'];
	$n = @count($_SESSION['cart']);
	if($n==0){
        $cart[0] = $idtd;
        $_SESSION['soluong'][0] = 1;
		$_SESSION['gia'][0] = $gia;		
    }else{
		$kt = TRUE;
		for($i=0;$i<$n;$i++){
			if ($idtd==$cart[$i]){
				$_SESSION['soluong'][$i] += 1;
				$kt = FALSE;
			}
		}
		if($kt){
			$cart[$n]=$idtd;
        	$_SESSION['soluong'][$n] = 1;
			$_SESSION['gia'][$n] = $gia;		
		}
	}
	$_SESSION['cart'] = $cart;
}
function giamGio($idtd){
	$n = @count($_SESSION['cart']);
	for($i=0;$i<$n;$i++){
		if($idtd==$_SESSION['cart'][$i]){
			if($_SESSION['soluong'][$i]>1){
				$_SESSION['soluong'][$i] -= 1;
				break;
			}else{
				deleteGio($idtd);
				break;
			}
		}
	}
}

function deleteGio_nhap($idtd){
	$n = @count($_SESSION['cart_nhap']);
	$j=0;
	for($i=0;$i<$n;$i++){
		if($idtd!=$_SESSION['cart_nhap'][$i]){
			$cart[$j] = $_SESSION['cart_nhap'][$i];
			$soluong[$j] = $_SESSION['soluong_nhap'][$i];
			$gia[$j] = $_SESSION['gia_nhap'][$i];
			$j++;
		}
	}
	if(isset($cart)){
		$_SESSION['cart_nhap'] = $cart;
	}else{
		unset($_SESSION['cart_nhap']);
	}
	if(isset($soluong)){
		$_SESSION['soluong_nhap'] = $soluong;
	}else{
		unset($_SESSION['soluong_nhap']);
	}
	if(isset($gia)){
		$_SESSION['gia_nhap'] = $gia;
	}else{
		unset($_SESSION['gia_nhap']);
	}
}
function tangGio_nhap($idtd,$gia){
	$cart = @$_SESSION['cart_nhap'];
	$n = @count($_SESSION['cart_nhap']);
	if($n==0){
        $cart[0] = $idtd;
        $_SESSION['soluong_nhap'][0] = 1;
		$_SESSION['gia_nhap'][0] = $gia;		
    }else{
		$kt = TRUE;
		for($i=0;$i<$n;$i++){
			if ($idtd==$cart[$i]){
				$_SESSION['soluong_nhap'][$i] += 1;
				$kt = FALSE;
			}
		}
		if($kt){
			$cart[$n]=$idtd;
        	$_SESSION['soluong_nhap'][$n] = 1;
			$_SESSION['gia_nhap'][$n] = $gia;		
		}
	}
	$_SESSION['cart_nhap'] = $cart;
}
function giamGio_nhap($idtd){
	$n = @count($_SESSION['cart_nhap']);
	for($i=0;$i<$n;$i++){
		if($idtd==$_SESSION['cart_nhap'][$i]){
			if($_SESSION['soluong_nhap'][$i]>1){
				$_SESSION['soluong_nhap'][$i] -= 1;
				break;
			}else{
				deleteGio_nhap($idtd);
				break;
			}
		}
	}
}