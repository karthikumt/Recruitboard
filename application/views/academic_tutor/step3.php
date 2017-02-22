  
    <section class="content">
     <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register step3">
            	<div class="reg-title">
                    <h3>Your film is your resume. Please add a video that explains who you are and the services you provide.</h3>
                    
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
                 <form name="step3" action="<?php echo base_url('academic_tutor/insert_step3'); ?>" method="post" enctype="multipart/form-data" onsubmit="return check_ac_validation();">
                <div class="reg-frm">
                	<div class="frm clearfix">
                    	<div class="frm">
                        	<div class="video-upload">
                            	<div class="left-side fl">
                                    <div class="video-btn">
                                        <div class="video-icon"></div>
                                        Add video
                                    </div>
                                    <input type="text" class="filefild" name="">
                                     <script>
									$('input.filefild').on('change', function (event, files, label) {
										var file_name = this.value.replace(/\\/g, '/').replace(/.*\//, '')
										$('.videourl').text(file_name);
									});
									</script>
                                </div>
                                <div class="right-silde">
                                	<span>Add URL</span>
                                   <!--<div class="videourl"></div>-->
                                    <input type="text" name="VideoUrl" id="VideoUrl" />
                                    <span style="font-size:10px; float:left;">URL Like:-<b>https://www.MyRecruitBoard.com</b></span>
                                    
                                </div>
                            </div>
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
        </div>
    </section>
   <script>
 function check_ac_validation()
	{
	
	 var flag = true;
	 var expression = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
	 var regex = new RegExp(expression);
	 var t = $('#VideoUrl').val();
		  if (!t.match(regex) )
		 {
		  $('#VideoUrl').css('border','1px solid red');
		  flag = false;
		 }
		  else {
		  $('#VideoUrl').css('border','1px solid #a4a4a4');
		 }
		 
	 if(flag == false) {
	  return false;
	 }
	  else {
	 $('#ProcessLoaderID').show();
	  return true;
	 } 
	 return false;  
	}
	  </script>  