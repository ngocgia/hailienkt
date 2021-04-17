<?php
class nhaphang extends Database{
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
	public function get_row_doi_tac_phone($phone){
		$phone = $this->get_str($phone);
		$sql = "SELECT * FROM doitac WHERE phone='$phone'";
		return $this->get_row($sql);
	}
	public function get_row_doi_tac($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM doitac WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function tich_luy_doi_tac($id){
		$id = $this->get_str($id);		
		$sql = "SELECT sum(total) AS tong_total FROM nhaphang WHERE id_dt='$id'";
		$row = $this->get_row($sql);
		return $row['tong_total'];
	}
	public function get_thong_tin($name){
		$sql = "SELECT * FROM thongtin WHERE name='$name'";
		return $this->get_row($sql);
	}	
	public function create_nhap_hang($id_user,$id_dt,$total,$tratruoc,$daycrea,$dayup,$active){
		$id_user = $this->get_str($id_user);
		$id_dt = $this->get_str($id_dt);
		$total = $this->get_str($total);
		$tratruoc = $this->get_str($tratruoc);
		$daycrea = $this->get_str($daycrea);
		$dayup = $this->get_str($dayup);
		$active = $this->get_str($active);
		
		$sql = "INSERT INTO nhaphang (id_user,id_dt,total,tratruoc,daycrea,dayup,active) 
				VALUES ('$id_user','$id_dt','$total','$tratruoc','$daycrea','$dayup','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function create_nhap_hang_chi_tiet($id_nh,$id_sp,$price,$soluong,$daycrea,$dayup,$active){
		$id_nh = $this->get_str($id_nh);
		$id_sp = $this->get_str($id_sp);
		$price = $this->get_str($price);
		$soluong = $this->get_str($soluong);
		$daycrea = $this->get_str($daycrea);
		$dayup = $this->get_str($dayup);
		$active = $this->get_str($active);
		
		$sql = "INSERT INTO nhaphang_detail (id_nh,id_sp,soluong,price,daycrea,dayup,active) 
				VALUES ('$id_nh','$id_sp','$soluong','$price','$daycrea','$dayup','$active')";				
		$this->do_sql($sql);
		return true;
	}
	public function get_id_nhap_hang_moi(){		
		$sql = "SELECT * FROM nhaphang ORDER BY id DESC LIMIT 0,1";	
		$row = $this->get_row($sql);
		return $row['id'];
	}
	public function delete_row_nhap_hang($id){
		$id = $this->get_str($id);
		
		$sql = "DELETE FROM nhaphang_detail WHERE id_nh='$id'";
		$this->do_sql($sql);
		
		$sql = "DELETE FROM nhaphang WHERE id='$id'";
		$this->do_sql($sql);		
		return TRUE;
	}	
	public function count_nhap_hang($start_time,$end_time){
		$start_time = $this->get_str($start_time);
		$end_time = $this->get_str($end_time);
		$start_time .= ' 00:00:00';
		$end_time .= ' 23:59:59';
		
		$sql = "SELECT count(id) AS tong_id, sum(total) AS tong_total FROM nhaphang WHERE dayup BETWEEN '".$start_time."' AND '".$end_time."'";
		return $this->get_row($sql);
	}
	public function get_list_nhap_hang($start_time,$end_time){
		$start_time = $this->get_str($start_time);
		$end_time = $this->get_str($end_time);
		$start_time .= ' 00:00:00';
		$end_time .= ' 23:59:59';
		
		$sql = "SELECT * FROM nhaphang WHERE dayup BETWEEN '".$start_time."' AND '".$end_time."' ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function count_nhap_hang_ghi_no($search){
		$search = $this->get_str($search);
		if(strlen($search)>0){			
			$sql = "SELECT count(nhaphang.id) AS tong_id, sum(nhaphang.total) AS tong_total, sum(nhaphang.total-nhaphang.tratruoc) AS tong_no FROM nhaphang,doitac WHERE nhaphang.active=0 AND nhaphang.id_dt=doitac.id AND doitac.key_search LIKE '%".$search."%'";
		}else{
			$sql = "SELECT count(id) AS tong_id, sum(total) AS tong_total, sum(total-tratruoc) AS tong_no FROM nhaphang WHERE active=0";
		}
		return $this->get_row($sql);
	}
	public function get_list_nhap_hang_ghi_no($search){
		$search = $this->get_str($search);	
		if(strlen($search)>0){	
			$sql = "SELECT nhaphang.id AS id, nhaphang.total AS total, nhaphang.tratruoc AS tratruoc, nhaphang.dayup AS dayup, nhaphang.id_dt AS id_dt FROM nhaphang,doitac WHERE nhaphang.active=0 AND nhaphang.id_dt=doitac.id AND doitac.key_search LIKE '%".$search."%' ORDER BY nhaphang.dayup DESC";
		}else{
			$sql = "SELECT nhaphang.id AS id, nhaphang.total AS total, nhaphang.tratruoc AS tratruoc, nhaphang.dayup AS dayup, nhaphang.id_dt AS id_dt FROM nhaphang WHERE nhaphang.active=0 ORDER BY nhaphang.dayup DESC";
		}
		return $this->get_list($sql);
	}
	public function active_row_nhap_hang_ghi_no($id,$active){
		$id = $this->get_str($id);
		$active = $this->get_str($active);
		$this->do_sql("UPDATE nhaphang SET active='$active' WHERE id='$id'");
		return TRUE;
	}
	public function update_row_nhap_hang_ghi_no($id,$tratruoc){
		$id = $this->get_str($id);
		$tratruoc = $this->get_str($tratruoc);
		$this->do_sql("UPDATE nhaphang SET tratruoc='$tratruoc' WHERE id='$id'");
		return TRUE;
	}
	public function get_row_nhap_hang($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM nhaphang WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function get_list_nhap_hang_chi_tiet($id){
		$sql = "SELECT * FROM nhaphang_detail WHERE id_nh='$id' ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function get_row_user_id($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM account WHERE id='$id'";
		return $this->get_row($sql);
	}
}