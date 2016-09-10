<?php 
include_once APPPATH.'libraries/password.php';
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Highschool_coach extends CI_Controller {


	public function __construct()
	 {   
	  parent::__construct();    
	  $this->load->model('general_model');
	  $this->load->model('highschool_coach_model'); 
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
        $data['MainContent'] = $this->load->view('highschool_coach/step1',$data, true);
        $this->load->view('template', $data);		
	}
	
	
	
	
	
	public function insert_step1()
	{
	  
	  
	  
	  $success=true;
	   if($_POST['FirstName']=='' && $_POST['LastName']=='' && $_POST['Title']=='' && $_POST['Country']=='0' && $_POST['UserEmail']=='' && $_POST['Password']=='' && $_POST['LevelCoach']=='0' && $_POST['GenderCoach']=='0' && $_POST['Sport']=='0' && $_POST['DirectName']=='' && $_POST['Highschool']=='' )
		   {
		   $success=false;
		  
		   }
	   else
			{
			
			   $step1_info['High_Title']=$_POST['Title'];
			   $step1_info['High_CountryID']=$_POST['Country'];
			   $step1_info['High_ZipCode']=$_POST['ZipCode'];
			   $step1_info['High_LevelCoachID']=$_POST['LevelCoach'];
			   $step1_info['High_School']=$_POST['Highschool'];
		 	   $step1_info['High_GenderCoachID']=$_POST['GenderCoach'];
			   $step1_info['High_SportID']=$_POST['Sport'];
			   $step1_info['High_DirectName']=$_POST['DirectName'];
			   $step1_info['High_DirectPhone']=$_POST['DirectPhone'];
			   $step1_info['High_DirectEmail']=$_POST['DirectEmail'];
			  
			   $step1_info['Status']='1';
			   
			   $user_info['FirstName']=$_POST['FirstName'];
			   $user_info['LastName']=$_POST['LastName'];
			   $user_info['UserEmail']=$_POST['UserEmail'];
			   $user_info['Password']= password_hash($_POST['Password'], PASSWORD_DEFAULT);

			   $user_info['IPAddress']=$this->input->ip_address();
			   $random = substr(md5(time() * rand()),0,15);
			   $user_info['RandomNumber']=$random;
			   $user_info['Status']='0';
			   $user_info['UserType']='5';
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
			
		  	$coll_id = $this->general_model->insert_data('highschool_coach',$step1_info);
			
			$this->highschool_coach_model->profile_image($coll_id);
			
			
			$this->session->set_userdata('UserID',$last_id);
			$this->session->set_flashdata('successmessage','Thank You For Completing.');
			redirect(base_url('highschool_coach/thanks'));
				
		  	}
			else
			{
			 $this->session->set_flashdata('ErrorMsg','This Email is Allredy Registered. Please Login');
			 redirect(base_url('highschool_coach'));
			}

		}	
		else
		{
		 $this->session->set_flashdata('ErrorMsg','Some Field Are Missing');
		 redirect(base_url('highschool_coach'));
		
		}

			
	}
	public function check_email()
 	{
	  $Email=$this->general_model->check_email();
	  echo $Email; 
	}
	
	 public function thanks()
	{

			$data['MainContent'] = $this->load->view('thanks',"", true);
			$this->load->view('template', $data);	
		
	}
	
	

	public function step2()
	{
	
		 
		 if($this->session->userdata('MyRecuritID'))
		  {
		   $UserID=$this->session->userdata('MyRecuritID'); 
		  }
			  
		$User=get_user_detail($UserID);  
		if($User['Step']=='2' && $User['UserType']=='5')
		 {  
			  
			$data['MainContent'] = $this->load->view('highschool_coach/step2',"", true);
			$this->load->view('template', $data);	
			
				
		  }
		else{
		   redirect(base_url('highschool_coach/step'.$User['Step'].''));
		
		 
		 }
	
	 
		
	}
	
	
	
	
	
	public function insert_step2()
	{
	
	  $success=true;
	   if($_POST['Division']=='' && $_POST['Conference']=='')
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
				$step2_info['High_Division']=$_POST['Division'];
				$step2_info['High_Conference']=$_POST['Conference'];
				$step2_info['High_Team']=$_POST['Team'];
				$step2_info['High_ProUnique']=$_POST['ProUnique'];
				
				
				$user_info['Step']='3';
			}
			
			if($success==true)
				{
					$this->general_model->update_data('highschool_coach',$step2_info,$update_info);
					$this->general_model->update_data('user_register',$user_info,$update_info);
					$this->session->set_flashdata('successmessage','Thank You For Completing.');
					redirect(base_url('highschool_coach/step3'));
					
				}
			else
				{
					$this->session->set_flashdata('ErrorMsg','Some Field Are Missing');
					redirect(base_url('highschool_coach/step2'));
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
		if($User['Step']=='3' && $User['UserType']=='5')
		 {  
			  
			$data['MainContent'] = $this->load->view('highschool_coach/step3',"", true);
			$this->load->view('template', $data);	
			
				
		  }
		else{
		   redirect(base_url('highschool_coach/step'.$User['Step'].''));
		
		 
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
						
						$step3_info['High_VideoUrl']=$_POST['VideoUrl'];
						
						$user_info['Step']='4';
						$user_info['IsComplated']='1';
					}
				
				if($success==true)
					{	
				
						$this->general_model->update_data('highschool_coach',$step3_info,$update_info);
						$this->general_model->update_data('user_register',$user_info,$update_info);	
						$this->session->set_flashdata('successmessage','Thank You For Completing.');
						redirect(base_url('highschool_coach/step4'));
						
					}
				else
					{
					    $this->session->set_flashdata('ErrorMsg','Some Field Are Missing');
						redirect(base_url('highschool_coach/step3'));
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
		if($User['Step']=='4' && $User['UserType']=='5')
		 {  
			  
			$data['MainContent'] = $this->load->view('highschool_coach/step4',"", true);
			$this->load->view('template', $data);	
			
				
		  }
		else{
		   redirect(base_url('highschool_coach/step'.$User['Step'].''));
		
		 
		 }
		
	}
	
	
}	
	