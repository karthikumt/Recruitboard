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
													 src: 'http://vimeo.com/<?php echo $str; ?>',
													 type: 'iframe'
												  },
												 });
												 </script>
												   <?php } else if($GetUrl=='hudl') { ?>
                                                   
                                                     <script>                                              $(document).ready(function(){
                                                    $('#MyVideo_<?php echo $i; ?>').embedly({
                                                      key:'0abdd71eae8b4f7b81db0ee51f352b74',
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
                                                       
                                                   <?php }else{ ?>
                                                   <?php      
												   if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) {
    	$Youtubeid_data = $match[1];
    
										}
										?>
													<img src="http://img.youtube.com/vi/<?php echo getyoutubevidoid2($url); ?>/0.jpg" />
                                                <a class="play-icon fancybox.iframe" id="MyVideolist_<?php echo $i; ?>" href="http://www.youtube.com/embed/<?php echo $Youtubeid_data; ?>?autoplay=1&wmode=opaque">
                                                <img src="<?php echo base_url(); ?>images/play-icon2.png" alt=""/>            </a>
												  <script>    
												  $("#MyVideolist_<?php echo $i; ?>").fancybox({
											openEffect  : 'none',
											closeEffect : 'none',
											nextEffect  : 'none',
											prevEffect  : 'none',
											padding     : 0,
											margin      : [20, 60, 20, 60] // Increase left/right margin
										});
												 </script>
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
                                         
                                    <?php } } ?>
                                </ul>
                                <script>
                                        $('.gallery-item').magnificPopup({
                                              type: 'image',
                                              gallery:{
                                                enabled:true
                                              }
                                            });
                                    </script>
                                </div>
                                
                             </div>

                        </div>
                        
<script>
 (function($){
        $(window).load(function(){
            $(".video_scroll").mCustomScrollbar({
				setHeight: 210,	
				 
  
			});
		});
    })(jQuery);
</script>                        