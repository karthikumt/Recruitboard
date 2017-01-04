<div class="pageheader">
  <h2><i class="fa fa-table"></i> Ad List </h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>admin/">MyRecruitboard</a></li>
      <li class="active">Ad List</li>
    </ol>
  </div>
</div>


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
          
          <div class="buttoncss">
								  
		  </div>
          <br />          
          
          <div class="table-responsive">
          <table class="table" id="table2">
              <thead>
                 <tr>
                    <th>PostID</th>
                    <th>UserName</th>
                    <th>Sport Name</th>
                    <th>Add Date</th>
                    <th>Expire Date</th>
                    <!--<th>Type</th>      -->              
                    <th>Action</th>                    
                 </tr>
              </thead>
              <tbody>
                 <?php for($i=0;$i<count($user_list);$i++){ ?> 
                     <tr class="gradeC">
                        <td><?php echo $user_list[$i]['PostID']; ?></td>
                        <td><a  href="<?php echo  $user_list[$i]['Coach_TeamId'];?>" target="_blank"><?php echo $user_list[$i]['Po_Username']; ?></a></td>
                        <td><?php echo $user_list[$i]['Po_Sport']; ?></td>
                        <td><?php echo date('Y-m-d',strtotime($user_list[$i]['Po_AddDate'])); ?></td>
                        <td><?php echo date('Y-m-d',strtotime($user_list[$i]['Po_ExpireDate'])); ?></td>
                        <td class="center">                        	
                            <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/post_ad/view_post/<?php echo $user_list[$i]['PostID']; ?>">View Details</a>
							|	
                             <a href="<?php echo base_url();?>admin/post_ad/delete_post/<?php echo $user_list[$i]['PostID']; ?>" onclick="if(!confirm('Are you sure you want to delete this Ad?')){return false;}">Delete</a>
                                                     </td>                        
                     </tr>
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
<script src="<?php echo base_url();?>js/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url();?>js/jquery.fancybox-thumbs.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>css/jquery.fancybox.css" type="text/css" media="screen" />

<link rel="stylesheet" href="<?php echo base_url();?>css/jquery.fancybox-thumbs.css" type="text/css" media="screen" />

<script>
$(document).ready(function() {
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});

</script>	

