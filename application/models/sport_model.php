<?php

class Sport_model extends CI_Model {

	public function __construct()
	{		
		parent::__construct();				
		//$this->load->library('upload');
		$this->load->library('image_lib');
		
	}


function Bas_LeftImage($Stu_ID)
	{	
		
		$Bas_LeftImage = $_FILES['Bas_LeftImageName']['name'];
		
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Bas_LeftImage'.$Stu_ID;
		
		
		$this->load->library('upload', $config);
		if($this->upload->do_upload('Bas_LeftImageName')){
			$Bas_LeftImageName = $this->upload->data();
			
			$Bas_LeftImage = array('Bas_LeftImageName'=>$Bas_LeftImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('baseball_sport',$Bas_LeftImage);
			
			my_resize('./register_images/sport/original/'.$Bas_LeftImageName['file_name'],'./register_images/sport/small/'.$Bas_LeftImageName['file_name'],280,230);
		}
		
	}
	
	function Bas_MiddleImage($Stu_ID)
	{
		
		$this->load->library('upload');
		$Bas_MiddleImage = $_FILES['Bas_MiddleImageName']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Bas_MiddleImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		if($this->upload->do_upload('Bas_MiddleImageName')){
			$Bas_MiddleImageName = $this->upload->data();
			$Bas_MiddleImage = array('Bas_MiddleImageName'=>$Bas_MiddleImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('baseball_sport',$Bas_MiddleImage);
			
			my_resize('./register_images/sport/original/'.$Bas_MiddleImageName['file_name'],'./register_images/sport/small/'.$Bas_MiddleImageName['file_name'],280,230);
		}
		
	}
	
	function Bas_RightImage($Stu_ID)
	{
		$this->load->library('upload');
		$Bas_RightImage = $_FILES['Bas_RightImageName']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Bas_RightImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Bas_RightImageName')){
			$Bas_RightImageName = $this->upload->data();
			$Bas_RightImage = array('Bas_RightImageName'=>$Bas_RightImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('baseball_sport',$Bas_RightImage);
			my_resize('./register_images/sport/original/'.$Bas_RightImageName['file_name'],'./register_images/sport/small/'.$Bas_RightImageName['file_name'],280,230);
		}
	}
	
	
	
	function Bask_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Bask_ProImage = $_FILES['Bask_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Bask_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Bask_ProImage')){
			$Bask_ProImageName = $this->upload->data();
			$Bask_ProImage = array('Bask_ProImage'=>$Bask_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('basketball_sport',$Bask_ProImage);
			my_resize('./register_images/sport/original/'.$Bask_ProImageName['file_name'],'./register_images/sport/small/'.$Bask_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Bask_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Bask_ProImage = $_FILES['Bask_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Bask_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Bask_ProImage2')){
			$Bask_ProImageName = $this->upload->data();
			$Bask_ProImage = array('Bask_ProImage2'=>$Bask_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('basketball_sport',$Bask_ProImage);
			my_resize('./register_images/sport/original/'.$Bask_ProImageName['file_name'],'./register_images/sport/small/'.$Bask_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Bask_ProImage3($Stu_ID)
	{
		$this->load->library('upload');
		$Bask_ProImage = $_FILES['Bask_ProImage3']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Bask_ProImage3'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Bask_ProImage3')){
			$Bask_ProImageName = $this->upload->data();
			$Bask_ProImage = array('Bask_ProImage3'=>$Bask_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('basketball_sport',$Bask_ProImage);
			my_resize('./register_images/sport/original/'.$Bask_ProImageName['file_name'],'./register_images/sport/small/'.$Bask_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Bask_ProImage4($Stu_ID)
	{
		$this->load->library('upload');
		$Bask_ProImage = $_FILES['Bask_ProImage4']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Bask_ProImage4'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Bask_ProImage4')){
			$Bask_ProImageName = $this->upload->data();
			$Bask_ProImage = array('Bask_ProImage4'=>$Bask_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('basketball_sport',$Bask_ProImage);
			my_resize('./register_images/sport/original/'.$Bask_ProImageName['file_name'],'./register_images/sport/small/'.$Bask_ProImageName['file_name'],280,230);
		}
	}
	

function Bowl_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Bowl_ProImage = $_FILES['Bowl_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Bowl_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Bowl_ProImage')){
			$Bowl_ProImageName = $this->upload->data();
			$Bowl_ProImage = array('Bowl_ProImage'=>$Bowl_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('bowling_sport',$Bowl_ProImage);
			my_resize('./register_images/sport/original/'.$Bowl_ProImageName['file_name'],'./register_images/sport/small/'.$Bowl_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Bowl_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Bowl_ProImage = $_FILES['Bowl_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Bowl_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Bowl_ProImage2')){
			$Bowl_ProImageName = $this->upload->data();
			$Bowl_ProImage = array('Bowl_ProImage2'=>$Bowl_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('bowling_sport',$Bowl_ProImage);
			my_resize('./register_images/sport/original/'.$Bowl_ProImageName['file_name'],'./register_images/sport/small/'.$Bowl_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Bowl_ProImage3($Stu_ID)
	{
		$this->load->library('upload');
		$Bowl_ProImage = $_FILES['Bowl_ProImage3']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Bowl_ProImage3'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Bowl_ProImage3')){
			$Bowl_ProImageName = $this->upload->data();
			$Bowl_ProImage = array('Bowl_ProImage3'=>$Bowl_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('bowling_sport',$Bowl_ProImage);
			my_resize('./register_images/sport/original/'.$Bowl_ProImageName['file_name'],'./register_images/sport/small/'.$Bowl_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Bowl_ProImage4($Stu_ID)
	{
		$this->load->library('upload');
		$Bowl_ProImage = $_FILES['Bowl_ProImage4']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Bowl_ProImage4'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Bowl_ProImage4')){
			$Bowl_ProImageName = $this->upload->data();
			$Bowl_ProImage = array('Bowl_ProImage4'=>$Bowl_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('bowling_sport',$Bowl_ProImage);
			my_resize('./register_images/sport/original/'.$Bowl_ProImageName['file_name'],'./register_images/sport/small/'.$Bowl_ProImageName['file_name'],280,230);
		}
	}
	


	function Cheer_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Cheer_ProImage = $_FILES['Cheer_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Cheer_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Cheer_ProImage')){
			$Cheer_ProImageName = $this->upload->data();
			$Cheer_ProImage = array('Cheer_ProImage'=>$Cheer_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('cheerleading_sport',$Cheer_ProImage);
			my_resize('./register_images/sport/original/'.$Cheer_ProImageName['file_name'],'./register_images/sport/small/'.$Cheer_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Cheer_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Cheer_ProImage = $_FILES['Cheer_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Cheer_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Cheer_ProImage2')){
			$Cheer_ProImageName = $this->upload->data();
			$Cheer_ProImage = array('Cheer_ProImage2'=>$Cheer_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('cheerleading_sport',$Cheer_ProImage);
			my_resize('./register_images/sport/original/'.$Cheer_ProImageName['file_name'],'./register_images/sport/small/'.$Cheer_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Cheer_ProImage3($Stu_ID)
	{
		$this->load->library('upload');
		$Cheer_ProImage = $_FILES['Cheer_ProImage3']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Cheer_ProImage3'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Cheer_ProImage3')){
			$Cheer_ProImageName = $this->upload->data();
			$Cheer_ProImage = array('Cheer_ProImage3'=>$Cheer_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('cheerleading_sport',$Cheer_ProImage);
			my_resize('./register_images/sport/original/'.$Cheer_ProImageName['file_name'],'./register_images/sport/small/'.$Cheer_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Cheer_ProImage4($Stu_ID)
	{
		$this->load->library('upload');
		$Cheer_ProImage = $_FILES['Cheer_ProImage4']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Cheer_ProImage4'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Cheer_ProImage4')){
			$Cheer_ProImageName = $this->upload->data();
			$Cheer_ProImage = array('Cheer_ProImage4'=>$Cheer_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('cheerleading_sport',$Cheer_ProImage);
			my_resize('./register_images/sport/original/'.$Cheer_ProImageName['file_name'],'./register_images/sport/small/'.$Cheer_ProImageName['file_name'],280,230);
		}
	}	

	
	function Cross_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Cross_ProImage = $_FILES['Cross_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Cross_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Cross_ProImage')){
			$Cross_ProImageName = $this->upload->data();
			$Cross_ProImage = array('Cross_ProImage'=>$Cross_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('cross_country_sport',$Cross_ProImage);
			my_resize('./register_images/sport/original/'.$Cross_ProImageName['file_name'],'./register_images/sport/small/'.$Cross_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Cross_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Cross_ProImage = $_FILES['Cross_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Cross_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Cross_ProImage2')){
			$Cross_ProImageName = $this->upload->data();
			$Cross_ProImage = array('Cross_ProImage2'=>$Cross_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('cross_country_sport',$Cross_ProImage);
			my_resize('./register_images/sport/original/'.$Cross_ProImageName['file_name'],'./register_images/sport/small/'.$Cross_ProImageName['file_name'],280,230);
		}
	}
	
	
function Dance_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Dance_ProImage = $_FILES['Dance_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Dance_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Dance_ProImage')){
			$Dance_ProImageName = $this->upload->data();
			$Dance_ProImage = array('Dance_ProImage'=>$Dance_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('danceteam_sport',$Dance_ProImage);
			my_resize('./register_images/sport/original/'.$Dance_ProImageName['file_name'],'./register_images/sport/small/'.$Dance_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Dance_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Dance_ProImage = $_FILES['Dance_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Dance_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Dance_ProImage2')){
			$Dance_ProImageName = $this->upload->data();
			$Dance_ProImage = array('Dance_ProImage2'=>$Dance_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('danceteam_sport',$Dance_ProImage);
			my_resize('./register_images/sport/original/'.$Dance_ProImageName['file_name'],'./register_images/sport/small/'.$Dance_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Dance_ProImage3($Stu_ID)
	{
		$this->load->library('upload');
		$Dance_ProImage = $_FILES['Dance_ProImage3']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Dance_ProImage3'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Dance_ProImage3')){
			$Dance_ProImageName = $this->upload->data();
			$Dance_ProImage = array('Dance_ProImage3'=>$Dance_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('danceteam_sport',$Dance_ProImage);
			my_resize('./register_images/sport/original/'.$Dance_ProImageName['file_name'],'./register_images/sport/small/'.$Dance_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Dance_ProImage4($Stu_ID)
	{
		$this->load->library('upload');
		$Dance_ProImage = $_FILES['Dance_ProImage4']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Dance_ProImage4'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Dance_ProImage4')){
			$Dance_ProImageName = $this->upload->data();
			$Dance_ProImage = array('Dance_ProImage4'=>$Dance_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('danceteam_sport',$Dance_ProImage);
			my_resize('./register_images/sport/original/'.$Dance_ProImageName['file_name'],'./register_images/sport/small/'.$Dance_ProImageName['file_name'],280,230);
		}
	}
	
	function Fence_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Fence_ProImage = $_FILES['Fence_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Fence_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Fence_ProImage')){
			$Fence_ProImageName = $this->upload->data();
			$Fence_ProImage = array('Fence_ProImage'=>$Fence_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('fencing_sport',$Fence_ProImage);
			my_resize('./register_images/sport/original/'.$Fence_ProImageName['file_name'],'./register_images/sport/small/'.$Fence_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Fence_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Fence_ProImage = $_FILES['Fence_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Fence_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Fence_ProImage2')){
			$Fence_ProImageName = $this->upload->data();
			$Fence_ProImage = array('Fence_ProImage2'=>$Fence_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('fencing_sport',$Fence_ProImage);
			my_resize('./register_images/sport/original/'.$Fence_ProImageName['file_name'],'./register_images/sport/small/'.$Fence_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Fence_ProImage3($Stu_ID)
	{
		$this->load->library('upload');
		$Fence_ProImage = $_FILES['Fence_ProImage3']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Fence_ProImage3'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Fence_ProImage3')){
			$Fence_ProImageName = $this->upload->data();
			$Fence_ProImage = array('Fence_ProImage3'=>$Fence_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('fencing_sport',$Fence_ProImage);
			my_resize('./register_images/sport/original/'.$Fence_ProImageName['file_name'],'./register_images/sport/small/'.$Fence_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Fence_ProImage4($Stu_ID)
	{
		$this->load->library('upload');
		$Fence_ProImage = $_FILES['Fence_ProImage4']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Fence_ProImage4'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Fence_ProImage4')){
			$Fence_ProImageName = $this->upload->data();
			$Fence_ProImage = array('Fence_ProImage4'=>$Fence_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('fencing_sport',$Fence_ProImage);
			my_resize('./register_images/sport/original/'.$Fence_ProImageName['file_name'],'./register_images/sport/small/'.$Fence_ProImageName['file_name'],280,230);
		}
	}
	
	function Field_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Field_ProImage = $_FILES['Field_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Field_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Field_ProImage')){
			$Field_ProImageName = $this->upload->data();
			$Field_ProImage = array('Field_ProImage'=>$Field_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('field_hockey_sport',$Field_ProImage);
			my_resize('./register_images/sport/original/'.$Field_ProImageName['file_name'],'./register_images/sport/small/'.$Field_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Field_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Field_ProImage = $_FILES['Field_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Field_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Field_ProImage2')){
			$Field_ProImageName = $this->upload->data();
			$Field_ProImage = array('Field_ProImage2'=>$Field_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('field_hockey_sport',$Field_ProImage);
			my_resize('./register_images/sport/original/'.$Field_ProImageName['file_name'],'./register_images/sport/small/'.$Field_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Field_ProImage3($Stu_ID)
	{
		$this->load->library('upload');
		$Field_ProImage = $_FILES['Field_ProImage3']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Field_ProImage3'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Field_ProImage3')){
			$Field_ProImageName = $this->upload->data();
			$Field_ProImage = array('Field_ProImage3'=>$Field_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('field_hockey_sport',$Field_ProImage);
			my_resize('./register_images/sport/original/'.$Field_ProImageName['file_name'],'./register_images/sport/small/'.$Field_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Field_ProImage4($Stu_ID)
	{
		$this->load->library('upload');
		$Field_ProImage = $_FILES['Field_ProImage4']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Field_ProImage4'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Field_ProImage4')){
			$Field_ProImageName = $this->upload->data();
			$Field_ProImage = array('Field_ProImage4'=>$Field_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('field_hockey_sport',$Field_ProImage);
			my_resize('./register_images/sport/original/'.$Field_ProImageName['file_name'],'./register_images/sport/small/'.$Field_ProImageName['file_name'],280,230);
		}
	}
	
	function FootBall_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$FootBall_ProImage = $_FILES['FootBall_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'FootBall_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('FootBall_ProImage')){
			$FootBall_ProImageName = $this->upload->data();
			$FootBall_ProImage = array('FootBall_ProImage'=>$FootBall_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('football_sport',$FootBall_ProImage);
			my_resize('./register_images/sport/original/'.$FootBall_ProImageName['file_name'],'./register_images/sport/small/'.$FootBall_ProImageName['file_name'],280,230);
		}
	}
	
	
	function FootBall_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$FootBall_ProImage = $_FILES['FootBall_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'FootBall_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('FootBall_ProImage2')){
			$FootBall_ProImageName = $this->upload->data();
			$FootBall_ProImage = array('FootBall_ProImage2'=>$FootBall_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('football_sport',$FootBall_ProImage);
			my_resize('./register_images/sport/original/'.$FootBall_ProImageName['file_name'],'./register_images/sport/small/'.$FootBall_ProImageName['file_name'],280,230);
		}
	}
	
	
	function FootBall_ProImage3($Stu_ID)
	{
		$this->load->library('upload');
		$FootBall_ProImage = $_FILES['FootBall_ProImage3']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'FootBall_ProImage3'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('FootBall_ProImage3')){
			$FootBall_ProImageName = $this->upload->data();
			$FootBall_ProImage = array('FootBall_ProImage3'=>$FootBall_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('football_sport',$FootBall_ProImage);
			my_resize('./register_images/sport/original/'.$FootBall_ProImageName['file_name'],'./register_images/sport/small/'.$FootBall_ProImageName['file_name'],280,230);
		}
	}
	
	
	function FootBall_ProImage4($Stu_ID)
	{
		$this->load->library('upload');
		$FootBall_ProImage = $_FILES['FootBall_ProImage4']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'FootBall_ProImage4'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('FootBall_ProImage4')){
			$FootBall_ProImageName = $this->upload->data();
			$FootBall_ProImage = array('FootBall_ProImage4'=>$FootBall_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('football_sport',$FootBall_ProImage);
			my_resize('./register_images/sport/original/'.$FootBall_ProImageName['file_name'],'./register_images/sport/small/'.$FootBall_ProImageName['file_name'],280,230);
		}
	}
	
	function FootBall_ProImage5($Stu_ID)
	{
		$this->load->library('upload');
		$FootBall_ProImage = $_FILES['FootBall_ProImage5']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'FootBall_ProImage5'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('FootBall_ProImage5')){
			$FootBall_ProImageName = $this->upload->data();
			$FootBall_ProImage = array('FootBall_ProImage5'=>$FootBall_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('football_sport',$FootBall_ProImage);
			my_resize('./register_images/sport/original/'.$FootBall_ProImageName['file_name'],'./register_images/sport/small/'.$FootBall_ProImageName['file_name'],280,230);
		}
	}
	
	function Golf_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Golf_ProImage = $_FILES['Golf_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Golf_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Golf_ProImage')){
			$Golf_ProImageName = $this->upload->data();
			$Golf_ProImage = array('Golf_ProImage'=>$Golf_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('golf_sport',$Golf_ProImage);
			my_resize('./register_images/sport/original/'.$Golf_ProImageName['file_name'],'./register_images/sport/small/'.$Golf_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Golf_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Golf_ProImage = $_FILES['Golf_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Golf_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Golf_ProImage2')){
			$Golf_ProImageName = $this->upload->data();
			$Golf_ProImage = array('Golf_ProImage2'=>$Golf_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('golf_sport',$Golf_ProImage);
			my_resize('./register_images/sport/original/'.$Golf_ProImageName['file_name'],'./register_images/sport/small/'.$Golf_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Golf_ProImage3($Stu_ID)
	{
		$this->load->library('upload');
		$Golf_ProImage = $_FILES['Golf_ProImage3']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Golf_ProImage3'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Golf_ProImage3')){
			$Golf_ProImageName = $this->upload->data();
			$Golf_ProImage = array('Golf_ProImage3'=>$Golf_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('golf_sport',$Golf_ProImage);
			my_resize('./register_images/sport/original/'.$Golf_ProImageName['file_name'],'./register_images/sport/small/'.$Golf_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Golf_ProImage4($Stu_ID)
	{
		$this->load->library('upload');
		$Golf_ProImage = $_FILES['Golf_ProImage4']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Golf_ProImage4'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Golf_ProImage4')){
			$Golf_ProImageName = $this->upload->data();
			$Golf_ProImage = array('Golf_ProImage4'=>$Golf_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('golf_sport',$Golf_ProImage);
			my_resize('./register_images/sport/original/'.$Golf_ProImageName['file_name'],'./register_images/sport/small/'.$Golf_ProImageName['file_name'],280,230);
		}
	}	
	
	function Ice_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Ice_ProImage = $_FILES['Ice_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Ice_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Ice_ProImage')){
			$Ice_ProImageName = $this->upload->data();
			$Ice_ProImage = array('Ice_ProImage'=>$Ice_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('ice_hockey_sport',$Ice_ProImage);
			my_resize('./register_images/sport/original/'.$Ice_ProImageName['file_name'],'./register_images/sport/small/'.$Ice_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Ice_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Ice_ProImage = $_FILES['Ice_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Ice_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Ice_ProImage2')){
			$Ice_ProImageName = $this->upload->data();
			$Ice_ProImage = array('Ice_ProImage2'=>$Ice_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('ice_hockey_sport',$Ice_ProImage);
			my_resize('./register_images/sport/original/'.$Ice_ProImageName['file_name'],'./register_images/sport/small/'.$Ice_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Ice_ProImage3($Stu_ID)
	{
		$this->load->library('upload');
		$Ice_ProImage = $_FILES['Ice_ProImage3']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Ice_ProImage3'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Ice_ProImage3')){
			$Ice_ProImageName = $this->upload->data();
			$Ice_ProImage = array('Ice_ProImage3'=>$Ice_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('ice_hockey_sport',$Ice_ProImage);
			my_resize('./register_images/sport/original/'.$Ice_ProImageName['file_name'],'./register_images/sport/small/'.$Ice_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Ice_ProImage4($Stu_ID)
	{
		$this->load->library('upload');
		$Ice_ProImage = $_FILES['Ice_ProImage4']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Ice_ProImage4'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Ice_ProImage4')){
			$Ice_ProImageName = $this->upload->data();
			$Ice_ProImage = array('Ice_ProImage4'=>$Ice_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('ice_hockey_sport',$Ice_ProImage);
			my_resize('./register_images/sport/original/'.$Ice_ProImageName['file_name'],'./register_images/sport/small/'.$Ice_ProImageName['file_name'],280,230);
		}
	}
	
	function Lac_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Lac_ProImage = $_FILES['Lac_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Lac_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Lac_ProImage')){
			$Lac_ProImageName = $this->upload->data();
			$Lac_ProImage = array('Lac_ProImage'=>$Lac_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('lacross_sport',$Lac_ProImage);
			my_resize('./register_images/sport/original/'.$Lac_ProImageName['file_name'],'./register_images/sport/small/'.$Lac_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Lac_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Lac_ProImage = $_FILES['Lac_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Lac_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Lac_ProImage2')){
			$Lac_ProImageName = $this->upload->data();
			$Lac_ProImage = array('Lac_ProImage2'=>$Lac_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('lacross_sport',$Lac_ProImage);
			my_resize('./register_images/sport/original/'.$Lac_ProImageName['file_name'],'./register_images/sport/small/'.$Lac_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Lac_ProImage3($Stu_ID)
	{
		$this->load->library('upload');
		$Lac_ProImage = $_FILES['Lac_ProImage3']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Lac_ProImage3'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Lac_ProImage3')){
			$Lac_ProImageName = $this->upload->data();
			$Lac_ProImage = array('Lac_ProImage3'=>$Lac_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('lacross_sport',$Lac_ProImage);
			my_resize('./register_images/sport/original/'.$Lac_ProImageName['file_name'],'./register_images/sport/small/'.$Lac_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Lac_ProImage4($Stu_ID)
	{
		$this->load->library('upload');
		$Lac_ProImage = $_FILES['Lac_ProImage4']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Lac_ProImage4'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Lac_ProImage4')){
			$Lac_ProImageName = $this->upload->data();
			$Lac_ProImage = array('Lac_ProImage4'=>$Lac_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('lacross_sport',$Lac_ProImage);
			my_resize('./register_images/sport/original/'.$Lac_ProImageName['file_name'],'./register_images/sport/small/'.$Lac_ProImageName['file_name'],280,230);
		}
	}
	
	function Indoor_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Indoor_ProImage = $_FILES['Indoor_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Indoor_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Indoor_ProImage')){
			$Indoor_ProImageName = $this->upload->data();
			$Indoor_ProImage = array('Indoor_ProImage'=>$Indoor_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('indoor_sport',$Indoor_ProImage);
			my_resize('./register_images/sport/original/'.$Indoor_ProImageName['file_name'],'./register_images/sport/small/'.$Indoor_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Indoor_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Indoor_ProImage = $_FILES['Indoor_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Indoor_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Indoor_ProImage2')){
			$Indoor_ProImageName = $this->upload->data();
			$Indoor_ProImage = array('Indoor_ProImage2'=>$Indoor_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('indoor_sport',$Indoor_ProImage);
			my_resize('./register_images/sport/original/'.$Indoor_ProImageName['file_name'],'./register_images/sport/small/'.$Indoor_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Rifel_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Rifel_ProImage = $_FILES['Rifel_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Rifel_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Rifel_ProImage')){
			$Rifel_ProImageName = $this->upload->data();
			$Rifel_ProImage = array('Rifel_ProImage'=>$Rifel_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('rifle_sport',$Rifel_ProImage);
			my_resize('./register_images/sport/original/'.$Rifel_ProImageName['file_name'],'./register_images/sport/small/'.$Rifel_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Rifel_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Rifel_ProImage = $_FILES['Rifel_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Rifel_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Rifel_ProImage2')){
			$Rifel_ProImageName = $this->upload->data();
			$Rifel_ProImage = array('Rifel_ProImage2'=>$Rifel_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('rifle_sport',$Rifel_ProImage);
			my_resize('./register_images/sport/original/'.$Rifel_ProImageName['file_name'],'./register_images/sport/small/'.$Rifel_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Rifel_ProImage3($Stu_ID)
	{
		$this->load->library('upload');
		$Rifel_ProImage = $_FILES['Rifel_ProImage3']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Rifel_ProImage3'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Rifel_ProImage3')){
			$Rifel_ProImageName = $this->upload->data();
			$Rifel_ProImage = array('Rifel_ProImage3'=>$Rifel_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('rifle_sport',$Rifel_ProImage);
			my_resize('./register_images/sport/original/'.$Rifel_ProImageName['file_name'],'./register_images/sport/small/'.$Rifel_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Rifel_ProImage4($Stu_ID)
	{
		$this->load->library('upload');
		$Rifel_ProImage = $_FILES['Rifel_ProImage4']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Rifel_ProImage4'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Rifel_ProImage4')){
			$Rifel_ProImageName = $this->upload->data();
			$Rifel_ProImage = array('Rifel_ProImage4'=>$Rifel_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('rifle_sport',$Rifel_ProImage);
			my_resize('./register_images/sport/original/'.$Rifel_ProImageName['file_name'],'./register_images/sport/small/'.$Rifel_ProImageName['file_name'],280,230);
		}
	}	
	
	function Gym_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Gym_ProImage = $_FILES['Gym_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Gym_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Gym_ProImage')){
			$Gym_ProImageName = $this->upload->data();
			$Gym_ProImage = array('Gym_ProImage'=>$Gym_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('men_gym_sport',$Gym_ProImage);
			my_resize('./register_images/sport/original/'.$Gym_ProImageName['file_name'],'./register_images/sport/small/'.$Gym_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Gym_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Gym_ProImage = $_FILES['Gym_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Gym_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Gym_ProImage2')){
			$Gym_ProImageName = $this->upload->data();
			$Gym_ProImage = array('Gym_ProImage2'=>$Gym_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('men_gym_sport',$Gym_ProImage);
			my_resize('./register_images/sport/original/'.$Gym_ProImageName['file_name'],'./register_images/sport/small/'.$Gym_ProImageName['file_name'],280,230);
		}
	}
	
	function Rugby_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Rugby_ProImage = $_FILES['Rugby_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Rugby_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Rugby_ProImage')){
			$Rugby_ProImageName = $this->upload->data();
			$Rugby_ProImage = array('Rugby_ProImage'=>$Rugby_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('rugby_sport',$Rugby_ProImage);
			my_resize('./register_images/sport/original/'.$Rugby_ProImageName['file_name'],'./register_images/sport/small/'.$Rugby_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Rugby_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Rugby_ProImage = $_FILES['Rugby_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Rugby_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Rugby_ProImage2')){
			$Rugby_ProImageName = $this->upload->data();
			$Rugby_ProImage = array('Rugby_ProImage2'=>$Rugby_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('rugby_sport',$Rugby_ProImage);
			my_resize('./register_images/sport/original/'.$Rugby_ProImageName['file_name'],'./register_images/sport/small/'.$Rugby_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Rugby_ProImage3($Stu_ID)
	{
		$this->load->library('upload');
		$Rugby_ProImage = $_FILES['Rugby_ProImage3']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Rugby_ProImage3'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Rugby_ProImage3')){
			$Rugby_ProImageName = $this->upload->data();
			$Rugby_ProImage = array('Rugby_ProImage3'=>$Rugby_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('rugby_sport',$Rugby_ProImage);
			my_resize('./register_images/sport/original/'.$Rugby_ProImageName['file_name'],'./register_images/sport/small/'.$Rugby_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Rugby_ProImage4($Stu_ID)
	{
		$this->load->library('upload');
		$Rugby_ProImage = $_FILES['Rugby_ProImage4']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Rugby_ProImage4'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Rugby_ProImage4')){
			$Rugby_ProImageName = $this->upload->data();
			$Rugby_ProImage = array('Rugby_ProImage4'=>$Rugby_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('rugby_sport',$Rugby_ProImage);
			my_resize('./register_images/sport/original/'.$Rugby_ProImageName['file_name'],'./register_images/sport/small/'.$Rugby_ProImageName['file_name'],280,230);
		}
	}
	
	function Skiing_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Skiing_ProImage = $_FILES['Skiing_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Skiing_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Skiing_ProImage')){
			$Skiing_ProImageName = $this->upload->data();
			$Skiing_ProImage = array('Skiing_ProImage'=>$Skiing_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('skiing_sport',$Skiing_ProImage);
			my_resize('./register_images/sport/original/'.$Skiing_ProImageName['file_name'],'./register_images/sport/small/'.$Skiing_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Skiing_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Skiing_ProImage = $_FILES['Skiing_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Skiing_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Skiing_ProImage2')){
			$Skiing_ProImageName = $this->upload->data();
			$Skiing_ProImage = array('Skiing_ProImage2'=>$Skiing_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('skiing_sport',$Skiing_ProImage);
			my_resize('./register_images/sport/original/'.$Skiing_ProImageName['file_name'],'./register_images/sport/small/'.$Skiing_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Soccer_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Soccer_ProImage = $_FILES['Soccer_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Soccer_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Soccer_ProImage')){
			$Soccer_ProImageName = $this->upload->data();
			$Soccer_ProImage = array('Soccer_ProImage'=>$Soccer_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('soccer_sport',$Soccer_ProImage);
			my_resize('./register_images/sport/original/'.$Soccer_ProImageName['file_name'],'./register_images/sport/small/'.$Soccer_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Soccer_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Soccer_ProImage = $_FILES['Soccer_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Soccer_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Soccer_ProImage2')){
			$Soccer_ProImageName = $this->upload->data();
			$Soccer_ProImage = array('Soccer_ProImage2'=>$Soccer_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('soccer_sport',$Soccer_ProImage);
			my_resize('./register_images/sport/original/'.$Soccer_ProImageName['file_name'],'./register_images/sport/small/'.$Soccer_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Soccer_ProImage3($Stu_ID)
	{
		$this->load->library('upload');
		$Soccer_ProImage = $_FILES['Soccer_ProImage3']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Soccer_ProImage3'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Soccer_ProImage3')){
			$Soccer_ProImageName = $this->upload->data();
			$Soccer_ProImage = array('Soccer_ProImage3'=>$Soccer_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('soccer_sport',$Soccer_ProImage);
			my_resize('./register_images/sport/original/'.$Soccer_ProImageName['file_name'],'./register_images/sport/small/'.$Soccer_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Soccer_ProImage4($Stu_ID)
	{
		$this->load->library('upload');
		$Soccer_ProImage = $_FILES['Soccer_ProImage4']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Soccer_ProImage4'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Soccer_ProImage4')){
			$Soccer_ProImageName = $this->upload->data();
			$Soccer_ProImage = array('Soccer_ProImage4'=>$Soccer_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('soccer_sport',$Soccer_ProImage);
			my_resize('./register_images/sport/original/'.$Soccer_ProImageName['file_name'],'./register_images/sport/small/'.$Soccer_ProImageName['file_name'],280,230);
		}
	}	
	
	function Soft_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Soft_ProImage = $_FILES['Soft_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Soft_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Soft_ProImage')){
			$Soft_ProImageName = $this->upload->data();
			$Soft_ProImage = array('Soft_ProImage'=>$Soft_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('softball_sport',$Soft_ProImage);
			my_resize('./register_images/sport/original/'.$Soft_ProImageName['file_name'],'./register_images/sport/small/'.$Soft_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Soft_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Soft_ProImage = $_FILES['Soft_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Soft_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Soft_ProImage2')){
			$Soft_ProImageName = $this->upload->data();
			$Soft_ProImage = array('Soft_ProImage2'=>$Soft_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('softball_sport',$Soft_ProImage);
			my_resize('./register_images/sport/original/'.$Soft_ProImageName['file_name'],'./register_images/sport/small/'.$Soft_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Soft_ProImage3($Stu_ID)
	{
		$this->load->library('upload');
		$Soft_ProImage = $_FILES['Soft_ProImage3']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Soft_ProImage3'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Soft_ProImage3')){
			$Soft_ProImageName = $this->upload->data();
			$Soft_ProImage = array('Soft_ProImage3'=>$Soft_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('softball_sport',$Soft_ProImage);
			my_resize('./register_images/sport/original/'.$Soft_ProImageName['file_name'],'./register_images/sport/small/'.$Soft_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Swim_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Swim_ProImage = $_FILES['Swim_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Swim_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Swim_ProImage')){
			$Swim_ProImageName = $this->upload->data();
			$Swim_ProImage = array('Swim_ProImage'=>$Swim_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('swimming_sport',$Swim_ProImage);
			my_resize('./register_images/sport/original/'.$Swim_ProImageName['file_name'],'./register_images/sport/small/'.$Swim_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Swim_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Swim_ProImage = $_FILES['Swim_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Swim_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Swim_ProImage2')){
			$Swim_ProImageName = $this->upload->data();
			$Swim_ProImage = array('Swim_ProImage2'=>$Swim_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('swimming_sport',$Swim_ProImage);
			my_resize('./register_images/sport/original/'.$Swim_ProImageName['file_name'],'./register_images/sport/small/'.$Swim_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Tenis_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Tenis_ProImage = $_FILES['Tenis_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Tenis_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Tenis_ProImage')){
			$Tenis_ProImageName = $this->upload->data();
			$Tenis_ProImage = array('Tenis_ProImage'=>$Tenis_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('tennis_sport',$Tenis_ProImage);
			my_resize('./register_images/sport/original/'.$Tenis_ProImageName['file_name'],'./register_images/sport/small/'.$Tenis_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Tenis_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Tenis_ProImage = $_FILES['Tenis_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Tenis_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Tenis_ProImage2')){
			$Tenis_ProImageName = $this->upload->data();
			$Tenis_ProImage = array('Tenis_ProImage2'=>$Tenis_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('tennis_sport',$Tenis_ProImage);
			my_resize('./register_images/sport/original/'.$Tenis_ProImageName['file_name'],'./register_images/sport/small/'.$Tenis_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Tenis_ProImage3($Stu_ID)
	{
		$this->load->library('upload');
		$Tenis_ProImage = $_FILES['Tenis_ProImage3']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Tenis_ProImage3'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Tenis_ProImage3')){
			$Tenis_ProImageName = $this->upload->data();
			$Tenis_ProImage = array('Tenis_ProImage3'=>$Tenis_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('tennis_sport',$Tenis_ProImage);
			my_resize('./register_images/sport/original/'.$Tenis_ProImageName['file_name'],'./register_images/sport/small/'.$Tenis_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Tenis_ProImage4($Stu_ID)
	{
		$this->load->library('upload');
		$Tenis_ProImage = $_FILES['Tenis_ProImage4']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Tenis_ProImage4'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Tenis_ProImage4')){
			$Tenis_ProImageName = $this->upload->data();
			$Tenis_ProImage = array('Tenis_ProImage4'=>$Tenis_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('tennis_sport',$Tenis_ProImage);
			my_resize('./register_images/sport/original/'.$Tenis_ProImageName['file_name'],'./register_images/sport/small/'.$Tenis_ProImageName['file_name'],280,230);
		}
	}	
	
	function Track_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Track_ProImage = $_FILES['Track_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Track_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Track_ProImage')){
			$Track_ProImageName = $this->upload->data();
			$Track_ProImage = array('Track_ProImage'=>$Track_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('track_and_field_sport',$Track_ProImage);
			my_resize('./register_images/sport/original/'.$Track_ProImageName['file_name'],'./register_images/sport/small/'.$Track_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Track_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Track_ProImage = $_FILES['Track_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Track_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Track_ProImage2')){
			$Track_ProImageName = $this->upload->data();
			$Track_ProImage = array('Track_ProImage2'=>$Track_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('track_and_field_sport',$Track_ProImage);
			my_resize('./register_images/sport/original/'.$Track_ProImageName['file_name'],'./register_images/sport/small/'.$Track_ProImageName['file_name'],280,230);
		}
	}
	
	function Volly_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Volly_ProImage = $_FILES['Volly_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Volly_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Volly_ProImage')){
			$Volly_ProImageName = $this->upload->data();
			$Volly_ProImage = array('Volly_ProImage'=>$Volly_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('volleyball_sport',$Volly_ProImage);
			my_resize('./register_images/sport/original/'.$Volly_ProImageName['file_name'],'./register_images/sport/small/'.$Volly_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Volly_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Volly_ProImage = $_FILES['Volly_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Volly_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Volly_ProImage2')){
			$Volly_ProImageName = $this->upload->data();
			$Volly_ProImage = array('Volly_ProImage2'=>$Volly_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('volleyball_sport',$Volly_ProImage);
			my_resize('./register_images/sport/original/'.$Volly_ProImageName['file_name'],'./register_images/sport/small/'.$Volly_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Volly_ProImage3($Stu_ID)
	{
		$this->load->library('upload');
		$Volly_ProImage = $_FILES['Volly_ProImage3']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Volly_ProImage3'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Volly_ProImage3')){
			$Volly_ProImageName = $this->upload->data();
			$Volly_ProImage = array('Volly_ProImage3'=>$Volly_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('volleyball_sport',$Volly_ProImage);
			my_resize('./register_images/sport/original/'.$Volly_ProImageName['file_name'],'./register_images/sport/small/'.$Volly_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Volly_ProImage4($Stu_ID)
	{
		$this->load->library('upload');
		$Volly_ProImage = $_FILES['Volly_ProImage4']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Volly_ProImage4'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Volly_ProImage4')){
			$Volly_ProImageName = $this->upload->data();
			$Volly_ProImage = array('Volly_ProImage4'=>$Volly_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('volleyball_sport',$Volly_ProImage);
			my_resize('./register_images/sport/original/'.$Volly_ProImageName['file_name'],'./register_images/sport/small/'.$Volly_ProImageName['file_name'],280,230);
		}
	}	
	
	function Water_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Water_ProImage = $_FILES['Water_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Water_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Water_ProImage')){
			$Water_ProImageName = $this->upload->data();
			$Water_ProImage = array('Water_ProImage'=>$Water_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('water_polo_sport',$Water_ProImage);
			my_resize('./register_images/sport/original/'.$Water_ProImageName['file_name'],'./register_images/sport/small/'.$Water_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Water_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Water_ProImage = $_FILES['Water_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Water_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Water_ProImage2')){
			$Water_ProImageName = $this->upload->data();
			$Water_ProImage = array('Water_ProImage2'=>$Water_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('water_polo_sport',$Water_ProImage);
			my_resize('./register_images/sport/original/'.$Water_ProImageName['file_name'],'./register_images/sport/small/'.$Water_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Water_ProImage3($Stu_ID)
	{
		$this->load->library('upload');
		$Water_ProImage = $_FILES['Water_ProImage3']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Water_ProImage3'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Water_ProImage3')){
			$Water_ProImageName = $this->upload->data();
			$Water_ProImage = array('Water_ProImage3'=>$Water_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('water_polo_sport',$Water_ProImage);
			my_resize('./register_images/sport/original/'.$Water_ProImageName['file_name'],'./register_images/sport/small/'.$Water_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Water_ProImage4($Stu_ID)
	{
		$this->load->library('upload');
		$Water_ProImage = $_FILES['Water_ProImage4']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Water_ProImage4'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Water_ProImage4')){
			$Water_ProImageName = $this->upload->data();
			$Water_ProImage = array('Water_ProImage4'=>$Water_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('water_polo_sport',$Water_ProImage);
			my_resize('./register_images/sport/original/'.$Water_ProImageName['file_name'],'./register_images/sport/small/'.$Water_ProImageName['file_name'],280,230);
		}
	}	
	
	function Wrest_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Wrest_ProImage = $_FILES['Wrest_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Wrest_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Wrest_ProImage')){
			$Wrest_ProImageName = $this->upload->data();
			$Wrest_ProImage = array('Wrest_ProImage'=>$Wrest_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('wrestling_sport',$Wrest_ProImage);
			my_resize('./register_images/sport/original/'.$Wrest_ProImageName['file_name'],'./register_images/sport/small/'.$Wrest_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Wrest_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Wrest_ProImage = $_FILES['Wrest_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Wrest_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Wrest_ProImage2')){
			$Wrest_ProImageName = $this->upload->data();
			$Wrest_ProImage = array('Wrest_ProImage2'=>$Wrest_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('wrestling_sport',$Wrest_ProImage);
			my_resize('./register_images/sport/original/'.$Wrest_ProImageName['file_name'],'./register_images/sport/small/'.$Wrest_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Wrest_ProImage3($Stu_ID)
	{
		$this->load->library('upload');
		$Wrest_ProImage = $_FILES['Wrest_ProImage3']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Wrest_ProImage3'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Wrest_ProImage3')){
			$Wrest_ProImageName = $this->upload->data();
			$Wrest_ProImage = array('Wrest_ProImage3'=>$Wrest_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('wrestling_sport',$Wrest_ProImage);
			my_resize('./register_images/sport/original/'.$Wrest_ProImageName['file_name'],'./register_images/sport/small/'.$Wrest_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Wrest_ProImage4($Stu_ID)
	{
		$this->load->library('upload');
		$Wrest_ProImage = $_FILES['Wrest_ProImage4']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Wrest_ProImage4'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Wrest_ProImage4')){
			$Wrest_ProImageName = $this->upload->data();
			$Wrest_ProImage = array('Wrest_ProImage4'=>$Wrest_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('wrestling_sport',$Wrest_ProImage);
			my_resize('./register_images/sport/original/'.$Wrest_ProImageName['file_name'],'./register_images/sport/small/'.$Wrest_ProImageName['file_name'],280,230);
		}
	}	
	
	function Women_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Women_ProImage = $_FILES['Women_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Women_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Women_ProImage')){
			$Women_ProImageName = $this->upload->data();
			$Women_ProImage = array('Women_ProImage'=>$Women_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('women_gym_sport',$Women_ProImage);
			my_resize('./register_images/sport/original/'.$Women_ProImageName['file_name'],'./register_images/sport/small/'.$Women_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Women_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Women_ProImage = $_FILES['Women_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Women_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Women_ProImage2')){
			$Women_ProImageName = $this->upload->data();
			$Women_ProImage = array('Women_ProImage2'=>$Women_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('women_gym_sport',$Women_ProImage);
			my_resize('./register_images/sport/original/'.$Women_ProImageName['file_name'],'./register_images/sport/small/'.$Women_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Women_ProImage3($Stu_ID)
	{
		$this->load->library('upload');
		$Women_ProImage = $_FILES['Women_ProImage3']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Women_ProImage3'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Women_ProImage3')){
			$Women_ProImageName = $this->upload->data();
			$Women_ProImage = array('Women_ProImage3'=>$Women_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('women_gym_sport',$Women_ProImage);
			my_resize('./register_images/sport/original/'.$Women_ProImageName['file_name'],'./register_images/sport/small/'.$Women_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Women_ProImage4($Stu_ID)
	{
		$this->load->library('upload');
		$Women_ProImage = $_FILES['Women_ProImage4']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Women_ProImage4'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Women_ProImage4')){
			$Women_ProImageName = $this->upload->data();
			$Women_ProImage = array('Women_ProImage4'=>$Women_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('women_gym_sport',$Women_ProImage);
			my_resize('./register_images/sport/original/'.$Women_ProImageName['file_name'],'./register_images/sport/small/'.$Women_ProImageName['file_name'],280,230);
		}
	}
	
	function Row_ProImage($Stu_ID)
	{
		$this->load->library('upload');
		$Row_ProImage = $_FILES['Row_ProImage']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Row_ProImage'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Row_ProImage')){
			$Row_ProImageName = $this->upload->data();
			$Row_ProImage = array('Row_ProImage'=>$Row_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('rowing_sport',$Row_ProImage);
			my_resize('./register_images/sport/original/'.$Row_ProImageName['file_name'],'./register_images/sport/small/'.$Row_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Row_ProImage2($Stu_ID)
	{
		$this->load->library('upload');
		$Row_ProImage = $_FILES['Row_ProImage2']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Row_ProImage2'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Row_ProImage2')){
			$Row_ProImageName = $this->upload->data();
			$Row_ProImage = array('Row_ProImage2'=>$Row_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('rowing_sport',$Row_ProImage);
			my_resize('./register_images/sport/original/'.$Row_ProImageName['file_name'],'./register_images/sport/small/'.$Row_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Row_ProImage3($Stu_ID)
	{
		$this->load->library('upload');
		$Row_ProImage = $_FILES['Row_ProImage3']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Row_ProImage3'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Row_ProImage3')){
			$Row_ProImageName = $this->upload->data();
			$Row_ProImage = array('Row_ProImage3'=>$Row_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('rowing_sport',$Row_ProImage);
			my_resize('./register_images/sport/original/'.$Row_ProImageName['file_name'],'./register_images/sport/small/'.$Row_ProImageName['file_name'],280,230);
		}
	}
	
	
	function Row_ProImage4($Stu_ID)
	{
		$this->load->library('upload');
		$Row_ProImage = $_FILES['Row_ProImage4']['name'];
		$config['upload_path'] = './register_images/sport/original/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'Row_ProImage4'.$Stu_ID;
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('Row_ProImage4')){
			$Row_ProImageName = $this->upload->data();
			$Row_ProImage = array('Row_ProImage4'=>$Row_ProImageName['file_name']);
			$this->db->where('UserID', $Stu_ID);
			$this->db->update('rowing_sport',$Row_ProImage);
			my_resize('./register_images/sport/original/'.$Row_ProImageName['file_name'],'./register_images/sport/small/'.$Row_ProImageName['file_name'],280,230);
		}
	}		
}