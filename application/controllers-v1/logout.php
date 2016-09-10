<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('general_model');
		$this->load->library('session');			
	}
	
	public function index(){
		$this->session->unset_userdata('MyRecuritID');
        $this->session->unset_userdata('Dashbord');
		redirect(base_url());
	}
	
	

		
}

