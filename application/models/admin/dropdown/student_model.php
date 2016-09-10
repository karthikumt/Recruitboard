<?php

class Student_model extends CI_Model {

	public function __construct()
	{		
		parent::__construct();				
		//$this->load->library('upload');
		
	}
		
	function add_list($tablename,$array)
    {	
		$this->db->insert($tablename,$array);
	}
	
	function update_list($tablename,$array,$ColumnName,$id)
	{
		$this->db->where($ColumnName,$id);
		$this->db->update($tablename,$array);	
	}
	
	function delete_list($tablename,$ColumnName,$id)
	{
		 $this->db->where($ColumnName,$id);
     	 $this->db->delete($tablename); 	
	}
	

	
	
	
	
}

?>