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
          <table class="table" id="table2">
              <thead>
                 <tr>
                    <th>User ID</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Step</th>
                    <th>AdminStatus</th>
                    <th>Action</th>                    
                 </tr>
              </thead>
              <tbody>
              
                 <?php for($i=0;$i<count($user_list);$i++){ ?> 
                     <tr class="gradeC">
                        <td><?php echo $user_list[$i]['UserID']; ?></td>
                        <td><?php echo $user_list[$i]['FirstName']; ?> <?php echo $user_list[$i]['LastName']; ?></td>
                        <td><?php echo $user_list[$i]['UserEmail']; ?></td>
                        <?php if($user_list[$i]['Step']==1){
									$Step = "Register";
								}if($user_list[$i]['Step']==2){
									$Step = "User Information";
								}else if($user_list[$i]['Step']==3){
									$Step = "Video";
								}else {
									$Step = "Thank You";
								}
							
                        ?>
                        <td><?php echo $Step; ?></td>
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
                 <?php } ?>
                 
              </tbody>
           </table>
          </div>          
        </div>
      </div>
</div>

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
    
    jQuery('#table2').dataTable({
      "sPaginationType": "full_numbers",	 
      "aaSorting": [[ 4, "desc" ]],
	  "columnDefs": [{ type: 'date-dd-mmm-yyyy', targets: 0 }]
    });
	
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
  
  
  });
</script>
