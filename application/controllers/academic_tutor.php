<?php 
include_once APPPATH.'libraries/password.php';
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Academic_tutor extends CI_Controller {


	public function __construct()
	 {   
	  parent::__construct();    
	  $this->load->model('general_model');
	  $this->load->model('academic_tutor_model'); 
	 }

	public function index()
	{
		redirect(base_url().'come_soon');	
		$cap =  $capcha=get_captcha();
		$data = array(
						'captcha_time' => $cap['time'],
						'word' => $cap['word']
						);
		
		 $data['cap_img']=$cap['image'];
		 $data['cap_word']=$cap['word'];
        $data['MainContent'] = $this->load->view('academic_tutor/step1',$data, true);
        $this->load->view('template', $data);		
	}
	
	
	public function insert_step1()
	{
	  
	  
	  
	  $success=true;
	   if($_POST['FirstName']=='' && $_POST['LastName']=='' && $_POST['Title']=='' && $_POST['Country']=='0' && $_POST['UserEmail']=='' && $_POST['Password']=='')
		   {
		   $success=false;
		  
		   }
	   else
			{
			
			   $step1_info['Ac_Title']=$_POST['Title'];
			   $step1_info['Ac_CountryID']=$_POST['Country'];
			   $step1_info['Ac_ZipCode']=$_POST['ZipCode'];
			   $step1_info['Ac_PhoneNo']=$_POST['PhoneNo'];
			   $step1_info['Ac_BusinessName']=$_POST['BusinessName'];
		
			  
			  
			   $step1_info['Status']='1';
			   
			   $user_info['FirstName']=$_POST['FirstName'];
			   $user_info['LastName']=$_POST['LastName'];
			   $user_info['UserEmail']=$_POST['UserEmail'];
			   $user_info['Password']= password_hash($_POST['Password'], PASSWORD_DEFAULT);

			   $user_info['IPAddress']=$this->input->ip_address();
			   $random = substr(md5(time() * rand()),0,15);
			   $user_info['RandomNumber']=$random;
			   $user_info['Status']='0';
			   $user_info['UserType']='9';
			   $user_info['Step']='2';
			   $user_info['AdminStatus']='1';
			}
			
			
			
		if($success==true)
		{
		
			
 			$Email=$this->general_model->check_email();
			if($Email==0)
			{
			
			$this->db->set('RegisterDate', 'NOW()', FALSE);	
		  	$last_id=$this->general_model->insert_data('user_register',$user_info);
			$this->general_model->sendEmail($last_id);
			
			$step1_info['UserID']=$last_id;

		  	$coll_id = $this->general_model->insert_data('academic_tutor',$step1_info);
			
			$this->academic_tutor_model->profile_image($coll_id);
			
			
			$this->session->set_userdata('UserID',$last_id);
			$this->session->set_flashdata('successmessage','Thank You For Completing.');
			redirect(base_url('academic_tutor/thanks'));
				
		  	}
			else
			{
			 $this->session->set_flashdata('ErrorMsg','This Emailid Allredy Register');
			 redirect(base_url('academic_tutor'));
			}

		}	
		else
		{
		 $this->session->set_flashdata('ErrorMsg','Some Field Are Missing');
		 redirect(base_url('academic_tutor'));
		
		}

			
	}
	
	public function thanks()
	{

			$data['MainContent'] = $this->load->view('thanks',"", true);
			$this->load->view('template', $data);	
		
	}
	
	public function check_email()
 	{
	  $Email=$this->general_model->check_email();
	  echo $Email; 
	}
	
	

	public function step2()
	{
	
		
	   if($this->session->userdata('MyRecuritID'))
		  {
		   $UserID=$this->session->userdata('MyRecuritID'); 
		  }
			  
		$User=get_user_detail($UserID);  
		if($User['Step']=='2' && $User['UserType']=='9')
		 {  
			  
			$data['MainContent'] = $this->load->view('academic_tutor/step2',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('academic_tutor/step'.$User['Step'].''));
		 
		 
		 }
	
	 	
		
	}
	
	
	
		public function insert_step2()
	{
	
	  $success=true;
	   if($_POST['ClgAttend']=='' && $_POST['Qualification']=='' )
		   {
			   $success=false;
		   }
	   else
			{
				
				if($this->session->userdata('MyRecuritID'))
				  {
				   $UserID=$this->session->userdata('MyRecuritID'); 
				  }else{
				   $UserID= $this->session->userdata('UserID');  
				  }
				$update_info['UserID']=$UserID;
				$step2_info['Ac_ClgAttend']=$_POST['ClgAttend'];
				$step2_info['Ac_Qualification']=$_POST['Qualification'];
				$step2_info['Ac_Website']=$_POST['Website'];
			
				$step2_info['Ac_BusinessUnique']=$_POST['BusinessUnique'];
				
				$user_info['Step']='3';
			}
			
			if($success==true)
				{
					$this->general_model->update_data('academic_tutor',$step2_info,$update_info);
					$this->general_model->update_data('user_register',$user_info,$update_info);
					$this->session->set_flashdata('successmessage','Thank You For Completing.');
					
					redirect(base_url('academic_tutor/step3'));
					
				}
			else
				{
					$this->session->set_flashdata('ErrorMsg','Some Field Are Missing');
					redirect(base_url('academic_tutor/step2'));
				}
			
		
	}
	
	
	
	
	
	public function step3()
	{
	
	 	 if($this->session->userdata('MyRecuritID'))
		  {
		   $UserID=$this->session->userdata('MyRecuritID'); 
		  }else{
		   $UserID= $this->session->userdata('UserID');  
		  }
			  
		$User=get_user_detail($UserID);  
		if($User['Step']=='3' && $User['UserType']=='9')
		 {  
			  
			$data['MainContent'] = $this->load->view('academic_tutor/step3',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('academic_tutor/step'.$User['Step'].''));
		 
		 
		 }
		
	}
	
	
	public function insert_step3()
	{
	
	 $success=true;
			  
			   if($_POST['VideoUrl']=='')
				   {
					   $success=false;
				   }
			   else
					{
						
						if($this->session->userdata('MyRecuritID'))
						  {
						   $UserID=$this->session->userdata('MyRecuritID'); 
						  }else{
						   $UserID= $this->session->userdata('UserID');  
						  }
				
						$update_info['UserID']=$UserID;
						
						$step3_info['Ac_VideoUrl']=$_POST['VideoUrl'];
						
						$user_info['Step']='4';
					}
				
				if($success==true)
					{	
				
						$this->general_model->update_data('academic_tutor',$step3_info,$update_info);
						$this->general_model->update_data('user_register',$user_info,$update_info);	
						$this->session->set_flashdata('successmessage','Thank You For Completing.');
						redirect(base_url('academic_tutor/step4'));
						
					}
				else
					{
					    $this->session->set_flashdata('ErrorMsg','Some Field Are Missing');
						redirect(base_url('academic_tutor/step3'));
					}
						

		}
	
	
	
	
	public function step4()
	{
	
	 	 if($this->session->userdata('MyRecuritID'))
		  {
		   $UserID=$this->session->userdata('MyRecuritID'); 
		  }else{
		   $UserID= $this->session->userdata('UserID');  
		  }
			  
		$User=get_user_detail($UserID);  
		if($User['Step']=='4' && $User['UserType']=='9')
		 {  
			  
			$data['MainContent'] = $this->load->view('academic_tutor/step4',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('academic_tutor/step'.$User['Step'].''));
		 
		 
		 }
		
	}
	
	
	public function insert_step4()
	{
	
	  $success=true;
	   if($_POST['Category']=='0' && $_POST['ServiceUnique']=='')
		   {
			   $success=false;
		   }
	   else
			{
	
				if($this->session->userdata('MyRecuritID'))
						  {
						   $UserID=$this->session->userdata('MyRecuritID'); 
						  }else{
						   $UserID= $this->session->userdata('UserID');  
						  }
				
				$update_info['UserID']=$UserID;
				$step4_info['Ac_CategoryID']=$_POST['Category'];
				$step4_info['Ac_ServiceUnique']=$_POST['ServiceUnique'];
				
				$user_info['Step']='5';
				$user_info['IsComplated']='1';
				
			}
			
			if($success==true)
				{
					$this->general_model->update_data('academic_tutor',$step4_info,$update_info);
					$this->general_model->update_data('user_register',$user_info,$update_info);	
					$this->session->set_flashdata('successmessage','Thank You For Completing.');
					redirect(base_url('academic_tutor/step5'));
				}
			else
				{
					$this->session->set_flashdata('ErrorMsg','Some Field Are Missing');
					redirect(base_url('academic_tutor/step4'));
				}
			
		
	}
	
	
	
	
	public function step5()
	{
	 	
		 if($this->session->userdata('MyRecuritID'))
		  {
		   $UserID=$this->session->userdata('MyRecuritID'); 
		  }else{
		   $UserID= $this->session->userdata('UserID');  
		  }
			  
		$User=get_user_detail($UserID);  
		if($User['Step']=='5' && $User['UserType']=='9')
		 {  
			  
			$data['MainContent'] = $this->load->view('academic_tutor/step5',"", true);
			$this->load->view('template', $data);	
			
				
		  }
		else{
		   redirect(base_url('academic_tutor/step'.$User['Step'].''));
		
		 
		 }
		
	}
	
}	
	