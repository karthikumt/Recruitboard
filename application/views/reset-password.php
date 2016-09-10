  <section class="content">
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register">
            	<div class="reg-title">
                    <h2>Reset Password.</h2>
                    
				</div>
                 <?php if($this->session->flashdata('errormess')){?> 
                    <div class="errormessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('errormess');?>
                    </div>  
                <?php }?>
                 <?php if($this->session->flashdata('successmessage')){?> 
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form name="step2" method="post" action="<?php echo base_url().'reset_password/reset'; ?>" onsubmit="return Check_Validation();">
                <input type="hidden" name="Random_no" value="<?php echo $this->uri->segment(3); ?>" />
                <div class="reg-frm">
                	
                    <div class="frm clearfix">
                        <input type="password" placeholder="New Password" name="Password" id="Password">
                         <span style="display:none; float:left;" id="CPassword" class="error_data">Password Not Same.</span>
                          <span style="display:none; float:left;" id="EnterPassword" class="error_data">Please Enter Password.</span>
                    </div>
                    
                    <div class="frm clearfix">
                        <input type="password" placeholder="Confirm Password"  id="VerifyPassword">
                    </div>
                    
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                        	<input type="submit" value="Reset Password">
                         </div>
                    </div>
                </div>
                </form>
        	</div>
            </div>
        </div>
    </section>
    
<script>
	function Check_Validation()
	{
	  var sucess = true;
	  var pass = $('#Password').val();
	  var confPass = $('#VerifyPassword').val();
					
	  if($('#Password').val()=='')
				 {
					
			$('#Password').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Password').css('border','1px solid #a4a4a4');
			}
			
	
		if($('#VerifyPassword').val()=='')
		 {
			
			$('#VerifyPassword').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#VerifyPassword').css('border','1px solid #a4a4a4');
			}
			
		
			
		
		if(pass != confPass) {
			$('#CPassword').show();
			$('#EnterPassword').hide();
			$('#Password').css('border','1px solid red');
			$('#VerifyPassword').css('border','1px solid red');
			sucess = false; 
		   }
		   else
		   {
			$('#CPassword').hide();
			$('#EnterPassword').hide();
			
		   }	
					
	if(sucess == false)
	 {
		return false;
	 }
	 else
	 {
		return true;
	 }	
	return false;	
	
	
	}

</script>