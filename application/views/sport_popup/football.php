<?php
        if($this->session->userdata('MyRecuritID'))
		$UserID=$this->session->userdata('MyRecuritID');
        else
        $UserID=$_GET['userid'];
		$User=get_user_detail($UserID);  
		$bio_info=$this->general_model->get_single_data_by_column('football_sport','UserID',$UserID);
		
?>	
<div id="football-player-card" class="zoom-anim-dialog  card-popup">
            <div class="card-headin clearfix">
                <div class="head-left">
                    <div class="head-row">
                        <h6>High School Name : <span><?php echo $bio_info['FootBall_SchoolName']; ?></span></h6>
                        <h6>Class of 20 : <span><?php echo $bio_info['FootBall_Class']; ?></span></h6>
                    </div>
                </div>
                <div class="head-right">
                    <div class="head-row">
                        <h6>City : <span><?php echo $bio_info['FootBall_City']; ?></span></h6>
                        <h6>State : <span><?php echo $bio_info['FootBall_State']; ?></span></h6>
                    </div>
                </div>
                <div class="main-head">
                    <h3>Football Board Card</h3>
                    <p><?php echo $bio_info['FootBall_PlayerName']; ?></p>
                </div>
                
            </div>
            <div class="bpcard-dt clearfix">
                <div class="left-content">
                    <h6>Offensive Position : <span><?php echo $bio_info['FootBall_Offensive']; ?></span> </h6>
                </div>
                <div class="center-content">
                    <h6>Defensive Position : <span><?php echo $bio_info['FootBall_Defensive']; ?></span> </h6>
                </div>
                <div class="right-content">
                    <h6>Special Team Position : <span><?php echo $bio_info['FootBall_Special']; ?></span> </h6>
                </div>
            </div>
            <div class="card-content clearfix">
                <div class="player_card-title">
                    <h3>OFFENSIVE STATS</h3>
                </div>
                <div class="left-content">
                    <div class="card-details">
                        <h4>RUSHING PER GAME <br>(RB,TB,QB Stats)</h4>
                        <ul class="card-listing">
                            <li class="clearfix">
                                <h6>RUSHING YDS/GAME</h6>
                                <span><?php echo  $bio_info['FootBall_Rushing']; ?> </span>
                            </li>
                            <li class="clearfix">
                                <h6># OF ATT/GAME</h6>
                                <span><?php echo  $bio_info['FootBall_Rush_ATT']; ?> </span>
                            </li>
                            <li class="clearfix">
                                <h6>YDS/ATT</h6>
                                <span><?php echo  $bio_info['FootBall_Rush_YDS']; ?> </span>
                            </li>
                            <li class="clearfix">
                                <h6>TD/GAME</h6>
                                <span><?php echo  $bio_info['FootBall_Rush_TD']; ?> </span>
                            </li>
                            <li class="clearfix">
                                <h6>LONGEST RUN</h6>
                                <span><?php echo  $bio_info['FootBall_Rush_Longest']; ?> </span>
                            </li>
                            <li class="clearfix">
                                <h6>SEASON RUSH YARDS</h6>
                                <span><?php echo  $bio_info['FootBall_Rush_Season']; ?> </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="center-content">
                    <div class="card-details">
                        <h4>PASSING PER GAME <br>(QB Stats)</h4>
                        <ul class="card-listing">
                            <li class="clearfix">
                                <h6>ATTEMPTS/GAME</h6>
                                <span><?php echo $bio_info['FootBall_Pass_Attems']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6># OF COMP/GAME</h6>
                                <span><?php echo $bio_info['FootBall_Pass_Game']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>COMP %</h6>
                                <span><?php echo $bio_info['FootBall_Pass_Comp']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>YDS/GAME</h6>
                                <span><?php echo $bio_info['FootBall_Pass_YDS']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>TD/GAME</h6>
                                <span><?php echo $bio_info['FootBall_Pass_TD']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>SEASON PASS YARDS</h6>
                                <span><?php echo $bio_info['FootBall_Pass_Season']; ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="right-content">
                    <div class="card-details">
                        <h4>RECEIVING PER GAME <br>(WR,RB,TB Stats)</h4>
                        <ul class="card-listing">
                            <li class="clearfix">
                                <h6>RECEIVING YDS/GAME</h6>
                                <span><?php echo $bio_info['FootBall_Receive']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6># OF REC/GAME</h6>
                                <span><?php echo $bio_info['FootBall_Rece_REC']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>YDS/REC</h6>
                                <span><?php echo $bio_info['FootBall_Rece_YDS']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>TD/GAME</h6>
                                <span><?php echo $bio_info['FootBall_Rece_TD']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>LONGEST RECEPTION</h6>
                                <span><?php echo $bio_info['FootBall_Rece_Longest']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>SEASON PASS YARDS</h6>
                                <span><?php echo $bio_info['FootBall_Rece_Season']; ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-content clearfix">
                <div class="player_card-title">
                    <h3>DEFENSIVE STATS</h3>
                </div>
                <div class="left-content">
                    <div class="card-img">
                       <?php if($bio_info['FootBall_ProImage']!="") { ?>
                       		<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['FootBall_ProImage']; ?>" />
                       <?php } else { ?>
                       <img src="<?php echo base_url(); ?>images/no_image.jpg" />
                       <?php } ?>
                    </div>
                    <div class="card-img">
                         <?php if($bio_info['FootBall_ProImage2']!="") { ?>
                       		<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['FootBall_ProImage2']; ?>" />
                       <?php } else { ?>
                       <img src="<?php echo base_url(); ?>images/no_image.jpg" />
                       <?php } ?>
                    </div>
                </div>
                <div class="center-content">
                    <div class="card-details">
                        <h4>PASSING PER GAME <br>(QB Stats)</h4>
                        <ul class="card-listing">
                            <li class="clearfix">
                                <h6>Solo Tackles/Game</h6>
                                <span><?php echo $bio_info['FootBall_Solo']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>Assisted tackles/Game</h6>
                                <span><?php echo $bio_info['FootBall_Assisted']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>Tackles/game</h6>
                                <span><?php echo $bio_info['FootBall_Tackles']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>Sacks</h6>
                                <span><?php echo $bio_info['FootBall_Sacks']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>Interceptions</h6>
                                <span><?php echo $bio_info['FootBall_Interceptions']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>Pass Deflections</h6>
                                <span><?php echo $bio_info['FootBall_Pass']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>Fumble Recoveries</h6>
                                <span><?php echo $bio_info['FootBall_Fumble']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>Tackle for Loss</h6>
                                <span><?php echo $bio_info['FootBall_Tackles_Loss']; ?></span>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="right-content">
                    <div class="card-img">
                         <?php if($bio_info['FootBall_ProImage3']!="") { ?>
                       		<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['FootBall_ProImage3']; ?>" />
                       <?php } else { ?>
                       <img src="<?php echo base_url(); ?>images/no_image.jpg" />
                       <?php } ?>
                    </div>
                    <div class="card-img">
                         <?php if($bio_info['FootBall_ProImage4']!="") { ?>
                       		<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['FootBall_ProImage4']; ?>" />
                       <?php } else { ?>
                       <img src="<?php echo base_url(); ?>images/no_image.jpg" />
                       <?php } ?>
                    </div>
                </div>
            </div>
            <div class="card-content clearfix">
                <div class="left-content">
                    <div class="player_card-title">
                        <h3>SPECIAL TEAM KICKING STATS</h3>
                    </div>
                    <div class="card-details">
                        <h4>FG KICKING</h4>
                        <ul class="card-listing">
                            <li class="clearfix">
                                <h6>FG MADE/GAME</h6>
                                <span><?php echo $bio_info['FootBall_FG_Made']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>FG ATT/GAME</h6>
                                <span><?php echo $bio_info['FootBall_FG_ATT']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>FG %</h6>
                                <span><?php echo $bio_info['FootBall_FG']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>LONGEST FG</h6>
                                <span><?php echo $bio_info['FootBall_FG_Longest']; ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-details">
                        <h4>PUNTING/KICKING</h4>
                        <ul class="card-listing">
                            <li class="clearfix">
                                <h6>KICK ATT/GAME</h6>
                                <span><?php echo $bio_info['FootBall_Punt_Kick']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>KICK YDS/GAME</h6>
                                <span><?php echo $bio_info['FootBall_Punt_YDS']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>AVG KICK</h6>
                                <span><?php echo $bio_info['FootBall_Punt_Avg']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>LONGEST KICK</h6>
                                <span><?php echo $bio_info['FootBall_Punt_Longest']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>KICK INSIDE 20</h6>
                                <span><?php echo $bio_info['FootBall_Punt_Inside']; ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="center-content">
                    <div class="player_card-title">
                        <h3>BIOMETRIC STATISTICS</h3>
                    </div>
                    <div class="card-details">
                        <ul class="card-listing">
                            <li class="clearfix">
                                <h6>Height</h6>
                                <span><?php echo $bio_info['FootBall_Height']." feet ".$bio_info['FootBall_HeightInche']." Inches"; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>Weight</h6>
                                <span><?php echo $bio_info['FootBall_Weight']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>Broad jump</h6>
                                <span><?php echo $bio_info['FootBall_BroadJump']." feet ".$bio_info['FootBall_BroadJumpInche']." Inches"; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>Vertical</h6>
                                <span><?php echo $bio_info['FootBall_Vertical']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>40 yard dash</h6>
                                <span><?php echo $bio_info['FootBall_Yard']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>20 yard shuttle</h6>
                                <span><?php echo $bio_info['FootBall_YardShuttle']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>3 Cone drill</h6>
                                <span><?php echo $bio_info['FootBall_Cone']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>Bench (225lbs)</h6>
                                <span><?php echo $bio_info['FootBall_Bench']; ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-img">
                         <?php if($bio_info['FootBall_ProImage5']!="") { ?>
                       		<img src="<?php echo base_url(); ?>register_images/sport/small/<?php echo $bio_info['FootBall_ProImage5']; ?>" />
                       <?php } else { ?>
                       <img src="<?php echo base_url(); ?>images/no_image.jpg" />
                       <?php } ?>
                    </div>
                </div>
                <div class="right-content">
                    <div class="player_card-title">
                        <h3>SPECIAL TEAM RETURN STATS</h3>
                    </div>
                    <div class="card-details">
                        <h4>KICKOFF RETURN</h4>
                        <ul class="card-listing">
                            <li class="clearfix">
                                <h6>RET YDS/GAME</h6>
                                <span><?php echo $bio_info['FootBall_Kick_RET']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>RET ATT/GAME</h6>
                                <span><?php echo $bio_info['FootBall_Kick_ATT']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>YDS/RET</h6>
                                <span><?php echo $bio_info['FootBall_Kick_YDS']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>LONGEST RET</h6>
                                <span><?php echo $bio_info['FootBall_Kick_Longest']; ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-details">
                        <h4>PUNT RETURN</h4>
                        <ul class="card-listing">
                            <li class="clearfix">
                                <h6>RET YDS/GAME</h6>
                                <span><?php echo $bio_info['FootBall_Punt_Res_RET']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>RET ATT/GAME</h6>
                                <span><?php echo $bio_info['FootBall_Punt_Res_ATT']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>YDS/RET</h6>
                                <span><?php echo $bio_info['FootBall_Punt_Res_YDS']; ?></span>
                            </li>
                            <li class="clearfix">
                                <h6>LONGEST RET</h6>
                                <span><?php echo $bio_info['FootBall_Punt_Res_Longest']; ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>	
