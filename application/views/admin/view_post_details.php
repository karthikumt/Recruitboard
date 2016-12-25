<div class="col-md-12">
            <div class="people-item">
              <div class="media">
                <a class="pull-left" href="javascript:void(0);">
                  <?php if($user_info['Po_ImageName']!="") { ?>
                      <img src="<?php echo base_url().'register_images/coach_post_ad/small/'.$user_info['Po_ImageName']; ?>" alt=""  class="thumbnail media-object">
                   <?php } else { ?>
                    <img src="<?php echo base_url() ?>images/no_image.jpg" alt=""  class="thumbnail media-object">
                   <?php } ?> 
                </a>
                <div class="media-body">
                  <h4 class="person-name"><?php echo $user_info['Po_Username']; ?> |  <?php echo $user_info['Po_SchoolName']; ?> </h4>
                  <div class="text"><b>Expire on :</b><?php echo date('d M',strtotime($user_info['Po_ExpireDate'])); ?></div>
                  <div class="text"><b>Sport :</b>
				  <?php if($user_info['Po_SportName']!="0" && $user_info['Po_SportName']!=NULL){
					   $getdata=get_row_data('coll_cotch_spo','Coll_SpoID',$user_info['Po_SportName']); 
					   echo $getdata['Coll_SpoName'];
					} ?>
                   </div>
                   <div class="text"><b>Gender :</b>
				  <?php if($user_info['Po_GenderID']!="0" && $user_info['Po_GenderID']!=NULL ){
					   $getdata=get_row_data('coll_cotch_gender','Coll_GenderID',$user_info['Po_GenderID']); 
					   echo $getdata['Coll_GenderName'];
					} ?>
                   </div>
                  <div class="text"><b>Position :</b><?php echo substr($user_info['Po_Position'],0,15); ?></div>
                  <div class="text"><b>Height :</b>  <?php $height_info=get_row_data('coll_cotch_min_height','Coll_Min_HeightID',$user_info['Po_HeightID']);
                  $height_infos=get_row_data('coll_cotch_min_heightinche','Coll_Min_HeightIncheID',$user_info['Po_IncheID']); 
                	echo $height_info['Coll_Min_HeightName']." ".$height_infos['Coll_Min_HeightIncheName'] ; ?>
                   </div>
                  <div class="text"><b>GPA :</b>  
				  <?php $gpa_info=get_row_data('coll_cotch_min_gpa','Coll_Min_GpaID',$user_info['Po_GpaID']); 
                         echo $gpa_info['Coll_Min_GpaName']; ?>
                  </div>
                  <div class="text"><b>Weight :</b> 
                  	<?php $Gender_details=get_row_data('coll_cotch_max_height','Coll_Max_HeightID',$user_info['Po_WeightID']);
                       echo $Gender_details['Coll_Max_HeightName']; ?>
                  </div>
                  <div class="text"><b>Addtional Info :</b><?php echo $user_info['Po_Message']; ?></div>
                  <?php  
                  if(strtotime($user_info['Po_ExpireDate']) < time()) { ?>
                     <a href="<?php echo base_url();?>admin/post_ad/repost_post/<?php echo $user_info['PostID']; ?>" onclick="if(!confirm('Are you sure you want to RePost this Ad?')){return false;}">RePost</a>

                     <?php }
                  ?>
                </div>
              </div>
            </div>
          </div>
