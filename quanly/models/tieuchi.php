<?php
class tieuchi extends Database{
	var $error;
	
	// Hàm Khởi Tạo
    function __construct() {
        parent::connect();
    }     
    // Hàm ngắt kết nối
    function __destruct() {
        parent::dis_connect();
    }
	
	//tieuchi
	public function get_list_tieu_chi($active=1,$orderby){
		$active = $this->get_str($active);
		$orderby = $this->get_str($orderby);
		$sql = "SELECT * FROM tieuchi WHERE active=".$active." ORDER BY ".$orderby;
		return $this->get_list($sql);
	}
	public function get_row_tieu_chi($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM tieuchi WHERE id='$id'";
		return $this->get_row($sql);
	}	
	public function create_row_tieu_chi($name,$image,$short_info,$tt,$active){
		$name = $this->get_str($name);
		$image = $this->get_str($image);
		$short_info = $this->get_str($short_info);
		$tt = $this->get_str($tt);
		$active = $this->get_str($active);
		$sql = "INSERT INTO tieuchi (name,image,short_info,tt,active) 
				VALUES ('$name','$image','$short_info','$tt','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function update_row_tieu_chi($id,$name,$image,$short_info,$tt){
		$id = $this->get_str($id);
		$name = $this->get_str($name);
		$image = $this->get_str($image);
		$short_info = $this->get_str($short_info);
		$tt = $this->get_str($tt);
		$this->do_sql("UPDATE tieuchi SET name='$name' WHERE id='$id'");
		$this->do_sql("UPDATE tieuchi SET image='$image' WHERE id='$id'");
		$this->do_sql("UPDATE tieuchi SET short_info='$short_info' WHERE id='$id'");
		$this->do_sql("UPDATE tieuchi SET tt='$tt' WHERE id='$id'");
	}
	public function active_row_tieu_chi($id,$active){
		$id = $this->get_str($id);
		$active = $this->get_str($active);
		$this->do_sql("UPDATE tieuchi SET active='$active' WHERE id='$id'");
		return TRUE;
	}
	public function delete_row_tieu_chi($id){
		$id = $this->get_str($id);	
		$sql = "DELETE FROM tieuchi WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
}