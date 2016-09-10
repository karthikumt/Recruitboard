<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboutus extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('general_model');
		$this->load->library('session');			
	}
	
	public function index(){
		
        $data['About']=$this->general_model->aboutus();
		$data['MainContent'] = $this->load->view('aboutus',$data,true);
        $this->load->view('template',$data);				
	}
	
	public function learnmore(){
		
       $data['MainContent'] = $this->load->view('learnmore','',true);
        $this->load->view('template',$data);				
	}
}

