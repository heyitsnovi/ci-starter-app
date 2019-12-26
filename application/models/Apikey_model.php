<?php

 
defined('BASEPATH') OR exit('No direct script access allowed');

class Apikey_model extends CI_Model {


	public function create_user_api_key($userid,$apikey){

		$data = ['user_id'=>$userid,'key'=>$apikey];

		return $this->db->insert('keys',$data);
	}

}

/* End of file Apikey_model.php */
/* Location: ./application/modules/user/models/Apikey_model.php */