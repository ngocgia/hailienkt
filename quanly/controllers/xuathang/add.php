<?php
require_once("models/xuathang.php");
$db = new xuathang;

if(isset($_POST['capnhat-bt'])==true){
	$n_gio = @count($_SESSION['cart']);
	if($n_gio>0){
		$arr_num = $_POST["arr_num"];
		$arr_price = $_POST["arr_price"];
		for($i=0;$i<$n_gio;$i++){
			if($arr_num[$i]>0){
				$_SESSION['soluong'][$i] = (int)$arr_num[$i];
				$_SESSION['gia'][$i] = (int)$arr_price[$i];
			}else{
				deleteGio($_SESSION['cart'][$i]);
			}
		}
		
		$_SESSION['sale_money'] = (int)trim($_POST["sale_money"]);
		$_SESSION['sale_percent'] = (int)trim($_POST["sale_percent"]);
		if(isset($_POST['id_kh'])==true && $_POST["id_kh"]>0){
			$_SESSION['id_kh'] = trim($_POST["id_kh"]);
		}
	}
}


if(isset($_POST['nhap-bt'])==true){	
	$n_gio = @count($_SESSION['cart']);
	if($n_gio>0){
		$sale_money = trim($_POST["sale_money"]);
		$sale_percent = trim($_POST["sale_percent"]);
		$arr_num = $_POST["arr_num"];
		$arr_price = $_POST["arr_price"];
		$row_user = $db->get_row_user($_SESSION['userctkt']);
		$tong = 0;
		for($i=0;$i<$n_gio;$i++){
			$tong += $arr_price[$i]*$arr_num[$i];
		}
		$tong = $tong*(100-$sale_percent)/100 - $sale_money;
		if(isset($_SESSION['id_kh']) && $_SESSION['id_kh']>0){
			$id_kh = (int)$_SESSION['id_kh'];
		}else{
			$id_kh = 0;
		}
		$dayup = date("Y-m-d H:i:s");
		$daycrea = date("Y-m-d");
		$tratruoc = 0;
		$db->create_xuat_hang($row_user['id'],$id_kh,$tong,$sale_percent,$sale_money,$tratruoc,$daycrea,$dayup,1);
		
		$id_xh = $db->get_id_xuat_hang_moi();
		for($i=0;$i<$n_gio;$i++){
			$db->create_xuat_hang_chi_tiet($id_xh,$_SESSION['cart'][$i],$arr_price[$i],$arr_num[$i],$daycrea,$dayup,1);
		}
		unset($_SESSION['cart']);unset($_SESSION['soluong']);unset($_SESSION['price']);
		unset($_SESSION['sale_money']);unset($_SESSION['sale_percent']);
		unset($_SESSION['get_money']);unset($_SESSION['id_kh']);
		check('Xuất hàng thành công!');
	}
	
}

if(isset($_POST['ghi-no-bt'])==true){	
	$n_gio = @count($_SESSION['cart']);
	if($n_gio>0){
		$sale_money = trim($_POST["sale_money"]);
		$sale_percent = trim($_POST["sale_percent"]);
		$tratruoc = trim($_POST["get_money"]);
		$arr_num = $_POST["arr_num"];
		$arr_price = $_POST["arr_price"];
		$row_user = $db->get_row_user($_SESSION['userctkt']);
		$tong = 0;
		for($i=0;$i<$n_gio;$i++){
			$tong += $arr_price[$i]*$arr_num[$i];
		}
		$tong = $tong*(100-$sale_percent)/100 - $sale_money;
		if(isset($_SESSION['id_kh']) && $_SESSION['id_kh']>0){
			$id_kh = (int)$_SESSION['id_kh'];
		}else{
			$id_kh = 0;
		}
		
		if($id_kh>0){
			$dayup = date("Y-m-d H:i:s");
			$daycrea = date("Y-m-d");
			$db->create_xuat_hang($row_user['id'],$id_kh,$tong,$sale_percent,$sale_money,$tratruoc,$daycrea,$dayup,0);
			
			$id_xh = $db->get_id_xuat_hang_moi();
			for($i=0;$i<$n_gio;$i++){
				$db->create_xuat_hang_chi_tiet($id_xh,$_SESSION['cart'][$i],$arr_price[$i],$arr_num[$i],$daycrea,$dayup,1);
			}
			unset($_SESSION['cart']);unset($_SESSION['soluong']);unset($_SESSION['price']);
			unset($_SESSION['sale_money']);unset($_SESSION['sale_percent']);
			unset($_SESSION['get_money']);unset($_SESSION['id_kh']);
			check('Xuất hàng thành công!');
		}else{
			check('Chưa nhập Khách hàng!');
		}
	}
	
}

$array_san_pham = $db->get_list_san_pham(1,'','dayup DESC',0,20);

require_once("views/xuathang/add.php");
unset($db);
