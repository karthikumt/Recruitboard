<?php

class Login_model extends CI_Model {
		
	function login_check($data){
	
        $UserName = $data['UserName'];
        $Password = $data['Password'];

        $sql = "SELECT * FROM admin WHERE UserName = '$UserName' AND Password = '$Password' LIMIT 1";        
        $query = $this->db->query($sql);
        return $query->row_array();
    }
	
}

?>