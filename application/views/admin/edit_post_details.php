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
                  <form id="basicForm" method="post" class="form-horizontal form-bordered" action="<?php echo base_url() ?>admin/post_ad/edit_post/<?php echo$user_info['PostID'];?>">

                  <h4 class="person-name"><a href="<?php echo  $user_info['Coach_TeamId'];?>" target="_blank"><?php echo $user_info['Po_Username']; ?> |  <?php echo $user_info['Po_SchoolName']; ?> </a></h4>
                  <div class="text"><b>Expire on :</b><?php echo date('d M',strtotime($user_info['Po_ExpireDate'])); ?></div>
                  <div class="text"><b>Sport :</b>
                  <select id="sport" name="sport">
                    <?php  
                      foreach($sport_master as $key=>$value){
                        ?>
                        <option value="<?php  echo $value['Coll_SpoID'];?>" <?php if($user_info['Po_SportName']!="0" && $user_info['Po_SportName']!=NULL && $value['Coll_SpoID']==$user_info['Po_SportName']){echo 'selected="selected"';}?>><?php echo $value['Coll_SpoName'];?></option>
                        <?php
                      }
                    ?>
                   </select>
                   </div>

                   <div class="text"><b>Gender :</b>
                   <select id="gender" name="gender">
                    <?php  
                      foreach($gender_master as $key=>$value){
                        ?>
                        <option value="<?php  echo $value['Coll_GenderID'];?>" <?php if($user_info['Po_GenderID']!="0" && $user_info['Po_GenderID']!=NULL && $value['Coll_GenderID']==$user_info['Po_GenderID']){echo 'selected="selected"';}?>><?php echo $value['Coll_GenderName'];?></option>
                        <?php
                      }
                    ?>
                   </select>
                   </div>
                  <div class="text"><b>Position :</b><input id="position" name="position" type="text" value="<?php echo substr($user_info['Po_Position'],0,15); ?>"></input></div>
                  
                  <div class="text"><b>Height :</b>  
                  <select id="height_feet" name="height_feet">
                    <?php  
                      foreach($height_feet_master as $key=>$value){
                        ?>
                        <option value="<?php  echo $value['Coll_Min_HeightID'];?>" <?php if($user_info['Po_HeightID']!="0" && $user_info['Po_HeightID']!=NULL && $value['Coll_Min_HeightID']==$user_info['Po_HeightID']){echo 'selected="selected"';}?>><?php echo $value['Coll_Min_HeightName'];?></option>
                        <?php
                      }
                    ?>
                   </select>
                  <select id="height_inch" name="height_inch">
                    <?php  
                      foreach($height_inch_master as $key=>$value){
                        ?>
                        <option value="<?php  echo $value['Coll_Min_HeightIncheID'];?>" <?php if($user_info['Po_IncheID']!="0" && $user_info['Po_IncheID']!=NULL && $value['Coll_Min_HeightIncheID']==$user_info['Po_IncheID']){echo 'selected="selected"';}?>><?php echo $value['Coll_Min_HeightIncheName'];?></option>
                        <?php
                      }
                    ?>
                   </select>
                   </div>
                  <div class="text"><b>GPA :</b>  
                  <select id="gpa" name="gpa">
                    <?php  
                      foreach($gpa_master as $key=>$value){
                        ?>
                        <option value="<?php  echo $value['Coll_Min_GpaID'];?>" <?php if($user_info['Po_GpaID']!="0" && $user_info['Po_GpaID']!=NULL && $value['Coll_Min_GpaID']==$user_info['Po_GpaID']){echo 'selected="selected"';}?>><?php echo $value['Coll_Min_GpaName'];?></option>
                        <?php
                      }
                    ?>
                   </select>
                  </div>
                  <div class="text"><b>Weight :</b> 
                  <select id="weight" name="weight">
                    <?php  
                      foreach($weight_master as $key=>$value){
                        ?>
                        <option value="<?php  echo $value['Coll_Max_HeightID'];?>" <?php if($user_info['Po_WeightID']!="0" && $user_info['Po_WeightID']!=NULL && $value['Coll_Max_HeightID']==$user_info['Po_WeightID']){echo 'selected="selected"';}?>><?php echo $value['Coll_Max_HeightName'];?></option>
                        <?php
                      }
                    ?>
                    </select>
                  </div>
                  <div ><b>Addtional Info :</b>
                    <input type="textarea" id="additionInfo" name="additionInfo" value="<?php echo $user_info['Po_Message']; ?>">
                    </input>
                  </div>
                  <?php  
                  if(strtotime($user_info['Po_ExpireDate']) < time()) { ?>
                     <a href="<?php echo base_url();?>admin/post_ad/repost_post/<?php echo $user_info['PostID']; ?>" onclick="if(!confirm('Are you sure you want to RePost this Ad?')){return false;}">RePost</a>

                     <?php }
                  ?>
                  <input type="submit" value="submit"></input>
                  </form>
                </div>
              </div>
            </div>
          </div>
