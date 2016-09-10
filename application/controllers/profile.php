<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once APPPATH.'libraries/password.php';

class Profile extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('general_model');
		$this->load->model('profile_model');
		$this->load->model('student_athlete_model');
		$this->load->model('juco_transfer_model');
		
		$this->load->library('session');			
	}
	
	public function index(){
		 $UserID=$this->session->userdata('MyRecuritID'); 
		 if($UserID=="")
		 {
			redirect(base_url());	 
		 }
		 $User=get_profile_detail($UserID);
		 if($User['UserType']=='1')
		 {
			$data['UserData']=$User;
			$data['Profile']=$this->profile_model->student_profile($UserID);
			$data['MainContent'] = $this->load->view('profile/student_athlete',$data, true);
	    	$this->load->view('template', $data);	
		 }
		 if($User['UserType']=='2')
		 {
			$data['UserData']=$User;
			$data['Profile']=$this->profile_model->juco_transfer($UserID);
			$data['MainContent'] = $this->load->view('profile/juco_transfer',$data, true);
	    	$this->load->view('template', $data);	
		 }
		
		 if($User['UserType']=='3')
		 {
			$data['UserData']=$User;
			$data['Profile']=$this->profile_model->colleage_coach($UserID);
			$data['MainContent'] = $this->load->view('profile/colleage_coach',$data, true);
	    	$this->load->view('template', $data);	
		 }
		 
        
	}
	
	public function update_profile_student()
	{
		$UserID=$this->session->userdata('MyRecuritID');
		$User['FirstName']=$this->input->post('FirstName');
		$User['LastName']=$this->input->post('LastName');
	
		$Stu_info['Stu_GenderID']=$this->input->post('Stu_GenderID');
		$Stu_info['Stu_CountryID']=$this->input->post('Stu_CountryID');
		$Stu_info['Stu_State']=$this->input->post('Stu_State');
		$Stu_info['Stu_City']=$this->input->post('Stu_City');
		
		$Stu_info['Stu_SchoolName']=$this->input->post('Stu_SchoolName');
		$Stu_info['Stu_ZipCode']=$this->input->post('Stu_ZipCode');
		$Stu_info['Stu_ClassID']=$this->input->post('Stu_ClassID');
		$Stu_info['Stu_HeightID']=$this->input->post('Stu_HeightID');
		$Stu_info['Stu_InchesID']=$this->input->post('Stu_InchesID');
		$Stu_info['Stu_WeightID']=$this->input->post('Stu_WeightID');
		
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
		
		
		if($Stu_info['Stu_GenderID']!='0' && $Stu_info['Stu_CountryID']!='0' && $Stu_info['Stu_SchoolName']!=""  && $User['FirstName']!="" && $User['LastName']!=""  && $Stu_info['Stu_ZipCode']!="" && $Stu_info['Stu_HeightID']!='0'  && $Stu_info['Stu_ClassID']!='0'  && $Stu_info['Stu_InchesID']!='0'  && $Stu_info['Stu_WeightID']!='0' && $Stu_info['Stu_Ins_Player']!='' && $Stu_info['Stu_Ins_HighSchool']!='' && $Stu_info['Stu_Ins_City']!='' && $Stu_info['Stu_Ins_City']!='' && $Stu_info['Stu_Ins_Class']!='' && $Stu_info['Stu_Ins_Weight']!='0' && $Stu_info['Stu_Ins_MileIncheRunID']!='0' && $Stu_info['Stu_Ins_Mile']!='0'&& $Stu_info['Stu_Ins_YardIncheID']!='0'&& $Stu_info['Stu_Ins_Yard']!='0' && $Stu_info['Stu_Ins_DominantLeg']!='0'&& $Stu_info['Stu_Ins_DominantHand']!='0' && $Stu_info['Stu_Ins_HeightWith']!='0'&& $Stu_info['Stu_Ins_HeightWithout']!='0'&& $Stu_info['Stu_Ins_HeightWith']!='0'&& $Stu_info['Stu_Ins_HeightIncheWithoutID']!='0' && $Stu_info['Stu_VerticalIncheID']!='0'&& $Stu_info['Stu_Ins_Vertical']!='0' && $Stu_info['Stu_Act_Player']!='' && $Stu_info['Stu_Act_HighSchool']!=''&& $Stu_info['Stu_Act_City']!='' && $Stu_info['Stu_Act_State']!='' && $Stu_info['Stu_State']!='0' && $Stu_info['Stu_City'] !='' ){
		
				if($this->input->post('UserPassword')!="")
				{
					 $User['Password']=password_hash($this->input->post('UserPassword'), PASSWORD_DEFAULT);	
				}
		
				
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('student_athlete',$Stu_info,$update_file);	
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));
				
				
				$Stu_Act_Image = $_FILES['Stu_Act_ImageName']['name'];
				
				if($Stu_Act_Image!="")
				{
					$this->student_athlete_model->Stu_Act_Image($UserID);
				}
				
				$Stu_PitchImageName = $_FILES['Stu_Ins_ImageName']['name'];
				
				if($Stu_PitchImageName!="")
				{
					$this->student_athlete_model->Stu_Ins_Image($UserID);
				}
					
				$this->session->set_flashdata('successmessage','Your Profile Successfully Updated.');
				redirect(base_url().'profile');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'profile');	
		}	
	}
	
	
	public function update_profile_juco()
	{
		$UserID=$this->session->userdata('MyRecuritID');
		$User['FirstName']=$this->input->post('FirstName');
		$User['LastName']=$this->input->post('LastName');
	
		$Juco_info['Juco_GenderID']=$this->input->post('Juco_GenderID');
		$Juco_info['Juco_CountryID']=$this->input->post('Juco_CountryID');
		$Juco_info['Juco_State']=$this->input->post('Juco_State');
		$Juco_info['Juco_City']=$this->input->post('Juco_City');
		
		
		$Juco_info['Juco_SchoolName']=$this->input->post('Juco_SchoolName');
		$Juco_info['Juco_ZipCode']=$this->input->post('Juco_ZipCode');
		$Juco_info['Juco_ClassID']=$this->input->post('Juco_ClassID');
		$Juco_info['Juco_HeightID']=$this->input->post('Juco_HeightID');
		$Juco_info['Juco_InchesID']=$this->input->post('Juco_InchesID');
		$Juco_info['Juco_WeightID']=$this->input->post('Juco_WeightID');
		
		
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
		$Juco_info['Juco_Ins_HeightWithout']=$this->input->post('Juco_Ins_HeightWithout');
		
		
		$Juco_info['Juco_Ins_Bench']=$this->input->post('Juco_Ins_Bench');
		$Juco_info['Juco_Ins_Squal']=$this->input->post('Juco_Ins_Squal');
		$Juco_info['Juco_Ins_Sit']=$this->input->post('Juco_Ins_Sit');
		$Juco_info['Juco_Ins_BackScratch']=$this->input->post('Juco_Ins_BackScratch');
		$Juco_info['Juco_Ins_Yard']=$this->input->post('Juco_Ins_Yard');
		$Juco_info['Juco_Ins_YardDash']=$this->input->post('Juco_Ins_YardDash');
		$Juco_info['Juco_Ins_Mile']=$this->input->post('Juco_Ins_Mile');
		
		
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
		$Juco_info['Juco_Ins_Back']=$this->input->post('Juco_Ins_Back');
		$Juco_info['Juco_Ins_Reach']=$this->input->post('Juco_Ins_Reach');
		
		
		
		if($Juco_info['Juco_GenderID']!='0' && $Juco_info['Juco_CountryID']!='0' && $Juco_info['Juco_SchoolName']!=""  && $User['FirstName']!="" && $User['LastName']!=""  && $Juco_info['Juco_ZipCode']!="" && $Juco_info['Juco_HeightID']!='0'  && $Juco_info['Juco_ClassID']!='0'  && $Juco_info['Juco_InchesID']!='0'  && $Juco_info['Juco_WeightID']!='0'  && $Juco_info['Juco_Ins_Player']!='' && $Juco_info['Juco_Ins_HighSchool']!='' && $Juco_info['Juco_Ins_City']!='' && $Juco_info['Juco_Ins_City']!='' && $Juco_info['Juco_Ins_Class']!='' && $Juco_info['Juco_Ins_Weight']!='0' && $Juco_info['Juco_Ins_MileIncheRunID']!='0' && $Juco_info['Juco_Ins_Mile']!='0'&& $Juco_info['Juco_Ins_YardIncheID']!='0'&& $Juco_info['Juco_Ins_Yard']!='0' && $Juco_info['Juco_Ins_DominantLeg']!='0'&& $Juco_info['Juco_Ins_DominantHand']!='0' && $Juco_info['Juco_Ins_HeightWith']!='0'&& $Juco_info['Juco_Ins_HeightWithout']!='0'&& $Juco_info['Juco_Ins_HeightWith']!='0'&& $Juco_info['Juco_Ins_HeightIncheWithoutID']!='0' && $Juco_info['Juco_VerticalIncheID']!='0'&& $Juco_info['Juco_Ins_Vertical']!='0' && $Juco_info['Juco_Act_Player']!='' && $Juco_info['Juco_Act_HighSchool']!=''&& $Juco_info['Juco_Act_City']!='' && $Juco_info['Juco_Act_State']!='' && $Juco_info['Juco_State']!='0' && $Juco_info['Juco_City'] !='' ){
		
				if($this->input->post('UserPassword')!="")
				{
					 $User['Password']=password_hash($this->input->post('UserPassword'), PASSWORD_DEFAULT);	
				}
		
				
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('juco_transfer',$Juco_info,$update_file);	
				
				$Juco_Act_Image = $_FILES['Juco_Act_ImageName']['name'];
				
				if($Juco_Act_Image!="")
				{
					$this->juco_transfer_model->Juco_Act_Image($UserID);
				}
				
				$Juco_PitchImageName = $_FILES['Juco_Ins_ImageName']['name'];
				
				if($Juco_PitchImageName!="")
				{
					$this->juco_transfer_model->Juco_Ins_Image($UserID);
				}
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Your Profile Successfully Updated.');
				redirect(base_url().'profile');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'profile');	
		}	
	}
	
	
	public function update_profile_coll_coach()
	{
		
		$UserID=$this->session->userdata('MyRecuritID');
		$User['FirstName']=$this->input->post('FirstName');
		$User['LastName']=$this->input->post('LastName');
	
		$Coach_info['Coach_Title']=$this->input->post('Coach_Title');
		$Coach_info['Coach_University']=$this->input->post('Coach_University');
		$Coach_info['Coach_CountryID']=$this->input->post('Coach_CountryID');
		$Coach_info['Coach_State']=$this->input->post('Coach_State');
		$Coach_info['Coach_City']=$this->input->post('Coach_City');
		$Coach_info['Coach_Zip']=$this->input->post('Coach_Zip');
		$Coach_info['Coach_GenderID']=$this->input->post('Coach_GenderID');
		$Coach_info['Coach_SportID']=$this->input->post('Coach_SportID');
		
		$Coach_info['Coach_DivisionID']=$this->input->post('Coach_DivisionID');
		$Coach_info['Coach_Conferance']=$this->input->post('Coach_Conferance');
		$Coach_info['Coach_SeasonRecord']=$this->input->post('Coach_SeasonRecord');
		$Coach_info['Coach_CareerRecord']=$this->input->post('Coach_CareerRecord');
		$Coach_info['Coach_CurrentProgramID']=$this->input->post('Coach_CurrentProgramID');
		$Coach_info['Coach_PlayID']=$this->input->post('Coach_PlayID');
		$Coach_info['Coach_TeamID']=$this->input->post('Coach_TeamID');
		$Coach_info['Coach_CoachAward']=$this->input->post('Coach_CoachAward');
		
		if(/*$Coach_info['Coach_CountryID']!='0' && */$Coach_info['Coach_State']!='0' && $Coach_info['Coach_City']!=""  && $User['FirstName']!="" && $User['LastName']!=""  && $Coach_info['Coach_Zip']!="" && $Coach_info['Coach_GenderID']!='0'  && $Coach_info['Coach_SportID']!='0'  && $Coach_info['Coach_DivisionID']!='0'  /*&& $Coach_info['Coach_CurrentProgramID']!='0' && $Coach_info['Coach_TeamID']!='' && $Coach_info['Coach_PlayID']!='0'*/){
		
				if($this->input->post('UserPassword')!="")
				{
					 $User['Password']=password_hash($this->input->post('UserPassword'), PASSWORD_DEFAULT);	
				}
		
				
				$update_file=array(
							'UserID'=>$UserID
						);			
				$Coach_ID=$this->general_model->update_data('colleage_coach',$Coach_info,$update_file);	
				
				$Post_ID=$this->general_model->update_data('coach_post_ads',array('Po_GenderID'=>$this->input->post('Coach_GenderID')),$update_file);	
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Your Profile Successfully Updated.');
				redirect(base_url().'profile');
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'profile');	
		}	
		
	}
	
	
	

		
}

