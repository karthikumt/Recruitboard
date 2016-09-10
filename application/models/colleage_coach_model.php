<?php

class Colleage_coach_model extends CI_Model {

	public function __construct()
	{		
		parent::__construct();				
		//$this->load->library('upload');
		$this->load->library('image_lib');
		
	}

	
	function profile_image($Coach_ID)
	{
		
		$Coach_ProfileImage = $_FILES['Coach_ProfileImage']['name'];
		$config['upload_path'] = './register_images/colleage_coach/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Coach_Profile_'.$Coach_ID;
		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('Coach_ProfileImage')){
			$Coach_ProfileImage = $this->upload->data(); //uploaded fiel name					
			$UpdateFilename = array('Coach_ProfileImage'=>$Coach_ProfileImage['file_name']);
			$this->db->where('Coach_ID', $Coach_ID);
			$this->db->update('colleage_coach',$UpdateFilename);
			
			my_resize('./register_images/colleage_coach/original/'.$Coach_ProfileImage['file_name'],'./register_images/colleage_coach/small/'.$Coach_ProfileImage['file_name'],250,250);
		}
	}
	
	function cover_image($Coach_ID)
	{
		$Coach_CoverImage = $_FILES['Coach_CoverImage']['name'];
		$config['upload_path'] = './register_images/colleage_coach/cover_original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Coach_CoverImage_'.$Coach_ID;
		
		$this->load->library('upload',$config);
		if($this->upload->do_upload('Coach_CoverImage')){
			$Coach_CoverImage = $this->upload->data(); //uploaded fiel name					
			$UpdateFilename = array('Coach_CoverImage'=>$Coach_CoverImage['file_name']);
			$this->db->where('Coach_ID', $Coach_ID);
			$this->db->update('colleage_coach',$UpdateFilename);
			
			my_resize('./register_images/colleage_coach/cover_original/'.$Coach_CoverImage['file_name'],'./register_images/colleage_coach/cover_small/'.$Coach_CoverImage['file_name'],1400,350);
		}
	}
	
  public function Profile($UserID)
  {
		$this->db->select('Coach_ProfileImage');
		$query = $this->db->get_where('colleage_coach', array('Coach_ID' => $UserID))->row_array();
  		return $query;
  }
  public function getCoachID($UserID)
  {
		$this->db->select('Coach_ID','Coach_ProfileImage');
		$query = $this->db->get_where('colleage_coach', array('UserID' => $UserID))->row_array();
  		return $query;
  }
  
   public function Cover_Profile($UserID)
  {
		$this->db->select('Coach_CoverImage');
		$query = $this->db->get_where('colleage_coach', array('Coach_ID' => $UserID))->row_array();
  		return $query;
  }
  public function Cover_getStuID($UserID)
  {
		$this->db->select('Coach_ID','Coach_CoverImage');
		$query = $this->db->get_where('colleage_coach', array('UserID' => $UserID))->row_array();
  		return $query;
  }

}	