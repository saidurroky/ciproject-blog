<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_login_model extends CI_model {

	public function login_info($email,$password){
		$this ->db ->where(['email' => $email]);
		$this ->db ->where(['password' => $password]);
		$this ->db ->where(['status' => '1']);

		$result =$this->db->get('tbl_user');

		if($result-> num_rows() >0){
			return $result->row();
		}else{
			return false;
		}
	}
	
	public function alluseradmin(){
		$result =$this->db->get('tbl_user');

		if($result-> num_rows() >0){
			return $result->result();
		}else{
			return false;
		}
	}

	public function editpostinfo($user_id){
		$this ->db ->where(['user_id' => $user_id]);
		$result =$this->db->get('tbl_user');

		if($result-> num_rows() >0){
			return $result->row();
		}else{
			return false;
		}
	}
	public function updateuser_infobysuperadmin($data){
		$this ->db ->where('user_id', $data['user_id']);
		$this->db->update('tbl_user',$data);
	}
	public function deleteuserpostbysuperadmin($user_id){
		$this ->db->where(['user_id' => $user_id]);
		$this->db->delete('tbl_product');
	}
	public function show_post(){
		$this ->db ->order_by('product_id','desc');
		$result =$this->db->get('tbl_product');

		if($result-> num_rows() >0){
			return $result->result();
		}else{
			return false;
		}
	}
}
?>