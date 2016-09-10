 
    <section class="content">
    <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="student-athlete biometric">
                	<div class="reg-title"><h2>Biometric Player Board</h2></div>
                     <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                 <?php if($this->session->flashdata('errormessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('errormessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>student_athlete/insert_Biometrics" onsubmit="return getStudent_data();">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-5">
                            	<input type="text" placeholder="Player Name" name="Stu_Ins_PlayerName" id="Stu_Ins_PlayerName" >
                            </div>
                            <div class="cols-5">
                            	<input type="text" placeholder="High School Name" name="Stu_Ins_HighSchool" id="Stu_Ins_HighSchool">
                            </div>
                            <div class="cols-5">
                            	<input type="text" placeholder="City" name="Stu_Ins_City" id="Stu_Ins_City">
                            </div>
                            <div class="cols-5">
                            	<input type="text" placeholder="State" name="Stu_Ins_State" id="Stu_Ins_State">
                            </div>
                            <div class="cols-5">
                            	<input type="text" placeholder="Class of 20" name="Stu_Ins_Class" id="Stu_Ins_Class">
                            </div>
                        </div>
                     
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-small">
                        	<div class="reg-frm pitching-stats">
                             	<h4>Biometrics</h4>
                                <div class="frm"> 
                                <?php $Gender_details=get_table_details('stu_biometric_weight','Stu_Bio_WeigthID'); ?>
                                <select name="Stu_Ins_Weight" id="Stu_Ins_Weight">
                                    <option value="0">
                                       Weight 
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Bio_WeigthID']; ?>">
                                         	<?php echo $Gender['Stu_Bio_WeightName']; ?>
                                         </option>
                                      <?php } ?>
                                    
                                </select>
                                </div>
                                <div class="frm">
                                <div class="label fl">Height Without Shoes</div>
                                <div class="sub-hight fl">
                                    <?php $Gender_details=get_table_details('stu_biometric_heightwithout',
							'Stu_Bio_HeightWithoutID'); ?>
                                <select name="Stu_Ins_HeightWithout" id="Stu_Ins_HeightWithout">
                                      <option value="0">
                                      	Feet
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Bio_HeightWithoutID']; ?>">
                                         	<?php echo $Gender['Stu_Bio_HeightWithoutName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                            	<div class="sub-hight fr">
                          				 <?php $Gender_details=get_table_details('`stu_biometric_heightwithoutinche`',
							'Stu_Bio_HeightIncheWithoutID'); ?>
                                <select name="Stu_Ins_HeightIncheWithoutID" id="Stu_Ins_HeightIncheWithoutID">
                                      <option value="0">
                                       	Inches
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Bio_HeightIncheWithoutID']; ?>">
                                         	<?php echo $Gender['Stu_Bio_HeightIncheWithoutName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                            	</div>
                                
                                </div>
                                <div class="frm">
                                   
                                    <div class="label fl">Height with shoes</div>
                                    <div class="sub-hight fl">
                                         <?php $Gender_details=get_table_details('stu_biometric_height',
							'Stu_Bio_HeigthID'); ?>
                                <select name="Stu_Ins_HeightWith" id="Stu_Ins_HeightWith">
                                     <option value="0">
                                       Feet
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Bio_HeigthID']; ?>">
                                         	<?php echo $Gender['Stu_Bio_HeightName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                    </div>
                                    <div class="sub-hight fr">
                                   <?php $Gender_details=get_table_details('stu_biometric_heightinche',
							'Stu_Bio_HeightIncheID'); ?>
                                <select name="Stu_Ins_HeightIncheWithID" id="Stu_Ins_HeightIncheWithID">
                                     <option value="0">
                                       Inches
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Bio_HeightIncheID']; ?>">
                                         	<?php echo $Gender['Stu_Bio_HeightIncheName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                    </div>
                                
                                </div>
                                <div class="frm">
                                    <div class="label fl">Wingspan</div>
                                    <div class="sub-hight fl">
                                     <?php $Gender_details=get_table_details('stu_biometric_wingspan',
                                'Stu_Bio_WingSpanID'); ?>
                                    <select name="Stu_Ins_WingSpan" id="Stu_Ins_WingSpan">
                                        <option value="0">
                                           Feet
                                        </option>
                                         <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Stu_Bio_WingSpanID']; ?>">
                                                <?php echo $Gender['Stu_Bio_WingSpanName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>
                                </div>
                                    <div class="sub-hight fr">
                                 <?php $Gender_details=get_table_details('stu_biometric_wingspaninche',
                                'Stu_Bio_WingSpanIncheID'); ?>
                                    <select name="Stu_Ins_WingSpanIncheID" id="Stu_Ins_WingSpanIncheID">
                                        <option value="0">
                                           Inches
                                        </option>
                                         <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Stu_Bio_WingSpanIncheID']; ?>">
                                                <?php echo $Gender['Stu_Bio_WingSpanIncheName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>
                                </div>
                                </div>
                                <div class="frm">
                                   <div class="label fl">Hand Width</div>
                                    <div class="sub-hight fl">
                                          <?php $Gender_details=get_table_details('stu_biometric_handwidth',
                                'Stu_Bio_HandWidthID'); ?>
                                    <select name="Stu_Ins_HandWidth" id="Stu_Ins_HandWidth">
                                         <option value="0">
                                          Select
                                        </option>
                                          <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Stu_Bio_HandWidthID']; ?>">
                                                <?php echo $Gender['Stu_Bio_HandWidthName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>
                                    </div>
                                    <div class="sub-hight fr">
                                      <?php $Gender_details=get_table_details('stu_biometric_handwidthinche',
                                'Stu_Bio_HandWidthIncheID'); ?>
                                    <select name="Stu_Ins_HandWidthIncheID" id="Stu_Ins_HandWidthIncheID">
                                         <option value="0">
                                           Select
                                        </option>
                                          <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Stu_Bio_HandWidthIncheID']; ?>">
                                                <?php echo $Gender['Stu_Bio_HandWidthIncheName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>
                                    </div>
                                </div>
                                  <div class="frm">
                                    <div class="label fl">Hand Length</div>
                                     <div class="sub-hight fl">
                                        <?php $Gender_details=get_table_details('stu_biometric_handlength',
                                'Stu_Bio_HandLengthID'); ?>
                                    <select name="Stu_Ins_HandLength" id="Stu_Ins_HandLength">
                                        <option value="0">
                                           Select
                                        </option>
                                         <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Stu_Bio_HandLengthID']; ?>">
                                                <?php echo $Gender['Stu_Bio_HandLengthName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>
                                    </div>
                                     <div class="sub-hight fr">
                                    <?php $Gender_details=get_table_details('stu_biometric_handlengthinche',
                                'Stu_Bio_HandLengthIncheID'); ?>
                                    <select name="Stu_Ins_HandLengthIncheID" id="Stu_Ins_HandLengthIncheID">
                                        <option value="0">
                                           Select
                                        </option>
                                         <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Stu_Bio_HandLengthIncheID']; ?>">
                                                <?php echo $Gender['Stu_Bio_HandLengthIncheName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>
                                    </div>
                                </div>
                                  <div class="frm">
                                     <?php $Gender_details=get_table_details('stu_biometric_domainthand',
							'Stu_Bio_DomaintHandID'); ?>
                                <select name="Stu_Ins_DominantHand" id="Stu_Ins_DominantHand">
                                       <option value="0">
                                       Dominant Hand
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Bio_DomaintHandID']; ?>">
                                         	<?php echo $Gender['Stu_Bio_DomaintHandName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                                  <div class="frm">
                                 	 <?php $Gender_details=get_table_details('stu_biometric_domainleg',
							'Stu_Bio_DomaintLegID'); ?>
                                <select name="Stu_Ins_DominantLeg" id="Stu_Ins_DominantLeg">
                                    <option value="0">
                                        Dominant Leg
                                    </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Bio_DomaintLegID']; ?>">
                                         	<?php echo $Gender['Stu_Bio_DomaintLegName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                                  <div class="frm">
                                      <select name="Stu_Ins_BodyMass" id="Stu_Ins_BodyMass">
                                    <option value="0">
                                        Body Fat Percent
                                    </option>
                                     <?php $Gender_details=get_table_details('stu_body_mass',
							'Stu_Body_MassID'); ?>
                                      	<?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Body_MassID']; ?>">
                                         	<?php echo $Gender['Stu_Body_MassName']; ?>
                                         </option>
                                      <?php } ?>
                                     	
                                </select>
                                </div>
                            </div>
                        </div>
						<div class="cols-big">
                        	<div class="reg-frm pitching-stats">
                            	<div class="image-upload">
                                    <span class="uploadimg" id="imagePreview1">
                                        <input type="file" name="Stu_Ins_ImageName" id="Stu_Ins_ImageName">
                                        <img src="<?php echo base_url('images/up-img.png');?>" alt="" id="image1">  
                                    </span>
                                </div>
                             	<h4>Endurance</h4>
                                <div class="frm">
                                	<?php $Gender_details=get_table_details('stu_endurance_push',
							'Stu_Endu_PushID'); ?>
                                <select name="Stu_Ins_PushUp" id="Stu_Ins_PushUp">
                                    <option value="0">
                                       Push-ups in 1 minute
                                    </option>
                                    <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Endu_PushID']; ?>">
                                         	<?php echo $Gender['Stu_Endu_PushName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                                <div class="frm">
                                      <?php $Gender_details=get_table_details('stu_endurance_sit',
							'Stu_Endu_SitID'); ?>
                                <select name="Stu_Ins_SitUp" id="Stu_Ins_SitUp">
                                    <option value="0">
                                       Sit-ups in 1 minute
                                    </option>
                                    <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Endu_SitID']; ?>">
                                         	<?php echo $Gender['Stu_Endu_SitName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                                <div class="frm">
                                     <?php $Gender_details=get_table_details('stu_endurance_pull',
							'Stu_Endu_PullID'); ?>
                                <select name="Stu_Ins_PullUp" id="Stu_Ins_PullUp">
                                    <option value="0">
                                        Pull-ups in 1 minute
                                    </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Endu_PullID']; ?>">
                                         	<?php echo $Gender['Stu_Endu_PullName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                            </div>
                            
                        </div>
                        <div class="cols-small">
                        	<div class="reg-frm pitching-stats">
                             	<h4>Strength</h4>
                                <div class="frm">
                                    <div class="label fl">Vertical Jump</div>
                                    <div class="sub-hight fl">
                                      <?php $Gender_details=get_table_details('stu_strength_vertical',
                                        'Stu_Stre_VerticalID'); ?>
                                            <select name="Stu_Ins_Vertical" id="Stu_Ins_Vertical">
                                                <option value="0">
                                                   Select
                                                </option>
                                                <?php foreach($Gender_details as $Gender){ ?>
                                                     <option value="<?php echo $Gender['Stu_Stre_VerticalID']; ?>">
                                                        <?php echo $Gender['Stu_Stre_VerticalName']; ?>
                                                     </option>
                                                  <?php } ?>
                                            </select>
                                    </div>
                                    <div class="sub-hight fr">
                                         <?php $Gender_details=get_table_details('stu_strength_verticalinche',
                                        'Stu_Stre_VerticalIncheID'); ?>
                                            <select name="Stu_Ins_VerticalIncheID" id="Stu_VerticalIncheID">
                                                <option value="0">
                                                   Select
                                                </option>
                                                <?php foreach($Gender_details as $Gender){ ?>
                                                     <option value="<?php echo $Gender['Stu_Stre_VerticalIncheID']; ?>">
                                                        <?php echo $Gender['Stu_Stre_VerticalIncheName']; ?>
                                                     </option>
                                                  <?php } ?>
                                            </select>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="label fl">Standing Long Jump</div>
                                    <div class="sub-hight fl">
                                          <?php $Gender_details=get_table_details('stu_strength_stand',
                                    'Stu_Stre_StandID'); ?>
                                        <select name="Stu_Ins_Standing" id="Stu_Ins_Standing">
                                            <option value="0">
                                               Feet
                                            </option>
                                             <?php foreach($Gender_details as $Gender){ ?>
                                                 <option value="<?php echo $Gender['Stu_Stre_StandID']; ?>">
                                                    <?php echo $Gender['Stu_Stre_StandName']; ?>
                                                 </option>
                                              <?php } ?>
                                        </select>
                                    </div>
                                    <div class="sub-hight fr">
                                         <?php $Gender_details=get_table_details('stu_strength_standinche',
                                    'Stu_Stre_StandIncheID'); ?>
                                        <select name="Stu_Ins_StandIncheingID" id="Stu_Ins_StandIncheingID">
                                            <option value="0">
                                                Inches
                                            </option>
                                             <?php foreach($Gender_details as $Gender){ ?>
                                                 <option value="<?php echo $Gender['Stu_Stre_StandIncheID']; ?>">
                                                    <?php echo $Gender['Stu_Stre_StandIncheName']; ?>
                                                 </option>
                                              <?php } ?>
                                        </select>
                                    </div>

                                </div>
                                <div class="frm">
                                    <?php $Gender_details=get_table_details('stu_strength_powerclean',
							'Stu_Stre_PowerID'); ?>
                                <select name="Stu_Ins_PowerClean" id="Stu_Ins_PowerClean">
                                    <option value="0">
                                        Power Clean Max
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Stre_PowerID']; ?>">
                                         	<?php echo $Gender['Stu_Stre_PowerName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                                <div class="frm">
                                      <?php $Gender_details=get_table_details('stu_strength_bench',
							'Stu_Stre_BenchID'); ?>
                                <select name="Stu_Ins_Bench" id="Stu_Ins_Bench">
                                    <option value="0">
                                       Bench Press Max
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Stre_BenchID']; ?>">
                                         	<?php echo $Gender['Stu_Stre_BenchName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                                <div class="frm">
                                      <?php $Gender_details=get_table_details('stu_strength_squat',
							'Stu_Stre_SquatID'); ?>
                                <select name="Stu_Ins_Squal" id="Stu_Ins_Squal">
                                    <option value="0">
                                        Squat Max
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Stre_SquatID']; ?>">
                                         	<?php echo $Gender['Stu_Stre_SquatName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                            </div>
                            <div class="reg-frm pitching-stats">
                             	<h4>Flexibility</h4>
                                <div class="frm">
                                   <div class="frm">
                                    <div class="label fl">Sit and Reach</div>
                                    <div class="sub-hight fl">
                                      <?php $Gender_details=get_table_details('stu_flexibility_sit',
                                        'Stu_Fle_SitID'); ?>
                                            <select name="Stu_Ins_Sit" id="Stu_Ins_Sit">
                                                <option value="0">
                                                    Select
                                                </option>
                                                <?php foreach($Gender_details as $Gender){ ?>
                                                     <option value="<?php echo $Gender['Stu_Fle_SitID']; ?>">
                                                        <?php echo $Gender['Stu_Fle_SitName']; ?>
                                                     </option>
                                                  <?php } ?>
                                            </select>
                                    </div>
                                    <div class="sub-hight fr">
                                         <?php $Gender_details=get_table_details('stu_flexibility_reach',
                                        'Stu_Fle_ReachID'); ?>
                                            <select name="Stu_Ins_Reach" id="Stu_Ins_Reach">
                                                <option value="0">
                                                    Select
                                                </option>
                                                <?php foreach($Gender_details as $Gender){ ?>
                                                     <option value="<?php echo $Gender['Stu_Fle_ReachID']; ?>">
                                                        <?php echo $Gender['Stu_Fle_ReachName']; ?>
                                                     </option>
                                                  <?php } ?>
                                            </select>
                                    </div>
                                </div>
                                 
                                </div>
                                <div class="frm">
                                    
                                    <div class="label fl"> Back Scratch Test</div>
                                    <div class="sub-hight fl">
                                         <?php $Gender_details=get_table_details('stu_flexibility_back',
                                        'Stu_Fle_BackID'); ?>
                                            <select name="Stu_Ins_Back" id="Stu_Ins_Back">
                                                <option value="0">
                                                    Select 
                                                </option>
                                                <?php foreach($Gender_details as $Gender){ ?>
                                                     <option value="<?php echo $Gender['Stu_Fle_BackID']; ?>">
                                                        <?php echo $Gender['Stu_Fle_BackName']; ?>
                                                     </option>
                                                  <?php } ?>
                                            </select>
                                    </div>
                                    
                                    <div class="sub-hight fr">
                                      <?php $Gender_details=get_table_details('stu_flexibility_scartch',
                                        'Stu_Fle_ScartchID'); ?>
                                            <select name="Stu_Ins_BackScratch" id="Stu_Ins_BackScratch">
                                                <option value="0">
                                                    Select
                                                </option>
                                                <?php foreach($Gender_details as $Gender){ ?>
                                                     <option value="<?php echo $Gender['Stu_Fle_ScartchID']; ?>">
                                                        <?php echo $Gender['Stu_Fle_ScartchName']; ?>
                                                     </option>
                                                  <?php } ?>
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="reg-frm pitching-stats">
                             	<h4>Speed</h4>
                                <div class="frm">
                                     <div class="label fl">40 Yard Dash</div>
                                <div class="sub-hight fl">
                                   <?php $Gender_details=get_table_details('stu_speed_yard',
							'Stu_Speed_YardID'); ?>
                                <select name="Stu_Ins_Yard" id="Stu_Ins_Yard">
                                    <option value="0">
                                       Select
                                    </option>
                                    <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Speed_YardID']; ?>">
                                         	<?php echo $Gender['Stu_Speed_YardName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                                <div class="sub-hight fr">
                               <?php $Gender_details=get_table_details('stu_speed_yardinche',
							'Stu_Speed_YardIncheID'); ?>
                                <select name="Stu_Ins_YardIncheID" id="Stu_Ins_YardIncheID">
                                    <option value="0">
                                       Select
                                    </option>
                                    <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Speed_YardIncheID']; ?>">
                                         	<?php echo $Gender['Stu_Speed_YardIncheName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                                </div>
                                <div class="frm">
                                    <div class="label fl">60 Yard Dash</div>
                                    <div class="sub-hight fl">
                                       <?php $Gender_details=get_table_details('stu_speed_yarddash',
                                'Stu_Speed_YardDashID'); ?>
                                    <select name="Stu_Ins_YardDash" id="Stu_Ins_YardDash">
                                        <option value="0">
                                           Select
                                        </option>
                                         <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Stu_Speed_YardDashID']; ?>">
                                                <?php echo $Gender['Stu_Speed_YardDashName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>
                                    </div>
                                    <div class="sub-hight fr">
                                        <?php $Gender_details=get_table_details('stu_speed_yarddashinche',
                                'Stu_Speed_YardDashIncheID'); ?>
                                    <select name="Stu_Ins_YardDashIncheID" id="Stu_Ins_YardDashIncheID">
                                        <option value="0">
                                           Select
                                        </option>
                                         <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Stu_Speed_YardDashIncheID']; ?>">
                                                <?php echo $Gender['Stu_Speed_YardDashIncheName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>	
                                    </div>  
                                </div>
                                <div class="frm">
                                    <div class="label fl">Mile Run</div>
                                    <div class="sub-hight fl">
                                        <?php $Gender_details=get_table_details('stu_speed_mile',
                                'Stu_Speed_MileID'); ?>
                                    <select name="Stu_Ins_Mile" id="Stu_Ins_Mile">
                                        <option value="0">
                                            Minutes
                                        </option>
                                         <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Stu_Speed_MileID']; ?>">
                                                <?php echo $Gender['Stu_Speed_MileName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>
                                    </div>
                                    <div class="sub-hight fr">
                                        <?php $Gender_details=get_table_details('stu_speed_mileinche',
                                'Stu_Speed_MileIncheID'); ?>
                                    <select name="Stu_Ins_MileIncheRunID" id="Stu_Ins_MileIncheRunID">
                                        <option value="0">
                                            Seconds
                                        </option>
                                         <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Stu_Speed_MileIncheID']; ?>">
                                                <?php echo $Gender['Stu_Speed_MileIncheName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="cl"></div>
                        <div class="frm">
                        	<input type="submit" value="Continue">
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
      
<script>
function getStudent_data()
{

	var flag = true;

	if ($('#Stu_Ins_PlayerName').val()=='')
	{
		$('#Stu_Ins_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_Ins_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Stu_Ins_HighSchool').val()=='')
	{
		$('#Stu_Ins_HighSchool').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_Ins_HighSchool').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Stu_Ins_City').val()=='')
	{
		$('#Stu_Ins_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_Ins_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Stu_Ins_State').val()=='')
	{
		$('#Stu_Ins_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_Ins_State').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Stu_Ins_Class').val()=='')
	{
		$('#Stu_Ins_Class').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_Ins_Class').css('border','1px solid #a4a4a4');
	}
	
	
	if ($('#Stu_Ins_Weight').val()=='0')
	{
		$('#Stu_Ins_Weight').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_Ins_Weight').css('border','1px solid #a4a4a4');
	}
	
	
	
	
	
	if ($('#Stu_Ins_Vertical').val()=='0')
	{
		$('#Stu_Ins_Vertical').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_Ins_Vertical').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Stu_VerticalIncheID').val()=='0')
	{
		$('#Stu_VerticalIncheID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_VerticalIncheID').css('border','1px solid #a4a4a4');
	}
	
	
	if ($('#Stu_Ins_HeightIncheWithID').val()=='0')
	{
		$('#Stu_Ins_HeightIncheWithID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_Ins_HeightIncheWithID').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Stu_Ins_HeightIncheWithoutID').val()=='0')
	{
		$('#Stu_Ins_HeightIncheWithoutID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_Ins_HeightIncheWithoutID').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Stu_Ins_HeightWith').val()=='0')
	{
		$('#Stu_Ins_HeightWith').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_Ins_HeightWith').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Stu_Ins_HeightWithout').val()=='0')
	{
		$('#Stu_Ins_HeightWithout').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_Ins_HeightWithout').css('border','1px solid #a4a4a4');
	}
	
	
	if ($('#Stu_Ins_HeightWith').val()=='0')
	{
		$('#Stu_Ins_HeightWith').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_Ins_HeightWith').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Stu_Ins_DominantHand').val()=='0')
	{
		$('#Stu_Ins_DominantHand').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_Ins_DominantHand').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Stu_Ins_DominantLeg').val()=='0')
	{
		$('#Stu_Ins_DominantLeg').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_Ins_DominantLeg').css('border','1px solid #a4a4a4');
	}
	
	
	
	
	if ($('#Stu_Ins_Yard').val()=='0')
	{
		$('#Stu_Ins_Yard').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_Ins_Yard').css('border','1px solid #a4a4a4');
	}
	if ($('#Stu_Ins_YardIncheID').val()=='0')
	{
		$('#Stu_Ins_YardIncheID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_Ins_YardIncheID').css('border','1px solid #a4a4a4');
	}
	
	
	if ($('#Stu_Ins_Mile').val()=='0')
	{
		$('#Stu_Ins_Mile').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_Ins_Mile').css('border','1px solid #a4a4a4');
	}
	if ($('#Stu_Ins_MileIncheRunID').val()=='0')
	{
		$('#Stu_Ins_MileIncheRunID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_Ins_MileIncheRunID').css('border','1px solid #a4a4a4');
	}
	
	if(flag == false) {
		return false;
	} else {
		$('#ProcessLoaderID').show();
		return true;
	}	
	return false;		
}





$(function() {
    $("#Stu_Ins_ImageName").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){
			 // set image data as background of div
			   $("#image1").hide();
                $("#imagePreview1").css("background-image", "url("+this.result+")");
            }
        }
    });
});



</script>
<style>
#imagePreview1 {
    width: 100%;
    height: 100%;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}
</style>