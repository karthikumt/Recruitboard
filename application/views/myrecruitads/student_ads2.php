 
                        <?php //var_dump($_SESSION); 

                        if(empty($PostAds)){ ?> <div class="createNewAd"><h2>No Ads</h2></div> <?php }else { 
                        for($i=0;$i<count($PostAds);$i++) { 

                          $user_data=get_row_data('user_register','UserID',$PostAds[$i]['UserID']); 
                          //var_dump($user_data);


                          ?>  
                            <?php if($i%2==0){?> <div class="athleteRow clearfix"> <?php  }?> 
                            <div class="athleteBox" id="athele_<?php echo $PostAds[$i]['PostID']; ?>">
                                <div class="athleteTopBox clearfix">
                                    <ul class="athleteTopBoxL fl">
                                        <li class="userName">
  <a target="_blank" href="<?php echo base_url().'colleage_coach_v?userid='.$PostAds[$i]['UserID'];?>">
  <?php echo $PostAds[$i]['Po_Username']; ?></a></li>
                                        <li class="schoolName"><?php echo $PostAds[$i]['Po_SchoolName']; ?></li>
                                    </ul>
                                   <!-- <div class="Exp-date fr">Expires on <?php echo date('d M',strtotime($PostAds[$i]['Po_ExpireDate'])); ?></div>-->
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
                                        <div class="athleteBtn-group clearfix"> 
                                            <div class="btn-ads fl">
                                                <a href="javascript:void(0);" onclick="getCoachInfo(<?php echo $PostAds[$i]['UserID']; ?>,'<?php echo $PostAds[$i]['Po_Position']; ?>')">Respond to Ad</a>
         
                                            
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