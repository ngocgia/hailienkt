<?php
class Account extends Database
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
	
	// Kiem tra dang nhap
	public function check_acc($username,$password,$dayup){
		$username = strtolower($this->get_str($username));
		$password = $this->get_str($password);
		$dayup = $this->get_str($dayup);
		
		$sql = "SELECT * FROM account WHERE username='".$username."' AND active=1 AND id_type=1";
		$kq = $this->get_row($sql);
		if($kq!=FALSE){
			$pass_kq = unPass($kq['password'],$kq['keypass']);

			if($pass_kq === $password){
				$this->do_sql("UPDATE account SET dayup='$dayup' WHERE username='$username'");
				return TRUE;
			}else{
				$this->error = "Mật khẩu không chính xác!";
				return FALSE;
			}
		}else{
			$this->error = "Tài khoản không tồn tại!";
			return FALSE;
		}
	}	
	// Kiem tra tài khoản
	public function check_change_pass($username,$password){
		$username = $this->get_str($username);
		$password = $this->get_str($password);		
		$sql = "SELECT * FROM account WHERE username='".$username."'";
		$kq = $this->get_row($sql);
		if($kq!=FALSE){
			$pass_kq = unPass($kq['password'],$kq['keypass']);
			if($pass_kq === $password){
				return TRUE;
			}else{
				$this->error = "Mật khẩu cũ không chính xác!";
				return FALSE;
			}
		}else{
			$this->error = "Tài khoản không tồn tại!";
			return FALSE;
		}
	}     
    // Lấy chi tiết TK
	public function get_acc($username){
		$username = $this->get_str($username);
		$sql = "SELECT * FROM account WHERE username='".$username."'";
		$kq = $this->get_row($sql);
		return $kq;
	}	
	//Update account
	public function change_pass($username,$password){
		$username = $this->get_str($username);
		$password = $this->get_str($password);
		$keypass = uniqid(true);
		$password = enPass($password,$keypass);
		$this->do_sql("UPDATE account SET password='$password' WHERE username='$username'");
		$this->do_sql("UPDATE account SET keypass='$keypass' WHERE username='$username'");
		return TRUE;
	}	
	//Update account
	public function update_acc($username,$name,$email,$phone,$oldpassword,$newpassword){
		$username = $this->get_str($username);
		$name = $this->get_str($name);
		$email = $this->get_str($email);
		$oldpassword = $this->get_str($oldpassword);
		$newpassword = $this->get_str($newpassword);
		$this->do_sql("UPDATE account SET name='$name' WHERE username='$username'");
		$this->do_sql("UPDATE account SET email='$email' WHERE username='$username'");
		$this->do_sql("UPDATE account SET phone='$phone' WHERE username='$username'");
		if(strlen($newpassword)>0){
			$keypass = uniqid(true);
			$password = enPass($newpassword,$keypass);
			$this->do_sql("UPDATE account SET password='$password' WHERE username='$username'");
			$this->do_sql("UPDATE account SET keypass='$keypass' WHERE username='$username'");
		}
		return TRUE;
	}

	//Tai Khoan
	public function count_list_tai_khoan($id_type,$active){
		$id_type = $this->get_str($id_type);
		$active = $this->get_str($active);		
		$str = '';
		if(strlen($id_type)>0){$str = 'WHERE id_type='.$id_type;}
		if(strlen($active)>0){$str = 'WHERE active='.$active;}		
		$sql = "SELECT count(id) AS TotalID FROM account ".$str;
		return $this->get_row($sql);
	}
	public function get_list_tai_khoan($id_type,$active,$start,$limit){
		$id_type = $this->get_str($id_type);
		$active = $this->get_str($active);
		$start = $this->get_str($start);
		$limit = $this->get_str($limit);		
		$str = '';
		if(strlen($id_type)>0){$str = 'WHERE id_type='.$id_type;}
		if(strlen($active)>0){$str = 'WHERE active='.$active;}
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM account ".$str." ORDER BY id_type,active DESC";
		}else{
			$sql = "SELECT * FROM account ".$str." ORDER BY id_type,active DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	public function create_tai_khoan($username,$password,$id_type,$name,$email,$phone,$daycrea,$active){
		$username = $this->get_str($username);
		$password = $this->get_str($password);
		$id_type = $this->get_str($id_type);
		$name = $this->get_str($name);
		$email = $this->get_str($email);
		$phone = $this->get_str($phone);
		$daycrea = $this->get_str($daycrea);
		$active = $this->get_str($active);
		$keypass = uniqid(true);
		$password = enPass($password,$keypass);
		$sql = "INSERT INTO account (username,password,keypass,id_type,name,email,phone,daycrea,active) 
		VALUES ('$username','$password','$keypass','$id_type','$name','$email','$phone','$daycrea','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function check_username_tai_khoan($username){
		$username = $this->get_str($username);
		$sql = "SELECT username FROM account WHERE username='$username'";
		$result = $this->do_sql($sql);
		if(mysqli_num_rows($result)<=0){
			return FALSE;
		}else{
			return TRUE;
		}
	}
	public function get_tai_khoan($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM account WHERE id='$id'";
		$kq = $this->get_row($sql);
		return $kq;
	}
	public function update_tai_khoan($id,$password,$name,$email,$phone){
		$id = $this->get_str($id);
		$name = $this->get_str($name);
		$email = $this->get_str($email);
		$phone = $this->get_str($phone);
		$password = $this->get_str($password);
		
		if(strlen($password)>0){
			$keypass = uniqid(true);
			$password = enPass($password,$keypass);
			$this->do_sql("UPDATE account SET password='$password' WHERE id='$id'");
			$this->do_sql("UPDATE account SET keypass='$keypass' WHERE id='$id'");
		}
		$this->do_sql("UPDATE account SET name='$name' WHERE id='$id'");
		$this->do_sql("UPDATE account SET email='$email' WHERE id='$id'");
		$this->do_sql("UPDATE account SET phone='$phone' WHERE id='$id'");
		return TRUE;
	}
	public function active_tai_khoan($id,$active){
		$id = $this->get_str($id);
		$active = $this->get_str($active);
		$this->do_sql("UPDATE account SET active='$active' WHERE id='$id'");
		return TRUE;
	}
	public function delete_tai_khoan($id){
		$id = $this->get_str($id);
		$sql = "DELETE FROM account WHERE id='$id'";
		$this->do_sql($sql);
		
		return TRUE;
	}
}

