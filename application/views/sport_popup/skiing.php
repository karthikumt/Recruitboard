<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid']; 
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('skiing_sport','UserID',$UserID);
?>

<div id="skiing-board" class="zoom-anim-dialog card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Skiing_SchoolName']; ?></span></h6>
                    <h6>Class of 20 : <span><?php echo $bio_info['Skiing_Class']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Skiing_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Skiing_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Skiing Board</h3>
                <p><?php echo $bio_info['Skiing_PlayerName']; ?></p>
            </div>
            
        </div>
        <div class="bpcard-dt clearfix">
        	<div class="left-content">
            	<h6>FIS Member #: <span><?php echo $bio_info['Skiing_Fis']; ?></span></h6>
            </div>
            <div class="center-content">
            	<h6>USSA Member #: <span><?php echo $bio_info['Skiing_Ussa']; ?></span></h6>
            </div>
        </div>
        <div class="card-content clearfix">
        	<div class="twobox-content fl">
            	<div class="card-details">
                	<h4>ALPINE SKIING</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Skiing_Alpine_Event_One']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Avg time</h6>
                            <span><?php echo $bio_info['Skiing_Alpine_AvgMin_One']." Minute ".$bio_info['Skiing_Alpine_AvgSec_One']." Second"; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Best Time</h6>
                            <span><?php echo $bio_info['Skiing_Alpine_BestMin_One']." Minute ".$bio_info['Skiing_Alpine_BestSec_One']." Second"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Skiing_Alpine_Event_Two']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Avg time</h6>
                            <span><?php echo $bio_info['Skiing_Alpine_AvgMin_Two']." Minute ".$bio_info['Skiing_Alpine_AvgSec_Two']." Second"; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Best Time</h6>
                            <span><?php echo $bio_info['Skiing_Alpine_BestMin_Two']." Minute ".$bio_info['Skiing_Alpine_BestSec_Two']." Second"; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="twobox-content fr">
            	<div class="card-details">
                	<h4>NORDIC SKIING</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Skiing_Nordic_AvgMin_One']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Avg time</h6>
                            <span><?php echo $bio_info['Skiing_Nordic_AvgMin_One']." Minute ".$bio_info['Skiing_Nordic_AvgSec_One']." Second"; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Best Time</h6>
                            <span><?php echo $bio_info['Skiing_Nordic_BestMin_One']." Minute ".$bio_info['Skiing_Nordic_BestSec_One']." Second"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Event</h6>
                            <span><?php echo $bio_info['Skiing_Nordic_Event_Two']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Avg time</h6>
                            <span><?php echo $bio_info['Skiing_Nordic_AvgMin_Two']." Minute ".$bio_info['Skiing_Nordic_AvgSec_Two']." Second"; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Best Time</h6>
                            <span><?php echo $bio_info['Skiing_Nordic_BestMin_Two']." Minute ".$bio_info['Skiing_Nordic_BestSec_Two']." Second"; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="twobox-content fl">
            	<div class="card-img">
                	<?php if($bio_info['Skiing_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Skiing_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
            <div class="twobox-content fr">
            	<div class="card-img">
                	<?php if($bio_info['Skiing_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Skiing_ProImage2']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
        </div>
    </div>