<?php
require_once("models/nhanvien.php");
$db = new NhanVien;

if(isset($_POST['add-bt'])==true){
	$name = $_SESSION['name'] = trim($_POST["name"]);
	$email = $_SESSION['email'] = trim($_POST["email"]);
	$phone = $_SESSION['phone'] = trim($_POST["phone"]);
	$address = $_SESSION['address'] = trim($_POST["address"]);
	$birthday = $_SESSION['birthday'] = trim($_POST["birthday"]);
	$luong = $_SESSION['luong'] = trim($_POST["luong"]);
	$cmnd1 = $_FILES['cmnd1']['name'];
	$cmnd2 = $_FILES['cmnd2']['name'];
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$daycrea = date("Y-m-d");
	$active = 1;
	$flag=1; $error = "";
	
	if(!ktchuoi($name,0,200)){$flag = 0;$error='Họ tên cho phép dưới 200 ký tự!';}
	if(strlen($name)==0){$flag = 0;$error='Bạn chưa nhập họ tên!';}
	if(strlen($phone)==0){$flag = 0;$error='Bạn chưa nhập số điện thoại!';}
	
	//Check image
	if ($flag==1){
		if (strlen($cmnd1)>0){			
			$tam = 1;
			$dimg = '.jpg';
			if($_FILES['cmnd1']['type'] !== "image/jpeg"){				
				$tam = 0;
			}
			if($_FILES['cmnd1']['size'] > 2097152 && $_FILES['cmnd1']['size'] > 0){
				$tam = 0;
			}
			if($tam==1){
				require_once("class/resizeimg.php");				
				$cmnd1 = 'thum_'.time().$dimg;
				
				$kichthuoc = getimagesize($_FILES["cmnd1"]["tmp_name"]);
				$viewsize=imgresize($kichthuoc,500,500);
				
				$resize = new ResizeImage($_FILES['cmnd1']['tmp_name']);
				$resize->resizeTo($viewsize[0], $viewsize[1], 'exact');
				$resize->saveImage('images/cmnd/'.$cmnd1, "100");
			}else{
				$error='Chỉ nhận ảnh JPG và < 2MB!';
				$flag = 0;
			}			
		}
	}
	if ($flag==1){
		if (strlen($cmnd2)>0){			
			$tam = 1;
			$dimg = '.jpg';
			if($_FILES['cmnd2']['type'] !== "image/jpeg"){				
				$tam = 0;
			}
			if($_FILES['cmnd2']['size'] > 2097152 && $_FILES['cmnd2']['size'] > 0){
				$tam = 0;
			}
			if($tam==1){
				require_once("class/resizeimg.php");				
				$cmnd2 = 'thum_'.time().$dimg;
				
				$kichthuoc = getimagesize($_FILES["cmnd2"]["tmp_name"]);
				$viewsize=imgresize($kichthuoc,500,500);
				
				$resize = new ResizeImage($_FILES['cmnd2']['tmp_name']);
				$resize->resizeTo($viewsize[0], $viewsize[1], 'exact');
				$resize->saveImage('images/cmnd/'.$cmnd2, "100");
			}else{
				$error='Chỉ nhận ảnh JPG và < 2MB!';
				$flag = 0;
			}			
		}
	}
	
	if($flag){
		$db->create_nhan_vien($name,$phone,$email,$address,$birthday,$luong,$cmnd1,$cmnd2,$daycrea,$active);
		$error = 'Tạo Thành Công!';
		unset($_SESSION['name']);
		unset($_SESSION['phone']);
		unset($_SESSION['email']);
		unset($_SESSION['address']);
		unset($_SESSION['birthday']);
		unset($_SESSION['luong']);
	}
}

require_once("views/nhanvien/add.php");
unset($db);

