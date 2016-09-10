<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_athlete_six extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('admin/dropdown/student_model_second');		
	}

	public function index(){	
		$data['country_list'] = "";
        $data['MainContent'] = $this->load->view('admin/dropdown/student_athlete_six', $data, true);		
        $this->load->view('admin/template', $data);	
	}
	
	
	
	// Primary Position Code //
	
	
	public function add_Position($Position=0){
		$Position_data['PositionID']=$Position;
		echo $this->load->view('admin/dropdown/step_six/add_Position', $Position_data, true);
			
	}
	
	public function update_Position()
	{
		
		$Position_tablename='stu_Primary_Position';
		$Position=$_REQUEST['Position'];
		$PositionID=$_REQUEST['PositionID'];
		$Position_ColumnName='PositionID';
		if($_REQUEST['PositionID']!="")
		{
			$Position_array=array(
					'PositionName'=>$Position,
					'Status'=>1
				);

			$this->student_model_second->update_list($Position_tablename,$Position_array,$Position_ColumnName,$PositionID);	
		}else
		{
			foreach($Position as $Data_Position)
			{
				if($Data_Position!=""){
					$Position_array=array(
						'PositionName'=>$Data_Position,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($Position_tablename,$Position_array);	
				}
			}
			
		}
		
		$Position_details=get_table_details('stu_Primary_Position','PositionID'); ?>
               <?php if(empty($Position_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Position_details as $Position){ ?>
              <tr id="Position_<?php echo $Position['PositionID']; ?>">
                <td><?php echo $Position['PositionID']; ?></td>
                <td><?php echo $Position['PositionName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Position/<?php echo $Position['PositionID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Position('<?php echo $Position['PositionID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Position()
	{
		
		$Position_tablenm='stu_Primary_Position';
		$Position_Column='PositionID';
		$Position=$_REQUEST['PositionID'];
		$Position_DeletUserInfo = $this->student_model_second->delete_list($Position_tablenm,$Position_Column,$Position);
		
	}
	
	// Primary Throws Code //
	
	
	public function add_Throws($Throws=0){
		$Throws_data['ThrowsID']=$Throws;
		echo $this->load->view('admin/dropdown/step_six/add_Throws', $Throws_data, true);
			
	}
	
	public function update_Throws()
	{
		
		$Throws_tablename='stu_Primary_Throws';
		$Throws=$_REQUEST['Throws'];
		$ThrowsID=$_REQUEST['ThrowsID'];
		$Throws_ColumnName='ThrowsID';
		if($_REQUEST['ThrowsID']!="")
		{
			$Throws_array=array(
					'ThrowsName'=>$Throws,
					'Status'=>1
				);

			$this->student_model_second->update_list($Throws_tablename,$Throws_array,$Throws_ColumnName,$ThrowsID);	
		}else
		{
			foreach($Throws as $Data_Throws)
			{
				if($Data_Throws!=""){
					$Throws_array=array(
						'ThrowsName'=>$Data_Throws,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($Throws_tablename,$Throws_array);	
				}
			}
			
		}
		
		$Throws_details=get_table_details('stu_Primary_Throws','ThrowsID'); ?>
               <?php if(empty($Throws_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Throws_details as $Throws){ ?>
              <tr id="Throws_<?php echo $Throws['ThrowsID']; ?>">
                <td><?php echo $Throws['ThrowsID']; ?></td>
                <td><?php echo $Throws['ThrowsName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Throws/<?php echo $Throws['ThrowsID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Throws('<?php echo $Throws['ThrowsID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Throws()
	{
		
		$Throws_tablenm='stu_Primary_Throws';
		$Throws_Column='ThrowsID';
		$Throws=$_REQUEST['ThrowsID'];
		$Throws_DeletUserInfo = $this->student_model_second->delete_list($Throws_tablenm,$Throws_Column,$Throws);
		
	}
	
	// Primary Bats Code //
	
	
	public function add_Bats($Bats=0){
		$Bats_data['BatsID']=$Bats;
		echo $this->load->view('admin/dropdown/step_six/add_Bats', $Bats_data, true);
			
	}
	
	public function update_Bats()
	{
		
		$Bats_tablename='stu_Primary_Bats';
		$Bats=$_REQUEST['Bats'];
		$BatsID=$_REQUEST['BatsID'];
		$Bats_ColumnName='BatsID';
		if($_REQUEST['BatsID']!="")
		{
			$Bats_array=array(
					'BatsName'=>$Bats,
					'Status'=>1
				);

			$this->student_model_second->update_list($Bats_tablename,$Bats_array,$Bats_ColumnName,$BatsID);	
		}else
		{
			foreach($Bats as $Data_Bats)
			{
				if($Data_Bats!=""){
					$Bats_array=array(
						'BatsName'=>$Data_Bats,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($Bats_tablename,$Bats_array);	
				}
			}
			
		}
		
		$Bats_details=get_table_details('stu_Primary_Bats','BatsID'); ?>
               <?php if(empty($Bats_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Bats_details as $Bats){ ?>
              <tr id="Bats_<?php echo $Bats['BatsID']; ?>">
                <td><?php echo $Bats['BatsID']; ?></td>
                <td><?php echo $Bats['BatsName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Bats/<?php echo $Bats['BatsID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Bats('<?php echo $Bats['BatsID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Bats()
	{
		
		$Bats_tablenm='stu_Primary_Bats';
		$Bats_Column='BatsID';
		$Bats=$_REQUEST['BatsID'];
		$Bats_DeletUserInfo = $this->student_model_second->delete_list($Bats_tablenm,$Bats_Column,$Bats);
		
	}
	
	
	// Pitching Era Code //
	
	
	public function add_Era($Era=0){
		$Era_data['EraID']=$Era;
		echo $this->load->view('admin/dropdown/step_six/add_Pitching_Era', $Era_data, true);
			
	}
	
	public function update_Era()
	{
		
		$Era_tablename='stu_Pitching_Era';
		$Era=$_REQUEST['Era'];
		$EraID=$_REQUEST['EraID'];
		$Era_ColumnName='EraID';
		if($_REQUEST['EraID']!="")
		{
			$Era_array=array(
					'EraName'=>$Era,
					'Status'=>1
				);

			$this->student_model_second->update_list($Era_tablename,$Era_array,$Era_ColumnName,$EraID);	
		}else
		{
			foreach($Era as $Data_Era)
			{
				if($Data_Era!=""){
					$Era_array=array(
						'EraName'=>$Data_Era,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($Era_tablename,$Era_array);	
				}
			}
			
		}
		
		$Era_details=get_table_details('stu_Pitching_Era','EraID'); ?>
               <?php if(empty($Era_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Era_details as $Era){ ?>
              <tr id="Era_<?php echo $Era['EraID']; ?>">
                <td><?php echo $Era['EraID']; ?></td>
                <td><?php echo $Era['EraName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Era/<?php echo $Era['EraID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Era('<?php echo $Era['EraID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Era()
	{
		
		$Era_tablenm='stu_Pitching_Era';
		$Era_Column='EraID';
		$Era=$_REQUEST['EraID'];
		$Era_DeletUserInfo = $this->student_model_second->delete_list($Era_tablenm,$Era_Column,$Era);
		
	}
	
	// Pitching Win/loss_Record Code //
	
	
	public function add_Winloss_Rec($Winloss_Rec=0){
		$Winloss_Rec_data['Winloss_RecID']=$Winloss_Rec;
		echo $this->load->view('admin/dropdown/step_six/add_Pitching_Winloss_Rec', $Winloss_Rec_data, true);
			
	}
	
	public function update_Winloss_Rec()
	{
		
		$Winloss_Rec_tablename='stu_Pitching_Winloss_Rec';
		$Winloss_Rec=$_REQUEST['Winloss_Rec'];
		$Winloss_RecID=$_REQUEST['Winloss_RecID'];
		$Winloss_Rec_ColumnName='Winloss_RecID';
		if($_REQUEST['Winloss_RecID']!="")
		{
			$Winloss_Rec_array=array(
					'Winloss_RecName'=>$Winloss_Rec,
					'Status'=>1
				);

			$this->student_model_second->update_list($Winloss_Rec_tablename,$Winloss_Rec_array,$Winloss_Rec_ColumnName,$Winloss_RecID);	
		}else
		{
			foreach($Winloss_Rec as $Data_Winloss_Rec)
			{
				if($Data_Winloss_Rec!=""){
					$Winloss_Rec_array=array(
						'Winloss_RecName'=>$Data_Winloss_Rec,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($Winloss_Rec_tablename,$Winloss_Rec_array);	
				}
			}
			
		}
		
		$Winloss_Rec_details=get_table_details('stu_Pitching_Winloss_Rec','Winloss_RecID'); ?>
               <?php if(empty($Winloss_Rec_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Winloss_Rec_details as $Winloss_Rec){ ?>
              <tr id="Winloss_Rec_<?php echo $Winloss_Rec['Winloss_RecID']; ?>">
                <td><?php echo $Winloss_Rec['Winloss_RecID']; ?></td>
                <td><?php echo $Winloss_Rec['Winloss_RecName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Winloss_Rec/<?php echo $Winloss_Rec['Winloss_RecID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Winloss_Rec('<?php echo $Winloss_Rec['Winloss_RecID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Winloss_Rec()
	{
		
		$Winloss_Rec_tablenm='stu_Pitching_Winloss_Rec';
		$Winloss_Rec_Column='Winloss_RecID';
		$Winloss_Rec=$_REQUEST['Winloss_RecID'];
		$Winloss_Rec_DeletUserInfo = $this->student_model_second->delete_list($Winloss_Rec_tablenm,$Winloss_Rec_Column,$Winloss_Rec);
		
	}
	
	// Pitching Primary_Pitch Code //
	
	
	public function add_Primary_Pitch($Primary_Pitch=0){
		$Primary_Pitch_data['Primary_PitchID']=$Primary_Pitch;
		echo $this->load->view('admin/dropdown/step_six/add_Pitching_Primary_Pitch', $Primary_Pitch_data, true);
			
	}
	
	public function update_Primary_Pitch()
	{
		
		$Primary_Pitch_tablename='stu_Pitching_Primary_Pitch';
		$Primary_Pitch=$_REQUEST['Primary_Pitch'];
		$Primary_PitchID=$_REQUEST['Primary_PitchID'];
		$Primary_Pitch_ColumnName='Primary_PitchID';
		if($_REQUEST['Primary_PitchID']!="")
		{
			$Primary_Pitch_array=array(
					'Primary_PitchName'=>$Primary_Pitch,
					'Status'=>1
				);

			$this->student_model_second->update_list($Primary_Pitch_tablename,$Primary_Pitch_array,$Primary_Pitch_ColumnName,$Primary_PitchID);	
		}else
		{
			foreach($Primary_Pitch as $Data_Primary_Pitch)
			{
				if($Data_Primary_Pitch!=""){
					$Primary_Pitch_array=array(
						'Primary_PitchName'=>$Data_Primary_Pitch,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($Primary_Pitch_tablename,$Primary_Pitch_array);	
				}
			}
			
		}
		
		$Primary_Pitch_details=get_table_details('stu_Pitching_Primary_Pitch','Primary_PitchID'); ?>
               <?php if(empty($Primary_Pitch_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Primary_Pitch_details as $Primary_Pitch){ ?>
              <tr id="Primary_Pitch_<?php echo $Primary_Pitch['Primary_PitchID']; ?>">
                <td><?php echo $Primary_Pitch['Primary_PitchID']; ?></td>
                <td><?php echo $Primary_Pitch['Primary_PitchName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Primary_Pitch/<?php echo $Primary_Pitch['Primary_PitchID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Primary_Pitch('<?php echo $Primary_Pitch['Primary_PitchID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Primary_Pitch()
	{
		
		$Primary_Pitch_tablenm='stu_Pitching_Primary_Pitch';
		$Primary_Pitch_Column='Primary_PitchID';
		$Primary_Pitch=$_REQUEST['Primary_PitchID'];
		$Primary_Pitch_DeletUserInfo = $this->student_model_second->delete_list($Primary_Pitch_tablenm,$Primary_Pitch_Column,$Primary_Pitch);
		
	}
	
	// Pitching Secondary_Pitch Code //
	
	
	public function add_Secondary_Pitch($Secondary_Pitch=0){
		$Secondary_Pitch_data['Secondary_PitchID']=$Secondary_Pitch;
		echo $this->load->view('admin/dropdown/step_six/add_Pitching_Secondary_Pitch', $Secondary_Pitch_data, true);
			
	}
	
	public function update_Secondary_Pitch()
	{
		
		$Secondary_Pitch_tablename='stu_Pitching_Secondary_Pitch';
		$Secondary_Pitch=$_REQUEST['Secondary_Pitch'];
		$Secondary_PitchID=$_REQUEST['Secondary_PitchID'];
		$Secondary_Pitch_ColumnName='Secondary_PitchID';
		if($_REQUEST['Secondary_PitchID']!="")
		{
			$Secondary_Pitch_array=array(
					'Secondary_PitchName'=>$Secondary_Pitch,
					'Status'=>1
				);

			$this->student_model_second->update_list($Secondary_Pitch_tablename,$Secondary_Pitch_array,$Secondary_Pitch_ColumnName,$Secondary_PitchID);	
		}else
		{
			foreach($Secondary_Pitch as $Data_Secondary_Pitch)
			{
				if($Data_Secondary_Pitch!=""){
					$Secondary_Pitch_array=array(
						'Secondary_PitchName'=>$Data_Secondary_Pitch,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($Secondary_Pitch_tablename,$Secondary_Pitch_array);	
				}
			}
			
		}
		
		$Secondary_Pitch_details=get_table_details('stu_Pitching_Secondary_Pitch','Secondary_PitchID'); ?>
               <?php if(empty($Secondary_Pitch_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Secondary_Pitch_details as $Secondary_Pitch){ ?>
              <tr id="Secondary_Pitch_<?php echo $Secondary_Pitch['Secondary_PitchID']; ?>">
                <td><?php echo $Secondary_Pitch['Secondary_PitchID']; ?></td>
                <td><?php echo $Secondary_Pitch['Secondary_PitchName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Secondary_Pitch/<?php echo $Secondary_Pitch['Secondary_PitchID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Secondary_Pitch('<?php echo $Secondary_Pitch['Secondary_PitchID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Secondary_Pitch()
	{
		
		$Secondary_Pitch_tablenm='stu_Pitching_Secondary_Pitch';
		$Secondary_Pitch_Column='Secondary_PitchID';
		$Secondary_Pitch=$_REQUEST['Secondary_PitchID'];
		$Secondary_Pitch_DeletUserInfo = $this->student_model_second->delete_list($Secondary_Pitch_tablenm,$Secondary_Pitch_Column,$Secondary_Pitch);
		
	}
	
	// Pitching Fastball Code //
	
	
	public function add_Fastball($Fastball=0){
		$Fastball_data['FastballID']=$Fastball;
		echo $this->load->view('admin/dropdown/step_six/add_Pitching_Fastball', $Fastball_data, true);
			
	}
	
	public function update_Fastball()
	{
		
		$Fastball_tablename='stu_Pitching_Fastball';
		$Fastball=$_REQUEST['Fastball'];
		$FastballID=$_REQUEST['FastballID'];
		$Fastball_ColumnName='FastballID';
		if($_REQUEST['FastballID']!="")
		{
			$Fastball_array=array(
					'FastballName'=>$Fastball,
					'Status'=>1
				);

			$this->student_model_second->update_list($Fastball_tablename,$Fastball_array,$Fastball_ColumnName,$FastballID);	
		}else
		{
			foreach($Fastball as $Data_Fastball)
			{
				if($Data_Fastball!=""){
					$Fastball_array=array(
						'FastballName'=>$Data_Fastball,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($Fastball_tablename,$Fastball_array);	
				}
			}
			
		}
		
		$Fastball_details=get_table_details('stu_Pitching_Fastball','FastballID'); ?>
               <?php if(empty($Fastball_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Fastball_details as $Fastball){ ?>
              <tr id="Fastball_<?php echo $Fastball['FastballID']; ?>">
                <td><?php echo $Fastball['FastballID']; ?></td>
                <td><?php echo $Fastball['FastballName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Fastball/<?php echo $Fastball['FastballID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Fastball('<?php echo $Fastball['FastballID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Fastball()
	{
		
		$Fastball_tablenm='stu_Pitching_Fastball';
		$Fastball_Column='FastballID';
		$Fastball=$_REQUEST['FastballID'];
		$Fastball_DeletUserInfo = $this->student_model_second->delete_list($Fastball_tablenm,$Fastball_Column,$Fastball);
		
	}
	
	// Hitting Batting_Avg Code //
	
	
	public function add_Batting_Avg($Batting_Avg=0){
		$Batting_Avg_data['Batting_AvgID']=$Batting_Avg;
		echo $this->load->view('admin/dropdown/step_six/add_Hitting_Batting_Avg', $Batting_Avg_data, true);
			
	}
	
	public function update_Batting_Avg()
	{
		
		$Batting_Avg_tablename='stu_Hitting_Batting_Avg';
		$Batting_Avg=$_REQUEST['Batting_Avg'];
		$Batting_AvgID=$_REQUEST['Batting_AvgID'];
		$Batting_Avg_ColumnName='Batting_AvgID';
		if($_REQUEST['Batting_AvgID']!="")
		{
			$Batting_Avg_array=array(
					'Batting_AvgName'=>$Batting_Avg,
					'Status'=>1
				);

			$this->student_model_second->update_list($Batting_Avg_tablename,$Batting_Avg_array,$Batting_Avg_ColumnName,$Batting_AvgID);	
		}else
		{
			foreach($Batting_Avg as $Data_Batting_Avg)
			{
				if($Data_Batting_Avg!=""){
					$Batting_Avg_array=array(
						'Batting_AvgName'=>$Data_Batting_Avg,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($Batting_Avg_tablename,$Batting_Avg_array);	
				}
			}
			
		}
		
		$Batting_Avg_details=get_table_details('stu_Hitting_Batting_Avg','Batting_AvgID'); ?>
               <?php if(empty($Batting_Avg_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Batting_Avg_details as $Batting_Avg){ ?>
              <tr id="Batting_Avg_<?php echo $Batting_Avg['Batting_AvgID']; ?>">
                <td><?php echo $Batting_Avg['Batting_AvgID']; ?></td>
                <td><?php echo $Batting_Avg['Batting_AvgName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Batting_Avg/<?php echo $Batting_Avg['Batting_AvgID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Batting_Avg('<?php echo $Batting_Avg['Batting_AvgID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Batting_Avg()
	{
		
		$Batting_Avg_tablenm='stu_Hitting_Batting_Avg';
		$Batting_Avg_Column='Batting_AvgID';
		$Batting_Avg=$_REQUEST['Batting_AvgID'];
		$Batting_Avg_DeletUserInfo = $this->student_model_second->delete_list($Batting_Avg_tablenm,$Batting_Avg_Column,$Batting_Avg);
		
	}
	
	

}

