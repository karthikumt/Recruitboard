<section class="content">
<div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		 
                <div class="register stud-athlete">
                    <div class="reg-title">
                        <h3>Now, let’s begin building your athletic resume.</h3>
                        <p>Biometrics measure and analyze your body’s physical characteristics and its performance level.
These statistics are one of the most important aspects to being recruited. Every coach looks for
different qualifications, so again, be honest. Lying will destroy your chances of playing your sport
at the next level and living your dream.</p>
                    </div>
                     <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>student_athlete/insert_step5" onsubmit="return getStudent_data();">
                    <div class="reg-frm stud-dt">
                        <h5>Biometrics</h5>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                              <?php $Gender_details=get_table_details('stu_biometric_weight','Stu_Bio_WeigthID'); ?>
                                <select name="Stu_BioWeightID" id="Stu_BioWeightID">
                                    <option value="0">
                                       Select Weight 
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Bio_WeigthID']; ?>">
                                         	<?php echo $Gender['Stu_Bio_WeightName']; ?>
                                         </option>
                                      <?php } ?>
                                    
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                <div class="label fl">Height Without Shoes</div>
                                <div class="sub-hight fl">
                                    <?php $Gender_details=get_table_details('stu_biometric_heightwithout',
							'Stu_Bio_HeightWithoutID'); ?>
                                <select name="Stu_BioHeightWithoutID" id="Stu_BioHeightWithoutID">
                                      <option value="0">
                                       Select   Height Without Shoes
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
                                <select name="Stu_BioHeightIncheWithoutID" id="Stu_BioHeightIncheWithoutID">
                                      <option value="0">
                                       Select 
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Bio_HeightIncheWithoutID']; ?>">
                                         	<?php echo $Gender['Stu_Bio_HeightIncheWithoutName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                            	</div>
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                    <div class="label fl">Height with shoes</div>
                                    <div class="sub-hight fl">
                                         <?php $Gender_details=get_table_details('stu_biometric_height',
							'Stu_Bio_HeigthID'); ?>
                                <select name="Stu_BioHeightWithID" id="Stu_BioHeightWithID">
                                     <option value="0">
                                       Select Height With Shoes 
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
                                <select name="Stu_BioHeightIncheWithID" id="Stu_BioHeightIncheWithID">
                                     <option value="0">
                                       Select 
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Bio_HeightIncheID']; ?>">
                                         	<?php echo $Gender['Stu_Bio_HeightIncheName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                    </div>
							</div>
                            <div class="inner-frm fr">
                                <div class="label fl">Wingspan</div>
                        		<div class="sub-hight fl">
                                 <?php $Gender_details=get_table_details('stu_biometric_wingspan',
							'Stu_Bio_WingSpanID'); ?>
                                <select name="Stu_WingSpanID" id="Stu_WingSpanID">
                                    <option value="0">
                                       Select Wingspan
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
                                <select name="Stu_WingSpanIncheID" id="Stu_WingSpanIncheID">
                                    <option value="0">
                                       Select 
                                    </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Bio_WingSpanIncheID']; ?>">
                                         	<?php echo $Gender['Stu_Bio_WingSpanIncheName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                            </div>

								 
								
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                <div class="label fl">Hand Width</div>
                                <div class="sub-hight fl">
                                      <?php $Gender_details=get_table_details('stu_biometric_handwidth',
							'Stu_Bio_HandWidthID'); ?>
                                <select name="Stu_HandWidthID" id="Stu_HandWidthID">
                                     <option value="0">
                                       Select Hand Width
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
                                <select name="Stu_HandWidthIncheID" id="Stu_HandWidthIncheID">
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
                            <div class="inner-frm fr">
                                
                                 <div class="label fl">Hand Length</div>
                                <div class="sub-hight fl">
                                    <?php $Gender_details=get_table_details('stu_biometric_handlength',
							'Stu_Bio_HandLengthID'); ?>
                                <select name="Stu_HandLengthID" id="Stu_HandLengthID">
                                    <option value="0">
                                        Hand Length
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
                                <select name="Stu_HandLengthIncheID" id="Stu_HandLengthIncheID">
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
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                  <?php $Gender_details=get_table_details('stu_biometric_domainthand',
							'Stu_Bio_DomaintHandID'); ?>
                                <select name="Stu_DominantID" id="Stu_DominantID">
                                       <option value="0">
                                       Select Dominant Hand
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Bio_DomaintHandID']; ?>">
                                         	<?php echo $Gender['Stu_Bio_DomaintHandName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                 <?php $Gender_details=get_table_details('stu_biometric_domainleg',
							'Stu_Bio_DomaintLegID'); ?>
                                <select name="Stu_DominantLegID" id="Stu_DominantLegID">
                                    <option value="1">
                                        Select Dominant Leg
                                    </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Bio_DomaintLegID']; ?>">
                                         	<?php echo $Gender['Stu_Bio_DomaintLegName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="reg-frm stud-dt">
                        <h5>Strength and Agility</h5>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                            	<div class="label fl">Vertical Jump</div>
                                <div class="sub-hight fl">
                                  <?php $Gender_details=get_table_details('stu_strength_vertical',
                                    'Stu_Stre_VerticalID'); ?>
                                        <select name="Stu_VerticalID" id="Stu_VerticalID">
                                            <option value="0">
                                                Select Vertical Jump
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
                                        <select name="Stu_VerticalIncheID" id="Stu_VerticalIncheID">
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
                            <div class="inner-frm fr">
                                <div class="label fl">Standing Long Jump</div>
                                <div class="sub-hight fl">
									  <?php $Gender_details=get_table_details('stu_strength_stand',
                                'Stu_Stre_StandID'); ?>
                                    <select name="Stu_StandingID" id="Stu_StandingID">
                                        <option value="0">
                                            Select Standing Long Jump
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
                                    <select name="Stu_StandIncheingID" id="Stu_StandIncheingID">
                                        <option value="0">
                                            Select 
                                        </option>
                                         <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Stu_Stre_StandIncheID']; ?>">
                                                <?php echo $Gender['Stu_Stre_StandIncheName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>
                                </div>

								
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                 <?php $Gender_details=get_table_details('stu_strength_powerclean',
							'Stu_Stre_PowerID'); ?>
                                <select name="Stu_PowerCleanID" id="Stu_PowerCleanID">
                                    <option value="0">
                                        Select Power Clean Max
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Stre_PowerID']; ?>">
                                         	<?php echo $Gender['Stu_Stre_PowerName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                 <?php $Gender_details=get_table_details('stu_strength_bench',
							'Stu_Stre_BenchID'); ?>
                                <select name="Stu_BenchID" id="Stu_BenchID">
                                    <option value="0">
                                       Select Bench Press Max
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Stre_BenchID']; ?>">
                                         	<?php echo $Gender['Stu_Stre_BenchName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                 <?php $Gender_details=get_table_details('stu_strength_squat',
							'Stu_Stre_SquatID'); ?>
                                <select name="Stu_SquatID" id="Stu_SquatID">
                                    <option value="0">
                                        Select Squat Max
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Stre_SquatID']; ?>">
                                         	<?php echo $Gender['Stu_Stre_SquatName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                             </div>
                        </div>
                    </div>
                    <div class="reg-frm stud-dt">
                    	 <h5>Speed</h5>
                    	<div class="frm clearfix">
                            <div class="inner-frm fl">
                                <div class="label fl">Mile Run</div>
                                <div class="sub-hight fl">
                                    <?php $Gender_details=get_table_details('stu_speed_mile',
							'Stu_Speed_MileID'); ?>
                                <select name="Stu_MileRunID" id="Stu_MileRunID">
                                    <option value="0">
                                        Select  mile run
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
                                <select name="Stu_MileIncheRunID" id="Stu_MileIncheRunID">
                                    <option value="0">
                                        Select
                                    </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Speed_MileIncheID']; ?>">
                                         	<?php echo $Gender['Stu_Speed_MileIncheName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>

                                 
                                 
                             </div>
                            <div class="inner-frm fr">
                                <div class="label fl">40 Yard Dash</div>
                                <div class="sub-hight fl">
                                   <?php $Gender_details=get_table_details('stu_speed_yard',
							'Stu_Speed_YardID'); ?>
                                <select name="Stu_YardID" id="Stu_YardID">
                                    <option value="0">
                                        Select 40 yard dash 
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
                                <select name="Stu_YardIncheID" id="Stu_YardIncheID">
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
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                               <div class="label fl">60 Yard Dash</div>
                                <div class="sub-hight fl">
                                   <?php $Gender_details=get_table_details('stu_speed_yarddash',
							'Stu_Speed_YardDashID'); ?>
                                <select name="Stu_YardDashID" id="Stu_YardDashID">
                                    <option value="0">
                                       Select 60 yard dash
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
                                <select name="Stu_YardDashIncheID" id="Stu_YardDashIncheID">
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
                            
                        </div>
                    </div>
                    <div class="reg-frm stud-dt">
                    	 <h5>Endurance</h5>
                    	<div class="frm clearfix">
                            <div class="inner-frm fl">
                                <?php $Gender_details=get_table_details('stu_endurance_push',
							'Stu_Endu_PushID'); ?>
                                <select name="Stu_PushID" id="Stu_PushID">
                                    <option value="0">
                                       Select Push-ups in 1 minute
                                    </option>
                                    <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Endu_PushID']; ?>">
                                         	<?php echo $Gender['Stu_Endu_PushName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                  <?php $Gender_details=get_table_details('stu_endurance_sit',
							'Stu_Endu_SitID'); ?>
                                <select name="Stu_SitID" id="Stu_SitID">
                                    <option value="0">
                                       Select Sit-ups in 1 minute
                                    </option>
                                    <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Endu_SitID']; ?>">
                                         	<?php echo $Gender['Stu_Endu_SitName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                  <?php $Gender_details=get_table_details('stu_endurance_pull',
							'Stu_Endu_PullID'); ?>
                                <select name="Stu_PullID" id="Stu_PullID">
                                    <option value="0">
                                        Select Pull-ups in 1 minute
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
                    <div class="frm clearfix">
                        <input type="submit" value="Continue">
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

	if ($('#Stu_BioWeightID').val()==0)
	{
		$('#Stu_BioWeightID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_BioWeightID').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Stu_PushID').val()==0)
	{
		$('#Stu_PushID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_PushID').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Stu_VerticalID').val()==0)
	{
		$('#Stu_VerticalID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_VerticalID').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Stu_MileRunID').val()==0)
	{
		$('#Stu_MileRunID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_MileRunID').css('border','1px solid #a4a4a4');
	}
	
	
	if ($('#Stu_MileRunID').val()==0)
	{
		$('#Stu_MileRunID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_MileRunID').css('border','1px solid #a4a4a4');
	}
	
	
	if(flag == false) {
		return false;
	} else {
		$('#ProcessLoaderID').show();
		return true;
	}	
	return false;		
}

</script>