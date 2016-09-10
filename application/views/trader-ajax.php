<div id="biometric-player-card" class="zoom-anim-dialog card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	 <h6>High School Name : <span><?php echo $bio_info['Stu_Ins_HighSchool']; ?> </span></h6>
                    <h6>Class of 20 : <span> <?php echo $bio_info['Stu_Ins_Class']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Player Name</h3>
                <p><?php echo $bio_info['Stu_Ins_Player']; ?></p>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Stu_Ins_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Stu_Ins_State']; ?></span></h6>
                </div>
            </div>
        </div>
        <div class="popup-title">Biometric Player Card</div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-details">
                	<h4>Biometrics</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Weight</h6>
                            <?php if($bio_info['Stu_Ins_Weight']!='0') { ?>
							<?php $getdata=get_row_data('stu_biometric_weight','Stu_Bio_WeigthID',$bio_info['Stu_Ins_Weight']); ?>
                            <span><?php echo $getdata['Stu_Bio_WeightName']; ?></span>
                        	<?php } ?>
                        </li>
                        <li class="clearfix">
                            <h6>Height Without Shoes</h6>
                            <span>
                           <?php if($bio_info['Stu_Ins_HeightWithout']!='0') { ?>
							<?php $getdata=get_row_data('stu_biometric_heightwithout','Stu_Bio_HeightWithoutID',$bio_info['Stu_Ins_HeightWithout']); ?>
                            <?php echo $getdata['Stu_Bio_HeightWithoutName']; ?>
                        	<?php } ?>
                             <?php if($bio_info['Stu_Ins_HeightIncheWithoutID']!='0' ) { ?>
							<?php $getdata=get_row_data('stu_biometric_heightwithoutinche','Stu_Bio_HeightIncheWithoutID',$bio_info['Stu_Ins_HeightIncheWithoutID']); ?>
                         <?php echo $getdata['Stu_Bio_HeightIncheWithoutName']; ?>
                        	<?php } ?>
                            </span>
                        </li>
                        
                        
                        <li class="clearfix">
                            <h6>Height With Shoes</h6>
                            <span>
                          <?php if($bio_info['Stu_Ins_HeightWith']!='0') { ?>
                         <?php $getdata=get_row_data('stu_biometric_height','Stu_Bio_HeigthID',$bio_info['Stu_Ins_HeightWith']); ?>
                            <?php echo $getdata['Stu_Bio_HeightName']; ?>
                         <?php } ?>
                        <?php if($bio_info['Stu_Ins_HeightIncheWithID']!='0') { ?>
                              <?php $getdata=get_row_data('stu_biometric_heightinche','Stu_Bio_HeightIncheID',$bio_info['Stu_Ins_HeightIncheWithID']); ?>
                           <?php echo $getdata['Stu_Bio_HeightIncheName']; ?>
                          <?php } ?>
                          </span>
                        </li>
                        
                       
                        
                        <li class="clearfix">
                            <h6>Wingspan</h6>
                             <span>
                              <?php if($bio_info['Stu_Ins_WingSpan']!='0') { ?>
                             <?php $getdata=get_row_data('stu_biometric_wingspan','Stu_Bio_WingSpanID',$bio_info['Stu_Ins_WingSpan']); ?>
                           <?php echo $getdata['Stu_Bio_WingSpanName']; ?>
                          <?php } ?>
                            <?php if($bio_info['Stu_Ins_WingSpanIncheID']!='0') { ?>
                         <?php $getdata=get_row_data('stu_biometric_wingspaninche','Stu_Bio_WingSpanIncheID',$bio_info['Stu_Ins_WingSpanIncheID']); ?>
                          <?php echo $getdata['Stu_Bio_WingSpanIncheName']; ?>
                          <?php } ?>
                          </span>
                        </li>
                      
                        <li class="clearfix">
                            <h6>Hand Width</h6>
                            <span>
                              <?php if($bio_info['Stu_Ins_HandWidth']!='0') { ?>
                             <?php $getdata=get_row_data('stu_biometric_handwidth','Stu_Bio_HandWidthID',$bio_info['Stu_Ins_HandWidth']); ?>
                           <?php echo $getdata['Stu_Bio_HandWidthName']; ?>
                           <?php } ?> 
                            <?php if($bio_info['Stu_Ins_HandWidthIncheID']!='0') { ?>
							 <?php $getdata=get_row_data('stu_biometric_handwidthinche','Stu_Bio_HandWidthIncheID',$bio_info['Stu_Ins_HandWidthIncheID']); ?>
                            <?php echo $getdata['Stu_Bio_HandWidthIncheName']; ?>
                          <?php } ?>  
                          </span>
                        </li>
                        
                        
                        <li class="clearfix">
                            <h6>Hand Length</h6>
                                 <span>
                              <?php if($bio_info['Stu_Ins_HandLength']!='0') { ?>
                              <?php $getdata=get_row_data('stu_biometric_handlength','Stu_Bio_HandLengthID',$bio_info['Stu_Ins_HandLength']); ?>
                         <?php echo $getdata['Stu_Bio_HandLengthName']; ?>
                          <?php } ?>
                           <?php if($bio_info['Stu_Ins_HandLengthIncheID']!='0') { ?>
                              <?php $getdata=get_row_data('stu_biometric_handlengthinche','Stu_Bio_HandLengthIncheID',$bio_info['Stu_Ins_HandLengthIncheID']); ?>
                       <?php echo $getdata['Stu_Bio_HandLengthIncheName']; ?>
                          <?php } ?>
                          </span>
                        </li>
                        
                        <li class="clearfix">
                            <h6>Dominant Hand</h6>
                              <?php if($bio_info['Stu_Ins_DominantHand']!='0') { ?>
                             <?php $getdata=get_row_data('stu_biometric_domainthand','Stu_Bio_DomaintHandID',$bio_info['Stu_Ins_DominantHand']); ?>
                            <span><?php echo $getdata['Stu_Bio_DomaintHandName']; ?></span>
                          <?php } ?>
                        </li>
                        
                        
                        <li class="clearfix">
                            <h6>Dominant Leg</h6>
                              <?php if($bio_info['Stu_Ins_DominantLeg']!='0') { ?>
                             <?php $getdata=get_row_data('stu_biometric_domainleg','Stu_Bio_DomaintLegID',$bio_info['Stu_Ins_DominantLeg']); ?>
                          
                            <span><?php echo $getdata['Stu_Bio_DomaintLegName']; ?></span>
                          <?php } ?>
                        </li>
                        
                        
                        <li class="clearfix">
                            <h6>Body Mass Index</h6>
                            <?php if($bio_info['Stu_Ins_BodyMass']!='0') { ?>
                             <?php $getdata=get_row_data('stu_body_mass','Stu_Body_MassID',$bio_info['Stu_Ins_BodyMass']); ?>
                            <span><?php echo $getdata['Stu_Body_MassName']; ?></span>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="center-content">
            	<div class="card-img">
                	<?php if($bio_info['Stu_Ins_ImageName']!="") { ?>
						<img src="<?php echo base_url(); ?>register_images/student_athlete/small/<?php echo $bio_info['Stu_Ins_ImageName']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-details">
                	<h4>Endurance</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Push-ups</h6>
                            <?php if($bio_info['Stu_Ins_PushUp']!='0') { ?>
                             <?php $getdata=get_row_data('stu_endurance_push','Stu_Endu_PushID',$bio_info['Stu_Ins_PushUp']); ?>
                            <span><?php echo $getdata['Stu_Endu_PushName']; ?></span>
                            <?php } ?>
                        </li>
                        <li class="clearfix">
                            <h6>Sit-ups</h6>
                           <?php if($bio_info['Stu_Ins_SitUp']!='0') { ?>
                             <?php $getdata=get_row_data('stu_endurance_sit','Stu_Endu_SitID',$bio_info['Stu_Ins_SitUp']); ?>
                            <span><?php echo $getdata['Stu_Endu_SitName']; ?></span>
                            <?php } ?>
                        </li>
                        <li class="clearfix">
                            <h6>Pull-ups</h6>
                             <?php if($bio_info['Stu_Ins_PullUp']!='0') { ?>
                             <?php $getdata=get_row_data('stu_endurance_pull','Stu_Endu_PullID',$bio_info['Stu_Ins_PullUp']); ?>
                            <span><?php echo $getdata['Stu_Endu_PullName']; ?></span>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-details">
                	<h4>Strength</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Vertical Jump</h6>
                              <span>
                             <?php if($bio_info['Stu_Ins_Vertical']!='0') { ?>
                             <?php $getdata=get_row_data('stu_strength_vertical','Stu_Stre_VerticalID',$bio_info['Stu_Ins_Vertical']); ?>
                          <?php echo $getdata['Stu_Stre_VerticalName']; ?>
                            <?php } ?>
                             <?php if($bio_info['Stu_Ins_VerticalIncheID']!='0') { ?>
                             <?php $getdata=get_row_data('stu_strength_verticalinche','Stu_Stre_VerticalIncheID',$bio_info['Stu_Ins_VerticalIncheID']); ?>
                            <?php echo $getdata['Stu_Stre_VerticalIncheName']; ?>
                            <?php } ?>
                            </span>

                        </li>
                        
                        <li class="clearfix">
                            <h6>Standing Long Jump</h6>
                            <span>
                            <?php if($bio_info['Stu_Ins_Standing']!='0') { ?>
                             <?php $getdata=get_row_data('stu_strength_stand','Stu_Stre_StandID',$bio_info['Stu_Ins_Standing']); ?>
                            <?php echo $getdata['Stu_Stre_StandName']; ?>
                            <?php } ?>
                              <?php if($bio_info['Stu_Ins_StandIncheingID']!='0') { ?>
                             <?php $getdata=get_row_data('stu_strength_standinche','Stu_Stre_StandIncheID',$bio_info['Stu_Ins_StandIncheingID']); ?>
                            <?php echo $getdata['Stu_Stre_StandIncheName']; ?>
                            <?php } ?>
                            </span>
                        </li>
                    
                        
                        <li class="clearfix">
                            <h6>Max Power Clean</h6>
                             <?php if($bio_info['Stu_Ins_PowerClean']!='0') { ?>
                             <?php $getdata=get_row_data('stu_strength_powerclean','Stu_Stre_PowerID',$bio_info['Stu_Ins_PowerClean']); ?>
                            <span><?php echo $getdata['Stu_Stre_PowerName']; ?></span>
                            <?php } ?>
                        </li>
                        <li class="clearfix">
                            <h6>Max Bench Press</h6>
                             <?php if($bio_info['Stu_Ins_Bench']!='0') { ?>
                             <?php $getdata=get_row_data('stu_strength_bench','Stu_Stre_BenchID',$bio_info['Stu_Ins_Bench']); ?>
                            <span><?php echo $getdata['Stu_Stre_BenchName']; ?></span>
                            <?php } ?>
                        </li>
                        <li class="clearfix">
                            <h6>Max Squat</h6>
                            <?php if($bio_info['Stu_Ins_Squal']!='0') { ?>
                             <?php $getdata=get_row_data('stu_strength_squat','Stu_Stre_SquatID',$bio_info['Stu_Ins_Squal']); ?>
                            <span><?php echo $getdata['Stu_Stre_SquatName']; ?></span>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
                <div class="card-details flexibility">
                	<h4>Flexibility</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Sit and Reach</h6>
                            <span>
                            <?php if($bio_info['Stu_Ins_Sit']!='0') { ?>
                             <?php $getdata=get_row_data('stu_flexibility_sit','Stu_Fle_SitID',$bio_info['Stu_Ins_Sit']); ?>
                          	<?php echo $getdata['Stu_Fle_SitName']; ?>
                            <?php } ?>
                             <?php if($bio_info['Stu_Ins_Reach']!='0') { ?>
                             <?php $getdata=get_row_data('stu_flexibility_reach','Stu_Fle_ReachID',$bio_info['Stu_Ins_Reach']); ?>
                            <?php echo $getdata['Stu_Fle_ReachName']; ?>
                            <?php } ?>
                            </span>
                        </li>
                      
                        <li class="clearfix">
                            <h6>Back Scratch</h6>
                            <span>
                           <?php if($bio_info['Stu_Ins_Back']!='0') { ?>
                             <?php $getdata=get_row_data('stu_flexibility_back','Stu_Fle_BackID',$bio_info['Stu_Ins_Back']); ?>
                            <?php echo $getdata['Stu_Fle_BackName']; ?>
                            <?php } ?>
                            <?php if($bio_info['Stu_Ins_BackScratch']!='0') { ?>
                             <?php $getdata=get_row_data('stu_flexibility_scartch','Stu_Fle_ScartchID',$bio_info['Stu_Ins_BackScratch']); ?>
                           	<?php echo $getdata['Stu_Fle_ScartchName']; ?>
                            <?php } ?>
                            </span>
                        </li>
                       
                    </ul>
                </div>
            </div>
            <div class="cl"></div>
            <div class="card-details">
                <h4>Speed</h4>
            	<ul class="card-listing">
                    <li class="clearfix">
                        <h6>40 Yard Dash</h6>
                        <span>
                         <?php if($bio_info['Stu_Ins_Yard']!='0') { ?>
                             <?php $getdata=get_row_data('stu_speed_yard','Stu_Speed_YardID',$bio_info['Stu_Ins_Yard']); ?>
                            <?php echo $getdata['Stu_Speed_YardName']; ?>
                            <?php } ?>
                             <?php if($bio_info['Stu_Ins_YardIncheID']!='0') { ?>
                             <?php $getdata=get_row_data('stu_speed_yardinche','Stu_Speed_YardIncheID',$bio_info['Stu_Ins_YardIncheID']); ?>
                            <?php echo $getdata['Stu_Speed_YardIncheName']; ?>
                            <?php } ?>
                      </span>
                    </li>
                  
                    <li class="clearfix">
                        <h6>60 Yard Dash</h6>
                         <span>
                        <?php if($bio_info['Stu_Ins_YardDash']!='0') { ?>
                             <?php $getdata=get_row_data('stu_speed_yarddash','Stu_Speed_YardDashID',$bio_info['Stu_Ins_YardDash']); ?>
                           <?php echo $getdata['Stu_Speed_YardDashName']; ?>
                            <?php } ?>
                             <?php if($bio_info['Stu_Ins_YardDashIncheID']!='0') { ?>
                             <?php $getdata=get_row_data('stu_speed_yarddashinche','Stu_Speed_YardDashIncheID',$bio_info['Stu_Ins_YardDashIncheID']); ?>
                            <?php echo $getdata['Stu_Speed_YardDashIncheName']; ?>
                            <?php } ?>
                      </span>
                  </li>
                    
                    <li class="clearfix">
                        <h6>1 Mile Run</h6>
                         <span>
                       <?php if($bio_info['Stu_Ins_Mile']!='0') { 
                            $getdata=get_row_data('stu_speed_mile','Stu_Speed_MileID',$bio_info['Stu_Ins_Mile']); 
                    			 echo $getdata['Stu_Speed_MileName'];
                             } 
                            if($bio_info['Stu_Ins_MileIncheRunID']!='0') { 
                            $getdata=get_row_data('stu_speed_mileinche','Stu_Speed_MileIncheID',$bio_info['Stu_Ins_MileIncheRunID']); 
                                echo $getdata['Stu_Speed_MileIncheName']; 
                            } ?>
                    </span>
                    </li>
                    
             
                </ul>
            </div>
        </div>
    </div>