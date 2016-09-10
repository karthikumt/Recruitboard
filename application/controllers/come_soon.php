<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Come_soon extends CI_Controller {

	

	public function index()
	{
		
        $data['MainContent'] = $this->load->view('come_soon',"", true);
        $this->load->view('template', $data);		
	}
	
	
}

