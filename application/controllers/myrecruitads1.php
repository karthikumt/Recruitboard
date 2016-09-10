<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once APPPATH.'libraries/password.php';

class Myrecruitads1 extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('general_model');
		$this->load->model('myrecruit_model1','myrecruit_model');
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
		 if($User['PaymentType']==0 && ($User['UserType']=='1' || $User['UserType']=='2'))
		 {
			$data['MainContent'] = $this->load->view('myrecruitads/upgrade','', true);
	    	$this->load->view('template', $data); 
		 }else if($User['UserType']=='1' || $User['UserType']=='2')
		 {
			$data['UserData']=$User;
			$data['PostAds']=$this->myrecruit_model->AdsByPage(0,6);
			$data['MainContent'] = $this->load->view('myrecruitads/student_ads1',$data, true);
	    	$this->load->view('template', $data);	
		 }else{ }
		 if($User['UserType']=='3')
		 {
			$data['UserData']=$User;
			$data['UserInfo']=get_user_data('colleage_coach',array('Coach_University','Coach_ProfileImage'),$UserID);
			$data['PostAds']=$this->myrecruit_model->PostAds();
			$data['ExpireAds']=$this->myrecruit_model->ExpireAds();
			$data['MainContent'] = $this->load->view('myrecruitads/colleage_coach',$data, true);
	    	$this->load->view('template', $data);	
		 }
		if($User['UserType']=='4')
		 {
		 	redirect(base_url().'dashboard');	 
		 }
	}
	public function adsbypage(){
		$data['PostAds']=$this->myrecruit_model->AdsByPage($this->input->post('page'),6);
		if(count($data['PostAds'])){
			$this->load->view('myrecruitads/student_ads2', $data);
		}
		else echo 0;
	}
	
	public function add_coach_post()
	{
		$UserID=$this->session->userdata('MyRecuritID'); 
		
		if($UserID=="")
		{
			redirect(base_url());	 
		}
		$UserInfo['UserID']=$UserID;
		$Gender=$this->myrecruit_model->getGender($UserID);
		$UserInfo['Po_GenderID']=$Gender['Coach_GenderID'];
		$UserInfo['Po_Username']=$this->input->post('Po_Username');
		$UserInfo['Po_SchoolName']=$this->input->post('Po_SchoolName');
	 	$getdata=get_row_data('coll_cotch_spo','Coll_SpoID',$this->input->post('Po_SportName')); 
		$UserInfo['Po_Sport']=$getdata['Coll_SpoName'];
		$UserInfo['Po_SportName']=$this->input->post('Po_SportName');
		$UserInfo['Po_Position']=$this->input->post('Po_Position');
		$UserInfo['Po_HeightID']=$this->input->post('Po_HeightID');
		$UserInfo['Po_IncheID']=$this->input->post('Po_IncheID');
		$UserInfo['Po_GpaID']=$this->input->post('Po_GpaID');
		$UserInfo['Po_WeightID']=$this->input->post('Po_WeightID');
		$UserInfo['Po_Message']=$this->input->post('Po_Message'); 
		
		if($UserInfo['Po_Username']!="" &&  $UserInfo['Po_SchoolName']!="" &&  $UserInfo['Po_SportName']!="" &&  $UserInfo['Po_HeightID']!='0' && $UserInfo['Po_IncheID']!='0' &&  $UserInfo['Po_GpaID']!='0' && $UserInfo['Po_WeightID']!='0'){
			
		  $this->db->set('Po_AddDate', 'NOW()', FALSE);	
		  $this->db->set('Po_ExpireDate', 'DATE_ADD(CURDATE(), INTERVAL 12 MONTH)', FALSE);	
		  	
			
			$last_id=$this->general_model->insert_data('coach_post_ads',$UserInfo);
			
			$Po_ImageName = $_FILES['Po_ImageName']['name'];
			
			if($Po_ImageName!="")
			{
				$this->myrecruit_model->Po_ImageName($last_id);
			}else{
				$this->myrecruit_model->Po_ImageData($this->input->post('Po_ImageList'),$last_id);
			}
           	$this->session->set_flashdata('successmessage','Ad posted successfully.');
			redirect(base_url('myrecruitads'));	
			
		}else{
			$this->session->set_flashdata('errormessage','SomeField are missing');
			redirect(base_url().'myrecruitads');	
			
		}
		
		  
	}
	


	public function Delete_Post()
	{
		$PostID=$this->input->post('PostID');	
		$this->myrecruit_model->Delete_Post($PostID);
	
	}
	
	public function Coach_Details()
	{
		$UserID=$this->input->post('UserID');
		$User=get_profile_detail($UserID);
		//$data['UserEmail']=$User['UserEmail'];
		$data['Userdetails'] = $User;
		$data[''] = $User=get_profile_detail($UserID);
		$SUserID=$this->session->userdata('MyRecuritID'); 
		$data['stu_details'] = $User=get_profile_detail($SUserID);
		$data['Profile']=$this->profile_model->student_profile($SUserID);
		$data['Profile1']=$this->profile_model->juco_transfer($SUserID);
		echo $data['MainContent'] = $this->load->view('myrecruitads/coach_details',$data, true);
	}
	
	public function no_interest()
	{
		$PostID=$this->input->post('PostID');
		$Data=$this->myrecruit_model->NotInterst($PostID);
		if($Data['Po_NotInterest']==NULL){
			$this->myrecruit_model->update_Interest($PostID);
		}else{
			$this->myrecruit_model->concat_Interest($PostID);
		}
	}
	
	
	public function payment()
	{
		$data['MainContent'] = $this->load->view('myrecruitads/payment','', true);
	   	$this->load->view('template', $data);	
	}
	
	public function cancel_payment()
	{
		// $UserID=$this->session->userdata('MyRecuritID'); 
		// $this->general_model->update_data('user_register',array('IsCancel'=>'1'),array('UserID'=>$UserID));
		// redirect(base_url().'dashboard');
		$UserID=$this->session->userdata('MyRecuritID'); 
	 	$getUser=get_user_detail($UserID);
		if($getUser['PaymentType']==1 || $getUser['PaymentType']==2)
		{
			 $this->myrecruit_model->cancel_payment();	
		} else {
			$this->general_model->update_data('user_register',array('IsCancel'=>'1'),array('UserID'=>$UserID));
			redirect(base_url().'dashboard');
		}
	}
	
	public function upgrade_payment()
	{
		
		$PaymentType=$this->input->post('PaymentType');
		if(!($PaymentType==1 || $PaymentType==2 || $PaymentType==3))
		{
			$this->session->set_flashdata('errormessage','Invalid Payment Mode.');
			redirect(base_url().'myrecruitads/payment');	
		}
		
		$data=$this->myrecruit_model->payment_register();
		if($data==1)
		{
			
			$this->session->set_flashdata('successmessage','Thank You For the Payment.');
			redirect(base_url().'myrecruitads');
				
		}
		if($data==0)
		{
			$this->session->set_flashdata('errormessage', 'Invalid Credit Card Details');
			redirect(base_url().'myrecruitads/payment');
		}
		redirect(base_url().'home');	
		
	}

		
}

