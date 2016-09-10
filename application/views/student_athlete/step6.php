<section class="content">
<div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		 
                <div class="register stud-athlete">
                    <div class="reg-title">
                        <h3>Perfect, now let’s talk game.</h3>
                        <p>Coaches want to see how you compete against other talent throughout your season and career.
Most of this is shown in your game footage which you will have the opportunity to post in just a
bit, but coaches like to see numbers. Remember, your stats need to be accurate, as they will
compare your numbers to what they see you do in a game. Be honest, as you are exactly what a 
coach somewhere out there is looking for!</p>
                    </div>
                    <?php if($this->session->flashdata('errormessage')){?>	
                    <div class="errormessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('errormessage');?>
                    </div>  
                <?php }?>
				 <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>student_athlete/insert_step6" onsubmit="return getStudent_data();">
                    <div class="reg-frm stud-dt">
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                	<?php $Gender_details=get_table_details('stu_primary_position','PositionID'); ?>
                                <select name="Stu_PrimaryID" id="Stu_PrimaryID">
                                    <option value="0"> Select 
                                       Primary Position 
                                      </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['PositionID']; ?>">
                                         	<?php echo $Gender['PositionName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                <?php $Gender_details=get_table_details('stu_primary_throws','ThrowsID'); ?>
                                <select name="Stu_ThrowsID" id="Stu_ThrowsID">
                                    <option value="0"> Select 
                                        Throws
                                     </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['ThrowsID']; ?>">
                                         	<?php echo $Gender['ThrowsName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                              <?php $Gender_details=get_table_details('stu_primary_bats','BatsID'); ?>
                                <select name="Stu_BatsID" id="Stu_BatsID">
                                    <option value="0"> Select 
                                        Bats
                                     </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['BatsID']; ?>">
                                         	<?php echo $Gender['BatsName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                             </div>
                        </div>
                    </div>
                    <div class="reg-frm stud-dt">
                        <h5>Pitching Stats</h5>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                               <?php $Gender_details=get_table_details('stu_pitching_era','EraID'); ?>
                                <select name="Stu_EraID" id="Stu_EraID">
                                    <option value="0"> Select 
                                        ERA
                                     </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['EraID']; ?>">
                                         	<?php echo $Gender['EraName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                	<?php $Gender_details=get_table_details('stu_pitching_winloss_rec','Winloss_RecID'); ?>
                                <select name="Stu_WinID" id="Stu_WinID">
                                    <option value="0"> Select 
                                       Win/Loss Record
                                     </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Winloss_RecID']; ?>">
                                         	<?php echo $Gender['Winloss_RecName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                	<?php $Gender_details=get_table_details('stu_pitching_primary_pitch','Primary_PitchID'); ?>
                                <select name="Stu_PrimaryPitchID" id="Stu_PrimaryPitchID">
                                    <option value="0"> Select 
                                        Primary Pitch
                                     </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Primary_PitchID']; ?>">
                                         	<?php echo $Gender['Primary_PitchName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                 	<?php $Gender_details=get_table_details('stu_pitching_secondary_pitch','Secondary_PitchID'); ?>
                                <select name="Stu_SecondaryPitchID" id="Stu_SecondaryPitchID">
                                    <option value="0"> Select 
                                       Secondary Pitch
                                     </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Secondary_PitchID']; ?>">
                                         	<?php echo $Gender['Secondary_PitchName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                	<?php $Gender_details=get_table_details('stu_pitching_fastball','FastballID'); ?>
                                <select name="Stu_FastBallID" id="Stu_FastBallID">
                                    <option value="0"> Select 
                                        Fastball Velocity
                                     </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['FastballID']; ?>">
                                         	<?php echo $Gender['FastballName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                             </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="fileupload img-upload">
                                <div class="filenamess"></div>
                                <div class="file-btn img-icon">Upload Image</div>
                                <input type="file" name="Stu_PitchImageName" class="filefild">
                                 <script>
                                $('input.filefild').on('change', function (event, files, label) {
                                    var file_name = this.value.replace(/\\/g, '/').replace(/.*\//, '')
                                    $('.filenamess').text(file_name);
                                });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="reg-frm stud-dt">
                        <h5>Hitting Stats</h5>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                <?php $Gender_details=get_table_details('stu_hitting_batting_avg','Batting_AvgID'); ?>
                                <select name="Stu_BattingID" id="Stu_BattingID">
                                    <option value="0"> Select 
                                        Batting Average
                                     </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Batting_AvgID']; ?>">
                                         	<?php echo $Gender['Batting_AvgName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                <?php $Gender_details=get_table_details('stu_hitting_rbi','Stu_RbiID'); ?>
                                <select name="Stu_RbiID" id="Stu_RbiID">
                                    <option value="0"> Select 
                                       RBI
                                     </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_RbiID']; ?>">
                                         	<?php echo $Gender['Stu_RbiName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                               <?php $Gender_details=get_table_details('stu_hitting_stolen','Stu_StolenID'); ?>
                                <select name="Stu_StolenID" id="Stu_StolenID">
                                    <option value="0"> Select 
                                       Stolen Bases
                                     </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_StolenID']; ?>">
                                         	<?php echo $Gender['Stu_StolenName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                 <?php $Gender_details=get_table_details('stu_hitting_onbase','Stu_OnBaseID'); ?>
                                <select name="Stu_OnBaseID" id="Stu_OnBaseID">
                                    <option value="0"> Select 
                                       On Base
                                     </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_OnBaseID']; ?>">
                                         	<?php echo $Gender['Stu_OnBaseName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                  <?php $Gender_details=get_table_details('stu_hitting_yardbase','Stu_YardBaseID'); ?>
                                <select name="Stu_HitYardID" id="Stu_HitYardID">
                                    <option value="0"> Select 
                                        60 Yard Dash
                                     </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_YardBaseID']; ?>">
                                         	<?php echo $Gender['Stu_YardBaseName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                             </div>
                             <div class="inner-frm fr">
                                 <?php $Gender_details=get_table_details('stu_hitting_speed','Stu_SpeedID'); ?>
                                <select name="Stu_SpeedID" id="Stu_SpeedID">
                                    <option value="0"> Select 
                                        Speed from Home to First
                                     </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_SpeedID']; ?>">
                                         	<?php echo $Gender['Stu_SpeedName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                             </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="fileupload img-upload">
                                <div class="filenames"></div>
                                <div class="file-btn img-icon">Upload Image</div>
                                <input type="file" name="Stu_HitImageName" class="filefilds">
                                 <script>
                                $('input.filefilds').on('change', function (event, files, label) {
                                    var file_name = this.value.replace(/\\/g, '/').replace(/.*\//, '')
                                    $('.filenames').text(file_name);
                                });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="reg-frm stud-dt">
                        <h5>Fielding Stats</h5>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                               <?php $Gender_details=get_table_details('stu_field_assist','Stu_AssistID'); ?>
                                <select name="Stu_AssistID" id="Stu_AssistID">
                                    <option value="0"> Select 
                                        Assists
                                     </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_AssistID']; ?>">
                                         	<?php echo $Gender['Stu_AssistName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                <?php $Gender_details=get_table_details('stu_field_put','Stu_PutID'); ?>
                                <select name="Stu_PutID" id="Stu_PutID">
                                    <option value="0"> Select 
                                       Put Outs
                                     </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_PutID']; ?>">
                                         	<?php echo $Gender['Stu_PutName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                <?php $Gender_details=get_table_details('stu_field_double','Stu_DoubleID'); ?>
                                <select name="Stu_DoubleID" id="Stu_DoubleID">
                                    <option value="0"> Select 
                                        Double Plays
                                     </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_DoubleID']; ?>">
                                         	<?php echo $Gender['Stu_DoubleName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                 <?php $Gender_details=get_table_details('stu_field_triple','Stu_TripleID'); ?>
                                <select name="Stu_TripleID" id="Stu_TripleID">
                                    <option value="0"> Select 
                                       Triple Plays
                                     </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_TripleID']; ?>">
                                         	<?php echo $Gender['Stu_TripleName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                <?php $Gender_details=get_table_details('stu_field_filed','Stu_FiledID'); ?>
                                <select name="Stu_FieldID" id="Stu_FieldID">
                                    <option value="0"> Select 
                                        Fielding Percentage
                                     </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_FiledID']; ?>">
                                         	<?php echo $Gender['Stu_FiledName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                             </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="fileupload img-upload">
                                <div class="filename"></div>
                                <div class="file-btn img-icon">Upload Image</div>
                                <input type="file" name="Stu_FieldImageName" class="filefildss">
                                 <script>
                                $('input.filefildss').on('change', function (event, files, label) {
                                    var file_name = this.value.replace(/\\/g, '/').replace(/.*\//, '')
                                    $('.filename').text(file_name);
                                });
                                </script>
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

	if ($('#Stu_PrimaryID').val()==0)
	{
		$('#Stu_PrimaryID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_PrimaryID').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Stu_EraID').val()==0)
	{
		$('#Stu_EraID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_EraID').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Stu_BattingID').val()==0)
	{
		$('#Stu_BattingID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_BattingID').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Stu_AssistID').val()==0)
	{
		$('#Stu_AssistID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Stu_AssistID').css('border','1px solid #a4a4a4');
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