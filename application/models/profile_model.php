<?php
include_once APPPATH.'libraries/password.php';
class Profile_model extends CI_Model {

	public function __construct()
	{		
		parent::__construct();				
		//$this->load->library('upload');
		$this->load->library('email');
		$this->load->library('image_lib');	
	
	}

	 public function student_profile($UserID)
	 {
		$this->db->select('Stu_GpaID,UserID,Stu_SportID,Stu_PositionID,Stu_GenderID, Stu_SchoolName, Stu_CountryID,Stu_ZipCode,Stu_ClassID,Stu_HeightID,Stu_InchesID,Stu_WeightID,Stu_Act_Player,Stu_Act_HighSchool,Stu_Act_City,Stu_Act_State,Stu_Act_Class,Stu_Act_ActScore,Stu_Act_SatScore,Stu_Act_Gpa,Stu_Act_CoreGpa,Stu_Act_GuName,Stu_Act_GuEmail,Stu_Act_Arts,Stu_Act_Religion,Stu_Act_Clubs,Stu_Act_Community,Stu_Act_Goverment,Stu_Act_Media,Stu_Act_Military,Stu_Act_Music,Stu_Act_TofelScoreID,Stu_Act_ReadID,Stu_Act_ListenID,Stu_Act_SpeakID,Stu_Act_WriteID,Stu_Act_YearSpeakID,Stu_Act_YearReadID,Stu_Act_YearWriteID,Stu_Act_Other,Stu_Act_WesID,Stu_Act_Honors,Stu_Act_Post,Stu_Act_Languages,Stu_Act_ApCourses,Stu_Act_Ncaa,Stu_Act_Naia,Stu_Act_IntendedID,Stu_Act_MajorID,Stu_Act_ImageName,Stu_Ins_Player,Stu_Ins_HighSchool,Stu_Ins_City,Stu_Ins_State,Stu_Ins_Class,Stu_Ins_Weight,Stu_Ins_HeightWithout,Stu_Ins_HeightWith,Stu_Ins_HeightIncheWithoutID,Stu_Ins_HeightIncheWithID,Stu_Ins_WingSpan,Stu_Ins_WingSpanIncheID,Stu_Ins_HandWidth,Stu_Ins_HandWidthIncheID,Stu_Ins_HandLength,Stu_Ins_HandLengthIncheID,Stu_Ins_DominantHand,Stu_Ins_DominantLeg,Stu_Ins_BodyMass,Stu_Ins_ImageName,Stu_Ins_PushUp,Stu_Ins_SitUp,Stu_Ins_PullUp,Stu_Ins_Vertical,Stu_Ins_VerticalIncheID,Stu_Ins_Standing,Stu_Ins_StandIncheingID,Stu_Ins_PowerClean,Stu_Ins_Bench,Stu_Ins_Squal,Stu_Ins_Sit,Stu_Ins_Reach,Stu_Ins_Back,Stu_Ins_BackScratch,Stu_Ins_Yard,Stu_Ins_YardIncheID,Stu_Ins_YardDash,Stu_Ins_YardDashIncheID,Stu_Ins_Mile,Stu_Ins_MileIncheRunID,Stu_Ins_ImageName,Stu_State,Stu_City');
		$query=$this->db->get_where('student_athlete', array('UserID' => $UserID))->row_array(); 
	 	return $query;
	 }
	  public function juco_transfer($UserID)
	 {
		$this->db->select('Juco_PositionID,Juco_SportID,UserID,Juco_GenderID, Juco_SchoolName, Juco_CountryID,Juco_ZipCode,Juco_ClassID,Juco_HeightID,Juco_InchesID,Juco_WeightID,Juco_Act_Player,Juco_Act_HighSchool,Juco_Act_City,Juco_Act_State,Juco_Act_Class,Juco_Act_ActScore,Juco_Act_SatScore,Juco_Act_Gpa,Juco_Act_CoreGpa,Juco_Act_GuName,Juco_Act_GuEmail,Juco_Act_Arts,Juco_Act_Religion,Juco_Act_Clubs,Juco_Act_Community,Juco_Act_Goverment,Juco_Act_Media,Juco_Act_Military,Juco_Act_Music,Juco_Act_TofelScoreID,Juco_Act_ReadID,Juco_Act_ListenID,Juco_Act_SpeakID,Juco_Act_WriteID,Juco_Act_YearSpeakID,Juco_Act_YearReadID,Juco_Act_YearWriteID,Juco_Act_Other,Juco_Act_WesID,Juco_Act_Honors,Juco_Act_Post,Juco_Act_Languages,Juco_Act_ApCourses,Juco_Act_Ncaa,Juco_Act_Naia,Juco_Act_IntendedID,Juco_Act_MajorID,Juco_Act_ImageName,Juco_Ins_Player,Juco_Ins_HighSchool,Juco_Ins_City,Juco_Ins_State,Juco_Ins_Class,Juco_Ins_Weight,Juco_Ins_HeightWithout,Juco_Ins_HeightWith,Juco_Ins_HeightIncheWithoutID,Juco_Ins_HeightIncheWithID,Juco_Ins_WingSpan,Juco_Ins_WingSpanIncheID,Juco_Ins_HandWidth,Juco_Ins_HandWidthIncheID,Juco_Ins_HandLength,Juco_Ins_HandLengthIncheID,Juco_Ins_DominantHand,Juco_Ins_DominantLeg,Juco_Ins_BodyMass,Juco_Ins_ImageName,Juco_Ins_PushUp,Juco_Ins_SitUp,Juco_Ins_PullUp,Juco_Ins_Vertical,Juco_Ins_VerticalIncheID,Juco_Ins_Standing,Juco_Ins_StandIncheingID,Juco_Ins_PowerClean,Juco_Ins_Bench,Juco_Ins_Squal,Juco_Ins_Sit,Juco_Ins_Reach,Juco_Ins_Back,Juco_Ins_BackScratch,Juco_Ins_Yard,Juco_Ins_YardIncheID,Juco_Ins_YardDash,Juco_Ins_YardDashIncheID,Juco_Ins_Mile,Juco_Ins_MileIncheRunID,Juco_Ins_ImageName,Juco_State,Juco_City');
		$query=$this->db->get_where('juco_transfer', array('UserID' => $UserID))->row_array(); 
	 	return $query;
	 }
	 
	 public function colleage_coach($UserID)
	 {
		 $this->db->select('Coach_Title, Coach_University, Coach_CountryID,Coach_Zip,Coach_GenderID,Coach_SportID ,Coach_DivisionID,Coach_Conferance,Coach_SeasonRecord,Coach_CareerRecord,Coach_CurrentProgramID,Coach_TeamID,Coach_CoachAward,Coach_State,Coach_City,Coach_PlayID');
		$query=$this->db->get_where('colleage_coach', array('UserID' => $UserID))->row_array(); 
	 	return $query;
		 
	 }
	 
	
}	