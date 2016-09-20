<div class="dashboard-coach-ads coach-height" id="somediv">
    <div class="wrapper">
          <div class="my_Account">
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
                        <h2 class="fr">MYRECRUITBOARD COLLEGE COACH ADS
</h2>
                    </div>
                      <div class="info-list">
                    Below are ads posted by College Coaches from all over the country. Please respond to any and all ads that you fit the requirements.
                      </div> 
                    <div class="athlete-view hp-add" id="ad-holders">
                        <?php //var_dump($_SESSION); 
//echo "cdcdcd";die;
                          if(empty($PostAds)){ 
                        ?> <div class="createNewAd"><h2>No Ads</h2></div> 
                        <?php 
                          }else { 
                            for($i=0;$i<count($PostAds);$i++) { 
                              $user_data=get_row_data('user_register','UserID',$PostAds[$i]['UserID']); 
                        ?>  
                        <?php if($i%2==0){?> <div class="athleteRow clearfix"> <?php  }?> 
                        <div class="athleteBox" id="athele_<?php echo $PostAds[$i]['PostID']; ?>">
                          <div class="athleteTopBox clearfix">
                            <ul class="athleteTopBoxL fl">
                              <li class="userName">
                                <a target="_blank" href="<?php echo base_url().'colleage_coach_v?userid='.$PostAds[$i]['UserID'];?>">
                                  <?php echo $PostAds[$i]['Po_Username']; ?>
                                </a>
                              </li>
                              <li class="schoolName"><?php echo $PostAds[$i]['Po_SchoolName']; ?></li>
                            </ul>
                                   <!-- <div class="Exp-date fr">Expires on <?php echo date('d M',strtotime($PostAds[$i]['Po_ExpireDate'])); ?></div>-->
                                   <?php echo ($PostAds[$i]['add_responded']==1)?'<img src='. base_url().'images/green_tick_icon.png alt="" class="fr" style="max-width:7%;">':'';?>
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
                                        <?php if($PostAds[$i]['Po_SportName']!="0" && $PostAds[$i]['Po_SportName']!=NULL  ){ ?>
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
                                           <?php echo $PostAds[$i]['Po_Position']; ?>
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

                              <div class="athleteBtn-group clearfix fl">
                                <div class="post-btn fl">
                                      <a href="<?php echo $PostAds[$i]['Coach_TeamID']; ?>" target="_blank" >View Team Page</a>
                                </div>

                                <div class="post-btn clearfix fl">
                                     <a href="<?php echo $PostAds[$i]['Coach_CoachAward']; ?>" target="_blank" >Complete Questionnaire</a>
                                </div>
                                
                              </div>
                              <div class="athleteBtn-group fl">
                                <div class="btn-ads fl">

                                                <a href="javascript:void(0);" onclick="getCoachInfo(<?php echo $PostAds[$i]['UserID']; ?>,'<?php echo $PostAds[$i]['Po_Position']; ?>', <?php echo $PostAds[$i]['PostID']; ?>)">Respond to Ad</a>
                                            <script>
                                            function getCoachInfo(UserID,pos, PostId){ 
                                                                        $.magnificPopup.open({
                                                                          items: {
                                                                            src: '<?php echo base_url(); ?>myrecruitads/Coach_Details/'
                                                                            },
                                                                            ajax: {
                                                                              settings: {
                                                                              type: 'POST',
                                                                              data: { 
                                                                                UserID:UserID,
                                                                                pos:pos,
                                                                                PostId:PostId
                                                                              }
                                                                              }
                                                                            },
                                                                            type: 'ajax',
                                                                            closeOnContentClick:false,
                                                                            closeOnBgClick: false
                                                                        });
                                                                      }
                                              </script>          
                                            
                                </div>
                                <div class="btn-ads fl">
                                                <a href="javascript:void(0);" onclick="no_interest(<?php echo $PostAds[$i]['PostID']; ?>)">Not Interested</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                             <?php if($i%2!=0){?> </div><?php  }?> 
                             <?php } } ?> 
                      </div>
                      <div class="athleteBtn-group clearfix" style="">
                        <div class="btn-ads" style=" background-position:center; background-repeat:no-repeat; height:32px; width: 200px;margin: auto; text-align:center"><a href="javascript:void(0);" id="load-more" data-page="0">Load more</a>
                        </div>
                      </div>                        
                    </div>
                  </div>           
                </div>
              </div>
 
  
  <script type="text/javascript">
$(document).ready(function() {
	
	$('#load-more').click( function (){
		
		var page = $(this).attr('data-page') ;
		var next = parseInt(page) + 1;
		var url = '<?php echo site_url('myrecruitads/adsbypage') ?>';
		var bg = '<?php echo base_url('assets/images/bx_loader.gif') ?>';
		
		$('#load-more').hide() ;
		$('#load-more').parent().css('background-image', 'url(' + bg + ')');
		
		$.post(url,{page:next})
		.done( function (data){
			if(data == '0'){
				$('#load-more').parent().parent().hide();
			}
			else{
				$('#load-more').attr('data-page', next)
				$('#ad-holders').append(data) ; 
				$('#load-more').show() ;
				$('#load-more').parent().css('background-image', 'none');
				//$("html, body").animate({ scrollTop: $(document).height() }, 1000);
			}
		}); 
	});
		
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

function no_interest(PostID)
{
  if(confirm('Are You Sure?')){   
     $.ajax({
     type: "POST",
     url: "<?php echo base_url(); ?>myrecruitads/no_interest/",
     data: {PostID:PostID},
     cache: false,
     success: function(result){
        $("#athele_"+PostID).remove();
      }
     });
  }
}

</script>
