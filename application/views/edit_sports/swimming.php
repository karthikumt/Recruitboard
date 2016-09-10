	<div class="dashboard-profile">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="acc-title">
                	<h2>Edit Sport (Swimming)</h2>
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
                   
                    
                    <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>edit_sports/insert_swimming" onsubmit="return getStudent_data();">
                      <div class="forums-details">
                	<div class="da-update">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<span>Player Name</span>
                                <input type="text" name="Swim_PlayerName" id="Swim_PlayerName" placeholder="Player Name" value="<?php echo $Sport_info['Swim_PlayerName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>High School Name</span>
                            	<input type="text" name="Swim_SchoolName" id="Swim_SchoolName" placeholder="High School Name" value="<?php echo $Sport_info['Swim_SchoolName']; ?>">
                            </div>
                            <div class="cols-4">
                            <span>City</span>
                            	<input type="text" name="Swim_City" id="Swim_City" placeholder="City" value="<?php echo $Sport_info['Swim_City']; ?>">
                            </div>
                            <div class="cols-4">
                             <span>State</span>
                            	<input type="text" name="Swim_State" id="Swim_State" placeholder="State" value="<?php echo $Sport_info['Swim_State']; ?>">
                            </div>
                        </div>
                        
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload top-upload">
                                <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Swim_ProImage" id="Bas_LeftImageName1">
                               		<?php if($Sport_info['Swim_ProImage']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Swim_ProImage'].''); ?>" alt="" id="image1"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  <?php } ?>               
	                            </span>
                            </div>
                            
                        	
                        </div>
						
                        <div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             	
                                <h4>BIOMETRICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Swim_Height" placeholder="feet" value="<?php echo $Sport_info['Swim_Height']; ?>">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Swim_HeightInche" placeholder="inches" value="<?php echo $Sport_info['Swim_HeightInche']; ?>">
                                    </div>
                                </div>
                                <div class="frm">
                                    <span>Weight</span>
                                    <input type="text" name="Swim_Weight" placeholder="Weight" value="<?php echo $Sport_info['Swim_Weight']; ?>">
                                </div>
                                <div class="frm">
                                <span>Year Round Swimmer</span>
                                    <input type="text" name="Swim_YearRound" placeholder="Year Round Swimmer" value="<?php echo $Sport_info['Swim_YearRound']; ?>">
                                </div>
                                <div class="frm">
                                <span>Total Years Swimming</span>
                                    <input type="text" name="Swim_YearSwim" placeholder="Total Years Swimming" value="<?php echo $Sport_info['Swim_YearSwim']; ?>">
                                </div>
                                <div class="frm">
                                <span>Competitive Seasons</span>
                                    <input type="text" name="Swim_Competitive" placeholder="Competitive Seasons" value="<?php echo $Sport_info['Swim_Competitive']; ?>">
                                </div>
                                <div class="frm">
                                <span>Main Stroke</span>
                                    <input type="text" name="Swim_MainStroke" placeholder="Main Stroke" value="<?php echo $Sport_info['Swim_MainStroke']; ?>">
                                </div>
                                
                                
                                

                            </div>
                            
                        </div>
                        
                        <div class="cols-3">
                        	<div class="image-upload top-upload">
                               <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Swim_ProImage2" id="Bas_LeftImageName2">
                               		<?php if($Sport_info['Swim_ProImage2']!='') { ?>
                                        <img src="<?php echo base_url('register_images/sport/small/'.$Sport_info['Swim_ProImage2'].''); ?>" alt="" id="image2"> <?php }else{ ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  <?php } ?>             
	                            </span>
                            </div>
                        	
                            
                        </div>
                        <div class="cl"></div>
                    </div>
                    
                    <div class="student-card clearfix">
                    	
                    	<div class="cols-12">
                        	
                        	<div class="reg-frm clearfix">
                            	 <h4>SWIMMING</h4>
                            	 <div class="cols-6">
                                 	<div class="new-swing">
                                        <div class="cols-6">
                                             <div class="frm">
                                                <input type="text" name="Swim_Event_One" placeholder="Event" value="<?php echo $Sport_info['Swim_Event_One']; ?>">
                                             </div>
                                        </div>  
                                        <div class="cols-6">
                                             <div class="frm">
                                                <input type="text" name="Swim_Course_One" placeholder="Course" value="<?php echo $Sport_info['Swim_Course_One']; ?>">
                                             </div>
                                        </div>
                                     </div>    
                                 </div>
                                 
                                 <div class="cols-6">
                                  	<div class="frm clearfix">
                                        <div class="label fl">Best Time</div>
                                        <div class="sub-hight text-b fl">
                                               <input type="text" name="Swim_BestMin_One" placeholder="minutes" value="<?php echo $Sport_info['Swim_BestMin_One']; ?>">
                                        </div>
                                        <div class="sub-hight text-b fr">
                                               <input type="text" name="Swim_BestSec_One" placeholder="seconds" value="<?php echo $Sport_info['Swim_BestSec_One']; ?>">
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            <div class="reg-frm clearfix">
                            	 <div class="cols-6">
                                 	<div class="new-swing">
                                        <div class="cols-6">
                                             <div class="frm">
                                                <input type="text" name="Swim_Event_Two" placeholder="Event" value="<?php echo $Sport_info['Swim_Event_Two']; ?>">
                                             </div>
                                        </div>  
                                        <div class="cols-6">
                                             <div class="frm">
                                                <input type="text" name="Swim_Course_Two" placeholder="Course" value="<?php echo $Sport_info['Swim_Course_Two']; ?>">
                                             </div>
                                        </div>
                                     </div>    
                                 </div>
                                 
                                 <div class="cols-6">
                                  	<div class="frm clearfix">
                                        <div class="label fl">Best Time</div>
                                        <div class="sub-hight text-b fl">
                                               <input type="text" name="Swim_BestMin_Two" placeholder="minutes" value="<?php echo $Sport_info['Swim_BestMin_Two']; ?>">
                                        </div>
                                        <div class="sub-hight text-b fr">
                                               <input type="text" name="Swim_BestSec_Two" placeholder="seconds" value="<?php echo $Sport_info['Swim_BestSec_Two']; ?>">
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            <div class="reg-frm clearfix">
                            	 <div class="cols-6">
                                 	<div class="new-swing">
                                        <div class="cols-6">
                                             <div class="frm">
                                                <input type="text" name="Swim_Event_Three" placeholder="Event" value="<?php echo $Sport_info['Swim_Event_Three']; ?>">
                                             </div>
                                        </div>  
                                        <div class="cols-6">
                                             <div class="frm">
                                                <input type="text" name="Swim_Course_Three" placeholder="Course" value="<?php echo $Sport_info['Swim_Course_Three']; ?>">
                                             </div>
                                        </div>
                                     </div>    
                                 </div>
                                 
                                 <div class="cols-6">
                                  	<div class="frm clearfix">
                                        <div class="label fl">Best Time</div>
                                        <div class="sub-hight text-b fl">
                                               <input type="text" name="Swim_BestMin_Three" placeholder="minutes" value="<?php echo $Sport_info['Swim_BestMin_Three']; ?>">
                                        </div>
                                        <div class="sub-hight text-b fr">
                                               <input type="text" name="Swim_BestSec_Three" placeholder="seconds" value="<?php echo $Sport_info['Swim_BestSec_Three']; ?>">
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            <div class="reg-frm clearfix">
                            	 <div class="cols-6">
                                 	<div class="new-swing">
                                        <div class="cols-6">
                                             <div class="frm">
                                                <input type="text" name="Swim_Event_Four" placeholder="Event" value="<?php echo $Sport_info['Swim_Event_Four']; ?>">
                                             </div>
                                        </div>  
                                        <div class="cols-6">
                                             <div class="frm">
                                                <input type="text" name="Swim_Course_Four" placeholder="Course" value="<?php echo $Sport_info['Swim_Course_Four']; ?>">
                                             </div>
                                        </div>
                                     </div>    
                                 </div>
                                 
                                 <div class="cols-6">
                                  	<div class="frm clearfix">
                                        <div class="label fl">Best Time</div>
                                        <div class="sub-hight text-b fl">
                                               <input type="text" name="Swim_BestMin_Four" placeholder="minutes" value="<?php echo $Sport_info['Swim_BestMin_Four']; ?>">
                                        </div>
                                        <div class="sub-hight text-b fr">
                                               <input type="text" name="Swim_BestSec_Four" placeholder="seconds" value="<?php echo $Sport_info['Swim_BestSec_Four']; ?>">
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </div>
                            
                    </div>
                    
                    
                    <div class="student-card clearfix">
                    	
                    	<div class="cols-12">
                        	
                        	<div class="reg-frm clearfix">
                            	 <h4>DIVING</h4>
                            	 <div class="cols-3">
                                 	<div class="new-swing">
                                        <div class="cols-12">
                                             <div class="frm">
                                                <input type="text" name="Swim_Div_Event_One" placeholder="Event" value="<?php echo $Sport_info['Swim_Div_Event_One']; ?>">
                                             </div>
                                        </div>  
                                        
                                     </div>    
                                 </div>
                                 
                                 <div class="rg-des">
                                 	<div class="new-swing">
                                        <div class="cols-12">
                                             <div class="frm">
                                                <input type="text" name="Swim_Div_Desc_One" placeholder="Description" value="<?php echo $Sport_info['Swim_Div_Desc_One']; ?>">
                                             </div>
                                        </div>  
                                        
                                     </div>    
                                 </div>
                                 
                            </div>
                            
                            <div class="reg-frm clearfix">
                            	 <div class="cols-3">
                                 	<div class="new-swing">
                                        <div class="cols-12">
                                             <!--<div class="frm">
                                                <input type="text" placeholder="Event">
                                             </div>-->
                                        </div>  
                                        
                                     </div>    
                                 </div>
                                 
                                 <div class="rg-des">
                                 	<div class="new-swing">
                                        <div class="cols-6">
                                             <div class="frm">
                                                <input type="text" name="Swim_Div_Avg_One" placeholder="Avg score" value="<?php echo $Sport_info['Swim_Div_Avg_One']; ?>">
                                             </div>
                                        </div>  
                                        <div class="cols-6">
                                             <div class="frm">
                                                <input type="text" name="Swim_Div_Best_One" placeholder="Best score" value="<?php echo $Sport_info['Swim_Div_Best_One']; ?>">
                                             </div>
                                        </div>  
                                        
                                     </div>    
                                 </div>
                                 
                            </div>
                            
                            <div class="reg-frm clearfix">
                            	 
                            	 <div class="cols-3">
                                 	<div class="new-swing">
                                        <div class="cols-12">
                                             <div class="frm">
                                                <input type="text" name="Swim_Div_Event_Two" placeholder="Event" value="<?php echo $Sport_info['Swim_Div_Event_Two']; ?>">
                                             </div>
                                        </div>  
                                        
                                     </div>    
                                 </div>
                                 
                                 <div class="rg-des">
                                 	<div class="new-swing">
                                        <div class="cols-12">
                                             <div class="frm">
                                                <input type="text" name="Swim_Div_Desc_Two" placeholder="Description" value="<?php echo $Sport_info['Swim_Div_Desc_Two']; ?>">
                                             </div>
                                        </div>  
                                        
                                     </div>    
                                 </div>
                                 
                            </div>
                            
                            <div class="reg-frm clearfix">
                            	 <div class="cols-3">
                                 	<div class="new-swing">
                                        <div class="cols-12">
                                             <!--<div class="frm">
                                                <input type="text" placeholder="Event">
                                             </div>-->
                                        </div>  
                                        
                                     </div>    
                                 </div>
                                 
                                 <div class="rg-des">
                                 	<div class="new-swing">
                                        <div class="cols-6">
                                             <div class="frm">
                                                <input type="text" name="Swim_Div_Avg_Two" placeholder="Avg score" value="<?php echo $Sport_info['Swim_Div_Avg_Two']; ?>">
                                             </div>
                                        </div>  
                                        <div class="cols-6">
                                             <div class="frm">
                                                <input type="text" name="Swim_Div_Best_Two" placeholder="Best score" value="<?php echo $Sport_info['Swim_Div_Best_Two']; ?>">
                                             </div>
                                        </div>  
                                        
                                     </div>    
                                 </div>
                                 
                            </div>
                            
                        </div>
                            
                    </div>
                    
                      <div class="cl"></div>
                        <div class="btn">
                        	<input type="submit" value="Update" class="input-submit">
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

	if ($('#Swim_PlayerName').val()=='')
	{
		$('#Swim_PlayerName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Swim_PlayerName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Swim_SchoolName').val()=='')
	{
		$('#Swim_SchoolName').css('border','1px solid red');
		flag = false;
	} else {
		$('#Swim_SchoolName').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Swim_City').val()=='')
	{
		$('#Swim_City').css('border','1px solid red');
		flag = false;
	} else {
		$('#Swim_City').css('border','1px solid #a4a4a4');
	}
	
	if ($('#Swim_State').val()=='')
	{
		$('#Swim_State').css('border','1px solid red');
		flag = false;
	} else {
		$('#Swim_State').css('border','1px solid #a4a4a4');
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


