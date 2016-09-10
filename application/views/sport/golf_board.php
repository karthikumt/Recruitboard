
    <section class="content">
     <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="student-athlete">
                	<div class="reg-title"><h2>Golf Board</h2></div>
                      <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>sport/insert_golf" onsubmit="return getStudent_data();">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" placeholder="Player Name" name="Golf_PlayerName" id="Golf_PlayerName">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="High School Name" name="Golf_SchoolName" id="Golf_SchoolName">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Golf_City" id="Golf_City" placeholder="City">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="State" id="Golf_State" name="Golf_State">
                            </div>
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload top-upload">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Golf_ProImage" id="Bas_LeftImageName1">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  
	                            </span>
                            </div>
                            
                        	<div class="image-upload left-upload">
                                 <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Golf_ProImage2" id="Bas_LeftImageName2">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  
	                            </span>
                            </div>
                        </div>
						
                        <div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             	
                                <h4>GOLF STATISTICS</h4>
                                <div class="frm">
                                    <input type="text" name="Golf_Average" placeholder="Average Score">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Golf_Versus" placeholder="Versus Par">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Golf_Best" placeholder="Best Score">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Golf_Handicap" placeholder="Handicap">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Golf_Drive" placeholder="Average Drive">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Golf_Fairway" placeholder="Fairway Accuracy">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Golf_GIR" placeholder="GIR %">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Golf_Sand_Save" placeholder="Sand Save %">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Golf_Eagles" placeholder="Eagles/Round">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Golf_Birdies" placeholder="Birdies/Round">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Golf_Putts" placeholder="Average Putts">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Golf_GIRPutts" placeholder="GIR Putts">
                                </div>
                                
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Golf_Height" placeholder="feet">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Golf_HeightInches" placeholder="inches">
                                    </div>
                                </div>
                                <div class="frm">
                                    <input type="text" name="Golf_Weight" placeholder="Weight">
                                </div>
                                
                                
                                

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload top-upload">
                                 <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Golf_ProImage3" id="Bas_LeftImageName3">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  
	                            </span>
                            </div>
                        	
                            <div class="image-upload left-upload">
                                <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Golf_ProImage4" id="Bas_LeftImageName4">
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
