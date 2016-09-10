<?php 
	if(count($user_list)){
for($i=0;$i<count($user_list);$i++){ 

                  $profile_link_url = base_url()."student_athlete_v?userid=".$user_list[$i]['UserID'];?> 
                     <tr class="gradeC hideit">
                        <td><?php echo $user_list[$i]['UserID']; ?></td>
                        <td><a href="<?php echo $profile_link_url; ?>" target="_blank"><?php echo $user_list[$i]['FirstName']; ?> <?php echo $user_list[$i]['LastName']; ?></a></td>
                        <td><?php echo $user_list[$i]['UserEmail']; ?></td>
                        <?php if($user_list[$i]['Step']=='1'){ $step = 'Register'; } ?>
                        <?php if($user_list[$i]['Step']=='2'){ $step = 'User Information'; } ?>
                        <?php if($user_list[$i]['Step']=='2a'){ $step = 'Sport'; } ?>
                        <?php if($user_list[$i]['Step']=='4'){ $step = 'Academic'; } ?>
                        <?php if($user_list[$i]['Step']=='5a'){ $step = 'Biometric'; } ?>
                        <?php if($user_list[$i]['Step']=='7'){ $step = 'Video'; } ?>
                        <?php if($user_list[$i]['Step']=='8'){ $step = 'Payment'; } ?>
                        <?php if($user_list[$i]['Step']=='10'){ $step = 'Need to Develope'; } ?>
                        <?php if($user_list[$i]['Step']=='11'){ $step = 'Thank You'; } ?>
                        <td><?php echo $step; ?></td>
                        <td><?php $data=get_sport_detail($user_list[$i]['UserID']); 
                if($data['Stu_SportID']!="")
                {
                  $sports=get_row_data('stu_athlete_sport','SportID',$data['Stu_SportID']);
                  echo $sports['SportName'];
                }
            ?>
                        </td>
                        <td>
                        <?php
                            if($data['Stu_ClassID']!=""){
                  $sports=get_row_data('stu_athlete_class','ClassID',$data['Stu_ClassID']);
                  echo $sports['ClassName'];
                } 
            ?>
            </td> 
                        


                         <td> <?php
                        if($user_list[$i]['PaymentType']=="3" || $user_list[$i]['PaymentType']=="2" || $user_list[$i]['PaymentType']=="1"){
                            
                          if($user_list[$i]['PaymentType']=="3"){
                            $userpaytype = "Lifetime Membership";
                          }else if($user_list[$i]['PaymentType']=="2"){
                            $userpaytype = "Yearly Membership";
                          }else if($user_list[$i]['PaymentType']=="1"){
                            $userpaytype = "Monthly Membership";
                          }
                            $membership = "Upgraded";
                        }else{
                            $userpaytype = "None";
                            $membership = "Free";
                        }
                        //echo $userpaytype;
                        ?>
                            
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal<?php echo $user_list[$i]['UserID'];?>">View</button>
                            
                        </td>   







                        <td><?php if($user_list[$i]['AdminStatus']==0) $DispalStat = 'InActive'; else  $DispalStat = 'Active'; ?>
                        <span id="DisplaStat_<?php echo $user_list[$i]['UserID']; ?>"><?php echo $DispalStat; ?></span>
                        </td>
                        <td class="center">                                                   
                           <?php if($user_list[$i]['AdminStatus']=='1'){ ?>                                
                                <span id="ActSpan_<?php echo $user_list[$i]['UserID']; ?>"><a href="javascript:void(0);" onclick="change_status(<?php echo $user_list[$i]['UserID']; ?>,0);">In-active</a></span>
                            <?php }else{ ?>
                                <span id="ActSpan_<?php echo $user_list[$i]['UserID']; ?>"><a href="javascript:void(0);" onclick="change_status(<?php echo $user_list[$i]['UserID']; ?>,1);">active</a></span>
                            <?php } ?>
                          

<div id="myModal<?php echo $user_list[$i]['UserID'];?>" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">View Details</h4>
                                </div>
                                <div class="modal-body nopadding">
                                  <div class="panel panel-default">
                                    <div class="panel-body">
                                      <div class="row">
                                        <div class="col-sm-3 col-md-6" >
                                         Email <span class="pull-right">:</span>
                                        </div>
                                        <div class="col-sm-9 col-md-6" >
                                          <?php echo $user_list[$i]['UserEmail']; ?>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-3 col-md-6" >
                                          Membership <span class="pull-right">:</span>
                                        </div>
                                        <div class="col-sm-9 col-md-6" >
                                          <?php echo $membership; ?>
                                        </div>
                                      </div>
                                      <?php if($user_list[$i]['PaymentType']=="3" || $user_list[$i]['PaymentType']=="2" || $user_list[$i]['PaymentType']=="1"){  ?>
                                      <div class="row">
                                        <div class="col-sm-3 col-md-6" >
                                          Payment Type <span class="pull-right">:</span>
                                        </div>
                                        <div class="col-sm-9 col-md-6" >
                                          <?php echo $userpaytype; ?>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-3 col-md-6" >
                                          Payment Date <span class="pull-right">:</span>
                                        </div>
                                        <div class="col-sm-9 col-md-6" >
                                          <?php echo $user_list[$i]['PaymentDate']; ?>
                                        </div>
                                      </div>
                                      <?php } ?>
                                    </div>
                                  </div>
                                 
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>

                            </div>
                          </div>
                                                        
                        </td>
						</tr>


                         



<?php } } else echo 'end';?>