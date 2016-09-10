	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Women's Gymnastics)</h2>
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
                   
                    
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_womens_gymnastics" onsubmit="return getStudent_data();">
                     <div class="forums-details">
                	<div class="da-update">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<span>Player Name</span>
                                <input type="text" name="Women_PlayerName" id="Women_PlayerName" placeholder="Player Name" value="<?php echo $Sport_info['Women_PlayerName']; ?>">
                            </div>
                            <div class="cols-4">
                            	<span>High School Name</span>
                            	<input type="text" name="Women_SchoolName" id="Women_SchoolName" placeholder="High School Name" value="<?php echo $Sport_info['Women_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>City</span>
                            	<input type="text" name="Women_City" id="Women_City" placeholder="City" value="<?php echo $Sport_info['Women_City']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>State</span>
                            	<input type="text" name="Women_State" id="Women_State" placeholder="State" value="<?php echo $Sport_info['Women_State']; ?>">
                            </div>
                        </div>
                        
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload top-upload">
                                <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Women_ProImage" id="Bas_LeftImageName1">
                               		<?php if($Sport_info['Women_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Women_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>             
	                            </span>
                            </div>
                            
                        	<div class="image-upload left-upload">
                                 <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Women_ProImage2" id="Bas_LeftImageName2">
                               		<?php if($Sport_info['Women_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Women_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>             
	                            </span>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                                <h4>FLOOR EXERCISE</h4>
                                <div class="frm">
                                <span>Best Score</span>
                                    <input type="text" name="Women_BestScore" placeholder="Best Score" value="<?php echo $Sport_info['Women_BestScore']; ?>">
                                </div>
                                <div class="frm">
                                <span>Average Score</span>
                                    <input type="text" name="Women_AvgScore" placeholder="Average Score" value="<?php echo $Sport_info['Women_AvgScore']; ?>">
                                </div>
                                <h4>BALANCE BEAM</h4>
                                <div class="frm">
                                <span>Best Score</span>
                                    <input type="text" name="Women_Bal_BestScore" placeholder="Best Score" value="<?php echo $Sport_info['Women_Bal_BestScore']; ?>">
                                </div>
                                <div class="frm">
                                <span>Average Score</span>
                                    <input type="text" name="Women_Bal_AvgScore" placeholder="Average Score" value="<?php echo $Sport_info['Women_Bal_AvgScore']; ?>">
                                </div>
                                <h4>VAULT</h4>
                                <div class="frm">
                                <span>Best Score</span>
                                    <input type="text" name="Women_Vault_BestScore" placeholder="Best Score" value="<?php echo $Sport_info['Women_Vault_BestScore']; ?>">
                                </div>
                                <div class="frm">
                                <span>Average Score</span>
                                    <input type="text" name="Women_Vault_AvgScore" placeholder="Average Score" value="<?php echo $Sport_info['Women_Vault_AvgScore']; ?>">
                                </div>
                                <h4>UNEVEN BARS</h4>
                                <div class="frm">
                                <span>Best Score</span>
                                    <input type="text" name="Women_UnEven_BestScore" placeholder="Best Score" value="<?php echo $Sport_info['Women_UnEven_BestScore']; ?>">
                                </div>
                                <div class="frm">
                                <span>Average Score</span>
                                    <input type="text" name="Women_UnEven_AvgScore" placeholder="Average Score" value="<?php echo $Sport_info['Women_UnEven_AvgScore']; ?>">
                                </div>
                                <h4>ALL AROUND</h4>
                                <div class="frm">
                                <span>Best Score</span>
                                    <input type="text" name="Women_All_BestScore" placeholder="Best Score" value="<?php echo $Sport_info['Women_All_BestScore']; ?>">
                                </div>
                                <div class="frm">
                                <span>Average Score</span>
                                    <input type="text" name="Women_All_AvgScore" placeholder="Average Score" value="<?php echo $Sport_info['Women_All_AvgScore']; ?>">
                                </div>
                                
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Women_Height" placeholder="feet" value="<?php echo $Sport_info['Women_Height']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Women_HeightInche" placeholder="inches" value="<?php echo $Sport_info['Women_HeightInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                <span>Weight</span>
                                    <input type="text" name="Women_Weight" placeholder="Weight" value="<?php echo $Sport_info['Women_Weight']; ?>">
                                </div>
                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload top-upload">
                                <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Women_ProImage3" id="Bas_LeftImageName3">
                               		<?php if($Sport_info['Women_ProImage3']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Women_ProImage3'].''); ?>" alt="" id="image3"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  <?php } ?>             
	                            </span>
                            </div>
                        	
                            <div class="image-upload left-upload">
                                 <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Women_ProImage4" id="Bas_LeftImageName4">
                               		<?php if($Sport_info['Women_ProImage4']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Women_ProImage4'].''); ?>" alt="" id="image4"> <?php }else{ ?>
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

	if ($('#Women_PlayerName').val()=='')
	{
		$('#Women_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Women_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Women_SchoolName').val()=='')
	{
		$('#Women_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Women_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Women_City').val()=='')
	{
		$('#Women_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Women_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Women_State').val()=='')
	{
		$('#Women_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Women_State').css('border','1px solid #a4a4a4');
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


