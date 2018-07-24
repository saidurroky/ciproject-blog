<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_login_controller extends CI_Controller {

	public function login_information(){
		
		$email    = $this ->input->post("email",true);
		$password = md5($this ->input->post("password",true));

		$result = $this ->user_login_model->login_info($email,$password);
		
		if($result){

				$user_data = array(
						// 'user_id'   =>$user_id,
						// 'firstname' => $firstname,
						// 'middlename' => $middlename,
						// 'lastname' => $lastname,
						// 'logged_in' => true
					);

					
					$user_data['user_id'] =$result->user_id;
					$user_data['type'] =$result->type;
					$user_data['firstname'] =$result->firstname;
					$user_data['middlename'] =$result->middlename;
					$user_data['lastname'] =$result->lastname;
					
					$this->session->set_userdata($user_data);
				//$this->session->set_flashdata('login_success', 'You are logged in ');
				redirect('admin_controller/index');
				
			}else{
				$this->session->set_flashdata('login_failed', 'sorry You are not logged in ');
				redirect('welcome/login');
			}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('welcome/login');
	}
}
?>