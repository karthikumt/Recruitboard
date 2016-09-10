<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class High_school_coach extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('admin/dropdown/student_model');		
	}

	public function index(){	
		$data['Gender_list'] = "";
        $data['MainContent'] = $this->load->view('admin/dropdown/high_school_coach', $data, true);		
        $this->load->view('admin/template', $data);	
	}
	
	public function add_gender($gender=0){
		$data['High_GenderID']=$gender;
		echo $this->load->view('admin/dropdown/high_school/add_gender', $data, true);
			
	}
	
	public function update_gender()
	{
		
		$tablename='high_school_gender';
		$High_GenderName=$_REQUEST['High_GenderName'];
		$High_GenderID=$_REQUEST['High_GenderID'];
		$ColumnName='High_GenderID';
		if($_REQUEST['High_GenderID']!="")
		{
			$array=array(
					'High_GenderName'=>$High_GenderName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$High_GenderID);	
		}else
		{
			foreach($High_GenderName as $Data)
			{
				if($Data!=""){
					$array=array(
						'High_GenderName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('high_school_gender','High_GenderID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Gender_<?php echo $Gender['High_GenderID']; ?>">
                <td><?php echo $Gender['High_GenderID']; ?></td>
                <td><?php echo $Gender['High_GenderName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/high_school_coach/add_gender/<?php echo $Gender['High_GenderID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_gender('<?php echo $Gender['High_GenderID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_gender()
	{
		
		$tablenm='high_school_gender';
		$Column='High_GenderID';
		$gender=$_REQUEST['High_GenderID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
		public function add_country($country=0){
		$data['High_CountryID']=$country;
		echo $this->load->view('admin/dropdown/high_school/add_country', $data, true);
			
	}
	
	public function update_country()
	{
		
		$tablename='high_school_country';
		$High_CountryName=$_REQUEST['High_CountryName'];
		$High_CountryID=$_REQUEST['High_CountryID'];
		$ColumnName='High_CountryID';
		if($_REQUEST['High_CountryID']!="")
		{
			$array=array(
					'High_CountryName'=>$High_CountryName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$High_CountryID);	
		}else
		{
			foreach($High_CountryName as $Data)
			{
				if($Data!=""){
					$array=array(
						'High_CountryName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('high_school_country','High_CountryID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Country_<?php echo $Gender['High_CountryID']; ?>">
                <td><?php echo $Gender['High_CountryID']; ?></td>
                <td><?php echo $Gender['High_CountryName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/high_school_coach/add_country/<?php echo $Gender['High_CountryID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_country('<?php echo $Gender['High_CountryID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_country()
	{
		
		$tablenm='high_school_country';
		$Column='High_CountryID';
		$country=$_REQUEST['High_CountryID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$country);
		
	}
	
		public function add_levelsport($levelsport=0){
		$data['High_LevelSportID']=$levelsport;
		echo $this->load->view('admin/dropdown/high_school/add_levelsport', $data, true);
			
	}
	
	public function update_levelsport()
	{
		
		$tablename='high_school_levelsport';
		$High_LevelSportName=$_REQUEST['High_LevelSportName'];
		$High_LevelSportID=$_REQUEST['High_LevelSportID'];
		$ColumnName='High_LevelSportID';
		if($_REQUEST['High_LevelSportID']!="")
		{
			$array=array(
					'High_LevelSportName'=>$High_LevelSportName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$High_LevelSportID);	
		}else
		{
			foreach($High_LevelSportName as $Data)
			{
				if($Data!=""){
					$array=array(
						'High_LevelSportName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('high_school_levelsport','High_LevelSportID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="LevelSport_<?php echo $Gender['High_LevelSportID']; ?>">
                <td><?php echo $Gender['High_LevelSportID']; ?></td>
                <td><?php echo $Gender['High_LevelSportName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/high_school_coach/add_levelsport/<?php echo $Gender['High_LevelSportID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_levelsport('<?php echo $Gender['High_LevelSportID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_levelsport()
	{
		
		$tablenm='high_school_levelsport';
		$Column='High_LevelSportID';
		$levelsport=$_REQUEST['High_LevelSportID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$levelsport);
		
	}
	
		public function add_sport($sport=0){
		$data['High_SportID']=$sport;
		echo $this->load->view('admin/dropdown/high_school/add_sport', $data, true);
			
	}
	
	public function update_sport()
	{
		
		$tablename='high_school_sport';
		$High_SportName=$_REQUEST['High_SportName'];
		$High_SportID=$_REQUEST['High_SportID'];
		$ColumnName='High_SportID';
		if($_REQUEST['High_SportID']!="")
		{
			$array=array(
					'High_SportName'=>$High_SportName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$High_SportID);	
		}else
		{
			foreach($High_SportName as $Data)
			{
				if($Data!=""){
					$array=array(
						'High_SportName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('high_school_sport','High_SportID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Sport_<?php echo $Gender['High_SportID']; ?>">
                <td><?php echo $Gender['High_SportID']; ?></td>
                <td><?php echo $Gender['High_SportName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/high_school_coach/add_sport/<?php echo $Gender['High_SportID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_sport('<?php echo $Gender['High_SportID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
        
		
	}
	
	public function delete_sport()
	{
		
		$tablenm='high_school_sport';
		$Column='High_SportID';
		$sport=$_REQUEST['High_SportID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$sport);
		
	}
	
	
	

}

