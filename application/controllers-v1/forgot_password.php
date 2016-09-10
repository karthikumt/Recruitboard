<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forgot_Password extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('general_model');
	}
	
	public function index(){
	
		$data['MainContent'] = $this->load->view('forgot_password',"", true);
        $this->load->view('template', $data);	
	}
	public function forgot()
	{
	
		$forgot=$this->general_model->forgot_password();
		if($forgot==1)
		{
			$this->session->set_flashdata('successmessage', 'Your Password Details Send to your Email');
		}
		if($forgot==0)
		{
			$this->session->set_flashdata('errormess', 'Invalid Email Address');
		}
		redirect(base_url()."forgot_password");
	}
	

		
}

