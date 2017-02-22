<script>
    (function($){
        $(document).ready(function(){
            $(".dash-scrollbar").mCustomScrollbar({
				setHeight: 115,
				scrollButtons:{
                    enable:true
					}
				
			});
		});
    })(jQuery);
	

	
	
</script>
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

var loadmore = 0;
    (function($){
        $(window).load(function(){
            $(".mian-scrool").mCustomScrollbar({
				setHeight: 810,	
				 callbacks:{
			
       		onTotalScroll:function(){
			
			if(loadmore==0){
		 	
			 getLoadData(); 
			 
			 }
        }
		
    }
			});
		});
    })(jQuery);
	
 (function($){
        $(window).load(function(){
            $(".video_scroll").mCustomScrollbar({
				setHeight: 200,	
				 
  
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
   <?php if(file_exists("./register_images/student_athlete/cover_small/".$UserInfo['Stu_CoverImage']."")){?>
     <img src="<?php echo base_url(); ?>register_images/student_athlete/cover_small/<?php echo $UserInfo['Stu_CoverImage']; ?>" alt="">
    <?php }else{  ?>
        <img src="<?php echo base_url(); ?>images/inner-banner.png" alt="">
        <?php } ?>
        </div>
         <div class="edit">
            <a onclick="$('#Stu_CoverImage').trigger('click');" href="javascript:void(0);"></a>
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
                         <?php if(file_exists("./register_images/student_athlete/small/".$UserInfo['Stu_ProfileImage']."")){?>
                        <img src="<?php echo base_url(); ?>register_images/student_athlete/small/<?php echo $UserInfo['Stu_ProfileImage']; ?>" alt="">
                         <?php }else{  ?>
        <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
        <?php } ?>
                        </div>
                        <div class="edit">
                        	<a href="javascript:void(0);" onclick="$('#Stu_ProfileImage').trigger('click');"></a>
                        </div>
                    </div>
                    <div class="profile-text clearfix">
                    	<div class="details fl">
                        	<h2><?php echo  ucfirst($UserDetails['FirstName']." ".$UserDetails['LastName']);  ?></h2>
                            <div class="my-recru fl">
								<ul>
                                   <?php $getdata=get_row_data('stu_athlete_sport','SportID',$UserInfo['Stu_SportID']); ?>
                                   
                                    <li><?php echo $getdata['SportName']; ?></li>
                                    <?php $getdata=get_row_data('stu_athlete_position','PositionID',$UserInfo['Stu_PositionID']); ?>
                                    <li><?php echo $getdata['Position']; ?></li>
                               </ul>
                                 <?php $height_info=get_row_data('stu_athlete_height','HeightID',$UserInfo['Stu_HeightID']); ?>
                                  <?php $height_infos=get_row_data('stu_athlete_inches','InchesID',$UserInfo['Stu_InchesID']); ?>
                                <span><?php echo $height_info['HeightName']." ".$height_infos['InchesName'] ; ?></span>
                                <span><?php echo $UserInfo['Stu_SchoolName']; ?></span> 
                                <?php $getdata=get_row_data('stu_athlete_gender','GenderID',$UserInfo['Stu_GenderID']); ?>  
                                <span><?php echo $getdata['Gender']; ?></span>   
                           </div>
							<div class="my-recru fl">
                            	 <?php $getdata=get_row_data('country','CountryID',$UserInfo['Stu_CountryID']); ?>
                                   
                                <span><?php echo $getdata['CountryName']." ".$UserInfo['Stu_ZipCode']; ?> </span>
                                 <?php $getdata=get_row_data('stu_athlete_weight','WeightID',$UserInfo['Stu_WeightID']); ?>
                                   
                                <span><?php echo $getdata['WeightName']; ?></span>
                                 <?php $getdata=get_row_data('stu_athlete_class','ClassID',$UserInfo['Stu_ClassID']); ?>
                                <span><?php echo $getdata['ClassName']; ?></span>
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
                                 <div class="share-profile">
                                    <a href="javascript:void(0);">Share Profile</a>
                                </div>
                            </div>
                          <!--  <div class="view">
                            	<span class="view-count">245</span>
                                Views
                            </div>-->
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
                                
                                 <div class="frm clearfix" id="Link_details" style="display:none;">
                                     <div class="frm">
                                        <input type="text" id="Comm_Link"  placeholder="https://www.myrecuirtboard.com" name="Comm_Link" />	
                               		 </div>	
                         </div>
                                 <div class="frm clearfix" id="Video_details" style="display:none;">
                                             <div class="frm">
                                                <input type="text" id="Comm_Video" placeholder="https://www.myrecuirtboard.com"  name="Comm_Video"/>
                                             </div>
                                             <span class="warning">Note:-Upload Youtube or Vimeo Url OR Hudl </span>	
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
                         </form>
                         <input type="hidden" name="Start" id="Start" value="2" /> 
						 <div class="mian-scrool" id="main_scroll">  
                         <?php
						  for($i=0;$i<count($post_info);$i++){?>
                     
                           <?php $getdata=get_all_data('Cat_ID',$post_info[$i]['Cat_ID'],$start=NULL);  ?>
                                	
                                 <?php  for($j=0;$j<count($getdata);$j++){ ?>
                            <div class="dashinner-lbox">
                                <div class="left-contbox clearfix">
                                    <div class="lbox-title">
                                  <?php $cat_name=get_row_data('category','Cat_ID',$getdata[$j]['Cat_ID']);?>
                                            <h4> <?php if(!empty($cat_name)){ echo $cat_name['Cat_Name'];} ?></h4>
                                        </div>
                                    
                               
                                    <div class="dash-scrollbar">
                                      <?php if($getdata[$j]['Comm_Photo']!=''){ ?> 
                                        <div class="left-img fl">
                                       
                                            <a href="<?php echo base_url(); ?>register_images/comment/original/<?php echo $getdata[$j]['Comm_Photo']; ?>" id="photo_<?php echo $getdata[$j]['Comm_ID'];?>" title="<?php echo $getdata[$j]['Comm_Title']; ?>">
                                             <?php if(file_exists("./register_images/comment/small/".$getdata[$j]['Comm_Photo']."")){?> 
                                                <img src="<?php echo base_url(); ?>register_images/comment/small/<?php echo $getdata[$j]['Comm_Photo']; ?>" alt="">
                                                <?php }else{  ?>
        <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
        <?php } ?> 
                                            </a>
                                           <script>

											   $(document).ready(function() {
												 $('#photo_<?php echo $getdata[$j]['Comm_ID'];?>').magnificPopup({type:'image'});
											   });
												
          								 </script>
                                        </div>
                                        <?php } ?> 
                                        
                                          <?php if($getdata[$j]['Comm_Video']!=''){ ?> 
                                          
                                               <div class="left-img fl">
																					   <?php 
                                                    $url = $getdata[$j]['Comm_Video'];
                                                    
													$GetUrl=videoType($url);
                                                    if($GetUrl=='youtube')
                                                    { ?>
                                                    <img src="https://img.youtube.com/vi/<?php echo getyoutubevidoid2($url); ?>/0.jpg" />
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
                                                     $vimeo = unserialize(file_get_contents("https://vimeo.com/api/v2/video/$str.php"));
                                                     ?>
                                                     <img src="<?php echo $vimeo[0]['thumbnail_medium'];?>" />
                                                     <a class="play-icon" id="video_<?php echo $getdata[$j]['Comm_ID'];?>" href="javascript:void(0);" >
                                                   
                                                      <img src="<?php echo base_url(); ?>images/play-icon2.png" alt="">
                                                        </a>
                                                       <script>    
                                                       $('#video_<?php echo $getdata[$j]['Comm_ID'];?>').magnificPopup({
                                                      items: {
                                                         src: "https://vimeo.com/<?php echo $str; ?>",
                                                         type: 'iframe',
														},
                                                     });
                                                     </script>
                                                       <?php }else { ?>
													 <script>
													 $(document).ready(function(){
                                                     $('#video_<?php echo $getdata[$j]['Comm_ID'];?>').embedly({
                                                          key:'56d83ecab0274fd9bef9bcdda8529da9',
                                                          query: {
                                                            autoplay:true
                                                          },
                                                          display: function(data, elem){
                                                            //Adds the image to the a tag and then sets up the sizing.
                                                            $('#video-thum_<?php echo $getdata[$j]['Comm_ID'];?>').html('<img src="'+data.thumbnail_url+'"/>')
                                                             
                                                          }
                                                        })
														});
                                                        </script>
														   <div class="video-thum" id="video-thum_<?php echo $getdata[$j]['Comm_ID'];?>"></div>
                                                       <a class="play-icon video" id="video_<?php echo $getdata[$j]['Comm_ID'];?>" href="<?php echo $url; ?>">
                                                         
                                                           <img src="<?php echo base_url(); ?>images/play-icon2.png" alt="">
                                                          
                                                          </a> 
														   <script>    
                                                       $('#video_<?php echo $getdata[$j]['Comm_ID'];?>').magnificPopup({
                                                      items: {
                                                         src: "<?php echo $getdata[$j]['Comm_Video']; ?>",
                                                         type: 'iframe',
														},
                                                     });
                                                     </script>
														   
													  <?php }?> 
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
                            
                    
                              </div>
                         <div class="see-more" id="see_more" style="display:none;">
                                <a  id="Load" href="javascript:void(0);">See More</a>
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
          				 $url = $UserInfo['Stu_VideoURL'];
                         $GetUrl= videoType($url);
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
											 <img src="<?php echo $vimeo[0]['thumbnail_large'];?>"/>
         
                                   <a class="play-icon" id="myvideo" href="javascript:void(0);">
                                     <img src="<?php echo base_url(); ?>images/play-icon.png" alt="">
                                       </a>
                                   <?php } else {?>
                                	<div id="athe"></div>
                                   <a class="play-icon" id="myvideo" href="<?php echo $url; ?>">
                                     
                                       <img src="<?php echo base_url(); ?>images/play-icon.png" alt="">
                                      
                                      </a> 
                                    <?php } ?>
                               
                              
                            </div>
                        </div>
                   <!--------------------My Statistics,My Coaches-------------------------------->     
                        <div class="dashinner-rbox">
                           <ul id="tab1" class="dash-multititle tabing clearfix">
                                <li class="dash-title fl">
                                    <a href="#statistics"><h3>My Statistics</h3></a>
                                </li>
                                <li class="dash-title fl">
                                    <a href="#coaches"><h3>My Coaches</h3></a>
                               </li>
                              
                            </ul>
                            <div class="tabing-content">
                                <div id="statistics" class="coment_main_div">
                                    <div class="my-SCA clearfix">
                                        <div class="cols-2">
                                            <div class="btn-sca">
                                             <a href="javascript:void(0);" onclick="getbiomentric()"  class="">Biometric</a>
                                               <script>
												function getbiomentric()
													{	
														$.magnificPopup.open({
															items: {
																src: '<?php echo base_url(); ?>dashboard/getBiometric/'
															  },
															  type: 'ajax',
															  closeOnContentClick:false,
															  closeOnBgClick: false
														});
													}
							 				  </script>		
                                            </div>
                                        </div>
                                        <div class="cols-2">
                                            <div class="btn-sca">
                                              <a href="javascript:void(0);" onclick="getAcedmic()"  class="">Academic Stats</a>
                                               <script>
													function getAcedmic()
														{	
															$.magnificPopup.open({
																items: {
																	src: '<?php echo base_url(); ?>dashboard/getAcedmic/'
																  },
																  type: 'ajax',
																  closeOnContentClick:false,
																  closeOnBgClick: false
															});
														}
							  				 </script>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-SCA clearfix">
                                        <div class="cols-2">
                                            <div class="btn-sca">
                                             <a href="javascript:void(0);" onclick="getSports()"  class="">Sport Stats</a>
                                              <script>
												function getSports()
													{	
														$.magnificPopup.open({
															items: {
																src: '<?php echo base_url(); ?>dashboard/getSports/'
															  },
															  type: 'ajax',
															  closeOnContentClick:false,
															  closeOnBgClick: false
														});
													}
                                           </script>		
                                            </div>
                                        </div>
                             <!----------------- Evalution------------>
                                     <?php /*?>   <div class="cols-2">
                                            <div class="btn-sca">
                                               <a href="javascript:void(0);" onclick="getEvaluations()">Evaluations</a>
                                                  <script>
													function getEvaluations()
														{	
															$.magnificPopup.open({
																items: {
																	src: '<?php echo base_url(); ?>dashboard/getEvaluations/'
																  },
																  type: 'ajax',
																  closeOnContentClick:false,
																  closeOnBgClick: false
															});
														}
							 					 </script>
                                            </div>
                                        </div><?php */?>
                                    </div>
                                </div>
                                <div id="coaches" class="coment_main_div">
                                    
                                      <div class="my-SCA clearfix">
                                      <?php if($this->session->flashdata('errormessage')){?> 
                                        <div class="errormessage">
                                            <button type="button" class="close commonbtn">&times;</button>
                                            <?php echo $this->session->flashdata('errormessage');?>
                                        </div>  
                                    <?php }?>
                                             <div class="dash-scrollbar">
                                              <table class="coach-info">
                                              <tr><th>Coach Name</th><th>Coach Email</th></tr>
                                                   <?php for($i=0;$i<count($coach_info);$i++){  ?>
                                                    <tr>
                        							<td><?php echo $coach_info[$i]['CoachName']; ?></td>
                                                    <td><?php echo $coach_info[$i]['CoachEmail']; ?></td></tr>
                                                   
                                                   <?php } ?>
                                                   </table>
                                              </div>
                                           
                                                  <div class="btn-coach">
                                                    <a href="javascript:void(0);" onclick="addcoach()"  class="btn-primary">Add Coach</a>
                                                    <script>
														function addcoach()
															{	
																$.magnificPopup.open({
																	items: {
																		src: '<?php echo base_url(); ?>dashboard/add_coach/'
																	  },
																	  type: 'ajax',
																	  closeOnContentClick:false,
																	  closeOnBgClick: false
																});
															}
                                         		  </script>
                                                   
                                                 </div>
                                                   
                                          </div>
									   	
                                </div>
                                
                            </div>
                        </div>
                    <!--------------------Videos,Photos ----------------------------------------->      
                        <div class="dashinner-rbox galary">
                            <ul id="tab2" class="tabing clearfix">
                                <li class="dash-title fl"><a href="#videos"><h3>Videos</h3></a></li>
                                <li class="dash-title fl"><a href="#photos"><h3>Photos</h3></a></li>
                             </ul>
                             
                             <div class="galary-grid">
                             
                             	<div id="videos" class="coment_main_div video_scroll">
                              
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
													<img src="https://img.youtube.com/vi/<?php echo getyoutubevidoid2($url); ?>/0.jpg" />
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
												 $vimeo = unserialize(file_get_contents("https://vimeo.com/api/v2/video/$str.php"));
												 ?>
												 <img src="<?php echo $vimeo[0]['thumbnail_medium'];?>"  />
												 <a class="play-icon" id="MyVideo_<?php echo $i; ?>" href="javascript:void(0);">
												  <img src="<?php echo base_url(); ?>images/play-icon2.png" alt="">
													</a>
												<script>    
												   $('#MyVideo_<?php echo $i; ?>').magnificPopup({
													items: {
													 src: 'https://vimeo.com/<?php echo $str; ?>',
													 type: 'iframe'
												  },
												 });
												 </script>
												   <?php } else { ?>
                                                   
                                                     <script>                                              $(document).ready(function(){
                                                    $('#MyVideo_<?php echo $i; ?>').embedly({
                                                      key:'56d83ecab0274fd9bef9bcdda8529da9',
                                                      query: {
                                                        autoplay:true
                                                      },
                                                      display: function(data, elem){
                                                        //Adds the image to the a tag and then sets up the sizing.
                                                        $('#myvidata_<?php echo $i; ?>').html('<img src="'+data.thumbnail_url+'"/>')
                                                         
                                                      }
                                                    })
													});
                                                   </script>
                                                   <div id="myvidata_<?php echo $i; ?>" class="myvidata"></div>
                                                   <a class="play-icon myvideo" id="MyVideo_<?php echo $i; ?>" href="<?php echo $url; ?>">
                                                     
                                                       <img src="<?php echo base_url(); ?>images/play-icon2.png" alt="">                                              </a> 
                                                       
                                                   <?php } ?> 
                                                   <script>    
												   $('#MyVideo_<?php echo $i; ?>').magnificPopup({
													items: {
													 src: '<?php echo $Comm[$i]['Comm_Video']; ?>',
													 type: 'iframe'
												  },
												 });
												 </script>
												</div>								
											  </li>
                                    <?php } } ?>
                                        
                                    </ul>
                                
                                </div>
                                
                                
                                <div id="photos" class="coment_main_div video_scroll">
                                    <ul class="clearfix">
                                	<?php $Comm=get_comm_photo($this->session->userdata('MyRecuritID')); 
                                     if(!empty($Comm)){ 
									 for($i=0;$i<count($Comm);$i++){ ?>
									<li>
                                       <a href="<?php echo base_url(); ?>register_images/comment/original/<?php echo $Comm[$i]['Comm_Photo']; ?>" title="galary" class="gallery-item">
                                        	<img src="<?php echo base_url(); ?>register_images/comment/medium/<?php echo $Comm[$i]['Comm_Photo']; ?>" alt="">
                                        </a>
                                    </li>
                                     <script>
                                        $('.gallery-item').magnificPopup({
                                              type: 'image',
                                              gallery:{
                                                enabled:true
                                              }
                                            });
                                    </script>    
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
<form method="post" action="<?php echo base_url(); ?>dashboard/profile_image" id="MyUploadForm" enctype="multipart/form-data">
	<input type="hidden" name="action" value="upload_profile_pic" />
    <input type="file" name="Stu_ProfileImage" id="Stu_ProfileImage" />
</form>
<form method="post" action="<?php echo base_url(); ?>dashboard/cover_image" id="MyCoverImage" enctype="multipart/form-data">

    <input type="file" name="Stu_CoverImage" id="Stu_CoverImage" />
</form>

</div>    
<script type="text/javascript">
 $(function(){
                
            $('#MyUploadForm').on('change',function(e){
                e.preventDefault();	
			   	var file = $('#Stu_ProfileImage')[0].files[0];
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
			   	var file = $('#Stu_CoverImage')[0].files[0];
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
		$('#see_more').show();
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
						loadmore = 1;
						$('#Load').text("No More Feed");
						
					}else
					{
						$('#see_more').hide();		
					}
					$('#LoadMore').append(myarr[0]);
					$('#Start').val(myarr[1]);
					
				}	
		});
	}
	

	function comment()
	{


	    var sucess = true;
		var expression = /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
		var regex = new RegExp(expression);
		var t = $('#Comm_Video').val();
		var cl = $('#Comm_Link').val();
		var regYoutube = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
		var regVimeo = /^.*(vimeo\.com\/)((channels\/[A-z]+\/)|(groups\/[A-z]+\/videos\/))?([0-9]+)/;
	    var regHundl = /^.*((hudl\.com\/)|(v\/)|(\/u\/\w\/)|(athlete\/)|(highlights\?))\??v?=?([^#\&\?]*).*/;
		 if($('#Comm_Link').val()!='')
			 {	
			   if (!cl.match(regex) )
				{
					$('#Comm_Link').css('border','1px solid red');
					sucess = false;
				} else {
					$('#Comm_Link').css('border','1px solid #a4a4a4');
				}
			}	
		
		 if($('#Comm_Video').val()!='')
			 {	
			 if ( !(t.match(regYoutube) || t.match(regVimeo) || t.match(regHundl) ) )
				{
					$('#Comm_Video').css('border','1px solid red');
					sucess = false;
				}
				
				
				 else {
					$('#Comm_Video').css('border','1px solid #a4a4a4');
				}
				
			}

		
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
       src: '<?php echo $UserInfo['Stu_VideoURL']; ?>',
       type: 'iframe'
    },
});
</script>
