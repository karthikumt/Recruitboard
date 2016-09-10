<?php
include_once APPPATH.'libraries/password.php';
include_once APPPATH.'libraries/Class.PayFlow.php';

class Myrecruit_model1 extends CI_Model {

	public function __construct()
	{		
		parent::__construct();				
		//$this->load->library('upload');
		$this->load->library('email');
		$this->load->library('image_lib');	
	
	}
	
	public function getGender($UserID)
	{
		
		$sql="SELECT Coach_GenderID FROM colleage_coach WHERE UserID = '".$UserID."'";    
		$query = $this->db->query($sql)->row_array();
		return $query;
			
	}
	
	
	public function Po_ImageName($PostID)
	{
		$Po_ImageName = $_FILES['Po_ImageName']['name'];
		$config['upload_path'] = './register_images/coach_post_ad/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Po_ImageName_'.$PostID;
		
		$this->load->library('upload',$config);
		if($this->upload->do_upload('Po_ImageName')){
			$Po_ImageName = $this->upload->data(); //uploaded fiel name					
			$UpdateFilename = array('Po_ImageName'=>$Po_ImageName['file_name']);
			$this->db->where('PostID', $PostID);
			$this->db->update('coach_post_ads',$UpdateFilename);
			
			my_resize('./register_images/coach_post_ad/original/'.$Po_ImageName['file_name'],'./register_images/coach_post_ad/small/'.$Po_ImageName['file_name'],130,130);	
		
		}
	}
	
	public function Po_ImageData($Imagename,$id)
	{
		
		$newFile=$id."-".$Imagename;
		$UpdateFilename = array('Po_ImageName'=>$newFile);
		$this->db->where('PostID', $id);
		$this->db->update('coach_post_ads',$UpdateFilename);
		my_resize('./register_images/colleage_coach/original/'.$Imagename,'./register_images/coach_post_ad/original/'.$newFile,130,130);
		my_resize('./register_images/colleage_coach/small/'.$Imagename,'./register_images/coach_post_ad/small/'.$newFile,130,130);
				
		
		
	}
	
	
	public function AdsByPage($page=0,$rpp=6)
	{
		$UserID=$this->session->userdata('MyRecuritID'); 
		$User=get_profile_detail($UserID);
		
		if($User['UserType']==1){
			$Gender=get_sport_detail($UserID);
			$GenderID=$Gender['Stu_GenderID'];
			$getdata=get_row_data('stu_athlete_sport','SportID',$Gender['Stu_SportID']); 
            $SportName= str_replace("'","",$getdata['SportName']);                     
                                   
		}
		if($User['UserType']==2){
			$Gender=get_Juco_detail($UserID);
			$GenderID=$Gender['Juco_GenderID'];
			$getdata=get_row_data('stu_athlete_sport','SportID',$Gender['Juco_SportID']); 
            $SportName= str_replace("'","",$getdata['SportName']);       		
		}


		$sql="SELECT * FROM `coach_post_ads` WHERE `Po_Sport` ='".$SportName."' AND (NOT FIND_IN_SET(`Po_NotInterest`, '". $UserID ."') OR `Po_NotInterest` IS NULL)";
		 
		
		if($getdata['SportName']=='Golf' || $getdata['SportName']=='Tennis' || $getdata['SportName']=='Swimming & Diving')
		{

		}
		else
		{
			if($GenderID==36)
			{
				$sql.=" AND Po_GenderID=1";	
			}
			if($GenderID==30)
			{
				$sql.=" AND Po_GenderID=2";	
			}
		}


		$sql.=" ORDER BY PostID DESC";
		$sql.=" LIMIT ". ($page*$rpp). ", ".$rpp;
		
		$query = $this->db->query($sql)->result_array();
		return $query;		
	
	}	
	
