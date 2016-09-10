<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid'];
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('cheerleading_sport','UserID',$UserID);
?>

<div id="cheerleading-board" class="zoom-anim-dialog card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Cheer_SchoolName']; ?></span></h6>
                    <h6>Class of 20 : <span><?php echo $bio_info['Cheer_Class']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Cheer_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Cheer_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Cheerleading Board</h3>
                <p> <?php echo $bio_info['Cheer_PlayerName']; ?></p>
            </div>
            
        </div>
       <div class="bpcard-dt clearfix">
        	<div class="left-content">
            	<h6>Primary Position:<span><?php echo $bio_info['Cheer_Primary']; ?></span></h6>
            </div>
            <div class="center-content">
            	<h6>Secondary Position:<span><?php echo $bio_info['Cheer_Secondary']; ?></span> </h6>
            </div>
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Cheer_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Cheer_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Cheer_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Cheer_ProImage2']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                
                
                
            </div>
            <div class="center-content">
            	<div class="card-details">
                	<h4>STANDING TUMBLING SKILLS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Back Handspring</h6>
                            <span><?php echo $bio_info['Cheer_BackHand']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Back Tuck</h6>
                            <span><?php echo $bio_info['Cheer_BackTuck']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Back Handspring Back Tuck</h6>
                            <span><?php echo $bio_info['Cheer_BackHandSpring']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Other</h6>
                            <span><?php echo $bio_info['Cheer_Other']; ?></span>
                        </li>
                    </ul>
                </div>
                
                <div class="card-details">
                	<h4>RUNNING TUMBLING SKILLS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Roundoff Back Handspring Series</h6>
                            <span><?php echo $bio_info['Cheer_RoundOffBack']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Roundoff Back Handspring Tuck</h6>
                            <span><?php echo $bio_info['Cheer_RoundOffBackHand']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Other</h6>
                            <span><?php echo $bio_info['Cheer_RoundOffOther']; ?></span>
                        </li>
                    </ul>
                </div>
                
                <div class="card-details">
                	<h4>STANDING TUMBLING SKILLS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Flyer</h6>
                            <span><?php echo $bio_info['Cheer_Flyer']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Base</h6>
                            <span><?php echo $bio_info['Cheer_Base']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Both</h6>
                            <span><?php echo $bio_info['Cheer_Both']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Backstop</h6>
                            <span><?php echo $bio_info['Cheer_BackStop']; ?></span>
                        </li>
                        
                    </ul>
                </div>
                
                <div class="card-details">
                	<h4>BIOMETRIC STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Cheer_Height']." feet ".$bio_info['Cheer_HeightInche']." Inches"; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Cheer_Weight']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Cheer_ProImage3']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Cheer_ProImage3']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Cheer_ProImage4']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Cheer_ProImage4']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                
                
                
            </div>
        </div>
         
    </div>