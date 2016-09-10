<?php
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid']; 
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('volleyball_sport','UserID',$UserID);
		
	?>
	
    
    <div id="baseball-player-card" class="zoom-anim-dialog  card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Volly_SchoolName']; ?></span></h6>
                    <h6>Class of 20 : <span><?php echo $bio_info['Volly_Class']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Volly_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Volly_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Volleyball Card</h3>
                <p> <?php echo $bio_info['Volly_PlayerName']; ?></p>
            </div>
            
        </div>
       
        <div class="bpcard-dt clearfix">
        	<div class="left-content">
            	<h6>Primary Position : <span><?php echo $bio_info['Volly_Primary']; ?></span></h6>
            </div>
            
            <div class="center-content">
            	<h6>Secondary Position: <span><?php echo $bio_info['Volly_Secondary']; ?></span></h6>
            </div>
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img top-upload">
                	<?php if($bio_info['Volly_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Volly_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img right-upload">
                	<?php if($bio_info['Volly_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Volly_ProImage2']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            	
            </div>
            <div class="center-content">
            	<div class="card-details">
                	<h4>GAME STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Hitting %</h6>
                            <span><?php echo $bio_info['Volly_Hitting']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Blocks/Set</h6>
                            <span><?php echo $bio_info['Volly_Block']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Digs/Set</h6>
                            <span><?php echo $bio_info['Volly_Digs']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Aces/Set</h6>
                            <span><?php echo $bio_info['Volly_Set']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Ace %</h6>
                            <span><?php echo $bio_info['Volly_Ace']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Serving Points/Set</h6>
                            <span><?php echo $bio_info['Volly_Serving']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Serve %</h6>
                            <span><?php echo $bio_info['Volly_Serve']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Assists/Set</h6>
                            <span><?php echo $bio_info['Volly_Assists']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Kills/Set</h6>
                            <span><?php echo $bio_info['Volly_KillSet']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Kill %</h6>
                            <span><?php echo $bio_info['Volly_Kill']; ?></span>
                        </li>
                        
                    </ul>
                </div>
                <div class="card-details card-state">
                	<h4>BIOMETRIC STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height</h6>
                            <span><?php echo $bio_info['Volly_Height'].'feet &nbsp;'.$bio_info['Volly_HeightInche'].'inches';?></span>
                        </li>
                       
                        <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Volly_Weight']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Dominant Hand</h6>
                            <span><?php echo $bio_info['Volly_DomaintHand']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Standing Vertical</h6>
                            <span><?php echo $bio_info['Volly_Standing']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Approach Vertical</h6>
                            <span><?php echo $bio_info['Volly_Approach']; ?></span>
                        </li>
                    </ul>
                </div>
              
            </div>
            <div class="right-content">
            	<div class="card-img top-upload">
                	<?php if($bio_info['Volly_ProImage3']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Volly_ProImage3']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img right-upload">
                	<?php if($bio_info['Volly_ProImage4']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Volly_ProImage4']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                
            
            </div>
        </div>
    </div>