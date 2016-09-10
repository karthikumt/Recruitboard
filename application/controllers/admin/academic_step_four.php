<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Academic_step_four extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('admin/dropdown/student_model');		
	}

	public function index(){	
		$data['country_list'] = "";
        $data['MainContent'] = $this->load->view('admin/dropdown/academic_step_four', $data, true);		
        $this->load->view('admin/template', $data);	
	}


	
	
		// Academic_Category Code //
	
	
	public function add_Academic_Category($Academic_Category=0){
		$Academic_Category_data['Academic_CategoryID']=$Academic_Category;
		echo $this->load->view('admin/dropdown/academic_step_four/add_category',$Academic_Category_data, true);
			
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
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/academic_step_four/add_Academic_Category/<?php echo $Academic_Category['Academic_CategoryID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Academic_Category('<?php echo $Academic_Category['Academic_CategoryID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Academic_Category()
	{
		
		$Academic_Category_tablenm='academic_category';
		$Academic_Category_Column='Academic_CategoryID';
		$Academic_Category=$_REQUEST['Academic_CategoryID'];
		$Academic_Category_DeletUserInfo = $this->student_model->delete_list($Academic_Category_tablenm,$Academic_Category_Column,$Academic_Category);
		
	}

		
	

	
	

}

