<section class="content">
 <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="student-athlete biometric">
                	<div class="reg-title"><h2>Academic Board</h2></div>
                     <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>juco_transfer/insert_step4" onsubmit="return getJucodent_data();">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-5">
                            	<input type="text" placeholder="Player Name" name="Juco_Act_Player" id="Juco_Act_Player">               
                            </div>
                            <div class="cols-5">
                            	<input type="text" placeholder="High School Name" name="Juco_Act_HighSchool" id="Juco_Act_HighSchool">
                            </div>
                            <div class="cols-5">
                            	<input type="text" placeholder="City" name="Juco_Act_City" id="Juco_Act_City">
                            </div>
                            <div class="cols-5">
                            	<input type="text" placeholder="State" name="Juco_Act_State" id="Juco_Act_State">
                            </div>
                            <div class="cols-5">
                            	<input type="text" placeholder="Class of 20" name="Juco_Act_Class">
                            </div>
                        </div>
                        
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-small">
                        	<div class="reg-frm pitching-stats">
                             	<h4>Education</h4>
                                <div class="frm">
                                 <select name="Juco_Act_ActScore" id="Juco_Act_ActScore">
                                    <option value="0">
                                        ACT Score
                                    </option>
                                       <?php $Education_details=get_table_details('stu_education_act','EducationID'); ?>
                            	 <?php for($i=0;$i<count($Education_details);$i++){ ?>
                            	<option value="<?php echo $Education_details[$i]['EducationID']; ?>">
                                	<?php echo $Education_details[$i]['EducationName']; ?>
                                </option>
                                <?php } ?>
                                </select>
                                </div>
                                <div class="frm">
                                   <select name="Juco_Act_SatScore" id="Juco_Act_SatScore">
                                    <option value="0">
                                       SAT Score
                                    </option>
                                      <?php $Education_details_sat=get_table_details('stu_education_sat','Education_sat_ID'); ?>
                            	 <?php for($i=0;$i<count($Education_details_sat);$i++){ ?>
                            	<option value="<?php echo $Education_details_sat[$i]['Education_sat_ID']; ?>">
                                	<?php echo $Education_details_sat[$i]['Education_sat_Name']; ?>
                                </option>
                                <?php } ?>
                                </select>
                                	
                                </div>
                                <div class="frm">
                                    <select name="Juco_Act_Gpa" id="Juco_Act_Gpa"> 
                                    <option value="0">
                                      GPA
                                    </option>
                                        <?php $Education_gpa_details=get_table_details('stu_education_gpa','Education_gpa_ID'); ?>
                            	 <?php for($i=0;$i<count($Education_gpa_details);$i++){ ?>
                            	<option value="<?php echo $Education_gpa_details[$i]['Education_gpa_ID']; ?>">
                                	<?php echo $Education_gpa_details[$i]['Education_gpa_Name']; ?>
                                </option>
                                <?php } ?>
                                </select>
                                </div>
                                <div class="frm">
                                     <select name="Juco_Act_CoreGpa" id="Juco_Act_CoreGpa">
                                    <option value="0">
                                      Core GPA
                                    </option>
                                     <?php $Education_Core_Gpa_details=get_table_details('stu_education_core_gpa','Education_Core_Gpa_ID'); ?>
              
                            	 <?php for($i=0;$i<count($Education_Core_Gpa_details);$i++){ ?>
                            	<option value="<?php echo $Education_Core_Gpa_details[$i]['Education_Core_Gpa_ID']; ?>">
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
                                        	<input type="checkbox" name="Juco_Act_Arts" value="1">
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="added-value">
                                    	Religion
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Juco_Act_Religion" value="1">
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="added-value">
                                    	Clubs/organizations
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Juco_Act_Clubs" value="1">
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="added-value">
                                    	Community Service
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Juco_Act_Community" value="1">
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="added-value">
                                    	Jucodent Goverment
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Juco_Act_Goverment" value="1">
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="added-value">
                                    	Media / Newspaper
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Juco_Act_Media" value="1">
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="added-value">
                                    	MIlitary R.O.T.C
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Juco_Act_Military" value="1">
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="added-value">
                                    	Music
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Juco_Act_Music" value="1">
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Other" name="Juco_Act_Other" >
                                </div>
                            </div>
                        </div>
						<div class="cols-big">
                        	<div class="reg-frm pitching-stats">
                            	<div class="image-upload">
                                    <span class="uploadimg" id="imagePreview1">
                                        <input type="file" name="Juco_Act_ImageName" id="Juco_Act_ImageName">
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  
                                    </span>
                                </div>
                             	<h4>International Students</h4>
                                <div class="frm">
                                    <select name="Juco_Act_TofelScoreID" id="Juco_Act_TofelScoreID">
                                    	<option value="0">TOEFL Score  Total</option>
                                         <?php $Country_detail = get_table_details('stu_academic_tofel','Stu_TofelID'); ?>
                                           <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Stu_TofelID']; ?>">
                                <?php echo $Country_detail[$i]['Stu_TofelName']; ?></option>
                                <?php } ?>
                                    </select>
                                </div>
                                <div class="frm">
                                      <select name="Juco_Act_ReadID">
                                    	<option value="0">Reading</option>
                                        <?php $Country_detail = get_table_details('stu_academic_read','Stu_ReadID'); ?>
                                           <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Stu_ReadID']; ?>">
                                <?php echo $Country_detail[$i]['Stu_ReadName']; ?></option>
                                <?php } ?>
                                    </select>
                                </div>
                                <div class="frm">
                                     <select name="Juco_Act_ListenID">
                                    	<option value="0">LIstening</option>
                                         <?php $Country_detail = get_table_details('stu_academic_listen','Stu_ListenID'); ?>
                                           <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Stu_ListenID']; ?>">
                                <?php echo $Country_detail[$i]['Stu_ListenName']; ?></option>
                                <?php } ?>
                                        
                                    </select>
                                </div>
                                <div class="frm">
                                    <select name="Juco_Act_SpeakID">
                                    	<option value="0">Speaking</option>
                                         <?php $Country_detail = get_table_details('stu_academic_speak','Stu_SpeakID'); ?>
                                           <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Stu_SpeakID']; ?>">
                                <?php echo $Country_detail[$i]['Stu_SpeakName']; ?></option>
                                <?php } ?>
                                    </select>
                                </div>
                                <div class="frm">
                                      <select name="Stu_Act_WriteID">
                                    	<option value="0">Writing</option>
                                         <?php $Country_detail = get_table_details('stu_academic_write','Stu_WriteID'); ?>
                                           <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Stu_WriteID']; ?>">
                                <?php echo $Country_detail[$i]['Stu_WriteName']; ?></option>
                                <?php } ?>
                                    
                                    </select>
                                </div>
                                <div class="frm">
                                     <select name="Juco_Act_YearSpeakID">
                                    	<option value="0">Years Speaking English</option>
                                        <option value="0">Writing</option>
                                         <?php $Country_detail = get_table_details('stu_academic_yourspeak','Stu_YourSpeakID'); ?>
                                           <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Stu_YourSpeakID']; ?>">
                                <?php echo $Country_detail[$i]['Stu_YourSpeakName']; ?></option>
                                <?php } ?>
                                    
                                    </select>
                                </div>
                                <div class="frm">
                                    <select name="Juco_Act_YearReadID">
                                    	<option value="0">Years Reading English</option>
                                         <?php $Country_detail = get_table_details('stu_academic_yourwrite','Stu_YourWriteID'); ?>
                                           <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Stu_YourWriteID']; ?>">
                                <?php echo $Country_detail[$i]['Stu_YourWriteName']; ?></option>
                                <?php } ?>
                                    </select>
                                </div>
                                <div class="frm">
                                      <select name="Juco_Act_YearWriteID">
                                    	<option value="0">Years Writing English</option>
                                        <?php $Country_detail = get_table_details('stu_academic_yourread','Stu_YourReadID'); ?>
                                           <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Stu_YourReadID']; ?>">
                                <?php echo $Country_detail[$i]['Stu_YourReadName']; ?></option>
                                <?php } ?>
                                    </select>
                                </div>
                                <div class="frm">
                                     <select name="Juco_Act_WesID">
                                    	<option value="0">WES Transcript Evaluation</option>
                                        <?php $Country_detail = get_table_details('stu_academic_wes','Stu_WesID'); ?>
                                           <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Stu_WesID']; ?>">
                                <?php echo $Country_detail[$i]['Stu_WesName']; ?></option>
                                <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        <div class="cols-small">
                        	<div class="reg-frm pitching-stats">
                             	<h4>Guidance Counselor</h4>
                                <div class="frm">
                                    <input type="text" placeholder="Name" name="Juco_Act_GuName" id="Juco_Act_GuName">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Email" name="Juco_Act_GuEmail">
                                </div>
                            </div>
                            <div class="reg-frm pitching-stats">
                             	<h4>Additional Education</h4>
                                <div class="frm">
                                    <div class="added-value">
                                    	Honors Courses
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Juco_Act_Honors" value="1">
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="added-value">
                                    	Post Secondary Courses
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Juco_Act_Post" value="1">
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="added-value">
                                    	AP Courses
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Juco_Act_ApCourses" value="1">
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Languages" name="Juco_Act_Languages">
                                </div>
                            </div>
                            <div class="reg-frm pitching-stats">
                             	<h4>Eligibility Center Registration</h4>
                                <div class="frm">
                                    <div class="added-value">
                                    	NCAA
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Juco_Act_Ncaa" value="1">
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm">
                                    <div class="added-value">
                                    	NAIA
                                        <div class="btn-checkbox">
                                        	<input type="checkbox" name="Juco_Act_Naia" value="1"> 
                                        	<div class="no-check">No</div>
                                            <div class="yes-check">Yes</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="reg-frm pitching-stats">
                             	<h4>Intented Field of Interest</h4>
                                <div class="frm">
                                    <select name="Juco_Act_IntendedID" id="Juco_Act_IntendedID" onchange="getIntent(this.value);">
                                    <option value="0">
                                     Intended College
                                    </option>
                                      <?php $Eligibility_Intended_details=get_table_details('stu_eligibility_intended','Eligibility_Intended_ID'); ?>
            
              
                            	 <?php for($i=0;$i<count($Eligibility_Intended_details);$i++){ ?>
                            	<option value="<?php echo $Eligibility_Intended_details[$i]['Eligibility_Intended_ID']; ?>">
                                	<?php echo $Eligibility_Intended_details[$i]['Eligibility_Intended_Name']; ?>
                                </option>
                                <?php } ?>
                                </select>
                                </div>
                                
                            </div>
                            
                            <div class="reg-frm pitching-stats">
                             	<h4>Intented Major</h4>
                                <div class="frm">
                                    <select name="Juco_Act_MajorID" id="Juco_Act_MajorID" >
                                    <option value="0">
                                      Major 
                                    </option>
                                </select>
                                </div>
                                
                            </div>
                        </div>
                        <div class="cl"></div>
                        <div class="frm">
                        	<input type="submit" value="Continue">
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
    
