	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Indoor Track)</h2>
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
                    
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_indoor_track" onsubmit="return getStudent_data();">
                     <div class="forums-details">
                	<div class="da-update">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<span>Player Name</span>
                                <input type="text" placeholder="Player Name" name="Indoor_PlayerName" id="Indoor_PlayerName" value="<?php echo $Sport_info['Indoor_PlayerName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>High School Name</span>
                            	<input type="text" name="Indoor_SchoolName" id="Indoor_SchoolName" placeholder="High School Name" value="<?php echo $Sport_info['Indoor_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>City</span>
                            	<input type="text" name="Indoor_City" id="Indoor_City" placeholder="City" value="<?php echo $Sport_info['Indoor_City']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>State</span>
                            	<input type="text" name="Indoor_State" id="Indoor_State" placeholder="State" value="<?php echo $Sport_info['Indoor_State']; ?>">
                            </div>
                        </div>
                        
                    </div>
                    <div class="student-card set-stud clearfix">
                    	<div class="cols-3">
                        	
                            
                        	<div class="image-upload">
                                <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Indoor_ProImage" id="Bas_LeftImageName1">
                               		<?php if($Sport_info['Indoor_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Indoor_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>           
	                            </span>
                            </div>
                        </div>
						
                        <div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                                <h4>BIOMETRICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Indoor_Height" placeholder="feet" value="<?php echo $Sport_info['Indoor_Height']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Indoor_HeightInche" placeholder="inches" value="<?php echo $Sport_info['Indoor_HeightInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                    <span>Weight</span>
                                    <input type="text" name="Indoor_Weight" placeholder="Weight" value="<?php echo $Sport_info['Indoor_Weight']; ?>">
                                </div>
                            </div>
                        </div>
                        
                        <div class="cols-3">
                            <div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Indoor_ProImage2" id="Bas_LeftImageName2">
                               		<?php if($Sport_info['Indoor_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Indoor_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>           
	                            </span>
                            </div>
                        </div>
                        <div class="cl"></div>
                    </div>
                    
                    <div class="student-card set-stud-b clearfix">
                        <div class="cols-12">
                        	<div class="reg-frm pitching-stats track-form">
                                <h4>TRACK EVENTS</h4>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Indoor_Track_Event_One" placeholder="Event" value="<?php echo $Sport_info['Indoor_Track_Event_One']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Indoor_Track_EventMin_One" placeholder="minutes" value="<?php echo $Sport_info['Indoor_Track_EventMin_One']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Indoor_Track_EventSec_One" placeholder="seconds" value="<?php echo $Sport_info['Indoor_Track_EventSec_One']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Indoor_Track_Event_Two" placeholder="Event" value="<?php echo $Sport_info['Indoor_Track_Event_Two']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Indoor_Track_EventMin_Two" placeholder="minutes" value="<?php echo $Sport_info['Indoor_Track_EventMin_Two']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Indoor_Track_EventSec_Two" placeholder="seconds" value="<?php echo $Sport_info['Indoor_Track_EventSec_Two']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Indoor_Track_Event_Three" placeholder="Event" value="<?php echo $Sport_info['Indoor_Track_Event_Three']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Indoor_Track_EventMin_Three" placeholder="minutes" value="<?php echo $Sport_info['Indoor_Track_EventMin_Three']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Indoor_Track_EventSec_Three" placeholder="seconds" value="<?php echo $Sport_info['Indoor_Track_EventSec_Three']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Indoor_Track_Event_Four" placeholder="Event" value="<?php echo $Sport_info['Indoor_Track_Event_Four']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Indoor_Track_EventMin_Four" placeholder="minutes" value="<?php echo $Sport_info['Indoor_Track_EventMin_Four']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Indoor_Track_EventSec_Four" placeholder="seconds" value="<?php echo $Sport_info['Indoor_Track_EventSec_Four']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Indoor_Track_Event_Five" placeholder="Event" value="<?php echo $Sport_info['Indoor_Track_Event_Five']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Indoor_Track_EventMin_Five" placeholder="minutes" value="<?php echo $Sport_info['Indoor_Track_EventMin_Five']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Indoor_Track_EventSec_Five" placeholder="seconds" value="<?php echo $Sport_info['Indoor_Track_EventSec_Five']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4>FIELD EVENTS</h4>
                                
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Indoor_Field_Event_One" placeholder="Event" value="<?php echo $Sport_info['Indoor_Field_Event_One']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Performance</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Indoor_Field_EventMin_One" placeholder="feet" value="<?php echo $Sport_info['Indoor_Field_EventMin_One']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Indoor_Field_EventSec_One" placeholder="inches" value="<?php echo $Sport_info['Indoor_Field_EventSec_One']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Indoor_Field_Event_Two" placeholder="Event" value="<?php echo $Sport_info['Indoor_Field_Event_Two']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Performance</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Indoor_Field_EventMin_Two" placeholder="feet" value="<?php echo $Sport_info['Indoor_Field_EventMin_Two']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Indoor_Field_EventSec_Two" placeholder="inches" value="<?php echo $Sport_info['Indoor_Field_EventSec_Two']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Indoor_Field_Event_Three" placeholder="Event" value="<?php echo $Sport_info['Indoor_Field_Event_Three']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Performance</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Indoor_Field_EventMin_Three" placeholder="feet" value="<?php echo $Sport_info['Indoor_Field_EventMin_Three']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Indoor_Field_EventSec_Three" placeholder="inches" value="<?php echo $Sport_info['Indoor_Field_EventSec_Three']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Indoor_Field_Event_Four" placeholder="Event" value="<?php echo $Sport_info['Indoor_Field_Event_Four']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Performance</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Indoor_Field_EventMin_Four" placeholder="feet"value="<?php echo $Sport_info['Indoor_Field_EventMin_Four']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Indoor_Field_EventSec_Four" placeholder="inches" value="<?php echo $Sport_info['Indoor_Field_EventSec_Four']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Indoor_Field_Event_Five" placeholder="Event" value="<?php echo $Sport_info['Indoor_Field_Event_Five']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Performance</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Indoor_Field_EventMin_Five" placeholder="feet"value="<?php echo $Sport_info['Indoor_Field_EventMin_Five']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Indoor_Field_EventSec_Five" placeholder="inches" value="<?php echo $Sport_info['Indoor_Field_EventSec_Five']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        
                        <div class="cl"></div>
                       <div class="btn">
                        	<input type="submit" value="Update" class="input-submit">
                         </div>
                    </div>
                </div>
                </div>
                </div>
                </form>
             </div>
        </div>
    </div>
    
<script>
function getStudent_data()
{

	var flag = true;

	if ($('#Indoor_PlayerName').val()=='')
	{
		$('#Indoor_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Indoor_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Indoor_SchoolName').val()=='')
	{
		$('#Indoor_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Indoor_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Indoor_City').val()=='')
	{
		$('#Indoor_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Indoor_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Indoor_State').val()=='')
	{
		$('#Indoor_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Indoor_State').css('border','1px solid #a4a4a4');
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
    $("#Bas_LeftImageName1").on("change", function()
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
    $("#Bas_LeftImageName2").on("change", function()
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


