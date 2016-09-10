  <section class="content">
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register">
            	<div class="reg-title">
                    <h2>Forgot Password.</h2>
                    
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
                <form name="step2" method="post" action="<?php echo base_url().'forgot_password/forgot'; ?>" onsubmit="return Check_Validation();">
                <div class="reg-frm">
                	
                    <div class="frm clearfix">
                        <input type="text" placeholder="EmailAddress" name="EmailAddress" id="EmailAddress">
                    </div>
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                        	<input type="submit" value="Send">
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
	  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	  if(!$('#EmailAddress').val().match(filter))
	  {
			$('#EmailAddress').css('border','1px solid red');
			 sucess = false;
	  }
	  else{
			   $('#EmailAddress').css('border','1px solid #a4a4a4');
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