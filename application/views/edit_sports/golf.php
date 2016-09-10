	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Golf)</h2>
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
                   
                  
                   
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_golf" onsubmit="return getStudent_data();">
                     <div class="forums-details">
                	<div class="da-update">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            <span>Player Name</span>
                            	<input type="text" placeholder="Player Name" name="Golf_PlayerName" id="Golf_PlayerName" value="<?php echo $Sport_info['Golf_PlayerName']; ?> ">
                            </div>
                            <div class="cols-4">
                            <span>High School Name</span>
                            	<input type="text" placeholder="High School Name" name="Golf_SchoolName" id="Golf_SchoolName" value="<?php echo $Sport_info['Golf_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>City</span>
                            	<input type="text" name="Golf_City" id="Golf_City" placeholder="City" value="<?php echo $Sport_info['Golf_City']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>State</span>
                            	<input type="text" placeholder="State" id="Golf_State" name="Golf_State" value="<?php echo $Sport_info['Golf_State']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload top-upload">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Golf_ProImage" id="Bas_LeftImageName1">
                               		<?php if($Sport_info['Golf_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Golf_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>          
	                            </span>
                            </div>
                            
                        	<div class="image-upload left-upload">
                                 <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Golf_ProImage2" id="Bas_LeftImageName2">
                               		<?php if($Sport_info['Golf_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Golf_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>          
	                            </span>
                            </div>
                        </div>
						
                        <div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             	
                                <h4>GOLF STATISTICS</h4>
                                <div class="frm">
                                <span>Average Score</span>
                                    <input type="text" name="Golf_Average" placeholder="Average Score" value="<?php echo $Sport_info['Golf_Average']; ?>">
                                </div>
                                <div class="frm">
                                <span>Versus Par</span>
                                    <input type="text" name="Golf_Versus" placeholder="Versus Par" value="<?php echo $Sport_info['Golf_Versus']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Versus</span>
                                    <input type="text" name="Golf_Best" placeholder="Best Score" value="<?php echo $Sport_info['Golf_Best']; ?>">
                                </div>
                                <div class="frm">
                                <span>Handicap</span>
                                    <input type="text" name="Golf_Handicap" placeholder="Handicap" value="<?php echo $Sport_info['Golf_Handicap']; ?>">
                                </div>
                                <div class="frm">
                                <span>Average Drive</span>
                                    <input type="text" name="Golf_Drive" placeholder="Average Drive" value="<?php echo $Sport_info['Golf_Drive']; ?>">
                                </div>
                                <div class="frm">
                                  <span>Fairway Accuracy</span>
                                    <input type="text" name="Golf_Fairway" placeholder="Fairway Accuracy" value="<?php echo $Sport_info['Golf_Fairway']; ?>">
                                </div>
                                <div class="frm">
                                  <span>GIR %</span>
                                    <input type="text" name="Golf_GIR" placeholder="GIR %" value="<?php echo $Sport_info['Golf_GIR']; ?>">
                                </div>
                                <div class="frm">
                                  <span>Sand Save %</span>
                                    <input type="text" name="Golf_Sand_Save" placeholder="Sand Save %" value="<?php echo $Sport_info['Golf_Sand_Save']; ?>">
                                </div>
                                <div class="frm">
                                  <span>Eagles/Round</span>
                                    <input type="text" name="Golf_Eagles" placeholder="Eagles/Round" value="<?php echo $Sport_info['Golf_Eagles']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Birdies/Round</span> 
                                    <input type="text" name="Golf_Birdies" placeholder="Birdies/Round" value="<?php echo $Sport_info['Golf_Birdies']; ?>">
                                </div>
                                <div class="frm">
                                  <span>Average Putts</span>
                                    <input type="text" name="Golf_Putts" placeholder="Average Putts" value="<?php echo $Sport_info['Golf_Putts']; ?>">
                                </div>
                                <div class="frm">
                                  <span>GIR Putts</span>
                                    <input type="text" name="Golf_GIRPutts" placeholder="GIR Putts" value="<?php echo $Sport_info['Golf_GIRPutts']; ?>">
                                </div>
                                
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Golf_Height" placeholder="feet" value="<?php echo $Sport_info['Golf_Height']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Golf_HeightInches" placeholder="inches" value="<?php echo $Sport_info['Golf_HeightInches']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                  <span>Weight</span>
                                    <input type="text" name="Golf_Weight" placeholder="Weight" value="<?php echo $Sport_info['Golf_Weight']; ?>">
                                </div>
                                
                                
                                

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload top-upload">
                                 <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Golf_ProImage3" id="Bas_LeftImageName3">
                               		<?php if($Sport_info['Golf_ProImage3']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Golf_ProImage3'].''); ?>" alt="" id="image3"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  <?php } ?>          
	                            </span>
                            </div>
                        	
                            <div class="image-upload left-upload">
                                <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Golf_ProImage4" id="Bas_LeftImageName4">
                               		<?php if($Sport_info['Golf_ProImage4']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Golf_ProImage4'].''); ?>" alt="" id="image4"> <?php }else{ ?>
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

	if ($('#Golf_PlayerName').val()=='')
	{
		$('#Golf_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Golf_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Golf_SchoolName').val()=='')
	{
		$('#Golf_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Golf_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Golf_City').val()=='')
	{
		$('#Golf_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Golf_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Golf_State').val()=='')
	{
		$('#Golf_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Golf_State').css('border','1px solid #a4a4a4');
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


