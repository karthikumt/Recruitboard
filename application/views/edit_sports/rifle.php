	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Rifle)</h2>
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
                   
                    
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_rifle" onsubmit="return getStudent_data();">
                     <div class="forums-details">
                	<div class="da-update">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<span>Player Name</span>
                                <input type="text" name="Rifel_PlayerName" id="Rifel_PlayerName" placeholder="Player Name"value="<?php echo $Sport_info['Rifel_PlayerName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>High School Name</span>
                            	<input type="text" name="Rifel_SchoolName" id="Rifel_SchoolName" placeholder="High School Name" value="<?php echo $Sport_info['Rifel_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>City</span>
                            	<input type="text" name="Rifel_City" id="Rifel_City" placeholder="City" value="<?php echo $Sport_info['Rifel_City']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>State</span>
                            	<input type="text" name="Rifel_State" id="Rifel_State" placeholder="State" value="<?php echo $Sport_info['Rifel_State']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Rifel_ProImage" id="Bas_LeftImageName1">
                               		<?php if($Sport_info['Rifel_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Rifel_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>             
	                            </span>
                            </div>
                            
                        	<div class="image-upload right-upload">
                                <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Rifel_ProImage2" id="Bas_LeftImageName2">
                               		<?php if($Sport_info['Rifel_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Rifel_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>             
	                            </span>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                                <h4>INDOOR 3P SMALLBORE (50ft)</h4>
                                <div class="frm">
                                     <span>Avg Aggregate</span>
                                    <input type="text" name="Rifel_Indoor_Avg" placeholder="Avg Aggregate" value="<?php echo $Sport_info['Rifel_Indoor_Avg']; ?>">
                                </div>
                                <div class="frm">
                                <span>Best Aggregate</span>
                                    <input type="text" name="Rifel_Indoor_Best" placeholder="Best Aggregate" value="<?php echo $Sport_info['Rifel_Indoor_Best']; ?>">
                                </div>
                                <h4>OUTDOOR 3P SMALLBORE (50ft)</h4>
                                <div class="frm">
                                <span>Avg Aggregate</span>
                                    <input type="text" name="Rifel_Outdoor_Avg" placeholder="Avg Aggregate" value="<?php echo $Sport_info['Rifel_Outdoor_Avg']; ?>">
                                </div>
                                <div class="frm">
                                <span>Best Aggregate</span>
                                    <input type="text" name="Rifel_Outdoor_Best" placeholder="Best Aggregate" value="<?php echo $Sport_info['Rifel_Outdoor_Best']; ?>">
                                </div>
                                <h4>PRECISION AIR RIFLE (10m)</h4>
                                <div class="frm">
                                <span>40 Shots Avg</span>
                                    <input type="text" name="Rifel_Precision_Avg" placeholder="40 Shots Avg" value="<?php echo $Sport_info['Rifel_Precision_Avg']; ?>">
                                </div>
                                <div class="frm">
                                <span>40 Shots Best</span>
                                    <input type="text" name="Rifel_Precision_Best" placeholder="40 Shots Best" value="<?php echo $Sport_info['Rifel_Precision_Best']; ?>">
                                </div>
                                <div class="frm">
                                <span>60 Shots Avg</span>
                                    <input type="text" name="Rifel_Precision_AvgShot" placeholder="60 Shots Avg" value="<?php echo $Sport_info['Rifel_Precision_AvgShot']; ?>">
                                </div>
                                <div class="frm">
                                <span>60 Shots Best</span>
                                    <input type="text" name="Rifel_Precision_BestShot" placeholder="60 Shots Best" value="<?php echo $Sport_info['Rifel_Precision_BestShot']; ?>">
                                </div>
                                
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Rifel_Height" placeholder="feet" value="<?php echo $Sport_info['Rifel_Height']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Rifel_HeightInche" placeholder="inches" value="<?php echo $Sport_info['Rifel_HeightInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                <span>Weight</span>
                                    <input type="text" name="Rifel_Weight" placeholder="Weight" value="<?php echo $Sport_info['Rifel_Weight']; ?>">
                                </div>
                                
                                

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Rifel_ProImage3" id="Bas_LeftImageName3">
                               		<?php if($Sport_info['Rifel_ProImage3']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Rifel_ProImage3'].''); ?>" alt="" id="image3"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  <?php } ?>             
	                            </span>
                            </div>
                        	
                            <div class="image-upload right-upload">
                                <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Rifel_ProImage4" id="Bas_LeftImageName4">
                               		<?php if($Sport_info['Rifel_ProImage4']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Rifel_ProImage4'].''); ?>" alt="" id="image4"> <?php }else{ ?>
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


