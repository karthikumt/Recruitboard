<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid'];
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('fencing_sport','UserID',$UserID);
?>


<div id="fencing-board" class="zoom-anim-dialog  card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Fence_SchoolName']; ?></span></h6>
                    <h6>Class of 20 : <span><?php echo $bio_info['Fence_Class']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Fence_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Fence_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Fencing Board</h3>
                <p><?php echo $bio_info['Fence_PlayerName']; ?></p>
            </div>
            
        </div>
        <div class="bpcard-dt clearfix">
        	<div class="left-content">
            	<h6>Primary Position:<span><?php echo $bio_info['Fence_Primary']; ?></span></h6>
            </div>
            <div class="center-content">
            	<h6>Secondary Position:<span><?php echo $bio_info['Fence_Secondary']; ?></span> </h6>
            </div>
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Fence_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Fence_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Fence_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Fence_ProImage2']; ?>" alt="">
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
                            <h6>Wins</h6>
                            <span><?php echo $bio_info['Fence_Wins']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Losses</h6>
                            <span><?php echo $bio_info['Fence_Losses']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Draws</h6>
                            <span><?php echo $bio_info['Fence_Draws']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Years of Experience</h6>
                            <span><?php echo $bio_info['Fence_Years']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>USFA Classification</h6>
                            <span><?php echo $bio_info['Fence_Classification']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details">
                	<h4>BIOMETRIC STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Fence_Height']." feet ".$bio_info['Fence_HeightInche']." Inches"; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Fence_Weight']; ?></span>
                        </li> 
                        <li class="clearfix">
                            <h6>Dominant Hand</h6>
                            <span><?php echo $bio_info['Fence_DomaintHand']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Fence_ProImage3']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Fence_ProImage3']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Fence_ProImage4']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Fence_ProImage4']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
        </div>
         
    </div>