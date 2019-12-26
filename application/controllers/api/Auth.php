<?php

use \Restserver\Libraries\REST_Controller as RestController;
use \Firebase\JWT\JWT; 

require APPPATH . '/libraries/REST_Controller.php';
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends RestController {

	public function __construct(){

		parent::__construct();
 
	}


	public function index_get(){
 		
		try{

			$decoded_secret_key = base64_decode($this->config->item('jwt_secret_token')); 

			$decoded_token = JWT::decode($this->get('token'), $decoded_secret_key, [$this->config->item('jwt_algo')]);

				$this->response(['userdata'=>$decoded_token],200);

		}catch(Exception $e){

			$this->response(['error'=>'Invalid login'],401);
		}

	}


	public function index_post(){

			if($this->ion_auth->login($this->post('email'),$this->post('password'))){


			        $token_id      =   	base64_encode(openssl_random_pseudo_bytes(32));
			        $issued_at     =   	time();
			        $not_before   =   	$issued_at;   
			        $expiration     =   	$not_before + $this->config->item('token_expire');  
			        $server_name =   	base_url('/');  


			         $data = [
			                'iat'  => $issued_at,        
			                'jti'  => $token_id,          
			                'iss'  => $server_name,     
			                'nbf'  => $not_before,     
			                'exp'  => $expiration,      
			                'data' => $this->ion_auth->user()->row()
			            ];
			          
			          $secret_key_decode = base64_decode($this->config->item('jwt_secret_token'));
			        
			          $user_web_token = JWT::encode(
			                    $data,
			                    $secret_key_decode,
			                    $this->config->item('jwt_algo')
			                   ); 


					$this->response(['token'=>$user_web_token],200);


			}else{
				
				 	$this->response(['status'=>'Invalid Username or Password'],401);
			}
		 
	}

}

/* End of file User.php */
/* Location: ./application/modules/api/controllers/User.php */