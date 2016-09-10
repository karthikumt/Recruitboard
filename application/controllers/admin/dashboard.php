<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');		
	}

	public function index(){	
		$data['country_list'] = "your contant";
        $data['MainContent'] = $this->load->view('admin/dashboard', $data, true);		
        $this->load->view('admin/template', $data);	
	}
	

}

