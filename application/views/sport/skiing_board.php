    <section class="content">
     <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="student-athlete">
                	<div class="reg-title"><h2>Skiing Board </h2></div>
                       <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>sport/insert_skiing" onsubmit="return getStudent_data();">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" name="Skiing_PlayerName" id="Skiing_PlayerName" placeholder="Player Name">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Skiing_SchoolName" id="Skiing_SchoolName" placeholder="High School Name">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Skiing_City" id="Skiing_City" placeholder="City">
                            </div>
           	                 <div class="cols-4">
                            	<input type="text" name="Skiing_State" id="Skiing_State"  placeholder="State">
                            </div>
                        </div>
                        <div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" name="Skiing_Class" placeholder="Class of 20">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Skiing_Fis" placeholder="FIS Member #">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Skiing_Ussa" placeholder="USSA Member #">
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
                                            <input type="text" name="Skiing_Alpine_Event_One" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Avg time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Skiing_Alpine_AvgMin_One" placeholder="minutes">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Skiing_Alpine_AvgSec_One" placeholder="seconds">
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
                                                   <input type="text" name="Skiing_Alpine_BestMin_One" placeholder="minutes">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Skiing_Alpine_BestSec_One" placeholder="seconds">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Skiing_Alpine_Event_Two" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Avg Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Skiing_Alpine_AvgMin_Two" placeholder="minutes">	
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Skiing_Alpine_AvgSec_Two" placeholder="seconds">
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
                                                   <input type="text" name="Skiing_Alpine_BestMin_Two" placeholder="minutes">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Skiing_Alpine_BestSec_Two" placeholder="seconds">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <h4>NORDIC SKIING</h4>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Skiing_Nordic_Event_One" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Avg time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Skiing_Nordic_AvgMin_One" placeholder="minutes">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Skiing_Nordic_AvgSec_One" placeholder="seconds">
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
                                                   <input type="text" name="Skiing_Nordic_BestMin_One" placeholder="minutes">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Skiing_Nordic_BestSec_One" placeholder="seconds">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tc-form clearfix">
                                	<div class="cols-6">
                                        <div class="frm">
                                            <input type="text" name="Skiing_Nordic_Event_Two" placeholder="Event">
                                        </div>
                                    </div>
                                    <div class="cols-6">
                                    	<div class="frm clearfix">
                                            <div class="label fl">Avg Time</div>
                                            <div class="sub-hight text-b fl">
                                                   <input type="text" name="Skiing_Nordic_AvgMin_Two" placeholder="minutes">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Skiing_Nordic_AvgSec_Two" placeholder="seconds">
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
                                                   <input type="text" name="Skiing_Nordic_BestMin_Two" placeholder="minutes">
                                            </div>
                                            <div class="sub-hight text-b fr">
                                                   <input type="text" name="Skiing_Nordic_BestSec_Two" placeholder="seconds">
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
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  
	                            </span>
                            </div>
                        </div>
						
                        
                        
                        <div class="cols-6">
                            <div class="image-upload max-upload">
                                <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Skiing_ProImage2" id="Bas_LeftImageName2">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  
	                            </span>
                            </div>
                        </div>
                        <div class="cl"></div>
                         <div class="frm">
                        	<input type="submit" value="Continue">
                        </div>
                    </div>
                    
                    
                </div>
                </form>
            </div>
        </div>
    </section>
    
         
<script>
function getStudent_data()
{

	var flag = true;

	if ($('#Skiing_PlayerName').val()=='')
	{
		$('#Skiing_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Skiing_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Skiing_SchoolName').val()=='')
	{
		$('#Skiing_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Skiing_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Skiing_City').val()=='')
	{
		$('#Skiing_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Skiing_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Skiing_State').val()=='')
	{
		$('#Skiing_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Skiing_State').css('border','1px solid #a4a4a4');
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



</script>
