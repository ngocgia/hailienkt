<?php
require_once("models/khoanh.php");
$db = new KhoAnh;

if(isset($_POST['p-up-photos'])==true){	
	$daycrea = date("Y-m-d");
	$flag=1; $error = "";
	for($i=0; $i<count($_FILES['file']['name']); $i++) {
		$image = $_FILES['file']['name'][$i];	
		if (strlen($image)>0){
			$tam=0;
			if($_FILES['file']['type'][$i] == "image/jpeg"){
				$dimg = '.jpg';
				$tam = 1;
			}
			if($_FILES['file']['type'][$i] == "image/png"){
				$dimg = '.png';
				$tam = 1;
			}
			if($_FILES['file']['type'][$i] == "image/gif"){
				$dimg = '.gif';
				$tam = 1;
			}
			if($_FILES['file']['size'][$i]==0 || $_FILES['file']['size'][$i]>(2000*1024)){
			$error = 'Kích thước quá lớn!(Maximum: 2000KB)';
			$flag=0;
			}
			if($tam==1){
				if($flag){
					$image = 'thum_'.time().$i.$dimg;
					move_uploaded_file($_FILES['file']['tmp_name'][$i],'../images/khoanh/'.$image);
					$db->createHA($image,$daycrea);
					$error = 'Tạo Thành Công!';
				}
			}else{
				$error = 'Kiểu File không hợp lệ!';
			}			
		}else{
			$error = 'Bạn chưa chọn ảnh!';
		}
	}
}

if(isset($_GET['num'])==true){
	$num = $_GET['num'];
}else{
	$num = 1;
}

if(isset($_POST['delete-bt'])==true){
	$array_img = $_POST["arrid"];
	$n = count($array_img);
	for($i=0;$i<$n;$i++){
		$db->deleteHA($array_img[$i]);
	}
}

$row_sum = $db->countHA();
$sum = $row_sum['TotalID'];
$limit = 30;
$pages = (($sum%$limit)==0)?$sum/$limit:floor($sum/$limit)+1;
$start = ($num-1)*$limit;
$array= $db->getListHA($start,$limit);


require_once("views/khoanh/list.php");
unset($db);
