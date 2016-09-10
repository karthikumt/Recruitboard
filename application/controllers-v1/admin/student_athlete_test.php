<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_athlete_test extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('admin/dropdown/student_model');		
	}

	public function index(){	
		$data['country_list'] = "";
        $data['MainContent'] = $this->load->view('admin/dropdown/student_athlete_test', $data, true);		
        $this->load->view('admin/template', $data);	
	}
	
	public function add_assist($assist=0){
		$data['Stu_AssistID']=$assist;
		echo $this->load->view('admin/dropdown/step_six/add_assist', $data, true);
			
	}
	
	public function update_assist()
	{
		
		$tablename='stu_field_assist';
		$Stu_AssistName=$_REQUEST['Stu_AssistName'];
		$Stu_AssistID=$_REQUEST['Stu_AssistID'];
		$ColumnName='Stu_AssistID';
		if($_REQUEST['Stu_AssistID']!="")
		{
			$array=array(
					'Stu_AssistName'=>$Stu_AssistName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_AssistID);	
		}else
		{
			foreach($Stu_AssistName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_AssistName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_field_assist','Stu_AssistID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Strength_<?php echo $Gender['Stu_AssistID']; ?>">
                <td><?php echo $Gender['Stu_AssistID']; ?></td>
                <td><?php echo $Gender['Stu_AssistName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_test/add_assist/<?php echo $Gender['Stu_AssistID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_assist('<?php echo $Gender['Stu_AssistID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_assist()
	{
		
		$tablenm='stu_field_assist';
		$Column='Stu_AssistID';
		$assist=$_REQUEST['Stu_AssistID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$assist);
		
	}
	
	
	public function add_put($put=0){
		$data['Stu_PutID']=$put;
		echo $this->load->view('admin/dropdown/step_six/add_put', $data, true);
			
	}
	
	public function update_put()
	{
		
		$tablename='stu_field_put';
		$Stu_PutName=$_REQUEST['Stu_PutName'];
		$Stu_PutID=$_REQUEST['Stu_PutID'];
		$ColumnName='Stu_PutID';
		if($_REQUEST['Stu_PutID']!="")
		{
			$array=array(
					'Stu_PutName'=>$Stu_PutName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_PutID);	
		}else
		{
			foreach($Stu_PutName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_PutName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_field_put','Stu_PutID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Put_<?php echo $Gender['Stu_PutID']; ?>">
                <td><?php echo $Gender['Stu_PutID']; ?></td>
                <td><?php echo $Gender['Stu_PutName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_test/add_put/<?php echo $Gender['Stu_PutID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_put('<?php echo $Gender['Stu_PutID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_put()
	{
		
		$tablenm='stu_field_put';
		$Column='Stu_PutID';
		$put=$_REQUEST['Stu_PutID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$put);
		
	}
	
	public function add_double($double=0){
		$data['Stu_DoubleID']=$double;
		echo $this->load->view('admin/dropdown/step_six/add_double', $data, true);
			
	}
	
	public function update_double()
	{
		
		$tablename='stu_field_double';
		$Stu_DoubleName=$_REQUEST['Stu_DoubleName'];
		$Stu_DoubleID=$_REQUEST['Stu_DoubleID'];
		$ColumnName='Stu_DoubleID';
		if($_REQUEST['Stu_DoubleID']!="")
		{
			$array=array(
					'Stu_DoubleName'=>$Stu_DoubleName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_DoubleID);	
		}else
		{
			foreach($Stu_DoubleName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_DoubleName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_field_double','Stu_DoubleID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Double_<?php echo $Gender['Stu_DoubleID']; ?>">
                <td><?php echo $Gender['Stu_DoubleID']; ?></td>
                <td><?php echo $Gender['Stu_DoubleName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_test/add_double/<?php echo $Gender['Stu_DoubleID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_double('<?php echo $Gender['Stu_DoubleID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_double()
	{
		
		$tablenm='stu_field_double';
		$Column='Stu_DoubleID';
		$double=$_REQUEST['Stu_DoubleID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$double);
		
	}
	
	public function add_triple($triple=0){
		$data['Stu_TripleID']=$triple;
		echo $this->load->view('admin/dropdown/step_six/add_triple', $data, true);
			
	}
	
	public function update_triple()
	{
		
		$tablename='stu_field_triple';
		$Stu_TripleName=$_REQUEST['Stu_TripleName'];
		$Stu_TripleID=$_REQUEST['Stu_TripleID'];
		$ColumnName='Stu_TripleID';
		if($_REQUEST['Stu_TripleID']!="")
		{
			$array=array(
					'Stu_TripleName'=>$Stu_TripleName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_TripleID);	
		}else
		{
			foreach($Stu_TripleName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_TripleName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_field_triple','Stu_TripleID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Triple_<?php echo $Gender['Stu_TripleID']; ?>">
                <td><?php echo $Gender['Stu_TripleID']; ?></td>
                <td><?php echo $Gender['Stu_TripleName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_test/add_triple/<?php echo $Gender['Stu_TripleID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_triple('<?php echo $Gender['Stu_TripleID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_triple()
	{
		
		$tablenm='stu_field_triple';
		$Column='Stu_TripleID';
		$triple=$_REQUEST['Stu_TripleID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$triple);
		
	}
	
	public function add_filed($filed=0){
		$data['Stu_FiledID']=$filed;
		echo $this->load->view('admin/dropdown/step_six/add_filed', $data, true);
			
	}
	
	public function update_filed()
	{
		
		$tablename='stu_field_filed';
		$Stu_FiledName=$_REQUEST['Stu_FiledName'];
		$Stu_FiledID=$_REQUEST['Stu_FiledID'];
		$ColumnName='Stu_FiledID';
		if($_REQUEST['Stu_FiledID']!="")
		{
			$array=array(
					'Stu_FiledName'=>$Stu_FiledName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_FiledID);	
		}else
		{
			foreach($Stu_FiledName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_FiledName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_field_filed','Stu_FiledID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Filed_<?php echo $Gender['Stu_FiledID']; ?>">
                <td><?php echo $Gender['Stu_FiledID']; ?></td>
                <td><?php echo $Gender['Stu_FiledName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_test/add_filed/<?php echo $Gender['Stu_FiledID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_filed('<?php echo $Gender['Stu_FiledID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_filed()
	{
		
		$tablenm='stu_field_filed';
		$Column='Stu_FiledID';
		$filed=$_REQUEST['Stu_FiledID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$filed);
		
	}
	
	
	public function add_speed($speed=0){
		$data['Stu_SpeedID']=$speed;
		echo $this->load->view('admin/dropdown/step_six/add_speed', $data, true);
			
	}
	
	public function update_speed()
	{
		
		$tablename='stu_hitting_speed';
		$Stu_SpeedName=$_REQUEST['Stu_SpeedName'];
		$Stu_SpeedID=$_REQUEST['Stu_SpeedID'];
		$ColumnName='Stu_SpeedID';
		if($_REQUEST['Stu_SpeedID']!="")
		{
			$array=array(
					'Stu_SpeedName'=>$Stu_SpeedName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_SpeedID);	
		}else
		{
			foreach($Stu_SpeedName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_SpeedName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_hitting_speed','Stu_SpeedID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Speed_<?php echo $Gender['Stu_SpeedID']; ?>">
                <td><?php echo $Gender['Stu_SpeedID']; ?></td>
                <td><?php echo $Gender['Stu_SpeedName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_test/add_speed/<?php echo $Gender['Stu_SpeedID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_speed('<?php echo $Gender['Stu_SpeedID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_speed()
	{
		
		$tablenm='stu_hitting_speed';
		$Column='Stu_SpeedID';
		$speed=$_REQUEST['Stu_SpeedID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$speed);
		
	}
	
		public function add_yardbase($yardbase=0){
		$data['Stu_YardBaseID']=$yardbase;
		echo $this->load->view('admin/dropdown/step_six/add_yardbase', $data, true);
			
	}
	
	public function update_yardbase()
	{
		
		$tablename='stu_hitting_yardbase';
		$Stu_YardBaseName=$_REQUEST['Stu_YardBaseName'];
		$Stu_YardBaseID=$_REQUEST['Stu_YardBaseID'];
		$ColumnName='Stu_YardBaseID';
		if($_REQUEST['Stu_YardBaseID']!="")
		{
			$array=array(
					'Stu_YardBaseName'=>$Stu_YardBaseName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_YardBaseID);	
		}else
		{
			foreach($Stu_YardBaseName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_YardBaseName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_hitting_yardbase','Stu_YardBaseID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="YardBase_<?php echo $Gender['Stu_YardBaseID']; ?>">
                <td><?php echo $Gender['Stu_YardBaseID']; ?></td>
                <td><?php echo $Gender['Stu_YardBaseName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_test/add_yardbase/<?php echo $Gender['Stu_YardBaseID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_yardbase('<?php echo $Gender['Stu_YardBaseID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_yardbase()
	{
		
		$tablenm='stu_hitting_yardbase';
		$Column='Stu_YardBaseID';
		$yardbase=$_REQUEST['Stu_YardBaseID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$yardbase);
		
	}
	
	
	public function add_onbase($onbase=0){
		$data['Stu_OnBaseID']=$onbase;
		echo $this->load->view('admin/dropdown/step_six/add_onbase', $data, true);
			
	}
	
	public function update_onbase()
	{
		
		$tablename='stu_hitting_onbase';
		$Stu_OnBaseName=$_REQUEST['Stu_OnBaseName'];
		$Stu_OnBaseID=$_REQUEST['Stu_OnBaseID'];
		$ColumnName='Stu_OnBaseID';
		if($_REQUEST['Stu_OnBaseID']!="")
		{
			$array=array(
					'Stu_OnBaseName'=>$Stu_OnBaseName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_OnBaseID);	
		}else
		{
			foreach($Stu_OnBaseName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_OnBaseName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_hitting_onbase','Stu_OnBaseID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="OnBase_<?php echo $Gender['Stu_OnBaseID']; ?>">
                <td><?php echo $Gender['Stu_OnBaseID']; ?></td>
                <td><?php echo $Gender['Stu_OnBaseName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_test/add_onbase/<?php echo $Gender['Stu_OnBaseID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_onbase('<?php echo $Gender['Stu_OnBaseID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_onbase()
	{
		
		$tablenm='stu_hitting_onbase';
		$Column='Stu_OnBaseID';
		$onbase=$_REQUEST['Stu_OnBaseID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$onbase);
		
	}

}

