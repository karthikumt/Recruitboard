<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View_dashboard extends CI_Controller {
  
 public function __construct()
	 {   
	   parent::__construct();  
	   $this->load->library('session');		  
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
 	public function search()
 	{
		$id=$this->uri->segment(3); 
		$User_details=get_user_detail($id);
		$UserContent=array('UserID'=>$id,'UserType'=>$User_details['UserType']);
		$this->session->set_userdata('SearchID',$UserContent);
		if($User_details['UserType']==1)
		{
			redirect('View_dashboard/student_athlete');

		}	 
		if($User_details['UserType']==2)
		{
			redirect('View_dashboard/juco_transfer');
		}
		if($User_details['UserType']==3)
		{
			redirect('View_dashboard/colleage_coach');
		}
		if($User_details['UserType']==4)
		{
			redirect('View_dashboard/colleage_admission');
		}
		if($User_details['UserType']==5)
		{
			redirect('View_dashboard/high_school_coach');
		}
		if($User_details['UserType']==6)
		{
			redirect('View_dashboard/club_coach');
		}
		if($User_details['UserType']==7)
		{
			redirect('View_dashboard/high_school_teacher');
		}
		if($User_details['UserType']==8)
		{
			redirect('View_dashboard/developement_coach');
		}
		if($User_details['UserType']==9)
		{
			redirect('View_dashboard/acedmic_tutor');
		}



	 $data['MainContent'] = $this->load->view('dashboard/student_athlete',"", true);
     $this->load->view('template', $data);	
	}

	public function student_athlete()
	{
		$Userdata=$this->session->userdata('SearchID');
		$column=array('Stu_SportID','Stu_PositionID','Stu_SchoolName','Stu_CountryID','Stu_HeightID','Stu_InchesID','Stu_ProfileImage','Stu_VideoURL','Stu_CoverImage','Stu_ZipCode','Stu_ClassID','Stu_WeightID','Stu_GenderID');
		$data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$Userdata['UserID']);
	    $data['UserInfo']=$this->popup_model->get_bio_data('student_athlete',$column,$Userdata['UserID']);
	    $data['post_info']=$this->general_model->display_post();
        $data['coach_info']= $this->general_model->get_sport_data('coach','UserID',$Userdata['UserID']);
	    $data['category']=$this->general_model->get_table_data('category');
	    $data['MainContent'] = $this->load->view('dashboard/search',$data, true);
	    $this->load->view('template', $data);	
	}

	public function juco_transfer()
	{
		$Userdata=$this->session->userdata('SearchID');
		$column=array('Juco_SportID','Juco_PositionID','Juco_SchoolName','Juco_CountryID','Juco_HeightID','Juco_InchesID','Juco_ProfileImage','Juco_VideoURL','Juco_CoverImage','Juco_ZipCode','Juco_ClassID','Juco_WeightID','Juco_GenderID');
		$data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$Userdata['UserID']);
		$data['UserInfo']=$this->popup_model->get_bio_data('juco_transfer',$column,$Userdata['UserID']);
		$data['post_info']=$this->general_model->display_post();
		$data['coach_info']= $this->general_model->get_sport_data('coach','UserID',$Userdata['UserID']);
		$data['category']=$this->general_model->get_table_data('category');
		$data['MainContent'] = $this->load->view('dashboard/search',$data, true);
		$this->load->view('template', $data);	
	}

	public function colleage_coach()
	{
		$Userdata=$this->session->userdata('SearchID');
		$column=array('Coach_SportID','Coach_University','Coach_CountryID','Coach_HeightID','Coach_HeightIntcheID','Coach_ProfileImage','Coach_VideoURL','Coach_DivisionID','Coach_Conferance','Coach_SeasonRecord','Coach_CareerRecord','Coach_CurrentProgramID','Coach_CoachAward','Coach_TeamID','Coach_PlayID','Coach_Program');
		$data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$Userdata['UserID']);
		$data['UserInfo']=$this->popup_model->get_bio_data('colleage_coach',$column,$Userdata['UserID']);
		$data['post_info']=$this->general_model->display_post();
		$data['category']=$this->general_model->get_table_data('category');
		$data['MainContent'] = $this->load->view('dashboard/search',$data, true);
		$this->load->view('template', $data);	

	}

	public function colleage_admission()
	{
		
		$Userdata=$this->session->userdata('SearchID');
		$column=array('Coll_Tution','Coll_Enroll','Coll_AcceptRateID','Coll_SettingID','Coll_AvgTestScoreID','Coll_AvgStuGpaID','Coll_GraduationRateID','Coll_AvgFinancialAid','Coll_VideoUrl','Coll_CountryID','Coll_University','Coll_SchoolWeb','Coll_ProfilePic');
		$data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$Userdata['UserID']);
		$data['UserInfo']=$this->popup_model->get_bio_data('colleage_admission',$column,$Userdata['UserID']);
		$data['post_info']=$this->general_model->display_post();
		$data['category']=$this->general_model->get_table_data('category');
		$data['MainContent'] = $this->load->view('dashboard/search',$data, true);
		$this->load->view('template', $data);	

	}

	public function high_school_coach()
	{
		$Userdata=$this->session->userdata('SearchID');
		$column=array('High_School','High_CountryID','High_GenderCoachID','High_SportID','High_Title','High_ProfilePic','High_Conference','High_Team','HIgh_VideoUrl','High_ProUnique','High_Division');
		$data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$Userdata['UserID']);
		$data['UserInfo']=$this->popup_model->get_bio_data('highschool_coach',$column,$Userdata['UserID']);
		$data['post_info']=$this->general_model->display_post();
		$data['category']=$this->general_model->get_table_data('category');
		$data['MainContent'] = $this->load->view('dashboard/search',$data, true);
		$this->load->view('template', $data);	

	}

	public function club_coach()
	{
		$Userdata=$this->session->userdata('SearchID');
		$column=array('Club_Organization','Club_Team','Club_CountryID','Club_AgeGroup','Club_SportID','Club_ProfileImage','Club_Website','Club_TeamRecord','Club_Data','Club_VideoURL');
		$data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$Userdata['UserID']);
		$data['UserInfo']=$this->popup_model->get_bio_data('club_coach',$column,$Userdata['UserID']);
		$data['post_info']=$this->general_model->display_post();
		$data['category']=$this->general_model->get_table_data('category');
		$data['MainContent'] = $this->load->view('dashboard/search',$data, true);
		$this->load->view('template', $data);	

	}
	
	public function high_school_teacher()
	{
		$Userdata=$this->session->userdata('SearchID');
		$column=array('Teach_School','Teach_PhoneNo','Teach_CountryID','Teach_ProfilePic','Teach_VideoUrl','Teach_SchoolUnique');
		$data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$Userdata['UserID']);
		$data['UserInfo']=$this->popup_model->get_bio_data('highschool_teacher',$column,$Userdata['UserID']);
		$data['post_info']=$this->general_model->display_post();
		$data['category']=$this->general_model->get_table_data('category');
		$data['MainContent'] = $this->load->view('dashboard/search',$data, true);
		$this->load->view('template', $data);	

	}
	public function developement_coach()
	{
		$Userdata=$this->session->userdata('SearchID');
		$column=array('Devel_CountryID','Devel_Phone','Devel_ProfileImage','Devel_Qualification','Devel_VideoURL','Devel_Service','Devel_Website','Devel_Attend');
		$data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$Userdata['UserID']);
		$data['UserInfo']=$this->popup_model->get_bio_data('developement_coach',$column,$Userdata['UserID']);
		$data['post_info']=$this->general_model->display_post();
		$data['category']=$this->general_model->get_table_data('category');
		$data['MainContent'] = $this->load->view('dashboard/search',$data, true);
		$this->load->view('template', $data);	

	}

	public function acedmic_tutor()
	{
		$Userdata=$this->session->userdata('SearchID');
		$column=array('Ac_BusinessName','Ac_Title','Ac_CountryID','Ac_PhoneNo','Ac_ClgAttend','Ac_Qualification','Ac_BusinessUnique','Ac_Website','Ac_VideoUrl','Ac_ProfilePic');
		$data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$Userdata['UserID']);
		$data['UserInfo']=$this->popup_model->get_bio_data('academic_tutor',$column,$Userdata['UserID']);
		$data['post_info']=$this->general_model->display_post();
		$data['category']=$this->general_model->get_table_data('category');
		$data['MainContent'] = $this->load->view('dashboard/search',$data, true);
		$this->load->view('template', $data);	

	}
	
	public function getAcedmic()
	{
		$UserID=$this->session->userdata('SearchID');
		 
		$User=get_user_detail($UserID['UserID']);  
		$bio_info;
		if($UserID['UserType']=='1')
		 {  
		  $colunm=array('Stu_Act_Player','Stu_Act_HighSchool','Stu_Act_City','Stu_Act_State','Stu_Act_Class','Stu_Act_ActScore','Stu_Act_SatScore','Stu_Act_Gpa','Stu_Act_CoreGpa','Stu_Act_Arts','Stu_Act_Religion','Stu_Act_Clubs','Stu_Act_Community','Stu_Act_Goverment','Stu_Act_Media','Stu_Act_Military','Stu_Act_Music','Stu_Act_Other','Stu_Act_ImageName','Stu_Act_TofelScoreID','Stu_Act_ReadID','Stu_Act_ListenID','Stu_Act_SpeakID','Stu_Act_WriteID','Stu_Act_YearSpeakID','Stu_Act_YearReadID','Stu_Act_YearWriteID','Stu_Act_WesID','Stu_Act_GuName','Stu_Act_GuEmail','Stu_Act_Honors','Stu_Act_Post','Stu_Act_ApCourses','Stu_Act_Languages','Stu_Act_Ncaa','Stu_Act_Naia','Stu_Act_IntendedID','Stu_Act_MajorID');
		 $data['bio_info']=$this->popup_model->get_bio_data('student_athlete',$colunm,$UserID['UserID']);
		 echo $this->load->view('dashboard/stu_acedmic',$data,true);
		 }	
		if($UserID['UserType']=='2')
		{
			$colunm=array('Juco_Act_Player','Juco_Act_HighSchool','Juco_Act_City','Juco_Act_State','Juco_Act_Class','Juco_Act_ActScore','Juco_Act_SatScore','Juco_Act_Gpa','Juco_Act_CoreGpa','Juco_Act_Arts','Juco_Act_Religion','Juco_Act_Clubs','Juco_Act_Community','Juco_Act_Goverment','Juco_Act_Media','Juco_Act_Military','Juco_Act_Music','Juco_Act_Other','Juco_Act_ImageName','Juco_Act_TofelScoreID','Juco_Act_ReadID','Juco_Act_ListenID','Juco_Act_SpeakID','Juco_Act_WriteID','Juco_Act_YearSpeakID','Juco_Act_YearReadID','Juco_Act_YearWriteID','Juco_Act_WesID','Juco_Act_GuName','Juco_Act_GuEmail','Juco_Act_Honors','Juco_Act_Post','Juco_Act_ApCourses','Juco_Act_Languages','Juco_Act_Ncaa','Juco_Act_Naia','Juco_Act_IntendedID','Juco_Act_MajorID');
		  $data['bio_info']=$this->popup_model->get_bio_data('juco_transfer',$colunm,$UserID['UserID']);
		  echo $this->load->view('dashboard/juco_acedmic',$data,true);	
		}
	}
	
	public function getBiometric()
	{
		$UserID=$this->session->userdata('SearchID');
		 
		$User=get_user_detail($UserID['UserID']);  
		$bio_info;
	
		if($UserID['UserType']=='1')
		 {  
		  $colunm=array('Stu_Ins_Player','Stu_Ins_HighSchool','Stu_Ins_City','Stu_Ins_State','Stu_Ins_Class','Stu_Ins_Weight','Stu_Ins_HeightWithout','Stu_Ins_HeightWith','Stu_Ins_HeightIncheWithoutID','Stu_Ins_HeightIncheWithID','Stu_Ins_WingSpan','Stu_Ins_WingSpanIncheID','Stu_Ins_HandWidth','Stu_Ins_HandWidthIncheID','Stu_Ins_HandLength','Stu_Ins_HandLengthIncheID','Stu_Ins_DominantHand','Stu_Ins_DominantLeg','Stu_Ins_BodyMass','Stu_Ins_ImageName','Stu_Ins_PushUp','Stu_Ins_SitUp','Stu_Ins_PullUp','Stu_Ins_Vertical','Stu_Ins_VerticalIncheID','Stu_Ins_Standing','Stu_Ins_StandIncheingID','Stu_Ins_PowerClean','Stu_Ins_Bench','Stu_Ins_Squal','Stu_Ins_Sit','Stu_Ins_Reach','Stu_Ins_Back','Stu_Ins_BackScratch','Stu_Ins_Yard','Stu_Ins_YardIncheID','Stu_Ins_YardDash','Stu_Ins_YardDashIncheID','Stu_Ins_Mile','Stu_Ins_MileIncheRunID');
		  //$bio_info=$this->popup_model->get_bio_data('student_athlete',$colunm,$UserID);
		  $data['bio_info']=$this->popup_model->get_bio_data('student_athlete',$colunm,$UserID['UserID']);
		  echo $this->load->view('dashboard/stu_biometric',$data,true);
		 
		 }
		 
		if($UserID['UserType']=='2')
		{
		  $colunm=array('Juco_Ins_Player','Juco_Ins_HighSchool','Juco_Ins_City','Juco_Ins_State','Juco_Ins_Class','Juco_Ins_Weight','Juco_Ins_HeightWithout','Juco_Ins_HeightWith','Juco_Ins_HeightIncheWithoutID','Juco_Ins_HeightIncheWithID','Juco_Ins_WingSpan','Juco_Ins_WingSpanIncheID','Juco_Ins_HandWidth','Juco_Ins_HandWidthIncheID','Juco_Ins_HandLength','Juco_Ins_HandLengthIncheID','Juco_Ins_DominantHand','Juco_Ins_DominantLeg','Juco_Ins_BodyMass','Juco_Ins_ImageName','Juco_Ins_PushUp','Juco_Ins_SitUp','Juco_Ins_PullUp','Juco_Ins_Vertical','Juco_Ins_VerticalIncheID','Juco_Ins_Standing','Juco_Ins_StandIncheingID','Juco_Ins_PowerClean','Juco_Ins_Bench','Juco_Ins_Squal','Juco_Ins_Sit','Juco_Ins_Reach','Juco_Ins_Back','Juco_Ins_BackScratch','Juco_Ins_Yard','Juco_Ins_YardIncheID','Juco_Ins_YardDash','Juco_Ins_YardDashIncheID','Juco_Ins_Mile','Juco_Ins_MileIncheRunID');
		  $data['bio_info']=$this->popup_model->get_bio_data('juco_transfer',$colunm,$UserID['UserID']);
		  echo $this->load->view('dashboard/juco_biometric',$data,true);		
		}
			
	}
	
	public function getSports()
	{
		$UserID=$this->session->userdata('SearchID');
		
		if($UserID['UserType']==1){
				$SportID = get_sport_detail($UserID['UserID']);
				$this->session->set_userdata('Stu_SportID',$SportID['Stu_SportID']);
				$str='Stu';	
			}
			if($UserID['UserType']==2){
				$SportID = get_juco_detail($UserID['UserID']);
				$this->session->set_userdata('Juco_SportID',$SportID['Juco_SportID']);	
				$str='Juco';
			}
		
		
		if(!empty($SportID))
		{
			if($SportID[''.$str.'_SportID']=='28')
			{
				redirect(base_url().'search_sports/baseball');	
			}
			else if($SportID[''.$str.'_SportID']=='29')
			{
				redirect(base_url().'search_sports/basketball');	
			}
			else if($SportID[''.$str.'_SportID']=='30')
			{
				redirect(base_url().'search_sports/bowling');	
			}
			else if($SportID[''.$str.'_SportID']=='31')
			{
				redirect(base_url().'search_sports/cheerleading');	
			}
			else if($SportID[''.$str.'_SportID']=='32')
			{
				redirect(base_url().'search_sports/crew');	
			}
			else if($SportID[''.$str.'_SportID']=='33')
			{
				redirect(base_url().'search_sports/cross_country');	
			}
			else if($SportID[''.$str.'_SportID']=='34')
			{
				redirect(base_url().'search_sports/dance_team');	
			}
			else if($SportID[''.$str.'_SportID']=='35')
			{
				redirect(base_url().'search_sports/fencing');	
			}
			else if($SportID[''.$str.'_SportID']=='36')
			{
				redirect(base_url().'search_sports/field_hockey');	
			}
			else if($SportID[''.$str.'_SportID']=='37')
			{
				redirect(base_url().'search_sports/football');	
			}
			
			else if($SportID[''.$str.'_SportID']=='38')
			{
				redirect(base_url().'search_sports/golf');	
			}
			else if($SportID[''.$str.'_SportID']=='39')
			{
				redirect(base_url().'search_sports/mens_gymnastics');	
			}
			else if($SportID[''.$str.'_SportID']=='40')
			{
				redirect(base_url().'search_sports/ice_hockey');	
			}
			else if($SportID[''.$str.'_SportID']=='41')
			{
				redirect(base_url().'search_sports/indor_track');	
			}
			else if($SportID[''.$str.'_SportID']=='42')
			{
				redirect(base_url().'search_sports/lacrosse');	
			}
			else if($SportID[''.$str.'_SportID']=='43')
			{
				redirect(base_url().'search_sports/rifle');	
			}
			else if($SportID[''.$str.'_SportID']=='44')
			{
				redirect(base_url().'search_sports/rugby');	
			}
			else if($SportID[''.$str.'_SportID']=='45')
			{
				redirect(base_url().'search_sports/skiing');	
			}
			else if($SportID[''.$str.'_SportID']=='46')
			{
				redirect(base_url().'search_sports/soccer');	
			}
			else if($SportID[''.$str.'_SportID']=='47')
			{
				redirect(base_url().'search_sports/softball');	
			}
			else if($SportID[''.$str.'_SportID']=='48')
			{
				redirect(base_url().'search_sports/swimming');	
			}
			else if($SportID[''.$str.'_SportID']=='49')
			{
				redirect(base_url().'search_sports/tennis');	
			}
			else if($SportID[''.$str.'_SportID']=='50')
			{
				redirect(base_url().'search_sports/track');	
			}
			else if($SportID[''.$str.'_SportID']=='51')
			{
				redirect(base_url().'search_sports/volleyball');	
			}
			else if($SportID[''.$str.'_SportID']=='52')
			{
				redirect(base_url().'search_sports/water_polo');	
			}
			else if($SportID[''.$str.'_SportID']=='53')
			{
				redirect(base_url().'search_sports/wrestling');	
			}
			else if($SportID[''.$str.'_SportID']=='54')
			{
				redirect(base_url().'search_sports/womens_gymnastics');	
			}
			else if($SportID[''.$str.'_SportID']=='55')
			{
				redirect(base_url().'search_sports/rowing');	
			}
			
			else{
			
			redirect(base_url('search_sports'));
			}
			
		}
		else{
		$this->session->set_flashdata('errormessa','Invalid User Details.');
		redirect(base_url('search_sports'));
		}	

	
	}
	
}		