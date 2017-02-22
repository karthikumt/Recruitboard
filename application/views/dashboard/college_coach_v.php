<?php error_reporting(E_ALL); ?>
<script>
 $(document).ready(function(){
 
    $('.play-icon').embedly({
	  key:'56d83ecab0274fd9bef9bcdda8529da9',
      query: {
        autoplay:true
      },
      display: function(data, elem){
        //Adds the image to the a tag and then sets up the sizing.
        $('#athe').html('<img src="'+data.thumbnail_url+'"/>')
         
      }
    })
	
	
	
	});

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
   <?php if($UserInfo['Coach_CoverImage']!=""){?>
     <img src="<?php echo base_url(); ?>register_images/colleage_coach/cover_small/<?php echo $UserInfo['Coach_CoverImage']; ?>" alt="">
    <?php }else{  ?>
        <img src="<?php echo base_url(); ?>images/inner-banner1.jpg" alt="">
        <?php } ?>
        </div>
         <!--<div class="edit">
            <a onclick="$('#Coach_CoverImage').trigger('click');" href="javascript:void(0);"></a>
        </div>-->
    </div>
	
    <div class="dashboard-content">
		<div class="wrapper">
        	
            <div class="dashboard academic-dashboard">
            	<div class="first-section">
            		<div class="profile clearfix">
                	<div class="img fl">
                       <div class="HomeLoader" id="ProcessLoaderID"></div>
                       <div id="ProfileImage">
                            <?php if($UserInfo['Coach_ProfileImage']!=""){?>
                        <img src="<?php echo base_url(); ?>register_images/colleage_coach/small/<?php echo $UserInfo['Coach_ProfileImage']; ?>" alt="">
                         <?php }else{  ?>
        				<img src="<?php echo base_url(); ?>images/no_image.png" alt="">
       					<?php } ?>
                        </div>
                        <!--<div class="edit">
                        	<a href="javascript:void(0);" onclick="$('#Coach_ProfileImage').trigger('click');"></a>
                        </div>-->
                    </div>
                    <div class="profile-text clearfix">
                    	<div class="details fl">
                        	<h2><?php echo  $UserDetails['FirstName']." ".$UserDetails['LastName']; ?></h2>
                            <div class="my-recru fl">
								<span><?php echo $UserInfo['Coach_Title']; ?></span>
                                <ul>
                                   <?php $getdata=get_row_data('coll_cotch_sport','Coll_SportID',$UserInfo['Coach_SportID']); ?>
                                   
                                    <li><?php echo $getdata['Coll_SportName']; ?></li>
                                   
                               </ul>
                                <span><?php echo $UserInfo['Coach_University']; ?></span>   
                                <?php if($UserInfo['Coach_State']!=0 && $UserInfo['Coach_State']!=NULL) { 
									 $getdata=get_row_data('state_list','StateID',$UserInfo['Coach_State']);
								 ?>
                                <span><?php echo $UserInfo['Coach_City']." , ".$getdata['Name']; ?></span>
                                <?php } ?>  
                           </div>
							<div class="my-recru fl">
                            	 
								
                                
                               
                            </div>                          
                        </div>
                        <div class="msg-details fr">
                        	<div class="msg-btn">
                               <!-- <div class="send-msg">
                                    <a href="#">Send Message</a>
                                </div>
                                <div class="add-network">
                                    <a href="#">Add to Network</a>
                                </div>-->
                                 <!--<div class="share-profile">
                                    <a href="#">Share Profile</a>
                                </div>-->
                            </div>
                         <!--   <div class="view">
                            	<span class="view-count">245</span>
                                Views
                            </div>-->
                        </div>
                    </div>
                </div>
                </div>
                <div class="dashboard-box clearfix">
                 <?php //include('comment_data_coach.php'); ?>
                    
                     <?php include('comment_data_v.php'); ?>
                    <div class="dashboard-Rbox fr">
                       
                    <!--------------------My Videos-------------------------------------------->
                    	<div class="dashinner-rbox">
                            <div class="dash-title">
                                    <h3>My Video</h3>
                                    
                                </div>
                            <div class="video-box">
                             <div class="innervideo-box">
                            <?php 
							if($UserInfo['Coach_VideoURL']!="") {
           $url = $UserInfo['Coach_VideoURL'];
                         $GetUrl=videoType($url);
      
		if($GetUrl=='youtube')
        {?>
                  
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
                                   <?php } else if($GetUrl=='hudl') {?>
										
                                        <div id="athe"></div>
									   <a class="play-icon" id="myvideo" href="<?php echo $url; ?>">
										 
										   <img src="<?php echo base_url(); ?>images/play-icon.png" alt="">
										  
										  </a> 
                                          
										<?php }  else if($GetUrl=='unknown')  {?>
                                	
									<?php
                                    	if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) {
    	$Youtubeid = $match[1];
    
										}
									
										?>
                                    
                                    
                                     <div id="athe"></div>
                                   
                                   <a class="play-icon fancybox.iframe" id="myvideos" href="https://www.youtube.com/embed/<?php echo $Youtubeid; ?>?autoplay=1&wmode=opaque">
                                     
                                       <img src="<?php echo base_url(); ?>images/play-icon.png" alt="">
                                      
                                      </a> 
                                    <?php }  } else {?>
                                    <img alt="" src="<?php echo base_url(); ?>images/no_video.gif">
                              	      <?php } ?>
                              		</div>
                                    <!-- <form name="Video_url" id="Video_url" method="post" action="<?php echo base_url(); ?>dashboard/upload_video_coach" onsubmit="return video_url();" enctype="multipart/form-data" >
									<div class="frm clearfix">
                                     <div class="frm" id="Video_Up" style="display:none;">
                                        <input type="text" id="Coach_VideoURL" name="Coach_VideoURL" placeholder="https://www.myrecruitboard.com"/>
                                        <span class="warning">Note: Upload from YouTube, Vimeo, or Hudl </span>	
                                     </div>
                                    <div class="links fl">
                                        <ul class="clearfix">
                                            <li><a href="javascript:void(0);" class="Video" onclick="UploadVideo()">Change Video</a></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="post-btn fr">
                                        <a href="javascript:void(0);" onclick="$('#Video_url').submit();">Post</a>
                                    </div>
                                </div>
                                </form>-->
								    <script>	
                                    function UploadVideo()
                                    {
                                        $('#Video_Up').slideToggle();	
                                    }
                                    function video_url()
                                    {
            
            
                                        var sucess = true;
                                        var t = $('#Coach_VideoURL').val();
                                        var regYoutube = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
                                        var regVimeo = /^.*(vimeo\.com\/)((channels\/[A-z]+\/)|(groups\/[A-z]+\/videos\/))?([0-9]+)/;
                                        var regHundl = /^.*((hudl\.com\/)|(v\/)|(\/u\/\w\/)|(athlete\/)|(highlights\?))\??v?=?([^#\&\?]*).*/;
                                     if($('#Coach_VideoURL').val()=="")
                                     {
                                            $('#Coach_VideoURL').css('border','1px solid red');
                                            sucess = false; 
                                     }
                                     
                                     if($('#Coach_VideoURL').val()!="")
                                         {	
                                         if ( !(t.match(regYoutube) || t.match(regVimeo) || t.match(regHundl) ) )
                                            {
                                                $('#Coach_VideoURL').css('border','1px solid red');
                                                sucess = false;
                                            }
                                            
                                            
                                             else {
                                                $('#Coach_VideoURL').css('border','1px solid #a4a4a4');
                                            }
                                            
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
                            </script>
                            </div>
                        </div>
                   <!--------------------My Coaches-------------------------------->     
                        <div class="dashinner-rbox">
                            <div class="dash-title">
                                    <h3>Program Information</h3>
                                </div>
                            <div class="info clearfix">
                                <div class="prof-img fl">
                                	<a href="#" title="profile picture">
                                    	<img src="<?php echo base_url(); ?>register_images/colleage_coach/small/<?php echo $UserInfo['Coach_ProfileImage']; ?>" alt="">
                                    </a>
                                </div>
                                <div class="prof-info fr">
                                	<h3><?php echo $UserDetails['FirstName']." ".$UserDetails['LastName']; ?></h3>	
                                    <ul class="c-info clearfix">
                                   
                                    <?php if($UserInfo['Coach_State']!="") { 
									 $getdata=get_row_data('state_list','StateID',$UserInfo['Coach_State']);
								 ?>
                                <li class="location"><?php echo $UserInfo['Coach_City']." , ".$getdata['Name']; ?></li>
                                <?php } ?>
                                        <li class="bn"><?php echo $UserInfo['Coach_University']; ?></li>
                                     </ul>
                                </div>
                                <div class="cl"></div>
                                <div class="team-desc clearfix">
                                     <div class="desc-fulid clearfix">
                                            <div class="team-ldesc fl">
                                                <h5>Division</h5>
                                                 <?php $getdata=get_row_data('coll_cotch_division','Coll_DivisionID',$UserInfo['Coach_DivisionID']); ?>
                                                <p><?php echo $getdata['Coll_DivisionName']; ?></p>
                                            </div>
                                            <div class="team-rdesc fl">
                                                <h5>Years with Current Program</h5>
                                                <?php $getdata=get_row_data('coll_cotch_program','Coll_ProgramID',$UserInfo['Coach_CurrentProgramID']); ?>
                                                <p><?php echo @$getdata['Coll_ProgramName']; ?></p>
                                            </div>
                                     </div>
                                     <div class="desc-fulid clearfix">
                                            <div class="team-ldesc fl">
                                                <h5>Conference</h5>
                                                <p><?php echo $UserInfo['Coach_Conferance']; ?></p>
                                            </div>
                                            <div class="team-rdesc fl">
                                                <h5>Playoff Appearances</h5>
                                                 <?php $getdata=get_row_data('coll_cotch_playoff','Coll_PlayoffID',$UserInfo['Coach_PlayID']); ?>
                                                <p><?php echo @$getdata['Coll_PlayoffName']; ?></p>
                                            </div>
                                     </div>
                                     <div class="desc-fulid clearfix">
                                            <div class="team-ldesc fl">
                                                <h5>Season Record</h5>
                                                <p><?php echo $UserInfo['Coach_SeasonRecord']; ?></p>
                                            </div>
                                            <div class="team-rdesc fl">
                                                <h5>Team Website</h5>
                                                 <div class="post-btn fl">
                                                        <a href="<?php echo $UserInfo['Coach_TeamID']; ?>" target="_blank" >View Team Page</a>
                                                  </div>
                                              </div>
                                     </div>
                                     <div class="desc-fulid clearfix">
                                            <div class="team-ldesc fl">
                                                <h5>Career Record</h5>
                                                <p><?php echo $UserInfo['Coach_CareerRecord']; ?></p>
                                            </div>
                                            <div class="team-rdesc fl">
                                                <h5>Recruiting Questionnaire</h5>
                                                <div class="post-btn fl">
                                                       <a href="<?php echo $UserInfo['Coach_CoachAward']; ?>" target="_blank" >Complete Questionnaire</a>
                                                  </div>
                                            </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    <!--------------------Videos,Photos ---------------------------------------->      
                          <?php include('myphotovideo.php'); ?>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<div style="display:none">
<form method="post" action="<?php echo base_url(); ?>dashboard/coach_profile_image" id="MyUploadForm" enctype="multipart/form-data">
	<input type="hidden" name="action" value="upload_profile_pic" />
    <input type="file" name="Coach_ProfileImage" id="Coach_ProfileImage" />
</form>
<form method="post" action="<?php echo base_url(); ?>dashboard/coach_cover_image" id="MyCoverImage" enctype="multipart/form-data">

    <input type="file" name="Coach_CoverImage" id="Coach_CoverImage" />
</form>
</div>    
<script type="text/javascript">
 $(function(){
                
            $('#MyUploadForm').on('change',function(e){
                e.preventDefault();	
			   	var file = $('#Coach_ProfileImage')[0].files[0];
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
			var file = $('#Coach_CoverImage')[0].files[0];
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
 $('#myvideo').magnificPopup({
   items: {
	   src: '<?php echo $UserInfo['Coach_VideoURL']; ?>',
	   type: 'iframe'
	},
});


$("#myvideos").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        nextEffect  : 'none',
        prevEffect  : 'none',
        padding     : 0,
        margin      : [20, 60, 20, 60] // Increase left/right margin
    });


</script>
