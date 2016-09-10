<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid'];
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('women_gym_sport','UserID',$UserID);
?>

<div id="womens-gymnastics-board" class="zoom-anim-dialog card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Women_SchoolName']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Women_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Women_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Womens Gymnastics Board</h3>
                <p><?php echo $bio_info['Women_PlayerName']; ?></p>
            </div>
            
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Women_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Women_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Women_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Women_ProImage2']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
            <div class="center-content">
            	<div class="card-details">
                	<h4>FLOOR EXERCISE</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Best Score</h6>
                            <span><?php echo $bio_info['Women_BestScore']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Average Score</h6>
                            <span><?php echo $bio_info['Women_AvgScore']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details">
                	<h4>BALANCE BEAM</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Best Score</h6>
                            <span><?php echo $bio_info['Women_Bal_BestScore']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Average Score</h6>
                            <span><?php echo $bio_info['Women_Bal_AvgScore']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details">
                	<h4>VAULT</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Best Score</h6>
                            <span><?php echo $bio_info['Women_Vault_BestScore']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Average Score</h6>
                            <span><?php echo $bio_info['Women_Vault_AvgScore']; ?></span>
                        </li>
                    </ul>
                </div>	
                <div class="card-details">
                	<h4>UNEVEN BARS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Best Score</h6>
                            <span><?php echo $bio_info['Women_UnEven_BestScore']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Average Score</h6>
                            <span><?php echo $bio_info['Women_UnEven_AvgScore']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details">
                	<h4>ALL AROUND</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Best Score</h6>
                            <span><?php echo $bio_info['Women_All_BestScore']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Average Score</h6>
                            <span><?php echo $bio_info['Women_All_AvgScore']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details">
                	<h4>BIOMETRICS STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Women_Height']." feet ".$bio_info['Women_HeightInche']." Inches"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Women_Weight']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Women_ProImage3']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Women_ProImage3']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Women_ProImage4']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Women_ProImage4']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
        </div>
    </div>