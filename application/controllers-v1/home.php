<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){		
		parent::__construct();
		
		$this->load->model('admin/admin_model');		
	}


	public function index()
	{
		
		
		$data['country_list'] = "country array";
		$data['general_setting'] = $this->admin_model->get_all_list('general_setting','GeneralID');
		$data['slider_info'] = $this->admin_model->get_all_list('slider_manage', 'SliderID');
        $data['MainContent'] = $this->load->view('home', $data, true);
        $this->load->view('template', $data);	
			
	}
	
	
	public function login()
	{
		
		$data['country_list'] = "country array";
		$data['MainContent'] = $this->load->view('login', $data, true);
        $this->load->view('template', $data);		
	}
	
	public function logout(){
		$this->session->unset_userdata('MieventoUserID');
		redirect(base_url());
	}
}

