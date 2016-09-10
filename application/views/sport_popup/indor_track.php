<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid']; 
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('indoor_sport','UserID',$UserID);
?>

<div id="indoor-track-and-field-board" class="zoom-anim-dialog  card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Indoor_SchoolName']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Indoor_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Indoor_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Indoor Track & Field Board </h3>
                <p><?php echo $bio_info['Indoor_PlayerName']; ?></p>
            </div>
            
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Indoor_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Indoor_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
            <div class="center-content">
            	<div class="card-details box-height">
                	<h4>PER GAME STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Indoor_Height']." feet ".$bio_info['Indoor_HeightInche']." Inches"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Indoor_Weight']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Indoor_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Indoor_ProImage2']; ?>" alt="">
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
                            <span><?php echo $bio_info['Indoor_Track_Event_One']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Time</h6>
                            <span><?php echo $bio_info['Indoor_Track_EventMin_One']." Feet ". $bio_info['Indoor_Track_EventSec_One']." Inches"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Indoor_Track_Event_Two']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Time</h6>
                            <span><?php echo $bio_info['Indoor_Track_EventMin_Two']." Feet ". $bio_info['Indoor_Track_EventSec_Two']." Inches"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Indoor_Track_Event_Three']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Time</h6>
                           <span><?php echo $bio_info['Indoor_Track_EventMin_Three']." Feet ". $bio_info['Indoor_Track_EventSec_Three']." Inches"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Indoor_Track_Event_Four']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Time</h6>
                            <span><?php echo $bio_info['Indoor_Track_EventMin_Four']." Feet ". $bio_info['Indoor_Track_EventSec_Four']." Inches"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Indoor_Track_Event_Five']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Time</h6>
                            <span><?php echo $bio_info['Indoor_Track_EventMin_Five']." Feet ". $bio_info['Indoor_Track_EventSec_Five']." Inches"; ?></span>
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
                            <span><?php echo $bio_info['Indoor_Field_Event_One']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Performance</h6>
                            <span><?php echo $bio_info['Indoor_Field_EventMin_One']." Minutes ". $bio_info['Indoor_Field_EventSec_One']." Seconds"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Indoor_Field_Event_Two']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Performance</h6>
                            <span><?php echo $bio_info['Indoor_Field_EventMin_Two']." Minutes ". $bio_info['Indoor_Field_EventSec_Two']." Seconds"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Indoor_Field_Event_Three']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Performance</h6>
                            <span><?php echo $bio_info['Indoor_Field_EventMin_Three']." Minutes ". $bio_info['Indoor_Field_EventSec_Three']." Seconds"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Indoor_Field_Event_Four']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Performance</h6>
                            <span><?php echo $bio_info['Indoor_Field_EventMin_Four']." Minutes ". $bio_info['Indoor_Field_EventSec_Four']." Seconds"; ?>></span>
                        </li>
                         <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Indoor_Field_Event_Five']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Performance</h6>
                            <span><?php echo $bio_info['Indoor_Field_EventMin_Five']." Minutes ". $bio_info['Indoor_Field_EventSec_Five']." Seconds"; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
         
    </div>