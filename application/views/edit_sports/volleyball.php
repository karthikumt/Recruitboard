	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Volley Ball)</h2>
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
                  
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_volleyball" onsubmit="return getStudent_data();">
                    <div class="forums-details">
                	<div class="da-update"> 
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<span>Player Name</span>
                                <input type="text" name="Volly_PlayerName" id="Volly_PlayerName" placeholder="Player Name"value="<?php echo $Sport_info['Volly_PlayerName']; ?>"  >
                            </div>
                            <div class="cols-4">
                            <span>High School Name</span>
                            	<input type="text" name="Volly_SchoolName" id="Volly_SchoolName" placeholder="High School Name" value="<?php echo $Sport_info['Volly_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>City</span>
                            	<input type="text" name="Volly_City" id="Volly_City" placeholder="City" value="<?php echo $Sport_info['Volly_City']; ?>"> 
                            </div>
                            <div class="cols-4">
                            <span>State</span>
                            	<input type="text"  name="Volly_State" name="Volly_State" placeholder="State" value="<?php echo $Sport_info['Volly_State']; ?>"> 
                            </div>
                        </div>
                        <div class="frm clearfix">
                    		<div class="cols-4">
                            <span>Class</span>
                            	<input type="text" name="Volly_Class" placeholder="Class of 20" value="<?php echo $Sport_info['Volly_Class']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>Primary Position</span>
                            	<input type="text" name="Volly_Primary" placeholder="Primary Position" value="<?php echo $Sport_info['Volly_Primary']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>Secondary Position</span>
                            	<input type="text" name="Volly_Secondary" placeholder="Secondary Position" value="<?php echo $Sport_info['Volly_Secondary']; ?>">
                            </div>
                           
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload top-upload">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Volly_ProImage" id="Bas_LeftImageName1">
                               		<?php if($Sport_info['Volly_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Volly_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>             
	                            </span>
                            </div>
                            
                        	<div class="image-upload left-upload">
                                <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Volly_ProImage2" id="Bas_LeftImageName2">
                               		<?php if($Sport_info['Volly_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Volly_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>             
	                            </span>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             	
                                <h4>GAME STATISTICS</h4>
                                <div class="frm">
                                <span>Hitting %</span>
                                    <input type="text" name="Volly_Hitting" placeholder="Hitting %" value="<?php echo $Sport_info['Volly_Hitting']; ?>">
                                </div>
                                <div class="frm">
                                <span>Blocks/Set</span>
                                    <input type="text" name="Volly_Block" placeholder="Blocks/Set" value="<?php echo $Sport_info['Volly_Block']; ?>">
                                </div>
                                <div class="frm">
                                <span>Digs/Set</span>
                                    <input type="text" name="Volly_Digs" placeholder="Digs/Set" value="<?php echo $Sport_info['Volly_Digs']; ?>">
                                </div>
                                <div class="frm">
                                <span>Aces/Set</span>
                                    <input type="text" name="Volly_Set" placeholder="Aces/Set" value="<?php echo $Sport_info['Volly_Set']; ?>">
                                </div>
                                <div class="frm">
                                <span>Ace %</span>
                                    <input type="text" name="Volly_Ace" placeholder="Ace %" value="<?php echo $Sport_info['Volly_Ace']; ?>">
                                </div>
                                <div class="frm">
                                <span>Serving Points/Set</span>
                                    <input type="text" name="Volly_Serving" placeholder="Serving Points/Set" value="<?php echo $Sport_info['Volly_Serving']; ?>">
                                </div>
                                <div class="frm">
                                <span>Serve %</span>
                                    <input type="text" name="Volly_Serve" placeholder="Serve %" value="<?php echo $Sport_info['Volly_Serve']; ?>">
                                </div>
                                <div class="frm">
                                <span>Assists/Set</span>
                                    <input type="text" name="Volly_Assists" placeholder="Assists/Set" value="<?php echo $Sport_info['Volly_Assists']; ?>">
                                </div>
                                <div class="frm">
                                <span>Kills/Set</span>
                                    <input type="text" name="Volly_KillSet" placeholder="Kills/Set" value="<?php echo $Sport_info['Volly_KillSet']; ?>">
                                </div>
                                <div class="frm">
                                <span>Kill %</span>
                                    <input type="text" name="Volly_Kill" placeholder="Kill %" value="<?php echo $Sport_info['Volly_Kill']; ?>">
                                </div>
                                
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Volly_Height" placeholder="feet" value="<?php echo $Sport_info['Volly_Height']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Volly_HeightInche" placeholder="inches" value="<?php echo $Sport_info['Volly_HeightInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                <span>Weight</span>
                                    <input type="text" name="Volly_Weight" placeholder="Weight" value="<?php echo $Sport_info['Volly_Weight']; ?>">
                                </div>
                                <div class="frm">
                                <span>Dominant Hand</span>
                                    <input type="text" name="Volly_DomaintHand" placeholder="Dominant Hand" value="<?php echo $Sport_info['Volly_DomaintHand']; ?>">
                                </div>
                                <div class="frm">
                                <span>Standing Vertical</span>
                                    <input type="text" name="Volly_Standing" placeholder="Standing Vertical" value="<?php echo $Sport_info['Volly_Standing']; ?>">
                                </div>
                                <div class="frm">
                                <span>Approach Vertical</span>
                                    <input type="text" name="Volly_Approach" placeholder="Approach Vertical" value="<?php echo $Sport_info['Volly_Approach']; ?>">
                                </div>
                                
                                

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload top-upload">
                                <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Volly_ProImage3" id="Bas_LeftImageName3">
                               		<?php if($Sport_info['Volly_ProImage3']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Volly_ProImage3'].''); ?>" alt="" id="image3"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  <?php } ?>             
	                            </span>
                            </div>
                        	
                            <div class="image-upload left-upload">
                                 <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Volly_ProImage4" id="Bas_LeftImageName4">
                               		<?php if($Sport_info['Volly_ProImage4']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Volly_ProImage4'].''); ?>" alt="" id="image4"> <?php }else{ ?>
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

	if ($('#Volly_PlayerName').val()=='')
	{
		$('#Volly_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Volly_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Volly_SchoolName').val()=='')
	{
		$('#Volly_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Volly_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Volly_City').val()=='')
	{
		$('#Volly_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Volly_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Volly_State').val()=='')
	{
		$('#Volly_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Volly_State').css('border','1px solid #a4a4a4');
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


