<div id="academic-board" class="zoom-anim-dialog card-popup">
    	<div class="card-headin clearfix">
        	<div class="head-left">
            	<div class="head-row">
                	<h6>High School Name : <span><?php echo $bio_info['Juco_Act_HighSchool']; ?></span></h6>
                    <h6>Class of 20 : <span><?php echo $bio_info['Juco_Act_Class']; ?></span></h6>
                </div>
            </div>
            <div class="head-right">
            	<div class="head-row">
                	<h6>City : <span><?php echo $bio_info['Juco_Act_City']; ?></span></h6>
                    <h6>State : <span><?php echo $bio_info['Juco_Act_State']; ?></span></h6>
                </div>
            </div>
            <div class="main-head">
            	<h3>Academic Board</h3>
                <p> <?php echo $bio_info['Juco_Act_Player']; ?></p>
            </div>
            
        </div>
        <div class="card-content clearfix">
        	<div class="left-content">
            	<div class="card-details">
                	<h4>Education</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>ACT Score</h6>
                           <?php if($bio_info['Juco_Act_ActScore']!='0') { ?>
                             <?php $getdata=get_row_data('stu_education_act','EducationID',$bio_info['Juco_Act_ActScore']); ?>
                            <span><?php echo $getdata['EducationName']; ?></span>
                            <?php } ?>
                        </li>
                        <li class="clearfix">
                            <h6>SAT Score</h6>
                             <?php if($bio_info['Juco_Act_SatScore']!='0') { ?>
                             <?php $getdata=get_row_data('stu_education_sat','Education_sat_ID',$bio_info['Juco_Act_SatScore']); ?>
                            <span><?php echo $getdata['Education_sat_Name']; ?></span>
                            <?php } ?>
                        </li>
                        <li class="clearfix">
                            <h6>GPA</h6>
                              <?php if($bio_info['Juco_Act_Gpa']!='0') { ?>
                             <?php $getdata=get_row_data('stu_education_gpa','Education_gpa_ID',$bio_info['Juco_Act_Gpa']); ?>
                            <span><?php echo $getdata['Education_gpa_Name']; ?></span>
                            <?php } ?>
                        </li>
                        <li class="clearfix">
                            <h6>Core GPA</h6>
                              <?php if($bio_info['Juco_Act_CoreGpa']!='0') { ?>
                             <?php $getdata=get_row_data('stu_education_core_gpa','Education_Core_Gpa_ID',$bio_info['Juco_Act_CoreGpa']); ?>
                            <span><?php echo $getdata['Education_Core_Gpa_Name']; ?></span>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
                <div class="card-details">
                	<h4>Extracurricular Activities</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Arts</h6>
                            <span><?php if($bio_info['Juco_Act_Arts']==0) { echo "No"; }  else {echo "Yes"; }?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Religion</h6>
                            <span><?php if($bio_info['Juco_Act_Religion']==0) { echo "No"; }  else {echo "Yes"; }?> </span>
                        </li>
                        <li class="clearfix">
                            <h6>Clubs/organizations</h6>
                            <span><?php if($bio_info['Juco_Act_Clubs']==0) { echo "No"; }  else {echo "Yes"; }?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Community Service</h6>
                            <span><?php if($bio_info['Juco_Act_Community']==0) { echo "No"; }  else {echo "Yes"; }?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Student Goverment</h6>
                            <span><?php if($bio_info['Juco_Act_Goverment']==0) { echo "No"; }  else {echo "Yes"; }?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Media / Newspaper</h6>
                            <span><?php if($bio_info['Juco_Act_Media']==0) { echo "No"; }  else {echo "Yes"; }?></span>
                        </li>
                        <li class="clearfix">
                            <h6>MIlitary R.O.T.C</h6>
                            <span><?php if($bio_info['Juco_Act_Military']==0) { echo "No"; }  else {echo "Yes"; }?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Music</h6>
                            <span><?php if($bio_info['Juco_Act_Music']==0) { echo "No"; }  else {echo "Yes"; }?></span>
                        </li>
                         <li class="clearfix">
                            <h6>Other</h6>
                            <span><?php echo $bio_info['Juco_Act_Other']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="center-content">
            	<div class="card-img">
               		
                	<?php if($bio_info['Juco_Act_ImageName']!= "") { ?>
				         <img src="<?php echo base_url(); ?>register_images/juco_transfer/small/<?php echo $bio_info['Juco_Act_ImageName']; ?>" alt="">
					 <?php } else { ?>
                    <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
                	<?php } ?>
                </div>
                <div class="card-details inter-stud">
                	<h4>International Students</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                           <?php if($bio_info['Juco_Act_TofelScoreID']!='0') { ?>
                             <?php $getdata=get_row_data('stu_academic_tofel','Stu_TofelID',$bio_info['Juco_Act_TofelScoreID']); ?>
                            <?php echo $getdata['Stu_TofelName']; ?>
                            <?php } ?>
                        </li>
                        <li class="clearfix">
                           <?php if($bio_info['Juco_Act_ReadID']!='0') { ?>
                             <?php $getdata=get_row_data('stu_academic_read','Stu_ReadID',$bio_info['Juco_Act_ReadID']); ?>
                            <?php echo $getdata['Stu_ReadName']; ?>
                            <?php } ?>
                        </li>
                        <li class="clearfix">
                            <?php if($bio_info['Juco_Act_ListenID']!='0') { ?>
                             <?php $getdata=get_row_data('stu_academic_listen','Stu_ListenID',$bio_info['Juco_Act_ListenID']); ?>
                            <?php echo $getdata['Stu_ListenName']; ?>
                            <?php } ?>
                        </li>
                         <li class="clearfix">
                             <?php if($bio_info['Juco_Act_SpeakID']!='0') { ?>
                             <?php $getdata=get_row_data('stu_academic_speak','Stu_SpeakID',$bio_info['Juco_Act_SpeakID']); ?>
                            <?php echo $getdata['Stu_SpeakName']; ?>
                            <?php } ?>
                        </li>
                        <li class="clearfix">
                           <?php if($bio_info['Juco_Act_WriteID']!='0') { ?>
                             <?php $getdata=get_row_data('stu_academic_write','Stu_WriteID',$bio_info['Juco_Act_WriteID']); ?>
                            <?php echo $getdata['Stu_WriteName']; ?>
                            <?php } ?>
                        </li>
                        <li class="clearfix">
                           <?php if($bio_info['Juco_Act_YearSpeakID']!='0') { ?>
                             <?php $getdata=get_row_data('stu_academic_yourspeak','Stu_YourSpeakID',$bio_info['Juco_Act_YearSpeakID']); ?>
                            <?php echo $getdata['Stu_YourSpeakName']; ?>
                            <?php } ?>
                        </li>
                         <li class="clearfix">
                            <?php if($bio_info['Juco_Act_YearReadID']!='0') { ?>
                             <?php $getdata=get_row_data('stu_academic_yourwrite','Stu_YourWriteID',$bio_info['Juco_Act_YearReadID']); ?>
                            <?php echo $getdata['Stu_YourWriteName']; ?>
                            <?php } ?>
                        </li>
                        <li class="clearfix">
                            <?php if($bio_info['Juco_Act_YearWriteID']!='0') { ?>
                             <?php $getdata=get_row_data('stu_academic_yourread','Stu_YourReadID',$bio_info['Juco_Act_YearWriteID']); ?>
                            <?php echo $getdata['Stu_YourReadName']; ?>
                            <?php } ?>
                        </li>
                        <li class="clearfix">
                           <?php if($bio_info['Juco_Act_WesID']!='0') { ?>
                             <?php $getdata=get_row_data('stu_academic_wes','Stu_WesID',$bio_info['Juco_Act_WesID']); ?>
                            <?php echo $getdata['Stu_WesName']; ?>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-content">
            	<div class="card-details">
                	<h4>Guidance Counselor</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Name</h6>
                            <span><?php echo $bio_info['Juco_Act_GuName']; ?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Email</h6>
                            <span><?php echo $bio_info['Juco_Act_GuEmail']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details flexibility">
                	<h4>Additional Education</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Honors Courses</h6>
                            <span><?php if($bio_info['Juco_Act_Honors']==0) { echo "No"; }  else {echo "Yes"; }?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Post Secondary Courses</h6>
                            <span><?php if($bio_info['Juco_Act_Post']==0) { echo "No"; }  else {echo "Yes"; }?></span>
                        </li>
                        <li class="clearfix">
                            <h6>AP Courses</h6>
                            <span><?php if($bio_info['Juco_Act_ApCourses']==0) { echo "No"; }  else {echo "Yes"; }?></span>
                        </li>
                        <li class="clearfix">
                            <h6>Languages</h6>
                            <span><?php echo $bio_info['Juco_Act_Languages']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-details flexibility">
                	<h4>Eligibility Center Registration</h4>
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>NCAA</h6>
                            <span><?php if($bio_info['Juco_Act_Ncaa']==0) { echo "No"; }  else {echo "Yes"; }?></span>
                        </li>
                        <li class="clearfix">
                            <h6>NAIA</h6>
                            <span><?php if($bio_info['Juco_Act_Naia']==0) { echo "No"; }  else {echo "Yes"; }?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>