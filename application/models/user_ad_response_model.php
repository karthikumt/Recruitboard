<?php
include_once APPPATH.'libraries/password.php';
include_once APPPATH.'libraries/Class.PayFlow.php';

class User_ad_response_model extends CI_Model {

	public function __construct()
	{		
		parent::__construct();				
	
	}
	
	public function addUserAdResponse($UserID, $PostId, $isInterested=1)
	{
		$sql="INSERT into user_add_response(user_id, post_id, is_interested) values (".$UserID.",".$PostId.", ".$isInterested.") ON DUPLICATE KEY UPDATE is_interested=".$isInterested.";"; 
		$this->db->query($sql);			
	}	
	
}	

