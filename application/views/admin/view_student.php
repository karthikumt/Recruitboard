<div class="pageheader">
  <h2><i class="fa fa-table"></i> Admin List </h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>admin/">My RecuirtBorad</a></li>
      <li class="active">User List</li>
    </ol>
  </div>
</div>
<script language="javascript" type="text/javascript">
function change_status(NewsID,Status){
  $('#DisplaStat_'+NewsID).html('Loading...');
  $('#ActSpan_'+NewsID).html('Loading...');
  $.ajax({
    type: "POST",
    url: "<?php echo base_url();?>admin/student_listing/updatestatus/"+NewsID+"/"+Status,
    success : function(resp){
      var myarr = resp.split('^_^');
      $('#DisplaStat_'+NewsID).html(myarr[0]);
      $('#ActSpan_'+NewsID).html(myarr[1]);
    }
  }); 
}
</script>

<div class="contentpanel">
      <?php if($this->session->flashdata('successmessage')){?>  
          <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->session->flashdata('successmessage');?>
          </div>
          <?php } ?>  
          
          <?php if($this->session->flashdata('errormessage')){?>  
          <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo $this->session->flashdata('errormessage');?>
          </div>  
          <?php }?>  
    
    
  <div class="panel panel-default">
        
        <div class="panel-body">          
          
          
          <br />          
          
          <div class="table-responsive">
          
            <div class="progress" style="display:none;">
              <div class="progress-bar" role="progressbar" aria-valuenow="0"
              aria-valuemin="0" aria-valuemax="100" style="width:00%">
                0%
              </div>
            </div>          
          
          <table class="table" id="table2">
              <thead>
                 <tr>
                    <th>User ID</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Step</th>
                    <th>SportName</th>
                    <th>Graduation Year</th>
                     <th>Membership</th>
                    <th>AdminStatus</th>
                    <th>Action</th>                    
                 </tr>
              </thead>
              <tbody>
              
                 <?php for($i=0;$i<count($user_list);$i++){ 

                  $profile_link_url = base_url()."student_athlete_v?userid=".$user_list[$i]['UserID'];?> 
                     <tr class="gradeC">
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
                          
                              
                        </td>



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



                 <?php } ?>
                 
              </tbody>
           </table>
          </div>          
        </div>
      </div>
</div>
<style> .hideit{display:none;}</style>
<script src="<?php echo base_url();?>js/admin/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>js/admin/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url();?>js/admin/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/admin/modernizr.min.js"></script>
<script src="<?php echo base_url();?>js/admin/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>js/admin/toggles.min.js"></script>
<script src="<?php echo base_url();?>js/admin/retina.min.js"></script>
<script src="<?php echo base_url();?>js/admin/jquery.cookies.js"></script>

<script src="<?php echo base_url();?>js/admin/jquery.datatables.min.js"></script>
<script src="<?php echo base_url();?>js/admin/chosen.jquery.min.js"></script>

<script src="<?php echo base_url();?>js/admin/custom.js"></script>

<script>
  jQuery(document).ready(function() {
    
/*    jQuery('#table2').dataTable({
      "sPaginationType": "full_numbers",   
      "aaSorting": [[ 4, "desc" ]],
    "columnDefs": [{ type: 'date-dd-mmm-yyyy', targets: 0 }]
    });*/
  
    //sort data
  
  // Chosen Select
    jQuery("select").chosen({
      'min-width': '100px',
      'white-space': 'nowrap',
      disable_search_threshold: 10
    });
    
    // Delete row in a table
    jQuery('.delete-row').click(function(){
      var c = confirm("Continue delete?");
      if(c)
        jQuery(this).closest('tr').fadeOut(function(){
          jQuery(this).remove();
        });
        
        return false;
    });
    
    // Show aciton upon row hover
    jQuery('.table-hidaction tbody tr').hover(function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 1});
    },function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 0});
    });
  
	getTotlal('student');
	loadmore();  
  });
  var currentRecs = 0;
  var totalRecs = 0;
  var start = 1;
  function progressBar(){
	currentRecs += 100 ;
	var percent =   Math.floor((currentRecs / totalRecs)*100);
	$('.progress-bar').attr('aria-valuenow',percent) ;
	$('.progress-bar').css('width', percent +'%') ;
	$('.progress-bar').html(percent +'%') ;
  }
  function getTotlal(type){
	var url = '<?php echo base_url();?>admin/student_listing/total_user/'+type ;
	$.post(url)
	.done( function (d){
		totalRecs = parseInt (d) ;
		if(totalRecs>100) {
			$('.progress').show();  
			progressBar();			
		}
	});
	
	}
  function loadmore(){
	  	console.log(start)
		var url = '<?php echo base_url();?>admin/student_listing/view_student_more/'+start ;
		start ++ ;
		console.log(url) ;
		$.post(url) 
		.done(function (d){
			if(d!=='end'){ 			
 				$('#table2 tbody').append(d);
				progressBar();	
				loadmore(start) ;
			}else{
				$('.progress').hide(); 
				$('.hideit').show();
				var dt = $('#table2').DataTable({
						"sPaginationType": "full_numbers",   
						"aaSorting": [[ 4, "desc" ]],
						"columnDefs": [{ type: 'date-dd-mmm-yyyy', targets: 0 }]
						});			
			}
		})
	
	}  
</script>
