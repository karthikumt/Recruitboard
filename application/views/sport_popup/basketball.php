<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid'];
          
		$bio_info=$this->general_model->get_single_data_by_column('basketball_sport','UserID',$UserID);
?>
	
    
    <div id="baseball-player-card" class="zoom-anim-dialog  card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Bask_SchoolName']; ?></span></h6>
                    <h6>Class of 20 : <span><?php echo $bio_info['Bask_Class']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Bask_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Bask_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Basketball Card</h3>
                <p> <?php echo $bio_info['Bask_PlayerName']; ?></p>
            </div>
            
        </div>
       
        <div class="bpcard-dt clearfix">
        	<div class="left-content">
            	<h6>Primary Position : <span><?php echo $bio_info['Bask_Primary']; ?></span></h6>
            </div>
            
            <div class="center-content">
            	<h6>Secondary Position: <span><?php echo $bio_info['Bask_Secondary']; ?></span></h6>
            </div>
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img top-upload">
                	<?php if($bio_info['Bask_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Bask_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img right-upload">
                	<?php if($bio_info['Bask_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Bask_ProImage2']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            	
            </div>
            <div class="center-content">
            	<div class="card-details">
                	<h4>PER GAME STATS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Points</h6>
                            <span><?php echo $bio_info['Bask_Points']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Field Goal %</h6>
                            <span><?php echo $bio_info['Bask_Field']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Free Throw %</h6>
                            <span><?php echo $bio_info['Bask_FreeThrow']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>3 Point Field Goal %</h6>
                            <span><?php echo $bio_info['Bask_PointField']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Rebounds</h6>
                            <span><?php echo $bio_info['bask_Rebound']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Assists</h6>
                            <span><?php echo $bio_info['Bask_Assist']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Steals</h6>
                            <span><?php echo $bio_info['Bask_Steal']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Blocks</h6>
                            <span><?php echo $bio_info['Bask_Blocks']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Defensive Specialist</h6>
                            <span><?php echo $bio_info['Bask_Defensive']; ?></span>
                        </li>
                        
                    </ul>
                </div>
                <div class="card-details card-state">
                	<h4>BIOMETRIC STATISTICS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Height (w / shoes)</h6>
                            <span><?php echo $bio_info['Bask_HeightWith'].'feet &nbsp;'.$bio_info['Bask_HeightwithInche'].'inches';?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Height (w /o shoes)</h6>
                            <span><?php echo $bio_info['Bask_HeightWithout'].'feet &nbsp;'.$bio_info['Bask_HeightWithoutInche'].'inches';?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Weight</h6>
                            <span><?php echo $bio_info['Bask_Weight']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Vertical</h6>
                            <span><?php echo $bio_info['Bask_Verticle']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Wingspan</h6>
                            <span><?php echo $bio_info['Bask_Wingspan'].'feet &nbsp;'.$bio_info['Bask_WingspanInche'].'inches';?></span>
                        </li>
                        <li class="clearfix">
                            <h6>3 / 4 Court Sprint</h6>
                            <span><?php echo $bio_info['Bask_CourtSprin']; ?></span>
                        </li>
                    </ul>
                </div>
              
            </div>
            <div class="right-content">
            	<div class="card-img top-upload">
                	<?php if($bio_info['Bask_ProImage3']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Bask_ProImage3']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-img right-upload">
                	<?php if($bio_info['Bask_ProImage4']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Bask_ProImage4']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                
            
            </div>
        </div>
    </div>
    
  
   