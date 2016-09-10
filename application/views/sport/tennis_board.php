    
    <section class="content">
     <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="student-athlete">
                	<div class="reg-title"><h2>Tennis Board</h2></div>
                     <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>sport/insert_tennis" onsubmit="return getStudent_data();">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" name="Tenis_PlayerName" id="Tenis_PlayerName" placeholder="Player Name">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Tenis_SchoolName" id="Tenis_SchoolName" placeholder="High School Name">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Tenis_City" id="Tenis_City" placeholder="City">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Tenis_State" id="Tenis_State" placeholder="State">
                            </div>
                        </div>
                        
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload top-upload">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Tenis_ProImage" id="Bas_LeftImageName1">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  
	                            </span>
                            </div>
                            
                        	<div class="image-upload left-upload">
                                <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Tenis_ProImage2" id="Bas_LeftImageName2">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  
	                            </span>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                                <div class="frm">
                                    <input type="text" name="Tenis_Position" placeholder="Position">
                                </div>
                                <h4>MATCH STATISTICS</h4>
                                <div class="frm">
                                    <input type="text" name="Tenis_Fastest" placeholder="Fastest Serve">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Tenis_First" placeholder="First Serve %">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Tenis_Second" placeholder="Second Serve %">
                                </div>
                                
                                <h4>PERSONAL RANKING</h4>
                                
                                <div class="frm">
                                    <input type="text" name="Tenis_Local" placeholder="Local Team">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Tenis_Usta" placeholder="USTA Rank">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Tenis_Itf" placeholder="ITF Rank">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Tenis_Wta" placeholder="WTA Rank">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Tenis_Recuirt" placeholder="TennisRecruiting.net Rank">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Tenis_Ata" placeholder="ATA Rank">
                                </div>
                                <h4>BIOMETRIC STATISTICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Tenis_Height" placeholder="feet">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Tenis_HeightInche" placeholder="inches">
                                    </div>
                                </div>
                                 <div class="frm">
                                    <input type="text" name="Tenis_Weight" placeholder="Weight">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Tenis_Domaint" placeholder="Dominant Hand">
                                </div>

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload top-upload">
                                 <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Tenis_ProImage3" id="Bas_LeftImageName3">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  
	                            </span>
                            </div>
                        	
                            <div class="image-upload left-upload">
                                 <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="Tenis_ProImage4" id="Bas_LeftImageName4">
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

	if ($('#Tenis_PlayerName').val()=='')
	{
		$('#Tenis_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Tenis_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Tenis_SchoolName').val()=='')
	{
		$('#Tenis_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Tenis_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Tenis_City').val()=='')
	{
		$('#Tenis_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Tenis_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Tenis_State').val()=='')
	{
		$('#Tenis_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Tenis_State').css('border','1px solid #a4a4a4');
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
