<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Club_coach extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('admin/dropdown/student_model');		
	}

	public function index(){	
		$data['Gender_list'] = "";
        $data['MainContent'] = $this->load->view('admin/dropdown/club_coach', $data, true);		
        $this->load->view('admin/template', $data);	
	}
	
		public function add_country($country=0){
		$data['Club_CountryID']=$country;
		echo $this->load->view('admin/dropdown/club_coach/add_country', $data, true);
			
	}
	
	public function update_country()
	{
		
		$tablename='club_coach_country';
		$Club_CountryName=$_REQUEST['Club_CountryName'];
		$Club_CountryID=$_REQUEST['Club_CountryID'];
		$ColumnName='Club_CountryID';
		if($_REQUEST['Club_CountryID']!="")
		{
			$array=array(
					'Club_CountryName'=>$Club_CountryName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Club_CountryID);	
		}else
		{
			foreach($Club_CountryName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Club_CountryName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('club_coach_country','Club_CountryID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Country_<?php echo $Gender['Club_CountryID']; ?>">
                <td><?php echo $Gender['Club_CountryID']; ?></td>
                <td><?php echo $Gender['Club_CountryName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/club_coach/add_country/<?php echo $Gender['Club_CountryID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_country('<?php echo $Gender['Club_CountryID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_country()
	{
		
		$tablenm='club_coach_country';
		$Column='Club_CountryID';
		$country=$_REQUEST['Club_CountryID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$country);
		
	}
	
		public function add_gendersport($gendersport=0){
		$data['Club_GenderSportID']=$gendersport;
		echo $this->load->view('admin/dropdown/club_coach/add_gendersport', $data, true);
			
	}
	
	public function update_gendersport()
	{
		
		$tablename='club_coach_gendersport';
		$Club_GenderSportName=$_REQUEST['Club_GenderSportName'];
		$Club_GenderSportID=$_REQUEST['Club_GenderSportID'];
		$ColumnName='Club_GenderSportID';
		if($_REQUEST['Club_GenderSportID']!="")
		{
			$array=array(
					'Club_GenderSportName'=>$Club_GenderSportName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Club_GenderSportID);	
		}else
		{
			foreach($Club_GenderSportName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Club_GenderSportName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('club_coach_gendersport','Club_GenderSportID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="GenderSport_<?php echo $Gender['Club_GenderSportID']; ?>">
                <td><?php echo $Gender['Club_GenderSportID']; ?></td>
                <td><?php echo $Gender['Club_GenderSportName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/club_coach/add_gendersport/<?php echo $Gender['Club_GenderSportID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_gendersport('<?php echo $Gender['Club_GenderSportID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_gendersport()
	{
		
		$tablenm='club_coach_gendersport';
		$Column='Club_GenderSportID';
		$gendersport=$_REQUEST['Club_GenderSportID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gendersport);
		
	}
	
		public function add_sport($sport=0){
		$data['Club_SportID']=$sport;
		echo $this->load->view('admin/dropdown/club_coach/add_sport', $data, true);
			
	}
	
	public function update_sport()
	{
		
		$tablename='club_coach_sport';
		$Club_SportName=$_REQUEST['Club_SportName'];
		$Club_SportID=$_REQUEST['Club_SportID'];
		$ColumnName='Club_SportID';
		if($_REQUEST['Club_SportID']!="")
		{
			$array=array(
					'Club_SportName'=>$Club_SportName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Club_SportID);	
		}else
		{
			foreach($Club_SportName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Club_SportName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('club_coach_sport','Club_SportID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Sport_<?php echo $Gender['Club_SportID']; ?>">
                <td><?php echo $Gender['Club_SportID']; ?></td>
                <td><?php echo $Gender['Club_SportName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/club_coach/add_sport/<?php echo $Gender['Club_SportID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_sport('<?php echo $Gender['Club_SportID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_sport()
	{
		
		$tablenm='club_coach_sport';
		$Column='Club_SportID';
		$sport=$_REQUEST['Club_SportID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$sport);
		
	}
	
	
	

}

