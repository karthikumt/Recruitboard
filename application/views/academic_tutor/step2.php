  <section class="content">
   <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register">
            	<div class="reg-title">
                    <h3>Great, nice to meet you! Now, tell us more about you and your services.</h3>
                    
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
                <form name="step2" method="post" action="<?php echo base_url('academic_tutor/insert_step2'); ?>" onsubmit="return check_ac_validation();">
                <div class="reg-frm">
                	<div class="frm clearfix">
                        <input type="text" placeholder="College Attended " name="ClgAttend" id="ClgAttend">
                    </div>
                    <div class="qualification">
                        <div class="frm clearfix">
                        	<h6>What are Your Qualifications? </h6>
                   		</div>
                        <div class="frm clearfix">
                        	<div class="qul-textbox fl"> 
                            	<input type="text" name="Qualification" id="Qualification" placeholder="List any experience related to your business or services.">
                                <div class="reset-btn">
                               <!-- 	<input type="button" value="reset">-->
                                </div>
                            </div>
                            <!--   <div class="btn-submit fr">
                            	<input type="submit" value="submit">
                            </div>-->
                    	</div>
                    </div>
                     <div class="qualification">
                    <div class="frm clearfix">
                    <h6>What Makes Your Business or Service Unique?</h6>
                    </div>
                     <div class="frm clearfix">
                    	<textarea name="BusinessUnique" id="BusinessUnique" placeholder="Tell potential customers what sets you apart."></textarea>
                    </div>
                    </div>
                    <div class="frm clearfix">
                        <input type="text" placeholder="Website or Facebook Business Page" name="Website" id="Website">
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
     function check_ac_validation()
  {
	 var sucess = true;
	
				
		
		 if($('#ClgAttend').val()=='')
		 {
			$('#ClgAttend').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#ClgAttend').css('border','1px solid #a4a4a4');
			}
		 if($('#Qualification').val()=='')
		 {
			$('#Qualification').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Qualification').css('border','1px solid #a4a4a4');
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