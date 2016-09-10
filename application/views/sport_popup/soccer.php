<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid']; 
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('soccer_sport','UserID',$UserID);
?>

<div id="soccer-board" class="zoom-anim-dialog card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Soccer_SchoolName']; ?></span></h6>
                    <h6>Class of 20 : <span><?php echo $bio_info['Soccer_Class']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Soccer_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Soccer_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Soccer Board</h3>
                <p><?php echo $bio_info['Soccer_PlayerName']; ?></p>
            </div>
            
        </div>
        <div class="bpcard-dt clearfix">
        	<div class="left-content">
            	<h6>Primary Position:<span><?php echo $bio_info['Soccer_Primary']; ?></span></h6>
            </div>
            <div class="center-content">
            	<h6>Secondary Position:<span><?php echo $bio_info['Soccer_Secondary']; ?></span> </h6>
            </div>
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Soccer_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Soccer_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Soccer_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Soccer_ProImage2']; ?>" alt="">
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
                            <span><?php echo $bio_info['Soccer_Goals']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Shots on Goal</h6>
                            <span><?php echo $bio_info['Soccer_Shots']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Assists</h6>
                            <span><?php echo $bio_info['Soccer_Assists']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Goals Allowed</h6>
                            <span><?php echo $bio_info['Soccer_Allowed']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Saves</h6>
                            <span><?php echo $bio_info['Soccer_Saves']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details box-height">
                	<h4>BIOMETRIC STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Soccer_Height']." feet ".$bio_info['Soccer_HeightInche']." Inches"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Soccer_Weight']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>30 Meter Sprint</h6>
                            <span><?php echo $bio_info['Soccer_Sprint']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>5-10-5 Drill</h6>
                            <span><?php echo $bio_info['Soccer_Drill']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Vertical Jump</h6>
                            <span><?php echo $bio_info['Soccer_Vertical']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Dominant Leg</h6>
                            <span><?php echo $bio_info['Soccer_DomaintLeg']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Defensive Specialist</h6>
                            <span><?php echo $bio_info['Soccer_Defensive']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Soccer_ProImage3']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Soccer_ProImage3']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Soccer_ProImage4']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Soccer_ProImage4']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
        </div>
    </div>