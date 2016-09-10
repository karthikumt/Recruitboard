<section class="content">
 <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register step3">
            	<div class="reg-title">
                    <h3>Your film is your resume. Please add a recruiting video that best represents
you and your abilities. This is the coaches first view of you, so make sure to
highlight your strengths!</h3>
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
                <form name="stu_step3" method="post" action="<?php echo base_url('juco_transfer/insert_step7'); ?>"  class="form-horizontal form-bordered" enctype="multipart/form-data" onsubmit="return check_stu_validation()">
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
                                 <!--   <div class="videourl"></div>-->
                                 <input type="text" name="Juco_VideoUrl" id="Juco_VideoUrl" />
                                   <span style="font-size:10px; float:left;"><b>Note: Upload from YouTube, Vimeo, or Hudl</b></span>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<input type="text" placeholder="What player do you model your game after?" name="Juco_Player" id="Juco_Player" >
                              
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        		<input type="submit" value="Continue" >
                         </div>
                    </div>
                </div>
                </form>
        	</div>
            </div>
        </div>
    </section>
    
    
    
    <script>
 function check_stu_validation()
	{
	
	 var flag = true;

	 var regYoutube = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
	 var regVimeo = /^.*(vimeo\.com\/)((channels\/[A-z]+\/)|(groups\/[A-z]+\/videos\/))?([0-9]+)/;
	 var regHundl = /^.*((hudl\.com\/)|(v\/)|(\/u\/\w\/)|(athlete\/)|(highlights\?))\??v?=?([^#\&\?]*).*/;
	 var t = $('#Juco_VideoUrl').val();
	 if(t!='')
	 {
		  if (!(t.match(regYoutube) || t.match(regVimeo) || t.match(regHundl) ) )
		 {
		  $('#Juco_VideoUrl').css('border','1px solid red');
		  flag = false;
		 }
		  else {
		  $('#Juco_VideoUrl').css('border','1px solid #a4a4a4');
		 }
	 } 
	 if(flag == false) {
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