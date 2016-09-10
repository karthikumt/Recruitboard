<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_student_athlete extends CI_Controller {
  
 public function __construct()
	 {   
	  parent::__construct();    
	  $this->load->model('general_model');
	  $this->load->model('student_athlete_model'); 
	 }
 	public function index()
	{
	 $data['MainContent'] = $this->load->view('dashboard/student_athlete',"", true);
     $this->load->view('template', $data);	
	}
	
}		