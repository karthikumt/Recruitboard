<?php 
include_once APPPATH.'libraries/password.php';
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Colleage_coach extends CI_Controller {

	public function __construct()
	{		
		parent::__construct();				
		$this->load->model('general_model');
		$this->load->model('colleage_coach_model');
	
	}
	public function index()
	{
		redirect(base_url().'come_soon');	
		$cap =  get_captcha();
		$data = array(
			 'captcha_time' => $cap['time'],
			 'word' => $cap['word']
			 );
		$data['cap_img']=$cap['image'];	
		$data['cap_word']=$cap['word'];	
        $data['MainContent'] = $this->load->view('colleage_coach/colleage_coach_step1',$data, true);
        $this->load->view('template', $data);		
	}
	
	
	public function insert_step1()
	{
		$Coach_FirstName=$this->input->post('Coach_FirstName');
		$Coach_LastName=$this->input->post('Coach_LastName');
		$Coach_Title=$this->input->post('Coach_Title');
		$Coach_University=$this->input->post('Coach_University');
		$Coach_CountryID=$this->input->post('Coach_CountryID');
		$Coach_State=$this->input->post('Coach_State');
		$Coach_City=$this->input->post('Coach_City');
		$Coach_Zip=$this->input->post('Coach_Zip');
		$Coach_GenderID=$this->input->post('Coach_GenderID');
		$Coach_SportID=$this->input->post('Coach_SportID');
		$UserEmail=$this->input->post('UserEmail');
		$Password=password_hash($_POST['Password'], PASSWORD_DEFAULT);
		$random = substr(md5(time() * rand()),0,15);
		 
		$regex = "/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([edu])+$/"; 
		if (!preg_match( $regex, $UserEmail )) 
		{ $this->session->set_flashdata('errormessage','Enter the Valid Email Address'); } 
		
			  
		if($Coach_FirstName!="" && $Coach_LastName!="" && $Coach_CountryID!="" && $Coach_GenderID!="" && $Coach_SportID!="" && $UserEmail!="" && $Password!="" && $Coach_State!="0" && $Coach_City!=""){
			$Email=$this->general_model->check_email();
			if($Email==0)
			{
				$array=array(
							'UserEmail'=>$UserEmail,
							'Password'=> $Password,
							'UserType'=>'3',
							'FirstName'=>$Coach_FirstName,
							'LastName'=>$Coach_LastName,
							'IPAddress'=>$this->input->ip_address(),
							'Coach_State'=>$Coach_State,
							'Coach_City'=>$Coach_City,
							'RandomNumber'=>$random,
							'Status'=>'0',
							'AdminStatus'=>'1',
							'Step'=>'2'		
						);
				$this->db->set('RegisterDate', 'NOW()', FALSE);		
				$LastID=$this->general_model->insert_data('user_register',$array);
				$this->general_model->sendEmail($LastID);
				
				
				$array=array(
							'UserID'=>$LastID,
							'Coach_Title'=>$Coach_Title,
							'Coach_University'=>$Coach_University,
							'Coach_CountryID'=>$Coach_CountryID,
							'Coach_Zip'=>$Coach_Zip,
							'Coach_GenderID'=>$Coach_GenderID,
							'Coach_SportID'=>$Coach_SportID,
							'Coach_Status'=>'1',
							'Coach_IPAddress'=>$this->input->ip_address()
						);	
			 $this->db->set('Coach_RegisterDate', 'NOW()', FALSE);
			 $Coach_ID=$this->general_model->insert_data('colleage_coach',$array);	
			
				
			  $Coach_ProfileImage = $_FILES['Coach_ProfileImage']['name'];
			  if($Coach_ProfileImage!=""){
					$this->colleage_coach_model->profile_image($Coach_ID);
			  }
			 $this->session->set_flashdata('successmessage','Thank You For Completing.');
			 $this->session->set_userdata('UserID',$LastID);
        	 redirect(base_url().'colleage_coach/thanks');
       			
			}
			$this->session->set_flashdata('errormessage','This Email is Allredy Registered. Please Login');
		}
		else {
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
				
		}
		redirect(base_url().'colleage_coach');	
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
	   if($User['Step']=='2' && $User['UserType']=='3')
	   {  
		   $data['MainContent'] = $this->load->view('colleage_coach/colleage_coach_step2',"", true);
		   $this->load->view('template', $data); 
		}
	  	else{
		 redirect(base_url('colleage_coach/step'.$User['Step'].''));
	   }
				
	}
	
	public function insert_step2()
	{
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		$Coach_DivisionID=$this->input->post('Coach_DivisionID');
		$Coach_Conferance=$this->input->post('Coach_Conferance');
		$Coach_SeasonRecord=$this->input->post('Coach_SeasonRecord');
		$Coach_CareerRecord=$this->input->post('Coach_CareerRecord');
		$Coach_CurrentProgramID=$this->input->post('Coach_CurrentProgramID');
		$Coach_PlayID=$this->input->post('Coach_PlayID');
		$Coach_TeamID=$this->input->post('Coach_TeamID');
		$Coach_CoachAward=$this->input->post('Coach_CoachAward');
		$Coach_Program=$this->input->post('Coach_Program');
		
		if($Coach_DivisionID!=0 && $Coach_CurrentProgramID!=0 && $Coach_PlayID!=0 && $Coach_TeamID!="" && $Coach_Program!=""){
		
				$array=array(
							'Coach_DivisionID'=>$Coach_DivisionID,
							'Coach_Conferance'=>$Coach_Conferance,
							'Coach_SeasonRecord'=>$Coach_SeasonRecord,
							'Coach_CareerRecord'=>$Coach_CareerRecord,
							'Coach_CurrentProgramID'=>$Coach_CurrentProgramID,
							'Coach_PlayID'=>$Coach_PlayID,
							'Coach_TeamID'=>$Coach_TeamID,
							'Coach_CoachAward'=>$Coach_CoachAward,
							'Coach_Program'=>$Coach_Program,
							
						);
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('colleage_coach',$array,$update_file);	
				$this->general_model->update_data('user_register',array('Step'=>'3'),array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				redirect(base_url().'colleage_coach/step3');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'colleage_coach/step2');	
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
	   if($User['Step']=='3' && $User['UserType']=='3')
	   {  
		   $data['MainContent'] = $this->load->view('colleage_coach/colleage_coach_step3',"", true);
		   $this->load->view('template', $data); 
		}
	  	else{
		 redirect(base_url('colleage_coach/step'.$User['Step'].''));
	   }
	}
	
	public function insert_step3()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$Coach_VideoURL=$this->input->post('Coach_VideoURL');
		
		if($Coach_VideoURL!=""){
		
				$array=array(
							'Coach_VideoURL'=>$Coach_VideoURL,
						);
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('colleage_coach',$array,$update_file);
				$this->general_model->update_data('user_register',array('Step'=>'4'),array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');	
				redirect(base_url().'colleage_coach/step4');
				
		}else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'colleage_coach/step3');	
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
		   if($User['Step']=='4' && $User['UserType']=='3')
		   {  
			   $data['MainContent'] = $this->load->view('colleage_coach/colleage_coach_step4',"", true);
			   $this->load->view('template', $data); 
			}
			else{
			 redirect(base_url('colleage_coach/step'.$User['Step'].''));
		   }
	}
	
	public function insert_step4()
	{
		
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		
		$Coach_GenderDetailsID=$this->input->post('Coach_GenderDetailsID');
		$Coach_SportDetailsID=$this->input->post('Coach_SportDetailsID');
		$Coach_Position=$this->input->post('Coach_Position');
		$Coach_GpaID=$this->input->post('Coach_GpaID');
		$Coach_HeightID=$this->input->post('Coach_HeightID');
		$Coach_HeightIntcheID=$this->input->post('Coach_HeightIntcheID');
		$Coach_WidthID=$this->input->post('Coach_WidthID');
		$Coach_Specific=$this->input->post('Coach_Specific');
		$User['Step']='5';
		$User['IsComplated']='1';
		if($Coach_GenderDetailsID!=0 && $Coach_SportDetailsID!=0 && $Coach_Specific!=""){
		
				$array=array(
							'Coach_GenderDetailsID'=>$Coach_GenderDetailsID,
							'Coach_SportDetailsID'=>$Coach_SportDetailsID,
							'Coach_Position'=>$Coach_Position,
							'Coach_GpaID'=>$Coach_GpaID,
							'Coach_HeightID'=>$Coach_HeightID,
							'Coach_HeightIntcheID'=>$Coach_HeightIntcheID,
							'Coach_WidthID'=>$Coach_WidthID,
							'Coach_Specific'=>$Coach_Specific,
						);
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('colleage_coach',$array,$update_file);	
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				
				
			 	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				redirect(base_url().'colleage_coach/step5');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'colleage_coach/step4');	
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
	   if($User['Step']=='5' && $User['UserType']=='3')
	   {  
		   $data['MainContent'] = $this->load->view('colleage_coach/colleage_coach_step5',"", true);
		   $this->load->view('template', $data); 
		}
	  	else{
		 redirect(base_url('colleage_coach/step'.$User['Step'].''));
	   }
				
	}
	
}	
	