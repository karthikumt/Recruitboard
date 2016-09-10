	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Crew)</h2>
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
                   
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_rowing" onsubmit="return getStudent_data();">
                      <div class="forums-details">
                	<div class="da-update">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            <span>Player Name</span>
                            	<input type="text" name="Row_PlayerName" id="Row_PlayerName" placeholder="Player Name" value="<?php echo $Sport_info['Row_PlayerName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>High School Name</span>
                            	<input type="text" name="Row_SchoolName" id="Row_SchoolName" placeholder="High School Name" value="<?php echo $Sport_info['Row_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>City</span>
                            	<input type="text" name="Row_City" id="Row_City" placeholder="City" value="<?php echo $Sport_info['Row_City']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>State</span>
                            	<input type="text" name="Row_State" id="Row_State" placeholder="State" value="<?php echo $Sport_info['Row_State']; ?>">
                            </div>
                        </div>
                        <div class="frm clearfix">
                    		<div class="cols-4">
                            <span>Class</span>
                            	<input type="text" name="Row_Class" placeholder="Class of 20" value="<?php echo $Sport_info['Row_Class']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>Primary Position</span>
                            	<input type="text" name="Row_Primary" placeholder="Primary Position" value="<?php echo $Sport_info['Row_Primary']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>Secondary Position</span>
                            	<input type="text" name="Row_Secondary" placeholder="Secondary Position" value="<?php echo $Sport_info['Row_Secondary']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload">
                                <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Row_ProImage" id="Bas_LeftImageName1">
                               		<?php if($Sport_info['Row_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Row_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>              
	                            </span>
                            </div>
                            
                        	<div class="image-upload right-upload">
                                <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Row_ProImage2" id="Bas_LeftImageName2">
                               		<?php if($Sport_info['Row_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Row_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>              
	                            </span>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             	<h4>ROWING STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">2K ERG Score</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Row_ErgMin_Two" placeholder="minutes" value="<?php echo $Sport_info['Row_ErgMin_Two']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Row_ErgSec_Two" placeholder="seconds" value="<?php echo $Sport_info['Row_ErgSec_Two']; ?>">
                                    </div>
                                </div>
                                 <div class="frm clearfix">
                                    <div class="label fl">5K ERG Score</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Row_ErgMin_Five" placeholder="minutes" value="<?php echo $Sport_info['Row_ErgMin_Five']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Row_ErgSec_Five" placeholder="seconds" value="<?php echo $Sport_info['Row_ErgSec_Five']; ?>">
                                    </div>
                                </div>
                                 <div class="frm clearfix">
                                    <div class="label fl">6K ERG Score</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Row_ErgMin_Six" placeholder="minutes" value="<?php echo $Sport_info['Row_ErgMin_Six']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Row_ErgSec_Six" placeholder="seconds" value="<?php echo $Sport_info['Row_ErgSec_Six']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                <span>Total Seasons Rowed</span>
                                    <input type="text" name="Row_Season" placeholder="Total Seasons Rowed" value="<?php echo $Sport_info['Row_Season']; ?>">
                                </div>
                                <div class="frm">
                                <span>Weight</span>
                                    <input type="text" name="Row_Sta_Weight" placeholder="Weight" value="<?php echo $Sport_info['Row_Sta_Weight']; ?>">
                                </div>
                                
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Row_Bio_Height" placeholder="feet" value="<?php echo $Sport_info['Row_Bio_Height']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Row_Bio_HeightInche" placeholder="inches" value="<?php echo $Sport_info['Row_Bio_HeightInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                <span>Weight</span>
                                    <input type="text" name="Row_Bio_Weight" placeholder="Weight" value="<?php echo $Sport_info['Row_Bio_Weight']; ?>">
                                </div>
                                <div class="frm">
                                <span>Bench Press Max</span>
                                    <input type="text" name="Row_Bio_Bench" placeholder="Bench Press Max" value="<?php echo $Sport_info['Row_Bio_Bench']; ?>">
                                </div>
                                <div class="frm">
                                <span>Squat Max</span>
                                    <input type="text" name="Row_Bio_Squat" placeholder="Squat Max" value="<?php echo $Sport_info['Row_Bio_Squat']; ?>">
                                </div>
                                <div class="frm">
                                <span>Dominant Hand</span>
                                
                                    <input type="text" name="Row_Bio_DomaintHand" placeholder="Dominant Hand" value="<?php echo $Sport_info['Row_Bio_DomaintHand']; ?>">
                                </div>
                                <div class="frm clearfix">
                                    <div class="label fl">Wingspan</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Row_WingSpan" placeholder="feet" value="<?php echo $Sport_info['Row_WingSpan']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Row_WingSpanInche" placeholder="inches" value="<?php echo $Sport_info['Row_WingSpanInche']; ?>">
                                    </div>
                                </div>
                                
                                

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Row_ProImage3" id="Bas_LeftImageName3">
                               		<?php if($Sport_info['Row_ProImage3']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Row_ProImage3'].''); ?>" alt="" id="image3"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  <?php } ?>              
	                            </span>
                            </div>
                        	
                            <div class="image-upload right-upload">
                                 <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Row_ProImage4" id="Bas_LeftImageName4">
                               		<?php if($Sport_info['Row_ProImage4']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Row_ProImage4'].''); ?>" alt="" id="image4"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image4">  <?php } ?>              
	                            </span>
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

	if ($('#Row_PlayerName').val()=='')
	{
		$('#Row_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Row_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Row_SchoolName').val()=='')
	{
		$('#Row_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Row_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Row_City').val()=='')
	{
		$('#Row_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Row_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Row_State').val()=='')
	{
		$('#Row_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Row_State').css('border','1px solid #a4a4a4');
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


