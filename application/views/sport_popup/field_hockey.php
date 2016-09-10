<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid'];
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('field_hockey_sport','UserID',$UserID);
?>

<div id="field-hockey-board" class="zoom-anim-dialog card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Field_SchoolName']; ?></span></h6>
                    <h6>Class of 20 : <span><?php echo $bio_info['Field_Class']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Field_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Field_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Field Hockey Board</h3>
                <p><?php echo $bio_info['Field_PlayerName']; ?></p>
            </div>
            
        </div>
        <div class="bpcard-dt clearfix">
        	<div class="left-content">
            	<h6>Primary Position:<span><?php echo $bio_info['Field_Primary']; ?></span></h6>
            </div>
            <div class="center-content">
            	<h6>Secondary Position: <span><?php echo $bio_info['Field_Secondary']; ?></span></h6>
            </div>
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Field_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Field_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Field_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Field_ProImage2']; ?>" alt="">
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
                            <span><?php echo $bio_info['Field_Goals']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Shots on Goal</h6>
                            <span><?php echo $bio_info['Field_Shots']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Assists</h6>
                            <span><?php echo $bio_info['Field_Assists']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Goals Against</h6>
                            <span><?php echo $bio_info['Field_Against']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Saves</h6>
                            <span><?php echo $bio_info['Field_Saves']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Varsity Experience</h6>
                            <span><?php echo $bio_info['Field_Varsity']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details">
                	<h4>BIOMETRIC STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Field_Height']." feet ".$bio_info['Field_HeightInche']." Inches"; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Field_Weight']; ?></span>
                        </li> 
                        <li class="clearfix">
                            <h6>Mile Time</h6>
                            <span><?php echo $bio_info['Field_Mile']." Minute ".$bio_info['Field_MileInche']." Seconds"; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Dominant Hand</h6>
                            <span><?php echo $bio_info['Field_DomaintHand']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Defensive specialist</h6>
                            <span><?php echo $bio_info['Field_Defensive']; ?></span>
                        </li> 
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Field_ProImage3']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Field_ProImage3']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Field_ProImage4']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Field_ProImage4']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
        </div>
         
    </div>