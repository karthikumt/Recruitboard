
<script>
    (function($){
        $(document).ready(function(){
            $(".dash-scrollbar").mCustomScrollbar({
				setHeight: 115,	
			});
		});
    })(jQuery);
</script>
<script type="text/javascript">

	$(document).ready(function(){
		$('#tab1 li a').tabs();
		$('#tab2 li a').tabs();
	});

	
</script>

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
</script>   
 
 
   
   
   <div class="dashboard-banner">
       <div class="HomeLoader" id="CoverLoaderID"></div>
   	  <div id="cover_image">
	   <?php if(!empty($UserInfo['High_CoverImage'])){
       if(file_exists("./register_images/highschool_coach/cover_small/".$UserInfo['High_CoverImage']."")){?>
         <img src="<?php echo base_url(); ?>register_images/highschool_coach/cover_small/<?php echo $UserInfo['High_CoverImage']; ?>" alt="">
        <?php }else{  ?>
            <img src="<?php echo base_url(); ?>images/inner-banner.png" alt="">
            <?php } }else{  ?>
            <img src="<?php echo base_url(); ?>images/inner-banner.png" alt="">
            <?php } ?>
            </div>
          <div class="edit">
                <a onclick="$('#High_CoverImage').trigger('click');" href="javascript:void(0);"></a>
            </div>
    </div>
	<div class="dashboard-content">
		<div class="wrapper">
        	
            <div class="dashboard academic-dashboard">
            	<div class="first-section">
            		<div class="profile clearfix">
                	<div class="img fl">
                       <div class="HomeLoader" id="ProcessLoaderID"></div>
                       <div id="ProfileImage">
                        <img src="<?php echo base_url(); ?>register_images/highschool_coach/small/<?php echo $UserInfo['High_ProfilePic']; ?>" alt="">
                        </div>
                        <div class="edit">
                        	<a href="javascript:void(0);" onclick="$('#ProfilePic').trigger('click');"></a>
                        </div>
                    </div>
                    <div class="profile-text clearfix">
                    	<div class="details fl">
                        	<div class="details fl">
                        	<h2><?php echo  ucfirst($UserDetails['FirstName']." ".$UserDetails['LastName']);  ?></h2>
							<ul class="acad-tutor">
                            	<li><?php echo $UserInfo['High_Title']; ?></li>
                                 <?php $getdata=get_row_data('high_school_gender','High_GenderID',$UserInfo['High_GenderCoachID']); ?>
                                <li><?php echo $getdata['High_GenderName']; ?></li>
                            </ul>
                            <ul class="acad-tutor">
                             <?php $getdata=get_row_data('high_school_sport','High_SportID',$UserInfo['High_SportID']); ?>
                            	<li><?php echo $getdata['High_SportName']; ?></li>
                            </ul>

                            
                             
                        </div>
                            
							                          
                        </div>
                        <div class="msg-details fr">
                        	<div class="msg-btn">
                                <div class="send-msg">
                                    <a href="#">Send Message</a>
                                </div>
                                <div class="add-network">
                                    <a href="#">Add to Network</a>
                                </div>
                                 <div class="share-profile">
                                    <a href="#">Share Profile</a>
                                </div>
                            </div>
                            <div class="view">
                            	<span class="view-count">245</span>
                                Views
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="dashboard-box clearfix">
                	  <?php include('comment_data.php'); ?>
                    <div class="dashboard-Rbox fr">
                       
                    <!--------------------My Videos--------------------------------------------->
                    	<div class="dashinner-rbox">
                            <div class="dash-title">
                                    <h3>My Video</h3>
                                    
                                </div>
                            <div class="video-box">
                            <?php 
           $url = $UserInfo['HIgh_VideoUrl'];
                         $GetUrl=videoType($url);
        if($GetUrl=='youtube')
        { ?>
                     <img src="https://img.youtube.com/vi/<?php echo getyoutubevidoid2($url); ?>/0.jpg" />
                                    <a class="play-icon" id="myvideo" href="javascript:void(0);">
                                        <img src="<?php echo base_url(); ?>images/play-icon.png" alt=""/>
                                       </a>
                               <?php } else if($GetUrl=='vimeo') { 
         $str = substr(strrchr($url, '/'), 1);
         $vimeo = unserialize(file_get_contents("https://vimeo.com/api/v2/video/$str.php"));
         ?>
         <img src="<?php echo $vimeo[0]['thumbnail_large'];?>" />
                                   <a class="play-icon" id="myvideo" href="javascript:void(0);">
                                     <img src="<?php echo base_url(); ?>images/play-icon.png" alt="">
                                       </a>
                                   <?php } else {?> 
                                     <video width="480" height="360" controls>
                                          <source src="<?php echo $UserInfo['HIgh_VideoUrl']; ?>" type="video/mp4">
                                        
                                        </video>
                                    <?php } ?>
                               
                              
                            </div>
                        </div>
                   <!--------------------My Coaches-------------------------------->     
                        <div class="dashinner-rbox">
                            <div class="dash-title">
                                    <h3>Team Information</h3>
                                </div>
                            <div class="info clearfix">
                                <div class="prof-img fl">
                                	<a href="#" title="profile picture">
                                    	<img src="<?php echo base_url(); ?>register_images/highschool_coach/small/<?php echo $UserInfo['High_ProfilePic']; ?>" alt="">
                                    </a>
                                </div>
                                <div class="prof-info fr">
                                	<h3><?php echo $UserDetails['FirstName']." ".$UserDetails['LastName']; ?></h3>	
                                    <ul class="c-info clearfix">
                                     <?php $getdata=get_row_data('high_school_country','High_CountryID',$UserInfo['High_CountryID']); ?>
                                    	<li class="location"><?php echo $getdata['High_CountryName']; ?></li></ul>                            <ul class="c-info clearfix">
                                        <li class="bn"><?php echo $UserInfo['High_School']; ?></li>
                                       
                                    </ul>
                                </div>
                                <div class="cl"></div>
                                 <div class="team-desc clearfix">
                                     <div class="desc-fulid clearfix">
                                            <div class="team-Adesc fl">
                                                <h5>Team Record</h5>
                                                <p><?php echo $UserInfo['High_Team']; ?></p>
                                            </div>
                                            <div class="team-Adesc fl">
                                                <h5>Division</h5>
                                                <p><?php echo $UserInfo['High_Division']; ?></p>
                                            </div>
                                            <div class="team-Adesc fl">
                                                <h5>Conference</h5>
                                                <p><?php echo $UserInfo['High_Conference']; ?></p>
                                            </div>
                                      </div>
                                </div>
                                <div class="t-mission">
                                	<h5>Team Mission</h5>
                                    <p><?php echo $UserInfo['High_ProUnique']; ?></p>
                                </div>
                            </div>
                        </div>
                    <!--------------------Videos,Photos ----------------------------------------->      
                           <?php include('myphotovideo.php'); ?>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<div style="display:none">
