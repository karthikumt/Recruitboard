<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid']; 
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('cross_country_sport','UserID',$UserID);
?>

<div id="cross-country-board" class="zoom-anim-dialog  card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Cross_SchoolName']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Cross_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Cross_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Cross Country Board</h3>
                <p><?php echo $bio_info['Cross_PlayerName']; ?></p>
            </div>
            
        </div>
       
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Cross_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Cross_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
            <div class="center-content">
            	<div class="card-details">
                	<h4>BIOMETRIC STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Cross_Height']." feet ".$bio_info['Cross_HeightInche']." Inches"; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Cross_Weight']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Mile Time</h6>
                            <span><?php echo $bio_info['Cross_MileTime']." Minutes ".$bio_info['Cross_MileSecond']." Seconds"; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details">
                	<h4>CROSS COUNTRY EVENTS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Distance</h6>
                            <span><?php echo $bio_info['Cross_Distance']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Best time</h6>
                            <span><?php echo $bio_info['Cross_BestTime']." Minutes ".$bio_info['Cross_BestTimeSecond']." Seconds"; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Next Best time</h6>
                            <span><?php echo $bio_info['Cross_NextBestTime']." Minutes ".$bio_info['Cross_NextBestTimeSecond']." Seconds"; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Distance</h6>
                            <span><?php echo $bio_info['Cross_Distance_Two']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Best time</h6>
                            <span><?php echo $bio_info['Cross_BestTime_Two']." Minutes ".$bio_info['Cross_BestTimeSecond_Two']." Seconds"; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Next Best time</h6>
                            <span><?php echo $bio_info['Cross_NextBestTime_Two']." Minutes ".$bio_info['Cross_NextBestTimeSecond_Two']." Seconds"; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Cross_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Cross_ProImage2']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
        </div>
         
    </div>