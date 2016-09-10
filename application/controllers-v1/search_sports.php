<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search_sports extends CI_Controller {

	public function __construct()
	 {   
	  parent::__construct();    
	  $this->load->model('general_model');
	  $this->load->model('student_athlete_model'); 
	   $this->load->model('popup_model');
	 	
	 }

	
	public function baseball()
	{ 
		$UserID=$this->session->userdata('SearchID'); 
		$User=get_user_detail($UserID['UserID']);  
		  $bio_info=$this->general_model->get_single_data_by_column('baseball_sport','UserID',$UserID['UserID']);
		?>
	
    
    <div id="baseball-player-card" class="zoom-anim-dialog  card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Bas_HighSchool']; ?></span></h6>
                    <h6>Class of 20 : <span><?php echo $bio_info['Bas_Class']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Baseball Card</h3>
                <p> <?php echo $bio_info['Bas_Player']; ?></p>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Bas_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Bas_State']; ?></span></h6>
                </div>
            </div>
        </div>
      
        <div class="bpcard-dt clearfix">
        	<div class="left-content">
            	<h6>Primary Position : <span><?php echo $bio_info['Bas_Position']; ?></span></h6>
            </div>
            <div class="center-content">
            	<h6>Throws : <span> <?php echo $bio_info['Bas_Throws']; ?></span></h6>
            </div>
            <div class="right-content">
            	<h6>Bats : <span><?php echo $bio_info['Bas_Bats']; ?></span></h6>
            </div>
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Bas_LeftImageName']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Bas_LeftImageName']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            	<div class="card-details card-state">
                	<h4>Pitching Stats</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>ERA</h6>
                            <span><?php echo $bio_info['Bas_Era']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Win / Loss Record</h6>
                            <span><?php echo $bio_info['Bas_Win']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Primary Pitch</h6>
                            <span><?php echo $bio_info['Bas_Primary']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Secondary Pitch</h6>
                            <span><?php echo $bio_info['Bas_Secondary']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Fastball Velocity</h6>
                            <span><?php echo $bio_info['Bas_FastBall']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="center-content">
            	<div class="card-details">
                	<h4>Hitting Stats</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Batting Average</h6>
                            <span><?php echo $bio_info['Bas_Batting']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>RBI</h6>
                            <span><?php echo $bio_info['Bas_Rbi']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Stolen Bases</h6>
                            <span><?php echo $bio_info['Bas_Stolen']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>On Base %</h6>
                            <span><?php echo $bio_info['Bas_OnBase']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>60 Yard Dash</h6>
                            <span><?php echo $bio_info['Bas_YardDash']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Speed from Home to First</h6>
                            <span><?php echo $bio_info['Bas_Speed']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Bas_MiddleImageName']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Bas_MiddleImageName']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Bas_RightImageName']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Bas_RightImageName']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            	<div class="card-details card-state">
                	<h4>Fielding Stats</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Assists</h6>
                            <span><?php echo $bio_info['Bas_Assist']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Put Outs</h6>
                            <span><?php echo $bio_info['Bas_Put']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Double Plays</h6>
                            <span><?php echo $bio_info['Bas_Double']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Triple Plays</h6>
                            <span><?php echo $bio_info['Bas_Triple']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Fielding %</h6>
                            <span><?php echo $bio_info['Bas_Field']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <?php }
	
	
	public function basketball()
	{ 
	
	
	$UserID=$this->session->userdata('SearchID'); 
		$User=get_user_detail($UserID['UserID']);  
		$bio_info;
		  $bio_info=$this->general_model->get_single_data_by_column('basketball_sport','UserID',$UserID['UserID']);
		  
		
	?>
	
    
    <div id="baseball-player-card" class="zoom-anim-dialog  card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Bask_SchoolName']; ?></span></h6>
                    <h6>Class of 20 : <span><?php echo $bio_info['Bask_Class']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Basketball Card</h3>
                <p> <?php echo $bio_info['Bask_PlayerName']; ?></p>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Bask_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Bask_State']; ?></span></h6>
                </div>
            </div>
        </div>
       
        <div class="bpcard-dt clearfix">
        	<div class="left-content">
            	<h6>Primary Position : <span><?php echo $bio_info['Bask_Primary']; ?></span></h6>
            </div>
            
            <div class="center-content">
            	<h6>Secondary Position: <span><?php echo $bio_info['Bask_Secondary']; ?></span></h6>
            </div>
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img top-upload">
                	<?php if($bio_info['Bask_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Bask_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img right-upload">
                	<?php if($bio_info['Bask_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Bask_ProImage2']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            	
            </div>
            <div class="center-content">
            	<div class="card-details">
                	<h4>PER GAME STATS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Points</h6>
                            <span><?php echo $bio_info['Bask_Points']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Field Goal %</h6>
                            <span><?php echo $bio_info['Bask_Field']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Free Throw %</h6>
                            <span><?php echo $bio_info['Bask_FreeThrow']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>3 Point Field Goal %</h6>
                            <span><?php echo $bio_info['Bask_PointField']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Rebounds</h6>
                            <span><?php echo $bio_info['bask_Rebound']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Assists</h6>
                            <span><?php echo $bio_info['Bask_Assist']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Steals</h6>
                            <span><?php echo $bio_info['Bask_Steal']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Blocks</h6>
                            <span><?php echo $bio_info['Bask_Blocks']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Defensive Specialist</h6>
                            <span><?php echo $bio_info['Bask_Defensive']; ?></span>
                        </li>
                        
                    </ul>
                </div>
                <div class="card-details card-state">
                	<h4>BIOMETRIC STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height (w / shoes)</h6>
                            <span><?php echo $bio_info['Bask_HeightWith'].'feet &nbsp;'.$bio_info['Bask_HeightwithInche'].'inches';?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Height (w /o shoes)</h6>
                            <span><?php echo $bio_info['Bask_HeightWithout'].'feet &nbsp;'.$bio_info['Bask_HeightWithoutInche'].'inches';?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Bask_Weight']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Vertical</h6>
                            <span><?php echo $bio_info['Bask_Verticle']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Wingspan</h6>
                            <span><?php echo $bio_info['Bask_Wingspan'].'feet &nbsp;'.$bio_info['Bask_WingspanInche'].'inches';?></span>
                        </li>
                        <li class="clearfix">
                            <h6>3 / 4 Court Sprint</h6>
                            <span><?php echo $bio_info['Bask_CourtSprin']; ?></span>
                        </li>
                    </ul>
                </div>
              
            </div>
            <div class="right-content">
            	<div class="card-img top-upload">
                	<?php if($bio_info['Bask_ProImage3']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Bask_ProImage3']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img right-upload">
                	<?php if($bio_info['Bask_ProImage4']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Bask_ProImage4']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                
            
            </div>
        </div>
    </div>
    
  
    <?php }
	
	public function volleyball()
	{ 
		$UserID=$this->session->userdata('SearchID'); 
		$User=get_user_detail($UserID['UserID']);  
		$bio_info;
		  $bio_info=$this->general_model->get_single_data_by_column('volleyball_sport','UserID',$UserID['UserID']);
		
	?>
	
    
    <div id="baseball-player-card" class="zoom-anim-dialog  card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Volly_SchoolName']; ?></span></h6>
                    <h6>Class of 20 : <span><?php echo $bio_info['Volly_Class']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Volleyball Card</h3>
                <p> <?php echo $bio_info['Volly_PlayerName']; ?></p>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Volly_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Volly_State']; ?></span></h6>
                </div>
            </div>
        </div>
       
        <div class="bpcard-dt clearfix">
        	<div class="left-content">
            	<h6>Primary Position : <span><?php echo $bio_info['Volly_Primary']; ?></span></h6>
            </div>
            
            <div class="center-content">
            	<h6>Secondary Position: <span><?php echo $bio_info['Volly_Secondary']; ?></span></h6>
            </div>
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img top-upload">
                	<?php if($bio_info['Volly_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Volly_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img right-upload">
                	<?php if($bio_info['Volly_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Volly_ProImage2']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            	
            </div>
            <div class="center-content">
            	<div class="card-details">
                	<h4>GAME STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Hitting %</h6>
                            <span><?php echo $bio_info['Volly_Hitting']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Blocks/Set</h6>
                            <span><?php echo $bio_info['Volly_Block']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Digs/Set</h6>
                            <span><?php echo $bio_info['Volly_Digs']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Aces/Set</h6>
                            <span><?php echo $bio_info['Volly_Set']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Ace %</h6>
                            <span><?php echo $bio_info['Volly_Ace']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Serving Points/Set</h6>
                            <span><?php echo $bio_info['Volly_Serving']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Serve %</h6>
                            <span><?php echo $bio_info['Volly_Serve']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Assists/Set</h6>
                            <span><?php echo $bio_info['Volly_Assists']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Kills/Set</h6>
                            <span><?php echo $bio_info['Volly_KillSet']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Kill %</h6>
                            <span><?php echo $bio_info['Volly_Kill']; ?></span>
                        </li>
                        
                    </ul>
                </div>
                <div class="card-details card-state">
                	<h4>BIOMETRIC STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Volly_Height'].'feet &nbsp;'.$bio_info['Volly_HeightInche'].'inches';?></span>
                        </li>
                       
                        <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Volly_Weight']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Dominant Hand</h6>
                            <span><?php echo $bio_info['Volly_DomaintHand']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Standing Vertical</h6>
                            <span><?php echo $bio_info['Volly_Standing']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Approach Vertical</h6>
                            <span><?php echo $bio_info['Volly_Approach']; ?></span>
                        </li>
                    </ul>
                </div>
              
            </div>
            <div class="right-content">
            	<div class="card-img top-upload">
                	<?php if($bio_info['Volly_ProImage3']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Volly_ProImage3']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img right-upload">
                	<?php if($bio_info['Volly_ProImage4']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Volly_ProImage4']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                
            
            </div>
        </div>
    </div>
    
    <?php }
	
    
  } ?>  