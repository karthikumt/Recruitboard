<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid']; 
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('swimming_sport','UserID',$UserID);
?>

<div id="swimming-and-diving-board" class="zoom-anim-dialog card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Swim_SchoolName']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Swim_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Swim_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Swimming and Diving Board</h3>
                <p><?php echo $bio_info['Swim_PlayerName']; ?></p>
            </div>
            
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Swim_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Swim_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
            <div class="center-content">
            	<div class="card-details">
                	<h4>BIOMETRICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Swim_Height']." feet ".$bio_info['Swim_HeightInche']." Inches"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Swim_Weight']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Year Round Swimmer</h6>
                            <span><?php echo $bio_info['Swim_YearRound']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Total Years Swimming</h6>
                            <span><?php echo $bio_info['Swim_YearSwim']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Competitive Seasons</h6>
                            <span><?php echo $bio_info['Swim_Competitive']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Main Stroke</h6>
                            <span><?php echo $bio_info['Swim_MainStroke']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Swim_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Swim_ProImage2']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
        </div>
        <div class="card-content clearfix">
        	<div class="twobox-content fl">
            	<div class="card-details">
                	<h4>SWIMMING</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Swim_Event_One']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Course</h6>
                            <span><?php echo $bio_info['Swim_Course_One']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Best Time</h6>
                            <span><?php echo $bio_info['Swim_BestMin_One']." Minute ".$bio_info['Swim_BestSec_One']." Seconds"; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Swim_Event_Two']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Course</h6>
                            <span><?php echo $bio_info['Swim_Course_Two']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Best Time</h6>
                            <span><?php echo $bio_info['Swim_BestMin_Two']." Minute ".$bio_info['Swim_BestSec_Two']." Seconds"; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Swim_Event_Three']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Course</h6>
                            <span><?php echo $bio_info['Swim_Course_Three']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Best Time</h6>
                            <span><?php echo $bio_info['Swim_BestMin_Three']." Minute ".$bio_info['Swim_BestSec_Three']." Seconds"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Swim_Event_Four']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Course</h6>
                            <span><?php echo $bio_info['Swim_Course_Four']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Best Time</h6>
                            <span><?php echo $bio_info['Swim_BestMin_Four']." Minute ".$bio_info['Swim_BestSec_Four']." Seconds"; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="twobox-content fr">
            	<div class="card-details">
                	<h4>DIVING</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Swim_Div_Event_One']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Description</h6>
                            <span><?php echo $bio_info['Swim_Div_Desc_One']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Avg score</h6>
                            <span><?php echo $bio_info['Swim_Div_Avg_One']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Best score</h6>
                            <span><?php echo $bio_info['Swim_Div_Best_One']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Swim_Div_Event_Two']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Description</h6>
                            <span><?php echo $bio_info['Swim_Div_Desc_Two']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Avg score</h6>
                            <span><?php echo $bio_info['Swim_Div_Avg_Two']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Best score</h6>
                            <span><?php echo $bio_info['Swim_Div_Best_Two']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>