<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid'];
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('rowing_sport','UserID',$UserID);
?>

<div id="rowing-board" class="zoom-anim-dialog card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Row_SchoolName']; ?></span></h6>
                    <h6>Class of 20 : <span><?php echo $bio_info['Row_Class']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Row_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Row_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Crew Board</h3>
                <p><?php echo $bio_info['Row_PlayerName']; ?></p>
            </div>
            
        </div>
        <div class="bpcard-dt clearfix">
        	<div class="left-content">
            	<h6>Primary Position:<span><?php echo $bio_info['Row_Primary']; ?></span></h6>
            </div>
            <div class="center-content">
            	<h6>Secondary Position:<span><?php echo $bio_info['Row_Secondary']; ?></span> </h6>
            </div>
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Row_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Row_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Row_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Row_ProImage2']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
            <div class="center-content">
            	<div class="card-details">
                	<h4>ROWING STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>2K ERG Score</h6>
                            <span><?php echo $bio_info['Row_ErgMin_Two']." Minutes ".$bio_info['Row_ErgSec_Two']." Seconds "; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>5K ERG Score</h6>
                            <span><?php echo $bio_info['Row_ErgMin_Five']." Minutes ".$bio_info['Row_ErgSec_Five']." Seconds "; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>6K ERG Score</h6>
                            <span><?php echo $bio_info['Row_ErgMin_Six']." Minutes ".$bio_info['Row_ErgSec_Six']." Seconds "; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Total Seasons Rowed</h6>
                            <span><?php echo $bio_info['Row_Season']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Row_Sta_Weight']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details box-height">
                	<h4>BIOMETRIC STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Row_Bio_Height']." feet ".$bio_info['Row_Bio_HeightInche']." Inches"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Row_Bio_Weight']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Bench Press Max</h6>
                            <span><?php echo $bio_info['Row_Bio_Bench']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Squat Max</h6>
                            <span><?php echo $bio_info['Row_Bio_Squat']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Dominant Hand</h6>
                            <span><?php echo $bio_info['Row_Bio_DomaintHand']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Wingspan</h6>
                            <span><?php echo $bio_info['Row_WingSpan']." feet ".$bio_info['Row_WingSpanInche']." Inches"; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Row_ProImage3']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Row_ProImage3']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Row_ProImage4']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Row_ProImage4']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
        </div>
    </div>