	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Cheerleading)</h2>
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
                 
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_cheerleading" onsubmit="return getStudent_data();">
                    <div class="forums-details">
                	<div class="da-update">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<span>Player Name</span>
                                <input type="text" placeholder="Player Name" name="Cheer_PlayerName" id="Cheer_PlayerName" value="<?php echo $Sport_info['Cheer_PlayerName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>High School Name</span>
                            	<input type="text" placeholder="High School Name" name="Cheer_SchoolName" id="Cheer_SchoolName" value="<?php echo $Sport_info['Cheer_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                             <span>City</span>
                            	<input type="text" placeholder="City" name="Cheer_City" id="Cheer_City" value="<?php echo $Sport_info['Cheer_City']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>State</span>
                            	<input type="text" placeholder="State" name="Cheer_State" id="Cheer_State" value="<?php echo $Sport_info['Cheer_State']; ?>">
                            </div>
                        </div>
                        <div class="frm clearfix">
                    		<div class="cols-4">
                            <span>Class</span>
                            	<input type="text" placeholder="Class of 20" name="Cheer_Class" value="<?php echo $Sport_info['Cheer_Class']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>Primary Position</span>
                            	<input type="text" placeholder="Primary Position" name="Cheer_Primary" value="<?php echo $Sport_info['Cheer_Primary']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>Secondary Position</span>
                            	<input type="text" placeholder="Secondary Position" name="Cheer_Secondary" value="<?php echo $Sport_info['Cheer_Secondary']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload top-upload">
                                <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Cheer_ProImage" id="Bas_LeftImageName1">
                               		<?php if($Sport_info['Cheer_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Cheer_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>      
	                            </span>
                            </div>
                            
                        	<div class="image-upload left-upload">
                                <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Cheer_ProImage2" id="Bas_LeftImageName2">
                               		<?php if($Sport_info['Cheer_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Cheer_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>      
	                            </span>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                            	<h4>STANDING TUMBLING SKILLS</h4>
                                <div class="frm">
                                <span>Back Handspring</span>
                                    <input type="text" placeholder="Back Handspring" name="Cheer_BackHand" value="<?php echo $Sport_info['Cheer_BackHand']; ?>">
                                </div>
                                <div class="frm">
                                <span>Back Tuck</span>
                                    <input type="text" placeholder="Back Tuck" name="Cheer_BackTuck" value="<?php echo $Sport_info['Cheer_BackTuck']; ?>">
                                </div>
                                <div class="frm">
                                <span>Back Handspring Back Tuck</span>
                                    <input type="text" placeholder="Back Handspring Back Tuck" name="Cheer_BackHandSpring" value="<?php echo $Sport_info['Cheer_BackHandSpring']; ?>">
                                </div>
                                <div class="frm">
                                <span>Other</span>
                                    <input type="text" placeholder="Other" name="Cheer_Other" value="<?php echo $Sport_info['Cheer_Other']; ?>">
                                </div>
                                <h4>RUNNING TUMBLING SKILLS</h4>
                                
                                <div class="frm">
                                <span>Roundoff Back Handspring Series</span>
                                    <input type="text" placeholder="Roundoff Back Handspring Series" name="Cheer_RoundOffBack" value="<?php echo $Sport_info['Cheer_RoundOffBack']; ?>">
                                </div>
                                <div class="frm">
                                <span>Roundoff Back Handspring Tuck</span>
                                    <input type="text" placeholder="Roundoff Back Handspring Tuck" name="Cheer_RoundOffBackHand" value="<?php echo $Sport_info['Cheer_RoundOffBackHand']; ?>">
                                </div>
                                <div class="frm">
                                <span>Other</span>
                                    <input type="text" placeholder="Other" name="Cheer_RoundOffOther" value="<?php echo $Sport_info['Cheer_RoundOffOther']; ?>">
                                </div>
                                <h4>STANDING TUMBLING SKILLS</h4>
                                <div class="frm">
                                <span>Flyer</span>
                                    <input type="text" placeholder="Flyer" name="Cheer_Flyer" value="<?php echo $Sport_info['Cheer_Flyer']; ?>">
                                </div>
                                <div class="frm">
                                <span>Base</span>
                                    <input type="text" placeholder="Base" name="Cheer_Base" value="<?php echo $Sport_info['Cheer_Base']; ?>">
                                </div>
                                <div class="frm">
                                <span>Both</span>
                                    <input type="text" placeholder="Both" name="Cheer_Both" value="<?php echo $Sport_info['Cheer_Both']; ?>" />
                                </div>
                                <div class="frm">
                                <span>City</span>
                                    <input type="text" placeholder="Backstop" name="Cheer_BackStop" value="<?php echo $Sport_info['Cheer_BackStop']; ?>">
                                </div>
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" placeholder="feet" name="Cheer_Height" value="<?php echo $Sport_info['Cheer_Height']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" placeholder="inches" name="Cheer_HeightInche" value="<?php echo $Sport_info['Cheer_HeightInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                <span>Weight</span>
                                    <input type="text" placeholder="Weight" name="Cheer_Weight" value="<?php echo $Sport_info['Cheer_Weight']; ?>">
                                </div>

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload top-upload">
                                <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Cheer_ProImage3" id="Bas_LeftImageName3">
                               		<?php if($Sport_info['Cheer_ProImage3']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Cheer_ProImage3'].''); ?>" alt="" id="image3"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  <?php } ?>     
	                            </span>
                            </div>
                        	
                            <div class="image-upload left-upload">
                               <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Cheer_ProImage4" id="Bas_LeftImageName4">
                               		<?php if($Sport_info['Cheer_ProImage4']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Cheer_ProImage4'].''); ?>" alt="" id="image4"> <?php }else{ ?>
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

	if ($('#Cheer_PlayerName').val()=='')
	{
		$('#Cheer_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Cheer_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Cheer_SchoolName').val()=='')
	{
		$('#Cheer_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Cheer_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Cheer_City').val()=='')
	{
		$('#Cheer_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Cheer_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Cheer_State').val()=='')
	{
		$('#Cheer_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Cheer_State').css('border','1px solid #a4a4a4');
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