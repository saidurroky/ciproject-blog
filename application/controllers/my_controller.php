<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_controller extends CI_Controller {
// 	public function __construct(){
// 		parent::__construct();
// 		$this->load->model('my_controller_model');
// 	}
	public function user_information(){
		$data = array();
		$data['firstname'] = $this ->input->post("firstname",true);
		$data['type'] = $this ->input->post("type",true);
		$data['status'] = $this ->input->post("status",true);
		$data['middlename'] = $this ->input->post("middlename",true);
		$data['lastname'] = $this ->input->post("lastname",true);
		$data['address'] = $this ->input->post("address",true);
		$data['email'] = $this ->input->post("email",true);
		$data['password'] = md5($this ->input->post("password",true));

		$this ->my_controller_model->user_info($data);
		$this->session->set_flashdata('reg_success', 'Registration successful ');

		redirect("welcome/registration");
	}
}
?>