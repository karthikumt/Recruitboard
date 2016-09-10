<?php

class Academic_tutor_model extends CI_Model {

	public function __construct()
	{		
		parent::__construct();				
		//$this->load->library('upload');
		$this->load->library('image_lib');
	}

	
	function profile_image($High_ID)
	{
		
		$Coach_ProfileImage = $_FILES['ProfilePic']['name'];
		$config['upload_path'] = './register_images/academic_tutor/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Tutor_Profile_'.$High_ID;
		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('ProfilePic')){
			$Coach_ProfileImage = $this->upload->data(); //uploaded fiel name					
			$UpdateFilename = array('Ac_ProfilePic'=>$Coach_ProfileImage['file_name']);
			$this->db->where('Ac_ID', $High_ID);
			$this->db->update('academic_tutor',$UpdateFilename);
			
			my_resize('./register_images/academic_tutor/original/'.$Coach_ProfileImage['file_name'],'./register_images/academic_tutor/small/'.$Coach_ProfileImage['file_name'],250,250);
		}
	}
	
	function cover_image($Ac_ID)
	{
		$Ac_CoverImage = $_FILES['Ac_CoverImage']['name'];
		$config['upload_path'] = './register_images/academic_tutor/cover_original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Ac_CoverImage_'.$Ac_ID;
		
		$this->load->library('upload',$config);
		if($this->upload->do_upload('Ac_CoverImage')){
			$Ac_CoverImage = $this->upload->data(); //uploaded fiel name					
			$UpdateFilename = array('Ac_CoverImage'=>$Ac_CoverImage['file_name']);
			$this->db->where('Ac_ID', $Ac_ID);
			$this->db->update('academic_tutor',$UpdateFilename);
			
			my_resize('./register_images/academic_tutor/cover_original/'.$Ac_CoverImage['file_name'],'./register_images/academic_tutor/cover_small/'.$Ac_CoverImage['file_name'],1400,350);
		}
	}		
	
	
	 public function Profile($UserID)
	  {
			$this->db->select('Ac_ProfilePic');
			$query = $this->db->get_where('academic_tutor', array('Ac_ID' => $UserID))->row_array();
			return $query;
	  }
	  public function getAdmissionID($UserID)
	  {
			$this->db->select('Ac_ID','Ac_ProfilePic');
			$query = $this->db->get_where('academic_tutor', array('UserID' => $UserID))->row_array();
			return $query;
	  }
	  public function Cover_Profile($UserID)
	  {
			$this->db->select('Ac_CoverImage');
			$query = $this->db->get_where('academic_tutor', array('Ac_ID' => $UserID))->row_array();
			return $query;
	  }
	  public function Cover_getStuID($UserID)
	  {
			$this->db->select('Ac_ID','Ac_CoverImage');
			$query = $this->db->get_where('academic_tutor', array('UserID' => $UserID))->row_array();
			return $query;
	  }

}	