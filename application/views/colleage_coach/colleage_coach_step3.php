<section class="content">
<div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register step3">
            	<div class="reg-title">
                    <h3>Your film is your resume. Please add a video that best represents you, your program, and/or your facilities.</h3>
                    
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
                 <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>colleage_coach/insert_step3<?php if(isset($_GET['user_id'])) echo '?user_id='.$_GET['user_id'];?>" onsubmit="return getInsertData();"
                <div class="reg-frm">
                	<div class="frm clearfix">
                    	<div class="frm">
                        	<div class="video-upload">
                            	<div class="left-side fl">
                                    <div class="video-btn">
                                        <div class="video-icon"></div>
                                        Add video
                                    </div>
                                    <input type="" class="filefild" name="">
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
                                 <input type="text" class="videourl" name="Coach_VideoURL" id="Coach_VideoURL" <?php if($universityData!=null) {?>value="<?php echo $universityData['Coach_VideoURL']; }?>"/>			
                                 <span style="font-size:10px; float:left;"><b>Note: Upload from YouTube, Vimeo, or Hudl</b></span>
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
function getInsertData()
{

	var flag = true;
	var expression = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
 	var regex = new RegExp(expression);
	var t = $('#Coach_VideoURL').val();
  if (!t.match(regex) )
	{
		$('#Coach_VideoURL').css('border','1px solid red');
		flag = false;
	} else {
		$('#Coach_VideoURL').css('border','1px solid #a4a4a4');
	}
	
	if(flag == false) {
		return false;
	} else {
	$('#ProcessLoaderID').show();
		return true;
	}	
	return false;		
}

</script>


