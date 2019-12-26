<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxrequest extends CI_Controller {

	protected $allowed_files = [
	'image', 
	'text/plain', 
	'application/pdf',
	'application/zip',
	'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];

	public function __construct(){
		parent::__construct();
	}
	
	public function get_codeigniter_latest_version(){

		if ($this->ion_auth->is_admin() && $this->input->is_ajax_request()){ 

			$context_option=array(
				    "ssl"=>array(
				        "verify_peer"=>false,
				        "verify_peer_name"=>false,
				    ),
				);  

				$replace_strings = array('.zip','.');

				$string_to_replace = array('','');
					
				$ci_version_detected = '';

				$latest_version = '';

				$ci_home_content = file_get_contents('https://codeigniter.com/', false, stream_context_create($context_option));

				preg_match('~/archive/(.*?).zip~', $ci_home_content, $ci_version_detected);

				$data = explode("/",$ci_version_detected[0]); 

				$latest_version = str_replace(".zip",'',$data[2]);

				echo json_encode(['latest_version'=>$latest_version]);

		}else{

				return show_error('You must be an administrator to perform this action.');
		}

	}

	public function filemanager_connector(){

		if (!$this->ion_auth->logged_in())
		{
 
			echo json_encode(['error'=>'Access denied']);
		}
		else if (!$this->ion_auth->is_admin()) 
		{
			echo json_encode(['error'=>'Access denied']);
		}
		else
		{
           $opts = array(
                'roots' => array(
                    array( 
                        'driver'        => 'LocalFileSystem',
                        'uploadMaxSize'=>0,
                        'path'          => FCPATH . '/storage',
                        'URL'           => base_url('storage'),
                        'uploadDeny'    => array('all'),                  // All Mimetypes not allowed to upload
                        'uploadAllow'   => $this->allowed_files,// Mimetype `image` and `text/plain` allowed to upload
                        'uploadOrder'   => array('deny', 'allow'),        // allowed Mimetype `image` and `text/plain` only
                        'accessControl' => array($this, 'elfinderAccess'),// disable and hide dot starting files (OPTIONAL)
                        // more elFinder options here
                    ) 
                ),
            );
            $connector = new elFinderConnector(new elFinder($opts));
            $connector->run();
  
		}

	}

    public function elfinderAccess($attr, $path, $data, $volume, $isDir, $relpath){
    	
 		if (!$this->ion_auth->logged_in())
		{
 
			echo json_encode(['error'=>'Access denied']);

		}
		else if (!$this->ion_auth->is_admin()) 
		{
 
			echo json_encode(['error'=>'Access denied']);
		}
		else
		{
           $basename = basename($path);
            return $basename[0] === '.'              
                     && strlen($relpath) !== 1        
                ? !($attr == 'read' || $attr == 'write')
                :  null;         
		}
    }

}

/* End of file Ajaxrequest.php */
/* Location: ./application/modules/user/controllers/Ajaxrequest.php */