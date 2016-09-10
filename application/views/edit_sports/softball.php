	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Softball)</h2>
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
                   
                    
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_softball" onsubmit="return getStudent_data();">
                     <div class="forums-details">
                	<div class="da-update">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            <span>Player Name</span>
                            	<input type="text" name="Soft_PlayerName" id="Soft_PlayerName" placeholder="Player Name" value="<?php echo $Sport_info['Soft_PlayerName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>High School Name</span>
                            	<input type="text" name="Soft_SchoolName" id="Soft_SchoolName" placeholder="High School Name" value="<?php echo $Sport_info['Soft_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>City</span>
                            	<input type="text" name="Soft_City" id="Soft_City" placeholder="City" value="<?php echo $Sport_info['Soft_City']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>State</span>
                            	<input type="text" name="Soft_State" id="Soft_State" placeholder="State" value="<?php echo $Sport_info['Soft_State']; ?>">
                            </div>
                        </div>
                        <div class="frm clearfix">
                    		<div class="cols-4">
                             <span>Class</span>
                            	<input type="text" name="Soft_Class"  placeholder="Class of 20" value="<?php echo $Sport_info['Soft_Class']; ?>">
                            </div>
                            <div class="cols-4">
                             <span>Primary Position</span>
                            	<input type="text" name="Soft_Primary" placeholder="Primary Position" value="<?php echo $Sport_info['Soft_Primary']; ?>">
                            </div>
                            <div class="cols-4">
                             <span>Throws</span>
                            	<input type="text" name="Soft_Secondary" placeholder="Throws" value="<?php echo $Sport_info['Soft_Secondary']; ?>">
                            </div>
                            <div class="cols-4">
                             <span>Bats</span>
                            	<input type="text" name="Soft_Bats" placeholder="Bats" value="<?php echo $Sport_info['Soft_Bats']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	
                        	<div class="reg-frm pitching-stats">
                        	<div class="image-upload">
                                <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Soft_ProImage" id="Bas_LeftImageName1">
                               		<?php if($Sport_info['Soft_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Soft_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>           
	                            </span>
                            </div>
                            <h4>PITCHING STATS</h4>
                                <div class="frm">
                                 <span>ERA</span>
                                    <input type="text" name="Soft_Era" placeholder="ERA" value="<?php echo $Sport_info['Soft_Era']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Win / Loss Record</span>
                                    <input type="text" name="Soft_Win" placeholder="Win / Loss Record" value="<?php echo $Sport_info['Soft_Win']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Primary Pitch</span>
                                    <input type="text" name="Soft_Pitch_Primary" placeholder="Primary Pitch" value="<?php echo $Sport_info['Soft_Pitch_Primary']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Secondary Pitch</span>
                                    <input type="text" name="Soft_Pitch_Secondary" placeholder="Secondary Pitch" value="<?php echo $Sport_info['Soft_Pitch_Secondary']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Fastball Velocity</span>
                                    <input type="text" name="Soft_Pitch_Fastball" placeholder="Fastball Velocity" value="<?php echo $Sport_info['Soft_Pitch_Fastball']; ?>">
                                </div>
                                
                        	</div>
                        </div>
						
                        <div class="cols-3">
                        	
                        	<div class="reg-frm pitching-stats">
                                <h4>HITTING STATS</h4>
                                <div class="frm">
                                 <span>Batting Average</span>
                                    <input type="text" name="Soft_Batting" placeholder="Batting Average" value="<?php echo $Sport_info['Soft_Batting']; ?>">
                                </div>
                                <div class="frm">
                                 <span>RBI</span>
                                    <input type="text" name="Soft_Rbi" placeholder="RBI" value="<?php echo $Sport_info['Soft_Rbi']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Stolen Bases</span>
                                    <input type="text" name="Soft_Stolen" placeholder="Stolen Bases" value="<?php echo $Sport_info['Soft_Stolen']; ?>">
                                </div>
                                <div class="frm">
                                 <span>On Base %</span>
                                    <input type="text" name="Soft_OnBase" placeholder="On Base %" value="<?php echo $Sport_info['Soft_OnBase']; ?>">
                                </div>
                                <div class="frm">
                                 <span>60 Yard Dash</span>
                                    <input type="text" name="Soft_YardDash" placeholder="60 Yard Dash" value="<?php echo $Sport_info['Soft_YardDash']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Speed from Home to First</span>
                                    <input type="text" name="Soft_Speed" placeholder="Speed from Home to First" value="<?php echo $Sport_info['Soft_Speed']; ?>">
                                </div>
                                
                                <div class="image-upload">
                                    <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Soft_ProImage2" id="Bas_LeftImageName2">
                               			<?php if($Sport_info['Soft_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Soft_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>           
	                            </span>
                                </div>
                                
                                

                            </div>
                            
                        </div>
                        
                        <div class="cols-3">
                        	
                        	<div class="reg-frm pitching-stats">
                        	<div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="Soft_ProImage3" id="Bas_LeftImageName3">
                               		<?php if($Sport_info['Soft_ProImage3']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Soft_ProImage3'].''); ?>" alt="" id="image3"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  <?php } ?>           
	                            </span>
                            </div>
                            <h4>FIELDING STATS</h4>
                                <div class="frm">
                                 <span>Assists</span>
                                    <input type="text" name="Soft_Assists" placeholder="Assists" value="<?php echo $Sport_info['Soft_Assists']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Put Outs</span>
                                    <input type="text" name="Soft_PutOuts" placeholder="Put Outs" value="<?php echo $Sport_info['Soft_PutOuts']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Double Plays</span>
                                    <input type="text" name="Soft_Doubles" placeholder="Double Plays" value="<?php echo $Sport_info['Soft_Doubles']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Triple Plays</span>
                                    <input type="text" name="Soft_Triples" placeholder="Triple Plays" value="<?php echo $Sport_info['Soft_Triples']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Fielding %</span>
                                    <input type="text" name="Soft_Fielding" placeholder="Fielding %" value="<?php echo $Sport_info['Soft_Fielding']; ?>">
                                </div>
                                
                        	</div>
                        </div>
                        
                        <div class="cl"></div>
                        <div class="btn">
                        	<input type="submit" value="Update" class="input-submit">
                         </div>
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


