<div class="pageheader">
  <h2><i class="fa fa-table"></i> Admin List </h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>admin/">MyRecruitboard</a></li>
      <li class="active">Admin List</li>
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
				  <button class="btn btn-primary" onclick="window.location.href='<?php echo base_url();?>admin/add_admin/add_user'">Add Admin</button>				  
		  </div>
          <br />          
          
          <div class="table-responsive">
          <table class="table" id="table2">
              <thead>
                 <tr>
                    <th>Admin ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>User Name</th>
                    <th>Admin Profile Picture</th>
                    <!--<th>Type</th>      -->              
                    <th>Action</th>                    
                 </tr>
              </thead>
              <tbody>
              
                 <?php for($i=0;$i<count($user_list);$i++){ ?> 
                     <tr class="gradeC">
                        <td><?php echo $user_list[$i]['AdminID']; ?></td>
                        <td><?php echo $user_list[$i]['FirstName']; ?> <?php echo $user_list[$i]['LastName']; ?></td>
                        <td><?php echo $user_list[$i]['Email']; ?></td>
                        <td><?php echo $user_list[$i]['UserName']; ?></td>
                        <td class="center"><img src="<?php echo base_url();?>admin_images/<?php echo $user_list[$i]['AdminProfilePicture']; ?>" height="50" width="50" /></td>
                        <!--<td><?php //echo $user_list[$i]['AdminType']; ?></td>-->
                        <td class="center">                        	
                            <?php //if($_SESSION['FmaudioAdminLoginID']==$user_list[$i]['AdminID'] || $_SESSION['KiwiAdminType']=='super-admin'){ ?>
                        		<a href="<?php echo base_url();?>admin/add_admin/edit_user/<?php echo $user_list[$i]['AdminID']; ?>">Edit</a> 
                            <?php //} ?>
                            <?php if($user_list[$i]['AdminID']!=get_admin_id()){ ?>
                            | <a href="<?php echo base_url();?>admin/add_admin/delete_admin/<?php echo $user_list[$i]['AdminID']; ?>" onclick="if(!confirm('Delete It?')){return false;}">Delete</a>
                                <?php } ?>
                            
                            
                            
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
