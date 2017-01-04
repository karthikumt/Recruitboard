<?php

class Admin_model extends CI_Model {

	public function __construct()
	{		
		parent::__construct();				
		//$this->load->library('upload');
		
	}

	function get_user_count($type){
		switch($type){
			case 'student' : $type = 1 ; break;
			case 'juco' : $type = 2 ; break;
			case 'coach' : $type = 3 ; break;
			case 'admission' : $type = 4 ; break;
			case 'highschool' : $type = 5 ; break;
			case 'clubcoach' : $type = 6 ; break;
			case 'highteacher' : $type = 7 ; break;
			case 'developement' : $type = 8 ; break;	
			case 'acedmic' : $type = 0 ; break;		
			default : $type = 0 ; break;	
		}
		
		$this->db->where('UserType', $type);
		$this->db->from('user_register');
		return $this->db->count_all_results();	
	}
	
	function get_user_data_limit($table_name, $column, $id, $start=0)
    {
        $this->db->where($column, $id); 
        $result = $this->db->get($table_name, 100, $start*100)->result_array();
 		//file_put_contents('test1.txt', $this->db->last_query(), FILE_APPEND);
        return $result;
    }		
	function get_user_data($table_name, $column, $id)
    {
        $this->db->where($column, $id);
		if($table_name == 'user_register') $this->db->limit(100);
        $result = $this->db->get($table_name)->result_array();
        return $result;
    }
	
	function get_single_data_by_column($table_name, $column, $id)
    {
        $this->db->where($column, $id);
        $result = $this->db->get($table_name)->row_array();
        return $result;
    }
	
	function chck_email($Email, $AdminID)
    {	
		$sql = "SELECT * FROM admin WHERE Email = '$Email' AND AdminID != '$AdminID'";        
        $query = $this->db->query($sql);
		return $query->row_array();
    }
	
	function check_user($UserName, $AdminID)
    {	
		$sql = "SELECT * FROM admin WHERE UserName = '$UserName' AND AdminID != '$AdminID'";        
        $query = $this->db->query($sql);
		return $query->row_array();
    }
	
	function get_all_list($table_name, $column, $startLimit = NULL, $per_page = NULL)
    {
        $this->db->order_by($column, "desc");
        if (isset($startLimit))
            $this->db->limit($per_page, $startLimit);
        $result = $this->db->get($table_name)->result_array();
        return $result;
    }
	
	function update_list($tablename,$array,$ColumnName,$id)
	{
		$this->db->where($ColumnName,$id);
		$this->db->update($tablename,$array);	
	}

	function get_all_ads(){		
		$sql = "SELECT cpa.*, cc.Coach_TeamId FROM coach_post_ads cpa LEFT JOIN colleage_coach cc ON (cc.UserID=cpa.UserID) ORDER BY PostId DESC";        
        $query = $this->db->query($sql);
		return $query->result_array();
	}

	function get_post_by_id($postId){
		$sql = "SELECT cpa.*, cc.Coach_TeamId FROM coach_post_ads cpa LEFT JOIN colleage_coach cc ON (cc.UserID=cpa.UserID) WHERE PostId=".$postId." ORDER BY PostId DESC";        
        $query = $this->db->query($sql);
		return $query->row_array();
	}
	
	
}

?>