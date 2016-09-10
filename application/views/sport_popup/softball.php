<?php 
		if($this->session->userdata('MyRecuritID'))
        $UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid']; 
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('softball_sport','UserID',$UserID);
?>

<div id="softball-player-board" class="zoom-anim-dialog card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Soft_SchoolName']; ?></span></h6>
                    <h6>Class of 20 : <span><?php echo $bio_info['Soft_Class']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Soft_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Soft_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Softball Board</h3>
                <p><?php echo $bio_info['Soft_PlayerName']; ?></p>
            </div>
            
        </div>
        <div class="bpcard-dt clearfix">
        	<div class="left-content">
            	<h6>Primary Position:<span><?php echo $bio_info['Soft_Primary']; ?></span></h6>
            </div>
            <div class="center-content">
            	<h6>Secondary Position:<span><?php echo $bio_info['Soft_Secondary']; ?></span> </h6>
            </div>
            <div class="right-content">
            	<h6>Bats:<span><?php echo $bio_info['Soft_Bats']; ?></span> </h6>
            </div>
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-img">
                	<?php if($bio_info['Soft_ProImage']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Soft_ProImage']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-details box-height">
                	<h4>PITCHING STATS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>ERA</h6>
                            <span><?php echo $bio_info['Soft_Era']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Win / Loss Record</h6>
                            <span><?php echo $bio_info['Soft_Win']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Primary Pitch</h6>
                            <span><?php echo $bio_info['Soft_Pitch_Primary']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Secondary Pitch</h6>
                            <span><?php echo $bio_info['Soft_Pitch_Secondary']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Fastball Velocity</h6>
                            <span><?php echo $bio_info['Soft_Pitch_Fastball']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="center-content">
            	<div class="card-details">
                	<h4>HITTING STATS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Batting Average</h6>
                            <span><?php echo $bio_info['Soft_Batting']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>RBI</h6>
                            <span><?php echo $bio_info['Soft_Rbi']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Stolen Bases</h6>
                            <span><?php echo $bio_info['Soft_Stolen']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>On Base %</h6>
                            <span><?php echo $bio_info['Soft_OnBase']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>60 Yard Dash</h6>
                            <span><?php echo $bio_info['Soft_YardDash']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Speed from Home to First</h6>
                            <span><?php echo $bio_info['Soft_Speed']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-img">
                	<?php if($bio_info['Soft_ProImage2']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Soft_ProImage2']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                
            </div>
            <div class="right-content">
            	<div class="card-img">
                	<?php if($bio_info['Soft_ProImage3']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['Soft_ProImage3']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-details box-height">
                	<h4>FIELDING STATS</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Assists</h6>
                            <span><?php echo $bio_info['Soft_Assists']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Put Outs</h6>
                            <span><?php echo $bio_info['Soft_PutOuts']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Double Plays</h6>
                            <span><?php echo $bio_info['Soft_Doubles']; ?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Triple Plays</h6>
                            <span><?php echo $bio_info['Soft_Triples']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Fielding %</h6>
                            <span><?php echo $bio_info['Soft_Fielding']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>