<?php
class website extends Database{
	var $error;
	
	// Hàm Khởi Tạo
    function __construct() {
        parent::connect();
    }     
    // Hàm ngắt kết nối
    function __destruct() {
        parent::dis_connect();
    }
	
	//website
	public function get_list_website($active=1,$orderby){
		$active = $this->get_str($active);
		$orderby = $this->get_str($orderby);
		$sql = "SELECT * FROM website WHERE active=".$active." ORDER BY ".$orderby;
		return $this->get_list($sql);
	}
	public function get_row_website($id){
		$id = $this->get_str($id);
		$sql = "SELECT * FROM website WHERE id='$id'";
		return $this->get_row($sql);
	}	
	public function create_row_website($name,$image,$link_go,$tt,$active){
		$name = $this->get_str($name);
		$image = $this->get_str($image);
		$link_go = $this->get_str($link_go);
		$tt = $this->get_str($tt);
		$active = $this->get_str($active);
		$sql = "INSERT INTO website (name,image,link_go,tt,active) 
				VALUES ('$name','$image','$link_go','$tt','$active')";
		$this->do_sql($sql);
		return true;
	}
	public function update_row_website($id,$name,$image,$link_go,$tt){
		$id = $this->get_str($id);
		$name = $this->get_str($name);
		$image = $this->get_str($image);
		$link_go = $this->get_str($link_go);
		$tt = $this->get_str($tt);
		$this->do_sql("UPDATE website SET name='$name' WHERE id='$id'");
		$this->do_sql("UPDATE website SET image='$image' WHERE id='$id'");
		$this->do_sql("UPDATE website SET link_go='$link_go' WHERE id='$id'");
		$this->do_sql("UPDATE website SET tt='$tt' WHERE id='$id'");
	}
	public function active_row_website($id,$active){
		$id = $this->get_str($id);
		$active = $this->get_str($active);
		$this->do_sql("UPDATE website SET active='$active' WHERE id='$id'");
		return TRUE;
	}
	public function delete_row_website($id){
		$id = $this->get_str($id);	
		$sql = "DELETE FROM website WHERE id='$id'";
		$this->do_sql($sql);
		return TRUE;
	}
}