	public function AllAds()
	{
		$UserID=$this->session->userdata('MyRecuritID'); 
		$User=get_profile_detail($UserID);
		
		if($User['UserType']==1){
			$Gender=get_sport_detail($UserID);
			$GenderID=$Gender['Stu_GenderID'];
			$getdata=get_row_data('stu_athlete_sport','SportID',$Gender['Stu_SportID']); 
            $SportName= str_replace("'","",$getdata['SportName']);                     
                                   
		}
		if($User['UserType']==2){
			$Gender=get_Juco_detail($UserID);
			$GenderID=$Gender['Juco_GenderID'];
			$getdata=get_row_data('stu_athlete_sport','SportID',$Gender['Juco_SportID']); 
            $SportName= str_replace("'","",$getdata['SportName']);       		
		}


		$sql="SELECT * FROM `coach_post_ads` WHERE `Po_Sport` ='".$SportName."' AND (NOT FIND_IN_SET(`Po_NotInterest`, '". $UserID ."') OR `Po_NotInterest` IS NULL)";
		
		//$sql="SELECT * FROM `coach_post_ads` WHERE 1=1 AND (`Po_NotInterest` NOT LIKE '".$UserID."' AND `Po_NotInterest` NOT LIKE '%,".$UserID."' AND `Po_NotInterest` NOT LIKE '".$UserID.",%' AND `Po_NotInterest` NOT LIKE '%,".$UserID.",%') OR (`Po_NotInterest` IS NULL) AND `Po_Sport` ='".$SportName."'";
		
		if($getdata['SportName']=='Golf' || $getdata['SportName']=='Tennis' || $getdata['SportName']=='Swimming & Diving')
		{

		}
		else
		{
			if($GenderID==36)
			{
				$sql.=" AND Po_GenderID=1";	
			}
			if($GenderID==30)
			{
				$sql.=" AND Po_GenderID=2";	
			}
		}


		$sql.=" ORDER BY PostID DESC";
		$query = $this->db->query($sql)->result_array();
		return $query;		
	
	}
	
	public function PostAds()
	{
		$UserID=$this->session->userdata('MyRecuritID'); 
		$sql="SELECT * FROM `coach_post_ads` WHERE `Po_ExpireDate`>=NOW() AND UserID='".$UserID."' ORDER BY PostID DESC";
		$query = $this->db->query($sql)->result_array();
		return $query;	
	}
	
	public function ExpireAds()
	{
		$UserID=$this->session->userdata('MyRecuritID'); 
		$sql="SELECT * FROM `coach_post_ads` WHERE `Po_ExpireDate`<=NOW() AND UserID='".$UserID."' ORDER BY PostID DESC";
		$query = $this->db->query($sql)->result_array();
		return $query;		
	}
	
	public function Delete_Post($PostID)
	{
		$sql="SELECT Po_ImageName FROM `coach_post_ads` WHERE PostID='".$PostID."'";
		$query = $this->db->query($sql)->row_array();
		
		unlink('./register_images/coach_post_ad/original/'.$query['Po_ImageName']);
		unlink('./register_images/coach_post_ad/small/'.$query['Po_ImageName']);
		
		$this->db->where('PostID', $PostID);
		$this->db->delete('coach_post_ads');
		
	}
	
	public function NotInterst($PostID)
	{
		$sql="SELECT Po_NotInterest FROM `coach_post_ads` WHERE PostID='".$PostID."'";
		$query = $this->db->query($sql)->row_array();
		return $query;
	}
	
	public function update_Interest($PostID)
	{
		$UserID=$this->session->userdata('MyRecuritID'); 
		$sql="update coach_post_ads set Po_NotInterest='".$UserID."' where PostID='".$PostID."'";
		$query = $this->db->query($sql);
		
	}
	public function concat_Interest($PostID)
	{
		$UserID=$this->session->userdata('MyRecuritID'); 
		$sql="update coach_post_ads set `Po_NotInterest`=concat(`Po_NotInterest`,',".$UserID."') where PostID='".$PostID."'"; 
		$query = $this->db->query($sql);
	}
	
