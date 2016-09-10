	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Dance Team)</h2>
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
                 
                   
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_dance_team" onsubmit="return getStudent_data();">
                    <div class="forums-details">
                	<div class="da-update">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<span>Player Name</span>
                                <input type="text" placeholder="Player Name" name="Dance_PlayerName" id="Dance_PlayerName" value="<?php echo $Sport_info['Dance_PlayerName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>High School Name</span>
                            	<input type="text" placeholder="High School Name" name="Dance_SchoolName" id="Dance_SchoolName" value="<?php echo $Sport_info['Dance_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                             <span>City</span>
                            	<input type="text" placeholder="City" name="Dance_City" id="Dance_City" value="<?php echo $Sport_info['Dance_City']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>State</span>
                            	<input type="text" placeholder="State" name="Dance_State" id="Dance_State" value="<?php echo $Sport_info['Dance_State']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload top-upload">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Dance_ProImage" id="Bas_LeftImageName1">
                               		 <?php if($Sport_info['Dance_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Dance_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>       
	                            </span>
                            </div>
                            
                        	<div class="image-upload left-upload">
                                <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Dance_ProImage2" id="Bas_LeftImageName2">
                               		 <?php if($Sport_info['Dance_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Dance_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>     
	                            </span>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             	<h4>LEAPS<br> <span>( List Top 3 )</span></h4>
                                	<div class="frm">
                                    	<input type="text" name="Dance_Leaps_One" value="<?php echo $Sport_info['Dance_Leaps_One']; ?>">
                                	</div>
                                    <div class="frm">
                                    	<input type="text" name="Dance_Leaps_Two" value="<?php echo $Sport_info['Dance_Leaps_Two']; ?>">
                                	</div>
                                    <div class="frm">
                                    	<input type="text" name="Dance_Leaps_Three" value="<?php echo $Sport_info['Dance_Leaps_Three']; ?>">
                                	</div>
                                <h4>TURNS<br> <span>( List Top 3 )</span> </h4>
                                	<div class="frm">
                                    	<input type="text" name="Dance_Turns_One" value="<?php echo $Sport_info['Dance_Turns_One']; ?>">
                                	</div>
                                    <div class="frm">
                                    	<input type="text" name="Dance_Turns_Two" value="<?php echo $Sport_info['Dance_Turns_Two']; ?>">
                                	</div>
                                    <div class="frm">
                                    	<input type="text" name="Dance_Turns_Three" value="<?php echo $Sport_info['Dance_Turns_Three']; ?>">
                                	</div>
                                
                                <h4>JUMPS<br> <span>( List Top 3 )</span> </h4>
                                	<div class="frm">
                                    	<input type="text" name="Dance_Jumps_One" value="<?php echo $Sport_info['Dance_Jumps_One']; ?>">
                                	</div>
                                    <div class="frm">
                                    	<input type="text" name="Dance_Jumps_Two" value="<?php echo $Sport_info['Dance_Jumps_Two']; ?>">
                                	</div>
                                    <div class="frm">
                                    	<input type="text" name="Dance_Jumps_Three" value="<?php echo $Sport_info['Dance_Jumps_Three']; ?>">
                                	</div>
                                
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" placeholder="feet" name="Dance_Height" value="<?php echo $Sport_info['Dance_Height']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" placeholder="inches" name="Dance_HeightInche" value="<?php echo $Sport_info['Dance_HeightInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                    <span>Weight</span>
                                    <input type="text" placeholder="Weight" name="Dance_Weight" value="<?php echo $Sport_info['Dance_Weight']; ?>">
                                </div>
                                <div class="frm">
                                <span>Dominant Hand</span>
                                    <input type="text" placeholder="Dominant Hand" name="Dance_DomaintHand" value="<?php echo $Sport_info['Dance_DomaintHand']; ?>">
                                </div>
                                
                                

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload top-upload">
                                 <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Dance_ProImage3" id="Bas_LeftImageName3">
                               		 <?php if($Sport_info['Dance_ProImage3']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Dance_ProImage3'].''); ?>" alt="" id="image3"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  <?php } ?>    
	                            </span>
                            </div>
                        	
                            <div class="image-upload left-upload">
                                 <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Dance_ProImage4" id="Bas_LeftImageName4">
                               		 <?php if($Sport_info['Dance_ProImage4']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Dance_ProImage4'].''); ?>" alt="" id="image4"> <?php }else{ ?>
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


