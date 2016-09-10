	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Baseball)</h2>
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
                  <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_baseball" onsubmit="return getStudent_data();">
                    <div class="forums-details">
                	<div class="da-update">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<span>Player Name</span>
                                <input type="text" placeholder="Player Name" name="Bas_Player" id="Bas_Player" value="<?php echo $Sport_info['Bas_Player']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>High School Name</span>
                            	<input type="text" placeholder="High School Name" name="Bas_HighSchool" id="Bas_HighSchool" value="<?php echo $Sport_info['Bas_HighSchool']; ?>">
                            </div>
                            <div class="cols-4">
                          	<span>City</span>
                            	<input type="text" placeholder="City" name="Bas_City" id="Bas_City" value="<?php echo $Sport_info['Bas_City']; ?>"> 
                            </div>
                            <div class="cols-4">
                            <span>State</span>
                            	<input type="text" placeholder="State" name="Bas_State" id="Bas_State" value="<?php echo $Sport_info['Bas_State']; ?>">
                            </div>
                        </div>
                        <div class="frm clearfix">
                    		<div class="cols-4">
                             <span>Class</span>
                            	<input type="text" placeholder="Class of 20" name="Bas_Class" value="<?php echo $Sport_info['Bas_Class']; ?>">
                            </div>
                            <div class="cols-4">
                             <span>Primary Position</span>
                            	<input type="text" placeholder="Primary Position" name="Bas_Position" value="<?php echo $Sport_info['Bas_Position']; ?>">
                            </div>
                            <div class="cols-4">
                             <span>Throws</span>
                            	<input type="text" placeholder="Throws" name="Bas_Throws" value="<?php echo $Sport_info['Bas_Throws']; ?>">
                            </div>
                            <div class="cols-4">
                             <span>Bats</span>
                            	<input type="text" placeholder="Bats" name="Bas_Bats" value="<?php echo $Sport_info['Bas_Bats']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload" >
                                <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Bas_LeftImageName" id="Bas_LeftImageName">
                               		<?php if($Sport_info['Bas_LeftImageName']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Bas_LeftImageName'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?> 
	                            </span>
                            </div>
                        	<div class="reg-frm pitching-stats">
                             	<h4>Pitching Stats</h4>
                                <div class="frm">
                                 <span>Era</span>
                                    <input type="text" placeholder="ERA" name="Bas_Era" id="Bas_Era" value="<?php echo $Sport_info['Bas_Era']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Win / Loss Record</span>
                                    <input type="text" placeholder="Win / Loss Record" name="Bas_Win" value="<?php echo $Sport_info['Bas_Win']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Primary Pitch</span>
                                    <input type="text" placeholder="Primary Pitch" name="Bas_Primary" value="<?php echo $Sport_info['Bas_Primary']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Secondary Pitch</span>
                                    <input type="text" placeholder="Secondary Pitch" name="Bas_Secondary" value="<?php echo $Sport_info['Bas_Secondary']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Fastball Velocity</span>
                                    <input type="text" placeholder="Fastball Velocity" name="Bas_FastBall" value="<?php echo $Sport_info['Bas_FastBall']; ?>">
                                </div>
                            </div>
                        </div>
						<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             	<h4>Hitting Stats</h4>
                                <div class="frm">
                                 <span>Batting Average</span>
                                    <input type="text" placeholder="Batting Average" name="Bas_Batting" id="Bas_Batting" value="<?php echo $Sport_info['Bas_Batting']; ?>">
                                </div>
                                <div class="frm">
                                 <span>RBI</span>
                                    <input type="text" placeholder="RBI" name="Bas_Rbi" value="<?php echo $Sport_info['Bas_Rbi']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Stolen Bases</span>
                                    <input type="text" placeholder="Stolen Bases" name="Bas_Stolen" value="<?php echo $Sport_info['Bas_Stolen']; ?>">
                                </div>
                                <div class="frm">
                                 <span>On Base %</span>
                                    <input type="text" placeholder="On Base %" name="Bas_OnBase" value="<?php echo $Sport_info['Bas_OnBase']; ?>">
                                </div>
                                <div class="frm">
                                 <span>60 Yard Dash</span>
                                    <input type="text" placeholder="60 Yard Dash" name="Bas_YardDash" value="<?php echo $Sport_info['Bas_YardDash']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Speed from Home to First</span>
                                    <input type="text" placeholder="Speed from Home to First" name="Bas_Speed" value="<?php echo $Sport_info['Bas_Speed']; ?>">
                                </div>
                            </div>
                            <div class="image-upload">
                                <span class="uploadimg" id="imagePreview2">
	                                <input type="file" name="Bas_MiddleImageName" id="Bas_MiddleImageName">
                               		 <?php if($Sport_info['Bas_MiddleImageName']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Bas_MiddleImageName'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?> 
	                            </span>
                            </div>
                        </div>
                        <div class="cols-3">
                        	<div class="image-upload">
                                <span class="uploadimg" id="imagePreview3">
	                                <input type="file" name="Bas_RightImageName" id="Bas_RightImageName"> 
                                     <?php if($Sport_info['Bas_RightImageName']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Bas_RightImageName'].''); ?>" alt="" id="image3"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  <?php } ?>
                                  </span>
                            </div>
                        	<div class="reg-frm pitching-stats">
                             	<h4>Fielding Stats</h4>
                                <div class="frm">
                                 <span>Assists</span>
                                    <input type="text" placeholder="Assists" name="Bas_Assist" id="Bas_Assist" value="<?php echo $Sport_info['Bas_Assist']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Put Outs</span>
                                    <input type="text" placeholder="Put Outs" name="Bas_Put" value="<?php echo $Sport_info['Bas_Put']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Double Plays</span>
                                    <input type="text" placeholder="Double Plays" name="Bas_Double" value="<?php echo $Sport_info['Bas_Double']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Triple Plays</span>
                                    <input type="text" placeholder="Triple Plays" name="Bas_Triple" value="<?php echo $Sport_info['Bas_Triple']; ?>">
                                </div>
                                <div class="frm">
                                 <span>Fielding</span>
                                    <input type="text" placeholder="Fielding %" name="Bas_Field" value="<?php echo $Sport_info['Bas_Field']; ?>">
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