<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/login_model');		
	}

	public function index(){
		if(get_admin_id()){
			redirect(base_url().'admin/dashboard');
		}else{
			$this->load->view('admin/login');
		}
	}
	
	public function login_check(){
		
		$data['UserName'] = $_REQUEST['UserName'];
		$data['Password'] = $_REQUEST['Password'];
		
		$AdminData = $this->login_model->login_check($data); 
		if($AdminData){
			$SessionData = array('AdminID'=>$AdminData['AdminID'],'Email'=>$AdminData['Email']);			
			$this->session->set_userdata('admin_login_session',$SessionData);					
			redirect(base_url().'admin/dashboard');
			exit;
		}else{
			$this->session->set_flashdata('message','Invalid Login Details');
			redirect(base_url().'admin/login');
			exit;
		}
		exit;
	}
	
	public function logout(){
		$this->session->unset_userdata('admin_login_session');
		redirect(base_url().'admin/login');	
	}
}

