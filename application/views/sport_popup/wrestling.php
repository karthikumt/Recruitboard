<?php 
		$if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid']; 
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('wrestling_sport','UserID',$UserID);
?>


<div id="wrestling-board" class="zoom-anim-dialog card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Wrest_SchoolName']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Wrest_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Wrest_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Wrestling Board</h3>
                <p><?php echo $bio_info['Wrest_PlayerName']; ?></p>
            </div>
            
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Wrest_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Wrest_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Wrest_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Wrest_ProImage2']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
            <div class="center-content">
            	<div class="card-details">
                	<h4>MATCH STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Win/Loss Record</h6>
                            <span><?php echo $bio_info['Wrest_Win']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Winning %</h6>
                            <span><?php echo $bio_info['Wrest_Winning']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6># of Pins</h6>
                            <span><?php echo $bio_info['Wrest_Pins']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>#  of Years Starting Varsity</h6>
                            <span><?php echo $bio_info['Wrest_Years']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>State Ranking</h6>
                            <span><?php echo $bio_info['Wrest_StateRank']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details">
                	<h4>BIOMETRIC STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Wrest_Height']." feet ".$bio_info['Wrest_HeightInche']." Inches"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6> Natural Weight</h6>
                            <span><?php echo $bio_info['Wrest_Weight']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Projected College Weight Class</h6>
                            <span><?php echo $bio_info['Wrest_Projected']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Wrest_ProImage3']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Wrest_ProImage3']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Wrest_ProImage4']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Wrest_ProImage4']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
        </div>
    </div>