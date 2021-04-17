<?php
class Xuat extends Database{
	var $error;
	
	// Hàm Khởi Tạo
    function __construct() {
        parent::connect();
    }     
    // Hàm ngắt kết nối
    function __destruct() {
        parent::dis_connect();
    }
	
	//San pham
    public function count_list_san_pham($id_type){
		$id_type = $this->get_str($id_type);
		$str = '';
		if($id_type>0){
			$str = " AND id_type LIKE '".$id_type."'";
		}
		
        $sql = "SELECT count(id) AS TotalID FROM sanpham WHERE active=1".$str;
        return $this->get_row($sql);
	}
	public function get_list_san_pham($id_type,$start,$limit){
		$start = $this->get_str($start);
		$limit = $this->get_str($limit);
		$id_type = $this->get_str($id_type);
		$str = '';
		if(strlen($id_type)>0){
			$str = " AND id_type LIKE '".$id_type."'";
		}
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM sanpham WHERE active=1".$str." ORDER BY dayup DESC";
		}else{
			$sql = "SELECT * FROM sanpham WHERE active=1".$str." ORDER BY dayup DESC LIMIT ".$start.", ".$limit;
		}
		
		$result = $this->get_list($sql);		
		return $result;
	}
	public function get_list_san_pham_khac($id,$id_type,$start,$limit){
		$start = $this->get_str($start);
		$limit = $this->get_str($limit);
		$id = $this->get_str($id);
		$id_type = $this->get_str($id_type);
		$str = '';
		if($id_type>0){
			$str = " AND id_type LIKE '".$id_type."'";
		}
		if($start==0 && $limit==0){		
			$sql = "SELECT * FROM sanpham WHERE active='1' AND id!='$id'".$str." ORDER BY dayup DESC";
		}else{
			$sql = "SELECT * FROM sanpham WHERE active='1' AND id!='$id'".$str." ORDER BY dayup DESC LIMIT ".$start.", ".$limit;
		}
		
		$result = $this->get_list($sql);		
		return $result;
	}
	public function get_row_san_pham($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM sanpham WHERE active=1 AND id='$id'";
		return $this->get_row($sql);
	}
	public function race_row_san_pham($id){
		$sql = "SELECT * FROM sanpham WHERE active=1 AND id='$id'";
		$row = $this->get_row($sql);
		$race = $row['race']+1;
		$this->do_sql("UPDATE sanpham SET race='$race' WHERE active=1 AND id='$id'");
		return true;;
	}
		// ----------------------***HOAT DONG***-------------------
	public function get_list_hoat_dong($start,$limit){
		$start = $this->get_str($start);
		$limit = $this->get_str($limit);
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM hoatdong WHERE active=1 ORDER BY dayup DESC";
		}else{
			$sql = "SELECT * FROM hoatdong WHERE active=1 ORDER BY dayup DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	public function get_row_hoat_dong($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM hoatdong WHERE id='$id'";
		return $this->get_row($sql);
	}	
	public function get_list_hoat_dong_khac($id,$start,$limit){
		$start = $this->get_str($start);
		$limit = $this->get_str($limit);
		$id = $this->get_str($id);				
		$sql = "SELECT * FROM hoatdong WHERE active=1 AND id!='$id' ORDER BY dayup DESC LIMIT ".$start.", ".$limit;		
		$result = $this->get_list($sql);		
		return $result;
	}
	public function count_list_hoat_dong(){
        $sql = "SELECT count(id) AS TotalID FROM hoatdong WHERE active=1";
        return $this->get_row($sql);
	}
	public function race_row_hoat_dong($id){
		$sql = "SELECT * FROM hoatdong WHERE active=1 AND id='$id'";
		$row = $this->get_row($sql);
		$race = $row['race']+1;
		$this->do_sql("UPDATE hoatdong SET race='$race' WHERE active=1 AND id='$id'");
		return true;;
	}
	// -----------------****DICH VU------------------------
	public function get_list_dich_vu($start,$limit){
		$start = $this->get_str($start);
		$limit = $this->get_str($limit);
		if($start==0 && $limit==0){
			$sql = "SELECT * FROM dichvu WHERE active=1 ORDER BY dayup DESC";
		}else{
			$sql = "SELECT * FROM dichvu WHERE active=1 ORDER BY dayup DESC LIMIT ".$start.", ".$limit;
		}
		return $this->get_list($sql);
	}
	public function get_row_dich_vu($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM dichvu WHERE id='$id'";
		return $this->get_row($sql);
	}	
	public function get_list_dich_vu_khac($id,$start,$limit){
		$start = $this->get_str($start);
		$limit = $this->get_str($limit);
		$id = $this->get_str($id);				
		$sql = "SELECT * FROM dichvu WHERE active=1 AND id!='$id' ORDER BY dayup DESC LIMIT ".$start.", ".$limit;		
		$result = $this->get_list($sql);		
		return $result;
	}
	public function count_list_dich_vu(){
        $sql = "SELECT count(id) AS TotalID FROM dichvu WHERE active=1";
        return $this->get_row($sql);
	}
	public function race_row_dich_vu($id){
		$sql = "SELECT * FROM dichvu WHERE active=1 AND id='$id'";
		$row = $this->get_row($sql);
		$race = $row['race']+1;
		$this->do_sql("UPDATE dichvu SET race='$race' WHERE active=1 AND id='$id'");
		return true;;
	}

	// --------------------------------------------------------------------------
	public function get_list_san_pham_type($active=1,$orderby){
		$active = $this->get_str($active);
		$orderby = $this->get_str($orderby);
		$sql = "SELECT * FROM sanpham_type_1 WHERE active=".$active." ORDER BY ".$orderby;
		return $this->get_list($sql);
	}
	public function get_row_san_pham_type($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM sanpham_type_1 WHERE id='$id'";
		return $this->get_row($sql);
	}
	public function get_list_san_pham_type_2($id_1,$active=1,$orderby){
		$active = $this->get_str($active);
		$orderby = $this->get_str($orderby);
		$str = '';
		if($id_1>0){
			$str = " AND id_1='".$id_1."'";
		}
		$sql = "SELECT * FROM sanpham_type_2 WHERE active=".$active.$str." ORDER BY ".$orderby;
		return $this->get_list($sql);
	}
	public function get_list_san_pham_type_2_tt(){
		$sql = "SELECT * FROM sanpham_type_2 WHERE active=1 AND id_out=1 ORDER BY dayup DESC";
		return $this->get_list($sql);
	}
	public function get_row_san_pham_type_2($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM sanpham_type_2 WHERE id='$id'";
		return $this->get_row($sql);
	}
	
	public function get_list_banner($active=1,$orderby){
		$active = $this->get_str($active);
		$orderby = $this->get_str($orderby);
		$sql = "SELECT * FROM banner WHERE active=".$active." ORDER BY ".$orderby;
		return $this->get_list($sql);
	}
	public function get_list_youtube($active=1,$orderby){
		$active = $this->get_str($active);
		$orderby = $this->get_str($orderby);
		$sql = "SELECT * FROM youtube WHERE active=".$active." ORDER BY ".$orderby;
		return $this->get_list($sql);
	}
	public function get_list_logo($active=1,$orderby){
		$active = $this->get_str($active);
		$orderby = $this->get_str($orderby);
		$sql = "SELECT * FROM website WHERE active=".$active." ORDER BY ".$orderby;
		return $this->get_list($sql);
	}
	public function get_list_tieu_chi($orderby){
		$orderby = $this->get_str($orderby);
		$sql = "SELECT * FROM tieuchi WHERE active=1 ORDER BY ".$orderby;
		return $this->get_list($sql);
	}
	public function get_list_lien_he($active=1,$orderby){
		$active = $this->get_str($active);
		$orderby = $this->get_str($orderby);
		$sql = "SELECT * FROM lienhe WHERE active=".$active." ORDER BY ".$orderby;
		return $this->get_list($sql);
	}
	public function get_thong_tin($name){
		$sql = "SELECT * FROM thongtin WHERE name='$name'";
		return $this->get_row($sql);
	}
	public function count_views(){
		$dayup = date("Y-m-d");
		$sql = "SELECT * FROM luotxem WHERE dayup='$dayup'";
		$row = $this->get_row($sql);
		if(isset($row['id']) && $row['id']>0){
			$race = $row['race']+1;
			$this->do_sql("UPDATE luotxem SET race='$race' WHERE dayup='$dayup'");
		}else{
			$this->do_sql("INSERT INTO luotxem (race,dayup) VALUES ('1','$dayup')");
		}
		return true;;
	}
	public function get_count_ngay(){
		$dayup = date("Y-m-d");
		$sql = "SELECT sum(race) AS sum_race FROM luotxem WHERE dayup='$dayup'";
		$row = $this->get_row($sql);
		return $row['sum_race'];
	}
	public function get_count_tuan(){
		$days = date('Y-m-d',strtotime('last monday'));
		$daye = date('Y-m-d',strtotime('sunday'));
		$sql = "SELECT sum(race) AS sum_race FROM luotxem WHERE dayup BETWEEN '$days' AND '$daye'";
		$row = $this->get_row($sql);
		return $row['sum_race'];
	}
	public function get_count_thang(){
		$days = date('Y-m-01');
		$daye = date('Y-m-t');
		$sql = "SELECT sum(race) AS sum_race FROM luotxem WHERE dayup BETWEEN '$days' AND '$daye'";
		$row = $this->get_row($sql);
		return $row['sum_race'];
	}
	public function get_count_nam(){
		$days = date('Y-01-01');
		$daye = date('Y-12-t');
		$sql = "SELECT sum(race) AS sum_race FROM luotxem WHERE dayup BETWEEN '$days' AND '$daye'";
		$row = $this->get_row($sql);
		return $row['sum_race'];
	}
	public function get_count_tong(){
		$sql = "SELECT sum(race) AS sum_race FROM luotxem";
		$row = $this->get_row($sql);
		return $row['sum_race'];
	}
}