<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_juco extends CI_Controller {

	public function __construct()
	 {   
	  parent::__construct();    
	  $this->load->model('general_model');
	  $this->load->model('juco_transfer_model'); 
	   $this->load->model('popup_model');
	 	
	 }
 	
	public function getBiometric()
	{ 
		$UserID=$this->session->userdata('MyRecuritID'); 
		$User=get_user_detail($UserID);  
		  $colunm=array('Juco_Ins_Player','Juco_Ins_HighSchool','Juco_Ins_City','Juco_Ins_State','Juco_Ins_Class','Juco_Ins_Weight','Juco_Ins_HeightWithout','Juco_Ins_HeightWith','Juco_Ins_HeightIncheWithoutID','Juco_Ins_HeightIncheWithID','Juco_Ins_WingSpan','Juco_Ins_WingSpanIncheID','Juco_Ins_HandWidth','Juco_Ins_HandWidthIncheID','Juco_Ins_HandLength','Juco_Ins_HandLengthIncheID','Juco_Ins_DominantHand','Juco_Ins_DominantLeg','Juco_Ins_BodyMass','Juco_Ins_ImageName','Juco_Ins_PushUp','Juco_Ins_SitUp','Juco_Ins_PullUp','Juco_Ins_Vertical','Juco_Ins_VerticalIncheID','Juco_Ins_Standing','Juco_Ins_StandIncheingID','Juco_Ins_PowerClean','Juco_Ins_Bench','Juco_Ins_Squal','Juco_Ins_Sit','Juco_Ins_Reach','Juco_Ins_Back','Juco_Ins_BackScratch','Juco_Ins_Yard','Juco_Ins_YardIncheID','Juco_Ins_YardDash','Juco_Ins_YardDashIncheID','Juco_Ins_Mile','Juco_Ins_MileIncheRunID');
		  $data['bio_info']=$this->popup_model->get_bio_data('juco_transfer',$colunm,$UserID);
		  echo $this->load->view('dashboard/juco_biometric',$data,true);
	
    }

    public function getBiometric1()
	{ 
		$UserID=$_GET['userid']; 
		$User=get_user_detail($UserID);  
		  $colunm=array('Juco_Ins_Player','Juco_Ins_HighSchool','Juco_Ins_City','Juco_Ins_State','Juco_Ins_Class','Juco_Ins_Weight','Juco_Ins_HeightWithout','Juco_Ins_HeightWith','Juco_Ins_HeightIncheWithoutID','Juco_Ins_HeightIncheWithID','Juco_Ins_WingSpan','Juco_Ins_WingSpanIncheID','Juco_Ins_HandWidth','Juco_Ins_HandWidthIncheID','Juco_Ins_HandLength','Juco_Ins_HandLengthIncheID','Juco_Ins_DominantHand','Juco_Ins_DominantLeg','Juco_Ins_BodyMass','Juco_Ins_ImageName','Juco_Ins_PushUp','Juco_Ins_SitUp','Juco_Ins_PullUp','Juco_Ins_Vertical','Juco_Ins_VerticalIncheID','Juco_Ins_Standing','Juco_Ins_StandIncheingID','Juco_Ins_PowerClean','Juco_Ins_Bench','Juco_Ins_Squal','Juco_Ins_Sit','Juco_Ins_Reach','Juco_Ins_Back','Juco_Ins_BackScratch','Juco_Ins_Yard','Juco_Ins_YardIncheID','Juco_Ins_YardDash','Juco_Ins_YardDashIncheID','Juco_Ins_Mile','Juco_Ins_MileIncheRunID');
		  $data['bio_info']=$this->popup_model->get_bio_data('juco_transfer',$colunm,$UserID);
		  echo $this->load->view('dashboard/juco_biometric',$data,true);
	
    }
	
	public function getSports()
	{
	     		if($this->session->userdata('MyRecuritID'))
				{
					$UserID=$this->session->userdata('MyRecuritID');	
				}
				if($this->session->userdata('UserID')){
					$UserID= $this->session->userdata('UserID'); 	
				}
				if($_GET['userid'])
				$UserID = $_GET['userid'];

						$SportID = get_juco_detail($UserID);  			
						
						if(!empty($SportID))
						{
							$this->session->set_userdata('Juco_SportID',$SportID['Juco_SportID']);	
							if($SportID['Juco_SportID']=='28')
							{
								redirect(base_url().'sport_dashboard/baseball?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='29')
							{
								redirect(base_url().'sport_dashboard/basketball?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='30')
							{
								redirect(base_url().'sport_dashboard/bowling?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='31')
							{
								redirect(base_url().'sport_dashboard/cheerleading?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='32')
							{
								redirect(base_url().'sport_dashboard/crew?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='33')
							{
								redirect(base_url().'sport_dashboard/cross_country?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='34')
							{
								redirect(base_url().'sport_dashboard/dance_team?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='35')
							{
								redirect(base_url().'sport_dashboard/fencing?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='36')
							{
								redirect(base_url().'sport_dashboard/field_hockey?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='37')
							{
								redirect(base_url().'sport_dashboard/football?userid='.$UserID);	
							}
							
							else if($SportID['Juco_SportID']=='38')
							{
								redirect(base_url().'sport_dashboard/golf?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='39')
							{
								redirect(base_url().'sport_dashboard/mens_gymnastics?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='40')
							{
								redirect(base_url().'sport_dashboard/ice_hockey?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='41')
							{
								redirect(base_url().'sport_dashboard/indor_track?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='42')
							{
								redirect(base_url().'sport_dashboard/lacrosse?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='43')
							{
								redirect(base_url().'sport_dashboard/rifle?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='44')
							{
								redirect(base_url().'sport_dashboard/rugby?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='45')
							{
								redirect(base_url().'sport_dashboard/skiing?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='46')
							{
								redirect(base_url().'sport_dashboard/soccer?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='47')
							{
								redirect(base_url().'sport_dashboard/softball?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='48')
							{
								redirect(base_url().'sport_dashboard/swimming?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='49')
							{
								redirect(base_url().'sport_dashboard/tennis?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='50')
							{
								redirect(base_url().'sport_dashboard/track?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='51')
							{
								redirect(base_url().'sport_dashboard/volleyball?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='52')
							{
								redirect(base_url().'sport_dashboard/water_polo?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='53')
							{
								redirect(base_url().'sport_dashboard/wrestling?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='54')
							{
								redirect(base_url().'sport_dashboard/womens_gymnastics?userid='.$UserID);	
							}
							else if($SportID['Juco_SportID']=='55')
							{
								redirect(base_url().'sport_dashboard/rowing?userid='.$UserID);	
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
	{ 
		if($this->session->userdata('MyRecuritID'))
		$UserID=$this->session->userdata('MyRecuritID'); 
	else
		$UserID= $_GET['userid'];
		$User=get_user_detail($UserID);  
		  $colunm=array('Juco_Act_Player','Juco_Act_HighSchool','Juco_Act_City','Juco_Act_State','Juco_Act_Class','Juco_Act_ActScore','Juco_Act_SatScore','Juco_Act_Gpa','Juco_Act_CoreGpa','Juco_Act_Arts','Juco_Act_Religion','Juco_Act_Clubs','Juco_Act_Community','Juco_Act_Goverment','Juco_Act_Media','Juco_Act_Military','Juco_Act_Music','Juco_Act_Other','Juco_Act_ImageName','Juco_Act_TofelScoreID','Juco_Act_ReadID','Juco_Act_ListenID','Juco_Act_SpeakID','Juco_Act_WriteID','Juco_Act_YearSpeakID','Juco_Act_YearReadID','Juco_Act_YearWriteID','Juco_Act_WesID','Juco_Act_GuName','Juco_Act_GuEmail','Juco_Act_Honors','Juco_Act_Post','Juco_Act_ApCourses','Juco_Act_Languages','Juco_Act_Ncaa','Juco_Act_Naia','Juco_Act_IntendedID','Juco_Act_MajorID');
		  $data['bio_info']=$this->popup_model->get_bio_data('juco_transfer',$colunm,$UserID);
		  echo $this->load->view('dashboard/juco_acedmic',$data,true);
		
	?>
		

	<?php }
	 
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
		 
		redirect(base_url('dashboard/juco_transfer'));
		
		
	}
	
	public function profile_image()
	{
		$Juco_ID=$this->juco_transfer_model->getJucoID($this->session->userdata('MyRecuritID'));
		$this->juco_transfer_model->profile_image($Juco_ID['Juco_ID']);
		$Result=$this->juco_transfer_model->Profile($Juco_ID['Juco_ID']);
		
		echo '<img src="'.base_url().'register_images/juco_transfer/small/'.$Result['Juco_ProfileImage'].'?='.time().' alt="">';
		
		
	}
	
	public function cover_image()
	{
		
		$Juco_ID=$this->juco_transfer_model->Cover_getJucoID($this->session->userdata('MyRecuritID'));
		$this->juco_transfer_model->cover_image($Juco_ID['Juco_ID']);
		$Result=$this->juco_transfer_model->Cover_Profile($Juco_ID['Juco_ID']);
		
		echo '<img src="'.base_url().'register_images/juco_transfer/cover_small/'.$Result['Juco_CoverImage'].'?='.time().' alt="">';
		
		
		
	}
	
	
}		
	

