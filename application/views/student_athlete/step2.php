<section class="content">
<div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register stud-athlete">
            	<div class="reg-title">
                    <h3>Great, now we would like to get to know you.</h3>
                    <p>There is a school and a team out there for everyone, so it is important that you are seen by
colleges for exactly who you are, instead of who you think they are looking for. Be honest
with all information, as coaches and admissions will always verify what you tell them. You
don’t want to forfeit an opportunity because of a false presentation of yourself.</p>
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
                  <form name="stu_step1" method="post" action="<?php echo base_url('student_athlete/insert_step2'); ?>" onsubmit="return check_stu_validation();" class="form-horizontal form-bordered" enctype="multipart/form-data">
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
                        	<select name="Stu_GenderID" id="Stu_GenderID">
                             <option value="0">
                                	Select Gender
                                </option>
                                    <?php $gender_info = get_table_details('stu_athlete_gender','GenderID'); ?>
                            	 <?php for($i=0;$i<count($gender_info);$i++){ ?>
                            	<option value="<?php echo $gender_info[$i]['GenderID']; ?>">
                                	<?php echo $gender_info[$i]['Gender']; ?>
                                </option>
                                <?php } ?>
                            </select>
                         </div>
                        <div class="inner-frm fr">
                        	<select name="Stu_SportID" id="Stu_SportID" onchange="getSport(this.value);">
                            	<option value="0">
                                	Select Sport
                                </option>
                                	<?php $sport_info=get_table_details('stu_athlete_sport','SportID'); ?>
                                 <?php for($i=0;$i<count($sport_info);$i++){ ?>
                            	<option value="<?php echo $sport_info[$i]['SportID']; ?>">
                                	<?php echo $sport_info[$i]['SportName']; ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<select name="Stu_PositionID" id="Stu_PositionID">
                            <option value="0">
                                	Position
                                </option>
                            </select>
                         </div>
                        <div class="inner-frm fr">
                        	<input type="text" placeholder="School Name" name="Stu_SchoolName" id="Stu_SchoolName">
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<select name="Stu_CountryID" id="Stu_CountryID">
                            	<option value="0">
                                	Select Country
                                </option>
                             <?php  $country_info=get_table_details('country','CountryID'); ?>
                                 <?php for($i=0;$i<count($country_info);$i++){ ?>
                            	<option value="<?php echo $country_info[$i]['CountryID']; ?>">
                                	<?php echo $country_info[$i]['CountryName']; ?>
                                </option>
                                <?php } ?>
                            </select>
                         </div>
                        <div class="inner-frm fr">
                        	<select name="Stu_State" id="Stu_State">
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
                    </div>
                     <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" placeholder="City" name="Stu_City" id="Stu_City">
                         </div>
                        <div class="inner-frm fr">
                        	<input type="text" placeholder="Zip/Postal Code" name="Stu_ZipCode" id="Stu_ZipCode" maxlength="10">
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<select name="Stu_ClassID" id="Stu_ClassID">
                            	<option value="0">
                                	Select Class of
                                </option>
                            <?php  $class_info=get_table_details('stu_athlete_class','ClassID'); ?>
                                 <?php for($i=0;$i<count($class_info);$i++){ ?>
                            	<option value="<?php echo $class_info[$i]['ClassID']; ?>">
                                	<?php echo $class_info[$i]['ClassName']; ?>
                                </option>
                                <?php } ?>
                            </select>
                         </div>
                        <div class="inner-frm fr">
                        	<div class="label fl">Height</div>
                        	<div class="sub-hight fl">
                                <select name="Stu_HeightID" id="Stu_HeightID">
                                    <option value="0">
                                        Feet
                                    </option>
                                  <?php $height_info=get_table_details('stu_athlete_height','HeightID'); ?>
                                     <?php for($i=0;$i<count($height_info);$i++){ ?>
                                    <option value="<?php echo $height_info[$i]['HeightID']; ?>">
                                        <?php echo $height_info[$i]['HeightName']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="sub-hight fr">
                            <select name="Stu_InchesID" id="Stu_InchesID">
                            	<option value="0">
                                	Inches
                                </option>
                              <?php $height_info=get_table_details('stu_athlete_inches','InchesID'); ?>
                                 <?php for($i=0;$i<count($height_info);$i++){ ?>
                            	<option value="<?php echo $height_info[$i]['InchesID']; ?>">
                                	<?php echo $height_info[$i]['InchesName']; ?>
                                </option>
                                <?php } ?>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="qualification">
                        <div class="frm clearfix">
                        	
                            	<div class="inner-frm fl">
                            	<select name="Stu_WeightID" id="Stu_WeightID">
                                	<option value="0">Select Weight</option>
                                	<?php $width_info=get_table_details('stu_athlete_weight','WeightID'); ?>
                                 <?php for($i=0;$i<count($width_info);$i++){ ?>
                            	<option value="<?php echo $width_info[$i]['WeightID']; ?>">
                                	<?php echo $width_info[$i]['WeightName']; ?>
                                </option>
                                <?php } ?>
                                </select>
                                </div>
                                <!--<div class="inner-frm fr">
                                	<input type="text" placeholder="Add a coach" name="Stu_Coach" id="Stu_Coach">
                                </div>-->
                           
                           <!-- <div class="btn-submit fr">
                            	<input type="submit" value="Submit">
                            </div>-->
                    	</div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="submit" value="Continue" >
                         </div>
                        
                    </div>
                </div>
                </form>
        	</div>
            </div>
        </div>
    </section>
    
      <script language="javascript">
  
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
			
	
		if($('#Stu_SportID').val()=='0')
		 {
			
			$('#Stu_SportID').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Stu_SportID').css('border','1px solid #a4a4a4');
			}
			
			
		if($('#Stu_CountryID').val()=='0')
		 {
			
			$('#Stu_CountryID').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Stu_CountryID').css('border','1px solid #a4a4a4');
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
  
function getSport(SportID)
{
	$("#Stu_PositionID").html("<option>Loading...</option>");
	 $.ajax({
     type: "POST",
     url: "<?php echo base_url(); ?>termcondition/check_sport/",
     data: {SportID:SportID},
     cache: false,
     success: function(result){
       		$("#Stu_PositionID").html("");
			$("#Stu_PositionID").append(result);
	 }
     });
}
</script>

  