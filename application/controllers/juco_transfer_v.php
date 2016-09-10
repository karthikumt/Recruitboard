<?php 
include_once APPPATH.'libraries/password.php';
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class juco_transfer_v extends CI_Controller {
  
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

	
		if($User['UserType']=='2')
		 {
		 
                    $column=array('Juco_City','UserID','Juco_ProfileImage','Juco_GenderID','Juco_SportID','Juco_PositionID','Juco_SchoolName','Juco_CountryID','Juco_ZipCode','Juco_ClassID','Juco_HeightID','Juco_WeightID','Juco_Coach','Juco_Education','Juco_EmailID','Juco_VideoURL','Juco_InchesID','Juco_CoverImage','Juco_State');
                    $data['UserDetails']=$this->general_model->get_single_data_by_column('user_register','UserID',$UserID);
                    $data['UserInfo']=$this->popup_model->get_bio_data('juco_transfer',$column,$UserID);
                    $data['post_info']=$this->general_model->display_post();
                    $data['coach_info']= $this->general_model->get_sport_data('coach','UserID',$UserID);
                    $data['category']=$this->general_model->get_table_data('category');
                    $data['MainContent'] = $this->load->view('dashboard/juco_transfer_v',$data, true);
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