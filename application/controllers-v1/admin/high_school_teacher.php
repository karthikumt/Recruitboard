<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class High_school_teacher extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('admin/dropdown/student_model');		
	}

	public function index(){	
		$data['Gender_list'] = "";
        $data['MainContent'] = $this->load->view('admin/dropdown/high_school_teacher', $data, true);		
        $this->load->view('admin/template', $data);	
	}
	
		public function add_country($country=0){
		$data['High_teacher_CountryID']=$country;
		echo $this->load->view('admin/dropdown/high_school_teacher/add_country', $data, true);
			
	}
	
	public function update_country()
	{
		
		$tablename='high_teacher_country';
		$High_teacher_CountryName=$_REQUEST['High_teacher_CountryName'];
		$High_teacher_CountryID=$_REQUEST['High_teacher_CountryID'];
		$ColumnName='High_teacher_CountryID';
		if($_REQUEST['High_teacher_CountryID']!="")
		{
			$array=array(
					'High_teacher_CountryName'=>$High_teacher_CountryName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$High_teacher_CountryID);	
		}else
		{
			foreach($High_teacher_CountryName as $Data)
			{
				if($Data!=""){
					$array=array(
						'High_teacher_CountryName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('high_teacher_country','High_teacher_CountryID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Country_<?php echo $Gender['High_teacher_CountryID']; ?>">
                <td><?php echo $Gender['High_teacher_CountryID']; ?></td>
                <td><?php echo $Gender['High_teacher_CountryName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/high_school_teacher/add_country/<?php echo $Gender['High_teacher_CountryID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_country('<?php echo $Gender['High_teacher_CountryID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_country()
	{
		
		$tablenm='high_teacher_country';
		$Column='High_teacher_CountryID';
		$country=$_REQUEST['High_teacher_CountryID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$country);
		
	}
}

