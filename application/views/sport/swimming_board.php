    <section class="content">
     <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="student-athlete">
                	<div class="reg-title"><h2>Swimming &amp; Diving Board </h2></div>
                      <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>sport/insert_swimming" onsubmit="return getStudent_data();">
                    <div class="reg-frm">
                    	<div class="frm clearfix">
                    		<div class="cols-4">
                            	<input type="text" name="Swim_PlayerName" id="Swim_PlayerName" placeholder="Player Name">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Swim_SchoolName" id="Swim_SchoolName" placeholder="High School Name">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Swim_City" id="Swim_City" placeholder="City">
                            </div>
                            <div class="cols-4">
                            	<input type="text" name="Swim_State" id="Swim_State" placeholder="State">
                            </div>
                        </div>
                        
                    </div>
                    <div class="student-card clearfix">
                    	<div class="cols-3">
                        	<div class="image-upload top-upload">
                                <span class="uploadimg"  id="imagePreview1">
	                                <input type="file" name="Swim_ProImage" id="Bas_LeftImageName1">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1">  
	                            </span>
                            </div>
                            
                        	
                        </div>
						
                        <div class="cols-3">
                        	<div class="reg-frm pitching-stats">
                             	
                                <h4>BIOMETRICS</h4>
                                <div class="frm clearfix">
                                    <div class="label fl">Height</div>
                                    <div class="sub-hight text-b fl">
                                           <input type="text" name="Swim_Height" placeholder="feet">
                                    </div>
                                    <div class="sub-hight text-b fr">
                                           <input type="text" name="Swim_HeightInche" placeholder="inches">
                                    </div>
                                </div>
                                <div class="frm">
                                    <input type="text" name="Swim_Weight" placeholder="Weight">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Swim_YearRound" placeholder="Year Round Swimmer">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Swim_YearSwim" placeholder="Total Years Swimming">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Swim_Competitive" placeholder="Competitive Seasons">
                                </div>
                                <div class="frm">
                                    <input type="text" name="Swim_MainStroke" placeholder="Main Stroke">
                                </div>
                                
                                
                                

                            </div>
                            
                        </div>
                        
                        <div class="cols-3">
                        	<div class="image-upload top-upload">
                               <span class="uploadimg"  id="imagePreview2">
	                                <input type="file" name="Swim_ProImage2" id="Bas_LeftImageName2">
                               		<img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image2">  
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
                                                <input type="text" name="Swim_Event_One" placeholder="Event">
                                             </div>
                                        </div>  
                                        <div class="cols-6">
                                             <div class="frm">
                                                <input type="text" name="Swim_Course_One" placeholder="Course">
                                             </div>
                                        </div>
                                     </div>    
                                 </div>
                                 
                                 <div class="cols-6">
                                  	<div class="frm clearfix">
                                        <div class="label fl">Best Time</div>
                                        <div class="sub-hight text-b fl">
                                               <input type="text" name="Swim_BestMin_One" placeholder="minutes">
                                        </div>
                                        <div class="sub-hight text-b fr">
                                               <input type="text" name="Swim_BestSec_One" placeholder="seconds">
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            <div class="reg-frm clearfix">
                            	 <div class="cols-6">
                                 	<div class="new-swing">
                                        <div class="cols-6">
                                             <div class="frm">
                                                <input type="text" name="Swim_Event_Two" placeholder="Event">
                                             </div>
                                        </div>  
                                        <div class="cols-6">
                                             <div class="frm">
                                                <input type="text" name="Swim_Course_Two" placeholder="Course">
                                             </div>
                                        </div>
                                     </div>    
                                 </div>
                                 
                                 <div class="cols-6">
                                  	<div class="frm clearfix">
                                        <div class="label fl">Best Time</div>
                                        <div class="sub-hight text-b fl">
                                               <input type="text" name="Swim_BestMin_Two" placeholder="minutes">
                                        </div>
                                        <div class="sub-hight text-b fr">
                                               <input type="text" name="Swim_BestSec_Two" placeholder="seconds">
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            <div class="reg-frm clearfix">
                            	 <div class="cols-6">
                                 	<div class="new-swing">
                                        <div class="cols-6">
                                             <div class="frm">
                                                <input type="text" name="Swim_Event_Three" placeholder="Event">
                                             </div>
                                        </div>  
                                        <div class="cols-6">
                                             <div class="frm">
                                                <input type="text" name="Swim_Course_Three" placeholder="Course">
                                             </div>
                                        </div>
                                     </div>    
                                 </div>
                                 
                                 <div class="cols-6">
                                  	<div class="frm clearfix">
                                        <div class="label fl">Best Time</div>
                                        <div class="sub-hight text-b fl">
                                               <input type="text" name="Swim_BestMin_Three" placeholder="minutes">
                                        </div>
                                        <div class="sub-hight text-b fr">
                                               <input type="text" name="Swim_BestSec_Three" placeholder="seconds">
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            <div class="reg-frm clearfix">
                            	 <div class="cols-6">
                                 	<div class="new-swing">
                                        <div class="cols-6">
                                             <div class="frm">
                                                <input type="text" name="Swim_Event_Four" placeholder="Event">
                                             </div>
                                        </div>  
                                        <div class="cols-6">
                                             <div class="frm">
                                                <input type="text" name="Swim_Course_Four" placeholder="Course">
                                             </div>
                                        </div>
                                     </div>    
                                 </div>
                                 
                                 <div class="cols-6">
                                  	<div class="frm clearfix">
                                        <div class="label fl">Best Time</div>
                                        <div class="sub-hight text-b fl">
                                               <input type="text" name="Swim_BestMin_Four" placeholder="minutes">
                                        </div>
                                        <div class="sub-hight text-b fr">
                                               <input type="text" name="Swim_BestSec_Four" placeholder="seconds">
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
                                                <input type="text" name="Swim_Div_Event_One" placeholder="Event">
                                             </div>
                                        </div>  
                                        
                                     </div>    
                                 </div>
                                 
                                 <div class="rg-des">
                                 	<div class="new-swing">
                                        <div class="cols-12">
                                             <div class="frm">
                                                <input type="text" name="Swim_Div_Desc_One" placeholder="Description">
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
                                                <input type="text" name="Swim_Div_Avg_One" placeholder="Avg score">
                                             </div>
                                        </div>  
                                        <div class="cols-6">
                                             <div class="frm">
                                                <input type="text" name="Swim_Div_Best_One" placeholder="Best score">
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
                                                <input type="text" name="Swim_Div_Event_Two" placeholder="Event">
                                             </div>
                                        </div>  
                                        
                                     </div>    
                                 </div>
                                 
                                 <div class="rg-des">
                                 	<div class="new-swing">
                                        <div class="cols-12">
                                             <div class="frm">
                                                <input type="text" name="Swim_Div_Desc_Two" placeholder="Description">
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
                                                <input type="text" name="Swim_Div_Avg_Two" placeholder="Avg score">
                                             </div>
                                        </div>  
                                        <div class="cols-6">
                                             <div class="frm">
                                                <input type="text" name="Swim_Div_Best_Two" placeholder="Best score">
                                             </div>
                                        </div>  
                                        
                                     </div>    
                                 </div>
                                 
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
