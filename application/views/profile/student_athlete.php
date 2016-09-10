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
                  <form name="stu_step1" method="post" action="<?php echo base_url('profile/update_profile_student'); ?>" onsubmit="return check_stu_validation();" class="form-horizontal form-bordered" enctype="multipart/form-data">
                <div class="forums-details">
                <div class="da-update">
                	<div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<span>First Name</span>
                            <input type="text" placeholder="First Name" name="FirstName" id="FirstName" value="<?php echo $UserData['FirstName']; ?>">
                         </div>
                        <div class="inner-frm fr">
                        <span>Last Name</span>
                        	<input type="text" placeholder="Last Name" name="LastName" id="LastName" value="<?php echo $UserData['LastName']; ?>">
                        </div>
                    </div>
                    
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<span>Gender</span>
                            <select name="Stu_GenderID" id="Stu_GenderID">
                             <option value="0">
                                	Select Gender
                                </option>
                                    <?php $gender_info = get_table_details('stu_athlete_gender','GenderID'); ?>
                            	 <?php for($i=0;$i<count($gender_info);$i++){ ?>
                            	<option value="<?php echo $gender_info[$i]['GenderID']; ?>" <?php if($gender_info[$i]['GenderID']==$Profile['Stu_GenderID']){ ?> selected="selected" <?php } ?> >
                                	<?php echo $gender_info[$i]['Gender']; ?>
                                </option>
                                <?php } ?>
                            </select>
                         </div>
                        <div class="inner-frm fr">
                        	<span>School Name</span>
                            <input type="text" placeholder="School Name" name="Stu_SchoolName" id="Stu_SchoolName" value="<?php echo $Profile['Stu_SchoolName']; ?>" >
                        </div>
                    </div>
                    
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<span>Country</span>
                            <select name="Stu_CountryID" id="Stu_CountryID">
                            
                            	<option value="0">
                                	Select Country
                                </option>
                             <?php  $country_info=get_table_details('country','CountryID'); ?>
                                 <?php for($i=0;$i<count($country_info);$i++){ ?>
                            	<option value="<?php echo $country_info[$i]['CountryID']; ?>" <?php if($country_info[$i]['CountryID']==$Profile['Stu_CountryID']){ ?> selected="selected" <?php } ?> >
                                	<?php echo $country_info[$i]['CountryName']; ?>
                                </option>
                                <?php } ?>
                            </select>
                         </div>
                        <div class="inner-frm fr">
                        	<span>State</span>
                            <select name="Stu_State" id="Stu_State">
                            	<option value="0">
                                	Select State
                                </option>
                             <?php  $country_info=get_table_details('state_list','StateID'); ?>
                                 <?php for($i=0;$i<count($country_info);$i++){ ?>
                            	<option value="<?php echo $country_info[$i]['StateID']; ?>" <?php if($country_info[$i]['StateID']==$Profile['Stu_State']){ ?> selected="selected" <?php } ?> >
                                	<?php echo $country_info[$i]['Name']; ?>
                                </option>
                                <?php } ?>
                            </select>
                            
                        </div>
                    </div>
                    
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<span>City</span>
                          	<input type="text" placeholder="City" name="Stu_City" id="Stu_City" value="<?php echo $Profile['Stu_City']; ?>">
                         </div>
                        <div class="inner-frm fr">
                        	<span>Zip Code</span>
                            <input type="text" placeholder="Zip/Postal Code" name="Stu_ZipCode" id="Stu_ZipCode" value="<?php echo $Profile['Stu_ZipCode']; ?>">
                        </div>
                    </div>
                    
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<span>Class Of</span>
                            <select name="Stu_ClassID" id="Stu_ClassID">
                            	<option value="0">
                                	Select Class of
                                </option>
                            <?php  $class_info=get_table_details('stu_athlete_class','ClassID'); ?>
                                 <?php for($i=0;$i<count($class_info);$i++){ ?>
                            	<option value="<?php echo $class_info[$i]['ClassID']; ?>"  <?php if($class_info[$i]['ClassID']==$Profile['Stu_ClassID']){ ?> selected="selected" <?php } ?> >
                                	<?php echo $class_info[$i]['ClassName']; ?>
                                </option>
                                <?php } ?>
                            </select>
                         </div>
                        <div class="inner-frm fr">
                        	<span>Height</span>
                            <div class="inner-frm fl">
                                <select name="Stu_HeightID" id="Stu_HeightID">
                                    <option value="0">
                                        Feet
                                    </option>
                                  <?php $height_info=get_table_details('stu_athlete_height','HeightID'); ?>
                                     <?php for($i=0;$i<count($height_info);$i++){ ?>
                                    <option value="<?php echo $height_info[$i]['HeightID']; ?>" <?php if($height_info[$i]['HeightID']==$Profile['Stu_HeightID']){ ?> selected="selected" <?php } ?>>
                                        <?php echo $height_info[$i]['HeightName']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="inner-frm fr">
                            <select name="Stu_InchesID" id="Stu_InchesID">
                            	<option value="0">
                                	Inches
                                </option>
                              <?php $height_info=get_table_details('stu_athlete_inches','InchesID'); ?>
                                 <?php for($i=0;$i<count($height_info);$i++){ ?>
                            	<option value="<?php echo $height_info[$i]['InchesID']; ?>"  <?php if($height_info[$i]['InchesID']==$Profile['Stu_InchesID']){ ?> selected="selected" <?php } ?>>
                                	<?php echo $height_info[$i]['InchesName']; ?>
                                </option>
                                <?php } ?>
                            </select>
                            </div>
                        </div>
                    </div>
                    
                    
                        <div class="frm clearfix">
                        	
                            	<div class="inner-frm fl">
                            	<span>Weight</span>
                                <select name="Stu_WeightID" id="Stu_WeightID">
                                	<option value="0">Select Weight</option>
                                	<?php $width_info=get_table_details('stu_athlete_weight','WeightID'); ?>
                                 <?php for($i=0;$i<count($width_info);$i++){ ?>
                            	<option value="<?php echo $width_info[$i]['WeightID']; ?>"  <?php if($width_info[$i]['WeightID']==$Profile['Stu_WeightID']){ ?> selected="selected" <?php } ?>>
                                	<?php echo $width_info[$i]['WeightName']; ?>
                                </option>
                                <?php } ?>
                                </select>
                                </div>
                             
                    	</div>
                   
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<span>New Password</span>
                            <input type="password" placeholder="New Password" name="UserPassword" id="UserPassword">
                             <span style="display:none; float:left;" id="CPassword" class="error_data">Password Not Same.</span>
                          <span style="display:none; float:left;" id="EnterPassword" class="error_data">Please Enter Password.</span>
                         </div>
                        <div class="inner-frm fr">
                        	<span>Confirm Password</span>
                            <input type="password" placeholder="Confirm Password" name="Con_Password" id="Con_Password">
                        </div>
                    </div>
                    
                    
                </div>
             	
                
                <div class="student-athlete biometric" >
                	<div class="reg-title"><a href="javascript:void(0);" onclick="getacedmic();"><h2>Academic Board</h2></a></div>
                    <div id="acedmic" style="display:none;">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-5">
                            	<span>Player Name</span>
                                <input type="text" placeholder="Player Name" name="Stu_Act_Player" id="Stu_Act_Player" value="<?php echo $Profile['Stu_Act_Player']; ?>">               
                            </div>
                            <div class="cols-5">
                            <span>School Name</span>
                            	<input type="text" placeholder="High School Name" name="Stu_Act_HighSchool" id="Stu_Act_HighSchool" value="<?php echo $Profile['Stu_Act_HighSchool']; ?>">
                            </div>
                            <div class="cols-5">
                            	<span>City</span>
                                <input type="text" placeholder="City" name="Stu_Act_City" id="Stu_Act_City" value="<?php echo $Profile['Stu_Act_City']; ?>">
                            </div>
                            <div class="cols-5">
                            	<span>State</span>
                                <input type="text" placeholder="State" name="Stu_Act_State" id="Stu_Act_State" value="<?php echo $Profile['Stu_Act_State']; ?>">
                            </div>
                            <div class="cols-5">
                            	<span>Class Of</span>
                                <input type="text" placeholder="Class of 20" name="Stu_Act_Class" value="<?php echo $Profile['Stu_Act_Class']; ?>">
                            </div>
                        </div>
                        
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-small">
                        	<div class="reg-frm pitching-stats">
                             	<h4>Education</h4>
                                <span>ACT Score</span>
                                <div class="frm">
                                 <select name="Stu_Act_ActScore" id="Stu_Act_ActScore">
                                    <option value="0">
                                       ACT Score
                                    </option>
                                   
                                       <?php $Education_details=get_table_details('stu_education_act','EducationID'); ?>
                            	 <?php for($i=0;$i<count($Education_details);$i++){ ?>
                            	<option value="<?php echo $Education_details[$i]['EducationID']; ?>" <?php if($Education_details[$i]['EducationID']==$Profile['Stu_Act_ActScore']){ ?> selected="selected"  <?php } ?>>
                                	<?php echo $Education_details[$i]['EducationName']; ?>
                                </option>
                                <?php } ?>
                                </select>
                                </div>
                                <span>SAT Score</span>
                                <div class="frm">
                                   <select name="Stu_Act_SatScore" id="Stu_Act_SatScore">
                                    <option value="0">
                                       SAT Score
                                    </option>
                                      <?php $Education_details_sat=get_table_details('stu_education_sat','Education_sat_ID'); ?>
                            	 <?php for($i=0;$i<count($Education_details_sat);$i++){ ?>
                            	<option value="<?php echo $Education_details_sat[$i]['Education_sat_ID']; ?>" <?php if($Education_details_sat[$i]['Education_sat_ID']==$Profile['Stu_Act_SatScore']){ ?> selected="selected"  <?php } ?>>
                                	<?php echo $Education_details_sat[$i]['Education_sat_Name']; ?>
                                </option>
                                <?php } ?>
                                </select>
                                	
                                </div>
                                <span>GPA</span>
                                <div class="frm">
                                    <select name="Stu_Act_Gpa" id="Stu_Act_Gpa"> 
                                    <option value="0">GPA</option>
                                        <?php $Education_gpa_details=get_table_details('stu_education_gpa','Education_gpa_ID'); ?>
                            	 <?php for($i=0;$i<count($Education_gpa_details);$i++){ ?>
                            	<option value="<?php echo $Education_gpa_details[$i]['Education_gpa_ID']; ?>" <?php if($Education_gpa_details[$i]['Education_gpa_ID']==$Profile['Stu_Act_Gpa']){ ?> selected="selected"  <?php } ?>>
                                	<?php echo $Education_gpa_details[$i]['Education_gpa_Name']; ?>
                                </option>
                                <?php } ?>
                                </select>
                                </div>
                                <span>Core GPA</span>
                                <div class="frm">
                                     <select name="Stu_Act_CoreGpa" id="Stu_Act_CoreGpa">
                                    <option value="0">
                                       Core GPA
                                    </option>
                                     <?php $Education_Core_Gpa_details=get_table_details('stu_education_core_gpa','Education_Core_Gpa_ID'); ?>
              
                            	 <?php for($i=0;$i<count($Education_Core_Gpa_details);$i++){ ?>
                            	<option value="<?php echo $Education_Core_Gpa_details[$i]['Education_Core_Gpa_ID']; ?>" <?php if($Education_Core_Gpa_details[$i]['Education_Core_Gpa_ID']==$Profile['Stu_Act_CoreGpa']){ ?> selected="selected"  <?php } ?>>
                                	<?php echo $Education_Core_Gpa_details[$i]['Education_Core_Gpa_Name']; ?>
                                </option>
                                <?php } ?>
                                </select>
                                </div>
                            </div>
                            <div class="reg-frm pitching-stats">
                             	<h4>Extracurricular Activities</h4>
                                <div class="frm">
                                    <div class="added-value">
                                    	Arts
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Stu_Act_Arts" value="1"  <?php if($Profile['Stu_Act_Arts']==1){?> checked="checked" <?php } ?>>
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="added-value">
                                    	Religion
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Stu_Act_Religion" value="1" <?php if($Profile['Stu_Act_Religion']==1){?> checked="checked" <?php } ?>>
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="added-value">
                                    	Clubs/organizations
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Stu_Act_Clubs" value="1" <?php if($Profile['Stu_Act_Clubs']==1){?> checked="checked" <?php } ?>>
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="added-value">
                                    	Community Service
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Stu_Act_Community" value="1" <?php if($Profile['Stu_Act_Community']==1){?> checked="checked" <?php } ?>>
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="added-value">
                                    	Student Goverment
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Stu_Act_Goverment" value="1" <?php if($Profile['Stu_Act_Goverment']==1){?> checked="checked" <?php } ?>>
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="added-value">
                                    	Media / Newspaper
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Stu_Act_Media" value="1" <?php if($Profile['Stu_Act_Media']==1){?> checked="checked" <?php } ?>>
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="added-value">
                                    	MIlitary R.O.T.C
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Stu_Act_Military" value="1" <?php if($Profile['Stu_Act_Military']==1){?> checked="checked" <?php } ?>>
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="added-value">
                                    	Music
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Stu_Act_Music" value="1" <?php if($Profile['Stu_Act_Music']==1){?> checked="checked" <?php } ?>>
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <span>Other</span>
                                <div class="frm">
                                    <input type="text" placeholder="Other" name="Stu_Act_Other" value="<?php echo $Profile['Stu_Act_Other']; ?>" >
                                </div>
                            </div>
                        </div>
						<div class="cols-big">
                        	<div class="reg-frm pitching-stats">
                            	<div class="image-upload">
                                    <span class="uploadimg" id="imagePreview1">
                                        <input type="file" name="Stu_Act_ImageName" id="Stu_Act_ImageName">
                                     <?php if($Profile['Stu_Act_ImageName']!='') { ?>
                                        <img src="<?php echo base_url('register_images/student_athlete/small/'.$Profile['Stu_Act_ImageName'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>
                                    </span>
                                </div>
                             	<h4>International Students</h4>
                                <span>TOFEL Score</span>
                                <div class="frm">
                                    <select name="Stu_Act_TofelScoreID" id="Stu_Act_TofelScoreID">
                                    	<option value="0">TOEFL Score  Total</option>
                                         <?php $Country_detail = get_table_details('stu_academic_tofel','Stu_TofelID'); ?>
                                           <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Stu_TofelID']; ?>" <?php if($Country_detail[$i]['Stu_TofelID']==$Profile['Stu_Act_TofelScoreID']){ ?> selected="selected"<?php } ?>>
                                <?php echo $Country_detail[$i]['Stu_TofelName']; ?></option>
                                <?php } ?>
                                    </select>
                                </div>
                                <span>Reading</span>
                                <div class="frm">
                                      <select name="Stu_Act_ReadID">
                                    	<option value="0">Reading</option>
                                        <?php $Country_detail = get_table_details('stu_academic_read','Stu_ReadID'); ?>
                                           <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Stu_ReadID']; ?>" <?php if($Country_detail[$i]['Stu_ReadID']==$Profile['Stu_Act_ReadID']){ ?> selected="selected"<?php } ?>>
                                <?php echo $Country_detail[$i]['Stu_ReadName']; ?></option>
                                <?php } ?>
                                    </select>
                                </div>
                                 <span>Listing</span>
                                <div class="frm">
                                     <select name="Stu_Act_ListenID">
                                    	<option value="0">Listening</option>
                                         <?php $Country_detail = get_table_details('stu_academic_listen','Stu_ListenID'); ?>
                                           <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Stu_ListenID']; ?>" <?php if($Country_detail[$i]['Stu_ListenID']==$Profile['Stu_Act_ListenID']){ ?> selected="selected"<?php } ?>>
                                <?php echo $Country_detail[$i]['Stu_ListenName']; ?></option>
                                <?php } ?>
                                        
                                    </select>
                                </div>
                                <span>Speaking</span>
                                <div class="frm">
                                    <select name="Stu_Act_SpeakID">
                                    	<option value="0">Speaking</option>
                                         <?php $Country_detail = get_table_details('stu_academic_speak','Stu_SpeakID'); ?>
                                           <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Stu_SpeakID']; ?>" <?php if($Country_detail[$i]['Stu_SpeakID']==$Profile['Stu_Act_SpeakID']){ ?> selected="selected"<?php } ?>>
                                <?php echo $Country_detail[$i]['Stu_SpeakName']; ?></option>
                                <?php } ?>
                                    </select>
                                </div>
                                <span>Writing</span>
                                <div class="frm">
                                      <select name="Stu_Act_WriteID">
                                    	<option value="0">Writing</option>
                                         <?php $Country_detail = get_table_details('stu_academic_write','Stu_WriteID'); ?>
                                           <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Stu_WriteID']; ?>" <?php if($Country_detail[$i]['Stu_WriteID']==$Profile['Stu_Act_WriteID']){ ?> selected="selected"<?php } ?>>
                                <?php echo $Country_detail[$i]['Stu_WriteName']; ?></option>
                                <?php } ?>
                                    
                                    </select>
                                </div>
                                <span>Years Speaking English</span>
                                <div class="frm">
                                     <select name="Stu_Act_YearSpeakID">
                                    	<option value="0">Years Speaking English</option>
                                        <option value="0">Writing</option>
                                         <?php $Country_detail = get_table_details('stu_academic_yourspeak','Stu_YourSpeakID'); ?>
                                           <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Stu_YourSpeakID']; ?>" <?php if($Country_detail[$i]['Stu_YourSpeakID']==$Profile['Stu_Act_YearSpeakID']){ ?> selected="selected"<?php } ?>>
                                <?php echo $Country_detail[$i]['Stu_YourSpeakName']; ?></option>
                                <?php } ?>
                                    
                                    </select>
                                </div>
                                <span>Years Reading English</span>
                                <div class="frm">
                                    <select name="Stu_Act_YearReadID">
                                    	<option value="0">Years Reading English</option>
                                         <?php $Country_detail = get_table_details('stu_academic_yourwrite','Stu_YourWriteID'); ?>
                                           <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Stu_YourWriteID']; ?>" <?php if($Country_detail[$i]['Stu_YourWriteID']==$Profile['Stu_Act_YearReadID']){ ?> selected="selected"<?php } ?>>
                                <?php echo $Country_detail[$i]['Stu_YourWriteName']; ?></option>
                                <?php } ?>
                                    </select>
                                </div>
                                <span>Years Writing English</span>
                                <div class="frm">
                                      <select name="Stu_Act_YearWriteID">
                                    	<option value="0">Years Writing English</option>
                                        <?php $Country_detail = get_table_details('stu_academic_yourread','Stu_YourReadID'); ?>
                                           <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Stu_YourReadID']; ?>" <?php if($Country_detail[$i]['Stu_YourReadID']==$Profile['Stu_Act_YearWriteID']){ ?> selected="selected"<?php } ?>>
                                <?php echo $Country_detail[$i]['Stu_YourReadName']; ?></option>
                                <?php } ?>
                                    </select>
                                </div>
                                <span>WES Transcript Evaluation</span>
                                <div class="frm">
                                     <select name="Stu_Act_WesID">
                                    	<option value="0">WES Transcript Evaluation</option>
                                        <?php $Country_detail = get_table_details('stu_academic_wes','Stu_WesID'); ?>
                                           <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Stu_WesID']; ?>" <?php if($Country_detail[$i]['Stu_WesID']==$Profile['Stu_Act_WesID']){ ?> selected="selected"<?php } ?>>
                                <?php echo $Country_detail[$i]['Stu_WesName']; ?></option>
                                <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        <div class="cols-small">
                        	<div class="reg-frm pitching-stats">
                             	<h4>Guidance Counselor</h4>
                                <span>Counselor Name</span>
                                <div class="frm">
                                    <input type="text" placeholder="Name" name="Stu_Act_GuName" id="Stu_Act_GuName" value="<?php echo $Profile['Stu_Act_GuName']; ?>">
                                </div>
                                 <span>Counselor Email</span>
                                <div class="frm">
                                    <input type="text" placeholder="Email" name="Stu_Act_GuEmail" value="<?php echo $Profile['Stu_Act_GuEmail']; ?>">
                                </div>
                            </div>
                            <div class="reg-frm pitching-stats">
                             	<h4>Additional Education</h4>
                                <div class="frm">
                                    <div class="added-value">
                                    	Honors Courses
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Stu_Act_Honors" value="1" <?php if($Profile['Stu_Act_Honors']==1){?> checked="checked" <?php } ?>>
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="added-value">
                                    	Post Secondary Courses
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Stu_Act_Post" value="1" <?php if($Profile['Stu_Act_Post']==1){?> checked="checked" <?php } ?>>
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="added-value">
                                    	AP Courses
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Stu_Act_ApCourses" value="1" <?php if($Profile['Stu_Act_ApCourses']==1){?> checked="checked" <?php } ?>>
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <span>Languages</span>
                                <div class="frm">
                                    <input type="text" placeholder="Languages" name="Stu_Act_Languages" <?php if($Profile['Stu_Act_Languages']==1){?> checked="checked" <?php } ?>>
                                </div>
                            </div>
                            <div class="reg-frm pitching-stats">
                             	<h4>Eligibility Center Registration</h4>
                                <div class="frm">
                                    <div class="added-value">
                                    	NCAA
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Stu_Act_Ncaa" value="1" <?php if($Profile['Stu_Act_Ncaa']==1){?> checked="checked" <?php } ?>>
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="added-value">
                                    	NAIA
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Stu_Act_Naia" value="1" <?php if($Profile['Stu_Act_Naia']==1){?> checked="checked" <?php } ?>> 
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="reg-frm pitching-stats">
                                <h4>Intented Field of Interest</h4>
                                <div class="frm">
                                    <select name="Stu_Act_IntendedID" id="Stu_Act_IntendedID" onchange="getIntent(this.value);">
                                    <option value="0">
                                       Intended College
                                    </option>
                                      <?php $Eligibility_Intended_details=get_table_details('stu_eligibility_intended','Eligibility_Intended_ID'); ?>
                            	 <?php for($i=0;$i<count($Eligibility_Intended_details);$i++){ ?>
                            	<option value="<?php echo $Eligibility_Intended_details[$i]['Eligibility_Intended_ID']; ?>" <?php if($Eligibility_Intended_details[$i]['Eligibility_Intended_ID']==$Profile['Stu_Act_IntendedID']){ ?> selected="selected"<?php } ?>>
                                	<?php echo $Eligibility_Intended_details[$i]['Eligibility_Intended_Name']; ?>
                                </option>
                                <?php } ?>
                                </select>
                                </div>
                                
                            </div>
                            
                            <div class="reg-frm pitching-stats">
                             	<h4>Intented Major</h4>
                                <div class="frm">
                                    <select name="Stu_Act_MajorID" id="Stu_Act_MajorID" >
                                    <option value="0">
                                       Major 
                                    </option>
                                </select>
                                </div>
                                
                            </div>
                        </div>
                        <div class="cl"></div>
                        
                    </div>
                    </div>
                </div>
                
                <div class="student-athlete biometric">
                	<div class="reg-title"><a href="javascript:void(0);" onclick="getbiometric();"> <h2>Biometric Player Board</h2></a></div>
                    <div id="biometric" style="display:none;">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-5">
                            	<span>Player Name</span>
                                <input type="text" placeholder="Player Name" name="Stu_Ins_PlayerName" id="Stu_Ins_PlayerName" value="<?php echo $Profile['Stu_Ins_Player']; ?>" >
                            </div>
                            <div class="cols-5">
                            <span>School Name</span>
                            	<input type="text" placeholder="High School Name" name="Stu_Ins_HighSchool" id="Stu_Ins_HighSchool" value="<?php echo $Profile['Stu_Ins_HighSchool']; ?>">
                            </div>
                            <div class="cols-5">
                            <span>City</span>
                            	<input type="text" placeholder="City" name="Stu_Ins_City" id="Stu_Ins_City" value="<?php echo $Profile['Stu_Ins_City']; ?>">
                            </div>
                            <div class="cols-5">
                            <span>State</span>
                            	<input type="text" placeholder="State" name="Stu_Ins_State" id="Stu_Ins_State" value="<?php echo $Profile['Stu_Ins_State']; ?>">
                            </div>
                            <div class="cols-5">
                            <span>Class Of</span>
                            	<input type="text" placeholder="Class of 20" name="Stu_Ins_Class" id="Stu_Ins_Class" value="<?php echo $Profile['Stu_Ins_Class']; ?>">
                            </div>
                        </div>
                     
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-small">
                        	<div class="reg-frm pitching-stats">
                             	<h4>Biometrics</h4>
                                <span>Weight</span>
                                <div class="frm"> 
                                <?php $Gender_details=get_table_details('stu_biometric_weight','Stu_Bio_WeigthID'); ?>
                                <select name="Stu_Ins_Weight" id="Stu_Ins_Weight">
                                    <option value="0">
                                       Weight 
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Bio_WeigthID']; ?>" <?php if($Gender['Stu_Bio_WeigthID']==$Profile['Stu_Ins_Weight']){ ?> selected="selected" <?php } ?> >
                                         	<?php echo $Gender['Stu_Bio_WeightName']; ?>
                                         </option>
                                      <?php } ?>
                                    
                                </select>
                                </div>
                                <div class="frm">
                                <div class="label fl">Height Without Shoes</div>
                                <div class="sub-hight fl">
                                    <?php $Gender_details=get_table_details('stu_biometric_heightwithout',
							'Stu_Bio_HeightWithoutID'); ?>
                                <select name="Stu_Ins_HeightWithout" id="Stu_Ins_HeightWithout">
                                      <option value="0">
                                      	Feet
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Bio_HeightWithoutID']; ?>" <?php if($Gender['Stu_Bio_HeightWithoutID']==$Profile['Stu_Ins_HeightWithout']){ ?> selected="selected" <?php } ?>>
                                         	<?php echo $Gender['Stu_Bio_HeightWithoutName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                            	<div class="sub-hight fr">
                          				 <?php $Gender_details=get_table_details('`stu_biometric_heightwithoutinche`',
							'Stu_Bio_HeightIncheWithoutID'); ?>
                                <select name="Stu_Ins_HeightIncheWithoutID" id="Stu_Ins_HeightIncheWithoutID">
                                      <option value="0">
                                       	Inches
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Bio_HeightIncheWithoutID']; ?>" <?php if($Gender['Stu_Bio_HeightIncheWithoutID']==$Profile['Stu_Ins_HeightIncheWithoutID']){ ?> selected="selected" <?php } ?>>
                                         	<?php echo $Gender['Stu_Bio_HeightIncheWithoutName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                            	</div>
                                
                                </div>
                                <div class="frm">
                                   
                                    <div class="label fl">Height with shoes</div>
                                    <div class="sub-hight fl">
                                         <?php $Gender_details=get_table_details('stu_biometric_height',
							'Stu_Bio_HeigthID'); ?>
                                <select name="Stu_Ins_HeightWith" id="Stu_Ins_HeightWith">
                                     <option value="0">
                                       Feet
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Bio_HeigthID']; ?>"  <?php if($Gender['Stu_Bio_HeigthID']==$Profile['Stu_Ins_HeightWith']){ ?> selected="selected" <?php } ?>>
                                         	<?php echo $Gender['Stu_Bio_HeightName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                    </div>
                                    <div class="sub-hight fr">
                                   <?php $Gender_details=get_table_details('stu_biometric_heightinche',
							'Stu_Bio_HeightIncheID'); ?>
                                <select name="Stu_Ins_HeightIncheWithID" id="Stu_Ins_HeightIncheWithID">
                                     <option value="0">
                                       Inches
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Bio_HeightIncheID']; ?>" <?php if($Gender['Stu_Bio_HeightIncheID']==$Profile['Stu_Ins_HeightIncheWithID']){ ?> selected="selected" <?php } ?>>
                                         	<?php echo $Gender['Stu_Bio_HeightIncheName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                    </div>
                                
                                </div>
                                <div class="frm">
                                    <div class="label fl">Wingspan</div>
                                    <div class="sub-hight fl">
                                     <?php $Gender_details=get_table_details('stu_biometric_wingspan',
                                'Stu_Bio_WingSpanID'); ?>
                                    <select name="Stu_Ins_WingSpan" id="Stu_Ins_WingSpan">
                                        <option value="0">
                                           Feet
                                        </option>
                                         <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Stu_Bio_WingSpanID']; ?>" <?php if($Gender['Stu_Bio_WingSpanID']==$Profile['Stu_Ins_WingSpan']){ ?> selected="selected" <?php } ?>>
                                                <?php echo $Gender['Stu_Bio_WingSpanName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>
                                </div>
                                    <div class="sub-hight fr">
                                 <?php $Gender_details=get_table_details('stu_biometric_wingspaninche',
                                'Stu_Bio_WingSpanIncheID'); ?>
                                    <select name="Stu_Ins_WingSpanIncheID" id="Stu_Ins_WingSpanIncheID">
                                        <option value="0">
                                           Inches
                                        </option>
                                         <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Stu_Bio_WingSpanIncheID']; ?>" <?php if($Gender['Stu_Bio_WingSpanIncheID']==$Profile['Stu_Ins_WingSpanIncheID']){ ?> selected="selected" <?php } ?>>
                                                <?php echo $Gender['Stu_Bio_WingSpanIncheName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>
                                </div>
                                </div>
                                <div class="frm">
                                   <div class="label fl">Hand Width</div>
                                    <div class="sub-hight fl">
                                          <?php $Gender_details=get_table_details('stu_biometric_handwidth',
                                'Stu_Bio_HandWidthID'); ?>
                                    <select name="Stu_Ins_HandWidth" id="Stu_Ins_HandWidth">
                                         <option value="0">
                                          Select
                                        </option>
                                          <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Stu_Bio_HandWidthID']; ?>" <?php if($Gender['Stu_Bio_HandWidthID']==$Profile['Stu_Ins_HandWidth']){ ?> selected="selected" <?php } ?>>
                                                <?php echo $Gender['Stu_Bio_HandWidthName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>
                                    </div>
                                    <div class="sub-hight fr">
                                      <?php $Gender_details=get_table_details('stu_biometric_handwidthinche',
                                'Stu_Bio_HandWidthIncheID'); ?>
                                    <select name="Stu_Ins_HandWidthIncheID" id="Stu_Ins_HandWidthIncheID">
                                         <option value="0">
                                           Select
                                        </option>
                                          <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Stu_Bio_HandWidthIncheID']; ?>" <?php if($Gender['Stu_Bio_HandWidthIncheID']==$Profile['Stu_Ins_HandWidthIncheID']){ ?> selected="selected" <?php } ?>>
                                                <?php echo $Gender['Stu_Bio_HandWidthIncheName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>
                                    </div>
                                </div>
                                  <div class="frm">
                                    <div class="label fl">Hand Length</div>
                                     <div class="sub-hight fl">
                                        <?php $Gender_details=get_table_details('stu_biometric_handlength',
                                'Stu_Bio_HandLengthID'); ?>
                                    <select name="Stu_Ins_HandLength" id="Stu_Ins_HandLength">
                                        <option value="0">
                                           Select
                                        </option>
                                         <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Stu_Bio_HandLengthID']; ?>"  <?php if($Gender['Stu_Bio_HandLengthID']==$Profile['Stu_Ins_HandLength']){ ?> selected="selected" <?php } ?>>
                                                <?php echo $Gender['Stu_Bio_HandLengthName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>
                                    </div>
                                     <div class="sub-hight fr">
                                    <?php $Gender_details=get_table_details('stu_biometric_handlengthinche',
                                'Stu_Bio_HandLengthIncheID'); ?>
                                    <select name="Stu_Ins_HandLengthIncheID" id="Stu_Ins_HandLengthIncheID">
                                        <option value="0">
                                           Select
                                        </option>
                                         <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Stu_Bio_HandLengthIncheID']; ?>" <?php if($Gender['Stu_Bio_HandLengthIncheID']==$Profile['Stu_Ins_HandLengthIncheID']){ ?> selected="selected" <?php } ?>>
                                                <?php echo $Gender['Stu_Bio_HandLengthIncheName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>
                                    </div>
                                </div>
                                  <span>Dominant Hand</span>
                                  <div class="frm">
                                     <?php $Gender_details=get_table_details('stu_biometric_domainthand',
							'Stu_Bio_DomaintHandID'); ?>
                                <select name="Stu_Ins_DominantHand" id="Stu_Ins_DominantHand">
                                       <option value="0">
                                       Dominant Hand
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Bio_DomaintHandID']; ?>" <?php if($Gender['Stu_Bio_DomaintHandID']==$Profile['Stu_Ins_DominantHand']){ ?> selected="selected" <?php } ?>>
                                         	<?php echo $Gender['Stu_Bio_DomaintHandName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                                     <span>Dominant Leg</span>
                                  <div class="frm">
                                 	 <?php $Gender_details=get_table_details('stu_biometric_domainleg',
							'Stu_Bio_DomaintLegID'); ?>
                                <select name="Stu_Ins_DominantLeg" id="Stu_Ins_DominantLeg">
                                    <option value="0">
                                        Dominant Leg
                                    </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Bio_DomaintLegID']; ?>" <?php if($Gender['Stu_Bio_DomaintLegID']==$Profile['Stu_Ins_DominantLeg']){ ?> selected="selected" <?php } ?>>
                                         	<?php echo $Gender['Stu_Bio_DomaintLegName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                                     <span>Body Mass</span>
                                  <div class="frm">
                                      <select name="Stu_Ins_BodyMass" id="Stu_Ins_BodyMass">
                                    <option value="0">
                                        Body Fat Percent
                                    </option>
                                     <?php $Gender_details=get_table_details('stu_body_mass',
							'Stu_Body_MassID'); ?>
                                      	<?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Body_MassID']; ?>" <?php if($Gender['Stu_Body_MassID']==$Profile['Stu_Ins_BodyMass']){ ?> selected="selected" <?php } ?>>
                                         	<?php echo $Gender['Stu_Body_MassName']; ?>
                                         </option>
                                      <?php } ?>
                                     	
                                </select>
                                </div>
                            </div>
                        </div>
						<div class="cols-big">
                        	<div class="reg-frm pitching-stats">
                            	<div class="image-upload">
                                    <span class="uploadimg" id="imagePreview2">
                                        <input type="file" name="Stu_Ins_ImageName" id="Stu_Ins_ImageName">
                                         <?php if($Profile['Stu_Ins_ImageName']!='') { ?>
                                        <img src="<?php echo base_url('register_images/student_athlete/small/'.$Profile['Stu_Ins_ImageName'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                         <img src="<?php echo base_url('images/up-img.png');?>" alt="" id="image2">   <?php } ?>
                                        
                                    </span>
                                </div>
                             	<h4>Endurance</h4>
                                   <span>Push-ups in 1 minute</span>
                                <div class="frm">
                                	<?php $Gender_details=get_table_details('stu_endurance_push',
							'Stu_Endu_PushID'); ?>
                                <select name="Stu_Ins_PushUp" id="Stu_Ins_PushUp">
                                    <option value="0">
                                       Push-ups in 1 minute
                                    </option>
                                    <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Endu_PushID']; ?>" <?php if($Gender['Stu_Endu_PushID']==$Profile['Stu_Ins_PushUp']){ ?> selected="selected" <?php } ?>>
                                         	<?php echo $Gender['Stu_Endu_PushName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                                 <span>Sit-ups in 1 minute</span>
                                <div class="frm">
                                      <?php $Gender_details=get_table_details('stu_endurance_sit',
							'Stu_Endu_SitID'); ?>
                                <select name="Stu_Ins_SitUp" id="Stu_Ins_SitUp">
                                    <option value="0">
                                       Sit-ups in 1 minute
                                    </option>
                                    <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Endu_SitID']; ?>" <?php if($Gender['Stu_Endu_SitID']==$Profile['Stu_Ins_SitUp']){ ?> selected="selected" <?php } ?>>
                                         	<?php echo $Gender['Stu_Endu_SitName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                                 <span>Pull-ups in 1 minute</span>
                                <div class="frm">
                                     <?php $Gender_details=get_table_details('stu_endurance_pull',
							'Stu_Endu_PullID'); ?>
                                <select name="Stu_Ins_PullUp" id="Stu_Ins_PullUp">
                                    <option value="0">
                                        Pull-ups in 1 minute
                                    </option>
                                     <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Endu_PullID']; ?>" <?php if($Gender['Stu_Endu_PullID']==$Profile['Stu_Ins_PullUp']){ ?> selected="selected" <?php } ?>>
                                         	<?php echo $Gender['Stu_Endu_PullName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                            </div>
                            
                        </div>
                        <div class="cols-small">
                        	<div class="reg-frm pitching-stats">
                             	<h4>Strength</h4>
                                <div class="frm">
                                    <div class="label fl">Vertical Jump</div>
                                    <div class="sub-hight fl">
                                      <?php $Gender_details=get_table_details('stu_strength_vertical',
                                        'Stu_Stre_VerticalID'); ?>
                                            <select name="Stu_Ins_Vertical" id="Stu_Ins_Vertical">
                                                <option value="0">
                                                   Select
                                                </option>
                                                <?php foreach($Gender_details as $Gender){ ?>
                                                     <option value="<?php echo $Gender['Stu_Stre_VerticalID']; ?>" <?php if($Gender['Stu_Stre_VerticalID']==$Profile['Stu_Ins_Vertical']){ ?> selected="selected" <?php } ?>>
                                                        <?php echo $Gender['Stu_Stre_VerticalName']; ?>
                                                     </option>
                                                  <?php } ?>
                                            </select>
                                    </div>
                                    <div class="sub-hight fr">
                                         <?php $Gender_details=get_table_details('stu_strength_verticalinche',
                                        'Stu_Stre_VerticalIncheID'); ?>
                                            <select name="Stu_Ins_VerticalIncheID" id="Stu_VerticalIncheID">
                                                <option value="0">
                                                   Select
                                                </option>
                                                <?php foreach($Gender_details as $Gender){ ?>
                                                     <option value="<?php echo $Gender['Stu_Stre_VerticalIncheID']; ?>" <?php if($Gender['Stu_Stre_VerticalIncheID']==$Profile['Stu_Ins_VerticalIncheID']){ ?> selected="selected" <?php } ?>>
                                                        <?php echo $Gender['Stu_Stre_VerticalIncheName']; ?>
                                                     </option>
                                                  <?php } ?>
                                            </select>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="label fl">Standing Long Jump</div>
                                    <div class="sub-hight fl">
                                          <?php $Gender_details=get_table_details('stu_strength_stand',
                                    'Stu_Stre_StandID'); ?>
                                        <select name="Stu_Ins_Standing" id="Stu_Ins_Standing">
                                            <option value="0">
                                               Feet
                                            </option>
                                             <?php foreach($Gender_details as $Gender){ ?>
                                                 <option value="<?php echo $Gender['Stu_Stre_StandID']; ?>" <?php if($Gender['Stu_Stre_StandID']==$Profile['Stu_Ins_Standing']){ ?> selected="selected" <?php } ?>>
                                                    <?php echo $Gender['Stu_Stre_StandName']; ?>
                                                 </option>
                                              <?php } ?>
                                        </select>
                                    </div>
                                    <div class="sub-hight fr">
                                         <?php $Gender_details=get_table_details('stu_strength_standinche',
                                    'Stu_Stre_StandIncheID'); ?>
                                        <select name="Stu_Ins_StandIncheingID" id="Stu_Ins_StandIncheingID">
                                            <option value="0">
                                                Inches
                                            </option>
                                             <?php foreach($Gender_details as $Gender){ ?>
                                                 <option value="<?php echo $Gender['Stu_Stre_StandIncheID']; ?>" <?php if($Gender['Stu_Stre_StandIncheID']==$Profile['Stu_Ins_StandIncheingID']){ ?> selected="selected" <?php } ?>>
                                                    <?php echo $Gender['Stu_Stre_StandIncheName']; ?>
                                                 </option>
                                              <?php } ?>
                                        </select>
                                    </div>

                                </div>
                                <span>Power Clean Max</span>
                                <div class="frm">
                                    <?php $Gender_details=get_table_details('stu_strength_powerclean',
							'Stu_Stre_PowerID'); ?>
                                <select name="Stu_Ins_PowerClean" id="Stu_Ins_PowerClean">
                                    <option value="0">
                                        Power Clean Max
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Stre_PowerID']; ?>" <?php if($Gender['Stu_Stre_PowerID']==$Profile['Stu_Ins_PowerClean']){ ?> selected="selected" <?php } ?>>
                                         	<?php echo $Gender['Stu_Stre_PowerName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                                 <span>Bench Press Max</span>
                                <div class="frm">
                                      <?php $Gender_details=get_table_details('stu_strength_bench',
							'Stu_Stre_BenchID'); ?>
                                <select name="Stu_Ins_Bench" id="Stu_Ins_Bench">
                                    <option value="0">
                                       Bench Press Max
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Stre_BenchID']; ?>" <?php if($Gender['Stu_Stre_BenchID']==$Profile['Stu_Ins_Bench']){ ?> selected="selected" <?php } ?>>
                                         	<?php echo $Gender['Stu_Stre_BenchName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                                 <span>Squat Max</span>
                                <div class="frm">
                                      <?php $Gender_details=get_table_details('stu_strength_squat',
							'Stu_Stre_SquatID'); ?>
                                <select name="Stu_Ins_Squal" id="Stu_Ins_Squal">
                                    <option value="0">
                                        Squat Max
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Stre_SquatID']; ?>" <?php if($Gender['Stu_Stre_SquatID']==$Profile['Stu_Ins_Squal']){ ?> selected="selected" <?php } ?>>
                                         	<?php echo $Gender['Stu_Stre_SquatName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                            </div>
                            <div class="reg-frm pitching-stats">
                             	<h4>Flexibility</h4>
                                <div class="frm">
                                   <div class="frm">
                                    <div class="label fl">Sit and Reach</div>
                                    <div class="sub-hight fl">
                                      <?php $Gender_details=get_table_details('stu_flexibility_sit',
                                        'Stu_Fle_SitID'); ?>
                                            <select name="Stu_Ins_Sit" id="Stu_Ins_Sit">
                                                <option value="0">
                                                    Select
                                                </option>
                                                <?php foreach($Gender_details as $Gender){ ?>
                                                     <option value="<?php echo $Gender['Stu_Fle_SitID']; ?>" <?php if($Gender['Stu_Fle_SitID']==$Profile['Stu_Ins_Sit']){ ?> selected="selected" <?php } ?>>
                                                        <?php echo $Gender['Stu_Fle_SitName']; ?>
                                                     </option>
                                                  <?php } ?>
                                            </select>
                                    </div>
                                    <div class="sub-hight fr">
                                         <?php $Gender_details=get_table_details('stu_flexibility_reach',
                                        'Stu_Fle_ReachID'); ?>
                                            <select name="Stu_Ins_Reach" id="Stu_Ins_Reach">
                                                <option value="0">
                                                    Select
                                                </option>
                                                <?php foreach($Gender_details as $Gender){ ?>
                                                     <option value="<?php echo $Gender['Stu_Fle_ReachID']; ?>"  <?php if($Gender['Stu_Fle_ReachID']==$Profile['Stu_Ins_Reach']){ ?> selected="selected" <?php } ?>>
                                                        <?php echo $Gender['Stu_Fle_ReachName']; ?>
                                                     </option>
                                                  <?php } ?>
                                            </select>
                                    </div>
                                </div>
                                 
                                </div>
                                <div class="frm">
                                    
                                    <div class="label fl"> Back Scratch Test</div>
                                    <div class="sub-hight fl">
                                         <?php $Gender_details=get_table_details('stu_flexibility_back',
                                        'Stu_Fle_BackID'); ?>
                                            <select name="Stu_Ins_Back" id="Stu_Ins_Back">
                                                <option value="0">
                                                    Select 
                                                </option>
                                                <?php foreach($Gender_details as $Gender){ ?>
                                                     <option value="<?php echo $Gender['Stu_Fle_BackID']; ?>"  <?php if($Gender['Stu_Fle_BackID']==$Profile['Stu_Ins_Back']){ ?> selected="selected" <?php } ?>>
                                                        <?php echo $Gender['Stu_Fle_BackName']; ?>
                                                     </option>
                                                  <?php } ?>
                                            </select>
                                    </div>
                                    
                                    <div class="sub-hight fr">
                                      <?php $Gender_details=get_table_details('stu_flexibility_scartch',
                                        'Stu_Fle_ScartchID'); ?>
                                            <select name="Stu_Ins_BackScratch" id="Stu_Ins_BackScratch">
                                                <option value="0">
                                                    Select
                                                </option>
                                                <?php foreach($Gender_details as $Gender){ ?>
                                                     <option value="<?php echo $Gender['Stu_Fle_ScartchID']; ?>" <?php if($Gender['Stu_Fle_ScartchID']==$Profile['Stu_Ins_BackScratch']){ ?> selected="selected" <?php } ?>>
                                                        <?php echo $Gender['Stu_Fle_ScartchName']; ?>
                                                     </option>
                                                  <?php } ?>
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="reg-frm pitching-stats">
                             	<h4>Speed</h4>
                                <div class="frm">
                                     <div class="label fl">40 Yard Dash</div>
                                <div class="sub-hight fl">
                                   <?php $Gender_details=get_table_details('stu_speed_yard',
							'Stu_Speed_YardID'); ?>
                                <select name="Stu_Ins_Yard" id="Stu_Ins_Yard">
                                    <option value="0">
                                       Select
                                    </option>
                                    <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Speed_YardID']; ?>" <?php if($Gender['Stu_Speed_YardID']==$Profile['Stu_Ins_Yard']){ ?> selected="selected" <?php } ?>>
                                         	<?php echo $Gender['Stu_Speed_YardName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                                <div class="sub-hight fr">
                               <?php $Gender_details=get_table_details('stu_speed_yardinche',
							'Stu_Speed_YardIncheID'); ?>
                                <select name="Stu_Ins_YardIncheID" id="Stu_Ins_YardIncheID">
                                    <option value="0">
                                       Select
                                    </option>
                                    <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Stu_Speed_YardIncheID']; ?>" <?php if($Gender['Stu_Speed_YardIncheID']==$Profile['Stu_Ins_YardIncheID']){ ?> selected="selected" <?php } ?>>
                                         	<?php echo $Gender['Stu_Speed_YardIncheName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                </div>
                                </div>
                                <div class="frm">
                                    <div class="label fl">60 Yard Dash</div>
                                    <div class="sub-hight fl">
                                       <?php $Gender_details=get_table_details('stu_speed_yarddash',
                                'Stu_Speed_YardDashID'); ?>
                                    <select name="Stu_Ins_YardDash" id="Stu_Ins_YardDash">
                                        <option value="0">
                                           Select
                                        </option>
                                         <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Stu_Speed_YardDashID']; ?>" <?php if($Gender['Stu_Speed_YardDashID']==$Profile['Stu_Ins_YardDash']){ ?> selected="selected" <?php } ?>>
                                                <?php echo $Gender['Stu_Speed_YardDashName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>
                                    </div>
                                    <div class="sub-hight fr">
                                        <?php $Gender_details=get_table_details('stu_speed_yarddashinche',
                                'Stu_Speed_YardDashIncheID'); ?>
                                    <select name="Stu_Ins_YardDashIncheID" id="Stu_Ins_YardDashIncheID">
                                        <option value="0">
                                           Select
                                        </option>
                                         <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Stu_Speed_YardDashIncheID']; ?>" <?php if($Gender['Stu_Speed_YardDashIncheID']==$Profile['Stu_Ins_YardDashIncheID']){ ?> selected="selected" <?php } ?>>
                                                <?php echo $Gender['Stu_Speed_YardDashIncheName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>	
                                    </div>  
                                </div>
                                <div class="frm">
                                    <div class="label fl">Mile Run</div>
                                    <div class="sub-hight fl">
                                        <?php $Gender_details=get_table_details('stu_speed_mile',
                                'Stu_Speed_MileID'); ?>
                                    <select name="Stu_Ins_Mile" id="Stu_Ins_Mile">
                                        <option value="0">
                                            Minutes
                                        </option>
                                         <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Stu_Speed_MileID']; ?>" <?php if($Gender['Stu_Speed_MileID']==$Profile['Stu_Ins_Mile']){ ?> selected="selected" <?php } ?>>
                                                <?php echo $Gender['Stu_Speed_MileName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>
                                    </div>
                                    <div class="sub-hight fr">
                                        <?php $Gender_details=get_table_details('stu_speed_mileinche',
                                'Stu_Speed_MileIncheID'); ?>
                                    <select name="Stu_Ins_MileIncheRunID" id="Stu_Ins_MileIncheRunID">
                                        <option value="0">
                                            Seconds
                                        </option>
                                         <?php foreach($Gender_details as $Gender){ ?>
                                             <option value="<?php echo $Gender['Stu_Speed_MileIncheID']; ?>" <?php if($Gender['Stu_Speed_MileIncheID']==$Profile['Stu_Ins_MileIncheRunID']){ ?> selected="selected" <?php } ?>>
                                                <?php echo $Gender['Stu_Speed_MileIncheName']; ?>
                                             </option>
                                          <?php } ?>
                                    </select>
                                    </div>

                                </div>
                            </div>
                        </div>
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
function getbiometric()
{
	$('#biometric').slideToggle();	
}

function getacedmic()
{
	$('#acedmic').slideToggle();	
}
 function check_stu_validation()
  {
	 var sucess = true;
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
		 if($('#Stu_SchoolName').val()=='')
		 {
			
			$('#Stu_SchoolName').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Stu_SchoolName').css('border','1px solid #a4a4a4');
			}
			
		if($('#Stu_CountryID').val()=='0')
		 {
			
			$('#Stu_CountryID').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Stu_CountryID').css('border','1px solid #a4a4a4');
			}
		
		if($('#Stu_State').val()=='0')
		 {
			
			$('#Stu_State').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Stu_State').css('border','1px solid #a4a4a4');
			}
		if($('#Stu_City').val()=='')
		 {
			
			$('#Stu_City').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Stu_City').css('border','1px solid #a4a4a4');
			}			
			
		if($('#Stu_GenderID').val()=='0')
		 {
			
			$('#Stu_GenderID').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Stu_GenderID').css('border','1px solid #a4a4a4');
			}	
			
		if($('#Stu_ZipCode').val()=='')
		 {
			$('#Stu_ZipCode').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Stu_ZipCode').css('border','1px solid #a4a4a4');
			}
		if($('#Stu_ClassID').val()=='0')
		 {
			$('#Stu_ClassID').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Stu_ClassID').css('border','1px solid #a4a4a4');
			}						
		if($('#Stu_HeightID').val()=='0')
		 {
			$('#Stu_HeightID').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Stu_HeightID').css('border','1px solid #a4a4a4');
			}
		
		if($('#Stu_InchesID').val()=='0')
		 {
			$('#Stu_InchesID').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Stu_InchesID').css('border','1px solid #a4a4a4');
			}	
		
		if($('#Stu_WeightID').val()=='0')
		 {
			$('#Stu_WeightID').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Stu_WeightID').css('border','1px solid #a4a4a4');
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
		
		 if ($('#Stu_Act_Player').val()=='')
		 {
		  $('#Stu_Act_Player').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Act_Player').css('border','1px solid #a4a4a4');
		 }
		 
		 if ($('#Stu_Act_HighSchool').val()=='')
		 {
		  $('#Stu_Act_HighSchool').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Act_HighSchool').css('border','1px solid #a4a4a4');
		 }
		 
		 if ($('#Stu_Act_City').val()=='')
		 {
		  $('#Stu_Act_City').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Act_City').css('border','1px solid #a4a4a4');
		 }
		 
		 if ($('#Stu_Act_State').val()=='')
		 {
		  $('#Stu_Act_State').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Act_State').css('border','1px solid #a4a4a4');
		 }
				
			
			if ($('#Stu_Ins_PlayerName').val()=='')
		 {
		  $('#Stu_Ins_PlayerName').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Ins_PlayerName').css('border','1px solid #a4a4a4');
		 }
		 
		 if ($('#Stu_Ins_HighSchool').val()=='')
		 {
		  $('#Stu_Ins_HighSchool').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Ins_HighSchool').css('border','1px solid #a4a4a4');
		 }
		 
		 if ($('#Stu_Ins_City').val()=='')
		 {
		  $('#Stu_Ins_City').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Ins_City').css('border','1px solid #a4a4a4');
		 }
		 
		 if ($('#Stu_Ins_State').val()=='')
		 {
		  $('#Stu_Ins_State').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Ins_State').css('border','1px solid #a4a4a4');
		 }
		 
		 if ($('#Stu_Ins_Class').val()=='')
		 {
		  $('#Stu_Ins_Class').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Ins_Class').css('border','1px solid #a4a4a4');
		 }
		 
		 
		 if ($('#Stu_Ins_Weight').val()=='0')
		 {
		  $('#Stu_Ins_Weight').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Ins_Weight').css('border','1px solid #a4a4a4');
		 }
		 
		 
		 
		 
		 
		 if ($('#Stu_Ins_Vertical').val()=='0')
		 {
		  $('#Stu_Ins_Vertical').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Ins_Vertical').css('border','1px solid #a4a4a4');
		 }
		 
		 if ($('#Stu_VerticalIncheID').val()=='0')
		 {
		  $('#Stu_VerticalIncheID').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_VerticalIncheID').css('border','1px solid #a4a4a4');
		 }
		 
		 
		 if ($('#Stu_Ins_HeightIncheWithID').val()=='0')
		 {
		  $('#Stu_Ins_HeightIncheWithID').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Ins_HeightIncheWithID').css('border','1px solid #a4a4a4');
		 }
		 
		 if ($('#Stu_Ins_HeightIncheWithoutID').val()=='0')
		 {
		  $('#Stu_Ins_HeightIncheWithoutID').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Ins_HeightIncheWithoutID').css('border','1px solid #a4a4a4');
		 }
		 
		 if ($('#Stu_Ins_HeightWith').val()=='0')
		 {
		  $('#Stu_Ins_HeightWith').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Ins_HeightWith').css('border','1px solid #a4a4a4');
		 }
		 
		 if ($('#Stu_Ins_HeightWithout').val()=='0')
		 {
		  $('#Stu_Ins_HeightWithout').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Ins_HeightWithout').css('border','1px solid #a4a4a4');
		 }
		 
		 
		 if ($('#Stu_Ins_HeightWith').val()=='0')
		 {
		  $('#Stu_Ins_HeightWith').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Ins_HeightWith').css('border','1px solid #a4a4a4');
		 }
		 
		 if ($('#Stu_Ins_DominantHand').val()=='0')
		 {
		  $('#Stu_Ins_DominantHand').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Ins_DominantHand').css('border','1px solid #a4a4a4');
		 }
		 
		 if ($('#Stu_Ins_DominantLeg').val()=='0')
		 {
		  $('#Stu_Ins_DominantLeg').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Ins_DominantLeg').css('border','1px solid #a4a4a4');
		 }
		 
		 
		 
		 
		 if ($('#Stu_Ins_Yard').val()=='0')
		 {
		  $('#Stu_Ins_Yard').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Ins_Yard').css('border','1px solid #a4a4a4');
		 }
		 if ($('#Stu_Ins_YardIncheID').val()=='0')
		 {
		  $('#Stu_Ins_YardIncheID').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Ins_YardIncheID').css('border','1px solid #a4a4a4');
		 }
		 
		 
		 if ($('#Stu_Ins_Mile').val()=='0')
		 {
		  $('#Stu_Ins_Mile').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Ins_Mile').css('border','1px solid #a4a4a4');
		 }
		 if ($('#Stu_Ins_MileIncheRunID').val()=='0')
		 {
		  $('#Stu_Ins_MileIncheRunID').css('border','1px solid red');
		  sucess = false;
		 } else {
		  $('#Stu_Ins_MileIncheRunID').css('border','1px solid #a4a4a4');
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
  
function getIntent(MajorID)
{
	$("#Stu_Act_MajorID").html("<option>Loading...</option>");
	 $.ajax({
     type: "POST",
     url: "<?php echo base_url(); ?>termcondition/check_major/",
     data: {MajorID:MajorID},
     cache: false,
     success: function(result){
       		$("#Stu_Act_MajorID").html("");
			$("#Stu_Act_MajorID").append(result);
	 }
     });
}

$(document).ready(function(e) {
    var IntendID='<?php echo $Profile['Stu_Act_IntendedID']; ?>'; 
	var MajorID='<?php echo $Profile['Stu_Act_MajorID']; ?>'; 
	if(IntendID!='0')
	{
		$("#Stu_Act_MajorID").html("<option>Loading...</option>");
		 $.ajax({
		 type: "POST",
		 url: "<?php echo base_url(); ?>termcondition/check_Intent/",
		 data: {IntendID:IntendID,MajorID:MajorID},
		 cache: false,
		 success: function(result){
				$("#Stu_Act_MajorID").html("");
				$("#Stu_Act_MajorID").append(result);
		 }
		 });
	}
});
$(function() {
    $("#Stu_Act_ImageName").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){
			 // set image data as background of div
			   $("#image1").hide();
                $("#imagePreview1").css("background-image", "url("+this.result+")");
            }
        }
    });
});  

$(function() {
    $("#Stu_Ins_ImageName").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){
			 // set image data as background of div
			   $("#image2").hide();
                $("#imagePreview2").css("background-image", "url("+this.result+")");
            }
        }
    });
});  
</script>    


