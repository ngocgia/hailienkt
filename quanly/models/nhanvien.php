<?php
class NhanVien extends Database
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
	
	public function count_list_nhan_vien($active){
		$active = $this->get_str($active);		
		$str = '';
		if(strlen($active)>0){$str = 'WHERE active='.$active;}		
		$sql = "SELECT count(id) AS TotalID FROM nhanvien ".$str;
		return $this->get_row($sql);
	}
	public function get_list_nhan_vien($active,$start,$limit){
		$active = $this->get_str($active);
		$start = $this->get_str($start);
		$limit = $this->get_str($limit);		
		$str = '';
		if(strlen($active)>0){$str = 'WHERE active='.$active;}
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM nhanvien ".$str." ORDER BY active DESC,id DESC";
		}else{
			$sql = "SELECT * FROM nhanvien ".$str." ORDER BY active DESC,id DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	public function active_nhan_vien($id,$active){
		$id = $this->get_str($id);
		$active = $this->get_str($active);
		$this->do_sql("UPDATE nhanvien SET active='$active' WHERE id='$id'");
		return TRUE;
	}	
	public function create_nhan_vien($name,$phone,$email,$address,$birthday,$luong,$cmnd1,$cmnd2,$daycrea,$active){
		$name = $this->get_str($name);
		$phone = $this->get_str($phone);
		$email = $this->get_str($email);
		$address = $this->get_str($address);
		$birthday = $this->get_str($birthday);
		$luong = $this->get_str($luong);
		$cmnd1 = $this->get_str($cmnd1);
		$cmnd2 = $this->get_str($cmnd2);
		$daycrea = $this->get_str($daycrea);
		$active = $this->get_str($active);
		$sql = "INSERT INTO nhanvien (name,phone,email,address,birthday,luong,cmnd1,cmnd2,daycrea,active) 
				VALUES ('$name','$phone','$email','$address','$birthday','$luong','$cmnd1','$cmnd2','$daycrea','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function delete_nhan_vien($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM nhanvien WHERE id='$id'";
		$row = $this->get_row($sql);
		if(strlen($row['cmnd1'])>0){
			$delImage = 'images/cmnd/'. $row['cmnd1'];
			unlink($delImage);
		}
		if(strlen($row['cmnd2'])>0){
			$delImage = 'images/cmnd/'. $row['cmnd2'];
			unlink($delImage);
		}
		$sql = "DELETE FROM nhanvien WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	public function get_nhan_vien($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM nhanvien WHERE id='$id'";
		return $this->get_row($sql);
	}	
	public function update_nhan_vien($id,$name,$phone,$email,$address,$birthday,$luong,$cmnd1,$cmnd2){
		$id = $this->get_str($id);
		$name = $this->get_str($name);
		$phone = $this->get_str($phone);
		$email = $this->get_str($email);
		$address = $this->get_str($address);
		$birthday = $this->get_str($birthday);
		$luong = $this->get_str($luong);
		$cmnd1 = $this->get_str($cmnd1);
		$cmnd2 = $this->get_str($cmnd2);
		$this->do_sql("UPDATE nhanvien SET name='$name' WHERE id='$id'");
		$this->do_sql("UPDATE nhanvien SET phone='$phone' WHERE id='$id'");
		$this->do_sql("UPDATE nhanvien SET email='$email' WHERE id='$id'");
		$this->do_sql("UPDATE nhanvien SET address='$address' WHERE id='$id'");
		$this->do_sql("UPDATE nhanvien SET birthday='$birthday' WHERE id='$id'");
		$this->do_sql("UPDATE nhanvien SET luong='$luong' WHERE id='$id'");
		if(strlen($cmnd1)>0){$this->do_sql("UPDATE nhanvien SET cmnd1='$cmnd1' WHERE id='$id'");}
		if(strlen($cmnd2)>0){$this->do_sql("UPDATE nhanvien SET cmnd2='$cmnd2' WHERE id='$id'");}
	}
	public function sum_luong_nhan_vien($id){
		$id = $this->get_str($id);			
		$sql = "SELECT sum(luong_thuc) AS Total_Luong FROM nhanvien_luong WHERE id_nv='$id'";
		return $this->get_row($sql);
	}
	public function get_list_luong_nhan_vien($id){
		$id = $this->get_str($id);			
		$sql = "SELECT * FROM nhanvien_luong WHERE id_nv='$id' ORDER BY code_time DESC";
		return $this->get_list($sql);
	}
	public function get_list_bang_luong($code_time){
		$code_time = $this->get_str($code_time);			
		$sql = "SELECT * FROM nhanvien_luong WHERE code_time='$code_time' ORDER BY id_nv DESC";
		return $this->get_list($sql);
	}
	public function sum_bang_luong($code_time){
		$code_time = $this->get_str($code_time);			
		$sql = "SELECT sum(luong_thuc) AS Total_Luong FROM nhanvien_luong WHERE code_time='$code_time'";
		return $this->get_row($sql);
	}
	public function create_luong_nhan_vien($id_nv,$luong,$luong_thuc,$info,$code_time,$daycrea){
		$id_nv = $this->get_str($id_nv);
		$luong = $this->get_str($luong);
		$luong_thuc = $this->get_str($luong_thuc);
		$info = $this->get_str($info);
		$code_time = $this->get_str($code_time);
		$daycrea = $this->get_str($daycrea);
		$sql = "INSERT INTO nhanvien_luong (id_nv,luong,luong_thuc,info,code_time,daycrea) 
				VALUES ('$id_nv','$luong','$luong_thuc','$info','$code_time','$daycrea')";
		$this->do_sql($sql);
		return true;
	}
	public function get_luong_nhan_vien($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM nhanvien_luong WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function update_luong_nhan_vien($id,$luong,$luong_thuc,$info,$code_time){
		$id = $this->get_str($id);
		$luong = $this->get_str($luong);
		$luong_thuc = $this->get_str($luong_thuc);
		$info = $this->get_str($info);
		$code_time = $this->get_str($code_time);
		$this->do_sql("UPDATE nhanvien_luong SET luong='$luong' WHERE id='$id'");
		$this->do_sql("UPDATE nhanvien_luong SET luong_thuc='$luong_thuc' WHERE id='$id'");
		$this->do_sql("UPDATE nhanvien_luong SET info='$info' WHERE id='$id'");
		$this->do_sql("UPDATE nhanvien_luong SET code_time='$code_time' WHERE id='$id'");
	}
	public function delete_luong_nhan_vien($id){
		$id = $this->get_str($id);
		$sql = "DELETE FROM nhanvien_luong WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	public function bang_luong_end($code_time,$luong_sum){
		$code_time = $this->get_str($code_time);
		$luong_sum = $this->get_str($luong_sum);
		$sql = "SELECT * FROM thongke WHERE code_time='$code_time'";
		$array = $this->get_list($sql);
		if(count($array)==1){
			$this->do_sql("UPDATE thongke SET luong='$luong_sum' WHERE code_time='$code_time'");
		}else{
			$this->do_sql("INSERT INTO thongke (code_time,doanhthu,chiphi,luong) VALUES ('$code_time','','','$luong_sum')");
		}
		return TRUE;
	}
}

