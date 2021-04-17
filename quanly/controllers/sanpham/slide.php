<?php
require_once("models/sanpham.php");
$db = new sanpham;

if(isset($_POST['p-up-photos'])==true){
	$id = trim($_POST["id"]);
	$row = $db->get_row_san_pham($id);
	$str = $row['image_slide'];
	$daycrea = date("Y-m-d");
	$flag=1; $error = "";
	for($i=0; $i<count($_FILES['file']['name']); $i++) {
		$image = $_FILES['file']['name'][$i];
		if (strlen($image)>0){
			$tam = 1;
			$dimg = '.jpg';
			if($_FILES['file']['type'][$i] !== "image/jpeg"){				
				$tam = 0;
			}
			if($_FILES['file']['size'][$i] > 2097152 && $_FILES['file']['size'] > 0){
				$tam = 0;
			}
			if($tam==1){
				require_once("class/resizeimg.php");				
				$image = 'tour_'.time().$i.$dimg;
				
				$kichthuoc = getimagesize($_FILES["file"]["tmp_name"][$i]);
				$viewsize=imgresize($kichthuoc,380,240);
				
				$resize = new ResizeImage($_FILES['file']['tmp_name'][$i]);
				$resize->resizeTo($viewsize[0], $viewsize[1], 'exact');
				$resize->saveImage('../images/sanpham/'.$image, "50");
				
				$ar = explode(';',$str);
				if(strlen($ar[0])==0){
					$str .= $image;			
				}else{
					$str .= ';'.$image;
				}
			}else{
				$error='Chỉ nhận ảnh JPG và < 2MB!';
				$flag = 0;
			}						
		}else{
			$error = 'Bạn chưa chọn ảnh!';
		}
	}
	$db->updateImage($id,$str);
}else{
	$id = $_GET['id'];
}

$row = $db->get_row_san_pham($id);
$array = explode(';',$row['image_slide']);
$n = count($array);

require_once("views/sanpham/slide.php");
unset($db);
