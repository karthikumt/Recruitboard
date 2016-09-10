
    <section class="content">
     <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="student-athlete">
                	<div class="reg-title"><h2>Dance Team Board</h2></div>
                      <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>sport/insert_dance_team" onsubmit="return getStudent_data();">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" placeholder="Player Name" name="Dance_PlayerName" id="Dance_PlayerName">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="High School Name" name="Dance_SchoolName" id="Dance_SchoolName">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="City" name="Dance_City" id="Dance_City">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="State" name="Dance_State" id="Dance_State">
                            </div>
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload top-upload">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Dance_ProImage" id="Bas_LeftImageName1">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  
	                            </span>
                            </div>
                            
                        	<div class="image-upload left-upload">
                                <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Dance_ProImage2" id="Bas_LeftImageName2">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  
	                            </span>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             	<h4>LEAPS<br> <span>( List Top 3 )</span></h4>
                                	<div class="frm">
                                    	<input type="text" name="Dance_Leaps_One">
                                	</div>
                                    <div class="frm">
                                    	<input type="text" name="Dance_Leaps_Two">
                                	</div>
                                    <div class="frm">
                                    	<input type="text" name="Dance_Leaps_Three">
                                	</div>
                                <h4>TURNS<br> <span>( List Top 3 )</span> </h4>
                                	<div class="frm">
                                    	<input type="text" name="Dance_Turns_One">
                                	</div>
                                    <div class="frm">
                                    	<input type="text" name="Dance_Turns_Two">
                                	</div>
                                    <div class="frm">
                                    	<input type="text" name="Dance_Turns_Three">
                                	</div>
                                
                                <h4>JUMPS<br> <span>( List Top 3 )</span> </h4>
                                	<div class="frm">
                                    	<input type="text" name="Dance_Jumps_One">
                                	</div>
                                    <div class="frm">
                                    	<input type="text" name="Dance_Jumps_Two">
                                	</div>
                                    <div class="frm">
                                    	<input type="text" name="Dance_Jumps_Three">
                                	</div>
                                
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" placeholder="feet" name="Dance_Height">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" placeholder="inches" name="Dance_HeightInche">
                                    </div>
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Weight" name="Dance_Weight">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Dominant Hand" name="Dance_DomaintHand">
                                </div>
                                
                                

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload top-upload">
                                 <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Dance_ProImage3" id="Bas_LeftImageName3">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  
	                            </span>
                            </div>
                        	
                            <div class="image-upload left-upload">
                                 <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Dance_ProImage4" id="Bas_LeftImageName4">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image4">  
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

	if ($('#Dance_PlayerName').val()=='')
	{
		$('#Dance_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Dance_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Dance_SchoolName').val()=='')
	{
		$('#Dance_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Dance_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Dance_City').val()=='')
	{
		$('#Dance_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Dance_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Dance_State').val()=='')
	{
		$('#Dance_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Dance_State').css('border','1px solid #a4a4a4');
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
