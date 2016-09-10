	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Soccar)</h2>
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
                   
                   
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_soccer" onsubmit="return getStudent_data();">
                       <div class="forums-details">
                	<div class="da-update">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            <span>Player Name</span>
                            	<input type="text" name="Soccer_PlayerName" id="Soccer_PlayerName" placeholder="Player Name" value="<?php echo $Sport_info['Soccer_PlayerName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>High School Name</span>
                            	<input type="text" name="Soccer_SchoolName" id="Soccer_SchoolName" placeholder="High School Name" value="<?php echo $Sport_info['Soccer_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>City</span>
                            	<input type="text" name="Soccer_City" id="Soccer_City" placeholder="City" value="<?php echo $Sport_info['Soccer_City']; ?>">
                            </div>
                            <div class="cols-4">
                             <span>State</span>
                            	<input type="text" name="Soccer_State" id="Soccer_State" placeholder="State" value="<?php echo $Sport_info['Soccer_State']; ?>">
                            </div>
                        </div>
                        <div class="frm clearfix">
                    		<div class="cols-4">
                             <span>Class</span>
                            	<input type="text" name="Soccer_Class" placeholder="Class of 20" value="<?php echo $Sport_info['Soccer_Class']; ?>">
                            </div>
                            <div class="cols-4">
                             <span>Primary Position</span>
                            	<input type="text" name="Soccer_Primary" placeholder="Primary Position" value="<?php echo $Sport_info['Soccer_Primary']; ?>">
                            </div>
                            <div class="cols-4">
                             <span>Secondary Position</span>
                            	<input type="text" name="Soccer_Secondary" placeholder="Secondary Position" value="<?php echo $Sport_info['Soccer_Secondary']; ?>">
                            </div>
                            
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload top-upload">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Soccer_ProImage" id="Bas_LeftImageName1">
                               		<?php if($Sport_info['Soccer_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Soccer_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>          
	                            </span>
                            </div>
                            
                        	<div class="image-upload right-upload">
                                <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Soccer_ProImage2" id="Bas_LeftImageName2">
                               		<?php if($Sport_info['Soccer_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Soccer_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>          
	                            </span>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             	
                                
                                <h4>PER GAME STATISTICS</h4>
                                <div class="frm">
                                 <span>Goals</span>
                                    <input type="text" name="Soccer_Goals" placeholder="Goals" value="<?php echo $Sport_info['Soccer_Goals']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Shots on Goal</span>
                                    <input type="text" name="Soccer_Shots" placeholder="Shots on Goal" value="<?php echo $Sport_info['Soccer_Shots']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Assists</span>
                                    <input type="text" name="Soccer_Assists" placeholder="Assists" value="<?php echo $Sport_info['Soccer_Assists']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Goals Allowed</span>
                                    <input type="text" name="Soccer_Allowed" placeholder="Goals Allowed" value="<?php echo $Sport_info['Soccer_Allowed']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Saves</span>
                                    <input type="text" name="Soccer_Saves" placeholder="Saves" value="<?php echo $Sport_info['Soccer_Saves']; ?>">
                                </div>
                                
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Soccer_Height" placeholder="feet" value="<?php echo $Sport_info['Soccer_Height']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Soccer_HeightInche" placeholder="inches" value="<?php echo $Sport_info['Soccer_HeightInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                 <span>Weight</span>
                                    <input type="text" name="Soccer_Weight" placeholder="Weight" value="<?php echo $Sport_info['Soccer_Weight']; ?>">
                                </div>
                                <div class="frm">
                                 <span>30 Meter Sprint</span>
                                    <input type="text" name="Soccer_Sprint" placeholder="30 Meter Sprint" value="<?php echo $Sport_info['Soccer_Sprint']; ?>">
                                </div>
                                <div class="frm">
                                 <span>5-10-5 Drill</span>
                                    <input type="text" name="Soccer_Drill" placeholder="5-10-5 Drill" value="<?php echo $Sport_info['Soccer_Drill']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Vertical Jump</span>
                                    <input type="text" name="Soccer_Vertical" placeholder="Vertical Jump" value="<?php echo $Sport_info['Soccer_Vertical']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Dominant Leg</span>
                                    <input type="text" name="Soccer_DomaintLeg" placeholder="Dominant Leg" value="<?php echo $Sport_info['Soccer_DomaintLeg']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Defensive Specialist</span>
                                    <input type="text" name="Soccer_Defensive" placeholder="Defensive Specialist" value="<?php echo $Sport_info['Soccer_Defensive']; ?>">
                                </div>
                                

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload top-upload">
                                 <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Soccer_ProImage3" id="Bas_LeftImageName3">
                               		<?php if($Sport_info['Soccer_ProImage3']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Soccer_ProImage3'].''); ?>" alt="" id="image3"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  <?php } ?>          
	                            </span>
                            </div>
                        	
                            <div class="image-upload right-upload">
                                <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Soccer_ProImage4" id="Bas_LeftImageName4">
                               		<?php if($Sport_info['Soccer_ProImage4']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Soccer_ProImage4'].''); ?>" alt="" id="image4"> <?php }else{ ?>
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

	if ($('#Soccer_PlayerName').val()=='')
	{
		$('#Soccer_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Soccer_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Soccer_SchoolName').val()=='')
	{
		$('#Soccer_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Soccer_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Soccer_City').val()=='')
	{
		$('#Soccer_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Soccer_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Soccer_State').val()=='')
	{
		$('#Soccer_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Soccer_State').css('border','1px solid #a4a4a4');
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


