<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_controller_model extends CI_model {

	public function user_info($data){
		$this ->db->insert('tbl_user', $data);
	}

}
?>