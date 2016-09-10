	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Ice Hockey)</h2>
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
                    
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_ice_hockey" onsubmit="return getStudent_data();">
                    <div class="forums-details">
                	<div class="da-update">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<span>Player Name</span>
                                <input type="text" placeholder="Player Name" name="Ice_PlayerName" id="Ice_PlayerName" value="<?php echo $Sport_info['Ice_PlayerName']; ?>"> 
                            </div>
                            <div class="cols-4">
                            <span>High School Name</span>
                            	<input type="text" name="Ice_SchoolName" id="Ice_SchoolName" placeholder="High School Name" value="<?php echo $Sport_info['Ice_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>City</span>
                            	<input type="text" name="Ice_City" id="Ice_City" placeholder="City" value="<?php echo $Sport_info['Ice_City']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>State</span>
                            	<input type="text" name="Ice_State" id="Ice_State" placeholder="State" value="<?php echo $Sport_info['Ice_State']; ?>">
                            </div>
                        </div>
                        <div class="frm clearfix">
                    		<div class="cols-4">
                            <span>Class</span>
                            	<input type="text" name="Ice_Class" placeholder="Class of 20" value="<?php echo $Sport_info['Ice_Class']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>Primary Position</span>
                            	<input type="text" name="Ice_Primary" placeholder="Primary Position" value="<?php echo $Sport_info['Ice_Primary']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>Secondary Position</span>
                            	<input type="text" name="Ice_Secondary" placeholder="Secondary Position" value="<?php echo $Sport_info['Ice_Secondary']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload toppanel-upload">
                                <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Ice_ProImage" id="Bas_LeftImageName1">
                               		<?php if($Sport_info['Ice_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Ice_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>            
	                            </span>
                            </div>
                            
                        	<div class="image-upload left-upload">
                                 <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Ice_ProImage2" id="Bas_LeftImageName2">
                               		<?php if($Sport_info['Ice_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Ice_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>            
	                            </span>
                            </div>
                        </div>
						
                        <div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             	<div class="frm">
                                <span>Position</span>
                                    <input type="text" name="Ice_Position" placeholder="Position" value="<?php echo $Sport_info['Ice_Position']; ?>">
                                </div>
                                <h4>PER GAME STATISTICS</h4>
                                <div class="frm">
                                <span>Goals</span>
                                    <input type="text" name="Ice_Goals" placeholder="Goals" value="<?php echo $Sport_info['Ice_Goals']; ?>">
                                </div>
                                <div class="frm">
                                <span>Shots on Goal</span>
                                    <input type="text" name="Ice_Shots" placeholder="Shots on Goal" value="<?php echo $Sport_info['Ice_Shots']; ?>">
                                </div>
                                <div class="frm">
                                <span>Assists</span>
                                    <input type="text" name="Ice_Assist" placeholder="Assists" value="<?php echo $Sport_info['Ice_Assist']; ?>">
                                </div>
                                <div class="frm">
                                <span>Goals Allowed</span>
                                    <input type="text" name="Ice_Allowed" placeholder="Goals Allowed" value="<?php echo $Sport_info['Ice_Allowed']; ?>">
                                </div>
                                <div class="frm">
                                <span>Saves</span>
                                    <input type="text" name="Ice_Saves" placeholder="Saves" value="<?php echo $Sport_info['Ice_Saves']; ?>">
                                </div>
                                <div class="frm">
                                <span>Penalty Minutes</span>
                                    <input type="text" name="Ice_Penalty" placeholder="Penalty Minutes" value="<?php echo $Sport_info['Ice_Penalty']; ?>">
                                </div>
                                
                                
                                
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Ice_Height" placeholder="feet" value="<?php echo $Sport_info['Ice_Height']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Ice_HeightInche" placeholder="inches" value="<?php echo $Sport_info['Ice_HeightInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                <span>Weight</span>
                                    <input type="text" name="Ice_Weight" placeholder="Weight" value="<?php echo $Sport_info['Ice_Weight']; ?>">
                                </div>
                                <div class="frm clearfix">
                                    <div class="label fl">Wingspan</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Ice_WingSpan" placeholder="feet" value="<?php echo $Sport_info['Ice_WingSpan']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Ice_wingSpanInche" placeholder="inches" value="<?php echo $Sport_info['Ice_wingSpanInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm clearfix">
                                    <div class="label fl">Standing Long Jump</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Ice_LongJump" placeholder="feet" value="<?php echo $Sport_info['Ice_LongJump']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Ice_LongJumpInche" placeholder="inches" value="<?php echo $Sport_info['Ice_LongJumpInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                <span>Vertical Jump</span>
                                    <input type="text" name="Ice_Vertical" placeholder="Vertical Jump" value="<?php echo $Sport_info['Ice_Vertical']; ?>">
                                </div>
                                <div class="frm">
                                <span>Grip Strength ( right )</span>
                                    <input type="text" name="Ice_GripStrength_Right" placeholder="Grip Strength ( right )"value="<?php echo $Sport_info['Ice_GripStrength_Right']; ?>">
                                </div>
                                <div class="frm">
                                <span>Grip Strength ( left )</span>
                                    <input type="text" name="Ice_GripStrength_Left" placeholder="Grip Strength ( left )" value="<?php echo $Sport_info['Ice_GripStrength_Left']; ?>">
                                </div>
                                <div class="frm">
                                <span>Bench Press Reps (150 lbs )</span>
                                    <input type="text" name="Ice_Bench_Press" placeholder="Bench Press Reps (150 lbs )" value="<?php echo $Sport_info['Ice_Bench_Press']; ?>">
                                </div>
                                <div class="frm">
                                <span>Pull Ups</span>
                                    <input type="text" name="Ice_PullUps" placeholder="Pull Ups" value="<?php echo $Sport_info['Ice_PullUps']; ?>">
                                </div>
                                <div class="frm">
                                <span>Defensive Specialist</span>
                                    <input type="text" name="Ice_Defensive" placeholder="Defensive Specialist" value="<?php echo $Sport_info['Ice_Defensive']; ?>">
                                </div>
                                
                                

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload toppanel-upload">
                                 <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Ice_ProImage3" id="Bas_LeftImageName3">
                               		<?php if($Sport_info['Ice_ProImage3']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Ice_ProImage3'].''); ?>" alt="" id="image3"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  <?php } ?>          
	                            </span>
                            </div>
                        	
                            <div class="image-upload left-upload">
                                 <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Ice_ProImage4" id="Bas_LeftImageName4">
                               		<?php if($Sport_info['Ice_ProImage4']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Ice_ProImage4'].''); ?>" alt="" id="image4"> <?php }else{ ?>
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

	if ($('#Ice_PlayerName').val()=='')
	{
		$('#Ice_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Ice_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Ice_SchoolName').val()=='')
	{
		$('#Ice_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Ice_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Ice_City').val()=='')
	{
		$('#Ice_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Ice_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Ice_State').val()=='')
	{
		$('#Ice_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Ice_State').css('border','1px solid #a4a4a4');
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


