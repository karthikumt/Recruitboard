<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Colleage_cotch_four extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('admin/dropdown/student_model');		
	}

	public function index(){	
		$data['country_list'] = "";
        $data['MainContent'] = $this->load->view('admin/dropdown/colleage_cotch_four', $data, true);		
        $this->load->view('admin/template', $data);	
	}
		
		
		// Coll_Gen Code //
	
	
	public function add_Coll_Gen($Coll_Gen=0){
		$Coll_Gen_data['Coll_GenID']=$Coll_Gen;
		echo $this->load->view('admin/dropdown/coll_coach_step_four/add_gen',$Coll_Gen_data, true);
			
	}
	
	public function update_Coll_Gen()
	{
		
		$Coll_Gen_tablename='coll_cotch_gen';
		$Coll_Gen=$_REQUEST['Coll_Gen'];
		$Coll_GenID=$_REQUEST['Coll_GenID'];
		$Coll_Gen_ColumnName='Coll_GenID';
		if($_REQUEST['Coll_GenID']!="")
		{
			$Coll_Gen_array=array(
					'Coll_GenName'=>$Coll_Gen,
					'Status'=>1
				);

			$this->student_model->update_list($Coll_Gen_tablename,$Coll_Gen_array,$Coll_Gen_ColumnName,$Coll_GenID);	
		}else
		{
			foreach($Coll_Gen as $Data_Coll_Gen)
			{
				if($Data_Coll_Gen!=""){
					$Coll_Gen_array=array(
						'Coll_GenName'=>$Data_Coll_Gen,
						'Status'=>1
					);
				
					$this->student_model->add_list($Coll_Gen_tablename,$Coll_Gen_array);	
				}
			}
			
		}
		
		$Coll_Gen_details=get_table_details('coll_cotch_gen','Coll_GenID'); ?>
               <?php if(empty($Coll_Gen_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Coll_Gen_details as $Coll_Gen){ ?>
              <tr id="Coll_Gen_<?php echo $Coll_Gen['Coll_GenID']; ?>">
                <td><?php echo $Coll_Gen['Coll_GenID']; ?></td>
                <td><?php echo $Coll_Gen['Coll_GenName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch_four/add_Coll_Gen/<?php echo $Coll_Gen['Coll_GenID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Gen('<?php echo $Coll_Gen['Coll_GenID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Coll_Gen()
	{
		
		$Coll_Gen_tablenm='coll_cotch_gen';
		$Coll_Gen_Column='Coll_GenID';
		$Coll_Gen=$_REQUEST['Coll_GenID'];
		$Coll_Gen_DeletUserInfo = $this->student_model->delete_list($Coll_Gen_tablenm,$Coll_Gen_Column,$Coll_Gen);
		
	}

		// Coll_Spo Code //
	
	
	public function add_Coll_Spo($Coll_Spo=0){
		$Coll_Spo_data['Coll_SpoID']=$Coll_Spo;
		echo $this->load->view('admin/dropdown/coll_coach_step_four/add_spo',$Coll_Spo_data, true);
			
	}
	
	public function update_Coll_Spo()
	{
		
		$Coll_Spo_tablename='coll_cotch_spo';
		$Coll_Spo=$_REQUEST['Coll_Spo'];
		$Coll_SpoID=$_REQUEST['Coll_SpoID'];
		$Coll_Spo_ColumnName='Coll_SpoID';
		if($_REQUEST['Coll_SpoID']!="")
		{
			$Coll_Spo_array=array(
					'Coll_SpoName'=>$Coll_Spo,
					'Status'=>1
				);

			$this->student_model->update_list($Coll_Spo_tablename,$Coll_Spo_array,$Coll_Spo_ColumnName,$Coll_SpoID);	
		}else
		{
			foreach($Coll_Spo as $Data_Coll_Spo)
			{
				if($Data_Coll_Spo!=""){
					$Coll_Spo_array=array(
						'Coll_SpoName'=>$Data_Coll_Spo,
						'Status'=>1
					);
				
					$this->student_model->add_list($Coll_Spo_tablename,$Coll_Spo_array);	
				}
			}
			
		}
		
		$Coll_Spo_details=get_table_details('coll_cotch_spo','Coll_SpoID'); ?>
               <?php if(empty($Coll_Spo_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Coll_Spo_details as $Coll_Spo){ ?>
              <tr id="Coll_Spo_<?php echo $Coll_Spo['Coll_SpoID']; ?>">
                <td><?php echo $Coll_Spo['Coll_SpoID']; ?></td>
                <td><?php echo $Coll_Spo['Coll_SpoName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch_four/add_Coll_Spo/<?php echo $Coll_Spo['Coll_SpoID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Spo('<?php echo $Coll_Spo['Coll_SpoID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Coll_Spo()
	{
		
		$Coll_Spo_tablenm='coll_cotch_spo';
		$Coll_Spo_Column='Coll_SpoID';
		$Coll_Spo=$_REQUEST['Coll_SpoID'];
		$Coll_Spo_DeletUserInfo = $this->student_model->delete_list($Coll_Spo_tablenm,$Coll_Spo_Column,$Coll_Spo);
		
	}

	
		// Coll_Min_Height Code //
	
	
	public function add_Coll_Min_Height($Coll_Min_Height=0){
		$Coll_Min_Height_data['Coll_Min_HeightID']=$Coll_Min_Height;
		echo $this->load->view('admin/dropdown/coll_coach_step_four/add_min_height',$Coll_Min_Height_data, true);
			
	}
	
	public function update_Coll_Min_Height()
	{
		
		$Coll_Min_Height_tablename='coll_cotch_min_height';
		$Coll_Min_Height=$_REQUEST['Coll_Min_Height'];
		$Coll_Min_HeightID=$_REQUEST['Coll_Min_HeightID'];
		$Coll_Min_Height_ColumnName='Coll_Min_HeightID';
		if($_REQUEST['Coll_Min_HeightID']!="")
		{
			$Coll_Min_Height_array=array(
					'Coll_Min_HeightName'=>$Coll_Min_Height,
					'Status'=>1
				);

			$this->student_model->update_list($Coll_Min_Height_tablename,$Coll_Min_Height_array,$Coll_Min_Height_ColumnName,$Coll_Min_HeightID);	
		}else
		{
			foreach($Coll_Min_Height as $Data_Coll_Min_Height)
			{
				if($Data_Coll_Min_Height!=""){
					$Coll_Min_Height_array=array(
						'Coll_Min_HeightName'=>$Data_Coll_Min_Height,
						'Status'=>1
					);
				
					$this->student_model->add_list($Coll_Min_Height_tablename,$Coll_Min_Height_array);	
				}
			}
			
		}
		
		$Coll_Min_Height_details=get_table_details('coll_cotch_min_height','Coll_Min_HeightID'); ?>
               <?php if(empty($Coll_Min_Height_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Coll_Min_Height_details as $Coll_Min_Height){ ?>
              <tr id="Coll_Min_Height_<?php echo $Coll_Min_Height['Coll_Min_HeightID']; ?>">
                <td><?php echo $Coll_Min_Height['Coll_Min_HeightID']; ?></td>
                <td><?php echo $Coll_Min_Height['Coll_Min_HeightName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch_four/add_Coll_Min_Height/<?php echo $Coll_Min_Height['Coll_Min_HeightID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Min_Height('<?php echo $Coll_Min_Height['Coll_Min_HeightID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Coll_Min_Height()
	{
		
		$Coll_Min_Height_tablenm='coll_cotch_min_height';
		$Coll_Min_Height_Column='Coll_Min_HeightID';
		$Coll_Min_Height=$_REQUEST['Coll_Min_HeightID'];
		$Coll_Min_Height_DeletUserInfo = $this->student_model->delete_list($Coll_Min_Height_tablenm,$Coll_Min_Height_Column,$Coll_Min_Height);
		
	}

	//Coll_Min_Height Inche///
	
	
	public function add_Coll_Min_HeightInche($Coll_Min_HeightInche=0){
		$Coll_Min_HeightInche_data['Coll_Min_HeightIncheID']=$Coll_Min_HeightInche;
		echo $this->load->view('admin/dropdown/coll_coach_step_four/add_min_heightinche',$Coll_Min_HeightInche_data, true);
			
	}
	
	public function update_Coll_Min_HeightInche()
	{
		
		$Coll_Min_HeightInche_tablename='coll_cotch_min_heightinche';
		$Coll_Min_HeightInche=$_REQUEST['Coll_Min_HeightInche'];
		$Coll_Min_HeightIncheID=$_REQUEST['Coll_Min_HeightIncheID'];
		$Coll_Min_HeightInche_ColumnName='Coll_Min_HeightIncheID';
		if($_REQUEST['Coll_Min_HeightIncheID']!="")
		{
			$Coll_Min_HeightInche_array=array(
					'Coll_Min_HeightIncheName'=>$Coll_Min_HeightInche,
					'Status'=>1
				);

			$this->student_model->update_list($Coll_Min_HeightInche_tablename,$Coll_Min_HeightInche_array,$Coll_Min_HeightInche_ColumnName,$Coll_Min_HeightIncheID);	
		}else
		{
			foreach($Coll_Min_HeightInche as $Data_Coll_Min_HeightInche)
			{
				if($Data_Coll_Min_HeightInche!=""){
					$Coll_Min_HeightInche_array=array(
						'Coll_Min_HeightIncheName'=>$Data_Coll_Min_HeightInche,
						'Status'=>1
					);
				
					$this->student_model->add_list($Coll_Min_HeightInche_tablename,$Coll_Min_HeightInche_array);	
				}
			}
			
		}
		
		$Coll_Min_HeightInche_details=get_table_details('coll_cotch_min_heightinche','Coll_Min_HeightIncheID'); ?>
               <?php if(empty($Coll_Min_HeightInche_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Coll_Min_HeightInche_details as $Coll_Min_HeightInche){ ?>
              <tr id="Coll_Min_HeightInche_<?php echo $Coll_Min_HeightInche['Coll_Min_HeightIncheID']; ?>">
                <td><?php echo $Coll_Min_HeightInche['Coll_Min_HeightIncheID']; ?></td>
                <td><?php echo $Coll_Min_HeightInche['Coll_Min_HeightIncheName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch_four/add_Coll_Min_HeightInche/<?php echo $Coll_Min_HeightInche['Coll_Min_HeightIncheID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Min_HeightInche('<?php echo $Coll_Min_HeightInche['Coll_Min_HeightIncheID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Coll_Min_HeightInche()
	{
		
		$Coll_Min_HeightInche_tablenm='coll_cotch_min_heightinche';
		$Coll_Min_HeightInche_Column='Coll_Min_HeightIncheID';
		$Coll_Min_HeightInche=$_REQUEST['Coll_Min_HeightIncheID'];
		$Coll_Min_HeightInche_DeletUserInfo = $this->student_model->delete_list($Coll_Min_HeightInche_tablenm,$Coll_Min_HeightInche_Column,$Coll_Min_HeightInche);
		
	}




	// Coll_Min_Gpa Code //
	


	public function add_Coll_Min_Gpa($Coll_Min_Gpa=0){
		$Coll_Min_Gpa_data['Coll_Min_GpaID']=$Coll_Min_Gpa;
		echo $this->load->view('admin/dropdown/coll_coach_step_four/add_min_gpa',$Coll_Min_Gpa_data, true);
			
	}
	
	public function update_Coll_Min_Gpa()
	{
		
		$Coll_Min_Gpa_tablename='coll_cotch_min_gpa';
		$Coll_Min_Gpa=$_REQUEST['Coll_Min_Gpa'];
		$Coll_Min_GpaID=$_REQUEST['Coll_Min_GpaID'];
		$Coll_Min_Gpa_ColumnName='Coll_Min_GpaID';
		if($_REQUEST['Coll_Min_GpaID']!="")
		{
			$Coll_Min_Gpa_array=array(
					'Coll_Min_GpaName'=>$Coll_Min_Gpa,
					'Status'=>1
				);

			$this->student_model->update_list($Coll_Min_Gpa_tablename,$Coll_Min_Gpa_array,$Coll_Min_Gpa_ColumnName,$Coll_Min_GpaID);	
		}else
		{
			foreach($Coll_Min_Gpa as $Data_Coll_Min_Gpa)
			{
				if($Data_Coll_Min_Gpa!=""){
					$Coll_Min_Gpa_array=array(
						'Coll_Min_GpaName'=>$Data_Coll_Min_Gpa,
						'Status'=>1
					);
				
					$this->student_model->add_list($Coll_Min_Gpa_tablename,$Coll_Min_Gpa_array);	
				}
			}
			
		}
		
		$Coll_Min_Gpa_details=get_table_details('coll_cotch_min_gpa','Coll_Min_GpaID'); ?>
               <?php if(empty($Coll_Min_Gpa_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Coll_Min_Gpa_details as $Coll_Min_Gpa){ ?>
              <tr id="Coll_Min_Gpa_<?php echo $Coll_Min_Gpa['Coll_Min_GpaID']; ?>">
                <td><?php echo $Coll_Min_Gpa['Coll_Min_GpaID']; ?></td>
                <td><?php echo $Coll_Min_Gpa['Coll_Min_GpaName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch_four/add_Coll_Min_Gpa/<?php echo $Coll_Min_Gpa['Coll_Min_GpaID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Min_Gpa('<?php echo $Coll_Min_Gpa['Coll_Min_GpaID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Coll_Min_Gpa()
	{
		
		$Coll_Min_Gpa_tablenm='coll_cotch_min_gpa';
		$Coll_Min_Gpa_Column='Coll_Min_GpaID';
		$Coll_Min_Gpa=$_REQUEST['Coll_Min_GpaID'];
		$Coll_Min_Gpa_DeletUserInfo = $this->student_model->delete_list($Coll_Min_Gpa_tablenm,$Coll_Min_Gpa_Column,$Coll_Min_Gpa);
		
	}














	// Coll_Max_Height Code //
	
	
	public function add_Coll_Max_Height($Coll_Max_Height=0){
		$Coll_Max_Height_data['Coll_Max_HeightID']=$Coll_Max_Height;
		echo $this->load->view('admin/dropdown/coll_coach_step_four/add_max_height',$Coll_Max_Height_data, true);
			
	}
	
	public function update_Coll_Max_Height()
	{
		
		$Coll_Max_Height_tablename='coll_cotch_max_height';
		$Coll_Max_Height=$_REQUEST['Coll_Max_Height'];
		$Coll_Max_HeightID=$_REQUEST['Coll_Max_HeightID'];
		$Coll_Max_Height_ColumnName='Coll_Max_HeightID';
		if($_REQUEST['Coll_Max_HeightID']!="")
		{
			$Coll_Max_Height_array=array(
					'Coll_Max_HeightName'=>$Coll_Max_Height,
					'Status'=>1
				);

			$this->student_model->update_list($Coll_Max_Height_tablename,$Coll_Max_Height_array,$Coll_Max_Height_ColumnName,$Coll_Max_HeightID);	
		}else
		{
			foreach($Coll_Max_Height as $Data_Coll_Max_Height)
			{
				if($Data_Coll_Max_Height!=""){
					$Coll_Max_Height_array=array(
						'Coll_Max_HeightName'=>$Data_Coll_Max_Height,
						'Status'=>1
					);
				
					$this->student_model->add_list($Coll_Max_Height_tablename,$Coll_Max_Height_array);	
				}
			}
			
		}
		
		$Coll_Max_Height_details=get_table_details('coll_cotch_max_height','Coll_Max_HeightID'); ?>
               <?php if(empty($Coll_Max_Height_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Coll_Max_Height_details as $Coll_Max_Height){ ?>
              <tr id="Coll_Max_Height_<?php echo $Coll_Max_Height['Coll_Max_HeightID']; ?>">
                <td><?php echo $Coll_Max_Height['Coll_Max_HeightID']; ?></td>
                <td><?php echo $Coll_Max_Height['Coll_Max_HeightName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch_four/add_Coll_Max_Height/<?php echo $Coll_Max_Height['Coll_Max_HeightID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Max_Height('<?php echo $Coll_Max_Height['Coll_Max_HeightID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Coll_Max_Height()
	{
		
		$Coll_Max_Height_tablenm='coll_cotch_max_height';
		$Coll_Max_Height_Column='Coll_Max_HeightID';
		$Coll_Max_Height=$_REQUEST['Coll_Max_HeightID'];
		$Coll_Max_Height_DeletUserInfo = $this->student_model->delete_list($Coll_Max_Height_tablenm,$Coll_Max_Height_Column,$Coll_Max_Height);
		
	}

	
	

}

