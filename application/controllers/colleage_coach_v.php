<?php 
error_reporting(0);
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Colleage_coach_v extends CI_Controller {

	 public function __construct()
	 {   
	  parent::__construct();    
	  $this->load->model('general_model');
	  $this->load->model('popup_model');
	  $this->load->library('session');
error_reporting(0);
	 }

	public function index()
	{
error_reporting(0);


		if(isset($_GET['userid']))
		 {
		 	   
                        $UserID = $_GET['userid'];
			$User=get_user_detail($UserID);  

                        //print_r($userdata);
		if($User['UserType']=='3' && $User['Step']=='5')
		 { 
			 $column=array('Coach_SportID','Coach_University','Coach_CountryID','Coach_HeightID','Coach_HeightIntcheID','Coach_ProfileImage','Coach_VideoURL','Coach_DivisionID','Coach_Conferance','Coach_SeasonRecord','Coach_CareerRecord','Coach_CurrentProgramID','Coach_CoachAward','Coach_TeamID','Coach_PlayID','Coach_Program','Coach_CoverImage',' Coach_Position,Coach_State,Coach_City,Coach_Title');
			 error_reporting(0);
			$data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$UserID);
			$data['UserInfo']=$this->popup_model->get_bio_data('colleage_coach',$column,$UserID);
			$data['post_info']=$this->general_model->display_post();
			$data['category']=$this->general_model->get_table_data('category');
			error_reporting(0);
			$data['MainContent'] = $this->load->view('dashboard/college_coach_v',$data, true);
			error_reporting(0);
			$this->load->view('template', $data);	
			error_reporting(0);
		}
		else
		{
		redirect(base_url('home'));
		}
		 }


	}
}	