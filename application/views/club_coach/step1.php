 <?php
	$this->load->view('include/Mobile_Detect.php');
	$detect = new Mobile_Detect;
	
?>
  <section class="content">
   <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register">
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
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>club_coach/insert_step1" onsubmit="return getClub_Coach();">
                <div class="reg-frm">
                	<div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" placeholder="First Name" name="Club_FirstName" id="Club_FirstName" >
                         </div>
                        <div class="inner-frm fr">
                        	<input type="text" placeholder="Last Name" name="Club_LastName" id="Club_LastName" >
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" placeholder="Title" name="Club_Title" id="Club_Title">
                         </div>
                        <div class="inner-frm fr">
                        	<input type="text" placeholder="Organization" name="Club_Organization" id="Club_Organization">
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" placeholder="Team Name" name="Club_Team" id="Club_Team">
                         </div>
                        <div class="inner-frm fr">
                        	 <?php $Gender_details=get_table_details('club_coach_country','Club_CountryID'); ?>
                           
                            <select name="Club_CountryID" id="Club_CountryID">
                            	<option value="0">Select Country</option>
                                <?php foreach($Gender_details as $Country) { ?>
                                	<option value="<?php echo $Country['Club_CountryID']; ?>">
                                    	<?php echo $Country['Club_CountryName']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" placeholder="Zip/Postal Code" name="Club_ZipCode" id="Club_ZipCode">
                         </div>
                        <div class="inner-frm fr">
                        	<?php $Gender_details=get_table_details('club_coach_gendersport','Club_GenderSportID'); ?>
                           
                            <select name="Club_GenderID" id="Club_GenderID">
                            	<option value="0">---Select Gender of Sport Coached---</option>
                                <?php foreach($Gender_details as $Country) { ?>
                                	<option value="<?php echo $Country['Club_GenderSportID']; ?>">
                                    	<?php echo $Country['Club_GenderSportName']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" placeholder="Age Group" name="Club_AgeGroup" id="Club_AgeGroup">
                         </div>
                        <div class="inner-frm fr">
                        	<?php $Gender_details=get_table_details('club_coach_sport','Club_SportID'); ?>
                            <select name="Club_SportID" id="Club_SportID">
                            	<option value="0">---Select Sport---</option>
                                <?php foreach($Gender_details as $Country) { ?>
                                	<option value="<?php echo $Country['Club_SportID']; ?>">
                                    	<?php echo $Country['Club_SportName']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="fileupload" id="fileupload">
                        	
                        	<div class="file-btn">Upload Your Profile Picture from a saved file
                    		<input type="file" class="filefild" name="Club_ProfileImage" id="Club_ProfileImage">
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
						$('#Club_ProfileImage').val('');
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
                         <span style="display:none; float:left;" id="unnsuccessemail" class="error_data">Invalid Email Address</span>
                     	 <span style="display:none; float:left;" id="Emailvalid" class="error_data">Email Already Registered.</span>
                           <span style="display:none; float:left;" id="CEmail" class="error_data">Email Not Same.</span>
                          
                         
                         <input type="hidden" id="Email_val" value=""/> 
                            
                            
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
                                   
                                    <div class="capcha-code">
                                         <?php echo $cap_img; ?>
                                    </div>
                                      <div class="capcha-word">
                                    <a href="javascript:void(0);" class ="refresh" id="refresh"><img src ="<?php echo base_url(); ?>images/refresh.png"></a>
                                      <img id="capload" src ="<?php echo base_url(); ?>images/cap_loader.gif" style="display:none;">
                                    </div>
                                     <input type="text" name="CaptchImage" id="CaptchImage">
                                    
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
	 
function getClub_Coach()
{
	var flag = true;
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	 var email = $('#UserEmail').val();
	 var confemail = $('#VerifyEmail').val();
	var cap_word=cap_word1.toLowerCase();
	if($('#Email_val').val()==1){  flag = false; }
	
	if($('#VerifyEmail').val()=='')
	{
		$('#VerifyEmail').css('border','1px solid red');
		flag = false;
	} 
	else{
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
	if($('#Club_FirstName').val()==''){
		$('#Club_FirstName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Club_FirstName').css('border','1px solid #a4a4a4');
	}
	
	if($('#Club_LastName').val()==''){
		$('#Club_LastName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Club_LastName').css('border','1px solid #a4a4a4');
	}
	
	if($('#Club_CountryID').val()==0){
		$('#Club_CountryID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Club_CountryID').css('border','1px solid #a4a4a4');
	}
	
	if($('#Club_GenderID').val()==0){
		$('#Club_GenderID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Club_GenderID').css('border','1px solid #a4a4a4');
	}
	
	if($('#Club_SportID').val()==0){
		$('#Club_SportID').css('border','1px solid red');
		flag = false;
	} else {
		$('#Club_SportID').css('border','1px solid #a4a4a4');
	}
	
	if($('#Club_ProfileImage').val()=='')
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
	} 
	else {
	
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
	} 
	else {
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
	$('#Email_val').val(1);	
	var pass = $('#UserEmail').val();
    var confPass = $('#VerifyEmail').val();
       if(pass!="" &&  confPass!="")
	   {
			if(pass != confPass) {
				$('#CEmail').show();
				$('#unnsuccessemail').hide();
				$('#UserEmail').css('border','1px solid red');
				$('#VerifyEmail').css('border','1px solid red');
				$('#Email_val').val(1);	
			}
			else
			{
				$('#CEmail').hide();
				$('#unnsuccessemail').hide();
				$('#VerifyEmail').css('border','1px solid #a4a4a4');
				$('#VerifyEmail').css('border','1px solid #a4a4a4');
				$('#Email_val').val(0);	
			}
	   }
	
}

function check_email(UserEmail)
{
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(UserEmail.match(filter))
	{
		$.ajax({
			type:'post',
			url:'<?php echo base_url(); ?>club_coach/check_email',
			data:{UserEmail:UserEmail},
			success:function(resp){
				if(resp==1){
					$('#unnsuccessemail').hide();
					$('#Emailvalid').show();
					$('#UserEmail').css('border','1px solid red');
					$('#Email_val').val(resp);	
					$('#unnsuccessemail').hide();
				} else {
					$('#unnsuccessemail').hide();
					$('#Emailvalid').hide();
					$('#UserEmail').css('border','1px solid #a4a4a4');
					$('#unnsuccessemail').hide();
					$('#Email_val').val(resp);	
				}
			}
		});
	}
}


</script>    
    