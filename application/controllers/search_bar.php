<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search_bar extends CI_Controller {

	public function __construct()
	{		
		parent::__construct();				
		$this->load->model('general_model');
		$this->load->model('colleage_coach_model');
	
	}
	public function index()
	{
			
        $data['MainContent'] = $this->load->view('dashboard/search_bar',"", true);
        $this->load->view('template', $data);		
	}
	public function action()
	{
	 $searh_data=$this->input->post('seach');
	 trim($searh_data);
	 if(!empty($searh_data))
	 {
	 $data['search_result']=$this->general_model->search_bar($searh_data);
	 echo'<pre>';
	 print_r($data['search_result']);
	 exit;
	 $data['MainContent'] = $this->load->view('dashboard/search_bar',$data, true);
     $this->load->view('template', $data);
	}
	
	}
}	