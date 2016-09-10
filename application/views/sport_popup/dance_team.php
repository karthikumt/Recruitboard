<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid'];
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('danceteam_sport','UserID',$UserID);
?>
<div id="dance-team-board" class="zoom-anim-dialog card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Dance_SchoolName']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Dance_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Dance_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Dance Team Board</h3>
                <p><?php echo $bio_info['Dance_PlayerName']; ?></p>
            </div>
            
        </div>
       
        <div class="card-content clearfix">
        	<div class="left-content">
                <div class="card-img">
                	<?php if($bio_info['Dance_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Dance_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            	<div class="card-details">
                	<h4>LEAPS ( List Top 3 )</h4>
                    <ul class="card-listing">
                        <li >
                            <?php echo $bio_info['Dance_Leaps_One']; ?>
                        </li>
                        <li >
                            <?php echo $bio_info['Dance_Leaps_Two']; ?>
                        </li>
                        <li >
                            <?php echo $bio_info['Dance_Leaps_Three']; ?>
                        </li>
                    </ul>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Dance_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Dance_ProImage2']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
            <div class="center-content">
            	<div class="card-details">
                	<h4>TURNS ( List Top 3 )</h4>
                    <ul class="card-listing">
                        <li >
                            <?php echo $bio_info['Dance_Turns_One']; ?>
                        </li>
                        <li >
                            <?php echo $bio_info['Dance_Turns_Two']; ?>
                        </li>
                        <li >
                            <?php echo $bio_info['Dance_Turns_Three']; ?>
                        </li>
                    </ul>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Dance_ProImage3']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Dance_ProImage3']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-details">
                	<h4>BIOMETRIC STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Dance_Height']." feet ".$bio_info['Dance_HeightInche']." Inches"; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Dance_Weight']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Dominant Hand</h6>
                            <span><?php echo $bio_info['Dance_DomaintHand']; ?></span>
                        </li>
                    </ul>
                </div>
                
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Dance_ProImage4']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Dance_ProImage4']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            	<div class="card-details">
                	<h4>JUMPS ( List Top 3 )</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <?php echo $bio_info['Dance_Jumps_One']; ?>
                        </li>
                        <li>
                            <?php echo $bio_info['Dance_Jumps_Two']; ?>
                        </li>
                        <li>
                            <?php echo $bio_info['Dance_Jumps_Three']; ?>
                        </li>
                    </ul>
                </div>
                
                
            </div>
        </div>
        
         
    </div>