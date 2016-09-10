<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Errorpage extends CI_Controller {

	
	public function index()
	{		
			
		$this->load->view('errorpage');
		//$data['MainContent'] = $this->load->view('errorpage','', true);
	    //$this->load->view('template', $data);
	}
}
