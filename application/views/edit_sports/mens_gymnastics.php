	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Men's Gymnastics)</h2>
                </div>
                 <?php if($this->session->flashdata('errormessage')){?> 
                    <div class="errormessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('errormessage');?>
                    </div>  
                <?php }?>
                  <?php if($this->session->flashdata('successmessage')){?> 
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                   
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_mens_gymnastics" onsubmit="return getStudent_data();">
                    <div class="forums-details">
                	<div class="da-update">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            <span>Player Name</span>
                            	<input type="text" name="Gym_PlayerName" id="Gym_PlayerName" placeholder="Player Name" value="<?php echo $Sport_info['Gym_PlayerName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>School Name</span>
                            	<input type="text" name="Gym_SchoolName" id="Gym_SchoolName" placeholder="High School Name" value="<?php echo $Sport_info['Gym_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                             <span>City</span>
                            	<input type="text" name="Gym_City"  id="Gym_City" placeholder="City" value="<?php echo $Sport_info['Gym_City']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>State</span>
                            	<input type="text" name="Gym_State" id="Gym_State" placeholder="State" value="<?php echo $Sport_info['Gym_State']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="student-margin">
                    	<div class="student-card set-stud clearfix">
                    	<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                                <h4>FLOOR EXERCISE</h4>
                                <div class="frm">
                                 <span>Best Score</span>
                                    <input type="text" name="Gym_Floor_Score" placeholder="Best Score" value="<?php echo $Sport_info['Gym_Floor_Score']; ?>">
                                </div>
                                <div class="frm">
                                <span>Average Score</span>
                                    <input type="text" name="Gym_Floor_Average" placeholder="Average Score" value="<?php echo $Sport_info['Gym_Floor_Average']; ?>">
                                </div>
                                <h4>PARALLEL BARS</h4>
                                <div class="frm">
                                <span>Best Score</span>
                                    <input type="text" name="Gym_Parallel_Score" placeholder="Best Score" value="<?php echo $Sport_info['Gym_Parallel_Score']; ?>">
                                </div>
                                <div class="frm">
                                <span>Average Score</span>
                                    <input type="text" name="Gym_Parallel_Average" placeholder="Average Score" value="<?php echo $Sport_info['Gym_Parallel_Average']; ?>">
                                </div>
                             </div>   
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             	
                                <h4>VAULT</h4>
                                <div class="frm">
                                <span>Best Score</span>
                                    <input type="text" name="Gym_Vault_Score" placeholder="Best Score" value="<?php echo $Sport_info['Gym_Vault_Score']; ?>">
                                </div>
                                <div class="frm">
                                <span>Average Score</span>
                                    <input type="text" name="Gym_Vault_Average" placeholder="Average Score" value="<?php echo $Sport_info['Gym_Vault_Average']; ?>">
                                </div>
                                <h4>HIGH BAR</h4>
                                <div class="frm">
                                <span>Best Score</span>
                                    <input type="text" name="Gym_High_Score" placeholder="Best Score" value="<?php echo $Sport_info['Gym_High_Score']; ?>">
                                </div>
                                <div class="frm">
                                <span>Average Score</span>
                                    <input type="text" name="Gym_High_Average" placeholder="Average Score" value="<?php echo $Sport_info['Gym_High_Average']; ?>">
                                </div>
                                <h4>BIOMETRICS</h4>
                                
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Gym_Height" placeholder="feet" value="<?php echo $Sport_info['Gym_Height']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Gym_HeightInche" placeholder="inches" value="<?php echo $Sport_info['Gym_HeightInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                <span>Weight</span>
                                    <input type="text" name="Gym_Weight" placeholder="Weight" value="<?php echo $Sport_info['Gym_Weight']; ?>">
                                </div>
                               
                                

                            </div>
                            
                        </div>
                        <div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                            	<h4>STILL RINGS</h4>
                             	<div class="frm">
                                    <input type="text" name="Gym_Still_Score" placeholder="Best Score" value="<?php echo $Sport_info['Gym_Still_Score']; ?>">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Gym_Still_Average" placeholder="Average Score" value="<?php echo $Sport_info['Gym_Still_Average']; ?>">
                                </div>
                                <h4>POMMEL HORSE</h4>
                             	<div class="frm">
                                    <input type="text" name="Gym_Pommel_Score" placeholder="Best Score" value="<?php echo $Sport_info['Gym_Pommel_Score']; ?>">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Gym_Pommel_Average" placeholder="Average Score" value="<?php echo $Sport_info['Gym_Pommel_Average']; ?>">
                                </div>
                             </div>   
                        </div>
                        <div class="cl"></div>
                    </div>
                   		<div class="student-card set-stud-b clearfix">
                    	<div class="cols-6">
                        	<div class="image-upload max-upload">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Gym_ProImage" id="Bas_LeftImageName1">
                               		<?php if($Sport_info['Gym_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Gym_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>            
	                            </span>
                            </div>
                        </div>
                        <div class="cols-6">
                        	<div class="image-upload max-upload">
                                 <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Gym_ProImage2" id="Bas_LeftImageName2">
                               		<?php if($Sport_info['Gym_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Gym_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>            
	                            </span>
                            </div>
                        </div>
                        
                    </div>
                    </div>
                     <div class="btn">
                        	<input type="submit" value="Update" class="input-submit">
                         </div>
                    </div>
                    </div>
               
                </form>
             </div>
        </div>
    </div>
    
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


