<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid']; 
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('ice_hockey_sport','UserID',$UserID);
?>

<div id="ice-hockey-board" class="zoom-anim-dialog  card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Ice_SchoolName']; ?></span></h6>
                    <h6>Class of 20 : <span><?php echo $bio_info['Ice_Class']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Ice_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Ice_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Ice Hockey Board</h3>
                <p><?php echo $bio_info['Ice_PlayerName']; ?></p>
            </div>
            
        </div>
        <div class="bpcard-dt clearfix">
        	<div class="left-content">
            	<h6>Primary Position:<span><?php echo $bio_info['Ice_Primary']; ?></span></h6>
            </div>
            <div class="center-content">
            	<h6>Secondary Position: <span><?php echo $bio_info['Ice_Secondary']; ?></span></h6>
            </div>
            <div class="right-content">
            	<h6>Position: <span><?php echo $bio_info['Ice_Position']; ?></span></h6>
            </div>
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Ice_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Ice_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Ice_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Ice_ProImage2']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
            <div class="center-content">
            	<div class="card-details">
                	<h4>PER GAME STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Goals</h6>
                            <span><?php echo $bio_info['Ice_Goals']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Shots on Goal</h6>
                            <span><?php echo $bio_info['Ice_Shots']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Assists</h6>
                            <span><?php echo $bio_info['Ice_Assist']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Goals Allowed</h6>
                            <span><?php echo $bio_info['Ice_Allowed']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Saves</h6>
                            <span><?php echo $bio_info['Ice_Saves']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Penalty Minutes</h6>
                            <span><?php echo $bio_info['Ice_Penalty']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details">
                	<h4>BIOMETRIC STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Ice_Height']." feet ".$bio_info['Ice_HeightInche']." Inche"; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Ice_Weight']; ?></span>
                        </li> 
                        <li class="clearfix">
                            <h6>Wingspan</h6>
                            <span><?php echo $bio_info['Ice_WingSpan']." Minute ".$bio_info['Ice_wingSpanInche']." Seconds"; ?></span>
                        </li> 
                        <li class="clearfix">
                            <h6>Standing Long Jump</h6>
                            <span><?php echo $bio_info['Ice_LongJump']." feet ".$bio_info['Ice_LongJumpInche']." Inches"; ?></span>
                        </li> 
                        <li class="clearfix">
                            <h6>Vertical Jump</h6>
                            <span><?php echo $bio_info['Ice_Vertical']; ?></span>
                        </li> 
                        <li class="clearfix">
                            <h6>Grip Strength ( right )</h6>
                            <span><?php echo $bio_info['Ice_GripStrength_Right']; ?></span>
                        </li> 
                        <li class="clearfix">
                            <h6>Grip Strength ( left )</h6>
                            <span><?php echo $bio_info['Ice_GripStrength_Left']; ?></span>
                        </li> 
                        <li class="clearfix">
                            <h6>Bench Press Reps (150 lbs )</h6>
                            <span><?php echo $bio_info['Ice_Bench_Press']; ?></span>
                        </li> 
                        <li class="clearfix">
                            <h6>Pull Ups</h6>
                            <span><?php echo $bio_info['Ice_PullUps']; ?></span>
                        </li> <li class="clearfix">
                            <h6>Defensive Specialist</h6>
                            <span><?php echo $bio_info['Ice_Defensive']; ?></span>
                        </li> 
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Ice_ProImage3']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Ice_ProImage3']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Ice_ProImage4']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Ice_ProImage4']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
        </div>
         
    </div>