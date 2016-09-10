<?php 
include_once APPPATH.'libraries/password.php';
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Juco_transfer extends CI_Controller {
  
 public function __construct()
	 {   
	  parent::__construct();    
	  $this->load->model('general_model');
	  $this->load->model('juco_transfer_model'); 
	 }
 	public function index()
	{
			
			
		 $cap =get_captcha();
		 $data = array(
						'captcha_time' => $cap['time'],
						'word' => $cap['word']
						);
		
		 $data['cap_img']=$cap['image'];
		 $data['cap_word']=$cap['word'];
        $data['MainContent'] = $this->load->view('juco_transfer/step1',$data, true);
        $this->load->view('template', $data);		
	}
	
	
	public function insert_step1()
	{
			
			   
			   $step1_info['Juco_ParentEmail']=$_POST['Gua_Email'];
			   $step1_info['Juco_Status']='1';
			   $step1_info['Juco_IPAddress']=$this->input->ip_address();
			   $user_info['UserEmail']=$_POST['UserEmail'];
			   $user_info['Password']= password_hash($_POST['Password'], PASSWORD_DEFAULT);

			   $user_info['IPAddress']=$this->input->ip_address();
			   $random = substr(md5(time() * rand()),0,15);
			   $user_info['RandomNumber']=$random;
			   $user_info['Status']='0';
			   $user_info['UserType']='2';
			   $user_info['Step']='2';
			   $user_info['AdminStatus']='1';
	
		$regex = " /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/"; 
		if (!preg_match( $regex, $user_info['UserEmail'])) 
		{ $this->session->set_flashdata('errormessage','Enter the Valid Email Address');
			  redirect(base_url().'juco_transfer');		
		}
			
			
		if($user_info['UserEmail']!='' && $user_info['Password']!='' && $step1_info['Juco_ParentEmail']!='' )
		{
		
			
 			$Email=$this->general_model->check_email();
			if($Email=='0')
			{
			
			$this->db->set('RegisterDate', 'NOW()', FALSE);	
		  	$last_id=$this->general_model->insert_data('user_register',$user_info);
			$this->general_model->sendEmail($last_id);
			
			$step1_info['UserID']=$last_id;
			$this->db->set('Juco_RegisterDate','NOW()', FALSE);	
		  	$coll_id = $this->general_model->insert_data('juco_transfer',$step1_info);
			
			$this->juco_transfer_model->profile_image($coll_id);
			$this->general_model->ParentEmail('juco_transfer',$last_id,'Juco_ParentEmail');
			
			$this->session->set_userdata('UserID',$last_id);
			$this->session->set_flashdata('successmessage','Thank You For Completing Step1.');
			redirect(base_url('juco_transfer/thanks'));
				
		  	}
			else
			{
			 $this->session->set_flashdata('errormessage','This Email is Allredy Registered. Please Login');
			 redirect(base_url('juco_transfer'));
			}

		}	
		else
		{
		 $this->session->set_flashdata('errormessage','Some Field Are Missing');
		 redirect(base_url('juco_transfer'));
		
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
		if($User['Step']=='2' && $User['UserType']=='2')
		 {  
			  
			  
			 $cap =  $capcha=get_captcha();
			 $data = array(
							'captcha_time' => $cap['time'],
							'word' => $cap['word']
							);
			
			 $data['cap_img']=$cap['image'];
			 $data['cap_word']=$cap['word'];  
			  
			$data['MainContent'] = $this->load->view('juco_transfer/step2',$data, true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('juco_transfer/step'.$User['Step'].''));
		 
		 
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
		$User['FirstName']=$this->input->post('FirstName');
		$User['LastName']=$this->input->post('LastName');
		$User['Step']='2a';
		$Juco_info['Juco_GenderID']=$this->input->post('Juco_GenderID');
		$Juco_info['Juco_SportID']=$this->input->post('Juco_SportID');
		$Juco_info['Juco_PositionID']=$this->input->post('Juco_PositionID');
		$Juco_info['Juco_SchoolName']=$this->input->post('Juco_SchoolName');
		$Juco_info['Juco_CountryID']=$this->input->post('Juco_CountryID');
		$Juco_info['Juco_State']=$this->input->post('Juco_State');
		$Juco_info['Juco_City']=$this->input->post('Juco_City');
		$Juco_info['Juco_ZipCode']=$this->input->post('Juco_ZipCode');
		$Juco_info['Juco_ClassID']=$this->input->post('Juco_ClassID');
		$Juco_info['Juco_HeightID']=$this->input->post('Juco_HeightID');
		$Juco_info['Juco_InchesID']=$this->input->post('Juco_InchesID');
		$Juco_info['Juco_WeightID']=$this->input->post('Juco_WeightID');
		$Juco_info['Juco_Coach']=$this->input->post('Juco_Coach');
		
		
		
			
		if($Juco_info['Juco_GenderID']!='0' && $Juco_info['Juco_SportID']!='0' && $Juco_info['Juco_CountryID']!='0' && $Juco_info['Juco_SchoolName']!=""  && $User['FirstName']!="" && $User['LastName']!=""  && $Juco_info['Juco_ZipCode']!="" && $Juco_info['Juco_HeightID']!='0'  && $Juco_info['Juco_ClassID']!='0'  && $Juco_info['Juco_InchesID']!='0'  && $Juco_info['Juco_WeightID']!='0'){
		
		
				
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('juco_transfer',$Juco_info,$update_file);	
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing Step2.');
				redirect(base_url().'juco_transfer/step2a');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'juco_transfer/step2');	
		}	
	}

	public function step2a(){
				
				
				if($this->session->userdata('MyRecuritID'))
				{
					$UserID=$this->session->userdata('MyRecuritID');	
				}if($this->session->userdata('UserID')){
					$UserID= $this->session->userdata('UserID'); 	
				}
					
						$SportID = get_juco_detail($UserID);  			
						
						if(!empty($SportID))
						{
							$this->session->set_userdata('Juco_SportID',$SportID['Juco_SportID']);	
							if($SportID['Juco_SportID']==28)
							{
								redirect(base_url().'sport/baseball');	
							}
							else if($SportID['Juco_SportID']=='29')
							{
								redirect(base_url().'sport/basketball');	
							}
							else if($SportID['Juco_SportID']=='30')
							{
								redirect(base_url().'sport/bowling');	
							}
							else if($SportID['Juco_SportID']=='31')
							{
								redirect(base_url().'sport/cheerleading');	
							}
							else if($SportID['Juco_SportID']=='32')
							{
								redirect(base_url().'sport/crew');	
							}
							else if($SportID['Juco_SportID']=='33')
							{
								redirect(base_url().'sport/cross_country');	
							}
							else if($SportID['Juco_SportID']=='34')
							{
								redirect(base_url().'sport/dance_team');	
							}
							else if($SportID['Juco_SportID']=='35')
							{
								redirect(base_url().'sport/fencing');	
							}
							else if($SportID['Juco_SportID']=='36')
							{
								redirect(base_url().'sport/field_hockey');	
							}
							else if($SportID['Juco_SportID']=='37')
							{
								redirect(base_url().'sport/football');	
							}
							
							else if($SportID['Juco_SportID']=='38')
							{
								redirect(base_url().'sport/golf');	
							}
							else if($SportID['Juco_SportID']=='39')
							{
								redirect(base_url().'sport/mens_gymnastics');	
							}
							else if($SportID['Juco_SportID']=='40')
							{
								redirect(base_url().'sport/ice_hockey');	
							}
							else if($SportID['Juco_SportID']=='41')
							{
								redirect(base_url().'sport/indor_track');	
							}
							else if($SportID['Juco_SportID']=='42')
							{
								redirect(base_url().'sport/lacrosse');	
							}
							else if($SportID['Juco_SportID']=='43')
							{
								redirect(base_url().'sport/rifle');	
							}
							else if($SportID['Juco_SportID']=='44')
							{
								redirect(base_url().'sport/rugby');	
							}
							else if($SportID['Juco_SportID']=='45')
							{
								redirect(base_url().'sport/skiing');	
							}
							else if($SportID['Juco_SportID']=='46')
							{
								redirect(base_url().'sport/soccer');	
							}
							else if($SportID['Juco_SportID']=='47')
							{
								redirect(base_url().'sport/softball');	
							}
							else if($SportID['Juco_SportID']=='48')
							{
								redirect(base_url().'sport/swimming');	
							}
							else if($SportID['Juco_SportID']=='49')
							{
								redirect(base_url().'sport/tennis');	
							}
							else if($SportID['Juco_SportID']=='50')
							{
								redirect(base_url().'sport/track');	
							}
							else if($SportID['Juco_SportID']=='51')
							{
								redirect(base_url().'sport/volleyball');	
							}
							else if($SportID['Juco_SportID']=='52')
							{
								redirect(base_url().'sport/water_polo');	
							}
							else if($SportID['Juco_SportID']=='53')
							{
								redirect(base_url().'sport/wrestling');	
							}
							else if($SportID['Juco_SportID']=='54')
							{
								redirect(base_url().'sport/womens_gymnastics');	
							}
							else if($SportID['Juco_SportID']=='55')
							{
								redirect(base_url().'sport/rowing');	
							}
							
							else{
							
							redirect(base_url('sport'));
							}
							
						}
						else{
						$this->session->set_flashdata('errormessages_details','Invalid User Details.');
						redirect(base_url('sport'));
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
		if($User['Step']=='3' && $User['UserType']=='2')
		 {  
			  
			$data['MainContent'] = $this->load->view('juco_transfer/step3',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('juco_transfer/step'.$User['Step'].''));
		 
		 
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
		
		$User['Step']='4';
		$Juco_info['Juco_ActID']=$this->input->post('Juco_ActID');
		$Juco_info['Juco_SatID']=$this->input->post('Juco_SatID');
		$Juco_info['Juco_GpaID']=$this->input->post('Juco_GpaID');
		$Juco_info['Juco_CoreGpaID']=$this->input->post('Juco_CoreGpaID');

		$Juco_info['Juco_NccaID']=$this->input->post('Juco_NcaaID');
		$Juco_info['Juco_NaiaID']=$this->input->post('Juco_NaiaID');
		$Juco_info['Juco_Education']=implode(',',$this->input->post('Juco_Education'));
		$Juco_info['Juco_ExtraCurricular']=implode(',',$this->input->post('Juco_ExtraCurricular'));
		$Juco_info['Juco_IntentID']=$this->input->post('Juco_IntendedID');
		$Juco_info['Juco_MajorID']=$this->input->post('Juco_MajorID');
		$Juco_info['Juco_GuidanceID']=$this->input->post('Juco_GuidanceID');
		$Juco_info['Juco_EmailID']=$this->input->post('Juco_EmailID');
		$Juco_info['Juco_TotalID']=$this->input->post('Juco_TotalID');
		$Juco_info['Juco_ReadingID']=$this->input->post('Juco_ReadingID');
		$Juco_info['Juco_ListenID']=$this->input->post('Juco_ListeningID');
		$Juco_info['Juco_SpeakID']=$this->input->post('Juco_SpeakingID');
		$Juco_info['Juco_WriteID']=$this->input->post('Juco_WritingID');
		$Juco_info['Juco_WesID']=$this->input->post('Juco_WesID');
		
		$Juco_info['Juco_YearSpeakID']=$this->input->post('Juco_YearSpeakID');
		$Juco_info['Juco_YearReadID']=$this->input->post('Juco_YearReadID');
		$Juco_info['Juco_YearWriteID']=$this->input->post('Juco_YearWriteID');
		
		if($Juco_info['Juco_ActID']!='0' && $Juco_info['Juco_NcaaID']!='0' && $Juco_info['Juco_IntentID']!='0'  && $Juco_info['Juco_TotalID']!='0'  ){
		
				
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('juco_transfer',$Juco_info,$update_file);	
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing Step3.');
				redirect(base_url().'juco_transfer/step4');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'juco_transfer/step3');	
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
		if($User['Step']=='4' && $User['UserType']=='2')
		 { 
			  
			$data['MainContent'] = $this->load->view('juco_transfer/step4',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('juco_transfer/step'.$User['Step'].''));
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
		$User['Step']='5a';
		$Juco_info['Juco_Act_Player']=$this->input->post('Juco_Act_Player');
		$Juco_info['Juco_Act_HighSchool']=$this->input->post('Juco_Act_HighSchool');
		$Juco_info['Juco_Act_City']=$this->input->post('Juco_Act_City');
		$Juco_info['Juco_Act_State']=$this->input->post('Juco_Act_State');
		$Juco_info['Juco_Act_Class']=$this->input->post('Juco_Act_Class');
		$Juco_info['Juco_Act_ActScore']=$this->input->post('Juco_Act_ActScore');
		$Juco_info['Juco_Act_SatScore']=$this->input->post('Juco_Act_SatScore');
		$Juco_info['Juco_Act_Gpa']=$this->input->post('Juco_Act_Gpa');
		$Juco_info['Juco_Act_CoreGpa']=$this->input->post('Juco_Act_CoreGpa');
		
		
		$Juco_info['Juco_Act_GuName']=$this->input->post('Juco_Act_GuName');
		$Juco_info['Juco_Act_GuEmail']=$this->input->post('Juco_Act_GuEmail');
		$Juco_info['Juco_Act_Arts']=$this->input->post('Juco_Act_Arts');
		$Juco_info['Juco_Act_Religion']=$this->input->post('Juco_Act_Religion');
		$Juco_info['Juco_Act_Clubs']=$this->input->post('Juco_Act_Clubs');
		$Juco_info['Juco_Act_Community']=$this->input->post('Juco_Act_Community');
		$Juco_info['Juco_Act_Goverment']=$this->input->post('Juco_Act_Goverment');
		$Juco_info['Juco_Act_Media']=$this->input->post('Juco_Act_Media');
		$Juco_info['Juco_Act_Military']=$this->input->post('Juco_Act_Military');
		$Juco_info['Juco_Act_Music']=$this->input->post('Juco_Act_Music');
		
		$Juco_info['Juco_Act_TofelScoreID']=$this->input->post('Juco_Act_TofelScoreID');
		$Juco_info['Juco_Act_ReadID']=$this->input->post('Juco_Act_ReadID');
		$Juco_info['Juco_Act_ListenID']=$this->input->post('Juco_Act_ListenID');
		$Juco_info['Juco_Act_SpeakID']=$this->input->post('Juco_Act_SpeakID');
		$Juco_info['Juco_Act_WriteID']=$this->input->post('Juco_Act_WriteID');
		$Juco_info['Juco_Act_YearSpeakID']=$this->input->post('Juco_Act_YearSpeakID');
		$Juco_info['Juco_Act_YearReadID']=$this->input->post('Juco_Act_YearReadID');
		$Juco_info['Juco_Act_YearWriteID']=$this->input->post('Juco_Act_YearWriteID');
		$Juco_info['Juco_Act_Other']=$this->input->post('Juco_Act_Other');
		
		$Juco_info['Juco_Act_WesID']=$this->input->post('Juco_Act_WesID');
		$Juco_info['Juco_Act_Honors']=$this->input->post('Juco_Act_Honors');
		$Juco_info['Juco_Act_Post']=$this->input->post('Juco_Act_Post');
		$Juco_info['Juco_Act_Languages']=$this->input->post('Juco_Act_Languages');
		$Juco_info['Juco_Act_ApCourses']=$this->input->post('Juco_Act_ApCourses');
		$Juco_info['Juco_Act_Ncaa']=$this->input->post('Juco_Act_Ncaa');
		$Juco_info['Juco_Act_Naia']=$this->input->post('Juco_Act_Naia');
		$Juco_info['Juco_Act_IntendedID']=$this->input->post('Juco_Act_IntendedID');
		$Juco_info['Juco_Act_MajorID']=$this->input->post('Juco_Act_MajorID');
		
		if($Juco_info['Juco_Act_Player']!='' && $Juco_info['Juco_Act_HighSchool']!='' && $Juco_info['Juco_Act_City']!='' && $Juco_info['Juco_Act_State']!=''){
		
				
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('juco_transfer',$Juco_info,$update_file);	
				
				$Juco_Act_Image = $_FILES['Juco_Act_ImageName']['name'];
				
				if($Juco_Act_Image!="")
				{
					$this->juco_transfer_model->Juco_Act_Image($UserID);
				}
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing Step4.');
				redirect(base_url().'juco_transfer/step5a');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'juco_transfer/step4');	
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
		if($User['Step']=='5' && $User['UserType']=='2')
		 {  
			  
			$data['MainContent'] = $this->load->view('juco_transfer/step5',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('juco_transfer/step'.$User['Step'].''));
		 
		 
		 }

	}
	
	public function insert_step5()
	{
		
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		$User['Step']='5a';
		$Juco_info['Juco_BioWeightID']=$this->input->post('Juco_BioWeightID');
		$Juco_info['Juco_BioHeightWithoutID']=$this->input->post('Juco_BioHeightWithoutID');
		$Juco_info['Juco_BioHeightWithID']=$this->input->post('Juco_BioHeightWithID');
		$Juco_info['Juco_WingSpanID']=$this->input->post('Juco_WingSpanID');
		$Juco_info['Juco_HandWidthID']=$this->input->post('Juco_HandWidthID');
		$Juco_info['Juco_HandLengthID']=$this->input->post('Juco_HandLengthID');
		$Juco_info['Juco_DominantID']=$this->input->post('Juco_DominantID');
		$Juco_info['Juco_DominantLegID']=$this->input->post('Juco_DominantLegID');
		$Juco_info['Juco_VerticalID']=$this->input->post('Juco_VerticalID');
		
		$Juco_info['Juco_PowerCleanID']=$this->input->post('Juco_PowerCleanID');
		$Juco_info['Juco_StandingID']=$this->input->post('Juco_StandingID');
		$Juco_info['Juco_BenchID']=$this->input->post('Juco_BenchID');
		$Juco_info['Juco_MileRunID']=$this->input->post('Juco_MileRunID');
		$Juco_info['Juco_YardID']=$this->input->post('Juco_YardID');
		$Juco_info['Juco_YardDashID']=$this->input->post('Juco_YardDashID');
		$Juco_info['Juco_PushID']=$this->input->post('Juco_PushID');
		$Juco_info['Juco_SitID']=$this->input->post('Juco_SitID');
		$Juco_info['Juco_PullID']=$this->input->post('Juco_PullID');
		
		
		$Juco_info['Juco_BioHeightIncheWithoutID']=$this->input->post('Juco_BioHeightIncheWithoutID');
		$Juco_info['Juco_BioHeightIncheWithID']=$this->input->post('Juco_BioHeightIncheWithID');
		$Juco_info['Juco_HandLengthIncheID']=$this->input->post('Juco_HandLengthIncheID');
		$Juco_info['Juco_HandWidthIncheID']=$this->input->post('Juco_HandWidthIncheID');
		$Juco_info['Juco_WingSpanIncheID']=$this->input->post('Juco_WingSpanIncheID');
		$Juco_info['Juco_VerticalIncheID']=$this->input->post('Juco_VerticalIncheID');
		$Juco_info['Juco_StandIncheingID']=$this->input->post('Juco_StandIncheingID');
		$Juco_info['Juco_SquatID']=$this->input->post('Juco_SquatID');
		$Juco_info['Juco_MileIncheRunID']=$this->input->post('Juco_MileIncheRunID');
		$Juco_info['Juco_YardIncheID']=$this->input->post('Juco_YardIncheID');
		$Juco_info['Juco_YardDashIncheID']=$this->input->post('Juco_YardDashIncheID');
		
		
		
		if($Juco_info['Juco_BioWeightID']!='0' && $Juco_info['Juco_VerticalID']!='0' && $Juco_info['Juco_MileRunID']!='0' && $Juco_info['Juco_PushID']!='0'){
		
				
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('juco_transfer',$Juco_info,$update_file);	
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing Step5.');
				redirect(base_url().'juco_transfer/step5a');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'juco_transfer/step5');	
		}	
	}
	
	
	
	public function step5a()
	{
		if($this->session->userdata('MyRecuritID'))
		  {
		   $UserID=$this->session->userdata('MyRecuritID'); 
		  }else{
		   $UserID= $this->session->userdata('UserID');  
		  }
			  
		$User=get_user_detail($UserID);  
		if($User['Step']=='5a' && $User['UserType']=='2')
		 {  
			 
			$data['MainContent'] = $this->load->view('juco_transfer/step5a',"", true);
	    	$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('juco_transfer/step'.$User['Step'].''));
		 
		 
		 }

	
		
	}
	
	
	
	public function insert_Biometrics()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		$User['Step']='7';
		$Juco_info['Juco_Ins_Player']=$this->input->post('Juco_Ins_PlayerName');
		$Juco_info['Juco_Ins_HighSchool']=$this->input->post('Juco_Ins_HighSchool');
		$Juco_info['Juco_Ins_City']=$this->input->post('Juco_Ins_City');
		$Juco_info['Juco_Ins_State']=$this->input->post('Juco_Ins_State');
		$Juco_info['Juco_Ins_Class']=$this->input->post('Juco_Ins_Class');
		$Juco_info['Juco_Ins_Weight']=$this->input->post('Juco_Ins_Weight');
		$Juco_info['Juco_Ins_HeightWith']=$this->input->post('Juco_Ins_HeightWith');
		$Juco_info['Juco_Ins_WingSpan']=$this->input->post('Juco_Ins_WingSpan');
		$Juco_info['Juco_Ins_HandWidth']=$this->input->post('Juco_Ins_HandWidth');
		
		
		$Juco_info['Juco_Ins_HandLength']=$this->input->post('Juco_Ins_HandLength');
		$Juco_info['Juco_Ins_DominantHand']=$this->input->post('Juco_Ins_DominantHand');
		$Juco_info['Juco_Ins_DominantLeg']=$this->input->post('Juco_Ins_DominantLeg');
		$Juco_info['Juco_Ins_BodyMass']=$this->input->post('Juco_Ins_BodyMass');
		$Juco_info['Juco_Ins_PushUp']=$this->input->post('Juco_Ins_PushUp');
		$Juco_info['Juco_Ins_PullUp']=$this->input->post('Juco_Ins_PullUp');
		$Juco_info['Juco_Ins_SitUp']=$this->input->post('Juco_Ins_SitUp');
		$Juco_info['Juco_Ins_Vertical']=$this->input->post('Juco_Ins_Vertical');
		$Juco_info['Juco_Ins_Standing']=$this->input->post('Juco_Ins_Standing');
		$Juco_info['Juco_Ins_PowerClean']=$this->input->post('Juco_Ins_PowerClean');
		
		$Juco_info['Juco_Ins_Bench']=$this->input->post('Juco_Ins_Bench');
		$Juco_info['Juco_Ins_Squal']=$this->input->post('Juco_Ins_Squal');
		$Juco_info['Juco_Ins_Sit']=$this->input->post('Juco_Ins_Sit');
		$Juco_info['Juco_Ins_BackScratch']=$this->input->post('Juco_Ins_BackScratch');
		$Juco_info['Juco_Ins_Yard']=$this->input->post('Juco_Ins_Yard');
		$Juco_info['Juco_Ins_YardDash']=$this->input->post('Juco_Ins_YardDash');
		$Juco_info['Juco_Ins_Mile']=$this->input->post('Juco_Ins_Mile');
		$Juco_info['Juco_Ins_HeightWithout']=$this->input->post('Juco_Ins_HeightWithout');
		
		
		$Juco_info['Juco_Ins_HeightIncheWithoutID']=$this->input->post('Juco_Ins_HeightIncheWithoutID');
		$Juco_info['Juco_Ins_HeightIncheWithID']=$this->input->post('Juco_Ins_HeightIncheWithID');
		$Juco_info['Juco_Ins_WingSpanIncheID']=$this->input->post('Juco_Ins_WingSpanIncheID');
		$Juco_info['Juco_Ins_HandWidthIncheID']=$this->input->post('Juco_Ins_HandWidthIncheID');
		$Juco_info['Juco_Ins_HandLengthIncheID']=$this->input->post('Juco_Ins_HandLengthIncheID');
		$Juco_info['Juco_Ins_VerticalIncheID']=$this->input->post('Juco_Ins_VerticalIncheID');
		$Juco_info['Juco_Ins_StandIncheingID']=$this->input->post('Juco_Ins_StandIncheingID');
		$Juco_info['Juco_Ins_YardIncheID']=$this->input->post('Juco_Ins_YardIncheID');
		$Juco_info['Juco_Ins_YardDashIncheID']=$this->input->post('Juco_Ins_YardDashIncheID');
		$Juco_info['Juco_Ins_MileIncheRunID']=$this->input->post('Juco_Ins_MileIncheRunID');
		
		
		$Juco_info['Juco_Ins_Reach']=$this->input->post('Juco_Ins_Reach');
		$Juco_info['Juco_Ins_Back']=$this->input->post('Juco_Ins_Back');
		
		
		
		if($Juco_info['Juco_Ins_Player']!='' && $Juco_info['Juco_Ins_HighSchool']!='' && $Juco_info['Juco_Ins_City']!='' && $Juco_info['Juco_Ins_State']!='' && $Juco_info['Juco_Ins_Weight']!='0'&& $Juco_info['Juco_Ins_HeightWithout']!='0'&& $Juco_info['Juco_Ins_HeightIncheWithoutID']!='0' && $Juco_info['Juco_Ins_HeightWith']!='0'&& $Juco_info['Juco_Ins_HeightIncheWithID']!='0'&& $Juco_info['Juco_Ins_DominantHand']!='0' && $Juco_info['Juco_Ins_Yard']!='0'&& $Juco_info['Juco_Ins_YardIncheID']!='0'&& $Juco_info['Juco_Ins_Mile']!='0' && $Juco_info['Juco_Ins_MileIncheRunID']!='0' && $Juco_info['Juco_Ins_Vertical']!='0'&& $Juco_info['Juco_Ins_VerticalIncheID']!='0'){
		
		
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('juco_transfer',$Juco_info,$update_file);	
				
				$Juco_PitchImageName = $_FILES['Juco_Ins_ImageName']['name'];
				
				if($Juco_PitchImageName!="")
				{
					$this->juco_transfer_model->Juco_Ins_Image($UserID);
				}
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing Step6.');
				redirect(base_url().'juco_transfer/step7');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'juco_transfer/step5a');	
		}	
	}
	
	
	public function step6()
	{
		if($this->session->userdata('MyRecuritID'))
		  {
		   $UserID=$this->session->userdata('MyRecuritID'); 
		  }else{
		   $UserID= $this->session->userdata('UserID');  
		  }
			  
		$User=get_user_detail($UserID);  
		if($User['Step']=='6' && $User['UserType']=='2')
		 {  
			  
			$data['MainContent'] = $this->load->view('juco_transfer/step6',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('juco_transfer/step'.$User['Step'].''));
		 
		 
		 }

	
		
	}
	
	public function insert_step6()
	{
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		$User['Step']='7';
		$Juco_info['Juco_PrimaryID']=$this->input->post('Juco_PrimaryID');
		$Juco_info['Juco_ThrowsID']=$this->input->post('Juco_ThrowsID');
		$Juco_info['Juco_BatsID']=$this->input->post('Juco_BatsID');
		$Juco_info['Juco_EraID']=$this->input->post('Juco_EraID');
		$Juco_info['Juco_WinID']=$this->input->post('Juco_WinID');
		$Juco_info['Juco_PrimaryPitchID']=$this->input->post('Juco_PrimaryPitchID');
		$Juco_info['Juco_SecondaryPitchID']=$this->input->post('Juco_SecondaryPitchID');
		$Juco_info['Juco_FastBallID']=$this->input->post('Juco_FastBallID');
		$Juco_info['Juco_BattingID']=$this->input->post('Juco_BattingID');
		
		
		$Juco_info['Juco_RbiID']=$this->input->post('Juco_RbiID');
		$Juco_info['Juco_StolenID']=$this->input->post('Juco_StolenID');
		$Juco_info['Juco_OnBaseID']=$this->input->post('Juco_OnBaseID');
		$Juco_info['Juco_HitYardID']=$this->input->post('Juco_HitYardID');
		$Juco_info['Juco_SpeedID']=$this->input->post('Juco_SpeedID');
		$Juco_info['Juco_AssistID']=$this->input->post('Juco_AssistID');
		$Juco_info['Juco_PutID']=$this->input->post('Juco_PutID');
		$Juco_info['Juco_DoubleID']=$this->input->post('Juco_DoubleID');
		$Juco_info['Juco_TripleID']=$this->input->post('Juco_TripleID');
		$Juco_info['Juco_FieldID']=$this->input->post('Juco_FieldID');
		
		
		
		if($Juco_info['Juco_PrimaryID']!='0' && $Juco_info['Juco_EraID']!='0' && $Juco_info['Juco_BattingID']!='0' && $Juco_info['Juco_AssistID']!='0'){
		
				
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('juco_transfer',$Juco_info,$update_file);	
				
				$Juco_PitchImageName = $_FILES['Juco_PitchImageName']['name'];
				$Juco_HitImageName = $_FILES['Juco_HitImageName']['name'];
				$Juco_FieldImageName = $_FILES['Juco_FieldImageName']['name'];
				
				if($Juco_PitchImageName!="")
				{
					$this->juco_transfer_model->PitchImage($UserID);
				}
				if($Juco_HitImageName!="")
				{
					$this->juco_transfer_model->HitImage($UserID);
				}
				if($Juco_FieldImageName!="")
				{
					$this->juco_transfer_model->FieldImage($UserID);
				}
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing Step6.');
				redirect(base_url().'juco_transfer/step7');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'juco_transfer/step6');	
		}	
	}
	
	public function step7()
	{
		if($this->session->userdata('MyRecuritID'))
		  {
		   $UserID=$this->session->userdata('MyRecuritID'); 
		  }else{
		   $UserID= $this->session->userdata('UserID');  
		  }
			  
		$User=get_user_detail($UserID);  
		if($User['Step']=='7' && $User['UserType']=='2')
		 {  
			  
			$data['MainContent'] = $this->load->view('juco_transfer/step7',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('juco_transfer/step'.$User['Step'].''));
		 
		 
		 }

	}
	
	
	public function insert_step7()
	{
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		$User['Step']='10';
		$Juco_info['Juco_VideoUrl']=$this->input->post('Juco_VideoUrl');
		$Juco_info['Juco_Player']=$this->input->post('Juco_Player');
		
		/* if($Juco_info['Juco_VideoUrl']!=""){ */
		
				
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('juco_transfer',$Juco_info,$update_file);	
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing Step7.');
				redirect(base_url().'juco_transfer/step10');
				
		/* }
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'juco_transfer/step7');	
		} */	
	}
	
	public function step8()
	{
		if($this->session->userdata('MyRecuritID'))
		  {
		   $UserID=$this->session->userdata('MyRecuritID'); 
		  }else{
		   $UserID= $this->session->userdata('UserID');  
		  }
			  
		$User=get_user_detail($UserID);  
		if($User['Step']=='8' && $User['UserType']=='2')
		 {  
			  
			$data['MainContent'] = $this->load->view('juco_transfer/step8',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('juco_transfer/step'.$User['Step'].''));
		 
		 
		 }
	}
	
	public function payment()
	{
			  
			$data['MainContent'] = $this->load->view('juco_transfer/payment',"", true);
			$this->load->view('template', $data);	
				
			
	}
	
	public function free_payment()
	{
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		$User['Step']='11';
		$User['IsComplated']='1';
		$User['PaymentType']='0';
		
		$update_file=array(
					'UserID'=>$UserID
				);			
		$Coach_ID=$this->general_model->update_data('user_register',$User,$update_file);	
		
		$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
		$this->session->set_flashdata('successmessage','Thank You For Completing Step8.');
		redirect(base_url().'juco_transfer/step11');
	}
	
	
	
	
	public function insert_step8()
	{
		
		if(!($PaymentType==1 || $PaymentType==2 || $PaymentType==3))
		{
			$this->session->set_flashdata('errormessage','Invalid Payment Mode.');
			redirect(base_url().'juco_transfer/payment');	
		}
		
		$data=$this->juco_transfer_model->payment_register();
		if($data==1)
		{
			
			$this->session->set_flashdata('successmessage','Thank You For the Payment.');
			redirect(base_url().'juco_transfer/step11');
				
		}
		if($data==0)
		{
			$this->session->set_flashdata('errormessage', 'Invalid Credit Card Details');
			redirect(base_url().'juco_transfer/payment');
		}
		redirect(base_url().'juco_transfer');		
			
	}


	
	/*
	public function step9()
	{
	
	
			
	
		if($this->session->userdata('MyRecuritID'))
		  {
		   $UserID=$this->session->userdata('MyRecuritID'); 
		  }else{
		   $UserID= $this->session->userdata('UserID');  
		  }
			  
		$User=get_user_detail($UserID);  
		if($User['Step']=='9' && $User['UserType']=='2')
		 {  
			  
			$data['MainContent'] = $this->load->view('juco_transfer/step9',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('juco_transfer'));
		 
		 
		 }

	
		
	}
	
	public function insert_step9()
	{
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		$User['Step']='10';
		$Juco_info['Juco_Content']=$this->input->post('Juco_Content');
	
		
		if($Juco_info['Juco_Content']!=""){
		
				
				$update_file=array(
							UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('juco_transfer',$Juco_info,$update_file);	
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing Step9.');
				redirect(base_url().'juco_transfer/step10');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'juco_transfer/step9');	
		}	
	}

*/
	
	public function step10()
	{
	
		if($this->session->userdata('MyRecuritID'))
		  {
		   $UserID=$this->session->userdata('MyRecuritID'); 
		  }else{
		   $UserID= $this->session->userdata('UserID');  
		  }
			  
		$User=get_user_detail($UserID);  
		if($User['Step']=='10' && $User['UserType']=='2')
		 {  
			  
			$data['MainContent'] = $this->load->view('juco_transfer/step10',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('juco_transfer/step'.$User['Step'].''));
		 
		 
		 }
	}
	
	public function insert_step10()
	{
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		$User['Step']='8';
		
		$Juco_info['Juco_DeveloperID']=$this->input->post('Juco_DeveloperID');
		$Juco_info['Juco_NeedID']=$this->input->post('Juco_NeedID');
	
		
		if($Juco_info['Juco_DeveloperID']!='0'){
		
				
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('juco_transfer',$Juco_info,$update_file);	
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing Step10.');
				redirect(base_url().'juco_transfer/step8');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'juco_transfer/step10');	
		}	
	}

	
	public function step11()
	{
	
		if($this->session->userdata('MyRecuritID'))
		  {
		   $UserID=$this->session->userdata('MyRecuritID'); 
		  }else{
		   $UserID= $this->session->userdata('UserID');  
		  }
			  
		$User=get_user_detail($UserID);  
		if($User['Step']=='11' && $User['UserType']=='2')
		 {  
			  
			$data['MainContent'] = $this->load->view('juco_transfer/step11',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('juco_transfer/step'.$User['Step'].''));
		 
		 
		 }

	
		
	}
	
	
	
	
}	
	