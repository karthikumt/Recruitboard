<?php

class Club_coach_model extends CI_Model {

	public function __construct()
	{		
		parent::__construct();				
		//$this->load->library('upload');
		$this->load->library('image_lib');
		
	}

	
	function profile_image($Coach_ID)
	{
		
		$Club_ProfileImage = $_FILES['Club_ProfileImage']['name'];
		$config['upload_path'] = './register_images/club_coach/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Club_Profile_'.$Coach_ID;
		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('Club_ProfileImage')){
			$Club_ProfileImage = $this->upload->data(); //uploaded fiel name					
			$UpdateFilename = array('Club_ProfileImage'=>$Club_ProfileImage['file_name']);
			$this->db->where('Club_ID', $Coach_ID);
			$this->db->update('club_coach',$UpdateFilename);
			
			my_resize('./register_images/club_coach/original/'.$Club_ProfileImage['file_name'],'./register_images/club_coach/small/'.$Club_ProfileImage['file_name'],250,250);
		}
	}
	
   function cover_image($Club_ID)
	{
		$Club_CoverImage = $_FILES['Club_CoverImage']['name'];
		$config['upload_path'] = './register_images/club_coach/cover_original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Club_CoverImage_'.$Club_ID;
		
		$this->load->library('upload',$config);
		if($this->upload->do_upload('Club_CoverImage')){
			$Club_CoverImage = $this->upload->data(); //uploaded fiel name					
			$UpdateFilename = array('Club_CoverImage'=>$Club_CoverImage['file_name']);
			$this->db->where('Club_ID', $Club_ID);
			$this->db->update('club_coach',$UpdateFilename);
			
			my_resize('./register_images/club_coach/cover_original/'.$Club_CoverImage['file_name'],'./register_images/club_coach/cover_small/'.$Club_CoverImage['file_name'],1400,350);
		}
	}			
	
	 public function Profile($UserID)
  {
		$this->db->select('Club_ProfileImage');
		$query = $this->db->get_where('club_coach', array('Club_ID' => $UserID))->row_array();
  		return $query;
  }
  public function getAdmissionID($UserID)
  {
		$this->db->select('Club_ID','Club_ProfileImage');
		$query = $this->db->get_where('club_coach', array('UserID' => $UserID))->row_array();
  		return $query;
  }
  
    public function Cover_Profile($UserID)
  {
		$this->db->select('Club_CoverImage');
		$query = $this->db->get_where('club_coach', array('Club_ID' => $UserID))->row_array();
  		return $query;
  }
  public function Cover_getStuID($UserID)
  {
		$this->db->select('Club_ID','Club_CoverImage');
		$query = $this->db->get_where('club_coach', array('UserID' => $UserID))->row_array();
  		return $query;
  }

}	