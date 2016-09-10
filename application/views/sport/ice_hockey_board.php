    <section class="content">
     <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="student-athlete">
                	<div class="reg-title"><h2>Ice Hockey Board</h2></div>
                      <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>sport/insert_ice_hockey" onsubmit="return getStudent_data();">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" placeholder="Player Name" name="Ice_PlayerName" id="Ice_PlayerName">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Ice_SchoolName" id="Ice_SchoolName" placeholder="High School Name">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Ice_City" id="Ice_City" placeholder="City">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Ice_State" id="Ice_State" placeholder="State">
                            </div>
                        </div>
                        <div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" name="Ice_Class" placeholder="Class of 20">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Ice_Primary" placeholder="Primary Position">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Ice_Secondary" placeholder="Secondary Position">
                            </div>
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload toppanel-upload">
                                <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Ice_ProImage" id="Bas_LeftImageName1">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  
	                            </span>
                            </div>
                            
                        	<div class="image-upload left-upload">
                                 <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Ice_ProImage2" id="Bas_LeftImageName2">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  
	                            </span>
                            </div>
                        </div>
						
                        <div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             	<div class="frm">
                                    <input type="text" name="Ice_Position" placeholder="Position">
                                </div>
                                <h4>PER GAME STATISTICS</h4>
                                <div class="frm">
                                    <input type="text" name="Ice_Goals" placeholder="Goals">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Ice_Shots" placeholder="Shots on Goal">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Ice_Assist" placeholder="Assists">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Ice_Allowed" placeholder="Goals Allowed">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Ice_Saves" placeholder="Saves">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Ice_Penalty" placeholder="Penalty Minutes">
                                </div>
                                
                                
                                
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Ice_Height" placeholder="feet">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Ice_HeightInche" placeholder="inches">
                                    </div>
                                </div>
                                <div class="frm">
                                    <input type="text" name="Ice_Weight" placeholder="Weight">
                                </div>
                                <div class="frm clearfix">
                                    <div class="label fl">Wingspan</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Ice_WingSpan" placeholder="feet">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Ice_wingSpanInche" placeholder="inches">
                                    </div>
                                </div>
                                <div class="frm clearfix">
                                    <div class="label fl">Standing Long Jump</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Ice_LongJump" placeholder="feet">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Ice_LongJumpInche" placeholder="inches">
                                    </div>
                                </div>
                                <div class="frm">
                                    <input type="text" name="Ice_Vertical" placeholder="Vertical Jump">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Ice_GripStrength_Right" placeholder="Grip Strength ( right )">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Ice_GripStrength_Left" placeholder="Grip Strength ( left )">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Ice_Bench_Press" placeholder="Bench Press Reps (150 lbs )">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Ice_PullUps" placeholder="Pull Ups">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Ice_Defensive" placeholder="Defensive Specialist">
                                </div>
                                
                                

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload toppanel-upload">
                                 <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Ice_ProImage3" id="Bas_LeftImageName3">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  
	                            </span>
                            </div>
                        	
                            <div class="image-upload left-upload">
                                 <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Ice_ProImage4" id="Bas_LeftImageName4">
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

	if ($('#Ice_PlayerName').val()=='')
	{
		$('#Ice_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Ice_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Ice_SchoolName').val()=='')
	{
		$('#Ice_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Ice_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Ice_City').val()=='')
	{
		$('#Ice_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Ice_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Ice_State').val()=='')
	{
		$('#Ice_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Ice_State').css('border','1px solid #a4a4a4');
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
