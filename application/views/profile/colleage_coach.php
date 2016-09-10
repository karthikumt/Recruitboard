	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Profile</h2>
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
                  <form name="stu_step1" method="post" action="<?php echo base_url('profile/update_profile_coll_coach'); ?>" onsubmit="return check_stu_validation();" class="form-horizontal form-bordered" enctype="multipart/form-data">
                <div class="forums-details">
                <div class="da-update">
                	<div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<span>Title</span>
                            <input type="text" placeholder="Title" name="Coach_Title" id="Coach_Title" value="<?php echo $Profile['Coach_Title']; ?>" />
                           
                         </div>
                        <div class="inner-frm fr">
                        <span>First Name</span>
                            <input type="text" placeholder="First Name" name="FirstName" id="FirstName" value="<?php echo $UserData['FirstName']; ?>">
                        </div>
                    </div>
                    
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	 <span>Last Name</span>
                        	<input type="text" placeholder="Last Name" name="LastName" id="LastName" value="<?php echo $UserData['LastName']; ?>">
                         </div>
                        <div class="inner-frm fr">
                        	<span>University</span>
                            <input type="text" placeholder="University" name="Coach_University" id="Coach_University" value="<?php echo $Profile['Coach_University']; ?>" >
                        </div>
                    </div>
                    
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<span>Country</span>
                            <?php $Country_details=get_table_details('coll_cotch_country','Coll_CountryID'); ?>
                            <select name="Coach_CountryID" id="Coach_CountryID1">
                            	<option value="0">Select Country</option>
                                <?php for($i=0;$i<count($Country_details);$i++) { ?>
                                <option value="<?php echo $Country_details[$i]['Coll_CountryID']; ?>" <?php if($Country_details[$i]['Coll_CountryID']==$Profile['Coach_CountryID']){?> selected="selected" <?php } ?> >
                                <?php echo $Country_details[$i]['Coll_CountryName']; ?></option>
                                <?php } ?>
                            </select>
                         </div>
                        <div class="inner-frm fr">
                        	<span>State</span>
                           <select name="Coach_State" id="Coach_State">
                            	<option value="0">
                                	Select State
                                </option>
                             <?php  $country_info=get_table_details('state_list','StateID'); ?>
                                 <?php for($i=0;$i<count($country_info);$i++){ ?>
                            	<option value="<?php echo $country_info[$i]['StateID']; ?>" <?php if($country_info[$i]['StateID']==$Profile['Coach_State']) { ?> selected="selected" <?php } ?>>
                                	<?php echo $country_info[$i]['Name']; ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<span>City</span>
                           	<input type="text" placeholder="City" name="Coach_City" id="Coach_City" value="<?php echo $Profile['Coach_City']; ?>"> 
                         </div>
                        <div class="inner-frm fr">
                        	<span>Zip Code</span>
                           	<input type="text" placeholder="Zip/Postal Code" name="Coach_Zip" id="Coach_Zip" value="<?php echo $Profile['Coach_Zip']; ?>"> 
                        </div>
                    </div>
                    
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<span>Gender</span>
                              <?php $Gender_details=get_table_details('coll_cotch_gender','Coll_GenderID'); ?>
                            <select name="Coach_GenderID" id="Coach_GenderID">
                            	<option value="0">Select Gender</option>
                                <?php for($i=0;$i<count($Gender_details);$i++) { ?>
                                <option value="<?php echo $Gender_details[$i]['Coll_GenderID']; ?>" <?php if($Gender_details[$i]['Coll_GenderID']==$Profile['Coach_GenderID']){ ?> selected="selected" <?php } ?> >
                                <?php echo $Gender_details[$i]['Coll_GenderName']; ?></option>
                                <?php } ?>
                            </select>
                         </div>
                        <div class="inner-frm fr">
                        	<span>Sport</span>
                             <?php $Sport_details=get_table_details('coll_cotch_sport','Coll_SportID'); ?>
                            <select name="Coach_SportID" id="Coach_SportID">
                            	<option value="0">Select Sport</option>
                                <?php for($i=0;$i<count($Sport_details);$i++) { ?>
                                <option value="<?php echo $Sport_details[$i]['Coll_SportID']; ?>" <?php if($Sport_details[$i]['Coll_SportID']==$Profile['Coach_SportID']){ ?> selected="selected" <?php } ?>>
                                <?php echo $Sport_details[$i]['Coll_SportName']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<span>Division</span>
                             <?php $Division_details=get_table_details('coll_cotch_division','Coll_DivisionID'); ?>
                            <select name="Coach_DivisionID" id="Coach_DivisionID">
                                <option value="0">Select Division</option>
                                 <?php for($i=0;$i<count($Division_details);$i++) { ?>
                                <option value="<?php echo $Division_details[$i]['Coll_DivisionID']; ?>" <?php if($Division_details[$i]['Coll_DivisionID']==$Profile['Coach_DivisionID']) { ?> selected="selected" <?php } ?>>
                                <?php echo $Division_details[$i]['Coll_DivisionName']; ?></option>
                                <?php } ?>
                            </select>
                         </div>
                        <div class="inner-frm fr">
                        	
                            <span>Conference</span>
                                <input type="text" placeholder="Conference" name="Coach_Conferance" id="Coach_Conferance" value="<?php echo $Profile['Coach_Conferance']; ?>">
                        </div>
                    </div>
                    
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<span>Career Record</span>
                            <input type="text" placeholder="Career Record" name="Coach_CareerRecord" id="Coach_CareerRecord" value="<?php echo $Profile['Coach_CareerRecord']; ?>">
                         </div>
                        <div class="inner-frm fr">
                        	
                            <span>Years With Current Program</span>
                                <select name="Coach_CurrentProgramID" id="Coach_CurrentProgramID1">
                                <?php $Program_details=get_table_details('coll_cotch_program','Coll_ProgramID'); ?>                            
                                <option value="0">Year at Current School</option>
                                  <?php for($i=0;$i<count($Program_details);$i++) { ?>
                                <option value="<?php echo $Program_details[$i]['Coll_ProgramID']; ?>" <?php if($Program_details[$i]['Coll_ProgramID']==$Profile['Coach_CurrentProgramID']) {?> selected="selected" <?php } ?>>
                                <?php echo $Program_details[$i]['Coll_ProgramName']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    
                        <div class="frm clearfix">
                        	
                            	<div class="inner-frm fl">
                            	<span>Playoff Appearances</span>
                                 <?php $Playoff_details=get_table_details('coll_cotch_playoff','Coll_PlayoffID'); ?>
                            <select name="Coach_PlayID" id="Coach_PlayID1">
                                <option value="0">Number of Playoff Appearances</option>
                                 <?php for($i=0;$i<count($Playoff_details);$i++) { ?>
                                <option value="<?php echo $Playoff_details[$i]['Coll_PlayoffID']; ?>" <?php if($Playoff_details[$i]['Coll_PlayoffID']==$Profile['Coach_PlayID']){ ?> selected="selected" <?php } ?>>
                                <?php echo $Playoff_details[$i]['Coll_PlayoffName']; ?></option>
                                <?php } ?>
                            </select>
                                </div>
                              <div class="inner-frm fr">
                        	
                            	<span>Team Website</span>
                                <input type="text" placeholder="Team Website(link)" name="Coach_TeamID" id="Coach_TeamID" value="<?php echo $Profile['Coach_TeamID']; ?>">
                       		 </div>
                        
                        
                    	</div>
                        
                     <div class="frm clearfix">
                        	   <div class="inner-frm fl">
                        	
                            	<span>Recruiting Questionnaire</span>
                                <input type="text" placeholder="Team Recruiting Questionnarie(link)" name="Coach_CoachAward" id="Coach_CoachAward" value="<?php echo $Profile['Coach_CoachAward']; ?>">
                       		 </div>
                        	  <div class="inner-frm fr">
                        	
                            	<span>Current Season Record</span>
                                <input type="text" placeholder="This Season’s Record" name="Coach_SeasonRecord" id="Coach_SeasonRecord" value="<?php echo $Profile['Coach_SeasonRecord']; ?>">
                       		 </div>	
                        
                    	</div>   
                   
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<span>New Password</span>
                            <input type="password"  name="UserPassword" id="UserPassword" >
                             <span style="display:none; float:left;" id="CPassword" class="error_data">Password Not Same.</span>
                          <span style="display:none; float:left;" id="EnterPassword" class="error_data">Please Enter Password.</span>
                         </div>
                        <div class="inner-frm fr">
                        	<span>Confirm Password</span>
                            <input type="password"  name="Con_Password" id="Con_Password" >
                        </div>
                    </div>
                    
                    
                </div>
                
                <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="submit" value="Update Profile" >
                         </div>
                        
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    
<script>

 function check_stu_validation()
  {
	 var sucess = true;
		if($('#FirstName').val()==''){
		$('#FirstName').css('border','1px solid red');
		sucess = false;
		} else {
			$('#FirstName').css('border','1px solid #a4a4a4');
		}
		
		if($('#LastName').val()==''){
			$('#LastName').css('border','1px solid red');
			sucess = false;
		} else {
			$('#LastName').css('border','1px solid #a4a4a4');
		}
		
		if($('#Coach_CountryID').val()==0){
			$('#Coach_CountryID').css('border','1px solid red');
			sucess = false;
		} else {
			$('#Coach_CountryID').css('border','1px solid #a4a4a4');
		}
		
		
		if($('#Coach_State').val()==0){
			$('#Coach_State').css('border','1px solid red');
			sucess = false;
		} else {
			$('#Coach_State').css('border','1px solid #a4a4a4');
		}
		
		if($('#Coach_City').val()==""){
			$('#Coach_City').css('border','1px solid red');
			sucess = false;
		} else {
			$('#Coach_City').css('border','1px solid #a4a4a4');
		}
		
		if($('#Coach_GenderID').val()==0){
			$('#Coach_GenderID').css('border','1px solid red');
			sucess = false;
		} else {
			$('#Coach_GenderID').css('border','1px solid #a4a4a4');
		}
		
		if($('#Coach_SportID').val()==0){
			$('#Coach_SportID').css('border','1px solid red');
			sucess = false;
		} else {
			$('#Coach_SportID').css('border','1px solid #a4a4a4');
		}
		
		
		if($('#UserPassword').val()!='')
		 {
			if($('#UserPassword').val() != $('#Con_Password').val()) {
				$('#CPassword').show();
				$('#EnterPassword').hide();
				$('#UserPassword').css('border','1px solid red');
				$('#Con_Password').css('border','1px solid red');
				sucess = false; 
		   }
		   else
		   {
				$('#CPassword').hide();
				$('#EnterPassword').hide();
				$('#UserPassword').css('border','1px solid #a4a4a4');
				$('#Con_Password').css('border','1px solid #a4a4a4');
				
		   }	
		 } 
		
		if($('#Coach_DivisionID').val()==0){
		$('#Coach_DivisionID').css('border','1px solid red');
		sucess = false;
	} else {
		$('#Coach_DivisionID').css('border','1px solid #a4a4a4');
	}
	
	if($('#Coach_CurrentProgramID').val()==0){
		$('#Coach_CurrentProgramID').css('border','1px solid red');
		sucess = false;
	} else {
		$('#Coach_CurrentProgramID').css('border','1px solid #a4a4a4');
	}
	
	var expression = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
 	var regex = new RegExp(expression);
	var t = $('#Coach_TeamID').val();
	  if (!t.match(regex) )
		{
			$('#Coach_TeamID').css('border','1px solid red');
			sucess = false;
		} else {
			$('#Coach_TeamID').css('border','1px solid #a4a4a4');
		}
		
		
		if($('#Coach_PlayID').val()==0){
			$('#Coach_PlayID').css('border','1px solid red');
			sucess = false;
		} else {
			$('#Coach_PlayID').css('border','1px solid #a4a4a4');
		}
		
		
		
		if($('#Coach_Program').val()==''){
			$('#Coach_Program').css('border','1px solid red');
			sucess = false;
		} else {
			$('#Coach_Program').css('border','1px solid #a4a4a4');
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
  
</script>    