<script>
function getJucodent_data()
{

	var flag = true;

	if ($('#Juco_Act_Player').val()=='')
	{
		$('#Juco_Act_Player').css('border','1px solid red');
		flag = false;
	} else {
		$('#Juco_Act_Player').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Juco_Act_HighSchool').val()=='')
	{
		$('#Juco_Act_HighSchool').css('border','1px solid red');
		flag = false;
	} else {
		$('#Juco_Act_HighSchool').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Juco_Act_City').val()=='')
	{
		$('#Juco_Act_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Juco_Act_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Juco_Act_State').val()=='')
	{
		$('#Juco_Act_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Juco_Act_State').css('border','1px solid #a4a4a4');
	}
	
	
	

	if(flag == false) {
		return false;
	} else {
		$('#ProcessLoaderID').show();
		return true;
	}	
	return false;		
}





$(function() {
    $("#Juco_Act_ImageName").on("change", function()
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

function getIntent(MajorID)
{
	$("#Juco_Act_MajorID").html("<option>Loading...</option>");
	 $.ajax({
     type: "POST",
     url: "<?php echo base_url(); ?>termcondition/check_major/",
     data: {MajorID:MajorID},
     cache: false,
     success: function(result){
       		$("#Juco_Act_MajorID").html("");
			$("#Juco_Act_MajorID").append(result);
	 }
     });
}

</script>
<style>
#imagePreview1 {
    width: 100%;
    height: 100%;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}
</style>    