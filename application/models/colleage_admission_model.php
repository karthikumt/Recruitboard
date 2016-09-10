<?php

class Colleage_admission_model extends CI_Model {

	public function __construct()
	{		
		parent::__construct();				
		//$this->load->library('upload');
		$this->load->library('image_lib');
		
	}

	function profile_image($Profile_ID)
	{
		 $ProfileImage = $_FILES['ProfilePic']['name'];
		 $config['upload_path'] = './register_images/colleage_admission/original/';
				$config['allowed_types'] = 'gif|jpg|png|doc|txt|jpeg';
				//$config['max_size'] = 1024 * 8;
				//$config['encrypt_name'] = TRUE;
				$config['overwrite'] = TRUE;
				$config['file_name'] = 'coll_Profile_'.$Profile_ID;
				
				$this->load->library('upload', $config);
				if($this->upload->do_upload('ProfilePic')){
					$ProfilePicture = $this->upload->data(); //uploaded fiel name					
					$UpdateFilename = array('Coll_ProfilePic'=>$ProfilePicture['file_name']);
					$this->db->where('Coll_ID', $Profile_ID);
					$this->db->update('colleage_admission',$UpdateFilename);
					my_resize('./register_images/colleage_admission/original/'.$ProfilePicture['file_name'],'./register_images/colleage_admission/small/'.$ProfilePicture['file_name'],250,250);
				}
	}
	
  function cover_image($Coll_ID)
	{
		$Coll_CoverImage = $_FILES['Coll_CoverImage']['name'];
		$config['upload_path'] = './register_images/colleage_admission/cover_original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Coll_CoverImage_'.$Coll_ID;
		
		$this->load->library('upload',$config);
		if($this->upload->do_upload('Coll_CoverImage')){
			$Coll_CoverImage = $this->upload->data(); //uploaded fiel name					
			$UpdateFilename = array('Coll_CoverImage'=>$Coll_CoverImage['file_name']);
			$this->db->where('Coll_ID', $Coll_ID);
			$this->db->update('colleage_admission',$UpdateFilename);
			
			my_resize('./register_images/colleage_admission/cover_original/'.$Coll_CoverImage['file_name'],'./register_images/colleage_admission/cover_small/'.$Coll_CoverImage['file_name'],1400,350);
		}
	}		
	
  public function Profile($UserID)
  {
		$this->db->select('Coll_ProfilePic');
		$query = $this->db->get_where('colleage_admission', array('Coll_ID' => $UserID))->row_array();
  		return $query;
  }
  public function getAdmissionID($UserID)
  {
		$this->db->select('Coll_ID','Coll_ProfilePic');
		$query = $this->db->get_where('colleage_admission', array('UserID' => $UserID))->row_array();
  		return $query;
  }
  
  public function Cover_Profile($UserID)
  {
		$this->db->select('Coll_CoverImage');
		$query = $this->db->get_where('colleage_admission', array('Coll_ID' => $UserID))->row_array();
  		return $query;
  }
  public function Cover_getStuID($UserID)
  {
		$this->db->select('Coll_ID','Coll_CoverImage');
		$query = $this->db->get_where('colleage_admission', array('UserID' => $UserID))->row_array();
  		return $query;
  }

}	