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
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>juco_transfer/insert_step5" onsubmit="return getJucodent_data();">
                    <div class="reg-frm stud-dt">
                        <h5>Biometrics</h5>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                              <?php $Gender_details=get_table_details('stu_biometric_weight','Stu_Bio_WeigthID'); ?>
                                <select name="Juco_BioWeightID" id="Juco_BioWeightID">
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
                                <select name="Juco_BioHeightWithoutID" id="Juco_BioHeightWithoutID">
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
                                <select name="Juco_BioHeightIncheWithoutID" id="Juco_BioHeightIncheWithoutID">
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
                                <select name="Juco_BioHeightWithID" id="Juco_BioHeightWithID">
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
                                <select name="Juco_BioHeightIncheWithID" id="Juco_BioHeightIncheWithID">
                                     <option value="0">
                                       Select 
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Juco_Bio_HeightIncheID']; ?>">
                                         	<?php echo $Gender['Juco_Bio_HeightIncheName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                    </div>
							</div>
                            <div class="inner-frm fr">
                                <div class="label fl">Wingspan</div>
                        		<div class="sub-hight fl">
                                 <?php $Gender_details=get_table_details('stu_biometric_wingspan',
							'Juco_Bio_WingSpanID'); ?>
                                <select name="Juco_WingSpanID" id="Juco_WingSpanID">
                                    <option value="0">
                                       Select Wingspan
                                    </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Juco_Bio_WingSpanID']; ?>">
                                         	<?php echo $Gender['Juco_Bio_WingSpanName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                            </div>
                            	<div class="sub-hight fr">
                             <?php $Gender_details=get_table_details('stu_biometric_wingspaninche',
							'Juco_Bio_WingSpanIncheID'); ?>
                                <select name="Juco_WingSpanIncheID" id="Juco_WingSpanIncheID">
                                    <option value="0">
                                       Select 
                                    </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Juco_Bio_WingSpanIncheID']; ?>">
                                         	<?php echo $Gender['Juco_Bio_WingSpanIncheName']; ?>
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
							'Juco_Bio_HandWidthID'); ?>
                                <select name="Juco_HandWidthID" id="Juco_HandWidthID">
                                     <option value="0">
                                       Select Hand Width
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Juco_Bio_HandWidthID']; ?>">
                                         	<?php echo $Gender['Juco_Bio_HandWidthName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                                <div class="sub-hight fr">
                                  <?php $Gender_details=get_table_details('stu_biometric_handwidthinche',
							'Juco_Bio_HandWidthIncheID'); ?>
                                <select name="Juco_HandWidthIncheID" id="Juco_HandWidthIncheID">
                                     <option value="0">
                                       Select 
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Juco_Bio_HandWidthIncheID']; ?>">
                                         	<?php echo $Gender['Juco_Bio_HandWidthIncheName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                             </div>
                            <div class="inner-frm fr">
                                
                                 <div class="label fl">Hand Length</div>
                                <div class="sub-hight fl">
                                    <?php $Gender_details=get_table_details('stu_biometric_handlength',
							'Juco_Bio_HandLengthID'); ?>
                                <select name="Juco_HandLengthID" id="Juco_HandLengthID">
                                    <option value="0">
                                        Hand Length
                                    </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Juco_Bio_HandLengthID']; ?>">
                                         	<?php echo $Gender['Juco_Bio_HandLengthName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                                <div class="sub-hight fr">
                                <?php $Gender_details=get_table_details('stu_biometric_handlengthinche',
							'Juco_Bio_HandLengthIncheID'); ?>
                                <select name="Juco_HandLengthIncheID" id="Juco_HandLengthIncheID">
                                    <option value="0">
                                       Select
                                    </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Juco_Bio_HandLengthIncheID']; ?>">
                                         	<?php echo $Gender['Juco_Bio_HandLengthIncheName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                  <?php $Gender_details=get_table_details('stu_biometric_domainthand',
							'Juco_Bio_DomaintHandID'); ?>
                                <select name="Juco_DominantID" id="Juco_DominantID">
                                       <option value="0">
                                       Select Dominant Hand
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Juco_Bio_DomaintHandID']; ?>">
                                         	<?php echo $Gender['Juco_Bio_DomaintHandName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                 <?php $Gender_details=get_table_details('stu_biometric_domainleg',
							'Juco_Bio_DomaintLegID'); ?>
                                <select name="Juco_DominantLegID" id="Juco_DominantLegID">
                                    <option value="1">
                                        Select Dominant Leg
                                    </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Juco_Bio_DomaintLegID']; ?>">
                                         	<?php echo $Gender['Juco_Bio_DomaintLegName']; ?>
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
                                    'Juco_Stre_VerticalID'); ?>
                                        <select name="Juco_VerticalID" id="Juco_VerticalID">
                                            <option value="0">
                                                Select Vertical Jump
                                            </option>
                                            <?php foreach($Gender_details as $Gender){ ?>
                                                 <option value="<?php echo $Gender['Juco_Stre_VerticalID']; ?>">
                                                    <?php echo $Gender['Juco_Stre_VerticalName']; ?>
                                                 </option>
                                              <?php } ?>
                                        </select>
                                </div>
                                <div class="sub-hight fr">
                              		 <?php $Gender_details=get_table_details('stu_strength_verticalinche',
                                    'Juco_Stre_VerticalIncheID'); ?>
                                        <select name="Juco_VerticalIncheID" id="Juco_VerticalIncheID">
                                            <option value="0">
                                                Select 
                                            </option>
                                            <?php foreach($Gender_details as $Gender){ ?>
                                                 <option value="<?php echo $Gender['Juco_Stre_VerticalIncheID']; ?>">
                                                    <?php echo $Gender['Juco_Stre_VerticalIncheName']; ?>
                                                 </option>
                                              <?php } ?>
                                        </select>
                                </div>
                             </div>
                            <div class="inner-frm fr">
                                <div class="label fl">Standing Long Jump</div>
                                <div class="sub-hight fl">
									  <?php $Gender_details=get_table_details('stu_strength_stand',
                                'Juco_Stre_StandID'); ?>
                                    <select name="Juco_StandingID" id="Juco_StandingID">
                                        <option value="0">
                                            Select Standing Long Jump
                                        </option>
                                         <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Juco_Stre_StandID']; ?>">
                                                <?php echo $Gender['Juco_Stre_StandName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>
                                </div>
                                <div class="sub-hight fr">
                                	 <?php $Gender_details=get_table_details('stu_strength_standinche',
                                'Juco_Stre_StandIncheID'); ?>
                                    <select name="Juco_StandIncheingID" id="Juco_StandIncheingID">
                                        <option value="0">
                                            Select 
                                        </option>
                                         <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Juco_Stre_StandIncheID']; ?>">
                                                <?php echo $Gender['Juco_Stre_StandIncheName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>
                                </div>

								
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                 <?php $Gender_details=get_table_details('stu_strength_powerclean',
							'Juco_Stre_PowerID'); ?>
                                <select name="Juco_PowerCleanID" id="Juco_PowerCleanID">
                                    <option value="0">
                                        Select Power Clean Max
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Juco_Stre_PowerID']; ?>">
                                         	<?php echo $Gender['Juco_Stre_PowerName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                 <?php $Gender_details=get_table_details('stu_strength_bench',
							'Juco_Stre_BenchID'); ?>
                                <select name="Juco_BenchID" id="Juco_BenchID">
                                    <option value="0">
                                       Select Bench Press Max
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Juco_Stre_BenchID']; ?>">
                                         	<?php echo $Gender['Juco_Stre_BenchName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                 <?php $Gender_details=get_table_details('stu_strength_squat',
							'Juco_Stre_SquatID'); ?>
                                <select name="Juco_SquatID" id="Juco_SquatID">
                                    <option value="0">
                                        Select Squat Max
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Juco_Stre_SquatID']; ?>">
                                         	<?php echo $Gender['Juco_Stre_SquatName']; ?>
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
							'Juco_Speed_MileID'); ?>
                                <select name="Juco_MileRunID" id="Juco_MileRunID">
                                    <option value="0">
                                        Select  mile run
                                    </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Juco_Speed_MileID']; ?>">
                                         	<?php echo $Gender['Juco_Speed_MileName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                                <div class="sub-hight fr">
                                	<?php $Gender_details=get_table_details('stu_speed_mileinche',
							'Juco_Speed_MileIncheID'); ?>
                                <select name="Juco_MileIncheRunID" id="Juco_MileIncheRunID">
                                    <option value="0">
                                        Select
                                    </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Juco_Speed_MileIncheID']; ?>">
                                         	<?php echo $Gender['Juco_Speed_MileIncheName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>

                                 
                                 
                             </div>
                            <div class="inner-frm fr">
                                <div class="label fl">40 Yard Dash</div>
                                <div class="sub-hight fl">
                                   <?php $Gender_details=get_table_details('stu_speed_yard',
							'Juco_Speed_YardID'); ?>
                                <select name="Juco_YardID" id="Juco_YardID">
                                    <option value="0">
                                        Select 40 yard dash 
                                    </option>
                                    <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Juco_Speed_YardID']; ?>">
                                         	<?php echo $Gender['Juco_Speed_YardName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                                <div class="sub-hight fr">
                               <?php $Gender_details=get_table_details('stu_speed_yardinche',
							'Juco_Speed_YardIncheID'); ?>
                                <select name="Juco_YardIncheID" id="Juco_YardIncheID">
                                    <option value="0">
                                        Select
                                    </option>
                                    <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Juco_Speed_YardIncheID']; ?>">
                                         	<?php echo $Gender['Juco_Speed_YardIncheName']; ?>
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
							'Juco_Speed_YardDashID'); ?>
                                <select name="Juco_YardDashID" id="Juco_YardDashID">
                                    <option value="0">
                                       Select 60 yard dash
                                    </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Juco_Speed_YardDashID']; ?>">
                                         	<?php echo $Gender['Juco_Speed_YardDashName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                                <div class="sub-hight fr">
                                	<?php $Gender_details=get_table_details('stu_speed_yarddashinche',
							'Juco_Speed_YardDashIncheID'); ?>
                                <select name="Juco_YardDashIncheID" id="Juco_YardDashIncheID">
                                    <option value="0">
                                       Select
                                    </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Juco_Speed_YardDashIncheID']; ?>">
                                         	<?php echo $Gender['Juco_Speed_YardDashIncheName']; ?>
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
							'Juco_Endu_PushID'); ?>
                                <select name="Juco_PushID" id="Juco_PushID">
                                    <option value="0">
                                       Select Push-ups in 1 minute
                                    </option>
                                    <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Juco_Endu_PushID']; ?>">
                                         	<?php echo $Gender['Juco_Endu_PushName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                  <?php $Gender_details=get_table_details('stu_endurance_sit',
							'Juco_Endu_SitID'); ?>
                                <select name="Juco_SitID" id="Juco_SitID">
                                    <option value="0">
                                       Select Sit-ups in 1 minute
                                    </option>
                                    <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Juco_Endu_SitID']; ?>">
                                         	<?php echo $Gender['Juco_Endu_SitName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                  <?php $Gender_details=get_table_details('stu_endurance_pull',
							'Juco_Endu_PullID'); ?>
                                <select name="Juco_PullID" id="Juco_PullID">
                                    <option value="0">
                                        Select Pull-ups in 1 minute
                                    </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Juco_Endu_PullID']; ?>">
                                         	<?php echo $Gender['Juco_Endu_PullName']; ?>
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
function getJucodent_data()
{

	var flag = true;

	if ($('#Juco_BioWeightID').val()==0)
	{
		$('#Juco_BioWeightID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Juco_BioWeightID').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Juco_PushID').val()==0)
	{
		$('#Juco_PushID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Juco_PushID').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Juco_VerticalID').val()==0)
	{
		$('#Juco_VerticalID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Juco_VerticalID').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Juco_MileRunID').val()==0)
	{
		$('#Juco_MileRunID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Juco_MileRunID').css('border','1px solid #a4a4a4');
	}
	
	
	if ($('#Juco_MileRunID').val()==0)
	{
		$('#Juco_MileRunID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Juco_MileRunID').css('border','1px solid #a4a4a4');
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