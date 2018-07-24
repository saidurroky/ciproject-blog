<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	public function index(){

		$this->load->view('admin_panel/home_admin');
	}
	public function setting_about_us(){

		$this->load->view('admin_panel/admin_about_us');
	}
	public function saveaboutus(){
		$data = array();
		$data['user_id'] = $this->session->userdata("user_id",true);
		$data['title'] = $this ->input->post("title",true);
		$data['content'] = $this ->input->post("content",true);
		
		$result= $this ->admin_controller_model->aboutus($data);
		if($result){
			$this->session->set_flashdata('publish_succ', 'About Us content published successfully ');
		}else{
			$this->session->set_flashdata('publish_err', 'About Us content not published');
		}
		redirect('Admin_controller/saveaboutus');
	}
	public function update_aboutus(){
		$data = array();
		$data['aboutus_id'] = $this ->input->post("aboutus_id",true);
		$data['title'] = $this ->input->post("title",true);
		$data['content'] = $this ->input->post("content",true);
		
		$this ->admin_controller_model->updateaboutus($data);
		
		redirect('Admin_controller/view_about_us');
	}

	public function view_about_us(){
		$data = array();
		$data['viewaboutus'] = $this ->admin_controller_model->viewaboutus();

		$this->load->view('admin_panel/view_about_us',$data);
	}
	public function edit_about_us($aboutus_id){
		$data = array();
		$data['editaboutus'] = $this ->admin_controller_model->editaboutus($aboutus_id);

		$this->load->view('admin_panel/update_about_us',$data);
	}

	public function setting_home_content(){
		$this->load->view('admin_panel/set_homecontent');
	}
	// setthing home content
	public function save_homecontent(){
		$data = array();
		$data['user_id'] = $this->session->userdata("user_id",true);
		$data['title'] = $this ->input->post("title",true);
		$data['content'] = $this ->input->post("content",true);
		
		$this ->admin_controller_model->inserthomecontent($data);
		
		$this->session->set_flashdata('publish_succ', 'Home content published successfully ');
		
		redirect('Admin_controller/setting_home_content');
	}

	public function view_home_content(){
		$data = array();
		$data['viewhomecontent'] = $this ->admin_controller_model->viewhomecontent();

		$this->load->view('admin_panel/view_home_content',$data);
	}

	public function edit_home_content($home_id){
		$data = array();
		$data['edithomecontent'] = $this ->admin_controller_model->edithomecontent($home_id);

		$this->load->view('admin_panel/update_home',$data);
	}

	public function update_home(){
		$data = array();
		$data['home_id'] = $this ->input->post("aboutus_id",true);
		$data['title'] = $this ->input->post("title",true);
		$data['content'] = $this ->input->post("content",true);
		
		$this ->admin_controller_model->updateaboutus($data);
		
		redirect('Admin_controller/view_about_us');
	}
	public function save_product_information(){
		$data = array();
		$data['user_id'] = $this->session->userdata("user_id",true);
		$data['title'] = $this ->input->post("title",true);
		$data['description'] = $this ->input->post("description",true);
		$data['name'] = $this ->input->post("name",true);
		$data['price'] = $this ->input->post("price",true);
		$data['phone'] = $this ->input->post("phone",true);
		$data['email'] = $this ->input->post("email",true);

		if($_FILES['image']['size'] <= 10000000){
			$result = $this->do_upload('image');
			if($result['upload_data']){
				$data['image'] ='resource/image_path/'.$result['upload_data']['file_name'];
			}
		}else{

		}
		$this ->admin_controller_model->insert_productinfo($data);

		$this->session->set_flashdata('pro_success', 'Product upload successful ');

		redirect("Admin_controller/");
	}

	public function do_upload($image_file)
        {
                $config['upload_path']          = './resource/image_path/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000000;
                $config['max_width']            = 10000000;
                $config['max_height']           = 768000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload($image_file))
                {
                        $error = array('error' => $this->upload->display_errors());
                        return $error;
                       // $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        return $data;
                       // $this->load->view('upload_success', $data);
                }
        }

    public function view_product_info(){
    	$user_id = $this->session->userdata("user_id",true);
    	$data = array();
		$data['viewproductinfo'] = $this ->admin_controller_model->viewproductinfo($user_id);

		$this->load->view('admin_panel/view_productinfo',$data);
    }
}
?>