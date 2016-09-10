
    <section class="content">
     <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="student-athlete">
                	<div class="reg-title"><h2>Softball Board</h2></div>
                      <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>sport/insert_softball" onsubmit="return getStudent_data();">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" name="Soft_PlayerName" id="Soft_PlayerName" placeholder="Player Name">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Soft_SchoolName" id="Soft_SchoolName" placeholder="High School Name">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Soft_City" id="Soft_City" placeholder="City">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Soft_State" id="Soft_State" placeholder="State">
                            </div>
                        </div>
                        <div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" name="Soft_Class"  placeholder="Class of 20">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Soft_Primary" placeholder="Primary Position">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Soft_Secondary" placeholder="Throws">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Soft_Bats" placeholder="Bats">
                            </div>
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	
                        	<div class="reg-frm pitching-stats">
                        	<div class="image-upload">
                                <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Soft_ProImage" id="Bas_LeftImageName1">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  
	                            </span>
                            </div>
                            <h4>PITCHING STATS</h4>
                                <div class="frm">
                                    <input type="text" name="Soft_Era" placeholder="ERA">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soft_Win" placeholder="Win / Loss Record">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soft_Pitch_Primary" placeholder="Primary Pitch">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soft_Pitch_Secondary" placeholder="Secondary Pitch">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soft_Pitch_Fastball" placeholder="Fastball Velocity">
                                </div>
                                
                        	</div>
                        </div>
						
                        <div class="cols-3">
                        	
                        	<div class="reg-frm pitching-stats">
                                <h4>HITTING STATS</h4>
                                <div class="frm">
                                    <input type="text" name="Soft_Batting" placeholder="Batting Average">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soft_Rbi" placeholder="RBI">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soft_Stolen" placeholder="Stolen Bases">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soft_OnBase" placeholder="On Base %">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soft_YardDash" placeholder="60 Yard Dash">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soft_Speed" placeholder="Speed from Home to First">
                                </div>
                                
                                <div class="image-upload">
                                    <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Soft_ProImage2" id="Bas_LeftImageName2">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  
	                            </span>
                                </div>
                                
                                

                            </div>
                            
                        </div>
                        
                        <div class="cols-3">
                        	
                        	<div class="reg-frm pitching-stats">
                        	<div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Soft_ProImage3" id="Bas_LeftImageName3">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  
	                            </span>
                            </div>
                            <h4>FIELDING STATS</h4>
                                <div class="frm">
                                    <input type="text" name="Soft_Assists" placeholder="Assists">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soft_PutOuts" placeholder="Put Outs">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soft_Doubles" placeholder="Double Plays">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soft_Triples" placeholder="Triple Plays">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Soft_Fielding" placeholder="Fielding %">
                                </div>
                                
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

	if ($('#Soft_PlayerName').val()=='')
	{
		$('#Soft_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Soft_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Soft_SchoolName').val()=='')
	{
		$('#Soft_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Soft_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Soft_City').val()=='')
	{
		$('#Soft_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Soft_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Soft_State').val()=='')
	{
		$('#Soft_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Soft_State').css('border','1px solid #a4a4a4');
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


</script>
