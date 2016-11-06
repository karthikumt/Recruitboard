<?php
include_once APPPATH.'libraries/password.php';
class General_model extends CI_Model {

	public function __construct()
	{		
		parent::__construct();				
		//$this->load->library('upload');
		$this->load->library('email');
		$this->load->library('image_lib');	
	
	}

	function get_single_data_by_column($table_name, $column, $id){
        $this->db->where($column, $id);
        $result = $this->db->get($table_name)->row_array();
        return $result;
    }
	
	function get_table_data($table_name){
		$this->db->where('Status', '1');
        $result = $this->db->get($table_name)->result_array();
        return $result;
    }
	
	function display_post()
	{
		 $result = $this->db->get('category')->result_array();
		 return $result;

	}
	function get_sport_data($table_name, $column, $id){
        $this->db->where($column, $id);
    	$result = $this->db->get($table_name)->result_array();
        return $result;
    }
	function check_login(){
	$sql="SELECT Password FROM user_register WHERE UserEmail = '".$_REQUEST['UserEmailAddress']."'";    
	$query = $this->db->query($sql)->row_array();
	
	if(empty($query)) {
		$this->session->set_flashdata('errormessa','Invalid username or password.');
		redirect(base_url());
	}
	
	$hash=$query['Password'];
	
	if (password_verify($_REQUEST['UserPassword'], $hash)) {
		
   $sql = "SELECT UserID,UserType,Step,Status,AdminStatus,Payment,PaymentType,PaymentDate,IsComplated,IsCancel FROM user_register WHERE UserEmail = '".$_REQUEST['UserEmailAddress']."'";        
        $query = $this->db->query($sql);
		return $query->row_array();
	} else {
		$this->session->set_flashdata('errormessa','Invalid username or password.');
		redirect(base_url());
	}
	
	
		
	}
	
	function check_email(){	
		
		$getEmailDetails=$this->db->get_where('user_register', array('UserEmail' => $_REQUEST['UserEmail']));
		
		if($getEmailDetails->num_rows() == 1)
		{
			return "1";	
		}
		return "0";
	
	}
	
	function coach_check_email($UserID){	
		
		$getEmailDetails=$this->db->get_where('coach', array('CoachEmail' => $_REQUEST['CoachEmail'],'UserID' => $UserID ));
		
		if($getEmailDetails->num_rows() == 1)
		{
			return "1";	
		}
		return "0";
	
	}
	
	function test_check_email(){	
		
		$getEmailDetails=$this->db->get_where('user_register', array('UserEmail' => $_REQUEST['UserEmail']));
		
		if($getEmailDetails->num_rows() == 1)
		{
			return "False";	
		}
		return "True";
	
	}
	
	function insert_data($tablename,$array)
	{
		$this->db->insert($tablename,$array);
		return $this->db->insert_id();	
	}
	function update_data($tablename,$array,$filed)
	{
		$this->db->where($filed);
		$this->db->update($tablename,$array);
	}
	
	function sendEmail($id)
	{	
		$this->db->select('UserEmail');
		$this->db->select('FirstName');
		$this->db->select('LastName');
		$this->db->select('RandomNumber');
		$this->db->where('UserID', $id);
		$q = $this->db->get('user_register');
		$UserEmail = $q->row_array();
		
		$Link=base_url().'email_confirm/yes/'.$UserEmail['RandomNumber']; 
		
		$maildata['url']=base_url();
		$maildata['UserName']=$UserEmail['FirstName']." ".$UserEmail['LastName'];
		$maildata['Email']=$UserEmail['UserEmail'];
		$maildata['Link']=$Link;
		$maildata['UserType']=$UserEmail['UserType'];
		/*if($this->session->userdata('admin_register'))
		{
			$mesg = $this->load->view('mail_template/register1',$maildata,true);
		}
		else
		{*/
		$mesg = $this->load->view('mail_template/register',$maildata,true);	
			//}
		$config=array(
			'charset'=>'utf-8',
			'wordwrap'=> TRUE,
			'mailtype' => 'html',
		    'protocol' => 'smtp',
		    'smtp_host' => SMTP_HOST,
			'smtp_user' => SMTP_USER,
			'smtp_pass' => SMTP_PASSWORD,
			'smtp_port' => SMTP_PORT,
		    'crlf' => "\r\n",
		    'newline' => "\r\n"
		);
			
		$this->email->initialize($config);				
		$this->email->from(FROM_EMAIL, 'MyRecruitBoard');
		$this->email->to($UserEmail['UserEmail']);					
		$this->email->subject('Thank you for registering with MyRecruitBoard');
		$this->email->message($mesg);					
		$this->email->send();	
		
	}
	

