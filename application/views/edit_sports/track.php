	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Track)</h2>
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
                   
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_track" onsubmit="return getStudent_data();">
                    	<div class="forums-details">
                		<div class="da-update">
                        <div class="frm clearfix">
                    		<div class="cols-4">
                            <span>Player Name</span>
                                <input type="text" placeholder="Player Name" name="Track_PlayerName" id="Track_PlayerName" value="<?php echo $Sport_info['Track_PlayerName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>High School Name</span>
                            	<input type="text" name="Track_SchoolName" id="Track_SchoolName" placeholder="High School Name" value="<?php echo $Sport_info['Track_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>City</span>
                            	<input type="text" name="Track_City" id="Track_City" placeholder="City" value="<?php echo $Sport_info['Track_City']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>State</span>
                            	<input type="text" name="Track_State" id="Track_State" placeholder="State" value="<?php echo $Sport_info['Track_State']; ?>">
                            </div>
                        </div>
                        
                    </div>
                    <div class="student-card set-stud clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Track_ProImage" id="Bas_LeftImageName1">
                               		<?php if($Sport_info['Track_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Track_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
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
                                           <input type="text" name="Track_Height" placeholder="feet" value="<?php echo $Sport_info['Track_Height']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Track_HeightInche" placeholder="inches" value="<?php echo $Sport_info['Track_HeightInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                <span>Weight</span>
                                    <input type="text" name="Track_Weight" placeholder="Weight" value="<?php echo $Sport_info['Track_Weight']; ?>">
                                </div>
                            </div>
                        </div>
                        
                        <div class="cols-3">
                            <div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Track_ProImage2" id="Bas_LeftImageName2">
                               		<?php if($Sport_info['Track_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Track_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
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
                                            <input type="text" name="Track_Event_One" placeholder="Event" value="<?php echo $Sport_info['Track_Event_One']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Track_BestMin_One" placeholder="minutes" value="<?php echo $Sport_info['Track_BestMin_One']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Track_BestSec_One" placeholder="seconds" value="<?php echo $Sport_info['Track_BestSec_One']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Track_Event_Two" placeholder="Event" value="<?php echo $Sport_info['Track_Event_Two']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Track_BestMin_Two" placeholder="minutes" value="<?php echo $Sport_info['Track_BestMin_Two']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Track_BestSec_Two" placeholder="seconds" value="<?php echo $Sport_info['Track_BestSec_Two']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Track_Event_Three" placeholder="Event" value="<?php echo $Sport_info['Track_Event_Three']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Track_BestMin_Three" placeholder="minutes" value="<?php echo $Sport_info['Track_BestMin_Three']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Track_BestSec_Three" placeholder="seconds" value="<?php echo $Sport_info['Track_BestSec_Three']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Track_Event_Four" placeholder="Event" value="<?php echo $Sport_info['Track_Event_Four']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Track_BestMin_Four" placeholder="minutes" value="<?php echo $Sport_info['Track_BestMin_Four']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Track_BestSec_Four" placeholder="seconds" value="<?php echo $Sport_info['Track_BestSec_Four']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Track_Event_Five" placeholder="Event" value="<?php echo $Sport_info['Track_Event_Five']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Track_BestMin_Five" placeholder="minutes" value="<?php echo $Sport_info['Track_BestMin_Five']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Track_BestSec_Five" placeholder="seconds" value="<?php echo $Sport_info['Track_BestSec_Five']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4>FIELD EVENTS</h4>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Track_Field_Event_One" placeholder="Event" value="<?php echo $Sport_info['Track_Field_Event_One']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Performance</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Track_Field_BestPer_One" placeholder="feet" value="<?php echo $Sport_info['Track_Field_BestPer_One']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Track_Field_BestInches_One" placeholder="inches" value="<?php echo $Sport_info['Track_Field_BestInches_One']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Track_Field_Event_Two" placeholder="Event" value="<?php echo $Sport_info['Track_Field_Event_Two']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Performance</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Track_Field_BestPer_Two" placeholder="feet" value="<?php echo $Sport_info['Track_Field_BestPer_Two']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Track_Field_BestInches_Two" placeholder="inches" value="<?php echo $Sport_info['Track_Field_BestInches_Two']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Track_Field_Event_Three" placeholder="Event" value="<?php echo $Sport_info['Track_Field_Event_Three']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Performance</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Track_Field_BestPer_Three" placeholder="feet" value="<?php echo $Sport_info['Track_Field_BestPer_Three']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Track_Field_BestInches_Three" placeholder="inches" value="<?php echo $Sport_info['Track_Field_BestInches_Three']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Track_Field_Event_Four" placeholder="Event" value="<?php echo $Sport_info['Track_Field_Event_Four']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Performance</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Track_Field_BestPer_Four" placeholder="feet" value="<?php echo $Sport_info['Track_Field_BestPer_Four']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Track_Field_BestInches_Four" placeholder="inches" value="<?php echo $Sport_info['Track_Field_BestInches_Four']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Track_Field_Event_Five" placeholder="Event" value="<?php echo $Sport_info['Track_Field_Event_Five']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Performance</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Track_Field_BestPer_Five" placeholder="feet" value="<?php echo $Sport_info['Track_Field_BestPer_Five']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Track_Field_BestInches_Five" placeholder="inches" value="<?php echo $Sport_info['Track_Field_BestInches_Five']; ?>">
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
                </form>
                    
                    
                   
            </div>
        </div>
    </div>
    
<script>
function getStudent_data()
{

	var flag = true;

	if ($('#Rifel_PlayerName').val()=='')
	{
		$('#Rifel_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Rifel_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Rifel_SchoolName').val()=='')
	{
		$('#Rifel_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Rifel_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Rifel_City').val()=='')
	{
		$('#Rifel_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Rifel_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Rifel_State').val()=='')
	{
		$('#Rifel_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Rifel_State').css('border','1px solid #a4a4a4');
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

$(function() {
    $("#Bas_LeftImageName3").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){
			 // set image data as background of div
			   $("#image3").hide();
                $("#imagePreview3").css("background-image", "url("+this.result+")");
            }
        }
    });
});

$(function() {
    $("#Bas_LeftImageName4").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){
			 // set image data as background of div
			   $("#image4").hide();
                $("#imagePreview4").css("background-image", "url("+this.result+")");
            }
        }
    });
});


</script>    


