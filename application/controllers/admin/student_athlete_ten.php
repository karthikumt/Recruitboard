<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_athlete_ten extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('admin/dropdown/student_model');		
	}

	public function index(){	
		$data['country_list'] = "";
        $data['MainContent'] = $this->load->view('admin/dropdown/student_athlete_ten', $data, true);		
        $this->load->view('admin/template', $data);	
	}
	
	public function add_strength($strength=0){
		$data['Stu_StrengthID']=$strength;
		echo $this->load->view('admin/dropdown/step_ten/add_strength', $data, true);
			
	}
	
	public function update_strength()
	{
		
		$tablename='stu_ten_strength';
		$Stu_StrengthName=$_REQUEST['Stu_StrengthName'];
		$Stu_StrengthID=$_REQUEST['Stu_StrengthID'];
		$ColumnName='Stu_StrengthID';
		if($_REQUEST['Stu_StrengthID']!="")
		{
			$array=array(
					'Stu_StrengthName'=>$Stu_StrengthName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_StrengthID);	
		}else
		{
			foreach($Stu_StrengthName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_StrengthName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_ten_strength','Stu_StrengthID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Strength_<?php echo $Gender['Stu_StrengthID']; ?>">
                <td><?php echo $Gender['Stu_StrengthID']; ?></td>
                <td><?php echo $Gender['Stu_StrengthName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete/add_strength/<?php echo $Gender['Stu_StrengthID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_strength('<?php echo $Gender['Stu_StrengthID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_strength()
	{
		
		$tablenm='stu_ten_strength';
		$Column='Stu_StrengthID';
		$strength=$_REQUEST['Stu_StrengthID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$strength);
		
	}
	
	public function add_condition($condition=0){
		$data['Stu_ConditionID']=$condition;
		echo $this->load->view('admin/dropdown/step_ten/add_condition', $data, true);
			
	}
	
	public function update_condition()
	{
		
		$tablename='stu_ten_condition';
		$Stu_ConditionName=$_REQUEST['Stu_ConditionName'];
		$Stu_ConditionID=$_REQUEST['Stu_ConditionID'];
		$ColumnName='Stu_ConditionID';
		if($_REQUEST['Stu_ConditionID']!="")
		{
			$array=array(
					'Stu_ConditionName'=>$Stu_ConditionName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_ConditionID);	
		}else
		{
			foreach($Stu_ConditionName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_ConditionName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_ten_condition','Stu_ConditionID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Condition_<?php echo $Gender['Stu_ConditionID']; ?>">
                <td><?php echo $Gender['Stu_ConditionID']; ?></td>
                <td><?php echo $Gender['Stu_ConditionName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete/add_condition/<?php echo $Gender['Stu_ConditionID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_condition('<?php echo $Gender['Stu_ConditionID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_condition()
	{
		
		$tablenm='stu_ten_condition';
		$Column='Stu_ConditionID';
		$condition=$_REQUEST['Stu_ConditionID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$condition);
		
	}
	
	
	
	
	

}

