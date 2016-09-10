<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_athlete_second extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('admin/dropdown/student_model_second');		
	}

	public function index(){	
		$data['country_list'] = "";
        $data['MainContent'] = $this->load->view('admin/dropdown/student_athlete_second', $data, true);		
        $this->load->view('admin/template', $data);	
	}
	
	
	
	
	// Education ACT SCORE  Code //
	
	
	public function add_education($Education=0){
		$data['EducationID']=$Education;
		echo $this->load->view('admin/dropdown/step_two/add_education_act', $data, true);
			
	}
	
	public function update_education()
	{
		
		$tablename='stu_education_act';
		$Education=$_REQUEST['Education'];
		$EducationID=$_REQUEST['EducationID'];
		$ColumnName='EducationID';
		if($_REQUEST['EducationID']!="")
		{
			$array=array(
					'EducationName'=>$Education,
					'Status'=>1
				);

			$this->student_model_second->update_list($tablename,$array,$ColumnName,$EducationID);	
		}else
		{
			foreach($Education as $Data)
			{
				if($Data!=""){
					$array=array(
						'EducationName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Education_details=get_table_details('stu_education_act','EducationID'); ?>
               <?php if(empty($Education_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Education_details as $Education){ ?>
              <tr id="Education_<?php echo $Education['EducationID']; ?>">
                <td><?php echo $Education['EducationID']; ?></td>
                <td><?php echo $Education['EducationName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_education/<?php echo $Education['EducationID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_education('<?php echo $Education['EducationID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_education()
	{
		
		$tablenm='stu_education_act';
		$Column='EducationID';
		$education=$_REQUEST['EducationID'];
		$DeletUserInfo = $this->student_model_second->delete_list($tablenm,$Column,$education);
		
	}
	
	
	
	// Education SAT SCORE  Code //
	
	public function add_education_sat($Education_sat=0){
		$data_sat['Education_sat_ID']=$Education_sat;
		echo $this->load->view('admin/dropdown/step_two/add_education_sat', $data_sat, true);
			
	}
	
	public function update_education_sat()
	{
		
		$tablename_sat='stu_education_sat';
		$Education_sat=$_REQUEST['Education_sat'];
		$Education_sat_ID=$_REQUEST['Education_sat_ID'];
		$ColumnName_sat='Education_sat_ID';
		if($_REQUEST['Education_sat_ID']!="")
		{
			
			
			$array_sat=array(
					'Education_sat_Name'=>$Education_sat,
					'Status'=>1
				);

			$this->student_model_second->update_list($tablename_sat,$array_sat,$ColumnName_sat,$Education_sat_ID);	
		}else
		{
			foreach($Education_sat as $Data_sat)
			{
				if($Data_sat!=""){
					$array_sat=array(
						'Education_sat_Name'=>$Data_sat,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($tablename_sat,$array_sat);	
				}
			}
			
		}
		
		$Education_details_sat=get_table_details('stu_education_sat','Education_sat_ID'); ?>
              
               <?php if(empty($Education_details_sat)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Education_details_sat as $Education_sat){ ?>
              <tr id="Education_sat_<?php echo $Education_sat['Education_sat_ID']; ?>">
                <td><?php echo $Education_sat['Education_sat_ID']; ?></td>
                <td><?php echo $Education_sat['Education_sat_Name']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_education_sat/<?php echo $Education_sat['Education_sat_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_education_sat('<?php echo $Education_sat['Education_sat_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
              <?php
              
       
		
	}
	
	public function delete_education_sat()
	{
		
		$tablenm_sat='stu_education_sat';
		$Column_sat='Education_sat_ID';
		$education_sat=$_REQUEST['Education_sat_ID'];
		$DeletUserInfo_sat = $this->student_model_second->delete_list($tablenm_sat,$Column_sat,$education_sat);
		
	}
	
	
		// Education GPA SCORE  Code //
	
	public function add_education_gpa($Education_gpa=0){
		$data_gpa['Education_gpa_ID']=$Education_gpa;
		echo $this->load->view('admin/dropdown/step_two/add_education_gpa', $data_gpa, true);
			
	}
	
	public function update_education_gpa()
	{
		
		$tablename_gpa='stu_education_gpa';
		$Education_gpa=$_REQUEST['Education_gpa'];
		$Education_gpa_ID=$_REQUEST['Education_gpa_ID'];
		$ColumnName_gpa='Education_gpa_ID';
		if($_REQUEST['Education_gpa_ID']!="")
		{
			
			
			$array_gpa=array(
					'Education_gpa_Name'=>$Education_gpa,
					'Status'=>1
				);

			$this->student_model_second->update_list($tablename_gpa,$array_gpa,$ColumnName_gpa,$Education_gpa_ID);	
		}else
		{
			foreach($Education_gpa as $Data_gpa)
			{
				if($Data_gpa!=""){
					$array_gpa=array(
						'Education_gpa_Name'=>$Data_gpa,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($tablename_gpa,$array_gpa);	
				}
			}
			
		}
		
		$Education_gpa_details=get_table_details('stu_education_gpa','Education_gpa_ID'); ?>
               
               <?php if(empty($Education_gpa_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Education_gpa_details as $Education_gpa){ ?>
              <tr id="Education_gpa_<?php echo $Education_gpa['Education_gpa_ID']; ?>">
                <td><?php echo $Education_gpa['Education_gpa_ID']; ?></td>
                <td><?php echo $Education_gpa['Education_gpa_Name']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_education_gpa/<?php echo $Education_gpa['Education_gpa_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_education_gpa('<?php echo $Education_gpa['Education_gpa_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
              <?php
              
       
		
	}
	
	public  function delete_education_gpa()
	{
		
		$tablenm_gpa='stu_education_gpa';
		$Column_gpa='Education_gpa_ID';
		$education_gpa=$_REQUEST['Education_gpa_ID'];
		$DeletUserInfo_gpa= $this->student_model_second->delete_list($tablenm_gpa,$Column_gpa,$education_gpa);
	}
	
	
		// Education Core GPA SCORE  Code //
	
	public function add_education_Core_Gpa($Education_Core_Gpa=0){
		$data_Core_Gpa['Education_Core_Gpa_ID']=$Education_Core_Gpa;
		echo $this->load->view('admin/dropdown/step_two/add_education_core_gpa', $data_Core_Gpa, true);
			
	}
	
	public function update_education_Core_Gpa()
	{
		
		$tablename_Core_Gpa='stu_education_core_gpa';
		$Education_Core_Gpa=$_REQUEST['Education_Core_Gpa'];
		$Education_Core_Gpa_ID=$_REQUEST['Education_Core_Gpa_ID'];
		$ColumnName_Core_Gpa='Education_Core_Gpa_ID';
		if($_REQUEST['Education_Core_Gpa_ID']!="")
		{
			
			
			$array_Core_Gpa=array(
					'Education_Core_Gpa_Name'=>$Education_Core_Gpa,
					'Status'=>1
				);

			$this->student_model_second->update_list($tablename_Core_Gpa,$array_Core_Gpa,$ColumnName_Core_Gpa,$Education_Core_Gpa_ID);	
		}else
		{
			foreach($Education_Core_Gpa as $Data_Core_Gpa)
			{
				if($Data_Core_Gpa!=""){
					$array_Core_Gpa=array(
						'Education_Core_Gpa_Name'=>$Data_Core_Gpa,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($tablename_Core_Gpa,$array_Core_Gpa);	
				}
			}
			
		}
		
		$Education_Core_Gpa_details=get_table_details('stu_education_core_gpa','Education_Core_Gpa_ID'); ?>
               
               <?php if(empty($Education_Core_Gpa_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Education_Core_Gpa_details as $Education_Core_Gpa){ ?>
              <tr id="Education_Core_Gpa_<?php echo $Education_Core_Gpa['Education_Core_Gpa_ID']; ?>">
                <td><?php echo $Education_Core_Gpa['Education_Core_Gpa_ID']; ?></td>
                <td><?php echo $Education_Core_Gpa['Education_Core_Gpa_Name']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_education_Core_Gpa/<?php echo $Education_Core_Gpa['Education_Core_Gpa_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_education_Core_Gpa('<?php echo $Education_Core_Gpa['Education_Core_Gpa_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
              <?php
              
       
		
	}
	
	public function delete_education_Core_Gpa()
	{
		
		$tablenm_Core_Gpa='stu_education_core_gpa';
		$Column_Core_Gpa='Education_Core_Gpa_ID';
		$education_Core_Gpa=$_REQUEST['Education_Core_Gpa_ID'];
		$DeletUserInfo_Core_Gpa= $this->student_model_second->delete_list($tablenm_Core_Gpa,$Column_Core_Gpa,$education_Core_Gpa);
	}
	
	//  Eligibility NCIAA SCORE  Code //
	
	public function add_Eligibility_Nciaa($Eligibility_Nciaa=0){
		$data_Nciaa['Eligibility_Nciaa_ID']=$Eligibility_Nciaa;
		echo $this->load->view('admin/dropdown/step_two/add_eligibility_nciaa', $data_Nciaa, true);
			
	}
	
	public function update_Eligibility_Nciaa()
	{
		
		$tablename_Nciaa='stu_eligibility_nciaa';
		$Eligibility_Nicaa=$_REQUEST['Eligibility_Nicaa'];
		$Eligibility_Nciaa_ID=$_REQUEST['Eligibility_Nciaa_ID'];
		$ColumnName_Nciaa='Eligibility_Nciaa_ID';
		if($_REQUEST['Eligibility_Nciaa_ID']!="")
		{
			
			
			$array_Nciaa=array(
					'Eligibility_Nciaa_Name'=>$Eligibility_Nicaa,
					'Status'=>1
				);

			$this->student_model_second->update_list($tablename_Nciaa,$array_Nciaa,$ColumnName_Nciaa,$Eligibility_Nciaa_ID);	
		}else
		{
			foreach($Eligibility_Nicaa as $Data_Nciaa)
			{
				if($Data_Nciaa!=""){
					$array_Nciaa=array(
						'Eligibility_Nciaa_Name'=>$Data_Nciaa,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($tablename_Nciaa,$array_Nciaa);	
				}
			}
			
		}
		
		$Eligibility_Nciaa_details=get_table_details('stu_eligibility_nciaa','Eligibility_Nciaa_ID'); ?>
            
               <?php if(empty($Eligibility_Nciaa_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Eligibility_Nciaa_details as $Eligibility_Nciaa){ ?>
              <tr id="Eligibility_Nciaa_<?php echo $Eligibility_Nciaa['Eligibility_Nciaa_ID']; ?>">
                <td><?php echo $Eligibility_Nciaa['Eligibility_Nciaa_ID']; ?></td>
                <td><?php echo $Eligibility_Nciaa['Eligibility_Nciaa_Name']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Eligibility_Nciaa/<?php echo $Eligibility_Nciaa['Eligibility_Nciaa_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Eligibility_Nciaa('<?php echo $Eligibility_Nciaa['Eligibility_Nciaa_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
              <?php
              
       
		
	}
	
	public function delete_Eligibility_Nciaa()
	{
		
		$tablenm_Nciaa='stu_eligibility_nciaa';
		$Column_Nciaa='Eligibility_Nciaa_ID';
		$Eligibility_Nciaa=$_REQUEST['Eligibility_Nciaa_ID'];
		$DeletUserInfo_Nciaa= $this->student_model_second->delete_list($tablenm_Nciaa,$Column_Nciaa,$Eligibility_Nciaa);
	}
	


	//  Eligibility NAIA SCORE  Code //
	
	public function add_Eligibility_Naia($Eligibility_Naia=0){
		$data_Naia['Eligibility_Naia_ID']=$Eligibility_Naia;
		echo $this->load->view('admin/dropdown/step_two/add_eligibility_naia', $data_Naia, true);
			
	}
	
	public function update_Eligibility_Naia()
	{
		
		$tablename_Naia='stu_eligibility_naia';
		$Eligibility_Naia=$_REQUEST['Eligibility_Naia'];
		$Eligibility_Naia_ID=$_REQUEST['Eligibility_Naia_ID'];
		$ColumnName_Naia='Eligibility_Naia_ID';
		if($_REQUEST['Eligibility_Naia_ID']!="")
		{
			
			
			$array_Naia=array(
					'Eligibility_Naia_Name'=>$Eligibility_Naia,
					'Status'=>1
				);

			$this->student_model_second->update_list($tablename_Naia,$array_Naia,$ColumnName_Naia,$Eligibility_Naia_ID);	
		}else
		{
			foreach($Eligibility_Naia as $Data_Naia)
			{
				if($Data_Naia!=""){
					$array_Naia=array(
						'Eligibility_Naia_Name'=>$Data_Naia,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($tablename_Naia,$array_Naia);	
				}
			}
			
		}
		
		$Eligibility_Naia_details=get_table_details('stu_eligibility_naia','Eligibility_Naia_ID'); ?>
            
               <?php if(empty($Eligibility_Naia_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Eligibility_Naia_details as $Eligibility_Naia){ ?>
              <tr id="Eligibility_Naia_<?php echo $Eligibility_Naia['Eligibility_Naia_ID']; ?>">
                <td><?php echo $Eligibility_Naia['Eligibility_Naia_ID']; ?></td>
                <td><?php echo $Eligibility_Naia['Eligibility_Naia_Name']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Eligibility_Naia/<?php echo $Eligibility_Naia['Eligibility_Naia_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Eligibility_Naia('<?php echo $Eligibility_Naia['Eligibility_Naia_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
              <?php
              
       
		
	}
	
	public  function delete_Eligibility_Naia()
	{
		
		$tablenm_Naia='stu_eligibility_naia';
		$Column_Naia='Eligibility_Naia_ID';
		$Eligibility_Naia=$_REQUEST['Eligibility_Naia_ID'];
		$DeletUserInfo_Naia= $this->student_model_second->delete_list($tablenm_Naia,$Column_Naia,$Eligibility_Naia);
	}
	
		//  Eligibility INtended College Code //
	
	public function add_Eligibility_Intended($Eligibility_Intended=0){
		$data_Intended['Eligibility_Intended_ID']=$Eligibility_Intended;
		echo $this->load->view('admin/dropdown/step_two/add_eligibility_intended', $data_Intended, true);
			
	}
	
	public function update_Eligibility_Intended()
	{
		
		$tablename_Intended='stu_eligibility_intended';
		$Eligibility_Intended=$_REQUEST['Eligibility_Intended'];
		$Eligibility_Intended_ID=$_REQUEST['Eligibility_Intended_ID'];
		$ColumnName_Intended='Eligibility_Intended_ID';
		if($_REQUEST['Eligibility_Intended_ID']!="")
		{
			
			
			$array_Intended=array(
					'Eligibility_Intended_Name'=>$Eligibility_Intended,
					'Status'=>1
				);

			$this->student_model_second->update_list($tablename_Intended,$array_Intended,$ColumnName_Intended,$Eligibility_Intended_ID);	
		}else
		{
			foreach($Eligibility_Intended as $Data_Intended)
			{
				if($Data_Intended!=""){
					$array_Intended=array(
						'Eligibility_Intended_Name'=>$Data_Intended,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($tablename_Intended,$array_Intended);	
				}
			}
			
		}
		
		$Eligibility_Intended_details=get_table_details('stu_eligibility_intended','Eligibility_Intended_ID'); ?>
            
               <?php if(empty($Eligibility_Intended_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Eligibility_Intended_details as $Eligibility_Intended){ ?>
              <tr id="Eligibility_Intended_<?php echo $Eligibility_Intended['Eligibility_Intended_ID']; ?>">
                <td><?php echo $Eligibility_Intended['Eligibility_Intended_ID']; ?></td>
                <td><?php echo $Eligibility_Intended['Eligibility_Intended_Name']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Eligibility_Intended/<?php echo $Eligibility_Intended['Eligibility_Intended_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Eligibility_Intended('<?php echo $Eligibility_Intended['Eligibility_Intended_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
              <?php
              
       
		
	}
	
	public function delete_Eligibility_Intended()
	{
		
		$tablenm_Intended='stu_eligibility_intended';
		$Column_Intended='Eligibility_Intended_ID';
		$Eligibility_Intended=$_REQUEST['Eligibility_Intended_ID'];
		$DeletUserInfo_Intended= $this->student_model_second->delete_list($tablenm_Intended,$Column_Intended,$Eligibility_Intended);
	}
	


	//  Eligibility College Major Code //
	
	public function add_Eligibility_Major($Eligibility_Major=0){
		$data_Major['Eligibility_Major_ID']=$Eligibility_Major;
		echo $this->load->view('admin/dropdown/step_two/add_eligibility_major', $data_Major, true);
			
	}
	
	public function update_Eligibility_Major()
	{
		
		$tablename_Major='stu_eligibility_major';
		$Eligibility_Major=$_REQUEST['Eligibility_Major'];
		$Eligibility_Major_ID=$_REQUEST['Eligibility_Major_ID'];
		$Eligibility_Intended_ID=$_REQUEST['Eligibility_Intended_ID'];
		$ColumnName_Major='Eligibility_Major_ID';
		if($_REQUEST['Eligibility_Major_ID']!="")
		{
			
			
			$array_Major=array(
					'Eligibility_Major_Name'=>$Eligibility_Major,
					'Eligibility_Intended_ID'=>$Eligibility_Intended_ID,
					'Status'=>1
				);

			$this->student_model_second->update_list($tablename_Major,$array_Major,$ColumnName_Major,$Eligibility_Major_ID);	
		}else
		{
			foreach($Eligibility_Major as $Data_Major)
			{
				if($Data_Major!=""){
					$array_Major=array(
						'Eligibility_Major_Name'=>$Data_Major,
						'Eligibility_Intended_ID'=>$Eligibility_Intended_ID,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($tablename_Major,$array_Major);	
				}
			}
			
		}
		
		$Eligibility_Major_details=get_table_details('stu_eligibility_major','Eligibility_Major_ID'); ?>
              
               <?php if(empty($Eligibility_Major_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Eligibility_Major_details as $Eligibility_Major){ ?>
              <tr id="Eligibility_Major_<?php echo $Eligibility_Major['Eligibility_Major_ID']; ?>">
                <td><?php echo $Eligibility_Major['Eligibility_Major_ID']; ?></td>
                <td>
                	<?php if($Eligibility_Major['Eligibility_Intended_ID']!=0 && $Eligibility_Major['Eligibility_Intended_ID']!=NULL ){ 
							 $SportName=get_row_data('stu_eligibility_intended','Eligibility_Intended_ID',$Eligibility_Major['Eligibility_Intended_ID']);
								echo $SportName['Eligibility_Intended_Name'];  } else { echo "-"; }?> 
                                
                                </td>
                <td><?php echo $Eligibility_Major['Eligibility_Major_Name']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Eligibility_Major/<?php echo $Eligibility_Major['Eligibility_Major_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Eligibility_Major('<?php echo $Eligibility_Major['Eligibility_Major_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
              <?php
              
       
		
	}
	
	public function delete_Eligibility_Major()
	{
		
		$tablenm_Major='stu_eligibility_major';
		$Column_Major='Eligibility_Major_ID';
		$Eligibility_Major=$_REQUEST['Eligibility_Major_ID'];
		$DeletUserInfo_Major= $this->student_model_second->delete_list($tablenm_Major,$Column_Major,$Eligibility_Major);
	}
	
	//  Guidance Name Code //
	
	public function add_Guidance_Name($Guidance_Name=0){
		$data_Name['Guidance_ID']=$Guidance_Name;
		echo $this->load->view('admin/dropdown/step_two/add_guidance_name', $data_Name, true);
			
	}
	
	public function update_Guidance_Name()
	{
		
		$tablename_Name='stu_guidance_name';
		$Guidance_Name=$_REQUEST['Guidance_Name'];
		$Guidance_Name_ID=$_REQUEST['Guidance_ID'];
		$ColumnName_Name='Guidance_ID';
		if($_REQUEST['Guidance_ID']!="")
		{
			
			
			$array_Name=array(
					'Guidance_Name'=>$Guidance_Name,
					'Status'=>1
				);

			$this->student_model_second->update_list($tablename_Name,$array_Name,$ColumnName_Name,$Guidance_Name_ID);	
		}else
		{
			foreach($Guidance_Name as $Data_Name)
			{
				if($Data_Name!=""){
					$array_Name=array(
						'Guidance_Name'=>$Data_Name,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($tablename_Name,$array_Name);	
				}
			}
			
		}
		
		$Guidance_Name_details=get_table_details('stu_guidance_name','Guidance_ID'); ?>
              
               <?php if(empty($Guidance_Name_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Guidance_Name_details as $Guidance_Name){ ?>
              <tr id="Guidance_Name_<?php echo $Guidance_Name['Guidance_ID']; ?>">
                <td><?php echo $Guidance_Name['Guidance_ID']; ?></td>
                <td><?php echo $Guidance_Name['Guidance_Name']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Guidance_Name/<?php echo $Guidance_Name['Guidance_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Guidance_Name('<?php echo $Guidance_Name['Guidance_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
              <?php
              
       
		
	}
	
	public  function delete_Guidance_Name()
	{
		
		$tablenm_Name='stu_guidance_name';
		$Column_Name='Guidance_ID';
		$Guidance_Name=$_REQUEST['Guidance_ID'];
		$DeletUserInfo_Name= $this->student_model_second->delete_list($tablenm_Name,$Column_Name,$Guidance_Name);
	}
	



	//  Guidance Email Code //
	
	public function add_Guidance_Counselor($Guidance_Counselor = 0){
		$data_Counselor['Guidance_Counselor_ID']=$Guidance_Counselor;
		echo $this->load->view('admin/dropdown/step_two/add_guidance_email', $data_Counselor, true);
			
	}
	
	public function update_Guidance_Counselor()
	{
		
		$tablename_Counselor='stu_guidance_email';
		$Guidance_Counselor=$_REQUEST['Guidance_Counselor'];
		$Guidance_Counselor_ID=$_REQUEST['Guidance_Counselor_ID'];
		$ColumnEmail_Counselor='Guidance_Counselor_ID';
		if($_REQUEST['Guidance_Counselor_ID']!="")
		{
			
			
			$array_Counselor=array(
					'Guidance_Counselor_Email'=>$Guidance_Counselor,
					'Status'=>1
				);

			$this->student_model_second->update_list($tablename_Counselor,$array_Counselor,$ColumnEmail_Counselor,$Guidance_Counselor_ID);	
		}else
		{
			foreach($Guidance_Counselor as $Data_Counselor)
			{
				if($Data_Counselor!=""){
					$array_Counselor=array(
						'Guidance_Counselor_Email'=>$Data_Counselor,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($tablename_Counselor,$array_Counselor);	
				}
			}
			
		}
		
		$Guidance_Counselor_details=get_table_details('stu_guidance_email','Guidance_Counselor_ID'); ?>
              
               <?php if(empty($Guidance_Counselor_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Guidance_Counselor_details as $Guidance_Counselor){ ?>
              <tr id="Guidance_Counselor_<?php echo $Guidance_Counselor['Guidance_Counselor_ID']; ?>">
                <td><?php echo $Guidance_Counselor['Guidance_Counselor_ID']; ?></td>
                <td><?php echo $Guidance_Counselor['Guidance_Counselor_Email']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Guidance_Counselor/<?php echo $Guidance_Counselor['Guidance_Counselor_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Guidance_Counselor('<?php echo $Guidance_Counselor['Guidance_Counselor_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
              <?php
              
       
		
	}
	
	public function delete_Guidance_Counselor()
	{
		
		$tablenm_Counselor='stu_guidance_email';
		$Column_Counselor='Guidance_Counselor_ID';
		$Guidance_Counselor=$_REQUEST['Guidance_Counselor_ID'];
		$DeletUserInfo_Counselor= $this->student_model_second->delete_list($tablenm_Counselor,$Column_Counselor,$Guidance_Counselor);
	}
	
	
	
		//  Toefl_Total Code //
	
	public function add_Toefl_Total_Score($Toefl_Total_Score = 0){
		$data_Toefl_Total['Toefl_Total_Score_ID']=$Toefl_Total_Score;
		echo $this->load->view('admin/dropdown/step_two/add_toefl_score_total', $data_Toefl_Total, true);
			
	}
	
	public function update_Toefl_Total_Score()
	{
		
		$tablename_Toefl_Total='stu_toefl_score_total';
		$Toefl_Total_Score=$_REQUEST['Toefl_Total_Score'];
		$Toefl_Total_Score_ID=$_REQUEST['Toefl_Total_Score_ID'];
		$ColumnEmail_Toefl_Total='Toefl_Total_Score_ID';
		if($_REQUEST['Toefl_Total_Score_ID']!="")
		{
			
			
			$array_Toefl_Total=array(
					'Toefl_Total_Score'=>$Toefl_Total_Score,
					'Status'=>1
				);

			$this->student_model_second->update_list($tablename_Toefl_Total,$array_Toefl_Total,$ColumnEmail_Toefl_Total,$Toefl_Total_Score_ID);	
		}else
		{
			foreach($Toefl_Total_Score as $Data_Toefl_Total)
			{
				if($Data_Toefl_Total!=""){
					$array_Toefl_Total=array(
						'Toefl_Total_Score'=>$Data_Toefl_Total,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($tablename_Toefl_Total,$array_Toefl_Total);	
				}
			}
			
		}
		
		$Toefl_Total_Score_details=get_table_details('stu_toefl_score_total','Toefl_Total_Score_ID'); ?>
              
               <?php if(empty($Toefl_Total_Score_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Toefl_Total_Score_details as $Toefl_Total_Score){ ?>
              <tr id="Toefl_Total_Score_<?php echo $Toefl_Total_Score['Toefl_Total_Score_ID']; ?>">
                <td><?php echo $Toefl_Total_Score['Toefl_Total_Score_ID']; ?></td>
                <td><?php echo $Toefl_Total_Score['Toefl_Total_Score']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Total_Score/<?php echo $Toefl_Total_Score['Toefl_Total_Score_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Toefl_Total_Score('<?php echo $Toefl_Total_Score['Toefl_Total_Score_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
              <?php
              
       
		
	}
	
	public function delete_Toefl_Total_Score()
	{
		
		$tablenm_Toefl_Total='stu_toefl_score_total';
		$Column_Toefl_Total='Toefl_Total_Score_ID';
		$Toefl_Total_Score=$_REQUEST['Toefl_Total_Score_ID'];
		$DeletUserInfo_Toefl_Total= $this->student_model_second->delete_list($tablenm_Toefl_Total,$Column_Toefl_Total,$Toefl_Total_Score);
	}
	
	
	
			//  Toefl_Reading Code //
	
	public function add_Toefl_Reading_Score($Toefl_Reading_Score = 0){
		$data_Toefl_Reading['Toefl_Reading_Score_ID']=$Toefl_Reading_Score;
		echo $this->load->view('admin/dropdown/step_two/add_toefl_score_reading', $data_Toefl_Reading, true);
			
	}
	
	public function update_Toefl_Reading_Score()
	{
		
		$tablename_Toefl_Reading='stu_toefl_score_reading';
		$Toefl_Reading_Score=$_REQUEST['Toefl_Reading_Score'];
		$Toefl_Reading_Score_ID=$_REQUEST['Toefl_Reading_Score_ID'];
		$ColumnEmail_Toefl_Reading='Toefl_Reading_Score_ID';
		if($_REQUEST['Toefl_Reading_Score_ID']!="")
		{
			
			
			$array_Toefl_Reading=array(
					'Toefl_Reading_Score'=>$Toefl_Reading_Score,
					'Status'=>1
				);

			$this->student_model_second->update_list($tablename_Toefl_Reading,$array_Toefl_Reading,$ColumnEmail_Toefl_Reading,$Toefl_Reading_Score_ID);	
		}else
		{
			foreach($Toefl_Reading_Score as $Data_Toefl_Reading)
			{
				if($Data_Toefl_Reading!=""){
					$array_Toefl_Reading=array(
						'Toefl_Reading_Score'=>$Data_Toefl_Reading,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($tablename_Toefl_Reading,$array_Toefl_Reading);	
				}
			}
			
		}
		
		$Toefl_Reading_Score_details=get_table_details('stu_toefl_score_reading','Toefl_Reading_Score_ID'); ?>
            
               <?php if(empty($Toefl_Reading_Score_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Toefl_Reading_Score_details as $Toefl_Reading_Score){ ?>
              <tr id="Toefl_Reading_Score_<?php echo $Toefl_Reading_Score['Toefl_Reading_Score_ID']; ?>">
                <td><?php echo $Toefl_Reading_Score['Toefl_Reading_Score_ID']; ?></td>
                <td><?php echo $Toefl_Reading_Score['Toefl_Reading_Score']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Reading_Score/<?php echo $Toefl_Reading_Score['Toefl_Reading_Score_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Toefl_Reading_Score('<?php echo $Toefl_Reading_Score['Toefl_Reading_Score_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
              <?php
              
       
		
	}
	
	public function delete_Toefl_Reading_Score()
	{
		
		$tablenm_Toefl_Reading='stu_toefl_score_reading';
		$Column_Toefl_Reading='Toefl_Reading_Score_ID';
		$Toefl_Reading_Score=$_REQUEST['Toefl_Reading_Score_ID'];
		$DeletUserInfo_Toefl_Reading= $this->student_model_second->delete_list($tablenm_Toefl_Reading,$Column_Toefl_Reading,$Toefl_Reading_Score);
	}
	
	
			//  Toefl_Listening Code //
	
	public function add_Toefl_Listening_Score($Toefl_Listening_Score = 0){
		$data_Toefl_Listening['Toefl_Listening_Score_ID']=$Toefl_Listening_Score;
		echo $this->load->view('admin/dropdown/step_two/add_toefl_score_listening', $data_Toefl_Listening, true);
			
	}
	
	public function update_Toefl_Listening_Score()
	{
		
		$tablename_Toefl_Listening='stu_toefl_score_listening';
		$Toefl_Listening_Score=$_REQUEST['Toefl_Listening_Score'];
		$Toefl_Listening_Score_ID=$_REQUEST['Toefl_Listening_Score_ID'];
		$ColumnEmail_Toefl_Listening='Toefl_Listening_Score_ID';
		if($_REQUEST['Toefl_Listening_Score_ID']!="")
		{
			
			
			$array_Toefl_Listening=array(
					'Toefl_Listening_Score'=>$Toefl_Listening_Score,
					'Status'=>1
				);

			$this->student_model_second->update_list($tablename_Toefl_Listening,$array_Toefl_Listening,$ColumnEmail_Toefl_Listening,$Toefl_Listening_Score_ID);	
		}else
		{
			foreach($Toefl_Listening_Score as $Data_Toefl_Listening)
			{
				if($Data_Toefl_Listening!=""){
					$array_Toefl_Listening=array(
						'Toefl_Listening_Score'=>$Data_Toefl_Listening,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($tablename_Toefl_Listening,$array_Toefl_Listening);	
				}
			}
			
		}
		
		$Toefl_Listening_Score_details=get_table_details('stu_toefl_score_listening','Toefl_Listening_Score_ID'); ?>
            
               <?php if(empty($Toefl_Listening_Score_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Toefl_Listening_Score_details as $Toefl_Listening_Score){ ?>
              <tr id="Toefl_Listening_Score_<?php echo $Toefl_Listening_Score['Toefl_Listening_Score_ID']; ?>">
                <td><?php echo $Toefl_Listening_Score['Toefl_Listening_Score_ID']; ?></td>
                <td><?php echo $Toefl_Listening_Score['Toefl_Listening_Score']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Listening_Score/<?php echo $Toefl_Listening_Score['Toefl_Listening_Score_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Toefl_Listening_Score('<?php echo $Toefl_Listening_Score['Toefl_Listening_Score_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
              <?php
              
       
		
	}
	
	public function delete_Toefl_Listening_Score()
	{
		
		$tablenm_Toefl_Listening='stu_toefl_score_listening';
		$Column_Toefl_Listening='Toefl_Listening_Score_ID';
		$Toefl_Listening_Score=$_REQUEST['Toefl_Listening_Score_ID'];
		$DeletUserInfo_Toefl_Listening= $this->student_model_second->delete_list($tablenm_Toefl_Listening,$Column_Toefl_Listening,$Toefl_Listening_Score);
	}
	
	
	
		//  Toefl_Speaking Code //
	
	public function add_Toefl_Speaking_Score($Toefl_Speaking_Score = 0){
		$data_Toefl_Speaking['Toefl_Speaking_Score_ID']=$Toefl_Speaking_Score;
		echo $this->load->view('admin/dropdown/step_two/add_toefl_score_speaking', $data_Toefl_Speaking, true);
			
	}
	
	public function update_Toefl_Speaking_Score()
	{
		
		$tablename_Toefl_Speaking='stu_toefl_score_speaking';
		$Toefl_Speaking_Score=$_REQUEST['Toefl_Speaking_Score'];
		$Toefl_Speaking_Score_ID=$_REQUEST['Toefl_Speaking_Score_ID'];
		$ColumnEmail_Toefl_Speaking='Toefl_Speaking_Score_ID';
		if($_REQUEST['Toefl_Speaking_Score_ID']!="")
		{
			
			
			$array_Toefl_Speaking=array(
					'Toefl_Speaking_Score'=>$Toefl_Speaking_Score,
					'Status'=>1
				);

			$this->student_model_second->update_list($tablename_Toefl_Speaking,$array_Toefl_Speaking,$ColumnEmail_Toefl_Speaking,$Toefl_Speaking_Score_ID);	
		}else
		{
			foreach($Toefl_Speaking_Score as $Data_Toefl_Speaking)
			{
				if($Data_Toefl_Speaking!=""){
					$array_Toefl_Speaking=array(
						'Toefl_Speaking_Score'=>$Data_Toefl_Speaking,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($tablename_Toefl_Speaking,$array_Toefl_Speaking);	
				}
			}
			
		}
		
		$Toefl_Speaking_Score_details=get_table_details('stu_toefl_score_speaking','Toefl_Speaking_Score_ID'); ?>
             
               <?php if(empty($Toefl_Speaking_Score_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Toefl_Speaking_Score_details as $Toefl_Speaking_Score){ ?>
              <tr id="Toefl_Speaking_Score_<?php echo $Toefl_Speaking_Score['Toefl_Speaking_Score_ID']; ?>">
                <td><?php echo $Toefl_Speaking_Score['Toefl_Speaking_Score_ID']; ?></td>
                <td><?php echo $Toefl_Speaking_Score['Toefl_Speaking_Score']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Speaking_Score/<?php echo $Toefl_Speaking_Score['Toefl_Speaking_Score_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Toefl_Speaking_Score('<?php echo $Toefl_Speaking_Score['Toefl_Speaking_Score_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
              <?php
              
       
		
	}
	
	public function delete_Toefl_Speaking_Score()
	{
		
		$tablenm_Toefl_Speaking='stu_toefl_score_speaking';
		$Column_Toefl_Speaking='Toefl_Speaking_Score_ID';
		$Toefl_Speaking_Score=$_REQUEST['Toefl_Speaking_Score_ID'];
		$DeletUserInfo_Toefl_Speaking= $this->student_model_second->delete_list($tablenm_Toefl_Speaking,$Column_Toefl_Speaking,$Toefl_Speaking_Score);
	}
	
	
			//  Toefl_Writing Code //
	
	public function add_Toefl_Writing_Score($Toefl_Writing_Score = 0){
		$data_Toefl_Writing['Toefl_Writing_Score_ID']=$Toefl_Writing_Score;
		echo $this->load->view('admin/dropdown/step_two/add_toefl_score_writing', $data_Toefl_Writing, true);
			
	}
	
	public function update_Toefl_Writing_Score()
	{
		
		$tablename_Toefl_Writing='stu_toefl_score_writing';
		$Toefl_Writing_Score=$_REQUEST['Toefl_Writing_Score'];
		$Toefl_Writing_Score_ID=$_REQUEST['Toefl_Writing_Score_ID'];
		$ColumnEmail_Toefl_Writing='Toefl_Writing_Score_ID';
		if($_REQUEST['Toefl_Writing_Score_ID']!="")
		{
			
			
			$array_Toefl_Writing=array(
					'Toefl_Writing_Score'=>$Toefl_Writing_Score,
					'Status'=>1
				);

			$this->student_model_second->update_list($tablename_Toefl_Writing,$array_Toefl_Writing,$ColumnEmail_Toefl_Writing,$Toefl_Writing_Score_ID);	
		}else
		{
			foreach($Toefl_Writing_Score as $Data_Toefl_Writing)
			{
				if($Data_Toefl_Writing!=""){
					$array_Toefl_Writing=array(
						'Toefl_Writing_Score'=>$Data_Toefl_Writing,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($tablename_Toefl_Writing,$array_Toefl_Writing);	
				}
			}
			
		}
		
		$Toefl_Writing_Score_details=get_table_details('stu_toefl_score_writing','Toefl_Writing_Score_ID'); ?>
            
               <?php if(empty($Toefl_Writing_Score_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Toefl_Writing_Score_details as $Toefl_Writing_Score){ ?>
              <tr id="Toefl_Writing_Score_<?php echo $Toefl_Writing_Score['Toefl_Writing_Score_ID']; ?>">
                <td><?php echo $Toefl_Writing_Score['Toefl_Writing_Score_ID']; ?></td>
                <td><?php echo $Toefl_Writing_Score['Toefl_Writing_Score']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Writing_Score/<?php echo $Toefl_Writing_Score['Toefl_Writing_Score_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Toefl_Writing_Score('<?php echo $Toefl_Writing_Score['Toefl_Writing_Score_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
              <?php
              
       
		
	}
	
	public function delete_Toefl_Writing_Score()
	{
		
		$tablenm_Toefl_Writing='stu_toefl_score_writing';
		$Column_Toefl_Writing='Toefl_Writing_Score_ID';
		$Toefl_Writing_Score=$_REQUEST['Toefl_Writing_Score_ID'];
		$DeletUserInfo_Toefl_Writing= $this->student_model_second->delete_list($tablenm_Toefl_Writing,$Column_Toefl_Writing,$Toefl_Writing_Score);
	}
	
	
			//  Toefl_Wes Code //
	
	public function add_Toefl_Wes_Score($Toefl_Wes_Score = 0){
		$data_Toefl_Wes['Toefl_Wes_Score_ID']=$Toefl_Wes_Score;
		echo $this->load->view('admin/dropdown/step_two/add_toefl_score_wes', $data_Toefl_Wes, true);
			
	}
	
	public function update_Toefl_Wes_Score()
	{
		
		$tablename_Toefl_Wes='stu_toefl_score_wes';
		$Toefl_Wes_Score=$_REQUEST['Toefl_Wes_Score'];
		$Toefl_Wes_Score_ID=$_REQUEST['Toefl_Wes_Score_ID'];
		$ColumnEmail_Toefl_Wes='Toefl_Wes_Score_ID';
		if($_REQUEST['Toefl_Wes_Score_ID']!="")
		{
			
			
			$array_Toefl_Wes=array(
					'Toefl_Wes_Score'=>$Toefl_Wes_Score,
					'Status'=>1
				);

			$this->student_model_second->update_list($tablename_Toefl_Wes,$array_Toefl_Wes,$ColumnEmail_Toefl_Wes,$Toefl_Wes_Score_ID);	
		}else
		{
			foreach($Toefl_Wes_Score as $Data_Toefl_Wes)
			{
				if($Data_Toefl_Wes!=""){
					$array_Toefl_Wes=array(
						'Toefl_Wes_Score'=>$Data_Toefl_Wes,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($tablename_Toefl_Wes,$array_Toefl_Wes);	
				}
			}
			
		}
		
		$Toefl_Wes_Score_details=get_table_details('stu_toefl_score_wes','Toefl_Wes_Score_ID'); ?>
             
               <?php if(empty($Toefl_Wes_Score_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Toefl_Wes_Score_details as $Toefl_Wes_Score){ ?>
              <tr id="Toefl_Wes_Score_<?php echo $Toefl_Wes_Score['Toefl_Wes_Score_ID']; ?>">
                <td><?php echo $Toefl_Wes_Score['Toefl_Wes_Score_ID']; ?></td>
                <td><?php echo $Toefl_Wes_Score['Toefl_Wes_Score']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Wes_Score/<?php echo $Toefl_Wes_Score['Toefl_Wes_Score_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Toefl_Wes_Score('<?php echo $Toefl_Wes_Score['Toefl_Wes_Score_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
              <?php
              
       
		
	}
	
	public function delete_Toefl_Wes_Score()
	{
		
		$tablenm_Toefl_Wes='stu_toefl_score_wes';
		$Column_Toefl_Wes='Toefl_Wes_Score_ID';
		$Toefl_Wes_Score=$_REQUEST['Toefl_Wes_Score_ID'];
		$DeletUserInfo_Toefl_Wes= $this->student_model_second->delete_list($tablenm_Toefl_Wes,$Column_Toefl_Wes,$Toefl_Wes_Score);
	}
	
	
			//  Toefl_Yse Code //
	
	public function add_Toefl_Yse_Score($Toefl_Yse_Score = 0){
		$data_Toefl_Yse['Toefl_Yse_Score_ID']=$Toefl_Yse_Score;
		echo $this->load->view('admin/dropdown/step_two/add_toefl_score_yse', $data_Toefl_Yse, true);
			
	}
	
	public function update_Toefl_Yse_Score()
	{
		
		$tablename_Toefl_Yse='stu_toefl_score_yse';
		$Toefl_Yse_Score=$_REQUEST['Toefl_Yse_Score'];
		$Toefl_Yse_Score_ID=$_REQUEST['Toefl_Yse_Score_ID'];
		$ColumnEmail_Toefl_Yse='Toefl_Yse_Score_ID';
		if($_REQUEST['Toefl_Yse_Score_ID']!="")
		{
			
			
			$array_Toefl_Yse=array(
					'Toefl_Yse_Score'=>$Toefl_Yse_Score,
					'Status'=>1
				);

			$this->student_model_second->update_list($tablename_Toefl_Yse,$array_Toefl_Yse,$ColumnEmail_Toefl_Yse,$Toefl_Yse_Score_ID);	
		}else
		{
			foreach($Toefl_Yse_Score as $Data_Toefl_Yse)
			{
				if($Data_Toefl_Yse!=""){
					$array_Toefl_Yse=array(
						'Toefl_Yse_Score'=>$Data_Toefl_Yse,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($tablename_Toefl_Yse,$array_Toefl_Yse);	
				}
			}
			
		}
		
		$Toefl_Yse_Score_details=get_table_details('stu_toefl_score_yse','Toefl_Yse_Score_ID'); ?>
            
               <?php if(empty($Toefl_Yse_Score_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Toefl_Yse_Score_details as $Toefl_Yse_Score){ ?>
              <tr id="Toefl_Yse_Score_<?php echo $Toefl_Yse_Score['Toefl_Yse_Score_ID']; ?>">
                <td><?php echo $Toefl_Yse_Score['Toefl_Yse_Score_ID']; ?></td>
                <td><?php echo $Toefl_Yse_Score['Toefl_Yse_Score']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Yse_Score/<?php echo $Toefl_Yse_Score['Toefl_Yse_Score_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Toefl_Yse_Score('<?php echo $Toefl_Yse_Score['Toefl_Yse_Score_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
              <?php
              
       
		
	}
	
	public function delete_Toefl_Yse_Score()
	{
		
		$tablenm_Toefl_Yse='stu_toefl_score_yse';
		$Column_Toefl_Yse='Toefl_Yse_Score_ID';
		$Toefl_Yse_Score=$_REQUEST['Toefl_Yse_Score_ID'];
		$DeletUserInfo_Toefl_Yse= $this->student_model_second->delete_list($tablenm_Toefl_Yse,$Column_Toefl_Yse,$Toefl_Yse_Score);
	}
	
	
			//  Toefl_Yre Code //
	
	public function add_Toefl_Yre_Score($Toefl_Yre_Score = 0){
		$data_Toefl_Yre['Toefl_Yre_Score_ID']=$Toefl_Yre_Score;
		echo $this->load->view('admin/dropdown/step_two/add_toefl_score_yre', $data_Toefl_Yre, true);
			
	}
	
	public function update_Toefl_Yre_Score()
	{
		
		$tablename_Toefl_Yre='stu_toefl_score_yre';
		$Toefl_Yre_Score=$_REQUEST['Toefl_Yre_Score'];
		$Toefl_Yre_Score_ID=$_REQUEST['Toefl_Yre_Score_ID'];
		$ColumnEmail_Toefl_Yre='Toefl_Yre_Score_ID';
		if($_REQUEST['Toefl_Yre_Score_ID']!="")
		{
			
			
			$array_Toefl_Yre=array(
					'Toefl_Yre_Score'=>$Toefl_Yre_Score,
					'Status'=>1
				);

			$this->student_model_second->update_list($tablename_Toefl_Yre,$array_Toefl_Yre,$ColumnEmail_Toefl_Yre,$Toefl_Yre_Score_ID);	
		}else
		{
			foreach($Toefl_Yre_Score as $Data_Toefl_Yre)
			{
				if($Data_Toefl_Yre!=""){
					$array_Toefl_Yre=array(
						'Toefl_Yre_Score'=>$Data_Toefl_Yre,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($tablename_Toefl_Yre,$array_Toefl_Yre);	
				}
			}
			
		}
		
		$Toefl_Yre_Score_details=get_table_details('stu_toefl_score_yre','Toefl_Yre_Score_ID'); ?>
             
               <?php if(empty($Toefl_Yre_Score_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Toefl_Yre_Score_details as $Toefl_Yre_Score){ ?>
              <tr id="Toefl_Yre_Score_<?php echo $Toefl_Yre_Score['Toefl_Yre_Score_ID']; ?>">
                <td><?php echo $Toefl_Yre_Score['Toefl_Yre_Score_ID']; ?></td>
                <td><?php echo $Toefl_Yre_Score['Toefl_Yre_Score']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Yre_Score/<?php echo $Toefl_Yre_Score['Toefl_Yre_Score_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Toefl_Yre_Score('<?php echo $Toefl_Yre_Score['Toefl_Yre_Score_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
              <?php
              
       
		
	}
	
	public function delete_Toefl_Yre_Score()
	{
		
		$tablenm_Toefl_Yre='stu_toefl_score_yre';
		$Column_Toefl_Yre='Toefl_Yre_Score_ID';
		$Toefl_Yre_Score=$_REQUEST['Toefl_Yre_Score_ID'];
		$DeletUserInfo_Toefl_Yre= $this->student_model_second->delete_list($tablenm_Toefl_Yre,$Column_Toefl_Yre,$Toefl_Yre_Score);
	}
	
	
			//  Toefl_Ywe Code //
	
	public function add_Toefl_Ywe_Score($Toefl_Ywe_Score = 0){
		$data_Toefl_Ywe['Toefl_Ywe_Score_ID']=$Toefl_Ywe_Score;
		echo $this->load->view('admin/dropdown/step_two/add_toefl_score_ywe', $data_Toefl_Ywe, true);
			
	}
	
	public function update_Toefl_Ywe_Score()
	{
		
		$tablename_Toefl_Ywe='stu_toefl_score_ywe';
		$Toefl_Ywe_Score=$_REQUEST['Toefl_Ywe_Score'];
		$Toefl_Ywe_Score_ID=$_REQUEST['Toefl_Ywe_Score_ID'];
		$ColumnEmail_Toefl_Ywe='Toefl_Ywe_Score_ID';
		if($_REQUEST['Toefl_Ywe_Score_ID']!="")
		{
			
			
			$array_Toefl_Ywe=array(
					'Toefl_Ywe_Score'=>$Toefl_Ywe_Score,
					'Status'=>1
				);

			$this->student_model_second->update_list($tablename_Toefl_Ywe,$array_Toefl_Ywe,$ColumnEmail_Toefl_Ywe,$Toefl_Ywe_Score_ID);	
		}else
		{
			foreach($Toefl_Ywe_Score as $Data_Toefl_Ywe)
			{
				if($Data_Toefl_Ywe!=""){
					$array_Toefl_Ywe=array(
						'Toefl_Ywe_Score'=>$Data_Toefl_Ywe,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($tablename_Toefl_Ywe,$array_Toefl_Ywe);	
				}
			}
			
		}
		
		$Toefl_Ywe_Score_details=get_table_details('stu_toefl_score_ywe','Toefl_Ywe_Score_ID'); ?>
             
               <?php if(empty($Toefl_Ywe_Score_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Toefl_Ywe_Score_details as $Toefl_Ywe_Score){ ?>
              <tr id="Toefl_Ywe_Score_<?php echo $Toefl_Ywe_Score['Toefl_Ywe_Score_ID']; ?>">
                <td><?php echo $Toefl_Ywe_Score['Toefl_Ywe_Score_ID']; ?></td>
                <td><?php echo $Toefl_Ywe_Score['Toefl_Ywe_Score']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Ywe_Score/<?php echo $Toefl_Ywe_Score['Toefl_Ywe_Score_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Toefl_Ywe_Score('<?php echo $Toefl_Ywe_Score['Toefl_Ywe_Score_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
              <?php
              
       
		
	}
	
	public  function delete_Toefl_Ywe_Score()
	{
		
		$tablenm_Toefl_Ywe='stu_toefl_score_ywe';
		$Column_Toefl_Ywe='Toefl_Ywe_Score_ID';
		$Toefl_Ywe_Score=$_REQUEST['Toefl_Ywe_Score_ID'];
		$DeletUserInfo_Toefl_Ywe= $this->student_model_second->delete_list($tablenm_Toefl_Ywe,$Column_Toefl_Ywe,$Toefl_Ywe_Score);
	}
	
	
	
	

}

