<?php
require_once("models/nhanvien.php");
$db = new NhanVien;

if(isset($_POST['edit-bt'])==true){
	$name = trim($_POST["name"]);
	$phone = trim($_POST["phone"]);
	$email = trim($_POST["email"]);
	$address = trim($_POST["address"]);
	$birthday = trim($_POST["birthday"]);
	$luong = trim($_POST["luong"]);
	$cmnd1 = $_FILES['cmnd1']['name'];
	$cmnd2 = $_FILES['cmnd2']['name'];
	$id = trim($_POST["id"]);
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
				$row = $db->get_nhan_vien($id);
				if(strlen($row['cmnd1'])>0){
					$delImage = 'images/cmnd/'. $row['cmnd1'];
					unlink($delImage);
				}
				
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
				$row = $db->get_nhan_vien($id);
				if(strlen($row['cmnd2'])>0){
					$delImage = 'images/cmnd/'. $row['cmnd2'];
					unlink($delImage);
				}
				
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
		$db->update_nhan_vien($id,$name,$phone,$email,$address,$birthday,$luong,$cmnd1,$cmnd2);
		$error = 'Sữa Thành Công!';
	}
}else{
	$id = $_GET['id'];
}

$row = $db->get_nhan_vien($id);

require_once("views/nhanvien/edit.php");
unset($db);

