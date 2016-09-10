	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Lacrosse)</h2>
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
                   
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_lacrosse" onsubmit="return getStudent_data();">
                     <div class="forums-details">
                	<div class="da-update">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            <span>Player Name</span>
                            	<input type="text" placeholder="Player Name" name="Lac_PlayerName" id="Lac_PlayerName" value="<?php echo $Sport_info['Lac_PlayerName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>High School Name</span>
                            	<input type="text" name="Lac_SchoolName" id="Lac_SchoolName" placeholder="High School Name" value="<?php echo $Sport_info['Lac_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>City</span>
                            	<input type="text" name="Lac_City" id="Lac_City" placeholder="City" value="<?php echo $Sport_info['Lac_City']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>State</span>
                            	<input type="text" name="Lac_State" id="Lac_State" placeholder="State" value="<?php echo $Sport_info['Lac_State']; ?>">
                            </div>
                        </div>
                        <div class="frm clearfix">
                    		<div class="cols-4">
                            <span>Class</span>
                            	<input type="text" name="Lac_Class" placeholder="Class of 20" value="<?php echo $Sport_info['Lac_Class']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>Primary Position</span>
                            	<input type="text" name="Lac_Primary" placeholder="Primary Position" value="<?php echo $Sport_info['Lac_Primary']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>Secondary Position</span>
                            	<input type="text" name="Lac_Secondary" placeholder="Secondary Position" value="<?php echo $Sport_info['Lac_Secondary']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload top-upload">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Lac_ProImage" id="Bas_LeftImageName1">
                               		<?php if($Sport_info['Lac_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Lac_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>           
	                            </span>
                            </div>
                            
                        	<div class="image-upload left-upload">
                                <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Lac_ProImage2" id="Bas_LeftImageName2">
                               		<?php if($Sport_info['Lac_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Lac_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>           
	                            </span>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                                <h4> PER GAME STATISTICS</h4>
                                <div class="frm">
                                <span>Goals</span>
                                    <input type="text" name="Lac_Goals" placeholder="Goals" value="<?php echo $Sport_info['Lac_Goals']; ?>">
                                </div>
                                <div class="frm">
                                <span>Shots on Goal</span>
                                    <input type="text" name="Lac_Shots" placeholder="Shots on Goal" value="<?php echo $Sport_info['Lac_Shots']; ?>">
                                </div>
                                <div class="frm">
                                <span>Assists</span>
                                    <input type="text" name="Lac_Assists" placeholder="Assists" value="<?php echo $Sport_info['Lac_Assists']; ?>">
                                </div>
                                <div class="frm">
                                <span>Ground Ball Pickups</span>
                                    <input type="text" name="Lac_Ground" placeholder="Ground Ball Pickups" value="<?php echo $Sport_info['Lac_Ground']; ?>">
                                </div>
                                <div class="frm">
                                <span>Goals Allowed</span>
                                    <input type="text" name="Lac_Allowed" placeholder="Goals Allowed" value="<?php echo $Sport_info['Lac_Allowed']; ?>">
                                </div>
                                <div class="frm">
                                <span>Saves</span> 
                                    <input type="text" name="Lac_Saves" placeholder="Saves" value="<?php echo $Sport_info['Lac_Saves']; ?>">
                                </div>
                                <div class="frm">
                                <span>Faceoff % Won</span>
                                    <input type="text" name="Lac_Faceoff" placeholder="Faceoff % Won" value="<?php echo $Sport_info['Lac_Faceoff']; ?>">
                                </div>
                                <div class="frm">
                                <span>Penalty Minutes</span>
                                    <input type="text" name="Lac_Penalty" placeholder="Penalty Minutes" value="<?php echo $Sport_info['Lac_Penalty']; ?>">
                                </div>
                                
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Lac_Height" placeholder="feet" value="<?php echo $Sport_info['Lac_Height']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Lac_HeightInche" placeholder="inches" value="<?php echo $Sport_info['Lac_HeightInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                <span>Weight</span>
                                    <input type="text" name="Lac_Weight" placeholder="Weight" value="<?php echo $Sport_info['Lac_Weight']; ?>">
                                </div>
                                <div class="frm clearfix">
                                    <div class="label fl">Wingspan</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Lac_WingSpan" placeholder="feet" value="<?php echo $Sport_info['Lac_WingSpan']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Lac_WingSpanInche" placeholder="inches" value="<?php echo $Sport_info['Lac_WingSpanInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                <span>40 time</span>
                                    <input type="text" name="Lac_Times" placeholder="40 time" value="<?php echo $Sport_info['Lac_Times']; ?>">
                                </div>
                                <div class="frm">
                                <span>Vertical Jump</span>
                                    <input type="text" name="Lac_Vertical" placeholder="Vertical Jump" value="<?php echo $Sport_info['Lac_Vertical']; ?>">
                                </div>
                                <div class="frm">
                                <span>Dominant hand</span>
                                    <input type="text" name="Lac_DomaintHand" placeholder="Dominant hand" value="<?php echo $Sport_info['Lac_DomaintHand']; ?>">
                                </div>
                                <div class="frm">
                                <span>Defensive Specialist</span>
                                    <input type="text" name="Lac_Defensive" placeholder="Defensive Specialist" value="<?php echo $Sport_info['Lac_Defensive']; ?>">
                                </div>
                                

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload top-upload">
                                <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Lac_ProImage3" id="Bas_LeftImageName3">
                               		<?php if($Sport_info['Lac_ProImage3']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Lac_ProImage3'].''); ?>" alt="" id="image3"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  <?php } ?>          
	                            </span>
                            </div>
                        	
                            <div class="image-upload left-upload">
                                <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Lac_ProImage4" id="Bas_LeftImageName4">
                               		<?php if($Sport_info['Lac_ProImage4']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Lac_ProImage4'].''); ?>" alt="" id="image4"> <?php }else{ ?>
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

	if ($('#Lac_PlayerName').val()=='')
	{
		$('#Lac_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Lac_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Lac_SchoolName').val()=='')
	{
		$('#Lac_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Lac_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Lac_City').val()=='')
	{
		$('#Lac_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Lac_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Lac_State').val()=='')
	{
		$('#Lac_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Lac_State').css('border','1px solid #a4a4a4');
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


