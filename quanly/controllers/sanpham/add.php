<?php
require_once("models/sanpham.php");
$db = new sanpham;

if(isset($_POST['add-bt'])==true){	
    $name = $_SESSION['name'] = trim($_POST["name"]);
    $id_1 = $_SESSION['id_1'] = (int)trim($_POST["id_1"]);
	$id_2 = $_SESSION['id_2'] = (int)trim($_POST["id_2"]);
	$news = 1;
	$sale = $_SESSION['sale'] = (int)trim($_POST["sale"]);
	$price = $_SESSION['price'] = (int)trim($_POST["price"]);
	$short_info = $_SESSION['short_info'] = trim($_POST["short_info"]);
	$info = $_SESSION['info'] = trim($_POST["info"]);
	$thongso = $_SESSION['thongso'] = trim($_POST["thongso"]);
	$image = $_FILES['image']['name'];
	$dayup = date("Y-m-d H:i:s");
	$daycrea = date("Y-m-d");
	$active = 1;
	$race = 0;
	$image_slide = '';
    $flag=1; $error = "";
    if(!ktchuoi($name,1,200)){$flag = 0;$error='Lỗi nhập tiêu đề!';}
	if($id_1==0){$flag = 0;$error='Bạn chưa chọn loại 1!';}
	if($id_2==0){$flag = 0;$error='Bạn chưa chọn loại 2!';}
	//if($price==0){$flag = 0;$error='Bạn chưa nhập giá!';}
	
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
				$image = 'tmkt_'.time().$dimg;
				
				$kichthuoc = getimagesize($_FILES["image"]["tmp_name"]);
				$viewsize=imgresize($kichthuoc,380,240);
				
				$resize = new ResizeImage($_FILES['image']['tmp_name']);
				$resize->resizeTo($viewsize[0], $viewsize[1], 'exact');
				$resize->saveImage('../images/sanpham/'.$image, "50");
			}else{
				$error='Chỉ nhận ảnh JPG và < 2MB!';
				$flag = 0;
			}			
		}
	}

    if($flag){
		$row_1 = $db->get_row_san_pham_type_1($id_1);
		$row_2 = $db->get_row_san_pham_type_2($id_2);
		$id_type = $id_1.'.'.$id_2;
		$key_search = strtolower(chuyenChuoi($name.' '.$row_1['name'].' '.$row_2['name'].' '.strip_tags($short_info)));
        $db->create_row_san_pham($name,$id_type,$image,$image_slide,$key_search,$news,$sale,$price,$short_info,$info,$thongso,$daycrea,$dayup,$race,$active);
        $error = 'Tạo Thành Công!';
    }
}

require_once("views/sanpham/add.php");
unset($db);
