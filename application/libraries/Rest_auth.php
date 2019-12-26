<?php

class Rest_auth
{

	protected $CI;
	
	public function __construct(){
		$this->CI = &get_instance();
		$this->CI->load->library('ion_auth');
	}

	public function rest_authenticate($username,$password){

		if($this->CI->ion_auth->login($username,$password)){

			return true;

		}else{
			
			return false;
		}
		
	}
}