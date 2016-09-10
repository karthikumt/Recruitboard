<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_athlete_three extends CI_Controller {
	
	public function __construct(){		
		parent::__construct();
		$this->load->model('admin/admin_model');
		$this->load->model('admin/dropdown/student_model');		
	}

	public function index(){	
		$data['country_list'] = "";
        $data['MainContent'] = $this->load->view('admin/dropdown/student_athlete_three', $data, true);		
        $this->load->view('admin/template', $data);	
	}
	
	public function add_tofel($tofel=0){
		$data['Stu_TofelID']=$tofel;
		echo $this->load->view('admin/dropdown/step_three/add_tofel', $data, true);
			
	}
	
	public function update_tofel()
	{
		
		$tablename='stu_academic_tofel';
		$Stu_TofelName=$_REQUEST['Stu_TofelName'];
		$Stu_TofelID=$_REQUEST['Stu_TofelID'];
		$ColumnName='Stu_TofelID';
		if($_REQUEST['Stu_TofelID']!="")
		{
			$array=array(
					'Stu_TofelName'=>$Stu_TofelName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_TofelID);	
		}else
		{
			foreach($Stu_TofelName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_TofelName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_academic_tofel','Stu_TofelID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Tofel_<?php echo $Gender['Stu_TofelID']; ?>">
                <td><?php echo $Gender['Stu_TofelID']; ?></td>
                <td><?php echo $Gender['Stu_TofelName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_three/add_tofel/<?php echo $Gender['Stu_TofelID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_tofel('<?php echo $Gender['Stu_TofelID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_tofel()
	{
		
		$tablenm='stu_academic_tofel';
		$Column='Stu_TofelID';
		$gender=$_REQUEST['Stu_TofelID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	public function add_read($read=0){
		$data['Stu_ReadID']=$read;
		echo $this->load->view('admin/dropdown/step_three/add_read', $data, true);
			
	}
	
	public function update_read()
	{
		
		$tablename='stu_academic_read';
		$Stu_ReadName=$_REQUEST['Stu_ReadName'];
		$Stu_ReadID=$_REQUEST['Stu_ReadID'];
		$ColumnName='Stu_ReadID';
		if($_REQUEST['Stu_ReadID']!="")
		{
			$array=array(
					'Stu_ReadName'=>$Stu_ReadName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_ReadID);	
		}else
		{
			foreach($Stu_ReadName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_ReadName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_academic_read','Stu_ReadID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Read_<?php echo $Gender['Stu_ReadID']; ?>">
                <td><?php echo $Gender['Stu_ReadID']; ?></td>
                <td><?php echo $Gender['Stu_ReadName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_three/add_read/<?php echo $Gender['Stu_ReadID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_read('<?php echo $Gender['Stu_ReadID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_read()
	{
		
		$tablenm='stu_academic_read';
		$Column='Stu_ReadID';
		$gender=$_REQUEST['Stu_ReadID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	public function add_listen($listen=0){
		$data['Stu_ListenID']=$listen;
		echo $this->load->view('admin/dropdown/step_three/add_listen', $data, true);
			
	}
	
	public function update_listen()
	{
		
		$tablename='stu_academic_listen';
		$Stu_ListenName=$_REQUEST['Stu_ListenName'];
		$Stu_ListenID=$_REQUEST['Stu_ListenID'];
		$ColumnName='Stu_ListenID';
		if($_REQUEST['Stu_ListenID']!="")
		{
			$array=array(
					'Stu_ListenName'=>$Stu_ListenName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_ListenID);	
		}else
		{
			foreach($Stu_ListenName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_ListenName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_academic_listen','Stu_ListenID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Listen_<?php echo $Gender['Stu_ListenID']; ?>">
                <td><?php echo $Gender['Stu_ListenID']; ?></td>
                <td><?php echo $Gender['Stu_ListenName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_three/add_listen/<?php echo $Gender['Stu_ListenID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_listen('<?php echo $Gender['Stu_ListenID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_listen()
	{
		
		$tablenm='stu_academic_listen';
		$Column='Stu_ListenID';
		$gender=$_REQUEST['Stu_ListenID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	public function add_speak($speak=0){
		$data['Stu_SpeakID']=$speak;
		echo $this->load->view('admin/dropdown/step_three/add_speak', $data, true);
			
	}
	
	public function update_speak()
	{
		
		$tablename='stu_academic_speak';
		$Stu_SpeakName=$_REQUEST['Stu_SpeakName'];
		$Stu_SpeakID=$_REQUEST['Stu_SpeakID'];
		$ColumnName='Stu_SpeakID';
		if($_REQUEST['Stu_SpeakID']!="")
		{
			$array=array(
					'Stu_SpeakName'=>$Stu_SpeakName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_SpeakID);	
		}else
		{
			foreach($Stu_SpeakName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_SpeakName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_academic_speak','Stu_SpeakID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Speak_<?php echo $Gender['Stu_SpeakID']; ?>">
                <td><?php echo $Gender['Stu_SpeakID']; ?></td>
                <td><?php echo $Gender['Stu_SpeakName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_three/add_speak/<?php echo $Gender['Stu_SpeakID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_speak('<?php echo $Gender['Stu_SpeakID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_speak()
	{
		
		$tablenm='stu_academic_speak';
		$Column='Stu_SpeakID';
		$gender=$_REQUEST['Stu_SpeakID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	public function add_write($write=0){
		$data['Stu_WriteID']=$write;
		echo $this->load->view('admin/dropdown/step_three/add_write', $data, true);
			
	}
	
	public function update_write()
	{
		
		$tablename='stu_academic_write';
		$Stu_WriteName=$_REQUEST['Stu_WriteName'];
		$Stu_WriteID=$_REQUEST['Stu_WriteID'];
		$ColumnName='Stu_WriteID';
		if($_REQUEST['Stu_WriteID']!="")
		{
			$array=array(
					'Stu_WriteName'=>$Stu_WriteName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_WriteID);	
		}else
		{
			foreach($Stu_WriteName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_WriteName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_academic_write','Stu_WriteID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Write_<?php echo $Gender['Stu_WriteID']; ?>">
                <td><?php echo $Gender['Stu_WriteID']; ?></td>
                <td><?php echo $Gender['Stu_WriteName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_three/add_write/<?php echo $Gender['Stu_WriteID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_write('<?php echo $Gender['Stu_WriteID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_write()
	{
		
		$tablenm='stu_academic_write';
		$Column='Stu_WriteID';
		$gender=$_REQUEST['Stu_WriteID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
		
	public function add_yourspeak($yourspeak=0){
		$data['Stu_YourSpeakID']=$yourspeak;
		echo $this->load->view('admin/dropdown/step_three/add_yourspeak', $data, true);
			
	}
	
	public function update_yourspeak()
	{
		
		$tablename='stu_academic_yourspeak';
		$Stu_YourSpeakName=$_REQUEST['Stu_YourSpeakName'];
		$Stu_YourSpeakID=$_REQUEST['Stu_YourSpeakID'];
		$ColumnName='Stu_YourSpeakID';
		if($_REQUEST['Stu_YourSpeakID']!="")
		{
			$array=array(
					'Stu_YourSpeakName'=>$Stu_YourSpeakName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_YourSpeakID);	
		}else
		{
			foreach($Stu_YourSpeakName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_YourSpeakName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_academic_yourspeak','Stu_YourSpeakID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="YourSpeak_<?php echo $Gender['Stu_YourSpeakID']; ?>">
                <td><?php echo $Gender['Stu_YourSpeakID']; ?></td>
                <td><?php echo $Gender['Stu_YourSpeakName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_three/add_yourspeak/<?php echo $Gender['Stu_YourSpeakID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_yourspeak('<?php echo $Gender['Stu_YourSpeakID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_yourspeak()
	{
		
		$tablenm='stu_academic_yourspeak';
		$Column='Stu_YourWriteID';
		$gender=$_REQUEST['Stu_YourWriteID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
		
	public function add_yourwrite($yourwrite=0){
		$data['Stu_YourWriteID']=$yourwrite;
		echo $this->load->view('admin/dropdown/step_three/add_yourwrite', $data, true);
			
	}
	
	public function update_yourwrite()
	{
		
		$tablename='stu_academic_yourwrite';
		$Stu_YourWriteName=$_REQUEST['Stu_YourWriteName'];
		$Stu_YourWriteID=$_REQUEST['Stu_YourWriteID'];
		$ColumnName='Stu_YourWriteID';
		if($_REQUEST['Stu_YourWriteID']!="")
		{
			$array=array(
					'Stu_YourWriteName'=>$Stu_YourWriteName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_YourWriteID);	
		}else
		{
			foreach($Stu_YourWriteName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_YourWriteName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_academic_yourwrite','Stu_YourWriteID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="YourWrite_<?php echo $Gender['Stu_YourWriteID']; ?>">
                <td><?php echo $Gender['Stu_YourWriteID']; ?></td>
                <td><?php echo $Gender['Stu_YourWriteName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_three/add_yourwrite/<?php echo $Gender['Stu_YourWriteID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_yourwrite('<?php echo $Gender['Stu_YourWriteID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_yourwrite()
	{
		
		$tablenm='stu_academic_yourwrite';
		$Column='Stu_YourWriteID';
		$gender=$_REQUEST['Stu_YourWriteID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}


	public function add_yourread($yourread=0){
		$data['Stu_YourReadID']=$yourread;
		echo $this->load->view('admin/dropdown/step_three/add_yourread', $data, true);
			
	}
	
	public function update_yourread()
	{
		
		$tablename='stu_academic_yourread';
		$Stu_YourReadName=$_REQUEST['Stu_YourReadName'];
		$Stu_YourReadID=$_REQUEST['Stu_YourReadID'];
		$ColumnName='Stu_YourReadID';
		if($_REQUEST['Stu_YourReadID']!="")
		{
			$array=array(
					'Stu_YourReadName'=>$Stu_YourReadName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_YourReadID);	
		}else
		{
			foreach($Stu_YourReadName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_YourReadName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_academic_yourread','Stu_YourReadID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="YourRead_<?php echo $Gender['Stu_YourReadID']; ?>">
                <td><?php echo $Gender['Stu_YourReadID']; ?></td>
                <td><?php echo $Gender['Stu_YourReadName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_three/add_yourread/<?php echo $Gender['Stu_YourReadID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_yourread('<?php echo $Gender['Stu_YourReadID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	
	public function delete_yourread()
	{
		
		$tablenm='stu_academic_yourread';
		$Column='Stu_YourReadID';
		$gender=$_REQUEST['Stu_YourReadID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}

	
	
	public function add_wes($wes=0){
		$data['Stu_WesID']=$wes;
		echo $this->load->view('admin/dropdown/step_three/add_wes', $data, true);
			
	}
	
	public function update_wes()
	{
		
		$tablename='stu_academic_wes';
		$Stu_WesName=$_REQUEST['Stu_WesName'];
		$Stu_WesID=$_REQUEST['Stu_WesID'];
		$ColumnName='Stu_WesID';
		if($_REQUEST['Stu_WesID']!="")
		{
			$array=array(
					'Stu_WesName'=>$Stu_WesName,
					'Status'=>1
				);
			$this->student_model->update_list($tablename,$array,$ColumnName,$Stu_WesID);	
		}else
		{
			foreach($Stu_WesName as $Data)
			{
				if($Data!=""){
					$array=array(
						'Stu_WesName'=>$Data,
						'Status'=>1
					);
				
					$this->student_model->add_list($tablename,$array);	
				}
			}
			
		}
		
		$Gender_details=get_table_details('stu_academic_wes','Stu_WesID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="Wes_<?php echo $Gender['Stu_WesID']; ?>">
                <td><?php echo $Gender['Stu_WesID']; ?></td>
                <td><?php echo $Gender['Stu_WesName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_three/add_wes/<?php echo $Gender['Stu_WesID']; ?> "><i class="fa fa-pencil"></i></a>
                    <a class="delete-row" href="javascript:void(0);" onclick="remove_wes('<?php echo $Gender['Stu_WesID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php }  }
              
       
		
	}
	 
	public function delete_wes()
	{
		
		$tablenm='stu_academic_wes';
		$Column='Stu_WesID';
		$gender=$_REQUEST['Stu_WesID'];
		$DeletUserInfo = $this->student_model->delete_list($tablenm,$Column,$gender);
		
	}
	
	
	
}

