
    <section class="content">
     <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="student-athlete">
                	<div class="reg-title"><h2>Basketball Board</h2></div>
                      <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>sport/insert_basketball" onsubmit="return getStudent_data();">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" placeholder="Player Name" name="Bask_PlayerName" id="Bask_PlayerName">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="High School Name" name="Bask_SchoolName" id="Bask_SchoolName">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="City" name="Bask_City" id="Bask_City">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="State" name="Bask_State" id="Bask_State">
                            </div>
                        </div>
                        <div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" placeholder="Class of 20" name="Bask_Class">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="Primary Position" name="Bask_Primary">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="Secondary Position" name="Bask_Secondary">
                            </div>
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload top-upload">
                                <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" id="Bas_LeftImageName1" name="Bask_ProImage">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  
	                            </span>
                            </div>
                            
                        	<div class="image-upload left-upload">
                                 <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" id="Bas_LeftImageName2" name="Bask_ProImage2">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  
	                            </span>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             	<h4>PER GAME STATS</h4>
                                <div class="frm">
                                    <input type="text" placeholder="Points" name="Bask_Points">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Field Goal %" name="Bask_Field">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Free Throw %" name="Bask_FreeThrow">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="3 Point Field Goal % " name="Bask_PointField">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Rebounds" name="bask_Rebound">
                                </div>
                                 <div class="frm">
                                    <input type="text" placeholder="Assists" name="Bask_Assist">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Steals" name="Bask_Steal">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Blocks" name="Bask_Blocks">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Defensive Specialist" name="Bask_Defensive">
                                </div>
                                
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height (w / shoes)</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" placeholder="feet" name="Bask_HeightWith">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" placeholder="inches" name="Bask_HeightwithInche">
                                    </div>
                                </div>
                                <div class="frm clearfix">
                                    <div class="label fl">Height (w /o shoes)</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" placeholder="feet" name="Bask_HeightWithout">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" placeholder="inches" name="Bask_HeightWithoutInche">
                                    </div>
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Weight" name="Bask_Weight">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Vertical" name="Bask_Verticle">
                                </div>
                                <div class="frm clearfix">
                                    <div class="label fl">Wingspan</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" placeholder="feet" name="Bask_Wingspan">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" placeholder="inches" name="Bask_WingspanInche">
                                    </div>
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="3 / 4 Court Sprint" name="Bask_CourtSprin">
                                </div>
                                

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload top-upload">
                                <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" id="Bas_LeftImageName3" name="Bask_ProImage3">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  
	                            </span>
                            </div>
                        	
                            <div class="image-upload left-upload">
                                <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Bask_ProImage4" id="Bas_LeftImageName4">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image4" >  
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

	if ($('#Bask_PlayerName').val()=='')
	{
		$('#Bask_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Bask_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Bask_SchoolName').val()=='')
	{
		$('#Bask_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Bask_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Bask_City').val()=='')
	{
		$('#Bask_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Bask_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Bask_State').val()=='')
	{
		$('#Bask_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Bask_State').css('border','1px solid #a4a4a4');
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
