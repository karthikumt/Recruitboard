<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Colleage_cotch extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('admin/dropdown/student_model');		
	}

	public function index(){	
		$data['country_list'] = "";
        $data['MainContent'] = $this->load->view('admin/dropdown/colleage_cotch', $data, true);		
        $this->load->view('admin/template', $data);	
	}
	
	// Coll_Gender Code //
	
	
	public function add_Coll_Gender($Coll_Gender=0){
		$Coll_Gender_data['Coll_GenderID']=$Coll_Gender;
		echo $this->load->view('admin/dropdown/coll_coach_step_one/add_gender',$Coll_Gender_data, true);
			
	}
	
	public function update_Coll_Gender()
	{
		
		$Coll_Gender_tablename='coll_cotch_gender';
		$Coll_Gender=$_REQUEST['Coll_Gender'];
		$Coll_GenderID=$_REQUEST['Coll_GenderID'];
		$Coll_Gender_ColumnName='Coll_GenderID';
		if($_REQUEST['Coll_GenderID']!="")
		{
			$Coll_Gender_array=array(
					'Coll_GenderName'=>$Coll_Gender,
					'Status'=>1
				);

			$this->student_model->update_list($Coll_Gender_tablename,$Coll_Gender_array,$Coll_Gender_ColumnName,$Coll_GenderID);	
		}else
		{
			foreach($Coll_Gender as $Data_Coll_Gender)
			{
				if($Data_Coll_Gender!=""){
					$Coll_Gender_array=array(
						'Coll_GenderName'=>$Data_Coll_Gender,
						'Status'=>1
					);
				
					$this->student_model->add_list($Coll_Gender_tablename,$Coll_Gender_array);	
				}
			}
			
		}
		
		$Coll_Gender_details=get_table_details('coll_cotch_gender','Coll_GenderID'); ?>
               <?php if(empty($Coll_Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Coll_Gender_details as $Coll_Gender){ ?>
              <tr id="Coll_Gender_<?php echo $Coll_Gender['Coll_GenderID']; ?>">
                <td><?php echo $Coll_Gender['Coll_GenderID']; ?></td>
                <td><?php echo $Coll_Gender['Coll_GenderName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch/add_Coll_Gender/<?php echo $Coll_Gender['Coll_GenderID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Gender('<?php echo $Coll_Gender['Coll_GenderID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Coll_Gender()
	{
		
		$Coll_Gender_tablenm='coll_cotch_gender';
		$Coll_Gender_Column='Coll_GenderID';
		$Coll_Gender=$_REQUEST['Coll_GenderID'];
		$Coll_Gender_DeletUserInfo = $this->student_model->delete_list($Coll_Gender_tablenm,$Coll_Gender_Column,$Coll_Gender);
		
	}

	
	
		// Coll_Country Code //
	
	
	public function add_Coll_Country($Coll_Country=0){
		$Coll_Country_data['Coll_CountryID']=$Coll_Country;
		echo $this->load->view('admin/dropdown/coll_coach_step_one/add_country',$Coll_Country_data, true);
			
	}
	
	public function update_Coll_Country()
	{
		
		$Coll_Country_tablename='coll_cotch_country';
		$Coll_Country=$_REQUEST['Coll_Country'];
		$Coll_CountryID=$_REQUEST['Coll_CountryID'];
		$Coll_Country_ColumnName='Coll_CountryID';
		if($_REQUEST['Coll_CountryID']!="")
		{
			$Coll_Country_array=array(
					'Coll_CountryName'=>$Coll_Country,
					'Status'=>1
				);

			$this->student_model->update_list($Coll_Country_tablename,$Coll_Country_array,$Coll_Country_ColumnName,$Coll_CountryID);	
		}else
		{
			foreach($Coll_Country as $Data_Coll_Country)
			{
				if($Data_Coll_Country!=""){
					$Coll_Country_array=array(
						'Coll_CountryName'=>$Data_Coll_Country,
						'Status'=>1
					);
				
					$this->student_model->add_list($Coll_Country_tablename,$Coll_Country_array);	
				}
			}
			
		}
		
		$Coll_Country_details=get_table_details('coll_cotch_country','Coll_CountryID'); ?>
               <?php if(empty($Coll_Country_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Coll_Country_details as $Coll_Country){ ?>
              <tr id="Coll_Country_<?php echo $Coll_Country['Coll_CountryID']; ?>">
                <td><?php echo $Coll_Country['Coll_CountryID']; ?></td>
                <td><?php echo $Coll_Country['Coll_CountryName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch/add_Coll_Country/<?php echo $Coll_Country['Coll_CountryID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Country('<?php echo $Coll_Country['Coll_CountryID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Coll_Country()
	{
		
		$Coll_Country_tablenm='coll_cotch_country';
		$Coll_Country_Column='Coll_CountryID';
		$Coll_Country=$_REQUEST['Coll_CountryID'];
		$Coll_Country_DeletUserInfo = $this->student_model->delete_list($Coll_Country_tablenm,$Coll_Country_Column,$Coll_Country);
		
	}
	
	
	
		// Coll_Sport Code //
	
	
	public function add_Coll_Sport($Coll_Sport=0){
		$Coll_Sport_data['Coll_SportID']=$Coll_Sport;
		echo $this->load->view('admin/dropdown/coll_coach_step_one/add_sport',$Coll_Sport_data, true);
			
	}
	
	public function update_Coll_Sport()
	{
		
		$Coll_Sport_tablename='coll_cotch_sport';
		$Coll_Sport=$_REQUEST['Coll_Sport'];
		$Coll_SportID=$_REQUEST['Coll_SportID'];
		$Coll_Sport_ColumnName='Coll_SportID';
		if($_REQUEST['Coll_SportID']!="")
		{
			$Coll_Sport_array=array(
					'Coll_SportName'=>$Coll_Sport,
					'Status'=>1
				);

			$this->student_model->update_list($Coll_Sport_tablename,$Coll_Sport_array,$Coll_Sport_ColumnName,$Coll_SportID);	
		}else
		{
			foreach($Coll_Sport as $Data_Coll_Sport)
			{
				if($Data_Coll_Sport!=""){
					$Coll_Sport_array=array(
						'Coll_SportName'=>$Data_Coll_Sport,
						'Status'=>1
					);
				
					$this->student_model->add_list($Coll_Sport_tablename,$Coll_Sport_array);	
				}
			}
			
		}
		
		$Coll_Sport_details=get_table_details('coll_cotch_sport','Coll_SportID'); ?>
               <?php if(empty($Coll_Sport_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Coll_Sport_details as $Coll_Sport){ ?>
              <tr id="Coll_Sport_<?php echo $Coll_Sport['Coll_SportID']; ?>">
                <td><?php echo $Coll_Sport['Coll_SportID']; ?></td>
                <td><?php echo $Coll_Sport['Coll_SportName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch/add_Coll_Sport/<?php echo $Coll_Sport['Coll_SportID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Sport('<?php echo $Coll_Sport['Coll_SportID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php  }  }
              
       
		
	}
	
	public function delete_Coll_Sport()
	{
		
		$Coll_Sport_tablenm='coll_cotch_sport';
		$Coll_Sport_Column='Coll_SportID';
		$Coll_Sport=$_REQUEST['Coll_SportID'];
		$Coll_Sport_DeletUserInfo = $this->student_model->delete_list($Coll_Sport_tablenm,$Coll_Sport_Column,$Coll_Sport);
		
	}



}

