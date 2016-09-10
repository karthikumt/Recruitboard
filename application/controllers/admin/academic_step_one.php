<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Academic_step_one extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('admin/dropdown/student_model');		
	}

	public function index(){	
		$data['country_list'] = "";
        $data['MainContent'] = $this->load->view('admin/dropdown/academic_step_one', $data, true);		
        $this->load->view('admin/template', $data);	
	}

		// Academic_Country Code //
	
	
	public function add_Academic_Country($Academic_Country=0){
		$Academic_Country_data['Academic_CountryID']=$Academic_Country;
		echo $this->load->view('admin/dropdown/academic_step_one/add_country',$Academic_Country_data, true);
			
	}
	
	public function update_Academic_Country()
	{
		
		$Academic_Country_tablename='academic_country';
		$Academic_Country=$_REQUEST['Academic_Country'];
		$Academic_CountryID=$_REQUEST['Academic_CountryID'];
		$Academic_Country_ColumnName='Academic_CountryID';
		if($_REQUEST['Academic_CountryID']!="")
		{
			$Academic_Country_array=array(
					'Academic_CountryName'=>$Academic_Country,
					'Status'=>1
				);

			$this->student_model->update_list($Academic_Country_tablename,$Academic_Country_array,$Academic_Country_ColumnName,$Academic_CountryID);	
		}else
		{
			foreach($Academic_Country as $Data_Academic_Country)
			{
				if($Data_Academic_Country!=""){
					$Academic_Country_array=array(
						'Academic_CountryName'=>$Data_Academic_Country,
						'Status'=>1
					);
				
					$this->student_model->add_list($Academic_Country_tablename,$Academic_Country_array);	
				}
			}
			
		}
		
		$Academic_Country_details=get_table_details('academic_country','Academic_CountryID'); ?>
               <?php if(empty($Academic_Country_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Academic_Country_details as $Academic_Country){ ?>
              <tr id="Academic_Country_<?php echo $Academic_Country['Academic_CountryID']; ?>">
                <td><?php echo $Academic_Country['Academic_CountryID']; ?></td>
                <td><?php echo $Academic_Country['Academic_CountryName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/academic_step_one/add_Academic_Country/<?php echo $Academic_Country['Academic_CountryID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Academic_Country('<?php echo $Academic_Country['Academic_CountryID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public  function delete_Academic_Country()
	{
		
		$Academic_Country_tablenm='academic_country';
		$Academic_Country_Column='Academic_CountryID';
		$Academic_Country=$_REQUEST['Academic_CountryID'];
		$Academic_Country_DeletUserInfo = $this->student_model->delete_list($Academic_Country_tablenm,$Academic_Country_Column,$Academic_Country);
		
	}

	
	
	
		// Academic_Category Code //
	
	
	public function add_Academic_Category($Academic_Category=0){
		$Academic_Category_data['Academic_CategoryID']=$Academic_Category;
		echo $this->load->view('admin/dropdown/academic_step_one/add_category',$Academic_Category_data, true);
			
	}
	
	public function update_Academic_Category()
	{
		
		$Academic_Category_tablename='academic_category';
		$Academic_Category=$_REQUEST['Academic_Category'];
		$Academic_CategoryID=$_REQUEST['Academic_CategoryID'];
		$Academic_Category_ColumnName='Academic_CategoryID';
		if($_REQUEST['Academic_CategoryID']!="")
		{
			$Academic_Category_array=array(
					'Academic_CategoryName'=>$Academic_Category,
					'Status'=>1
				);

			$this->student_model->update_list($Academic_Category_tablename,$Academic_Category_array,$Academic_Category_ColumnName,$Academic_CategoryID);	
		}else
		{
			foreach($Academic_Category as $Data_Academic_Category)
			{
				if($Data_Academic_Category!=""){
					$Academic_Category_array=array(
						'Academic_CategoryName'=>$Data_Academic_Category,
						'Status'=>1
					);
				
					$this->student_model->add_list($Academic_Category_tablename,$Academic_Category_array);	
				}
			}
			
		}
		
		$Academic_Category_details=get_table_details('academic_category','Academic_CategoryID'); ?>
               <?php if(empty($Academic_Category_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Academic_Category_details as $Academic_Category){ ?>
              <tr id="Academic_Category_<?php echo $Academic_Category['Academic_CategoryID']; ?>">
                <td><?php echo $Academic_Category['Academic_CategoryID']; ?></td>
                <td><?php echo $Academic_Category['Academic_CategoryName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/academic_step_one/add_Academic_Category/<?php echo $Academic_Category['Academic_CategoryID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Academic_Category('<?php echo $Academic_Category['Academic_CategoryID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public  function delete_Academic_Category()
	{
		
		$Academic_Category_tablenm='academic_category';
		$Academic_Category_Column='Academic_CategoryID';
		$Academic_Category=$_REQUEST['Academic_CategoryID'];
		$Academic_Category_DeletUserInfo = $this->student_model->delete_list($Academic_Category_tablenm,$Academic_Category_Column,$Academic_Category);
		
	}

		
	

	
	

}

