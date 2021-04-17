<?php
class ChiPhi extends Database
{
	var $error;
	var $user;
	var $pass;
    
    // Hàm Khởi Tạo
    function __construct() {
        parent::connect();
    }
     
    // Hàm ngắt kết nối
    function __destruct() {
        parent::dis_connect();
    }
	
	public function get_list_chi_phi($code_time){
		$code_time = $this->get_str($code_time);			
		$sql = "SELECT * FROM chiphi WHERE code_time='$code_time' ORDER BY code_time DESC,id DESC";
		return $this->get_list($sql);
	}
	public function sum_chi_phi($code_time){
		$code_time = $this->get_str($code_time);			
		$sql = "SELECT sum(chiphi) AS Total_Luong FROM chiphi WHERE code_time='$code_time'";
		return $this->get_row($sql);
	}
	public function create_chi_phi($name,$chiphi,$info,$code_time,$daycrea){
		$name = $this->get_str($name);
		$chiphi = $this->get_str($chiphi);
		$info = $this->get_str($info);
		$code_time = $this->get_str($code_time);
		$daycrea = $this->get_str($daycrea);
		$sql = "INSERT INTO chiphi (name,chiphi,info,code_time,daycrea) 
				VALUES ('$name','$chiphi','$info','$code_time','$daycrea')";
		$this->do_sql($sql);
		return true;
	}
	public function get_chi_phi($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM chiphi WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function update_chi_phi($id,$name,$chiphi,$info,$code_time){
		$id = $this->get_str($id);
		$name = $this->get_str($name);
		$chiphi = $this->get_str($chiphi);
		$info = $this->get_str($info);
		$code_time = $this->get_str($code_time);
		$this->do_sql("UPDATE chiphi SET name='$name' WHERE id='$id'");
		$this->do_sql("UPDATE chiphi SET chiphi='$chiphi' WHERE id='$id'");
		$this->do_sql("UPDATE chiphi SET info='$info' WHERE id='$id'");
		$this->do_sql("UPDATE chiphi SET code_time='$code_time' WHERE id='$id'");
	}
	public function delete_chi_phi($id){
		$id = $this->get_str($id);
		$sql = "DELETE FROM chiphi WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	public function chi_phi_end($code_time,$chiphi_sum){
		$code_time = $this->get_str($code_time);
		$chiphi_sum = $this->get_str($chiphi_sum);
		$sql = "SELECT * FROM thongke WHERE code_time='$code_time'";
		$array = $this->get_list($sql);
		if(count($array)==1){
			$this->do_sql("UPDATE thongke SET chiphi='$chiphi_sum' WHERE code_time='$code_time'");
		}else{
			$this->do_sql("INSERT INTO thongke (code_time,doanhthu,chiphi,luong) VALUES ('$code_time','','$chiphi_sum','')");
		}
		return TRUE;
	}
}

