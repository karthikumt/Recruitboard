	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Field Hockey)</h2>
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
                   
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_field_hockey" onsubmit="return getStudent_data();">
                    <div class="forums-details">
                	<div class="da-update">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<span>Player Name</span>
                                <input type="text" placeholder="Player Name" name="Field_PlayerName" id="Field_PlayerName" value="<?php echo $Sport_info['Field_PlayerName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>High School Name</span>
                            	<input type="text" placeholder="High School Name" name="Field_SchoolName" id="Field_SchoolName" value="<?php echo $Sport_info['Field_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>City</span>
                            	<input type="text" placeholder="City" name="Field_City" id="Field_City" value="<?php echo $Sport_info['Field_City']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>State</span>
                            	<input type="text" placeholder="State" name="Field_State" id="Field_State" value="<?php echo $Sport_info['Field_State']; ?>">
                            </div>
                        </div>
                        <div class="frm clearfix">
                    		<div class="cols-4">
                            <span>Class</span>
                            	<input type="text" placeholder="Class of 20" name="Field_Class" value="<?php echo $Sport_info['Field_Class']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>Primary Position</span>
                            	<input type="text" placeholder="Primary Position" name="Field_Primary" value="<?php echo $Sport_info['Field_Primary']; ?>">
                            </div>
                            <div class="cols-4">
                             <span>Secondary Position</span>
                            	<input type="text" name="Field_Secondary" placeholder="Secondary Position" value="<?php echo $Sport_info['Field_Secondary']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload ">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Field_ProImage" id="Bas_LeftImageName1">
                               			<?php if($Sport_info['Field_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Field_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>           
	                            </span>
                            </div>
                            
                        	<div class="image-upload right-upload">
                                 <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Field_ProImage2" id="Bas_LeftImageName2">
                               		<?php if($Sport_info['Field_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Field_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>           
	                            </span>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             
                                <h4>PER GAME STATISTICS</h4>
                                <div class="frm">
                                <span>Goals</span>
                                    <input type="text" name="Field_Goals" placeholder="Goals" value="<?php echo $Sport_info['Field_Goals']; ?>">
                                </div>
                                <div class="frm">
                                <span>Shots on Goal</span>
                                    <input type="text" name="Field_Shots" placeholder="Shots on Goal" value="<?php echo $Sport_info['Field_Shots']; ?>">
                                </div>
                                <div class="frm">
                                <span>Assists</span>
                                    <input type="text" name="Field_Assists" placeholder="Assists" value="<?php echo $Sport_info['Field_Assists']; ?>">
                                </div>
                                <div class="frm">
                                <span>Goals Against</span>
                                    <input type="text" name="Field_Against" placeholder="Goals Against" value="<?php echo $Sport_info['Field_Against']; ?>">
                                </div>
                                <div class="frm"
                                <span>Saves</span>>
                                    <input type="text" name="Field_Saves" placeholder="Saves" value="<?php echo $Sport_info['Field_Saves']; ?>">
                                </div>
                                <div class="frm">
                                <span>Varsity Experience</span>
                                    <input type="text" name="Field_Varsity" placeholder="Varsity Experience" value="<?php echo $Sport_info['Field_Varsity']; ?>">
                                </div>
                                
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Field_Height" placeholder="feet" value="<?php echo $Sport_info['Field_Height']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Field_HeightInche" placeholder="inches" value="<?php echo $Sport_info['Field_HeightInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                <span>Weight</span>
                                    <input type="text" name="Field_Weight"  placeholder="Weight" value="<?php echo $Sport_info['Field_Weight']; ?>">
                                </div>
                                <div class="frm clearfix">
                                    <div class="label fl">Mile Time</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Field_Mile" placeholder="feet" value="<?php echo $Sport_info['Field_Mile']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Field_MileInche"  placeholder="inches" value="<?php echo $Sport_info['Field_MileInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                <span>Dominant Hand</span>
                                    <input type="text" name="Field_DomaintHand" placeholder="Dominant Hand" value="<?php echo $Sport_info['Field_DomaintHand']; ?>">
                                </div>
                                <div class="frm">
                                <span>Defensive specialist</span>
                                    <input type="text" name="Field_Defensive" placeholder="Defensive specialist" value="<?php echo $Sport_info['Field_Defensive']; ?>">
                                </div>
                                

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload ">
                                 <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Field_ProImage3" id="Bas_LeftImageName3">
                               		<?php if($Sport_info['Field_ProImage3']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Field_ProImage3'].''); ?>" alt="" id="image3"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  <?php } ?>          
	                            </span>
                            </div>
                        	
                            <div class="image-upload right-upload">
                                 <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Field_ProImage4" id="Bas_LeftImageName4">
                               		<?php if($Sport_info['Field_ProImage4']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Field_ProImage4'].''); ?>" alt="" id="image4"> <?php }else{ ?>
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

	if ($('#Field_PlayerName').val()=='')
	{
		$('#Field_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Field_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Field_SchoolName').val()=='')
	{
		$('#Field_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Field_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Field_City').val()=='')
	{
		$('#Field_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Field_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Field_State').val()=='')
	{
		$('#Field_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Field_State').css('border','1px solid #a4a4a4');
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


