<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Colleage_admission extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('admin/dropdown/student_model');		
	}

	public function index(){	
		$data['country_list'] = "";
        $data['MainContent'] = $this->load->view('admin/dropdown/colleage_admission', $data, true);		
        $this->load->view('admin/template', $data);	
	}
	
	public function add_country($country=0){
		$data['Coll_admi_CountryID']=$country;
		echo $this->load->view('admin/dropdown/coll_admi_step_one/add_country', $data, true);
			
	}
	
	public function update_country()
	{
		
		$tablename='coll_admi_country';
		$Coll_admi_CountryName=$_REQUEST['Coll_admi_CountryName'];
		$Coll_admi_CountryID=$_REQUEST['Coll_admi_CountryID'];
		$ColumnName='Coll_admi_CountryID';
		if($_REQUEST['Coll_admi_CountryID']!="")
		{
			$array=array(
					'Coll_admi_CountryName'=>$Coll_admi_CountryName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Coll_admi_CountryID);	
		}else
		{
			foreach($Coll_admi_CountryName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Coll_admi_CountryName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('coll_admi_country','Coll_admi_CountryID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Country_<?php echo $Gender['Coll_admi_CountryID']; ?>">
                <td><?php echo $Gender['Coll_admi_CountryID']; ?></td>
                <td><?php echo $Gender['Coll_admi_CountryName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission/add_country/<?php echo $Gender['Coll_admi_CountryID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_country('<?php echo $Gender['Coll_admi_CountryID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_country()
	{
		
		$tablenm='coll_admi_country';
		$Column='Coll_admi_CountryID';
		$country=$_REQUEST['Coll_admi_CountryID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$country);
		
	}
	
	
	

}

