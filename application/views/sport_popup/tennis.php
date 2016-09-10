<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid']; 
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('tennis_sport','UserID',$UserID);
?>


<div id="tennis-board" class="zoom-anim-dialog card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Tenis_SchoolName']; ?></span></h6>
                  
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Tenis_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Tenis_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Tennis Board</h3>
                <p><?php echo $bio_info['Tenis_PlayerName']; ?></p>
            </div>
            
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Tenis_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Tenis_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Tenis_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Tenis_ProImage2']; ?>" alt="">
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
                            <h6>Fastest Serve</h6>
                            <span><?php echo $bio_info['Tenis_Fastest']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>First Serve %</h6>
                            <span><?php echo $bio_info['Tenis_First']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Second Serve %</h6>
                            <span><?php echo $bio_info['Tenis_Second']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details">
                	<h4>PERSONAL RANKING</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Local Team</h6>
                            <span><?php echo $bio_info['Tenis_Local']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>USTA Rank</h6>
                            <span><?php echo $bio_info['Tenis_Usta']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>ITF Rank</h6>
                            <span><?php echo $bio_info['Tenis_Itf']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>WTA Rank</h6>
                            <span><?php echo $bio_info['Tenis_Wta']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>TennisRecruiting.net Rank</h6>
                            <span><?php echo $bio_info['Tenis_Recuirt']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>ATA Rank</h6>
                            <span><?php echo $bio_info['Tenis_Ata']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details">
                	<h4>BIOMETRIC STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Tenis_Height']." feet ".$bio_info['Tenis_HeightInche']." Inches"; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Tenis_Weight']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Dominant Hand</h6>
                            <span><?php echo $bio_info['Tenis_Domaint']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Tenis_ProImage3']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Tenis_ProImage3']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Tenis_ProImage4']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Tenis_ProImage4']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
        </div>
        
    </div>