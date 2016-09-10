<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Createevent extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		//if(!get_user()){
			//echo "hello";exit;
		//}
		$this->load->model('general_model');		
	}

	public function index(){
		//$data['country_list'] = "Any content";
        $data['MainContent'] = $this->load->view('create-event', "", true);
        $this->load->view('template', $data);				
	}
	

	
}

