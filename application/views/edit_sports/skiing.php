	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Skiing)</h2>
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
                   
                    
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_skiing" onsubmit="return getStudent_data();">
                      <div class="forums-details">
                	<div class="da-update">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            <span>Player Name</span>
                            	<input type="text" name="Skiing_PlayerName" id="Skiing_PlayerName" placeholder="Player Name" value="<?php echo $Sport_info['Skiing_PlayerName']; ?>">
                            </div>
                            <div class="cols-4">
                             <span>High School Name</span>
                            	<input type="text" name="Skiing_SchoolName" id="Skiing_SchoolName" placeholder="High School Name" value="<?php echo $Sport_info['Skiing_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>City</span>
                            	<input type="text" name="Skiing_City" id="Skiing_City" placeholder="City" value="<?php echo $Sport_info['Skiing_City']; ?>">
                            </div>
           	                 <div class="cols-4">
                             <span>State</span>
                            	<input type="text" name="Skiing_State" id="Skiing_State"  placeholder="State" value="<?php echo $Sport_info['Skiing_State']; ?>">
                            </div>
                        </div>
                        <div class="frm clearfix">
                    		<div class="cols-4">
                            <span>Class</span>
                            	<input type="text" name="Skiing_Class" placeholder="Class of 20" value="<?php echo $Sport_info['Skiing_Class']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>FIS Member #</span>
                            	<input type="text" name="Skiing_Fis" placeholder="FIS Member #" value="<?php echo $Sport_info['Skiing_Fis']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>USSA Member #</span>
                            	<input type="text" name="Skiing_Ussa" placeholder="USSA Member #" value="<?php echo $Sport_info['Skiing_Ussa']; ?>">
                            </div>
                            
                        </div>
                            
                    </div>
                    
                    
                    <div class="student-card set-stud clearfix">
                        <div class="cols-12">
                        	<div class="reg-frm pitching-stats track-form">
                                <h4>ALPINE SKIING</h4>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Skiing_Alpine_Event_One" placeholder="Event" value="<?php echo $Sport_info['Skiing_Alpine_Event_One']; ?>"> 
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Avg time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Skiing_Alpine_AvgMin_One" placeholder="minutes" value="<?php echo $Sport_info['Skiing_Alpine_AvgMin_One']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Skiing_Alpine_AvgSec_One" placeholder="seconds" value="<?php echo $Sport_info['Skiing_Alpine_AvgSec_One']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                           
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Skiing_Alpine_BestMin_One" placeholder="minutes" value="<?php echo $Sport_info['Skiing_Alpine_BestMin_One']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Skiing_Alpine_BestSec_One" placeholder="seconds" value="<?php echo $Sport_info['Skiing_Alpine_BestSec_One']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Skiing_Alpine_Event_Two" placeholder="Event" value="<?php echo $Sport_info['Skiing_Alpine_Event_Two']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Avg Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Skiing_Alpine_AvgMin_Two" placeholder="minutes" value="<?php echo $Sport_info['Skiing_Alpine_AvgMin_Two']; ?>">	
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Skiing_Alpine_AvgSec_Two" placeholder="seconds" value="<?php echo $Sport_info['Skiing_Alpine_AvgSec_Two']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                           
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Skiing_Alpine_BestMin_Two" placeholder="minutes" value="<?php echo $Sport_info['Skiing_Alpine_BestMin_Two']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Skiing_Alpine_BestSec_Two" placeholder="seconds" value="<?php echo $Sport_info['Skiing_Alpine_BestSec_Two']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <h4>NORDIC SKIING</h4>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Skiing_Nordic_Event_One" placeholder="Event" value="<?php echo $Sport_info['Skiing_Nordic_Event_One']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Avg time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Skiing_Nordic_AvgMin_One" placeholder="minutes" value="<?php echo $Sport_info['Skiing_Nordic_AvgMin_One']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Skiing_Nordic_AvgSec_One" placeholder="seconds" value="<?php echo $Sport_info['Skiing_Nordic_AvgSec_One']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                           
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Skiing_Nordic_BestMin_One" placeholder="minutes" value="<?php echo $Sport_info['Skiing_Nordic_BestMin_One']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Skiing_Nordic_BestSec_One" placeholder="seconds" value="<?php echo $Sport_info['Skiing_Nordic_BestSec_One']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Skiing_Nordic_Event_Two" placeholder="Event" value="<?php echo $Sport_info['Skiing_Nordic_Event_Two']; ?>">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Avg Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Skiing_Nordic_AvgMin_Two" placeholder="minutes" value="<?php echo $Sport_info['Skiing_Nordic_AvgMin_Two']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Skiing_Nordic_AvgSec_Two" placeholder="seconds" value="<?php echo $Sport_info['Skiing_Nordic_AvgSec_Two']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                           
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Best Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Skiing_Nordic_BestMin_Two" placeholder="minutes" value="<?php echo $Sport_info['Skiing_Nordic_BestMin_Two']; ?>">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Skiing_Nordic_BestSec_Two" placeholder="seconds" value="<?php echo $Sport_info['Skiing_Nordic_BestSec_Two']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                            </div>
                            
                        </div>
                        
                        
                        <div class="cl"></div>
                    </div>
                    <div class="student-card image-uplist clearfix">
                    	<div class="cols-6">
                        	<div class="image-upload max-upload">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Skiing_ProImage" id="Bas_LeftImageName1">
                               		<?php if($Sport_info['Skiing_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Skiing_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>          
	                            </span>
                            </div>
                        </div>
						
                        
                        
                        <div class="cols-6">
                            <div class="image-upload max-upload">
                                <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Skiing_ProImage2" id="Bas_LeftImageName2">
                               		<?php if($Sport_info['Skiing_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Skiing_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>          
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


