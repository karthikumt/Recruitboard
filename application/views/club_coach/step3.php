  <section class="content">
   <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register step3">
            	<div class="reg-title">
                    <h3>One last thing, your film is your resume. Please add a video that best represents you and your team.</h3>
                    
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
                 <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>club_coach/insert_step3" onsubmit="return getClub_Coach();">
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
                                   <!-- <div class="videourl"></div>-->
                                     <input type="text" class="videourl" name="Club_VideoURL" id="Club_VideoURL" />			
                                 <span style="font-size:10px; float:left;">URL Like:-<b>http://www.MyRecruitBoard.com</b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<div class="btn-reg">
                        		<input type="submit" value="complete profile">
                            </div>
                         </div>
                    </div>
                </div>
                </form>
        	</div>
            </div>
        </div>
    </section>
   <script>
function getClub_Coach()
{

	var flag = true;
	var expression = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
 	var regex = new RegExp(expression);
	var t = $('#Club_VideoURL').val();
  if (!t.match(regex) )
	{
		$('#Club_VideoURL').css('border','1px solid red');
		flag = false;
	} else {
		$('#Club_VideoURL').css('border','1px solid #a4a4a4');
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