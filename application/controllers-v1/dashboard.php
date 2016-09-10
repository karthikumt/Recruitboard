<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	 {   
	  parent::__construct();    
	   $this->load->model('general_model');
	   $this->load->model('student_athlete_model');
	   $this->load->model('colleage_admission_model');
	   $this->load->model('highschool_coach_model');
	   $this->load->model('highschool_teacher_model');
	   $this->load->model('development_coach_model');
	   $this->load->model('academic_tutor_model');
	   $this->load->model('club_coach_model');
	   $this->load->model('colleage_coach_model'); 
	   $this->load->model('popup_model');
	 	
	 }
 	
	public function index()
	{
		
		 
	     if($this->session->userdata('UserID'))
		 {
		 	$this->session->set_userdata('MyRecuritID',$this->session->userdata('UserID'));
		 
		 	$this->session->unset_userdata('UserID');
		
		
		 }
	     $UserID=$this->session->userdata('MyRecuritID'); 
		 $User=get_user_detail($UserID);
		   
	   	 $this->session->set_userdata('Dashbord',$User['IsComplated']);
		 if($User['UserType']=='1' && $User['Step']=='11')
		 { 
		 redirect(base_url('dashboard/student_athlete'));
		 }
        else if($User['UserType']=='2' && $User['Step']=='11')
		 { 
		 redirect(base_url('dashboard/juco_transfer'));
		 }
		 else if($User['UserType']=='3' && $User['Step']=='5')
		 { 
		 redirect(base_url('dashboard/colleage_coach'));
		 }
		 else if($User['UserType']=='4' && $User['Step']=='5')
		 { 
		 redirect(base_url().'come_soon');	
		 redirect(base_url('dashboard/colleage_admission'));
		 }
		 else if($User['UserType']=='5' && $User['Step']=='4')
		 { 
		 redirect(base_url().'come_soon');	
		 redirect(base_url('dashboard/highschool_coach'));
		 }
		 else if($User['UserType']=='6' && $User['Step']=='4')
		 { 
		 redirect(base_url().'come_soon');	
		 redirect(base_url('dashboard/club_coach'));
		 }
		  else if($User['UserType']=='7' && $User['Step']=='4')
		 { 
		 redirect(base_url().'come_soon');	
		 redirect(base_url('dashboard/highschool_teacher'));
		 }
		  else if($User['UserType']=='8' && $User['Step']=='5')
		 { 
		 redirect(base_url().'come_soon');	
		 redirect(base_url('dashboard/development_coach'));
		 }
		   else if($User['UserType']=='9' && $User['Step']=='5')
		 { 
		 redirect(base_url().'come_soon');	
		 redirect(base_url('dashboard/academic_tutor'));
		 }
		 else
		 {
		 redirect(base_url('home'));
		 }
	
	}
	public function student_athlete()
	{
	
	 $UserID=$this->session->userdata('MyRecuritID'); 
		 $User=get_user_detail($UserID);  
	
		if($User['UserType']=='1' && $User['Step']=='11')
		 {
		 
		 $column=array('UserID','Stu_SportID','Stu_PositionID','Stu_SchoolName','Stu_CountryID','Stu_HeightID','Stu_InchesID','Stu_ProfileImage','Stu_VideoURL','Stu_CoverImage','Stu_ZipCode','Stu_ClassID','Stu_WeightID','Stu_GenderID','Stu_State','Stu_City');
		 
		$data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$UserID);
	    $data['UserInfo']=$this->popup_model->get_bio_data('student_athlete',$column,$UserID);
	    $data['post_info']=$this->general_model->display_post();
        $data['coach_info']= $this->general_model->get_sport_data('coach','UserID',$UserID);
	    $data['category']=$this->general_model->get_table_data('category');
	    $data['MainContent'] = $this->load->view('dashboard/student_athlete',$data, true);
	    $this->load->view('template', $data);	
		}
		else
		{
		redirect(base_url('home'));
		}
	
	
	
	}
	public function colleage_coach()
	{
		redirect(base_url().'come_soon');	
		$UserID=$this->session->userdata('MyRecuritID'); 
		$User=get_user_detail($UserID);  
		if($User['UserType']=='3' && $User['Step']=='5')
		 { 
			 $column=array('Coach_SportID','Coach_University','Coach_CountryID','Coach_HeightID','Coach_HeightIntcheID','Coach_ProfileImage','Coach_VideoURL','Coach_DivisionID','Coach_Conferance','Coach_SeasonRecord','Coach_CareerRecord','Coach_CurrentProgramID','Coach_CoachAward','Coach_TeamID','Coach_PlayID','Coach_Program','Coach_CoverImage',' Coach_Position,Coach_State,Coach_City');
			 
			$data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$UserID);
			$data['UserInfo']=$this->popup_model->get_bio_data('colleage_coach',$column,$UserID);
			$data['post_info']=$this->general_model->display_post();
			$data['category']=$this->general_model->get_table_data('category');
			$data['MainContent'] = $this->load->view('dashboard/colleage_coach',$data, true);
			
			$this->load->view('template', $data);	
		}
		else
		{
		redirect(base_url('home'));
		}
	
	}
	public function colleage_admission()
	{
	
	$UserID=$this->session->userdata('MyRecuritID'); 
		$User=get_user_detail($UserID);  
	
		if($User['UserType']=='4' && $User['Step']=='5')
		 { 
			 $column=array('Coll_Tution','Coll_Enroll','Coll_AcceptRateID','Coll_SettingID','Coll_AvgTestScoreID','Coll_AvgStuGpaID','Coll_GraduationRateID','Coll_AvgFinancialAid','Coll_VideoUrl','Coll_CountryID','Coll_University','Coll_SchoolWeb','Coll_ProfilePic','Coll_CoverImage');
			 
			$data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$UserID);
			$data['UserInfo']=$this->popup_model->get_bio_data('colleage_admission',$column,$UserID);
			$data['post_info']=$this->general_model->display_post();
			$data['category']=$this->general_model->get_table_data('category');
			$data['MainContent'] = $this->load->view('dashboard/colleage_admission',$data, true);
			$this->load->view('template', $data);	
		}
		else
		{
		redirect(base_url('home'));
		}
	
	}
	
	
	public function juco_transfer()
	{
	
	$UserID=$this->session->userdata('MyRecuritID'); 
		$User=get_user_detail($UserID);  
	
		if($User['UserType']=='2' && $User['Step']=='11')
		 { 
			 $column=array('Juco_SportID','Juco_PositionID','Juco_SchoolName','Juco_CountryID','Juco_HeightID','Juco_InchesID','Juco_ProfileImage','Juco_VideoURL','Juco_CoverImage','Juco_ZipCode','Juco_ClassID','Juco_WeightID','Juco_GenderID','Juco_State','Juco_City');
			 
			
			$data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$UserID);
			$data['UserInfo']=$this->popup_model->get_bio_data('juco_transfer',$column,$UserID);
			$data['post_info']=$this->general_model->display_post();
			$data['coach_info']= $this->general_model->get_sport_data('coach','UserID',$UserID);
			$data['category']=$this->general_model->get_table_data('category');
			$data['MainContent'] = $this->load->view('dashboard/juco_transfer',$data, true);
			$this->load->view('template', $data);	
		}
		else
		{
		redirect(base_url('home'));
		}
	
	}
	
	public function highschool_coach()
	{
	
	$UserID=$this->session->userdata('MyRecuritID'); 
		$User=get_user_detail($UserID);  
	
		if($User['UserType']=='5' && $User['Step']=='4')
		 { 
			 $column=array('High_School','High_CountryID','High_GenderCoachID','High_SportID','High_Title','High_ProfilePic','High_Conference','High_Team','HIgh_VideoUrl','High_ProUnique','High_Division','High_CoverImage');
			 
			$data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$UserID);
			$data['UserInfo']=$this->popup_model->get_bio_data('highschool_coach',$column,$UserID);
			$data['post_info']=$this->general_model->display_post();
			$data['category']=$this->general_model->get_table_data('category');
			$data['MainContent'] = $this->load->view('dashboard/highschool_coach',$data, true);
			$this->load->view('template', $data);	
		}
		else
		{
		redirect(base_url('home'));
		}
	
	}
	
	
	public function highschool_teacher()
	{
	
	$UserID=$this->session->userdata('MyRecuritID'); 
		$User=get_user_detail($UserID);  
	
		if($User['UserType']=='7' && $User['Step']=='4')
		 { 
			 $column=array('Teach_School','Teach_PhoneNo','Teach_CountryID','Teach_ProfilePic','Teach_VideoUrl','Teach_SchoolUnique','Teach_CoverImage');
			 
			$data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$UserID);
			$data['UserInfo']=$this->popup_model->get_bio_data('highschool_teacher',$column,$UserID);
			$data['post_info']=$this->general_model->display_post();
			$data['category']=$this->general_model->get_table_data('category');
			$data['MainContent'] = $this->load->view('dashboard/highschool_teacher',$data, true);
			$this->load->view('template', $data);	
		}
		else
		{
		redirect(base_url('home'));
		}
	
	}
	
	public function club_coach()
	{
	
	$UserID=$this->session->userdata('MyRecuritID'); 
		$User=get_user_detail($UserID);  
	
		if($User['UserType']=='6' && $User['Step']=='4')
		 { 
			 $column=array('Club_Organization','Club_Team','Club_CountryID','Club_AgeGroup','Club_SportID','Club_ProfileImage','Club_Website','Club_TeamRecord','Club_Data','Club_VideoURL','Club_CoverImage');
			 
			$data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$UserID);
			$data['UserInfo']=$this->popup_model->get_bio_data('club_coach',$column,$UserID);
			$data['post_info']=$this->general_model->display_post();
			$data['category']=$this->general_model->get_table_data('category');
			$data['MainContent'] = $this->load->view('dashboard/club_coach',$data, true);
			$this->load->view('template', $data);	
		}
		else
		{
		redirect(base_url('home'));
		}
	
	}
	
	
	public function development_coach()
	{
	
	$UserID=$this->session->userdata('MyRecuritID'); 
		$User=get_user_detail($UserID);  
	
		if($User['UserType']=='8' && $User['Step']=='5')
		 { 
			 $column=array('Devel_CountryID','Devel_Phone','Devel_ProfileImage','Devel_Qualification','Devel_VideoURL','Devel_Service','Devel_Website','Devel_Attend','Devel_CoverImage');
			 
			$data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$UserID);
			$data['UserInfo']=$this->popup_model->get_bio_data('developement_coach',$column,$UserID);
			$data['post_info']=$this->general_model->display_post();
			$data['category']=$this->general_model->get_table_data('category');
			$data['MainContent'] = $this->load->view('dashboard/development_coach',$data, true);
			$this->load->view('template', $data);	
		}
		else
		{
		redirect(base_url('home'));
		}
	
	}
	
	public function academic_tutor()
	{
	
	$UserID=$this->session->userdata('MyRecuritID'); 
		$User=get_user_detail($UserID);  
	
		if($User['UserType']=='9' && $User['Step']=='5')
		 { 
			 $column=array('Ac_BusinessName','Ac_Title','Ac_CountryID','Ac_PhoneNo','Ac_ClgAttend','Ac_Qualification','Ac_BusinessUnique','Ac_Website','Ac_VideoUrl','Ac_ProfilePic','Ac_CoverImage');
			 
			$data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$UserID);
			$data['UserInfo']=$this->popup_model->get_bio_data('academic_tutor',$column,$UserID);
			$data['post_info']=$this->general_model->display_post();
			$data['category']=$this->general_model->get_table_data('category');
			$data['MainContent'] = $this->load->view('dashboard/academic_tutor',$data, true);
			$this->load->view('template', $data);	
		}
		else
		{
		redirect(base_url('home'));
		}
	
	}
	
	
	
	
	
	public function getBiometric()
	{ 
		$UserID=$this->session->userdata('MyRecuritID'); 
		$User=get_user_detail($UserID);  
		
		if($User['UserType']=='1')
		 {  
		  $colunm=array('Stu_Ins_Player','Stu_Ins_HighSchool','Stu_Ins_City','Stu_Ins_State','Stu_Ins_Class','Stu_Ins_Weight','Stu_Ins_HeightWithout','Stu_Ins_HeightWith','Stu_Ins_HeightIncheWithoutID','Stu_Ins_HeightIncheWithID','Stu_Ins_WingSpan','Stu_Ins_WingSpanIncheID','Stu_Ins_HandWidth','Stu_Ins_HandWidthIncheID','Stu_Ins_HandLength','Stu_Ins_HandLengthIncheID','Stu_Ins_DominantHand','Stu_Ins_DominantLeg','Stu_Ins_BodyMass','Stu_Ins_ImageName','Stu_Ins_PushUp','Stu_Ins_SitUp','Stu_Ins_PullUp','Stu_Ins_Vertical','Stu_Ins_VerticalIncheID','Stu_Ins_Standing','Stu_Ins_StandIncheingID','Stu_Ins_PowerClean','Stu_Ins_Bench','Stu_Ins_Squal','Stu_Ins_Sit','Stu_Ins_Reach','Stu_Ins_Back','Stu_Ins_BackScratch','Stu_Ins_Yard','Stu_Ins_YardIncheID','Stu_Ins_YardDash','Stu_Ins_YardDashIncheID','Stu_Ins_Mile','Stu_Ins_MileIncheRunID');
		  //$bio_info=$this->popup_model->get_bio_data('student_athlete',$colunm,$UserID);
		  $data['bio_info']=$this->popup_model->get_bio_data('student_athlete',$colunm,$UserID);
		  echo $this->load->view('dashboard/stu_biometric',$data,true);
		 
		 }
    }
	
	
	public function getSports()
	{
	
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
								redirect(base_url().'sport_dashboard/baseball');	
							}
							else if($SportID['Stu_SportID']=='29')
							{
								redirect(base_url().'sport_dashboard/basketball');	
							}
							else if($SportID['Stu_SportID']=='30')
							{
								redirect(base_url().'sport_dashboard/bowling');	
							}
							else if($SportID['Stu_SportID']=='31')
							{
								redirect(base_url().'sport_dashboard/cheerleading');	
							}
							else if($SportID['Stu_SportID']=='32')
							{
								redirect(base_url().'sport_dashboard/crew');	
							}
							else if($SportID['Stu_SportID']=='33')
							{
								redirect(base_url().'sport_dashboard/cross_country');	
							}
							else if($SportID['Stu_SportID']=='34')
							{
								redirect(base_url().'sport_dashboard/dance_team');	
							}
							else if($SportID['Stu_SportID']=='35')
							{
								redirect(base_url().'sport_dashboard/fencing');	
							}
							else if($SportID['Stu_SportID']=='36')
							{
								redirect(base_url().'sport_dashboard/field_hockey');	
							}
							else if($SportID['Stu_SportID']=='37')
							{
								redirect(base_url().'sport_dashboard/football');	
							}
							
							else if($SportID['Stu_SportID']=='38')
							{
								redirect(base_url().'sport_dashboard/golf');	
							}
							else if($SportID['Stu_SportID']=='39')
							{
								redirect(base_url().'sport_dashboard/mens_gymnastics');	
							}
							else if($SportID['Stu_SportID']=='40')
							{
								redirect(base_url().'sport_dashboard/ice_hockey');	
							}
							else if($SportID['Stu_SportID']=='41')
							{
								redirect(base_url().'sport_dashboard/indor_track');	
							}
							else if($SportID['Stu_SportID']=='42')
							{
								redirect(base_url().'sport_dashboard/lacrosse');	
							}
							else if($SportID['Stu_SportID']=='43')
							{
								redirect(base_url().'sport_dashboard/rifle');	
							}
							else if($SportID['Stu_SportID']=='44')
							{
								redirect(base_url().'sport_dashboard/rugby');	
							}
							else if($SportID['Stu_SportID']=='45')
							{
								redirect(base_url().'sport_dashboard/skiing');	
							}
							else if($SportID['Stu_SportID']=='46')
							{
								redirect(base_url().'sport_dashboard/soccer');	
							}
							else if($SportID['Stu_SportID']=='47')
							{
								redirect(base_url().'sport_dashboard/softball');	
							}
							else if($SportID['Stu_SportID']=='48')
							{
								redirect(base_url().'sport_dashboard/swimming');	
							}
							else if($SportID['Stu_SportID']=='49')
							{
								redirect(base_url().'sport_dashboard/tennis');	
							}
							else if($SportID['Stu_SportID']=='50')
							{
								redirect(base_url().'sport_dashboard/track');	
							}
							else if($SportID['Stu_SportID']=='51')
							{
								redirect(base_url().'sport_dashboard/volleyball');	
							}
							else if($SportID['Stu_SportID']=='52')
							{
								redirect(base_url().'sport_dashboard/water_polo');	
							}
							else if($SportID['Stu_SportID']=='53')
							{
								redirect(base_url().'sport_dashboard/wrestling');	
							}
							else if($SportID['Stu_SportID']=='54')
							{
								redirect(base_url().'sport_dashboard/womens_gymnastics');	
							}
							else if($SportID['Stu_SportID']=='55')
							{
								redirect(base_url().'sport_dashboard/rowing');	
							}
							
							else{
							
							redirect(base_url('sport_dashboard'));
							}
							
						}
						else{
						$this->session->set_flashdata('errormessa','Invalid User Details.');
						redirect(base_url('sport_dashboard'));
						}	
			
	
	}
	
	public function getAcedmic()
	{ $UserID=$this->session->userdata('MyRecuritID'); 
		$User=get_user_detail($UserID);  
		$bio_info;
		if($User['UserType']=='1')
		 {  
		  $colunm=array('Stu_Act_Player','Stu_Act_HighSchool','Stu_Act_City','Stu_Act_State','Stu_Act_Class','Stu_Act_ActScore','Stu_Act_SatScore','Stu_Act_Gpa','Stu_Act_CoreGpa','Stu_Act_Arts','Stu_Act_Religion','Stu_Act_Clubs','Stu_Act_Community','Stu_Act_Goverment','Stu_Act_Media','Stu_Act_Military','Stu_Act_Music','Stu_Act_Other','Stu_Act_ImageName','Stu_Act_TofelScoreID','Stu_Act_ReadID','Stu_Act_ListenID','Stu_Act_SpeakID','Stu_Act_WriteID','Stu_Act_YearSpeakID','Stu_Act_YearReadID','Stu_Act_YearWriteID','Stu_Act_WesID','Stu_Act_GuName','Stu_Act_GuEmail','Stu_Act_Honors','Stu_Act_Post','Stu_Act_ApCourses','Stu_Act_Languages','Stu_Act_Ncaa','Stu_Act_Naia','Stu_Act_IntendedID','Stu_Act_MajorID');
		 $data['bio_info']=$this->popup_model->get_bio_data('student_athlete',$colunm,$UserID);
		 echo $this->load->view('dashboard/stu_acedmic',$data,true);
		 }
	 }
	  
	public function comment()
	{
		$UserID=$this->session->userdata('MyRecuritID'); 
		$comment['UserID']=$UserID;
		$comment['Cat_ID']=$_POST['Cat_ID'];
		$comment['Comm_Title']=$_POST['Comm_Title'];
		$comment['Comm_Desc']=$_POST['Comm_Desc'];
		$comment['Comm_Link']=$_POST['Comm_Link'];
		$comment['Comm_Video']=$_POST['Comm_Video'];
		$this->db->set('AddDate', 'NOW()', FALSE);	
		$Last_Insertid=$this->general_model->insert_data('comment_box',$comment);
		
		$Comm_Photo = $_FILES['Comm_Photo']['name'];
		if($Comm_Photo!="")
		{
			$this->popup_model->comment_image($Last_Insertid);
		}
		 
		redirect(base_url('dashboard'));
		
		
	}
	
	public function add_coach()
	{
	 echo $this->load->view('dashboard/add_coach',true);
	}
	
	public function insert_coach()
	{
	 
		$UserID=$this->session->userdata('MyRecuritID'); 
        $Email=$this->general_model->coach_check_email($UserID);
			if($Email=='0')
			{
				$Coach['UserID']=$UserID;
				$Coach['CoachName']=$this->input->post('CoachName');
				$Coach['CoachEmail']=$this->input->post('CoachEmail');
				$this->db->set('AddDate', 'NOW()', FALSE);
			   $qr= $this->general_model->insert_data('coach',$Coach);
			  if(!empty($qr))
			  {
			  redirect(base_url('dashboard'));
			  }
			}
			else
			{
			 $this->session->set_flashdata('errormessage','This Email is Allredy Registered. Please Login');
			 redirect(base_url('dashboard'));
			}
			
			 
	}
	
	public function coach_check_email()
 	{
	  
	  $UserID=$this->session->userdata('MyRecuritID'); 
	  $Email=$this->general_model->coach_check_email($UserID);
	  echo $Email; 
	}
	
	
	public function profile_image()
	{
		$Stu_ID=$this->student_athlete_model->getStuID($this->session->userdata('MyRecuritID'));
		$this->student_athlete_model->profile_image($Stu_ID['Stu_ID']);
		$Result=$this->student_athlete_model->Profile($Stu_ID['Stu_ID']);
		
		echo '<img src="'.base_url().'register_images/student_athlete/small/'.$Result['Stu_ProfileImage'].'?='.time().' alt="">';
		
		
	}
	
	
	public function cover_image()
	{
		
		$Stu_ID=$this->student_athlete_model->Cover_getStuID($this->session->userdata('MyRecuritID'));
		$this->student_athlete_model->cover_image($Stu_ID['Stu_ID']);
		$Result=$this->student_athlete_model->Cover_Profile($Stu_ID['Stu_ID']);
		
		echo '<img src="'.base_url().'register_images/student_athlete/cover_small/'.$Result['Stu_CoverImage'].'?='.time().' alt="">';
		
		
	}
	
	public function getEvaluations()
	{
	 $data['Academic_info'] = $this->general_model->get_sport_data('evalution','E_Type','1'); 
	 $data['Athletic_info'] = $this->general_model->get_sport_data('evalution','E_Type','2'); 
     echo $this->load->view('dashboard/evalution',$data,true);
	}
	 
	public function insert_Evaluations()
	{
	
                $UserID=$this->session->userdata('MyRecuritID'); 
	            $Evaluations['UserID']=$UserID;
				$Evaluations['E_Type']=$this->input->post('r1');
				$Evaluations['ED_Name']=$this->input->post('ED_Name');
				$Evaluations['School']=$this->input->post('School');
				$Evaluations['Position']=$this->input->post('Position');
				$Evaluations['Email']=$this->input->post('Email');
				$Evaluations['Phone']=$this->input->post('Phone');
				$this->db->set('AddDate', 'NOW()', FALSE);
			   $ED_ID= $this->general_model->insert_data('evalution_detail',$Evaluations);
			  
			
			 
			
			 
			 	$TempArray = $_REQUEST;
				
				
				unset($TempArray['ED_Name']);
				unset($TempArray['School']);
				unset($TempArray['r1']);
				unset($TempArray['Position']);
				unset($TempArray['Email']);
				unset($TempArray['Phone']);
				
				
				foreach($TempArray as $ArrKey=>$ArrData){
					if($ArrData=='a'){
						$ArrData = 1;
					}
					if($ArrData=='b'){
						$ArrData = 2;
					}
					if($ArrData=='c'){
						$ArrData = 3;
					}
					if($ArrData=='d'){
						$ArrData = 4;
					}
					if($ArrData=='e'){
						$ArrData = 5;
					}
					
					$Evaluations_Data['ED_ID']= $ED_ID;
					$Evaluations_Data['EData_Question']= $ArrKey;
					$Evaluations_Data['EData_Answer']= $ArrData;
				 $this->general_model->insert_data('evalution_data',$Evaluations_Data);
				}
			redirect(base_url('dashboard')); 
		}
	
	public function getLoadValue()
	{
		$data['post_info']=$this->general_model->display_post();
		$data['StartValue']=$_POST['StartValue'];
		echo $this->load->view('dashboard/commnetvalue',$data,true);
	}
	
	
	public function coach_profile_image()
	{
		$Coach_ID=$this->colleage_coach_model->getCoachID($this->session->userdata('MyRecuritID'));
		$this->colleage_coach_model->profile_image($Coach_ID['Coach_ID']);
		$Result=$this->colleage_coach_model->Profile($Coach_ID['Coach_ID']);
		
		echo '<img src="'.base_url().'register_images/colleage_coach/small/'.$Result['Coach_ProfileImage'].'?='.time().' alt="">';
		
		
	}
	
	public function coach_cover_image()
	{
		
		$Stu_ID=$this->colleage_coach_model->Cover_getStuID($this->session->userdata('MyRecuritID'));
		$this->colleage_coach_model->cover_image($Stu_ID['Coach_ID']);
		$Result=$this->colleage_coach_model->Cover_Profile($Stu_ID['Coach_ID']);
		
		echo '<img src="'.base_url().'register_images/colleage_coach/cover_small/'.$Result['Coach_CoverImage'].'?='.time().' alt="">';
		
		
	}
	
	public function coll_profile_image()
	{
		$Coll_ID=$this->colleage_admission_model->getAdmissionID($this->session->userdata('MyRecuritID'));
		$this->colleage_admission_model->profile_image($Coll_ID['Coll_ID']);
		$Result=$this->colleage_admission_model->Profile($Coll_ID['Coll_ID']);
		
		echo '<img src="'.base_url().'register_images/colleage_admission/small/'.$Result['Coll_ProfilePic'].'?='.time().' alt="">';
		
		
	}
	
	public function coll_cover_image()
	{
		
		$Stu_ID=$this->colleage_admission_model->Cover_getStuID($this->session->userdata('MyRecuritID'));
		$this->colleage_admission_model->cover_image($Stu_ID['Coll_ID']);
		$Result=$this->colleage_admission_model->Cover_Profile($Stu_ID['Coll_ID']);
		
		echo '<img src="'.base_url().'register_images/colleage_admission/cover_small/'.$Result['Coll_CoverImage'].'?='.time().' alt="">';
		
		
	}
	
	
	
	public function high_profile_image()
	{
		$High_ID=$this->highschool_coach_model->getAdmissionID($this->session->userdata('MyRecuritID'));
		$this->highschool_coach_model->profile_image($High_ID['High_ID']);
		$Result=$this->highschool_coach_model->Profile($High_ID['High_ID']);
		
		echo '<img src="'.base_url().'register_images/highschool_coach/small/'.$Result['High_ProfilePic'].'?='.time().' alt="">';
		
		
	}
	public function high_cover_image()
	{
		
		$Stu_ID=$this->highschool_coach_model->Cover_getStuID($this->session->userdata('MyRecuritID'));
		$this->highschool_coach_model->cover_image($Stu_ID['High_ID']);
		$Result=$this->highschool_coach_model->Cover_Profile($Stu_ID['High_ID']);
		
		echo '<img src="'.base_url().'register_images/highschool_coach/cover_small/'.$Result['High_CoverImage'].'?='.time().' alt="">';
		
		
	}
	
	public function teacher_profile_image()
	{
		$Teach_ID=$this->highschool_teacher_model->getAdmissionID($this->session->userdata('MyRecuritID'));
		$this->highschool_teacher_model->profile_image($Teach_ID['Teach_ID']);
		$Result=$this->highschool_teacher_model->Profile($Teach_ID['Teach_ID']);
		
		echo '<img src="'.base_url().'register_images/highschool_teacher/small/'.$Result['Teach_ProfilePic'].'?='.time().' alt="">';
	}
	
	public function teacher_cover_image()
	{
		
		$Stu_ID=$this->highschool_teacher_model->Cover_getStuID($this->session->userdata('MyRecuritID'));
		$this->highschool_teacher_model->cover_image($Stu_ID['Teach_ID']);
		$Result=$this->highschool_teacher_model->Cover_Profile($Stu_ID['Teach_ID']);
		
		echo '<img src="'.base_url().'register_images/highschool_teacher/cover_small/'.$Result['Teach_CoverImage'].'?='.time().' alt="">';
		
		
	}
	
	public function club_profile_image()
	{
		$Club_ID=$this->club_coach_model->getAdmissionID($this->session->userdata('MyRecuritID'));
		$this->club_coach_model->profile_image($Club_ID['Club_ID']);
		$Result=$this->club_coach_model->Profile($Club_ID['Club_ID']);
		
		echo '<img src="'.base_url().'register_images/club_coach/small/'.$Result['Club_ProfileImage'].'?='.time().' alt="">';
		
		
	}
	
	public function club_cover_image()
	{
		
		$Stu_ID=$this->club_coach_model->Cover_getStuID($this->session->userdata('MyRecuritID'));
		$this->club_coach_model->cover_image($Stu_ID['Club_ID']);
		$Result=$this->club_coach_model->Cover_Profile($Stu_ID['Club_ID']);
		
		echo '<img src="'.base_url().'register_images/club_coach/cover_small/'.$Result['Club_CoverImage'].'?='.time().' alt="">';
		
		
	}
	
	
	public function devel_profile_image()
	{
		$Devel_ID=$this->development_coach_model->getAdmissionID($this->session->userdata('MyRecuritID'));
		$this->development_coach_model->profile_image($Devel_ID['Devel_ID']);
		$Result=$this->development_coach_model->Profile($Devel_ID['Devel_ID']);
		
		echo '<img src="'.base_url().'register_images/developement_coach/small/'.$Result['Devel_ProfileImage'].'?='.time().' alt="">';
	}
	
	public function devel_cover_image()
	{
		
		$Stu_ID=$this->development_coach_model->Cover_getStuID($this->session->userdata('MyRecuritID'));
		$this->development_coach_model->cover_image($Stu_ID['Devel_ID']);
		$Result=$this->development_coach_model->Cover_Profile($Stu_ID['Devel_ID']);
		
		echo '<img src="'.base_url().'register_images/developement_coach/cover_small/'.$Result['Devel_CoverImage'].'?='.time().' alt="">';
		
		
	}
	
	
	public function acedmic_profile_image()
	{
		$Ac_ID=$this->academic_tutor_model->getAdmissionID($this->session->userdata('MyRecuritID'));
		$this->academic_tutor_model->profile_image($Ac_ID['Ac_ID']);
		$Result=$this->academic_tutor_model->Profile($Ac_ID['Ac_ID']);
		
		echo '<img src="'.base_url().'register_images/academic_tutor/small/'.$Result['Ac_ProfilePic'].'?='.time().' alt="">';
		
		
	}
	
	public function ac_cover_image()
	{
		
		$Stu_ID=$this->academic_tutor_model->Cover_getStuID($this->session->userdata('MyRecuritID'));
		$this->academic_tutor_model->cover_image($Stu_ID['Ac_ID']);
		$Result=$this->academic_tutor_model->Cover_Profile($Stu_ID['Ac_ID']);
		
		echo '<img src="'.base_url().'register_images/academic_tutor/cover_small/'.$Result['Ac_CoverImage'].'?='.time().' alt="">';
		
		
	}
	
	public function upload_video()
	{
		$UserID=$this->session->userdata('MyRecuritID'); 
		$Stu_info['Stu_VideoUrl']=$this->input->post('Stu_VideoURL');
		$update_file=array(
					'UserID'=>$UserID
				);			
		$this->general_model->update_data('student_athlete',$Stu_info,$update_file);	
		redirect(base_url().'dashboard');	
	}
	
	public function upload_video_juco()
	{
		$UserID=$this->session->userdata('MyRecuritID'); 
		$Stu_info['Juco_VideoURL']=$this->input->post('Juco_VideoURL');
		$update_file=array(
					'UserID'=>$UserID
				);			
		$this->general_model->update_data('juco_transfer',$Stu_info,$update_file);	
		redirect(base_url().'dashboard');	
	}
	public function upload_video_coach()
	{
		$UserID=$this->session->userdata('MyRecuritID'); 
		$Stu_info['Coach_VideoURL']=$this->input->post('Coach_VideoURL');
		$update_file=array(
					'UserID'=>$UserID
				);			
		$this->general_model->update_data('colleage_coach',$Stu_info,$update_file);	
		redirect(base_url().'dashboard');	
		
	}
	
	
	
}		
	

