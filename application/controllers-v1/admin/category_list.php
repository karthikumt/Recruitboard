<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_list extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		
		$this->load->model('admin/admin_model');		
	}

	public function index(){
		
		$data['category_info'] = $this->admin_model->get_all_list('category', 'Cat_ID');
        $data['MainContent'] = $this->load->view('admin/category_list', $data, true);
        $this->load->view('admin/template', $data);
	}
	public function add_category(){
		
		$data['category_info'] = "";
        $data['MainContent'] = $this->load->view('admin/add_category', $data, true);
        $this->load->view('admin/template', $data);
	}
	
	public function edit_category($Cat_ID){
		
		$data['category_info'] = $this->admin_model->get_single_data_by_column('category', 'Cat_ID', $Cat_ID);
        $data['MainContent'] = $this->load->view('admin/add_category', $data, true);
        $this->load->view('admin/template', $data);
	}
	
	public function update_category(){
	
			$category_info['Cat_Name'] = $_POST['Cat_Name'];
	
			$category_info['Status'] = $_POST['Status'];
	
		if($_POST['Cat_ID']==""){
			
			
		
			$this->db->insert('category', $category_info);	
			$this->session->set_flashdata('successmessage','User Inserted Successfully');
			
				
			}
			
		else{
			$Cat_ID = $_POST['Cat_ID'];
			
			
			
			
			$this->db->where('Cat_ID', $Cat_ID);
			$this->db->update('category', $category_info);
			$this->session->set_flashdata('successmessage','Detail Update successfully');
		
			
				
			
		}
		redirect(base_url().'admin/category_list');
	}
	
		
	/*public function delete_category($Cat_ID){
		
		$DeletSliderInfo = $this->admin_model->get_single_data_by_column('category', 'Cat_ID', $Cat_ID);
		
		$this->db->where('Cat_ID', $Cat_ID);
		$this->db->delete('category');
		//$this->session->set_flashdata('successmessage','User Deleted successfully');
		redirect(base_url().'admin/category_list');
	} */
	
}
	