	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (FootBall)</h2>
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
                   
                   
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_football" onsubmit="return getStudent_data();">
                    <div class="forums-details">
                	<div class="da-update">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<span>Player Name</span>
                                <input type="text" placeholder="Player Name" name="FootBall_PlayerName" id="FootBall_PlayerName" value="<?php echo $Sport_info['FootBall_PlayerName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>High School Name</span>
                            	<input type="text" placeholder="High School Name" name="FootBall_SchoolName" id="FootBall_SchoolName" value="<?php echo $Sport_info['FootBall_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>City</span>	
                                <input type="text" placeholder="City" name="FootBall_City" id="FootBall_City" value="<?php echo $Sport_info['FootBall_City']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>State</span>	
                            	<input type="text" placeholder="State" name="FootBall_State" id="FootBall_State" value="<?php echo $Sport_info['FootBall_State']; ?>">
                            </div>
                        </div>
                        <div class="frm clearfix">
                    		<div class="cols-4">
                            <span>Class</span>	
                            	<input type="text" name="FootBall_Class" placeholder="Class of 20" value="<?php echo $Sport_info['FootBall_Class']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>Offensive Position</span>	
                            	<input type="text" name="FootBall_Offensive" placeholder="Offensive Position" value="<?php echo $Sport_info['FootBall_Offensive']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>Defensive Position</span>	
                            	<input type="text" name="FootBall_Defensive" placeholder="Defensive Position" value="<?php echo $Sport_info['FootBall_Defensive']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>Special Team Position</span>	
                            	<input type="text" name="FootBall_Special" placeholder="Special Team Position" value="<?php echo $Sport_info['FootBall_Special']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<h3>OFFENSIVE STATS</h3>
                    	<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                                <h4>RUSHING PER GAME<br><span>(RB,TB,QB Stats)</span></h4>
                                <div class="frm">
                                 <span>RUSHING YDS/GAME</span>	
                                    <input type="text" name="FootBall_Rushing" placeholder="RUSHING YDS/GAME" value="<?php echo $Sport_info['FootBall_Rushing']; ?>">
                                </div>
                                <div class="frm">
                                 <span># OF ATT/GAME</span>	
                                    <input type="text" name="FootBall_Rush_ATT" placeholder="# OF ATT/GAME" value="<?php echo $Sport_info['FootBall_Rush_ATT']; ?>">
                                </div>
                                <div class="frm">
                                <span>YDS/ATT</span>	
                                    <input type="text" name="FootBall_Rush_YDS" placeholder="YDS/ATT" value="<?php echo $Sport_info['FootBall_Rush_YDS']; ?>">
                                </div>
                                <div class="frm">
                                <span>TD/GAME</span>	
                                    <input type="text" name="FootBall_Rush_TD" placeholder="TD/GAME" value="<?php echo $Sport_info['FootBall_Rush_TD']; ?>">
                                </div>
                                <div class="frm">
                                <span>LONGEST RUN</span>	
                                    <input type="text" name="FootBall_Rush_Longest" placeholder="LONGEST RUN" value="<?php echo $Sport_info['FootBall_Rush_Longest']; ?>">
                                </div>
                                <div class="frm">
                                <span>SEASON RUSH YARDS</span>	
                                    <input type="text" name="FootBall_Rush_Season" placeholder="SEASON RUSH YARDS" value="<?php echo $Sport_info['FootBall_Rush_Season']; ?>">
                                </div>
                            </div>
                        </div>
						
                        <div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                                <h4>PASSING PER GAME<br> <span>(QB Stats)</span></h4>
                                <div class="frm">
                                <span>ATTEMPTS/GAME</span>	
                                    <input type="text" name="FootBall_Pass_Attems" placeholder="ATTEMPTS/GAME" value="<?php echo $Sport_info['FootBall_Pass_Attems']; ?>">
                                </div>
                                <div class="frm">
                                <span># OF COMP/GAME</span>	
                                    <input type="text" name="FootBall_Pass_Game" placeholder="# OF COMP/GAME" value="<?php echo $Sport_info['FootBall_Pass_Game']; ?>">
                                </div>
                                <div class="frm">
                                <span>COMP %</span>	
                                    <input type="text" name="FootBall_Pass_Comp" placeholder="COMP %" value="<?php echo $Sport_info['FootBall_Pass_Comp']; ?>">
                                </div>
                                <div class="frm">
                                <span>YDS/GAME</span>	
                                    <input type="text" name="FootBall_Pass_YDS" placeholder="YDS/GAME" value="<?php echo $Sport_info['FootBall_Pass_YDS']; ?>">
                                </div>
                                <div class="frm">
                                <span>TD/GAME</span>	
                                    <input type="text" name="FootBall_Pass_TD" placeholder="TD/GAME" value="<?php echo $Sport_info['FootBall_Pass_TD']; ?>">
                                </div>
                                <div class="frm">
                                <span>SEASON PASS YARDS</span>	
                                    <input type="text" name="FootBall_Pass_Season" placeholder="SEASON PASS YARDS" value="<?php echo $Sport_info['FootBall_Pass_Season']; ?>">
                                </div>
                            </div>
                        </div>
                        
                        <div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                                <h4>RECEIVING PER GAME<br> <span>(WR,RB,TB Stats)</span> </h4>
                                <div class="frm">
                                <span>RECEIVING YDS/GAME</span>	
                                    <input type="text" name="FootBall_Receive" placeholder="RECEIVING YDS/GAME" value="<?php echo $Sport_info['FootBall_Receive']; ?>">
                                </div>
                                <div class="frm">
                                <span># OF REC/GAME</span>	
                                    <input type="text" name="FootBall_Rece_REC" placeholder="# OF REC/GAME" value="<?php echo $Sport_info['FootBall_Rece_REC']; ?>">
                                </div>
                                <div class="frm">
                                <span>YDS/REC</span>	
                                    <input type="text" name="FootBall_Rece_YDS" placeholder="YDS/REC" value="<?php echo $Sport_info['FootBall_Rece_YDS']; ?>">
                                </div>
                                <div class="frm">
                                <span>TD/GAME</span>	
                                    <input type="text" name="FootBall_Rece_TD" placeholder="TD/GAME" value="<?php echo $Sport_info['FootBall_Rece_TD']; ?>">
                                </div>
                                <div class="frm">
                                <span>LONGEST RECEPTION</span>	
                                    <input type="text" name="FootBall_Rece_Longest" placeholder="LONGEST RECEPTION" value="<?php echo $Sport_info['FootBall_Rece_Longest']; ?>">
                                </div>
                                <div class="frm">
                                <span>SEASON REC YARDS</span>	
                                    <input type="text" name="FootBall_Rece_Season" placeholder="SEASON REC YARDS" value="<?php echo $Sport_info['FootBall_Rece_Season']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="cl"></div>
                    </div>
                    
                    <div class="student-card clearfix">
                    	
                    	<div class="cols-3">
                        <div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="FootBall_ProImage" id="Bas_LeftImageName1">
                               		<?php if($Sport_info['FootBall_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['FootBall_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>          
	                            </span>
                            </div>
                            <div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="FootBall_ProImage2" id="Bas_LeftImageName2">
                               		<?php if($Sport_info['FootBall_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['FootBall_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>          
	                            </span>
                            </div>
                            <div class="reg-frm pitching-stats">
                             <h3>SPECIAL TEAM KICKING STATS</h3>
                             <h4>FG KICKING</h4>
                                
                                <div class="frm">
                                <span>FG MADE/GAME</span>	
                                    <input type="text" name="FootBall_FG_Made"  placeholder="FG MADE/GAME" value="<?php echo $Sport_info['FootBall_FG_Made']; ?>">
                                </div>
                                <div class="frm">
                                <span>FG ATT/GAME</span>	
                                    <input type="text" name="FootBall_FG_ATT"  placeholder="FG ATT/GAME" value="<?php echo $Sport_info['FootBall_FG_ATT']; ?>">
                                </div>
                                <div class="frm">
                                <span>FG %</span>	
                                    <input type="text" name="FootBall_FG" placeholder="FG %" value="<?php echo $Sport_info['FootBall_FG']; ?>">
                                </div>
                                <div class="frm">
                                <span>LONGEST FG</span>	
                                    <input type="text" name="FootBall_FG_Longest" placeholder="LONGEST FG" value="<?php echo $Sport_info['FootBall_FG_Longest']; ?>">
                                </div>
                              <h4>PUNTING/KICKING</h4>  
                              <div class="frm">
                              <span>KICK ATT/GAME</span>	
                                    <input type="text" name="FootBall_Punt_Kick" placeholder="KICK ATT/GAME" value="<?php echo $Sport_info['FootBall_Punt_Kick']; ?>">
                              </div>
                              <div class="frm">
                              <span>KICK YDS/GAME</span>	
                                    <input type="text" name="FootBall_Punt_YDS" placeholder="KICK YDS/GAME" value="<?php echo $Sport_info['FootBall_Punt_YDS']; ?>">
                               </div>
                               <div class="frm">
                               <span>AVG KICK</span>	
                                    <input type="text" name="FootBall_Punt_Avg" placeholder="AVG KICK" value="<?php echo $Sport_info['FootBall_Punt_Avg']; ?>">
                                </div>
                                <div class="frm">
                                <span>LONGEST KICK</span>	
                                    <input type="text" name="FootBall_Punt_Longest" placeholder="LONGEST KICK" value="<?php echo $Sport_info['FootBall_Punt_Longest']; ?>">
                                </div>
                                <div class="frm">
                                <span>KICK INSIDE 20</span>	
                                    <input type="text" name="FootBall_Punt_Inside" placeholder="KICK INSIDE 20" value="<?php echo $Sport_info['FootBall_Punt_Inside']; ?>">
                                </div>
                                
                                
                             </div>  
                            
                        </div>
						
                        <div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                            	<h3>DEFENSIVE STATS</h3>
                             	<div class="frm">
                                <span>Solo Tackles/Game</span>	
                                    <input type="text" name="FootBall_Solo" placeholder="Solo Tackles/Game" value="<?php echo $Sport_info['FootBall_Solo']; ?>">
                                </div>
                                <div class="frm">
                                <span>Assisted tackles/Game</span>	
                                    <input type="text" name="FootBall_Assisted"   placeholder="Assisted tackles/Game" value="<?php echo $Sport_info['FootBall_Assisted']; ?>">
                                </div>
                                
                                <div class="frm">
                                <span>Tackles/game</span>	
                                    <input type="text" name="FootBall_Tackles" placeholder="Tackles/game" value="<?php echo $Sport_info['FootBall_Tackles']; ?>">
                                </div>
                                <div class="frm">
                                <span>Sacks</span>	
                                    <input type="text" name="FootBall_Sacks" placeholder="Sacks" value="<?php echo $Sport_info['FootBall_Sacks']; ?>">
                                </div>
                                <div class="frm">
                                <span>Interceptions</span>	
                                    <input type="text" name="FootBall_Interceptions" placeholder="Interceptions" value="<?php echo $Sport_info['FootBall_Interceptions']; ?>">
                                </div>
                                <div class="frm">
                                <span>Pass Deflections</span>	
                                    <input type="text" name="FootBall_Pass" placeholder="Pass Deflections" value="<?php echo $Sport_info['FootBall_Pass']; ?>">
                                </div>
                                <div class="frm">
                                <span>Fumble Recoveries</span>	
                                    <input type="text" name="FootBall_Fumble" placeholder="Fumble Recoveries" value="<?php echo $Sport_info['FootBall_Fumble']; ?>">
                                </div>
                                <div class="frm">
                                <span>Tackle for Loss</span>	
                                    <input type="text" name="FootBall_Tackles_Loss" placeholder="Tackle for Loss" value="<?php echo $Sport_info['FootBall_Tackles_Loss']; ?>">
                                </div>
                                
                                <h3>BIOMETRIC STATISTICS</h3>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="FootBall_Height" placeholder="feet" value="<?php echo $Sport_info['FootBall_Height']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="FootBall_HeightInche" placeholder="inches" value="<?php echo $Sport_info['FootBall_HeightInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                <span>Weight</span>	
                                    <input type="text" name="FootBall_Weight" placeholder="Weight" value="<?php echo $Sport_info['FootBall_Weight']; ?>">
                                </div>
                                <div class="frm clearfix">
                                    <div class="label fl">Broad jump</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="FootBall_BroadJump" placeholder="feet" value="<?php echo $Sport_info['FootBall_BroadJump']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="FootBall_BroadJumpInche" placeholder="inches" value="<?php echo $Sport_info['FootBall_BroadJumpInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                <span>Vertical</span>	
                                    <input type="text" name="FootBall_Vertical" placeholder="Vertical" value="<?php echo $Sport_info['FootBall_Vertical']; ?>">
                                </div>
                                <div class="frm">
                                <span>40 yard dash</span>	
                                    <input type="text" name="FootBall_Yard" placeholder="40 yard dash" value="<?php echo $Sport_info['FootBall_Yard']; ?>">
                                </div>
                                 <div class="frm">
                                 <span>20 yard shuttle</span>	
                                    <input type="text" name="FootBall_YardShuttle" placeholder="20 yard shuttle" value="<?php echo $Sport_info['FootBall_YardShuttle']; ?>">
                                </div>
                                 <div class="frm">
                                 <span>3 Cone drill</span>	
                                    <input type="text" name="FootBall_Cone" placeholder="3 Cone drill" value="<?php echo $Sport_info['FootBall_Cone']; ?>">
                                </div>
                                 <div class="frm">
                                 <span>Bench (225lbs)</span>	
                                    <input type="text" name="FootBall_Bench" placeholder="Bench (225lbs)" value="<?php echo $Sport_info['FootBall_Bench']; ?>">
                                </div>
                                
                                <div class="image-upload">
                                <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="FootBall_ProImage3" id="Bas_LeftImageName3">
                               		<?php if($Sport_info['FootBall_ProImage3']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['FootBall_ProImage3'].''); ?>" alt="" id="image3"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  <?php } ?>          
	                            </span>
                            </div>

                            </div>
                            
                        </div>
                        
                        <div class="cols-3">
                        	<div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="FootBall_ProImage4" id="Bas_LeftImageName4">
                               		<?php if($Sport_info['FootBall_ProImage4']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['FootBall_ProImage4'].''); ?>" alt="" id="image4"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image4">  <?php } ?>          
	                            </span>
                            </div>
                        	
                            <div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview5">
	                                <input type="file" name="FootBall_ProImage5" id="Bas_LeftImageName5">
                               		<?php if($Sport_info['FootBall_ProImage5']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['FootBall_ProImage5'].''); ?>" alt="" id="image5"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image5">  <?php } ?>          
	                            </span>
                            </div>
                            
                             <div class="reg-frm pitching-stats">
                             		<h3>SPECIAL TEAM RETURN STATS</h3>
                                    <h4>KICKOFF RETURN</h4>
                                     <div class="frm">
                                     <span>RET YDS/GAME</span>	
                                    	<input type="text" name="FootBall_Kick_RET" placeholder="RET YDS/GAME" value="<?php echo $Sport_info['FootBall_Kick_RET']; ?>">
                                	 </div>
                                     <div class="frm">
                                     <span>RET ATT/GAME</span>	
                                    	<input type="text" name="FootBall_Kick_ATT" placeholder="RET ATT/GAME" value="<?php echo $Sport_info['FootBall_Kick_ATT']; ?>">
                                	 </div>
                                     <div class="frm">
                                     <span>YDS/RET</span>	
                                    	<input type="text" name="FootBall_Kick_YDS" placeholder="YDS/RET" value="<?php echo $Sport_info['FootBall_Kick_YDS']; ?>">
                                	 </div>
                                     <div class="frm">
                                     <span>LONGEST RET</span>	
                                    	<input type="text" name="FootBall_Kick_Longest" placeholder="LONGEST RET" value="<?php echo $Sport_info['FootBall_Kick_Longest']; ?>">
                                	 </div>
                                     <h4>PUNT RETURN</h4>
                                     <div class="frm">
                                     <span>RET YDS/GAME</span>	
                                    	<input type="text" name="FootBall_Punt_Res_RET" placeholder="RET YDS/GAME" value="<?php echo $Sport_info['FootBall_Punt_Res_RET']; ?>">
                                	 </div>
                                     <div class="frm">
                                     <span>RET ATT/GAME</span>	
                                    	<input type="text" name="FootBall_Punt_Res_ATT" placeholder="RET ATT/GAME" value="<?php echo $Sport_info['FootBall_Punt_Res_ATT']; ?>">
                                	 </div>
                                     <div class="frm">
                                     <span>YDS/RET</span>	
                                    	<input type="text" name="FootBall_Punt_Res_YDS" placeholder="YDS/RET" value="<?php echo $Sport_info['FootBall_Punt_Res_YDS']; ?>">
                                	 </div>
                                     <div class="frm">
                                     <span>LONGEST RET</span>	
                                    	<input type="text" name="FootBall_Punt_Res_Longest" placeholder="LONGEST RET" value="<?php echo $Sport_info['FootBall_Punt_Res_Longest']; ?>">
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
                </div>
                </form>
                    
                   
            </div>
        </div>
    </div>
    
<script>
function getStudent_data()
{

	var flag = true;

	if ($('#FootBall_PlayerName').val()=='')
	{
		$('#FootBall_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#FootBall_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#FootBall_SchoolName').val()=='')
	{
		$('#FootBall_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#FootBall_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#FootBall_City').val()=='')
	{
		$('#FootBall_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#FootBall_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#FootBall_State').val()=='')
	{
		$('#FootBall_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#FootBall_State').css('border','1px solid #a4a4a4');
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


$(function() {
    $("#Bas_LeftImageName5").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){
			 // set image data as background of div
			   $("#image5").hide();
                $("#imagePreview5").css("background-image", "url("+this.result+")");
            }
        }
    });
});

</script>    


