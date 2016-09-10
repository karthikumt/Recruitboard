<section class="content">
 <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register stud-athlete">
                    <div class="reg-title">
                        <h3>We are happy to meet you!</h3>
                        <p>Please tell us about your academic standing and qualifications. This is important to share because
    you are not only becoming a part of a team but also a member of an academic institution. You
    want to find the best fit for you academically and athletically. Coaches and admissions counselors
    work with each other during the recruiting process so good academic helps you. Additional
    scholarship money can be awarded for academics as well.</p>
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
                     <form name="stu_step3" method="post" action="<?php echo base_url('juco_transfer/insert_step3'); ?>" onsubmit="return check_stu_validation();" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    <div class="reg-frm stud-dt">
                        <h5>Education</h5>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                <select name="Juco_ActID" id="Juco_ActID">
                                    <option value="0">
                                       Select ACT Score
                                    </option>
                                       <?php $Education_details=get_table_details('stu_education_act','EducationID'); ?>
                            	 <?php for($i=0;$i<count($Education_details);$i++){ ?>
                            	<option value="<?php echo $Education_details[$i]['EducationID']; ?>">
                                	<?php echo $Education_details[$i]['EducationName']; ?>
                                </option>
                                <?php } ?>
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                <select name="Juco_SatID" id="Juco_SatID">
                                    <option value="0">
                                       Select SAT Score
                                    </option>
                                      <?php $Education_details_sat=get_table_details('stu_education_sat','Education_sat_ID'); ?>
                            	 <?php for($i=0;$i<count($Education_details_sat);$i++){ ?>
                            	<option value="<?php echo $Education_details_sat[$i]['Education_sat_ID']; ?>">
                                	<?php echo $Education_details_sat[$i]['Education_sat_Name']; ?>
                                </option>
                                <?php } ?>
                                   
                                    
                                </select>
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                <select name="Juco_GpaID" id="Juco_GpaID"> 
                                    <option value="0">
                                      Select GPA
                                    </option>
                                        <?php $Education_gpa_details=get_table_details('stu_education_gpa','Education_gpa_ID'); ?>
                            	 <?php for($i=0;$i<count($Education_gpa_details);$i++){ ?>
                            	<option value="<?php echo $Education_gpa_details[$i]['Education_gpa_ID']; ?>">
                                	<?php echo $Education_gpa_details[$i]['Education_gpa_Name']; ?>
                                </option>
                                <?php } ?>
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                <select name="Juco_CoreGpaID" id="Juco_CoreGpaID">
                                    <option value="0">
                                       Select Core GPA
                                    </option>
                                     <?php $Education_Core_Gpa_details=get_table_details('stu_education_core_gpa','Education_Core_Gpa_ID'); ?>
              
                            	 <?php for($i=0;$i<count($Education_Core_Gpa_details);$i++){ ?>
                            	<option value="<?php echo $Education_Core_Gpa_details[$i]['Education_Core_Gpa_ID']; ?>">
                                	<?php echo $Education_Core_Gpa_details[$i]['Education_Core_Gpa_Name']; ?>
                                </option>
                                <?php } ?>
                                </select>
                            </div>
                        </div>
                        
                    </div>
                    <div class="reg-frm stud-dt">
                        <h5>Eligibility Center Registration</h5>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                <select name="Juco_NcaaID" id="Juco_NcaaID">
                                    <option value="0">
                                       Select NCAA Eligibility Center
                                    </option>
                                      <?php $Eligibility_Nciaa_details=get_table_details('stu_eligibility_nciaa','Eligibility_Nciaa_ID'); ?>
              
                            	 <?php for($i=0;$i<count($Eligibility_Nciaa_details);$i++){ ?>
                            	<option value="<?php echo $Eligibility_Nciaa_details[$i]['Eligibility_Nciaa_ID']; ?>">
                                	<?php echo $Eligibility_Nciaa_details[$i]['Eligibility_Nciaa_Name']; ?>
                                </option>
                                <?php } ?>
                                    
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                <select name="Juco_NaiaID" id="Juco_NaiaID">
                                    <option value="0">
                                       Select NAIA Eligibility Center
                                    </option>
                                      <?php $Eligibility_Naia_details=get_table_details('stu_eligibility_naia','Eligibility_Naia_ID'); ?>
              
                            	 <?php for($i=0;$i<count($Eligibility_Naia_details);$i++){ ?>
                            	<option value="<?php echo $Eligibility_Naia_details[$i]['Eligibility_Naia_ID']; ?>">
                                	<?php echo $Eligibility_Naia_details[$i]['Eligibility_Naia_Name']; ?>
                                </option>
                                <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="reg-frm stud-dt">
                        <h5>Additional Education</h5>
                        <div class="activities clearfix">
                        	<div class="cols-3">
                            	<div class="row">
                                	<input type="checkbox" name="Juco_Education[]" value="1"><span>Honors Courses</span>
                                </div>
                                <div class="row">
                                	<input type="checkbox" name="Juco_Education[]" value="2"><span>Languages </span>
                                </div>
                            </div>
                            <div class="cols-3">
                            	<div class="row">
                                	<input type="checkbox" name="Juco_Education[]" value="3"><span>Post Secondary Courses</span>
                                </div>
                            </div>
                            <div class="cols-3">
                            	<div class="row">
                                	<input type="checkbox" name="Juco_Education[]" value="4"><span>AP Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reg-frm stud-dt">
                        <h5>Extracurricular Activities</h5>
                        <div class="activities clearfix">
                        	<div class="cols-3">
                            	<div class="row">
                                	<input type="checkbox" name="Juco_ExtraCurricular[]" value="1"><span>Arts</span>
                                </div>
                                <div class="row">
                                	<input type="checkbox" name="Juco_ExtraCurricular[]" value="2"><span>Community Service </span>
                                </div>
                                 <div class="row">
                                	<input type="checkbox" name="Juco_ExtraCurricular[]" value="3"><span>Community Service </span>
                                </div>
                            </div>
                            <div class="cols-3">
                            	<div class="row">
                                	<input type="checkbox" name="Juco_ExtraCurricular[]"><span>Religion</span>
                                </div>
                                <div class="row">
                                	<input type="checkbox" name="Juco_ExtraCurricular[]" value="4"><span>Jucodent Government</span>
                                </div>
                                 <div class="row">
                                	<input type="checkbox" name="Juco_ExtraCurricular[]" value="5"><span>Music</span>
                                </div>
                            </div>
                            <div class="cols-3">
                            	<div class="row">
                                	<input type="checkbox" name="Juco_ExtraCurricular[]" value="6"><span>Clubs/Organizations</span>
                                </div>
                                <div class="row">
                                	<input type="checkbox" name="Juco_ExtraCurricular[]" value="7"><span>Media</span>
                                </div>
                                 <div class="row">
                                	<input type="checkbox" name="Juco_ExtraCurricular[]" value="8"><span>Other </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reg-frm stud-dt">
                    	<div class="frm clearfix">
                            <div class="inner-frm fl">
                                <select name="Juco_IntendedID" id="Juco_IntendedID"  onchange="getIntent(this.value);">
                                    <option value="0">
                                       Select Intended College Field of Interest
                                    </option>
                                      <?php $Eligibility_Intended_details=get_table_details('stu_eligibility_intended','Eligibility_Intended_ID'); ?>
            
              
                            	 <?php for($i=0;$i<count($Eligibility_Intended_details);$i++){ ?>
                            	<option value="<?php echo $Eligibility_Intended_details[$i]['Eligibility_Intended_ID']; ?>">
                                	<?php echo $Eligibility_Intended_details[$i]['Eligibility_Intended_Name']; ?>
                                </option>
                                <?php } ?>
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                <select name="Juco_MajorID" id="Juco_MajorID" >
                                    <option value="0">
                                       Select Major 
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="reg-frm stud-dt" style="display:none;">
                    	 <h5>Guidance Counselor</h5>
                    	<div class="frm clearfix">
                            <div class="inner-frm fl">
                                <select name="Juco_GuidanceID" id="Juco_GuidanceID">
                                    <option value="0">
                                       Select Name
                                    </option>
                                     <?php $Guidance_Name_details=get_table_details('stu_guidance_name','Guidance_ID'); ?>
            
              
                            	 <?php for($i=0;$i<count($Guidance_Name_details);$i++){ ?>
                            	<option value="<?php echo $Guidance_Name_details[$i]['Guidance_ID']; ?>">
                                	<?php echo $Guidance_Name_details[$i]['Guidance_Name']; ?>
                                </option>
                                <?php } ?>
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                <select name="Juco_EmailID" id="Juco_EmailID">
                                <option value="0">
                                       Select Email
                                    </option>
                                     <?php $Guidance_Counselor_details=get_table_details('stu_guidance_email','Guidance_Counselor_ID'); ?>
              
            
              
                            	 <?php for($i=0;$i<count($Guidance_Counselor_details);$i++){ ?>
                            	<option value="<?php echo $Guidance_Counselor_details[$i]['Guidance_Counselor_ID']; ?>">
                                	<?php echo $Guidance_Counselor_details[$i]['Guidance_Counselor_Email']; ?>
                                </option>
                                <?php } ?>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="reg-frm stud-dt">
                    	 <h5>International Jucodents</h5>
                         <h6>TOEFL Scores</h6>
                    	<div class="frm clearfix">
                            <div class="inner-frm fl">
                                <select name="Juco_TotalID" id="Juco_TotalID">
                                    <option value="0">
                                      Select Total 
                                    </option>
                                    <?php $Toefl_Total_Score_details=get_table_details('stu_toefl_score_total','Toefl_Total_Score_ID'); ?>
              
            
              
                            	 <?php for($i=0;$i<count($Toefl_Total_Score_details);$i++){ ?>
                            	<option value="<?php echo $Toefl_Total_Score_details[$i]['Toefl_Total_Score_ID']; ?>">
                                	<?php echo $Toefl_Total_Score_details[$i]['Toefl_Total_Score']; ?>
                                </option>
                                <?php } ?>
                                    
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                <select name="Juco_ReadingID" id="Juco_ReadingID">
                                    <option value="0">
                                       Select Reading  
                                    </option>
                                     <?php 	$Toefl_Reading_Score_details=get_table_details('stu_toefl_score_reading','Toefl_Reading_Score_ID'); ?>
            
              
                            	 <?php for($i=0;$i<count($Toefl_Reading_Score_details);$i++){ ?>
                            	<option value="<?php echo $Toefl_Reading_Score_details[$i]['Toefl_Reading_Score_ID']; ?>">
                                	<?php echo $Toefl_Reading_Score_details[$i]['Toefl_Reading_Score']; ?>
                                </option>
                                <?php } ?>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                <select name="Juco_ListeningID" id="Juco_ListeningID">
                                    <option value="0">
                                     Select  Listening 
                                    </option>
                                     <?php 	$Toefl_Listening_Score_details=get_table_details('stu_toefl_score_listening','Toefl_Listening_Score_ID'); ?>
  
              
                            	 <?php for($i=0;$i<count($Toefl_Listening_Score_details);$i++){ ?>
                            	<option value="<?php echo $Toefl_Listening_Score_details[$i]['Toefl_Listening_Score_ID']; ?>">
                                	<?php echo $Toefl_Listening_Score_details[$i]['Toefl_Listening_Score']; ?>
                                </option>
                                <?php } ?>
                                    
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                <select name="Juco_SpeakingID" id="Juco_SpeakingID">
                                    <option value="0">
                                       Select Speaking  
                                    </option>
                                    <?php 	$Toefl_Speaking_Score_details=get_table_details('stu_toefl_score_speaking','Toefl_Speaking_Score_ID'); ?>
  
              
                            	 <?php for($i=0;$i<count($Toefl_Speaking_Score_details);$i++){ ?>
                            	<option value="<?php echo $Toefl_Speaking_Score_details[$i]['Toefl_Speaking_Score_ID']; ?>">
                                	<?php echo $Toefl_Speaking_Score_details[$i]['Toefl_Speaking_Score']; ?>
                                </option>
                                <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                <select name="Juco_WritingID" id="Juco_WritingID">
                                    <option value="0" >
                                       Select Writing 
                                    </option>
                                     <?php 	$Toefl_Writing_Score_details=get_table_details('stu_toefl_score_writing','Toefl_Writing_Score_ID'); ?>
  
              
                            	 <?php for($i=0;$i<count($Toefl_Writing_Score_details);$i++){ ?>
                            	<option value="<?php echo $Toefl_Writing_Score_details[$i]['Toefl_Writing_Score_ID']; ?>">
                                	<?php echo $Toefl_Writing_Score_details[$i]['Toefl_Writing_Score']; ?>
                                </option>
                                <?php } ?>
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                <select name="Juco_WesID" id="Juco_WesID">
                                    <option value="0">
                                      Select WES Transcript Evaluation 
                                    </option>
                                       <?php $Toefl_Wes_Score_details=get_table_details('stu_toefl_score_wes','Toefl_Wes_Score_ID'); ?>
  
              
                            	 <?php for($i=0;$i<count($Toefl_Wes_Score_details);$i++){ ?>
                            	<option value="<?php echo $Toefl_Wes_Score_details[$i]['Toefl_Wes_Score_ID']; ?>">
                                	<?php echo $Toefl_Wes_Score_details[$i]['Toefl_Wes_Score']; ?>
                                </option>
                                <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                <select name="Juco_YearSpeakID">
                                    <option value="0">
                                      Select Years speaking English
                                    </option>
                                    <?php $Toefl_Yse_Score_details=get_table_details('stu_toefl_score_yse','Toefl_Yse_Score_ID'); ?>
  
              
                            	 <?php for($i=0;$i<count($Toefl_Yse_Score_details);$i++){ ?>
                            	<option value="<?php echo $Toefl_Yse_Score_details[$i]['Toefl_Yse_Score_ID']; ?>">
                                	<?php echo $Toefl_Yse_Score_details[$i]['Toefl_Yse_Score']; ?>
                                </option>
                                <?php } ?>
                                </select>
                             </div>
                            <div class="inner-frm fr">
                                <select name="Juco_YearReadID" id="Juco_YearReadID">
                                    <option value="0">
                                      Select Years reading English 
                                    </option>
                                     <?php $Toefl_Yre_Score_details=get_table_details('stu_toefl_score_yre','Toefl_Yre_Score_ID'); ?>
  
              
                            	 <?php for($i=0;$i<count($Toefl_Yre_Score_details);$i++){ ?>
                            	<option value="<?php echo $Toefl_Yre_Score_details[$i]['Toefl_Yre_Score_ID']; ?>">
                                	<?php echo $Toefl_Yre_Score_details[$i]['Toefl_Yre_Score']; ?>
                                </option>
                                <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                <select name="Juco_YearWriteID" id="Juco_YearWriteID">
                                    <option value="0">
                                      Select Years writing English
                                    </option>
                                     <?php $Toefl_Ywe_Score_details=get_table_details('stu_toefl_score_ywe','Toefl_Ywe_Score_ID'); ?>
              
                            	 <?php for($i=0;$i<count($Toefl_Ywe_Score_details);$i++){ ?>
                            	<option value="<?php echo $Toefl_Ywe_Score_details[$i]['Toefl_Ywe_Score_ID']; ?>">
                                	<?php echo $Toefl_Ywe_Score_details[$i]['Toefl_Ywe_Score']; ?>
                                </option>
                                <?php } ?>
                                </select>
                             </div>
                        </div>
                        <div class="frm clearfix">
                        	<input type="submit" value="Continue" >
                        </div>
                    </div>
                    
                  </form>  
        		</div>
            </div>
        </div>
    </section>
    
    
    
     
      <script language="javascript">
  
  function check_stu_validation()
  {
	 var sucess = true;
	
	
	
				
		
		
		if($('#Juco_ActID').val()=='0')
		 {
			$('#Juco_ActID').css('border','1px solid red');
			sucess = false;
		 } 
		 else {	
			$('#Juco_ActID').css('border','1px solid #a4a4a4');
			}
		
		if($('#Juco_NciaaID').val()=='0')
		 {
			$('#Juco_NciaaID').css('border','1px solid red');
			sucess = false;
		 } 
		 else {	
			$('#Juco_NciaaID').css('border','1px solid #a4a4a4');
			}
			
	
			
		
		 if($('#Juco_IntendedID').val()=='0')
		 {
			
			$('#Juco_IntendedID').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Juco_IntendedID').css('border','1px solid #a4a4a4');
			}
			
	
		/*if($('#Juco_GuidanceID').val()=='0')
		 {
			
			$('#Juco_GuidanceID').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Juco_GuidanceID').css('border','1px solid #a4a4a4');
			}*/
			
			
		if($('#Juco_TotalID').val()=='0')
		 {
			
			$('#Juco_TotalID').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Juco_TotalID').css('border','1px solid #a4a4a4');
			}
			
	
 		if(sucess == false)
		 {
			return false;
		 }
		 else
		 {
		
		 $('#ProcessLoaderID').show();
			return true;
		 }	
return false;	

  
  }

function getIntent(MajorID)
{
	$("#Juco_MajorID").html("<option>Loading...</option>");
	 $.ajax({
     type: "POST",
     url: "<?php echo base_url(); ?>termcondition/check_major/",
     data: {MajorID:MajorID},
     cache: false,
     success: function(result){
       		$("#Juco_MajorID").html("");
			$("#Juco_MajorID").append(result);
	 }
     });
}

  
  
</script>
  