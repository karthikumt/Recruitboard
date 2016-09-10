<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Developement_coach extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('admin/dropdown/student_model');		
	}

	public function index(){	
		$data['Gender_list'] = "";
        $data['MainContent'] = $this->load->view('admin/dropdown/developement_coach', $data, true);		
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
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/developement_coach/add_country/<?php echo $Gender['Dev_CountryID']; ?> "><i class="fa fa-pencil"></i></a>
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
}

