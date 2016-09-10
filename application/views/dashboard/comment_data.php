
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
                                        <input type="text" id="Comm_Link"  placeholder="http://www.myrecruitboard.com" name="Comm_Link" />	
                               		 </div>	
                         </div>
                                 <div class="frm clearfix" id="Video_details" style="display:none;">
                                             <div class="frm">
                                                <input type="text" id="Comm_Video" placeholder="http://www.myrecruitboard.com"  name="Comm_Video"/>
                                             </div>
                                             <span class="warning">Note: Upload from YouTube, Vimeo, or Hudl</span>	
                                 </div>
                          		 <div class="frm clearfix" id="Photo_details" style="display:none;">
                               <div class="fileupload">
                        	
                                    <div class="file-btn">Upload A Photo 
                                    <input type="file" name="Comm_Photo" id="Comm_Photo" class="filefild">
                                    </div>
                                     <script>
                                    $('input.filefild').on('change', function (event, files, label) {
                                        var file_name = this.value.replace(/\\/g, '/').replace(/.*\//, '')
                                        var temp= file_name.substring(file_name.indexOf("."));
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
						  $userid = $this->session->userdata('MyRecuritID');  
						  for($i=0;$i<count($post_info);$i++){?>
                     
                           <?php $getdata=get_all_data('Cat_ID',$post_info[$i]['Cat_ID'],$start=NULL,$userid);  ?>
                                	
                                 <?php  for($j=0;$j<count($getdata);$j++){ ?>
                            <div class="dashinner-lbox" id="comment_box_<?php echo $getdata[$j]['Comm_ID']; ?>">
                             <div class="HomeLoader" id="CommentLoader_<?php echo $getdata[$j]['Comm_ID']; ?>"></div>
                           
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
                                                         src: "http://vimeo.com/<?php echo $str; ?>",
                                                         type: 'iframe',
														},
                                                     });
                                                     </script>
                                                       <?php }else if($GetUrl=='hudl') { ?>
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
                                                     <a class="play-icon fancybox.iframe" id="video_data<?php echo $getdata[$j]['Comm_ID'];?>" href="http://www.youtube.com/embed/<?php echo $Youtubeid; ?>?autoplay=1&wmode=opaque">  
                                                      <img src="<?php echo base_url(); ?>images/play-icon2.png" alt=""/>            </a>
                                                      <script>    
                                                       $('#video_data<?php echo $getdata[$j]['Comm_ID'];?>').fancybox({
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
                              <?php } }?>
                              
                              <div id="LoadMore"></div>
                            
                    
                              </div>
                         <div class="see-more" id="see_more" style="display:none;">
                                <a  id="Load" href="javascript:void(0);">See More</a>
                                </div> 
                                  
                             
                        </div>
 
     
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
	

	
	

 $(document).ready(function(e) {
    $('#Start').val(2);
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
 function del_comment(CommentID)
 {
	if(confirm('Are you sure you want to delete this update?'))
	{
		$('#CommentLoader_'+CommentID).show();
		$.ajax({
			type:'post',
			url:'<?php echo base_url(); ?>termcondition/remove_comment/',
			data:{CommentID:CommentID},
			success:function(resp){
					$('#comment_box_'+CommentID).remove();
					$('#CommentLoader_'+CommentID).hide();
					
				}	
		});
	}
 }
		
		
</script>                       