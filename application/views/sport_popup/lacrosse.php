<?php 
	if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid'];
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('lacross_sport','UserID',$UserID);
?>


<div id="lacrosse-board" class="zoom-anim-dialog card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Lac_SchoolName']; ?></span></h6>
                    <h6>Class of 20 : <span> <?php echo $bio_info['Lac_Class']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Lac_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Lac_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Lacrosse Board</h3>
                <p><?php echo $bio_info['Lac_PlayerName']; ?></p>
            </div>
            
        </div>
        <div class="bpcard-dt clearfix">
        	<div class="left-content">
            	<h6>Primary Position:<span><?php echo $bio_info['Lac_Primary']; ?></span></h6>
            </div>
            <div class="right-content">
            	<h6>Secondary Position:<span><?php echo $bio_info['Lac_Primary']; ?></span> </h6>
            </div>
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Lac_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Lac_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Lac_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Lac_ProImage2']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
            <div class="center-content">
            	<div class="card-details box-height">
                	<h4>PER GAME STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Goals</h6>
                            <span><?php echo $bio_info['Lac_Goals']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Shots on Goal</h6>
                            <span><?php echo $bio_info['Lac_Shots']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Assists</h6>
                            <span><?php echo $bio_info['Lac_Assists']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Ground Ball Pickups</h6>
                            <span><?php echo $bio_info['Lac_Ground']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Goals Allowed</h6>
                            <span><?php echo $bio_info['Lac_Allowed']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Saves</h6>
                            <span><?php echo $bio_info['Lac_Saves']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Faceoff % Won</h6>
                            <span><?php echo $bio_info['Lac_Faceoff']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Penalty Minutes</h6>
                            <span><?php echo $bio_info['Lac_Penalty']; ?></span>
                        </li>
                        
                    </ul>
                </div>
                <div class="card-details box-height">
                	<h4>BIOMETRIC STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Lac_Height']." feet ".$bio_info['Lac_HeightInche']." Inches"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Lac_Weight']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Wingspan</h6>
                            <span><?php echo $bio_info['Lac_WingSpan']." Minute ".$bio_info['Lac_WingSpanInche']." Inches" ; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>40 time</h6>
                            <span><?php echo $bio_info['Lac_Times']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Vertical Jump</h6>
                            <span><?php echo $bio_info['Lac_Vertical']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Dominant hand</h6>
                            <span><?php echo $bio_info['Lac_DomaintHand']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Defensive Specialist</h6>
                            <span><?php echo $bio_info['Lac_Defensive']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Lac_ProImage3']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Lac_ProImage3']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Lac_ProImage4']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Lac_ProImage4']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
        </div>
    </div>