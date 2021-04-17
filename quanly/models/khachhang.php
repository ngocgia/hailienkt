<?php
class khachhang extends Database{
	var $error;
	
	// Hàm Khởi Tạo
    function __construct() {
        parent::connect();
    }     
    // Hàm ngắt kết nối
    function __destruct() {
        parent::dis_connect();
    }
	
	//-----------------------------------------------------------------------***------------------------------------------------------------------------
	public function count_list_khach_hang($active,$search){		
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
		$sql = "SELECT count(id) AS TotalID FROM khachhang ".$str;
		$row = $this->get_row($sql);
		return $row['TotalID'];
	}
	public function get_list_khach_hang($active,$search,$orderby,$start,$limit){		
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
			$sql = "SELECT * FROM khachhang ".$str." ORDER BY ".$orderby;
		}else{
			$sql = "SELECT * FROM khachhang ".$str." ORDER BY ".$orderby." LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	public function refresh_row_khach_hang($id){
        $id = $this->get_str($id);
        $dayup = date("Y-m-d H:i:s");
        $this->do_sql("UPDATE khachhang SET dayup='$dayup' WHERE id='$id'");
	}
	public function active_row_khach_hang($id,$active){
		$id = $this->get_str($id);
		$active = $this->get_str($active);
		$this->do_sql("UPDATE khachhang SET active='$active' WHERE id='$id'");
		return TRUE;
	}
	
	public function create_row_khach_hang($name,$phone,$email,$birthday,$address,$key_search,$daycrea,$dayup,$active){
		$name = $this->get_str($name);
		$phone = $this->get_str($phone);
		$email = $this->get_str($email);
		$birthday = $this->get_str($birthday);
		$address = $this->get_str($address);
		$key_search = $this->get_str($key_search);
		$dayup = $this->get_str($dayup);
		$daycrea = $this->get_str($daycrea);
		$active = $this->get_str($active);
		$sql = "INSERT INTO khachhang (name,phone,email,birthday,address,key_search,daycrea,dayup,active) 
				VALUES ('$name','$phone','$email','$birthday','$address','$key_search','$daycrea','$dayup','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function delete_row_khach_hang($id){
		$id = $this->get_str($id);		
		$sql = "DELETE FROM khachhang WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	public function get_row_khach_hang($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM khachhang WHERE id='$id'";
		return $this->get_row($sql);
	}	
	public function update_row_khach_hang($id,$name,$phone,$email,$birthday,$address,$key_search,$dayup){
		$id = $this->get_str($id);
		$name = $this->get_str($name);
		$phone = $this->get_str($phone);
		$email = $this->get_str($email);
		$birthday = $this->get_str($birthday);
		$address = $this->get_str($address);
		$key_search = $this->get_str($key_search);
		$dayup = $this->get_str($dayup);
		$this->do_sql("UPDATE khachhang SET name='$name' WHERE id='$id'");
		$this->do_sql("UPDATE khachhang SET phone='$phone' WHERE id='$id'");
		$this->do_sql("UPDATE khachhang SET email='$email' WHERE id='$id'");
		$this->do_sql("UPDATE khachhang SET birthday='$birthday' WHERE id='$id'");
		$this->do_sql("UPDATE khachhang SET address='$address' WHERE id='$id'");
		$this->do_sql("UPDATE khachhang SET key_search='$key_search' WHERE id='$id'");
		$this->do_sql("UPDATE khachhang SET dayup='$dayup' WHERE id='$id'");
	}
	public function check_phone_khach_hang($phone,$id=0){
		$id = $this->get_str($id);
		$phone = $this->get_str($phone);
		if($id==0){
			$sql = "SELECT phone FROM khachhang WHERE phone='$phone'";
		}else{
			$sql = "SELECT phone FROM khachhang WHERE phone='$phone' AND id!='$id'";
		}
		$result = $this->do_sql($sql);
		if(mysqli_num_rows($result)<=0){
			return FALSE;
		}else{
			return TRUE;
		}
	}
	public function count_xuat_hang_detail($id){
		$id = $this->get_str($id);		
		$sql = "SELECT count(id) AS tong_id, sum(total) AS tong_total FROM xuathang WHERE id_kh='$id'";
		return $this->get_row($sql);
	}
	public function get_list_xuat_hang_detail($id){
		$id = $this->get_str($id);		
		$sql = "SELECT * FROM xuathang WHERE id_kh='$id' ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function get_row_user_id($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM account WHERE id='$id'";
		return $this->get_row($sql);
	}
}