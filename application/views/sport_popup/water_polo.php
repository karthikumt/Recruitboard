<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid']; 
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('water_polo_sport','UserID',$UserID);
?>

<div id="water-Polo-board" class="zoom-anim-dialog  card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Water_SchoolName']; ?></span></h6>
                    <h6>Class of 20 : <span><?php echo $bio_info['Water_Class']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Water_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Water_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Water Polo Board</h3>
                <p><?php echo $bio_info['Water_PlayerName']; ?></p>
            </div>
            
        </div>
        <div class="bpcard-dt clearfix">
        	<div class="left-content">
            	<h6>Primary Position : <span><?php echo $bio_info['Water_Primary']; ?></span></h6>
            </div>
            
            <div class="center-content">
            	<h6>Secondary Position: <span><?php echo $bio_info['Water_Secondary']; ?></span></h6>
            </div>
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Water_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Water_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Water_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Water_ProImage2']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
            <div class="center-content">
            	<div class="card-details box-height">
                	<h4>PER MATCH STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Shots on Goal</h6>
                            <span><?php echo $bio_info['Water_Shots']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Assists</h6>
                            <span><?php echo $bio_info['Water_Assists']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Goals</h6>
                            <span><?php echo $bio_info['Water_Goals']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Goals Allowed</h6>
                            <span><?php echo $bio_info['Water_Allowed']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Saves</h6>
                            <span><?php echo $bio_info['Water_Saves']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details box-height">
                	<h4>BIOMETRICS STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Water_Height']." feet ".$bio_info['Water_HeightInche']." Inches"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Water_Weight']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Dominant Hand</h6>
                            <span><?php echo $bio_info['Water_DomaintHand']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>50 yd Free Time</h6>
                            <span><?php echo $bio_info['Water_Yard']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>100 yd Free Time</h6>
                            <span><?php echo $bio_info['Water_YardDash']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Defensive Specialist</h6>
                            <span><?php echo $bio_info['Water_Defensive']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Water_ProImage3']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Water_ProImage3']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Water_ProImage4']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Water_ProImage4']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
        </div>
    </div>