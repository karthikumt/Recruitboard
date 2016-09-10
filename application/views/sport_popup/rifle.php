<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid']; 
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('rifle_sport','UserID',$UserID);
?>



<div id="rifle-board" class="zoom-anim-dialog card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Rifel_SchoolName']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Rifel_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Rifel_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Rifle Board</h3>
                <p><?php echo $bio_info['Rifel_PlayerName']; ?></p>
            </div>
            
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Rifel_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Rifel_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Rifel_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Rifel_ProImage2']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
            <div class="center-content">
            	<div class="card-details">
                	<h4>INDOOR 3P SMALLBORE (50ft)</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Avg Aggregate</h6>
                            <span><?php echo $bio_info['Rifel_Indoor_Avg']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Aggregate</h6>
                            <span><?php echo $bio_info['Rifel_Indoor_Best']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details">
                	<h4>OUTDOOR 3P SMALLBORE (50ft)</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Avg Aggregate</h6>
                            <span><?php echo $bio_info['Rifel_Outdoor_Avg']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Best Aggregate</h6>
                            <span><?php echo $bio_info['Rifel_Outdoor_Best']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details">
                	<h4>OUTDOOR 3P SMALLBORE (50ft)</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>40 Shots Avg</h6>
                            <span><?php echo $bio_info['Rifel_Precision_Avg']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>40 Shots Best</h6>
                            <span><?php echo $bio_info['Rifel_Precision_Best']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>60 Shots Avg</h6>
                            <span><?php echo $bio_info['Rifel_Precision_AvgShot']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>60 Shots Best</h6>
                            <span><?php echo $bio_info['Rifel_Precision_BestShot']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details box-height">
                	<h4>BIOMETRIC STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Rifel_Height']." feet ".$bio_info['Rifel_HeightInche']." Inches"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Rifel_Weight']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Rifel_ProImage3']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Rifel_ProImage3']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Rifel_ProImage4']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Rifel_ProImage4']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
        </div>
    </div>