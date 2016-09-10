<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_athlete extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('admin/dropdown/student_model');		
	}

	public function index(){	
		$data['country_list'] = "";
        $data['MainContent'] = $this->load->view('admin/dropdown/student_athlete', $data, true);		
        $this->load->view('admin/template', $data);	
	}
	
	public function add_gender($gender=0){
		$data['GenderID']=$gender;
		echo $this->load->view('admin/dropdown/step_one/add_gender', $data, true);
			
	}
	
	public function update_gender()
	{
		
		$tablename='stu_athlete_gender';
		$Gender=$_REQUEST['Gender'];
		$GenderID=$_REQUEST['GenderID'];
		$ColumnName='GenderID';
		if($_REQUEST['GenderID']!="")
		{
			$array=array(
					'Gender'=>$Gender,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$GenderID);	
		}else
		{
			foreach($Gender as $Data)
			{
				if($Data!=""){
					$array=array(
						'Gender'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_athlete_gender','GenderID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Gender_<?php echo $Gender['GenderID']; ?>">
                <td><?php echo $Gender['GenderID']; ?></td>
                <td><?php echo $Gender['Gender']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete/add_gender/<?php echo $Gender['GenderID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_gender('<?php echo $Gender['GenderID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_gender()
	{
		
		$tablenm='stu_athlete_gender';
		$Column='GenderID';
		$gender=$_REQUEST['GenderID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	
	public function add_country($country=0){
		$data['CountryID']=$country;
		echo $this->load->view('admin/dropdown/step_one/add_country', $data, true);
			
	}
	
	public function update_country()
	{
		
		$tablename='country';
		$CountryName=$_REQUEST['CountryName'];
		$CountryID=$_REQUEST['CountryID'];
		$ColumnName='CountryID';
		if($_REQUEST['CountryID']!="")
		{
			$array=array(
					'CountryName'=>$CountryName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$CountryID);	
		}else
		{
			foreach($CountryName as $Data)
			{
				if($Data!=""){
					$array=array(
						'CountryName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('country','CountryID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Country_<?php echo $Gender['CountryID']; ?>">
                <td><?php echo $Gender['CountryID']; ?></td>
                <td><?php echo $Gender['CountryName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete/add_country/<?php echo $Gender['CountryID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_country('<?php echo $Gender['CountryID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_country()
	{
		
		$tablenm='country';
		$Column='CountryID';
		$country=$_REQUEST['CountryID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$country);
		
	}
	
	
	public function add_position($position=0){
		$data['PositionID']=$position;
		echo $this->load->view('admin/dropdown/step_one/add_position', $data, true);
			
	}
	
	public function update_position()
	{
		$tablename='stu_athlete_position';
		$Position=$_REQUEST['Position'];
		$PositionID=$_REQUEST['PositionID'];
		$SportID=$_REQUEST['SportID'];
		$ColumnName='PositionID';
		if($_REQUEST['PositionID']!="")
		{
			$array=array(
					'Position'=>$Position,
					'SportID'=>$SportID,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$PositionID);	
		}else
		{
			foreach($Position as $Data)
			{
				if($Data!=""){
					$array=array(
						'Position'=>$Data,
						'SportID'=>$SportID,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_athlete_position','PositionID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Position_<?php echo $Gender['PositionID']; ?>">
                <td><?php echo $Gender['PositionID']; ?></td>
                <td><?php if($Gender['SportID']!=0 && $Gender['SportID']!=NULL ){ 	
							 $SportName=get_row_data('stu_athlete_sport','SportID',$Gender['SportID']);
								echo $SportName['SportName'];  } else { echo "-"; }?> </td>
                <td><?php echo $Gender['Position']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete/add_position/<?php echo $Gender['PositionID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_position('<?php echo $Gender['PositionID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_position()
	{
		
		$tablenm='stu_athlete_position';
		$Column='PositionID';
		$position=$_REQUEST['PositionID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$position);
		
	}
	
	public function add_class($class=0){
		$data['ClassID']=$class;
		echo $this->load->view('admin/dropdown/step_one/add_class', $data, true);
			
	}
	
	public function update_class()
	{
		$tablename='stu_athlete_class';
		$ClassName=$_REQUEST['ClassName'];
		$ClassID=$_REQUEST['ClassID'];
		$ColumnName='ClassID';
		if($_REQUEST['ClassID']!="")
		{
			$array=array(
					'ClassName'=>$ClassName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$ClassID);	
		}else
		{
			foreach($ClassName as $Data)
			{
				if($Data!=""){
					$array=array(
						'ClassName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_athlete_class','ClassID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Class_<?php echo $Gender['ClassID']; ?>">
                <td><?php echo $Gender['ClassID']; ?></td>
                <td><?php echo $Gender['ClassName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete/add_class/<?php echo $Gender['ClassID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_class('<?php echo $Gender['ClassID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_class()
	{
		
		$tablenm='stu_athlete_class';
		$Column='ClassID';
		$class=$_REQUEST['ClassID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$class);
		
	}
	
	
	public function add_weight($weight=0){
		$data['WeightID']=$weight;
		echo $this->load->view('admin/dropdown/step_one/add_weight', $data, true);
			
	}
	
	public function update_weight()
	{
		$tablename='stu_athlete_weight';
		$WeightName=$_REQUEST['WeightName'];
		$WeightID=$_REQUEST['WeightID'];
		$ColumnName='WeightID';
		if($_REQUEST['WeightID']!="")
		{
			$array=array(
					'WeightName'=>$WeightName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$WeightID);	
		}else
		{
			foreach($WeightName as $Data)
			{
				if($Data!=""){
					$array=array(
						'WeightName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_athlete_weight','WeightID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Weight_<?php echo $Gender['WeightID']; ?>">
                <td><?php echo $Gender['WeightID']; ?></td>
                <td><?php echo $Gender['WeightName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete/add_weight/<?php echo $Gender['WeightID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_weight('<?php echo $Gender['WeightID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_weight()
	{
		
		$tablenm='stu_athlete_weight';
		$Column='WeightID';
		$weight=$_REQUEST['WeightID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$weight);
		
	}
	
	public function add_height($height=0){
		$data['HeightID']=$height;
		echo $this->load->view('admin/dropdown/step_one/add_height', $data, true);
			
	}
	
	public function update_height()
	{
		$tablename='stu_athlete_height';
		$HeightName=$_REQUEST['HeightName'];
		$HeightID=$_REQUEST['HeightID'];
		$ColumnName='HeightID';
		if($_REQUEST['HeightID']!="")
		{
			$array=array(
					'HeightName'=>$HeightName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$HeightID);	
		}else
		{
			foreach($HeightName as $Data)
			{
				if($Data!=""){
					$array=array(
						'HeightName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_athlete_height','HeightID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Height_<?php echo $Gender['HeightID']; ?>">
                <td><?php echo $Gender['HeightID']; ?></td>
                <td><?php echo $Gender['HeightName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete/add_height/<?php echo $Gender['HeightID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_height('<?php echo $Gender['HeightID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_height()
	{
		
		$tablenm='stu_athlete_height';
		$Column='HeightID';
		$height=$_REQUEST['HeightID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$height);
		
	}
	
	public function add_inches($inches=0){
		$data['InchesID']=$inches;
		echo $this->load->view('admin/dropdown/step_one/add_inches', $data, true);
			
	}
	
	public function update_inches()
	{
		$tablename='stu_athlete_inches';
		$InchesName=$_REQUEST['InchesName'];
		$InchesID=$_REQUEST['InchesID'];
		$ColumnName='InchesID';
		if($_REQUEST['InchesID']!="")
		{
			$array=array(
					'InchesName'=>$InchesName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$InchesID);	
		}else
		{
			foreach($InchesName as $Data)
			{
				if($Data!=""){
					$array=array(
						'InchesName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_athlete_inches','InchesID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Inches_<?php echo $Gender['InchesID']; ?>">
                <td><?php echo $Gender['InchesID']; ?></td>
                <td><?php echo $Gender['InchesName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete/add_inches/<?php echo $Gender['InchesID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_inches('<?php echo $Gender['InchesID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_inches()
	{
		
		$tablenm='stu_athlete_inches';
		$Column='InchesID';
		$inches=$_REQUEST['InchesID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$inches);
		
	}
	
	
	public function add_sport($sport=0){
		$data['SportID']=$sport;
		echo $this->load->view('admin/dropdown/step_one/add_sport', $data, true);
			
	}
	
	public function update_sport()
	{
		$tablename='stu_athlete_sport';
		$SportName=$_REQUEST['SportName'];
		$SportID=$_REQUEST['SportID'];
		$ColumnName='SportID';
		if($_REQUEST['SportID']!="")
		{
			$array=array(
					'SportName'=>$SportName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$SportID);	
		}else
		{
			foreach($SportName as $Data)
			{
				if($Data!=""){
					$array=array(
						'SportName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_athlete_sport','SportID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Sport_<?php echo $Gender['SportID']; ?>">
                <td><?php echo $Gender['SportID']; ?></td>
                <td><?php echo $Gender['SportName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete/add_sport/<?php echo $Gender['SportID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_sport('<?php echo $Gender['SportID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_sport()
	{
		
		$tablenm='stu_athlete_sport';
		$Column='SportID';
		$sport=$_REQUEST['SportID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$sport);
		
	}
	

}

