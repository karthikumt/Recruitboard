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
   
          <?php if($UserInfo['Juco_CoverImage']!=""){?>
     <img src="<?php echo base_url(); ?>register_images/juco_transfer/cover_small/<?php echo $UserInfo['Juco_CoverImage']; ?>" alt="">
    <?php }else{  ?>
        <img src="<?php echo base_url(); ?>images/inner-banner1.jpg" alt="">
        <?php } ?>
        </div>
        <!-- <div class="edit">
            <a onclick="$('#Juco_CoverImage').trigger('click');" href="javascript:void(0);"></a>
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
                         <?php if(file_exists("./register_images/juco_transfer/small/".$UserInfo['Juco_ProfileImage']."")){?>
                        <img src="<?php echo base_url(); ?>register_images/juco_transfer/small/<?php echo $UserInfo['Juco_ProfileImage']; ?>" alt="">
                         <?php }else{  ?>
        <img src="<?php echo base_url(); ?>images/no_image.jpg" alt="">
        <?php } ?>
                        </div>
                       <!-- <div class="edit">
                            <a href="javascript:void(0);" onclick="$('#Juco_ProfileImage').trigger('click');"></a>
                        </div>-->
                    </div>
                    <div class="profile-text clearfix">
                        <div class="details fl">
                            <h2><?php echo $UserDetails['FirstName']." ".$UserDetails['LastName']; ?></h2>
                            <div class="my-recru fl">
                                <ul>
                                   <?php $getdata=get_row_data('stu_athlete_sport','SportID',$UserInfo['Juco_SportID']); ?>
                                   <?php if($UserInfo['Juco_PositionID']!="0" && $UserInfo['Juco_PositionID']!=NULL  ){ ?>
                                    <li><?php echo $getdata['SportName']; ?></li>
                                    <?php $getdata=get_row_data('stu_athlete_position','PositionID',$UserInfo['Juco_PositionID']); ?>
                                    <li><?php echo $getdata['Position']; ?></li>
                                    <?php } ?>
                               </ul>
                                 <?php $height_info=get_row_data('stu_athlete_height','HeightID',$UserInfo['Juco_HeightID']); ?>
                                  <?php $height_infos=get_row_data('stu_athlete_inches','InchesID',$UserInfo['Juco_InchesID']); ?>
                                <span><?php echo $height_info['HeightName']." ".$height_infos['InchesName'] ; ?></span>
                                <span><?php echo $UserInfo['Juco_SchoolName']; ?></span> 
                                <?php $getdata=get_row_data('stu_athlete_gender','GenderID',$UserInfo['Juco_GenderID']); ?>  
                                <span><?php echo $getdata['Gender']; ?></span>   
                           </div>
                            <div class="my-recru fl">
                                 <?php if($UserInfo['Juco_State']!=0 && $UserInfo['Juco_State']!=NULL ) { 
                                     $getdata=get_row_data('state_list','StateID',$UserInfo['Juco_State']);
                                 ?>
                                 <span><?php echo $UserInfo['Juco_City']." , ".$getdata['Name']; ?></span>
                                 <?php } ?>
                                 <?php $getdata=get_row_data('country','CountryID',$UserInfo['Juco_CountryID']); ?>
                                   
                                <span><?php echo $getdata['CountryName']." ".$UserInfo['Juco_ZipCode']; ?> </span>
                                 <?php $getdata=get_row_data('stu_athlete_weight','WeightID',$UserInfo['Juco_WeightID']); ?>
                                   
                                <span><?php echo $getdata['WeightName']; ?></span>
                                 <?php $getdata=get_row_data('stu_athlete_class','ClassID',$UserInfo['Juco_ClassID']); ?>
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
                               <!--  <div class="share-profile">
                                    <a href="javascript:void(0);">Share Profile</a>
                                </div>-->
                            </div>
                           <!-- <div class="view">
                                <span class="view-count">245</span>
                                Views
                            </div>-->
                        </div>
                    </div>
                </div>
                </div>
                <div class="dashboard-box clearfix">
                    
                    <?php include('comment_data_v.php'); ?>
                    
                    <div class="dashboard-Rbox fr">
                    
                    <!--My Videos-->
                        <div class="dashinner-rbox">
                            <div class="dash-title">
                                    <h3>My Video</h3>
                                </div>
                            <div class="video-box">
                                <div class="innervideo-box">
                              <?php 
                                if($UserInfo['Juco_VideoURL']!="")
                                {
                                    $url = $UserInfo['Juco_VideoURL'];
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
                                       <?php }else if($GetUrl=='hudl') {?>
                                        
                                        <div id="athe"></div>
                                       <a class="play-icon" id="myvideo" href="<?php echo $url; ?>">
                                         
                                           <img src="<?php echo base_url(); ?>images/play-icon.png" alt="">
                                          
                                          </a> 
                                          
                                        <?php } else if($GetUrl=='unknown') {?>
                                    <?php
                                        if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) {
        $Youtubeid = $match[1];
    
                                        }
                                        ?>
                                     <div id="athe"></div>
                                   
                                   <a class="play-icon fancybox.iframe" id="myvideos" href="http://www.youtube.com/embed/<?php echo $Youtubeid; ?>?autoplay=1&wmode=opaque">
                                     
                                       <img src="<?php echo base_url(); ?>images/play-icon.png" alt="">
                                      
                                      </a>
                                    <?php }  else { ?>
                                        <img alt="" src="<?php echo base_url(); ?>images/no_video.gif">
                                        <?php } ?>
                                        
                                        <script>    
 $('#myvideo').magnificPopup({
   items: {
       src: '<?php echo $UserInfo['Juco_VideoURL']; ?>',
       type: 'iframe'
    },
});

