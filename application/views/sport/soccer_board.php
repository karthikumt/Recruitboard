    <section class="content">
     <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="student-athlete">
                	<div class="reg-title"><h2>Soccer Board</h2></div>
                      <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>sport/insert_soccer" onsubmit="return getStudent_data();">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" name="Soccer_PlayerName" id="Soccer_PlayerName" placeholder="Player Name">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Soccer_SchoolName" id="Soccer_SchoolName" placeholder="High School Name">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Soccer_City" id="Soccer_City" placeholder="City">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Soccer_State" id="Soccer_State" placeholder="State">
                            </div>
                        </div>
                        <div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" name="Soccer_Class" placeholder="Class of 20">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Soccer_Primary" placeholder="Primary Position">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Soccer_Secondary" placeholder="Secondary Position ">
                            </div>
                            
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload top-upload">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Soccer_ProImage" id="Bas_LeftImageName1">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1" />
	                            </span>
                            </div>
                            
                        	<div class="image-upload right-upload">
                                <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Soccer_ProImage2" id="Bas_LeftImageName2">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  
	                            </span>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             	
                                
                                <h4>PER GAME STATISTICS</h4>
                                <div class="frm">
                                    <input type="text" name="Soccer_Goals" placeholder="Goals">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soccer_Shots" placeholder="Shots on Goal">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soccer_Assists" placeholder="Assists">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soccer_Allowed" placeholder="Goals Allowed">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soccer_Saves" placeholder="Saves">
                                </div>
                                
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Soccer_Height" placeholder="feet">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Soccer_HeightInche" placeholder="inches">
                                    </div>
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soccer_Weight" placeholder="Weight">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soccer_Sprint" placeholder="30 Meter Sprint">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soccer_Drill" placeholder="5-10-5 Drill">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soccer_Vertical" placeholder="Vertical Jump">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soccer_DomaintLeg" placeholder="Dominant Leg">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soccer_Defensive" placeholder="Defensive Specialist">
                                </div>
                                

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload top-upload">
                                 <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Soccer_ProImage3" id="Bas_LeftImageName3">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  
	                            </span>
                            </div>
                        	
                            <div class="image-upload right-upload">
                                <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Soccer_ProImage4" id="Bas_LeftImageName4">
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

	if ($('#Soccer_PlayerName').val()=='')
	{
		$('#Soccer_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Soccer_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Soccer_SchoolName').val()=='')
	{
		$('#Soccer_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Soccer_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Soccer_City').val()=='')
	{
		$('#Soccer_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Soccer_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Soccer_State').val()=='')
	{
		$('#Soccer_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Soccer_State').css('border','1px solid #a4a4a4');
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
