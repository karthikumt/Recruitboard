<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Colleage_cotch_two extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('admin/dropdown/student_model');		
	}

	public function index(){	
		$data['country_list'] = "";
        $data['MainContent'] = $this->load->view('admin/dropdown/colleage_cotch_two', $data, true);		
        $this->load->view('admin/template', $data);	
	}
		// Coll_Division Code //
	
	
	public function add_Coll_Division($Coll_Division=0){
		$Coll_Division_data['Coll_DivisionID']=$Coll_Division;
		echo $this->load->view('admin/dropdown/coll_coach_step_two/add_division',$Coll_Division_data, true);
			
	}
	
	public function update_Coll_Division()
	{
		
		$Coll_Division_tablename='coll_cotch_division';
		$Coll_Division=$_REQUEST['Coll_Division'];
		$Coll_DivisionID=$_REQUEST['Coll_DivisionID'];
		$Coll_Division_ColumnName='Coll_DivisionID';
		if($_REQUEST['Coll_DivisionID']!="")
		{
			$Coll_Division_array=array(
					'Coll_DivisionName'=>$Coll_Division,
					'Status'=>1
				);

			$this->student_model->update_list($Coll_Division_tablename,$Coll_Division_array,$Coll_Division_ColumnName,$Coll_DivisionID);	
		}else
		{
			foreach($Coll_Division as $Data_Coll_Division)
			{
				if($Data_Coll_Division!=""){
					$Coll_Division_array=array(
						'Coll_DivisionName'=>$Data_Coll_Division,
						'Status'=>1
					);
				
					$this->student_model->add_list($Coll_Division_tablename,$Coll_Division_array);	
				}
			}
			
		}
		
		$Coll_Division_details=get_table_details('coll_cotch_division','Coll_DivisionID'); ?>
               <?php if(empty($Coll_Division_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Coll_Division_details as $Coll_Division){ ?>
              <tr id="Coll_Division_<?php echo $Coll_Division['Coll_DivisionID']; ?>">
                <td><?php echo $Coll_Division['Coll_DivisionID']; ?></td>
                <td><?php echo $Coll_Division['Coll_DivisionName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch_two/add_Coll_Division/<?php echo $Coll_Division['Coll_DivisionID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Division('<?php echo $Coll_Division['Coll_DivisionID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Coll_Division()
	{
		
		$Coll_Division_tablenm='coll_cotch_division';
		$Coll_Division_Column='Coll_DivisionID';
		$Coll_Division=$_REQUEST['Coll_DivisionID'];
		$Coll_Division_DeletUserInfo = $this->student_model->delete_list($Coll_Division_tablenm,$Coll_Division_Column,$Coll_Division);
		
	}

		public function add_Coll_Program($Coll_Program=0){
		$Coll_Program_data['Coll_ProgramID']=$Coll_Program;
		echo $this->load->view('admin/dropdown/coll_coach_step_two/add_program',$Coll_Program_data, true);
			
	}
	
	public function update_Coll_Program()
	{
		
		$Coll_Program_tablename='coll_cotch_program';
		$Coll_Program=$_REQUEST['Coll_Program'];
		$Coll_ProgramID=$_REQUEST['Coll_ProgramID'];
		$Coll_Program_ColumnName='Coll_ProgramID';
		if($_REQUEST['Coll_ProgramID']!="")
		{
			$Coll_Program_array=array(
					'Coll_ProgramName'=>$Coll_Program,
					'Status'=>1
				);

			$this->student_model->update_list($Coll_Program_tablename,$Coll_Program_array,$Coll_Program_ColumnName,$Coll_ProgramID);	
		}else
		{
			foreach($Coll_Program as $Data_Coll_Program)
			{
				if($Data_Coll_Program!=""){
					$Coll_Program_array=array(
						'Coll_ProgramName'=>$Data_Coll_Program,
						'Status'=>1
					);
				
					$this->student_model->add_list($Coll_Program_tablename,$Coll_Program_array);	
				}
			}
			
		}
		
		$Coll_Program_details=get_table_details('coll_cotch_program','Coll_ProgramID'); ?>
               <?php if(empty($Coll_Program_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Coll_Program_details as $Coll_Program){ ?>
              <tr id="Coll_Program_<?php echo $Coll_Program['Coll_ProgramID']; ?>">
                <td><?php echo $Coll_Program['Coll_ProgramID']; ?></td>
                <td><?php echo $Coll_Program['Coll_ProgramName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch_two/add_Coll_Program/<?php echo $Coll_Program['Coll_ProgramID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Program('<?php echo $Coll_Program['Coll_ProgramID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Coll_Program()
	{
		
		$Coll_Program_tablenm='coll_cotch_program';
		$Coll_Program_Column='Coll_ProgramID';
		$Coll_Program=$_REQUEST['Coll_ProgramID'];
		$Coll_Program_DeletUserInfo = $this->student_model->delete_list($Coll_Program_tablenm,$Coll_Program_Column,$Coll_Program);
		
	}

	
		public function add_Coll_Playoff($Coll_Playoff=0){
		$Coll_Playoff_data['Coll_PlayoffID']=$Coll_Playoff;
		echo $this->load->view('admin/dropdown/coll_coach_step_two/add_playoff',$Coll_Playoff_data, true);
			
	}
	
	public function update_Coll_Playoff()
	{
		
		$Coll_Playoff_tablename='coll_cotch_playoff';
		$Coll_Playoff=$_REQUEST['Coll_Playoff'];
		$Coll_PlayoffID=$_REQUEST['Coll_PlayoffID'];
		$Coll_Playoff_ColumnName='Coll_PlayoffID';
		if($_REQUEST['Coll_PlayoffID']!="")
		{
			$Coll_Playoff_array=array(
					'Coll_PlayoffName'=>$Coll_Playoff,
					'Status'=>1
				);

			$this->student_model->update_list($Coll_Playoff_tablename,$Coll_Playoff_array,$Coll_Playoff_ColumnName,$Coll_PlayoffID);	
		}else
		{
			foreach($Coll_Playoff as $Data_Coll_Playoff)
			{
				if($Data_Coll_Playoff!=""){
					$Coll_Playoff_array=array(
						'Coll_PlayoffName'=>$Data_Coll_Playoff,
						'Status'=>1
					);
				
					$this->student_model->add_list($Coll_Playoff_tablename,$Coll_Playoff_array);	
				}
			}
			
		}
		
		$Coll_Playoff_details=get_table_details('coll_cotch_playoff','Coll_PlayoffID'); ?>
               <?php if(empty($Coll_Playoff_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Coll_Playoff_details as $Coll_Playoff){ ?>
              <tr id="Coll_Playoff_<?php echo $Coll_Playoff['Coll_PlayoffID']; ?>">
                <td><?php echo $Coll_Playoff['Coll_PlayoffID']; ?></td>
                <td><?php echo $Coll_Playoff['Coll_PlayoffName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch_two/add_Coll_Playoff/<?php echo $Coll_Playoff['Coll_PlayoffID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Playoff('<?php echo $Coll_Playoff['Coll_PlayoffID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Coll_Playoff()
	{
		
		$Coll_Playoff_tablenm='coll_cotch_playoff';
		$Coll_Playoff_Column='Coll_PlayoffID';
		$Coll_Playoff=$_REQUEST['Coll_PlayoffID'];
		$Coll_Playoff_DeletUserInfo = $this->student_model->delete_list($Coll_Playoff_tablenm,$Coll_Playoff_Column,$Coll_Playoff);
		
	}

	
		public function add_Coll_Team($Coll_Team=0){
		$Coll_Team_data['Coll_TeamID']=$Coll_Team;
		echo $this->load->view('admin/dropdown/coll_coach_step_two/add_team',$Coll_Team_data, true);
			
	}
	
	public function update_Coll_Team()
	{
		
		$Coll_Team_tablename='coll_cotch_team';
		$Coll_Team=$_REQUEST['Coll_Team'];
		$Coll_TeamID=$_REQUEST['Coll_TeamID'];
		$Coll_Team_ColumnName='Coll_TeamID';
		if($_REQUEST['Coll_TeamID']!="")
		{
			$Coll_Team_array=array(
					'Coll_TeamName'=>$Coll_Team,
					'Status'=>1
				);

			$this->student_model->update_list($Coll_Team_tablename,$Coll_Team_array,$Coll_Team_ColumnName,$Coll_TeamID);	
		}else
		{
			foreach($Coll_Team as $Data_Coll_Team)
			{
				if($Data_Coll_Team!=""){
					$Coll_Team_array=array(
						'Coll_TeamName'=>$Data_Coll_Team,
						'Status'=>1
					);
				
					$this->student_model->add_list($Coll_Team_tablename,$Coll_Team_array);	
				}
			}
			
		}
		
		$Coll_Team_details=get_table_details('coll_cotch_team','Coll_TeamID'); ?>
               <?php if(empty($Coll_Team_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Coll_Team_details as $Coll_Team){ ?>
              <tr id="Coll_Team_<?php echo $Coll_Team['Coll_TeamID']; ?>">
                <td><?php echo $Coll_Team['Coll_TeamID']; ?></td>
                <td><?php echo $Coll_Team['Coll_TeamName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch_two/add_Coll_Team/<?php echo $Coll_Team['Coll_TeamID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Team('<?php echo $Coll_Team['Coll_TeamID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Coll_Team()
	{
		
		$Coll_Team_tablenm='coll_cotch_team';
		$Coll_Team_Column='Coll_TeamID';
		$Coll_Team=$_REQUEST['Coll_TeamID'];
		$Coll_Team_DeletUserInfo = $this->student_model->delete_list($Coll_Team_tablenm,$Coll_Team_Column,$Coll_Team);
		
	}

	
	

}