<form method="post" action="<?php echo base_url(); ?>dashboard/high_profile_image" id="MyUploadForm" enctype="multipart/form-data">
	<input type="hidden" name="action" value="upload_profile_pic" />
    <input type="file" name="ProfilePic" id="ProfilePic" />
</form>

<form method="post" action="<?php echo base_url(); ?>dashboard/high_cover_image" id="MyCoverImage" enctype="multipart/form-data">

    <input type="file" name="High_CoverImage" id="High_CoverImage" />
</form>


</div>    
<script type="text/javascript">
 $(function(){
                
            $('#MyUploadForm').on('change',function(e){
                e.preventDefault();	
			   	var file = $('#ProfilePic')[0].files[0];
				var fileName = file.name;
				var fileExt = fileName.split('.').pop();
				var fileExt = fileExt.toLowerCase();
				$('#ProcessLoaderID').show();
				if(fileExt=='jpg' || fileExt=='jpeg' || fileExt=='png'){
			   					
                    $(this).ajaxSubmit({			
                        success: function(res){	
                            	$('#ProfileImage').html(res);
								$('#ProcessLoaderID').hide();
                         	}
                    });
					
				}else{ 
					alert("Invalid File Type");
				
				}
				
				
            });	
          });
		  
 $(function(){
          	$('#MyCoverImage').on('change',function(e){
             	e.preventDefault();	
			   	var file = $('#High_CoverImage')[0].files[0];
				var fileName = file.name;
				var fileExt = fileName.split('.').pop();
				var fileExt = fileExt.toLowerCase();
				if(fileExt=='jpg' || fileExt=='jpeg' || fileExt=='png'){
			  		$('#CoverLoaderID').show();
			 		$(this).ajaxSubmit({			
                        success: function(res){	
                            	$('#cover_image').html(res);
								$('#CoverLoaderID').hide();
                         	}
                    });
					
				}else{ 
					alert("Invalid File Type");
				
				}
				
				
            });	
          });				  
 		  

