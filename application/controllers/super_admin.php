<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 // 	public function __construct(){
	// 	parent::__construct();
	// 	$this->load->model('User_login_model');
	// }
class Super_admin extends CI_Controller {
	
	public function index(){

		$this->load->view("super_admin/login");
	}
	public function homesuperadmin(){
		$data = array();
		$data['alluseradmin'] = $this->user_login_model->alluseradmin();
		$data['show_post'] = $this->user_login_model->show_post();

		$this->load->view("super_admin/super_admin_home",$data);
	}
	public function edit_post_information($user_id){
		$data = array();
		$data['editpostinfo'] = $this->user_login_model->editpostinfo($user_id);
		$this->load->view("super_admin/edit_user_post",$data);	
	}

	public function Update_user_information(){
		$data = array();
		$data['user_id'] = $this ->input->post("user_id",true);
		$data['firstname'] = $this ->input->post("firstname",true);
		$data['middlename'] = $this ->input->post("middlename",true);
		$data['lastname'] = $this ->input->post("lastname",true);
		$data['address'] = $this ->input->post("address",true);
		$data['email'] = $this ->input->post("email",true);
		$data['status'] = $this ->input->post("status",true);
		$data['password'] = md5($this ->input->post("password",true));

		$this ->user_login_model->updateuser_infobysuperadmin($data);
		//$this->session->set_flashdata('reg_success', 'Registration successful ');

		redirect("super_admin/homesuperadmin");
	}
	public function deleteuserpostinfo($user_id){
		$this->user_login_model->deleteuserpostbysuperadmin($user_id);
		redirect("super_admin/homesuperadmin");
	}
}
?>