
    
    <section class="content">
     <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="student-athlete">
                	<div class="reg-title"><h2>Men’s Gymnastics Board</h2></div>
                     <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>sport/insert_mens_gymnastics" onsubmit="return getStudent_data();">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" name="Gym_PlayerName" id="Gym_PlayerName" placeholder="Player Name">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Gym_SchoolName" id="Gym_SchoolName" placeholder="High School Name">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Gym_City"  id="Gym_City" placeholder="City">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Gym_State" id="Gym_State" placeholder="State">
                            </div>
                        </div>
                    </div>
                    <div class="student-card set-stud clearfix">
                    	<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                                <h4>FLOOR EXERCISE</h4>
                                <div class="frm">
                                    <input type="text" name="Gym_Floor_Score" placeholder="Best Score">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Gym_Floor_Average" placeholder="Average Score">
                                </div>
                                <h4>PARALLEL BARS</h4>
                                <div class="frm">
                                    <input type="text" name="Gym_Parallel_Score" placeholder="Best Score">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Gym_Parallel_Average" placeholder="Average Score">
                                </div>
                             </div>   
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             	
                                <h4>VAULT</h4>
                                <div class="frm">
                                    <input type="text" name="Gym_Vault_Score" placeholder="Best Score">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Gym_Vault_Average" placeholder="Average Score">
                                </div>
                                <h4>HIGH BAR</h4>
                                <div class="frm">
                                    <input type="text" name="Gym_High_Score" placeholder="Best Score">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Gym_High_Average" placeholder="Average Score">
                                </div>
                                <h4>BIOMETRICS</h4>
                                
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Gym_Height" placeholder="feet">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Gym_HeightInche" placeholder="inches">
                                    </div>
                                </div>
                                <div class="frm">
                                    <input type="text" name="Gym_Weight" placeholder="Weight">
                                </div>
                               
                                

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                            	<h4>STILL RINGS</h4>
                             	<div class="frm">
                                    <input type="text" name="Gym_Still_Score" placeholder="Best Score">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Gym_Still_Average" placeholder="Average Score">
                                </div>
                                <h4>POMMEL HORSE</h4>
                             	<div class="frm">
                                    <input type="text" name="Gym_Pommel_Score" placeholder="Best Score">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Gym_Pommel_Average" placeholder="Average Score">
                                </div>
                             </div>   
                        </div>
                        <div class="cl"></div>
                        <div class="frm">
                        	<input type="submit" value="Continue">
                        </div>
                    </div>
                    <div class="student-card set-stud-b clearfix">
                    	<div class="cols-6">
                        	<div class="image-upload max-upload">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Gym_ProImage" id="Bas_LeftImageName1">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  
	                            </span>
                            </div>
                        </div>
                        <div class="cols-6">
                        	<div class="image-upload max-upload">
                                 <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Gym_ProImage2" id="Bas_LeftImageName2">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  
	                            </span>
                            </div>
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

	if ($('#Gym_PlayerName').val()=='')
	{
		$('#Gym_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Gym_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Gym_SchoolName').val()=='')
	{
		$('#Gym_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Gym_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Gym_City').val()=='')
	{
		$('#Gym_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Gym_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Gym_State').val()=='')
	{
		$('#Gym_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Gym_State').css('border','1px solid #a4a4a4');
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



</script>
