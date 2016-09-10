<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sport_dashboard extends CI_Controller {

	public function __construct()
	 {   
	  parent::__construct();    
	  $this->load->model('general_model');
	  $this->load->model('student_athlete_model'); 
	   $this->load->model('popup_model');
	 	
	 }

	
	public function baseball()
	{
		echo $this->load->view('sport_popup/baseball');	
	}
	
	public function basketball()
	{
		echo $this->load->view('sport_popup/basketball');
	}
	
	public function volleyball()
	{ 
		echo $this->load->view('sport_popup/volleyball');
	}
	public function football()
	{
		echo $this->load->view('sport_popup/football');	
	}
	
	public function bowling()
	{
		echo $this->load->view('sport_popup/bowling');	
	}
	public function cheerleading()
	{
		echo $this->load->view('sport_popup/cheerleading');	
	}
	public function cross_country()
	{
		echo $this->load->view('sport_popup/cross_country');	
	}
	public function dance_team()
	{
		echo $this->load->view('sport_popup/dance_team');	
	}
	public function fencing()
	{
		echo $this->load->view('sport_popup/fencing');	
	}
	public function field_hockey()
	{
		echo $this->load->view('sport_popup/field_hockey');	
	}
	public function golf()
	{
		echo $this->load->view('sport_popup/golf');	
	}
	public function mens_gymnastics()
	{
		echo $this->load->view('sport_popup/mens_gymnastics');	
	}
	public function ice_hockey()
	{
		echo $this->load->view('sport_popup/ice_hockey');	
	}
	public function indor_track()
	{
		echo $this->load->view('sport_popup/indor_track');	
	}
	public function lacrosse()
	{
		echo $this->load->view('sport_popup/lacrosse');	
	}
	public function rifle()
	{
		echo $this->load->view('sport_popup/rifle');	
	}
	public function rugby()
	{
		echo $this->load->view('sport_popup/rugby');	
	}
	public function skiing()
	{
		echo $this->load->view('sport_popup/skiing');	
	}
	public function soccer()
	{
		echo $this->load->view('sport_popup/soccer');	
	}
	public function softball()
	{
		echo $this->load->view('sport_popup/softball');	
	}
	public function swimming()
	{
		echo $this->load->view('sport_popup/swimming');	
	}
	public function tennis()
	{
		echo $this->load->view('sport_popup/tennis');	
	}
	public function track()
	{
		echo $this->load->view('sport_popup/track');	
	}
	public function water_polo()
	{
		echo $this->load->view('sport_popup/water_polo');	
	}
	public function wrestling()
	{
		echo $this->load->view('sport_popup/wrestling');	
	}
	public function womens_gymnastics()
	{
		echo $this->load->view('sport_popup/womens_gymnastics');	
	}
	public function rowing()
	{
		echo $this->load->view('sport_popup/crew');	
	}
	
  } ?>  