<?php
require_once("models/dichvu.php");
$db = new dichvu;

if(isset($_POST['edit-bt'])==true){
	$name = trim($_POST["name"]);
    $id_type = 0;
	$short_info = trim($_POST["short_info"]);
	$info = trim($_POST["info"]);
	$image = $_FILES['image']['name'];
	$dayup = date("Y-m-d H:i:s");
	$id = trim($_POST["id"]);
	
	$flag=1; $error = "";
	if(!ktchuoi($name,1,200)){$flag = 0;$error='Lỗi nhập tiêu đề!';}
	
	//Check image
	if ($flag==1){
		if (strlen($image)>0){			
			$tam = 1;
			$dimg = '.jpg';
			if($_FILES['image']['type'] !== "image/jpeg"){				
				$tam = 0;
			}
			if($_FILES['image']['size'] > 2097152 && $_FILES['image']['size'] > 0){
				$tam = 0;
			}
			if($tam==1){
				$row = $db->get_row_dich_vu($id);
				if(strlen($row['image'])>0){
					$delImage = '../images/dichvu/'. $row['image'];
					unlink($delImage);
				}
				
				require_once("class/resizeimg.php");				
				$image = 'dich_vu_'.time().$dimg;
				
				$kichthuoc = getimagesize($_FILES["image"]["tmp_name"]);
				$viewsize=imgresize($kichthuoc,681,463);
				
				$resize = new ResizeImage($_FILES['image']['tmp_name']);
				$resize->resizeTo($viewsize[0], $viewsize[1], 'exact');
				$resize->saveImage('../images/dichvu/'.$image, "80");
			}else{
				$error='Chỉ nhận ảnh JPG và < 2MB!';
				$flag = 0;
			}			
		}
	}
	
	if($flag){
		$key_search = strtolower(chuyenChuoi($name.' '.$short_info));
		$db->update_row_dich_vu($id,$name,$id_type,$image,$short_info,$info,$key_search,$dayup);
		$error = 'Sữa Thành Công!';
	}
}else{
	$id = $_GET['id'];
}
$row = $db->get_row_dich_vu($id);

require_once("views/dichvu/edit.php");
unset($db);

