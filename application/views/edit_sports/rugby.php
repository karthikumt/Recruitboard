	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Rugby)</h2>
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
                    
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_rugby" onsubmit="return getStudent_data();">
                     <div class="forums-details">
                	<div class="da-update">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<span>Player Name</span>
                                <input type="text" name="Rugby_PlayerName" id="Rugby_PlayerName" placeholder="Player Name"value="<?php echo $Sport_info['Rugby_PlayerName']; ?>" >
                            </div>
                            <div class="cols-4">
                            <span>High School Name</span>
                            	<input type="text" name="Rugby_SchoolName" id="Rugby_SchoolName" placeholder="High School Name" value="<?php echo $Sport_info['Rugby_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>City</span>
                            	<input type="text" name="Rugby_City" id="Rugby_City" placeholder="City" value="<?php echo $Sport_info['Rugby_City']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>State</span>
                            	<input type="text" name="Rugby_State" id="Rugby_State" placeholder="State" value="<?php echo $Sport_info['Rugby_State']; ?>">
                            </div>
                        </div>
                        <div class="frm clearfix">
                    		<div class="cols-4">
                            <span>Class</span>
                            	<input type="text" name="Rugby_Class" placeholder="Class of 20" value="<?php echo $Sport_info['Rugby_Class']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>Primary Position</span>
                            	<input type="text" name="Rugby_Primary" placeholder="Primary Position" value="<?php echo $Sport_info['Rugby_Primary']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>Secondary Position</span>
                            	<input type="text" name="Rugby_Secondary" placeholder="Secondary Position" value="<?php echo $Sport_info['Rugby_Secondary']; ?>">
                            </div>
                            
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload top-upload">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Rugby_ProImage" id="Bas_LeftImageName1">
                               		<?php if($Sport_info['Rugby_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Rugby_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>           
	                            </span>
                            </div>
                            
                        	<div class="image-upload left-upload">
                                <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Rugby_ProImage2" id="Bas_LeftImageName2">
                               		<?php if($Sport_info['Rugby_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Rugby_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>           
	                            </span>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             	
                                
                                <h4>PER GAME STATISTICS</h4>
                                <div class="frm">
                                <span>Points</span>
                                    <input type="text" name="Rugby_Point" placeholder="Points" value="<?php echo $Sport_info['Rugby_Point']; ?>">
                                </div>
                                <div class="frm">
                                <span>Trys</span>
                                    <input type="text" name="Rugby_Trys" placeholder="Trys" value="<?php echo $Sport_info['Rugby_Trys']; ?>">
                                </div>
                                <div class="frm">
                                <span>Kicks</span>
                                    <input type="text" name="Rugby_Kicks" placeholder="Kicks" value="<?php echo $Sport_info['Rugby_Kicks']; ?>">
                                </div>
                                <div class="frm">
                                <span>Passes</span>
                                    <input type="text" name="Rugby_Passes" placeholder="Passes" value="<?php echo $Sport_info['Rugby_Passes']; ?>">
                                </div>
                                <div class="frm">
                                <span>Meters Run</span>
                                    <input type="text" name="Rugby_MeterRuns" placeholder="Meters Run" value="<?php echo $Sport_info['Rugby_MeterRuns']; ?>">
                                </div>
                                <div class="frm">
                                <span>Runs</span>
                                    <input type="text" name="Rugby_Run" placeholder="Runs" value="<?php echo $Sport_info['Rugby_Run']; ?>">
                                </div>
                                <div class="frm">
                                <span>Meters / Run</span>
                                    <input type="text" name="Rugby_Meter" placeholder="Meters / Run" value="<?php echo $Sport_info['Rugby_Meter']; ?>">
                                </div>
                                <div class="frm">
                                <span>Offloads</span>
                                    <input type="text" name="Rugby_Offloads" placeholder="Offloads" value="<?php echo $Sport_info['Rugby_Offloads']; ?>">
                                </div>
                                
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Rugby_Height" placeholder="feet" value="<?php echo $Sport_info['Rugby_Height']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Rugby_HeightInche" placeholder="inches" value="<?php echo $Sport_info['Rugby_HeightInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                <span>Weight</span>
                                    <input type="text" name="Rugby_Weight" placeholder="Weight" value="<?php echo $Sport_info['Rugby_Weight']; ?>">
                                </div>
                                <div class="frm">
                                <span>Bench Press Max</span>
                                    <input type="text" name="Rugby_Bench" placeholder="Bench Press Max" value="<?php echo $Sport_info['Rugby_Bench']; ?>">
                                </div>
                                <div class="frm">
                                <span>Squat Max</span>
                                    <input type="text" name="Rugby_Squat" placeholder="Squat Max" value="<?php echo $Sport_info['Rugby_Squat']; ?>">
                                </div>
                                <div class="frm">
                                <span>40 TIme</span>
                                    <input type="text" name="Rugby_Time" placeholder="40 TIme" value="<?php echo $Sport_info['Rugby_Time']; ?>">
                                </div>
                                <div class="frm">
                                <span>Dominant Hand</span>
                                    <input type="text" name="Rugby_DomaintHand" placeholder="Dominant Hand" value="<?php echo $Sport_info['Rugby_DomaintHand']; ?>">
                                </div>
                                <div class="frm">
                                <span>Defensive Specialist</span>
                                    <input type="text" name="Rugby_Defensive" placeholder="Defensive Specialist" value="<?php echo $Sport_info['Rugby_Defensive']; ?>">
                                </div>
                                
                                

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload top-upload">
                                 <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Rugby_ProImage3" id="Bas_LeftImageName3">
                               		<?php if($Sport_info['Rugby_ProImage3']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Rugby_ProImage3'].''); ?>" alt="" id="image3"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  <?php } ?>          
	                            </span>
                            </div>
                        	
                            <div class="image-upload left-upload">
                                 <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Rugby_ProImage4" id="Bas_LeftImageName4">
                               		<?php if($Sport_info['Rugby_ProImage4']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Rugby_ProImage4'].''); ?>" alt="" id="image4"> <?php }else{ ?>
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

	if ($('#Rugby_PlayerName').val()=='')
	{
		$('#Rugby_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Rugby_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Rugby_SchoolName').val()=='')
	{
		$('#Rugby_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Rugby_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Rugby_City').val()=='')
	{
		$('#Rugby_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Rugby_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Rugby_State').val()=='')
	{
		$('#Rugby_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Rugby_State').css('border','1px solid #a4a4a4');
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