	public function payment_register()  
	{
	  $UserID=$this->session->userdata('MyRecuritID'); 
	  $getUser=get_user_detail($UserID);
	  
	  $PayFlow = new PayFlow('LiveLoveAloha', 'PayPal', 'developer', 'tejar111', 'recurring');
	  $PayFlow->setEnvironment('live'); 
	 
	  if($getUser['UserType']=='1'){
		$Student_data=get_user_data('student_athlete',array('Stu_CountryID','Stu_ZipCode'),$UserID);
	    $County=get_row_data('country','CountryID',$Student_data['Stu_CountryID']);
	  	$ZipCode=$Student_data['Stu_ZipCode'];
	  }else{
		 $Student_data=get_user_data('juco_transfer',array('Juco_CountryID','Juco_ZipCode'),$UserID);
	  	 $County=get_row_data('country','CountryID',$Student_data['Juco_CountryID']);  
	  	 $ZipCode=$Student_data['Juco_ZipCode'];
	  }
	  
	  $CCName=$this->input->post('CardNames');
	  $CCNumber=$this->input->post('CardNumbers');
	  $CCMonth=$this->input->post('ExpMonths');
	  $CCYear=$this->input->post('ExpYears');
	  $CVC=$this->input->post('CuvNos');

	  $City=$this->input->post('City');
	  $StrAdd=$this->input->post('StrAdd');

	  $FirstName = $this->input->post('FirstName');
	  $LastName = $this->input->post('LastName');

$Zip=$this->input->post('Zip');
$Country=$this->input->post('Country');


	  $PaymentType = $this->input->post('PaymentType');
	  if($PaymentType==1){ $PaidAmt="9.99"; $Fre='MONT';}
	  if($PaymentType==2){ $PaidAmt="99.99"; $Fre='YEAR'; }
	  if($PaymentType==3){ $PaidAmt="199.99"; $Fre='YEAR';}
	  
	  $ZipCode=""; 
      $CurrCode = 'USD';
	  $Email = $getUser['UserEmail'];
	 /* $LastName = $getUser['LastName'];
	  $FirstName = $getUser['FirstName'];*/
	  $CountryName=$County['CountryName'];
	  
	  date_default_timezone_set("UTC");
	  $date_catea = date("Y-m-d H:i:s", time()); 
	  
	 
     if($PaymentType==3){
		$PayFlow->setTransactionType('S');
		
	 }else{
		$PayFlow->setTransactionType('R'); 
		$PayFlow->setProfilePayPeriod($Fre);
		$PayFlow->setProfileAction('A');
		$PayFlow->setProfileName($FirstName.$LastName);
		$PayFlow->setProfileStartDate(date('mdY', strtotime("+1 day")));
		$PayFlow->setOptionalTransactionType('S');
		$PayFlow->setProfileTerm(0);
		$PayFlow->setExtraAmount($PaidAmt, FALSE);
	 }
     
		 $PayFlow->setPaymentMethod('C');                            // A = Automated clearinghouse, C = Credit card, D = Pinless debit, K = Telecheck, P = PayPal.
		$PayFlow->setPaymentCurrency('USD');                        // 'USD', 'EUR', 'GBP', 'CAD', 'JPY', 'AUD'.
		
		
		
		$PayFlow->setCustomerFirstName($FirstName);
		$PayFlow->setCustomerLastName($LastName);
		//$PayFlow->setCustomerZip($ZipCode);

		$PayFlow->setCustomerCity($City);
		$PayFlow->setCustomerAddress($StrAdd);
		$PayFlow->setCustomerZip($Zip);
		$PayFlow->setCustomerCountry($Country);

		//$PayFlow->setCustomerCountry($CountryName);
		$PayFlow->setCustomerEmail($Email);
		$PayFlow->setPaymentComment('Recurring Payment');
		
		
		$PayFlow->setAmount($PaidAmt, FALSE);
	
		$PayFlow->setCCNumber($CCNumber);
		$PayFlow->setCVV($CVC);
		$PayFlow->setExpiration($CCMonth.$CCYear);
		$PayFlow->setPaymentComment('Recurring Payment');
		
		if($PayFlow->processTransaction()){
				
			$Payment=$PayFlow->getResponse();
			if($this->session->userdata('MyRecuritID')){
			   $UserID=$this->session->userdata('MyRecuritID'); 
			}else{
			   $UserID= $this->session->userdata('UserID');  
			}
			  
			 if($PaymentType==3){
				$Tranjection=$Payment['PNREF'];
			 }else{
				$Tranjection=$Payment['PROFILEID']; 
			 }
				  
			$data = array(
				  'Payment'=>$Tranjection,
				  'Step'=>11,
				  'IsComplated'=>1,
				  'PaymentType'=>$PaymentType,
				  'PaymentDate'=>date('Y-m-d H:i:s'),
				  'ReferenceID'=>$Payment['RPREF'],
				  'ResponceMessage'=>$Payment['RESPMSG'],
				  'TranjectionRef'=>$Payment['TRXPNREF'],
				  'PaypalRef'=>$Payment['PPREF'],
				  'CorelationID'=>$PaidAmt['CORRELATIONID'],
				  'IsCancel'=>NULL
				);
				
			$this->db->where(array('UserID'=>$UserID));
			$this->db->update('user_register',$data);
			
			$UserID=$this->session->userdata('MyRecuritID'); 
		
			$this->db->select('UserEmail');
			$this->db->select('FirstName');
			$this->db->select('LastName');
			$this->db->where('UserID',$UserID);
			$q = $this->db->get('user_register');
			$UserEmail = $q->row_array();
			
			
			$maildata['url']=base_url();
			$maildata['User']=$UserEmail['FirstName']." ".$UserEmail['LastName'];
			$maildata['Tranjection']=$Tranjection;
			$mesg = $this->load->view('mail_template/tranjection',$maildata,true);	
			$config=array(
				'charset'=>'utf-8',
				'wordwrap'=> TRUE,
				'mailtype' => 'html',
				'protocol' => 'smtp',
				'smtp_host' => 'smtp.sendgrid.net',
				'smtp_user' => 'azure_647880b4c7148ba90798dcfac5e2e9cd@azure.com',
				'smtp_pass' => 'Y1GRlP1jgE85Ljg',
				'smtp_port' => 587,
				'crlf' => "\r\n",
				'newline' => "\r\n"
			);
				
			$this->email->initialize($config);				
			$this->email->from('no-reply@recruitboard.com', 'MyRecruitBoard');
			$this->email->to($UserEmail['UserEmail']);					
			$this->email->subject('Thank you for your Payment.');
			$this->email->message($mesg);					
			$this->email->send();
			return 1;
		
	}else{
		  $Payment=$PayFlow->getResponse();
		  $this->session->set_flashdata('errormessage',  $Payment['RESPMSG']);
		 redirect(base_url().'myrecruitads/payment');
	} 	
	 	
		        
	}

	
	public function cancel_payment()
	{
	   $UserID=$this->session->userdata('MyRecuritID'); 		
	   $getUser=get_user_detail($UserID);
	   $PayFlow = new PayFlow('LiveLoveAloha', 'PayPal', 'developer', 'tejar111', 'recurring');
	   $PayFlow->setEnvironment('live');                          
	   $PayFlow->setTransactionType('R');                         
	   $PayFlow->setPaymentMethod('C');                          
	   $PayFlow->setProfileAction('C');
	   $PayFlow->setORIGPROFILEID($getUser['Payment']);
		
	
		if($PayFlow->processTransaction()){
			$UserID=$this->session->userdata('MyRecuritID'); 
			$this->db->where(array('UserID'=>$UserID));
			$this->db->update('user_register',array('IsCancel'=>'1'));
			redirect(base_url().'dashboard');
		 }else{
			$Payment=$PayFlow->getResponse();
			$this->session->set_flashdata('errormessage',  $Payment['RESPMSG']);
			redirect(base_url().'myrecruitads');
		 }
	}


	
	
}	

