<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_admin extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		//$this->load->library('upload');
		$this->load->model('admin/admin_model');		
	}

	public function index(){
		//$data['user_list'] = $this->admin_model->get_all_list('admin', 'AdminID', $startLimit, $per_page);
		$data['user_list'] = $this->admin_model->get_all_list('admin', 'AdminID');
        $data['MainContent'] = $this->load->view('admin/user_list', $data, true);
        $this->load->view('admin/template', $data);
	}
	
	public function edit_user($AdminID){
		
		$data['user_info'] = $this->admin_model->get_single_data_by_column('admin', 'AdminID', $AdminID);
        $data['MainContent'] = $this->load->view('admin/add_user', $data, true);
        $this->load->view('admin/template', $data);
	}
	
	public function add_user(){
		
		$data['user_info'] = "";
        $data['MainContent'] = $this->load->view('admin/add_user', $data, true);
        $this->load->view('admin/template', $data);
	}
	
	public function update_user(){
		if($_POST['AdminID']==""){
			$user_info['FirstName'] = $_POST['FirstName'];
			$user_info['LastName'] = $_POST['LastName'];
			$user_info['Email'] = $_POST['Email'];
			$user_info['UserName'] = $_POST['UserName'];
			$user_info['Password'] = $_POST['Password'];
			
			$CheckEmail = $this->admin_model->get_single_data_by_column('admin', 'Email', $_POST['Email']);
			if(!empty($CheckEmail)){
				$this->session->set_flashdata('errormessage','Email allready exitst');
				redirect(base_url().'admin/add_admin/add_user');
			}
			
			$CheckUserName = $this->admin_model->get_single_data_by_column('admin', 'UserName', $_POST['UserName']);
			if(!empty($CheckUserName)){
				$this->session->set_flashdata('errormessage','Username allready exitst');
				redirect(base_url().'admin/add_admin/add_user');
			}			
			$this->db->insert('admin', $user_info);	
			$this->session->set_flashdata('successmessage','User Inserted Successfully');
			
			$AdminProfilePicture = $_FILES['AdminProfilePicture']['name'];
			if($AdminProfilePicture!=""){
				$LastAdminID = $this->db->insert_id();
				
				$config['upload_path'] = './admin_images/';
				$config['allowed_types'] = 'gif|jpg|png|doc|txt|jpeg';
				//$config['max_size'] = 1024 * 8;
				//$config['encrypt_name'] = TRUE;
				$config['overwrite'] = TRUE;
				$config['file_name'] = 'admin_profile_'.$LastAdminID;
				
				$this->load->library('upload', $config);
				if($this->upload->do_upload('AdminProfilePicture')){
					$AdminProfilePicture = $this->upload->data(); //uploaded fiel name					
					$UpdateFilename = array('AdminProfilePicture'=>$AdminProfilePicture['file_name']);
					$this->db->where('AdminID', $LastAdminID);
					$this->db->update('admin',$UpdateFilename);
					
					my_resize('./admin_images/'.$AdminProfilePicture['file_name'],'./admin_images/small/'.$AdminProfilePicture['file_name'],100,100);
				}
				
			}
			
		}else{
			$AdminID = $_POST['AdminID'];
			$user_info['FirstName'] = $_POST['FirstName'];
			$user_info['LastName'] = $_POST['LastName'];
			$user_info['Email'] = $_POST['Email'];
			$user_info['UserName'] = $_POST['UserName'];
			$user_info['Password'] = $_POST['Password'];
			$user_info['LastLogin'] = date('Y-m-d H:i:s');
			
			$CheckEmail = $this->admin_model->chck_email($_POST['Email'],$AdminID);
			if(!empty($CheckEmail)){
				$this->session->set_flashdata('errormessage','Email allready exitst');
				redirect(base_url().'admin/add_admin/edit_user/'.$_POST['AdminID']);
			}
			
			$CheckUserName = $this->admin_model->check_user($_POST['UserName'],$AdminID);
			if(!empty($CheckUserName)){
				$this->session->set_flashdata('errormessage','Username allready exitst');
				redirect(base_url().'admin/add_admin/edit_user/'.$_POST['AdminID']);
			}		
			
			$this->db->where('AdminID', $AdminID);
			$this->db->update('admin', $user_info);
			$this->session->set_flashdata('successmessage','Detail Update successfully');
			
			$AdminProfilePicture = $_FILES['AdminProfilePicture']['name'];
			if($AdminProfilePicture!=""){
				$LastAdminID = $AdminID;
				
				$config['upload_path'] = './admin_images/';
				$config['allowed_types'] = 'gif|jpg|png|doc|txt|jpeg';
				//$config['max_size'] = 1024 * 8;
				//$config['encrypt_name'] = TRUE;
				$config['overwrite'] = TRUE;
				$config['file_name'] = 'admin_profile_'.$LastAdminID;
				
				$this->load->library('upload', $config);
				if($this->upload->do_upload('AdminProfilePicture')){
					$AdminProfilePicture = $this->upload->data(); //uploaded fiel name					
					$UpdateFilename = array('AdminProfilePicture'=>$AdminProfilePicture['file_name']);
					$this->db->where('AdminID', $LastAdminID);
					$this->db->update('admin',$UpdateFilename);
					
					my_resize('./admin_images/'.$AdminProfilePicture['file_name'],'./admin_images/small/'.$AdminProfilePicture['file_name'],100,100);
				}
				
			}
		}
		redirect(base_url().'admin/add_admin');
	}
	
	public function delete_admin($AdminID){
		
		$DeletUserInfo = $this->admin_model->get_single_data_by_column('admin', 'AdminID', $AdminID);
		unlink('./admin_images/'.$DeletUserInfo['AdminProfilePicture']);
		unlink('./admin_images/small/'.$DeletUserInfo['AdminProfilePicture']);
		$this->db->where('AdminID', $AdminID);
		$this->db->delete('admin');
		$this->session->set_flashdata('successmessage','User Deleted successfully');
		redirect(base_url().'admin/add_admin');
	}
	
}

