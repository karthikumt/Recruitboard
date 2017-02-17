<?php 
include_once APPPATH.'libraries/password.php';
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Colleage_admission extends CI_Controller {


	public function __construct()
	 {   
	  parent::__construct();    
	  $this->load->model('general_model');
	  $this->load->model('colleage_admission_model'); 
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
        $data['MainContent'] = $this->load->view('colleage_admission/step1',$data, true);
        $this->load->view('template', $data);		
	}
	public function insert_step1()
	{
	  
	  		$regex = "/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([edu])+$/"; 
			if (!preg_match( $regex, $_POST['UserEmail'] )) 
			{ $this->session->set_flashdata('ErrorMsg','Enter the Valid Email Address');
			  redirect(base_url().'colleage_admission');		
			 } 
		
		
		 if($_POST['FirstName']!="" && $_POST['LastName']!="" && $_POST['Title']!="" && $_POST['Country']!=0 && $_POST['UserEmail']!="" && $_POST['Password']!="")
		   {
		  
		  	   $step1_info['Coll_Title']=$_POST['Title'];
			   $step1_info['Coll_CountryID']=$_POST['Country'];
			   $step1_info['Coll_ZipCode']=$_POST['ZipCode'];
			   $step1_info['Coll_SchoolWeb']=$_POST['SchoolWeb'];
			   $step1_info['Coll_University']=$_POST['University'];
		
			   $step1_info['Coll_IPAddress']=$this->input->ip_address();
			  
			   $step1_info['Status']='1';
			   
			   $user_info['FirstName']=$_POST['FirstName'];
			   $user_info['LastName']=$_POST['LastName'];
			   $user_info['UserEmail']=$_POST['UserEmail'];
			   $user_info['Password']= password_hash($_POST['Password'], PASSWORD_DEFAULT);

			   $user_info['IPAddress']=$this->input->ip_address();
			   $random = substr(md5(time() * rand()),0,15);
			   $user_info['RandomNumber']=$random;
			   $user_info['Status']='0';
			   $user_info['UserType']='4';
			   $user_info['Step']='2';
			   $user_info['AdminStatus']='1';
		
		
 			
			$Email=$this->general_model->check_email();
			if($Email==0)
			{
			
			$this->db->set('RegisterDate', 'NOW()', FALSE);	
		  	$last_id=$this->general_model->insert_data('user_register',$user_info);
			$this->general_model->sendEmail($last_id);
			
			$step1_info['UserID']=$last_id;
			$this->db->set('Coll_RegisterDate','NOW()', FALSE);	
		  	$coll_id = $this->general_model->insert_data('colleage_admission',$step1_info);
			
			$this->colleage_admission_model->profile_image($coll_id);
			
			
			$this->session->set_userdata('UserID',$last_id);
			$this->session->set_flashdata('successmessage','Thank You For Completing.');
			redirect(base_url('colleage_admission/thanks'));
				
		  	}
			else
			{
			 $this->session->set_flashdata('ErrorMsg','This Email is Allredy Registered. Please Login');
			 redirect(base_url('colleage_admission'));
			}
		  
		   
		  
		   }
	   else
			{
			
			$this->session->set_flashdata('ErrorMsg','Some Field Are Missing');
		 	redirect(base_url('colleage_admission'));   

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
	if($User['Step']==2 && $User['UserType']=='4')
	 {  
		  
		$data['MainContent'] = $this->load->view('colleage_admission/step2',"", true);
		$this->load->view('template', $data);	
			
	  }
	else{
	   redirect(base_url('colleage_admission/step'.$User['Step'].''));
	 
	 
	 }

	
		
	}
	
	public function insert_step2()
	{
	
	  $success=true;
	   if($_POST['Tution']=='' && $_POST['Enrollment']=='' && $_POST['AceptRate']=='0' && $_POST['Setting']=='0' && $_POST['AvgStuGpa']=='0' && $_POST['GraduationRate']=='0')
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
				$step2_info['Coll_Tution']=$_POST['Tution'];
				$step2_info['Coll_Enroll']=$_POST['Enrollment'];
				$step2_info['Coll_AcceptRateID']=$_POST['AceptRate'];
				$step2_info['Coll_SettingID']=$_POST['Setting'];
				$step2_info['Coll_AvgTestScoreID']=$_POST['AvgTestScore'];
				$step2_info['Coll_AvgStuGpaID']=$_POST['AvgStuGpa'];
				$step2_info['Coll_GraduationRateID']=$_POST['GraduationRate'];
				$step2_info['Coll_AvgFinancialAid']=$_POST['AvgFinancialAid'];
				$step2_info['Coll_TopMajorID']= implode(',',$_POST['TopMajor']);
				$step2_info['Coll_SchoolUnique']=$_POST['SchoolUnique'];
				
				$user_info['Step']='3';
			}
			
			if($success==true)
				{
					$this->general_model->update_data('colleage_admission',$step2_info,$update_info);
					$this->general_model->update_data('user_register',$user_info,$update_info);
					$this->session->set_flashdata('successmessage','Thank You For Completing.');
					redirect(base_url('colleage_admission/step3'));
					
				}
			else
				{
					$this->session->set_flashdata('ErrorMsg','Some Field Are Missing');
					redirect(base_url('colleage_admission/step2'));
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
		if($User['Step']=='3' && $User['UserType']=='4')
		 {  
			  
			$data['MainContent'] = $this->load->view('colleage_admission/step3',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('colleage_admission/step'.$User['Step'].''));
		 
		 
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
						
						$step3_info['Coll_VideoUrl']=str_replace("http:","https:",$_POST['VideoUrl']);
						
						$user_info['Step']='4';
					}
				
				if($success==true)
					{	
				
						$this->general_model->update_data('colleage_admission',$step3_info,$update_info);
						$this->general_model->update_data('user_register',$user_info,$update_info);	
						$this->session->set_flashdata('successmessage','Thank You For Completing.');
						redirect(base_url('colleage_admission/step4'));
						
					}
				else
					{
					    $this->session->set_flashdata('ErrorMsg','Some Field Are Missing');
						redirect(base_url('colleage_admission/step3'));
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
		if($User['Step']=='4' && $User['UserType']=='4')
		 {  
			  
			$data['MainContent'] = $this->load->view('colleage_admission/step4',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('colleage_admission/step'.$User['Step'].''));
		 
		 
		 }
		
	 	
		
	}
	
	
	
	public function insert_step4()
	{
	
	  $success=true;
	   if($_POST['FieldOfInterest']=='0' && $_POST['Major']=='0' && $_POST['Gpa']=='0' && $_POST['TestScore']=='0')
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
				$step4_info['Coll_FieldOfInterestID']=$_POST['FieldOfInterest'];
				$step4_info['Coll_MajorID']=$_POST['Major'];
				$step4_info['Coll_GpaID']=$_POST['Gpa'];
				$step4_info['Coll_TestScoreID']=$_POST['TestScore'];
				$step4_info['Coll_OtherSpecific']=$_POST['OtherSpecific'];
				$user_info['Step']='5';
				$user_info['IsComplated']='1';
				
			}
			
			if($success==true)
				{
					$this->general_model->update_data('colleage_admission',$step4_info,$update_info);
					$this->general_model->update_data('user_register',$user_info,$update_info);	
					$this->session->set_flashdata('successmessage','Thank You For Completing.');
					redirect(base_url('colleage_admission/step5'));
				}
			else
				{
					$this->session->set_flashdata('ErrorMsg','Some Field Are Missing');
					redirect(base_url('colleage_admission/step4'));
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
		if($User['Step']=='5' && $User['UserType']=='4')
		 {  
			  
			$data['MainContent'] = $this->load->view('colleage_admission/step5',"", true);
			$this->load->view('template', $data);	
			
				
		  }
		else{
		   redirect(base_url('colleage_admission/step'.$User['Step'].''));
		 
		 
		 }
		
		
	}
	
	
	
	
	
}	
	