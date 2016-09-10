<div class="dashboard-coach-ads">
		<div class="wrapper">
        	<div class="my_Account">
            	
                <div class="createNewAd">
                	<a href="#myrecruitboard-ads"  class="popup-with-zoom-anim">Create New MyRecruitBoard Ad</a>
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
            	<div class="postedAds">
                    <div class="acc-title clearfix">
                        <h2 class="fr">Posted Ads</h2>
                    </div>
                    <div class="athlete-view hp-add">
                        
                        <?php if(empty($PostAds)){ ?> <div class="createNewAd"><h2>No Ads<h2></div> <?php }else { 
                        for($i=0;$i<count($PostAds);$i++) { ?>	
                            <?php if($i%2==0){?> <div class="athleteRow clearfix"> <?php  }?> 
                            <div class="athleteBox" id="athele_<?php echo $PostAds[$i]['PostID']; ?>">
                                <div class="athleteTopBox clearfix">
                                    <ul class="athleteTopBoxL fl">
                                        <li class="userName"><?php echo $PostAds[$i]['Po_Username']; ?></li>
                                        <li class="schoolName"><?php echo $PostAds[$i]['Po_SchoolName']; ?></li>
                                    </ul>
                                    <div class="Exp-date fr">Expires on <?php echo date('d M',strtotime($PostAds[$i]['Po_ExpireDate'])); ?></div>
                                </div>
                                <div class="athleteMainBox clearfix">
                                  <div class="athleteMainBoxL">
                                  <?php if($PostAds[$i]['Po_ImageName']!="") { ?>
                                      <img src="<?php echo base_url().'register_images/coach_post_ad/small/'.$PostAds[$i]['Po_ImageName']; ?>" alt="">
                                   <?php } else { ?>
                                    <img src="<?php echo base_url() ?>images/no_image.jpg" alt="">
                                   <?php } ?> 
                                    
                                  </div>
                                  <div class="athleteMainBoxR">
                                        <div class="athleteMainListBox clearfix">
                                        	<div class="clearfix">
                                            <ul class="athleteMainList fl">
                                                <li class="clearfix">
                                                    <div class="athletelabel fl">
                                                        Sport
                                                    </div>
                                                    <div class="athleteValue">
                                                         <?php if($PostAds[$i]['Po_SportName']!="0" &&  $PostAds[$i]['Po_SportName']!=NULL){ ?>
													   <?php $getdata=get_row_data('coll_cotch_spo','Coll_SpoID',$PostAds[$i]['Po_SportName']); ?>
													   	<?php echo $getdata['Coll_SpoName']; ?>
                                                                            
                                                         <?php } ?>
                                                    </div>
                                                </li>
                                                <li class="clearfix">
                                                    <div class="athletelabel fl">
                                                        Position
                                                    </div>
                                                    <div class="athleteValue">
                                                         <?php echo substr($PostAds[$i]['Po_Position'],0,15); ?>
														
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="athleteMainList fr">
                                                <li class="clearfix">
                                                    <div class="athletelabel fl">
                                                        Height
                                                    </div>
                                                    <div class="athleteValue">
                                                       <?php $height_info=get_row_data('coll_cotch_min_height','Coll_Min_HeightID',$PostAds[$i]['Po_HeightID']); ?>
                                  <?php $height_infos=get_row_data('coll_cotch_min_heightinche','Coll_Min_HeightIncheID',$PostAds[$i]['Po_IncheID']); ?>
                                <?php echo $height_info['Coll_Min_HeightName']." ".$height_infos['Coll_Min_HeightIncheName'] ; ?>
                                                    </div>
                                                    
                                                </li>
                                                <li class="clearfix">
                                                    <div class="athletelabel fl">
                                                        GPA
                                                    </div>
                                                    <div class="athleteValue">
                                                      <?php $gpa_info=get_row_data('coll_cotch_min_gpa','Coll_Min_GpaID',$PostAds[$i]['Po_GpaID']); ?>
                                                    <?php echo $gpa_info['Coll_Min_GpaName']; ?>
                                                  
                                                    </div>
                                                    
                                                </li>
                                                <li class="clearfix">
                                                    <div class="athletelabel fl">
                                                        Weight
                                                    </div>
                                                  
                                                    <div class="athleteValue">
                                                        <?php $Gender_details=get_row_data('coll_cotch_max_height','Coll_Max_HeightID',$PostAds[$i]['Po_WeightID']); ?>
                                                         <?php echo $Gender_details['Coll_Max_HeightName']; ?>
                                                    </div>
                                                    
                                                </li>
                                            </ul>
                                            </div>
                                            
                                            <div class="athleteSubList clearfix">
                                                    <div class="athletelabel fl">
                                                        Addtional Info
                                                    </div>
                                                    <div class="athleteValue">
                                                       <?php echo $PostAds[$i]['Po_Message']; ?>
                                                    </div>
                                                
                                              
                                            </div>
                                        </div>
                                        <div class="athleteBtn-group clearfix">
                                            <div class="btn-profile fl">
                                                  <a href="javascript:void(0);" onclick="Delete_Post(<?php echo $PostAds[$i]['PostID']; ?>)">Delete</a>
                                            </div>
                                        </div>
                                  </div>
                                </div>
                            </div>
                             <?php if($i%2!=0){?> </div><?php  }?> 
                       
                        
                       <?php } } ?> 
                        </div>
                    </div>
                </div>
                <div class="expiredAds">
                    <div class="acc-title clearfix">
                        <h2 class="fr">Expired Ads</h2>
                    </div>
                    <div class="athlete-view hp-add">
                        <?php if(empty($ExpireAds)){ ?> <div class="createNewAd"><h2>No Ads<h2></div> <?php }else { 
                        for($i=0;$i<count($ExpireAds);$i++) { ?>	
                       	<?php if($i%2==0){?> <div class="athleteRow clearfix"> <?php  }?> 
                            
                            <div class="athleteBox" id="athele_<?php echo $ExpireAds[$i]['PostID']; ?>">
                                <div class="athleteTopBox clearfix">
                                    <ul class="athleteTopBoxL fl">
                                        <li class="userName"><?php echo $ExpireAds[$i]['Po_Username']; ?></li>
                                        <li class="schoolName"><?php echo $ExpireAds[$i]['Po_SchoolName']; ?></li>
                                    </ul>
                                    <div class="Exp-date fr">Expires on <?php echo date('d M',strtotime($ExpireAds[$i]['Po_ExpireDate'])); ?></div>
                                </div>
                                <div class="athleteMainBox clearfix">
                                  <div class="athleteMainBoxL">
                                  <?php if($ExpireAds[$i]['Po_ImageName']!="") { ?>
                                      <img src="<?php echo base_url().'register_images/coach_post_ad/small/'.$ExpireAds[$i]['Po_ImageName']; ?>" alt="">
                                   <?php } else { ?>
                                    <img src="<?php echo base_url() ?>images/no_image.jpg" alt="">
                                   <?php } ?> 
                                    
                                  </div>
                                  <div class="athleteMainBoxR">
                                        <div class="athleteMainListBox clearfix">
                                            <div class="clearfix">
                                            <ul class="athleteMainList fl">
                                                <li class="clearfix">
                                                    <div class="athletelabel fl">
                                                        Sports
                                                    </div>
                                                    <div class="athleteValue">
                                                    
                                                     <?php $getdata=get_row_data('coll_cotch_spo','Coll_SpoID',$ExpireAds[$i]['Po_SportName']); ?>
													   	<?php echo $getdata['Coll_SpoName']; ?>
                                                    </div>
                                                </li>
                                                <li class="clearfix">
                                                    <div class="athletelabel fl">
                                                        Position
                                                    </div>
                                                    <div class="athleteValue">
                                                         <?php echo substr($ExpireAds[$i]['Po_Position'],0,15); ?>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="athleteMainList fr">
                                                <li class="clearfix">
                                                    <div class="athletelabel fl">
                                                        Height
                                                    </div>
                                                    <div class="athleteValue">
                                                       <?php $height_info=get_row_data('coll_cotch_min_height','Coll_Min_HeightID',$ExpireAds[$i]['Po_HeightID']); ?>
                                  <?php $height_infos=get_row_data('coll_cotch_min_heightinche','Coll_Min_HeightIncheID',$ExpireAds[$i]['Po_IncheID']); ?>
                                <?php echo $height_info['Coll_Min_HeightName']." ".$height_infos['Coll_Min_HeightIncheName'] ; ?>
                                                    </div>
                                                    
                                                </li>
                                                <li class="clearfix">
                                                    <div class="athletelabel fl">
                                                        GPA
                                                    </div>
                                                    <div class="athleteValue">
                                                      <?php $gpa_info=get_row_data('coll_cotch_min_gpa','Coll_Min_GpaID',$ExpireAds[$i]['Po_GpaID']); ?>
                                                    <?php echo $gpa_info['Coll_Min_GpaName']; ?>
                                                  
                                                    </div>
                                                    
                                                </li>
                                                <li class="clearfix">
                                                    <div class="athletelabel fl">
                                                        Weight
                                                    </div>
                                                  
                                                    <div class="athleteValue">
                                                        <?php $Gender_details=get_row_data('coll_cotch_max_height','Coll_Max_HeightID',$ExpireAds[$i]['Po_WeightID']); ?>
                                                         <?php echo $Gender_details['Coll_Max_HeightName']; ?>
                                                    </div>
                                                    
                                                </li>
                                            </ul>
                                            </div>
                                            <div class="athleteSubList clearfix">
                                                    <div class="athletelabel fl">
                                                        Addtional Info
                                                    </div>
                                                    <div class="athleteValue">
                                                       <?php echo $PostAds[$i]['Po_Message']; ?>
                                                    </div>
                                                
                                              
                                            </div>
                                            
                                        </div>
                                        <div class="athleteBtn-group clearfix">
                                            <div class="btn-profile fl">
                                                <a href="javascript:void(0);" onclick="Delete_Post(<?php echo $ExpireAds[$i]['PostID']; ?>)">Delete</a>
                                            </div>
                                        </div>
                                  </div>
                                </div>
                            </div>
                            
                       	<?php if($i%2!=0){?> </div><?php  }?> 
                       <?php } } ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
  <div class="all-popup">    
    <div id="myrecruitboard-ads" class="zoom-anim-dialog mfp-hide card-popup">
    	
    <div class="card-headin card-show clearfix">        	
            	 <div class="main-head">
            	<h3>Post Ads</h3>
                
            </div>
                
       <form name="stu_step1" method="post" action="<?php echo base_url('myrecruitads/add_coach_post'); ?>" onsubmit="return check_stu_validation();" class="form-horizontal form-bordered" enctype="multipart/form-data">
                <div class="forums-details">
                <div class="da-update">
                	<div class="frm clearfix">
                    	<div class="inner-frm fl">
                        <span>Your Name</span>
                            <input type="text" placeholder="User Name" name="Po_Username" id="Po_Username" value="<?php echo $UserData['FirstName']." ".$UserData['LastName']; ?>" readonly="readonly" />
                         </div>
                        <div class="inner-frm fr">
                        <span>School</span>
                        	<input type="text" placeholder="School Name" name="Po_SchoolName" id="Po_SchoolName" value="<?php echo $UserInfo['Coach_University']; ?>" readonly="readonly"/>
                        </div>
                    </div>
                    
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<span>Sport</span>
                            <select name="Po_SportName" id="Po_SportName">
                            	<option value="0">
                                	Select Sport
                                </option>
                                	<?php $sport_info=get_table_details('coll_cotch_spo','Coll_SpoID'); ?>
                                 <?php for($i=0;$i<count($sport_info);$i++){ ?>
                            	<option value="<?php echo $sport_info[$i]['Coll_SpoID']; ?>">
                                	<?php echo $sport_info[$i]['Coll_SpoName']; ?>
                                </option>
                                <?php } ?>
                            </select>
                         </div>
                        <div class="inner-frm fr">
                        	<span>Position</span>
                            <input type="text" placeholder="Position" name="Po_Position" id="Po_Position" />
                        </div>
                    </div>
                    
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                          <span>Height</span>
                          <div class="inner-frm fl">
                                         <?php $Gender_details=get_table_details('coll_cotch_min_height',
							'Coll_Min_HeightID'); ?>
                                <select name="Po_HeightID" id="Po_HeightID">
                                     <option value="0">
                                       Feet
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Coll_Min_HeightID']; ?>">
                                         	<?php echo $Gender['Coll_Min_HeightName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                    </div>
                          <div class="inner-frm fr">
                                   <?php $Gender_details=get_table_details('coll_cotch_min_heightinche',
							'Coll_Min_HeightIncheID'); ?>
                                <select name="Po_IncheID" id="Po_IncheID">
                                     <option value="0">
                                       Inches
                                    </option>
                                      <?php foreach($Gender_details as $Gender){ ?>
                                      	 <option value="<?php echo $Gender['Coll_Min_HeightIncheID']; ?>">
                                         	<?php echo $Gender['Coll_Min_HeightIncheName']; ?>
                                         </option>
                                      <?php } ?>
                                </select>
                                    </div>
                         </div>
                        <div class="inner-frm fr">
                        	<span>GPA</span>
                             <select name="Po_GpaID" id="Po_GpaID"> 
                                    <option value="0">GPA</option>
                                        <?php $Education_gpa_details=get_table_details('coll_cotch_min_gpa','Coll_Min_GpaID'); ?>
                            	 <?php for($i=0;$i<count($Education_gpa_details);$i++){ ?>
                            	<option value="<?php echo $Education_gpa_details[$i]['Coll_Min_GpaID']; ?>">
                                	<?php echo $Education_gpa_details[$i]['Coll_Min_GpaName']; ?>
                                </option>
                                <?php } ?>
                                </select>
                        </div>
                    </div>
                    
                     <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<span>Weight</span>
                            <select name="Po_WeightID" id="Po_WeightID">
                                	<option value="0">Select Weight</option>
                                	<?php $width_info=get_table_details('coll_cotch_max_height','Coll_Max_HeightID'); ?>
                                 <?php for($i=0;$i<count($width_info);$i++){ ?>
                            	<option value="<?php echo $width_info[$i]['Coll_Max_HeightID']; ?>">
                                	<?php echo $width_info[$i]['Coll_Max_HeightName']; ?>
                                </option>
                                <?php } ?>
                                </select>
                         </div>
                    </div>
                    
                   
                    <div class="frm clearfix">
                   
                       <div class="inner">
                   <span>Additional Player Details</span>
                                <textarea id="Po_Message" name="Po_Message" maxlength="255"  placeholder="List any other specifics you are looking for."></textarea>
                        </div>
                    </div>
                        
                    <div class="frm clearfix">
                        <div class="inner-frm fl">
                        	<div class="image-upload">
                                    <span class="uploadimg" id="imagePreview1">
                                        <input type="file" name="Po_ImageName" id="Po_ImageName" value="<?php echo $UserInfo['Coach_ProfileImage']; ?>">
                                    	<input type="hidden" name="Po_ImageList" id="Po_ImageList" value="<?php echo $UserInfo['Coach_ProfileImage']; ?>">	
										<?php if($UserInfo['Coach_ProfileImage']!=""){ ?>
                                         <img src="<?php echo base_url(); ?>register_images/colleage_coach/small/<?php echo $UserInfo['Coach_ProfileImage']; ?>" alt="" id="image1">
                                        <?php } else { ?>
                                        <img src="<?php echo base_url('images/up-img.png'); ?>" alt="" id="image1"> 
                                   		<?php } ?>
                                    </span>
                                </div>
                            	
                       		 </div>
                        </div>   
                   
                    
                </div>
                
                <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="submit" value="Post Ad" >
                         </div>
                        
                    </div>
                </div>
                </form> 
    
    </div>
    
  </div>    
  
  <script type="text/javascript">
$(document).ready(function() {
 $('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,
		
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});
});

