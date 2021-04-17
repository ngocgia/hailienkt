<?php
class thongke extends Database{
	var $error;
	
	// Hàm Khởi Tạo
    function __construct() {
        parent::connect();
    }     
    // Hàm ngắt kết nối
    function __destruct() {
        parent::dis_connect();
    }	
	
	//--------------------------------------------------------------------------------------
	
	public function thong_ke_nhap($year,$month){
		$year = $this->get_str($year);
		$month = $this->get_str($month);
		$sql = "SELECT sum(total) AS tong_total FROM nhaphang WHERE dayup LIKE '".$year."-".$month."%'";
		return $this->get_row($sql);
	}
	public function thong_ke_xuat($year,$month){
		$year = $this->get_str($year);
		$month = $this->get_str($month);
		$sql = "SELECT sum(total) AS tong_total FROM xuathang WHERE dayup LIKE '".$year."-".$month."%'";
		return $this->get_row($sql);
	}
	public function thong_ke_chi_phi($year,$month){
		$year = $this->get_str($year);
		$month = $this->get_str($month);
		$sql = "SELECT sum(chiphi) AS tong_total FROM chiphi WHERE code_time LIKE '".$year.$month."%'";
		return $this->get_row($sql);
	}
	public function thong_ke_luong($year,$month){
		$year = $this->get_str($year);
		$month = $this->get_str($month);
		$sql = "SELECT sum(luong_thuc) AS tong_total FROM nhanvien_luong WHERE code_time LIKE '".$year.$month."%'";
		return $this->get_row($sql);
	}
	
}