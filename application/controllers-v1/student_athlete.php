
<?php 
include_once APPPATH.'libraries/password.php';
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_athlete extends CI_Controller {
 
  
 public function __construct()
	 {   
	  parent::__construct();    
	  $this->load->model('general_model');
	  $this->load->model('student_athlete_model');
	  
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
        $data['MainContent'] = $this->load->view('student_athlete/step1',$data, true);
        $this->load->view('template', $data);		
	}
	
	
	public function insert_step1()
	{
	   
			   $step1_info['Stu_ParentEmail']=$_POST['Gua_Email'];
			   $step1_info['Stu_Status']='1';
			   $step1_info['Stu_IPAddress']=$this->input->ip_address();
			   $user_info['UserEmail']=$_POST['UserEmail'];
			   $user_info['Password']=password_hash($_POST['Password'], PASSWORD_DEFAULT);

			   $user_info['IPAddress']=$this->input->ip_address();
			   $random = substr(md5(time() * rand()),0,15);
			   $user_info['RandomNumber']=$random;
			   $user_info['Status']='0';
			   $user_info['UserType']='1';
			   $user_info['Step']='2';
			   $user_info['AdminStatus']='1';
			   
		$regex = " /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/"; 
		if (!preg_match( $regex, $user_info['UserEmail'])) 
		{ $this->session->set_flashdata('errormessage','Enter the Valid Email Address');
			  redirect(base_url().'student_athlete');		
		} 
				   
			   
		if($user_info['UserEmail']!='' && $user_info['Password']!='' && $step1_info['Stu_ParentEmail']!='' )
		{
		
			
 			$Email=$this->general_model->check_email();
			if($Email=='0')
			{
			
			$this->db->set('RegisterDate', 'NOW()', FALSE);	
		  	$last_id=$this->general_model->insert_data('user_register',$user_info);
			$this->general_model->sendEmail($last_id);
			
			$step1_info['UserID']=$last_id;
			$this->db->set('Stu_RegisterDate','NOW()', FALSE);	
		  	$coll_id = $this->general_model->insert_data('student_athlete',$step1_info);
			
			$this->student_athlete_model->profile_image($coll_id);
			$this->general_model->ParentEmail('student_athlete',$last_id,'Stu_ParentEmail');
				
			$this->session->set_userdata('UserID',$last_id);
			$this->session->set_flashdata('successmessage','Thank You For Register.');
			redirect(base_url('student_athlete/thanks'));
				
		  	}
			else
			{
			 $this->session->set_flashdata('errormessage','This Email is Allredy Registered. Please Login');
			 redirect(base_url('student_athlete'));
			}

		}	
		else
		{
		 $this->session->set_flashdata('errormessage','Some Field Are Missing');
		 redirect(base_url('student_athlete'));
		
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
		  }else{
		   $UserID= $this->session->userdata('UserID');  
		  }
			  
		$User=get_user_detail($UserID);  
		if($User['Step']=='2' && $User['UserType']=='1')
		 {  
			  
			  
			/* $cap =  $capcha=get_captcha();
			 $data = array(
							captcha_time' => $cap['time'],
							word' => $cap['word']
							);
			
			 $data['cap_img']=$cap['image'];
			 $data['cap_word']=$cap['word'];  
			  */
			$data['MainContent'] = $this->load->view('student_athlete/step2',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('student_athlete/step'.$User['Step'].''));
		 
		 
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
		$Stu_info['Stu_GenderID']=$this->input->post('Stu_GenderID');
		$Stu_info['Stu_SportID']=$this->input->post('Stu_SportID');
		$Stu_info['Stu_PositionID']=$this->input->post('Stu_PositionID');
		$Stu_info['Stu_SchoolName']=$this->input->post('Stu_SchoolName');
		$Stu_info['Stu_CountryID']=$this->input->post('Stu_CountryID');
		$Stu_info['Stu_State']=$this->input->post('Stu_State');
		$Stu_info['Stu_City']=$this->input->post('Stu_City');
		$Stu_info['Stu_ZipCode']=$this->input->post('Stu_ZipCode');
		$Stu_info['Stu_ClassID']=$this->input->post('Stu_ClassID');
		$Stu_info['Stu_HeightID']=$this->input->post('Stu_HeightID');
		$Stu_info['Stu_InchesID']=$this->input->post('Stu_InchesID');
		$Stu_info['Stu_WeightID']=$this->input->post('Stu_WeightID');
		$Stu_info['Stu_Coach']=$this->input->post('Stu_Coach');
		
		
		
		if($Stu_info['Stu_GenderID']!='0' && $Stu_info['Stu_SportID']!='0' && $Stu_info['Stu_CountryID']!='0' && $Stu_info['Stu_SchoolName']!=""  && $User['FirstName']!="" && $User['LastName']!=""  && $Stu_info['Stu_ZipCode']!="" && $Stu_info['Stu_HeightID']!='0'  && $Stu_info['Stu_ClassID']!='0'  && $Stu_info['Stu_InchesID']!='0'  && $Stu_info['Stu_WeightID']!='0' && $Stu_info['Stu_State']!="0"  && $Stu_info['Stu_City']!="" ){
		
				
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('student_athlete',$Stu_info,$update_file);	
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing Step3.');
				redirect(base_url().'student_athlete/step2a');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'student_athlete/step2');	
		}	
	}

	public function step2a(){
				
				
				if($this->session->userdata('MyRecuritID'))
				{
					$UserID=$this->session->userdata('MyRecuritID');	
				}if($this->session->userdata('UserID')){
					$UserID= $this->session->userdata('UserID'); 	
				}
					
						$SportID = get_sport_detail($UserID);  			
						
						if(!empty($SportID))
						{
							$this->session->set_userdata('Stu_SportID',$SportID['Stu_SportID']);	
							if($SportID['Stu_SportID']=='28')
							{
								redirect(base_url().'sport/baseball');	
							}
							else if($SportID['Stu_SportID']=='29')
							{
								redirect(base_url().'sport/basketball');	
							}
							else if($SportID['Stu_SportID']=='30')
							{
								redirect(base_url().'sport/bowling');	
							}
							else if($SportID['Stu_SportID']=='31')
							{
								redirect(base_url().'sport/cheerleading');	
							}
							else if($SportID['Stu_SportID']=='32')
							{
								redirect(base_url().'sport/crew');	
							}
							else if($SportID['Stu_SportID']=='33')
							{
								redirect(base_url().'sport/cross_country');	
							}
							else if($SportID['Stu_SportID']=='34')
							{
								redirect(base_url().'sport/dance_team');	
							}
							else if($SportID['Stu_SportID']=='35')
							{
								redirect(base_url().'sport/fencing');	
							}
							else if($SportID['Stu_SportID']=='36')
							{
								redirect(base_url().'sport/field_hockey');	
							}
							else if($SportID['Stu_SportID']=='37')
							{
								redirect(base_url().'sport/football');	
							}
							
							else if($SportID['Stu_SportID']=='38')
							{
								redirect(base_url().'sport/golf');	
							}
							else if($SportID['Stu_SportID']=='39')
							{
								redirect(base_url().'sport/mens_gymnastics');	
							}
							else if($SportID['Stu_SportID']=='40')
							{
								redirect(base_url().'sport/ice_hockey');	
							}
							else if($SportID['Stu_SportID']=='41')
							{
								redirect(base_url().'sport/indor_track');	
							}
							else if($SportID['Stu_SportID']=='42')
							{
								redirect(base_url().'sport/lacrosse');	
							}
							else if($SportID['Stu_SportID']=='43')
							{
								redirect(base_url().'sport/rifle');	
							}
							else if($SportID['Stu_SportID']=='44')
							{
								redirect(base_url().'sport/rugby');	
							}
							else if($SportID['Stu_SportID']=='45')
							{
								redirect(base_url().'sport/skiing');	
							}
							else if($SportID['Stu_SportID']=='46')
							{
								redirect(base_url().'sport/soccer');	
							}
							else if($SportID['Stu_SportID']=='47')
							{
								redirect(base_url().'sport/softball');	
							}
							else if($SportID['Stu_SportID']=='48')
							{
								redirect(base_url().'sport/swimming');	
							}
							else if($SportID['Stu_SportID']=='49')
							{
								redirect(base_url().'sport/tennis');	
							}
							else if($SportID['Stu_SportID']=='50')
							{
								redirect(base_url().'sport/track');	
							}
							else if($SportID['Stu_SportID']=='51')
							{
								redirect(base_url().'sport/volleyball');	
							}
							else if($SportID['Stu_SportID']=='52')
							{
								redirect(base_url().'sport/water_polo');	
							}
							else if($SportID['Stu_SportID']=='53')
							{
								redirect(base_url().'sport/wrestling');	
							}
							else if($SportID['Stu_SportID']=='54')
							{
								redirect(base_url().'sport/womens_gymnastics');	
							}
							else if($SportID['Stu_SportID']=='55')
							{
								redirect(base_url().'sport/rowing');	
							}
							
							else{
							
							redirect(base_url('sport'));
							}
							
						}
						else{
						$this->session->set_flashdata('errormessa','Invalid User Details.');
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
		if($User['Step']=='3' && $User['UserType']=='1')
		 {  
			  
			$data['MainContent'] = $this->load->view('student_athlete/step3',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('student_athlete/step'.$User['Step'].''));
		 
		 
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
		$Stu_info['Stu_ActID']=$this->input->post('Stu_ActID');
		$Stu_info['Stu_SatID']=$this->input->post('Stu_SatID');
		$Stu_info['Stu_GpaID']=$this->input->post('Stu_GpaID');
		$Stu_info['Stu_CoreGpaID']=$this->input->post('Stu_CoreGpaID');

		$Stu_info['Stu_NccaID']=$this->input->post('Stu_NcaaID');
		$Stu_info['Stu_NaiaID']=$this->input->post('Stu_NaiaID');
		$Stu_info['Stu_Education']=implode(',',$this->input->post('Stu_Education'));
		$Stu_info['Stu_ExtraCurricular']=implode(',',$this->input->post('Stu_ExtraCurricular'));
		$Stu_info['Stu_IntentID']=$this->input->post('Stu_IntendedID');
		$Stu_info['Stu_MajorID']=$this->input->post('Stu_MajorID');
		$Stu_info['Stu_GuidanceID']=$this->input->post('Stu_GuidanceID');
		$Stu_info['Stu_EmailID']=$this->input->post('Stu_EmailID');
		$Stu_info['Stu_TotalID']=$this->input->post('Stu_TotalID');
		$Stu_info['Stu_ReadingID']=$this->input->post('Stu_ReadingID');
		$Stu_info['Stu_ListenID']=$this->input->post('Stu_ListeningID');
		$Stu_info['Stu_SpeakID']=$this->input->post('Stu_SpeakingID');
		$Stu_info['Stu_WriteID']=$this->input->post('Stu_WritingID');
		$Stu_info['Stu_WesID']=$this->input->post('Stu_WesID');
		
		$Stu_info['Stu_YearSpeakID']=$this->input->post('Stu_YearSpeakID');
		$Stu_info['Stu_YearReadID']=$this->input->post('Stu_YearReadID');
		$Stu_info['Stu_YearWriteID']=$this->input->post('Stu_YearWriteID');
		
		if($Stu_info['Stu_ActID']!='0' && $Stu_info['Stu_NcaaID']!='0' && $Stu_info['Stu_IntentID']!='0'  && $Stu_info['Stu_TotalID']!='0'  ){
		
				
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('student_athlete',$Stu_info,$update_file);	
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing Step4.');
				redirect(base_url().'student_athlete/step4');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'student_athlete/step3');	
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
		if($User['Step']=='4' && $User['UserType']=='1')
		 { 
			  
			$data['MainContent'] = $this->load->view('student_athlete/step4',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('student_athlete/step'.$User['Step'].''));
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
		$Stu_info['Stu_Act_Player']=$this->input->post('Stu_Act_Player');
		$Stu_info['Stu_Act_HighSchool']=$this->input->post('Stu_Act_HighSchool');
		$Stu_info['Stu_Act_City']=$this->input->post('Stu_Act_City');
		$Stu_info['Stu_Act_State']=$this->input->post('Stu_Act_State');
		$Stu_info['Stu_Act_Class']=$this->input->post('Stu_Act_Class');
		$Stu_info['Stu_Act_ActScore']=$this->input->post('Stu_Act_ActScore');
		$Stu_info['Stu_Act_SatScore']=$this->input->post('Stu_Act_SatScore');
		$Stu_info['Stu_Act_Gpa']=$this->input->post('Stu_Act_Gpa');
		$Stu_info['Stu_Act_CoreGpa']=$this->input->post('Stu_Act_CoreGpa');
		
		
		$Stu_info['Stu_Act_GuName']=$this->input->post('Stu_Act_GuName');
		$Stu_info['Stu_Act_GuEmail']=$this->input->post('Stu_Act_GuEmail');
		$Stu_info['Stu_Act_Arts']=$this->input->post('Stu_Act_Arts');
		$Stu_info['Stu_Act_Religion']=$this->input->post('Stu_Act_Religion');
		$Stu_info['Stu_Act_Clubs']=$this->input->post('Stu_Act_Clubs');
		$Stu_info['Stu_Act_Community']=$this->input->post('Stu_Act_Community');
		$Stu_info['Stu_Act_Goverment']=$this->input->post('Stu_Act_Goverment');
		$Stu_info['Stu_Act_Media']=$this->input->post('Stu_Act_Media');
		$Stu_info['Stu_Act_Military']=$this->input->post('Stu_Act_Military');
		$Stu_info['Stu_Act_Music']=$this->input->post('Stu_Act_Music');
		
		$Stu_info['Stu_Act_TofelScoreID']=$this->input->post('Stu_Act_TofelScoreID');
		$Stu_info['Stu_Act_ReadID']=$this->input->post('Stu_Act_ReadID');
		$Stu_info['Stu_Act_ListenID']=$this->input->post('Stu_Act_ListenID');
		$Stu_info['Stu_Act_SpeakID']=$this->input->post('Stu_Act_SpeakID');
		$Stu_info['Stu_Act_WriteID']=$this->input->post('Stu_Act_WriteID');
		$Stu_info['Stu_Act_YearSpeakID']=$this->input->post('Stu_Act_YearSpeakID');
		$Stu_info['Stu_Act_YearReadID']=$this->input->post('Stu_Act_YearReadID');
		$Stu_info['Stu_Act_YearWriteID']=$this->input->post('Stu_Act_YearWriteID');
		$Stu_info['Stu_Act_Other']=$this->input->post('Stu_Act_Other');
		
		$Stu_info['Stu_Act_WesID']=$this->input->post('Stu_Act_WesID');
		$Stu_info['Stu_Act_Honors']=$this->input->post('Stu_Act_Honors');
		$Stu_info['Stu_Act_Post']=$this->input->post('Stu_Act_Post');
		$Stu_info['Stu_Act_Languages']=$this->input->post('Stu_Act_Languages');
		$Stu_info['Stu_Act_ApCourses']=$this->input->post('Stu_Act_ApCourses');
		$Stu_info['Stu_Act_Ncaa']=$this->input->post('Stu_Act_Ncaa');
		$Stu_info['Stu_Act_Naia']=$this->input->post('Stu_Act_Naia');
		$Stu_info['Stu_Act_IntendedID']=$this->input->post('Stu_Act_IntendedID');
		$Stu_info['Stu_Act_MajorID']=$this->input->post('Stu_Act_MajorID');
		
		if($Stu_info['Stu_Act_Player']!='' && $Stu_info['Stu_Act_HighSchool']!=''&& $Stu_info['Stu_Act_City']!='' && $Stu_info['Stu_Act_State']!='' ){
		
				
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('student_athlete',$Stu_info,$update_file);	
				
				$Stu_Act_Image = $_FILES['Stu_Act_ImageName']['name'];
				
				if($Stu_Act_Image!="")
				{
					$this->student_athlete_model->Stu_Act_Image($UserID);
				}
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing Step5.');
				redirect(base_url().'student_athlete/step5a');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'student_athlete/step4');	
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
		if($User['Step']=='5' && $User['UserType']=='1')
		 {  
			  
			$data['MainContent'] = $this->load->view('student_athlete/step5',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('student_athlete/step'.$User['Step'].''));
		 
		 
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
		$Stu_info['Stu_BioWeightID']=$this->input->post('Stu_BioWeightID');
		$Stu_info['Stu_BioHeightWithoutID']=$this->input->post('Stu_BioHeightWithoutID');
		$Stu_info['Stu_BioHeightWithID']=$this->input->post('Stu_BioHeightWithID');
		$Stu_info['Stu_WingSpanID']=$this->input->post('Stu_WingSpanID');
		$Stu_info['Stu_HandWidthID']=$this->input->post('Stu_HandWidthID');
		$Stu_info['Stu_HandLengthID']=$this->input->post('Stu_HandLengthID');
		$Stu_info['Stu_DominantID']=$this->input->post('Stu_DominantID');
		$Stu_info['Stu_DominantLegID']=$this->input->post('Stu_DominantLegID');
		$Stu_info['Stu_VerticalID']=$this->input->post('Stu_VerticalID');
		
		$Stu_info['Stu_PowerCleanID']=$this->input->post('Stu_PowerCleanID');
		$Stu_info['Stu_StandingID']=$this->input->post('Stu_StandingID');
		$Stu_info['Stu_BenchID']=$this->input->post('Stu_BenchID');
		$Stu_info['Stu_MileRunID']=$this->input->post('Stu_MileRunID');
		$Stu_info['Stu_YardID']=$this->input->post('Stu_YardID');
		$Stu_info['Stu_YardDashID']=$this->input->post('Stu_YardDashID');
		$Stu_info['Stu_PushID']=$this->input->post('Stu_PushID');
		$Stu_info['Stu_SitID']=$this->input->post('Stu_SitID');
		$Stu_info['Stu_PullID']=$this->input->post('Stu_PullID');
		
		
		$Stu_info['Stu_BioHeightIncheWithoutID']=$this->input->post('Stu_BioHeightIncheWithoutID');
		$Stu_info['Stu_BioHeightIncheWithID']=$this->input->post('Stu_BioHeightIncheWithID');
		$Stu_info['Stu_HandLengthIncheID']=$this->input->post('Stu_HandLengthIncheID');
		$Stu_info['Stu_HandWidthIncheID']=$this->input->post('Stu_HandWidthIncheID');
		$Stu_info['Stu_WingSpanIncheID']=$this->input->post('Stu_WingSpanIncheID');
		$Stu_info['Stu_VerticalIncheID']=$this->input->post('Stu_VerticalIncheID');
		$Stu_info['Stu_StandIncheingID']=$this->input->post('Stu_StandIncheingID');
		$Stu_info['Stu_SquatID']=$this->input->post('Stu_SquatID');
		$Stu_info['Stu_MileIncheRunID']=$this->input->post('Stu_MileIncheRunID');
		$Stu_info['Stu_YardIncheID']=$this->input->post('Stu_YardIncheID');
		$Stu_info['Stu_YardDashIncheID']=$this->input->post('Stu_YardDashIncheID');
		
		
		
		if($Stu_info['Stu_BioWeightID']!='0' && $Stu_info['Stu_VerticalID']!='0' && $Stu_info['Stu_MileRunID']!='0' && $Stu_info['Stu_PushID']!='0'){
		
				
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('student_athlete',$Stu_info,$update_file);	
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing Step6.');
				redirect(base_url().'student_athlete/step5a');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'student_athlete/step5');	
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
		if($User['Step']=='5a' && $User['UserType']=='1')
		 {  
			 
			$data['MainContent'] = $this->load->view('student_athlete/step5a',"", true);
	    	$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('student_athlete/step'.$User['Step'].''));
		 
		 
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
		$Stu_info['Stu_Ins_Player']=$this->input->post('Stu_Ins_PlayerName');
		$Stu_info['Stu_Ins_HighSchool']=$this->input->post('Stu_Ins_HighSchool');
		$Stu_info['Stu_Ins_City']=$this->input->post('Stu_Ins_City');
		$Stu_info['Stu_Ins_State']=$this->input->post('Stu_Ins_State');
		$Stu_info['Stu_Ins_Class']=$this->input->post('Stu_Ins_Class');
		$Stu_info['Stu_Ins_Weight']=$this->input->post('Stu_Ins_Weight');
		$Stu_info['Stu_Ins_HeightWith']=$this->input->post('Stu_Ins_HeightWith');
		$Stu_info['Stu_Ins_WingSpan']=$this->input->post('Stu_Ins_WingSpan');
		$Stu_info['Stu_Ins_HandWidth']=$this->input->post('Stu_Ins_HandWidth');
		
		
		$Stu_info['Stu_Ins_HandLength']=$this->input->post('Stu_Ins_HandLength');
		$Stu_info['Stu_Ins_DominantHand']=$this->input->post('Stu_Ins_DominantHand');
		$Stu_info['Stu_Ins_DominantLeg']=$this->input->post('Stu_Ins_DominantLeg');
		$Stu_info['Stu_Ins_BodyMass']=$this->input->post('Stu_Ins_BodyMass');
		$Stu_info['Stu_Ins_PushUp']=$this->input->post('Stu_Ins_PushUp');
		$Stu_info['Stu_Ins_PullUp']=$this->input->post('Stu_Ins_PullUp');
		$Stu_info['Stu_Ins_SitUp']=$this->input->post('Stu_Ins_SitUp');
		$Stu_info['Stu_Ins_Vertical']=$this->input->post('Stu_Ins_Vertical');
		$Stu_info['Stu_Ins_Standing']=$this->input->post('Stu_Ins_Standing');
		$Stu_info['Stu_Ins_PowerClean']=$this->input->post('Stu_Ins_PowerClean');
		$Stu_info['Stu_Ins_HeightWithout']=$this->input->post('Stu_Ins_HeightWithout');
		
		
		$Stu_info['Stu_Ins_Bench']=$this->input->post('Stu_Ins_Bench');
		$Stu_info['Stu_Ins_Squal']=$this->input->post('Stu_Ins_Squal');
		$Stu_info['Stu_Ins_Sit']=$this->input->post('Stu_Ins_Sit');
		$Stu_info['Stu_Ins_BackScratch']=$this->input->post('Stu_Ins_BackScratch');
		$Stu_info['Stu_Ins_Yard']=$this->input->post('Stu_Ins_Yard');
		$Stu_info['Stu_Ins_YardDash']=$this->input->post('Stu_Ins_YardDash');
		$Stu_info['Stu_Ins_Mile']=$this->input->post('Stu_Ins_Mile');
		
		
		$Stu_info['Stu_Ins_HeightIncheWithoutID']=$this->input->post('Stu_Ins_HeightIncheWithoutID');
		$Stu_info['Stu_Ins_HeightIncheWithID']=$this->input->post('Stu_Ins_HeightIncheWithID');
		$Stu_info['Stu_Ins_WingSpanIncheID']=$this->input->post('Stu_Ins_WingSpanIncheID');
		$Stu_info['Stu_Ins_HandWidthIncheID']=$this->input->post('Stu_Ins_HandWidthIncheID');
		$Stu_info['Stu_Ins_HandLengthIncheID']=$this->input->post('Stu_Ins_HandLengthIncheID');
		$Stu_info['Stu_Ins_VerticalIncheID']=$this->input->post('Stu_Ins_VerticalIncheID');
		$Stu_info['Stu_Ins_StandIncheingID']=$this->input->post('Stu_Ins_StandIncheingID');
		$Stu_info['Stu_Ins_YardIncheID']=$this->input->post('Stu_Ins_YardIncheID');
		$Stu_info['Stu_Ins_YardDashIncheID']=$this->input->post('Stu_Ins_YardDashIncheID');
		$Stu_info['Stu_Ins_MileIncheRunID']=$this->input->post('Stu_Ins_MileIncheRunID');
		$Stu_info['Stu_Ins_Back']=$this->input->post('Stu_Ins_Back');
		$Stu_info['Stu_Ins_Reach']=$this->input->post('Stu_Ins_Reach');
		
		
		
		if($Stu_info['Stu_Ins_Player']!='' && $Stu_info['Stu_Ins_HighSchool']!='' && $Stu_info['Stu_Ins_City']!='' && $Stu_info['Stu_Ins_City']!='' && $Stu_info['Stu_Ins_Class']!='' && $Stu_info['Stu_Ins_Weight']!='0' && $Stu_info['Stu_Ins_MileIncheRunID']!='0' && $Stu_info['Stu_Ins_Mile']!='0'&& $Stu_info['Stu_Ins_YardIncheID']!='0'&& $Stu_info['Stu_Ins_Yard']!='0' && $Stu_info['Stu_Ins_DominantLeg']!='0'&& $Stu_info['Stu_Ins_DominantHand']!='0' && $Stu_info['Stu_Ins_HeightWith']!='0'&& $Stu_info['Stu_Ins_HeightWithout']!='0'&& $Stu_info['Stu_Ins_HeightWith']!='0'&& $Stu_info['Stu_Ins_HeightIncheWithoutID']!='0' && $Stu_info['Stu_VerticalIncheID']!='0'&& $Stu_info['Stu_Ins_Vertical']!='0'){
		
				
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('student_athlete',$Stu_info,$update_file);	
				
				$Stu_PitchImageName = $_FILES['Stu_Ins_ImageName']['name'];
				
				if($Stu_PitchImageName!="")
				{
					$this->student_athlete_model->Stu_Ins_Image($UserID);
				}
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing Step7.');
				redirect(base_url().'student_athlete/step7');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'student_athlete/step5a');	
		}	
	}
	
	
	/*public function step6()
	{
		if($this->session->userdata('MyRecuritID'))
		  {
		   $UserID=$this->session->userdata('MyRecuritID'); 
		  }else{
		   $UserID= $this->session->userdata('UserID');  
		  }
			  
		$User=get_user_detail($UserID);  
		if($User['Step']=='6' && $User['UserType']=='1')
		 {  
			  
			$data['MainContent'] = $this->load->view('student_athlete/step6',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('student_athlete'));
		 
		 
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
		$Stu_info['Stu_PrimaryID']=$this->input->post('Stu_PrimaryID');
		$Stu_info['Stu_ThrowsID']=$this->input->post('Stu_ThrowsID');
		$Stu_info['Stu_BatsID']=$this->input->post('Stu_BatsID');
		$Stu_info['Stu_EraID']=$this->input->post('Stu_EraID');
		$Stu_info['Stu_WinID']=$this->input->post('Stu_WinID');
		$Stu_info['Stu_PrimaryPitchID']=$this->input->post('Stu_PrimaryPitchID');
		$Stu_info['Stu_SecondaryPitchID']=$this->input->post('Stu_SecondaryPitchID');
		$Stu_info['Stu_FastBallID']=$this->input->post('Stu_FastBallID');
		$Stu_info['Stu_BattingID']=$this->input->post('Stu_BattingID');
		
		
		$Stu_info['Stu_RbiID']=$this->input->post('Stu_RbiID');
		$Stu_info['Stu_StolenID']=$this->input->post('Stu_StolenID');
		$Stu_info['Stu_OnBaseID']=$this->input->post('Stu_OnBaseID');
		$Stu_info['Stu_HitYardID']=$this->input->post('Stu_HitYardID');
		$Stu_info['Stu_SpeedID']=$this->input->post('Stu_SpeedID');
		$Stu_info['Stu_AssistID']=$this->input->post('Stu_AssistID');
		$Stu_info['Stu_PutID']=$this->input->post('Stu_PutID');
		$Stu_info['Stu_DoubleID']=$this->input->post('Stu_DoubleID');
		$Stu_info['Stu_TripleID']=$this->input->post('Stu_TripleID');
		$Stu_info['Stu_FieldID']=$this->input->post('Stu_FieldID');
		
		
		
		if($Stu_info['Stu_PrimaryID']!='0' && $Stu_info['Stu_EraID']!='0' && $Stu_info['Stu_BattingID']!='0' && $Stu_info['Stu_AssistID']!='0'){
		
				
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('student_athlete',$Stu_info,$update_file);	
				
				$Stu_PitchImageName = $_FILES['Stu_PitchImageName']['name'];
				$Stu_HitImageName = $_FILES['Stu_HitImageName']['name'];
				$Stu_FieldImageName = $_FILES['Stu_FieldImageName']['name'];
				
				if($Stu_PitchImageName!="")
				{
					$this->student_athlete_model->PitchImage($UserID);
				}
				if($Stu_HitImageName!="")
				{
					$this->student_athlete_model->HitImage($UserID);
				}
				if($Stu_FieldImageName!="")
				{
					$this->student_athlete_model->FieldImage($UserID);
				}
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing Step9.');
				redirect(base_url().'student_athlete/step7');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'student_athlete/step6');	
		}	
	}
	*/
	public function step7()
	{
		if($this->session->userdata('MyRecuritID'))
		  {
		   $UserID=$this->session->userdata('MyRecuritID'); 
		  }else{
		   $UserID= $this->session->userdata('UserID');  
		  }
			  
		$User=get_user_detail($UserID);  
		if($User['Step']=='7' && $User['UserType']=='1')
		 {  
			  
			$data['MainContent'] = $this->load->view('student_athlete/step7',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('student_athlete/step'.$User['Step'].''));
		 
		 
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
		$Stu_info['Stu_VideoUrl']=$this->input->post('Stu_VideoUrl');
		$Stu_info['Stu_Player']=$this->input->post('Stu_Player');
		
		/* if($Stu_info['Stu_VideoUrl']!=""){ */
		
				
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('student_athlete',$Stu_info,$update_file);	
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing Step10.');
				redirect(base_url().'student_athlete/step10');
				
		/* 
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'student_athlete/step7');	
		}
		*/ 	
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
		if($User['Step']=='8' && $User['UserType']=='1')
		 {  
			  
			$data['MainContent'] = $this->load->view('student_athlete/step8',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('student_athlete/step'.$User['Step'].''));
		 
		 
		 }

	
		
	}
	
	public function payment()
	{
			  
			$data['MainContent'] = $this->load->view('student_athlete/payment',"", true);
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
		redirect(base_url().'student_athlete/step11');
	}
	
	
	public function insert_step8()
	{
		
		$PaymentType=$this->input->post('PaymentType');
		
		if(!($PaymentType==1 || $PaymentType==2 || $PaymentType==3))
		{
			$this->session->set_flashdata('errormessage','Invalid Payment Mode.');
			redirect(base_url().'student_athlete/payment');	
		}
		
		$data=$this->student_athlete_model->payment_register();
		if($data==1)
		{
			
			$this->session->set_flashdata('successmessage','Thank You For the Payment.');
			redirect(base_url().'student_athlete/step11');
				
		}
		if($data==0)
		{
			$this->session->set_flashdata('errormessage', 'Invalid Credit Card Details');
			redirect(base_url().'student_athlete/payment');
		}
		redirect(base_url().'home');		
			
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
		if($User['Step']=='9' && $User['UserType']=='1')
		 {  
			  
			$data['MainContent'] = $this->load->view('student_athlete/step9',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('student_athlete'));
		 
		 
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
		$Stu_info['Stu_Content']=$this->input->post('Stu_Content');
	
		
		if($Stu_info['Stu_Content']!=""){
		
				
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('student_athlete',$Stu_info,$update_file);	
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing Step9.');
				redirect(base_url().'student_athlete/step10');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'student_athlete/step9');	
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
		if($User['Step']=='10' && $User['UserType']=='1')
		 {  
			  
			$data['MainContent'] = $this->load->view('student_athlete/step10',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		  redirect(base_url('logout'));
		   redirect(base_url('student_athlete/step'.$User['Step'].''));
		 
		 
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
		
		$Stu_info['Stu_DeveloperID']=$this->input->post('Stu_DeveloperID');
		$Stu_info['Stu_NeedID']=$this->input->post('Stu_NeedID');
	
		
		if($Stu_info['Stu_DeveloperID']!='0'){
		
				
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('student_athlete',$Stu_info,$update_file);	
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing Step11.');
				redirect(base_url().'student_athlete/step8');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'student_athlete/step10');	
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
		if($User['Step']=='11' && $User['UserType']=='1')
		 {  
			  
			$data['MainContent'] = $this->load->view('student_athlete/step11',"", true);
			$this->load->view('template', $data);	
				
		  }
		else{
		   redirect(base_url('student_athlete/step'.$User['Step'].''));
		 
		 
		 }

	
		
	}
	
	
	
	
}	
	