<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_listing extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		
		$this->load->model('admin/admin_model');		
	}

	
	public function view_student(){
		
		$data['user_list'] = $this->admin_model->get_user_data('user_register', 'UserType', 1);
		$data['MainContent'] = $this->load->view('admin/view_student', $data, true);
        $this->load->view('admin/template', $data);
	}
	public function view_juco(){
		
		$data['user_list'] = $this->admin_model->get_user_data('user_register', 'UserType', 2);
        $data['MainContent'] = $this->load->view('admin/view_juco', $data, true);
        $this->load->view('admin/template', $data);
	}
	
	public function view_coach(){
		
		$data['user_list'] = $this->admin_model->get_user_data('user_register', 'UserType', 3);
        $data['MainContent'] = $this->load->view('admin/view_coach', $data, true);
        $this->load->view('admin/template', $data);
	}
	
	
	public function view_admission(){
		
		$data['user_list'] = $this->admin_model->get_user_data('user_register', 'UserType', 4);
        $data['MainContent'] = $this->load->view('admin/view_admission', $data, true);
        $this->load->view('admin/template', $data);
	}
	
	public function view_highschool(){
		
		$data['user_list'] = $this->admin_model->get_user_data('user_register', 'UserType', 5);
        $data['MainContent'] = $this->load->view('admin/view_highschool', $data, true);
        $this->load->view('admin/template', $data);
	}
	
	public function view_clubcoach(){
		
		$data['user_list'] = $this->admin_model->get_user_data('user_register', 'UserType', 6);
        $data['MainContent'] = $this->load->view('admin/view_clubcoach', $data, true);
        $this->load->view('admin/template', $data);
	}
	
	public function view_highteacher(){
		
		$data['user_list'] = $this->admin_model->get_user_data('user_register', 'UserType', 7);
        $data['MainContent'] = $this->load->view('admin/view_highteacher', $data, true);
        $this->load->view('admin/template', $data);
	}
	
	public function view_developement(){
		
		$data['user_list'] = $this->admin_model->get_user_data('user_register', 'UserType', 8);
        $data['MainContent'] = $this->load->view('admin/view_developement', $data, true);
        $this->load->view('admin/template', $data);
	}
	
	public function view_acedmic(){
		
		$data['user_list'] = $this->admin_model->get_user_data('user_register', 'UserType', 9);
        $data['MainContent'] = $this->load->view('admin/view_acedmic', $data, true);
        $this->load->view('admin/template', $data);
	}
	
	
	public function updatestatus()
	{
		$CI =& get_instance();
		$UserID = $CI->uri->segment(4);
		$AdminStatus = $CI->uri->segment(5);
	
		$this->admin_model->update_list('user_register',array('AdminStatus'=>$AdminStatus),'UserID',$UserID);
		$result=$this->admin_model->get_single_data_by_column('user_register','UserID',$UserID);
		
		if($result['AdminStatus']=='1'){
				echo "Active"; echo "^_^";
			?>
			<a href="javascript:void(0);" onclick="change_status(<?php echo $result['UserID']; ?>,0);">In-active</a>
			<?php
		}else{
				echo "In-active"; echo "^_^";
			?>
			<a href="javascript:void(0);" onclick="change_status(<?php echo $result['UserID']; ?>,1);">Active</a>
		<?php 
    	}
     
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

