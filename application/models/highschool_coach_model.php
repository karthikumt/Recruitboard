<?php

class Highschool_coach_model extends CI_Model {

	public function __construct()
	{		
		parent::__construct();				
		//$this->load->library('upload');
		$this->load->library('image_lib');
		
	}

	
	function profile_image($High_ID)
	{
		
		$Coach_ProfileImage = $_FILES['ProfilePic']['name'];
		$config['upload_path'] = './register_images/highschool_coach/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Highschool_Profile_'.$High_ID;
		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('ProfilePic')){
			$Coach_ProfileImage = $this->upload->data(); //uploaded fiel name					
			$UpdateFilename = array('High_ProfilePic'=>$Coach_ProfileImage['file_name']);
			$this->db->where('High_ID', $High_ID);
			$this->db->update('highschool_coach',$UpdateFilename);
			
			my_resize('./register_images/highschool_coach/original/'.$Coach_ProfileImage['file_name'],'./register_images/highschool_coach/small/'.$Coach_ProfileImage['file_name'],250,250);
		}
	}
	
	function cover_image($High_ID)
	{
		$High_CoverImage = $_FILES['High_CoverImage']['name'];
		$config['upload_path'] = './register_images/highschool_coach/cover_original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'High_CoverImage_'.$High_ID;
		
		$this->load->library('upload',$config);
		if($this->upload->do_upload('High_CoverImage')){
			$High_CoverImage = $this->upload->data(); //uploaded fiel name					
			$UpdateFilename = array('High_CoverImage'=>$High_CoverImage['file_name']);
			$this->db->where('High_ID', $High_ID);
			$this->db->update('highschool_coach',$UpdateFilename);
			
			my_resize('./register_images/highschool_coach/cover_original/'.$High_CoverImage['file_name'],'./register_images/highschool_coach/cover_small/'.$High_CoverImage['file_name'],1400,350);
		}
	}		
	
	
  public function Profile($UserID)
  {
		$this->db->select('High_ProfilePic');
		$query = $this->db->get_where('highschool_coach', array('High_ID' => $UserID))->row_array();
  		return $query;
  }
  public function getAdmissionID($UserID)
  {
		$this->db->select('High_ID','High_ProfilePic');
		$query = $this->db->get_where('highschool_coach', array('UserID' => $UserID))->row_array();
  		return $query;
  }
  
  public function Cover_Profile($UserID)
  {
		$this->db->select('High_CoverImage');
		$query = $this->db->get_where('highschool_coach', array('High_ID' => $UserID))->row_array();
  		return $query;
  }
  public function Cover_getStuID($UserID)
  {
		$this->db->select('High_ID','High_CoverImage');
		$query = $this->db->get_where('highschool_coach', array('UserID' => $UserID))->row_array();
  		return $query;
  }



}	