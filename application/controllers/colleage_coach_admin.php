<?php 
include_once APPPATH.'libraries/password.php';
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);  
class Colleage_coach_admin extends CI_Controller {

	public function __construct()
	{		
		parent::__construct();				
		$this->load->model('general_model');
		$this->load->model('colleage_coach_model');
		$this->load->model('myrecruit_model');
		
		  
	
	}
	public function index()
	{
		/*$cap =  get_captcha();
		$data = array(
			 'captcha_time' => $cap['time'],
			 'word' => $cap['word']
			 );
		$data['cap_img']=$cap['image'];	
		$data['cap_word']=$cap['word'];	*/

		if($this->session->userdata('admin_register'))
		{
			$data['MainContent'] = $this->load->view('colleage_coach/colleage_coach_admin_logout',$data, true);
        	$this->load->view('template', $data);	
			
		}
		else
		{
        $data['MainContent'] = $this->load->view('colleage_coach/colleage_coach_admin',$data, true);
        $this->load->view('template', $data);		
    	}
	}
	
}