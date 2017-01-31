<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_ad extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		//$this->load->library('upload');
		$this->load->model('admin/admin_model');		
	}

	public function index(){
		$data['user_list'] = $this->admin_model->get_all_ads();
        $data['MainContent'] = $this->load->view('admin/post_ad', $data, true);
        $this->load->view('admin/template', $data);
	}
	

	public function delete_post($PostID){
		
		$DeletUserInfo = $this->admin_model->get_single_data_by_column('coach_post_ads', 'PostID', $PostID);
		unlink('./register_images/coach_post_ad/original/'.$DeletUserInfo['Po_ImageName']);
		unlink('./register_images/coach_post_ad/small/'.$DeletUserInfo['Po_ImageName']);
		$this->db->where('PostID', $PostID);
		$this->db->delete('coach_post_ads');
		$this->session->set_flashdata('successmessage','Ad Deleted successfully');
		redirect(base_url().'admin/post_ad');
	}
	
	public function view_post($PostID)
	{
		$data['user_info'] = $this->admin_model->get_post_by_id($PostID);
        echo $this->load->view('admin/view_post_details', $data, true);
	}
	
	public function edit_post($PostID)
	{
		if($_SERVER['REQUEST_METHOD']=='GET'){
			$data['user_info'] = $this->admin_model->get_post_by_id($PostID);
		    $data['gender_master'] = $this->db->query("SELECT * FROM coll_cotch_gender where status=1")->result_array();
		    $data['height_feet_master'] = $this->db->query("SELECT * FROM coll_cotch_min_height where status=1")->result_array();
		    $data['height_inch_master'] = $this->db->query("SELECT * FROM coll_cotch_min_heightinche where status=1")->result_array();
		    $data['gpa_master'] = $this->db->query("SELECT * FROM coll_cotch_min_gpa where status=1")->result_array();
		    $data['weight_master'] = $this->db->query("SELECT * FROM coll_cotch_max_height where status=1")->result_array();
		    $data['sport_master'] = $this->db->query("SELECT * FROM coll_cotch_spo where status=1")->result_array();
	        echo $this->load->view('admin/edit_post_details', $data, true);
	    }else if($_SERVER['REQUEST_METHOD']=='POST'){

	    	$sql="UPDATE coach_post_ads set Po_SportName=".$_POST['sport'].', Po_Position="'.$_POST["position"].'", Po_HeightID='.$_POST['height_feet'].", Po_IncheID=".$_POST['height_inch'].", Po_GpaID=".$_POST['gpa'].", Po_WeightID=".$_POST['weight'].', Po_Message="'.trim($_POST["additionInfo"]).'" WHERE PostID='.$PostID.';';
	    	$query = $this->db->query($sql);
	    	//pr(array($sql, $query));
			redirect(base_url().'admin/post_ad');
	    }
	}


	
	public function repost_post($PostID)
	{
		$sql = 'UPDATE coach_post_ads SET Po_ExpireDate  = DATE_ADD(NOW(), INTERVAL 6 MONTH) where PostID='.$PostID.';';
		$query = $this->db->query($sql);
		redirect(base_url().'admin/post_ad');
	}
	
}

