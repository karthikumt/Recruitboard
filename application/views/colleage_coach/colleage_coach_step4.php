<section class="content">
<div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register step4">
            	<div class="reg-title">
                    <h3>One last step, let's customize your recruits.  Create detailed and need
specific ads for any and all positions for which you are recruiting.
Select from the categories below.</h3>
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
            	   <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>colleage_coach/insert_step4" onsubmit="return getInsertData();"
                <div class="reg-frm">
                	<div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<?php $Gen_details=get_table_details('coll_cotch_gen','Coll_GenID'); ?>
                            <select name="Coach_GenderDetailsID" id="Coach_GenderDetailsID">
                            	<option value="0">Select Gender</option>
                                  <?php for($i=0;$i<count($Gen_details);$i++) { ?>
                                <option value="<?php echo $Gen_details[$i]['Coll_GenID']; ?>">
                                <?php echo $Gen_details[$i]['Coll_GenName']; ?></option>
                                <?php } ?>
                            </select>
                         </div>
                         <div class="inner-frm fr">
                        	<?php $Spo_details=get_table_details('coll_cotch_spo','Coll_SpoID'); ?>
                            <select name="Coach_SportDetailsID" id="Coach_SportDetailsID">
                            	<option value="0">Select Sport</option>
                                  <?php for($i=0;$i<count($Spo_details);$i++) { ?>
                                <option value="<?php echo $Spo_details[$i]['Coll_SpoID']; ?>">
                                <?php echo $Spo_details[$i]['Coll_SpoName']; ?></option>
                                <?php } ?>
                            </select>
                         </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" placeholder="Position" name="Coach_Position" id="Coach_Position">
                         </div>
                         <div class="inner-frm fr">
                        	 <?php $Min_Gpa_details=get_table_details('coll_cotch_min_gpa','Coll_Min_GpaID'); ?>
                            <select name="Coach_GpaID" id="Coach_GpaID">
                            	<option value="0">Select GPA </option>
                                 <?php for($i=0;$i<count($Min_Gpa_details);$i++) { ?>
                                <option value="<?php echo $Min_Gpa_details[$i]['Coll_Min_GpaID']; ?>">
                                <?php echo $Min_Gpa_details[$i]['Coll_Min_GpaName']; ?></option>
                                <?php } ?>
                            </select>
                         </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                            <div class="label fl">Minimum Height</div>
                            <div class="sub-hight fl">
                               <?php $Height_details=get_table_details('coll_cotch_min_height','Coll_Min_HeightID'); ?>
                            <select name="Coach_HeightID" id="Coach_HeightID">
                            	<option value="0">Select</option>
                                 <?php for($i=0;$i<count($Height_details);$i++) { ?>
                                <option value="<?php echo $Height_details[$i]['Coll_Min_HeightID']; ?>">
                                <?php echo $Height_details[$i]['Coll_Min_HeightName']; ?></option>
                                <?php } ?>
                            </select>
                            </div>
                            <div class="sub-hight fr">
                                  <?php $Height_details=get_table_details('coll_cotch_min_heightinche','Coll_Min_HeightIncheID'); ?>
                            <select name="Coach_HeightIntcheID" id="Coach_HeightIntcheID">
                            	<option value="0">Inches</option>
                                 <?php for($i=0;$i<count($Height_details);$i++) { ?>
                                <option value="<?php echo $Height_details[$i]['Coll_Min_HeightIncheID']; ?>">
                                <?php echo $Height_details[$i]['Coll_Min_HeightIncheName']; ?></option>
                                <?php } ?>
                            </select>
                            </div>
                    
                            
                         </div>
                         <div class="inner-frm fr">
                        	 <?php $Max_Height_details=get_table_details('coll_cotch_max_height','Coll_Max_HeightID'); ?>
                            <select name="Coach_WidthID" id="Coach_WidthID">
                            	<option value="0">Select Maximum Weight</option>
                                 <?php for($i=0;$i<count($Max_Height_details);$i++) { ?>
                                <option value="<?php echo $Max_Height_details[$i]['Coll_Max_HeightID']; ?>">
                                <?php echo $Max_Height_details[$i]['Coll_Max_HeightName']; ?></option>
                                <?php } ?>
                            </select>
                         </div>
                    </div>
                    <div class="frm clearfix">
                    	<textarea placeholder="Other specifics you would like to add?" name="Coach_Specific" id="Coach_Specific" maxlength="200"></textarea>
                     </div>
                    <div class="frm clearfix">
                    <div class="inner-frm">
                    	<div class="btn-post">
                        	<input type="button" id="adpostdata" value="post ad to MyRecruitBoard" onclick="valid_data();">
                        </div>
                       </div>
                    </div>
                    <div class="frm clearfix">
                    	<span class="sucess-msg" id="sucess_post" style="display:none;">
                        	Thank you, your ad has been posted. Please Visit the MyRecruitBord tab to create additional ads at anytime. Ad postings are unlimited.
                        </span>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm f1">
                        	<div class="btn-reg">
                          
                          
                        		<input type="submit" id="success_coach" value="complete profile" disabled="disabled">
                           
                            </div>
                         </div>
                    </div>
                    
                </div>
                </form>
           </div>
           </div>
        </div>
    </section>
    
<script>
succ = true;
function valid_data()
{
	
	flag =true;
	if($('#Coach_GenderDetailsID').val()==0){
		$('#Coach_GenderDetailsID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Coach_GenderDetailsID').css('border','1px solid #a4a4a4');
	}
	
	if($('#Coach_GpaID').val()==0){
		$('#Coach_GpaID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Coach_GpaID').css('border','1px solid #a4a4a4');
	}
	
	if($('#Coach_SportDetailsID').val()==0){
		$('#Coach_SportDetailsID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Coach_SportDetailsID').css('border','1px solid #a4a4a4');
	}
	
	if($('#Coach_HeightID').val()==0){
		$('#Coach_HeightID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Coach_HeightID').css('border','1px solid #a4a4a4');
	}
	
	if($('#Coach_HeightIntcheID').val()==0){
		$('#Coach_HeightIntcheID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Coach_HeightIntcheID').css('border','1px solid #a4a4a4');
	}
	
	if($('#Coach_WidthID').val()==0){
		$('#Coach_WidthID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Coach_WidthID').css('border','1px solid #a4a4a4');
	}
	
	if($('#Coach_Specific').val()==''){
		$('#Coach_Specific').css('border','1px solid red');
		flag = false;
	} else {
		$('#Coach_Specific').css('border','1px solid #a4a4a4');
	}
	
	if(flag == false) {
	succ =false;
    $('#success_coach').attr('disabled', true);
	$('#sucess_post').css('display','none'); 
	}
	 else 
	{
	succ =true;
	$('#sucess_post').css('display','block');
	$('#success_coach').removeAttr("disabled");
	}	


}


function getInsertData()
{
    	
	if(succ==false)
	{
	return false;
	}
	else
	{
	$('#ProcessLoaderID').show();
	return true;
	}		
}

</script>
