    <section class="content">
     <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="student-athlete">
                	<div class="reg-title"><h2>Rifle Board</h2></div>
                      <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>sport/insert_rifle" onsubmit="return getStudent_data();">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" name="Rifel_PlayerName" id="Rifel_PlayerName" placeholder="Player Name">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Rifel_SchoolName" id="Rifel_SchoolName" placeholder="High School Name">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Rifel_City" id="Rifel_City" placeholder="City">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Rifel_State" id="Rifel_State" placeholder="State">
                            </div>
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Rifel_ProImage" id="Bas_LeftImageName1">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  
	                            </span>
                            </div>
                            
                        	<div class="image-upload right-upload">
                                <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Rifel_ProImage2" id="Bas_LeftImageName2">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  
	                            </span>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                                <h4>INDOOR 3P SMALLBORE (50ft)</h4>
                                <div class="frm">
                                    <input type="text" name="Rifel_Indoor_Avg" placeholder="Avg Aggregate">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Rifel_Indoor_Best" placeholder="Best Aggregate">
                                </div>
                                <h4>OUTDOOR 3P SMALLBORE (50ft)</h4>
                                <div class="frm">
                                    <input type="text" name="Rifel_Outdoor_Avg" placeholder="Avg Aggregate">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Rifel_Outdoor_Best" placeholder="Best Aggregate">
                                </div>
                                <h4>PRECISION AIR RIFLE (10m)</h4>
                                <div class="frm">
                                    <input type="text" name="Rifel_Precision_Avg" placeholder="40 Shots Avg">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Rifel_Precision_Best" placeholder="40 Shots Best">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Rifel_Precision_AvgShot" placeholder="60 Shots Avg">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Rifel_Precision_BestShot" placeholder="60 Shots Best">
                                </div>
                                
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Rifel_Height" placeholder="feet">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Rifel_HeightInche" placeholder="inches">
                                    </div>
                                </div>
                                <div class="frm">
                                    <input type="text" name="Rifel_Weight" placeholder="Weight">
                                </div>
                                
                                

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Rifel_ProImage3" id="Bas_LeftImageName3">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  
	                            </span>
                            </div>
                        	
                            <div class="image-upload right-upload">
                                <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Rifel_ProImage4" id="Bas_LeftImageName4">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image4">  
	                            </span>
                            </div>
                        </div>
                        <div class="cl"></div>
                        <div class="frm">
                        	<input type="submit" value="Continue">
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
         
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
