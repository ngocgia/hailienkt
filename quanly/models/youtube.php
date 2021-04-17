<?php
class youtube extends Database{
	var $error;
	
	// Hàm Khởi Tạo
    function __construct() {
        parent::connect();
    }     
    // Hàm ngắt kết nối
    function __destruct() {
        parent::dis_connect();
    }
	
	//youtube Slide
	public function get_list_youtube($active=1,$orderby){
		$active = $this->get_str($active);
		$orderby = $this->get_str($orderby);
		$sql = "SELECT * FROM youtube WHERE active=".$active." ORDER BY ".$orderby;
		return $this->get_list($sql);
	}
	public function get_row_youtube($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM youtube WHERE id='$id'";
		return $this->get_row($sql);
	}	
	public function create_row_youtube($name,$link_go,$tt,$active){
		$name = $this->get_str($name);
		$link_go = $this->get_str($link_go);
		$tt = $this->get_str($tt);
		$active = $this->get_str($active);
		$sql = "INSERT INTO youtube (name,link_go,tt,active) 
				VALUES ('$name','$link_go','$tt','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function update_row_youtube($id,$name,$link_go,$tt){
		$id = $this->get_str($id);
		$name = $this->get_str($name);
		$link_go = $this->get_str($link_go);
		$tt = $this->get_str($tt);
		$this->do_sql("UPDATE youtube SET name='$name' WHERE id='$id'");
		$this->do_sql("UPDATE youtube SET link_go='$link_go' WHERE id='$id'");
		$this->do_sql("UPDATE youtube SET tt='$tt' WHERE id='$id'");
	}
	public function active_row_youtube($id,$active){
		$id = $this->get_str($id);
		$active = $this->get_str($active);
		$this->do_sql("UPDATE youtube SET active='$active' WHERE id='$id'");
		return TRUE;
	}
	public function delete_row_youtube($id){
		$id = $this->get_str($id);	
		$sql = "DELETE FROM youtube WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
}