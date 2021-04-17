<?php
class sanpham extends Database{
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
	public function get_list_san_pham_type_1($active=1,$orderby){
		$active = $this->get_str($active);
		$orderby = $this->get_str($orderby);
		$sql = "SELECT * FROM sanpham_type_1 WHERE active=".$active." ORDER BY ".$orderby;
		return $this->get_list($sql);
	}
	public function create_row_san_pham_type_1($name,$dayup,$active,$id_out){
		$name = $this->get_str($name);
		$dayup = $this->get_str($dayup);
		$active = $this->get_str($active);
		$id_out = $this->get_str($id_out);
		$sql = "INSERT INTO sanpham_type_1 (name,dayup,active,id_out) 
				VALUES ('$name','$dayup','$active','$id_out')";
		$this->do_sql($sql);
		return true;
	}
	public function delete_row_san_pham_type_1($id){
		$id = $this->get_str($id);	
		$sql = "DELETE FROM sanpham_type_1 WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	public function get_row_san_pham_type_1($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM sanpham_type_1 WHERE id='$id'";
		return $this->get_row($sql);
	}	
	public function update_row_san_pham_type_1($id,$name,$id_out){
		$id = $this->get_str($id);
		$id_out = $this->get_str($id_out);
		$name = $this->get_str($name);
		$this->do_sql("UPDATE sanpham_type_1 SET name='$name' WHERE id='$id'");
		$this->do_sql("UPDATE sanpham_type_1 SET id_out='$id_out' WHERE id='$id'");
	}
	public function active_row_san_pham_type_1($id,$active){
		$id = $this->get_str($id);
		$active = $this->get_str($active);
		$this->do_sql("UPDATE sanpham_type_1 SET active='$active' WHERE id='$id'");
		return TRUE;
	}
	public function refresh_row_san_pham_type_1($id){
        $id = $this->get_str($id);
        $dayup = date("Y-m-d H:i:s");
        $this->do_sql("UPDATE sanpham_type_1 SET dayup='$dayup' WHERE id='$id'");
	}
	//-----------------------------------------------------------------------***------------------------------------------------------------------------
	public function get_list_san_pham_type_2($active=1,$orderby,$id_1=''){
		$active = $this->get_str($active);
		$id_1 = $this->get_str($id_1);
		$orderby = $this->get_str($orderby);
		$str = '';		
		$flag = 0;
		if(strlen($id_1)>0){
			if($flag==0){
				$str = 'WHERE id_1='.$id_1;
				$flag = 1;
			}else{
				$str .= ' AND id_1='.$id_1;
			}
		}
		if(strlen($active)>0){
			if($flag==0){
				$str = 'WHERE active='.$active;
				$flag = 1;
			}else{
				$str .= ' AND active='.$active;
			}
		}
		$sql = "SELECT * FROM sanpham_type_2 ".$str." ORDER BY ".$orderby;
		return $this->get_list($sql);
	}
	public function create_row_san_pham_type_2($id_1,$name,$dayup,$active,$id_out){
		$id_1 = $this->get_str($id_1);
		$name = $this->get_str($name);
		$dayup = $this->get_str($dayup);
		$active = $this->get_str($active);
		$id_out = $this->get_str($id_out);
		$sql = "INSERT INTO sanpham_type_2 (id_1,name,dayup,active,id_out) 
				VALUES ('$id_1','$name','$dayup','$active','$id_out')";
		$this->do_sql($sql);
		return true;
	}
	public function delete_row_san_pham_type_2($id){
		$id = $this->get_str($id);	
		$sql = "DELETE FROM sanpham_type_2 WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	public function get_row_san_pham_type_2($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM sanpham_type_2 WHERE id='$id'";
		return $this->get_row($sql);
	}	
	public function update_row_san_pham_type_2($id,$id_1,$name,$id_out){
		$id = $this->get_str($id);
		$id_1 = $this->get_str($id_1);
		$id_out = $this->get_str($id_out);
		$name = $this->get_str($name);
		$this->do_sql("UPDATE sanpham_type_2 SET name='$name' WHERE id='$id'");
		$this->do_sql("UPDATE sanpham_type_2 SET id_out='$id_out' WHERE id='$id'");
		$this->do_sql("UPDATE sanpham_type_2 SET id_1='$id_1' WHERE id='$id'");
	}
	public function active_row_san_pham_type_2($id,$active){
		$id = $this->get_str($id);
		$active = $this->get_str($active);
		$this->do_sql("UPDATE sanpham_type_2 SET active='$active' WHERE id='$id'");
		return TRUE;
	}
	public function refresh_row_san_pham_type_2($id){
        $id = $this->get_str($id);
        $dayup = date("Y-m-d H:i:s");
        $this->do_sql("UPDATE sanpham_type_2 SET dayup='$dayup' WHERE id='$id'");
	}
	//-----------------------------------------------------------------------***------------------------------------------------------------------------
	public function count_list_san_pham($active,$news,$sale,$id_type,$search){		
		$active = $this->get_str($active);		
		$news = $this->get_str($news);
		$sale = $this->get_str($sale);
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
		if(strlen($news)>0){
			if($flag==0){
				$str = 'WHERE news='.$news;
				$flag = 1;
			}else{
				$str .= ' AND news='.$news;
			}
		}
		if(strlen($sale)>0){
			if($flag==0){
				$str = 'WHERE sale>0';
				$flag = 1;
			}else{
				$str .= ' AND sale>0';
			}
		}
		if($id_type>0){
			if($flag==0){
				$str = "WHERE id_type LIKE '".$id_type."'";
				$flag = 1;
			}else{
				$str .= " AND id_type LIKE '".$id_type."'";
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
		$sql = "SELECT count(id) AS TotalID FROM sanpham ".$str;
		$row = $this->get_row($sql);
		return $row['TotalID'];
	}
	public function get_list_san_pham($active,$news,$sale,$id_type,$search,$orderby,$start,$limit){		
		$start = $this->get_str($start);
		$limit = $this->get_str($limit);
		$orderby = $this->get_str($orderby);		
		$active = $this->get_str($active);		
		$news = $this->get_str($news);
		$sale = $this->get_str($sale);
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
		if(strlen($news)>0){
			if($flag==0){
				$str = 'WHERE news='.$news;
				$flag = 1;
			}else{
				$str .= ' AND news='.$news;
			}
		}
		if(strlen($sale)>0){
			if($flag==0){
				$str = 'WHERE sale>0';
				$flag = 1;
			}else{
				$str .= ' AND sale>0';
			}
		}
		if($id_type>0){
			if($flag==0){
				$str = "WHERE id_type LIKE '".$id_type."'";
				$flag = 1;
			}else{
				$str .= " AND id_type LIKE '".$id_type."'";
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
	public function refresh_row_san_pham($id){
        $id = $this->get_str($id);
        $dayup = date("Y-m-d H:i:s");
        $this->do_sql("UPDATE sanpham SET dayup='$dayup' WHERE id='$id'");
	}
	public function active_row_san_pham($id,$active){
		$id = $this->get_str($id);
		$active = $this->get_str($active);
		$this->do_sql("UPDATE sanpham SET active='$active' WHERE id='$id'");
		return TRUE;
	}
	
	public function create_row_san_pham($name,$id_type,$image,$image_slide,$key_search,$news,$sale,$price,$short_info,$info,$thongso,$daycrea,$dayup,$race,$active){
		$name = $this->get_str($name);
		$id_type = $this->get_str($id_type);
		$price = $this->get_str($price);
		$image = $this->get_str($image);
		$image_slide = $this->get_str($image_slide);
		$key_search = $this->get_str($key_search);
		$news = $this->get_str($news);
		$sale = $this->get_str($sale);
		$short_info = $this->get_str($short_info);
		$info = $this->get_str($info);
		$thongso = $this->get_str($thongso);
		$dayup = $this->get_str($dayup);
		$daycrea = $this->get_str($daycrea);
		$race = $this->get_str($race);
		$active = $this->get_str($active);
		$sql = "INSERT INTO sanpham (name,id_type,image,image_slide,key_search,news,sale,price,short_info,info,thongso,daycrea,dayup,race,active) 
				VALUES ('$name','$id_type','$image','$image_slide','$key_search','$news','$sale','$price','$short_info','$info','$thongso','$daycrea','$dayup','$race','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function delete_row_san_pham($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM sanpham WHERE id='$id'";
		$row = $this->get_row($sql);
		if(strlen($row['image'])>0){
			$delImage = '../images/sanpham/'. $row['image'];
			unlink($delImage);
		}
		$cha = $row['image_slide'];
		$array = explode(';',$cha);
		$n = count($array);
		$j=0;
		for($i=0;$i<$n;$i++){
			if(strlen($array[$i])>0){
				$delImage = '../images/sanpham/'.$array[$i];
				unlink($delImage);
			}
		}
		$sql = "DELETE FROM sanpham WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
	public function get_row_san_pham($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM sanpham WHERE id='$id'";
		return $this->get_row($sql);
	}	
	public function update_row_san_pham($id,$name,$id_type,$image,$key_search,$news,$sale,$price,$short_info,$info,$thongso,$dayup){
		$id = $this->get_str($id);
		$name = $this->get_str($name);
		$id_type = $this->get_str($id_type);
		$image = $this->get_str($image);
		$key_search = $this->get_str($key_search);
		$news = $this->get_str($news);
		$sale = $this->get_str($sale);
		$price = $this->get_str($price);
		$short_info = $this->get_str($short_info);
		$info = $this->get_str($info);
		$thongso = $this->get_str($thongso);
		$dayup = $this->get_str($dayup);
		$this->do_sql("UPDATE sanpham SET name='$name' WHERE id='$id'");
		if(strlen($image)>0){$this->do_sql("UPDATE sanpham SET image='$image' WHERE id='$id'");}
		$this->do_sql("UPDATE sanpham SET price='$price' WHERE id='$id'");
		$this->do_sql("UPDATE sanpham SET id_type='$id_type' WHERE id='$id'");
		$this->do_sql("UPDATE sanpham SET key_search='$key_search' WHERE id='$id'");
		$this->do_sql("UPDATE sanpham SET news='$news' WHERE id='$id'");
		$this->do_sql("UPDATE sanpham SET sale='$sale' WHERE id='$id'");
		$this->do_sql("UPDATE sanpham SET short_info='$short_info' WHERE id='$id'");
		$this->do_sql("UPDATE sanpham SET info='$info' WHERE id='$id'");
		$this->do_sql("UPDATE sanpham SET thongso='$thongso' WHERE id='$id'");
		$this->do_sql("UPDATE sanpham SET dayup='$dayup' WHERE id='$id'");
	}
	
	//Thong ke
	public function count_xuat_hang_detail($id_sp){
		$id_sp = $this->get_str($id_sp);
		
		$sql = "SELECT count(id) AS tong_id, sum(soluong*price) AS tong_total FROM xuathang_detail WHERE id_sp='$id_sp'";
		return $this->get_row($sql);
	}
	public function get_list_xuat_hang_detail($id_sp){
		$id_sp = $this->get_str($id_sp);
		
		$sql = "SELECT * FROM xuathang_detail WHERE id_sp='$id_sp' ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function count_nhap_hang_detail($id_sp){
		$id_sp = $this->get_str($id_sp);
		
		$sql = "SELECT count(id) AS tong_id, sum(soluong*price) AS tong_total FROM nhaphang_detail WHERE id_sp='$id_sp'";
		return $this->get_row($sql);
	}
	public function get_list_nhap_hang_detail($id_sp){
		$id_sp = $this->get_str($id_sp);
		
		$sql = "SELECT * FROM nhaphang_detail WHERE id_sp='$id_sp' ORDER BY id DESC";
		return $this->get_list($sql);
	}
	public function get_row_doi_tac($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM doitac WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function get_row_nhap_hang($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM nhaphang WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function get_row_khach_hang($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM khachhang WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function get_row_xuat_hang($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM xuathang WHERE id='$id'";
		return $this->get_row($sql);
	}
	
	//-----------------------------------------------------------------------***------------------------------------------------------------------------
	public function updateImage($id,$image_slide){
		$image_slide = $this->get_str($image_slide);
		$id = $this->get_str($id);		
		$this->do_sql("UPDATE sanpham SET image_slide='$image_slide' WHERE id='$id'");
	}
}