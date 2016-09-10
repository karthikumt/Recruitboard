<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Developement_coach_four extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('admin/dropdown/student_model');		
	}

	public function index(){	
		$data['Gender_list'] = "";
        $data['MainContent'] = $this->load->view('admin/dropdown/developement_coach_four', $data, true);		
        $this->load->view('admin/template', $data);	
	}
	
	public function add_country($country=0){
		$data['Dev_CountryID']=$country;
		echo $this->load->view('admin/dropdown/developement_coach/add_country', $data, true);
			
	}
	
	public function update_country()
	{
		
		$tablename='developement_coach_country';
		$Dev_CountryName=$_REQUEST['Dev_CountryName'];
		$Dev_CountryID=$_REQUEST['Dev_CountryID'];
		$ColumnName='Dev_CountryID';
		if($_REQUEST['Dev_CountryID']!="")
		{
			$array=array(
					'Dev_CountryName'=>$Dev_CountryName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Dev_CountryID);	
		}else
		{
			foreach($Dev_CountryName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Dev_CountryName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('developement_coach_country','Dev_CountryID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Country_<?php echo $Gender['Dev_CountryID']; ?>">
                <td><?php echo $Gender['Dev_CountryID']; ?></td>
                <td><?php echo $Gender['Dev_CountryName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/developement_coach_four/add_country/<?php echo $Gender['Dev_CountryID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_country('<?php echo $Gender['Dev_CountryID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_country()
	{
		
		$tablenm='developement_coach_country';
		$Column='Dev_CountryID';
		$country=$_REQUEST['Dev_CountryID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$country);
		
	}
	
	public function add_gender($gender=0){
		$data['Dev_GenderID']=$gender;
		echo $this->load->view('admin/dropdown/developement_coach/add_gender', $data, true);
			
	}
	
	public function update_gender()
	{
		
		$tablename='developement_coach_gender';
		$Dev_GenderName=$_REQUEST['Dev_GenderName'];
		$Dev_GenderID=$_REQUEST['Dev_GenderID'];
		$ColumnName='Dev_GenderID';
		if($_REQUEST['Dev_GenderID']!="")
		{
			$array=array(
					'Dev_GenderName'=>$Dev_GenderName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Dev_GenderID);	
		}else
		{
			foreach($Dev_GenderName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Dev_GenderName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('developement_coach_gender','Dev_GenderID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Gender_<?php echo $Gender['Dev_GenderID']; ?>">
                <td><?php echo $Gender['Dev_GenderID']; ?></td>
                <td><?php echo $Gender['Dev_GenderName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/developement_coach_four/add_gender/<?php echo $Gender['Dev_GenderID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_gender('<?php echo $Gender['Dev_GenderID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_gender()
	{
		
		$tablenm='developement_coach_gender';
		$Column='Dev_GenderID';
		$gender=$_REQUEST['Dev_GenderID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	public function add_category($category=0){
		$data['Dev_CategoryID']=$category;
		echo $this->load->view('admin/dropdown/developement_coach/add_category', $data, true);
			
	}
	
	public function update_category()
	{
		
		$tablename='developement_coach_category';
		$Dev_CategoryName=$_REQUEST['Dev_CategoryName'];
		$Dev_CategoryID=$_REQUEST['Dev_CategoryID'];
		$ColumnName='Dev_CategoryID';
		if($_REQUEST['Dev_CategoryID']!="")
		{
			$array=array(
					'Dev_CategoryName'=>$Dev_CategoryName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Dev_CategoryID);	
		}else
		{
			foreach($Dev_CategoryName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Dev_CategoryName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Category_details=get_table_details('developement_coach_category','Dev_CategoryID'); ?>
               <?php if(empty($Category_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Category_details as $Category){ ?>
              <tr id="Category_<?php echo $Category['Dev_CategoryID']; ?>">
                <td><?php echo $Category['Dev_CategoryID']; ?></td>
                <td><?php echo $Category['Dev_CategoryName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/developement_coach_four/add_category/<?php echo $Category['Dev_CategoryID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_category('<?php echo $Category['Dev_CategoryID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_category()
	{
	 	
		$tablenm='developement_coach_category';
		$Column='Dev_CategoryID';
		$category=$_REQUEST['Dev_CategoryID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$category);
		
	}
}

