<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slider_list extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		
		$this->load->model('admin/admin_model');		
		$this->load->library('image_lib');	
	}

	public function index(){
		
		$data['slider_info'] = $this->admin_model->get_all_list('slider_manage', 'SliderID');
        $data['MainContent'] = $this->load->view('admin/slider_list', $data, true);
        $this->load->view('admin/template', $data);
	}
	public function add_slider(){
		
		$data['slider_info'] = "";
        $data['MainContent'] = $this->load->view('admin/add_slider', $data, true);
        $this->load->view('admin/template', $data);
	}
	
	public function edit_slider($SliderID){
		
		$data['slider_info'] = $this->admin_model->get_single_data_by_column('slider_manage', 'SliderID', $SliderID);
        $data['MainContent'] = $this->load->view('admin/add_slider', $data, true);
        $this->load->view('admin/template', $data);
	}
	
	public function update_slider(){
	
			
			$slider_info['Slider_Heading'] = $_POST['Slider_Heading'];
			$slider_info['Slider_SubHeading'] = $_POST['Slider_SubHeading'];
			
			$slider_info['Slider_ToolTip'] = $_POST['Slider_ToolTip'];
			$slider_info['AddDate'] = date('y-m-d');
			$slider_info['Status'] = 1;
	
		if($_POST['SliderID']==""){
			
			
		
			$this->db->insert('slider_manage', $slider_info);	
			$this->session->set_flashdata('successmessage','User Inserted Successfully');
			
			$SliderImage = $_FILES['Slider_Image']['name'];
			if($SliderImage!=""){
				$LastSliderID = $this->db->insert_id();
				
				$config['upload_path'] = './home_slider/original/';
				$config['allowed_types'] = 'gif|jpg|png|doc|txt|jpeg';
				$config['overwrite'] = TRUE;
				$config['file_name'] = 'slider_image_'.$LastSliderID;
				
				$this->load->library('upload', $config);
				if($this->upload->do_upload('Slider_Image')){
					$SliderImage = $this->upload->data(); 				
					$UpdateFilename = array('Slider_Image'=>$SliderImage['file_name']);
					$this->db->where('SliderID', $LastSliderID);
					$this->db->update('slider_manage',$UpdateFilename);
					
					my_resize('./home_slider/original/'.$SliderImage['file_name'],'./home_slider/small/'.$SliderImage['file_name'],1400,800);
				}
				
			}
			
		}else{
			$SliderID = $_POST['SliderID'];
			
			
			
			
			$this->db->where('SliderID', $SliderID);
			$this->db->update('slider_manage', $slider_info);
			$this->session->set_flashdata('successmessage','Detail Update successfully');
			
			$SliderImage = $_FILES['Slider_Image']['name'];
			if($SliderImage!=""){
				$LastSliderID = $SliderID;
				
				$config['upload_path'] = './home_slider/original/';
				$config['allowed_types'] = 'gif|jpg|png|doc|txt|jpeg';
				
				$config['overwrite'] = TRUE;
				$config['file_name'] = 'slider_image_'.$SliderID;
				
				$this->load->library('upload', $config);
				if($this->upload->do_upload('Slider_Image')){
					$SliderImage = $this->upload->data(); 				
					$UpdateFilename = array('Slider_Image'=>$SliderImage['file_name']);
					$this->db->where('SliderID', $LastSliderID);
					$this->db->update('slider_manage',$UpdateFilename);
						
					my_resize('./home_slider/original/'.$SliderImage['file_name'],'./home_slider/small/'.$SliderImage['file_name'],1400,800);
				
					
				}
				
			}
		}
		redirect(base_url().'admin/slider_list');
	}
	
	public function delete_slider($SliderID){
		
		$DeletSliderInfo = $this->admin_model->get_single_data_by_column('slider_manage', 'SliderID', $SliderID);
		unlink('./home_slider/original/'.$DeletSliderInfo['Slider_Image']);
		unlink('./home_slider/small/'.$DeletSliderInfo['Slider_Image']);
		$this->db->where('SliderID', $SliderID);
		$this->db->delete('slider_manage');
		$this->session->set_flashdata('successmessage','User Deleted successfully');
		redirect(base_url().'admin/slider_list');
	}
	
}
	