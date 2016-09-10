
<?php 
include_once APPPATH.'libraries/password.php';
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment_expire extends CI_Controller {
 
  
 public function __construct()
	 {   
	  parent::__construct();    
	  $this->load->model('general_model');
	  $this->load->model('student_athlete_model');
	  
	 }
 	public function index()
	{
		if($this->session->userdata('MyRecuritID'))
		  {
		   $UserID=$this->session->userdata('MyRecuritID'); 
		  }
		$User['Step']='8';
		$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
			
		$user_info=get_user_detail($UserID);
		$this->session->set_flashdata('errormessage','Your Payment is Expired.');
		if($user_info['UserType']=='1')
		{
		redirect(base_url().'student_athlete/step8');
		}
		if($user_info['UserType']=='2')
		{
		redirect(base_url().'juco_transfer/step8');
		}	
		
	}
	
	
	
	
	
	
}	
	