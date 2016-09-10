<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid'];
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('bowling_sport','UserID',$UserID);
?>

<div id="bowling-board" class="zoom-anim-dialog card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Bowl_Highschool']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Bowl_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Bowl_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Bowling Board</h3>
                <p><?php echo $bio_info['Bowl_PlayerName']; ?></p>
            </div>
            
        </div>
       
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Bowl_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Bowl_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Bowl_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Bowl_ProImage2']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
            <div class="center-content">
            	<div class="card-details">
                	<h4>BOWLING STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6># of Years Bowling Competitively</h6>
                            <span><?php echo $bio_info['Bowl_YearsBowl']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Average Games Bowled/Week</h6>
                            <span><?php echo $bio_info['Bowl_AveGame']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Average Games Bowled/Month</h6>
                            <span><?php echo $bio_info['Bowl_AveGame2']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Average Score</h6>
                            <span><?php echo $bio_info['Bowl_AveScore']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Best Score</h6>
                            <span><?php echo $bio_info['Bowl_BestScore']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Ball Weight</h6>
                            <span><?php echo $bio_info['Bowl_BallWeight']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details">
                	<h4>BIOMETRIC STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Bowl_Height']." feet ".$bio_info['Bowl_HeightInche']."Inches"; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Bowl_Weight']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Dominant Hand</h6>
                            <span><?php echo $bio_info['Bowl_DomaintHand']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Bowl_ProImage3']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Bowl_ProImage3']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Bowl_ProImage4']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Bowl_ProImage4']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
        </div>
         
    </div>