</script>
    
<script>
	
	function getLoadData()
	{
		var StartValue=$('#Start').val();
		$('#Load').text("Loading....")
		$.ajax({
			type:'post',
			url:'<?php echo base_url(); ?>dashboard/getLoadValue',
			data:{StartValue:StartValue},
			success:function(resp){
					myarr=resp.split('^^__^^');
					if(myarr[0].trim().length=='0')
					{
						$('#Start').val(2);
						$("#Load").removeAttr("onclick")
						$('#Load').text("No More Feed");
					}else
					{
						$('#Load').text("Load More");	
					}
					$('#LoadMore').append(myarr[0]);
					$('#Start').val(myarr[1]);
					
				}	
		});
	}
	
	
	function comment()
	{
		 var sucess = true;
		 if($('#Cat_ID').val()=='0')
		 {
			$('#Cat_ID').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Cat_ID').css('border','1px solid #a4a4a4');
			}
		
		 if($('#Comm_Title').val()=='')
		 {
			$('#Comm_Title').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Comm_Title').css('border','1px solid #a4a4a4');
			}	
		if(sucess == false)
		 {
			return false;
		 }
		 else
		 {	
			return true;
		 }	
	}
	function getView(view)
	{
		if(view==1)
		{
			$('#Link_details').slideDown();
			$('#Photo_details').slideUp();
			$('#Video_details').slideUp();
			$( ".link" ).addClass( "active" );
			$( ".Photo" ).removeClass( "active" );
			$( ".Video" ).removeClass( "active" );
		}
		if(view==2)
		{
			$('#Photo_details').slideDown();
			$('#Link_details').slideUp();
			$('#Video_details').slideUp();
			$( ".Photo" ).addClass( "active" );
			$( ".link" ).removeClass( "active" );
			$( ".Video" ).removeClass( "active" );	
		}
		if(view==3)
		{
			$('#Video_details').slideDown();
			$('#Photo_details').slideUp();
			$('#Link_details').slideUp();
			$( ".Video" ).addClass( "active" );
			$( ".link" ).removeClass( "active" );
			$( ".Photo" ).removeClass( "active" );	
		}
	}
	
	
var sucess = true;	
function check_stu_validation()
  {
	
	 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	 
	 
	 
	       if($('#CoachName').val()=='')
			{
			  $('#CoachName').css('border','1px solid red');
			  sucess = false;
			 } 
			 else {
			 $('#CoachName').css('border','1px solid #a4a4a4');
			}
	 
	       if($('#CoachEmail').val()=='')
			{
			  $('#CoachEmail').css('border','1px solid red');
			  sucess = false;
			 } 
			 else {
			 $('#CoachEmail').css('border','1px solid #a4a4a4');
				 }
		     if(!$('#CoachEmail').val().match(filter))
			  {
			   $('#CoachEmail').css('border','1px solid red');
			   $('#unnsuccessemail').show();
			   $('#Emailvalid').hide();
			   sucess = false;
			  }
			  else{
			   $('#CoachEmail').css('border','1px solid #a4a4a4');
			   
		       
			  }
					
				if(sucess == false)
				 {
					return false;
				 }
				 else
				 {
					return true;
				 }	
				 
		return false;	
		  
			
			
			
			
			
			
 }	 	

function check_email(UserEmail)
{
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(UserEmail.match(filter))
	{
		$.ajax({
			type:'post',
			url:'<?php echo base_url(); ?>dashboard/coach_check_email',
			data:{CoachEmail:UserEmail},
			success:function(resp){
				if(resp==1){
					$('#unnsuccessemail').hide();
					$('#Emailvalid').show();
					$('#CoachEmail').css('border','1px solid red');
					 sucess = false;
					
				} else {
					$('#unnsuccessemail').hide();
					$('#Emailvalid').hide();
					
					sucess = true;
				}
			}
		});
	}
}	
	
</script>	
<script>    
  $(document).ready(function(e) {
    $('#Start').val(2);
});

 $('#myvideo').magnificPopup({
   items: {
       src: '<?php echo $UserInfo['HIgh_VideoUrl']; ?>',
       type: 'iframe'
    },
});
</script>
