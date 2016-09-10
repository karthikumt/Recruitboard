<div class="pageheader">
  <h2><i class="fa fa-table"></i> Slider List </h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>admin/">MyRecruitBoard</a></li>
      <li class="active">Slider List</li>
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
				  <button class="btn btn-primary" onclick="window.location.href='<?php echo base_url();?>admin/slider_list/add_slider'">Add Slider</button>				  
		  </div>
          <br />          
          
          <div class="table-responsive">
          <table class="table" id="table2">
              <thead>
                 <tr>
                    <th>Slider ID</th>
                    <th>Heading</th>
                    <th>Sub Heading</th>
                    <th>Image</th>
                    <th>Tooltip</th>
                 
                    <th>AddTime</th>
                    <!--<th>Type</th>      -->              
                    <th>Action</th>                    
                 </tr>
              </thead>
              <tbody>
              
                 <?php for($i=0;$i<count($slider_info);$i++){ ?> 
                     <tr class="gradeC">
                        <td><?php echo $slider_info[$i]['SliderID']; ?></td>
                        <td><?php echo $slider_info[$i]['Slider_Heading']; ?> </td>
                        <td><?php echo $slider_info[$i]['Slider_SubHeading']; ?> </td>
                        <td class="center"><img src="<?php echo base_url();?>home_slider/small/<?php echo $slider_info[$i]['Slider_Image']; ?>" height="50" width="50" /></td>
                        <td><?php echo $slider_info[$i]['Slider_ToolTip']; ?></td>
                     
                         <td><?php echo date('d-M-Y',strtotime( $slider_info[$i]['AddDate'])); ?></td>
                       
                        <td class="center">                        	
                           
                        		<a href="<?php echo base_url();?>admin/slider_list/edit_slider/<?php echo $slider_info[$i]['SliderID']; ?>">Edit</a> 
                           
                            | <a href="<?php echo base_url();?>admin/slider_list/delete_slider/<?php echo $slider_info[$i]['SliderID']; ?>" onclick="if(!confirm('Delete It?')){return false;}">Delete</a>
                                <?php } ?>
                            
                            
                            
                        </td>                        
                     </tr>
               
                 
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
