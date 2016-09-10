<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email_confirm extends CI_Controller {
	
	
 	
	public function __construct(){		
		parent::__construct();
		$this->load->model('general_model');
				
	}
	
	
	public function yes()
	{
	if($this->uri->segment(3))
		{
		$rem_no = $this->uri->segment(3);
		$rem_detail=get_random_no($rem_no);
		if(empty($rem_detail))
		{
			redirect(base_url());	
		}
		
		
		if($rem_detail['Status']=='0')
		{
		$user_info['Status']='1';
		
		$this->general_model->update_data('user_register',$user_info,array('UserID'=>$rem_detail['UserID']));
		}
		else
		{
		$this->session->set_flashdata('SuccessMsg','This Email is Allredy Confirm. Please Login ');
		}
		
		 $data['MainContent'] = $this->load->view('email_confirm', "", true);
        $this->load->view('template', $data);	
		
		}	
	}
	public function no()
	{
	
		
	$UserID = $this->uri->segment(3);
	
	$random = substr(md5(time() * rand()),0,15);
	$user_info['RandomNumber']=$random;
			  
	$this->general_model->update_data('user_register',$user_info,array('UserID'=>$UserID));

	$this->general_model->sendEmail($UserID);
	$this->session->set_flashdata('Succ','Your Activation Link Send');
    redirect(base_url());
	
	}
	
	
}