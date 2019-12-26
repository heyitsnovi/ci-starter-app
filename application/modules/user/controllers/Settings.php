<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
	
		if (!$this->ion_auth->logged_in())
		{
 
			redirect('user/auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) 
		{
 
			return show_error('You must be an administrator to view this page.');
		}
		else
		{
			$this->form_validation->set_rules('app_name', 'Application Name', 'trim|required|min_length[5]|max_length[50]');
			$this->form_validation->set_rules('app_admin_email', 'Application Email', 'trim|required|valid_email');

			if($this->form_validation->run()===false){

				$data['view_content'] = 'settings/index';
				$data['page_title'] = 'Settings';
				$this->load->view('layouts/main',$data);

			}else{

				
			}

		}

	}



}
 