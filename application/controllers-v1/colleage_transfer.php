<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Colleage_transfer extends CI_Controller {


	public function index()
	{
			
        $data['MainContent'] = $this->load->view('colleage_transfer/colleage_transfer',"", true);
        $this->load->view('template', $data);		
	}
}	
	