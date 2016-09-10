
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
	   <?php if(!empty($UserInfo['Coll_CoverImage'])){
       if(file_exists("./register_images/colleage_admission/cover_small/".$UserInfo['Coll_CoverImage']."")){?>
         <img src="<?php echo base_url(); ?>register_images/colleage_admission/cover_small/<?php echo $UserInfo['Coll_CoverImage']; ?>" alt="">
        <?php }else{  ?>
            <img src="<?php echo base_url(); ?>images/inner-banner.png" alt="">
            <?php } }else{  ?>
            <img src="<?php echo base_url(); ?>images/inner-banner.png" alt="">
            <?php } ?>
            </div>
          <div class="edit">
                <a onclick="$('#Coll_CoverImage').trigger('click');" href="javascript:void(0);"></a>
            </div>
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
                        <img src="<?php echo base_url(); ?>register_images/colleage_admission/small/<?php echo $UserInfo['Coll_ProfilePic']; ?>" alt="">
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
                            	<li>Director</li>
                                <li><?php echo $UserInfo['Coll_University']; ?></li>
                            </ul>
                            <ul class="acad-tutor">
                              <?php $getdata=get_row_data('coll_admi_country','Coll_admi_CountryID',$UserInfo['Coll_CountryID']); ?>
                                <li><?php echo $getdata['Coll_admi_CountryName']; ?></li>
                             </ul>
                             <div class="web-link">
                             	<a href="#"><?php echo $UserInfo['Coll_SchoolWeb']; ?></a>
                             </div>
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
                	<div class="dashboard-Lbox fl">
                    	<form name="comment_box" id="comment_box" method="post" action="<?php echo base_url(); ?>dashboard/comment" onsubmit="return comment();" enctype="multipart/form-data" >

                        <div class="dashinner-lbox">
                             
                            <div class="da-update">
                                <div class="dash-title">
                                    <h3>Daily Updates</h3>
                                </div>
                                <div class="frm clearfix">
                                    <div class="inner-frm fl">
                                        <select name="Cat_ID" id="Cat_ID" >
                                            <option value="0">---Select Category---</option>
                                        	<?php foreach($category as $cat_data) { ?>
                                            	<option value="<?php echo $cat_data['Cat_ID']; ?>">
                                                	<?php echo $cat_data['Cat_Name']; ?> 
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="inner-frm fr">
                                        <input type="text" placeholder="Title" name="Comm_Title" id="Comm_Title">
                                    </div>
                                </div>
                                <div class="frm">
                                    <textarea name="Comm_Desc" id="Comm_Desc" placeholder="Program Updates (Scouting Info, Visits, Team Info, Game Updates, Workouts, etc.)"></textarea>
                                </div>
                                <div class="frm clearfix">
                                    <div class="links fl">
                                        <ul class="clearfix">
                                            <li><a href="javascript:void(0);" class="link" onclick="getView(1)">link</a></li>
                                            <li><a href="javascript:void(0);" class="Photo" onclick="getView(2)">Photo</a></li>
                                            <li><a href="javascript:void(0);" class="Video" onclick="getView(3)">Video</a></li>
                                        </ul>
                                    </div>
                                    <div class="post-btn fr">
                                        <a href="javascript:void(0);" onclick="$('#comment_box').submit();">Post</a>
                                    </div>
                                </div>
                       		 </div>
                        </div>
                        <div class="frm clearfix" id="Link_details" style="display:none;">
                                     <div class="frm">
                                        <input type="text"  placeholder="http://www.myrecuirtboard.com" name="Comm_Link" />	
                               		 </div>	
                         </div>
                          <div class="frm clearfix" id="Video_details" style="display:none;">
                                     <div class="frm">
                                        <input type="text" placeholder="http://www.myrecuirtboard.com"  name="Comm_Video"/>	
                               		 </div>	
                         </div>
                          <div class="frm clearfix" id="Photo_details" style="display:none;">
                               <div class="fileupload">
                        	
                        	<div class="file-btn">Upload Your Profile Picture 
                    		<input type="file" name="Comm_Photo" id="Comm_Photo" class="filefild">
                            </div>
                             <script>
							$('input.filefild').on('change', function (event, files, label) {
								var file_name = this.value.replace(/\\/g, '/').replace(/.*\//, '')
								$('.filename').text(file_name);
							});
							</script>
                        <div class="filename"></div>
                        </div>
                               
                               
                           </div>
                         </form>
                         <input type="hidden" name="Start" id="Start" value="2" /> 
						 <?php
						  for($i=0;$i<count($post_info);$i++){?>
                     
                           <?php $getdata=get_all_data('Cat_ID',$post_info[$i]['Cat_ID'],$start=NULL);  ?>
                                	
                                 <?php  for($j=0;$j<count($getdata);$j++){ ?>
                            <div class="dashinner-lbox">
                                <div class="left-contbox clearfix">
                                    <div class="lbox-title">
                                  <?php $cat_name=get_row_data('category','Cat_ID',$getdata[$j]['Cat_ID']);?>
                                            <h4> <?php echo $cat_name['Cat_Name'] ?></h4>
                                        </div>
                                    
                               
                                    <div class="dash-scrollbar">
                                      <?php if($getdata[$j]['Comm_Photo']!=''){ ?> 
                                        <div class="left-img fl">
                                       
                                            <a href="#" title="Academics">
                                                <img src="<?php echo base_url(); ?>register_images/comment/small/<?php echo $getdata[$j]['Comm_Photo']; ?>" alt="">
                                            </a>
                                           
                                        </div>
                                        <?php } ?> 
                                        
                                          <?php if($getdata[$j]['Comm_Video']!=''){ ?> 
                                          
                                               <div class="left-img fl">
																					   <?php 
                                                    $url = $getdata[$j]['Comm_Video'];
                                                    $GetUrl=videoType($url);
                                                    if($GetUrl=='youtube')
                                                    { ?>
                                                    <img src="http://img.youtube.com/vi/<?php echo getyoutubevidoid2($url); ?>/0.jpg" />
                                                     <a class="play-icon" id="video_<?php echo $getdata[$j]['Comm_ID'];?>" href="javascript:void(0);">  
                                                      <img src="<?php echo base_url(); ?>images/play-icon2.png" alt=""/>            </a>
                                                      <script>    
                                                       $('#video_<?php echo $getdata[$j]['Comm_ID'];?>').magnificPopup({
                                                        items: {
                                                         src: '<?php echo $getdata[$j]['Comm_Video']; ?>',
                                                         type: 'iframe'
                                                      },
                                                     });
                                                     </script>
                                                      <?php } else if($GetUrl=='vimeo') { 
                                                     $str = substr(strrchr($url, '/'), 1);
                                                     $vimeo = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$str.php"));
                                                     ?>
                                                     <img src="<?php echo $vimeo[0]['thumbnail_medium'];?>" />
                                                     <a class="play-icon" id="video_<?php echo $getdata[$j]['Comm_ID'];?>" href="javascript:void(0);" >
                                                   
                                                      <img src="<?php echo base_url(); ?>images/play-icon2.png" alt="">
                                                        </a>
                                                                                               <script>    
                                                       $('#video_<?php echo $getdata[$j]['Comm_ID'];?>').magnificPopup({
                                                        items: {
                                                         src: '<?php echo $getdata[$j]['Comm_Video']; ?>',
                                                         type: 'iframe'
                                                      },
                                                     });
                                                     </script>
                                                       <?php } ?> 
             									</div>
                                        <?php } ?> 
                                        
                                       
                                     
                                        <div class="left-text">
                                         <?php if($getdata[$j]['Comm_Link']!=''){ ?>   <a href="<?php echo $getdata[$j]['Comm_Link']; ?>" target="_blank"> <h6><?php echo $getdata[$j]['Comm_Title']; ?></h6>  </a> <?php } else{ ?> 
                                         
                                        <h6><?php echo $getdata[$j]['Comm_Title']; ?></h6> <?php } ?>
                                        <p><?php echo $getdata[$j]['Comm_Desc']; ?></p>
                                        </div>
                                    </div>
                                   
                                </div>
                              
                                <div class="dashinner-ft clearfix">
                                    <div class="cal fl">
                                       <?php echo date('d M Y, H:i:s',strtotime($getdata[$j]['AddDate'])); ?>
                                    </div>
                                    <div class="dash-op fr">
                                        <ul class="clearfix">
                                            <li><a href="#" class="pump">Pump It Up</a></li>
                                            <li><a href="#" class="comment">Comment</a></li>
                                            <li><a href="#" class="share">Share</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                              <?php } }?>
                              
                              <div id="LoadMore"></div>
                              
                              
                              <div class="post-btn fr">
                                        <a onclick="getLoadData()" href="javascript:void(0);" id="Load">Load More</a>
                              </div>
                              
                        </div>
                    <div class="dashboard-Rbox fr">
                       
                    <!--------------------My Videos--------------------------------------------->
                    	<div class="dashinner-rbox">
                            <div class="dash-title">
                                    <h3>My Video</h3>
                                    
                                </div>
                            <div class="video-box">
                            <?php 
           $url = $UserInfo['Coll_VideoUrl'];
                         $GetUrl=videoType($url);
        if($GetUrl=='youtube')
        { ?>
                     <img src="http://img.youtube.com/vi/<?php echo getyoutubevidoid2($url); ?>/0.jpg" />
                                    <a class="play-icon" id="myvideo" href="javascript:void(0);">
                                        <img src="<?php echo base_url(); ?>images/play-icon.png" alt=""/>
                                       </a>
                               <?php } else if($GetUrl=='vimeo') { 
         $str = substr(strrchr($url, '/'), 1);
         $vimeo = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$str.php"));
         ?>
         <img src="<?php echo $vimeo[0]['thumbnail_large'];?>" />
                                   <a class="play-icon" id="myvideo" href="javascript:void(0);">
                                     <img src="<?php echo base_url(); ?>images/play-icon.png" alt="">
                                       </a>
                                   <?php } else {?> 
                                     <video width="480" height="360" controls>
                                          <source src="<?php echo $UserInfo['Coll_VideoUrl']; ?>" type="video/mp4">
                                        
                                        </video>
                                    <?php } ?>
                               
                              
                            </div>
                        </div>
                   <!--------------------My Coaches-------------------------------->     
                        <div class="dashinner-rbox">
                            <div class="dash-title">
                                    <h3>School Information</h3>
                                </div>
                            <div class="info clearfix">
                                <div class="prof-img fl">
                                	<a href="#" title="profile picture">
                                    	<img src="<?php echo base_url(); ?>register_images/colleage_admission/small/<?php echo $UserInfo['Coll_ProfilePic']; ?>" alt="">
                                    </a>
                                </div>
                                <div class="prof-info fr">
                                	<h3><?php echo $UserDetails['FirstName']." ".$UserDetails['LastName']; ?></h3>	
                                    <ul class="c-info clearfix">
                                     <?php $getdata=get_row_data('coll_admi_country','Coll_admi_CountryID',$UserInfo['Coll_CountryID']); ?>
                                    	<li class="location"><?php echo $getdata['Coll_admi_CountryName']; ?></li>
                                        <li class="bn"><?php echo $UserInfo['Coll_University']; ?></li>
                                        <li class="web"><a href="#"><?php echo $UserInfo['Coll_SchoolWeb']; ?></a></li>
                                    </ul>
                                </div>
                                <div class="cl"></div>
                                <div class="team-desc clearfix">
                                     <div class="desc-fulid clearfix">
                                            <div class="team-ldesc fl">
                                                <h5>Tution</h5>
                                                <p><?php echo $UserInfo['Coll_Tution']; ?></p>
                                            </div>
                                            <div class="team-rdesc fl">
                                                <h5>Enrollment</h5>
                                                <p><?php echo $UserInfo['Coll_Enroll']; ?></p>
                                            </div>
                                     </div>
                                     <div class="desc-fulid clearfix">
                                            <div class="team-ldesc fl">
                                                <h5>Acceptance Rate </h5>
                                                  <?php $getdata=get_row_data('coll_admi_acceptance','Coll_admi_AcceptanceID',$UserInfo['Coll_AcceptRateID']); ?>
                                                <p><?php echo $getdata['Coll_admi_AcceptanceName']; ?></p>
                                            </div>
                                            <div class="team-rdesc fl">
                                                <h5>Graduation Rate</h5>
                                                  <?php $getdata=get_row_data('coll_admi_graduaction','Coll_admi_GraduactionID',$UserInfo['Coll_GraduationRateID']); ?>
                                                <p><?php echo $getdata['Coll_admi_GraduactionName']; ?></p>
                                            </div>
                                     </div>
                                     <div class="desc-fulid clearfix">
                                            <div class="team-ldesc fl">
                                                <h5>Average Test Score</h5>
                                                  <?php $getdata=get_row_data('coll_admi_testscore','Coll_admi_TestScoreID',$UserInfo['Coll_AvgTestScoreID']); ?>
                                                <p><?php echo $getdata['Coll_admi_TestScoreName']; ?></p>
                                            </div>
                                            <div class="team-rdesc fl">
                                                <h5>Average GPA</h5>
                                        <?php $getdata=get_row_data('coll_admi_gpa','Coll_admi_GpaID',$UserInfo['Coll_AvgStuGpaID']); ?>
                                                <p><?php echo $getdata['Coll_admi_GpaName']; ?></p>
                                            </div>
                                     </div>
                                     <div class="desc-fulid clearfix">
                                     
                                            <div class="team-ldesc fl">
                                                <h5>Average Financial Aid Award</h5>
                                                
                                                <p class="arrow-icon"><?php echo $UserInfo['Coll_AvgFinancialAid']; ?></p>
                                            </div>
                                            <div class="team-rdesc fl">
                                                <h5>Setting</h5>
                                                  <?php $getdata=get_row_data('coll_admi_country','Coll_admi_CountryID',$UserInfo['Coll_CountryID']); ?>
                                                <p><?php echo $UserInfo['Coll_SettingID']; ?></p>
                                            </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    <!--------------------Videos,Photos ----------------------------------------->      
                        <div class="dashinner-rbox galary">
                            <ul id="tab2" class="tabing">
                                <li class="dash-title fl"><a href="#videos"><h3>Videos</h3></a></li>
                                <li class="dash-title fl"><a href="#photos"><h3>Photos</h3></a></li>
                             </ul>
                             <div class="galary-grid">
                             	<div id="videos" class="coment_main_div">
                               
                                    <ul class="clearfix">
                                    
                                         <?php $Comm=get_comm_video($this->session->userdata('MyRecuritID')); 
											   if(!empty($Comm)){ 
											   for($i=0;$i<count($Comm);$i++){ ?>
											  <li>
											   <div class="video_player">
											   <?php $url = $Comm[$i]['Comm_Video'];
													$GetUrl=videoType($url);
													if($GetUrl=='youtube')
													{ ?>
													<img src="http://img.youtube.com/vi/<?php echo getyoutubevidoid2($url); ?>/0.jpg" />
																					<a class="play-icon" id="MyVideo_<?php echo $i; ?>" href="javascript:void(0);">
																					<img src="<?php echo base_url(); ?>images/play-icon2.png" alt=""/>            </a>
												  <script>    
												   $('#MyVideo_<?php echo $i; ?>').magnificPopup({
													items: {
													 src: '<?php echo $Comm[$i]['Comm_Video']; ?>',
													 type: 'iframe'
												  },
												 });
												 </script>
												  <?php } else if($GetUrl=='vimeo') { 
												 $str = substr(strrchr($url, '/'), 1);
												 $vimeo = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$str.php"));
												 ?>
												 <img src="<?php echo $vimeo[0]['thumbnail_medium'];?>"  />
												 <a class="play-icon" id="MyVideo_<?php echo $i; ?>" href="javascript:void(0);">
												  <img src="<?php echo base_url(); ?>images/play-icon2.png" alt="">
													</a>
																						   <script>    
												   $('#MyVideo_<?php echo $i; ?>').magnificPopup({
													items: {
													 src: '<?php echo $Comm[$i]['Comm_Video']; ?>',
													 type: 'iframe'
												  },
												 });
												 </script>
												   <?php } ?> 
												</div>								
											  </li>
                                    <?php } } ?>
                                        
                                    </ul>
                                 
                                </div>
                                <div id="photos" class="coment_main_div">
                                    <ul class="clearfix">
                                	<?php $Comm=get_comm_photo($this->session->userdata('MyRecuritID')); 
                                     if(!empty($Comm)){ 
									 for($i=0;$i<count($Comm);$i++){ ?>
									<li>
                                        <a href="#" title="galary">
                                        	<img src="<?php echo base_url(); ?>register_images/comment/medium/<?php echo $Comm[$i]['Comm_Photo']; ?>" alt="">
                                        </a>
                                    </li>
                                    <?php } } ?>
                                </ul>
                                </div>
                             </div>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<div style="display:none">
<form method="post" action="<?php echo base_url(); ?>dashboard/coll_profile_image" id="MyUploadForm" enctype="multipart/form-data">
	<input type="hidden" name="action" value="upload_profile_pic" />
    <input type="file" name="ProfilePic" id="ProfilePic" />
</form>

<form method="post" action="<?php echo base_url(); ?>dashboard/coll_cover_image" id="MyCoverImage" enctype="multipart/form-data">

    <input type="file" name="Coll_CoverImage" id="Coll_CoverImage" />
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
			   	var file = $('#Coll_CoverImage')[0].files[0];
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
       src: '<?php echo $UserInfo['Coll_VideoUrl']; ?>',
       type: 'iframe'
    },
});
</script>
