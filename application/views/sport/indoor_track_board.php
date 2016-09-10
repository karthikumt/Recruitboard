
    <section class="content">
     <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="student-athlete">
                	<div class="reg-title"><h2>Indoor Track &amp; Field Board </h2></div>
                      <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>sport/insert_indoor_track" onsubmit="return getStudent_data();">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" placeholder="Player Name" name="Indoor_PlayerName" id="Indoor_PlayerName">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Indoor_SchoolName" id="Indoor_SchoolName" placeholder="High School Name">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Indoor_City" id="Indoor_City" placeholder="City">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Indoor_State" id="Indoor_State" placeholder="State">
                            </div>
                        </div>
                        
                    </div>
                    <div class="student-card set-stud clearfix">
                    	<div class="cols-3">
                        	
                            
                        	<div class="image-upload">
                                <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Indoor_ProImage" id="Bas_LeftImageName1">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  
	                            </span>
                            </div>
                        </div>
						
                        <div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                                <h4>BIOMETRICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Indoor_Height" placeholder="feet">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Indoor_HeightInche" placeholder="inches">
                                    </div>
                                </div>
                                <div class="frm">
                                    <input type="text" name="Indoor_Weight" placeholder="Weight">
                                </div>
                            </div>
                        </div>
                        
                        <div class="cols-3">
                            <div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Indoor_ProImage2" id="Bas_LeftImageName2">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  
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
                                            <input type="text" name="Indoor_Track_Event_One" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Indoor_Track_EventMin_One" placeholder="minutes">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Indoor_Track_EventSec_One" placeholder="seconds">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Indoor_Track_Event_Two" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Indoor_Track_EventMin_Two" placeholder="minutes">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Indoor_Track_EventSec_Two" placeholder="seconds">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Indoor_Track_Event_Three" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Indoor_Track_EventMin_Three" placeholder="minutes">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Indoor_Track_EventSec_Three" placeholder="seconds">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Indoor_Track_Event_Four" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Indoor_Track_EventMin_Four" placeholder="minutes">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Indoor_Track_EventSec_Four" placeholder="seconds">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Indoor_Track_Event_Five" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Indoor_Track_EventMin_Five" placeholder="minutes">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Indoor_Track_EventSec_Five" placeholder="seconds">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4>FIELD EVENTS</h4>
                                
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Indoor_Field_Event_One" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Performance</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Indoor_Field_EventMin_One" placeholder="feet">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Indoor_Field_EventSec_One" placeholder="inches">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Indoor_Field_Event_Two" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Performance</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Indoor_Field_EventMin_Two" placeholder="feet">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Indoor_Field_EventSec_Two" placeholder="inches">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Indoor_Field_Event_Three" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Performance</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Indoor_Field_EventMin_Three" placeholder="feet">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Indoor_Field_EventSec_Three" placeholder="inches">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Indoor_Field_Event_Four" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Performance</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Indoor_Field_EventMin_Four" placeholder="feet">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Indoor_Field_EventSec_Four" placeholder="inches">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Indoor_Field_Event_Five" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Performance</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Indoor_Field_EventMin_Five" placeholder="feet">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Indoor_Field_EventSec_Five" placeholder="inches">
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
                </form>
            </div>
        </div>
    </section>
    
             
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
