<?php
	$this->load->view('include/Mobile_Detect.php');
	$detect = new Mobile_Detect;
	
?>
<section class="content">
<div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        	<div class="register stud-athlete">
            	<div class="reg-title">
                    <h2>Welcome to MyRecruitBoard!</h2>
                    <p>You are now part of a social media based recruiting network where you can directly
connect with college coaches and college admissions counselors. Let’s get started right
away so you are one step closer to getting recruited!</p>
				
                </div>
                 <?php if($this->session->flashdata('errormessage')){?> 
                    <div class="errormessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('errormessage');?>
                    </div>  
                <?php }?>
                   <form name="stu_step1" method="post" action="<?php echo base_url('juco_transfer/insert_step1'); ?>" onsubmit="return check_stu_validation();" class="form-horizontal form-bordered" enctype="multipart/form-data">
                <div class="reg-frm">
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" placeholder="Email" name="UserEmail" id="UserEmail" onblur="check_email(this.value)"  >
                          <span style="display:none; float:left;" id="unnsuccessemail" class="error_data">Invalid Email Address.</span>
                       <span style="display:none; float:left;" id="Emailvalid" class="error_data">Email Already Registered.</span>
                         </div>
                        <div class="inner-frm fr">
                        	<input type="text" placeholder="Verify your email address" name="VerifyEmail" id="VerifyEmail">
                              <span style="display:none; float:left;" id="CEmail" class="error_data">Email and Confirm Email do not Match.</span>           
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="password" placeholder="Password" name="Password" id="Password">
                              <span style="display:none; float:left;" id="CPassword" class="error_data">Password and Confirm Password do not match.</span>
                          <span style="display:none; float:left;" id="EnterPassword" class="error_data">Please Enter Password.</span>
                         </div>
                        <div class="inner-frm fr">
                        	<input type="password" placeholder="Verify Password " name="VerifyPassword" id="VerifyPassword">
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" placeholder="Parent/Guardian’s email address" name="Gua_Email" id="Gua_Email">
                              <span style="display:none; float:left;" id="Gua_unnsuccessemail" class="error_data">Invalid Email Address.</span>
                         </div>
                        <div class="inner-frm fr">
                        	<input type="text" placeholder="Verify Parent/Guardian’s email address" name="Gua_VerifyEmail" id="Gua_VerifyEmail">
                            <span style="display:none; float:left;" id="Gua_CEmail" class="error_data">Email and Confirm Email do not Match.</span>           
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="fileupload" id="fileupload">
                        	
                        	<div class="file-btn">Upload Your Profile Picture from a saved file
                    		<input type="file" class="filefild" name="Juco_ProfileImage" id="Juco_ProfileImage"></div>
                             <script>
							$('input.filefild').on('change', function (event, files, label) {
								var file_name = this.value.replace(/\\/g, '/').replace(/.*\//, '');
								var file = $('#Juco_ProfileImage')[0].files[0];
								var fileName = file.name;
								var fileExt = fileName.split('.').pop();
								var fileExt = fileExt.toLowerCase();
								if(fileExt=='jpg' || fileExt=='jpeg' || fileExt=='png'){								
								
								}
								else
								{
								$('#Juco_ProfileImage').val('');
								alert('invalid file type');
								}
								
								var size= Math.round(this.files[0].size/ 1048576);
								<?php
								if ( $detect->isMobile() || $detect->isTablet() || $detect->isiOS() || $detect->isAndroidOS()  ) { ?>
								if(size >= 1 )
								{
									$('#maxfilesize').show();
									$('#Juco_ProfileImage').val('');
								}else{
									$('#maxfilesize').hide();
									
								}
				<?php } ?>
								$('.filename').text(file_name);
							});
							</script>
                            <div class="filename"></div>
                        </div>
                         <span style="display:none; float:left;" id="maxfilesize" class="error_data">File size should be 1 MB or less than 1 MB.</span>           
                    </div>
                    <div class="frm captch-frm clearfix">
                        <div class="inner-frm fr">
                                <div class="capcha">
                                    <div class="capcha-code">
                                         <?php echo $cap_img; ?>
                                    </div>
                                    <div class="capcha-word">
                                    <a href="javascript:void(0);" class="refresh" id="refresh"><img src ="<?php echo base_url(); ?>images/refresh.png"></a>
                                     <img id="capload" src ="<?php echo base_url(); ?>images/cap_loader.gif" style="display:none;">
                                    </div>
                                    <input type="text" name="Captcha" id="Captcha" placeholder="" value="">
                                </div>
                            </div>
                    	<div class="inner-frm fl">
                        	<input type="submit" value="Continue">
                         </div>
                        
                    </div>
                    <div class="frm">
                    	<p>* By clicking continue, you agree to our <a href="<?php echo base_url('termcondition'); ?>">Terms and Conditions.</a></p>
                    </div>
                </div>
                </form>
        	</div>
            </div>
        </div>
    </section>
    <script language="javascript">
   var cap_word1='<?php echo $cap_word; ?>';
  $(document).ready(function() {
	$("a.refresh").click(function() {
	$('#refresh').hide();
	 $('#capload').show();
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>termcondition/refresh_capcha",
			success: function(resp) {
				if (resp){
					  myarr = resp.split('^_^');
					  $('.capcha-code').html(myarr[0]);
					  cap_word1 = myarr[1];
					  $('#capload').hide();
					  $('#refresh').show();
				} }
			});
		});
	});
  function check_stu_validation()
  {
	 var sucess = true;
	 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	 var cap_word=cap_word1.toLowerCase(); 
	 var email = $('#UserEmail').val();
	 var confemail = $('#VerifyEmail').val();
 	 var pass = $('#Password').val();
  	 var confPass = $('#VerifyPassword').val();
	   var gu_email = $('#Gua_Email').val();
	 var gu_confemail = $('#Gua_VerifyEmail').val();
				
		if($('#Gua_VerifyEmail').val()=='')
			{
			  $('#Gua_VerifyEmail').css('border','1px solid red');
			  sucess = false;
			 } 
		
			 else {
			 $('#Gua_VerifyEmail').css('border','1px solid #a4a4a4');
				 }  
		
	    if($('#Gua_Email').val()=='')
			{
			  $('#Gua_Email').css('border','1px solid red');
			  sucess = false;
			 } 
			
		
		else if(!$('#Gua_Email').val().match(filter))
			  {
			   $('#Gua_Email').css('border','1px solid red');
			   $('#Gua_unnsuccessemail').show();
			  
			   sucess = false;
			  }
			  
		else if( gu_email != gu_confemail )
	   		{
				
			  $('#Gua_CEmail').show();	
			  $('#Gua_Email').css('border','1px solid red');
			  $('#Gua_VerifyEmail').css('border','1px solid red');
			  sucess = false;
			}   
    	  else{
			   $('#Gua_Email').css('border','1px solid #a4a4a4');
			   $('#Gua_unnsuccessemail').hide();
			  }
		 
		
		if($('#VerifyEmail').val()=='')
		 {
			$('#VerifyEmail').css('border','1px solid red');
			sucess = false;
		 } 
		 else {	
			$('#VerifyEmail').css('border','1px solid #a4a4a4');
			}
		
		 if($('#UserEmail').val()=='')
			{
			  $('#UserEmail').css('border','1px solid red');
			  sucess = false;
			 } 
		else if(!$('#UserEmail').val().match(filter))
			  {
			   $('#UserEmail').css('border','1px solid red');
			   $('#unnsuccessemail').show();
			   $('#Emailvalid').hide();
			   sucess = false;
			  }
		else if(email != confemail) {
				$('#CEmail').show();
				$('#UserEmail').css('border','1px solid red');
				$('#VerifyEmail').css('border','1px solid red');
				sucess = false;
				
			   }		  	 
		 else {
			 $('#UserEmail').css('border','1px solid #a4a4a4');
			 $('#CEmail').hide();
			   $('#unnsuccessemail').hide();
			   $('#Emailvalid').hide();
			   }
		 
		  if($('#Email_val').val()==1){
				sucess = false;
				
				$('#Emailvalid').show();
				$('#UserEmail').css('border','1px solid red');
					
	  		}
			else
			{
				
				$('#Emailvalid').hide();
				
			
			}
			
		
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
	
		 if($('#Captcha').val().toLowerCase()!= cap_word)
		 {
			$('#Captcha').css('border','1px solid red');
			sucess = false;
		 } else {
			$('#Captcha').css('border','1px solid #a4a4a4');
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



function check_email(UserEmail)
{
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(UserEmail.match(filter))
	{
		$.ajax({
			type:'post',
			url:'<?php echo base_url(); ?>juco_transfer/check_email',
			data:{UserEmail:UserEmail},
			success:function(resp){
				if(resp==1){
					$('#unnsuccessemail').hide();
					$('#Emailvalid').show();
					$('#UserEmail').css('border','1px solid red');
					$('#Email_val').val(resp);	
					
				} else {
					$('#unnsuccessemail').hide();
					$('#Emailvalid').hide();
					$('#Email').css('border','1px solid #a4a4a4');
					$('#Email_val').val(resp);	
				}
			}
		});
	}
}

  
  
 </script>    