	function sendEmail2($id,$pwd)
	{	
		$this->db->select('UserEmail');
		$this->db->select('FirstName');
		$this->db->select('LastName');
		$this->db->select('RandomNumber');
		$this->db->where('UserID', $id);
		$q = $this->db->get('user_register');
		$UserEmail = $q->row_array();
		
		$Link=base_url().'email_confirm/yes/'.$UserEmail['RandomNumber']; 
		
		$maildata['url']=base_url();
		$maildata['UserName']=$UserEmail['FirstName']." ".$UserEmail['LastName'];
		$maildata['Email']=$UserEmail['UserEmail'];
		$maildata['Link']=$Link;
		$maildata['UserType']=$UserEmail['UserType'];
		$maildata['Password']=$pwd;
		if($this->session->userdata('admin_register'))
		{
			$mesg = $this->load->view('mail_template/register1',$maildata,true);
		}
		else
		{
		$mesg = $this->load->view('mail_template/register',$maildata,true);	
			}
		$config=array(
			'charset'=>'utf-8',
			'wordwrap'=> TRUE,
			'mailtype' => 'html',
		    'protocol' => 'smtp',
		    'smtp_host' => SMTP_HOST,
			'smtp_user' => SMTP_USER,
			'smtp_pass' => SMTP_PASSWORD,
			'smtp_port' => SMTP_PORT,
		    'crlf' => "\r\n",
		    'newline' => "\r\n"
		);
			
		$this->email->initialize($config);				
		$this->email->from(FROM_EMAIL, 'MyRecruitBoard');
		$this->email->to($UserEmail['UserEmail']);					
		$this->email->subject('Thank you for registering with MyRecruitBoard');
		$this->email->message($mesg);					
		$this->email->send();	
		
	}
	
	
	function forgot_password(){	
		$sql="select Password,UserEmail,FirstName,LastName,RandomNumber from user_register where UserEmail='".$_REQUEST['EmailAddress']."'";
		$getEmailDetails=$this->db->query($sql);
		
		if($getEmailDetails->num_rows() == 1)
		{
			$getEmail=$getEmailDetails->row_array();
			$Link=base_url().'reset_password/yes/'.$getEmail['RandomNumber']; 
			$maildata['url']=base_url();
			$maildata['User']=$getEmail['FirstName']." ".$getEmail['LastName'];
			$maildata['Email']=$getEmail['UserEmail'];
			$maildata['Password']=$Link;
			$mesg = $this->load->view('mail_template/forgot_password',$maildata,true);	
			
			$config=array(
			  'charset'=>'utf-8',
			  'wordwrap'=> TRUE,
			  'mailtype' => 'html',
			  'protocol' => 'smtp',
			  'smtp_host' => SMTP_HOST,
			  'smtp_user' => SMTP_USER,
			  'smtp_pass' => SMTP_PASSWORD,
			  'smtp_port' => SMTP_PORT,
			  'crlf' => "\r\n",
			  'newline' => "\r\n"
			);
			
			$this->email->initialize($config);				
			$this->email->from(FROM_EMAIL, 'My RecuritBoard');
			$this->email->to($getEmail['UserEmail']);					
			$this->email->subject('Reset Password Details');
			$this->email->message($mesg);					
			$this->email->send();
			return 1;	
		}
		return 0;
	}
	
	function aboutus()
	{
		$sql="SELECT About_Us FROM `general_setting`";
		$query = $this->db->query($sql);
		$data=$query->row_array();
		return $data['About_Us'];	
		
	}
	function term_condition()
	{
		$sql="SELECT Term_Condition FROM `general_setting`";
		$query = $this->db->query($sql);
		$data=$query->row_array();
		return $data['Term_Condition'];	
		
	}
	function search_bar($Search_data)
	{
	
	 $this->db->select('UserEmail');
	 $this->db->select('UserID');
	 $this->db->select('FirstName');
	 $this->db->select('LastName');
	 $this->db->select('UserType');
	 $this->db->or_like('UserEmail',$Search_data);
     $this->db->or_like('FirstName',$Search_data);
	 $this->db->or_like('LastName',$Search_data);
     $result = $this->db->get_where('user_register',array('IsComplated'=>'1','UserType'=>'1'))->result_array();
	 $str=$this->db->last_query();
	 return $str;
	}
	
	function ParentEmail($tablename,$id,$field)
	{	
		
		if($tablename=='student_athlete'){
			$usertype="Student Athlete";	
		}else{
			$usertype="Juco Transfer";	
		}
		
		$this->db->select($field);
		$this->db->where('UserID', $id);
		$q = $this->db->get($tablename);
		$UserEmail = $q->row_array();
		
		$this->db->select('UserEmail');
		$this->db->where('UserID', $id);
		$user = $this->db->get('user_register');
		$UserDetails = $user->row_array();
		
		$maildata['url']=base_url();
		$maildata['Email']=$UserDetails['UserEmail'];
		$maildata['Type']=$usertype;
		
		$mesg = $this->load->view('mail_template/parentemail',$maildata,true);	
		
		$config=array(
				 'charset'=>'utf-8',
				  'wordwrap'=> TRUE,
				  'mailtype' => 'html',
				  'protocol' => 'smtp',
				  'smtp_host' => SMTP_HOST,
				  'smtp_user' => SMTP_USER,
				  'smtp_pass' => SMTP_PASSWORD,
				  'smtp_port' => SMTP_PORT,
				  'crlf' => "\r\n",
			  	  'newline' => "\r\n"
				);
			
		$this->email->initialize($config);				
		$this->email->from(FROM_EMAIL, 'MyRecruitBoard');
		$this->email->to($UserEmail[$field]);					
		$this->email->subject('Thank you for registering with MyRecruitBoard from your student');
		$this->email->message($mesg);					
		$this->email->send();	
		
	}
	public function delete_data($tablename,$array)
	{
		$this->db->select('Comm_Photo');
		$query=$this->db->get_where($tablename, $array)->row_array();
		
		if($query['Comm_Photo']!="")
		{
			unlink('./register_images/comment/medium/'.$query['Comm_Photo']);	
			unlink('./register_images/comment/original/'.$query['Comm_Photo']);	
			unlink('./register_images/comment/small/'.$query['Comm_Photo']);	
		}
		$this->db->delete($tablename, $array); 	
	}
	
}	