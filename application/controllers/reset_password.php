<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once APPPATH.'libraries/password.php';
class Reset_password extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('general_model');
				
	}
	
	public function index()
	{
		$data['MainContent'] = $this->load->view('reset-password', "", true);
		$this->load->view('template', $data);	
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
			else
			{
				$data['MainContent'] = $this->load->view('reset-password', "", true);
				$this->load->view('template', $data);	
			}
			
		}
			
	}
	
	public function reset()
	{
		$user_info['Password']=password_hash($this->input->post('Password'), PASSWORD_DEFAULT);
		$random = substr(md5(time() * rand()),0,15);
		$user_info['RandomNumber']=$random;
		$rem_detail=get_random_no($this->input->post('Random_no'));
		if(empty($rem_detail))
			{
				$this->session->set_flashdata('errormess',' Your Password Was Updated.');
    			redirect(base_url().'reset_password');		
			}
			else
			{
				$this->general_model->update_data('user_register',$user_info,array('UserID'=>$rem_detail['UserID']));
				$this->session->set_flashdata('Succ','Password Updated Successfully');
    			redirect(base_url());	
			}
		
	}
	
	
	
	
}