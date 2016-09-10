  <section class="content">
  <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register">
            	<div class="reg-title">
                    <h3>Great, nice to meet you! Now, tell us more about you and your services.</h3>
                    
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
                 <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>development_coach/insert_step2" onsubmit="return getDev_Coach();">
                <div class="reg-frm">
                	<div class="frm clearfix">
                        <input type="text" placeholder="College Attended" name="Devel_Attend" id="Devel_Attend">
                    </div>
                    <div class="qualification">
                        <div class="frm clearfix">
                        	<h6>What are Your Qualifications?</h6>
                   		</div>
                        <div class="frm clearfix">
                        	<div class="qul-textbox fl"> 
                            	<input type="text" placeholder="List any experience related to your business or services." name="Devel_Qualification" id="Devel_Qualification">
                            </div>
                           <!-- <div class="btn-submit fr">
                            	<input type="submit" value="submit">
                            </div>-->
                    	</div>
                    </div>
                    <div class="qualification">
                        <div class="frm clearfix">
                        	<h6>What Makes Your Business or Service Unique?</h6>
                            <textarea name="Devel_Service" id="Devel_Service" placeholder="Tell potential customers what sets you apart."></textarea>
                   		</div>
	                </div>
                    <div class="frm clearfix">
                        <input type="text" placeholder="Website or Facebook Business Page" name="Devel_Website" id="Devel_Website">
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
 function getDev_Coach()
{

	var flag = true;
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	if($('#Devel_Qualification').val()==''){
		$('#Devel_Qualification').css('border','1px solid red');
		flag = false;
	} else {
		$('#Devel_Qualification').css('border','1px solid #a4a4a4');
	}
	if($('#Devel_Service').val()==''){
		$('#Devel_Service').css('border','1px solid red');
		flag = false;
	} else {
		$('#Devel_Service').css('border','1px solid #a4a4a4');
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