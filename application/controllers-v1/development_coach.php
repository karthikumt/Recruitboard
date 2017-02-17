<?php 
include_once APPPATH.'libraries/password.php';
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Development_coach extends CI_Controller {


	public function __construct()
	 {   
	  parent::__construct();    
	  $this->load->model('general_model');
	  $this->load->model('development_coach_model'); 
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
        $data['MainContent'] = $this->load->view('development_coach/step1',$data, true);
        $this->load->view('template', $data);		
	}
	public function check_email()
	{
		$Email=$this->general_model->check_email();
		echo $Email;	
	}
	public function insert_step1()
	{
		$Devel_FirstName=$this->input->post('Devel_FirstName');
		$Devel_LastName=$this->input->post('Devel_LastName');
		$Devel_Title=$this->input->post('Devel_Title');
		$Devel_Business=$this->input->post('Devel_Business');
		$Devel_CountryID=$this->input->post('Devel_CountryID');
		$Devel_ZipCode=$this->input->post('Devel_ZipCode');
		$Devel_Phone=$this->input->post('Devel_Phone');
		$UserEmail=$this->input->post('UserEmail');
		$Password=password_hash($_POST['Password'], PASSWORD_DEFAULT);
		$random = substr(md5(time() * rand()),0,15);
		
		if($Devel_FirstName!="" && $Devel_LastName!="" && $Devel_CountryID!="" && $Devel_Business!=""  && $UserEmail!="" && $Password!=""){
			$Email=$this->general_model->check_email();
			if($Email==0)
			{
				$array=array(
							'UserEmail'=>$UserEmail,
							'Password'=> $Password,
							'UserType'=>'8',
							'FirstName'=>$Devel_FirstName,
							'LastName'=>$Devel_LastName,
							'IPAddress'=>$this->input->ip_address(),
							'RandomNumber'=>$random,
							'RandomNumber'=>'1',
							'Status'=>'0',
							'Step'=>'2'		
						);
				$this->db->set('RegisterDate', 'NOW()', FALSE);		
				$LastID=$this->general_model->insert_data('user_register',$array);
						$this->general_model->sendEmail($LastID);
				$array=array(
							'UserID'=>$LastID,
							'Devel_Title'=>$Devel_Title,
							'Devel_Business'=>$Devel_Business,
							'Devel_CountryID'=>$Devel_CountryID,
							'Devel_ZipCode'=>$Devel_ZipCode,
							'Devel_Phone'=>$Devel_Phone,
							'Devel_Status'=>'1',
							'Devel_IPAddress'=>$this->input->ip_address()
						);	
			 $this->db->set('Devel_RegisterDate', 'NOW()', FALSE);
			 $Devel_ID=$this->general_model->insert_data('developement_coach',$array);	
				
			  $Devel_ProfileImage = $_FILES['Devel_ProfileImage']['name'];
			  if($Devel_ProfileImage!=""){
					$this->development_coach_model->profile_image($Devel_ID);
			  }
			 $this->session->set_flashdata('successmessage','Thank You For Completing.');
			 $this->session->set_userdata('UserID',$LastID);
        	 redirect(base_url().'development_coach/thanks');
       			
			}
			$this->session->set_flashdata('errormessage','This Email is Allredy Registered. Please Login');
		}
		else {
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
				
		}
		redirect(base_url().'development_coach');	
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
	   if($User['Step']=='2' && $User['UserType']=='8')
	   {  
		   $data['MainContent'] = $this->load->view('development_coach/step2',"", true);
		   $this->load->view('template', $data); 
		}
	  	else{
		 redirect(base_url('development_coach/step'.$User['Step'].''));
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
		$Devel_Attend=$this->input->post('Devel_Attend');
		$Devel_Qualification=$this->input->post('Devel_Qualification');
		$Devel_Service=$this->input->post('Devel_Service');
		$Devel_Website=$this->input->post('Devel_Website');
		
		
		if($Devel_Qualification!="" && $Devel_Service!=""){
		
				$array=array(
							'Devel_Attend'=>$Devel_Attend,
							'Devel_Qualification'=>$Devel_Qualification,
							'Devel_Service'=>$Devel_Service,
							'Devel_Website'=>$Devel_Website
						);
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Devel_ID=$this->general_model->update_data('developement_coach',$array,$update_file);	
				$this->general_model->update_data('user_register',array('Step'=>'3'),array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				redirect(base_url().'development_coach/step3');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'development_coach/step2');	
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
	   if($User['Step']=='3' && $User['UserType']=='8')
	   {  
		   $data['MainContent'] = $this->load->view('development_coach/step3',"", true);
		   $this->load->view('template', $data); 
		}
	  	else{
		 redirect(base_url('development_coach/step'.$User['Step'].''));
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
		
		$Devel_VideoURL=str_replace("http:","https:",$this->input->post('Devel_VideoURL'));
		
		if($Devel_VideoURL!=""){
		
				$array=array(
							'Devel_VideoURL'=>$Devel_VideoURL,
						);
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Devel_ID=$this->general_model->update_data('developement_coach',$array,$update_file);
				$this->general_model->update_data('user_register',array('Step'=>'4'),array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');	
				redirect(base_url().'development_coach/step4');
				
		}else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'development_coach/step3');	
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
	   if($User['Step']=='4' && $User['UserType']=='8')
	   {  
		   $data['MainContent'] = $this->load->view('development_coach/step4',"", true);
		   $this->load->view('template', $data); 
		}
	  	else{
		 redirect(base_url('development_coach/step'.$User['Step'].''));
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
		
		
		$Devel_GenderID=$this->input->post('Devel_GenderID');
		$Devel_CategoryID=$this->input->post('Devel_CategoryID');
		$Devel_Position=$this->input->post('Devel_Position');
		$Devel_Prospective=$this->input->post('Devel_Prospective');
		$user_info['Step']='5';
		$user_info['IsComplated']='1';
		if($Devel_CategoryID!=0 && $Devel_Prospective!=""){
		
				$array=array(
							'Devel_GenderID'=>$Devel_GenderID,
							'Devel_CategoryID'=>$Devel_CategoryID,
							'Devel_Position'=>$Devel_Position,
							'Devel_Prospective'=>$Devel_Prospective,
						);
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Devel_ID=$this->general_model->update_data('developement_coach',$array,$update_file);	
				$this->general_model->update_data('user_register',$user_info,array('UserID'=>$UserID));	
				
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				redirect(base_url().'development_coach/step5');
				
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
	   if($User['Step']=='5' && $User['UserType']=='8')
	   {  
		   $data['MainContent'] = $this->load->view('development_coach/step5',"", true);
		   $this->load->view('template', $data); 
		}
	  	else{
		 redirect(base_url('development_coach/step'.$User['Step'].''));
	   }
		
	}
	
}	
	