<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General_setting extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');
		//$this->load->library('upload');

		}

		public function index(){
			//$data['user_list'] = $this->admin_model->get_all_list('admin', 'AdminID', $startLimit, $per_page);
			$data['general_setting'] = $this->admin_model->get_all_list('general_setting','GeneralID');
			$data['MainContent'] = $this->load->view('admin/general_setting',$data, true);
			$this->load->view('admin/template', $data);
		}
	
		public function action(){
	
			$general_setting_info['YouTube_Url'] = str_replace("http:","https:",$_POST['YouTube_Url']);
			$general_setting_info['About_Us'] = $_POST['About_Us'];
			$general_setting_info['Term_Condition'] = $_POST['Term_Condition'];
			
	
			if($_POST['GeneralID']==""){
				
				
			
				$this->db->insert('general_setting', $general_setting_info);	
				$this->session->set_flashdata('successmessage','Insert Successfully');
				
				
				
				
			}else{
				$GeneralID = $_POST['GeneralID'];
				
				
				
				
				$this->db->where('GeneralID', $GeneralID);
				$this->db->update('general_setting', $general_setting_info);
				$this->session->set_flashdata('successmessage','Detail Update successfully');
				
			
					
				}
				redirect(base_url().'admin/general_setting');
		}
		
	

	
}
