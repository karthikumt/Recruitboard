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


	
	public function repost_post($PostID)
	{
		$sql = 'UPDATE coach_post_ads SET Po_ExpireDate  = DATE_ADD(NOW(), INTERVAL 6 MONTH) where PostID='.$PostID.';';
		$query = $this->db->query($sql);
		redirect(base_url().'admin/post_ad');
	}
	
}

