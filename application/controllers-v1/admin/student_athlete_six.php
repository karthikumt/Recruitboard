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
		
		$Position_tablename='stu_primary_position';
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
		
		$Position_details=get_table_details('stu_primary_position','PositionID'); ?>
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
		
		$Position_tablenm='stu_primary_position';
		$Position_Column='PositionID';
		$Position=$_REQUEST['PositionID'];
		$Position_DeletUserInfo = $this->student_model_second->delete_list($Position_tablenm,$Position_Column,$Position);
		
	}
	
	// Primary Throws Code //
	
	
	public function add_Throws($Throws=0){
		$Throws_data['ThrowsID']=$Throws;
		echo $this->load->view('admin/dropdown/step_six/add_throws', $Throws_data, true);
			
	}
	
	public function update_Throws()
	{
		
		$Throws_tablename='stu_primary_throws';
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
		
		$Throws_details=get_table_details('stu_primary_throws','ThrowsID'); ?>
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
		
		$Throws_tablenm='stu_primary_throws';
		$Throws_Column='ThrowsID';
		$Throws=$_REQUEST['ThrowsID'];
		$Throws_DeletUserInfo = $this->student_model_second->delete_list($Throws_tablenm,$Throws_Column,$Throws);
		
	}
	
	// Primary Bats Code //
	
	
	public function add_Bats($Bats=0){
		$Bats_data['BatsID']=$Bats;
		echo $this->load->view('admin/dropdown/step_six/add_bats', $Bats_data, true);
			
	}
	
	public function update_Bats()
	{
		
		$Bats_tablename='stu_primary_bats';
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
		
		$Bats_details=get_table_details('stu_primary_bats','BatsID'); ?>
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
		
		$Bats_tablenm='stu_primary_bats';
		$Bats_Column='BatsID';
		$Bats=$_REQUEST['BatsID'];
		$Bats_DeletUserInfo = $this->student_model_second->delete_list($Bats_tablenm,$Bats_Column,$Bats);
		
	}
	
	
	// Pitching Era Code //
	
	
	public function add_Era($Era=0){
		$Era_data['EraID']=$Era;
		echo $this->load->view('admin/dropdown/step_six/add_pitching_era', $Era_data, true);
			
	}
	
	public function update_Era()
	{
		
		$Era_tablename='stu_pitching_era';
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
		
		$Era_details=get_table_details('stu_pitching_era','EraID'); ?>
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
		
		$Era_tablenm='stu_pitching_era';
		$Era_Column='EraID';
		$Era=$_REQUEST['EraID'];
		$Era_DeletUserInfo = $this->student_model_second->delete_list($Era_tablenm,$Era_Column,$Era);
		
	}
	
	// Pitching Win/loss_Record Code //
	
	
	public function add_Winloss_Rec($Winloss_Rec=0){
		$Winloss_Rec_data['Winloss_RecID']=$Winloss_Rec;
		echo $this->load->view('admin/dropdown/step_six/add_pitching_winloss_rec', $Winloss_Rec_data, true);
			
	}
	
	public function update_Winloss_Rec()
	{
		
		$Winloss_Rec_tablename='stu_pitching_winloss_rec';
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
		
		$Winloss_Rec_details=get_table_details('stu_pitching_winloss_rec','Winloss_RecID'); ?>
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
		
		$Winloss_Rec_tablenm='stu_pitching_winloss_rec';
		$Winloss_Rec_Column='Winloss_RecID';
		$Winloss_Rec=$_REQUEST['Winloss_RecID'];
		$Winloss_Rec_DeletUserInfo = $this->student_model_second->delete_list($Winloss_Rec_tablenm,$Winloss_Rec_Column,$Winloss_Rec);
		
	}
	
	// Pitching Primary_Pitch Code //
	
	
	public function add_Primary_Pitch($Primary_Pitch=0){
		$Primary_Pitch_data['Primary_PitchID']=$Primary_Pitch;
		echo $this->load->view('admin/dropdown/step_six/add_pitching_primary_pitch', $Primary_Pitch_data, true);
			
	}
	
	public function update_Primary_Pitch()
	{
		
		$Primary_Pitch_tablename='stu_pitching_primary_pitch';
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
		
		$Primary_Pitch_details=get_table_details('stu_pitching_primary_pitch','Primary_PitchID'); ?>
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
		
		$Primary_Pitch_tablenm='stu_pitching_primary_pitch';
		$Primary_Pitch_Column='Primary_PitchID';
		$Primary_Pitch=$_REQUEST['Primary_PitchID'];
		$Primary_Pitch_DeletUserInfo = $this->student_model_second->delete_list($Primary_Pitch_tablenm,$Primary_Pitch_Column,$Primary_Pitch);
		
	}
	
	// Pitching Secondary_Pitch Code //
	
	
	public function add_Secondary_Pitch($Secondary_Pitch=0){
		$Secondary_Pitch_data['Secondary_PitchID']=$Secondary_Pitch;
		echo $this->load->view('admin/dropdown/step_six/add_pitching_secondary_pitch', $Secondary_Pitch_data, true);
			
	}
	
	public function update_Secondary_Pitch()
	{
		
		$Secondary_Pitch_tablename='stu_pitching_secondary_pitch';
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
		
		$Secondary_Pitch_details=get_table_details('stu_pitching_secondary_pitch','Secondary_PitchID'); ?>
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
		
		$Secondary_Pitch_tablenm='stu_pitching_secondary_pitch';
		$Secondary_Pitch_Column='Secondary_PitchID';
		$Secondary_Pitch=$_REQUEST['Secondary_PitchID'];
		$Secondary_Pitch_DeletUserInfo = $this->student_model_second->delete_list($Secondary_Pitch_tablenm,$Secondary_Pitch_Column,$Secondary_Pitch);
		
	}
	
	// Pitching Fastball Code //
	
	
	public function add_Fastball($Fastball=0){
		$Fastball_data['FastballID']=$Fastball;
		echo $this->load->view('admin/dropdown/step_six/add_pitching_fastball', $Fastball_data, true);
			
	}
	
	public function update_Fastball()
	{
		
		$Fastball_tablename='stu_pitching_fastball';
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
		
		$Fastball_details=get_table_details('stu_pitching_fastball','FastballID'); ?>
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
		
		$Fastball_tablenm='stu_pitching_fastball';
		$Fastball_Column='FastballID';
		$Fastball=$_REQUEST['FastballID'];
		$Fastball_DeletUserInfo = $this->student_model_second->delete_list($Fastball_tablenm,$Fastball_Column,$Fastball);
		
	}
	
	// Hitting Batting_Avg Code //
	
	
	public function add_Batting_Avg($Batting_Avg=0){
		$Batting_Avg_data['Batting_AvgID']=$Batting_Avg;
		echo $this->load->view('admin/dropdown/step_six/add_hitting_batting_avg', $Batting_Avg_data, true);
			
	}
	
	public function update_Batting_Avg()
	{
		
		$Batting_Avg_tablename='stu_hitting_batting_avg';
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
		
		$Batting_Avg_details=get_table_details('stu_hitting_batting_avg','Batting_AvgID'); ?>
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
		
		$Batting_Avg_tablenm='stu_hitting_batting_avg';
		$Batting_Avg_Column='Batting_AvgID';
		$Batting_Avg=$_REQUEST['Batting_AvgID'];
		$Batting_Avg_DeletUserInfo = $this->student_model_second->delete_list($Batting_Avg_tablenm,$Batting_Avg_Column,$Batting_Avg);
		
	}
	
	
	
		// Hitting RBI Name Code //
	
	
	public function add_Stu_Rbi($Stu_Rbi=0){
		$Stu_Rbi_data['Stu_RbiID']=$Stu_Rbi;
		echo $this->load->view('admin/dropdown/step_six/add_hitting_rbi', $Stu_Rbi_data, true);
			
	}
	
	public function update_Stu_Rbi()
	{
		
		$Stu_Rbi_tablename='stu_hitting_rbi';
		$Stu_Rbi=$_REQUEST['Stu_Rbi'];
		$Stu_RbiID=$_REQUEST['Stu_RbiID'];
		$Stu_Rbi_ColumnName='Stu_RbiID';
		if($_REQUEST['Stu_RbiID']!="")
		{
			$Stu_Rbi_array=array(
					'Stu_RbiName'=>$Stu_Rbi,
					'Status'=>1
				);

			$this->student_model_second->update_list($Stu_Rbi_tablename,$Stu_Rbi_array,$Stu_Rbi_ColumnName,$Stu_RbiID);	
		}else
		{
			foreach($Stu_Rbi as $Data_Stu_Rbi)
			{
				if($Data_Stu_Rbi!=""){
					$Stu_Rbi_array=array(
						'Stu_RbiName'=>$Data_Stu_Rbi,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($Stu_Rbi_tablename,$Stu_Rbi_array);	
				}
			}
			
		}
		
		$Stu_Rbi_details=get_table_details('stu_hitting_rbi','Stu_RbiID'); ?>
               <?php if(empty($Stu_Rbi_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Stu_Rbi_details as $Stu_Rbi){ ?>
              <tr id="Stu_Rbi_<?php echo $Stu_Rbi['Stu_RbiID']; ?>">
                <td><?php echo $Stu_Rbi['Stu_RbiID']; ?></td>
                <td><?php echo $Stu_Rbi['Stu_RbiName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Stu_Rbi/<?php echo $Stu_Rbi['Stu_RbiID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Stu_Rbi('<?php echo $Stu_Rbi['Stu_RbiID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Stu_Rbi()
	{
		
		$Stu_Rbi_tablenm='stu_hitting_rbi';
		$Stu_Rbi_Column='Stu_RbiID';
		$Stu_Rbi=$_REQUEST['Stu_RbiID'];
		$Stu_Rbi_DeletUserInfo = $this->student_model_second->delete_list($Stu_Rbi_tablenm,$Stu_Rbi_Column,$Stu_Rbi);
		
	}
	
		// Hitting Stolen Name Code //
	
	
	public function add_Stu_Stolen($Stu_Stolen=0){
		$Stu_Stolen_data['Stu_StolenID']=$Stu_Stolen;
		echo $this->load->view('admin/dropdown/step_six/add_hitting_stolen', $Stu_Stolen_data, true);
			
	}
	
	public function update_Stu_Stolen()
	{
		
		$Stu_Stolen_tablename='stu_hitting_stolen';
		$Stu_Stolen=$_REQUEST['Stu_Stolen'];
		$Stu_StolenID=$_REQUEST['Stu_StolenID'];
		$Stu_Stolen_ColumnName='Stu_StolenID';
		if($_REQUEST['Stu_StolenID']!="")
		{
			$Stu_Stolen_array=array(
					'Stu_StolenName'=>$Stu_Stolen,
					'Status'=>1
				);

			$this->student_model_second->update_list($Stu_Stolen_tablename,$Stu_Stolen_array,$Stu_Stolen_ColumnName,$Stu_StolenID);	
		}else
		{
			foreach($Stu_Stolen as $Data_Stu_Stolen)
			{
				if($Data_Stu_Stolen!=""){
					$Stu_Stolen_array=array(
						'Stu_StolenName'=>$Data_Stu_Stolen,
						'Status'=>1
					);
				
					$this->student_model_second->add_list($Stu_Stolen_tablename,$Stu_Stolen_array);	
				}
			}
			
		}
		
		$Stu_Stolen_details=get_table_details('stu_hitting_stolen','Stu_StolenID'); ?>
               <?php if(empty($Stu_Stolen_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Stu_Stolen_details as $Stu_Stolen){ ?>
              <tr id="Stu_Stolen_<?php echo $Stu_Stolen['Stu_StolenID']; ?>">
                <td><?php echo $Stu_Stolen['Stu_StolenID']; ?></td>
                <td><?php echo $Stu_Stolen['Stu_StolenName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Stu_Stolen/<?php echo $Stu_Stolen['Stu_StolenID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Stu_Stolen('<?php echo $Stu_Stolen['Stu_StolenID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Stu_Stolen()
	{
		
		$Stu_Stolen_tablenm='stu_hitting_stolen';
		$Stu_Stolen_Column='Stu_StolenID';
		$Stu_Stolen=$_REQUEST['Stu_StolenID'];
		$Stu_Stolen_DeletUserInfo = $this->student_model_second->delete_list($Stu_Stolen_tablenm,$Stu_Stolen_Column,$Stu_Stolen);
		
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
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_speed/<?php echo $Gender['Stu_SpeedID']; ?> "><i class="fa fa-pencil"></i></a>
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
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_yardbase/<?php echo $Gender['Stu_YardBaseID']; ?> "><i class="fa fa-pencil"></i></a>
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
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_onbase/<?php echo $Gender['Stu_OnBaseID']; ?> "><i class="fa fa-pencil"></i></a>
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
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_assist/<?php echo $Gender['Stu_AssistID']; ?> "><i class="fa fa-pencil"></i></a>
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
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_put/<?php echo $Gender['Stu_PutID']; ?> "><i class="fa fa-pencil"></i></a>
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
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_double/<?php echo $Gender['Stu_DoubleID']; ?> "><i class="fa fa-pencil"></i></a>
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
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_triple/<?php echo $Gender['Stu_TripleID']; ?> "><i class="fa fa-pencil"></i></a>
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
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_filed/<?php echo $Gender['Stu_FiledID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_filed('<?php echo $Gender['Stu_FiledID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public  function delete_filed()
	{
		
		$tablenm='stu_field_filed';
		$Column='Stu_FiledID';
		$filed=$_REQUEST['Stu_FiledID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$filed);
		
	}
	
	
	

}