</script>
                                 <?php       
                                 }else { 
                                  ?>
                                    
                                    <img alt="" src="<?php echo base_url(); ?>images/no_video.gif">
                                    
                                  <?php } ?>  
                                 </div>
                                    <form name="Video_url" id="Video_url" method="post" action="<?php echo base_url(); ?>dashboard/upload_video_juco" onsubmit="return video_url();" enctype="multipart/form-data" >
                                    <div class="frm clearfix">
                                     <div class="frm" id="Video_Up" style="display:none;">
                                        <input type="text" id="Juco_VideoURL" name="Juco_VideoURL" placeholder="http://www.myrecruitboard.com"/>
                                        <span class="warning">Note: Upload from YouTube, Vimeo, or Hudl</span>  
                                     </div>
                                    <div class="links fl">
                                      <!--  <ul class="clearfix">
                                            <li><a href="javascript:void(0);" class="Video" onclick="UploadVideo()">Change Video</a></li>
                                        </ul>-->
                                    </div>
                                    
                                  <!--  <div class="post-btn fr">
                                        <a href="javascript:void(0);" onclick="$('#Video_url').submit();">Post</a>
                                    </div>-->
                                </div>
                                </form>
                      <script>  
                        function UploadVideo()
                        {
                            $('#Video_Up').slideToggle();   
                        }
                        function video_url()
                        {


                            var sucess = true;
                            var t = $('#Juco_VideoURL').val();
                            var regYoutube = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
                            var regVimeo = /^.*(vimeo\.com\/)((channels\/[A-z]+\/)|(groups\/[A-z]+\/videos\/))?([0-9]+)/;
                            var regHundl = /^.*((hudl\.com\/)|(v\/)|(\/u\/\w\/)|(athlete\/)|(highlights\?))\??v?=?([^#\&\?]*).*/;
                         if($('#Juco_VideoURL').val()=="")
                         {
                                $('#Juco_VideoURL').css('border','1px solid red');
                                sucess = false; 
                         }
                         
                         if($('#Juco_VideoURL').val()!="")
                             {  
                             if ( !(t.match(regYoutube) || t.match(regVimeo) || t.match(regHundl) ) )
                                {
                                    $('#Juco_VideoURL').css('border','1px solid red');
                                    sucess = false;
                                }
                                
                                
                                 else {
                                    $('#Juco_VideoURL').css('border','1px solid #a4a4a4');
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
                                             <a href="javascript:void(0);" onclick="getbiomentric1()"  class="">Biometric</a>
                                               <script>
                                                function getbiomentric1()
                                                    {   
                                                        $.magnificPopup.open({
                                                            items: {
                                                                src: '<?php echo base_url(); ?>dashboard_juco/getBiometric1/?userid=<?php echo $_GET["userid"]; ?>'
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
                                                                    src: '<?php echo base_url(); ?>dashboard_juco/getAcedmic/?userid=<?php echo $_GET["userid"]; ?>'
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
                                                                src: '<?php echo base_url(); ?>dashboard_juco/getSports/?userid=<?php echo $_GET["userid"]; ?>'
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
                            <?php /*?>            <div class="cols-2">
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
                                                    <!--<a href="javascript:void(0);" onclick="addcoach()"  class="btn-primary">Add Coach</a>-->
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
                         <?php include('myphotovideo.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<div style="display:none">
<form method="post" action="<?php echo base_url(); ?>dashboard_juco/profile_image" id="MyUploadForm" enctype="multipart/form-data">
    
    <input type="file" name="Juco_ProfileImage" id="Juco_ProfileImage" />
</form>
<form method="post" action="<?php echo base_url(); ?>dashboard_juco/cover_image" id="MyCoverImage" enctype="multipart/form-data">

    <input type="file" name="Juco_CoverImage" id="Juco_CoverImage" />
</form>
</div>    
<script type="text/javascript">
 $(function(){
                
           
            $('#MyUploadForm').on('change',function(e){
                e.preventDefault(); 
                var file = $('#Juco_ProfileImage')[0].files[0];
                var fileName = file.name;
                var fileExt = fileName.split('.').pop();
                var fileExt = fileExt.toLowerCase();
                if(fileExt=='jpg' || fileExt=='jpeg' || fileExt=='png'){
                    $('#ProcessLoaderID').show();
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
                var file = $('#Juco_CoverImage')[0].files[0];
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

var sucess = true;  
function check_stu_validation()
  {
    
     var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([edu])+$/;
     
     
     
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

$("#myvideos").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        nextEffect  : 'none',
        prevEffect  : 'none',
        padding     : 0,
        margin      : [20, 60, 20, 60] // Increase left/right margin
    });

</script>   

   
