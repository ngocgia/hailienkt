<?php
require_once("models/nhaphang.php");
$db = new nhaphang;

if(isset($_POST['capnhat-bt'])==true){
	$n_gio = @count($_SESSION['cart_nhap']);
	if($n_gio>0){
		$arr_num = $_POST["arr_num"];
		$arr_price = $_POST["arr_price"];
		for($i=0;$i<$n_gio;$i++){
			if($arr_num[$i]>0){
				$_SESSION['soluong_nhap'][$i] = (int)$arr_num[$i];
				$_SESSION['gia_nhap'][$i] = (int)$arr_price[$i];
			}else{
				deleteGio($_SESSION['cart_nhap'][$i]);
			}
		}
		
		if(isset($_POST['id_dt'])==true && $_POST["id_dt"]>0){
			$_SESSION['id_dt'] = trim($_POST["id_dt"]);
		}
	}
}


if(isset($_POST['nhap-bt'])==true){	
	$n_gio = @count($_SESSION['cart_nhap']);
	if($n_gio>0){
		$arr_num = $_POST["arr_num"];
		$arr_price = $_POST["arr_price"];
		$row_user = $db->get_row_user($_SESSION['userctkt']);
		$tong = 0;
		for($i=0;$i<$n_gio;$i++){
			$tong += $arr_price[$i]*$arr_num[$i];
		}
		if(isset($_SESSION['id_dt']) && $_SESSION['id_dt']>0){
			$id_dt = (int)$_SESSION['id_dt'];
		}else{
			$id_dt = 0;
		}
		$dayup = date("Y-m-d H:i:s");
		$daycrea = date("Y-m-d");
		$tratruoc = 0;
		$db->create_nhap_hang($row_user['id'],$id_dt,$tong,$tratruoc,$daycrea,$dayup,1);
		
		$id_nh = $db->get_id_nhap_hang_moi();
		for($i=0;$i<$n_gio;$i++){
			$db->create_nhap_hang_chi_tiet($id_nh,$_SESSION['cart_nhap'][$i],$arr_price[$i],$arr_num[$i],$daycrea,$dayup,1);
		}
		unset($_SESSION['cart_nhap']);unset($_SESSION['soluong_nhap']);unset($_SESSION['price']);
		unset($_SESSION['id_dt']);
		check('Nhập hàng thành công!');
	}
	
}

if(isset($_POST['ghi-no-bt'])==true){	
	$n_gio = @count($_SESSION['cart_nhap']);
	if($n_gio>0){
		$arr_num = $_POST["arr_num"];
		$arr_price = $_POST["arr_price"];
		$tratruoc = trim($_POST["get_money"]);
		$row_user = $db->get_row_user($_SESSION['userctkt']);
		$tong = 0;
		for($i=0;$i<$n_gio;$i++){
			$tong += $arr_price[$i]*$arr_num[$i];
		}
		if(isset($_SESSION['id_dt']) && $_SESSION['id_dt']>0){
			$id_dt = (int)$_SESSION['id_dt'];
		}else{
			$id_dt = 0;
		}
		if($id_dt>0){
			$dayup = date("Y-m-d H:i:s");
			$daycrea = date("Y-m-d");
			$db->create_nhap_hang($row_user['id'],$id_dt,$tong,$tratruoc,$daycrea,$dayup,0);
			
			$id_nh = $db->get_id_nhap_hang_moi();
			for($i=0;$i<$n_gio;$i++){
				$db->create_nhap_hang_chi_tiet($id_nh,$_SESSION['cart_nhap'][$i],$arr_price[$i],$arr_num[$i],$daycrea,$dayup,1);
			}
			unset($_SESSION['cart_nhap']);unset($_SESSION['soluong_nhap']);unset($_SESSION['price']);
			unset($_SESSION['id_dt']);
			check('Nhập hàng thành công!');
		}else{
			check('Chưa nhập Đối tác!');
		}
	}	
}

$array_san_pham = $db->get_list_san_pham(1,'','dayup DESC',0,20);

require_once("views/nhaphang/add.php");
unset($db);
