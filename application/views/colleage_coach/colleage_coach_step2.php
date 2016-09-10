<section class="content">
<div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
	            <div class="register">
            	<div class="reg-title">
                    <h3>Great, nice to meet you! Now, tell us more about your program.</h3>
                    
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
                 <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>colleage_coach/insert_step2" onsubmit="return getInsertData();">
               
                <div class="reg-frm">
                	<div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	 <?php $Division_details=get_table_details('coll_cotch_division','Coll_DivisionID'); ?>
                            <select name="Coach_DivisionID" id="Coach_DivisionID">
                                <option value="0">Select Division</option>
                                 <?php for($i=0;$i<count($Division_details);$i++) { ?>
                                <option value="<?php echo $Division_details[$i]['Coll_DivisionID']; ?>">
                                <?php echo $Division_details[$i]['Coll_DivisionName']; ?></option>
                                <?php } ?>
                            </select>
                         </div>
                        <div class="inner-frm fr">
                        	<input type="text" placeholder="Conference" name="Coach_Conferance" id="Coach_Conferance" >
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" placeholder="This Season’s Record" name="Coach_SeasonRecord" id="Coach_SeasonRecord">
                         </div>
                        <div class="inner-frm fr">
                        	<input type="text" placeholder="Career Record" name="Coach_CareerRecord" id="Coach_CareerRecord">
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                             <?php $Playoff_details=get_table_details('coll_cotch_playoff','Coll_PlayoffID'); ?>
                              <?php if($this->session->userdata('admin_register')) {
                                $year_id = "Coach_CurrentProgramID1";
                                $null_val = "0";
                                } else{
                                    $year_id = "Coach_CurrentProgramID";
                                    $null_val = "0";
                                    } ?>

                            <select name="Coach_CurrentProgramID" id="<?php echo $year_id; ?>">
                                <?php $Program_details=get_table_details('coll_cotch_program','Coll_ProgramID'); ?>                            
                                <option value="<?php echo $null_val; ?>">Year at Current School</option>
                                  <?php for($i=0;$i<count($Program_details);$i++) { ?>
                                <option value="<?php echo $Program_details[$i]['Coll_ProgramID']; ?>">
                                <?php echo $Program_details[$i]['Coll_ProgramName']; ?></option>
                                <?php } ?>
                            </select>
                         </div>
                        <div class="inner-frm fr">
                        	  <?php $Playoff_details=get_table_details('coll_cotch_playoff','Coll_PlayoffID'); ?>
                              <?php if($this->session->userdata('admin_register')) {
                                $coach_id = "Coach_PlayID1";
                                $null_val = "0";
                                } else{
                                    $coach_id = "Coach_PlayID";
                                    $null_val = "0";
                                    } ?>
                            <select name="Coach_PlayID" id="<?php echo $coach_id; ?>">
                                <option value="<?php echo $null_val; ?>">Number of Playoff Appearances</option>
                                 <?php for($i=0;$i<count($Playoff_details);$i++) { ?>
                                <option value="<?php echo $Playoff_details[$i]['Coll_PlayoffID']; ?>">
                                <?php echo $Playoff_details[$i]['Coll_PlayoffName']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	
                        	<input type="text" placeholder="Team Website(link)" name="Coach_TeamID" id="Coach_TeamID">
              			<?php /*$Team_details=get_table_details('coll_cotch_team','Coll_TeamID'); ?>
                            <select name="Coach_TeamID" id="Coach_TeamID">
                                <option value="0">Select Team</option>
                                 <?php for($i=0;$i<count($Team_details);$i++) { ?>
                                <option value="<?php echo $Team_details[$i]['Coll_TeamID']; ?>">
                                <?php echo $Team_details[$i]['Coll_TeamName']; ?></option>
                                <?php } ?>
                            </select>*/
							?>
                         </div>
                        <div class="inner-frm fr">
                        	<input type="text" placeholder="Team Recruiting Questionnarie(link)" name="Coach_CoachAward" id="Coach_CoachAward">
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<textarea placeholder="What makes your program unique?" name="Coach_Program" id="Coach_Program"></textarea>
                    </div>
                    
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="submit" value="Continue">
                         </div>
                    </div>
                </div>
                </form>
        	</div>
            </div>
        </div>
    </section>
    
<script>
function getInsertData()
{

	var flag = true;
	
	
	
	
	if($('#Coach_DivisionID').val()==0){
		$('#Coach_DivisionID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Coach_DivisionID').css('border','1px solid #a4a4a4');
	}
	
	if($('#Coach_CurrentProgramID').val()==0){
		$('#Coach_CurrentProgramID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Coach_CurrentProgramID').css('border','1px solid #a4a4a4');
	}
	
	var expression = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
 	var regex = new RegExp(expression);
	var t = $('#Coach_TeamID').val();
  if (!t.match(regex) )
	{
		$('#Coach_TeamID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Coach_TeamID').css('border','1px solid #a4a4a4');
	}
	
	
	if($('#Coach_PlayID').val()==0){
		$('#Coach_PlayID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Coach_PlayID').css('border','1px solid #a4a4a4');
	}
	
	
	
	if($('#Coach_Program').val()==''){
		$('#Coach_Program').css('border','1px solid red');
		flag = false;
	} else {
		$('#Coach_Program').css('border','1px solid #a4a4a4');
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