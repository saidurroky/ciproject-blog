<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller_model extends CI_model {

	public function aboutus($data){
		$this ->db->insert('tbl_aboutus', $data);
	}
	public function viewaboutus(){
		$result =$this->db->get('tbl_aboutus');

		if($result-> num_rows() >0){
			return $result->row();
		}else{
			return false;
		}
	}
	public function editaboutus($aboutus_id){
		$this ->db ->where(['aboutus_id' => $aboutus_id]);
		$result =$this->db->get('tbl_aboutus');

		if($result-> num_rows() >0){
			return $result->row();
		}else{
			return false;
		}
	}
	public function updateaboutus($data){
		$this ->db ->where('aboutus_id', $data['aboutus_id']);
		$this->db->update('tbl_aboutus',$data);
	}

	public function inserthomecontent($data){
		$this ->db->insert('tbl_homecontent', $data);
	}

	public function viewhomecontent(){
		$result =$this->db->get('tbl_homecontent');

		if($result-> num_rows() >0){
			return $result->row();
		}else{
			return false;
		}
	}
	public function edithomecontent($home_id){
		$this ->db ->where(['home_id' => $home_id]);
		$result =$this->db->get('tbl_homecontent');

		if($result-> num_rows() >0){
			return $result->row();
		}else{
			return false;
		}
	}

	public function updatehomecontent($data){
		$this ->db ->where('home_id', $data['home_id']);
		$this->db->update('tbl_homecontent',$data);
	}

	public function insert_productinfo($data){
		$this ->db->insert('tbl_product', $data);
	}
	public function viewproductinfo($user_id){
		$this ->db ->where(['user_id' => $user_id]);
		$result =$this->db->get('tbl_product');

		if($result-> num_rows() >0){
			return $result->result();
		}else{
			return false;
		}
	}
	public function viewproduct(){
		$result =$this->db->get('tbl_product');
		$this->db->limit(4);
		$this->db->order_by('product_id','desc');
		if($result-> num_rows() >0){
			return $result->result();
		}else{
			return false;
		}
	}
}
?>