<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid']; 
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('track_and_field_sport','UserID',$UserID);
?>


<div id="track-and-field-board" class="zoom-anim-dialog card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Track_SchoolName']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Track_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Track_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Track and Field Board</h3>
                <p><?php echo $bio_info['Track_PlayerName']; ?></p>
            </div>
            
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Track_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Track_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
            <div class="center-content">
            	<div class="card-details box-height">
                	<h4>BIOMETRICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Track_Height']." feet ".$bio_info['Track_HeightInche']." Inches"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Track_Weight']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Track_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Track_ProImage2']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
        </div>
        <div class="card-content clearfix">
        	<div class="twobox-content fl">
            	<div class="card-details">
                	<h4>TRACK EVENTS</h4>
                    <ul class="card-listing">
                         <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Track_Event_One']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Time</h6>
                            <span><?php echo $bio_info['Track_BestMin_One']." Minute ".$bio_info['Track_BestSec_One']." Second"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Track_Event_Two']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Time</h6>
                            <span><?php echo $bio_info['Track_BestMin_Two']." Minute ".$bio_info['Track_BestSec_Two']." Second"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Track_Event_Three']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Time</h6>
                            <span><?php echo $bio_info['Track_BestMin_Three']." Minute ".$bio_info['Track_BestSec_Three']." Second"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Track_Event_Four']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Time</h6>
                            <span><?php echo $bio_info['Track_BestMin_Four']." Minute ".$bio_info['Track_BestSec_Four']." Second"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Track_Event_Five']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Time</h6>
                            <span><?php echo $bio_info['Track_BestMin_Five']." Minute ".$bio_info['Track_BestSec_Five']." Second"; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="twobox-content fr">
            	<div class="card-details">
                	<h4>FIELD EVENTS</h4>
                    <ul class="card-listing">
                         <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Track_Field_Event_One']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Performance</h6>
                            <span><?php echo $bio_info['Track_Field_BestPer_One']." feet ".$bio_info['Track_Field_BestInches_One']." Inches"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Track_Field_Event_Two']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Performance</h6>
                            <span><?php echo $bio_info['Track_Field_BestPer_Two']." feet ".$bio_info['Track_Field_BestInches_Two']." Inches"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Track_Field_Event_Three']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Performance</h6>
                            <span><?php echo $bio_info['Track_Field_BestPer_Three']." feet ".$bio_info['Track_Field_BestInches_Three']." Inches"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Track_Field_Event_Four']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Performance</h6>
                            <span><?php echo $bio_info['Track_Field_BestPer_Four']." feet ".$bio_info['Track_Field_BestInches_Four']." Inches"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Track_Field_Event_Five']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Performance</h6>
                            <span><?php echo $bio_info['Track_Field_BestPer_Five']." feet ".$bio_info['Track_Field_BestInches_Five']." Inches"; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>