<?php
require_once("models/hoatdong.php");
$db = new hoatdong;

if(isset($_POST['add-bt'])==true){	
    $name = $_SESSION['name'] = trim($_POST["name"]);
    $id_type = 0;
	$short_info = $_SESSION['short_info'] = trim($_POST["short_info"]);
	$info = $_SESSION['info'] = trim($_POST["info"]);
	$image = $_FILES['image']['name'];
	$dayup = date("Y-m-d H:i:s");
	$daycrea = date("Y-m-d");
	$active = 1;
	$race = 0;
	$image_slide = '';
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
				require_once("class/resizeimg.php");				
				$image = 'hoat_dong_'.time().$dimg;
				
				$kichthuoc = getimagesize($_FILES["image"]["tmp_name"]);
				$viewsize=imgresize($kichthuoc,681,463);
				
				$resize = new ResizeImage($_FILES['image']['tmp_name']);
				$resize->resizeTo($viewsize[0], $viewsize[1], 'exact');
				$resize->saveImage('../images/hoatdong/'.$image, "50");
			}else{
				$error='Chỉ nhận ảnh JPG và < 2MB!';
				$flag = 0;
			}			
		}
	}

    if($flag){
		$key_search = strtolower(chuyenChuoi($name.' '.$short_info));
        $db->create_row_hoat_dong($name,$id_type,$image,$image_slide,$short_info,$info,$key_search,$dayup,$daycrea,$race,$active);
        $error = 'Tạo Thành Công!';
    }
}

require_once("views/hoatdong/add.php");
unset($db);