$(function() {
    $("#Po_ImageName").on("change", function()
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

function check_stu_validation()
  {
	 var sucess = true;
		if($('#Po_Username').val()==''){
		$('#Po_Username').css('border','1px solid red');
		sucess = false;
		} else {
			$('#Po_Username').css('border','1px solid #a4a4a4');
		}
		
		if($('#Po_SchoolName').val()==''){
			$('#Po_SchoolName').css('border','1px solid red');
			sucess = false;
		} else {
			$('#Po_SchoolName').css('border','1px solid #a4a4a4');
		}
		
		if($('#Po_SportName').val()=='0'){
			$('#Po_SportName').css('border','1px solid red');
			sucess = false;
		} else {
			$('#Po_SportName').css('border','1px solid #a4a4a4');
		}
		
		
		if($('#Po_HeightID').val()==0){
			$('#Po_HeightID').css('border','1px solid red');
			sucess = false;
		} else {
			$('#Po_HeightID').css('border','1px solid #a4a4a4');
		}
		
		if($('#Po_IncheID').val()==0){
			$('#Po_IncheID').css('border','1px solid red');
			sucess = false;
		} else {
			$('#Po_IncheID').css('border','1px solid #a4a4a4');
		}
		
		if($('#Po_WeightID').val()==0){
			$('#Po_WeightID').css('border','1px solid red');
			sucess = false;
		} else {
			$('#Po_WeightID').css('border','1px solid #a4a4a4');
		}
		
		if($('#Po_GpaID').val()==0){
			$('#Po_GpaID').css('border','1px solid red');
			sucess = false;
		} else {
			$('#Po_GpaID').css('border','1px solid #a4a4a4');
		}
	if(sucess == false)
	 {
		return false;
	 }
	 else
	 {
	 $('#ProcessLoaderID').show();
		return true;
	 }	
return false;	
  } 

function Delete_Post(PostID)
{
	 if(confirm('Are you sure you want to delete this Ad?')){
		 $.ajax({
		 type: "POST",
		 url: "<?php echo base_url(); ?>myrecruitads/Delete_Post/",
		 data: {PostID:PostID},
		 cache: false,
		 success: function(result){
				$("#athele_"+PostID).remove();
			}
		 });
	 }
}

</script>
