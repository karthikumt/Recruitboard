<?php

class Popup_model extends CI_Model {

	public function __construct()
	{		
		parent::__construct();				
		//$this->load->library('upload');
		 $this->load->database();
		$this->load->library('email');	
		$this->load->library('image_lib');
    
	}

	function get_bio_data($tablename,$Column,$id){
	
    	$comma_separated = implode(",", $Column);
		$sql="select ".$comma_separated." from ".$tablename." where UserID='".$id."'";
		$query = $this->db->query($sql)->row_array();
		return $query;
		
    }
	
	function comment_image($Comm_ID)
	{
		$Comm_Photo = $_FILES['Comm_Photo']['name'];
		$config['upload_path'] = './register_images/comment/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Comm_Photo_'.$Comm_ID;
		
		$this->load->library('upload',$config);
		if($this->upload->do_upload('Comm_Photo')){
			$Comm_Photo = $this->upload->data(); //uploaded fiel name					
			$UpdateFilename = array('Comm_Photo'=>$Comm_Photo['file_name']);
			$this->db->where('Comm_ID', $Comm_ID);
			$this->db->update('comment_box',$UpdateFilename);
			
			my_resize('./register_images/comment/original/'.$Comm_Photo['file_name'],'./register_images/comment/small/'.$Comm_Photo['file_name'],150,120);
			
			my_resize('./register_images/comment/original/'.$Comm_Photo['file_name'],'./register_images/comment/medium/'.$Comm_Photo['file_name'],157,140);
			
		}
	}
	
	
	
	

}	