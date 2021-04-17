<?php
class ThongTin extends Database{
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
	
	//------------------------------------------Thong Tin---------------------------------------------------------
	//Khac	
	
	public function get_thong_tin($name){
		$sql = "SELECT * FROM thongtin WHERE name='$name'";
		return $this->get_row($sql);
	}
	public function update_thong_tin($name,$info){
		$name = $this->get_str($name);
		$info = $this->get_str($info);
		$this->do_sql("UPDATE thongtin SET info='$info' WHERE name='$name'");
	}
	
}