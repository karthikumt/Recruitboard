	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Fencing)</h2>
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
                   
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_fencing" onsubmit="return getStudent_data();">
                    <div class="forums-details">
                	<div class="da-update">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            <span>Player Name</span>	
                                <input type="text" placeholder="Player Name" name="Fence_PlayerName" id="Fence_PlayerName" value="<?php echo $Sport_info['Fence_PlayerName']; ?>">
                            </div>
                            <div class="cols-4">
                             <span>High School Name</span>
                            	<input type="text" placeholder="High School Name" name="Fence_SchoolName" id="Fence_SchoolName" value="<?php echo $Sport_info['Fence_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>City</span>
                            	<input type="text" placeholder="City" name="Fence_City" id="Fence_City" value="<?php echo $Sport_info['Fence_City']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>State</span>
                            	<input type="text" placeholder="State" name="Fence_State" id="Fence_State" value="<?php echo $Sport_info['Fence_State']; ?>">
                            </div>
                        </div>
                        <div class="frm clearfix">
                    		<div class="cols-4">
                            <span>Class</span>
                            	<input type="text" placeholder="Class of 20" name="Fence_Class" value="<?php echo $Sport_info['Fence_Class']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>Primary Position</span>
                            	<input type="text" placeholder="Primary Position" name="Fence_Primary" value="<?php echo $Sport_info['Fence_Primary']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>Secondary Position</span>
                            	<input type="text" placeholder="Secondary Position" name="Fence_Secondary" value="<?php echo $Sport_info['Fence_Secondary']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload">
                                <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Fence_ProImage" id="Bas_LeftImageName1">
                               		 <?php if($Sport_info['Fence_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Fence_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>       
	                            </span>
                            </div>
                            
                        	<div class="image-upload">
                                <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Fence_ProImage2" id="Bas_LeftImageName2">
                               		<?php if($Sport_info['Fence_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Fence_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>         
	                            </span>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             
                                <h4>MATCH STATISTICS</h4>
                                <div class="frm">
                                 <span>Wins</span>
                                    <input type="text" placeholder="Wins" name="Fence_Wins" value="<?php echo $Sport_info['Fence_Wins']; ?>">
                                </div>
                                <div class="frm">
                                <span>Losses</span>
                                    <input type="text" placeholder="Losses" name="Fence_Losses" value="<?php echo $Sport_info['Fence_Losses']; ?>">
                                </div>
                                <div class="frm">
                                <span>Draws</span>
                                    <input type="text" placeholder="Draws" name="Fence_Draws" value="<?php echo $Sport_info['Fence_Draws']; ?>">
                                </div>
                                <div class="frm">
                                <span>Years of Experience</span>
                                    <input type="text" placeholder="Years of Experience" name="Fence_Years" value="<?php echo $Sport_info['Fence_Years']; ?>">
                                </div>
                                <div class="frm">
                                <span>USFA Classification</span>
                                    <input type="text" name="Fence_Classification" placeholder="USFA Classification" value="<?php echo $Sport_info['Fence_Classification']; ?>">
                                </div>
                                
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" placeholder="feet" name="Fence_Height" value="<?php echo $Sport_info['Fence_Height']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" placeholder="inches" name="Fence_HeightInche" value="<?php echo $Sport_info['Fence_HeightInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                <span>Weight</span>
                                    <input type="text" placeholder="Weight" name="Fence_Weight" value="<?php echo $Sport_info['Fence_Weight']; ?>">
                                </div>
                                <div class="frm">
                                <span>Dominant Hand</span>
                                    <input type="text" placeholder="Dominant Hand" name="Fence_DomaintHand" value="<?php echo $Sport_info['Fence_DomaintHand']; ?>">
                                </div>
                                
                                

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload">
                               <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Fence_ProImage3" id="Bas_LeftImageName3">
                               		<?php if($Sport_info['Fence_ProImage3']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Fence_ProImage2'].''); ?>" alt="" id="image3"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  <?php } ?>          
	                            </span>
                            </div>
                        	
                            <div class="image-upload">
                              <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Fence_ProImage4" id="Bas_LeftImageName4">
                               		<?php if($Sport_info['Fence_ProImage4']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Fence_ProImage4'].''); ?>" alt="" id="image4"> <?php }else{ ?>
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

	if ($('#Dance_PlayerName').val()=='')
	{
		$('#Dance_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Dance_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Dance_SchoolName').val()=='')
	{
		$('#Dance_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Dance_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Dance_City').val()=='')
	{
		$('#Dance_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Dance_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Dance_State').val()=='')
	{
		$('#Dance_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Dance_State').css('border','1px solid #a4a4a4');
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


