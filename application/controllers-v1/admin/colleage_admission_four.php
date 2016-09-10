<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Colleage_admission_four extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('admin/dropdown/student_model');		
	}

	public function index(){	
		$data['acceptance_list'] = "";
        $data['MainContent'] = $this->load->view('admin/dropdown/colleage_admission_four', $data, true);		
        $this->load->view('admin/template', $data);	
	}
	
	public function add_field($field=0){
		$data['Coll_admi_FieldID']=$field;
		echo $this->load->view('admin/dropdown/coll_admi_step_four/add_field', $data, true);
			
	}
	
	public function update_field()
	{
		
		$tablename='coll_admi_field';
		$Coll_admi_FieldName=$_REQUEST['Coll_admi_FieldName'];
		$Coll_admi_FieldID=$_REQUEST['Coll_admi_FieldID'];
		$ColumnName='Coll_admi_FieldID';
		if($_REQUEST['Coll_admi_FieldID']!="")
		{
			$array=array(
					'Coll_admi_FieldName'=>$Coll_admi_FieldName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Coll_admi_FieldID);	
		}else
		{
			foreach($Coll_admi_FieldName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Coll_admi_FieldName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('coll_admi_field','Coll_admi_FieldID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Field_<?php echo $Gender['Coll_admi_FieldID']; ?>">
                <td><?php echo $Gender['Coll_admi_FieldID']; ?></td>
                <td><?php echo $Gender['Coll_admi_FieldName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission_four/add_field/<?php echo $Gender['Coll_admi_FieldID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_field('<?php echo $Gender['Coll_admi_FieldID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_field()
	{
		
		$tablenm='coll_admi_field';
		$Column='Coll_admi_FieldID';
		$field=$_REQUEST['Coll_admi_FieldID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$field);
		
	}
	
	public function add_gpalist($gpalist=0){
		$data['Coll_admi_GpaListID']=$gpalist;
		echo $this->load->view('admin/dropdown/coll_admi_step_four/add_gpalist', $data, true);
			
	}
	
	public function update_gpalist()
	{
		
		$tablename='coll_admi_gpalist';
		$Coll_admi_GpaListName=$_REQUEST['Coll_admi_GpaListName'];
		$Coll_admi_GpaListID=$_REQUEST['Coll_admi_GpaListID'];
		$ColumnName='Coll_admi_GpaListID';
		if($_REQUEST['Coll_admi_GpaListID']!="")
		{
			$array=array(
					'Coll_admi_GpaListName'=>$Coll_admi_GpaListName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Coll_admi_GpaListID);	
		}else
		{
			foreach($Coll_admi_GpaListName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Coll_admi_GpaListName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('coll_admi_gpalist','Coll_admi_GpaListID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="GpaList_<?php echo $Gender['Coll_admi_GpaListID']; ?>">
                <td><?php echo $Gender['Coll_admi_GpaListID']; ?></td>
                <td><?php echo $Gender['Coll_admi_GpaListName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission_four/add_gpalist/<?php echo $Gender['Coll_admi_GpaListID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_gpalist('<?php echo $Gender['Coll_admi_GpaListID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_gpalist()
	{
		
		$tablenm='coll_admi_gpalist';
		$Column='Coll_admi_GpaListID';
		$gpalist=$_REQUEST['Coll_admi_GpaListID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gpalist);
		
	}
	
	public function add_major($major=0){
		$data['Coll_admi_MajorID']=$major;
		echo $this->load->view('admin/dropdown/coll_admi_step_four/add_major', $data, true);
			
	}
	
	public function update_major()
	{
		
		$tablename='coll_admi_major';
		$Coll_admi_MajorName=$_REQUEST['Coll_admi_MajorName'];
		$Coll_admi_FieldID=$_REQUEST['Coll_admi_FieldID'];
		$Coll_admi_MajorID=$_REQUEST['Coll_admi_MajorID'];
		$ColumnName='Coll_admi_MajorID';
		if($_REQUEST['Coll_admi_MajorID']!="")
		{
			$array=array(
					'Coll_admi_MajorName'=>$Coll_admi_MajorName,
					'Coll_admi_FieldID'=>$Coll_admi_FieldID,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Coll_admi_MajorID);	
		}else
		{
			foreach($Coll_admi_MajorName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Coll_admi_MajorName'=>$Data,
						'Coll_admi_FieldID'=>$Coll_admi_FieldID,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('coll_admi_major','Coll_admi_MajorID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Major_<?php echo $Gender['Coll_admi_MajorID']; ?>">
                <td><?php echo $Gender['Coll_admi_MajorID']; ?></td>
                <td><?php if($Gender['Coll_admi_FieldID']!=0){ 	
							 $SportName=get_row_data('coll_admi_field','Coll_admi_FieldID',$Gender['Coll_admi_FieldID']);
								echo $SportName['Coll_admi_FieldName'];  } else { echo "-"; }?> </td>
                <td><?php echo $Gender['Coll_admi_MajorName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission_four/add_major/<?php echo $Gender['Coll_admi_MajorID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_major('<?php echo $Gender['Coll_admi_MajorID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_major()
	{
		
		$tablenm='coll_admi_major';
		$Column='Coll_admi_MajorID';
		$major=$_REQUEST['Coll_admi_MajorID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$major);
		
	}
	
	
	public function add_testdata($testdata=0){
		$data['Coll_admi_TestDataID']=$testdata;
		echo $this->load->view('admin/dropdown/coll_admi_step_four/add_testdata', $data, true);
			
	}
	
	public function update_testdata()
	{
		
		$tablename='coll_admi_testdata';
		$Coll_admi_TestDataName=$_REQUEST['Coll_admi_TestDataName'];
		$Coll_admi_TestDataID=$_REQUEST['Coll_admi_TestDataID'];
		$ColumnName='Coll_admi_TestDataID';
		if($_REQUEST['Coll_admi_TestDataID']!="")
		{
			$array=array(
					'Coll_admi_TestDataName'=>$Coll_admi_TestDataName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Coll_admi_TestDataID);	
		}else
		{
			foreach($Coll_admi_TestDataName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Coll_admi_TestDataName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('coll_admi_testdata','Coll_admi_TestDataID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="TestData_<?php echo $Gender['Coll_admi_TestDataID']; ?>">
                <td><?php echo $Gender['Coll_admi_TestDataID']; ?></td>
                <td><?php echo $Gender['Coll_admi_TestDataName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission_four/add_testdata/<?php echo $Gender['Coll_admi_TestDataID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_testdata('<?php echo $Gender['Coll_admi_TestDataID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_testdata()
	{
		
		$tablenm='coll_admi_testdata';
		$Column='Coll_admi_TestDataID';
		$testdata=$_REQUEST['Coll_admi_TestDataID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$testdata);
		
	}
	

	

}

