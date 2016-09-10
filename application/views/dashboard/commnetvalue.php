<?php

 $start=$StartValue;
  $userid = $this->session->userdata('MyRecuritID'); 
 for($i=0;$i<count($post_info);$i++){?>
                     
                           <?php $getdata=get_all_data('Cat_ID',$post_info[$i]['Cat_ID'],$start,$userid);  ?>
                         	
                         
                                	
                          <?php  for($j=0;$j<count($getdata);$j++){ ?>
                           
                            <div class="dashinner-lbox" id="comment_box_<?php echo $getdata[$j]['Comm_ID']; ?>">
                            <div class="HomeLoader" id="CommentLoader_<?php echo $getdata[$j]['Comm_ID']; ?>"></div>
                                <div class="left-contbox clearfix">
                                    <div class="lbox-title">
                                  <?php $cat_name=get_row_data('category','Cat_ID',$getdata[$j]['Cat_ID']);?>
                                            <h4> <?php echo $cat_name['Cat_Name'] ?></h4>
                                        </div>
                                    
                               
                                    <div class="dash-scrollbar">
                               <!--     <script>
										(function($){
											$(document).ready(function(){
												$(".dash-scrollbar").mCustomScrollbar({
													setHeight: 115,	
												});
											});
										})(jQuery);
									</script>-->
                                    
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

											
											  $('#photo_<?php echo $getdata[$j]['Comm_ID'];?>').magnificPopup({type:'image'});
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
                                                       <?php }else if($GetUrl=='hudl'){ ?>
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
														   
													  <?php }else{ 
											 
                                                  if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) {
    	$Youtubeid = $match[1];
    
										}
										?>
                                                   <img src="http://img.youtube.com/vi/<?php echo getyoutubevidoid2($url); ?>/0.jpg" />
                                                     <a class="play-icon fancybox.iframe" id="video_data_list<?php echo $getdata[$j]['Comm_ID'];?>" href="http://www.youtube.com/embed/<?php echo $Youtubeid; ?>?autoplay=1&wmode=opaque">  
                                                      <img src="<?php echo base_url(); ?>images/play-icon2.png" alt=""/>            </a>
                                                      <script>    
                                                       $('#video_data_list<?php echo $getdata[$j]['Comm_ID'];?>').fancybox({
															openEffect  : 'none',
															closeEffect : 'none',
															nextEffect  : 'none',
															prevEffect  : 'none',
															padding     : 0,
															margin      : [20, 60, 20, 60] // Increase left/right margin
														});
                                                     </script>
 													<?php 			  
														  
													  }?> 
             									</div>
                                        <?php } ?> 
                                        
                                       
                                     
                                        <div class="left-text">
                                         <?php if($getdata[$j]['Comm_Link']!=''){ ?>   <a class="comm-link" href="<?php echo $getdata[$j]['Comm_Link']; ?>" target="_blank"> <h6><?php echo $getdata[$j]['Comm_Title']; ?></h6>  </a> <?php } else{ ?> 
                                         
                                        <h6><?php echo $getdata[$j]['Comm_Title']; ?></h6> <?php } ?>
                                        <p><?php echo $getdata[$j]['Comm_Desc']; ?></p>
                                        </div>
                                    </div>
                                   
                                </div>
                              
                                <div class="dashinner-ft clearfix">
                                    <div class="cal fl">
                                       <?php echo date('d M Y',strtotime($getdata[$j]['AddDate'])); ?>
                                    </div>
                                    <div class="dash-op fr">
                                        <ul class="clearfix">
                                            <!--<li><a href="#" class="pump">Pump It Up</a></li>
                                            <li><a href="#" class="comment">Comment</a></li>
                                            <li><a href="#" class="share">Share</a></li>-->
                                             <li><a href="javascript:void(0);" class="delete" onclick="del_comment('<?php echo $getdata[$j]['Comm_ID']; ?>')">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                          <?php } }
							 echo '^^__^^';
							 echo $start + '2';
							  ?>
							  