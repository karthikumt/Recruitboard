  <section class="content">
   <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register">
            	<div class="reg-title">
                    <h3>Great, nice to meet you! Now, tell us more about you and your team.</h3>
                    
				</div>
                  <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>club_coach/insert_step2" onsubmit="return getClub_data();">
                <div class="reg-frm">
                	<div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" placeholder="Website" id="Club_Website" name="Club_Website">
                         </div>
                        <div class="inner-frm fr">
                        	<input type="text" placeholder="Team Record" id="Club_TeamRecord" name="Club_TeamRecord">
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<textarea placeholder="What makes your team unique?" id="Club_Data" name="Club_Data"></textarea>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="submit" value="Continue">
                         </div>
                    </div>
                </div>
        	</div>
            </div>
        </div>
    </section>

<script>
function getClub_data()
{

	var flag = true;
	var expression = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
 	var regex = new RegExp(expression);
	var t = $('#Club_Website').val();
  	if (!t.match(regex) )
	{
		$('#Club_Website').css('border','1px solid red');
		flag = false;
	} else {
		$('#Club_Website').css('border','1px solid #a4a4a4');
	}
	if ($('#Club_Data').val()=="")
	{
		$('#Club_Data').css('border','1px solid red');
		flag = false;
	} else {
		$('#Club_Data').css('border','1px solid #a4a4a4');
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