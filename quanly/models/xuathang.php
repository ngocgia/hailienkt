<?php
class xuathang extends Database{
	var $error;
	
	// Hàm Khởi Tạo
    function __construct() {
        parent::connect();
    }     
    // Hàm ngắt kết nối
    function __destruct() {
        parent::dis_connect();
    }	
	
	public function get_list_san_pham($active,$search,$orderby,$start=0,$limit=0){
		$start = $this->get_str($start);
		$limit = $this->get_str($limit);
		$orderby = $this->get_str($orderby);		
		$active = $this->get_str($active);		
		$search = $this->get_str($search);
		$str = '';		
		$flag = 0;
		if(strlen($active)>0){
			if($flag==0){
				$str = 'WHERE active='.$active;
				$flag = 1;
			}else{
				$str .= ' AND active='.$active;
			}
		}
		if(strlen($search)>0){
			if($flag==0){
				$str = "WHERE key_search LIKE '%".$search."%'";
				$flag = 1;
			}else{
				$str .= " AND key_search LIKE '%".$search."%'";
			}
		}	
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM sanpham ".$str." ORDER BY ".$orderby;
		}else{
			$sql = "SELECT * FROM sanpham ".$str." ORDER BY ".$orderby." LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}	
	public function get_row_san_pham($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM sanpham WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function get_row_user($username){
		$username = $this->get_str($username);
		$sql = "SELECT * FROM account WHERE username='$username'";
		return $this->get_row($sql);
	}
	public function get_row_khach_hang_phone($phone){
		$phone = $this->get_str($phone);
		$sql = "SELECT * FROM khachhang WHERE phone='$phone'";
		return $this->get_row($sql);
	}
	public function get_row_khach_hang($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM khachhang WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function tich_luy_khach_hang($id){
		$id = $this->get_str($id);		
		$sql = "SELECT sum(total) AS tong_total FROM xuathang WHERE id_kh='$id'";
		$row = $this->get_row($sql);
		return $row['tong_total'];
	}
	public function get_thong_tin($name){
		$sql = "SELECT * FROM thongtin WHERE name='$name'";
		return $this->get_row($sql);
	}	
	public function create_xuat_hang($id_user,$id_kh,$total,$sale_percent,$sale_money,$tratruoc,$daycrea,$dayup,$active){
		$id_user = $this->get_str($id_user);
		$id_kh = $this->get_str($id_kh);
		$sale_percent = $this->get_str($sale_percent);
		$sale_money = $this->get_str($sale_money);
		$tratruoc = $this->get_str($tratruoc);
		$total = $this->get_str($total);
		$daycrea = $this->get_str($daycrea);
		$dayup = $this->get_str($dayup);
		$active = $this->get_str($active);
		
		$sql = "INSERT INTO xuathang (id_user,id_kh,total,sale_percent,sale_money,tratruoc,daycrea,dayup,active) 
				VALUES ('$id_user','$id_kh','$total','$sale_percent','$sale_money','$tratruoc','$daycrea','$dayup','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function create_xuat_hang_chi_tiet($id_xh,$id_sp,$price,$soluong,$daycrea,$dayup,$active){
		$id_xh = $this->get_str($id_xh);
		$id_sp = $this->get_str($id_sp);
		$price = $this->get_str($price);
		$soluong = $this->get_str($soluong);
		$daycrea = $this->get_str($daycrea);
		$dayup = $this->get_str($dayup);
		$active = $this->get_str($active);
		
		$sql = "INSERT INTO xuathang_detail (id_xh,id_sp,soluong,price,daycrea,dayup,active) 
				VALUES ('$id_xh','$id_sp','$soluong','$price','$daycrea','$dayup','$active')";				
		$this->do_sql($sql);
		return true;
	}
	public function get_id_xuat_hang_moi(){		
		$sql = "SELECT * FROM xuathang ORDER BY id DESC LIMIT 0,1";	
		$row = $this->get_row($sql);
		return $row['id'];
	}
	public function delete_row_xuat_hang($id){
		$id = $this->get_str($id);
		
		$sql = "DELETE FROM xuathang_detail WHERE id_xh='$id'";
		$this->do_sql($sql);
		
		$sql = "DELETE FROM xuathang WHERE id='$id'";
		$this->do_sql($sql);		
		return TRUE;
	}	
	public function count_xuat_hang($start_time,$end_time){
		$start_time = $this->get_str($start_time);
		$end_time = $this->get_str($end_time);
		$start_time .= ' 00:00:00';
		$end_time .= ' 23:59:59';
		
		$sql = "SELECT count(id) AS tong_id, sum(total) AS tong_total FROM xuathang WHERE dayup BETWEEN '".$start_time."' AND '".$end_time."'";
		return $this->get_row($sql);
	}
	public function get_list_xuat_hang($start_time,$end_time){
		$start_time = $this->get_str($start_time);
		$end_time = $this->get_str($end_time);
		$start_time .= ' 00:00:00';
		$end_time .= ' 23:59:59';
		
		$sql = "SELECT * FROM xuathang WHERE dayup BETWEEN '".$start_time."' AND '".$end_time."' ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function count_xuat_hang_ghi_no($search){
		$search = $this->get_str($search);
		if(strlen($search)>0){			
			$sql = "SELECT count(xuathang.id) AS tong_id, sum(xuathang.total) AS tong_total, sum(xuathang.total-xuathang.tratruoc) AS tong_no FROM xuathang,khachhang WHERE xuathang.active=0 AND xuathang.id_kh=khachhang.id AND khachhang.key_search LIKE '%".$search."%'";
		}else{
			$sql = "SELECT count(id) AS tong_id, sum(total) AS tong_total, sum(total-tratruoc) AS tong_no FROM xuathang WHERE active=0";
		}
		return $this->get_row($sql);
	}
	public function get_list_xuat_hang_ghi_no($search){
		$search = $this->get_str($search);	
		if(strlen($search)>0){	
			$sql = "SELECT xuathang.id AS id, xuathang.sale_percent AS sale_percent, xuathang.sale_money AS sale_money, xuathang.total AS total, xuathang.tratruoc AS tratruoc, xuathang.dayup AS dayup, xuathang.id_kh AS id_kh FROM xuathang,khachhang WHERE xuathang.active=0 AND xuathang.id_kh=khachhang.id AND khachhang.key_search LIKE '%".$search."%' ORDER BY xuathang.dayup DESC";
		}else{
			$sql = "SELECT xuathang.id AS id, xuathang.sale_percent AS sale_percent, xuathang.sale_money AS sale_money, xuathang.total AS total, xuathang.tratruoc AS tratruoc, xuathang.dayup AS dayup, xuathang.id_kh AS id_kh FROM xuathang WHERE xuathang.active=0 ORDER BY xuathang.dayup DESC";
		}
		return $this->get_list($sql);
	}
	public function active_row_xuat_hang_ghi_no($id,$active){
		$id = $this->get_str($id);
		$active = $this->get_str($active);
		$this->do_sql("UPDATE xuathang SET active='$active' WHERE id='$id'");
		return TRUE;
	}
	public function update_row_xuat_hang_ghi_no($id,$tratruoc){
		$id = $this->get_str($id);
		$tratruoc = $this->get_str($tratruoc);
		$this->do_sql("UPDATE xuathang SET tratruoc='$tratruoc' WHERE id='$id'");
		return TRUE;
	}
	public function get_row_xuat_hang($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM xuathang WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function get_list_xuat_hang_chi_tiet($id){
		$sql = "SELECT * FROM xuathang_detail WHERE id_xh='$id' ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function get_row_user_id($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM account WHERE id='$id'";
		return $this->get_row($sql);
	}
}