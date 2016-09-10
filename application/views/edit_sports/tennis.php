	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Tennis)</h2>
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
                   
                    
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_tennis" onsubmit="return getStudent_data();">
                    <div class="forums-details">
                	<div class="da-update">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<span>Player Name</span>
                                <input type="text" name="Tenis_PlayerName" id="Tenis_PlayerName" placeholder="Player Name"value="<?php echo $Sport_info['Tenis_PlayerName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>High School Name</span>
                            	<input type="text" name="Tenis_SchoolName" id="Tenis_SchoolName" placeholder="High School Name" value="<?php echo $Sport_info['Tenis_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>City</span>
                            	<input type="text" name="Tenis_City" id="Tenis_City" placeholder="City" value="<?php echo $Sport_info['Tenis_City']; ?>">
                            </div>
                            <div class="cols-4">
							<span>State</span>
	                            	<input type="text" name="Tenis_State" id="Tenis_State" placeholder="State" value="<?php echo $Sport_info['Tenis_State']; ?>">
                            </div>
                        </div>
                        
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload top-upload">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Tenis_ProImage" id="Bas_LeftImageName1">
                               		<?php if($Sport_info['Tenis_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Tenis_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>                
	                            </span>
                            </div>
                            
                        	<div class="image-upload left-upload">
                                <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Tenis_ProImage2" id="Bas_LeftImageName2">
                               		<?php if($Sport_info['Tenis_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Tenis_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>                
	                            </span>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                                <div class="frm">
                                <span>Position</span>
                                    <input type="text" name="Tenis_Position" placeholder="Position" value="<?php echo $Sport_info['Tenis_Position']; ?>">
                                </div>
                                <h4>MATCH STATISTICS</h4>
                                <div class="frm">
                                <span>Fastest Serve</span>
                                    <input type="text" name="Tenis_Fastest" placeholder="Fastest Serve" value="<?php echo $Sport_info['Tenis_Fastest']; ?>">
                                </div>
                                <div class="frm">
                                <span>First Serve %</span>
                                    <input type="text" name="Tenis_First" placeholder="First Serve %" value="<?php echo $Sport_info['Tenis_First']; ?>">
                                </div>
                                <div class="frm">
                                <span>Second Serve %</span>
                                    <input type="text" name="Tenis_Second" placeholder="Second Serve %" value="<?php echo $Sport_info['Tenis_Second']; ?>"> 
                                </div>
                                
                                <h4>PERSONAL RANKING</h4>
                                
                                <div class="frm">
                                <span>Local Team</span>
                                    <input type="text" name="Tenis_Local" placeholder="Local Team" value="<?php echo $Sport_info['Tenis_Local']; ?>">
                                </div>
                                <div class="frm">
                                <span>USTA Rank</span>
                                    <input type="text" name="Tenis_Usta" placeholder="USTA Rank" value="<?php echo $Sport_info['Tenis_Usta']; ?>">
                                </div>
                                <div class="frm">
                                <span>ITF Rank</span>
                                    <input type="text" name="Tenis_Itf" placeholder="ITF Rank" value="<?php echo $Sport_info['Tenis_Itf']; ?>">
                                </div>
                                <div class="frm">
                                <span>WTA Rank</span>
                                    <input type="text" name="Tenis_Wta" placeholder="WTA Rank" value="<?php echo $Sport_info['Tenis_Wta']; ?>">
                                </div>
                                <div class="frm">
                                <span>TennisRecruiting.net Rank</span>
                                    <input type="text" name="Tenis_Recuirt" placeholder="TennisRecruiting.net Rank" value="<?php echo $Sport_info['Tenis_Recuirt']; ?>">
                                </div>
                                <div class="frm">
                                <span>ATA Rank</span>
                                    <input type="text" name="Tenis_Ata" placeholder="ATA Rank" value="<?php echo $Sport_info['Tenis_Ata']; ?>">
                                </div>
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Tenis_Height" placeholder="feet" value="<?php echo $Sport_info['Tenis_Height']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Tenis_HeightInche" placeholder="inches" value="<?php echo $Sport_info['Tenis_HeightInche']; ?>">
                                    </div>
                                </div>
                                 <div class="frm">
                                 <span>Weight</span>
                                    <input type="text" name="Tenis_Weight" placeholder="Weight" value="<?php echo $Sport_info['Tenis_Weight']; ?>">
                                </div>
                                <div class="frm">
                                <span>Dominant Hand</span>
                                    <input type="text" name="Tenis_Domaint" placeholder="Dominant Hand" value="<?php echo $Sport_info['Tenis_Domaint']; ?>">
                                </div>

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload top-upload">
                                 <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Tenis_ProImage3" id="Bas_LeftImageName3">
                               		<?php if($Sport_info['Tenis_ProImage3']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Tenis_ProImage3'].''); ?>" alt="" id="image3"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  <?php } ?>                
	                            </span>
                            </div>
                        	
                            <div class="image-upload left-upload">
                                 <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Tenis_ProImage4" id="Bas_LeftImageName4">
                               		<?php if($Sport_info['Tenis_ProImage4']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Tenis_ProImage4'].''); ?>" alt="" id="image4"> <?php }else{ ?>
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

	if ($('#Tenis_PlayerName').val()=='')
	{
		$('#Tenis_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Tenis_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Tenis_SchoolName').val()=='')
	{
		$('#Tenis_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Tenis_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Tenis_City').val()=='')
	{
		$('#Tenis_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Tenis_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Tenis_State').val()=='')
	{
		$('#Tenis_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Tenis_State').css('border','1px solid #a4a4a4');
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


