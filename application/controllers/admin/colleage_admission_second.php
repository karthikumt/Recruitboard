<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Colleage_admission_second extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('admin/dropdown/student_model');		
	}

	public function index(){	
		$data['acceptance_list'] = "";
        $data['MainContent'] = $this->load->view('admin/dropdown/colleage_admission_second', $data, true);		
        $this->load->view('admin/template', $data);	
	}
	
	public function add_acceptance($acceptance=0){
		$data['Coll_admi_AcceptanceID']=$acceptance;
		echo $this->load->view('admin/dropdown/coll_admi_step_second/add_acceptance', $data, true);
			
	}
	
	public function update_acceptance()
	{
		
		$tablename='coll_admi_acceptance';
		$Coll_admi_AcceptanceName=$_REQUEST['Coll_admi_AcceptanceName'];
		$Coll_admi_AcceptanceID=$_REQUEST['Coll_admi_AcceptanceID'];
		$ColumnName='Coll_admi_AcceptanceID';
		if($_REQUEST['Coll_admi_AcceptanceID']!="")
		{
			$array=array(
					'Coll_admi_AcceptanceName'=>$Coll_admi_AcceptanceName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Coll_admi_AcceptanceID);	
		}else
		{
			foreach($Coll_admi_AcceptanceName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Coll_admi_AcceptanceName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('coll_admi_acceptance','Coll_admi_AcceptanceID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Acceptance_<?php echo $Gender['Coll_admi_AcceptanceID']; ?>">
                <td><?php echo $Gender['Coll_admi_AcceptanceID']; ?></td>
                <td><?php echo $Gender['Coll_admi_AcceptanceName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission_second/add_acceptance/<?php echo $Gender['Coll_admi_AcceptanceID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_acceptance('<?php echo $Gender['Coll_admi_AcceptanceID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_acceptance()
	{
		
		$tablenm='coll_admi_acceptance';
		$Column='Coll_admi_AcceptanceID';
		$acceptance=$_REQUEST['Coll_admi_AcceptanceID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$acceptance);
		
	}
	
	public function add_testscore($testscore=0){
		$data['Coll_admi_TestScoreID']=$testscore;
		echo $this->load->view('admin/dropdown/coll_admi_step_second/add_testscore', $data, true);
			
	}
	
	public function update_testscore()
	{
		
		$tablename='coll_admi_testscore';
		$Coll_admi_TestScoreName=$_REQUEST['Coll_admi_TestScoreName'];
		$Coll_admi_TestScoreID=$_REQUEST['Coll_admi_TestScoreID'];
		$ColumnName='Coll_admi_TestScoreID';
		if($_REQUEST['Coll_admi_TestScoreID']!="")
		{
			$array=array(
					'Coll_admi_TestScoreName'=>$Coll_admi_TestScoreName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Coll_admi_TestScoreID);	
		}else
		{
			foreach($Coll_admi_TestScoreName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Coll_admi_TestScoreName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('coll_admi_testscore','Coll_admi_TestScoreID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="TestScore_<?php echo $Gender['Coll_admi_TestScoreID']; ?>">
                <td><?php echo $Gender['Coll_admi_TestScoreID']; ?></td>
                <td><?php echo $Gender['Coll_admi_TestScoreName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission_second/add_testscore/<?php echo $Gender['Coll_admi_TestScoreID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_testscore('<?php echo $Gender['Coll_admi_TestScoreID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_testscore()
	{
		
		$tablenm='coll_admi_testscore';
		$Column='Coll_admi_TestScoreID';
		$testscore=$_REQUEST['Coll_admi_TestScoreID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$testscore);
		
	}
	
	public function add_graduaction($graduaction=0){
		$data['Coll_admi_GraduactionID']=$graduaction;
		echo $this->load->view('admin/dropdown/coll_admi_step_second/add_graduaction', $data, true);
			
	}
	
	public function update_graduaction()
	{
		
		$tablename='coll_admi_graduaction';
		$Coll_admi_GraduactionName=$_REQUEST['Coll_admi_GraduactionName'];
		$Coll_admi_GraduactionID=$_REQUEST['Coll_admi_GraduactionID'];
		$ColumnName='Coll_admi_GraduactionID';
		if($_REQUEST['Coll_admi_GraduactionID']!="")
		{
			$array=array(
					'Coll_admi_GraduactionName'=>$Coll_admi_GraduactionName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Coll_admi_GraduactionID);	
		}else
		{
			foreach($Coll_admi_GraduactionName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Coll_admi_GraduactionName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('coll_admi_graduaction','Coll_admi_GraduactionID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Graduaction_<?php echo $Gender['Coll_admi_GraduactionID']; ?>">
                <td><?php echo $Gender['Coll_admi_GraduactionID']; ?></td>
                <td><?php echo $Gender['Coll_admi_GraduactionName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission_second/add_graduaction/<?php echo $Gender['Coll_admi_GraduactionID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_graduaction('<?php echo $Gender['Coll_admi_GraduactionID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_graduaction()
	{
		
		$tablenm='coll_admi_graduaction';
		$Column='Coll_admi_GraduactionID';
		$graduaction=$_REQUEST['Coll_admi_GraduactionID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$graduaction);
		
	}
	
	public function add_setting($setting=0){
		$data['Coll_admi_SettingID']=$setting;
		echo $this->load->view('admin/dropdown/coll_admi_step_second/add_setting', $data, true);
			
	}
	
	public function update_setting()
	{
		
		$tablename='coll_admi_setting';
		$Coll_admi_SettingName=$_REQUEST['Coll_admi_SettingName'];
		$Coll_admi_SettingID=$_REQUEST['Coll_admi_SettingID'];
		$ColumnName='Coll_admi_SettingID';
		if($_REQUEST['Coll_admi_SettingID']!="")
		{
			$array=array(
					'Coll_admi_SettingName'=>$Coll_admi_SettingName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Coll_admi_SettingID);	
		}else
		{
			foreach($Coll_admi_SettingName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Coll_admi_SettingName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('coll_admi_setting','Coll_admi_SettingID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Setting_<?php echo $Gender['Coll_admi_SettingID']; ?>">
                <td><?php echo $Gender['Coll_admi_SettingID']; ?></td>
                <td><?php echo $Gender['Coll_admi_SettingName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission_second/add_setting/<?php echo $Gender['Coll_admi_SettingID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_setting('<?php echo $Gender['Coll_admi_SettingID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_setting()
	{
		
		$tablenm='coll_admi_setting';
		$Column='Coll_admi_SettingID';
		$setting=$_REQUEST['Coll_admi_SettingID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$setting);
		
	}
	
	public function add_gpa($gpa=0){
		$data['Coll_admi_GpaID']=$gpa;
		echo $this->load->view('admin/dropdown/coll_admi_step_second/add_gpa', $data, true);
			
	}
	
	public function update_gpa()
	{
		
		$tablename='coll_admi_gpa';
		$Coll_admi_GpaName=$_REQUEST['Coll_admi_GpaName'];
		$Coll_admi_GpaID=$_REQUEST['Coll_admi_GpaID'];
		$ColumnName='Coll_admi_GpaID';
		if($_REQUEST['Coll_admi_GpaID']!="")
		{
			$array=array(
					'Coll_admi_GpaName'=>$Coll_admi_GpaName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Coll_admi_GpaID);	
		}else
		{
			foreach($Coll_admi_GpaName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Coll_admi_GpaName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('coll_admi_gpa','Coll_admi_GpaID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Gpa_<?php echo $Gender['Coll_admi_GpaID']; ?>">
                <td><?php echo $Gender['Coll_admi_GpaID']; ?></td>
                <td><?php echo $Gender['Coll_admi_GpaName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission_second/add_gpa/<?php echo $Gender['Coll_admi_GpaID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_gpa('<?php echo $Gender['Coll_admi_GpaID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_gpa()
	{
		
		$tablenm='coll_admi_gpa';
		$Column='Coll_admi_GpaID';
		$gpa=$_REQUEST['Coll_admi_GpaID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gpa);
		
	}
	
	public function add_topmajor($topmajor=0){
		$data['Coll_admi_TopMajorID']=$topmajor;
		echo $this->load->view('admin/dropdown/coll_admi_step_second/add_topmajor', $data, true);
			
	}
	
	public function update_topmajor()
	{
		
		$tablename='coll_admi_topmajor';
		$Coll_admi_TopMajorName=$_REQUEST['Coll_admi_TopMajorName'];
		$Coll_admi_TopMajorID=$_REQUEST['Coll_admi_TopMajorID'];
		$ColumnName='Coll_admi_TopMajorID';
		if($_REQUEST['Coll_admi_TopMajorID']!="")
		{
			$array=array(
					'Coll_admi_TopMajorName'=>$Coll_admi_TopMajorName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Coll_admi_TopMajorID);	
		}else
		{
			foreach($Coll_admi_TopMajorName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Coll_admi_TopMajorName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('coll_admi_topmajor','Coll_admi_TopMajorID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="TopMajor_<?php echo $Gender['Coll_admi_TopMajorID']; ?>">
                <td><?php echo $Gender['Coll_admi_TopMajorID']; ?></td>
                <td><?php echo $Gender['Coll_admi_TopMajorName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission_second/add_topmajor/<?php echo $Gender['Coll_admi_TopMajorID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_topmajor('<?php echo $Gender['Coll_admi_TopMajorID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_topmajor()
	{
		
		$tablenm='coll_admi_topmajor';
		$Column='Coll_admi_TopMajorID';
		$topmajor=$_REQUEST['Coll_admi_TopMajorID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$topmajor);
		
	}
	

}

