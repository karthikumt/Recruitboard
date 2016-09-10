
    <section class="content">
     <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="student-athlete">
                	<div class="reg-title"><h2>Bowling Board</h2></div>
                    <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>sport/insert_bowling" onsubmit="return getStudent_data();" >
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" placeholder="Player Name" name="Bowl_PlayerName" id="Bowl_PlayerName">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="High School Name" name="Bowl_Highschool" id="Bowl_Highschool">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="City" name="Bowl_City" id="Bowl_City">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="State" name="Bowl_State" id="Bowl_State">
                            </div>
                        </div>
                        
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Bowl_ProImage" id="Bas_LeftImageName1">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  
	                            </span>
                            </div>
                            
                        	<div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview2" >
	                                <input type="file" name="Bowl_ProImage2" id="Bas_LeftImageName2">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  
	                            </span>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             	<h4>BOWLING STATISTICS</h4>
                                <div class="frm">
                                    <input type="text" placeholder="# of Years Bowling Competitively" name="Bowl_YearsBowl">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Average Games Bowled/Week" name="Bowl_AveGame">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Average Games Bowled/Month" name="Bowl_AveGame2">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Average Score" name="Bowl_AveScore">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Best Score" name="Bowl_BestScore">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Ball Weight" name="Bowl_BallWeight">
                                </div>
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" placeholder="feet" name="Bowl_Height">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" placeholder="inches" name="Bowl_HeightInche">
                                    </div>
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Weight" name="Bowl_Weight">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Dominant Hand" name="Bowl_DomaintHand">
                                </div>
                                
                                

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Bowl_ProImage3" id="Bas_LeftImageName3" >
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  
	                            </span>
                            </div>
                        	
                            <div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Bowl_ProImage4" id="Bas_LeftImageName4">
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
    </section>
    
           
<script>
function getStudent_data()
{

	var flag = true;

	if ($('#Bowl_PlayerName').val()=='')
	{
		$('#Bowl_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Bowl_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Bowl_Highschool').val()=='')
	{
		$('#Bowl_Highschool').css('border','1px solid red');
		flag = false;
	} else {
		$('#Bowl_Highschool').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Bowl_City').val()=='')
	{
		$('#Bowl_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Bowl_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Bowl_State').val()=='')
	{
		$('#Bowl_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Bowl_State').css('border','1px solid #a4a4a4');
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
