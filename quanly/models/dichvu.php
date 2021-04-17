<?php
class dichvu extends Database{
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
	public function count_list_dich_vu($active,$id_type,$search){		
		$active = $this->get_str($active);
		$id_type = $this->get_str($id_type);
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
		if($id_type>0){
			if($flag==0){
				$str = 'WHERE id_type='.$id_type;
				$flag = 1;
			}else{
				$str .= ' AND id_type='.$id_type;
			}
		}
		if(strlen($search)>0){
			if($flag==0){
				$str = "WHERE key_search like '%".$search."%'";
				$flag = 1;
			}else{
				$str .= " AND key_search like '%".$search."%'";
			}
		}		
		$sql = "SELECT count(id) AS TotalID FROM hoatdong ".$str;
		$row = $this->get_row($sql);
		return $row['TotalID'];
	}
	public function get_list_dich_vu($active,$id_type,$search,$orderby,$start,$limit){	
		$start = $this->get_str($start);
		$limit = $this->get_str($limit);
		$orderby = $this->get_str($orderby);
		$active = $this->get_str($active);
		$id_type = $this->get_str($id_type);
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
		if($id_type>0){
			if($flag==0){
				$str = 'WHERE id_type='.$id_type;
				$flag = 1;
			}else{
				$str .= ' AND id_type='.$id_type;
			}
		}
		if(strlen($search)>0){
			if($flag==0){
				$str = "WHERE key_search like '%".$search."%'";
				$flag = 1;
			}else{
				$str .= " AND key_search like '%".$search."%'";
			}
		}	
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM dichvu ".$str." ORDER BY ".$orderby;
		}else{
			$sql = "SELECT * FROM dichvu ".$str." ORDER BY ".$orderby." LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	public function refresh_row_dich_vu($id){
        $id = $this->get_str($id);
        $dayup = date("Y-m-d H:i:s");
        $this->do_sql("UPDATE dichvu SET dayup='$dayup' WHERE id='$id'");
	}
	public function active_row_dich_vu($id,$active){
		$id = $this->get_str($id);
		$active = $this->get_str($active);
		$this->do_sql("UPDATE dichvu SET active='$active' WHERE id='$id'");
		return TRUE;
	}	
	public function create_row_dich_vu($name,$id_type,$image,$image_slide,$short_info,$info,$key_search,$dayup,$daycrea,$race=0,$active){
		$name = $this->get_str($name);
		$id_type = $this->get_str($id_type);
		$image = $this->get_str($image);
		$image_slide = $this->get_str($image_slide);
		$short_info = $this->get_str($short_info);
		$info = $this->get_str($info);
		$key_search = $this->get_str($key_search);
		$dayup = $this->get_str($dayup);
		$daycrea = $this->get_str($daycrea);
		$race = $this->get_str($race);
		$active = $this->get_str($active);
		$sql = "INSERT INTO dichvu (name,id_type,image,image_slide,short_info,info,key_search,dayup,daycrea,race,active) 
				VALUES ('$name','$id_type','$image','$image_slide','$short_info','$info','$key_search','$dayup','$daycrea','$race','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function update_row_dich_vu($id,$name,$id_type,$image,$short_info,$info,$key_search,$dayup){
		$id = $this->get_str($id);
		$name = $this->get_str($name);
		$id_type = $this->get_str($id_type);
		$image = $this->get_str($image);
		$short_info = $this->get_str($short_info);
		$info = $this->get_str($info);
		$key_search = $this->get_str($key_search);
		$dayup = $this->get_str($dayup);
		$this->do_sql("UPDATE dichvu SET name='$name' WHERE id='$id'");
		$this->do_sql("UPDATE dichvu SET id_type='$id_type' WHERE id='$id'");
		if(strlen($image)>0){$this->do_sql("UPDATE dichvu SET image='$image' WHERE id='$id'");}
		$this->do_sql("UPDATE dichvu SET short_info='$short_info' WHERE id='$id'");
		$this->do_sql("UPDATE dichvu SET info='$info' WHERE id='$id'");
		$this->do_sql("UPDATE dichvu SET key_search='$key_search' WHERE id='$id'");
		$this->do_sql("UPDATE dichvu SET dayup='$dayup' WHERE id='$id'");
	}
	public function delete_row_dich_vu($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM dichvu WHERE id='$id'";
		$row = $this->get_row($sql);
		if(strlen($row['image'])>0){
			$delImage = '../images/dichvu/'. $row['image'];
			unlink($delImage);
		}
		$cha = $row['image_slide'];
		$array = explode(';',$cha);
		$n = count($array);
		$j=0;
		for($i=0;$i<$n;$i++){
			if(strlen($array[$i])>0){
				$delImage = '../images/dichvu/'.$array[$i];
				unlink($delImage);
			}
		}
		$sql = "DELETE FROM dichvu WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	public function get_row_dich_vu($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM dichvu WHERE id='$id'";
		return $this->get_row($sql);
	}
}