<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid']; 
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('men_gym_sport','UserID',$UserID);
?>


<div id="mens-gymnastics-board" class="zoom-anim-dialog card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Gym_SchoolName']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Gym_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Gym_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Men’s Gymnastics Board</h3>
                <p><?php echo $bio_info['Gym_PlayerName']; ?></p>
            </div>
            
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-details">
                	<h4>FLOOR EXERCISE</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Best Score</h6>
                            <span><?php echo $bio_info['Gym_Floor_Score']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Average Score</h6>
                            <span><?php echo $bio_info['Gym_Floor_Average']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details">
                	<h4>PARALLEL BARS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Best Score</h6>
                            <span><?php echo $bio_info['Gym_Parallel_Score']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Average Score</h6>
                            <span><?php echo $bio_info['Gym_Parallel_Average']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Gym_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Gym_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
            <div class="center-content">
            	<div class="card-details">
                	<h4>VAULT</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Best Score</h6>
                            <span><?php echo $bio_info['Gym_Vault_Score']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Average Score</h6>
                            <span><?php echo $bio_info['Gym_Vault_Average']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details">
                	<h4>HIGH BAR</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Best Score</h6>
                            <span><?php echo $bio_info['Gym_High_Score']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Average Score</h6>
                            <span><?php echo $bio_info['Gym_High_Average']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details box-height">
                	<h4>BIOMETRICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Gym_Height']." feet ".$bio_info['Gym_HeightInche']." Inches"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Gym_Weight']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-details">
                	<h4>STILL RINGS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Best Score</h6>
                            <span><?php echo $bio_info['Gym_Still_Score']; ?></span>
                        </li>
                         <li class="clearfix">

                            <h6>Average Score</h6>
                            <span><?php echo $bio_info['Gym_Still_Average']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details">
                	<h4>POMMEL HORSE</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Best Score</h6>
                            <span><?php echo $bio_info['Gym_Pommel_Score']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Average Score</h6>
                            <span><?php echo $bio_info['Gym_Pommel_Average']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Gym_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Gym_ProImage2']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
        </div>
    </div>