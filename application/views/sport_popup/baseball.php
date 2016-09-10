<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid']; 
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('baseball_sport','UserID',$UserID);
?>
	
    
    <div id="baseball-player-card" class="zoom-anim-dialog  card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Bas_HighSchool']; ?></span></h6>
                    <h6>Class of 20 : <span><?php echo $bio_info['Bas_Class']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Bas_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Bas_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Baseball Card</h3>
                <p> <?php echo $bio_info['Bas_Player']; ?></p>
            </div>
            
        </div>
      
        <div class="bpcard-dt clearfix">
        	<div class="left-content">
            	<h6>Primary Position : <span><?php echo $bio_info['Bas_Position']; ?></span></h6>
            </div>
            <div class="center-content">
            	<h6>Throws : <span> <?php echo $bio_info['Bas_Throws']; ?></span></h6>
            </div>
            <div class="right-content">
            	<h6>Bats : <span><?php echo $bio_info['Bas_Bats']; ?></span></h6>
            </div>
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Bas_LeftImageName']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Bas_LeftImageName']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            	<div class="card-details card-state">
                	<h4>Pitching Stats</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>ERA</h6>
                            <span><?php echo $bio_info['Bas_Era']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Win / Loss Record</h6>
                            <span><?php echo $bio_info['Bas_Win']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Primary Pitch</h6>
                            <span><?php echo $bio_info['Bas_Primary']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Secondary Pitch</h6>
                            <span><?php echo $bio_info['Bas_Secondary']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Fastball Velocity</h6>
                            <span><?php echo $bio_info['Bas_FastBall']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="center-content">
            	<div class="card-details">
                	<h4>Hitting Stats</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Batting Average</h6>
                            <span><?php echo $bio_info['Bas_Batting']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>RBI</h6>
                            <span><?php echo $bio_info['Bas_Rbi']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Stolen Bases</h6>
                            <span><?php echo $bio_info['Bas_Stolen']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>On Base %</h6>
                            <span><?php echo $bio_info['Bas_OnBase']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>60 Yard Dash</h6>
                            <span><?php echo $bio_info['Bas_YardDash']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Speed from Home to First</h6>
                            <span><?php echo $bio_info['Bas_Speed']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Bas_MiddleImageName']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Bas_MiddleImageName']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Bas_RightImageName']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Bas_RightImageName']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
            	<div class="card-details card-state">
                	<h4>Fielding Stats</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Assists</h6>
                            <span><?php echo $bio_info['Bas_Assist']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Put Outs</h6>
                            <span><?php echo $bio_info['Bas_Put']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Double Plays</h6>
                            <span><?php echo $bio_info['Bas_Double']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Triple Plays</h6>
                            <span><?php echo $bio_info['Bas_Triple']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Fielding %</h6>
                            <span><?php echo $bio_info['Bas_Field']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
