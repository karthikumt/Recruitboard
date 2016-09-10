	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Wrestling)</h2>
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
                   
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_wrestling" onsubmit="return getStudent_data();">
                    <div class="forums-details">
                	<div class="da-update">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<span>Player Name</span>
                                <input type="text" name="Wrest_PlayerName" id="Wrest_PlayerName" placeholder="Player Name" value="<?php echo $Sport_info['Wrest_PlayerName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>High School Name</span>
                            	<input type="text" name="Wrest_SchoolName" id="Wrest_SchoolName" placeholder="High School Name" value="<?php echo $Sport_info['Wrest_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>City</span>
                            	<input type="text" name="Wrest_City" id="Wrest_City" placeholder="City" value="<?php echo $Sport_info['Wrest_City']; ?>">
                            </div>
                            <div class="cols-4">
                             <span>State</span>
                            	<input type="text" name="Wrest_State" id="Wrest_State" placeholder="State" value="<?php echo $Sport_info['Wrest_State']; ?>">
                            </div>
                        </div>
                        
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload">
                                <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Wrest_ProImage" id="Bas_LeftImageName1">
                               		<?php if($Sport_info['Wrest_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Wrest_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>             
	                            </span>
                            </div>
                            
                        	<div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Wrest_ProImage2" id="Bas_LeftImageName2">
                               		<?php if($Sport_info['Wrest_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Wrest_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>             
	                            </span>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             	
                                <h4>MATCH STATISTICS</h4>
                                <div class="frm">
                                 <span>Win/Loss Record</span>
                                    <input type="text" name="Wrest_Win" placeholder="Win/Loss Record" value="<?php echo $Sport_info['Wrest_Win']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Winning %</span>
                                    <input type="text" name="Wrest_Winning" placeholder="Winning %" value="<?php echo $Sport_info['Wrest_Winning']; ?>">
                                </div>
                                <div class="frm">
                                 <span># of Pins</span>
                                    <input type="text" name="Wrest_Pins" placeholder="# of Pins" value="<?php echo $Sport_info['Wrest_Pins']; ?>">
                                </div>
                                <div class="frm">
                                 <span>#  of Years Starting Varsity</span>
                                    <input type="text" name="Wrest_Years" placeholder="#  of Years Starting Varsity" value="<?php echo $Sport_info['Wrest_Years']; ?>">
                                </div>
                                <div class="frm">
                                 <span>State Ranking</span>
                                    <input type="text" name="Wrest_StateRank" placeholder="State Ranking" value="<?php echo $Sport_info['Wrest_StateRank']; ?>">
                                </div>
                                
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Wrest_Height" placeholder="feet" value="<?php echo $Sport_info['Wrest_Height']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Wrest_HeightInche" placeholder="inches" value="<?php echo $Sport_info['Wrest_HeightInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                 <span>Natural Weight</span>
                                    <input type="text" name="Wrest_Weight" placeholder="Natural Weight" value="<?php echo $Sport_info['Wrest_Weight']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Projected College Weight Class</span>
                                    <input type="text" name="Wrest_Projected" placeholder="Projected College Weight Class" value="<?php echo $Sport_info['Wrest_Projected']; ?>">                               
                                 </div>
                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Wrest_ProImage3" id="Bas_LeftImageName3">
                               		<?php if($Sport_info['Wrest_ProImage3']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Wrest_ProImage3'].''); ?>" alt="" id="image3"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  <?php } ?>             
	                            </span>
                            </div>
                        	
                            <div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Wrest_ProImage4" id="Bas_LeftImageName4">
                               		<?php if($Sport_info['Wrest_ProImage4']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Wrest_ProImage4'].''); ?>" alt="" id="image4"> <?php }else{ ?>
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

	if ($('#Wrest_PlayerName').val()=='')
	{
		$('#Wrest_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Wrest_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Wrest_SchoolName').val()=='')
	{
		$('#Wrest_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Wrest_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Wrest_City').val()=='')
	{
		$('#Wrest_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Wrest_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Wrest_State').val()=='')
	{
		$('#Wrest_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Wrest_State').css('border','1px solid #a4a4a4');
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


