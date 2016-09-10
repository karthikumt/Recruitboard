<?php

class Development_coach_model extends CI_Model {

	public function __construct()
	{		
		parent::__construct();				
		//$this->load->library('upload');
		$this->load->library('image_lib');
	}

	
	function profile_image($Coach_ID)
	{
		
		$Devel_ProfileImage = $_FILES['Devel_ProfileImage']['name'];
		$config['upload_path'] = './register_images/developement_coach/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Devel_Profile_'.$Coach_ID;
		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('Devel_ProfileImage')){
			$Devel_ProfileImage = $this->upload->data(); //uploaded fiel name					
			$UpdateFilename = array('Devel_ProfileImage'=>$Devel_ProfileImage['file_name']);
			$this->db->where('Devel_ID', $Coach_ID);
			$this->db->update('developement_coach',$UpdateFilename);
			
			my_resize('./register_images/developement_coach/original/'.$Devel_ProfileImage['file_name'],'./register_images/developement_coach/small/'.$Devel_ProfileImage['file_name'],250,250);
		}
	}
	
	function cover_image($Devel_ID)
	{
		$Devel_CoverImage = $_FILES['Devel_CoverImage']['name'];
		$config['upload_path'] = './register_images/developement_coach/cover_original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Devel_CoverImage_'.$Devel_ID;
		
		$this->load->library('upload',$config);
		if($this->upload->do_upload('Devel_CoverImage')){
			$Devel_CoverImage = $this->upload->data(); //uploaded fiel name					
			$UpdateFilename = array('Devel_CoverImage'=>$Devel_CoverImage['file_name']);
			$this->db->where('Devel_ID', $Devel_ID);
			$this->db->update('developement_coach',$UpdateFilename);
			
			my_resize('./register_images/developement_coach/cover_original/'.$Devel_CoverImage['file_name'],'./register_images/developement_coach/cover_small/'.$Devel_CoverImage['file_name'],1400,350);
		}
	}		
	
  public function Profile($UserID)
  {
		$this->db->select('Devel_ProfileImage');
		$query = $this->db->get_where('developement_coach', array('Devel_ID' => $UserID))->row_array();
  		return $query;
  }
  public function getAdmissionID($UserID)
  {
		$this->db->select('Devel_ID','Devel_ProfileImage');
		$query = $this->db->get_where('developement_coach', array('UserID' => $UserID))->row_array();
  		return $query;
  }
  
  public function Cover_Profile($UserID)
  {
		$this->db->select('Devel_CoverImage');
		$query = $this->db->get_where('developement_coach', array('Devel_ID' => $UserID))->row_array();
  		return $query;
  }
  public function Cover_getStuID($UserID)
  {
		$this->db->select('Devel_ID','Devel_CoverImage');
		$query = $this->db->get_where('developement_coach', array('UserID' => $UserID))->row_array();
  		return $query;
  }


}	