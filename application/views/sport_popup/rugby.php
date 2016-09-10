<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid']; 
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('rugby_sport','UserID',$UserID);
?>

<div id="rugby-board" class="zoom-anim-dialog card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Rugby_SchoolName']; ?></span></h6>
                    <h6>Class of 20 : <span> <?php echo $bio_info['Rugby_Class']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Rugby_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Rugby_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Rugby Board</h3>
                <p><?php echo $bio_info['Rugby_PlayerName']; ?></p>
            </div>
            
        </div>
        <div class="bpcard-dt clearfix">
        	<div class="left-content">
            	<h6>Primary Position:<span><?php echo $bio_info['Rugby_Primary']; ?></span></h6>
            </div>
            <div class="center-content">
            	<h6>Secondary Position: <span><?php echo $bio_info['Rugby_Secondary']; ?></span></h6>
            </div>
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Rugby_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Rugby_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Rugby_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Rugby_ProImage2']; ?>" alt="">
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
                            <h6>Points</h6>
                            <span><?php echo $bio_info['Rugby_Point']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Trys</h6>
                            <span><?php echo $bio_info['Rugby_Trys']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Kicks</h6>
                            <span><?php echo $bio_info['Rugby_Kicks']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Passes</h6>
                            <span><?php echo $bio_info['Rugby_Passes']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Meters Run</h6>
                            <span><?php echo $bio_info['Rugby_MeterRuns']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Runs</h6>
                            <span><?php echo $bio_info['Rugby_Run']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Meters / Run</h6>
                            <span><?php echo $bio_info['Rugby_Meter']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Offloads</h6>
                            <span><?php echo $bio_info['Rugby_Offloads']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details box-height">
                	<h4>BIOMETRIC STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Rugby_Height']." feet ".$bio_info['Rugby_HeightInche']." Inches"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Rugby_Weight']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Bench Press Max</h6>
                            <span><?php echo $bio_info['Rugby_Bench']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Squat Max</h6>
                            <span><?php echo $bio_info['Rugby_Squat']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>40 TIme</h6>
                            <span><?php echo $bio_info['Rugby_Time']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Dominant Hand</h6>
                            <span><?php echo $bio_info['Rugby_DomaintHand']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Defensive Specialist</h6>
                            <span><?php echo $bio_info['Rugby_DomaintHand']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Rugby_ProImage3']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Rugby_ProImage3']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Rugby_ProImage4']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Rugby_ProImage4']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
        </div>
    </div>