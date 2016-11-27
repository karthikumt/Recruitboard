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
                 <?php if($this->session->flashdata('errormessage')){?>	
                    <div class="errormessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('errormessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url() ?>colleage_coach/insert_step1" onsubmit="return getInsertData();">
      			<div class="reg-frm">
                	<div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" placeholder="First Name" name="Coach_FirstName" id="Coach_FirstName">
                         </div>
                        <div class="inner-frm fr">
                        	<input type="text" placeholder="Last Name" name="Coach_LastName" id="Coach_LastName">
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" placeholder="Title" name="Coach_Title" id="Coach_Title">
                         </div>
                        <div class="inner-frm fr">
                        	<input type="text" placeholder="University/College" name="Coach_University" id="Coach_University">
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<select name="Coach_State" id="Coach_State">
                            	<option value="0">
                                	Select State
                                </option>
                             <?php  $country_info=get_table_details('state_list','StateID'); ?>
                                 <?php for($i=0;$i<count($country_info);$i++){ ?>
                            	<option value="<?php echo $country_info[$i]['StateID']; ?>">
                                	<?php echo $country_info[$i]['Name']; ?>
                                </option>
                                <?php } ?>
                            </select>
                         </div>
                        <div class="inner-frm fr">
                        	<input type="text" placeholder="City" name="Coach_City" id="Coach_City">
                        </div>
                    </div>
                    
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" placeholder="Zip/Postal Code" name="Coach_Zip" id="Coach_Zip">
                         </div>
                        <div class="inner-frm fr">
                        	 <?php $Gender_details=get_table_details('coll_cotch_gender','Coll_GenderID'); ?>
                            <select name="Coach_GenderID" id="Coach_GenderID">
                            	<option value="0">Select Gender</option>
                                <?php for($i=0;$i<count($Gender_details);$i++) { ?>
                                <option value="<?php echo $Gender_details[$i]['Coll_GenderID']; ?>">
                                <?php echo $Gender_details[$i]['Coll_GenderName']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	 <?php $Sport_details=get_table_details('coll_cotch_sport','Coll_SportID'); ?>
                            <select name="Coach_SportID" id="Coach_SportID">
                            	<option value="0">Select Sport</option>
                                <?php for($i=0;$i<count($Sport_details);$i++) { ?>
                                <option value="<?php echo $Sport_details[$i]['Coll_SportID']; ?>">
                                <?php echo $Sport_details[$i]['Coll_SportName']; ?></option>
                                <?php } ?>
                            </select>
                         </div>
                    </div>
                   
                    <div class="frm clearfix">
                    	<div class="fileupload" id="fileupload">
                        	
                        	<div class="file-btn">Upload Your Profile Picture from a saved file
                    		<input type="file" class="filefild" name="Coach_ProfileImage" id="Coach_ProfileImage" />
                            </div>
                             <script>
							$('input.filefild').on('change', function (event, files, label) {
								var file_name = this.value.replace(/\\/g, '/').replace(/.*\//, '');
								var file = $('#Coach_ProfileImage')[0].files[0];
								var fileName = file.name;
								var fileExt = fileName.split('.').pop();
								var fileExt = fileExt.toLowerCase();
								if(fileExt=='jpg' || fileExt=='jpeg' || fileExt=='png'){								
								
								}
								else
								{
								$('#Coach_ProfileImage').val('');
								alert('invalid file type');
								}
								var size= Math.round(this.files[0].size/ 1048576);
								<?php
								if ( $detect->isMobile() || $detect->isTablet() || $detect->isiOS() || $detect->isAndroidOS()  ) { ?>
 					if(size >= 1 )
					{
						$('#maxfilesize').show();
						$('#Coach_ProfileImage').val('');
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
                    		<?php if($this->session->userdata('admin_register')){ ?>
                    		<input type="text" placeholder="Email (E.g. Coach@somedomain.com)" name="UserEmail" id="UserEmail" onblur="check_email(this.value)" autocomplete="off">
                    		<?php } else { ?>
                        	<input type="text" placeholder="Email (E.g. Coach@State.edu)" name="UserEmail" id="UserEmail" onblur="check_email(this.value)" autocomplete="off">

                    		<?php }?>
                         <span style="display:none; float:left;" id="unnsuccessemail" class="error_data">Invalid Email Address.</span>
                     	 <span style="display:none; float:left;" id="Emailvalid" class="error_data">Email Already Registered.</span>
                           <span style="display:none; float:left;" id="CEmail" class="error_data">Email Not Same.</span>
                          
                         
                         <input type="hidden" id="Email_val" value=""/> 
                          <input type="hidden" id="Conf_val" value=""/> 
                            
                            
                         </div>
                        <div class="inner-frm fr">
                        	<input type="text" placeholder="Verify your email address" id="VerifyEmail" onblur="confirmEmail()">
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="password" placeholder="Password" name="Password" id="Password">
                             <span style="display:none; float:left;" id="CPassword" class="error_data">Password Not Same.</span>
                        	 <span style="display:none; float:left;" id="EnterPassword" class="error_data">Please Enter Password.</span>
                         </div>
                        <div class="inner-frm fr">
                        	<input type="password" placeholder="Verify Password " id="VerifyPassword" onblur="confirmPass()" >
                        	 <input type="hidden" id="Pass_val" value=""/> 
                        </div>
                    </div>
                    <div class="frm captch-frm clearfix">
                        <div class="inner-frm fr">
                                <div class="capcha">
                                    <div class="capcha-code" id="capcode">
                                         <?php echo $cap_img; ?>
                                       
                                    </div>
                                      <div class="capcha-word">
                                    <a href="javascript:void(0);" class ="refresh" id="refresh"><img src ="<?php echo base_url(); ?>images/refresh.png"></a>
                                     <img id="capload" src ="<?php echo base_url(); ?>images/cap_loader.gif" style="display:none;">
                                    </div>
                                    <input type="text" placeholder="" name="CaptchImage" id="CaptchImage" value="">
                                      
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
    
<script>


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
	 
function getInsertData()
{

	var flag = true;
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+(edu|com|in)+$/;
	 var email = $('#UserEmail').val();
	 var confemail = $('#VerifyEmail').val();
     var cap_word=cap_word1.toLowerCase();
	
	 if($('#UserEmail').val()=='')
   {
     $('#UserEmail').css('border','1px solid red');
     flag = false;
    } 
 /* else if(!$('#UserEmail').val().match(filter))
     {*/
     	<?php if($this->session->userdata('admin_register')){ ?>
     	 else if(!$('#UserEmail').val())
     { 
     	<?php } else { ?>
     	else if(!$('#UserEmail').val().match(filter))
     {
     <?php } ?>	
      $('#UserEmail').css('border','1px solid red');
      $('#unnsuccessemail').show();
      $('#Emailvalid').hide();
      flag = false;
     }
  else if(email != confemail) {
    $('#CEmail').show();
    $('#UserEmail').css('border','1px solid red');
    $('#VerifyEmail').css('border','1px solid red');
    flag = false;
    
      }      
   else {
    $('#UserEmail').css('border','1px solid #a4a4a4');
    $('#CEmail').hide();
      $('#unnsuccessemail').hide();
      $('#Emailvalid').hide();
      }
	
	if($('#VerifyEmail').val()=='')
	{
		$('#VerifyEmail').css('border','1px solid red');
		flag = false;
	} 
	else{
		$('#VerifyEmail').css('border','1px solid #a4a4a4');
	}
	
	if($('#Email_val').val()==1){  
		$('#Emailvalid').show();
		$('#UserEmail').css('border','1px solid red'); 
		flag = false;   
	}else{
		$('#Emailvalid').hide();
		$('#UserEmail').css('border','1px solid #a4a4a4');
		
	}
	
	if($('#Pass_val').val()==1){ flag = false; }
	if($('#Password').val()==''){
		$('#Password').css('border','1px solid red');
		flag = false;
	} else {
		$('#Password').css('border','1px solid #a4a4a4');
	}
	
	if($('#VerifyPassword').val()==''){
		$('#VerifyPassword').css('border','1px solid red');
		flag = false;
	} else {
		$('#VerifyPassword').css('border','1px solid #a4a4a4');
	}
	if($('#Coach_FirstName').val()==''){
		$('#Coach_FirstName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Coach_FirstName').css('border','1px solid #a4a4a4');
	}
	
	if($('#Coach_LastName').val()==''){
		$('#Coach_LastName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Coach_LastName').css('border','1px solid #a4a4a4');
	}
	
	
	if($('#Coach_State').val()==0){
		$('#Coach_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Coach_State').css('border','1px solid #a4a4a4');
	}
	
	if($('#Coach_City').val()==""){
		$('#Coach_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Coach_City').css('border','1px solid #a4a4a4');
	}
	
	if($('#Coach_GenderID').val()==0){
		$('#Coach_GenderID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Coach_GenderID').css('border','1px solid #a4a4a4');
	}
	
	if($('#Coach_SportID').val()==0){
		$('#Coach_SportID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Coach_SportID').css('border','1px solid #a4a4a4');
	}
	if($('#Coach_ProfileImage').val()=='')
		 {
			
			$('#fileupload').css('border','1px solid red');
			flag = false;
		 } 
		 else {
			$('#fileupload').css('border','1px solid #a4a4a4');
			}		
	
	if($('#CaptchImage').val()==''){
		$('#CaptchImage').css('border','1px solid red');
		flag = false;
	} else {
	
		if($('#CaptchImage').val().toLowerCase()!=cap_word)
		{
			$('#CaptchImage').css('border','1px solid red');
			flag = false;
		}else{
			$('#CaptchImage').css('border','1px solid #a4a4a4');
		}
	}
	
	if(flag == false) {
		return false;
	} else {
	$('#ProcessLoaderID').show();
		return true;
	}	
	return false;		
}

function confirmPass()
{
	$('#Pass_val').val(1);	
	var pass = $('#Password').val();
    var confPass = $('#VerifyPassword').val();
       if(pass!="" &&  confPass!="")
	   {
			if(pass != confPass) {
				$('#CPassword').show();
				$('#EnterPassword').hide();
				$('#Password').css('border','1px solid red');
				$('#VerifyPassword').css('border','1px solid red');
				$('#Pass_val').val(1);	
			}
			else
			{
				$('#CPassword').hide();
				$('#EnterPassword').hide();
				$('#Password').css('border','1px solid #a4a4a4');
				$('#VerifyPassword').css('border','1px solid #a4a4a4');
				$('#Pass_val').val(0);	
			}
	   }
	
}


function confirmEmail()
{
	var pass = $('#UserEmail').val();
    var confPass = $('#VerifyEmail').val();
       if(pass!="" &&  confPass!="")
	   {
			if(pass != confPass) {
				$('#CEmail').show();
				$('#unnsuccessemail').hide();
				$('#UserEmail').css('border','1px solid red');
				$('#VerifyEmail').css('border','1px solid red');
				$('#Conf_val').val(1);	
			}
			else
			{
				$('#CEmail').hide();
				$('#unnsuccessemail').hide();
				$('#VerifyEmail').css('border','1px solid #a4a4a4');
				$('#UserEmail').css('border','1px solid #a4a4a4');
				$('#Conf_val').val(0);	
			}
	   }
	
}

function check_email(UserEmail)
{
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([edu])+$/;
	if(UserEmail.match(filter))
	{
		$.ajax({
			type:'post',
			url:'<?php echo base_url(); ?>colleage_coach/check_email',
			data:{UserEmail:UserEmail},
			success:function(resp){
				if(resp==1){
					$('#unnsuccessemail').hide();
					$('#Emailvalid').show();
					$('#CEmail').hide();
					$('#UserEmail').css('border','1px solid red');
					$('#Email_val').val(resp);	
					$('#unnsuccessemail').hide();
				} else {
					$('#unnsuccessemail').hide();
					$('#Emailvalid').hide();
					$('#CEmail').hide();
					$('#UserEmail').css('border','1px solid #a4a4a4');
					$('#unnsuccessemail').hide();
					$('#Email_val').val(resp);	
				}
			}
		});
	}
}


</script>    