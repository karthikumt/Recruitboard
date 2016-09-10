<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('general_model');		
	}

	public function index(){		
		//$data['country_list'] = "Any content";
		if(get_user()){
			redirect(base_url().'dashboard');
		}
        $data['MainContent'] = $this->load->view('signup', "", true);
        $this->load->view('template', $data);		
		
	}
	
	public function action(){
		if($_SERVER['REQUEST_METHOD']=='POST'){	
		
			$user_info['Email'] = $_POST['Email'];
			$user_info['Password'] = $_POST['Password'];
			$user_info['Status'] = 1;
			
			$CheckEmail = $this->general_model->get_single_data_by_column('user', 'Email', $_POST['Email']);
			if(!empty($CheckEmail)){
				$this->session->set_flashdata('errormessage','Email allready exitst');
				redirect(base_url().'signup');
			}else{
				$this->db->insert('user', $user_info);					
				$this->session->set_flashdata('successmessage','You have successfully registered. Please login with your details.');
				redirect(base_url().'login');
			}
		}else{
			redirect(base_url().'signup');
		}
		
	}
	
}

