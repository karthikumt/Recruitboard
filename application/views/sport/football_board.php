
    
    <section class="content">
     <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="student-athlete">
                	<div class="reg-title"><h2>Football Board</h2></div>
                    <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>sport/insert_football" onsubmit="return getStudent_data();">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" placeholder="Player Name" name="FootBall_PlayerName" id="FootBall_PlayerName">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="High School Name" name="FootBall_SchoolName" id="FootBall_SchoolName">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="City" name="FootBall_City" id="FootBall_City">
                            </div>
                            <div class="cols-4">
                            	<input type="text" placeholder="State" name="FootBall_State" id="FootBall_State">
                            </div>
                        </div>
                        <div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" name="FootBall_Class" placeholder="Class of 20">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="FootBall_Offensive" placeholder="Offensive Position">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="FootBall_Defensive" placeholder="Defensive Position">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="FootBall_Special" placeholder="Special Team Position">
                            </div>
                        </div>
                    </div>
                    <div class="student-card clearfix">
                    	<h3>OFFENSIVE STATS</h3>
                    	<div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                                <h4>RUSHING PER GAME<br><span>(RB,TB,QB Stats)</span></h4>
                                <div class="frm">
                                    <input type="text" name="FootBall_Rushing" placeholder="RUSHING YDS/GAME">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Rush_ATT" placeholder="# OF ATT/GAME">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Rush_YDS" placeholder="YDS/ATT">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Rush_TD" placeholder="TD/GAME">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Rush_Longest" placeholder="LONGEST RUN">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Rush_Season" placeholder="SEASON RUSH YARDS">
                                </div>
                            </div>
                        </div>
						
                        <div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                                <h4>PASSING PER GAME<br> <span>(QB Stats)</span></h4>
                                <div class="frm">
                                    <input type="text" name="FootBall_Pass_Attems" placeholder="ATTEMPTS/GAME">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Pass_Game" placeholder="# OF COMP/GAME">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Pass_Comp" placeholder="COMP %">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Pass_YDS" placeholder="YDS/GAME">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Pass_TD" placeholder="TD/GAME">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Pass_Season" placeholder="SEASON PASS YARDS">
                                </div>
                            </div>
                        </div>
                        
                        <div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                                <h4>RECEIVING PER GAME<br> <span>(WR,RB,TB Stats)</span> </h4>
                                <div class="frm">
                                    <input type="text" name="FootBall_Receive" placeholder="RECEIVING YDS/GAME">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Rece_REC" placeholder="# OF REC/GAME">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Rece_YDS" placeholder="YDS/REC">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Rece_TD" placeholder="TD/GAME">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Rece_Longest" placeholder="LONGEST RECEPTION">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Rece_Season" placeholder="SEASON REC YARDS">
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
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  
	                            </span>
                            </div>
                            <div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="FootBall_ProImage2" id="Bas_LeftImageName2">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  
	                            </span>
                            </div>
                            <div class="reg-frm pitching-stats">
                             <h3>SPECIAL TEAM KICKING STATS</h3>
                             <h4>FG KICKING</h4>
                                
                                <div class="frm">
                                    <input type="text" name="FootBall_FG_Made"  placeholder="FG MADE/GAME">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_FG_ATT"  placeholder="FG ATT/GAME">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_FG" placeholder="FG %">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_FG_Longest" placeholder="LONGEST FG">
                                </div>
                              <h4>PUNTING/KICKING</h4>  
                              <div class="frm">
                                    <input type="text" name="FootBall_Punt_Kick" placeholder="KICK ATT/GAME">
                              </div>
                              <div class="frm">
                                    <input type="text" name="FootBall_Punt_YDS" placeholder="KICK YDS/GAME">
                               </div>
                               <div class="frm">
                                    <input type="text" name="FootBall_Punt_Avg" placeholder="AVG KICK">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Punt_Longest" placeholder="LONGEST KICK">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Punt_Inside" placeholder="KICK INSIDE 20">
                                </div>
                                
                                
                             </div>  
                            
                        </div>
						
                        <div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                            	<h3>DEFENSIVE STATS</h3>
                             	<div class="frm">
                                    <input type="text" name="FootBall_Solo" placeholder="Solo Tackles/Game">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Assisted"   placeholder="Assisted tackles/Game">
                                </div>
                                
                                <div class="frm">
                                    <input type="text" name="FootBall_Tackles" placeholder="Tackles/game">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Sacks" placeholder="Sacks">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Interceptions" placeholder="Interceptions">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Pass" placeholder="Pass Deflections">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Fumble" placeholder="Fumble Recoveries">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Tackles_Loss" placeholder="Tackle for Loss">
                                </div>
                                
                                <h3>BIOMETRIC STATISTICS</h3>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="FootBall_Height" placeholder="feet" >
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="FootBall_HeightInche" placeholder="inches">
                                    </div>
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Weight" placeholder="Weight">
                                </div>
                                <div class="frm clearfix">
                                    <div class="label fl">Broad jump</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="FootBall_BroadJump" placeholder="feet">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="FootBall_BroadJumpInche" placeholder="inches">
                                    </div>
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Vertical" placeholder="Vertical">
                                </div>
                                <div class="frm">
                                    <input type="text" name="FootBall_Yard" placeholder="40 yard dash">
                                </div>
                                 <div class="frm">
                                    <input type="text" name="FootBall_YardShuttle" placeholder="20 yard shuttle">
                                </div>
                                 <div class="frm">
                                    <input type="text" name="FootBall_Cone" placeholder="3 Cone drill">
                                </div>
                                 <div class="frm">
                                    <input type="text" name="FootBall_Bench" placeholder="Bench (225lbs)">
                                </div>
                                
                                <div class="image-upload">
                                <span class="uploadimg"  id="imagePreview3">
	                                <input type="file" name="FootBall_ProImage3" id="Bas_LeftImageName3">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image3">  
	                            </span>
                            </div>

                            </div>
                            
                        </div>
                        
                        <div class="cols-3">
                        	<div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview4">
	                                <input type="file" name="FootBall_ProImage4" id="Bas_LeftImageName4">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image4">  
	                            </span>
                            </div>
                        	
                            <div class="image-upload">
                                 <span class="uploadimg"  id="imagePreview5">
	                                <input type="file" name="FootBall_ProImage5" id="Bas_LeftImageName5">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image5">  
	                            </span>
                            </div>
                            
                             <div class="reg-frm pitching-stats">
                             		<h3>SPECIAL TEAM RETURN STATS</h3>
                                    <h4>KICKOFF RETURN</h4>
                                     <div class="frm">
                                    	<input type="text" name="FootBall_Kick_RET" placeholder="RET YDS/GAME">
                                	 </div>
                                     <div class="frm">
                                    	<input type="text" name="FootBall_Kick_ATT" placeholder="RET ATT/GAME">
                                	 </div>
                                     <div class="frm">
                                    	<input type="text" name="FootBall_Kick_YDS" placeholder="YDS/RET">
                                	 </div>
                                     <div class="frm">
                                    	<input type="text" name="FootBall_Kick_Longest" placeholder="LONGEST RET">
                                	 </div>
                                     <h4>PUNT RETURN</h4>
                                     <div class="frm">
                                    	<input type="text" name="FootBall_Punt_Res_RET" placeholder="RET YDS/GAME">
                                	 </div>
                                     <div class="frm">
                                    	<input type="text" name="FootBall_Punt_Res_ATT" placeholder="RET ATT/GAME">
                                	 </div>
                                     <div class="frm">
                                    	<input type="text" name="FootBall_Punt_Res_YDS" placeholder="YDS/RET">
                                	 </div>
                                     <div class="frm">
                                    	<input type="text" name="FootBall_Punt_Res_Longest" placeholder="LONGEST RET">
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
