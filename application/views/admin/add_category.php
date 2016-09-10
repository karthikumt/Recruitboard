<?php	
	if(!empty($category_info)){
			$Cat_ID = $category_info['Cat_ID'];
			$Cat_Name = $category_info['Cat_Name']; 
	
			$Status	= $category_info['Status']; 		
	}else{
	
			$Cat_ID = "";
			$Cat_Name = ""; 
	
			$Status	= ""; 	
	}
?>    


<div class="pageheader">
  <h2><i class="fa fa-pencil"></i> Add or Edit Category </h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>admin/">MyRecruitBoard</a></li>
      <li class="active">Add or Edit Category</li>
    </ol>
  </div>
</div>

<div class="contentpanel">
     <div class="row"> 
        <div class="col-md-6">
          
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
            
          <form id="basicForm" method="post" action="<?php echo base_url();?>admin/category_list/update_category/"  class="form-horizontal">
          <input type="hidden" name="Cat_ID" value="<?php echo $Cat_ID;?>" />
          <input type="hidden" name="type" value="action" />
          <input type="hidden" name="a" value="AddEvent" />
          <div class="panel panel-default">
              <div class="panel-heading">                
                <h4 class="panel-title">Add Details</h4>                
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Category Name </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"  name="Cat_Name" id="Cat_Name" value="<?php echo $Cat_Name;?>" required />
                    </div>
                    </div>
        
                    <div class="form-group">
                     <label class="col-sm-3 control-label">Status </label>
                      <div class="col-sm-9">
                    <select name="Status" class="form-control">
                    <option <?php if(!empty($category_info)){ if($category_info['Status']=='1'){?> selected="selected" <?php  }} ?>value="1">Active</option>
                    <option <?php if(!empty($category_info)){if($category_info['Status']=='0'){?> selected="selected" <?php  } }?> value="0">Inactive</option>
                    </select>
                  </div>
                </div>
           
              
           
                
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col-sm-9 col-sm-offset-3">
                
                    <button type="submit" name="Savebutton" value="Save" class="btn btn-primary">Save</button>                    
                    <button  type="button" class="btn btn-default" onclick="window.location.href='<?php echo base_url();?>admin/category_list'">Cancel</button>
                  </div>
                </div>
              </div>
            
          </div>
          </form>          
          
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

<script src="<?php echo base_url();?>js/admin/jquery.validate.min.js"></script>

<script src="<?php echo base_url();?>js/admin/custom.js"></script>

<script language="javascript" type="text/javascript">
jQuery(document).ready(function(){
  jQuery("#basicForm").validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },

    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  });
});
</script>