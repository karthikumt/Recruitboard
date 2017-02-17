<?php 
include_once APPPATH.'libraries/password.php';
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Club_coach extends CI_Controller {


	public function __construct()
	 {   
	  parent::__construct();    
	  $this->load->model('general_model');
	  $this->load->model('club_coach_model'); 
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
        $data['MainContent'] = $this->load->view('club_coach/step1',$data, true);
        $this->load->view('template', $data);		
	}
	
	public function insert_step1()
	{
		$Club_FirstName=$this->input->post('Club_FirstName');
		$Club_LastName=$this->input->post('Club_LastName');
		$Club_Title=$this->input->post('Club_Title');
		$Club_Organization=$this->input->post('Club_Organization');
		$Club_CountryID=$this->input->post('Club_CountryID');
		$Club_ZipCode=$this->input->post('Club_ZipCode');
		$Club_Team=$this->input->post('Club_Team');
		$Club_GenderID=$this->input->post('Club_GenderID');
		$Club_AgeGroup=$this->input->post('Club_AgeGroup');
		$Club_SportID=$this->input->post('Club_SportID');
		$UserEmail=$this->input->post('UserEmail');
		$Password=password_hash($_POST['Password'], PASSWORD_DEFAULT);
	    $random = substr(md5(time() * rand()),0,15);
		
		if($Club_FirstName!="" && $Club_LastName!="" && $Club_CountryID!="" && $Club_GenderID!="" && $Club_SportID!="" && $UserEmail!="" && $Password!=""){
			$Email=$this->general_model->check_email();
			if($Email==0)
			{
				$array=array(
							'UserEmail'=>$UserEmail,
							'Password'=> $Password,
							'UserType'=>'6',
							'FirstName'=>$Club_FirstName,
							'LastName'=>$Club_LastName,
							'IPAddress'=>$this->input->ip_address(),
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
							'Club_Title'=>$Club_Title,
							'Club_Organization'=>$Club_Organization,
							'Club_Team'=>$Club_Team,
							'Club_CountryID'=>$Club_CountryID,
							'Club_ZipCode'=>$Club_ZipCode,
							'Club_GenderID'=>$Club_GenderID,
							'Club_AgeGroup'=>$Club_AgeGroup,
							'Club_SportID'=>$Club_SportID,
							'Club_Status'=>'1',
							'Club_IPAddress'=>$this->input->ip_address()
						);	
			 $this->db->set('Club_RegisterDate', 'NOW()', FALSE);
			 $Club_ID=$this->general_model->insert_data('club_coach',$array);	
				
			  $Club_ProfileImage = $_FILES['Club_ProfileImage']['name'];
			  if($Club_ProfileImage!=""){
					$this->club_coach_model->profile_image($Club_ID);
			  }
			 $this->session->set_flashdata('successmessage','Thank You For Completing.');
			 $this->session->set_userdata('UserID',$LastID);
        	 redirect(base_url().'club_coach/thanks');
       			
			}
			$this->session->set_flashdata('errormessage','Email Address Already Register.');
		}
		else {
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
				
		}
		redirect(base_url().'club_coach');	
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
	   if($User['Step']=='2' && $User['UserType']=='6')
	   {  
		   $data['MainContent'] = $this->load->view('club_coach/step2',"", true);
		   $this->load->view('template', $data); 
		}
	  else{
		 redirect(base_url('club_coach/step'.$User['Step'].''));
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
		$Club_Website=$this->input->post('Club_Website');
		$Club_TeamRecord=$this->input->post('Club_TeamRecord');
		$Club_Data=$this->input->post('Club_Data');
		
		if($Club_Website!="" && $Club_Website!=""){
		
				$array=array(
							'Club_Website'=>$Club_Website,
							'Club_TeamRecord'=>$Club_TeamRecord,
							'Club_Data'=>$Club_Data
						);
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('club_coach',$array,$update_file);	
				$this->general_model->update_data('user_register',array('Step'=>'3'),array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				redirect(base_url().'club_coach/step3');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'club_coach/step2');	
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
	   if($User['Step']=='3' && $User['UserType']=='6')
	   {  
		   $data['MainContent'] = $this->load->view('club_coach/step3',"", true);
		   $this->load->view('template', $data); 
		}
	  else{
		 redirect(base_url('club_coach/step'.$User['Step'].''));
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
		
		$Club_VideoURL=str_replace("http:","https:",$this->input->post('Club_VideoURL'));
		$user_info['Step']='4';
		$user_info['IsComplated']='1';
		
		if($Club_VideoURL!=""){
		
				$array=array(
							'Club_VideoURL'=>$Club_VideoURL,
						);
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('club_coach',$array,$update_file);
				$this->general_model->update_data('user_register',$user_info,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');	
				redirect(base_url().'club_coach/step4');
				
		}else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'club_coach/step3');	
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
	   if($User['Step']=='4' && $User['UserType']=='6')
	   {  
		   $data['MainContent'] = $this->load->view('club_coach/step4',"", true);
		   $this->load->view('template', $data); 
		}
	  	else{
		 redirect(base_url('club_coach/step'.$User['Step'].''));
	   }
		
	}
	
	
}	
	