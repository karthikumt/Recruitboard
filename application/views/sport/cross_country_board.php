
    <section class="content">
     <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="student-athlete">
                	<div class="reg-title"><h2>Cross Country Board</h2></div>
                    <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>sport/insert_cross_country" onsubmit="return getStudent_data();">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" placeholder="Player Name" name="Cross_PlayerName" id="Cross_PlayerName">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="High School Name" name="Cross_SchoolName" id="Cross_SchoolName">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="City" name="Cross_City" id="Cross_City">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="State" name="Cross_State" id="Cross_State">
                            </div>
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-12">
                        	<div class="reg-frm pitching-stats cross-form">
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" placeholder="feet" name="Cross_Height">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" placeholder="inches" name="Cross_HeightInche">
                                    </div>
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Weight" name="Cross_Weight">
                                </div>
                                <div class="frm clearfix">
                                    <div class="label fl">Mile Time</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" placeholder="mintues" name="Cross_MileTime">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" placeholder="seconds" name="Cross_MileSecond">
                                    </div>
                                </div>
                                <h4>CROSS COUNTRY EVENTS</h4>
                                <div class="frm">
                                    <input type="text" placeholder="Distance" name="Cross_Distance">
                                </div>
                                <div class="frm clearfix">
                                    <div class="label fl">Best time</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" placeholder="minutes" name="Cross_BestTime">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" placeholder="seconds" name="Cross_BestTimeSecond">
                                    </div>
                                </div>
                                <div class="frm clearfix">
                                    <div class="label fl">Next Best time</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" placeholder="minutes" name="Cross_NextBestTime">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" placeholder="seconds" name="Cross_NextBestTimeSecond">
                                    </div>
                                </div>
                                
                                <div class="frm">
                                    <input type="text" placeholder="Distance" name="Cross_Distance_Two">
                                </div>
                                <div class="frm clearfix">
                                    <div class="label fl">Best time</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" placeholder="minutes" name="Cross_BestTime_Two">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" placeholder="seconds" name="Cross_BestTimeSecond_Two">
                                    </div>
                                </div>
                                <div class="frm clearfix">
                                    <div class="label fl">Next Best time</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" placeholder="minutes" name="Cross_NextBestTime_Two">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" placeholder="seconds" name="Cross_NextBestTimeSecond_Two">
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        <div class="cl"></div>
                    	<div class="cols-6">
                        	<div class="image-upload max-upload">
                                <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Cross_ProImage" id="Bas_LeftImageName1">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  
	                            </span>
                            </div>
                        </div>
						
                        
                        
                        <div class="cols-6">
                        	<div class="image-upload max-upload">
                                 <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Cross_ProImage2" id="Bas_LeftImageName2">
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

	if ($('#Bas_Player').val()=='')
	{
		$('#Bas_Player').css('border','1px solid red');
		flag = false;
	} else {
		$('#Bas_Player').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Bas_HighSchool').val()=='')
	{
		$('#Bas_HighSchool').css('border','1px solid red');
		flag = false;
	} else {
		$('#Bas_HighSchool').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Bas_City').val()=='')
	{
		$('#Bas_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Bas_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Bas_State').val()=='')
	{
		$('#Bas_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Bas_State').css('border','1px solid #a4a4a4');
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
