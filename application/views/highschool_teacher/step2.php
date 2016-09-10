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
                  <form name="teach_step2" method="post" action="<?php echo base_url('highschool_teacher/insert_step2'); ?>" onsubmit="return check_teach_validation();" class="form-horizontal form-bordered" enctype="multipart/form-data">
                <div class="reg-frm">
                	<div class="frm clearfix">
                        <textarea placeholder="What makes your school unique?" name="SchoolUnique" id="SchoolUnique"></textarea>
                    </div>
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
    </section>
    
    
      
    <script>
     function check_teach_validation()
	  {
		 var sucess = true;
		
		  if($('#SchoolUnique').val()=='')
			 {
				$('#SchoolUnique').css('border','1px solid red');
				sucess = false;
			 } 
			 else {
				$('#SchoolUnique').css('border','1px solid #a4a4a4');
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