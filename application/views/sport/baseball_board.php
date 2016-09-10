 <section class="content">
 <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="student-athlete">
                	<div class="reg-title"><h2>Baseball Player Card</h2></div>
                     <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>sport/insert_baseball" onsubmit="return getStudent_data();">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" placeholder="Player Name" name="Bas_Player" id="Bas_Player">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="High School Name" name="Bas_HighSchool" id="Bas_HighSchool">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="City" name="Bas_City" id="Bas_City">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="State" name="Bas_State" id="Bas_State">
                            </div>
                        </div>
                        <div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" placeholder="Class of 20" name="Bas_Class">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="Primary Position" name="Bas_Position">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="Throws" name="Bas_Throws">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="Bats" name="Bas_Bats">
                            </div>
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload" >
                                <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Bas_LeftImageName" id="Bas_LeftImageName">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  
	                            </span>
                            </div>
                        	<div class="reg-frm pitching-stats">
                             	<h4>Pitching Stats</h4>
                                <div class="frm">
                                    <input type="text" placeholder="ERA" name="Bas_Era" id="Bas_Era">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Win / Loss Record" name="Bas_Win">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Primary Pitch" name="Bas_Primary">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Secondary Pitch" name="Bas_Secondary">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Fastball Velocity" name="Bas_FastBall">
                                </div>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             	<h4>Hitting Stats</h4>
                                <div class="frm">
                                    <input type="text" placeholder="Batting Average" name="Bas_Batting" id="Bas_Batting">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="RBI" name="Bas_Rbi">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Stolen Bases" name="Bas_Stolen">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="On Base %" name="Bas_OnBase">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="60 Yard Dash" name="Bas_YardDash">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Speed from Home to First" name="Bas_Speed">
                                </div>
                            </div>
                            <div class="image-upload">
                                <span class="uploadimg" id="imagePreview2">
	                                <input type="file" name="Bas_MiddleImageName" id="Bas_MiddleImageName">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  
	                            </span>
                            </div>
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload">
                                <span class="uploadimg" id="imagePreview3">
	                                <input type="file" name="Bas_RightImageName" id="Bas_RightImageName"> 
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  
	                            </span>
                            </div>
                        	<div class="reg-frm pitching-stats">
                             	<h4>Fielding Stats</h4>
                                <div class="frm">
                                    <input type="text" placeholder="Assists" name="Bas_Assist" id="Bas_Assist">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Put Outs" name="Bas_Put">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Double Plays" name="Bas_Double">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Triple Plays" name="Bas_Triple">
                                </div>
                                <div class="frm">
                                    <input type="text" placeholder="Fielding %" name="Bas_Field">
                                </div>
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
    $("#Bas_LeftImageName").on("change", function()
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
    $("#Bas_MiddleImageName").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){ // set image data as background of div
			$("#image2").hide();
                $("#imagePreview2").css("background-image", "url("+this.result+")");
            }
        }
    });
});

$(function() {
    $("#Bas_RightImageName").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){ // set image data as background of div
			$("#image3").hide();
                $("#imagePreview3").css("background-image", "url("+this.result+")");
            }
        }
    });
});
</script>
<style>
#imagePreview1 {
    width: 100%;
    height: 100%;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}
#imagePreview2 {
    width: 100%;
    height: 100%;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}
#imagePreview3 {
    width: 100%;
    height: 100%;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}
</style>