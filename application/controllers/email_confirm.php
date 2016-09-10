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
			if(!empty($rem_detail))
			{
			
			
			$user_info['Status']='1';
			$this->general_model->update_data('user_register',$user_info,array('UserID'=>$rem_detail['UserID']));
			$this->session->set_userdata('MyRecuritID',$rem_detail['UserID']);
			
				if($rem_detail['UserType']=='1')
				{
				redirect(base_url().'student_athlete/step2');
				}
				else if($rem_detail['UserType']=='2')
				{
				redirect(base_url().'juco_transfer/step2');
				}
				else if($rem_detail['UserType']=='3')
				{
				redirect(base_url().'colleage_coach/step2');
				}
				else if($rem_detail['UserType']=='4')
				{
				redirect(base_url().'colleage_admission/step2');
				}
				else if($rem_detail['UserType']=='5')
				{
				redirect(base_url().'highschool_coach/step2');
				}
				else if($rem_detail['UserType']=='6')
				{
				redirect(base_url().'club_coach/step2');
				}
				else if($rem_detail['UserType']=='7')
				{
				redirect(base_url().'highschool_teacher/step2');
				}
				else if($rem_detail['UserType']=='8')
				{
				redirect(base_url().'development_coach/step2');
				}
				else if($rem_detail['UserType']=='9')
				{
				redirect(base_url().'academic_tutor/step2');
				}
				else
				{
				redirect(base_url());
				}
			}
			else
			{
			redirect(base_url());
			}
		
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