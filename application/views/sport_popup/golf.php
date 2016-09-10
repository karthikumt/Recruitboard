<?php 
		$if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid']; 
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('golf_sport','UserID',$UserID);
?>

<div id="golf-board" class="zoom-anim-dialog card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Golf_SchoolName']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Golf_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Golf_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Golf Board</h3>
                <p><?php echo $bio_info['Golf_PlayerName']; ?></p>
            </div>
            
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Golf_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Golf_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Golf_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Golf_ProImage2']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
            <div class="center-content">
            	<div class="card-details">
                	<h4>GOLF STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Average Score</h6>
                            <span><?php echo $bio_info['Golf_Average']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Versus Par</h6>
                            <span><?php echo $bio_info['Golf_Versus']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Best Score</h6>
                            <span><?php echo $bio_info['Golf_Best']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Handicap</h6>
                            <span><?php echo $bio_info['Golf_Handicap']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Average Drive</h6>
                            <span><?php echo $bio_info['Golf_Drive']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Fairway Accuracy</h6>
                            <span><?php echo $bio_info['Golf_Fairway']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>GIR %</h6>
                            <span><?php echo $bio_info['Golf_GIR']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Sand Save %</h6>
                            <span><?php echo $bio_info['Golf_Sand_Save']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Eagles/Round</h6>
                            <span><?php echo $bio_info['Golf_Eagles']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Birdies/Round</h6>
                            <span><?php echo $bio_info['Golf_Birdies']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Average Putts</h6>
                            <span><?php echo $bio_info['Golf_Putts']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>GIR Putts</h6>
                            <span><?php echo $bio_info['Golf_GIRPutts']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details">
                	<h4>BIOMETRIC STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Golf_Height']." feet ".$bio_info['Golf_HeightInches']." Inches"; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Golf_Weight']; ?></span>
                        </li> 
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Golf_ProImage3']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Golf_ProImage3']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Golf_ProImage4']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Golf_ProImage4']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
        </div>
         
    </div>