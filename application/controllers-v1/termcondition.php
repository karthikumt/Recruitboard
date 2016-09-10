<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TermCondition extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('general_model');
		$this->load->library('session');			
	}
	
	public function index(){
	     $data['term_condition']=$this->general_model->term_condition();
		 $data['MainContent'] = $this->load->view('termcondition',$data, true);
        $this->load->view('template', $data);	
	}
	
	
	public function check_sport()
	{
		$SportID=$_REQUEST['SportID'];
		
		$Postition=$this->general_model->get_sport_data('stu_athlete_position','SportID',$SportID);			
		$HTML="<option value=0>Select Position </option>"; 
			 foreach($Postition as $Data){
			   $HTML.="<option value='".$Data['PositionID']."'>".$Data['Position']."</option>";
		   }
		echo $HTML;
	}
	
	public function check_major()
	{
		$MajorID=$_REQUEST['MajorID'];
		
		$Postition=$this->general_model->get_sport_data('stu_eligibility_major','Eligibility_Intended_ID',$MajorID);			
		$HTML="<option value=0> Major </option>"; 
			 foreach($Postition as $Data){
			   $HTML.="<option value='".$Data['Eligibility_Major_ID']."'>".$Data['Eligibility_Major_Name']."</option>";
		   }
		echo $HTML;
	}
	public function check_Intent()
	{
		$IntendID=$_REQUEST['IntendID'];
		$MajorID=$_REQUEST['MajorID'];
		
		$Postition=$this->general_model->get_sport_data('stu_eligibility_major','Eligibility_Intended_ID',$IntendID);			
		$HTML="<option value=0> Major </option>"; 
			 foreach($Postition as $Data){
			   if($Data['Eligibility_Major_ID']==$MajorID){$Selected="selected='selected'";}else{$Selected="";}	 
			   $HTML.="<option value='".$Data['Eligibility_Major_ID']."' ".$Selected.">".$Data['Eligibility_Major_Name']."</option>";
		   }
		echo $HTML;
	}
	
	public function check_colleage()
	{
		$ColleageID=$_REQUEST['Major'];
		
		$Postition=$this->general_model->get_sport_data('coll_admi_major','Coll_admi_FieldID',$ColleageID);			
		$HTML="<option value=0>Select Major </option>"; 
			 foreach($Postition as $Data){
			   $HTML.="<option value='".$Data['Coll_admi_MajorID']."'>".$Data['Coll_admi_MajorName']."</option>";
		   }
		echo $HTML;
	}
	
	
	public function refresh_capcha()
	{
		$vals = array(
		'img_path' => './captcha/',
		'img_url' => base_url().'captcha/',
		'img_width' => '150',
		'font_path' => './captcha/font/captcha4.ttf',
		'img_height' => '40',
		'expiration' => 2000
		);
     	$captcha = create_captcha($vals);
		echo $captcha['image'];
		echo '^_^';
		echo $captcha['word'];
        
			
	}
	
	public function remove_comment()
	{
		$CommentID=$this->input->post('CommentID');
		$this->general_model->delete_data('comment_box',array('Comm_ID'=>$CommentID));
		
	}
}

