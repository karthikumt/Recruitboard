<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sport extends CI_Controller {
  
 public function __construct()
	 {   
	  parent::__construct();    
	  $this->load->model('general_model');
	  $this->load->model('sport_model'); 
	 }
	 
	 public function index()
		{
			
			if($this->session->userdata('MyRecuritID'))
			{
				$UserID=$this->session->userdata('MyRecuritID');	
			}if($this->session->userdata('UserID')){
				$UserID= $this->session->userdata('UserID'); 	
			}
			
			$User['Step']='4';
			$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));
			$data['MainContent'] = $this->load->view('sport/home',"", true);
			$this->load->view('template', $data);
			
					
		}
	
 
	public function baseball()
		{
				
			$data['MainContent'] = $this->load->view('sport/baseball_board',"", true);
			$this->load->view('template', $data);	
				
		}
	public function insert_baseball()
		{
			
			if($this->session->userdata('MyRecuritID'))
			{
				$UserID=$this->session->userdata('MyRecuritID');	
			}if($this->session->userdata('UserID')){
				$UserID= $this->session->userdata('UserID'); 	
			}
			
			$getUser=get_user_detail($UserID);
			
			if($getUser['UserType']=='1')
			{
				$StuID = get_sport_detail($UserID);
				$Stu_info['Stu_ID']=$StuID['Stu_ID'];
			}
			if($getUser['UserType']==2)
			{
				$StuID = get_juco_detail($UserID);
				$Stu_info['Juco_ID']=$StuID['Juco_ID'];
			
			}
		
			$Stu_info['UserID']=$UserID;
			$User['Step']='4';
			$Stu_info['Bas_Player']=$this->input->post('Bas_Player');
			$Stu_info['Bas_HighSchool']=$this->input->post('Bas_HighSchool');
			
			$Stu_info['Bas_City']=$this->input->post('Bas_City');
			$Stu_info['Bas_State']=$this->input->post('Bas_State');
			$Stu_info['Bas_Class']=$this->input->post('Bas_Class');
			$Stu_info['Bas_Position']=$this->input->post('Bas_Position');
			$Stu_info['Bas_Throws']=$this->input->post('Bas_Throws');
			$Stu_info['Bas_Bats']=$this->input->post('Bas_Bats');
			
			
			$Stu_info['Bas_Era']=$this->input->post('Bas_Era');
			$Stu_info['Bas_Win']=$this->input->post('Bas_Win');
			$Stu_info['Bas_Primary']=$this->input->post('Bas_Primary');
			$Stu_info['Bas_Secondary']=$this->input->post('Bas_Secondary');
			$Stu_info['Bas_FastBall']=$this->input->post('Bas_FastBall');
			$Stu_info['Bas_Batting']=$this->input->post('Bas_Batting');
			$Stu_info['Bas_Rbi']=$this->input->post('Bas_Rbi');
			$Stu_info['Bas_Stolen']=$this->input->post('Bas_Stolen');
			$Stu_info['Bas_OnBase']=$this->input->post('Bas_OnBase');
			$Stu_info['Bas_YardDash']=$this->input->post('Bas_YardDash');
			
			$Stu_info['Bas_Speed']=$this->input->post('Bas_Speed');
			$Stu_info['Bas_Assist']=$this->input->post('Bas_Assist');
			$Stu_info['Bas_Put']=$this->input->post('Bas_Put');
			$Stu_info['Bas_Double']=$this->input->post('Bas_Double');
			$Stu_info['Bas_Triple']=$this->input->post('Bas_Triple');
			$Stu_info['Bas_Field']=$this->input->post('Bas_Field');
			$Stu_info['Bas_Status']='1';
			
			
			
			if($Stu_info['Bas_Player']!='' && $Stu_info['Bas_HighSchool']!='' && $Stu_info['Bas_City']!='' && $Stu_info['Bas_State']!=''){
			
					
							
					$this->db->set('Bas_RegisterDate', 'NOW()', FALSE);	
		        	$last_id=$this->general_model->insert_data('baseball_sport',$Stu_info);
					
					$Bas_LeftImage = $_FILES['Bas_LeftImageName']['name'];
					
					$Bas_MiddleImage = $_FILES['Bas_MiddleImageName']['name'];
					$Bas_RightImage = $_FILES['Bas_RightImageName']['name'];
					if($Bas_LeftImage!="")
					{
						$this->sport_model->Bas_LeftImage($UserID);
					}
					if($Bas_MiddleImage!="")
					{
						$this->sport_model->Bas_MiddleImage($UserID);
					}
					if($Bas_RightImage!="")
					{
						$this->sport_model->Bas_RightImage($UserID);
					}
					
					
					$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
					$this->session->set_flashdata('successmessage','Thank You For Completing.');
					
					$User=get_user_detail($UserID);  
					if($User['UserType']=='1')
					{
						redirect(base_url().'student_athlete/step4');
					}else
					{
					  redirect(base_url().'juco_transfer/step4');
					}
					
			}
			else{
				$this->session->set_flashdata('errormessage','Some Fields are Missing.');
				redirect(base_url().'sport/baseball');	
			}	
	}		
		
	public function basketball()
		{
				
			$data['MainContent'] = $this->load->view('sport/basketball_board',"", true);
			$this->load->view('template', $data);	
				
		}
		
	public function insert_basketball()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Bask_PlayerName']=$this->input->post('Bask_PlayerName');
		$Stu_info['Bask_SchoolName']=$this->input->post('Bask_SchoolName');
		
		$Stu_info['Bask_City']=$this->input->post('Bask_City');
		$Stu_info['Bask_State']=$this->input->post('Bask_State');
		$Stu_info['Bask_Class']=$this->input->post('Bask_Class');
		$Stu_info['Bask_Primary']=$this->input->post('Bask_Primary');
		$Stu_info['Bask_Secondary']=$this->input->post('Bask_Secondary');
		$Stu_info['Bask_Points']=$this->input->post('Bask_Points');
		
		
		$Stu_info['Bask_Field']=$this->input->post('Bask_Field');
		$Stu_info['Bask_FreeThrow']=$this->input->post('Bask_FreeThrow');
		$Stu_info['Bask_PointField']=$this->input->post('Bask_PointField');
		$Stu_info['bask_Rebound']=$this->input->post('bask_Rebound');
		$Stu_info['Bask_Assist']=$this->input->post('Bask_Assist');
		$Stu_info['Bask_Steal']=$this->input->post('Bask_Steal');
		$Stu_info['Bask_Blocks']=$this->input->post('Bask_Blocks');
		$Stu_info['Bask_Defensive']=$this->input->post('Bask_Defensive');
		$Stu_info['Bask_HeightWith']=$this->input->post('Bask_HeightWith');
		$Stu_info['Bask_HeightwithInche']=$this->input->post('Bask_HeightwithInche');
		
		$Stu_info['Bask_HeightWithout']=$this->input->post('Bask_HeightWithout');
		$Stu_info['Bask_HeightWithoutInche']=$this->input->post('Bask_HeightWithoutInche');
		$Stu_info['Bask_Weight']=$this->input->post('Bask_Weight');
		$Stu_info['Bask_Verticle']=$this->input->post('Bask_Verticle');
		$Stu_info['Bask_Wingspan']=$this->input->post('Bask_Wingspan');
		$Stu_info['Bask_WingspanInche']=$this->input->post('Bask_WingspanInche');
		$Stu_info['Bask_CourtSprin']=$this->input->post('Bask_CourtSprin');
		
		
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Bask_PlayerName']!='' && $Stu_info['Bask_SchoolName']!='' && $Stu_info['Bask_City']!='' && $Stu_info['Bask_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('basketball_sport',$Stu_info);
				$Bask_ProImage = $_FILES['Bask_ProImage']['name'];
				$Bask_ProImage2 = $_FILES['Bask_ProImage2']['name'];
				$Bask_ProImage3 = $_FILES['Bask_ProImage3']['name'];
				$Bask_ProImage4 = $_FILES['Bask_ProImage4']['name'];
				
				if($Bask_ProImage!="")
				{
				
				$this->sport_model->Bask_ProImage($UserID);
				}
				if($Bask_ProImage2!="")
				{
					$this->sport_model->Bask_ProImage2($UserID);
				}
				if($Bask_ProImage3!="")
				{
					$this->sport_model->Bask_ProImage3($UserID);
				}
				if($Bask_ProImage4!="")
				{
					$this->sport_model->Bask_ProImage4($UserID);
				}
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/basketball');	
		}	}	

		
	public function bowling()
		{
				
			$data['MainContent'] = $this->load->view('sport/bowling_board',"", true);
			$this->load->view('template', $data);	
				
		}	
		
	public function insert_bowling()
	{
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Bowl_PlayerName']=$this->input->post('Bowl_PlayerName');
		$Stu_info['Bowl_Highschool']=$this->input->post('Bowl_Highschool');
		
		$Stu_info['Bowl_City']=$this->input->post('Bowl_City');
		$Stu_info['Bowl_State']=$this->input->post('Bowl_State');
		$Stu_info['Bowl_YearsBowl']=$this->input->post('Bowl_YearsBowl');
		$Stu_info['Bowl_AveGame']=$this->input->post('Bowl_AveGame');
		$Stu_info['Bowl_AveGame2']=$this->input->post('Bowl_AveGame2');
		$Stu_info['Bowl_AveScore']=$this->input->post('Bowl_AveScore');
		
		
		$Stu_info['Bowl_BestScore']=$this->input->post('Bowl_BestScore');
		$Stu_info['Bowl_BallWeight']=$this->input->post('Bowl_BallWeight');
		$Stu_info['Bowl_Height']=$this->input->post('Bowl_Height');
		$Stu_info['Bowl_HeightInche']=$this->input->post('Bowl_HeightInche');
		$Stu_info['Bowl_Weight']=$this->input->post('Bowl_Weight');
		$Stu_info['Bowl_DomaintHand']=$this->input->post('Bowl_DomaintHand');
	
		
		
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Bowl_PlayerName']!='' && $Stu_info['Bowl_Highschool']!='' && $Stu_info['Bowl_City']!='' && $Stu_info['Bowl_State']!=''){
		
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('bowling_sport',$Stu_info);
				$Bowl_ProImage = $_FILES['Bowl_ProImage']['name'];
				$Bowl_ProImage2 = $_FILES['Bowl_ProImage2']['name'];
				$Bowl_ProImage3 = $_FILES['Bowl_ProImage3']['name'];
				$Bowl_ProImage4 = $_FILES['Bowl_ProImage4']['name'];
				
				if($Bowl_ProImage!="")
				{
				
				$this->sport_model->Bowl_ProImage($UserID);
				}
				if($Bowl_ProImage2!="")
				{
					$this->sport_model->Bowl_ProImage2($UserID);
				}
				if($Bowl_ProImage3!="")
				{
					$this->sport_model->Bowl_ProImage3($UserID);
				}
				if($Bowl_ProImage4!="")
				{
					$this->sport_model->Bowl_ProImage4($UserID);
				}
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/bowling');	
		}	
	}			
	
	public function cheerleading()
		{
			$data['MainContent'] = $this->load->view('sport/cheerleading_board',"", true);
			$this->load->view('template', $data);	
				
		}
		
	public function insert_cheerleading()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Cheer_PlayerName']=$this->input->post('Cheer_PlayerName');
		$Stu_info['Cheer_SchoolName']=$this->input->post('Cheer_SchoolName');
		
		$Stu_info['Cheer_City']=$this->input->post('Cheer_City');
		$Stu_info['Cheer_State']=$this->input->post('Cheer_State');
		$Stu_info['Cheer_Class']=$this->input->post('Cheer_Class');
		$Stu_info['Cheer_Primary']=$this->input->post('Cheer_Primary');
		$Stu_info['Cheer_Secondary']=$this->input->post('Cheer_Secondary');
		
		
		$Stu_info['Cheer_BackHand']=$this->input->post('Cheer_BackHand');
		$Stu_info['Cheer_BackTuck']=$this->input->post('Cheer_BackTuck');
		$Stu_info['Cheer_BackHandSpring']=$this->input->post('Cheer_BackHandSpring');
		$Stu_info['Cheer_Other']=$this->input->post('Cheer_Other');
		$Stu_info['Cheer_RoundOffBack']=$this->input->post('Cheer_RoundOffBack');
		$Stu_info['Cheer_RoundOffBackHand']=$this->input->post('Cheer_RoundOffBackHand');
		$Stu_info['Cheer_RoundOffOther']=$this->input->post('Cheer_RoundOffOther');
		$Stu_info['Cheer_Flyer']=$this->input->post('Cheer_Flyer');
		$Stu_info['Cheer_Base']=$this->input->post('Cheer_Base');
		$Stu_info['Cheer_Both']=$this->input->post('Cheer_Both');
		
		$Stu_info['Cheer_BackStop']=$this->input->post('Cheer_BackStop');
		$Stu_info['Cheer_Height']=$this->input->post('Cheer_Height');
		$Stu_info['Cheer_HeightInche']=$this->input->post('Cheer_HeightInche');
		$Stu_info['Cheer_Weight']=$this->input->post('Cheer_Weight');
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Cheer_PlayerName']!='' && $Stu_info['Cheer_SchoolName']!='' && $Stu_info['Cheer_City']!='' && $Stu_info['Cheer_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('cheerleading_sport',$Stu_info);
				$Cheer_ProImage = $_FILES['Cheer_ProImage']['name'];
				$Cheer_ProImage2 = $_FILES['Cheer_ProImage2']['name'];
				$Cheer_ProImage3 = $_FILES['Cheer_ProImage3']['name'];
				$Cheer_ProImage4 = $_FILES['Cheer_ProImage4']['name'];
				
				if($Cheer_ProImage!="")
				{
				
				$this->sport_model->Cheer_ProImage($UserID);
				}
				if($Cheer_ProImage2!="")
				{
					$this->sport_model->Cheer_ProImage2($UserID);
				}
				if($Cheer_ProImage3!="")
				{
					$this->sport_model->Cheer_ProImage3($UserID);
				}
				if($Cheer_ProImage4!="")
				{
					$this->sport_model->Cheer_ProImage4($UserID);
				}
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/cheerleading');	
		}	}		
	
	public function crew()
		{
				
			redirect(base_url('sport'));
				
		}
	
	public function cross_country()
		{
				
			$data['MainContent'] = $this->load->view('sport/cross_country_board',"", true);
			$this->load->view('template', $data);	
				
		}
	public function insert_cross_country()
	{
		
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Cross_PlayerName']=$this->input->post('Cross_PlayerName');
		$Stu_info['Cross_SchoolName']=$this->input->post('Cross_SchoolName');
		
		$Stu_info['Cross_City']=$this->input->post('Cross_City');
		$Stu_info['Cross_State']=$this->input->post('Cross_State');
		$Stu_info['Cross_Height']=$this->input->post('Cross_Height');
		$Stu_info['Cross_HeightInche']=$this->input->post('Cross_HeightInche');
		$Stu_info['Cross_Weight']=$this->input->post('Cross_Weight');
		
		
		$Stu_info['Cross_MileTime']=$this->input->post('Cross_MileTime');
		$Stu_info['Cross_MileSecond']=$this->input->post('Cross_MileSecond');
		$Stu_info['Cross_Distance']=$this->input->post('Cross_Distance');
		$Stu_info['Cross_BestTime']=$this->input->post('Cross_BestTime');
		$Stu_info['Cross_BestTimeSecond']=$this->input->post('Cross_BestTimeSecond');
		$Stu_info['Cross_NextBestTime']=$this->input->post('Cross_NextBestTime');
		$Stu_info['Cross_NextBestTimeSecond']=$this->input->post('Cross_NextBestTimeSecond');
		$Stu_info['Cross_Distance_Two']=$this->input->post('Cross_Distance_Two');
		$Stu_info['Cross_BestTime_Two']=$this->input->post('Cross_BestTime_Two');
		$Stu_info['Cross_BestTimeSecond_Two']=$this->input->post('Cross_BestTimeSecond_Two');
		
		$Stu_info['Cross_NextBestTime_Two']=$this->input->post('Cross_NextBestTime_Two');
		$Stu_info['Cross_NextBestTimeSecond_Two']=$this->input->post('Cross_NextBestTimeSecond_Two');
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Cross_PlayerName']!='' && $Stu_info['Cross_SchoolName']!='' && $Stu_info['Cross_City']!='' && $Stu_info['Cross_State']!=''){
		
				
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('cross_country_sport',$Stu_info);
				$Cross_ProImage = $_FILES['Cross_ProImage']['name'];
				$Cross_ProImage2 = $_FILES['Cross_ProImage2']['name'];
				
				if($Cross_ProImage!="")
				{
				
				$this->sport_model->Cross_ProImage($UserID);
				}
				if($Cross_ProImage2!="")
				{
					$this->sport_model->Cross_ProImage2($UserID);
				}
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/cross_country');	
		}	}		
	
	public function dance_team()
		{
				
			$data['MainContent'] = $this->load->view('sport/dance_team_board',"", true);
			$this->load->view('template', $data);	
				
		}
	public function insert_dance_team()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Dance_PlayerName']=$this->input->post('Dance_PlayerName');
		$Stu_info['Dance_SchoolName']=$this->input->post('Dance_SchoolName');
		
		$Stu_info['Dance_City']=$this->input->post('Dance_City');
		$Stu_info['Dance_State']=$this->input->post('Dance_State');
		$Stu_info['Dance_Leaps_One']=$this->input->post('Dance_Leaps_One');
		$Stu_info['Dance_Leaps_Two']=$this->input->post('Dance_Leaps_Two');
		$Stu_info['Dance_Leaps_Three']=$this->input->post('Dance_Leaps_Three');
		
		
		$Stu_info['Dance_Turns_One']=$this->input->post('Dance_Turns_One');
		$Stu_info['Dance_Turns_Two']=$this->input->post('Dance_Turns_Two');
		$Stu_info['Dance_Turns_Three']=$this->input->post('Dance_Turns_Three');
		$Stu_info['Dance_Jumps_One']=$this->input->post('Dance_Jumps_One');
		$Stu_info['Dance_Jumps_Two']=$this->input->post('Dance_Jumps_Two');
		$Stu_info['Dance_Jumps_Three']=$this->input->post('Dance_Jumps_Three');
		$Stu_info['Dance_Height']=$this->input->post('Dance_Height');
		$Stu_info['Dance_HeightInche']=$this->input->post('Dance_HeightInche');
		$Stu_info['Dance_Weight']=$this->input->post('Dance_Weight');
		$Stu_info['Dance_DomaintHand']=$this->input->post('Dance_DomaintHand');
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Dance_PlayerName']!='' && $Stu_info['Dance_SchoolName']!='' && $Stu_info['Dance_City']!='' && $Stu_info['Dance_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('danceteam_sport',$Stu_info);
				$Dance_ProImage = $_FILES['Dance_ProImage']['name'];
				$Dance_ProImage2 = $_FILES['Dance_ProImage2']['name'];
				$Dance_ProImage3 = $_FILES['Dance_ProImage3']['name'];
				$Dance_ProImage4 = $_FILES['Dance_ProImage4']['name'];
				
				if($Dance_ProImage!="")
				{
				
				$this->sport_model->Dance_ProImage($UserID);
				}
				if($Dance_ProImage2!="")
				{
					$this->sport_model->Dance_ProImage2($UserID);
				}
				if($Dance_ProImage3!="")
				{
					$this->sport_model->Dance_ProImage3($UserID);
				}
				if($Dance_ProImage4!="")
				{
					$this->sport_model->Dance_ProImage4($UserID);
				}
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/dance_team');	
		}	}		
		
	
	public function fencing()
		{
				
			$data['MainContent'] = $this->load->view('sport/fencing_board',"", true);
			$this->load->view('template', $data);	
				
		}
		
	public function insert_fencing()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Fence_PlayerName']=$this->input->post('Fence_PlayerName');
		$Stu_info['Fence_SchoolName']=$this->input->post('Fence_SchoolName');
		
		$Stu_info['Fence_City']=$this->input->post('Fence_City');
		$Stu_info['Fence_State']=$this->input->post('Fence_State');
		$Stu_info['Fence_Class']=$this->input->post('Fence_Class');
		$Stu_info['Fence_Primary']=$this->input->post('Fence_Primary');
		$Stu_info['Fence_Secondary']=$this->input->post('Fence_Secondary');
		
		
		$Stu_info['Fence_Wins']=$this->input->post('Fence_Wins');
		$Stu_info['Fence_Losses']=$this->input->post('Fence_Losses');
		$Stu_info['Fence_Draws']=$this->input->post('Fence_Draws');
		$Stu_info['Fence_Years']=$this->input->post('Fence_Years');
		$Stu_info['Fence_Classification']=$this->input->post('Fence_Classification');
		$Stu_info['Fence_Height']=$this->input->post('Fence_Height');
		$Stu_info['Fence_HeightInche']=$this->input->post('Fence_HeightInche');
		$Stu_info['Fence_Weight']=$this->input->post('Fence_Weight');
		$Stu_info['Fence_DomaintHand']=$this->input->post('Fence_DomaintHand');
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Fence_PlayerName']!='' && $Stu_info['Fence_SchoolName']!='' && $Stu_info['Fence_City']!='' && $Stu_info['Fence_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('fencing_sport',$Stu_info);
				$Fence_ProImage = $_FILES['Fence_ProImage']['name'];
				$Fence_ProImage2 = $_FILES['Fence_ProImage2']['name'];
				$Fence_ProImage3 = $_FILES['Fence_ProImage3']['name'];
				$Fence_ProImage4 = $_FILES['Fence_ProImage4']['name'];
				
				if($Fence_ProImage!="")
				{
				
				$this->sport_model->Fence_ProImage($UserID);
				}
				if($Fence_ProImage2!="")
				{
					$this->sport_model->Fence_ProImage2($UserID);
				}
				if($Fence_ProImage3!="")
				{
					$this->sport_model->Fence_ProImage3($UserID);
				}
				if($Fence_ProImage4!="")
				{
					$this->sport_model->Fence_ProImage4($UserID);
				}
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/fencing');	
		}	}		
	
	public function field_hockey()
		{
				
			$data['MainContent'] = $this->load->view('sport/field_hockey_board',"", true);
			$this->load->view('template', $data);	
				
		}
	public function insert_field_hockey()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Field_PlayerName']=$this->input->post('Field_PlayerName');
		$Stu_info['Field_SchoolName']=$this->input->post('Field_SchoolName');
		
		$Stu_info['Field_City']=$this->input->post('Field_City');
		$Stu_info['Field_State']=$this->input->post('Field_State');
		$Stu_info['Field_Class']=$this->input->post('Field_Class');
		$Stu_info['Field_Primary']=$this->input->post('Field_Primary');
		$Stu_info['Field_Secondary']=$this->input->post('Field_Secondary');
		
		
		$Stu_info['Field_Goals']=$this->input->post('Field_Goals');
		$Stu_info['Field_Shots']=$this->input->post('Field_Shots');
		$Stu_info['Field_Assists']=$this->input->post('Field_Assists');
		$Stu_info['Field_Against']=$this->input->post('Field_Against');
		$Stu_info['Field_Saves']=$this->input->post('Field_Saves');
		$Stu_info['Field_Varsity']=$this->input->post('Field_Varsity');
		$Stu_info['Field_Mile']=$this->input->post('Field_Mile');
		$Stu_info['Field_MileInche']=$this->input->post('Field_MileInche');
		$Stu_info['Field_Defensive']=$this->input->post('Field_Defensive');
		
		$Stu_info['Field_Height']=$this->input->post('Field_Height');
		$Stu_info['Field_HeightInche']=$this->input->post('Field_HeightInche');
		$Stu_info['Field_Weight']=$this->input->post('Field_Weight');
		$Stu_info['Field_DomaintHand']=$this->input->post('Field_DomaintHand');
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Field_PlayerName']!='' && $Stu_info['Field_SchoolName']!='' && $Stu_info['Field_City']!='' && $Stu_info['Field_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('field_hockey_sport',$Stu_info);
				$Field_ProImage = $_FILES['Field_ProImage']['name'];
				$Field_ProImage2 = $_FILES['Field_ProImage2']['name'];
				$Field_ProImage3 = $_FILES['Field_ProImage3']['name'];
				$Field_ProImage4 = $_FILES['Field_ProImage4']['name'];
				
				if($Field_ProImage!="")
				{
				
				$this->sport_model->Field_ProImage($UserID);
				}
				if($Field_ProImage2!="")
				{
					$this->sport_model->Field_ProImage2($UserID);
				}
				if($Field_ProImage3!="")
				{
					$this->sport_model->Field_ProImage3($UserID);
				}
				if($Field_ProImage4!="")
				{
					$this->sport_model->Field_ProImage4($UserID);
				}
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/field_hockey');	
		}	
	}	
		
		
	public function football()
		{
				
			$data['MainContent'] = $this->load->view('sport/football_board',"", true);
			$this->load->view('template', $data);	
				
		}
		
	public function insert_football()
	{
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['FootBall_PlayerName']=$this->input->post('FootBall_PlayerName');
		$Stu_info['FootBall_SchoolName']=$this->input->post('FootBall_SchoolName');
		
		$Stu_info['FootBall_City']=$this->input->post('FootBall_City');
		$Stu_info['FootBall_State']=$this->input->post('FootBall_State');
		$Stu_info['FootBall_Class']=$this->input->post('FootBall_Class');
		$Stu_info['FootBall_Offensive']=$this->input->post('FootBall_Offensive');
		$Stu_info['FootBall_Defensive']=$this->input->post('FootBall_Defensive');
		
		
		$Stu_info['FootBall_Special']=$this->input->post('FootBall_Special');
		$Stu_info['FootBall_Rushing']=$this->input->post('FootBall_Rushing');
		$Stu_info['FootBall_Rush_YDS']=$this->input->post('FootBall_Rush_YDS');
		$Stu_info['FootBall_Rush_TD']=$this->input->post('FootBall_Rush_TD');
		$Stu_info['FootBall_Rush_Longest']=$this->input->post('FootBall_Rush_Longest');
		$Stu_info['FootBall_Rush_Season']=$this->input->post('FootBall_Rush_Season');
		$Stu_info['FootBall_Pass_Attems']=$this->input->post('FootBall_Pass_Attems');
		$Stu_info['FootBall_Pass_Game']=$this->input->post('FootBall_Pass_Game');
		$Stu_info['FootBall_Pass_Comp']=$this->input->post('FootBall_Pass_Comp');
		
		$Stu_info['FootBall_Pass_YDS']=$this->input->post('FootBall_Pass_YDS');
		$Stu_info['FootBall_Pass_TD']=$this->input->post('FootBall_Pass_TD');
		$Stu_info['FootBall_Pass_Season']=$this->input->post('FootBall_Pass_Season');
		$Stu_info['FootBall_Receive']=$this->input->post('FootBall_Receive');
		$Stu_info['FootBall_Rece_REC']=$this->input->post('FootBall_Rece_REC');
		$Stu_info['FootBall_Rece_YDS']=$this->input->post('FootBall_Rece_YDS');
		$Stu_info['FootBall_Rece_TD']=$this->input->post('FootBall_Rece_TD');
		$Stu_info['FootBall_Rece_Longest']=$this->input->post('FootBall_Rece_Longest');
		$Stu_info['FootBall_Rece_Season']=$this->input->post('FootBall_Rece_Season');
		$Stu_info['FootBall_Solo']=$this->input->post('FootBall_Solo');
		$Stu_info['FootBall_Assisted']=$this->input->post('FootBall_Assisted');
		$Stu_info['FootBall_Sacks']=$this->input->post('FootBall_Sacks');
		$Stu_info['FootBall_Interceptions']=$this->input->post('FootBall_Interceptions');
		$Stu_info['FootBall_Tackles']=$this->input->post('FootBall_Tackles');
		$Stu_info['FootBall_Pass']=$this->input->post('FootBall_Pass');
		$Stu_info['FootBall_Fumble']=$this->input->post('FootBall_Fumble');
		$Stu_info['FootBall_Tackles_Loss']=$this->input->post('FootBall_Tackles_Loss');
		$Stu_info['FootBall_Height']=$this->input->post('FootBall_Height');
		$Stu_info['FootBall_HeightInche']=$this->input->post('FootBall_HeightInche');
		$Stu_info['FootBall_Weight']=$this->input->post('FootBall_Weight');
		$Stu_info['FootBall_BroadJump']=$this->input->post('FootBall_BroadJump');
		$Stu_info['FootBall_BroadJumpInche']=$this->input->post('FootBall_BroadJumpInche');
		$Stu_info['FootBall_Vertical']=$this->input->post('FootBall_Vertical');
		$Stu_info['FootBall_Yard']=$this->input->post('FootBall_Yard');
		$Stu_info['FootBall_YardShuttle']=$this->input->post('FootBall_YardShuttle');
		$Stu_info['FootBall_Cone']=$this->input->post('FootBall_Cone');
		$Stu_info['FootBall_Bench']=$this->input->post('FootBall_Bench');
		
		$Stu_info['FootBall_FG_Made']=$this->input->post('FootBall_FG_Made');
		$Stu_info['FootBall_FG_ATT']=$this->input->post('FootBall_FG_ATT');
		$Stu_info['FootBall_FG']=$this->input->post('FootBall_FG');
		$Stu_info['FootBall_FG_Longest']=$this->input->post('FootBall_FG_Longest');
		$Stu_info['FootBall_Punt_Kick']=$this->input->post('FootBall_Punt_Kick');
		$Stu_info['FootBall_Punt_YDS']=$this->input->post('FootBall_Punt_YDS');
		$Stu_info['FootBall_Punt_Avg']=$this->input->post('FootBall_Punt_Avg');
		$Stu_info['FootBall_Punt_Longest']=$this->input->post('FootBall_Punt_Longest');
		$Stu_info['FootBall_Punt_Inside']=$this->input->post('FootBall_Punt_Inside');
		$Stu_info['FootBall_Kick_RET']=$this->input->post('FootBall_Kick_RET');
		$Stu_info['FootBall_Kick_ATT']=$this->input->post('FootBall_Kick_ATT');
		$Stu_info['FootBall_Kick_YDS']=$this->input->post('FootBall_Kick_YDS');
		
		
		$Stu_info['FootBall_Kick_Longest']=$this->input->post('FootBall_Kick_Longest');
		$Stu_info['FootBall_Punt_Res_RET']=$this->input->post('FootBall_Punt_Res_RET');
		$Stu_info['FootBall_Punt_Res_ATT']=$this->input->post('FootBall_Punt_Res_ATT');
		$Stu_info['FootBall_Punt_Res_YDS']=$this->input->post('FootBall_Punt_Res_YDS');
		$Stu_info['FootBall_Punt_Res_Longest']=$this->input->post('FootBall_Punt_Res_Longest');
	
		$Stu_info['Status']='1';
		
		
		if($Stu_info['FootBall_PlayerName']!='' && $Stu_info['FootBall_SchoolName']!='' && $Stu_info['FootBall_City']!='' && $Stu_info['FootBall_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('football_sport',$Stu_info);
				$FootBall_ProImage = $_FILES['FootBall_ProImage']['name'];
				$FootBall_ProImage2 = $_FILES['FootBall_ProImage2']['name'];
				$FootBall_ProImage3 = $_FILES['FootBall_ProImage3']['name'];
				$FootBall_ProImage4 = $_FILES['FootBall_ProImage4']['name'];
				$FootBall_ProImage5 = $_FILES['FootBall_ProImage5']['name'];
				
				if($FootBall_ProImage!="")
				{
				
				$this->sport_model->FootBall_ProImage($UserID);
				}
				if($FootBall_ProImage2!="")
				{
					$this->sport_model->FootBall_ProImage2($UserID);
				}
				if($FootBall_ProImage3!="")
				{
					$this->sport_model->FootBall_ProImage3($UserID);
				}
				if($FootBall_ProImage4!="")
				{
					$this->sport_model->FootBall_ProImage4($UserID);
				}
				if($FootBall_ProImage5!="")
				{
					$this->sport_model->FootBall_ProImage5($UserID);
				}
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/football');	
		}	
	}	
	
		
	public function golf()
		{
				
			$data['MainContent'] = $this->load->view('sport/golf_board',"", true);
			$this->load->view('template', $data);	
				
		}
	public function insert_golf()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Golf_PlayerName']=$this->input->post('Golf_PlayerName');
		$Stu_info['Golf_SchoolName']=$this->input->post('Golf_SchoolName');
		
		$Stu_info['Golf_City']=$this->input->post('Golf_City');
		$Stu_info['Golf_State']=$this->input->post('Golf_State');
		$Stu_info['Golf_Average']=$this->input->post('Golf_Average');
		$Stu_info['Golf_Versus']=$this->input->post('Golf_Versus');
		$Stu_info['Golf_Best']=$this->input->post('Golf_Best');
		
		
		$Stu_info['Golf_Handicap']=$this->input->post('Golf_Handicap');
		$Stu_info['Golf_Drive']=$this->input->post('Golf_Drive');
		$Stu_info['Golf_Fairway']=$this->input->post('Golf_Fairway');
		$Stu_info['Golf_GIR']=$this->input->post('Golf_GIR');
		$Stu_info['Golf_Sand_Save']=$this->input->post('Golf_Sand_Save');
		$Stu_info['Golf_Eagles']=$this->input->post('Golf_Eagles');
		$Stu_info['Golf_Birdies']=$this->input->post('Golf_Birdies');
		$Stu_info['Golf_Putts']=$this->input->post('Golf_Putts');
		$Stu_info['Golf_GIRPutts']=$this->input->post('Golf_GIRPutts');
		
		$Stu_info['Golf_Height']=$this->input->post('Golf_Height');
		$Stu_info['Golf_HeightInches']=$this->input->post('Golf_HeightInches');
		$Stu_info['Golf_Weight']=$this->input->post('Golf_Weight');
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Golf_PlayerName']!='' && $Stu_info['Golf_SchoolName']!='' && $Stu_info['Golf_City']!='' && $Stu_info['Golf_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('golf_sport',$Stu_info);
				$Golf_ProImage = $_FILES['Golf_ProImage']['name'];
				$Golf_ProImage2 = $_FILES['Golf_ProImage2']['name'];
				$Golf_ProImage3 = $_FILES['Golf_ProImage3']['name'];
				$Golf_ProImage4 = $_FILES['Golf_ProImage4']['name'];
				
				if($Golf_ProImage!="")
				{
				
				$this->sport_model->Golf_ProImage($UserID);
				}
				if($Golf_ProImage2!="")
				{
					$this->sport_model->Golf_ProImage2($UserID);
				}
				if($Golf_ProImage3!="")
				{
					$this->sport_model->Golf_ProImage3($UserID);
				}
				if($Golf_ProImage4!="")
				{
					$this->sport_model->Golf_ProImage4($UserID);
				}
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/golf');	
		}	
	}	
			
	
	public function mens_gymnastics()
		{
				
			$data['MainContent'] = $this->load->view('sport/mens_gymnastics_board',"", true);
			$this->load->view('template', $data);	
				
		}
	public function insert_mens_gymnastics()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Gym_PlayerName']=$this->input->post('Gym_PlayerName');
		$Stu_info['Gym_SchoolName']=$this->input->post('Gym_SchoolName');
		
		$Stu_info['Gym_City']=$this->input->post('Gym_City');
		$Stu_info['Gym_State']=$this->input->post('Gym_State');
		$Stu_info['Gym_Floor_Score']=$this->input->post('Gym_Floor_Score');
		$Stu_info['Gym_Floor_Average']=$this->input->post('Gym_Floor_Average');
		
		
		$Stu_info['Gym_Parallel_Score']=$this->input->post('Gym_Parallel_Score');
		$Stu_info['Gym_Parallel_Average']=$this->input->post('Gym_Parallel_Average');
		$Stu_info['Gym_Vault_Score']=$this->input->post('Gym_Vault_Score');
		$Stu_info['Gym_Vault_Average']=$this->input->post('Gym_Vault_Average');
		$Stu_info['Gym_High_Score']=$this->input->post('Gym_High_Score');
		$Stu_info['Gym_High_Average']=$this->input->post('Gym_High_Average');
		$Stu_info['Gym_Still_Score']=$this->input->post('Gym_Still_Score');
		$Stu_info['Gym_Still_Average']=$this->input->post('Gym_Still_Average');
		$Stu_info['Gym_Pommel_Score']=$this->input->post('Gym_Pommel_Score');
		$Stu_info['Gym_Pommel_Average']=$this->input->post('Gym_Pommel_Average');
		
		$Stu_info['Gym_Height']=$this->input->post('Gym_Height');
		$Stu_info['Gym_HeightInche']=$this->input->post('Gym_HeightInche');
		$Stu_info['Gym_Weight']=$this->input->post('Gym_Weight');
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Gym_PlayerName']!='' && $Stu_info['Gym_SchoolName']!='' && $Stu_info['Gym_City']!='' && $Stu_info['Gym_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('men_gym_sport',$Stu_info);
				$Gym_ProImage = $_FILES['Gym_ProImage']['name'];
				$Gym_ProImage2 = $_FILES['Gym_ProImage2']['name'];
				
				
				if($Gym_ProImage!="")
				{
				
				$this->sport_model->Gym_ProImage($UserID);
				}
				if($Gym_ProImage2!="")
				{
					$this->sport_model->Gym_ProImage2($UserID);
				}
					
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/mens_gymnastics');	
		}	
	}	
	public function ice_hockey()
		{
				
			$data['MainContent'] = $this->load->view('sport/ice_hockey_board',"", true);
			$this->load->view('template', $data);	
				
		}
   public function insert_ice_hockey()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Ice_PlayerName']=$this->input->post('Ice_PlayerName');
		$Stu_info['Ice_SchoolName']=$this->input->post('Ice_SchoolName');
		
		$Stu_info['Ice_City']=$this->input->post('Ice_City');
		$Stu_info['Ice_State']=$this->input->post('Ice_State');
		$Stu_info['Ice_Class']=$this->input->post('Ice_Class');
		$Stu_info['Ice_Primary']=$this->input->post('Ice_Primary');
		$Stu_info['Ice_Secondary']=$this->input->post('Ice_Secondary');
		
		
		$Stu_info['Ice_Position']=$this->input->post('Ice_Position');
		$Stu_info['Ice_Goals']=$this->input->post('Ice_Goals');
		$Stu_info['Ice_Shots']=$this->input->post('Ice_Shots');
		$Stu_info['Ice_Assist']=$this->input->post('Ice_Assist');
		$Stu_info['Ice_Allowed']=$this->input->post('Ice_Allowed');
		$Stu_info['Ice_Saves']=$this->input->post('Ice_Saves');
		$Stu_info['Ice_Penalty']=$this->input->post('Ice_Penalty');
		$Stu_info['Ice_Height']=$this->input->post('Ice_Height');
		$Stu_info['Ice_HeightInche']=$this->input->post('Ice_HeightInche');
		$Stu_info['Ice_Weight']=$this->input->post('Ice_Weight');
		
		$Stu_info['Ice_WingSpan']=$this->input->post('Ice_WingSpan');
		$Stu_info['Ice_wingSpanInche']=$this->input->post('Ice_wingSpanInche');
		$Stu_info['Ice_LongJump']=$this->input->post('Ice_LongJump');
		$Stu_info['Ice_LongJumpInche']=$this->input->post('Ice_LongJumpInche');
		$Stu_info['Ice_Vertical']=$this->input->post('Ice_Vertical');
		$Stu_info['Ice_GripStrength_Right']=$this->input->post('Ice_GripStrength_Right');
		$Stu_info['Ice_GripStrength_Left']=$this->input->post('Ice_GripStrength_Left');
		$Stu_info['Ice_Bench_Press']=$this->input->post('Ice_Bench_Press');
		$Stu_info['Ice_PullUps']=$this->input->post('Ice_PullUps');
		$Stu_info['Ice_Defensive']=$this->input->post('Ice_Defensive');
		
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Ice_PlayerName']!='' && $Stu_info['Ice_SchoolName']!='' && $Stu_info['Ice_City']!='' && $Stu_info['Ice_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('ice_hockey_sport',$Stu_info);
				$Ice_ProImage = $_FILES['Ice_ProImage']['name'];
				$Ice_ProImage2 = $_FILES['Ice_ProImage2']['name'];
				$Ice_ProImage3 = $_FILES['Ice_ProImage3']['name'];
				$Ice_ProImage4 = $_FILES['Ice_ProImage4']['name'];
				
				if($Ice_ProImage!="")
				{
				
				$this->sport_model->Ice_ProImage($UserID);
				}
				if($Ice_ProImage2!="")
				{
					$this->sport_model->Ice_ProImage2($UserID);
				}
				if($Ice_ProImage3!="")
				{
					$this->sport_model->Ice_ProImage3($UserID);
				}
				if($Ice_ProImage4!="")
				{
					$this->sport_model->Ice_ProImage4($UserID);
				}
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/ice_hockey');	
		}	
	}			
		
	public function indor_track()
		{
				
			$data['MainContent'] = $this->load->view('sport/indoor_track_board',"", true);
			$this->load->view('template', $data);	
				
		}
		
	public function insert_indoor_track()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Indoor_PlayerName']=$this->input->post('Indoor_PlayerName');
		$Stu_info['Indoor_SchoolName']=$this->input->post('Indoor_SchoolName');
		
		$Stu_info['Indoor_City']=$this->input->post('Indoor_City');
		$Stu_info['Indoor_State']=$this->input->post('Indoor_State');
		$Stu_info['Indoor_Height']=$this->input->post('Indoor_Height');
		$Stu_info['Indoor_HeightInche']=$this->input->post('Indoor_HeightInche');
		$Stu_info['Indoor_Weight']=$this->input->post('Indoor_Weight');
		
		$Stu_info['Indoor_Track_Event_One']=$this->input->post('Indoor_Track_Event_One');
		$Stu_info['Indoor_Track_EventMin_One']=$this->input->post('Indoor_Track_EventMin_One');
		$Stu_info['Indoor_Track_EventSec_One']=$this->input->post('Indoor_Track_EventSec_One');
		
		$Stu_info['Indoor_Track_Event_Two']=$this->input->post('Indoor_Track_Event_Two');
		$Stu_info['Indoor_Track_EventMin_Two']=$this->input->post('Indoor_Track_EventMin_Two');
		$Stu_info['Indoor_Track_EventSec_Two']=$this->input->post('Indoor_Track_EventSec_Two');
		
		$Stu_info['Indoor_Track_Event_Three']=$this->input->post('Indoor_Track_Event_Three');
		$Stu_info['Indoor_Track_EventMin_Three']=$this->input->post('Indoor_Track_EventMin_Three');
		$Stu_info['Indoor_Track_EventSec_Three']=$this->input->post('Indoor_Track_EventSec_Three');
		
		
		$Stu_info['Indoor_Track_Event_Four']=$this->input->post('Indoor_Track_Event_Four');
		$Stu_info['Indoor_Track_EventMin_Four']=$this->input->post('Indoor_Track_EventMin_Four');
		$Stu_info['Indoor_Track_EventSec_Four']=$this->input->post('Indoor_Track_EventSec_Four');
		
		
		$Stu_info['Indoor_Track_Event_Five']=$this->input->post('Indoor_Track_Event_Five');
		$Stu_info['Indoor_Track_EventMin_Five']=$this->input->post('Indoor_Track_EventMin_Five');
		$Stu_info['Indoor_Track_EventSec_Five']=$this->input->post('Indoor_Track_EventSec_Five');
		
		
		$Stu_info['Indoor_Field_Event_One']=$this->input->post('Indoor_Field_Event_One');
		$Stu_info['Indoor_Field_EventMin_One']=$this->input->post('Indoor_Field_EventMin_One');
		$Stu_info['Indoor_Field_EventSec_One']=$this->input->post('Indoor_Field_EventSec_One');
		
		$Stu_info['Indoor_Field_Event_Two']=$this->input->post('Indoor_Field_Event_Two');
		$Stu_info['Indoor_Field_EventMin_Two']=$this->input->post('Indoor_Field_EventMin_Two');
		$Stu_info['Indoor_Field_EventSec_Two']=$this->input->post('Indoor_Field_EventSec_Two');
		
		$Stu_info['Indoor_Field_Event_Three']=$this->input->post('Indoor_Field_Event_Three');
		$Stu_info['Indoor_Field_EventMin_Three']=$this->input->post('Indoor_Field_EventMin_Three');
		$Stu_info['Indoor_Field_EventSec_Three']=$this->input->post('Indoor_Field_EventSec_Three');
		
		
		$Stu_info['Indoor_Field_Event_Four']=$this->input->post('Indoor_Field_Event_Four');
		$Stu_info['Indoor_Field_EventMin_Four']=$this->input->post('Indoor_Field_EventMin_Four');
		$Stu_info['Indoor_Field_EventSec_Four']=$this->input->post('Indoor_Field_EventSec_Four');
		
		
		$Stu_info['Indoor_Field_Event_Five']=$this->input->post('Indoor_Field_Event_Five');
		$Stu_info['Indoor_Field_EventMin_Five']=$this->input->post('Indoor_Field_EventMin_Five');
		$Stu_info['Indoor_Field_EventSec_Five']=$this->input->post('Indoor_Field_EventSec_Five');
		
		
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Indoor_PlayerName']!='' && $Stu_info['Indoor_SchoolName']!='' && $Stu_info['Indoor_City']!='' && $Stu_info['Indoor_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('indoor_sport',$Stu_info);
				$Indoor_ProImage = $_FILES['Indoor_ProImage']['name'];
				$Indoor_ProImage2 = $_FILES['Indoor_ProImage2']['name'];
				
				if($Indoor_ProImage!="")
				{
				
				$this->sport_model->Indoor_ProImage($UserID);
				}
				if($Indoor_ProImage2!="")
				{
					$this->sport_model->Indoor_ProImage2($UserID);
				}
				
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/indor_track');	
		}	
	}
	
		
	public function lacrosse()
		{
				
			$data['MainContent'] = $this->load->view('sport/lacrosse_board',"", true);
			$this->load->view('template', $data);	
				
		}
		
	public function insert_lacrosse()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Lac_PlayerName']=$this->input->post('Lac_PlayerName');
		$Stu_info['Lac_SchoolName']=$this->input->post('Lac_SchoolName');
		
		$Stu_info['Lac_City']=$this->input->post('Lac_City');
		$Stu_info['Lac_State']=$this->input->post('Lac_State');
		$Stu_info['Lac_Class']=$this->input->post('Lac_Class');
		$Stu_info['Lac_Primary']=$this->input->post('Lac_Primary');
		$Stu_info['Lac_Secondary']=$this->input->post('Lac_Secondary');
		
		
		$Stu_info['Lac_Goals']=$this->input->post('Lac_Goals');
		$Stu_info['Lac_Shots']=$this->input->post('Lac_Shots');
		$Stu_info['Lac_Assists']=$this->input->post('Lac_Assists');
		$Stu_info['Lac_Ground']=$this->input->post('Lac_Ground');
		$Stu_info['Lac_Allowed']=$this->input->post('Lac_Allowed');
		$Stu_info['Lac_Saves']=$this->input->post('Lac_Saves');
		$Stu_info['Lac_Faceoff']=$this->input->post('Lac_Faceoff');
		$Stu_info['Lac_Penalty']=$this->input->post('Lac_Penalty');
		$Stu_info['Lac_Height']=$this->input->post('Lac_Height');
		
		$Stu_info['Lac_HeightInche']=$this->input->post('Lac_HeightInche');
		$Stu_info['Lac_Weight']=$this->input->post('Lac_Weight');
		$Stu_info['Lac_WingSpan']=$this->input->post('Lac_WingSpan');
		$Stu_info['Lac_WingSpanInche']=$this->input->post('Lac_WingSpanInche');
		$Stu_info['Lac_Times']=$this->input->post('Lac_Times');
		$Stu_info['Lac_Vertical']=$this->input->post('Lac_Vertical');
		$Stu_info['Lac_DomaintHand']=$this->input->post('Lac_DomaintHand');
		$Stu_info['Lac_Defensive']=$this->input->post('Lac_Defensive');
		
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Lac_PlayerName']!='' && $Stu_info['Lac_SchoolName']!='' && $Stu_info['Lac_City']!='' && $Stu_info['Lac_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('lacross_sport',$Stu_info);
				$Lac_ProImage = $_FILES['Lac_ProImage']['name'];
				$Lac_ProImage2 = $_FILES['Lac_ProImage2']['name'];
				$Lac_ProImage3 = $_FILES['Lac_ProImage3']['name'];
				$Lac_ProImage4 = $_FILES['Lac_ProImage4']['name'];
				
				if($Lac_ProImage!="")
				{
				
				$this->sport_model->Lac_ProImage($UserID);
				}
				if($Lac_ProImage2!="")
				{
					$this->sport_model->Lac_ProImage2($UserID);
				}
				if($Lac_ProImage3!="")
				{
					$this->sport_model->Lac_ProImage3($UserID);
				}
				if($Lac_ProImage4!="")
				{
					$this->sport_model->Lac_ProImage4($UserID);
				}
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/lacrosse');	
		}	
	}				
	
	
	public function rifle()
		{
				
			$data['MainContent'] = $this->load->view('sport/rifle_board',"", true);
			$this->load->view('template', $data);	
				
		}
		
	public function insert_rifle()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Rifel_PlayerName']=$this->input->post('Rifel_PlayerName');
		$Stu_info['Rifel_SchoolName']=$this->input->post('Rifel_SchoolName');
		
		$Stu_info['Rifel_City']=$this->input->post('Rifel_City');
		$Stu_info['Rifel_State']=$this->input->post('Rifel_State');
		$Stu_info['Rifel_Indoor_Avg']=$this->input->post('Rifel_Indoor_Avg');
		$Stu_info['Rifel_Indoor_Best']=$this->input->post('Rifel_Indoor_Best');
		$Stu_info['Rifel_Outdoor_Avg']=$this->input->post('Rifel_Outdoor_Avg');
		
		
		$Stu_info['Rifel_Outdoor_Best']=$this->input->post('Rifel_Outdoor_Best');
		$Stu_info['Rifel_Precision_Avg']=$this->input->post('Rifel_Precision_Avg');
		$Stu_info['Rifel_Precision_Best']=$this->input->post('Rifel_Precision_Best');
		$Stu_info['Rifel_Precision_AvgShot']=$this->input->post('Rifel_Precision_AvgShot');
		$Stu_info['Rifel_Precision_BestShot']=$this->input->post('Rifel_Precision_BestShot');
		$Stu_info['Rifel_Height']=$this->input->post('Rifel_Height');
		$Stu_info['Rifel_HeightInche']=$this->input->post('Rifel_HeightInche');
		$Stu_info['Rifel_Weight']=$this->input->post('Rifel_Weight');
		
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Rifel_PlayerName']!='' && $Stu_info['Rifel_SchoolName']!='' && $Stu_info['Rifel_City']!='' && $Stu_info['Rifel_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('rifle_sport',$Stu_info);
				$Rifel_ProImage = $_FILES['Rifel_ProImage']['name'];
				$Rifel_ProImage2 = $_FILES['Rifel_ProImage2']['name'];
				$Rifel_ProImage3 = $_FILES['Rifel_ProImage3']['name'];
				$Rifel_ProImage4 = $_FILES['Rifel_ProImage4']['name'];
				
				if($Rifel_ProImage!="")
				{
				
				$this->sport_model->Rifel_ProImage($UserID);
				}
				if($Rifel_ProImage2!="")
				{
					$this->sport_model->Rifel_ProImage2($UserID);
				}
				if($Rifel_ProImage3!="")
				{
					$this->sport_model->Rifel_ProImage3($UserID);
				}
				if($Rifel_ProImage4!="")
				{
					$this->sport_model->Rifel_ProImage4($UserID);
				}
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/rifle');	
		}	
	}	
	
		
	public function rugby()
		{
				
			$data['MainContent'] = $this->load->view('sport/rugby_board',"", true);
			$this->load->view('template', $data);	
				
		}
	public function insert_rugby()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Rugby_PlayerName']=$this->input->post('Rugby_PlayerName');
		$Stu_info['Rugby_SchoolName']=$this->input->post('Rugby_SchoolName');
		
		$Stu_info['Rugby_City']=$this->input->post('Rugby_City');
		$Stu_info['Rugby_State']=$this->input->post('Rugby_State');
		$Stu_info['Rugby_Class']=$this->input->post('Rugby_Class');
		$Stu_info['Rugby_Primary']=$this->input->post('Rugby_Primary');
		$Stu_info['Rugby_Secondary']=$this->input->post('Rugby_Secondary');
		
		
		$Stu_info['Rugby_Point']=$this->input->post('Rugby_Point');
		$Stu_info['Rugby_Trys']=$this->input->post('Rugby_Trys');
		$Stu_info['Rugby_Kicks']=$this->input->post('Rugby_Kicks');
		$Stu_info['Rugby_Passes']=$this->input->post('Rugby_Passes');
		$Stu_info['Rugby_MeterRuns']=$this->input->post('Rugby_MeterRuns');
		$Stu_info['Rugby_Run']=$this->input->post('Rugby_Run');
		$Stu_info['Rugby_Meter']=$this->input->post('Rugby_Meter');
		$Stu_info['Rugby_Offloads']=$this->input->post('Rugby_Offloads');
		
		$Stu_info['Rugby_Height']=$this->input->post('Rugby_Height');
		$Stu_info['Rugby_HeightInche']=$this->input->post('Rugby_HeightInche');
		$Stu_info['Rugby_Weight']=$this->input->post('Rugby_Weight');
		$Stu_info['Rugby_Bench']=$this->input->post('Rugby_Bench');
		
		$Stu_info['Rugby_Squat']=$this->input->post('Rugby_Squat');
		$Stu_info['Rugby_Time']=$this->input->post('Rugby_Time');
		$Stu_info['Rugby_DomaintHand']=$this->input->post('Rugby_DomaintHand');
		$Stu_info['Rugby_Defensive']=$this->input->post('Rugby_Defensive');
		
		
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Rugby_PlayerName']!='' && $Stu_info['Rugby_SchoolName']!='' && $Stu_info['Rugby_City']!='' && $Stu_info['Rugby_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('rugby_sport',$Stu_info);
				$Rugby_ProImage = $_FILES['Rugby_ProImage']['name'];
				$Rugby_ProImage2 = $_FILES['Rugby_ProImage2']['name'];
				$Rugby_ProImage3 = $_FILES['Rugby_ProImage3']['name'];
				$Rugby_ProImage4 = $_FILES['Rugby_ProImage4']['name'];
				
				if($Rugby_ProImage!="")
				{
				
				$this->sport_model->Rugby_ProImage($UserID);
				}
				if($Rugby_ProImage2!="")
				{
					$this->sport_model->Rugby_ProImage2($UserID);
				}
				if($Rugby_ProImage3!="")
				{
					$this->sport_model->Rugby_ProImage3($UserID);
				}
				if($Rugby_ProImage4!="")
				{
					$this->sport_model->Rugby_ProImage4($UserID);
				}
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/rugby');	
		}	
	}	
		
	
	public function skiing()
		{
			$data['MainContent'] = $this->load->view('sport/skiing_board',"", true);
			$this->load->view('template', $data);	
		}
		
	public function insert_skiing()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Skiing_PlayerName']=$this->input->post('Skiing_PlayerName');
		$Stu_info['Skiing_SchoolName']=$this->input->post('Skiing_SchoolName');
		
		$Stu_info['Skiing_City']=$this->input->post('Skiing_City');
		$Stu_info['Skiing_State']=$this->input->post('Skiing_State');
		$Stu_info['Skiing_Class']=$this->input->post('Skiing_Class');
		$Stu_info['Skiing_Fis']=$this->input->post('Skiing_Fis');
		$Stu_info['Skiing_Ussa']=$this->input->post('Skiing_Ussa');
		
		
		$Stu_info['Skiing_Alpine_Event_One']=$this->input->post('Skiing_Alpine_Event_One');
		$Stu_info['Skiing_Alpine_AvgMin_One']=$this->input->post('Skiing_Alpine_AvgMin_One');
		$Stu_info['Skiing_Alpine_AvgSec_One']=$this->input->post('Skiing_Alpine_AvgSec_One');
		$Stu_info['Skiing_Alpine_BestMin_One']=$this->input->post('Skiing_Alpine_BestMin_One');
		$Stu_info['Skiing_Alpine_BestSec_One']=$this->input->post('Skiing_Alpine_BestSec_One');
		$Stu_info['Skiing_Alpine_Event_Two']=$this->input->post('Skiing_Alpine_Event_Two');
		$Stu_info['Skiing_Alpine_AvgMin_Two']=$this->input->post('Skiing_Alpine_AvgMin_Two');
		$Stu_info['Skiing_Alpine_AvgSec_Two']=$this->input->post('Skiing_Alpine_AvgSec_Two');
		
		$Stu_info['Skiing_Alpine_BestMin_Two']=$this->input->post('Skiing_Alpine_BestMin_Two');
		$Stu_info['Skiing_Alpine_BestSec_Two']=$this->input->post('Skiing_Alpine_BestSec_Two');
		$Stu_info['Skiing_Nordic_Event_One']=$this->input->post('Skiing_Nordic_Event_One');
		$Stu_info['Skiing_Nordic_AvgMin_One']=$this->input->post('Skiing_Nordic_AvgMin_One');
		
		$Stu_info['Skiing_Nordic_AvgSec_One']=$this->input->post('Skiing_Nordic_AvgSec_One');
		$Stu_info['Skiing_Nordic_BestMin_One']=$this->input->post('Skiing_Nordic_BestMin_One');
		$Stu_info['Skiing_Nordic_BestSec_One']=$this->input->post('Skiing_Nordic_BestSec_One');
		$Stu_info['Skiing_Nordic_Event_Two']=$this->input->post('Skiing_Nordic_Event_Two');
		$Stu_info['Skiing_Nordic_AvgMin_Two']=$this->input->post('Skiing_Nordic_AvgMin_Two');
		$Stu_info['Skiing_Nordic_AvgSec_Two']=$this->input->post('Skiing_Nordic_AvgSec_Two');
		$Stu_info['Skiing_Nordic_BestMin_Two']=$this->input->post('Skiing_Nordic_BestMin_Two');
		$Stu_info['Skiing_Nordic_BestSec_Two']=$this->input->post('Skiing_Nordic_BestSec_Two');
		
		
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Skiing_PlayerName']!='' && $Stu_info['Skiing_SchoolName']!='' && $Stu_info['Skiing_City']!='' && $Stu_info['Skiing_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('skiing_sport',$Stu_info);
				$Skiing_ProImage = $_FILES['Skiing_ProImage']['name'];
				$Skiing_ProImage2 = $_FILES['Skiing_ProImage2']['name'];
				
				if($Skiing_ProImage!="")
				{
				
				$this->sport_model->Skiing_ProImage($UserID);
				}
				if($Skiing_ProImage2!="")
				{
					$this->sport_model->Skiing_ProImage2($UserID);
				}
				
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/skiing');	
		}	
	}	
			
	
	public function soccer()
		{
				
			$data['MainContent'] = $this->load->view('sport/soccer_board',"", true);
			$this->load->view('template', $data);	
				
		}
	public function insert_soccer()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Soccer_PlayerName']=$this->input->post('Soccer_PlayerName');
		$Stu_info['Soccer_SchoolName']=$this->input->post('Soccer_SchoolName');
		
		$Stu_info['Soccer_City']=$this->input->post('Soccer_City');
		$Stu_info['Soccer_State']=$this->input->post('Soccer_State');
		$Stu_info['Soccer_Class']=$this->input->post('Soccer_Class');
		$Stu_info['Soccer_Primary']=$this->input->post('Soccer_Primary');
		$Stu_info['Soccer_Secondary']=$this->input->post('Soccer_Secondary');
		
		
		$Stu_info['Soccer_Goals']=$this->input->post('Soccer_Goals');
		$Stu_info['Soccer_Shots']=$this->input->post('Soccer_Shots');
		$Stu_info['Soccer_Assists']=$this->input->post('Soccer_Assists');
		$Stu_info['Soccer_Allowed']=$this->input->post('Soccer_Allowed');
		$Stu_info['Soccer_Saves']=$this->input->post('Soccer_Saves');
		$Stu_info['Soccer_Height']=$this->input->post('Soccer_Height');
		$Stu_info['Soccer_HeightInche']=$this->input->post('Soccer_HeightInche');
		$Stu_info['Soccer_Weight']=$this->input->post('Soccer_Weight');
		
		$Stu_info['Soccer_Sprint']=$this->input->post('Soccer_Sprint');
		$Stu_info['Soccer_Drill']=$this->input->post('Soccer_Drill');
		$Stu_info['Soccer_Vertical']=$this->input->post('Soccer_Vertical');
		$Stu_info['Soccer_DomaintLeg']=$this->input->post('Soccer_DomaintLeg');
		
		$Stu_info['Soccer_Defensive']=$this->input->post('Soccer_Defensive');
		
		
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Soccer_PlayerName']!='' && $Stu_info['Soccer_SchoolName']!='' && $Stu_info['Soccer_City']!='' && $Stu_info['Soccer_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('soccer_sport',$Stu_info);
				$Soccer_ProImage = $_FILES['Soccer_ProImage']['name'];
				$Soccer_ProImage2 = $_FILES['Soccer_ProImage2']['name'];
				$Soccer_ProImage3 = $_FILES['Soccer_ProImage3']['name'];
				$Soccer_ProImage4 = $_FILES['Soccer_ProImage4']['name'];
				
				if($Soccer_ProImage!="")
				{
				
				$this->sport_model->Soccer_ProImage($UserID);
				}
				if($Soccer_ProImage2!="")
				{
					$this->sport_model->Soccer_ProImage2($UserID);
				}
				if($Soccer_ProImage3!="")
				{
					$this->sport_model->Soccer_ProImage3($UserID);
				}
				if($Soccer_ProImage4!="")
				{
					$this->sport_model->Soccer_ProImage4($UserID);
				}
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/soccer');	
		}	
	}	
			
	
	public function softball()
		{
				
			$data['MainContent'] = $this->load->view('sport/softball_board',"", true);
			$this->load->view('template', $data);	
				
		}
		
	public function insert_softball()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Soft_PlayerName']=$this->input->post('Soft_PlayerName');
		$Stu_info['Soft_SchoolName']=$this->input->post('Soft_SchoolName');
		
		$Stu_info['Soft_City']=$this->input->post('Soft_City');
		$Stu_info['Soft_State']=$this->input->post('Soft_State');
		$Stu_info['Soft_Class']=$this->input->post('Soft_Class');
		$Stu_info['Soft_Primary']=$this->input->post('Soft_Primary');
		$Stu_info['Soft_Secondary']=$this->input->post('Soft_Secondary');
		
		
		$Stu_info['Soft_Bats']=$this->input->post('Soft_Bats');
		$Stu_info['Soft_Batting']=$this->input->post('Soft_Batting');
		$Stu_info['Soft_Rbi']=$this->input->post('Soft_Rbi');
		$Stu_info['Soft_Stolen']=$this->input->post('Soft_Stolen');
		$Stu_info['Soft_OnBase']=$this->input->post('Soft_OnBase');
		$Stu_info['Soft_YardDash']=$this->input->post('Soft_YardDash');
		$Stu_info['Soft_Speed']=$this->input->post('Soft_Speed');
		$Stu_info['Soft_Era']=$this->input->post('Soft_Era');
		
		$Stu_info['Soft_Win']=$this->input->post('Soft_Win');
		$Stu_info['Soft_Pitch_Primary']=$this->input->post('Soft_Pitch_Primary');
		$Stu_info['Soft_Pitch_Secondary']=$this->input->post('Soft_Pitch_Secondary');
		$Stu_info['Soft_Pitch_Fastball']=$this->input->post('Soft_Pitch_Fastball');
		
		$Stu_info['Soft_Assists']=$this->input->post('Soft_Assists');
		
		$Stu_info['Soft_PutOuts']=$this->input->post('Soft_PutOuts');
		$Stu_info['Soft_Doubles']=$this->input->post('Soft_Doubles');
		$Stu_info['Soft_Triples']=$this->input->post('Soft_Triples');
		$Stu_info['Soft_Fielding']=$this->input->post('Soft_Fielding');
		
		
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Soft_PlayerName']!='' && $Stu_info['Soft_SchoolName']!='' && $Stu_info['Soft_City']!='' && $Stu_info['Soft_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('softball_sport',$Stu_info);
				$Soft_ProImage = $_FILES['Soft_ProImage']['name'];
				$Soft_ProImage2 = $_FILES['Soft_ProImage2']['name'];
				$Soft_ProImage3 = $_FILES['Soft_ProImage3']['name'];
				
				if($Soft_ProImage!="")
				{
				
				$this->sport_model->Soft_ProImage($UserID);
				}
				if($Soft_ProImage2!="")
				{
					$this->sport_model->Soft_ProImage2($UserID);
				}
				if($Soft_ProImage3!="")
				{
					$this->sport_model->Soft_ProImage3($UserID);
				}
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/softball');	
		}	
	}
	
		
	public function swimming()
		{
				
			$data['MainContent'] = $this->load->view('sport/swimming_board',"", true);
			$this->load->view('template', $data);	
				
		}
		
	public function insert_swimming()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Swim_PlayerName']=$this->input->post('Swim_PlayerName');
		$Stu_info['Swim_SchoolName']=$this->input->post('Swim_SchoolName');
		
		$Stu_info['Swim_City']=$this->input->post('Swim_City');
		$Stu_info['Swim_State']=$this->input->post('Swim_State');
		$Stu_info['Swim_Height']=$this->input->post('Swim_Height');
		$Stu_info['Swim_HeightInche']=$this->input->post('Swim_HeightInche');
		$Stu_info['Swim_Weight']=$this->input->post('Swim_Weight');
		
		
		$Stu_info['Swim_YearRound']=$this->input->post('Swim_YearRound');
		$Stu_info['Swim_YearSwim']=$this->input->post('Swim_YearSwim');
		$Stu_info['Swim_Competitive']=$this->input->post('Swim_Competitive');
		$Stu_info['Swim_MainStroke']=$this->input->post('Swim_MainStroke');
		$Stu_info['Swim_Event_One']=$this->input->post('Swim_Event_One');
		$Stu_info['Swim_Course_One']=$this->input->post('Swim_Course_One');
		$Stu_info['Swim_BestMin_One']=$this->input->post('Swim_BestMin_One');
		$Stu_info['Swim_BestSec_One']=$this->input->post('Swim_BestSec_One');
		
		$Stu_info['Swim_Event_Two']=$this->input->post('Swim_Event_Two');
		$Stu_info['Swim_Course_Two']=$this->input->post('Swim_Course_Two');
		$Stu_info['Swim_BestMin_Two']=$this->input->post('Swim_BestMin_Two');
		$Stu_info['Swim_BestSec_Two']=$this->input->post('Swim_BestSec_Two');
		
		$Stu_info['Swim_Event_Three']=$this->input->post('Swim_Event_Three');
		$Stu_info['Swim_Course_Three']=$this->input->post('Swim_Course_Three');
		$Stu_info['Swim_BestMin_Three']=$this->input->post('Swim_BestMin_Three');
		$Stu_info['Swim_BestSec_Three']=$this->input->post('Swim_BestSec_Three');
		
		$Stu_info['Swim_Event_Four']=$this->input->post('Swim_Event_Four');
		$Stu_info['Swim_Course_Four']=$this->input->post('Swim_Course_Four');
		$Stu_info['Swim_BestMin_Four']=$this->input->post('Swim_BestMin_Four');
		$Stu_info['Swim_BestSec_Four']=$this->input->post('Swim_BestSec_Four');
		
		
		$Stu_info['Swim_Div_Event_One']=$this->input->post('Swim_Div_Event_One');
		$Stu_info['Swim_Div_Desc_One']=$this->input->post('Swim_Div_Desc_One');
		$Stu_info['Swim_Div_Avg_One']=$this->input->post('Swim_Div_Avg_One');
		$Stu_info['Swim_Div_Best_One']=$this->input->post('Swim_Div_Best_One');
		
		$Stu_info['Swim_Div_Event_Two']=$this->input->post('Swim_Div_Event_Two');
		$Stu_info['Swim_Div_Desc_Two']=$this->input->post('Swim_Div_Desc_Two');
		$Stu_info['Swim_Div_Avg_Two']=$this->input->post('Swim_Div_Avg_Two');
		$Stu_info['Swim_Div_Best_Two']=$this->input->post('Swim_Div_Best_Two');
		
		
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Swim_PlayerName']!='' && $Stu_info['Swim_SchoolName']!='' && $Stu_info['Swim_City']!='' && $Stu_info['Swim_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('swimming_sport',$Stu_info);
				$Swim_ProImage = $_FILES['Swim_ProImage']['name'];
				$Swim_ProImage2 = $_FILES['Swim_ProImage2']['name'];
				
				if($Swim_ProImage!="")
				{
				
				$this->sport_model->Swim_ProImage($UserID);
				}
				if($Swim_ProImage2!="")
				{
					$this->sport_model->Swim_ProImage2($UserID);
				}
			
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/swimming');	
		}	
	}
		
		public function tennis()
		{
				
			$data['MainContent'] = $this->load->view('sport/tennis_board',"", true);
			$this->load->view('template', $data);	
				
		}
	public function insert_tennis()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Tenis_PlayerName']=$this->input->post('Tenis_PlayerName');
		$Stu_info['Tenis_SchoolName']=$this->input->post('Tenis_SchoolName');
		
		$Stu_info['Tenis_City']=$this->input->post('Tenis_City');
		$Stu_info['Tenis_State']=$this->input->post('Tenis_State');
		$Stu_info['Tenis_Position']=$this->input->post('Tenis_Position');
		$Stu_info['Tenis_Fastest']=$this->input->post('Tenis_Fastest');
		$Stu_info['Tenis_First']=$this->input->post('Tenis_First');
		
		
		$Stu_info['Tenis_Second']=$this->input->post('Tenis_Second');
		$Stu_info['Tenis_Local']=$this->input->post('Tenis_Local');
		$Stu_info['Tenis_Usta']=$this->input->post('Tenis_Usta');
		$Stu_info['Tenis_Itf']=$this->input->post('Tenis_Itf');
		$Stu_info['Tenis_Wta']=$this->input->post('Tenis_Wta');
		$Stu_info['Tenis_Recuirt']=$this->input->post('Tenis_Recuirt');
		$Stu_info['Tenis_Ata']=$this->input->post('Tenis_Ata');
		$Stu_info['Tenis_Height']=$this->input->post('Tenis_Height');
		
		$Stu_info['Tenis_HeightInche']=$this->input->post('Tenis_HeightInche');
		$Stu_info['Tenis_Weight']=$this->input->post('Tenis_Weight');
		$Stu_info['Tenis_Domaint']=$this->input->post('Tenis_Domaint');
	
		
		
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Tenis_PlayerName']!='' && $Stu_info['Tenis_SchoolName']!='' && $Stu_info['Tenis_City']!='' && $Stu_info['Tenis_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('tennis_sport',$Stu_info);
				$Tenis_ProImage = $_FILES['Tenis_ProImage']['name'];
				$Tenis_ProImage2 = $_FILES['Tenis_ProImage2']['name'];
				$Tenis_ProImage3 = $_FILES['Tenis_ProImage3']['name'];
				$Tenis_ProImage4 = $_FILES['Tenis_ProImage4']['name'];
				
				if($Tenis_ProImage!="")
				{
				
				$this->sport_model->Tenis_ProImage($UserID);
				}
				if($Tenis_ProImage2!="")
				{
					$this->sport_model->Tenis_ProImage2($UserID);
				}
				if($Tenis_ProImage3!="")
				{
					$this->sport_model->Tenis_ProImage3($UserID);
				}
				if($Tenis_ProImage4!="")
				{
					$this->sport_model->Tenis_ProImage4($UserID);
				}
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/tennis');	
		}	
	}		
	
	public function track()
		{
				
			$data['MainContent'] = $this->load->view('sport/track_board',"", true);
			$this->load->view('template', $data);	
				
		}
		
	public function insert_track()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Track_PlayerName']=$this->input->post('Track_PlayerName');
		$Stu_info['Track_SchoolName']=$this->input->post('Track_SchoolName');
		
		$Stu_info['Track_City']=$this->input->post('Track_City');
		$Stu_info['Track_State']=$this->input->post('Track_State');
		$Stu_info['Track_Height']=$this->input->post('Track_Height');
		$Stu_info['Track_HeightInche']=$this->input->post('Track_HeightInche');
		$Stu_info['Track_Weight']=$this->input->post('Track_Weight');
		
		
		$Stu_info['Track_Event_One']=$this->input->post('Track_Event_One');
		$Stu_info['Track_BestMin_One']=$this->input->post('Track_BestMin_One');
		$Stu_info['Track_BestSec_One']=$this->input->post('Track_BestSec_One');
		
		$Stu_info['Track_Event_Two']=$this->input->post('Track_Event_Two');
		$Stu_info['Track_BestMin_Two']=$this->input->post('Track_BestMin_Two');
		$Stu_info['Track_BestSec_Two']=$this->input->post('Track_BestSec_Two');
		
		$Stu_info['Track_Event_Three']=$this->input->post('Track_Event_Three');
		$Stu_info['Track_BestMin_Three']=$this->input->post('Track_BestMin_Three');
		$Stu_info['Track_BestSec_Three']=$this->input->post('Track_BestSec_Three');
		
		
		$Stu_info['Track_Event_Four']=$this->input->post('Track_Event_Four');
		$Stu_info['Track_BestMin_Four']=$this->input->post('Track_BestMin_Four');
		$Stu_info['Track_BestSec_Four']=$this->input->post('Track_BestSec_Four');
		
		
		$Stu_info['Track_Event_Five']=$this->input->post('Track_Event_Five');
		$Stu_info['Track_BestMin_Five']=$this->input->post('Track_BestMin_Five');
		$Stu_info['Track_BestSec_Five']=$this->input->post('Track_BestSec_Five');
		
		
		$Stu_info['Track_Field_Event_One']=$this->input->post('Track_Field_Event_One');
		$Stu_info['Track_Field_BestPer_One']=$this->input->post('Track_Field_BestPer_One');
		$Stu_info['Track_Field_BestInches_One']=$this->input->post('Track_Field_BestInches_One');
		
		$Stu_info['Track_Field_Event_Two']=$this->input->post('Track_Field_Event_Two');
		$Stu_info['Track_Field_BestPer_Two']=$this->input->post('Track_Field_BestPer_Two');
		$Stu_info['Track_Field_BestInches_Two']=$this->input->post('Track_Field_BestInches_Two');
		
		$Stu_info['Track_Field_Event_Three']=$this->input->post('Track_Field_Event_Three');
		$Stu_info['Track_Field_BestPer_Three']=$this->input->post('Track_Field_BestPer_Three');
		$Stu_info['Track_Field_BestInches_Three']=$this->input->post('Track_Field_BestInches_Three');
		
		$Stu_info['Track_Field_Event_Four']=$this->input->post('Track_Field_Event_Four');
		$Stu_info['Track_Field_BestPer_Four']=$this->input->post('Track_Field_BestPer_Four');
		$Stu_info['Track_Field_BestInches_Four']=$this->input->post('Track_Field_BestInches_Four');
		
		$Stu_info['Track_Field_Event_Five']=$this->input->post('Track_Field_Event_Five');
		$Stu_info['Track_Field_BestPer_Five']=$this->input->post('Track_Field_BestPer_Five');
		$Stu_info['Track_Field_BestInches_Five']=$this->input->post('Track_Field_BestInches_Five');
		
	
		
		
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Track_PlayerName']!='' && $Stu_info['Track_SchoolName']!='' && $Stu_info['Track_City']!='' && $Stu_info['Track_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('track_and_field_sport',$Stu_info);
				$Track_ProImage = $_FILES['Track_ProImage']['name'];
				$Track_ProImage2 = $_FILES['Track_ProImage2']['name'];
				
				if($Track_ProImage!="")
				{
				
				$this->sport_model->Track_ProImage($UserID);
				}
				if($Track_ProImage2!="")
				{
					$this->sport_model->Track_ProImage2($UserID);
				}
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/track');	
		}	
	}		
		
	
	public function volleyball()
		{
				
			$data['MainContent'] = $this->load->view('sport/volleyball_board',"", true);
			$this->load->view('template', $data);	
		}
		
	public function insert_volleyball()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Volly_PlayerName']=$this->input->post('Volly_PlayerName');
		$Stu_info['Volly_SchoolName']=$this->input->post('Volly_SchoolName');
		
		$Stu_info['Volly_City']=$this->input->post('Volly_City');
		$Stu_info['Volly_State']=$this->input->post('Volly_State');
		$Stu_info['Volly_Class']=$this->input->post('Volly_Class');
		$Stu_info['Volly_Primary']=$this->input->post('Volly_Primary');
		
		
		$Stu_info['Volly_Secondary']=$this->input->post('Volly_Secondary');
		$Stu_info['Volly_Hitting']=$this->input->post('Volly_Hitting');
		$Stu_info['Volly_Block']=$this->input->post('Volly_Block');
		$Stu_info['Volly_Digs']=$this->input->post('Volly_Digs');
		$Stu_info['Volly_Set']=$this->input->post('Volly_Set');
		$Stu_info['Volly_Ace']=$this->input->post('Volly_Ace');
		$Stu_info['Volly_Serving']=$this->input->post('Volly_Serving');
		$Stu_info['Volly_Serve']=$this->input->post('Volly_Serve');
		
		$Stu_info['Volly_Assists']=$this->input->post('Volly_Assists');
		$Stu_info['Volly_KillSet']=$this->input->post('Volly_KillSet');
		$Stu_info['Volly_Kill']=$this->input->post('Volly_Kill');
	
	
		$Stu_info['Volly_Height']=$this->input->post('Volly_Height');
		$Stu_info['Volly_HeightInche']=$this->input->post('Volly_HeightInche');
		$Stu_info['Volly_Weight']=$this->input->post('Volly_Weight');
		$Stu_info['Volly_DomaintHand']=$this->input->post('Volly_DomaintHand');
		$Stu_info['Volly_Standing']=$this->input->post('Volly_Standing');
		$Stu_info['Volly_Approach']=$this->input->post('Volly_Approach');
		
		
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Volly_PlayerName']!='' && $Stu_info['Volly_SchoolName']!='' && $Stu_info['Volly_City']!='' && $Stu_info['Volly_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('volleyball_sport',$Stu_info);
				$Volly_ProImage = $_FILES['Volly_ProImage']['name'];
				$Volly_ProImage2 = $_FILES['Volly_ProImage2']['name'];
				$Volly_ProImage3 = $_FILES['Volly_ProImage3']['name'];
				$Volly_ProImage4 = $_FILES['Volly_ProImage4']['name'];
				
				if($Volly_ProImage!="")
				{
				
				$this->sport_model->Volly_ProImage($UserID);
				}
				if($Volly_ProImage2!="")
				{
					$this->sport_model->Volly_ProImage2($UserID);
				}
				if($Volly_ProImage3!="")
				{
					$this->sport_model->Volly_ProImage3($UserID);
				}
				if($Volly_ProImage4!="")
				{
					$this->sport_model->Volly_ProImage4($UserID);
				}
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/volleyball');	
		}	
	}		
	
		
	public function water_polo()
		{
				
			$data['MainContent'] = $this->load->view('sport/water_polo_board',"", true);
			$this->load->view('template', $data);	
				
		}
		
	public function insert_water_polo()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Water_PlayerName']=$this->input->post('Water_PlayerName');
		$Stu_info['Water_SchoolName']=$this->input->post('Water_SchoolName');
		
		$Stu_info['Water_City']=$this->input->post('Water_City');
		$Stu_info['Water_State']=$this->input->post('Water_State');
		$Stu_info['Water_Class']=$this->input->post('Water_Class');
		$Stu_info['Water_Primary']=$this->input->post('Water_Primary');
		
		
		$Stu_info['Water_Secondary']=$this->input->post('Water_Secondary');
		$Stu_info['Water_Shots']=$this->input->post('Water_Shots');
		$Stu_info['Water_Assists']=$this->input->post('Water_Assists');
		$Stu_info['Water_Goals']=$this->input->post('Water_Goals');
		$Stu_info['Water_Allowed']=$this->input->post('Water_Allowed');
		$Stu_info['Water_Saves']=$this->input->post('Water_Saves');
		$Stu_info['Water_Height']=$this->input->post('Water_Height');
		$Stu_info['Water_HeightInche']=$this->input->post('Water_HeightInche');
		
		$Stu_info['Water_Weight']=$this->input->post('Water_Weight');
		$Stu_info['Water_DomaintHand']=$this->input->post('Water_DomaintHand');
		$Stu_info['Water_Yard']=$this->input->post('Water_Yard');
	
	
		$Stu_info['Water_YardDash']=$this->input->post('Water_YardDash');
		$Stu_info['Water_Defensive']=$this->input->post('Water_Defensive');
		
		
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Water_PlayerName']!='' && $Stu_info['Water_SchoolName']!='' && $Stu_info['Water_City']!='' && $Stu_info['Water_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('water_polo_sport',$Stu_info);
				$Water_ProImage = $_FILES['Water_ProImage']['name'];
				$Water_ProImage2 = $_FILES['Water_ProImage2']['name'];
				$Water_ProImage3 = $_FILES['Water_ProImage3']['name'];
				$Water_ProImage4 = $_FILES['Water_ProImage4']['name'];
				
				if($Water_ProImage!="")
				{
				
				$this->sport_model->Water_ProImage($UserID);
				}
				if($Water_ProImage2!="")
				{
					$this->sport_model->Water_ProImage2($UserID);
				}
				if($Water_ProImage3!="")
				{
					$this->sport_model->Water_ProImage3($UserID);
				}
				if($Water_ProImage4!="")
				{
					$this->sport_model->Water_ProImage4($UserID);
				}
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/water_polo');	
		}	
	}	
	
		
	public function wrestling()
		{
				
			$data['MainContent'] = $this->load->view('sport/wrestling_board',"", true);
			$this->load->view('template', $data);	
				
		}
		
	public function insert_wrestling()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Wrest_PlayerName']=$this->input->post('Wrest_PlayerName');
		$Stu_info['Wrest_SchoolName']=$this->input->post('Wrest_SchoolName');
		
		$Stu_info['Wrest_City']=$this->input->post('Wrest_City');
		$Stu_info['Wrest_State']=$this->input->post('Wrest_State');
		$Stu_info['Wrest_Win']=$this->input->post('Wrest_Win');
		$Stu_info['Wrest_Winning']=$this->input->post('Wrest_Winning');
		
		
		$Stu_info['Wrest_Pins']=$this->input->post('Wrest_Pins');
		$Stu_info['Wrest_Years']=$this->input->post('Wrest_Years');
		$Stu_info['Wrest_StateRank']=$this->input->post('Wrest_StateRank');
		$Stu_info['Wrest_Height']=$this->input->post('Wrest_Height');
		$Stu_info['Wrest_HeightInche']=$this->input->post('Wrest_HeightInche');
		$Stu_info['Wrest_Weight']=$this->input->post('Wrest_Weight');
		$Stu_info['Wrest_Projected']=$this->input->post('Wrest_Projected');
		
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Wrest_PlayerName']!='' && $Stu_info['Wrest_SchoolName']!='' && $Stu_info['Wrest_City']!='' && $Stu_info['Wrest_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('wrestling_sport',$Stu_info);
				$Wrest_ProImage = $_FILES['Wrest_ProImage']['name'];
				$Wrest_ProImage2 = $_FILES['Wrest_ProImage2']['name'];
				$Wrest_ProImage3 = $_FILES['Wrest_ProImage3']['name'];
				$Wrest_ProImage4 = $_FILES['Wrest_ProImage4']['name'];
				
				if($Wrest_ProImage!="")
				{
				
				$this->sport_model->Wrest_ProImage($UserID);
				}
				if($Wrest_ProImage2!="")
				{
					$this->sport_model->Wrest_ProImage2($UserID);
				}
				if($Wrest_ProImage3!="")
				{
					$this->sport_model->Wrest_ProImage3($UserID);
				}
				if($Wrest_ProImage4!="")
				{
					$this->sport_model->Wrest_ProImage4($UserID);
				}
				
				
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/wrestling');	
		}	
	}		
	
	public function womens_gymnastics()
	{
			
		$data['MainContent'] = $this->load->view('sport/womens_gymnastics_board',"", true);
		$this->load->view('template', $data);	
			
	}
	
	public function insert_womens_gymnastics()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Women_PlayerName']=$this->input->post('Women_PlayerName');
		$Stu_info['Women_SchoolName']=$this->input->post('Women_SchoolName');
		
		$Stu_info['Women_City']=$this->input->post('Women_City');
		$Stu_info['Women_State']=$this->input->post('Women_State');
		$Stu_info['Women_BestScore']=$this->input->post('Women_BestScore');
		$Stu_info['Women_AvgScore']=$this->input->post('Women_AvgScore');
		
		
		$Stu_info['Women_Bal_BestScore']=$this->input->post('Women_Bal_BestScore');
		$Stu_info['Women_Bal_AvgScore']=$this->input->post('Women_Bal_AvgScore');
		$Stu_info['Women_Vault_BestScore']=$this->input->post('Women_Vault_BestScore');
		$Stu_info['Women_Vault_AvgScore']=$this->input->post('Women_Vault_AvgScore');
		$Stu_info['Women_UnEven_BestScore']=$this->input->post('Women_UnEven_BestScore');
		$Stu_info['Women_UnEven_AvgScore']=$this->input->post('Women_UnEven_AvgScore');
		$Stu_info['Women_All_BestScore']=$this->input->post('Women_All_BestScore');
		$Stu_info['Women_All_AvgScore']=$this->input->post('Women_All_AvgScore');
		$Stu_info['Women_Height']=$this->input->post('Women_Height');
		$Stu_info['Women_HeightInche']=$this->input->post('Women_HeightInche');
		$Stu_info['Women_Weight']=$this->input->post('Women_Weight');
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Women_PlayerName']!='' && $Stu_info['Women_SchoolName']!='' && $Stu_info['Women_City']!='' && $Stu_info['Women_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('women_gym_sport',$Stu_info);
				$Women_ProImage = $_FILES['Women_ProImage']['name'];
				$Women_ProImage2 = $_FILES['Women_ProImage2']['name'];
				$Women_ProImage3 = $_FILES['Women_ProImage3']['name'];
				$Women_ProImage4 = $_FILES['Women_ProImage4']['name'];
				
				
				if($Women_ProImage!="")
				{
				
				$this->sport_model->Women_ProImage($UserID);
				}
				if($Women_ProImage2!="")
				{
					$this->sport_model->Women_ProImage2($UserID);
				}
				if($Women_ProImage3!="")
				{
					$this->sport_model->Women_ProImage3($UserID);
				}
				if($Women_ProImage4!="")
				{
					$this->sport_model->Women_ProImage4($UserID);
				}
					
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/womens_gymnastics');	
		}	
	}	
	
	
	
	public function rowing()
	{
			
		$data['MainContent'] = $this->load->view('sport/rowing_board',"", true);
		$this->load->view('template', $data);	
			
	}
	
	public function insert_rowing()
	{
	
		if($this->session->userdata('MyRecuritID'))
		{
			$UserID=$this->session->userdata('MyRecuritID');	
		}if($this->session->userdata('UserID')){
			$UserID= $this->session->userdata('UserID'); 	
		}
		
		$getUser=get_user_detail($UserID);
		
		if($getUser['UserType']=='1')
		{
			$StuID = get_sport_detail($UserID);
			$Stu_info['Stu_ID']=$StuID['Stu_ID'];
		}
		if($getUser['UserType']==2)
		{
			$StuID = get_juco_detail($UserID);
			$Stu_info['Juco_ID']=$StuID['Juco_ID'];
		
		}
	
		
		$Stu_info['UserID']=$UserID;
		$User['Step']='4';
		$Stu_info['Row_PlayerName']=$this->input->post('Row_PlayerName');
		$Stu_info['Row_SchoolName']=$this->input->post('Row_SchoolName');
		
		$Stu_info['Row_City']=$this->input->post('Row_City');
		$Stu_info['Row_State']=$this->input->post('Row_State');
		$Stu_info['Row_Class']=$this->input->post('Row_Class');
		$Stu_info['Row_Primary']=$this->input->post('Row_Primary');
		
		
		$Stu_info['Row_Secondary']=$this->input->post('Row_Secondary');
		$Stu_info['Row_ErgMin_Two']=$this->input->post('Row_ErgMin_Two');
		$Stu_info['Row_ErgSec_Two']=$this->input->post('Row_ErgSec_Two');
		$Stu_info['Row_ErgMin_Five']=$this->input->post('Row_ErgMin_Five');
		$Stu_info['Row_ErgSec_Five']=$this->input->post('Row_ErgSec_Five');
		$Stu_info['Row_ErgMin_Six']=$this->input->post('Row_ErgMin_Six');
		$Stu_info['Row_ErgSec_Six']=$this->input->post('Row_ErgSec_Six');
		$Stu_info['Row_Season']=$this->input->post('Row_Season');
		$Stu_info['Row_Sta_Weight']=$this->input->post('Row_Sta_Weight');
		$Stu_info['Row_Bio_Height']=$this->input->post('Row_Bio_Height');
		$Stu_info['Row_Bio_HeightInche']=$this->input->post('Row_Bio_HeightInche');
		
		
		$Stu_info['Row_Bio_Weight']=$this->input->post('Row_Bio_Weight');
		$Stu_info['Row_Bio_Bench']=$this->input->post('Row_Bio_Bench');
		$Stu_info['Row_Bio_Squat']=$this->input->post('Row_Bio_Squat');
		
		$Stu_info['Row_Bio_DomaintHand']=$this->input->post('Row_Bio_DomaintHand');
		$Stu_info['Row_WingSpan']=$this->input->post('Row_WingSpan');
		$Stu_info['Row_WingSpanInche']=$this->input->post('Row_WingSpanInche');
		
		$Stu_info['Status']='1';
		
		
		if($Stu_info['Row_PlayerName']!='' && $Stu_info['Row_SchoolName']!='' && $Stu_info['Row_City']!='' && $Stu_info['Row_State']!=''){
		
				
						
				$this->db->set('RegisterDate', 'NOW()', FALSE);	
				$last_id=$this->general_model->insert_data('rowing_sport',$Stu_info);
				$Row_ProImage = $_FILES['Row_ProImage']['name'];
				$Row_ProImage2 = $_FILES['Row_ProImage2']['name'];
				$Row_ProImage3 = $_FILES['Row_ProImage3']['name'];
				$Row_ProImage4 = $_FILES['Row_ProImage4']['name'];
				
				
				if($Row_ProImage!="")
				{
				
				$this->sport_model->Row_ProImage($UserID);
				}
				if($Row_ProImage2!="")
				{
					$this->sport_model->Row_ProImage2($UserID);
				}
				if($Row_ProImage3!="")
				{
					$this->sport_model->Row_ProImage3($UserID);
				}
				if($Row_ProImage4!="")
				{
					$this->sport_model->Row_ProImage4($UserID);
				}
					
				$this->general_model->update_data('user_register',$User,array('UserID'=>$UserID));	
				$this->session->set_flashdata('successmessage','Thank You For Completing.');
				
				$User=get_user_detail($UserID);  
				if($User['UserType']=='1')
				{
					redirect(base_url().'student_athlete/step4');
				}else
				{
				  redirect(base_url().'juco_transfer/step4');
				}
				
		}
		else{
			$this->session->set_flashdata('errormessage','Some Fields are Missing.');
			redirect(base_url().'sport/rowing');	
		}	
	}	
	
	
		
		
			

}	