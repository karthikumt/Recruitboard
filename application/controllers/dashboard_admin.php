<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller {

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
	   $this->load->model('myrecruit_model');
	 	
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

	   	 redirect(base_url('dashboard_admin/upgrade_student'));	
	}

	public function upgrade_student()
	{
		$UserID=$this->session->userdata('MyRecuritID');
		$User=get_user_detail($UserID);
		if($UserID==201){
			if($_SERVER['REQUEST_METHOD']=='GET'){
				$column=array('UserID','Stu_SportID','Stu_PositionID','Stu_SchoolName','Stu_CountryID','Stu_HeightID','Stu_InchesID','Stu_ProfileImage','Stu_VideoURL','Stu_CoverImage','Stu_ZipCode','Stu_ClassID','Stu_WeightID','Stu_GenderID','Stu_State','Stu_City');
				$data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$UserID);
			    $data['UserInfo']=$this->popup_model->get_bio_data('student_athlete',$column,$UserID);
			    $data['post_info']=$this->general_model->display_post();
		        $data['MainContent'] = $this->load->view('dashboard_admin/upgrade_student',$data, true);
			    $this->load->view('template', $data);
			}else if(isset($_POST['email_id']) && isset($_POST['payment_type'])){
				$email_id = $_POST['email_id'];
		  		$payment_type = $_POST['payment_type'];
		  		$student = $this->general_model->get_single_data_by_column('user_register','UserEmail',$email_id);
		  		if($student==null || $payment_type==0){

		  		}else{
		  			$this->myrecruit_model->update_payment($email_id, $payment_type);
		  		}
			}
		}else{
			echo "You are not Authorized";die;
		}
	
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
	

