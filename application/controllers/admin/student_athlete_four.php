<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_athlete_four extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('admin/dropdown/student_model');		
	}

	public function index(){	
		$data['country_list'] = "";
        $data['MainContent'] = $this->load->view('admin/dropdown/student_athlete_four', $data, true);		
        $this->load->view('admin/template', $data);	
	}
	
	public function add_weight($weight=0){
		$data['Stu_Bio_WeigthID']=$weight;
		echo $this->load->view('admin/dropdown/step_four/add_weight', $data, true);
			
	}
	
	public function update_weight()
	{
		$tablename='stu_biometric_weight';
		$Stu_Bio_WeightName=$_REQUEST['Stu_Bio_WeightName'];
		$Stu_Bio_WeigthID=$_REQUEST['Stu_Bio_WeigthID'];
		$ColumnName='Stu_Bio_WeigthID';
		if($_REQUEST['Stu_Bio_WeigthID']!="")
		{
			$array=array(
					'Stu_Bio_WeightName'=>$Stu_Bio_WeightName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Bio_WeigthID);	
		}else
		{
			foreach($Stu_Bio_WeightName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Bio_WeightName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_biometric_weight','Stu_Bio_WeigthID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Weight_<?php echo $Gender['Stu_Bio_WeigthID']; ?>">
                <td><?php echo $Gender['Stu_Bio_WeigthID']; ?></td>
                <td><?php echo $Gender['Stu_Bio_WeightName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_weight/<?php echo $Gender['Stu_Bio_WeigthID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_weight('<?php echo $Gender['Stu_Bio_WeigthID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_weight()
	{
		
		$tablenm='stu_biometric_weight';
		$Column='Stu_Bio_WeigthID';
		$gender=$_REQUEST['Stu_Bio_WeigthID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	public function add_height($height=0){
		$data['Stu_Bio_HeigthID']=$height;
		echo $this->load->view('admin/dropdown/step_four/add_height', $data, true);
			
	}
	
	public function update_height()
	{
		
		$tablename='stu_biometric_height';
		$Stu_Bio_HeightName=$_REQUEST['Stu_Bio_HeightName'];
		$Stu_Bio_HeigthID=$_REQUEST['Stu_Bio_HeigthID'];
		$ColumnName='Stu_Bio_HeigthID';
		if($_REQUEST['Stu_Bio_HeigthID']!="")
		{
			$array=array(
					'Stu_Bio_HeightName'=>$Stu_Bio_HeightName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Bio_HeigthID);	
		}else
		{
			foreach($Stu_Bio_HeightName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Bio_HeightName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_biometric_height','Stu_Bio_HeigthID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Height_<?php echo $Gender['Stu_Bio_HeigthID']; ?>">
                <td><?php echo $Gender['Stu_Bio_HeigthID']; ?></td>
                <td><?php echo $Gender['Stu_Bio_HeightName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_height/<?php echo $Gender['Stu_Bio_HeigthID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_height('<?php echo $Gender['Stu_Bio_HeigthID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_height()
	{
		
		$tablenm='stu_biometric_height';
		$Column='Stu_Bio_HeigthID';
		$gender=$_REQUEST['Stu_Bio_HeigthID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	public function add_heightinche($heightinche=0){
		$data['Stu_Bio_HeightIncheID']=$heightinche;
		echo $this->load->view('admin/dropdown/step_four/add_heightinche', $data, true);
			
	}
	
	public function update_heightinche()
	{
		
		$tablename='stu_biometric_heightinche';
		$Stu_Bio_HeightIncheName=$_REQUEST['Stu_Bio_HeightIncheName'];
		$Stu_Bio_HeightIncheID=$_REQUEST['Stu_Bio_HeightIncheID'];
		$ColumnName='Stu_Bio_HeightIncheID';
		if($_REQUEST['Stu_Bio_HeightIncheID']!="")
		{
			$array=array(
					'Stu_Bio_HeightIncheName'=>$Stu_Bio_HeightIncheName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Bio_HeightIncheID);	
		}else
		{
			foreach($Stu_Bio_HeightIncheName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Bio_HeightIncheName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_biometric_heightinche','Stu_Bio_HeightIncheID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="HeightInche_<?php echo $Gender['Stu_Bio_HeightIncheID']; ?>">
                <td><?php echo $Gender['Stu_Bio_HeightIncheID']; ?></td>
                <td><?php echo $Gender['Stu_Bio_HeightIncheName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_heightinche/<?php echo $Gender['Stu_Bio_HeightIncheID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_heightinche('<?php echo $Gender['Stu_Bio_HeightIncheID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_heightinche()
	{
		
		$tablenm='stu_biometric_heightinche';
		$Column='Stu_Bio_HeightIncheID';
		$gender=$_REQUEST['Stu_Bio_HeightIncheID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	

	
	
	
	
	public function add_hand($hand=0){
		$data['Stu_Bio_HandWidthID']=$hand;
		echo $this->load->view('admin/dropdown/step_four/add_hand', $data, true);
			
	}
	
	public function update_hand()
	{
		
		$tablename='stu_biometric_handwidth';
		$Stu_Bio_HandWidthName=$_REQUEST['Stu_Bio_HandWidthName'];
		$Stu_Bio_HandWidthID=$_REQUEST['Stu_Bio_HandWidthID'];
		$ColumnName='Stu_Bio_HandWidthID';
		if($_REQUEST['Stu_Bio_HandWidthID']!="")
		{
			$array=array(
					'Stu_Bio_HandWidthName'=>$Stu_Bio_HandWidthName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Bio_HandWidthID);	
		}else
		{
			foreach($Stu_Bio_HandWidthName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Bio_HandWidthName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_biometric_handwidth','Stu_Bio_HandWidthID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Hand_<?php echo $Gender['Stu_Bio_HandWidthID']; ?>">
                <td><?php echo $Gender['Stu_Bio_HandWidthID']; ?></td>
                <td><?php echo $Gender['Stu_Bio_HandWidthName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_hand/<?php echo $Gender['Stu_Bio_HandWidthID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_hand('<?php echo $Gender['Stu_Bio_HandWidthID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_hand()
	{
		
		$tablenm='stu_biometric_handwidth';
		$Column='Stu_Bio_HandWidthID';
		$gender=$_REQUEST['Stu_Bio_HandWidthID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	
		
	public function add_handinche($handinche=0){
		$data['Stu_Bio_HandWidthIncheID']=$handinche;
		echo $this->load->view('admin/dropdown/step_four/add_handinche', $data, true);
			
	}
	
	public function update_handinche()
	{
		
		$tablename='stu_biometric_handwidthinche';
		$Stu_Bio_HandWidthIncheName=$_REQUEST['Stu_Bio_HandWidthIncheName'];
		$Stu_Bio_HandWidthIncheID=$_REQUEST['Stu_Bio_HandWidthIncheID'];
		$ColumnName='Stu_Bio_HandWidthIncheID';
		if($_REQUEST['Stu_Bio_HandWidthIncheID']!="")
		{
			$array=array(
					'Stu_Bio_HandWidthIncheName'=>$Stu_Bio_HandWidthIncheName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Bio_HandWidthIncheID);	
		}else
		{
			foreach($Stu_Bio_HandWidthIncheName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Bio_HandWidthIncheName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_biometric_handwidthinche','Stu_Bio_HandWidthIncheID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="HandWidthInche_<?php echo $Gender['Stu_Bio_HandWidthIncheID']; ?>">
                <td><?php echo $Gender['Stu_Bio_HandWidthIncheID']; ?></td>
                <td><?php echo $Gender['Stu_Bio_HandWidthIncheName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_handinche/<?php echo $Gender['Stu_Bio_HandWidthIncheID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_handinche('<?php echo $Gender['Stu_Bio_HandWidthIncheID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_handinche()
	{
		
		$tablenm='stu_biometric_handwidthinche';
		$Column='Stu_Bio_HandWidthIncheID';
		$gender=$_REQUEST['Stu_Bio_HandWidthIncheID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	
	
	
	
	public function add_domain_hand($domain_hand=0){
		$data['Stu_Bio_DomaintHandID']=$domain_hand;
		echo $this->load->view('admin/dropdown/step_four/add_domain_hand', $data, true);
			
	}
	
	public function update_domain_hand()
	{
		
		$tablename='stu_biometric_domainthand';
		$Stu_Bio_DomaintHandName=$_REQUEST['Stu_Bio_DomaintHandName'];
		$Stu_Bio_DomaintHandID=$_REQUEST['Stu_Bio_DomaintHandID'];
		$ColumnName='Stu_Bio_DomaintHandID';
		if($_REQUEST['Stu_Bio_DomaintHandID']!="")
		{
			$array=array(
					'Stu_Bio_DomaintHandName'=>$Stu_Bio_DomaintHandName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Bio_DomaintHandID);	
		}else
		{
			foreach($Stu_Bio_DomaintHandName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Bio_DomaintHandName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_biometric_domainthand','Stu_Bio_DomaintHandID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Domain_Hand_<?php echo $Gender['Stu_Bio_DomaintHandID']; ?>">
                <td><?php echo $Gender['Stu_Bio_DomaintHandID']; ?></td>
                <td><?php echo $Gender['Stu_Bio_DomaintHandName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_domain_hand/<?php echo $Gender['Stu_Bio_DomaintHandID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_domain_hand('<?php echo $Gender['Stu_Bio_DomaintHandID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_domain_hand()
	{
		
		$tablenm='stu_biometric_domainthand';
		$Column='Stu_Bio_DomaintHandID';
		$gender=$_REQUEST['Stu_Bio_DomaintHandID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	public function add_heightwith($heightwith=0){
		$data['Stu_Bio_HeightWithoutID']=$heightwith;
		echo $this->load->view('admin/dropdown/step_four/add_heightwith', $data, true);
			
	}
	
	public function update_heightwith()
	{
		
		$tablename='stu_biometric_heightwithout';
		$Stu_Bio_HeightWithoutName=$_REQUEST['Stu_Bio_HeightWithoutName'];
		$Stu_Bio_HeightWithoutID=$_REQUEST['Stu_Bio_HeightWithoutID'];
		$ColumnName='Stu_Bio_HeightWithoutID';
		if($_REQUEST['Stu_Bio_HeightWithoutID']!="")
		{
			$array=array(
					'Stu_Bio_HeightWithoutName'=>$Stu_Bio_HeightWithoutName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Bio_HeightWithoutID);	
		}else
		{
			foreach($Stu_Bio_HeightWithoutName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Bio_HeightWithoutName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_biometric_heightwithout','Stu_Bio_HeightWithoutID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="HeightWith_<?php echo $Gender['Stu_Bio_HeightWithoutID']; ?>">
                <td><?php echo $Gender['Stu_Bio_HeightWithoutID']; ?></td>
                <td><?php echo $Gender['Stu_Bio_HeightWithoutName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_heightwith/<?php echo $Gender['Stu_Bio_HeightWithoutID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_heightwith('<?php echo $Gender['Stu_Bio_HeightWithoutID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	
	
	public function delete_heightwith()
	{
		
		$tablenm='stu_biometric_heightwithout';
		$Column='Stu_Bio_HeightWithoutID';
		$gender=$_REQUEST['Stu_Bio_HeightWithoutID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	
	public function add_heightinchewith($heightinchewith=0){
		$data['Stu_Bio_HeightIncheWithoutID']=$heightinchewith;
		echo $this->load->view('admin/dropdown/step_four/add_heightinchewithout', $data, true);
			
	}
	
	public function update_heightinchewith()
	{
		
		$tablename='stu_biometric_heightwithoutinche';
		$Stu_Bio_HeightIncheWithoutName=$_REQUEST['Stu_Bio_HeightIncheWithoutName'];
		$Stu_Bio_HeightIncheWithoutID=$_REQUEST['Stu_Bio_HeightIncheWithoutID'];
		$ColumnName='Stu_Bio_HeightIncheWithoutID';
		if($_REQUEST['Stu_Bio_HeightIncheWithoutID']!="")
		{
			$array=array(
					'Stu_Bio_HeightIncheWithoutName'=>$Stu_Bio_HeightIncheWithoutName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Bio_HeightIncheWithoutID);	
		}else
		{
			foreach($Stu_Bio_HeightIncheWithoutName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Bio_HeightIncheWithoutName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_biometric_heightwithoutinche','Stu_Bio_HeightIncheWithoutID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="HeightIncheWith__List<?php echo $Gender['Stu_Bio_HeightIncheWithoutID']; ?>">
                <td><?php echo $Gender['Stu_Bio_HeightIncheWithoutID']; ?></td>
                <td><?php echo $Gender['Stu_Bio_HeightIncheWithoutName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_heightinchewith/<?php echo $Gender['Stu_Bio_HeightIncheWithoutID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_heightinchewith('<?php echo $Gender['Stu_Bio_HeightIncheWithoutID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_heightinchewith()
	{
		
		$tablenm='stu_biometric_heightwithoutinche';
		$Column='Stu_Bio_HeightIncheWithoutID';
		$gender=$_REQUEST['Stu_Bio_HeightIncheWithoutID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	
	
	public function add_wingspan($wingspan=0){
		$data['Stu_Bio_WingSpanID']=$wingspan;
		echo $this->load->view('admin/dropdown/step_four/add_wingspan', $data, true);
			
	}
	
	public function update_wingspan()
	{
		
		$tablename='stu_biometric_wingspan';
		$Stu_Bio_WingSpanName=$_REQUEST['Stu_Bio_WingSpanName'];
		$Stu_Bio_WingSpanID=$_REQUEST['Stu_Bio_WingSpanID'];
		$ColumnName='Stu_Bio_WingSpanID';
		if($_REQUEST['Stu_Bio_WingSpanID']!="")
		{
			$array=array(
					'Stu_Bio_WingSpanName'=>$Stu_Bio_WingSpanName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Bio_WingSpanID);	
		}else
		{
			foreach($Stu_Bio_WingSpanName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Bio_WingSpanName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_biometric_wingspan','Stu_Bio_WingSpanID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="WingSpan_<?php echo $Gender['Stu_Bio_WingSpanID']; ?>">
                <td><?php echo $Gender['Stu_Bio_WingSpanID']; ?></td>
                <td><?php echo $Gender['Stu_Bio_WingSpanName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_wingspan/<?php echo $Gender['Stu_Bio_WingSpanID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_wingspan('<?php echo $Gender['Stu_Bio_WingSpanID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_wingspan()
	{
		
		$tablenm='stu_biometric_wingspan';
		$Column='Stu_Bio_WingSpanID';
		$gender=$_REQUEST['Stu_Bio_WingSpanID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	
	
	public function add_wingspaninche($wingspaninche=0){
		$data['Stu_Bio_WingSpanIncheID']=$wingspaninche;
		echo $this->load->view('admin/dropdown/step_four/add_wingspaninche', $data, true);
			
	}
	
	public function update_wingspaninche()
	{
		
		$tablename='stu_biometric_wingspaninche';
		$Stu_Bio_WingSpanIncheName=$_REQUEST['Stu_Bio_WingSpanIncheName'];
		$Stu_Bio_WingSpanIncheID=$_REQUEST['Stu_Bio_WingSpanIncheID'];
		$ColumnName='Stu_Bio_WingSpanIncheID';
		if($_REQUEST['Stu_Bio_WingSpanIncheID']!="")
		{
			$array=array(
					'Stu_Bio_WingSpanIncheName'=>$Stu_Bio_WingSpanIncheName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Bio_WingSpanIncheID);	
		}else
		{
			foreach($Stu_Bio_WingSpanIncheName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Bio_WingSpanIncheName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_biometric_wingspaninche','Stu_Bio_WingSpanIncheID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="WingSpanInche_<?php echo $Gender['Stu_Bio_WingSpanIncheID']; ?>">
                <td><?php echo $Gender['Stu_Bio_WingSpanIncheID']; ?></td>
                <td><?php echo $Gender['Stu_Bio_WingSpanIncheName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_wingspaninche/<?php echo $Gender['Stu_Bio_WingSpanIncheID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_wingspaninche('<?php echo $Gender['Stu_Bio_WingSpanIncheID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_wingspaninche()
	{
		
		$tablenm='stu_biometric_wingspaninche';
		$Column='Stu_Bio_WingSpanIncheID';
		$gender=$_REQUEST['Stu_Bio_WingSpanIncheID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	
	
	
	public function add_handlength($handlength=0){
		$data['Stu_Bio_HandLengthID']=$handlength;
		echo $this->load->view('admin/dropdown/step_four/add_handlength', $data, true);
			
	}
	
	public function update_handlength()
	{
		
		$tablename='stu_biometric_handlength';
		$Stu_Bio_HandLengthName=$_REQUEST['Stu_Bio_HandLengthName'];
		$Stu_Bio_HandLengthID=$_REQUEST['Stu_Bio_HandLengthID'];
		$ColumnName='Stu_Bio_HandLengthID';
		if($_REQUEST['Stu_Bio_HandLengthID']!="")
		{
			$array=array(
					'Stu_Bio_HandLengthName'=>$Stu_Bio_HandLengthName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Bio_HandLengthID);	
		}else
		{
			foreach($Stu_Bio_HandLengthName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Bio_HandLengthName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_biometric_handlength','Stu_Bio_HandLengthID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="HandLength_<?php echo $Gender['Stu_Bio_HandLengthID']; ?>">
                <td><?php echo $Gender['Stu_Bio_HandLengthID']; ?></td>
                <td><?php echo $Gender['Stu_Bio_HandLengthName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_handlength/<?php echo $Gender['Stu_Bio_HandLengthID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_handlength('<?php echo $Gender['Stu_Bio_HandLengthID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_handlength()
	{
		
		$tablenm='stu_biometric_handlength';
		$Column='Stu_Bio_HandLengthID';
		$gender=$_REQUEST['Stu_Bio_HandLengthID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	
	
	
	public function add_handlengthinche($handlengthinche=0){
		$data['Stu_Bio_HandLengthIncheID']=$handlengthinche;
		echo $this->load->view('admin/dropdown/step_four/add_handlengthinche', $data, true);
			
	}
	
	public function update_handlengthinche()
	{
		
		$tablename='stu_biometric_handlengthinche';
		$Stu_Bio_HandLengthIncheName=$_REQUEST['Stu_Bio_HandLengthIncheName'];
		$Stu_Bio_HandLengthIncheID=$_REQUEST['Stu_Bio_HandLengthIncheID'];
		$ColumnName='Stu_Bio_HandLengthIncheID';
		if($_REQUEST['Stu_Bio_HandLengthIncheID']!="")
		{
			$array=array(
					'Stu_Bio_HandLengthIncheName'=>$Stu_Bio_HandLengthIncheName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Bio_HandLengthIncheID);	
		}else
		{
			foreach($Stu_Bio_HandLengthIncheName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Bio_HandLengthIncheName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_biometric_handlengthinche','Stu_Bio_HandLengthIncheID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="HandLengthInche_<?php echo $Gender['Stu_Bio_HandLengthIncheID']; ?>">
                <td><?php echo $Gender['Stu_Bio_HandLengthIncheID']; ?></td>
                <td><?php echo $Gender['Stu_Bio_HandLengthIncheName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_handlengthinche/<?php echo $Gender['Stu_Bio_HandLengthIncheID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_handlengthinche('<?php echo $Gender['Stu_Bio_HandLengthIncheID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_handlengthinche()
	{
		
		$tablenm='stu_biometric_handlengthinche';
		$Column='Stu_Bio_HandLengthIncheID';
		$gender=$_REQUEST['Stu_Bio_HandLengthIncheID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	
	
	
	public function add_domaintleg($domaintleg=0){
		$data['Stu_Bio_DomaintLegID']=$domaintleg;
		echo $this->load->view('admin/dropdown/step_four/add_domaintleg', $data, true);
			
	}
	
	public function update_domaintleg()
	{
		
		$tablename='stu_biometric_domainleg';
		$Stu_Bio_DomaintLegName=$_REQUEST['Stu_Bio_DomaintLegName'];
		$Stu_Bio_DomaintLegID=$_REQUEST['Stu_Bio_DomaintLegID'];
		$ColumnName='Stu_Bio_DomaintLegID';
		if($_REQUEST['Stu_Bio_DomaintLegID']!="")
		{
			$array=array(
					'Stu_Bio_DomaintLegName'=>$Stu_Bio_DomaintLegName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Bio_DomaintLegID);	
		}else
		{
			foreach($Stu_Bio_DomaintLegName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Bio_DomaintLegName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_biometric_domainleg','Stu_Bio_DomaintLegID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="DomaintLeg_<?php echo $Gender['Stu_Bio_DomaintLegID']; ?>">
                <td><?php echo $Gender['Stu_Bio_DomaintLegID']; ?></td>
                <td><?php echo $Gender['Stu_Bio_DomaintLegName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_domaintleg/<?php echo $Gender['Stu_Bio_DomaintLegID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_domaintleg('<?php echo $Gender['Stu_Bio_DomaintLegID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_domaintleg()
	{
		
		$tablenm='stu_biometric_domainleg';
		$Column='Stu_Bio_DomaintLegID';
		$gender=$_REQUEST['Stu_Bio_DomaintLegID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	public function add_vertical($vertical=0){
		$data['Stu_Stre_VerticalID']=$vertical;
		echo $this->load->view('admin/dropdown/step_four/add_vertical', $data, true);
			
	}
	
	public function update_vertical()
	{
		
		$tablename='stu_strength_vertical';
		$Stu_Stre_VerticalName=$_REQUEST['Stu_Stre_VerticalName'];
		$Stu_Stre_VerticalID=$_REQUEST['Stu_Stre_VerticalID'];
		$ColumnName='Stu_Stre_VerticalID';
		if($_REQUEST['Stu_Stre_VerticalID']!="")
		{
			$array=array(
					'Stu_Stre_VerticalName'=>$Stu_Stre_VerticalName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Stre_VerticalID);	
		}else
		{
			foreach($Stu_Stre_VerticalName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Stre_VerticalName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_strength_vertical','Stu_Stre_VerticalID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Vertical_<?php echo $Gender['Stu_Stre_VerticalID']; ?>">
                <td><?php echo $Gender['Stu_Stre_VerticalID']; ?></td>
                <td><?php echo $Gender['Stu_Stre_VerticalName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_vertical/<?php echo $Gender['Stu_Stre_VerticalID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_vertical('<?php echo $Gender['Stu_Stre_VerticalID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_vertical()
	{
		
		$tablenm='stu_strength_vertical';
		$Column='Stu_Stre_VerticalID';
		$gender=$_REQUEST['Stu_Stre_VerticalID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	public function add_powerclean($powerclean=0){
		$data['Stu_Stre_PowerID']=$powerclean;
		echo $this->load->view('admin/dropdown/step_four/add_powerclean', $data, true);
			
	}
	
	public function update_powerclean()
	{
		
		$tablename='stu_strength_powerclean';
		$Stu_Stre_PowerName=$_REQUEST['Stu_Stre_PowerName'];
		$Stu_Stre_PowerID=$_REQUEST['Stu_Stre_PowerID'];
		$ColumnName='Stu_Stre_PowerID';
		if($_REQUEST['Stu_Stre_PowerID']!="")
		{
			$array=array(
					'Stu_Stre_PowerName'=>$Stu_Stre_PowerName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Stre_PowerID);	
		}else
		{
			foreach($Stu_Stre_PowerName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Stre_PowerName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_strength_powerclean','Stu_Stre_PowerID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="PowerClean_<?php echo $Gender['Stu_Stre_PowerID']; ?>">
                <td><?php echo $Gender['Stu_Stre_PowerID']; ?></td>
                <td><?php echo $Gender['Stu_Stre_PowerName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_powerclean/<?php echo $Gender['Stu_Stre_PowerID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_powerclean('<?php echo $Gender['Stu_Stre_PowerID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_powerclean()
	{
		
		$tablenm='stu_strength_powerclean';
		$Column='Stu_Stre_PowerID';
		$gender=$_REQUEST['Stu_Stre_PowerID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	public function add_stand($stand=0){
		$data['Stu_Stre_StandID']=$stand;
		echo $this->load->view('admin/dropdown/step_four/add_stand', $data, true);
			
	}
	
	public function update_stand()
	{
		
		$tablename='stu_strength_stand';
		$Stu_Stre_StandName=$_REQUEST['Stu_Stre_StandName'];
		$Stu_Stre_StandID=$_REQUEST['Stu_Stre_StandID'];
		$ColumnName='Stu_Stre_StandID';
		if($_REQUEST['Stu_Stre_StandID']!="")
		{
			$array=array(
					'Stu_Stre_StandName'=>$Stu_Stre_StandName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Stre_StandID);	
		}else
		{
			foreach($Stu_Stre_StandName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Stre_StandName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_strength_stand','Stu_Stre_StandID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Stand_<?php echo $Gender['Stu_Stre_StandID']; ?>">
                <td><?php echo $Gender['Stu_Stre_StandID']; ?></td>
                <td><?php echo $Gender['Stu_Stre_StandName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_stand/<?php echo $Gender['Stu_Stre_StandID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_stand('<?php echo $Gender['Stu_Stre_StandID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_stand()
	{
		
		$tablenm='stu_strength_stand';
		$Column='Stu_Stre_StandID';
		$gender=$_REQUEST['Stu_Stre_StandID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	public function add_bench($bench=0){
		$data['Stu_Stre_BenchID']=$bench;
		echo $this->load->view('admin/dropdown/step_four/add_bench', $data, true);
			
	}
	
	public function update_bench()
	{
		
		$tablename='stu_strength_bench';
		$Stu_Stre_BenchName=$_REQUEST['Stu_Stre_BenchName'];
		$Stu_Stre_BenchID=$_REQUEST['Stu_Stre_BenchID'];
		$ColumnName='Stu_Stre_BenchID';
		if($_REQUEST['Stu_Stre_BenchID']!="")
		{
			$array=array(
					'Stu_Stre_BenchName'=>$Stu_Stre_BenchName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Stre_BenchID);	
		}else
		{
			foreach($Stu_Stre_BenchName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Stre_BenchName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_strength_bench','Stu_Stre_BenchID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Bench_<?php echo $Gender['Stu_Stre_BenchID']; ?>">
                <td><?php echo $Gender['Stu_Stre_BenchID']; ?></td>
                <td><?php echo $Gender['Stu_Stre_BenchName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_bench/<?php echo $Gender['Stu_Stre_BenchID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_bench('<?php echo $Gender['Stu_Stre_BenchID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_bench()
	{
		
		$tablenm='stu_strength_bench';
		$Column='Stu_Stre_BenchID';
		$gender=$_REQUEST['Stu_Stre_BenchID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	public function add_squat($squat=0){
		$data['Stu_Stre_SquatID']=$squat;
		echo $this->load->view('admin/dropdown/step_four/add_squat', $data, true);
			
	}
	
	public function update_squat()
	{
		
		$tablename='stu_strength_squat';
		$Stu_Stre_SquatName=$_REQUEST['Stu_Stre_SquatName'];
		$Stu_Stre_SquatID=$_REQUEST['Stu_Stre_SquatID'];
		$ColumnName='Stu_Stre_SquatID';
		if($_REQUEST['Stu_Stre_SquatID']!="")
		{
			$array=array(
					'Stu_Stre_SquatName'=>$Stu_Stre_SquatName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Stre_SquatID);	
		}else
		{
			foreach($Stu_Stre_SquatName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Stre_SquatName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_strength_squat','Stu_Stre_SquatID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Squat_<?php echo $Gender['Stu_Stre_SquatID']; ?>">
                <td><?php echo $Gender['Stu_Stre_SquatID']; ?></td>
                <td><?php echo $Gender['Stu_Stre_SquatName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_squat/<?php echo $Gender['Stu_Stre_SquatID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_squat('<?php echo $Gender['Stu_Stre_SquatID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_squat()
	{
		
		$tablenm='stu_strength_squat';
		$Column='Stu_Stre_SquatID';
		$gender=$_REQUEST['Stu_Stre_SquatID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
		
	public function add_mile($mile=0){
		$data['Stu_Speed_MileID']=$mile;
		echo $this->load->view('admin/dropdown/step_four/add_mile', $data, true);
			
	}
	
	public function update_mile()
	{
		
		$tablename='stu_speed_mile';
		$Stu_Speed_MileName=$_REQUEST['Stu_Speed_MileName'];
		$Stu_Speed_MileID=$_REQUEST['Stu_Speed_MileID'];
		$ColumnName='Stu_Speed_MileID';
		if($_REQUEST['Stu_Speed_MileID']!="")
		{
			$array=array(
					'Stu_Speed_MileName'=>$Stu_Speed_MileName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Speed_MileID);	
		}else
		{
			foreach($Stu_Speed_MileName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Speed_MileName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_speed_mile','Stu_Speed_MileID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Mile_<?php echo $Gender['Stu_Speed_MileID']; ?>">
                <td><?php echo $Gender['Stu_Speed_MileID']; ?></td>
                <td><?php echo $Gender['Stu_Speed_MileName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_mile/<?php echo $Gender['Stu_Speed_MileID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_mile('<?php echo $Gender['Stu_Speed_MileID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_mile()
	{
		
		$tablenm='stu_speed_mile';
		$Column='Stu_Speed_MileID';
		$gender=$_REQUEST['Stu_Speed_MileID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	public function add_yard($yard=0){
		$data['Stu_Speed_YardID']=$yard;
		echo $this->load->view('admin/dropdown/step_four/add_yard', $data, true);
			
	}
	
	public function update_yard()
	{
		
		$tablename='stu_speed_yard';
		$Stu_Speed_YardName=$_REQUEST['Stu_Speed_YardName'];
		$Stu_Speed_YardID=$_REQUEST['Stu_Speed_YardID'];
		$ColumnName='Stu_Speed_YardID';
		if($_REQUEST['Stu_Speed_YardID']!="")
		{
			$array=array(
					'Stu_Speed_YardName'=>$Stu_Speed_YardName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Speed_YardID);	
		}else
		{
			foreach($Stu_Speed_YardName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Speed_YardName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_speed_yard','Stu_Speed_YardID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Yard_<?php echo $Gender['Stu_Speed_YardID']; ?>">
                <td><?php echo $Gender['Stu_Speed_YardID']; ?></td>
                <td><?php echo $Gender['Stu_Speed_YardName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_yard/<?php echo $Gender['Stu_Speed_YardID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_yard('<?php echo $Gender['Stu_Speed_YardID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_yard()
	{
		
		$tablenm='stu_speed_yard';
		$Column='Stu_Speed_YardID';
		$gender=$_REQUEST['Stu_Speed_YardID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	public function add_yarddash($yarddash=0){
		$data['Stu_Speed_YardDashID']=$yarddash;
		echo $this->load->view('admin/dropdown/step_four/add_yarddash', $data, true);
			
	}
	
	public function update_yarddash()
	{
		
		$tablename='stu_speed_yarddash';
		$Stu_Speed_YardDashName=$_REQUEST['Stu_Speed_YardDashName'];
		$Stu_Speed_YardDashID=$_REQUEST['Stu_Speed_YardDashID'];
		$ColumnName='Stu_Speed_YardDashID';
		if($_REQUEST['Stu_Speed_YardDashID']!="")
		{
			$array=array(
					'Stu_Speed_YardDashName'=>$Stu_Speed_YardDashName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Speed_YardDashID);	
		}else
		{
			foreach($Stu_Speed_YardDashName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Speed_YardDashName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_speed_yarddash','Stu_Speed_YardDashID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="YardDash_<?php echo $Gender['Stu_Speed_YardDashID']; ?>">
                <td><?php echo $Gender['Stu_Speed_YardDashID']; ?></td>
                <td><?php echo $Gender['Stu_Speed_YardDashName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_yarddash/<?php echo $Gender['Stu_Speed_YardDashID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_yarddash('<?php echo $Gender['Stu_Speed_YardDashID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_yarddash()
	{
		
		$tablenm='stu_speed_yarddash';
		$Column='Stu_Speed_YardDashID';
		$gender=$_REQUEST['Stu_Speed_YardDashID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	public function add_push($push=0){
		$data['Stu_Endu_PushID']=$push;
		echo $this->load->view('admin/dropdown/step_four/add_push', $data, true);
			
	}
	
	public function update_push()
	{
		
		$tablename='stu_endurance_push';
		$Stu_Endu_PushName=$_REQUEST['Stu_Endu_PushName'];
		$Stu_Endu_PushID=$_REQUEST['Stu_Endu_PushID'];
		$ColumnName='Stu_Endu_PushID';
		if($_REQUEST['Stu_Endu_PushID']!="")
		{
			$array=array(
					'Stu_Endu_PushName'=>$Stu_Endu_PushName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Endu_PushID);	
		}else
		{
			foreach($Stu_Endu_PushName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Endu_PushName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_endurance_push','Stu_Endu_PushID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Push_<?php echo $Gender['Stu_Endu_PushID']; ?>">
                <td><?php echo $Gender['Stu_Endu_PushID']; ?></td>
                <td><?php echo $Gender['Stu_Endu_PushName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_push/<?php echo $Gender['Stu_Endu_PushID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_push('<?php echo $Gender['Stu_Endu_PushID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_push()
	{
		
		$tablenm='stu_endurance_push';
		$Column='Stu_Endu_PushID';
		$gender=$_REQUEST['Stu_Endu_PushID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	public function add_pull($pull=0){
		$data['Stu_Endu_PullID']=$pull;
		echo $this->load->view('admin/dropdown/step_four/add_pull', $data, true);
			
	}
	
	public function update_pull()
	{
		
		$tablename='stu_endurance_pull';
		$Stu_Endu_PullName=$_REQUEST['Stu_Endu_PullName'];
		$Stu_Endu_PullID=$_REQUEST['Stu_Endu_PullID'];
		$ColumnName='Stu_Endu_PullID';
		if($_REQUEST['Stu_Endu_PullID']!="")
		{
			$array=array(
					'Stu_Endu_PullName'=>$Stu_Endu_PullName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Endu_PullID);	
		}else
		{
			foreach($Stu_Endu_PullName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Endu_PullName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_endurance_pull','Stu_Endu_PullID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Pull_<?php echo $Gender['Stu_Endu_PullID']; ?>">
                <td><?php echo $Gender['Stu_Endu_PullID']; ?></td>
                <td><?php echo $Gender['Stu_Endu_PullName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_pull/<?php echo $Gender['Stu_Endu_PullID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_pull('<?php echo $Gender['Stu_Endu_PullID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_pull()
	{
		
		$tablenm='stu_endurance_pull';
		$Column='Stu_Endu_PullID';
		$gender=$_REQUEST['Stu_Endu_PullID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	public function add_sit($sit=0){
		$data['Stu_Endu_SitID']=$sit;
		echo $this->load->view('admin/dropdown/step_four/add_sit', $data, true);
			
	}
	
	public function update_sit()
	{
		
		$tablename='stu_endurance_sit';
		$Stu_Endu_SitName=$_REQUEST['Stu_Endu_SitName'];
		$Stu_Endu_SitID=$_REQUEST['Stu_Endu_SitID'];
		$ColumnName='Stu_Endu_SitID';
		if($_REQUEST['Stu_Endu_SitID']!="")
		{
			$array=array(
					'Stu_Endu_SitName'=>$Stu_Endu_SitName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Endu_SitID);	
		}else
		{
			foreach($Stu_Endu_SitName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Endu_SitName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_endurance_sit','Stu_Endu_SitID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Sit_<?php echo $Gender['Stu_Endu_SitID']; ?>">
                <td><?php echo $Gender['Stu_Endu_SitID']; ?></td>
                <td><?php echo $Gender['Stu_Endu_SitName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_sit/<?php echo $Gender['Stu_Endu_SitID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_sit('<?php echo $Gender['Stu_Endu_SitID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_sit()
	{
		
		$tablenm='stu_endurance_sit';
		$Column='Stu_Endu_SitID';
		$gender=$_REQUEST['Stu_Endu_SitID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	public function add_yarddashinche($yarddashinche=0){
		$data['Stu_Speed_YardDashIncheID']=$yarddashinche;
		echo $this->load->view('admin/dropdown/step_four/add_yarddashinche', $data, true);
			
	}
	
	public function update_yarddashinche()
	{
		
		$tablename='stu_speed_yarddashinche';
		$Stu_Speed_YardDashIncheName=$_REQUEST['Stu_Speed_YardDashIncheName'];
		$Stu_Speed_YardDashIncheID=$_REQUEST['Stu_Speed_YardDashIncheID'];
		$ColumnName='Stu_Speed_YardDashIncheID';
		if($_REQUEST['Stu_Speed_YardDashIncheID']!="")
		{
			$array=array(
					'Stu_Speed_YardDashIncheName'=>$Stu_Speed_YardDashIncheName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Speed_YardDashIncheID);	
		}else
		{
			foreach($Stu_Speed_YardDashIncheName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Speed_YardDashIncheName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_speed_yarddashinche','Stu_Speed_YardDashIncheID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="YardDashInche_<?php echo $Gender['Stu_Speed_YardDashIncheID']; ?>">
                <td><?php echo $Gender['Stu_Speed_YardDashIncheID']; ?></td>
                <td><?php echo $Gender['Stu_Speed_YardDashIncheName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_yarddashinche/<?php echo $Gender['Stu_Speed_YardDashIncheID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_yarddashinche('<?php echo $Gender['Stu_Speed_YardDashIncheID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_yarddashinche()
	{
		
		$tablenm='stu_speed_yarddashinche';
		$Column='Stu_Speed_YardDashIncheID';
		$gender=$_REQUEST['Stu_Speed_YardDashIncheID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	public function add_yardinche($yardinche=0){
		$data['Stu_Speed_YardIncheID']=$yardinche;
		echo $this->load->view('admin/dropdown/step_four/add_yardinche', $data, true);
			
	}
	
	public function update_yardinche()
	{
		
		$tablename='stu_speed_yardinche';
		$Stu_Speed_YardIncheName=$_REQUEST['Stu_Speed_YardIncheName'];
		$Stu_Speed_YardIncheID=$_REQUEST['Stu_Speed_YardIncheID'];
		$ColumnName='Stu_Speed_YardIncheID';
		if($_REQUEST['Stu_Speed_YardIncheID']!="")
		{
			$array=array(
					'Stu_Speed_YardIncheName'=>$Stu_Speed_YardIncheName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Speed_YardIncheID);	
		}else
		{
			foreach($Stu_Speed_YardIncheName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Speed_YardIncheName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_speed_yardinche','Stu_Speed_YardIncheID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="YardInche_<?php echo $Gender['Stu_Speed_YardIncheID']; ?>">
                <td><?php echo $Gender['Stu_Speed_YardIncheID']; ?></td>
                <td><?php echo $Gender['Stu_Speed_YardIncheName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_yardinche/<?php echo $Gender['Stu_Speed_YardIncheID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_yardinche('<?php echo $Gender['Stu_Speed_YardIncheID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_yardinche()
	{
		
		$tablenm='stu_speed_yardinche';
		$Column='Stu_Speed_YardIncheID';
		$gender=$_REQUEST['Stu_Speed_YardIncheID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
			
	public function add_mileinche($mileinche=0){
		$data['Stu_Speed_MileIncheID']=$mileinche;
		echo $this->load->view('admin/dropdown/step_four/add_mileinche', $data, true);
			
	}
	
	public function update_mileinche()
	{
		
		$tablename='stu_speed_mileinche';
		$Stu_Speed_MileIncheName=$_REQUEST['Stu_Speed_MileIncheName'];
		$Stu_Speed_MileIncheID=$_REQUEST['Stu_Speed_MileIncheID'];
		$ColumnName='Stu_Speed_MileIncheID';
		if($_REQUEST['Stu_Speed_MileIncheID']!="")
		{
			$array=array(
					'Stu_Speed_MileIncheName'=>$Stu_Speed_MileIncheName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Speed_MileIncheID);	
		}else
		{
			foreach($Stu_Speed_MileIncheName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Speed_MileIncheName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_speed_mileinche','Stu_Speed_MileIncheID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="MileInche_<?php echo $Gender['Stu_Speed_MileIncheID']; ?>">
                <td><?php echo $Gender['Stu_Speed_MileIncheID']; ?></td>
                <td><?php echo $Gender['Stu_Speed_MileIncheName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_mileinche/<?php echo $Gender['Stu_Speed_MileIncheID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_mileinche('<?php echo $Gender['Stu_Speed_MileIncheID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_mileinche()
	{
		
		$tablenm='stu_speed_mileinche';
		$Column='Stu_Speed_MileIncheID';
		$gender=$_REQUEST['Stu_Speed_MileIncheID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}	
	
		public function add_verticalinche($verticalinche=0){
		$data['Stu_Stre_VerticalIncheID']=$verticalinche;
		echo $this->load->view('admin/dropdown/step_four/add_verticalinche', $data, true);
			
	}
	
	public function update_verticalinche()
	{
		
		$tablename='stu_strength_verticalinche';
		$Stu_Stre_VerticalIncheName=$_REQUEST['Stu_Stre_VerticalIncheName'];
		$Stu_Stre_VerticalIncheID=$_REQUEST['Stu_Stre_VerticalIncheID'];
		$ColumnName='Stu_Stre_VerticalIncheID';
		if($_REQUEST['Stu_Stre_VerticalIncheID']!="")
		{
			$array=array(
					'Stu_Stre_VerticalIncheName'=>$Stu_Stre_VerticalIncheName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Stre_VerticalIncheID);	
		}else
		{
			foreach($Stu_Stre_VerticalIncheName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Stre_VerticalIncheName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_strength_verticalinche','Stu_Stre_VerticalIncheID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="VerticalInche_<?php echo $Gender['Stu_Stre_VerticalIncheID']; ?>">
                <td><?php echo $Gender['Stu_Stre_VerticalIncheID']; ?></td>
                <td><?php echo $Gender['Stu_Stre_VerticalIncheName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_verticalinche/<?php echo $Gender['Stu_Stre_VerticalIncheID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_verticalinche('<?php echo $Gender['Stu_Stre_VerticalIncheID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_verticalinche()
	{
		
		$tablenm='stu_strength_verticalinche';
		$Column='Stu_Stre_VerticalIncheID';
		$gender=$_REQUEST['Stu_Stre_VerticalIncheID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	public function add_standinche($standinche=0){
		$data['Stu_Stre_StandIncheID']=$standinche;
		echo $this->load->view('admin/dropdown/step_four/add_standinche', $data, true);
			
	}
	
	public function update_standinche()
	{
		
		$tablename='stu_strength_standinche';
		$Stu_Stre_StandIncheName=$_REQUEST['Stu_Stre_StandIncheName'];
		$Stu_Stre_StandIncheID=$_REQUEST['Stu_Stre_StandIncheID'];
		$ColumnName='Stu_Stre_StandIncheID';
		if($_REQUEST['Stu_Stre_StandIncheID']!="")
		{
			$array=array(
					'Stu_Stre_StandIncheName'=>$Stu_Stre_StandIncheName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Stre_StandIncheID);	
		}else
		{
			foreach($Stu_Stre_StandIncheName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Stre_StandIncheName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_strength_standinche','Stu_Stre_StandIncheID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="StandInche_<?php echo $Gender['Stu_Stre_StandIncheID']; ?>">
                <td><?php echo $Gender['Stu_Stre_StandIncheID']; ?></td>
                <td><?php echo $Gender['Stu_Stre_StandIncheName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_standinche/<?php echo $Gender['Stu_Stre_StandIncheID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_standinche('<?php echo $Gender['Stu_Stre_StandIncheID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_standinche()
	{ 
		
		$tablenm='stu_strength_standinche';
		$Column='Stu_Stre_StandIncheID';
		$gender=$_REQUEST['Stu_Stre_StandIncheID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
		public function add_fle_sit($fle_sit=0){
		$data['Stu_Fle_SitID']=$fle_sit;
		echo $this->load->view('admin/dropdown/step_four/add_fle_sit', $data, true);
			
	}
	
	public function update_fle_sit()
	{
		
		$tablename='stu_flexibility_sit';
		$Stu_Fle_SitName=$_REQUEST['Stu_Fle_SitName'];
		$Stu_Fle_SitID=$_REQUEST['Stu_Fle_SitID'];
		$ColumnName='Stu_Fle_SitID';
		if($_REQUEST['Stu_Fle_SitID']!="")
		{
			$array=array(
					'Stu_Fle_SitName'=>$Stu_Fle_SitName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Fle_SitID);	
		}else
		{
			foreach($Stu_Fle_SitName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Fle_SitName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_flexibility_sit','Stu_Fle_SitID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Fle_Sit_<?php echo $Gender['Stu_Fle_SitID']; ?>">
                <td><?php echo $Gender['Stu_Fle_SitID']; ?></td>
                <td><?php echo $Gender['Stu_Fle_SitName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_fle_sit/<?php echo $Gender['Stu_Fle_SitID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_fle_sit('<?php echo $Gender['Stu_Fle_SitID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_fle_sit()
	{
		
		$tablenm='stu_flexibility_sit';
		$Column='Stu_Fle_SitID';
		$gender=$_REQUEST['Stu_Fle_SitID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	
	
	

	public function add_reach($reach=0){
		$data['Stu_Fle_ReachID']=$reach;
		echo $this->load->view('admin/dropdown/step_four/add_reach', $data, true);
			
		}
	
	public function update_reach()
	{
		
		$tablename='stu_flexibility_reach';
		$Stu_Fle_ReachName=$_REQUEST['Stu_Fle_ReachName'];
		$Stu_Fle_ReachID=$_REQUEST['Stu_Fle_ReachID'];
		$ColumnName='Stu_Fle_ReachID';
		if($_REQUEST['Stu_Fle_ReachID']!="")
		{
			$array=array(
					'Stu_Fle_ReachName'=>$Stu_Fle_ReachName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Fle_ReachID);	
		}else
		{
			foreach($Stu_Fle_ReachName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Fle_ReachName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_flexibility_reach','Stu_Fle_ReachID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Reach_<?php echo $Gender['Stu_Fle_ReachID']; ?>">
                <td><?php echo $Gender['Stu_Fle_ReachID']; ?></td>
                <td><?php echo $Gender['Stu_Fle_ReachName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_reach/<?php echo $Gender['Stu_Fle_ReachID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_reach('<?php echo $Gender['Stu_Fle_ReachID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	 
	public function delete_reach()
	{
		
		$tablenm='stu_flexibility_reach';
		$Column='Stu_Fle_ReachID';
		$gender=$_REQUEST['Stu_Fle_ReachID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	
	
		public function add_fle_back($fle_back=0){
		$data['Stu_Fle_BackID']=$fle_back;
		echo $this->load->view('admin/dropdown/step_four/add_fle_back', $data, true);
			
	}
	
	public function update_fle_back()
	{
		
		$tablename='stu_flexibility_back';
		$Stu_Fle_BackName=$_REQUEST['Stu_Fle_BackName'];
		$Stu_Fle_BackID=$_REQUEST['Stu_Fle_BackID'];
		$ColumnName='Stu_Fle_BackID';
		if($_REQUEST['Stu_Fle_BackID']!="")
		{
			$array=array(
					'Stu_Fle_BackName'=>$Stu_Fle_BackName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Fle_BackID);	
		}else
		{
			foreach($Stu_Fle_BackName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Fle_BackName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_flexibility_back','Stu_Fle_BackID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Fle_Back_<?php echo $Gender['Stu_Fle_BackID']; ?>">
                <td><?php echo $Gender['Stu_Fle_BackID']; ?></td>
                <td><?php echo $Gender['Stu_Fle_BackName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_fle_back/<?php echo $Gender['Stu_Fle_BackID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_fle_back('<?php echo $Gender['Stu_Fle_BackID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_fle_back()
	{
		
		$tablenm='stu_flexibility_back';
		$Column='Stu_Fle_BackID';
		$gender=$_REQUEST['Stu_Fle_BackID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
		public function add_fle_scartch($fle_scartch=0){
		$data['Stu_Fle_ScartchID']=$fle_scartch;
		echo $this->load->view('admin/dropdown/step_four/add_fle_scartch', $data, true);
			
	}
	
	public function update_fle_scartch()
	{
		
		$tablename='stu_flexibility_scartch';
		$Stu_Fle_ScartchName=$_REQUEST['Stu_Fle_ScartchName'];
		$Stu_Fle_ScartchID=$_REQUEST['Stu_Fle_ScartchID'];
		$ColumnName='Stu_Fle_ScartchID';
		if($_REQUEST['Stu_Fle_ScartchID']!="")
		{
			$array=array(
					'Stu_Fle_ScartchName'=>$Stu_Fle_ScartchName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Fle_ScartchID);	
		}else
		{
			foreach($Stu_Fle_ScartchName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Fle_ScartchName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_flexibility_scartch','Stu_Fle_ScartchID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Fle_Scartch_<?php echo $Gender['Stu_Fle_ScartchID']; ?>">
                <td><?php echo $Gender['Stu_Fle_ScartchID']; ?></td>
                <td><?php echo $Gender['Stu_Fle_ScartchName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_fle_scartch/<?php echo $Gender['Stu_Fle_ScartchID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_fle_scartch('<?php echo $Gender['Stu_Fle_ScartchID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_fle_scartch()
	{
		
		$tablenm='stu_flexibility_scartch';
		$Column='Stu_Fle_ScartchID';
		$gender=$_REQUEST['Stu_Fle_ScartchID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
		public function add_body_mass($body_mass=0){
		$data['Stu_Body_MassID']=$body_mass;
		echo $this->load->view('admin/dropdown/step_four/add_body_mass', $data, true);
			
	}
	
	public function update_body_mass()
	{
		 
		$tablename='stu_body_mass';
		$Stu_Body_MassName=$_REQUEST['Stu_Body_MassName'];
		$Stu_Body_MassID=$_REQUEST['Stu_Body_MassID'];
		$ColumnName='Stu_Body_MassID';
		if($_REQUEST['Stu_Body_MassID']!="")
		{
			$array=array(
					'Stu_Body_MassName'=>$Stu_Body_MassName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_Body_MassID);	
		}else
		{
			foreach($Stu_Body_MassName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_Body_MassName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_body_mass','Stu_Body_MassID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Body_Mass_<?php echo $Gender['Stu_Body_MassID']; ?>">
                <td><?php echo $Gender['Stu_Body_MassID']; ?></td>
                <td><?php echo $Gender['Stu_Body_MassName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_body_mass/<?php echo $Gender['Stu_Body_MassID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_body_mass('<?php echo $Gender['Stu_Body_MassID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_body_mass()
	{
		 
		$tablenm='stu_body_mass';
		$Column='Stu_Body_MassID';
		$gender=$_REQUEST['Stu_Body_MassID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		    
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}





