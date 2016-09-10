
    <section class="content"> 
    <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="student-athlete">
                	<div class="reg-title"><h2>Track &amp; Field Board  </h2></div>
                    <div class="reg-frm">
                     <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>sport/insert_track" onsubmit="return getStudent_data();">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" placeholder="Player Name" name="Track_PlayerName" id="Track_PlayerName">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Track_SchoolName" id="Track_SchoolName" placeholder="High School Name">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Track_City" id="Track_City" placeholder="City">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Track_State" id="Track_State" placeholder="State">
                            </div>
                        </div>
                        
                    </div>
                    <div class="student-card set-stud clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Track_ProImage" id="Bas_LeftImageName1">
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
                                           <input type="text" name="Track_Height" placeholder="feet">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Track_HeightInche" placeholder="inches">
                                    </div>
                                </div>
                                <div class="frm">
                                    <input type="text" name="Track_Weight" placeholder="Weight">
                                </div>
                            </div>
                        </div>
                        
                        <div class="cols-3">
                            <div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Track_ProImage2" id="Bas_LeftImageName2">
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
                                            <input type="text" name="Track_Event_One" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Track_BestMin_One" placeholder="minutes">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Track_BestSec_One" placeholder="seconds">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Track_Event_Two" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Track_BestMin_Two" placeholder="minutes">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Track_BestSec_Two" placeholder="seconds">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Track_Event_Three" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Track_BestMin_Three" placeholder="minutes">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Track_BestSec_Three" placeholder="seconds">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Track_Event_Four" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Track_BestMin_Four" placeholder="minutes">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Track_BestSec_Four" placeholder="seconds">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Track_Event_Five" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Track_BestMin_Five" placeholder="minutes">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Track_BestSec_Five" placeholder="seconds">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4>FIELD EVENTS</h4>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Track_Field_Event_One" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Performance</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Track_Field_BestPer_One" placeholder="feet">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Track_Field_BestInches_One" placeholder="inches">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Track_Field_Event_Two" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Performance</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Track_Field_BestPer_Two" placeholder="feet">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Track_Field_BestInches_Two" placeholder="inches">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Track_Field_Event_Three" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Performance</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Track_Field_BestPer_Three" placeholder="feet">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Track_Field_BestInches_Three" placeholder="inches">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Track_Field_Event_Four" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Performance</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Track_Field_BestPer_Four" placeholder="feet">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Track_Field_BestInches_Four" placeholder="inches">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Track_Field_Event_Five" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Performance</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Track_Field_BestPer_Five" placeholder="feet">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Track_Field_BestInches_Five" placeholder="inches">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        
                        <div class="cl"></div>
                         <div class="frm">
                        	<input type="submit" value="Continue">
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

	if ($('#Track_PlayerName').val()=='')
	{
		$('#Track_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Track_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Track_SchoolName').val()=='')
	{
		$('#Track_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Track_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Track_City').val()=='')
	{
		$('#Track_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Track_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Track_State').val()=='')
	{
		$('#Track_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Track_State').css('border','1px solid #a4a4a4');
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
