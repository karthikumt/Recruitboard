 <section class="content">
  <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register">
            	<div class="reg-title">
                    <h3>Great, nice to meet you! Now, tell us more about your school.</h3>
                    
				</div>
                 <?php if($this->session->flashdata('ErrorMsg')){?> 
                    <div class="errormessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('ErrorMsg');?>
                    </div>  
                <?php }?>
                 <?php if($this->session->flashdata('successmessage')){?> 
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form name="step2" method="post" action="<?php echo base_url('colleage_admission/insert_step2'); ?>" onsubmit="return check_validation();" >
                <div class="reg-frm">
                	<div class="frm clearfix">
                    	<div class="inner-frm other-box fl">
                        	<input type="text" placeholder="Tuition" name="Tution" id="Tution">
                            <span class="oth-box">$</span>
                         </div>
                        <div class="inner-frm fr">
                        	<input type="text" placeholder="Enrollment" name="Enrollment" id="Enrollment">
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm other-box fl">
                        
                            <select name="AceptRate" id="AceptRate">
                                <option value="0" >Select Acceptance Rate</option>
                                   <?php $Country_detail = get_table_details('coll_admi_acceptance','Coll_admi_AcceptanceID'); ?>
                                  <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Coll_admi_AcceptanceID']; ?>">
                                <?php echo $Country_detail[$i]['Coll_admi_AcceptanceName']; ?></option>
                                <?php } ?>
                            </select>
                             
                          </div>
                        <div class="inner-frm fr">
                        	<select name="Setting" id="Setting">
                                <option value="0" >Select Setting</option>
                                   <?php $Country_detail = get_table_details('coll_admi_setting','Coll_admi_SettingID'); ?>
                                  <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Coll_admi_SettingID']; ?>">
                                <?php echo $Country_detail[$i]['Coll_admi_SettingName']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<select name="AvgTestScore" id="AvgTestScore">
                                <option value="0" >Select Average Test Score</option>
                                  <?php $Country_detail = get_table_details('coll_admi_testscore','Coll_admi_TestScoreID'); ?>
                                  <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Coll_admi_TestScoreID']; ?>">
                                <?php echo $Country_detail[$i]['Coll_admi_TestScoreName']; ?></option>
                                <?php } ?>
                            </select>
                         </div>
                        <div class="inner-frm other-box fr">
							<select name="AvgStuGpa" id="AvgStuGpa">
                                <option value="0" >Select Average Student GPA</option>
                                 <?php $Country_detail = get_table_details('coll_admi_gpa','Coll_admi_GpaID'); ?>
                                  <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Coll_admi_GpaID']; ?>">
                                <?php echo $Country_detail[$i]['Coll_admi_GpaName']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<select name="GraduationRate" id="GraduationRate">
                                <option value="0"  >Select Graduation Rate</option>
                                   <?php $Country_detail = get_table_details('coll_admi_graduaction','Coll_admi_GraduactionID'); ?>
                                  <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Coll_admi_GraduactionID']; ?>">
                                <?php echo $Country_detail[$i]['Coll_admi_GraduactionName']; ?></option>
                                <?php } ?>
                            </select>
                         </div>
                        <div class="inner-frm other-box fr">
                        	<input type="text" placeholder="Average Financial Aid Award" name="AvgFinancialAid" id="AvgFinancialAid">
                            <span class="oth-box">$</span>
                        </div>
                    </div>
                    <div class="qualification" style="display:none;">
                        <div class="frm clearfix">
                        	<div class="qul-textbox fl"> 
                            	<select multiple="multiple" name="TopMajor[]"  id="TopMajor">
                                	<option value="0" disabled="disabled">Select Top Majors at your School</option>
                                       <?php $Country_detail = get_table_details('coll_admi_topmajor','Coll_admi_TopMajorID'); ?>
                                  <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Coll_admi_TopMajorID']; ?>">
                                <?php echo $Country_detail[$i]['Coll_admi_TopMajorName']; ?></option>
                                <?php } ?>
                                </select>
                            </div>
                         <!--   <div class="btn-submit fr">
                            	<input type="submit" value="Add Major">
                            </div>-->
                    	</div>
                    </div>
                    <div class="frm clearfix">
                    	<textarea placeholder="What makes your school unique?" name="SchoolUnique"></textarea>
                    </div>
                    
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="submit" value="Continue">
                         </div>
                    </div>
                </div>
        	</div>
            </form>
            </div>
        </div>
    </section>
    
    <script>
     function check_validation()
  {
	 var sucess = true;
	
				
		
		 if($('#Tution').val()=='')
		 {
			$('#Tution').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Tution').css('border','1px solid #a4a4a4');
			}
		 if($('#Enrollment').val()=='')
		 {
			$('#Enrollment').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Enrollment').css('border','1px solid #a4a4a4');
			}
		
	
		
		 if($('#AceptRate').val()=='0')
		 {
			
			$('#AceptRate').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#AceptRate').css('border','1px solid #a4a4a4');
			}
			
	
		if($('#Setting').val()=='0')
		 {
			
			$('#Setting').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Setting').css('border','1px solid #a4a4a4');
			}
			
			
			
	
				
		 if($('#AvgTestScore').val()=='0')
		 {
			$('#AvgTestScore').css('border','1px solid red');
			sucess = false;
		 } else {
			$('#AvgTestScore').css('border','1px solid #a4a4a4');
			}
		 if($('#AvgStuGpa').val()=='0')
		 {
			$('#AvgStuGpa').css('border','1px solid red');
			sucess = false;
		 } else {
			$('#AvgStuGpa').css('border','1px solid #a4a4a4');
			} 

		
		 if($('#GraduationRate').val()=='0')
		 {
			$('#GraduationRate').css('border','1px solid red');
			sucess = false;
		 } else {
			$('#GraduationRate').css('border','1px solid #a4a4a4');
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

</script>