<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_athlete_v extends CI_Controller {

	 public function __construct()
	 {   
	  parent::__construct();    
	  $this->load->model('general_model');
	  $this->load->model('popup_model');
	  $this->load->library('session');

	 }

	public function index()
	{



		if(isset($_GET['userid']))
		 {
		 	//$LoginCheck = $this->general_model->check_email_and_get_data();

		 	//$this->session->set_userdata('MyRecuritID',$LoginCheck['UserID']);

		 	//$UserID=$this->session->userdata('MyRecuritID'); 
		 	$UserID = $_GET['userid'];
			$User=get_user_detail($UserID);  

	
		if($User['UserType']=='1' && $User['Step']=='11')
		 {
		 
                    $column=array('UserID','Stu_SportID','Stu_PositionID','Stu_SchoolName','Stu_CountryID','Stu_HeightID','Stu_InchesID','Stu_ProfileImage','Stu_VideoURL','Stu_CoverImage','Stu_ZipCode','Stu_ClassID','Stu_WeightID','Stu_GenderID','Stu_State','Stu_City');
                    $data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$UserID);
                    $data['UserInfo']=$this->popup_model->get_bio_data('student_athlete',$column,$UserID);
                    $data['post_info']=$this->general_model->display_post();
                    $data['coach_info']= $this->general_model->get_sport_data('coach','UserID',$UserID);
                    $data['category']=$this->general_model->get_table_data('category');
                    $data['MainContent'] = $this->load->view('dashboard/student_athlete_v',$data, true);
                    $this->load->view('template', $data);	
	    
	  // $this->session->unset_userdata('MyRecuritID');	
		}
		else
		{
		redirect(base_url('home'));
		}
		 }


	}
}	