 <?php
	$this->load->view('include/Mobile_Detect.php');
	$detect = new Mobile_Detect;
	
?>
  <section class="content">
  <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register academic">
            	<div class="reg-title">
                    <h2>Welcome to MyRecruitBoard!</h2>
                    <span>Registration takes just a few minutes, let’s get started by learning more about you.</span>
				</div>
                  <?php if($this->session->flashdata('ErrorMsg')){?> 
                    <div class="errormessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('ErrorMsg');?>
                    </div>  
                <?php }?>
                <form name="teach_step1" method="post" action="<?php echo base_url('highschool_teacher/insert_step1'); ?>" onsubmit="return check_teach_validations();" class="form-horizontal form-bordered" enctype="multipart/form-data">
                <div class="reg-frm">
                	<div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" placeholder="First Name" name="FirstName" id="FirstName">
                         </div>
                        <div class="inner-frm fr">
                        	<input type="text" placeholder="Last Name" name="LastName" id="LastName">
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" placeholder="High School" name="Highschool" id="Highschool">
                         </div>
                        <div class="inner-frm fr">
                        	<select name="Country" id="Country">
                            	<option value="0">Country</option>
                                <?php $Country_detail = get_table_details('high_teacher_country','High_teacher_CountryID'); ?>
                                 <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['High_teacher_CountryID']; ?>">
                                <?php echo $Country_detail[$i]['High_teacher_CountryName']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" name="ZipCode" id="ZipCode" placeholder="Zip/Postal Code">
                         </div>
                        <div class="inner-frm fr">
                        	<input type="text" placeholder="Title" name="Title" id="Title">
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" placeholder="School Phone Number" name="PhoneNo">
                         </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="fileupload" id="fileupload">
                        	<div class="file-btn">Upload Your Profile Picture from a saved file
                    		<input type="file" name="ProfilePic" id="ProfilePic" class="filefild" >
                            </div>
                             <script>
							$('input.filefild').on('change', function (event, files, label) {
								var file_name = this.value.replace(/\\/g, '/').replace(/.*\//, '');
														
						var size= Math.round(this.files[0].size/ 1048576);
														<?php
														if ( $detect->isMobile() || $detect->isTablet() || $detect->isiOS() || $detect->isAndroidOS()  ) { ?>
											if(size >= 1 )
											{
												$('#maxfilesize').show();
												$('#ProfilePic').val('');
											}else{
												$('#maxfilesize').hide();
												
											}
							<?php } ?>
									$('.filename').text(file_name);
							});
							</script>
                            <div class="filename"></div>
                        </div>
                        <span style="display:none; float:left;" id="maxfilesize" class="error_data">File size less then 1 MB.</span>     
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" placeholder="Email" name="UserEmail" id="UserEmail" onblur="check_email(this.value)">
                              <input type="hidden" id="Email_val" value=""/> 
                              <span style="display:none; float:left;" id="unnsuccessemail" class="error_data">Invalid Email Address.</span>
                       <span style="display:none; float:left;" id="Emailvalid" class="error_data">Email Already Registered.</span>
                         </div>
                        <div class="inner-frm fr">
                        	<input type="text" name="VerifyEmail" id="VerifyEmail" placeholder="Verify your email address">
                             <span style="display:none; float:left;" id="CEmail" class="error_data">Email Not Same.</span>               
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="password" placeholder="Password" name="Password" id="Password">
                             <span style="display:none; float:left;" id="CPassword" class="error_data">Password Not Same.</span>
                          <span style="display:none; float:left;" id="EnterPassword" class="error_data">Please Enter Password.</span>
                         </div>
                        <div class="inner-frm fr">
                        	<input type="password" placeholder="Verify Password " name="VerifyPassword" id="VerifyPassword">
                        </div>
                    </div>
                    <div class="frm captch-frm clearfix">
                        <div class="inner-frm fr">
                                <div class="capcha">
                                   
                                    <div class="capcha-code">
                                            <?php echo $cap_img; ?>
                                    </div>
                                    <div class="capcha-word">
                                    <a href="javascript:void(0);" class ="refresh" id="refresh"><img src ="<?php echo base_url(); ?>images/refresh.png"></a>
                                     <img id="capload" src ="<?php echo base_url(); ?>images/cap_loader.gif" style="display:none;">
                                    </div>
                                     <input type="text" placeholder="" value="" name="Captcha" id="Captcha">
                                </div>
                            </div>
                    	<div class="inner-frm fl">
                        	<input type="submit" value="Continue">
                         </div>
                        
                    </div>
                    <div class="frm">
                    	<p>* By clicking continue, you agree to our <a href="<?php echo base_url(); ?>termcondition" target="_blank">Terms and Conditions.</a></p>
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
 
  function check_teach_validations()
  {
		 var sucess = true;
		 var cap_word=cap_word1.toLowerCase(); 
		 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
		 var email = $('#UserEmail').val();
		 var confemail = $('#VerifyEmail').val();
		 var pass = $('#Password').val();
		 var confPass = $('#VerifyPassword').val();
					
			
			 if($('#FirstName').val()=='')
			 {
				$('#FirstName').css('border','1px solid red');
				sucess = false;
			 } 
			 else {
				$('#FirstName').css('border','1px solid #a4a4a4');
				}
			 if($('#LastName').val()=='')
			 {
				$('#LastName').css('border','1px solid red');
				sucess = false;
			 } 
			 else {
				$('#LastName').css('border','1px solid #a4a4a4');
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
						
				 if($('#Title').val()=='')
				 {
					$('#Title').css('border','1px solid red');
					sucess = false;
				 } else {
					$('#Title').css('border','1px solid #a4a4a4');
					}
				 if($('#Highschool').val()=='')
				 {
					$('#Highschool').css('border','1px solid red');
					sucess = false;
				 } else {
					$('#Highschool').css('border','1px solid #a4a4a4');
					} 
		
				
				 if($('#Country').val()=='0')
				 {
					$('#Country').css('border','1px solid red');
					sucess = false;
				 } else {
					$('#Country').css('border','1px solid #a4a4a4');
					}
					
						
					if($('#ProfilePic').val()=='')
					{
					
					$('#fileupload').css('border','1px solid red');
					sucess = false;
				 } 
				 else {
					$('#fileupload').css('border','1px solid #a4a4a4');
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
			url:'<?php echo base_url(); ?>highschool_coach/check_email',
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
    
       