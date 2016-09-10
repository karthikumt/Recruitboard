<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('general_model');
		$this->load->library('session');			
	}
	
	public function index(){
		//$data['country_list'] = "Any content";
		if(get_user()){
			redirect(base_url().'dashboard');
		}
        $data['MainContent'] = $this->load->view('login', "", true);
        $this->load->view('template', $data);				
	}
	
	public function action(){
		
			$this->session->unset_userdata('UserID');	
			if($this->input->post('UserEmailAddress')!="" && $this->input->post('UserPassword')!="")
			{
				$LoginCheck = $this->general_model->check_login();			
				
				if(!empty($LoginCheck))
				{
					
					if($LoginCheck['Status']==0)
					{
						$this->session->set_flashdata('resendcode','Please activate your account by clicking the button below. Then check your email and follow the instructions. <a href='. base_url().'email_confirm/no/'.$LoginCheck['UserID'].'>Click here to verify</a>
						');
						redirect(base_url());	
					}
					if($LoginCheck['AdminStatus']==0)
					{
						$this->session->set_flashdata('errormessa','Your Account Is Inactive');
						redirect(base_url());	
					}
					
			$this->session->set_userdata('MyRecuritID',$LoginCheck['UserID']);	
			
			if($LoginCheck['UserType']==1 || $LoginCheck['UserType']==2 )
			 {
				if($LoginCheck['PaymentType']=="1")
				{
					if($LoginCheck['Payment']!="")
					{
						$pay_date=date('Y-m-d',strtotime($LoginCheck['PaymentDate']));
						$cur_date=date('Y-m-d');
						$date1=date_create($pay_date);
						$date2=date_create($cur_date);
						$diff=date_diff($date1,$date2);
						$days=$diff->format("%a%");
							
							if($days<=30)
							{
							
							$payment="complate";
							
							}
							else
							{
							redirect(base_url().'payment_expire');
							}
					}
					else
					{
					redirect(base_url().'payment_expire');
					}
				}
				
				if($LoginCheck['PaymentType']=="2")
				{
					if($LoginCheck['Payment']!="")
					{
						$pay_date=date('Y-m-d',strtotime($LoginCheck['PaymentDate']));
						$cur_date=date('Y-m-d');
						$date1=date_create($pay_date);
						$date2=date_create($cur_date);
						$diff=date_diff($date1,$date2);
						$days=$diff->format("%a%");
							
							if($days<=365)
							{
							
							$payment="complate";
							
							}
							else
							{
							redirect(base_url().'payment_expire');
							}
					}
					else
					{
					redirect(base_url().'payment_expire');
					}
				}
			 }
									
					
						
					if($LoginCheck['UserType']==1)
					{
					
					
						$this->session->set_userdata('MyRecuritID',$LoginCheck['UserID']);
						if($LoginCheck['Step']=='11')
						{
							if($LoginCheck['Payment']=="")
							{
								$this->session->set_flashdata('errormessa','We cant process Please payment right now');
								$this->session->set_userdata('MyRecuritID',$LoginCheck['UserID']);
								redirect(base_url().'student_athlete/step8');
							}
							else
							{
								$this->session->set_userdata('Dashbord',$LoginCheck['Step']);
								redirect(base_url().'dashboard');
							}
						}
						else
						{	
						redirect(base_url().'student_athlete/step'.$LoginCheck['Step']);	
						}
						
					}
					if($LoginCheck['UserType']==2)
					{
					
						/*if($LoginCheck['Payment']=="")
						{
							$this->session->set_flashdata('errormessa','We cant process Please payment right now');
							redirect(base_url());	
						}
						*/
					
						$this->session->set_userdata('MyRecuritID',$LoginCheck['UserID']);
					
						if($LoginCheck['Step']=='11')
						{
						$this->session->set_userdata('Dashbord',$LoginCheck['IsComplated']);
						redirect(base_url().'dashboard');
						}
						else
						{
						redirect(base_url().'juco_transfer/step'.$LoginCheck['Step']);	
						}
					}
					redirect(base_url().'come_soon');	
					$this->session->set_userdata('MyRecuritID',$LoginCheck['UserID']);
					if($LoginCheck['UserType']==3)
					{
					
						if($LoginCheck['Step']=='5')
						{
						 
							$this->session->set_userdata('Dashbord',$LoginCheck['IsComplated']);
							redirect(base_url().'dashboard');
						}
						else
						{	
						redirect(base_url().'colleage_coach/step'.$LoginCheck['Step']);	
						}
				
					}
					if($LoginCheck['UserType']==4)
					{
					 redirect(base_url().'come_soon');		
					 if($LoginCheck['Step']=='5')
						{
							$this->session->set_userdata('Dashbord',$LoginCheck['IsComplated']);
							redirect(base_url().'dashboard');
						}
						else
						{	
						redirect(base_url().'colleage_admission/step'.$LoginCheck['Step']);	
						}
					}
					if($LoginCheck['UserType']==5)
					{
					  redirect(base_url().'come_soon');	
					  if($LoginCheck['Step']=='4')
						{
							$this->session->set_userdata('Dashbord',$LoginCheck['IsComplated']);
							redirect(base_url().'dashboard');
						}
						else
						{	
						redirect(base_url().'highschool_coach/step'.$LoginCheck['Step']);	
						}
					}
					if($LoginCheck['UserType']==6)
					{
					  redirect(base_url().'come_soon');	
					  if($LoginCheck['Step']=='4')
						{
							$this->session->set_userdata('Dashbord',$LoginCheck['IsComplated']);
							redirect(base_url().'dashboard');
						}
						else
						{	
						redirect(base_url().'club_coach/step'.$LoginCheck['Step']);	
						}
					}
					
					if($LoginCheck['UserType']==7)
					{
					  redirect(base_url().'come_soon');	
					  if($LoginCheck['Step']=='4')
						{
							$this->session->set_userdata('Dashbord',$LoginCheck['IsComplated']);
							redirect(base_url().'dashboard');
						}
						else
						{
						redirect(base_url().'highschool_teacher/step'.$LoginCheck['Step']);	
						}
						
					}
					if($LoginCheck['UserType']==8)
					{
						redirect(base_url().'come_soon');	
						if($LoginCheck['Step']=='5')
							{
								$this->session->set_userdata('Dashbord',$LoginCheck['IsComplated']);
								redirect(base_url().'dashboard');
							}
							else
							{
							redirect(base_url().'development_coach/step'.$LoginCheck['Step']);	
							}
					}
					if($LoginCheck['UserType']==9)
					{
					    redirect(base_url().'come_soon');	
						if($LoginCheck['Step']=='5')
						{
							$this->session->set_userdata('Dashbord',$LoginCheck['IsComplated']);
							redirect(base_url().'dashboard');
						}
						else
						{
						redirect(base_url().'academic_tutor/step'.$LoginCheck['Step']);	
						}
					}
					
				}else{
					$this->session->set_flashdata('errormessa','Invalid username or password.');
					redirect(base_url());
				}	
			}
			
			
			
		
	}
	public function logout(){
		$this->session->unset_userdata('RecuritUserID');
		redirect(base_url());
	}	
}

