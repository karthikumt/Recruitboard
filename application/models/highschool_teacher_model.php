<?php

class Highschool_teacher_model extends CI_Model {

	public function __construct()
	{		
		parent::__construct();				
		//$this->load->library('upload');
		$this->load->library('image_lib');
		
	}

	
	function profile_image($High_ID)
	{
		
		$Coach_ProfileImage = $_FILES['ProfilePic']['name'];
		$config['upload_path'] = './register_images/highschool_teacher/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Teacher_Profile_'.$High_ID;
		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('ProfilePic')){
			$Coach_ProfileImage = $this->upload->data(); //uploaded fiel name					
			$UpdateFilename = array('Teach_ProfilePic'=>$Coach_ProfileImage['file_name']);
			$this->db->where('Teach_ID', $High_ID);
			$this->db->update('highschool_teacher',$UpdateFilename);
			
			my_resize('./register_images/highschool_teacher/original/'.$Coach_ProfileImage['file_name'],'./register_images/highschool_teacher/small/'.$Coach_ProfileImage['file_name'],250,250);
		}
	}
	
	function cover_image($Teach_ID)
	{
		$Teach_CoverImage = $_FILES['Teach_CoverImage']['name'];
		$config['upload_path'] = './register_images/highschool_teacher/cover_original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Teach_CoverImage_'.$Teach_ID;
		
		$this->load->library('upload',$config);
		if($this->upload->do_upload('Teach_CoverImage')){
			$Teach_CoverImage = $this->upload->data(); //uploaded fiel name					
			$UpdateFilename = array('Teach_CoverImage'=>$Teach_CoverImage['file_name']);
			$this->db->where('Teach_ID', $Teach_ID);
			$this->db->update('highschool_teacher',$UpdateFilename);
			
			my_resize('./register_images/highschool_teacher/cover_original/'.$Teach_CoverImage['file_name'],'./register_images/highschool_teacher/cover_small/'.$Teach_CoverImage['file_name'],1400,350);
		}
	}		
	
 public function Profile($UserID)
  {
		$this->db->select('Teach_ProfilePic');
		$query = $this->db->get_where('highschool_teacher', array('Teach_ID' => $UserID))->row_array();
  		return $query;
  }
  public function getAdmissionID($UserID)
  {
		$this->db->select('Teach_ID','Teach_ProfilePic');
		$query = $this->db->get_where('highschool_teacher', array('UserID' => $UserID))->row_array();
  		return $query;
  }
  
  public function Cover_Profile($UserID)
  {
		$this->db->select('Teach_CoverImage');
		$query = $this->db->get_where('highschool_teacher', array('Teach_ID' => $UserID))->row_array();
  		return $query;
  }
  public function Cover_getStuID($UserID)
  {
		$this->db->select('Teach_ID','Teach_CoverImage');
		$query = $this->db->get_where('highschool_teacher', array('UserID' => $UserID))->row_array();
  		return $query;
  }


}	