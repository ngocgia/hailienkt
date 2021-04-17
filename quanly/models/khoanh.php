<?php
class KhoAnh extends Database{
	var $user;
	var $error;
	
	// Hàm Khởi Tạo
    function __construct() {
        parent::connect();
    }     
    // Hàm ngắt kết nối
    function __destruct() {
        parent::dis_connect();
    }	

	public function countHA(){
		$sql = "SELECT count(id) AS TotalID FROM khoanh";
		return $this->get_row($sql);
	}
	public function getListHA($start,$limit){
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM khoanh ORDER BY daycrea DESC,id DESC ";
		}else{
			$sql = "SELECT * FROM khoanh ORDER BY daycrea DESC,id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	//Tao
	public function createHA($image,$daycrea){
		$image = $this->get_str($image);
		$daycrea = $this->get_str($daycrea);
		$sql = "INSERT INTO khoanh (image,daycrea) 
		VALUES ('$image','$daycrea')";
		$this->do_sql($sql);
		return true;
	}
	public function deleteHA($id){
		//delete images
		$sql = "SELECT * FROM khoanh WHERE id='$id'";
		$row = $this->get_row($sql);
		if(strlen($row['image'])>0){
			$delImage = '../images/khoanh/'. $row['image'];
			unlink($delImage);
		}
		$id = $this->get_str($id);
		$sql = "DELETE FROM khoanh WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	
}