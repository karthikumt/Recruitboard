	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Bowling)</h2>
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
                  <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_bowling" onsubmit="return getStudent_data();" >
                     <div class="forums-details">
                	<div class="da-update">
                  
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<span>Player Name</span>
                                <input type="text" placeholder="Player Name" name="Bowl_PlayerName" id="Bowl_PlayerName" value="<?php echo $Sport_info['Bowl_PlayerName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>High School Name</span>
                            	<input type="text" placeholder="High School Name" name="Bowl_Highschool" id="Bowl_Highschool" value="<?php echo $Sport_info['Bowl_Highschool']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>City</span>
                            	<input type="text" placeholder="City" name="Bowl_City" id="Bowl_City" value="<?php echo $Sport_info['Bowl_City']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>State</span>
                            	<input type="text" placeholder="State" name="Bowl_State" id="Bowl_State" value="<?php echo $Sport_info['Bowl_State']; ?>">
                            </div>
                        </div>
                        
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Bowl_ProImage" id="Bas_LeftImageName1">
                               		 <?php if($Sport_info['Bowl_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Bowl_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>    
	                            </span>
                            </div>
                            
                        	<div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview2" >
	                                <input type="file" name="Bowl_ProImage2" id="Bas_LeftImageName2">
                               		 <?php if($Sport_info['Bowl_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Bowl_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>    
	                            </span>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             	<h4>BOWLING STATISTICS</h4>
                                <div class="frm">
                                <span># of Years Bowling Competitively</span>
                                    <input type="text" placeholder="# of Years Bowling Competitively" name="Bowl_YearsBowl" value="<?php echo $Sport_info['Bowl_YearsBowl']; ?>">
                                </div>
                                <div class="frm">
                                <span>Average Games Bowled/Week</span>
                                    <input type="text" placeholder="Average Games Bowled/Week" name="Bowl_AveGame"value="<?php echo $Sport_info['Bowl_AveGame']; ?>">
                                </div>
                                <div class="frm">
                                <span>Average Games Bowled/Month</span>
                                    <input type="text" placeholder="Average Games Bowled/Month" name="Bowl_AveGame2" value="<?php echo $Sport_info['Bowl_AveGame2']; ?>">
                                </div>
                                <div class="frm">
                                <span>Average Score</span>
                                    <input type="text" placeholder="Average Score" name="Bowl_AveScore" value="<?php echo $Sport_info['Bowl_AveScore']; ?>">
                                </div>
                                <div class="frm">
                                <span>Best Score</span>
                                    <input type="text" placeholder="Best Score" name="Bowl_BestScore" value="<?php echo $Sport_info['Bowl_BestScore']; ?>">
                                </div>
                                <div class="frm">
                                <span>Ball Weight</span>
                                    <input type="text" placeholder="Ball Weight" name="Bowl_BallWeight" value="<?php echo $Sport_info['Bowl_BallWeight']; ?>">
                                </div>
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" placeholder="feet" name="Bowl_Height" value="<?php echo $Sport_info['Bowl_Height']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" placeholder="inches" name="Bowl_HeightInche" value="<?php echo $Sport_info['Bowl_HeightInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                <span>Weight</span>
                                    <input type="text" placeholder="Weight" name="Bowl_Weight" value="<?php echo $Sport_info['Bowl_Weight']; ?>">
                                </div>
                                <div class="frm">
                                <span>Dominant Hand</span>
                                    <input type="text" placeholder="Dominant Hand" name="Bowl_DomaintHand" value="<?php echo $Sport_info['Bowl_DomaintHand']; ?>">
                                </div>
                                
                                

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Bowl_ProImage3" id="Bas_LeftImageName3" >
                               		 <?php if($Sport_info['Bowl_ProImage3']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Bowl_ProImage3'].''); ?>" alt="" id="image3"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  <?php } ?>  
	                            </span>
                            </div>
                        	
                            <div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Bowl_ProImage4" id="Bas_LeftImageName4">
                               		   <?php if($Sport_info['Bowl_ProImage4']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Bowl_ProImage4'].''); ?>" alt="" id="image4"> <?php }else{ ?>
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

	if ($('#Bowl_PlayerName').val()=='')
	{
		$('#Bowl_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Bowl_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Bowl_Highschool').val()=='')
	{
		$('#Bowl_Highschool').css('border','1px solid red');
		flag = false;
	} else {
		$('#Bowl_Highschool').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Bowl_City').val()=='')
	{
		$('#Bowl_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Bowl_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Bowl_State').val()=='')
	{
		$('#Bowl_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Bowl_State').css('border','1px solid #a4a4a4');
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
