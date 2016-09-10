<section class="content">
 <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register step9">
                	<div class="reg-title">
                    <h3>Another option you have is to feature your student athlete profile to college
coaches and admissions counselors everywhere. College coaches and
admissions counselors will see featured student athletes immediately when
they login to their MyRecruitBoard accounts. Being featured gives you the
additional exposure that you may need if you are not currently being recruited.</h3>
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
               <form name="stu_step3" method="post" action="<?php echo base_url('juco_transfer/insert_step9'); ?>" onsubmit="return check_stu_validation();" >
                    <div class="feature-my-profile clearfix">
                    	<div class="fl">
                        	<a href="javascript:void(0);" class="btn-profile">Feature My Profile</a>	
                        </div>
                      <div class="fl">
                      		<span class="pf-ft"> $99.99/3 months</span>
                      </div>
                    </div>
                    <div class="frm">
                    	<textarea placeholder="What makes you unique?"  name="Juco_Content" id="Juco_Content"></textarea>
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
     function check_stu_validation()
	  {
		 var sucess = true;
		
					
			
			 if($('#Juco_Content').val()=='')
			 {
				$('#Juco_Content').css('border','1px solid red');
				sucess = false;
			 } 
			 else {
				$('#Juco_Content').css('border','1px solid #a4a4a4');
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